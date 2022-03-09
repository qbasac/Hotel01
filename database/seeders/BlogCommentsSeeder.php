<?php

namespace Database\Seeders;

use App\Models\BlogComments;
use Illuminate\Database\Seeder;

class BlogCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      BlogComments::truncate();
      BlogComments::factory()->count(24)->create();
    }
}
