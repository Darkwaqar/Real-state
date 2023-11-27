<?php

namespace Database\Seeders;

use App\Models\Appliances;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppliancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appliances::create([
            'ApplianceName'           => 'Dishwasher',
            'ApplianceIcon'           => '11-dishwasher.png',
            'ApplianceSelectedIcon'   => '11-dishwasher-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Disposal',
            'ApplianceIcon'           => 'disposal-icon.png',
            'ApplianceSelectedIcon'   => 'disposal-icon-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Microwave',
            'ApplianceIcon'           => 'microwave.png',
            'ApplianceSelectedIcon'   => 'microwave-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Range/Oven',
            'ApplianceIcon'           => '01-microwave.png',
            'ApplianceSelectedIcon'   => '01-microwave-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Refrigerator',
            'ApplianceIcon'           => '02-refrigerator.png',
            'ApplianceSelectedIcon'   => '02-refrigerator-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Dryer',
            'ApplianceIcon'           => 'dryer.png',
            'ApplianceSelectedIcon'   => 'dryer-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Washer',
            'ApplianceIcon'           => '11-dishwasher.png',
            'ApplianceSelectedIcon'   => '11-dishwasher-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Double Oven',
            'ApplianceIcon'           => '01-microwave.png',
            'ApplianceSelectedIcon'   => '01-microwave-red.png',
        ]);
        Appliances::create([
            'ApplianceName'           => 'Trash Compactor',
            'ApplianceIcon'           => 'disposal-icon.png',
            'ApplianceSelectedIcon'   => 'disposal-icon-red.png',
        ]);
        
        Appliances::create([
            'ApplianceName'           => 'Stove/Range',
            'ApplianceIcon'           => 'stove.png',
            'ApplianceSelectedIcon'   => 'stove-red.png',
        ]);

    }
}
