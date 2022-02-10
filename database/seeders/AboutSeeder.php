<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About();
        $about->about_title='Este es un titulo';
        $about->about_description='Este es un a descripción';
        $about->about_link='https://www.google.com/';
        $about->save();
    }
}
