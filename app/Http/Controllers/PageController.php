<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function pagesStarter()
    {
        return view('backend.page-starter');
    }
}
