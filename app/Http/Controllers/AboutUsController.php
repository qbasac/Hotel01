<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class  AboutUsController extends Controller
{
  public function index()
  {
    $about = About::first();
    return view('frontend.about-us', compact('about'));
  }
}
