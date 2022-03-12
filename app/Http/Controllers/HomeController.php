<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\home;
use App\Models\Room;
use App\Models\Services;
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
        $blogs = Blog::with('comments')
        ->withCount(['comments' => function($query) {
          $query->where('is_active', 1);
        }])
        ->active()
        ->take(3)
        ->get();

        $galleries = Gallery::where('is_active', 1)->get();
        $services = Services::where('is_active', 1)->get();
        $rooms = Room::where('has_offer', 1)->where('is_active', 1)->get();
        $home = home::first();
        $slider_homes = SliderHome::where('is_active', 1)->get();
        return view('frontend.index', compact('slider_homes',
         'home', 'rooms', 'services', 'galleries', 'blogs'));
    }
}
