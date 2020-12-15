<?php

namespace App\Http\Controllers\Admin;

use App\Exports\VendeurExport;
use App\Vendeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class VendeurController extends Controller
{
    public function index()
    {
        $vendeurs = Vendeur::all();
        return view('admin.vendors.index', compact('vendeurs'));
    }

    public function create()
    {
        return view('admin.vendors.create');
    }


    public function show($id)
    {
        return view('admin.vendors.show');
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

    public function export()
    {
        return Excel::download(new VendeurExport(),'liste-professionnel.xls');
    }
}
