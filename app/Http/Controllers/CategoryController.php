<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categoriesOrdered = $categories->sortBy('name');

        return view('admin.indexCategory', compact('categoriesOrdered'));
    }

    public function new()
    {
        $categories = Category::all();

        return view('admin.addCategory', compact('categories'));

    }

    public function add(Request $req)
    {
        $rules = ['name' => 'required|string|min:2'];

        $messages = [
            'name.required' => 'El nombre de la categoría es necesario',
            'name.string' => 'El nombre de la categoría debe tener letras',
            'name.min' => 'El nombre de la categoría debe tener al menos 2 letras',
            'required' => 'Este campo es requerido',
            'min' => 'Al menos debe tener :min cantidad',
            'max' => 'Hasta un maximo de :max'
        ];

        $this->validate($req, $rules, $messages);

        $cat = new Category;

        $cat->name = $req->name;

        $cat->save();

        return redirect('/admin/category');

    }

    public function edit($id)
    {        
        $catEdit = Category::find($id);
        return view('admin.editCategory')->with(['categories' => $catEdit]);
    } 

    public function update($id, Request $req)
    {
        $this->validate($req,
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

        $catEdited = Category::find($id);
        $catEdited->name = $req->name;
        
        $catEdited->save();

        return redirect('/admin/category');
    }


}

