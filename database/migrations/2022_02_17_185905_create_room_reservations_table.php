<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomReservationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('room_reservations', function (Blueprint $table) {
      $table->id();
      $table->string('name', 70);
      $table->text('email');
      $table->string('phone', 25);
      $table->string('room_type', 70);
      $table->date('reservation_start_date');
      $table->date('reservation_end_date');
      $table->smallInteger('quantity_adults');
      $table->smallInteger('quantity_childrens')->nullable();
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
    Schema::dropIfExists('room_reservations');
  }
}
