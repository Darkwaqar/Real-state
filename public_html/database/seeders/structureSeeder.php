<?php

namespace Database\Seeders;

use App\Models\StructureType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class structureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StructureType::create([
            'StructureTypeName' => 'Premier Properties',
            'structure_icon' => 'icon-7',
            'order' => 1,
        ]);
        StructureType::create([
            'StructureTypeName' => 'Single Family',
            'structure_icon' => 'icon-1',
            'order' => 2,
        ]);
        StructureType::create([
            'StructureTypeName' => 'Multi Family',
            'structure_icon' => 'icon-2',
            'order' => 3,
        ]);
        StructureType::create([
            'StructureTypeName' => 'Condominium',
            'structure_icon' => 'icon-4',
            'order' => 4,
        ]);
        StructureType::create([
            'StructureTypeName' => 'Townhouse',
            'structure_icon' => 'icon-9',
            'order' => 5,
        ]);
        StructureType::create([
            'StructureTypeName' => 'Land',
            'structure_icon' => 'icon-22',
            'order' => 6,
        ]);
        StructureType::create([
            'StructureTypeName' => 'Other',
            'order' => 7,
        ]);
    }
}
