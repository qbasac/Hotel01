<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function roomDetail()
    {
        return view('frontend.room-detail');
    }
    public function roomList()
    {
        return view('frontend.room-list');
    }
    public function room()
    {
        return view('frontend.room');
    }
}
