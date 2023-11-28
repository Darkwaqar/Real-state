<?php

namespace App\Console\Commands;

use App\Models\BatchUrlData;
use App\Models\Cities;
use App\Models\MlsStandardStatu;
use App\Models\NwmlsBatchInfo;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class LogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($i=0; $i <1 ; $i++) {
            $checkmlsStatus = MlsStandardStatu::where('status',0)->limit(1)->get()->toArray();

            if (isset($checkmlsStatus) && count($checkmlsStatus) > 0) {
                $type = $checkmlsStatus[0]['name'];
                $last_record_inserted_time = $checkmlsStatus[0]['last_record_inserted_time'];
                $last_record_inserted_time = Carbon::parse($last_record_inserted_time)->utc()->format('Y-m-d\TH:i:s\Z');
                $linkCheck = DB::table('nwmls_batch_insert')
                ->select('currentLink','nextLink')->where('type',$type)->orderBy('id', 'desc')->first();

                    if (isset($linkCheck) && isset($linkCheck->nextLink)) {
                            // $currentUrl = "https://api.mlsgrid.com/v2/Property?\$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27".$type."%27&\$expand=Media%2CRooms%2CUnitTypes&\$top=1000";
                            // $currentUrl = "https://api.mlsgrid.com/v2/Property?" ."\$filter=OriginatingSystemName eq 'nwmls' and ModificationTimestamp gt '" . $last_record_inserted_time . "' and StandardStatus eq '" . $type . "'" ."&\$expand=Media,Rooms,UnitTypes&\$top=1000";
                            $currentUrl = $linkCheck->nextLink;
                            $response = Http::timeout(1000)->withHeaders([
                            'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
                            'Accept-Encoding' => 'gzip'
                        ])->get($currentUrl)->json();

                        $nextUrl = '';
                        // if (isset($response['@odata.nextLink'])) {
                        //   echo 'if here';
                        // } else {
                        //     echo 'else here'.count($response['value']);
                        // }
                        // dd('');
                        //dd($response['@odata.nextLink']);
                        // $cityies = new Cities();
                        // $cityies->name = 'this is hitting api'.$response['@odata.nextLink'];
                        // $cityies->state_id = 1;
                        // $cityies->save();
                        if (isset($response) && isset($response['value'])) {
                                if (isset($response['@odata.nextLink'])) {
                                    $nextUrl = $response['@odata.nextLink'];
                                }
                                else{

                                    // Get the current time in the desired format (without escaping the slashes)
                                    // $currentTime = Carbon::now()->utc()->format('Y-m-d\TH:i:s\Z');

                                    // Build the URL with the updated modification time
                                   MlsStandardStatu::where('id', $checkmlsStatus[0]['id'])
                                        ->update([
                                            'status' => 1,
                                            'random' => randBatchLinks(),
                                            'last_record_inserted_time' => Carbon::now()->subMinutes(5),
                                        ]);
                                        addNotiOfBatchData('Record Inserted and updated the status of the mls_standard_status From Main Method');
                                    }

                                    $myBulkData['currentLink'] =  $currentUrl;
                                    $myBulkData['type'] = $type;
                                    $myBulkData['urlData'] = json_encode($response);
                                    $myBulkData['sizeOfurlData'] = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit');
                                    $myBulkData['statusMessage'] = 'Obtaining the data without encountering any issues.';
                                    //$nextUrl = $response['@odata.nextLink'];
                                    $myBulkData['nextLink'] = $nextUrl;
                                    $myBulkData['random'] = randBatchLinks();
                                    $myBulkData['propertyAdded'] = count($response['value']);
                                    $myBulkData['created_at'] = Carbon::now();
                                    $myBulkData['updated_at'] = Carbon::now();
                                    //BatchUrlData::insert($myBulkData);3
                                    //updateOrCreate
                                    $currendId = BatchUrlData::updateOrCreate(
                                        ['currentLink'=>$currentUrl],
                                            $myBulkData
                                    );
                                    //$currendId = DB::table('nwmls_batch_insert')->insertGetId($myBulkData);

                                    $batchInfoTable['batch_insert_id'] = $currendId->id;
                                    $batchInfoTable['urlData'] = $myBulkData['urlData'];
                                    $batchInfoTable['sizeOfurlData'] = $myBulkData['sizeOfurlData'];
                                    $batchInfoTable['mls_standard_id'] = $checkmlsStatus[0]['id'];
                                    $batchInfoTable['mls_standard_random_id'] = $checkmlsStatus[0]['random'];
                                    $batchInfoTable['created_at']= Carbon::now();
                                    $batchInfoTable['updated_at']= Carbon::now();
                                    $batchInfoTable['lastInsertedDate']= Carbon::now();
                                    $batchInfoTable['propertyAdded'] = count($response['value']);
                                    NwmlsBatchInfo::insert($batchInfoTable);
                                    addNotiOfBatchData('Data inserting after first result.');
                                //echo 'yahan tak aaraha ha';
                                //dd('');

                        }//checking value coming from API
                        else {
                            addNotiOfBatchData('else here checking value coming from API');
                            //echo 'url is not getting the data';
                        }
                    }//checking link from database
                    else {
                        //dd('el;se here');
                            if (isset($checkmlsStatus) && count($checkmlsStatus[0]) > 0 && isset($checkmlsStatus[0]['name'])) {
                                $firstUrl = "https://api.mlsgrid.com/v2/Property?" ."\$filter=OriginatingSystemName eq 'nwmls' and ModificationTimestamp gt " . $last_record_inserted_time . " and StandardStatus eq '" . $type . "'" ."&\$expand=Media,Rooms,UnitTypes&\$top=1000";
                                $response = Http::timeout(1000)->withHeaders([
                                    'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
                                    'Accept-Encoding' => 'gzip'
                                ])->get($firstUrl)->json();
                                addLinktoBatchInsertTable($response,$checkmlsStatus);
                            } else {
                                addNotiOfBatchData('data not coming from this table mls_standard_status');

                            }
                    }
            } else {
                $allData = MlsStandardStatu::where('status',1)->get()->toArray();
                if(isset($allData) && count($allData) > 0){
                    foreach ($allData as  $newvlaue) {
                        MlsStandardStatu::where('id',$newvlaue['id'])->update(
                            [
                                'random'=>randBatchLinks(),'lastInsertedDate'=>Carbon::now(),
                                'updated_at'=>Carbon::now(),'status'=>0
                            ]
                            );
                    }
                    addNotiOfBatchData('epoch completed and reset the all links.');
                }
            }
        }
    }


}//class here
