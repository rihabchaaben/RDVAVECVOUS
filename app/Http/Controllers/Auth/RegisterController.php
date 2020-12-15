<?php

namespace App\Http\Controllers\Auth;

use App\Demandeur;
use App\Mail\Front\Bienvenue;
use App\Mail\Front\ProBienvenue;
use App\Professionnel;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectTo()
    {
        // Get Role Name
        $role = Auth::user()->getRoleNames()->first();
        // Check user role
        switch ($role) {
            case 'admin':
                return route('admin.index');
                break;
            case 'professionnel':

                //return redirectTo('/profile/complet?tarif');
              return route('pro.index');
                break;
            case 'demandeur':
                return route('demandeur.index');
                break;
            default:
                return '/login';
                break;
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'agree' => ['required'],
            'role' => ['required'],
//            'g-recaptcha-response' => 'required|recaptcha',
//            'g-recaptcha-response' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => $data['password'],
            'email_verified_at' => isset($data['ref']) ? Carbon::now() : null
        ]);


        if (isset($data['ref'])) {
            $demandeur = Demandeur::where('ref', $data['ref'])->first();
            $professionel = Professionnel::create([
                'user_id' => $user->id,
            ]);

            $demandeur->vip()->attach($professionel);
        }else{
            if ($data['role'] == User::DEMANDEUR) {
                Demandeur::create(['user_id' => $user->id]);
            } else {
                Professionnel::create(['user_id' => $user->id]);
            }

        }

        VerifyEmail::toMailUsing(function ($notifiable) use ($data) {
            $verifyUrl = URL::temporarySignedRoute(
                'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
            );
            if ($data['role'] == User::DEMANDEUR) {
                return (new MailMessage)
                    ->subject('RDVavecVOUS Bienvenue!')
                    ->markdown('emails.front.demandeurs.bienvenue', ['url' => $verifyUrl]);
            } else {
                return (new MailMessage)
                    ->subject('RDVavecVOUS Bienvenue!')
                    ->markdown('emails.professionnels.bienvenue', ['url' => $verifyUrl]);
            }

        });
//        $data['role'] == User::DEMANDEUR ? Mail::to($data['email'])->send(new Bienvenue()) : Mail::to($data['email'])->send(new ProBienvenue('test'));

        return $user->assignRole($data['role']);
    }
}
