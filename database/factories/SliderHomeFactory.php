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
          'title' => $this->faker->sentence(6, true),
          'description' => $this->faker->text(500),
          'link_1' => $this->faker->url(),
          'link_1' => $this->faker->url(),
          'slider_image_1' => $this->faker->image('public/storage/slider-image',1920, 1200,'cats', false),
          'slider_image_2' => $this->faker->image('public/storage/slider-image',1920, 1200,'cats', false),
          'slider_image_3' => $this->faker->image('public/storage/slider-image',1920, 1200,'cats', false),
        ];
    }
}
