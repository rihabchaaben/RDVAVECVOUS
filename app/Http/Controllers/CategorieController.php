<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
   public function index()
   {
       return response()->json(['categorie_list' => Categorie::all(),'message' => 'success']);
   }
}
