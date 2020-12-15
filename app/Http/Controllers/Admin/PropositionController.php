<?php

namespace App\Http\Controllers\Admin;

use App\Proposition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropositionController extends Controller
{
    public function index()
    {
        $propositions = Proposition::all();
        return view('admin.propositions.index',compact('propositions'));
    }

    public function create()
    {
        return view('admin.propositions.create');
    }


    public function show($id)
    {
        return view('admin.propositions.show');
    }

    public function store(Request $request)
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}
