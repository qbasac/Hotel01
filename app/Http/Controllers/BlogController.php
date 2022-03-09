<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComments;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function blogDetail($id)
    {
        $blog_comments = BlogComments::swhere('is_active', 1)->get();
        $blog = Blog::whereId($id)->first();
        return view('frontend.blog-detail', compact('blog', 'blog_comments'));
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
        $blogs = Blog::where('is_active', 1)->get();
        return view('frontend.blog-small', compact('blogs'));
    }
    public function blogSiderbar()
    {
        return view('frontend.blog-sidebar');
    }
    public function show($id)
    {
      $blog = Blog::whereId($id)->first();
      return view('frontend.blog-detail', compact('blog'));
    }}
