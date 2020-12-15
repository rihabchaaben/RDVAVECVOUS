<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class Profile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role == User::PROFESSIONNEL && !isset(Auth::user()->professionnel->nom)) {
            return redirect()->route('pro.profile');
        }elseif(Auth::user()->role == User::DEMANDEUR && !isset(Auth::user()->demandeur->nom)){
           return redirect()->route('demandeur.profile');
        }


        return $next($request);
    }


}
