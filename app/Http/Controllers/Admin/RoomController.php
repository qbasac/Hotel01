<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index()
  {
    return view('backend.room.our-rooms.index');
  }


  // public function roomDetail()
  // {
  //   return view('frontend.room-detail');
  // }

  // public function room_reservation()
  // {
  //   return view('backend.room.our-rooms.index');
  // }

  // public function room()
  // {
  //   return view('frontend.room');
  // }
}
