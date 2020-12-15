<?php

namespace App\Http\Controllers\Front\Professionnel;

use App\Demande;
use App\Demandeur;
use App\Mail\Front\ProNewMessage;
use App\Message;
use App\Professionnel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public function index()
    {
        $userList = Message::where('to_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('proposition_id');


        if (isset($userList->first()->proposition_id)) {
            $messages = Message::where('proposition_id', $userList->first()->proposition_id)
                ->orderBy('created_at', 'asc')
                ->get();
        } else {
            $messages = null;
        }

//        $userList = Message::where('to_id', Auth::user()->id)
//            ->get()
//            ->unique('proposition_id');

//        dd($userList);
        return view('professionnel.chats.index', compact('messages', 'userList'));
    }

    public function show($id)
    {
        $messages = Message::where('proposition_id', $id)
            ->where('to_id', Auth::user()->id)
            ->orwhere('from_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();

        $messagesReaded = Message::where('proposition_id', $id)
            ->where('to_id', Auth::user()->id);


        $messagesReaded->update(['readed_at' => Carbon::now()]);

        $userList =

            Message::where('to_id', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->get()
                ->unique('proposition_id');

        return view('professionnel.chats.show', compact('messages', 'userList'));
    }

    public function store(Request $request)
    {
        Message::create(['message' => $request->message, 'proposition_id' => $request->proposition_id,
            'from_id' => $request->to_id, 'to_id' => $request->from_id]);

        $professionnel = Demandeur::where('user_id', $request->from_id)->first();

        Mail::to($professionnel->user->email)->send(new ProNewMessage($request->proposition_id));

        return back();
    }
}
