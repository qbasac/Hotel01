<?php

namespace App\Http\Controllers;

use App\Models\home;
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

    $filterBeds = [];
    if($request->number_beds == 1){
      $filterBeds = [10, 50];
    } elseif($request->number_beds == 2) {
      $filterBeds = [51, 100];
    }elseif($request->number_beds == 3) {
      $filterBeds = ['number_beds', '>', 100];
    }


    $rooms = Room::where(function ($query) use ($request, $filterPrices,  $filterBeds) {
      if($request->search) {
        $query->where('name', 'LIKE', "%".$request->search."%");
      }
      if($request->prices){
        $query->whereBetween('rental_price', $filterPrices);
      }

      if($request->number_beds){
        $query->whereBetween('number_beds', $filterBeds);
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
//UT FUGIT QUIA QUI SAPIENTE.
