<?php

namespace App\Http\Middleware;

 use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
class Verify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
        if(Auth::user()->role == User::PROFESSIONNEL ) {
            return redirect()->route('pro.profile');
        }elseif(Auth::user()->role == User::DEMANDEUR){
           return redirect()->route('demandeur.index');
        }
        elseif(Auth::user()->role == User::ADMIN){
            return redirect()->route('admin.index');
         }}

        return $next($request);
    }
}
