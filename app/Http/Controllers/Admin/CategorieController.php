<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::where('parent_id', null)->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {

        $categorieParent = Categorie::create(['label' => $request->parent,
            'code' => $request->parent,
            'parent_id' => null]);

        Categorie::create(['label' => $request->categorie,
            'code' => $request->categorie, 'parent_id' => $categorieParent->id]);

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}
