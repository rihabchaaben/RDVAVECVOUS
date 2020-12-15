<?php

namespace App\Http\Controllers;

use App\Cardless;
use App\Categorie;
use App\Creancier;
use App\Debiteur;
use App\Demande;
use App\DemandeFile;
use App\Designation;
use App\Devis;
use App\Http\Requests\ProProfilRequest;
use App\Http\Requests\SepaRequest;
use App\KbisFile;
use App\Mail\Front\ContactUs;
use App\Mail\Front\DeDevisReceived;
use App\Mail\Front\DeNewProp;
use App\Mail\Front\DeRdvAnnule;
use App\Mail\Front\ProRdvConfirmed;
use App\Message;
use App\Notification;
use App\Professionnel;
use App\ProfessionnelCitation;
use App\Proposition;
use App\Vendeur;
use App\Ville;
use App\Departement;
use App\Facture;
use App\SpecialDemande;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;



class ProfessionnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        setlocale(LC_TIME, 'french.UTF-8', 'fr_FR.UTF-8');
    }

    public function index()
    {
        $newprop = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) {
            $qy->whereHas('zoneDeTravailles', function ($qo) {
                $qo->where('professionnel_id', Auth::user()->professionnel->id);
            });

        })
            ->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->where('status', Demande::NEW)->count();

        $rdvAttente = Proposition::where("status", Proposition::ATTENTE)
            ->where('professionnel_id', Auth::user()->professionnel->id)->count();
        $rdvAccepte = Proposition::where("status", Proposition::DEVIS)
            ->where('professionnel_id', Auth::user()->professionnel->id)->count();
        $rdvRefuse = Proposition::where("status", Proposition::REFUSE)
            ->where('professionnel_id', Auth::user()->professionnel->id)->count();

        $rdvNoProp = Demande::all()->count();
        $msgs = Message::where('to_id', Auth::user()->id)->count();
//        $maps = Demande::all();

        $maps =Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) {
            $qy->whereHas('zoneDeTravailles', function ($qo) {
                $qo->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->doesntHave('propositions')->where('status', Demande::NEW)->get();

        $mapsAccepted = Auth::user()->professionnel->propositions()->where('status', Proposition::DEVIS)->get();

        $vils = Auth::user()->professionnel->zoneDeTravaillesVil;

        $plucked_vil = $vils->pluck('id');

        $vil_ids = $plucked_vil->all();

        $dpts = Auth::user()->professionnel->zoneDeTravaillesDep;

        $plucked_dep = $dpts->pluck('departement_code');

        $dep_ids = $plucked_dep->all();

        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();


        $demandes = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })

            ->whereDoesntHave('specialDemandes', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })

        ->where('status', Demande::NEW)
        ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })
        ->orderBy('created_at','DESC')
        ->whereNotIn('demandeur_id', $specialde)
        ->get();



        $timelines = Proposition::where("status", Proposition::ACCEPTE)
            ->where('professionnel_id', Auth::user()->professionnel->id)
             ->whereHas('demande',function($qu){
              $qu->whereHas('events',function($q){
              $q->where('end_date' ,'>', Carbon::now());
               });})
            ->orderBy('created_at','DESC')
            ->get();

