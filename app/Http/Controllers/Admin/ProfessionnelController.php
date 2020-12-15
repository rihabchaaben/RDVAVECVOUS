<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use App\Creancier;
use App\Exports\DemandeurExport;
use App\Exports\ProfessionnelExport;
use App\Professionnel;
use App\Ville;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\Cast\Array_;

class ProfessionnelController extends Controller
{
    public function index()
    {
        $professionnels = Professionnel::all();
        return view('admin.professionnels.index', compact('professionnels'));
    }

    public function create()
    {
        $categories = Categorie::where('parent_id', null)->get();
        $villes = Ville::all();
        return view('admin.professionnels.create', compact('villes', 'categories'));
    }


    public function show($id)
    {
        $categories = Categorie::where('parent_id', null)->get();
        $villes = Ville::all();
        $professionnel = Professionnel::findOrFail($id);

        $kbis= $professionnel->kbis()->where('type',1)->orderBy('id', 'DESC')->first();
        $assurance=$professionnel->kbis()->where('type',2)->orderBy('id', 'DESC')->first();
        return view('admin.professionnels.show', compact('categories', 'villes', 'professionnel','kbis','assurance'));
    }

    public function store(Request $request)
    {

//        dd($request->all());
        $user = User::create([
            'name' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::PROFESSIONNEL
        ]);
        if ($request->has('avatar')) {
            $avatar = $request->avatar->store('actualite');
        } else {
            $avatar = null;
        }
        $professionel = Professionnel::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->telephone,
            'mobile' => $request->telephone,
            'site' => $request->site,
            'description' => $request->description,
            'avatar' => $avatar,
            'ville_id' => $request->ville_id,
            'user_id' => $user->id,
        ]);

        $professionel->categories()->attach($request->category);
        $professionel->zoneDeTravailles()->attach($request->zone_de_travail);
//        foreach ($shop->products as $product)
//        {
//            echo $product->pivot->price;
//        }
    }

    public function update(Request $request, $id)
    {
        $professionel = Professionnel::findOrFail($id);
        $professionel->user->update([
            'name' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($request->has('avatar')) {
            $avatar = $request->avatar->store('actualite');
        } else {
            $avatar = null;
        }
        $professionel->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->telephone,
            'mobile' => $request->telephone,
            'site' => $request->site,
            'description' => $request->description,
            'avatar' => $avatar,
            'ville_id' => $request->ville_id,
        ]);

        //$professionel->categories()->sync($request->category);
        //$professionel->zoneDeTravailles()->sync($request->zone_de_travail);
        // return back()->with('message',"mise a jour a bien effectue ");
        
        return back()->with('message',"La mise à jour a été bien effectuée ");
    

    }

    public function delete($id)
    {
        $professionnel = Professionnel::findOrFail($id);
        $professionnel->propositions()->delete();
        $professionnel->user()->delete();
        $professionnel->factures()->delete();
        $professionnel->devis()->delete();
        $professionnel->avis()->delete();
        $professionnel->categories()->detach();
        $professionnel->kbis()->delete();
        $professionnel->debiteur()->delete();
        $professionnel->zoneDeTravaillesVil()->detach();
        $professionnel->zoneDeTravaillesDep()->detach();
        $professionnel->specialDemandes()->detach();
        $professionnel->vendeur()->detach();
        $professionnel->promoPayments()->detach();
        $professionnel->cardless()->delete();
        $professionnel->delete();

        return back();
    }



    public function kbis($id){

        $pro=Professionnel::findOrFail($id);
        $kbis=$pro->kbis()->where('type',1)->orderBy('id', 'DESC')->first();
        $path = storage_path("app/".$kbis->url);
         return Storage::response($kbis->url, 'sweet.pdf');

  }



  public function assurance($id){

    $pro=Professionnel::findOrFail($id);
    $kbis=$pro->kbis()->where('type',2)->orderBy('id', 'DESC')->first();
    $path = storage_path("app/".$kbis->url);
     return Storage::response($kbis->url, 'sweet.pdf');
}


public function sepa($id){

    $pro=Professionnel::findOrFail($id);
    $sepa=$pro->debiteur;
    $creancier = Creancier::first();

    return view('admin.professionnels.sepa',compact('sepa'),compact('creancier'));
}




    public function export()
    {
        return Excel::download(new ProfessionnelExport(),'liste-professionnel.xls');
    }
}
