<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name'     => fake()->name(),
            'email'    => fake()->unique()->email(),
            'role'     => 'receptionist',
            'password' => bcrypt('rahasia'),
        ];
    }
}
