<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Event $event)
    {
        $events = $event->all();
        return view('event.index', compact(['events', 'time']));
    }


    public function create()
    {

        return view('event.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'event_date' => 'required',
            'event_time' => 'required'
        ]);

        new Event(request(['title','body', 'event_date', 'event_time']));

        // return redirect('/event/create');
    }
}
