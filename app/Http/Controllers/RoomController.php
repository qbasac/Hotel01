<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function index(Request $request) {

    $filterPrices = [];

    if($request->prices == 1){
      $filterPrices = [10, 50];
    } elseif($request->prices == 2) {
      $filterPrices = [51, 100];
    }

    $rooms = Room::where(function ($query) use ($request, $filterPrices) {
      if($request->search) {
        $query->where('name', 'LIKE', "%".$request->search."%");
        // $query->orWhere('description', 'LIKE', "%".$request->search."%");
      }
      if($request->prices){
        $query->whereBetween('rental_price', $filterPrices);
      }
    })
    ->active()
    ->paginate(6);

    return view('frontend.room', compact('rooms'));
  }

  public function show($id)
  {
    $room = Room::whereId($id)->first();
    return view('frontend.room-detail', compact('room'));
  }
}
