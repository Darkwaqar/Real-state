<?php

namespace Database\Seeders;

use App\Models\Roof;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoofsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roof::create([
            'RoofName' => 'Composition',
            'RoofIcon' => 'composition.png',
            'RoofSelectedIcon' => 'composition-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Cedar Shake',
            'RoofIcon' => 'shake-shingle.png',
            'RoofSelectedIcon' => 'shake-shingle-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Metal',
            'RoofIcon' => 'metal.png',
            'RoofSelectedIcon' => 'metal-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Torch Down',
            'RoofIcon' => 'metal.png',
            'RoofSelectedIcon' => 'metal-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Flat',
            'RoofIcon' => 'metal.png',
            'RoofSelectedIcon' => 'metal-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Asphalt',
            'RoofIcon' => 'Asphalt.png',
            'RoofSelectedIcon' => 'Asphalt-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Shake / Shingle',
            'RoofIcon' => 'shake-shingle.png',
            'RoofSelectedIcon' => 'shake-shingle-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Built-Up',
            'RoofIcon' => 'built-up.png',
            'RoofSelectedIcon' => 'built-up-red.png'
        ]);
        Roof::create([
            'RoofName' => 'Green (Living)',
            'RoofIcon' => 'green-house.png',
            'RoofSelectedIcon' => 'green-house-red.png'
        ]);
    }
}
