<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventosController extends Controller
{

  public function eventDetail($id)
  {
    $events = Event::latest()->where('is_active', 1)
    ->whereIn('state_event', [1, 2])
    ->get();

    $event = Event::with('eventOrganizerDetail', 'eventOrganizerDetail.organizer')->whereId($id)->first();
    return view('frontend.event-detail', compact('event', 'events'));
  }

  public function eventSmall()
  {
    // $reponse = $this->observerStateEvents();
    $events = Event::latest()->where('is_active', 1)
    ->whereIn('state_event', [1, 2])
    ->paginate(6)
    ;
    return view('frontend.event-small', compact('events'));
  }

  public function observerStateEvents() {
    $events = Event::whereIn('state_event', [1,2])->get();
    foreach ($events as $event) {
      $eventDate = Carbon::parse($event->date_event)->startOfDay();
      if(!now()->startOfDay()->lessThanOrEqualTo($eventDate)){
        $event->update([ 'state_event' => 0 ]);
      }
    }
  }
}
