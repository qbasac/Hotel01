<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfferRequest;
use App\Models\home;
use App\Models\Offers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OffersHomeController extends Controller
{

    public function index()
    {
        $offers = Offers::paginate(10);
        $home = home::first();
        return view('backend.home.offers.index', compact('home', 'offers'));
    }

    public function create()
    {
      return view('backend.home.offers.create');

    }

    public function store(StoreOfferRequest $request)
    {
      $offer = new Offers();
      $offer->title = $request->title;
      $offer->discount_percentage = $request->discount_percentage;
      $offer->description = $request->description;
      if ($request->file('offer_image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('offer_image')->getClientOriginalExtension();
        $request->file('offer_image')->storeAs('public/offers-image', $namefile);
        $offer->offer_image = $namefile;
      }
      $offer->save();
      return redirect()->route('admin.home-offers.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function edit($id)
    {
      $offer = Offers::whereId($id)->first();
      return view('backend.home.offers.edit', compact('offer'));
    }

    public function update(StoreOfferRequest $request, $id)
    {
      $offer = Offers::find($id);
      $offer->title = $request->title;
      $offer->discount_percentage = $request->discount_percentage;
      $offer->description = $request->description;
      if ($request->file('offer_image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('offer_image')->getClientOriginalExtension();
        $request->file('offer_image')->storeAs('public/offers-image', $namefile);
        $offer->offer_image = $namefile;
      }
      $offer->save();
      return redirect()->route('admin.home-offers.index')->with('created', 'Registro actualizado exitósamente.');

    }

    public function destroy($id)
    {
      $offer = Offers::find($id);
      $offer->delete();

      return redirect()->route('admin.home-offers.index');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      Offers::whereId($id)->update([
        'is_active' => $newState
      ]);
      return redirect()->route('admin.home-offers.index');
    }

    public function ShowSectionOffers(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      home::whereId($id)->update([
        'show_section_offers' => $newState
      ]);
      return redirect()->route('admin.home-offers.index');
    }
}
