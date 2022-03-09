<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'blog_id' => rand(1, 8),
          'name' => $this->faker->name(),
          'email' => $this->faker->unique()->safeEmail(),
          'comment' => $this->faker->text(250),
          'is_active' => 1
        ];
    }
}
