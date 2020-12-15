<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Demande;
use App\DemandeFile;
use App\Demandeur;
use App\Event;
use App\User;
use App\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    public function create()
    {
        $categories = Categorie::all();
        $villes = Ville::all();
        return view('demande_by_guest', compact('categories', 'villes'));
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

        $adresse = $request->adresse;
        $villeId = $request->ville_id;
        $cp = $request->cp;

        $demande = Demande::create([
            'nom' => $request->titre,
            'description' => $request->description,
            'status' => 1,
            'categorie_id' => $request->categorie_id,
            'demandeur_id' => $demandeur->id,
            'ville_id' => $villeId,
            'cp' => $cp,
            'fichier' => 'test',
            'adresse' => $adresse
        ]);

        if ($request->has('demande_file')) {

            foreach ($request->demande_file as $file) {
                $fichier = $file->store('demandes');
                DemandeFile::create(['nom' => 'test', 'extension' => 'jpg', 'type' => 'file', 'url' => $fichier,
                    'demande_id' => $demande->id]);
            }
        }
        $arr = $request->events;
        $end = $arr["end"];
        $start = $arr["start"];
        foreach ($start as $key => $event) {
            $startDate = date('Y-m-d H:i:s', strtotime($event));
            $endDate = date('Y-m-d H:i:s', strtotime($end[$key]));
            Event::create(['start_date' => $startDate, 'end_date' => $endDate, 'demande_id' => $demande->id]);
        }

        return back();
    }
}
