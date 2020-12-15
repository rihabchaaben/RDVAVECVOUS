<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 17/02/2020
 * Time: 15:53
 */

namespace App\Traits;


use Illuminate\Support\Facades\Auth;

trait Redirection
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function redirect()
    {
        // Get Role Name
        $role = $this->user->getRoleNames()->first();
        // Check user role
        switch ($role) {
            case 'admin':
                return redirect()->route('admin.index');
                break;
            case 'professionnel':
                return redirect()->route('pro.index');
                break;
            case 'demandeur':
                return redirect()->route('demandeur.index');
                break;
            default:
                return '/login';
                break;
        }
    }
}