//        dd($status);
        $citation = ProfessionnelCitation::all()->random(1)->first();

        $propositions = Auth::user()->professionnel->specialDemandes()
            ->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })->orderBy('created_at','DESC')

            ->get();

        return view('professionnel.dashboard', compact('newprop', 'propositions', 'rdvRefuse', 'rdvAccepte', 'rdvNoProp', 'rdvAttente', 'msgs', 'maps', 'mapsAccepted', 'demandes', 'timelines', 'citation'));
    }

    public function devisShow($id)
    {
        $devi = Devis::findOrFail($id);
        return view('professionnel.devis.details', compact('devi'));
    }

    public function license()
    {
        return view('professionnel.license');
    }

    public function lastLoginVipUpdate()
    {
        Auth::user()->update(['last_login' => Carbon::now()]);
        return redirect()->route('pro.index');
    }

    public function sepaCreate($id)
    {
        $proposition = Proposition::findOrFail($id);
        $this->authorize('view', $proposition);
        $creancier = Creancier::first();
        $random = mt_rand('10000', '90000');
        $professionnel = Auth::user()->professionnel;
        return view('professionnel.etapes.sepa', compact('proposition', 'creancier', 'professionnel', 'random'));
    }

    public function sepaStore(SepaRequest $request)
    {
//        dd($request->all());
//        $debiteur = new Debiteur();
        $debiteur = Debiteur::create([
            'nom' => $request->nom,
            'adress' => $request->adress,
            'cp' => $request->cp,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'numero_jacent' => $request->numero_jacent,
            'iban' => encrypt($request->iban),
            'bic' => encrypt($request->bic),
            'type' => 1,
            'professionnel_id' => Auth::user()->professionnel->id,
        ]);

        $professionnelNotif = new Notification();
        $professionnelNotif->notifiable()->associate($debiteur);
        $professionnelNotif->user()->associate(Auth::user()->id);
        $professionnelNotif->save();

//        $debiteur->professionnel()->associate(Auth::user()->professionnel->id);
//        session()->flash('payment_success');
        $proposition = Proposition::findOrFail($request->proposition_id);
        $proposition->update(['status' => Proposition::DEVIS]);
        Mail::to(Auth::user()->email)->send(new ProRdvConfirmed($proposition));
        session()->flash('sepaCreated');
        return redirect()->route('pro.payment_model', ['id' => $request->proposition_id]);
    }

    public function paymentModel($id)
    {
        $proposition = Proposition::findOrFail($id);

        $data = ['tel' => $proposition->demande->demandeur->telephone, 'adr' => $proposition->demande->adresse,
            'mail' => $proposition->demande->demandeur->user->email, 'nom' => $proposition->demande->demandeur->nom,
            'start_date' => $proposition->demande->events];
         if(empty($proposition)) redirect()->route('pro.index');
        return view('partials.payment', compact('data'));
    }

    public function profile()
    {
        $professionnel = Auth::user()->professionnel;
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('professionnel.profile', compact('professionnel', 'villes', 'categories'));
    }

    public function profileUpdate(ProProfilRequest $request)
    {

        //return $request;
        $professionel = Professionnel::findOrFail(Auth::user()->professionnel->id);
        $data = $request->password ? $request->all() : $request->except('password');

        $professionel->user->update($data);
        if ($request->file('avatar')) {
            $avatar = $request->file('avatar')->store('avatar', 'uploads');
        } else {
            $avatar = is_null($professionel->avatar) ? null : $professionel->avatar;
        }
        $professionel->update([
            'nom' => $request->nom,
            'nom_societe' => $request->nom_societe,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->telephone,
            'mobile' => $request->telephone,
            'site' => $request->site,
            'siret' => $request->siret,
            'tva' => $request->tva,
            'description_garantie' => $request->description_garantie,
            'nom_assurance' => $request->nom_assurance,
            'description' => $request->description,
            'avatar' => $avatar,
            'ville_id' => $request->ville_id,
        ]);


        session()->flash('profile');
        $professionel->categories()->sync($request->category);
        $professionel->zoneDeTravaillesVil()->sync($request->zone_de_travail_vil);
        $professionel->zoneDeTravaillesDep()->sync($request->zone_de_travail_dep);

        $pro = Auth::user()->professionnel->vip;

        if ($pro->isNotEmpty() && is_null(Auth::user()->last_login)) {
            $status = is_null(Auth::user()->last_login) ? true : false;
            return redirect()->route('pro.index', ['status' => $status]);
        } else {


       return redirect('profil/complet?tarif');

            //return redirect()->route('pro.index');
        }

    }

    public function getVilles(Request $request)
    {
        $villes = Ville::where('name', 'like', '%' . $request->q . '%')->limit(10)->get();

        $formatted_tags = [];

        foreach ($villes as $tag) {
            $text = isset($tag->ville_code_postal) ? $tag->name . '(' . mb_strimwidth($tag->ville_code_postal, 0, 20, "...") . ')' : $tag->ville_code_postal;
            $formatted_tags[] = ['id' => $tag->id, 'text' => $text];
        }

        return response()->json($formatted_tags);
    }


    public function getCats(Request $request)
    {
        $villes =Categorie::where('label', 'like', '%' . $request->q . '%')->get();

        $formatted_tags = [];

        foreach ($villes as $tag) {
            $text =$tag->label;
            $formatted_tags[] = ['id' => $tag->id, 'text' => $text];
        }

        return response()->json($formatted_tags);
    }







    public function getZones(Request $request)
    {
        $departements = Departement::where('name', 'like', '%' . $request->q . '%')->limit(10)->get();


        $formatted_tags = [];

        foreach ($departements as $departement) {
            $text = isset($departement->zip) ? $departement->name . '(' . mb_strimwidth($departement->zip, 0, 20, "...") . ')' : $departement->name;
            $formatted_tags[] = ['id' => $departement->id, 'text' => $text];
        }
        return response()->json($formatted_tags);
    }

    public function devis()
    {
        $propositions = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)
        ->orWhere('status', Proposition::DEVIS)
            ->doesntHave('devis')
            ->get();

        $cntDevis = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)
        ->orWhere('status', Proposition::DEVIS)
            ->doesntHave('devis')->count();

        $cntDevisAccepte = Auth::user()->professionnel->devis()->where('status', Devis::ACCEPTE)->count();
        $cntDevisAttente = Auth::user()->professionnel->devis()->where('status', Devis::ATTENTE)->count();
        $cntDevisRefuse = Auth::user()->professionnel->devis()->where('status', Devis::REFUSE)->count();

        return view('professionnel.devis.devis', compact('propositions', 'cntDevis', 'cntDevisAccepte', 'cntDevisAttente', 'cntDevisRefuse'));
    }

    public function devisAccepte()
    {


        $devis = Auth::user()->professionnel->devis()->where('status', Devis::ACCEPTE)->get();

        $cntDevis = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)
        ->orWhere('status', Proposition::DEVIS)
            ->doesntHave('devis')->count();

        $cntDevisAccepte = Auth::user()->professionnel->devis()->where('status', Devis::ACCEPTE)->count();
        $cntDevisAttente = Auth::user()->professionnel->devis()->where('status', Devis::ATTENTE)->count();
        $cntDevisRefuse = Auth::user()->professionnel->devis()->where('status', Devis::REFUSE)->count();

       $ispaye=0;

       if(!empty(Auth::user()->professionnel->debiteur->iban)){
           $ispaye=1;

       }

        return view('professionnel.devis.devis_accepter', compact('devis','cntDevis', 'cntDevisAccepte', 'cntDevisAttente', 'cntDevisRefuse'));
    }

    public function devisAttente()
    {
        $devis = Auth::user()->professionnel->devis()->where('status', Devis::ATTENTE)->get();

        $cntDevis = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)
        ->orWhere('status', Proposition::DEVIS)
            ->doesntHave('devis')->count();

        $cntDevisAccepte = Auth::user()->professionnel->devis()->where('status', Devis::ACCEPTE)->count();
        $cntDevisAttente = Auth::user()->professionnel->devis()->where('status', Devis::ATTENTE)->count();
        $cntDevisRefuse = Auth::user()->professionnel->devis()->where('status', Devis::REFUSE)->count();
        return view('professionnel.devis.devis_en_attente', compact('devis', 'cntDevis', 'cntDevisAccepte', 'cntDevisAttente', 'cntDevisRefuse'));
    }

    public function devisRefuse()
    {
        $devis = Auth::user()->professionnel->devis()->where('status', Devis::REFUSE)->get();

        $cntDevis = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)
        ->orWhere('status', Proposition::DEVIS)
            ->doesntHave('devis')->count();

        $cntDevisAccepte = Auth::user()->professionnel->devis()->where('status', Devis::ACCEPTE)->count();
        $cntDevisAttente = Auth::user()->professionnel->devis()->where('status', Devis::ATTENTE)->count();
        $cntDevisRefuse = Auth::user()->professionnel->devis()->where('status', Devis::REFUSE)->count();

        return view('professionnel.devis.devis_refuse', compact('devis', 'cntDevis', 'cntDevisAccepte', 'cntDevisAttente', 'cntDevisRefuse'));
    }

    public function demandesExclusive()
    {
        $propositions = Auth::user()->professionnel->specialDemandes()->get();
        return view('professionnel.demandes.demandes_exclusive', compact('propositions'));
    }

    public function devisCreate($id)
    {
        $proposition = Proposition::findOrFail($id);
        return view('professionnel.nouveau_devis', compact('proposition'));
    }

    public function devisStore(Request $request, $id)
    {
        $quantite = $request->quantite;
        foreach ($request->prix_unitaire as $key => $res) {
            $result[$key] = $res * $quantite[$key];
        }
        $devi = Devis::create(['proposition_id' => $id,
            'professionnel_id' => Auth::user()->professionnel->id,
            'tax' => $request->tax,
            'valable_until' => $request->valable_until,
            'condition_paiement' => $request->condition_paiement,
            'montant' => array_sum($result),
            'status' => Devis::ATTENTE]);
        $quantite = $request->quantite;
        $prix_unitaire = $request->prix_unitaire;
        foreach ($request->designation as $key => $design) {
            Designation::create(['designation' => $design,
                'quantite' => $quantite[$key],
                'prix_unitaire' => $prix_unitaire[$key],
                'devis_id' => $devi->id]);
        }

        session()->flash('devisCreated');

        $proposition = Proposition::findOrFail($id);

        Mail::to($proposition->demande->demandeur->user->email)->send(new DeDevisReceived($proposition));

        return redirect()->route('pro.mes_devis_attente');

    }

    public function propositionStore(Request $request)
    {
        $verife=Proposition::where('professionnel_id',$request->professionnel_id)->where('demande_id',$request->demande_id)
        ->get();

        $status=Proposition::ATTENTE;

        $redirect=0;
       if($verife->count()===0){
        if(auth()->user()->professionnel->isvip(Demande::findOrFail($request->demande_id)->demandeur->id)==1){

            $status=Proposition::ACCEPTE;

            $redirect=1;
        }


        $proposition = Proposition::create(['professionnel_id' => $request->professionnel_id,
            'demande_id' => $request->demande_id,
            'status' => $status,
            'coupon'=> $request->coupon,
        ]);


        Message::create(['message' => $request->message, 'proposition_id' => $proposition->id, 'from_id' => Auth::user()->id,
            'to_id' => $request->demandeur_id]);

        Mail::to($proposition->demande->demandeur->user->email)->send(new DeNewProp($proposition));


        if($redirect==1)
        {
            return redirect()->route('pro.mes_demandes_accepte');
        }
        session()->flash('propositionCreated');
        }

    }


    public function demanderefuser($id){



        $proposition = Proposition::create(['professionnel_id' => auth()->user()->professionnel->id,
            'demande_id' => $id,
            'status' => 1,

        ]);
        session()->flash('refusedemande');
        return redirect()->route('pro.mes_demandes_refuse');

    }


    public function demandes()
    {


        $vils = Auth::user()->professionnel->zoneDeTravaillesVil;

        $plucked_vil = $vils->pluck('id');

        $vil_ids = $plucked_vil->all();

        $dpts = Auth::user()->professionnel->zoneDeTravaillesDep;

        $plucked_dep = $dpts->pluck('departement_code');

        $dep_ids = $plucked_dep->all();
        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();


        $demandes = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereNotIn('demandeur_id', $specialde)
                     ->where('status', Demande::NEW)
        ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })

        ->OrderBy('created_at')
        ->get();

        $accepteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)->count();
        $attenteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ATTENTE)->count();
        $refuseCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::REFUSE)->count();
        $valideCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::DEVIS)->count();

        $propositions = Auth::user()->professionnel->specialDemandes()
            ->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereHas('events',function($q){
                $q->where('end_date' ,'>', Carbon::now());
              })->get();
        $newCnt = $demandes->count() + $propositions->count();
        return view('professionnel.demandes.demandes'
            , compact('demandes', 'propositions', 'newCnt', 'accepteCnt', 'attenteCnt', 'refuseCnt', 'valideCnt'));
    }

    public function demandesAccepte()
    {
        $propositions = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)->get();

        //coumpteur
        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();
