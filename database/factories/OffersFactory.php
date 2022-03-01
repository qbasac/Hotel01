<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OffersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->text(30),
          'discount_percentage' => $this->faker->numberBetween(0, 100),
          'description' => $this->faker->text(40),
          'offer_image' => $this->faker->image('public/storage/offers-image',369, 202,'cats', false),
        ];
    }
}
