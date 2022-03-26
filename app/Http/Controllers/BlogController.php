<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogCommentsRequest;
use App\Models\Blog;
use App\Models\BlogComments;
use App\Models\Services;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogSmall()
    {
        $blogs = Blog::with('comments')
        ->withCount(['comments' => function($query) {
          $query->where('is_active', 1);
        }])
        ->active()
        ->paginate(6);
        return view('frontend.blog-small', compact('blogs'));
    }

    public function show($id)
    {
      $blog = Blog::orderBy('created_at','desc')->with('comments')
      ->withCount(['comments' => function($query) {
        $query->where('is_active', 1);
      }])
      ->whereId($id)

      ->first();
      return view('frontend.blog-detail', compact('blog'));
    }

    public  function store(StoreBlogCommentsRequest $request){
      $blog_comments = new BlogComments();
      $blog_comments->blog_id = $request->blog_id;
      $blog_comments->name = $request->name;
      $blog_comments->email = $request->email;
      $blog_comments->comment = $request->comment;
      $blog_comments->save();
      return back()->with('created', 'vale');
    }

      // public function blogDetail($id)
    // {
    //     $blog_comments = BlogComments::get();
    //     $blog = Blog::whereId($id)->first();
    //     return view('frontend.blog-detail', compact('blog', 'blog_comments'));

    // }
  }
