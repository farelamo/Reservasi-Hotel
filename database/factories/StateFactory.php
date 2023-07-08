<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    public function definition()
    {
        return [
            'name'       => fake()->name(),
            'facilities' => fake()->realText(),
            'price'      => rand(1000000, 5000000),
            'room'       => rand(4, 10),
            'bedroom'    => rand(4, 10),
        ];
    }
}
