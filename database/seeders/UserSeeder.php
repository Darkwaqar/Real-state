<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'admin@gmail.com',
            'user_name' => 'admin',
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'mobile_number' => '522452256',
            'address' => 'asdasd',
            'country' => 'Pakistan',
            'city' => 'Daharki',
            'state' => 'dddf',
            'veteran_status' => 'I identify as one or more of the classifications of Protected Veteran',
            'ethnicity' => 'American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)',
            'postal_code' => '123123',
            'hear_about_us' => 'Social media',
            'role_id' => 1,
            'web_link' => 'http://localhost/Aris/register',
            'linkedin_link' => 'https://stackoverflow.com/questions/33652814/laravel-blade-old-input-or-default-variable',
            'gender' => 'Female',
            'status' => '1',
            'type' => 'aris',
            'identity' => '1678639113aris.jpg',
            'email_verified_at' => Carbon::now(),
            'password' => '123456789',
            'agent_pasword' => '123456789',
            //'email_link' => 'User',
            'remember_token' => '62WB2gDP2dvSdHWfcf6KMCbTepTOGKOEWzKo6PmqTqg12yzFEEqs1JypPq21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            //'google_id' => 'User',
            //'social_login' => 'User',
            //'facebook_id' => 'User',
            //'company_dp' => 'User',
            //'company_nmls_id' => 'User',
            //'user_nmls_id' => 'User',
            //'company_name' => 'User',
            //'business_structure' => 'User',
            //'address2' => 'User',
            //'date_formed' => 'User',
            //'fiscal_year_end' => 'User',
            //'formed_in' => 'User',
            //'primary_fedral_regulator' => 'User',
            //'registration_status' => 'User',
            //'stock_symbol' => 'User',
            //'website' => 'User',
            //'office_number' => 'User',
            
        ]);

        User::create([
           // 'name' => 'User',
            'email' => 'brian@aris360.com',
            'user_name' => 'Brian',
            'first_name' => 'Brian',
            'last_name' => 'Laskey',
            'mobile_number' => '7553265',
            'address' => 'asdasd',
            'country' => 'USA',
            'city' => 'Seattle',
            'state' => 'WA',
            'veteran_status' => 'I identify as one or more of the classifications of Protected Veteran',
            'ethnicity' => 'American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)',
            'postal_code' => '123123',
            'hear_about_us' => 'Social media',
            'role_id' => 2,
            'web_link' => 'http://localhost/Aris/register',
            'linkedin_link' => 'https://stackoverflow.com/questions/33652814/laravel-blade-old-input-or-default-variable',
            'gender' => 'Female',
            'status' => '1',
            'type' => 'aris',
            'identity' => '1678639113aris.jpg',
            'email_verified_at' => Carbon::now(),
            'password' => '123456789',
            'agent_pasword' => '123456789',
            //'email_link' => 'User',
            'remember_token' => '62WB2gDP2dvSdHWfcf6KMCbTepTOGKOEWzKo6PmqTqg12yzFEEqs1JypPq21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            //'google_id' => 'User',
            //'social_login' => 'User',
            //'facebook_id' => 'User',
            //'company_dp' => 'User',
            //'company_nmls_id' => 'User',
            //'user_nmls_id' => 'User',
            //'company_name' => 'User',
            //'business_structure' => 'User',
            //'address2' => 'User',
            //'date_formed' => 'User',
            //'fiscal_year_end' => 'User',
            //'formed_in' => 'User',
            //'primary_fedral_regulator' => 'User',
            //'registration_status' => 'User',
            //'stock_symbol' => 'User',
            //'website' => 'User',
            //'office_number' => 'User',
            
        ]);

        User::create([
            // 'name' => 'User',
             'email' => 'evan@aris360.com',
             'user_name' => 'Evan',
             'first_name' => 'Evan',
             'last_name' => 'Voltsis',
             'mobile_number' => '7553265',
             'address' => 'asdasd',
             'country' => 'USA',
             'city' => 'Seattle',
             'state' => 'WA',
             'veteran_status' => 'I identify as one or more of the classifications of Protected Veteran',
             'ethnicity' => 'American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)',
             'postal_code' => '123123',
             'hear_about_us' => 'Social media',
             'role_id' => 2,
             'web_link' => 'http://localhost/Aris/register',
             'linkedin_link' => 'https://stackoverflow.com/questions/33652814/laravel-blade-old-input-or-default-variable',
             'gender' => 'Female',
             'status' => '1',
             'type' => 'aris',
             'identity' => '1678639113aris.jpg',
             'email_verified_at' => Carbon::now(),
             'password' => '123456789',
             'agent_pasword' => '123456789',
             //'email_link' => 'User',
             'remember_token' => '62WB2gDP2dvSdHWfcf6KMCbTepTOGKOEWzKo6PmqTqg12yzFEEqs1JypPq21',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
             //'google_id' => 'User',
             //'social_login' => 'User',
             //'facebook_id' => 'User',
             //'company_dp' => 'User',
             //'company_nmls_id' => 'User',
             //'user_nmls_id' => 'User',
             //'company_name' => 'User',
             //'business_structure' => 'User',
             //'address2' => 'User',
             //'date_formed' => 'User',
             //'fiscal_year_end' => 'User',
             //'formed_in' => 'User',
             //'primary_fedral_regulator' => 'User',
             //'registration_status' => 'User',
             //'stock_symbol' => 'User',
             //'website' => 'User',
             //'office_number' => 'User',
             
         ]);
         User::create([
            // 'name' => 'User',
             'email' => 'navaid360@gmail.com',
             'user_name' => 'Navaid',
             'first_name' => 'Navaid',
             'last_name' => 'Jafri',
             'mobile_number' => '7553265',
             'address' => 'asdasd',
             'country' => 'USA',
             'city' => 'Seattle',
             'state' => 'WA',
             'veteran_status' => 'I identify as one or more of the classifications of Protected Veteran',
             'ethnicity' => 'American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)',
             'postal_code' => '123123',
             'hear_about_us' => 'Social media',
             'role_id' => 5,
             'web_link' => 'http://localhost/Aris/register',
             'linkedin_link' => 'https://stackoverflow.com/questions/33652814/laravel-blade-old-input-or-default-variable',
             'gender' => 'Female',
             'status' => '1',
             'type' => 'aris',
             'identity' => '1678639113aris.jpg',
             'email_verified_at' => Carbon::now(),
             'password' => '123456789',
             'agent_pasword' => '123456789',
             //'email_link' => 'User',
             'remember_token' => '62WB2gDP2dvSdHWfcf6KMCbTepTOGKOEWzKo6PmqTqg12yzFEEqs1JypPq21',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
             //'google_id' => 'User',
             //'social_login' => 'User',
             //'facebook_id' => 'User',
             //'company_dp' => 'User',
             //'company_nmls_id' => 'User',
             //'user_nmls_id' => 'User',
             //'company_name' => 'User',
             //'business_structure' => 'User',
             //'address2' => 'User',
             //'date_formed' => 'User',
             //'fiscal_year_end' => 'User',
             //'formed_in' => 'User',
             //'primary_fedral_regulator' => 'User',
             //'registration_status' => 'User',
             //'stock_symbol' => 'User',
             //'website' => 'User',
             //'office_number' => 'User',
             
         ]);
    }
}
