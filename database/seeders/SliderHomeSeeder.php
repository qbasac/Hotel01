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
      SliderHome::factory()->count(1)->create();
    }
}
