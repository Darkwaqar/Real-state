<?php

namespace Database\Seeders;

use App\Models\ExteriorFeatures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExteriorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Brick',
            'ExterFeatureIcon' => 'bricks.png',
            'ExterFeatureSelectedIcon' => 'bricks-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Wood',
            'ExterFeatureIcon' => 'wood.png',
            'ExterFeatureSelectedIcon' => 'wood-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Cement/Concrete',
            'ExterFeatureIcon' => 'concrete.png',
            'ExterFeatureSelectedIcon' => 'concrete-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Wood Products',
            'ExterFeatureIcon' => 'wood.png',
            'ExterFeatureSelectedIcon' => 'wood-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Metal/Vinyl',
            'ExterFeatureIcon' => 'Metal-Exterior.png',
            'ExterFeatureSelectedIcon' => 'Metal-Exterior-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Stone',
            'ExterFeatureIcon' => 'stone.png',
            'ExterFeatureSelectedIcon' => 'stone-red.png'
        ]);

        ExteriorFeatures::create([
            'ExterFeatureName' => 'Log',
            'ExterFeatureIcon' => 'wood.png',
            'ExterFeatureSelectedIcon' => 'wood-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Composition',
            'ExterFeatureIcon' => 'composition-exterior.png',
            'ExterFeatureSelectedIcon' => 'composition-exterior-red.png'
        ]);
        ExteriorFeatures::create([
            'ExterFeatureName' => 'Stucco',
            'ExterFeatureIcon' => 'Stucco-Exterior.png',
            'ExterFeatureSelectedIcon' => 'Stucco-Exterior-red.png'
        ]);
    }
}
