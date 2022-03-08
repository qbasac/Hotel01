<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\home;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
      $home = home::first();
      $galleries = Gallery::all();
      return view('backend.home.gallery.index', compact('galleries', 'home'));
    }

    public function create()
    {
      return view('backend.home.gallery.create');
    }

    public function store(Request $request)
    {
      $gallery = new Gallery();
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/gallery-image', $namefile);
        $gallery->image = $namefile;
      }
      $gallery->description = $request->description;
      $gallery->save();
      return redirect()->route('admin.gallery.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function update(Request $request, $id)
    {
            // dd($request->all());

      $gallery = Gallery::find($id);
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/gallery-image', $namefile);
        $gallery->image = $namefile;
      }
      $gallery->description = $request->description;
      $gallery->save();
      return redirect()->route('admin.gallery.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function destroy($id)
    {
      $gallery = Gallery::find($id);
      $gallery->delete();
      return redirect()->route('admin.gallery.index')->with('deleted', 'vale');
      }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      Gallery::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }

    public function ShowSectionGallery(Request $request, $id)
    {
      $newState = $request->state ? 0 : 1;
      home::whereId($id)->update([
        'show_section_gallery' => $newState
      ]);
      return redirect()->route('admin.gallery.index');
    }
}

