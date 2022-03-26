<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function galeriaSimple()
    {
        $galleries = Gallery::where('is_active', 1)->paginate(6);
        return view('frontend.simple-gallery', compact('galleries'));
    }
}
