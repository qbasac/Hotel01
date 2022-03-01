<?php

namespace Database\Seeders;

use App\Models\Offers;
use Illuminate\Database\Seeder;

class OffersHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Offers::factory()->count(6)->create();

    }
}
