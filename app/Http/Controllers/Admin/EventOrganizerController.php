<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventOrganizer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function index()
    {
      $organizers = EventOrganizer::get();
      return view('backend.event.event-organizer.index', compact('organizers'));
    }

    public function create()
    {
      return view('backend.event.event-organizer.create');
    }

    public function store(Request $request)
    {
        $organizer = new EventOrganizer;
        $organizer->name = $request->name;
        $organizer->occupation = $request->occupation;
        $organizer->description = $request->description;
        if ($request->file('image')) {
          $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
          $request->file('image')->storeAs('public/event-organizer-image', $namefile);
          $organizer->image = $namefile;
        }
        $organizer->save();
        return redirect()->route('admin.event-organizer.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function edit($id)
    {
      $organizer = EventOrganizer::whereId($id)->first();
      return view('backend.event.event-organizer.edit', compact('organizer'));
    }

    public function update(Request $request, $id)
    {
      $organizer = EventOrganizer::find($id);
      $organizer->name = $request->name;
      $organizer->occupation = $request->occupation;
      $organizer->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/event-organizer-image', $namefile);
        $organizer->image = $namefile;
      }
      $organizer->save();
      return redirect()->route('admin.event-organizer.index')->with('updated', 'Registro actualizado exitósamente.');
    }

    public function destroy($id)
    {
      $organizer = EventOrganizer::find($id);
      $organizer->delete();
      return redirect()->route('admin.event-organizer.index')->with('deleted', 'Eliminado');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      EventOrganizer::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }
}
