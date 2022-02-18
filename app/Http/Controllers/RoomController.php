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

  public function show($id)
  {
    $room = Room::whereId($id)->first();

    return view('frontend.room-detail', compact('room'));
  }

  
}
