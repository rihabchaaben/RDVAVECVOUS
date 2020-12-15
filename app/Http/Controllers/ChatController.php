<?php

namespace App\Http\Controllers;

use App\Mail\Front\ProNewMessage;
use App\Message;
use App\Professionnel;
use App\Proposition;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public function index()
    {
        $userList = Message::where('to_id', Auth::user()->id)
        ->whereHas('proposition', function ($qy) {
           
                $qy->where("status", Proposition::ACCEPTE);
            })
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('proposition_id');


        if (isset($userList->first()->proposition_id)) {
            $messages = Message::where('proposition_id', $userList->first()->proposition_id)
            ->whereHas('proposition', function ($qy) {
           
                $qy->where("status", Proposition::ACCEPTE);
            })
                ->orderBy('created_at', 'asc')
                ->get();
        } else {
            $messages = null;
        }

        return view('demandeur.chats.index', compact('messages', 'userList'));
    }

    public function show($id)
    {
        $messages = Message::where('proposition_id', $id)
            ->where('to_id', Auth::user()->id)
            ->orwhere('from_id', Auth::user()->id)
            ->whereHas('proposition', function ($qy) {
           
                $qy->where("status", Proposition::ACCEPTE);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        $messagesReaded = Message::where('proposition_id', $id)
            ->where('to_id', Auth::user()->id);


        $messagesReaded->update(['readed_at' => Carbon::now()]);

        $userList =

            Message::where('to_id', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->whereHas('proposition', function ($qy) {
           
                    $qy->where("status", Proposition::ACCEPTE);
                })
                ->get()
                ->unique('proposition_id');

        return view('demandeur.chats.show', compact('messages', 'userList'));
    }

    public function store(Request $request)
    {
        Message::create(['message' => $request->message, 'proposition_id' => $request->proposition_id,
            'from_id' => $request->from_id, 'to_id' => $request->to_id]);

        $professionnel = Professionnel::where('user_id', $request->to_id)->first();

//        dd($request->from_id);

        Mail::to($professionnel->user->email)->send(new ProNewMessage($request->proposition_id));

        return back();
    }
}