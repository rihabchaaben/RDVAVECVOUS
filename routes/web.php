<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//

use App\Demande;
use App\Demandeur;
use App\Professionnel;

Route::get('/', function () {
    return view('auth.login');
})->middleware('verify');








/* ---------------- invitation by ref ----------------------------*/

Route::get('invitation/by-ref/{ref}', 'DemandeurController@invitationByRef')->name('demandeur.invitation_url');
Route::post('mes-invitations/store', 'DemandeurController@invitationStore')->name('demandeur.mes_invitation_store');

/* ---------------- demande by guest -----------------------------*/
Route::get('create-my-demande', 'GuestController@create')->name('guest.create');
Route::post('create-my-demande/store', 'GuestController@store')->name('guest.store');


/* --------------- clear cache ----------------------------------*/
Route::get('config-cache', function () {
    Artisan::call('key:generate');
    Artisan::call('storage:link');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
});


/* -------------- Auth & Register ------------------------------*/
Route::get('/register', function () {
    return view('auth.login');
});

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes(['register' => true, 'verify' => true]);
Route::post('user/store', 'UserController@store')->name('user.register');

/* ------------- Socialite -------------------------------------*/
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


//Route::get('cree-demande', function () {
//    return view('demande');
//})->name('cree.demande');
//
//Route::get('calendar', function () {
//    return view('calendars');
//})->name('calendar');

Route::get('faq', function () {
    return view('admin.faq');
})->name('faq');

/*----------------------------------------------------------|
   Route -- Professionnel                                   |
/*----------------------------------------------------------|

 /*  API SELECT VILLE  */
Route::get('professionnel/ville', 'ProfessionnelController@getVilles')->name('pro.get_villes');
Route::get('professionnel/zones', 'ProfessionnelController@getZones')->name('pro.get_zones');
Route::get('professionnel/cats', 'ProfessionnelController@getCats')->name('pro.get_cats');


/*  API SELECT VILLE  */
Route::get('demandeur/ville', 'DemandeurController@getVilles')->name('demandeur.get_villes');

Route::get('demandeur/compris/{id}', 'DemandeurController@compris')->name('demandeur.compris');
Route::get('demandeur/compris2/{id}', 'DemandeurController@compris2')->name('demandeur.compris');



/*  Middlware redirection except*/
Route::group(['middleware' => ['auth', 'role:professionnel']], function () {
    Route::get('profil/complet', 'ProfessionnelController@profile')->name('pro.profile');
    Route::post('profile/store', 'ProfessionnelController@profileUpdate')->name('pro.profile_update');

});

