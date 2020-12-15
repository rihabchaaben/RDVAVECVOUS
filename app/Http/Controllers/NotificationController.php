<?php

namespace App\Http\Controllers;

use App\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function update($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['readed_at' => Carbon::now()]);

        return redirect()->route('pro.devi_show', $notification->notifiable_id);
    }
    public function updateNotif()
    {
        $notification = Notification::where('user_id',Auth::user()->id)->get();
        foreach ($notification as $notif)
        {
            $notif->update(['readed_at' => Carbon::now()]);
        }

        return back();
    }
    public function sepaUpdate($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['readed_at' => Carbon::now()]);

        return redirect()->route('pro.index');
    }
}
