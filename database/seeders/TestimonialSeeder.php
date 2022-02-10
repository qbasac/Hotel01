<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $testimonial = new Testimonial();
      $testimonial->section_testimonial_comment='Este es un comentario';
      $testimonial->section_testimonial_rating='3';
      $testimonial->section_testimonial_name='Hernan';

      $testimonial->save();


    }
}
