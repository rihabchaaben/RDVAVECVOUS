<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

class EventController extends Controller

{


    public function index()

    {

        $events = [];

        $data = Event::all();

        if ($data->count()) {

            foreach ($data as $key => $value) {

                $events[] = Calendar::event(

                    $value->title,

                    true,

                    new \DateTime($value->start_date),

                    new \DateTime($value->end_date . ' +1 day')

                );

            }

        }

        $calendar = Calendar::addEvents($events);
        $tasks = ['id' => 1, 'name' => 't', 'task_date' => '12 / 01 / 2017'];
        return view('demandeur.mycalendar', compact('calendar', 'tasks'));

    }

}