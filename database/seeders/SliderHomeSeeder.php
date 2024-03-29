<?php

namespace Database\Seeders;

use App\Models\SliderHome;
use Illuminate\Database\Seeder;

class SliderHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      SliderHome::truncate();
      SliderHome::factory()->count(5)->create();
    }
}
