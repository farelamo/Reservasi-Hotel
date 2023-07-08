<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\StateImage;

class StateSeeder extends Seeder
{
    public function run()
    {
        State::factory()
                ->count(6)
                ->has(StateImage::factory()->count(4))
                ->create();
    }
}
