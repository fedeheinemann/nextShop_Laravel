<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        return view('productsList');
    }

    public function detail($id){
        $vac = compact('id');
        return view('productDetail', $vac);
    }

    public function newProduct(Request $req){

        $rules = [
            'name' => 'required|string|min:2',
            'stock' => 'numeric|min:0|max:1000',
            'price' => 'integer|min:0',
            'description' => 'required|string|min:1',
            'specifications' => 'required|string|min:1',
            'brand_id' => 'required',
            'category_id' => 'required',
            'image_detail' => 'required', 'image', 'between:10,10240',
            'image_home' => 'required', 'image', 'between:10,10240',


        ];

        $messages = [
            'name.required' => 'El nombre del producto es necesario',
            'name.string' => 'El nombre del producto debe tener letras',
            'name.min' => 'El nombre del producto al menos debe tener 2 letras',
            'numeric' => 'Debe ser un numero, con separador decimal punto',
            'integer' => 'Debe ser un numero',
            'required' => 'Es requerido',
            'min' => 'Al menos debe tener :min cantidad',
            'max' => 'Hasta un maximo de :max'
        ];

        $this->validate($req, $rules, $messages);

        $prod = new Product;

        $prod->name = $req->name;
        $prod->stock = $req->stock;
        $prod->price = $req->price;
        $prod->description = $req->description;
        $prod->release_date = $req->specifications;
        $prod->brand_id = $req->brand_id;
        $prod->category_id = $req->category_id;

        $prod->save();

        return redirect('/');
    }


    }







}
