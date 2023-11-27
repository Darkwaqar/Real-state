<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BuildingAmenities;
use App\Models\ParkingFeatures;
use Database\Seeders\ParkingFeatures as SeedersParkingFeatures;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // CountriesTableSeeder::class,
            // StatesTableSeeder::class,
            // CitiesTableSeeder::class,
            SeedersParkingFeatures::class,
            RoofsSeeder::class,
            HeatingSeeder::class,
            CoolingSeeder::class,
            FuelSeeder::class,
            ExteriorSeeder::class,
            RoomsSeeder::class,
            CommunitySeeder::class,
            InteriorSeeder::class,
            outDoorSeeder::class,
            archiSeeder::class,
            AppliancesSeeder::class,
            basementSeeder::class,
            floorSeeder::class,
            structureSeeder::class,
            ViewSeeder::class,
            MlsStandardStatuSeeder::class,
            RolesSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
