<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class StateImageFactory extends Factory
{
    public function definition()
    {
        return [
            'image' => fake()->realText(),
        ];
    }
}
