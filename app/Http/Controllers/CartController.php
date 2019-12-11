<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    // public function index()
    // {
    //     if(Auth::user()){
    //         $products = Cart::where('id_user', Auth::user()->id)->get();
    //         return view('cart.indexCart', compact('products'));
    //     }
    //         // return redirect('/');
    // }

    public function index(){
       
        return view('cart.indexCart');
    }








}





