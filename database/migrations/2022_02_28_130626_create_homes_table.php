<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_section_slider')->default(1);
            $table->boolean('show_section_offers')->default(1);
            $table->boolean('show_section_services')->default(1);
            $table->boolean('show_section_gallery')->default(1);
            $table->boolean('show_section_blog')->default(1);
            $table->boolean('show_section_prices')->default(1);
            $table->boolean('show_section_brands')->default(1);
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
        Schema::dropIfExists('homes');
    }
}
