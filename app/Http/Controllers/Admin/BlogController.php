<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\home;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index(Request $request)
  {
    $columnOrder = 'id';
    $orderBy = 'desc';

    if ($request->searchBy == 'created_at') {
      $columnOrder = $request->searchBy;
      $orderBy = $request->orderBy;
    }
    $home = home::first();
    $blogs = Blog::where(function ($query) use ($request) {
      if ($request->searchBy == 'title') {
        $query->where($request->searchBy, 'LIKE', "%$request->search%");
      }
    })
    ->orderBy($columnOrder, $orderBy)
    ->paginate(7);

    return view('backend.blog.blogs.index', compact('blogs', 'home'));
  }

  public function create()
  {
    return view('backend.blog.blogs.create');
  }

  public function store(Request $request)
  {
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
    return redirect()->route('admin.blog.index')->with('created', 'Registro guardado exitósamente.');
  }

  public function edit($id)
  {
    $blog = Blog::whereId($id)->first();
    return view('backend.blog.blogs.edit', compact('blog'));
  }

  public function update(Request $request, $id)
  {
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
    return redirect()->route('admin.blog.index')->with('updated', 'Registro actualizado exitósamente.');
  }

  public function destroy($id)
  {
    $blog = Blog::find($id);
    $blog->delete();
    return redirect()->route('admin.blog.index')->with('deleted', 'Eliminado satisfactoriamente');
  }

  public function updateIsActive(Request $request, $id)
  {

    $newState = $request->state ? 0 : 1;
    Blog::whereId($id)->update([
      'is_active' => $newState
    ]);
    return back();
  }

  public function ShowSectionBlog(Request $request, $id)
  {
    $newState = $request->state ? 0 : 1;
    home::whereId($id)->update([
      'show_section_blog' => $newState
    ]);
    return redirect()->route('admin.blog.index');
  }
}
