<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\Room;
use App\Models\SliderHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $rooms = Room::where('has_offer', 1)->where('is_active', 1)->get();
        $home = home::first();
        $slider_homes = SliderHome::where('is_active', 1)->get();
        return view('frontend.index', compact('slider_homes', 'home', 'rooms'));
    }

}
