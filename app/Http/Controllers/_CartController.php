<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    // Constructor

    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    // Muestra el carrito.
    public function show()
    {
        $cart = \Session::get('cart');
        
        return view('cart/cart', compact('cart'));
    }

    // Agrega un producto al carrito.
    public function add(Product $id)
    {
        $cart = \Session::get('cart');
        $id->quantity = 1;
        $cart[$id->id] = $id;
        \Session::put('cart', $cart);

        return redirect('cart/show');
    }

    // Borra un producto del carrito.
    public function delete(Product $id)
    {
        $cart = \Session::get('cart');
        unset($cart[$id->id]);
        \Session::put('cart', $cart);

        return redirect('cart/show'); 
    }

    // Actualiza el carrito.
    public function update(Product $id, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$id->id]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect('cart/show');
    }


    // Vaciar el carrito.
    public function trash()
    {
        \Session::forget('cart');
        return redirect('cart/show');
    }


    // Obtener el total a pagar.



    // Actualizar el stock de productos.












}





