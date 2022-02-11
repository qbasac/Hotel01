<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
      $testimonials = Testimonial::get();
      return view('backend.testimonial.index', compact('testimonials'));
    }

    public function create(){
      return view('backend.testimonial.create');
    }

    public function store(Request $request){
      $testimonial = new Testimonial();
      $testimonial->section_testimonial_name = $request->name;
      $testimonial->section_testimonial_comment = $request->comment;
      $testimonial->section_testimonial_rating = $request->rating;
      $testimonial->section_testimonial_gender = $request->gender;

      $testimonial->save();

      return redirect()->route('testimonial.index');

    }

    public function edit($id)
    {
      $testimonial = Testimonial::whereId($id)->first();
      return view('backend.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id){
      $testimonial =  Testimonial::find($id);
      $testimonial->section_testimonial_name = $request->name;
      $testimonial->section_testimonial_comment = $request->comment;
      $testimonial->section_testimonial_rating = $request->rating;
      $testimonial->section_testimonial_gender = $request->gender;


      $testimonial->save();

      return redirect()->route('testimonial.index');

    }

    public function updateIsActive(Request $request, $id)
    {
      $newState = $request->state ? 0 : 1;
      Testimonial::whereId($id)->update([
        'seccion_testimonial_is_active' => $newState
      ]);
      return redirect()->route('testimonial.index');
    }

    public function destroy($id)
    {
      $testimonial = Testimonial::find($id);
      $testimonial->delete();

      return redirect()->route('testimonial.index');
    }
}
