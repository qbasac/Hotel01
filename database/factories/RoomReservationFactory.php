<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomReservationFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->name(),
      'email' => $this->faker->unique()->safeEmail(),
      'phone' => $this->faker->phoneNumber(),
      'room_type' => $this->faker->numberBetween(1,5),
      'reservation_start_date' => $this->faker->date(),
      'reservation_end_date' => $this->faker->date(),
      'quantity_adults' => $this->faker->numberBetween(1, 10),
      'quantity_childrens' => $this->faker->numberBetween(1, 10),
    ];
  }
}
