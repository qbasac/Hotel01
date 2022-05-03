<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
  public function index()
  {
    $about = About::first();
    return view('backend.about.index', compact('about'));
  }

  public function edit($id)
  {
    $about = About::whereId($id)->first();
    return view('backend.about.edit', compact('about'));
  }

  public function update(Request $request, $id)
  {

    $about = About::find($id);
    $about->about_title = $request->title;
    $about->about_description = $request->description;
    $about->about_link = $request->link;

    if ($request->file('about_image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('about_image')->getClientOriginalExtension();
      $request->file('about_image')->storeAs('public/about', $namefile);
      $about->about_image = $namefile;
    }

    if ($request->file('about_sub_image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('about_sub_image')->getClientOriginalExtension();
      $request->file('about_sub_image')->storeAs('public/about', $namefile);
      $about->about_sub_image = $namefile;
    }

    $about->seccion_video_title = $request->seccion_video_title;
    $about->seccion_video_description = $request->seccion_video_description;
    $about->seccion_video_link = $request->seccion_video_link;

    $about->save();

    return redirect()->route('about.index')->with('updated', 'Registro actualizado exitósamente.');
  }

  public function store(StoreAboutRequest $request)
  {
    // dd($request->all());
    $about = new About();

    $about->about_title = $request->title;
    $about->about_description = $request->description;
    if ($request->file('about_image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('about_image')->getClientOriginalExtension();
      $request->file('about_image')->storeAs('public/about', $namefile);
      $about->about_image = $namefile;
    }

    if ($request->file('about_sub_image')) {
      $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('about_sub_image')->getClientOriginalExtension();
      $request->file('about_sub_image')->storeAs('public/about', $namefile);
      $about->about_sub_image = $namefile;
    }

    $about->save();
    return redirect()->route('about.index')->with('created', 'Se creo exitosamente su Slider');
  }
}
