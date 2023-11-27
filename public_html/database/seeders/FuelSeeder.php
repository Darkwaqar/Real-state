<?php

namespace Database\Seeders;

use App\Models\HeatingFuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeatingFuel::create([
            'HeatingFuelName'           => 'Coal',
            'HeatingFuelIcon'           => 'coal.png',
            'HeatingFuelSelectedIcon'   => 'coal-red.png',
        ]);
        HeatingFuel::create([
            'HeatingFuelName'           => 'Eletric',
            'HeatingFuelIcon'           => 'electric.png',
            'HeatingFuelSelectedIcon'   => 'electric-red.png',
        ]);
        HeatingFuel::create([
            'HeatingFuelName'           => 'Gas',
            'HeatingFuelIcon'           => 'gas.png',
            'HeatingFuelSelectedIcon'   => 'gas-red.png',
        ]);
        HeatingFuel::create([
            'HeatingFuelName'           => 'Oil',
            'HeatingFuelIcon'           => 'oil.png',
            'HeatingFuelSelectedIcon'   => 'oil-red.png',
        ]);
        HeatingFuel::create([
            'HeatingFuelName'           => 'Propane / Butane',
            'HeatingFuelIcon'           => 'butane.png',
            'HeatingFuelSelectedIcon'   => 'butane-red.png',
        ]);
        HeatingFuel::create([
            'HeatingFuelName'           => 'Solar',
            'HeatingFuelIcon'           => 'solar.png',
            'HeatingFuelSelectedIcon'   => 'solar-red.png',
        ]);
        HeatingFuel::create([
            'HeatingFuelName'           => 'Wood / Pellet',
            'HeatingFuelIcon'           => 'wood.png',
            'HeatingFuelSelectedIcon'   => 'wood-red.png',
        ]);
    }
}
