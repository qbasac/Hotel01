<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
      return view('backend.home.services.index');
    }

    public function create()
    {
      return view('backend.home.services.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
      return view('backend.home.services.edit');
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
