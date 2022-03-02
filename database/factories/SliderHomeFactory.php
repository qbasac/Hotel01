<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class SliderHomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'sub_title' => $this->faker->sentence(2, true),
          'title' => $this->faker->words(4, true),
          'description' => $this->faker->text(500),
          'link_1' => $this->faker->url(),
          'link_2' => $this->faker->url(),
          'slider_image' => $this->faker->image('public/storage/slider-image',1920, 1200,'cats', false),
        ];
    }
}
