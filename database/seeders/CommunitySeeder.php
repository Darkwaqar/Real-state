<?php

namespace Database\Seeders;

use App\Models\CommunityFeatures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Club House',
            'CommunityFeatureIcon'           => 'fitness-center.png',
            'CommunityFeatureSelectedIcon'   => 'fitness-center-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Golf',
            'CommunityFeatureIcon'           => 'fitness-center.png',
            'CommunityFeatureSelectedIcon'   => 'fitness-center-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Community Well',
            'CommunityFeatureIcon'           => 'wall.png',
            'CommunityFeatureSelectedIcon'   => 'wall-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Community Waterfront/Pvt Beach',
            'CommunityFeatureIcon'           => 'water-front.png',
            'CommunityFeatureSelectedIcon'   => 'water-front-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Tennis Courts',
            'CommunityFeatureIcon'           => 'tennis-court.png',
            'CommunityFeatureSelectedIcon'   => 'tennis-court-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Gated',
            'CommunityFeatureIcon'           => 'gated-entry.png',
            'CommunityFeatureSelectedIcon'   => 'gated-entry-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Fire Sprinklers',
            'CommunityFeatureIcon'           => 'fitness-center.png',
            'CommunityFeatureSelectedIcon'   => 'fitness-center-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Athletic Court',
            'CommunityFeatureIcon'           => 'water-front.png',
            'CommunityFeatureSelectedIcon'   => 'water-front-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Pool',
            'CommunityFeatureIcon'           => 'pool.png',
            'CommunityFeatureSelectedIcon'   => 'pool-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Laundry Room',
            'CommunityFeatureIcon'           => 'laundry-room.png',
            'CommunityFeatureSelectedIcon'   => 'laundry-room-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Disabled Access',
            'CommunityFeatureIcon'           => 'verified.png',
            'CommunityFeatureSelectedIcon'   => 'verified-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Outside Entry',
            'CommunityFeatureIcon'           => 'gated-entry.png',
            'CommunityFeatureSelectedIcon'   => 'gated-entry-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Hot Tub',
            'CommunityFeatureIcon'           => 'bath.png',
            'CommunityFeatureSelectedIcon'   => 'bath-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Lobby Entrance',
            'CommunityFeatureIcon'           => 'gated-entry.png',
            'CommunityFeatureSelectedIcon'   => 'gated-entry-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Indoor Pool',
            'CommunityFeatureIcon'           => 'pool.png',
            'CommunityFeatureSelectedIcon'   => 'pool-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Sauna',
            'CommunityFeatureIcon'           => 'sauna.png',
            'CommunityFeatureSelectedIcon'   => 'sauna-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Age Restriction',
            'CommunityFeatureIcon'           => 'verified.png',
            'CommunityFeatureSelectedIcon'   => 'verified-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Exercise Room',
            'CommunityFeatureIcon'           => 'fitness-center.png',
            'CommunityFeatureSelectedIcon'   => 'fitness-center-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'RV Parking',
            'CommunityFeatureIcon'           => 'RV-Parking.png',
            'CommunityFeatureSelectedIcon'   => 'RV-Parking-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Beach',
            'CommunityFeatureIcon'           => 'pond.png',
            'CommunityFeatureSelectedIcon'   => 'pond-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Dock',
            'CommunityFeatureIcon'           => 'deck.png',
            'CommunityFeatureSelectedIcon'   => 'Deck-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Park',
            'CommunityFeatureIcon'           => 'park.png',
            'CommunityFeatureSelectedIcon'   => 'park-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Playground',
            'CommunityFeatureIcon'           => 'garden.png',
            'CommunityFeatureSelectedIcon'   => 'garden-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Rooftop Deck',
            'CommunityFeatureIcon'           => 'balcony.png',
            'CommunityFeatureSelectedIcon'   => 'balcony-red.png',
        ]);
        CommunityFeatures::create([
            'CommunityFeatureName'           => 'Garden Space',
            'CommunityFeatureIcon'           => 'garden.png',
            'CommunityFeatureSelectedIcon'   => 'garden-red.png',
        ]);
    }
}
