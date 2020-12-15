<?php
/**
 * Created by PhpStorm.
 * User: mmustapha
 * Date: 13/01/2020
 * Time: 14:13
 */

namespace App\Http\View\Composers;


use App\Message;
use App\Proposition;
use App\VipProfessionnel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Notification
{
    protected $notifiable = ['App\Proposition', 'App\Message', 'App\Devis'];

    public function compose(View $view)
    {

        $notificationscnt = $this->notificationAuth()->get();

        $notifPropositions = $this->notificationType('App\Proposition')->get();
        $notifMessage = $this->notificationType('App\Message')->get();
        $notifDevis = $this->notificationType('App\Devis')->get();

        foreach ($this->notifiable as $key => $notif) {
            $array[$notif] = $this->notificationType($notif)->get();
        }

        $cntMessage = Message::where('to_id', Auth::user()->id)
            ->count();
        $cntMessagenonlue = Message::where('to_id', Auth::user()->id)
        ->where('readed_at','=',NULL)
            ->count();

        $propo=Proposition::whereHas('demande', function ($query) {
            $query->whereHas('demandeur', function ($q) {
                $q->where('demandeur_id',Auth::user()->demandeur->id);
            });
            
        })->where('vu',0)->get();
         
        $vip=VipProfessionnel::where('demandeur_id',Auth::user()->demandeur->id)->where('statut',0)->get();  

        $view->with(['notificationscnt' => $notificationscnt, 'notifPropositions' => $array,
            'notifMessage' => $notifMessage, 'notifDevis' => $notifDevis, 'cntMessage' => $cntMessage,'cntMessagenonlue'=>$cntMessagenonlue,"vips"=>$vip,"propos"=>$propo]);
    }

    protected function notificationAuth()
    {
        return Auth::user()->notifications()->whereNull('readed_at');
    }

    protected function notificationType($type)
    {
        return $this->notificationAuth()->where('notifiable_type', $type);
    }
}