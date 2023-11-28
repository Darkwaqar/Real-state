<?php

namespace Database\Seeders;

use App\Models\OutDoor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class outDoorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        OutDoor::create([
            'OutdooramenityName' => 'Balcony/patio',
            'OutdooramenityIcon' => 'balcony.png',
            'OutdooramenitySelectedIcon' => 'balcony-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName' => 'Barbecue area',
            'OutdooramenityIcon' => 'barbecue.png',
            'OutdooramenitySelectedIcon' => 'barbecue-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Deck',
            'OutdooramenityIcon'            => 'deck.png',
            'OutdooramenitySelectedIcon'    => 'Deck-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Dock',
            'OutdooramenityIcon'            => 'dock.png',
            'OutdooramenitySelectedIcon'    => 'Dock-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Fenced yard',
            'OutdooramenityIcon'            => 'fenced-yard.png',
            'OutdooramenitySelectedIcon'    => 'fenced-yard-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Garden',
            'OutdooramenityIcon'            => 'garden.png',
            'OutdooramenitySelectedIcon'    => 'garden-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Greenhouse',
            'OutdooramenityIcon'            => 'green-house.png',
            'OutdooramenitySelectedIcon'    => 'green-house-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Hot tub/spa',
            'OutdooramenityIcon'            => 'bath.png',
            'OutdooramenitySelectedIcon'    => 'bath-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Lawn',
            'OutdooramenityIcon'            => 'wood.png',
            'OutdooramenitySelectedIcon'    => 'wood-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Pond',
            'OutdooramenityIcon'            => 'pond.png',
            'OutdooramenitySelectedIcon'    => 'pond-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Pool',
            'OutdooramenityIcon'            => 'pool.png',
            'OutdooramenitySelectedIcon'    => 'pool-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Porch',
            'OutdooramenityIcon'            => 'porch.png',
            'OutdooramenitySelectedIcon'    => 'porch-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'RV parking',
            'OutdooramenityIcon'            => 'RV-Parking.png',
            'OutdooramenitySelectedIcon'    => 'RV-Parking-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Sauna',
            'OutdooramenityIcon'            => 'sauna.png',
            'OutdooramenitySelectedIcon'    => 'sauna-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Sprinkler system',
            'OutdooramenityIcon'            => 'Sprinkle-system.png',
            'OutdooramenitySelectedIcon'    => 'Sprinkle-system-red.png',
        ]);
        OutDoor::create([
            'OutdooramenityName'            => 'Waterfront',
            'OutdooramenityIcon'            => 'water-front.png',
            'OutdooramenitySelectedIcon'    => 'water-front-red.png',
        ]);

    }
}
