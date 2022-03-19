<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use App\Models\home;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  public function index()
  {
    $home = home::first();
    $brands = Brand::get();
    return view('backend.home.brands.index', compact('brands', 'home'));
  }

  public function create()
  {
    return view('backend.home.brands.create');
  }

  public function store(StoreBrandRequest $request)
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


  public function update(StoreBrandRequest $request, $id)
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

  public function ShowSectionBrands(Request $request, $id)
  {
    $newState = $request->state ? 0 : 1;
    home::whereId($id)->update([
      'show_section_brands' => $newState
    ]);
    return redirect()->route('admin.brands.index');
  }
}
