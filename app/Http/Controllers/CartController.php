<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    // Constructor

    // public function __construct()
    // {
    //     if(!\Session::has('cart')) \Session::put('cart', array());
    // }

    // Muestra el carrito.
    public function show()
    {
       if(\Auth::check()){
           $cart = \Auth::user()->getProductos()->get();            
           return view('cart/cart',compact('cart'));
       }else{
           return view ('/');
       }
        
    }

   

    // Agrega un producto al carrito.
    public function add(Request $req, $id)
    {
        $user = \Auth::user();

        $cart = new Cart;
        
        $cart->user_id = $user->id;
        $cart->quantity = $req->quantity;
        $cart->product_id = $id;

        $cart->save();

        return redirect('cart/show');
    }

    // Borra un producto del carrito.
    public function delete(Product $id)
    {

    }

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





