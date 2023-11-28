<?php

namespace Database\Seeders;

use App\Models\FeaturedRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeaturedRoom::create([
            'RoomName' => 'Breakfast nook',
            'RoomIcon' => 'croissant.png',
            'RoomSelectedIcon' => 'croissant-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Dining room',
            'RoomIcon' => 'dinning-table.png',
            'RoomSelectedIcon' => 'dinning-table-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Family room',
            'RoomIcon' => 'family-room.png',
            'RoomSelectedIcon' => 'family-room-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Laundry room',
            'RoomIcon' => 'laundry-room.png',
            'RoomSelectedIcon' => 'laundry-room-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Library',
            'RoomIcon' => 'library.png',
            'RoomSelectedIcon' => 'library-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Master bath',
            'RoomIcon' => 'bath.png',
            'RoomSelectedIcon' => 'bath-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Mud room',
            'RoomIcon' => 'shelves.png',
            'RoomSelectedIcon' => 'shelves-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Office',
            'RoomIcon' => 'workplace.png',
            'RoomSelectedIcon' => 'workplace-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Pantry',
            'RoomIcon' => 'pantry.png',
            'RoomSelectedIcon' => 'pantry-red.png',
        ]);
        FeaturedRoom::create([
            'RoomName' => 'Recreation room',
            'RoomIcon' => 'Recreation-room.png',
            'RoomSelectedIcon' => 'Recreation-room-red.png',
        ]);
        
        FeaturedRoom::create([
            'RoomName' => 'Workshop',
            'RoomIcon' => 'workplace.png',
            'RoomSelectedIcon' => 'workplace-red.png',
        ]);
        
        FeaturedRoom::create([
            'RoomName' => 'Solarium / Atrium',
            'RoomIcon' => 'solarium.png',
            'RoomSelectedIcon' => 'solarium-red.png',
        ]);
        
        FeaturedRoom::create([
            'RoomName' => 'Sun room',
            'RoomIcon' => 'sun-room.png',
            'RoomSelectedIcon' => 'sun-room-red.png',
        ]);
    }
}
