<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::DEMANDEUR
        ]);


        if($request->role <> ''){
            $user->roles()->attach($request->role);
        }

//        if ($request->has('professionnel'))
//
//            return redirect()->action('ProfessionnelController@profile');
//
//        return redirect()->action('DemandeurController@profile');

    }
}
