<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePricesRequest;
use App\Http\Requests\UpdatePricesRequest;
use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PricesController extends Controller
{

    public function index()
    {
        $prices = Price::get();
        return view('backend.home.prices.index', compact('prices'));
    }

    public function create()
    {
        return view('backend.home.prices.create');
    }

    public function store(StorePricesRequest $request)
    {
      $prices = new Price();
      $prices->price = $request->price;
      $prices->date = $request->date;
      $prices->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/prices-image', $namefile);
        $prices->image = $namefile;
      }
      $prices->save();
      return redirect()->route('admin.prices.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function edit($id)
    {
      $price = Price::whereId($id)->first();
      return view('backend.home.prices.edit', compact('price'));
    }

    public function update(UpdatePricesRequest $request, $id)
    {
      $prices = Price::find($id);
      $prices->price = $request->price;
      $prices->date = $request->date;
      $prices->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/prices-image', $namefile);
        $prices->image = $namefile;
      }
      $prices->save();
      return redirect()->route('admin.prices.index')->with('updated', 'Registro actualizado exitósamente.');
    }

    public function destroy($id)
    {
      $price = Price::find($id);
      $price->delete();
      return redirect()->route('admin.prices.index')->with('deleted', 'Eliminado');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      Price::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }
}
