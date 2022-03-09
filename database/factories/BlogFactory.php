<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'blog_id' => rand(1, 12),
          'title' => $this->faker->words(4, true),
          'description' => $this->faker->text(1500),
          'name_author' => $this->faker->name(),
          'like' => $this->faker->randomFloat(2,25, 100),
          'image' => $this->faker->image('public/storage/blog-image',370, 264,'cats', false),



        ];
    }
}