$vils = Auth::user()->professionnel->zoneDeTravaillesVil;

        $plucked_vil = $vils->pluck('id');

        $vil_ids = $plucked_vil->all();

        $dpts = Auth::user()->professionnel->zoneDeTravaillesDep;

        $plucked_dep = $dpts->pluck('departement_code');

        $dep_ids = $plucked_dep->all();
        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();


        $demandes = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereNotIn('demandeur_id', $specialde)
                     ->where('status', Demande::NEW)
        ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })

        ->OrderBy('created_at')
        ->get();


         
        $pros = Auth::user()->professionnel->specialDemandes()
        ->whereDoesntHave('propositions', function ($query) {
            $query->where('professionnel_id', Auth::user()->professionnel->id);
        })
        ->whereHas('events',function($q){
            $q->where('end_date' ,'>', Carbon::now());
          })->get();
    $newCnt = $demandes->count() + $pros->count();
//fin compteur newcnt


        $accepteCnt = $propositions->count();
        $attenteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ATTENTE)->count();
        $refuseCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::REFUSE)->count();
        $valideCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::DEVIS)->count();
        $ispaye=0;

        if(!empty(Auth::user()->professionnel->debiteur->iban) ){
            $ispaye=1;

        }

        return view('professionnel.demandes.demandes_accepter'
            , compact('propositions', 'newCnt', 'accepteCnt', 'attenteCnt', 'refuseCnt', 'valideCnt','ispaye'));
    }

    public function demandesValide()
    {
        $propositions = Auth::user()->professionnel->propositions()->where('status', Proposition::DEVIS)->get();
         //coumpteur
         $vils = Auth::user()->professionnel->zoneDeTravaillesVil;

        $plucked_vil = $vils->pluck('id');

        $vil_ids = $plucked_vil->all();

        $dpts = Auth::user()->professionnel->zoneDeTravaillesDep;

        $plucked_dep = $dpts->pluck('departement_code');

        $dep_ids = $plucked_dep->all();
        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();


        $demandes = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereNotIn('demandeur_id', $specialde)
                     ->where('status', Demande::NEW)
        ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })

        ->OrderBy('created_at')
        ->get();

         $pros = Auth::user()->professionnel->specialDemandes()
         ->whereDoesntHave('propositions', function ($query) {
             $query->where('professionnel_id', Auth::user()->professionnel->id);
         })
         ->whereHas('events',function($q){
             $q->where('end_date' ,'>', Carbon::now());
           })->get();
     $newCnt = $demandes->count() + $pros->count();
 //fin compteur newcnt

        $valideCnt = $propositions->count();
        $attenteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ATTENTE)->count();
        $refuseCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::REFUSE)->count();
        $accepteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)->count();


        return view('professionnel.demandes.demandes_valider'
            , compact('propositions', 'newCnt', 'accepteCnt', 'attenteCnt', 'refuseCnt', 'valideCnt'));
    }

    public function demandesRefuse()
    {
        $propositions = Auth::user()->professionnel->propositions()->where('status', Proposition::REFUSE)->get();
        //coumpteur
        $vils = Auth::user()->professionnel->zoneDeTravaillesVil;

        $plucked_vil = $vils->pluck('id');

        $vil_ids = $plucked_vil->all();

        $dpts = Auth::user()->professionnel->zoneDeTravaillesDep;

        $plucked_dep = $dpts->pluck('departement_code');

        $dep_ids = $plucked_dep->all();
        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();


        $demandes = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereNotIn('demandeur_id', $specialde)
                     ->where('status', Demande::NEW)
        ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })

        ->OrderBy('created_at')
        ->get();
        $pros = Auth::user()->professionnel->specialDemandes()
        ->whereDoesntHave('propositions', function ($query) {
            $query->where('professionnel_id', Auth::user()->professionnel->id);
        })
        ->whereHas('events',function($q){
            $q->where('end_date' ,'>', Carbon::now());
          })->get();
    $newCnt = $demandes->count() + $pros->count();
