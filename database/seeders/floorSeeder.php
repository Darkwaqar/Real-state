<?php

namespace Database\Seeders;

use App\Models\Flooring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class floorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flooring::create([
            'FloringName' => 'Hardwood',
            'FloringeIcon' => 'wood.png',
            'FloringSelectedIcon' => 'wood-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Vinyl',
            'FloringeIcon' => 'vinyl.png',
            'FloringSelectedIcon' => 'vinyl-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Carpet',
            'FloringeIcon' => 'carpet.png',
            'FloringSelectedIcon' => 'carpet-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Slate',
            'FloringeIcon' => 'slate.png',
            'FloringSelectedIcon' => 'Slate-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Concrete',
            'FloringeIcon' => 'concrete.png',
            'FloringSelectedIcon' => 'concrete-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Softwood',
            'FloringeIcon' => 'wood.png',
            'FloringSelectedIcon' => 'wood-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Engineered Hardwood',
            'FloringeIcon' => 'wood.png',
            'FloringSelectedIcon' => 'wood-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Vinyl Plank',
            'FloringeIcon' => 'vinyl.png',
            'FloringSelectedIcon' => 'vinyl-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Stone',
            'FloringeIcon' => 'stone.png',
            'FloringSelectedIcon' => 'stone-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Marble',
            'FloringeIcon' => 'tile.png',
            'FloringSelectedIcon' => 'tile-red.png'
        ]);
        Flooring::create([
            'FloringName' => 'Granite',
            'FloringeIcon' => 'bricks.png',
            'FloringSelectedIcon' => 'bricks-red.png'
        ]);
    }
}
