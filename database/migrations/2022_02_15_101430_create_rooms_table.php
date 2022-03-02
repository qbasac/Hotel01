<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('rooms', function (Blueprint $table) {
      $table->id();
      $table->string('name',150);
      $table->text('description');
      $table->decimal('price', 5, 2);
      $table->text('image');
      $table->integer('number_beds');
      $table->integer('number_people');
      $table->boolean('has_offer')->default(0);
      $table->integer('discount')->nullable();
      $table->decimal('rental_price', 5, 2);
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
    Schema::dropIfExists('rooms');
  }
}
