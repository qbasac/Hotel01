<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function blogDetail()
    {
        return view('frontend.blog-detail');
    }
    public function blogLarge()
    {
        return view('frontend.blog-Large');
    }
    public function blogList()
    {
        return view('frontend.blog-List');
    }
    public function blogMedium()
    {
        return view('frontend.blog-medium');
    }
    public function blogSmall()
    {
        return view('frontend.blog-small');
    }
    public function blogSiderbar()
    {
        return view('frontend.blog-sidebar');
    }
}