Route::group(['middleware' => ['auth', 'verified', 'profile', 'role:professionnel']], function () {
    Route::get('/dashboard', 'ProfessionnelController@index')->name('pro.index');
    Route::get('download/{id}', 'ProfessionnelController@download')->name('pro.download');

    /*   PROFIL */
//    Route::post('profile/update/{id}', 'ProfessionnelController@profileUpdate')->name('pro.profile_update');

    /*   DEVIS  */
    Route::get('mes-devis', 'ProfessionnelController@devis')->name('pro.mes_devis');
    Route::get('mes-devis/accepte', 'ProfessionnelController@devisAccepte')->name('pro.mes_devis_accepte');
    Route::get('mes-devis/attente', 'ProfessionnelController@devisAttente')->name('pro.mes_devis_attente');
    Route::get('mes-devis/refuse', 'ProfessionnelController@devisRefuse')->name('pro.mes_devis_refuse');
    Route::get('mes-devis/create/{id}', 'ProfessionnelController@devisCreate')->name('pro.mes_devis_create');
    Route::post('mes-devis/store/{id}', 'ProfessionnelController@devisStore')->name('pro.mes_devis_store');
    Route::get('mes-devis/show/{id}', 'ProfessionnelController@devisShow')->name('pro.mes_devis_details');

    /*  DEMANDES */
    Route::get('mes-demandes', 'ProfessionnelController@demandes')->name('pro.mes_demandes');
    Route::get('mes-demandes/accepte', 'ProfessionnelController@demandesAccepte')->name('pro.mes_demandes_accepte');
    Route::get('mes-demandes/valide', 'ProfessionnelController@demandesValide')->name('pro.mes_demandes_valide');
    Route::get('mes-demandes/attente', 'ProfessionnelController@demandesAttente')->name('pro.mes_demandes_attente');
    Route::get('mes-demandes/refuse', 'ProfessionnelController@demandesRefuse')->name('pro.mes_demandes_refuse');
    Route::get('mes-demandes/exclusive', 'ProfessionnelController@demandesExclusive')->name('pro.mes_demandes_exclusive');
    Route::get('demande/{id}', 'ProfessionnelController@demandeShow')->name('pro.demande_show');
    Route::get('demande/refuser/{id}', 'ProfessionnelController@demanderefuser')->name('pro.demande_refuser');
    Route::get('devi/{id}', 'ProfessionnelController@deviShow')->name('pro.devi_show');
    Route::post('mes-demandes/proposition/store', 'ProfessionnelController@propositionStore')->name('pro.mes_demandes_proposition_store');
    Route::get('demande/update/status/{id}{status}', 'ProfessionnelController@actionProposition')->name('pro.proposition_status_update');

    /*  FACTURES */
    Route::get('mes-factures', 'ProfessionnelController@factures')->name('pro.mes_factures');
    Route::get('mes-facture/{id}', 'ProfessionnelController@generer')->name('pro.mes_factures.generer');

    Route::get('mes-factures/create', 'ProfessionnelController@facturesCreate')->name('pro.mes_factures_create');
    Route::post('facture/store', 'ProfessionnelController@factureStore')->name('pro.facture_store');

    /*  SEPA  */
    Route::get('pay-sepa/{id}', 'ProfessionnelController@sepaCreate')->name('pro.sepa_create');
    Route::post('pay-sepa/', 'ProfessionnelController@sepaStore')->name('pro.sepa_store');

    /*  PAYMENT MODEL */
    Route::get('pay-model/{id}', 'ProfessionnelController@paymentModel')->name('pro.payment_model');

    /*  KBIS  */
    Route::get('mes-kbis/create', 'ProfessionnelController@kbisCreate')->name('pro.mes_kbis_create');
    Route::post('mes-kbis/store', 'ProfessionnelController@kbisStore')->name('pro.kbis_store');

    /*  GOCARDLESS  */
    Route::get('payment', 'ProfessionnelController@payment')->name('pro.payment');
    Route::get('save-mondate', 'ProfessionnelController@storeMondate')->name('pro.mondate');
    Route::get('pay', 'ProfessionnelController@paiement')->name('pro.pay');

    /* CHAT DEMANDEUR PART */
    Route::get('/chat', 'Front\Professionnel\ChatController@index')->name('pro.chat');
    Route::get('/chat/{id}', 'Front\Professionnel\ChatController@show')->name('pro.chat.show');
    Route::post('/chat/store', 'Front\Professionnel\ChatController@store')->name('pro.chat.store');

    /*  CONTACTER NOUS  */
    Route::get('professionnel/contactez-nous', 'ProfessionnelController@contactUsCreate')->name('pro.contactUs_create');
    Route::post('contacter-nous', 'ProfessionnelController@contactUsStore')->name('pro.contactUs_store');

    /*  NOTIFICATION  */
    Route::post('notification/update/{id}', 'NotificationController@update')->name('notification.update');
    Route::post('notification/sepa/update/{id}', 'NotificationController@sepaUpdate')->name('notification.sepa_update');

    /*  UPDATEVIP LAST LOGIN FOR POPUP  */
    Route::post('update-last-login', 'ProfessionnelController@lastLoginVipUpdate')->name('pro.last_login_update');

    /*  LICENSE RDV  */
    Route::get('license','ProfessionnelController@license')->name('license');

    Route::get('faq', function () {
        return view('professionnel.faq');
    })->name('faq');

});

/*----------------------------------------------------------|
   Route -- Demandeur                                       |
//----------------------------------------------------------|*/

/*  Middlware redirection except*/
Route::group(['middleware' => ['auth', 'verified', 'role:demandeur']], function () {
    Route::get('profile/complete', 'DemandeurController@profile')->name('demandeur.profile');
    Route::get('profile', 'DemandeurController@profileAgence')->name('demandeur.profile_agence');
    Route::post('profile/save/{id}', 'DemandeurController@profileSave')->name('demandeur.profile_save');
    Route::post('profile/update/{id}', 'DemandeurController@profileUpdate')->name('demandeur.profile_update');

    /*  Google Calendar */
    Route::resource('gcalendar', 'gCalendarController');
    Route::get('oauth', ['as' => 'oauthCallback', 'uses' => 'gCalendarController@oauth']);

});





