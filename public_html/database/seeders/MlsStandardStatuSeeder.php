<?php

namespace Database\Seeders;

use App\Models\MlsStandardStatu;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Stripe\Util\RandomGenerator;

class MlsStandardStatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mls_standard_status = array(
            array(
                    'name' => "ActiveUnderContract",'value' => 2,
                    'StandardName'=>'Active Under Contract','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27ActiveUnderContract%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "Hold",'value' => 8,
                    'StandardName'=>'Hold','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Hold%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "ComingSoon",'value' => 5,
                    'StandardName'=>'Coming Soon','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27ComingSoon%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "Delete",'value' => 6,
                    'StandardName'=>'Delete','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Delete%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "Withdrawn",'value' => 11,
                    'StandardName'=>'Withdrawn','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Withdrawn%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "Pending",'value' => 10,
                    'Canceled'=>'Pending','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Pending%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),

                array(
                    'name' => "Active",'value' => 1,
                    'StandardName'=>'Active','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Active%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "Incomplete",'value' => 9,
                    'StandardName'=>'Incomplete','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Incomplete%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
                array(
                    'name' => "Expired",'value' => 7,
                    'StandardName'=>'Expired','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Expired%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
            array(
                    'name' => "Canceled",'value' => 3,
                    'StandardName'=>'Canceled','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Canceled%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
            array(
                    'name' => "Closed",'value' => 4,
                    'StandardName'=>'Closed','random'=>randBatchLinks(),'status'=>0,
                    'firstUrl'=>'https://api.mlsgrid.com/v2/Property?$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27Closed%27&$expand=Media%2CRooms%2CUnitTypes&$top=1000',
                    'lastInsertedDate'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
                ),
        );
        MlsStandardStatu::insert($mls_standard_status);
        //DB::table('mls_standard_status')->insert($mls_standard_status);
    }
}
