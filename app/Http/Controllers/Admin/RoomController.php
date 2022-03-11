<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoomRequest;
use App\Models\home;
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

    $rooms = Room::where(function ($query) use ($request) {
      if ($request->searchBy == 'name') {
        $query->where($request->searchBy, 'LIKE', "%$request->search%");
      }
    })
      ->orderBy($columnOrder, $orderBy)
      ->paginate(7);

    $home = home::first();
    return view('backend.room.our-rooms.index', compact('rooms', 'home'));
  }

  public function create()
  {
    $room = Room::first();
    return view('backend.room.our-rooms.create', compact('room'));
  }

  public function store(StoreRoomRequest $request)
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
    $room->has_offer = $request->has_offer ?? 0;
    if($request->has_offer){
      $room->discount = $request->discount;
      $room->rental_price = $room->price - ($room->price * $request->discount / 100);
    }else{
      $room->discount = NULL;
      $room->rental_price = $request->price;
    }

    $room->save();
    return redirect()->route('admin.room.index')->with('created', 'Registro guardado exitósamente.');
  }

  public function edit($id)
  {
    $room = Room::whereId($id)->first();
    return view('backend.room.our-rooms.edit', compact('room'));
  }

  public function update(StoreRoomRequest $request, $id)
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

    $room->has_offer = $request->has_offer ?? 0;

    if($request->has_offer) {
      $room->discount = $request->discount;
      $room->rental_price = $room->price - ($room->price * $request->discount / 100);
    } else {
      $room->discount = NULL;
      $room->rental_price = $request->price;
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

  public function ShowSectionOffer(Request $request, $id)
  {

    $newState = $request->state ? 0 : 1;
    home::whereId($id)->update([
      'show_section_offers' => $newState
    ]);
    return back();
  }
}
