<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        return view('backend.home.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('backend.home.brands.create');
    }

    public function store(Request $request)
    {
      $brand = new Brand();
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/brand-image', $namefile);
        $brand->image = $namefile;
      }
      $brand->name = $request->name;
      $brand->save();
      return redirect()->route('admin.brands.index')->with('created', 'Registro guardado exitósamente.');
    }


    public function update(Request $request, $id)
    {
      $brand = Brand::find($id);
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/brand-image', $namefile);
        $brand->image = $namefile;
      }
      $brand->name = $request->name;
      $brand->save();
      return redirect()->route('admin.brands.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      Brand::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }
    public function destroy($id)
    {
      $brand = Brand::find($id);
      $brand->delete();
      return redirect()->route('admin.brands.index')->with('deleted', 'Eliminado');
    }
}
