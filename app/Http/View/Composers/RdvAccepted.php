<?php
/**
 * Created by PhpStorm.
 * User: mmustapha
 * Date: 06/01/2020
 * Time: 16:21
 */

namespace App\Http\View\Composers;


use App\Notification;
use App\Proposition;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RdvAccepted
{

    public function compose(View $view)
    {

        $propositions = Notification::whereNull('readed_at')->where('user_id', Auth::user()->id)
            ->where('notifiable_type', 'App\Proposition')
            ->get();

//        dd($propositions);
        $view->with(['propositions' => $propositions]);
    }

}