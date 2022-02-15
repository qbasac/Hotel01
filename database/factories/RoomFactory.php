<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
  protected $model = Room::class;
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->sentence(6, true),
      'description' => $this->faker->text(100),
      'price' => $this->faker->randomFloat(2,25, 100),
      'image' => $this->faker->image('public/storage/rooms',370, 255,'cats', false),
      'number_beds' => $this->faker->randomNumber(4),
      'number_people' => $this->faker->randomNumber(1),
    ];
  }
}
