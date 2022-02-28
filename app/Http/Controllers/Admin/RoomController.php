<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index(Request $request)
  {
    $columnOrder = 'id';
    $orderBy = 'desc';

    if ($request->searchBy == 'price' || $request->searchBy == 'number_beds') {
      $columnOrder = $request->searchBy;
      $orderBy = $request->orderBy;
    }
    // if ($request->searchBy == 'number_beds') {
    //   $columnOrder = 'number_beds';
    //   $orderBy = $request->orderBy;
    // }
    $rooms = Room::where(function ($query) use ($request) {
      if ($request->searchBy == 'name') {
        $query->where($request->searchBy, 'LIKE', "%$request->search%");
      }
    })
      ->orderBy($columnOrder, $orderBy)
      ->paginate(7);

    // $rooms = Room::paginate(7);
    // $rooms = Room::orderBy("price", "asc")->paginate(7);

    return view('backend.room.our-rooms.index', compact('rooms'));
  }

  public function create()
  {
    return view('backend.room.our-rooms.create');
  }

  public function store(Request $request)
  {
    $room = new Room();
    $room->name = $request->name;
    $room->price = $request->price;
    $room->description = $request->description;
    $room->number_beds = $request->beds;
    $room->number_people = $request->people;
    if ($request->file('image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/rooms', $namefile);
      $room->image = $namefile;
    }
    $room->save();
    return redirect()->route('admin.room.index')->with('created', 'Registro guardado exitósamente.');
  }

  public function edit($id)
  {
    $room = Room::whereId($id)->first();
    return view('backend.room.our-rooms.edit', compact('room'));
  }

  public function update(Request $request, $id)
  {
    $room = Room::find($id);
    $room->name = $request->name;
    $room->price = $request->price;
    $room->description = $request->description;
    $room->number_beds = $request->beds;
    $room->number_people = $request->people;
    if ($request->file('image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/rooms', $namefile);
      $room->image = $namefile;
    }
    $room->save();
    return redirect()->route('admin.room.index')->with('created', 'Registro actualizado exitósamente.');
  }

  public function updateIsActive(Request $request, $id)
  {
    
    $newState = $request->state ? 0 : 1;
    Room::whereId($id)->update([
      'is_active' => $newState
    ]);
    return back();
  }

  public function destroy($id)
  {
    $room = Room::find($id);
    $room->delete();

    return redirect()->route('admin.room.index');
  }
}
