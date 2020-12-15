<?php

namespace App\Http\Controllers\Admin;

use App\Demande;
use App\Demandeur;
use App\Exports\DemandeurExport;
use App\Http\Controllers\Controller;
use App\User;
use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class DemandeurController extends Controller
{
    public function index()
    {
        $demandeurs = Demandeur::all();
        return view('admin.demandeurs.index', compact('demandeurs'));
    }

    public function create()
    {
        $villes = Ville::all()->take(50);
        return view('admin.demandeurs.create', compact('villes'));
    }


    public function show($id)
    {
        $demandeur = Demandeur::findOrFail($id);
        $villes = Ville::all();
        return view('admin.demandeurs.show', compact('demandeur', 'villes'));
    }

    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::DEMANDEUR
        ]);

        $demandeur = Demandeur::create([
            'nom' => $request->name,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->telephone,
            'mobile' => $request->telephone,
            'ref' => Str::random(),
            'ville_id' => $request->ville_id,
            'user_id' => $user->id,
        ]);
    }

    public function update(Request $request, $id)
    {
        $demandeur = Demandeur::findOrFail($id);
        $demandeur->update(['nom' => $request->name,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->telephone,
            'mobile' => $request->telephone,
            'ville_id' => $request->ville_id,
        ]);
        $demandeur->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function delete($id)
    {
        $demandeur = Demandeur::findOrFail($id);
        $demandeur->demandes()->delete();
        foreach($demandeur->demandes as $demande){
         $demande->delete();
         $demande->propositions()->delete();
         }
        $demandeur->vips()->delete();
        $demandeur->agence()->delete();
        $demandeur->user()->delete();
        $demandeur->delete();


        return back();
    }

    public function export()
    {
//        return Excel::download(new DemandeurExport(),'liste-demandeur.csv');
        return (new DemandeurExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

    }
}
