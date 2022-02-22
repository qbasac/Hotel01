<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomReservationRequest;
use App\Models\Room;
use App\Models\RoomReservation;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
  public function index()
  {
    $room_reservations = RoomReservation::paginate(8);
    $tupeRooms = [
      7 => 'Habitación',
      1 => 'Individual',
      2 => 'Duplex',
      3 => 'Familía',
      4 => 'Pareja',
      5 => 'Sin registrar',
      8 => 'Sin registrar',
    ];

    $renderNameRoomType = function ($type) use ($tupeRooms) {
      return $tupeRooms[$type];
    };


    return view('backend.room.room-reservation.index', compact('room_reservations', 'renderNameRoomType'));
  }

  public function create()
  {
    return view('backend.room.room-reservation.create');
  }

  public function store(StoreRoomReservationRequest $request)
  {
    $room_reservation = new RoomReservation();
    $room_reservation->name = $request->name;
    $room_reservation->email = $request->email;
    $room_reservation->phone = $request->phone;
    $room_reservation->room_type = $request->room_type;
    $room_reservation->quantity_adults = $request->quantity_adults;
    $room_reservation->quantity_childrens = $request->quantity_childrens;
    $room_reservation->reservation_start_date = $request->reservation_start_date;
    $room_reservation->reservation_end_date = $request->reservation_end_date;
    // $room_reservation->save();

    return back()->with('created', 'Registro guardado exitósamente.');
  }




  public function edit($id)
  {
    $room_reservation = RoomReservation::whereId($id)->first();
    return view('backend.room.room-reservation.edit', compact('room_reservation'));
  }


  public function update(Request $request, $id)
  {
    $room_reservation = RoomReservation::find($id);
    $room_reservation->name = $request->name;
    $room_reservation->email = $request->email;
    $room_reservation->phone = $request->phone;
    $room_reservation->room_type = $request->room_type;
    $room_reservation->quantity_adults = $request->quantity_adults;
    $room_reservation->quantity_childrens = $request->quantity_childrens;
    $room_reservation->reservation_start_date = $request->reservation_start_date;
    $room_reservation->reservation_end_date = $request->reservation_end_date;
    $room_reservation->save();
    return redirect()->route('room-reservation.index')->with('created', 'Registro actualizado exitósamente.');
  }

  public function updateIsActive(Request $request, $id)
  {
    $newState = $request->state ? 0 : 1;
    RoomReservation::whereId($id)->update([
      'is_active' => $newState
    ]);
    return back();
  }

  public function destroy($id)
  {
    $room_reservation = RoomReservation::find($id);
    $room_reservation->delete();

    return redirect()->route('room-reservation.index');
  }
}
