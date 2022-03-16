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
        $events = Event::get();
        return view('frontend.event-small', compact('events'));
    }
}
