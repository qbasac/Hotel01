<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function galeriaMaposteria()
    {
        return view('frontend.masonry-gallery');
    }
    public function galeriaSimple()
    {
        return view('frontend.simple-gallery');
    }
}
