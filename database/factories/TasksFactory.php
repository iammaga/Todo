<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->sentence(),
            'created_at' => $this->faker->date(),
        ];
    }
}
