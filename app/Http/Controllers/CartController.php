<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;
use App\User;

class CartController extends Controller
{
    // Muestra el carrito.
    public function show()
    {
       if(\Auth::check())
       {
           $cart = \Auth::user()->getProducts()->get();            
           return view('cart/cart', compact('cart'));
       } else 
       {
           return redirect('/');
       }
        
    }

    // Agrega un producto al carrito.
    public function add(Request $req, $id)
    {
        $user = \Auth::user();

        // Verifico si el producto ya está en la lista
        $product = $user->getProducts->first(function (Product $product) use ($id)
        {
        return $id == $product->id;
        });

        // Si está en la lista no lo agrego y le aviso al usuario
        if ($product) {
            return redirect('cart/show')
                ->with('status', 'El producto ya ha sido agregado')
                ->with('operation', 'danger');
        }

        
        $cart = new Cart;
        
        $cart->user_id = $user->id;
        
        $req->quantity ? $cart->quantity = $req->quantity : $cart->quantity = 1;
        
        $cart->product_id = $id;
    
        $cart->save();

        return redirect('cart/show')
            ->with('status', 'El producto ha sido agregado a su carrito')
            ->with('operation', 'success');
    }

    // Borra un producto del carrito.
    public function delete(Request $req)
    {
        //Busca el producto por su id
        $prod = Cart::where('user_id', Auth::user()->id)->where('product_id',$req->id)->get()->first();

        //Elimina el producto de la bd
        $prod->delete();

        return redirect('cart/show')
            ->with('status', 'El producto ha sido borrado a su carrito')
            ->with('operation', 'warning');
    }

    // Actualiza el carrito.
    public function update(Request $r, $id)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->get()->first();
        $cart->quantity = $r->quantity;
        
        $cart->save();
        return redirect('cart/show');
    }


    // Vaciar el carrito.
    public function trash()
    {
       $cart = Cart::where('user_id',Auth::user()->id);
       $cart->delete();

       return redirect('cart/show');
    }




    // Obtener el total a pagar.



    // Actualizar el stock de productos.












}





