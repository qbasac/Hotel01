<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('testimonials', function (Blueprint $table) {
      $table->id();
      $table->text('section_testimonial_comment')->nullable();
      $table->integer('section_testimonial_rating')->nullable();
      $table->string('section_testimonial_name');
      $table->string('section_testimonial_avatar')->nullable();
      $table->boolean('seccion_testimonial_is_active')->default(1);

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('testimonials');
  }
}
