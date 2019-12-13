<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.admin', compact('products', 'brands', 'categories'));

    }
    
    
    public function list()
    {
        $products = Product::paginate(6);
        return view('productsList', compact('products'));
    }

    public function detail($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        return view('/productDetail', compact('products', 'categories'));
    }

    // public function show($id)
    // {
    //     $movie = Movie::find($id);
    //     $actors = $movie->actors;

    //     $actoresOrdenados = $actors->sortBy('first_name');

    //     //aca lo recorro con un foreach sencillo
    //     foreach ($actoresOrdenados as $actor) {
    //         $arrayIds[] = $actor->id;
    //     }

    //     //aqui voy a usar un map para devolver una collection
    //     $arrayIds = $actoresOrdenados->map(function ($actor) {
    //         return $actor->id;
    //     });

    //     $actors = Actor::whereNotIn('id', $arrayIds)->get()->sortBy('first_name');
    //     //$actors = Actor::all()->sortBy('first_name');
    //     //dd($movie->actors);
    //     return view('movies.show')
    //         ->with([
    //             'pelicula' => $movie,
    //             'actores' => $actors,
    //             'actoresOrdenados' => $actoresOrdenados,
    //         ]);
    // }




    public function new()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.addProduct', compact('brands', 'categories'));
    }

    public function listHome()
    {
        $products = Product::paginate(3);
        return view('index', compact('products'));
    }

    // public function menuNavBar()
    // {
    //     $categoriesmenu = Category::all();

    //     return view('index', compact('categoriesmenu'));

    // }


    // public function categoryList()
    // {
    //     $categories = Category::all();
    //     return 


    // }

    public function addProduct(Request $req)
    {

        $rules = [
            'name' => 'required|string|min:2',
            'stock' => 'integer|min:0|max:1000000',
            'price' => 'decimal|min:0',
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
            'decimal' => 'Complete con un número',
            'required' => 'Este campo es requerido',
            'min' => 'Al menos debe tener :min cantidad',
            'max' => 'Hasta un maximo de :max'
        ];

        $this->validate($req, $rules, $messages);

        $prod = new Product;

        $fileRouteDetail = $req->file('image_detail')->store('public');
        $nameFileDetail = basename($fileRouteDetail);

        $fileRouteHome = $req->file('image_home')->store('public');
        $nameFileHome = basename($fileRouteHome);

        $prod->name = $req->name;
        $prod->stock = $req->stock;
        $prod->price = $req->price;
        $prod->description = $req->description;
        $prod->specifications = $req->specifications;
        $prod->brand_id = $req->brand_id;
        $prod->category_id = $req->category_id;
        $prod->image_detail = $nameFileDetail;
        $prod->image_home = $nameFileHome;

        $prod->save();

        return redirect('/admin');
    }

    
    public function edit($id)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $prodEdit = Product::find($id);
        return view('admin.editProduct', compact('brands', 'categories'))->with(['products' => $prodEdit]);
    }

    public function update($id, Request $req)
    {
        $this->validate($req, 
            [
                'name' => 'required|string|min:2',
                'stock' => 'integer|min:0|max:1000000',
                'price' => 'integer|min:0',
                'description' => 'required|string|min:1',
                'specifications' => 'required|string|min:1',
                'brand_id' => 'required',
                'category_id' => 'required',
                'image_detail' => 'required', 'image', 'between:10,10240',
                'image_home' => 'required', 'image', 'between:10,10240',
            ],
            [
                'name.required' => 'El nombre del producto es necesario',
                'name.string' => 'El nombre del producto debe tener letras',
                'name.min' => 'El nombre del producto debe tener al menos 2 letras',
                'integer' => 'Complete con un número',
                'required' => 'Este campo es requerido',
                'min' => 'Al menos debe tener :min cantidad',
                'max' => 'Hasta un maximo de :max'
            ]
        );
        

            $fileRouteDetail = $req->file('image_detail')->store('public');
            $newFileDetail = basename($fileRouteDetail);

            $fileRouteHome = $req->file('image_home')->store('public');
            $newFileHome = basename($fileRouteHome);
    
            $prodEdited = Product::find($id);
            $prodEdited->name = $req->name;
            $prodEdited->stock = $req->stock;
            $prodEdited->price = $req->price;
            $prodEdited->description = $req->description;
            $prodEdited->specifications = $req->specifications;
            $prodEdited->brand_id = $req->brand_id;
            $prodEdited->category_id = $req->category_id;
            $prodEdited->image_detail = $newFileDetail;
            $prodEdited->image_home = $newFileHome;

            // if ($req->file('image_detail') && $req->file('image_home')) {
            
            // if ($prodEdited->image_detail && $prodEdited->image_detail != 'default.png') {
            //     Storage::disk('public')->delete($prodEdited->image_detail);
            // } elseif ($prodEdited->image_home && $prodEdited->image_home != 'default.png') {
            //     Storage:disk('public')->delete($prodEdited->image_home);
            // }

            $prodEdited->save();

            return redirect('/admin');
    }

}


