<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition()
    {
        return [
            'investor_id'     => rand(1, 10),
            'state_id'        => rand(1, 10),
            'name'            => fake()->name(),
            'phone'           => rand(100000, 500000),
            'passport_number' => rand(10000, 50000),
            'country'         => fake()->word(),
            'vaccine1'        => fake()->word(),
            'vaccine2'        => fake()->word(),
            'vaccine3'        => fake()->word(),
            'start'           => date('Y-m-d'),
            'end'             => date('Y-m-d'),
        ];
    }
}
