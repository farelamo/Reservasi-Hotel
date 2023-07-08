<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Izin;
use App\Models\Hadir;
use App\Models\Shift;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('rahasia'),
            'role'      => 'admin'
        ]);

        User::factory()->count(5)->create();
    }
}
