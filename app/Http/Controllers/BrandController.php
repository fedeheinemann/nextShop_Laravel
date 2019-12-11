<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    // public function index()
    // {
    //     $brands = Brand::paginate(10);
    //     $brandsOrdered = $brands->sortBy('name');
    //     return view('admin.indexBrand', compact('brandsOrdered'));
    // }
    
    
    
    public function index()
    {
        $brands = Brand::orderBy('name')->paginate(10);
        // $brandsOrdered = $brands->sortBy('name');
        // $brandsOrderPage = $brandsOrdered->paginate(10);
        return view('admin.indexBrand', compact('brands'));
    }

    public function new()
    {
        $brands = Brand::all();

        return view('admin.addBrand', compact('brands'));
    }

    public function add(Request $req)
    {
        $rules = ['name' => 'required|string|min:2'];

        $messages = [
            'name.required' => 'El nombre de la marca es necesario',
            'name.string' => 'El nombre de la marca debe tener letras',
            'name.min' => 'El nombre de la marca debe tener al menos 2 letras',
            'required' => 'Este campo es requerido',
            'min' => 'Al menos debe tener :min cantidad',
            'max' => 'Hasta un maximo de :max'
        ];

        $this->validate($req, $rules, $messages);

        $newBrand = new Brand;

        $newBrand->name = $req->name;

        $newBrand->save();

        return redirect('/admin/brand');
    }

    public function edit($id)
    {
        $brandEdit = Brand::find($id);
        return view('admin.editBrand')->with(['brands' => $brandEdit]);
    }

    public function update($id, Request $req)
    {
        $this->validate(
            $req,
            [
                'name' => 'required|string|min:2',
            ],
            [
                'name.required' => 'El nombre de la categoría es necesario',
                'name.string' => 'El nombre de la categoría debe tener letras',
                'name.min' => 'El nombre de la categoría debe tener al menos 2 letras',
                'required' => 'Este campo es requerido',
                'min' => 'Al menos debe tener :min cantidad',
                'max' => 'Hasta un maximo de :max'
            ]
        );

        $brandEdited = Brand::find($id);
        $brandEdited->name = $req->name;

        $brandEdited->save();

        return redirect('/admin/brand');
    }

}
