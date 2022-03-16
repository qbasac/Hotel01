<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
      $events = Event::get();
      return view('backend.event.index', compact('events'));
    }

    public function create()
    {
        return view('backend.event.create');
    }

    public function store(Request $request)
    {
      $events = new Event();
      $events->name = $request->name;
      $events->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/events-image', $namefile);
        $events->image = $namefile;
      }
      $events->date_event = $request->date_event;
      $events->star_time = $request->star_time;
      $events->time_completion = $request->time_completion;
      $events->place_celebration = $request->place_celebration;
      $events->save();
      return redirect()->route('admin.events.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function edit($id)
    {
      $event = Event::whereId($id)->first();
      return view('backend.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
      $events = Event::find($id);
      $events->name = $request->name;
      $events->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/events-image', $namefile);
        $events->image = $namefile;
      }
      $events->date_event = $request->date_event;
      $events->star_time = $request->star_time;
      $events->time_completion = $request->time_completion;
      $events->place_celebration = $request->place_celebration;
      $events->state_event = $request->state_event;
      $events->save();
      return redirect()->route('admin.events.index')->with('updated', 'Registro actualizado exitósamente.');
    }


  public function updateIsActive(Request $request, $id)
  {

    $newState = $request->state ? 0 : 1;
    Event::whereId($id)->update([
      'is_active' => $newState
    ]);
    return back();
  }

    public function destroy($id)
    {
      $event = Event::find($id);
      $event->delete();
      return redirect()->route('admin.events.index')->with('deleted', 'Eliminado');
    }
}
