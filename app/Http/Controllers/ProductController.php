<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Category;
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

    public function new(){
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin/addProduct', compact('brands', 'categories'));

    }

    public function addProduct(Request $req){

        $rules = [
            'name' => 'required|string|min:2',
            'stock' => 'integer|min:0|max:100000',
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
            'name.min' => 'El nombre del producto debe tener al menos 2 letras',
            // 'numeric' => 'Debe ser un número con separador decimal punto',
            'integer' => 'Complete con un número',
            'required' => 'Este campo es requerido',
            'min' => 'Al menos debe tener :min cantidad',
            'max' => 'Hasta un maximo de :max'
        ];

        $this->validate($req, $rules, $messages);

        $prod = new Product;

        $prod->name = $req->name;
        $prod->stock = $req->stock;
        $prod->price = $req->price;
        $prod->description = $req->description;
        $prod->specifications = $req->specifications;
        $prod->brand_id = $req->brand_id;
        $prod->category_id = $req->category_id;
        $prod->image_detail = $req->image_detail;
        $prod->image_home = $req->image_home;

        $prod->save();

        return redirect('/');
    }


}
