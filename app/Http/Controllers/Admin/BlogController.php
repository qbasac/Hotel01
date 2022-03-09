<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
      $blogs = Blog::get();
      return view('backend.blog.blogs.index', compact('blogs'));
    }

    public function create(){
      return view('backend.blog.blogs.create');
    }

    public function store(Request $request){
      $blog = new Blog();
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->name_author = $request->name_author;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/blog-image', $namefile);
        $blog->image = $namefile;
      }
      $blog->save();
      return redirect()->route('admin.blog.index');
    }

    public function edit($id){
      $blog = Blog::whereId($id)->first();
      return view('backend.blog.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id){
      $blog = Blog::find($id);
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->name_author = $request->name_author;
      if ($request->file('image')) {
        $namefile = Carbon::now()->format("dmYHis") . "." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/blog-image', $namefile);
        $blog->image = $namefile;
      }
      $blog->save();
      return redirect()->route('admin.blog.index');
    }

    public function destroy($id){
      $blog = Blog::find($id);
      $blog->delete();
      return redirect()->route('admin.blog.index')->with('delete', 'Eliminado satisfactoriamente');
    }

    public function updateIsActive(Request $request, $id)
    {

      $newState = $request->state ? 0 : 1;
      Blog::whereId($id)->update([
        'is_active' => $newState
      ]);
      return back();
    }
}