Route::group(['middleware' => ['auth', 'profile', 'role:demandeur'], 'prefix' => 'demandeur'], function () {

    Route::get('/', 'DemandeurController@index')->name('demandeur.index');

    /*  DEMANDES */
    Route::get('mes-demandes', 'DemandeurController@demandes')->name('demandeur.mes_demandes');
    Route::get('mes-demandes/create', 'DemandeurController@demandesCreate')->name('demandeur.mes_demandes_create');
    Route::get('mes-demandes/show/{id}', 'DemandeurController@demandeShow')->name('pro.mes_demandes_show');
    Route::post('mes-demandes/store', 'DemandeurController@demandeStore')->name('demandeur.demande_store');
    Route::post('mes-demandes/dropzone', 'DemandeurController@getDropzone')->name('demandeur.dropzone_store');
    Route::get('proposition/update/status/{id}{status}', 'DemandeurController@actionProposition')->name('demandeur.proposition_status_update');
    Route::get('demande/delete/{id}', 'DemandeurController@demandeDestroy')->name('demandeur.demande_delete');
    Route::post('mes-demandes/update', 'DemandeurController@updateCalendar')->name('demandeur.demande_updateCalendar');

    /* GOOGLE CALENDAR */
    Route::get('mes-demandes/google-calendar', 'DemandeurController@googleCalendar')->name('demandeur.calendar');


    /*  INVITATION  */
    Route::get('mes-invitations', 'DemandeurController@invitations')->name('demandeur.mes_invitation');
    Route::get('mes-invitations/create', 'DemandeurController@invitationCreate')->name('demandeur.mes_invitation_create');
//    Route::post('mes-invitations/store', 'DemandeurController@invitationStore')->name('demandeur.mes_invitation_store');

    /* DEVIS */
    Route::get('mes-devis', 'DemandeurController@devis')->name('demandeur.mes_devis');
    Route::get('mes-devis/accepte', 'DemandeurController@devisAccepte')->name('demandeur.mes_devis_accepte');
    Route::get('mes-devis/download/{id}', 'DemandeurController@downloadDevis')->name('demandeur.mes_devis_download');
    Route::get('mes-devis/show/{id}', 'DemandeurController@deviShow')->name('demandeur.mes_devis_show');
    Route::get('devi/update/status/{id}{status}', 'DemandeurController@actionDevi')->name('demandeur.devi_status_update');

    Route::post('mes-invitations/send', 'DemandeurController@invitationSend')->name('demandeur.mes_invitation_storeByRef');
    Route::get('demande/profile-show/{id}', 'DemandeurController@demandeProfilShow')->name('demandeur.profile_show');

    /* CHAT DEMANDEUR PART */
    Route::get('chat', 'ChatController@index')->name('demandeur.chat');
    Route::get('/chat/{id}', 'ChatController@show')->name('demandeur.chat.show');
    Route::post('/chat/store', 'ChatController@store')->name('demandeur.chat.store');


    /*  CONTACTER NOUS  */
    Route::get('contactez-nous', 'DemandeurController@contactUsCreate')->name('demandeur.contactUs_create');
    Route::post('contacter-nous', 'DemandeurController@contactUsStore')->name('demandeur.contactUs_store');

    /*  ENQUETTE SATISFACTION */
    Route::get('enquete/{proposition}', 'QuestionnaireController@index')->name('demandeur.questionnaire.index');
    Route::post('enquete/save', 'QuestionnaireController@save')->name('demandeur.questionnaire.save');

    /*  NOTIFICATIONS */
    Route::post('notification/update/vip', 'NotificationController@updateNotif')->name('notification.vip_update');

    Route::get('faq', function () {
        return view('demandeur.faq');
    })->name('demandeur.faq');

    Route::get('test-calendar', 'DemandeurController@testCalendar');
});

