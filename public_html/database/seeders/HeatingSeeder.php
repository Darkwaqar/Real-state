<?php

namespace Database\Seeders;

use App\Models\HeatingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeatingType::create([
            'HeatingTypeName' => 'Baseboard',
            'HeatingTypeIcon' => 'wall.png',
            'HeatingTypeSelectedIcon' => 'wall-red.png',
        ]);
        HeatingType::create([
            'HeatingTypeName' => 'Forced Air',
            'HeatingTypeIcon' => 'Forced-air.png',
            'HeatingTypeSelectedIcon' => 'Forced-air-red.png',
        ]);
        HeatingType::create([
            'HeatingTypeName' => 'Geothermal',
            'HeatingTypeIcon' => 'geothermal.png',
            'HeatingTypeSelectedIcon' => 'geothermal-red.png',
        ]);
        HeatingType::create([
            'HeatingTypeName' => 'Heat pump',
            'HeatingTypeIcon' => 'Heat-pump.png',
            'HeatingTypeSelectedIcon' => 'Heat-pump-red.png',
        ]);
        HeatingType::create([
            'HeatingTypeName' => 'Radiant',
            'HeatingTypeIcon' => 'heater.png',
            'HeatingTypeSelectedIcon' => 'heater-red.png',
        ]);
        HeatingType::create([
            'HeatingTypeName' => 'Stove',
            'HeatingTypeIcon' => 'stove.png',
            'HeatingTypeSelectedIcon' => 'stove-red.png',
        ]);
        HeatingType::create([
            'HeatingTypeName' => 'Wall',
            'HeatingTypeIcon' => 'wall.png',
            'HeatingTypeSelectedIcon' => 'wall-red.png',
        ]);

        
    }
}
