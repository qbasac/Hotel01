<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventOrganizer;
use App\Models\EventOrganizerDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index()
  {
    $events = Event::latest()->paginate(8);
    return view('backend.event.events.index', compact('events'));
  }

  public function create()
  {
    $organizers = EventOrganizer::active()->orderBy('name')->get();
    return view('backend.event.events.create', compact('organizers'));
  }

  public function store(StoreEventRequest $request)
  {
    $event = new Event();
    $dateCurrent = now();
    $dateEvent = Carbon::parse($request->date_event);
    if(!$dateCurrent->greaterThan($dateEvent)) {
      $event->state_event = 2;
    }
    $event->name = $request->name;
    $event->description = $request->description;
    if ($request->file('image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/events-image', $namefile);
      $event->image = $namefile;
    }
    $event->date_event = $request->date_event;
    $event->start_time = $request->start_time;
    $event->end_time = $request->end_time;
    $event->place_celebration = $request->place_celebration;
    $event->save();

    $this->createOrganizerDetail($event, $request->organizer_ids);

    return redirect()->route('admin.events.index')->with('created', 'Registro guardado exitósamente.');
  }

  public function edit($id)
  {
    $event = Event::with('eventOrganizerDetail')->whereId($id)->first();
    $organizers = EventOrganizer::active()->orderBy('name')->get();

    $ornigenizer_ids = collect($event->eventOrganizerDetail)->map(function ($item) {
      return $item->organizer_id;
    })->toArray();

    return view('backend.event.events.edit', compact('event', 'organizers', 'ornigenizer_ids'));
  }

  public function update(UpdateEventRequest $request, $id)
  {
    $event = Event::find($id);

    $dateCurrent = now();
    $dateEvent = Carbon::parse($request->date_event);
    if(!$dateCurrent->equalTo($dateEvent)) {
      $event->state_event = 1;
    }
    if(!$dateCurrent->greaterThan($dateEvent)) {
      $event->state_event = 2;
    }

    $event->name = $request->name;
    $event->description = $request->description;
    if ($request->file('image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/events-image', $namefile);
      $event->image = $namefile;
    }
    $event->date_event = $request->date_event;
    $event->start_time = $request->start_time;
    $event->end_time = $request->end_time;
    $event->place_celebration = $request->place_celebration;
    $event->save();

    $this->deleteOrganizerEvents($event->id);
    $this->createOrganizerDetail($event, $request->organizer_ids);

    return redirect()->route('admin.events.index')->with('updated', 'Registro actualizado exitósamente.');
  }

  public function createOrganizerDetail($event, $organizer_ids) {
    $organizerIds = array_map(function( $orzanizer_id ) {
      return [ "organizer_id" => $orzanizer_id ];
    }, $organizer_ids);
    $event->eventOrganizerDetail()->createMany($organizerIds);
  }

  public function deleteOrganizerEvents($event_id) {
    $organizerDetails = EventOrganizerDetail::where('event_id', $event_id)->get();
    foreach ($organizerDetails as $detail) {
      $detail->delete();
    }
  }

  public function updateIsActive(Request $request, $id)
  {
    $newState = $request->state ? 0 : 1;
    Event::whereId($id)->update(['is_active' => $newState ]);
    return back();
  }

  public function destroy($id)
  {
    $event = Event::find($id);
    $event->delete();
    return redirect()->route('admin.events.index')->with('deleted', 'Eliminado');
  }

  public function eventDetail($id)
  {
      $event = Event::with('eventOrganizerDetail', 'eventOrganizerDetail.organizer')->whereId($id)->first();
      return view('backend.event.events.event-detail', compact('event'));
  }
}
