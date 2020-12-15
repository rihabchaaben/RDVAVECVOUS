<?php

namespace App\Http\Controllers\Admin;

use App\Devis;
use App\Exports\DeviExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DeviController extends Controller
{
    public function index()
    {
        $devis = Devis::all();
        return view('admin.devis.index', compact('devis'));
    }

    public function delete($id)
    {
        $devi = Devis::findOrFail($id)->delete();
        return back();
    }

    public function export()
    {
        return Excel::download(new DeviExport(),'liste-devis.xls');
    }
}
