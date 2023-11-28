<?php

namespace Database\Seeders;

use App\Models\ParkingFeatures as ModelsParkingFeatures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParkingFeatures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'RV Parking',
            'ParkingFeatureIcon' => 'RV-Parking.png',
            'ParkingFeatureSelectedIcon' => 'RV-Parking-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Garage',
            'ParkingFeatureIcon' => 'garage.png',
            'ParkingFeatureSelectedIcon' => 'garage-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Off Street',
            'ParkingFeatureIcon' => 'RV-Parking.png',
            'ParkingFeatureSelectedIcon' => 'RV-Parking-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Uncovered',
            'ParkingFeatureIcon' => 'RV-Parking.png',
            'ParkingFeatureSelectedIcon' => 'RV-Parking-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Common Garage',
            'ParkingFeatureIcon' => 'garage.png',
            'ParkingFeatureSelectedIcon' => 'garage-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Attached Carport',
            'ParkingFeatureIcon' => 'garage.png',
            'ParkingFeatureSelectedIcon' => 'garage-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Detached Garage',
            'ParkingFeatureIcon' => 'garage.png',
            'ParkingFeatureSelectedIcon' => 'garage-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Attached Garage',
            'ParkingFeatureIcon' => 'garage.png',
            'ParkingFeatureSelectedIcon' => 'garage-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Driveway',
            'ParkingFeatureIcon' => 'garage.png',
            'ParkingFeatureSelectedIcon' => 'garage-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Carport',
            'ParkingFeatureIcon' => 'carport.png',
            'ParkingFeatureSelectedIcon' => 'carport-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Detached Carport',
            'ParkingFeatureIcon' => 'carport.png',
            'ParkingFeatureSelectedIcon' => 'carport-red.png',
        ]);
        ModelsParkingFeatures::create([
            'ParkingFeatureName' => 'Individual Garage',
            'ParkingFeatureIcon' => 'RV-Parking.png',
            'ParkingFeatureSelectedIcon' => 'RV-Parking-red.png',
        ]);
    }
}