//fin compteur newcnt

        $accepteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)->count();
        $attenteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ATTENTE)->count();
        $valideCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::DEVIS)->count();

        $refuseCnt = $propositions->count();
        return view('professionnel.demandes.demandes_refuse'
            , compact('propositions', 'newCnt', 'accepteCnt', 'attenteCnt', 'refuseCnt', 'valideCnt'));
    }

    public function demandesAttente()
    {
        $propositions = Auth::user()->professionnel->propositions()->where('status', Proposition::ATTENTE)
        //->get();
         ->OrderBy('created_at')
        ->get();

        //coumpteur
        $vils = Auth::user()->professionnel->zoneDeTravaillesVil;

        $plucked_vil = $vils->pluck('id');

        $vil_ids = $plucked_vil->all();

        $dpts = Auth::user()->professionnel->zoneDeTravaillesDep;

        $plucked_dep = $dpts->pluck('departement_code');

        $dep_ids = $plucked_dep->all();
        $special=SpecialDemande::where('professionnel_id', Auth::user()->professionnel->id)->select('demande_id')->get()->toArray();
        $specialde=Demande::whereIn('id',$special)->select('demandeur_id')->get()->toArray();


        $demandes = Demande::whereHas('categorie', function ($query) {
            $query->whereHas('professionnels', function ($q) {
                $q->where('professionnel_id', Auth::user()->professionnel->id);
            });
        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereHas('ville', function ($qy) use($dep_ids, $vil_ids){
            $qy->whereIn('departement_id', $dep_ids)->orWhereIn('id', $vil_ids);;

        })->whereDoesntHave('propositions', function ($query) {
                $query->where('professionnel_id', Auth::user()->professionnel->id);
            })
            ->whereNotIn('demandeur_id', $specialde)
                     ->where('status', Demande::NEW)
        ->whereHas('events',function($q){
          $q->where('end_date' ,'>', Carbon::now());
        })

        ->OrderBy('created_at')
        ->get();
        $pros = Auth::user()->professionnel->specialDemandes()
        ->whereDoesntHave('propositions', function ($query) {
            $query->where('professionnel_id', Auth::user()->professionnel->id);
        })
        ->whereHas('events',function($q){
            $q->where('end_date' ,'>', Carbon::now());
          })->get();
    $newCnt = $demandes->count() + $pros->count();
//fin compteur newcnt

        $accepteCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::ACCEPTE)->count();
        $refuseCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::REFUSE)->count();
        $valideCnt = Auth::user()->professionnel->propositions()->where('status', Proposition::DEVIS)->count();

        $attenteCnt = $propositions->count();
        return view('professionnel.demandes.demandes_en_attente'
            , compact('propositions', 'newCnt', 'accepteCnt', 'attenteCnt', 'refuseCnt', 'valideCnt'));
    }

    public function actionProposition($id, $status)
    {

        $proposition = Proposition::findOrFail($id);
        $proposition->update(['status' => $status]);
        $proposition->demande()->update(['status' => 3]);

        if ($status == Proposition::ANNULER)
            Mail::to(Auth::user()->email)->send(new DeRdvAnnule($proposition));

        return back();
    }

    public function demandeShow($id)
    {

        $proposition = Proposition::where('id', $id)->first();
        $demande = Demande::with('specialDemandes')->findOrFail($id);
        $demande->exclusive = count($demande->specialDemandes);
        //authorisation of user should be
        $authorize = Auth::user()->professionnel->propositions()->where('demande_id', $id)->get();

        $isvip= Auth::user()->professionnel->isvip($demande->demandeur->id);

//return $isvip."";
//        dd($authorize);
        if ($authorize->isNotEmpty()) abort(403);
        if ($demande) {
//            $proposition = Demande::findOrFail($id);

            return view('professionnel.etapes.proposition'
                , ['proposition' => $demande,'isvip'=>$isvip]);
        }

        switch ($proposition->status) {
            case Proposition::ACCEPTE:
                return view('professionnel.etapes.devi'
                    , compact('proposition','isvip'));
                break;
            case Proposition::INIT :
                return view('professionnel.etapes.proposition'
                    , compact('proposition','isvip'));
        }
    }



