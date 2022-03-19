<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventosController extends Controller
{

    public function eventDetail($id)
    {
        $event = Event::whereId($id)->first();
        return view('frontend.event-detail', compact('event'));
    }

    public function eventSmall()
    {
        $events = Event::where('is_active', 1)->where('state_event',1)->get();
        return view('frontend.event-small', compact('events'));
    }
}
