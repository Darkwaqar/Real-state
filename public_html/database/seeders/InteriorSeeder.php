<?php

namespace Database\Seeders;

use App\Models\mlsInteriorFeatures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteriorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Forced Air',
            'InteriorFeatureIcon' => 'Forced-air.png',
            'InteriorFeatureSelectedIcon' => 'Forced-air-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Hardwood',
            'InteriorFeatureIcon' => 'wood.png',
            'InteriorFeatureSelectedIcon' => 'wood-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Wall to Wall Carpet',
            'InteriorFeatureIcon' => 'carpet.png',
            'InteriorFeatureSelectedIcon' => 'carpet-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Dining Room',
            'InteriorFeatureIcon' => 'dining-room.png',
            'InteriorFeatureSelectedIcon' => 'dining-room-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Walk-In Closet(s)',
            'InteriorFeatureIcon' => 'Walkin-closet.png',
            'InteriorFeatureSelectedIcon' => 'Walkin-closet-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'French Doors',
            'InteriorFeatureIcon' => 'French.png',
            'InteriorFeatureSelectedIcon' => 'French-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Concrete',
            'InteriorFeatureIcon' => 'concrete.png',
            'InteriorFeatureSelectedIcon' => 'concrete-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Heat Pump',
            'InteriorFeatureIcon' => 'Heat-pump.png',
            'InteriorFeatureSelectedIcon' => 'Heat-pump-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Ceiling Fan(s)',
            'InteriorFeatureIcon' => 'ceiling-fan.png',
            'InteriorFeatureSelectedIcon' => 'ceiling-fan-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Fireplace (Primary Bedroom)',
            'InteriorFeatureIcon' => 'fireplace.png',
            'InteriorFeatureSelectedIcon' => 'fireplace-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Solarium/Atrium',
            'InteriorFeatureIcon' => 'solarium.png',
            'InteriorFeatureSelectedIcon' => 'solarium-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Wet Bar',
            'InteriorFeatureIcon' => 'Wet-bar.png',
            'InteriorFeatureSelectedIcon' => 'Wet-bar-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Wired for Generator',
            'InteriorFeatureIcon' => 'wire.png',
            'InteriorFeatureSelectedIcon' => 'wire-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Balcony/Deck/Patio',
            'InteriorFeatureIcon' => 'balcony.png',
            'InteriorFeatureSelectedIcon' => 'balcony-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Dryer-Electric',
            'InteriorFeatureIcon' => 'electric.png',
            'InteriorFeatureSelectedIcon' => 'electric-red.png',
        ]);



        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Hot Tub/Spa',
            'InteriorFeatureIcon' => 'sauna.png',
            'InteriorFeatureSelectedIcon' => 'sauna-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Central A/C',
            'InteriorFeatureIcon' => 'air-conditioner.png',
            'InteriorFeatureSelectedIcon' => 'air-conditioner-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Cooking-Gas',
            'InteriorFeatureIcon' => 'gas.png',
            'InteriorFeatureSelectedIcon' => 'gas-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Dryer-Gas',
            'InteriorFeatureIcon' => 'dryer.png',
            'InteriorFeatureSelectedIcon' => 'dryer-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Built-In Vacuum',
            'InteriorFeatureIcon' => 'Evaporative.png',
            'InteriorFeatureSelectedIcon' => 'Evaporative-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Sauna',
            'InteriorFeatureIcon' => 'sauna.png',
            'InteriorFeatureSelectedIcon' => 'sauna-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Laminate Tile',
            'InteriorFeatureIcon' => 'tile.png',
            'InteriorFeatureSelectedIcon' => 'tile-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Window Unit A/C',
            'InteriorFeatureIcon' => 'air-conditioner.png',
            'InteriorFeatureSelectedIcon' => 'air-conditioner-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Laminate Hardwood',
            'InteriorFeatureIcon' => 'wood.png',
            'InteriorFeatureSelectedIcon' => 'wood-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'SMART Wired',
            'InteriorFeatureIcon' => 'wiring.png',
            'InteriorFeatureSelectedIcon' => 'wiring-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Sprinkler System',
            'InteriorFeatureIcon' => 'Sprinkle-system.png',
            'InteriorFeatureSelectedIcon' => 'Sprinkle-system-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Elevator',
            'InteriorFeatureIcon' => 'elevator.png',
            'InteriorFeatureSelectedIcon' => 'elevator-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Storage',
            'InteriorFeatureIcon' => 'storage.png',
            'InteriorFeatureSelectedIcon' => 'storage-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Hot Water',
            'InteriorFeatureIcon' => 'heater.png',
            'InteriorFeatureSelectedIcon' => 'heater-red.png',
        ]);
        mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Pantry',
            'InteriorFeatureIcon' => 'pantry.png',
            'InteriorFeatureSelectedIcon' => 'pantry-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Family/Rec Room',
            'InteriorFeatureIcon' => 'family-room.png',
            'InteriorFeatureSelectedIcon' => 'family-room-red.png',
        ]);mlsInteriorFeatures::create([
            'InteriorFeatureName' => 'Extra Room',
            'InteriorFeatureIcon' => 'living-room.png',
            'InteriorFeatureSelectedIcon' => 'living-room-red.png',
        ]);



    }
}
