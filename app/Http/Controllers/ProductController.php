<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\ElseIf_;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::orderBy('name')->paginate(10); 
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.admin', compact('products', 'brands', 'categories'));
    }
    
    
    public function listCategory($id)
    {
        $cat = Category::find($id);
        $products = Product::where('category_id', '=', $cat->id)->paginate(6);

        $brands = Brand::all();

        // foreach ($brands as $brand) {
        //     // dd($brand->productsBrand()->get(), $brand->name);
        // }

        return view('productsList', compact('products', 'cat'));
    }

    public function detail($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();

        return view('/productDetail', compact('products', 'categories', 'brands'));
    }

    public function new()
    {
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('admin.addProduct', compact('brands', 'categories'));
    }

    public function listHome()
    {
        $products = Product::paginate(3);
        return view('index', compact('products'));
    }

    public function addProduct(Request $req)
    {
        $rules = [
            'name' => 'required|string|min:2',
            'stock' => 'integer|min:0|max:1000000',
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
        

            $prodEdited = Product::find($id);

            $prodEdited->name = $req->name;
            $prodEdited->stock = $req->stock;
            $prodEdited->price = $req->price;
            $prodEdited->description = $req->description;
            $prodEdited->specifications = $req->specifications;
            $prodEdited->brand_id = $req->brand_id;
            $prodEdited->category_id = $req->category_id;
            
            $imageHome = $prodEdited->image_home;
            if ($req->file('image_home')) {
                $imageHome = $req->file('image_home')->store('public');
                $imageHome = basename($imageHome);
            }

            $prodEdited->image_home = $imageHome;

            $imageDetail = $prodEdited->image_detail;
            if ($req->file('image_detail')) {
                $imageDetail = $req->file('image_detail')->store('public');
                $imageDetail = basename($imageDetail);
            }

            $prodEdited->image_detail = $imageDetail;
              
            $prodEdited->save();

            return redirect('/admin');
    }

    // Borra un producto.
    public function delete($id)
    {
        //Busca el producto por su id
        $prod = Product::find($id);

        //Borra las imágenes
        $image_home_path = storage_path('app/public/') . $prod->image_home;
        if ($prod->image_home && file_exists($image_home_path)) {
            unlink($image_home_path);
        }

        $image_detail_path = storage_path('app/public/') . $prod->image_detail;
        if ($prod->image_detail && file_exists($image_detail_path)) {
            unlink($image_detail_path);
        }
        
        //Borra el producto del carrito de compras
        $cart = Cart::where('product_id','=', $id);
        $cart->delete();


        $prod->delete();

        return redirect('/admin')
            ->with('status', 'Producto eliminado')
            ->with('operation', 'warning');

    }

}


