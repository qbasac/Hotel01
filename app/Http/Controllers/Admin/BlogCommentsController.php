<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComments;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
{
    public function index(){
      $blog_comments = BlogComments::with('blog')->paginate(10);
      return view('backend.blog.blog-comments.index', compact('blog_comments'));
    }

    public function create(){
      return view('backend.blog.blog-comments.create');
    }

    public  function store(Request $request){
      $blog_comments = new BlogComments();
      $blog_comments->name = $request->name;
      $blog_comments->email = $request->email;
      $blog_comments->comment = $request->comment;
      $blog_comments->save();
      return redirect()->route('admin.blog-comments.index');
    }

    // public function edit($id){
    //   $blog_comments = BlogComments::whereId($id)->first();
    //   return view('backend.blog.blog-comments.edit', compact('blog_comments'));
    // }

    // public function update(Request $request, $id){
    //   $blog_comments = BlogComments::find($id);
    //   $blog_comments->name = $request->name;
    //   $blog_comments->email = $request->email;
    //   $blog_comments->comment = $request->comment;
    //   $blog_comments->save();
    //   return redirect()->route('admin.blog-comments.index');
    // }

    public function destroy($id){
      $blog_comments = BlogComments::find($id);
      $blog_comments->delete();
      return redirect()->route('admin.blog-comments.index')->with('delete', 'Eliminado satisfactoriamente');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      BlogComments::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }
}
