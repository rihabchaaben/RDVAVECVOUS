<?php

namespace App\Http\Controllers\Admin;

use App\Exports\FactureExport;
use App\Facture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Professionnel;
use App\Proposition;
use Maatwebsite\Excel\Facades\Excel;

class FactureController extends Controller
{
    public function index()
    {
        $pros = Professionnel::all();
        return view('admin.factures.index', compact('pros'));
    }

    public function showpropositions($id){
        $pro=Professionnel::findOrFail($id);
        $propositions=$pro->propositions()->where('status', Proposition::ACCEPTE)->Orwhere('status', Proposition::DEVIS)->get();
        
        return view('admin.factures.show',compact('propositions'));

    }


    public function facture($id){
        $pro=Professionnel::findOrFail($id);
        $propositions=$pro->propositions()->where('status', Proposition::ACCEPTE)->Orwhere('status', Proposition::DEVIS)->first();
        
        
        $months = array(
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9=> 'Septembre',
           10=> 'Octobre',
           11 => 'Novembre',
           12 => 'Décembre'
       );
        return view('admin.factures.facture',compact('propositions','months','pro'));

    }   


    public function store(Request $request ,$id){

          $facture =new Facture(); 
          $facture->mois =$request->mois;
          $facture->annee=date('y');
          $facture->professionnel_id=$id;
          $facture->montant=$request->montant_total;
          $facture->nombre_rdv=$request->nombre_rdv;
          $facture->save();

        //   return redirect()->route('admin.factures')->with('message', '   La facture a ete creer  avec success !');
          return redirect()->route('admin.factures')->with('message', 'La facture a été créée avec succès!');



    }

    public function export()
    {
        return Excel::download(new FactureExport(),'liste-facture.xls');
    }
}
