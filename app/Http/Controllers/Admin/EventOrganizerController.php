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
      return view('backend.event.event-organizer.index');
    }

    public function create()
    {
      return view('backend.event.event-organizer.create');
    }

    public function store(Request $request)
    {
        $Organizer = new EventOrganizer;
        $Organizer->name = $request->name;
        $Organizer->occupation = $request->occupation;
        $Organizer->description = $request->description;
        if ($request->file('image')) {
          $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
          $request->file('image')->storeAs('public/event-organizer-image', $namefile);
          $Organizer->image = $namefile;
        }
        $Organizer->save();
        return redirect()->route('admin.event-organizer.index')->with('created', 'Registro guardado exitósamente.');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
