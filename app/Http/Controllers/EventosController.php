<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function eventDetail()
    {
        return view('frontend.event-detail');
    }
    public function eventLarge()
    {
        return view('frontend.event-large');
    }
    public function eventList()
    {
        return view('frontend.event-list');
    }
    public function eventMedium()
    {
        return view('frontend.event-medium');
    }
    public function eventSmall()
    {
        return view('frontend.event-small');
    }
}
