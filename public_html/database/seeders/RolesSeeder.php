<?php

namespace Database\Seeders;

use App\Models\UserRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRoles::create([
            'name' => 'Admin',
        ]);
        UserRoles::create([
            'name' => 'Agent',
        ]);
        UserRoles::create([
            'name' => 'Lender',
        ]);
        UserRoles::create([
            'name' => 'Loan Officer',
        ]);
        UserRoles::create([
            'name' => 'User',
        ]);
    }
    }

