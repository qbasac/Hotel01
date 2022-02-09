<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
