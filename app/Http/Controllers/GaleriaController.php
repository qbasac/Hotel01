<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function galeriaSimple()
    {
        $galleries = Gallery::where('is_active', 1)->get();
        return view('frontend.simple-gallery', compact('galleries'));
    }
}