//    public function demandeShow($id)
//    {
//        $proposition = Demande::findOrFail($id);
//        //authorisation of user should be
//                return view('professionnel . etapes . proposition', compact('proposition'));
//
//    }

    public function deviShow($id)
    {
        $proposition = Proposition::findOrFail($id);
        $this->authorize('view', $proposition);
        $creancier = Creancier::all()->first();
        $random = mt_rand('10000', '90000');
        $professionnel = Auth::user()->professionnel;
        return view('professionnel.etapes.facture', compact('proposition', 'creancier', 'professionnel', 'random'));
    }

    public function factures()
    {
        $factures = Auth::user()->professionnel->factures()->get();
        return view('professionnel.factures', compact('factures'));
    }



    public function generer($id)
    {
        $pro = Auth::user()->professionnel;
        $facture=Facture::findOrFail($id);
        $hide=0;
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


      // view()->share('facture',$facture);
      // $pdf = PDF::loadView('professionnel.factureex',$facture);
       //$pdf->download('invoice.pdf');


         return view('professionnel.factureex', compact('facture'));
    }


    public function generated($id)
    {
        $pro = Auth::user()->professionnel;
        $facture=Facture::findOrFail($id);
        $hide=1;
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




       view()->share('employee',$facture);
       view()->share('employee',$pro);
       view()->share('employee',$months);
       view()->share('employee',$hide);
      $pdf = DomPDFPDF::loadView('professionnel.factureex', $facture,$pro,$months,$hide);

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
        //return view('professionnel.factureex', compact('facture','pro','months','hide'));
    }



    public function facturesCreate()
    {
        return view('professionnel.nouveau_facture');
    }

    public function factureStore(Request $request)
    {
//        dd($request->all());
        $proposition = Proposition::findOrFail($request->proposition_id);
        $this->authorize('update', $proposition);
        if ($request->has('code_promo')) {
            $vendeur = Vendeur::where('code_promo', $request->code_promo)->first();
            if ($vendeur) {
                Auth::user()->professionnel->promoPayments()->attach($proposition);
                $proposition->update(['status' => Proposition::DEVIS]);

                $data = ['tel' => $proposition->demande->demandeur->telephone, 'adr' => $proposition->demande->adresse, 'mail' => $proposition->demande->demandeur->user->email, 'nom' => $proposition->demande->demandeur->nom, 'start_date' => $proposition->demande->events];
                $json = ['status' => 200, 'data' => $data];

                Mail::to(Auth::user()->email)->send(new ProRdvConfirmed($proposition));
            } else {
                $json = ['status' => 404];
            }
            //send mail + deflottage

        }

        return response()->json($json);
    }

    public function kbisCreate()
    {
        return view('professionnel.kbis.create');
    }

    public function kbisStore(Request $request)
    {
        if ($request->has('kbis')) {
            $file = $request->file('kbis')->store('kbis');

        KbisFile::create(['url' => $file, 'type' => $request->type, 'note' => $request->note, 'professionnel_id' => Auth::user()->professionnel->id]);
        session()->flash('kbisCreated');
            }
        return back();
    }

    public function contactUsCreate()
    {
        $professionnel = Auth::user()->professionnel;
        return view('professionnel.contacter_nous', compact('professionnel'));
    }

    public function contactUsStore(Request $request)
    {
        $data = $request->except('_token');
        Mail::to('contact@rdvavecvous.com')->send(new ContactUs($data));
        session()->flash('messageSended');
        return back();
    }

    public function payment()
    {
//        return(config('name'));
        $access_token = 'sandbox_gKObuYoBo3R - 3L2KKipffziU5AqQzLuf8Ikhz0l1';
        $client = new \GoCardlessPro\Client(array(
            'access_token' => $access_token,
            'environment' => \GoCardlessPro\Environment::SANDBOX
        ));

        $redirectFlow = $client->redirectFlows()->create([
            "params" => [
                // This will be shown on the payment pages
                "description" => "Wine boxes",
                // Not the access token
                "session_token" => "dummy_session_token",
                "success_redirect_url" => "http://localhost/save-mondate",
                // Optionally, prefill customer details on the payment page
                "prefilled_customer" => [
                    "given_name" => "Tim",
                    "family_name" => "Rogers",
                    "email" => "tim@gocardless.com",
                    "address_line1" => "338-346 Goswell Road",
                    "city" => "London",
                    "postal_code" => "EC1V 7LQ"
                ]
            ]
        ]);

        session()->put('redirectFlowId', $redirectFlow->id);

        return redirect()->away($redirectFlow->redirect_url);
//        return $redirectFlow->links->mandate;
    }

    public function storeMondate()
    {
        $access_token = 'sandbox_gKObuYoBo3R - 3L2KKipffziU5AqQzLuf8Ikhz0l1';
        $client = new \GoCardlessPro\Client(array(
            'access_token' => $access_token,
            'environment' => \GoCardlessPro\Environment::SANDBOX
        ));
        $redirectFlowId = session()->get('redirectFlowId');

        $redirectFlow = $client->redirectFlows()->complete(
            $redirectFlowId, //The redirect flow ID from above.
            ["params" => ["session_token" => "dummy_session_token"]]
        );

        print("Mandate: " . $redirectFlow->links->mandate . "<br />");

        $cardless = new Cardless();
        $cardless->mandate = $redirectFlow->links->mandate;
        $cardless->professionnel()->associate(Auth::user()->professionnel->id);
        $cardless->save();

        print("Customer: " . $redirectFlow->links->customer . "<br />");

        return redirect()->away($redirectFlow->confirmation_url);

    }

    public function paiement()
    {
        $client = new \GoCardlessPro\Client([
            'access_token' => 'sandbox_gKObuYoBo3R - 3L2KKipffziU5AqQzLuf8Ikhz0l1',
            'environment' => \GoCardlessPro\Environment::SANDBOX
        ]);

        $payment = $client->payments()->create([
            "params" => [
                "amount" => 121000, // 10 GBP in pence
                "currency" => "EUR",
                "links" => [
                    "mandate" => Auth::user()->professionnel->cardless->mandate
                    // The mandate ID from last section
                ],
            ]
        ]);

// Keep hold of this payment ID - we'll use it in a minute
// It should look like "PM000260X9VKF4"
        return $payment->id;
    }



    public function download($id){
        $dmd=DemandeFile::findOrFail($id);
        $files = storage_path('app/public/'.$dmd->url);
        //return response($id);

        return response()->download($files);

    }

}
