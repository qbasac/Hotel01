<?php

namespace Database\Seeders;

use App\Models\home;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\User::factory(10)->create();
      home::create();
      $this->call(AboutSeeder::class);
      $this->call(TestimonialSeeder::class);
      $this->call(RoomSeeder::class);
      $this->call(RoomReservationSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(SliderHomeSeeder::class);


      // $this->call(OffersHomeSeeder::class);
    }
}
