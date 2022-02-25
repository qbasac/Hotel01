<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_title', 50);
            $table->text('about_description');
            $table->text('about_link')->nullable();
            $table->string('about_image')->nullable();
            $table->string('about_sub_image')->nullable();

            $table->string('seccion_video_title')->nullable();
            $table->text('seccion_video_description')->nullable();
            $table->text('seccion_video_link')->nullable();

            $table->boolean('seccion_staff_is_active')->default(1);


            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('abouts');
    }
}
