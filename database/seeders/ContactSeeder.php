<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Contact::truncate();
    $contact = new Contact();
    $contact->direction_map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.612090391112!2d-75.21302558507068!3d-12.070189045623298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e964fc7427323%3A0x33f364af070b1314!2sQBA%20S.A.C%20-%20Full%20Tecnolog%C3%ADa!5e0!3m2!1ses!2spe!4v1648249696520!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    $contact->direction = 'Jr. Lima Nro. 433 ';
    $contact->phone = '064215526';
    $contact->email = 'fulltecnologia@gmail.com';

    $contact->save();
  }
}
