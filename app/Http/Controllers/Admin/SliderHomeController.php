<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderHomeRequest;
use App\Models\home;
use App\Models\SliderHome;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderHomeController extends Controller
{
    public function index()
    {
      $home = home::first();
      $slider_homes = SliderHome::paginate(8);
      return view('backend.home.slider-home.index', compact('slider_homes', 'home'));
    }

    public function create()
    {
      return view('backend.home.slider-home.create');

    }

    public function store(StoreSliderHomeRequest $request)
    {

      $slider_home = new SliderHome();
      $slider_home->sub_title = $request->sub_title;
      $slider_home->title = $request->title;
      $slider_home->description = $request->description;
      $slider_home->link_1 = $request->link_1;
      $slider_home->link_2 = $request->link_2;
      if ($request->file('slider_image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('slider_image')->getClientOriginalExtension();
        $request->file('slider_image')->storeAs('public/slider-image', $namefile);
        $slider_home->slider_image = $namefile;
      }
      $slider_home->save();
      return redirect()->route('admin.home-slider.index')->with('created', 'Registro guardado exitósamente.');
    }


    public function edit($id)
    {
      $slider_home = SliderHome::whereId($id)->first();
      return view('backend.home.slider-home.edit', compact('slider_home'));
    }

    public function update(StoreSliderHomeRequest $request, $id)
    {
      $slider_home = SliderHome::find($id);
      $slider_home->sub_title = $request->sub_title;
      $slider_home->title = $request->title;
      $slider_home->description = $request->description;
      $slider_home->link_1 = $request->link_1;
      $slider_home->link_2 = $request->link_2;
      if ($request->file('slider_image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('slider_image')->getClientOriginalExtension();
        $request->file('slider_image')->storeAs('public/slider-image', $namefile);
        $slider_home->slider_image = $namefile;
      }
      $slider_home->save();
      return redirect()->route('admin.home-slider.index')->with('created', 'Registro actualizado exitósamente.');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      SliderHome::whereId($id)->update([
        'is_active' => $newState
      ]);
      return redirect()->route('admin.home-slider.index');
    }

    public function destroy($id)
    {
      $slider_home = SliderHome::find($id);
      $slider_home->delete();

      return redirect()->route('admin.home-slider.index');
    }

    public function ShowSectionSlider(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      home::whereId($id)->update([
        'show_section_slider' => $newState
      ]);
      return redirect()->route('admin.home-slider.index');
    }

}
