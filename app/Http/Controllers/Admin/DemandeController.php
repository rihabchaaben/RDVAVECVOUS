<?php

namespace App\Http\Controllers\Admin;

use App\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('admin.demandes.index', compact('demandes'));
    }

    public function create()
    {
        return view('admin.demandes.create');
    }


    public function show($id)
    {
        return view('admin.demandes.show');
    }

public function propositions($id){
    $propositions = Demande::findOrFail($id)->propositions;
    return view('admin.demandes.proposition',compact('propositions'));

}


    public function store(Request $request)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        $demande = Demande::findOrFail($id)->delete();
        return back();
    }

}
