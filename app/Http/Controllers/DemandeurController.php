<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Categorie;
use App\Citation;
use App\Demande;
use App\DemandeFile;
use App\Demandeur;
use App\Devis;
use App\Event;
use App\Http\Requests\DemandeurProfilRequest;
use App\Mail\Front\ContactUs;
use App\Mail\Front\DeRdvConfirmed;
use App\Mail\Front\DeSatisfaction;
use App\Mail\Front\NewDemande;
use App\Mail\Front\ProDevisNewStatus;
use App\Mail\Front\ProPropositionNewStatus;
use App\Mail\Front\ProRdvConfirmed;
use App\Mail\Front\RdvModified;
use App\Mail\Front\VipInvitation;
use App\Mail\Front\Deletedemande;
use App\Message;
use App\Notification;
use App\Professionnel;
use App\ProfessionnelNotification;
use App\PromoPayment;
use App\Proposition;
use App\User;
use App\Ville;
use App\VipProfessionnel;
use PDF;
use Carbon\Carbon;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Validator;
class DemandeurController extends Controller
{

    public function __construct()
    {
        $client = new Google_Client();
        $client->setAuthConfigFile('client_secret.json');
        $client->addScope(Google_Service_Calendar::CALENDAR);
        $guzzleClient = new \GuzzleHttp\Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false)));
        $client->setHttpClient($guzzleClient);
        $this->client = $client;
    }

    public function testCalendar()
    {
        return view('demandeur.demandes.test_calendar');
    }

    public function index()
    {
        /* get all query en mode SQL  */
//        \DB::listen(function ($event) {
//            dump($event->sql);
//        });
        /* --------------------------*/

        $satisfactions = PromoPayment::whereYear('created_at', '2020')->get();

//        if ($satisfactions)
//            foreach ($satisfactions as $satisfaction) {
//                $url = URL::temporarySignedRoute(
//                    'demandeur.questionnaire.index', now()->addMinutes(30), ['proposition' => $satisfaction->proposition_id]
//                );
//
//                Mail::to($satisfaction->proposition->demande->demandeur->user->email)->send(new DeSatisfaction($url));
//            }

        $demandes = Event::whereHas('demande', function ($query) {
            $query->where('demandeur_id', Auth::user()->demandeur->id);
        })->get();

        $rdvAttente = Proposition::where("status", Proposition::ATTENTE)->
        whereHas('demande', function ($query) {
            $query->where('demandeur_id', Auth::user()->demandeur->id);
        })->count();
        $rdvAccepte = Proposition::where("status", Proposition::ACCEPTE)
            ->whereHas('demande', function ($query) {
                $query->where('demandeur_id', Auth::user()->demandeur->id);
            })->count();
        $rdvNoProp = Demande::where('demandeur_id', Auth::user()->demandeur->id)
            ->doesntHave('propositions')->count();

        $msgs = Message::where('to_id', Auth::user()->id)->count();

        $timelines = Proposition::where("status", Proposition::ACCEPTE)
            ->whereHas('demande', function ($query) {
                $query->where('demandeur_id', Auth::user()->demandeur->id);
            })
            ->orderBy('created_at', 'DESC')->get();

        $citation = Citation::all()->random(1)->first();

        $demandeurVip = Auth::user()->notifications()->whereNull('readed_at')->get();

        return view('demandeur.dashboard', compact('demandes', 'rdvAccepte', 'rdvNoProp', 'rdvAttente', 'msgs', 'timelines', 'citation','demandeurVip'));
    }

    public function profile()
    {
        $demandeur = Auth::user()->demandeur;
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('demandeur.profile', compact('demandeur', 'villes', 'categories'));
    }

    public function profileAgence()
    {
        $demandeur = Auth::user()->demandeur;
        $villes = Ville::all()->take(10);
//        dd($villes);
        $categories = Categorie::all();
        return view('demandeur.profile_update', compact('demandeur', 'villes', 'categories'));
    }

    public function getVilles(Request $request)
    {
        $tags = Ville::where('name', 'like', '%' . $request->q . '%')->limit(10)->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $text = isset($tag->ville_code_postal) ? $tag->name . '(' . mb_strimwidth($tag->ville_code_postal, 0, 20, "...") . ')' : $tag->name;
            $formatted_tags[] = ['id' => $tag->id, 'text' => $text];
        }
        return response()->json($formatted_tags);
    }

    public function profileSave(DemandeurProfilRequest $request)
    {
//        dd($request->all());

        $demandeur = Demandeur::findOrFail(Auth::user()->demandeur->id);

        $nom = $request->agence == 1 ? $request->nom_societe : $request->nom;

        $data = $request->password ? $request->all() : $request->except('password');

        $demandeur->user->update($data);
      if ($request->has('avatar')) {
       $avatar = $request->avatar->store('actualite');
 } else {
        $avatar = null;
       }

        $demandeur->update([
            'nom' => $nom,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->phone,
            'mobile' => $request->phone,
            'ref' => Str::random(5),
            'ville_id' => $request->ville_id,
        ]);

        if ($request->agence == 1) {
            Agence::create(['nom_societe' => $nom, 'nom_contact' => $request->nom_contact, 'demandeur_id' => $demandeur->id]);
        }

        session()->flash('profile');
        return redirect()->route('demandeur.index');

    }

    public function profileUpdate(Request $request)
    {
        if(Auth::user()->email != $request->email){
            $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email',
            'nom' => 'required',
            'adresse' => 'required',
            'phone' => 'required_without:mobile|size:10|regex:(0)',
            'cp' => 'required',
            'ville_id' => 'required',
        ]);

                    if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }
        }
       $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'adresse' => 'required',
            'phone' => 'required_without:mobile|size:10|regex:(0)',
            'cp' => 'required',
            'ville_id' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }


        $demandeur = Demandeur::findOrFail(Auth::user()->demandeur->id);

        $nom = $request->has('nom_societe') ? $request->nom_societe : $request->nom;

        $data = $request->password ? $request->all() : $request->except('password');

        $demandeur->user->update($data);
        if ($request->has('avatar')) {
            $avatar = $request->file('avatar')->store('avatar', 'uploads');
        } else {
            $avatar = is_null($demandeur->avatar) ? null : $demandeur->avatar;
        }

        $demandeur->update([
            'nom' => $nom,
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'telephone' => $request->phone,
            'mobile' => $request->phone,
            'ville_id' => $request->ville_id,
            'avatar' => $avatar
        ]);

        if ($request->has('nom_societe')) {
            $demandeur->agence->update(['nom_societe' => $nom, 'nom_contact' => $request->nom_contact, 'demandeur_id' => $demandeur->id]);

            $validator = Validator::make($request->all(), [
                'nom_societe' => 'required',
                'nom_contact' => 'required',
            ]);

                    if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }
        }



        session()->flash('profile');
        return redirect()->route('demandeur.index');

    }


    public function demandes()
    {
        $demandes = Event::whereHas('demande', function ($query) {
            $query->where('demandeur_id', Auth::user()->demandeur->id);
        })->get();
        return view('demandeur.demandes.index', compact('demandes'));
    }

    public function updateCalendar(Request $request)
    {
        $event =Event::findOrFail($request->id);

        $eventUpdated = $event->update(['start_date' => $request->start_date, 'end_date' => $request->end_date]);

        $proposition = $event->demande->propositions()->whereIn('status', [Proposition::ACCEPTE, Proposition::ATTENTE])->get();

        $data = ['titre'=> $event->titre,'description'=> $event->demande->description,'start_date'=> $request->start_date,'end_date'=> $request->end_date,'motif'=>$request->message,'demandeur'=>$event->demande->demandeur->nom];

        if ($proposition) foreach ($proposition as $pro) {
            Mail::to($pro->professionnel->user->email)->send(new RdvModified($data));
        }
    }

    public function invitations()
    {
        $invitations = Auth::user()->demandeur->vips()->get();
        return view('demandeur.invitations.index', compact('invitations'));
    }

    public function devis()
    {
        $devis = Devis::whereHas('proposition', function ($query) {
            $query->whereHas('demande', function ($q) {
                $q->where('demandeur_id', Auth::user()->demandeur->id);
            });
        })->whereNotIn('status', [Devis::ACCEPTE, Devis::REFUSE])
            ->get();

        return view('demandeur.devis.index', compact('devis'));
    }

    public function devisAccepte()
    {
        $devis = Devis::whereHas('proposition', function ($query) {
            $query->whereHas('demande', function ($q) {
                $q->where('demandeur_id', Auth::user()->demandeur->id);
            });
        })->where('status', Devis::ACCEPTE)->get();

        return view('demandeur.devis.devis_accepter', compact('devis'));
    }

    public function deviShow($id)
    {
        $devi = Devis::findOrFail($id);
        return view('demandeur.devis.show', compact('devi'));
    }

    public function invitationCreate()
    {
        $categories = Categorie::all();
        return view('demandeur.invitations.create', compact('categories'));
    }

    public function invitationSend(Request $request)
    {
        $url = URL::temporarySignedRoute(
            'demandeur.invitation_url', now()->addMinutes(60),
            ['ref' => Auth::user()->demandeur->ref, 'email' => $request->email]
        );
        $data = ['demandeur' => Auth::user()->demandeur, 'url' => $url];
        Mail::to($request->email)->send(new VipInvitation($data));

        session()->flash('invitation');

        return redirect()->route('demandeur.mes_invitation');
    }

    public function invitationByRef(Request $request)
    {
        $ref = $request->ref;
        return view('demandeur.invitations.register', compact('ref'));
    }


    public function compris($id){
$demandeur= Demandeur::findOrFail($id);
$vips=VipProfessionnel::where('demandeur_id',$id)->where('statut',0)->get();

foreach($vips as $vip){
 $vip->statut=1;
 $vip->save();

    }}

    public function compris2($id){

      $propo=Proposition::whereHas('demande', function ($query) {
            $query->whereHas('demandeur', function ($q) {
                $q->where('demandeur_id',Auth::user()->demandeur->id);
            });

        })->where('vu',0)->get();

        foreach($propo as $vip){
         $vip->vu=1;
         $vip->save();

            }}


    public function invitationStore(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => User::PROFESSIONNEL
        ]);
        if ($request->has('avatar')) {
            $avatar = $request->avatar->store('actualite');
        } else {
            $avatar = null;
        }
        $professionel = Professionnel::create([
            'user_id' => $user->id,
        ]);


        $user->assignRole(2);

        $demandeur = Demandeur::where('ref', $request->ref)->first();

        $demandeur->vip()->attach($professionel);

        return redirect()->route('logout');
    }

    public function demandeProfilShow($id)
    {
        $pro = Professionnel::findOrFail($id);
        return view('demandeur.demandes.view_pro_profile', compact('pro'));
    }

    public function demandesCreate()
    {
        $categories = Categorie::all();;
        $vips = Auth::user()->demandeur->vips()->get();
        $historiques=PROFESSIONNEL::whereHas('devis',function ($query){
			$query->whereHas('proposition', function ($query) {
            $query->whereHas('demande', function ($q) {
                $q->where('demandeur_id', Auth::user()->demandeur->id);
            });
        })->where('status', Devis::ACCEPTE);
		})->get();

        $demandeur = Auth::user()->email;

        $villes = Ville::all();

        return view('demandeur.demandes.create', compact('categories', 'vips', 'villes', 'historiques', 'demandeur'));
    }


    public function getDropzone(Request $request)
    {

        $images = [];
        foreach ($request->file as $key => $file) {
            $images[$key] = $file->store('testing', 'public');
        }

        return response()->json($images);
    }

    public function demandeDestroy($id)
    {
        $event = Event::findOrFail($id);

        $proposition = $event->demande->propositions()->where('status', '<>', Proposition::REFUSE)->get();
        foreach ($proposition as $prop) {
            Mail::to($prop->professionnel->user->email)->send(new Deletedemande($prop));
            // save notification morph to
//            $professionnelNotif = new Notification();
//            $professionnelNotif->notifiable()->associate($prop);
//            $professionnelNotif->user()->associate($prop->professionnel->user->id);
//            $professionnelNotif->save();
        }

        $idProp = $event->demande->propositions()->pluck('id');
        if ($idProp->isNotEmpty()) {
            Message::whereIn('proposition_id', [$idProp])->delete();
        }

        $event->demande->propositions()->delete();
        $event->demande()->delete();
        $event->delete();
        session()->flash('demandedeleted');

        return back();
    }

    public function demandeStore(Request $request)
    {
         session()->forget('demande');
         if($request->events['start']==null) return redirect()->back();
        $adresse = Auth::user()->demandeur->adresse;
        $villeId = Auth::user()->demandeur->ville_id;
        $cp = Auth::user()->demandeur->cp;
        $typeCommentaire = $request->type_commentaire_devis == null ? $request->type_commentaire_intervention : $request->type_commentaire_devis;
        $demande = Demande::create([
            'nom' => $request->titre,
            'description' => $request->description,
            'status' => Demande::NEW,
            'categorie_id' => $request->categorie_id,
            'demandeur_id' => Auth::user()->demandeur->id,
            'ville_id' => $request->adresse_check == 0 ? $request->ville_id : $villeId,
            'cp' =>$cp,
            'type_devis' => $request->intervention,
            'type_commentaire' => $typeCommentaire,
            'fichier' => 'test',
            'adresse' => $request->adresse_check == 0 ? $request->adresse :$adresse
        ]);

        if ($request->dropped) {


             $imagesDropzone = array_unique($request->dropped);

            foreach ($imagesDropzone as $file) {

                 DemandeFile::create(['nom' => 'test', 'extension' => 'jpg', 'type' => 'file', 'url' => $file,
                    'demande_id' => $demande->id]);

            }
        }


        $arr = $request->events;
        $end = $arr["end"];
        $start = $arr["start"];
        foreach ($start as $key => $event) {
            $startDate = date('Y-m-d H:i:s', strtotime($event));
            $endDate = date('Y-m-d H:i:s', strtotime($end[$key]));
            Event::create(['titre' => $request->titre, 'start_date' => $startDate, 'end_date' => $endDate, 'demande_id' => $demande->id]);
        }

        $demande->specialDemandes()->attach($request->special_demande);

        session()->put('demande.events', $request->events);
        session()->put('demande.titre', $request->titre);
        session()->put('demande.description', $request->description);

        $cat = $request->categorie_id;
        $professionnels = Professionnel::whereHas('categories', function ($query) use ($cat) {
            $query->where('categorie_id', $cat);
        })->whereHas('zoneDeTravaillesVil', function ($query) use ($villeId) {
            $query->where('ville_id', $villeId);
        })->get();

        if ($professionnels) foreach ($professionnels as $pro) {
            Mail::to($pro->user->email)->send(new NewDemande());

        }
        session()->flash('demandeCreated');


     }

    public function googleCalendar()
    {
        //google calendar
        session_start();

        $arr = session()->get('demande.events');
        $end = $arr["end"];
        $start = $arr["start"];
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $this->client->setAccessToken($_SESSION['access_token']);
            $service = new Google_Service_Calendar($this->client);
            $calendarId = 'primary';
            $event = new Google_Service_Calendar_Event([
                'summary' => session()->get('demande.titre'),
                'description' => session()->get('demande.description'),
                'start' => array(
                    'dateTime' => $start,
                    'timeZone' => 'Europe/Paris',
                ),
                'end' => array(
                    'dateTime' => $end,
                    'timeZone' => 'Europe/Paris',
                ),
                'reminders' => ['useDefault' => true],
            ]);
            $results = $service->events->insert($calendarId, $event);
            if (!$results) {
                // return response()->json(['status' => 'error', 'message' => 'Something went wrong']);
                return response()->json(['status' => 'error', 'message' => 'Un problème est survenu']);
            }
            session()->flash('demandeCreated');
            return redirect()->route('demandeur.mes_demandes');
//            return response()->json(['status' => 'success', 'message' => 'Event Created']);
        } else {
            return redirect()->route('oauthCallback');

        }
    }

    public function demandeShow($id)
    {
        $propositions = Proposition::where('demande_id', $id)->where('status', '<>', Proposition::REFUSE)->get();
        return view('demandeur.demandes.show', compact('propositions'));
    }

    public function actionDevi($id, $status)
    {
        $devi = Devis::findOrFail($id);
        $devi->update(['status' => $status]);

        Mail::to($devi->professionnel->user->email)->send(new ProDevisNewStatus($devi));
        session()->flash('devisUpdated');
        return redirect()->route('demandeur.index');
    }

    public function downloadDevis($id)
    {
        $devi = Devis::findOrFail($id);

//        $pdf = PDF::loadView('demandeur.devis.pdf', ['devi' => $devi]);
//        return $pdf->download('mon_devi.pdf');
        return view('demandeur.devis.pdf', compact('devi'));

    }

    public function actionProposition($id, $status)
    {
        $proposition = Proposition::findOrFail($id);
        $proposition->update(['status' => $status]);

        Mail::to($proposition->professionnel->user->email)->send(new ProPropositionNewStatus($proposition));
        if ($status == Proposition::ACCEPTE) {
            Mail::to(Auth::user()->email)->send(new DeRdvConfirmed($proposition));

            // save notification morph to
            $professionnelNotif = new Notification();
            $professionnelNotif->notifiable()->associate($proposition);
            $professionnelNotif->user()->associate($proposition->professionnel->user->id);
            $professionnelNotif->save();

            Mail::to($proposition->professionnel->user->email)->send(new ProRdvConfirmed($proposition));

            return back();
        }
        else {
            return redirect()->route('demandeur.mes_demandes');
        }
    }

    public function contactUsCreate()
    {
        $demandeur = Auth::user()->demandeur;
        return view('demandeur.contacter_nous', compact('demandeur'));
    }

    public function contactUsStore(Request $request)
    {
        $data = $request->except('_token');
        Mail::to('contact@rdvavecvous.com')->send(new ContactUs($data));
        session()->flash('messageSended');
        return back();
    }



public function download($id){

    $dmd=Demande::fidOrFail($id);
    $file=$dmd->demandeFiles;


}

}
