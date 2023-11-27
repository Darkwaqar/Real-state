<?php

namespace Database\Seeders;

use App\Models\ArchitecturalStyle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class archiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Contemporary',
            'ArchitecturalIcon'           => 'colony.png',
            'ArchitecturalSelectedIcon'   => 'colony-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Northwest Contemporary',
            'ArchitecturalIcon'           => 'colony.png',
            'ArchitecturalSelectedIcon'   => 'colony-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Craftsman',
            'ArchitecturalIcon'           => 'craftsman.png',
            'ArchitecturalSelectedIcon'   => 'craftsman-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Traditional',
            'ArchitecturalIcon'           => 'territorial.png',
            'ArchitecturalSelectedIcon'   => 'territorial-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Townhouse',
            'ArchitecturalIcon'           => 'barbecue.png',
            'ArchitecturalSelectedIcon'   => 'barbecue-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Tudor',
            'ArchitecturalIcon'           => 'tudor.png',
            'ArchitecturalSelectedIcon'   => 'tudor-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'A-Frame',
            'ArchitecturalIcon'           => 'built-up.png',
            'ArchitecturalSelectedIcon'   => 'built-up-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Cabin',
            'ArchitecturalIcon'           => 'bungalow.png',
            'ArchitecturalSelectedIcon'   => 'bungalow-red.png',
        ]);

        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Victorian',
            'ArchitecturalIcon'           => 'victorian.png',
            'ArchitecturalSelectedIcon'   => 'victorian-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Cape Cod',
            'ArchitecturalIcon'           => 'Cape-code.png',
            'ArchitecturalSelectedIcon'   => 'Cape-code-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Modern',
            'ArchitecturalIcon'           => 'Modern.png',
            'ArchitecturalSelectedIcon'   => 'Modern-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Spanish',
            'ArchitecturalIcon'           => 'Spanish.png',
            'ArchitecturalSelectedIcon'   => 'Spanish-red.png',
        ]);
        ArchitecturalStyle::create([
            'ArchitecturalName'           => 'Colonial',
            'ArchitecturalIcon'           => 'colony.png',
            'ArchitecturalSelectedIcon'   => 'colony-red.png',
        ]);
        
    }
}
