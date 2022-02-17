<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index() {
    $rooms = Room::where('is_active', 1)->paginate(6);
    return view('frontend.room', compact('rooms'));
  }

  public function roomDetail($id)
  {
    $room = Room::whereId($id)->first();
    return view('frontend.room-detail', compact('room'));
    // return view('frontend.room-detail');
  }

  public function room()
  {
    return view('frontend.room');
  }

  // public function index()
  // {
  //   return view('backend.room.reservation.index');
  // }

  public function ourroom()
  {
    return view('backend.room.our-rooms.index');
  }
}
