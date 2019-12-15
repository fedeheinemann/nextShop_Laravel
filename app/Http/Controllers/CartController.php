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
        $product = $user->getProducts->first(function (Product $product) use ($id){
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
        $cart->quantity = $req->quantity;
        $cart->product_id = $id;

        $cart->save();

        return redirect('cart/show')
            ->with('status', 'El producto ha sido agregado a su carrito')
            ->with('operation', 'danger');
    }

    // Borra un producto del carrito.
    public function delete(Request $req)
    {
        //Busca el producto por su id
        $prod = Product::find($req);

        //Elimina los productos elegidos
        $prod->getProducts->forEach(function (Cart $cart) {
            $cart->product_id = null;
            $cart->save();
        });

        // $user = User::
        // $user->getProducts->forEach(function (Cart $cart) {
        //     $cart->user_id = null;
        //     $cart->save();
        // });

        //Elimina el producto de la bd
        $prod->delete();

        return redirect('cart/show')
            ->with('status', 'El producto ha sido borrado a su carrito')
            ->with('operation', 'warning');
    }


    // public function delete (Request $req)
    // {
    //     $prod = Cart::find($req->id);
    //     $prod->delete();

    //     return redirect('cart/show')
    //     ->with('status', 'El producto ha sido borrado a su carrito')
    //     ->with('operation', 'warning');
    // }







    // Actualiza el carrito.
    public function update(Product $id, $quantity)
    {

    }


    // Vaciar el carrito.
    public function trash()
    {
       
    }


    // Obtener el total a pagar.



    // Actualizar el stock de productos.












}





