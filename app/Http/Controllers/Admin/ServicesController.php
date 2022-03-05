<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
      $services = Services::get();
      return view('backend.home.services.index', compact('services'));
    }

    public function create()
    {
      return view('backend.home.services.create');
    }

    public function store(Request $request)
    {
      $services = new Services();
      $services->description = $request->description;
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
        //
    }

    public function destroy($id)
    {
        //
    }

    public function handleImages(Request $request) {
      dd($request->all());
    }
}
