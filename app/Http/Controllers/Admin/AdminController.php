<?php

namespace App\Http\Controllers\Admin;

use App\Demande;
use App\Demandeur;
use App\Devis;
use App\Professionnel;
use App\Proposition;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $nbrInscris = Demandeur::count();
        $nbrDemandes = Demande::count();
        $nbrPro = Professionnel::count();
        $nbrPropose = Proposition::count();
        $nbrDevis = Devis::count();
        $nbrRdvAttente = Proposition::where('status', Proposition::ATTENTE)->count();
        $nbrRdvAccepte = Proposition::where('status', Proposition::ACCEPTE)->count();
        $nbrRdvAnnule = Proposition::where('status', Proposition::REFUSE)->count();
        $deviLastMonthEarn = Devis::whereMonth(
            'created_at', '=', Carbon::now()->subMonth()->month
        )->get();
        $sumDevisLast = $deviLastMonthEarn->sum('montant');
        $deviLastWeekEarn = Devis::whereMonth(
            'created_at', '=', Carbon::now()->subWeek()->week
        );
        return view('admin.dashboard', compact('nbrInscris', 'nbrRdvAttente', 'nbrDemandes', 'nbrPro', 'nbrPropose', 'nbrDevis', 'nbrRdvAccepte', 'nbrRdvAnnule', 'deviLastMonthEarn', 'deviLastWeekEarn', 'sumDevisLast'));
    }

    public function profile()
    {
        return view('admin.profile.index');
    }
}
