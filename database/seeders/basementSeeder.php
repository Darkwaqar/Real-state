<?php

namespace Database\Seeders;

use App\Models\Basement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class basementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Basement::create([
            'BasementName'           => 'Finished',
            'BasementIcon'           => 'basement.png',
            'BasementSelectedIcon'   => 'basement-red.png',
        ]);
        Basement::create([
            'BasementName'           => 'Daylight',
            'BasementIcon'           => 'sun-room.png',
            'BasementSelectedIcon'   => 'sun-room-red.png',
        ]);
        Basement::create([
            'BasementName'           => 'Partially Finished',
            'BasementIcon'           => 'Partially Finished Basement.png',
            'BasementSelectedIcon'   => 'Partially-Finished-Basement.png',
        ]);
    }
}
