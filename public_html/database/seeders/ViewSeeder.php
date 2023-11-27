<?php

namespace Database\Seeders;

use App\Models\PropertyView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyView::create([
            'ProperyViewName'           => 'City',
            'ProperyViewIcon'           => 'city.png',
            'ProperyViewSelectedIcon'   => 'city-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Mountain(s)',
            'ProperyViewIcon'           => 'mountain.png',
            'ProperyViewSelectedIcon'   => 'mountain-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'River',
            'ProperyViewIcon'           => 'pool.png',
            'ProperyViewSelectedIcon'   => 'pool-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Territorial',
            'ProperyViewIcon'           => 'territorial.png',
            'ProperyViewSelectedIcon'   => 'territorial-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Bay',
            'ProperyViewIcon'           => 'pool.png',
            'ProperyViewSelectedIcon'   => 'pool-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Sound',
            'ProperyViewIcon'           => 'city.png',
            'ProperyViewSelectedIcon'   => 'city-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Ocean',
            'ProperyViewIcon'           => 'pool.png',
            'ProperyViewSelectedIcon'   => 'pool-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Lake',
            'ProperyViewIcon'           => 'pond.png',
            'ProperyViewSelectedIcon'   => 'pond-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Jetty',
            'ProperyViewIcon'           => 'pool.png',
            'ProperyViewSelectedIcon'   => 'pool-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Golf Course',
            'ProperyViewIcon'           => 'park.png',
            'ProperyViewSelectedIcon'   => 'park-red.png',
        ]);
        PropertyView::create([
            'ProperyViewName'           => 'Canal',
            'ProperyViewIcon'           => 'pond.png',
            'ProperyViewSelectedIcon'   => 'pond-red.png',
        ]);
        
    }
}
