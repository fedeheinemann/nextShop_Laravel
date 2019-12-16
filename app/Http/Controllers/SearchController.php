<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Brand;
use App\Category;

class SearchController extends Controller
{
    // public function buscador(Request $request)
    // {
    //     $busquedas = Product::where("name", "like", '%' . $request->busqueda . '%')->take(6)->get();
    //     $busqueda = $request->busqueda;
    //     return view('search', compact('busquedas', 'busqueda'));
    // }

    // public function buscadorApi($busqueda)
    // {
    //     $busquedas = Product::where("name", "like", '%' . $busqueda . '%')->take(6)->get();

    //     return json_encode($busquedas);
    // }
}
