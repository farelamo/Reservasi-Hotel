<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvestorFactory extends Factory
{
    public function definition()
    {
        return [
            'company_name' => fake()->name(),
            'country'      => fake()->word(),
            'phone'        => rand(100000, 500000),
        ];
    }
}