/*----------------------------------------------------------|
   Route -- Admin                                           |
//----------------------------------------------------------|*/

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {

    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    /*  PROFIL  */
    Route::get('profile', 'Admin\AdminController@profil')->name('admin.profile');
    /* DEMANDES */

    Route::get('test',function(){
        return Professionnel::findOrFail(17)->isvip(10)."";
    });

    Route::resource('demandes', 'Admin\DemandeController', ['as' => 'admin']);
    Route::get('demandes/proposition/{id}', 'Admin\DemandeController@propositions')->name('admin.demandes.prpositions');
//    Route::get('demandes/create', 'Admin\DemandeController@create')->name('admin.demande_create');
//    Route::get('demandes/show/{id}', 'Admin\DemandeController@show')->name('admin.demande_show');
//    Route::post('demandes/store', 'Admin\DemandeController@store')->name('admin.demande_store');
//    Route::post('demandes/update/{id}', 'Admin\DemandeController@update')->name('admin.demande_update');
//    Route::get('demandes/delete/{id}', 'Admin\DemandeController@delete')->name('admin.demande_delete');

    /* PROPOSITIONS */
    Route::get('propositions', 'Admin\PropositionController@index')->name('admin.propositions');
    Route::get('proposition/create', 'Admin\PropositionController@create')->name('admin.proposition_create');
    Route::get('proposition/show/{id}', 'Admin\PropositionController@show')->name('admin.proposition_show');
    Route::post('proposition/store', 'Admin\PropositionController@store')->name('admin.proposition_store');
    Route::post('proposition/update/{id}', 'Admin\PropositionController@update')->name('admin.proposition_update');
    Route::get('proposition/delete/{id}', 'Admin\PropositionController@delete')->name('admin.proposition_delete');

    /* DEMANDEURS  */
    Route::get('demandeurs', 'Admin\DemandeurController@index')->name('admin.demandeurs');
    Route::get('demandeur/create', 'Admin\DemandeurController@create')->name('admin.demandeur_create');
    Route::get('demandeur/show/{id}', 'Admin\DemandeurController@show')->name('admin.demandeur_show');
    Route::post('demandeur/store', 'Admin\DemandeurController@store')->name('admin.demandeur_store');
    Route::post('demandeur/update/{id}', 'Admin\DemandeurController@update')->name('admin.demandeur_update');
    Route::get('demandeur/delete/{id}', 'Admin\DemandeurController@delete')->name('admin.demandeur_delete');

    /* PROFESSIONNELS  */
    Route::get('professionnels', 'Admin\ProfessionnelController@index')->name('admin.professionnels');
    Route::get('professionnel/create', 'Admin\ProfessionnelController@create')->name('admin.professionnel_create');
    Route::get('professionnel/show/{id}', 'Admin\ProfessionnelController@show')->name('admin.professionnel_show');
    Route::post('professionnel/store', 'Admin\ProfessionnelController@store')->name('admin.professionnel_store');
    Route::post('professionnel/update/{id}', 'Admin\ProfessionnelController@update')->name('admin.professionnel_update');
    Route::get('professionnel/delete/{id}', 'Admin\ProfessionnelController@delete')->name('admin.professionnel_delete');
    Route::get('professionnel/kbis/{id}', 'Admin\ProfessionnelController@kbis')->name('admin.professionnel_kbis');
    Route::get('professionnel/assurance/{id}', 'Admin\ProfessionnelController@assurance')->name('admin.professionnel_assurance');
    Route::get('professionnel/sepa/{id}', 'Admin\ProfessionnelController@sepa')->name('admin.professionnel_sepa');




    /*  VENDEURS  */
    Route::get('vendeurs', 'Admin\VendeurController@index')->name('admin.vendeurs');
    Route::get('vendeur/create', 'Admin\VendeurController@create')->name('admin.vendeur_create');
    Route::get('vendeur/show/{id}', 'Admin\VendeurController@show')->name('admin.vendeur_show');
    Route::post('vendeur/store', 'Admin\VendeurController@store')->name('admin.vendeur_store');
    Route::post('vendeur/update/{id}', 'Admin\VendeurController@update')->name('admin.vendeur_update');
    Route::get('vendeur/delete/{id}', 'Admin\VendeurController@delete')->name('admin.vendeur_delete');

    /*  FACTURES */
    Route::get('factures', 'Admin\FactureController@index')->name('admin.factures');
    Route::get('factures', 'Admin\FactureController@index')->name('admin.factures');
    Route::get('factures/pro/{id}', 'Admin\FactureController@showpropositions')->name('admin.factures.pro');
    Route::get('factures/payer/{id}', 'Admin\FactureController@facture')->name('admin.payer.pro');
    Route::post('factures/store/{id}', 'Admin\FactureController@store')->name('admin.facture_store');
    /*  DEVIS   */
    Route::get('devis', 'Admin\DeviController@index')->name('admin.devis');
    Route::get('devis/delete/{id}', 'Admin\DeviController@delete')->name('admin.devi_delete');

    /* CATEGORIES */
    Route::get('categories', 'Admin\CategorieController@index')->name('admin.categories');
    Route::get('categorie/create', 'Admin\CategorieController@create')->name('admin.categorie_create');
    Route::post('categorie/store', 'Admin\CategorieController@store')->name('admin.categorie_store');
    Route::post('categorie/update/{id}', 'Admin\CategorieController@update')->name('admin.categorie_update');
    Route::get('categorie/delete/{id}', 'Admin\CategorieController@delete')->name('admin.categorie_delete');

    /*  EXPORT  */
    Route::get('export-demandeur', 'Admin\DemandeurController@export')->name('admin.demandeur.export');
    Route::get('export-professionnel', 'Admin\DemandeurController@export')->name('admin.professionnel.export');
    Route::get('export-devi', 'Admin\DemandeurController@export')->name('admin.devi.export');
    Route::get('export-facture', 'Admin\DemandeurController@export')->name('admin.facture.export');
    Route::get('export-vendeur', 'Admin\DemandeurController@export')->name('admin.vendeur.export');


    Route::get('valide/{id}',function($id){ $pro=Professionnel::findOrFail($id);$pro->valide=1; $pro->save(); return back(); });

});
