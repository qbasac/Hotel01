<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Room;
use App\Models\Subscription;
use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(Request $request)
  {
    $users = User::count();
    $rooms = Room::count();
    $events = Event::count();
    $testimonial = Testimonial::count();


    $from = $request->start_date ?? now()->startOfMonth();
    $to = $request->end_date ?? now();

    $subscriptions = Subscription::oldest()->whereBetween('created_at', [$from, $to])->get()->groupBy(function ($model) {
      return Carbon::parse($model->created_at)->format('d-m-Y');
    });

    return view('backend.dashboard', compact(
    'users',
    'rooms',
    'events',
    'subscriptions',
    'from',
    'to',               
    'testimonial'));
  }
};



