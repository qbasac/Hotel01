<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\home;
use App\Models\Services;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
      $home = home::first();
      $services = Services::get();
      return view('backend.home.services.index', compact('services', 'home'));
    }

    public function create()
    {
      return view('backend.home.services.create');
    }

    public function store(Request $request)
    {
      $services = new Services();
      $services->title = $request->title;
      $services->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/service-image', $namefile);
        $services->image = $namefile;
      }
      $services->save();
      return redirect()->route('admin.services.index')->with('created', 'Registro guardado exitósamente.');
    }

    public function edit($id)
    {
      $service = Services::whereId($id)->first();
      return view('backend.home.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
      $service = Services::find($id);
      $service->title = $request->title;
      $service->description = $request->description;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/service-image', $namefile);
        $service->image = $namefile;
      }      $service->save();
      return redirect()->route('admin.services.index')->with('created', 'Registro actualizado exitósamente.');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      Services::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }

    public function destroy($id)
    {
      $service = Services::find($id);
      $service->delete();
      return redirect()->route('admin.services.index');
    }

    public function ShowSectionServices(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      home::whereId($id)->update([
        'show_section_services' => $newState
      ]);
      return redirect()->route('admin.services.index');
    }
    // public function handleImages(Request $request) {
    //   dd($request->all());
    // }
}
