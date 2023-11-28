<?php

namespace Database\Seeders;

use App\Models\CoolingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoolingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoolingType::create([
            'CoolingTypeName' => 'Central',
            'CoolingTypeIcon' => 'air-conditioner.png',
            'CoolingTypeSelectedIcon' => 'air-conditioner-red.png',
        ]);
        CoolingType::create([
            'CoolingTypeName' => 'Evaporative',
            'CoolingTypeIcon' => 'Evaporative.png',
            'CoolingTypeSelectedIcon' => 'Evaporative-red.png',
        ]);
        CoolingType::create([
            'CoolingTypeName' => 'Geothermal',
            'CoolingTypeIcon' => 'geothermal.png',
            'CoolingTypeSelectedIcon' => 'geothermal-red.png',
        ]);
        CoolingType::create([
            'CoolingTypeName' => 'Refrigeration',
            'CoolingTypeIcon' => 'Refrigeration.png',
            'CoolingTypeSelectedIcon' => 'Refrigeration-red.png',
        ]);
        CoolingType::create([
            'CoolingTypeName' => 'Solar',
            'CoolingTypeIcon' => 'solar.png',
            'CoolingTypeSelectedIcon' => 'solar-red.png',
        ]);
        CoolingType::create([
            'CoolingTypeName' => 'Wall',
            'CoolingTypeIcon' => 'wall.png',
            'CoolingTypeSelectedIcon' => 'wall-red.png',
        ]);
        
    }
}
