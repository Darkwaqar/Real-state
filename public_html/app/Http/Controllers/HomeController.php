<?php

namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Jobs\EmailJob;
use App\Jobs\EmailPropertyScheduleJob;
use App\Jobs\UpdateMediaJob;
use App\Mail\AskAgentEmail;
use App\Mail\TestEmailSes;
use Illuminate\Support\Str;
use App\Models\Appliances;
use App\Models\ArchitecturalStyle;
use App\Models\Basement;
use App\Models\BatchUrlData;
use App\Models\Cities;
use App\Models\CommunityFeatures;
use App\Models\ExteriorFeatures;
use App\Models\ExtraLinkTable;
use App\Models\Extratables;
use App\Models\FireplaceFeatures;
use App\Models\Flooring;
use App\Models\FoundationDetails;
use App\Models\GreenEnergyEfficient;
use App\Models\Levels;
use App\Models\ListingTerms;
use App\Models\LotFeatures;
use App\Models\Media;
use App\Models\mlsInteriorFeatures;
use App\Models\MlsStandardStatu;
use App\Models\NwmlsBatchInfo;
use App\Models\ParkingFeatures;
use App\Models\PetsAllowed;
use App\Models\Possession;
use App\Models\PowerProductionType;
use App\Models\Properties;
use App\Models\PropertiesDetials;
use App\Models\PropertiesViews;
use App\Models\PropertyAppliances;
use App\Models\PropertyArchitecturalStyle;
use App\Models\PropertyBasement;
use App\Models\PropertyCommunity;
use App\Models\PropertyCondition;
use App\Models\PropertyConditionRel;
use App\Models\PropertyExterior;
use App\Models\PropertyFirePlace;
use App\Models\PropertyFlooring;
use App\Models\PropertyFoundationDetails;
use App\Models\PropertyGreenEnergy;
use App\Models\PropertyInterior;
use App\Models\PropertyLevel;
use App\Models\PropertyListingConditions;
use App\Models\PropertyListingTerms;
use App\Models\PropertyLotFeatures;
use App\Models\PropertyMessageBox;
use App\Models\PropertySchedule;
use App\Models\PropertyParking;
use App\Models\PropertyPetsAllowed;
use App\Models\PropertyPossession;
use App\Models\PropertyPowerProductionType;
use App\Models\PropertyRoof;
use App\Models\PropertySewer;
use App\Models\PropertyShowingRequirements;
use App\Models\PropertyStructureType;
use App\Models\Propertyutilities;
use App\Models\PropertyVegetation;
use App\Models\PropertyView;
use App\Models\PropertyWaterSource;
use App\Models\Roof;
use App\Models\Rooms;
use App\Models\Sewer;
use App\Models\ShowingRequirements;
use App\Models\SpecialListingConditions;
use App\Models\StructureType;
use App\Models\UnitTypes;
use App\Models\User;
use App\Models\Utilities;
use App\Models\Vegetation;
use App\Models\WaterSource;
use Aws\S3\S3Client;
use Carbon\Carbon;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        define('MLS_DATA', "1");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        ////
        return view('home');
    }
    public function checkcannary()
    {


        // $endpoint = "https://api.housecanary.com/v2/property/component_mget?";
        // $endpoint = "https://api.housecanary.com/v2/property/value?";
        // $client = new \GuzzleHttp\Client();
        // $id = 'test_2760QR1EEDKYSH4E5J1R';
        // $value = "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc";
        // $mytext = 'address=11876 SW Lake Flora Road';
        // $endpoint .= createUrlHomeEstimation($mytext);
        // $endpoint .= '&zipcode=98312';
        // // $endpoint .='address='.$hnumber.'+'.$address;
        // // $endpoint .='&zipcode='.$zip;

        // //$otherValue = 'components=property/details,property/school,property/value,property/tax_history,property/sales_history,property/rental_value,property/block_crime';
        // //$endpoint .='&'.$otherValue;
        // // dd($endpoint);
        // $response = $client->request('GET', 'address=123+Main+St&zipcode=94132', ['auth' =>  array("test_2760QR1EEDKYSH4E5J1R", "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc")]);

        // // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

        // $statusCode = $response->getStatusCode();
        // $content = $response->getBody();
        // $data['apiData'] = json_decode($response->getBody(), true);
        // $arrayobj = array_walk($data[0], function (& $item) {
        //     echo '<pre>';
        //     print_r($item);
        //     //$item['mynewKey'] = $item['property/land_value'];
        //     //unset($item['property/land_value']);
        //  });
        $data['apiData'] = [];
        dd($data['apiData']);
    }
    public function askprimeagent(Request $request)
    {
        $message = $request['askmessage'];
        $curntproty = $request['curntproty'];
        if (
            isset($message) && !empty($message) &&
            isset($curntproty) && !empty($curntproty)
        ) {
            $data['return'] = true;
            $data['message'] = 'One of our representatives will get in touch with you as soon as possible regarding your inquiry.';
            $data['curentmessage'] = $message;
            $data['curntproty'] = $message;
            Mail::to('shakzee171@gmail.com')->queue(new AskAgentEmail($data));
            return response()->json($data);
            //return json_encode([$message,$curntproty]);
        } else {
            $data['return'] = false;
            $data['message'] = 'Please check your required fields and try again.';
            return response()->json($data);
        }
    }
    public function whatismyhomeworth($hnumber, $address, $zip)
    {
        if (
            isset($hnumber) && !empty($hnumber) &&
            isset($address) && !empty($address) &&
            isset($zip) && !empty($zip)
        ) {
            //$endpoint = "https://api.housecanary.com/v2/property/value?";
            // $endpoint = "https://api.housecanary.com/v2/property/details?";
            // $client = new \GuzzleHttp\Client();
            // $id = 'test_2760QR1EEDKYSH4E5J1R';
            // $value = "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc";
            // $test_address = '517 N Chugach St';
            // $test_Zip = '99645';
            // // $id = 'Q27MYU3BC1HPW5VWPPAF';
            // // $value = "58Z8P0szn0yLLtx0PN9s500kvJe69jLk";

            // $endpoint .= 'address=' . $test_address;
            // $endpoint .= '&zipcode=' . $test_Zip;

            // // $otherValue = 'components=property/details,property/school,property/value,property/tax_history,property/sales_history,property/rental_value,property/block_crime,property/fema_disaster_area,property/flood,property/geo_features';
            // // $endpoint .='&'.$otherValue;

            // $response = $client->request('GET', $endpoint, ['auth' =>  array("test_2760QR1EEDKYSH4E5J1R", "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc")]);

            // // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

            // $statusCode = $response->getStatusCode();
            // $content = $response->getBody();
            // $data['apiData'] = json_decode($response->getBody(), true);
            // $arrayobj = array_walk($data[0], function (& $item) {
            //     echo '<pre>';
            //     print_r($item);
            //     //$item['mynewKey'] = $item['property/land_value'];
            //     //unset($item['property/land_value']);
            //  });
            //dd($data['apiData']);
            $data['apiData'] = [];
            if (
                isset($data['apiData'][0]) && !empty($data['apiData'][0]) &&
                isset($data['apiData'][0]['property/value'])
                && $data['apiData'][0]['property/value']['api_code_description'] == 'ok'
            ) {
                return view('whatismyhomeworth', $data);
            } else {
                setFlashData(
                    'alert-success',
                    'The information is not yet available for viewing.',
                    redirect()->route('mainHome')
                );
                //echo 'else here';
            }
            //dd($data['apiData'][0]);//[0]['property/land_value']['']

        } else {
            setFlashData(
                'alert-success',
                'Please double-check your address and try again since it seems to be incorrect.',
                redirect()->route('mainHome')
            );
            //echo 'main else here';
        }
    }


    public function houseCanary()
    {


        // $endpoint = "https://api.housecanary.com/v2/property/value_report?";
        // // $endpoint = "https://api.housecanary.com/v2/property/value?";
        // $request = request();
        // $address = '517 N Chugach St';
        // $zipCode = '99645';
        // // $address = $request['skzAddress'];
        // // $zipCode =  $request['skzZip'];
        // $houseNumber = $request['skzHouseNumber'];
        // $address = createUrlHomeEstimation($address);
        // $endpoint .= 'address=' . $address;
        // // $endpoint .='address='.$houseNumber.'+'.$address;
        // $endpoint .= '&zipcode=' . $zipCode;
        // $endpoint .= 'format=json';

        // //return $endpoint;
        // //return $request;
        // //return 'working..';
        // //dd('');

        // $client = new \GuzzleHttp\Client();
        // $id = 'test_2760QR1EEDKYSH4E5J1R';
        // $value = "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc";

        // $response = $client->request('GET', $endpoint, ['auth' =>  array("test_2760QR1EEDKYSH4E5J1R", "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc")]);

        // // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

        // $statusCode = $response->getStatusCode();
        // $content = $response->getBody();
        // $content = json_decode($response->getBody(), true);
        //return $content[0]['address_info']['address'];
        //die('');
        $data = [];
        // if(count($content) == 1){
        //    if (
        //         // isset($content[0]['address_info']) &&
        //         // count($content[0]['address_info']) > 0
        //         // && !empty($content[0]['address_info']['address'])
        //         // && $content[0]['address_info']['address'] != NULL
        //         isset($content[0]) && !empty($content[0]) &&
        //         isset($content[0]['property/value'])
        //         && $content[0]['property/value']['api_code_description'] == 'ok'
        //    ) {
        //     $data['return'] = true;
        //     $data['data'] = [$houseNumber,$address,$zipCode];
        //     return response()->json($data);
        //    } else {
        //     $data['return'] = 'false else'. $statusCode;
        //     return response()->json($data);
        //    }

        // }
        // else{
        $data['return'] = false;
        return response()->json($data);
        // }
        //return $content;
        //dd('');


        // $options = array("auth" => array("test_2760QR1EEDKYSH4E5J1R", "58Z8P0szn0yLLtx0PN9s500kvJe69jLk"));
        //         $endpoint = "https://api.housecanary.com/v2/property/land_value?address=123+Main+St&zipcode=94132";

        //         $response = Http::withHeaders([
        //             'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36'
        //         ])->withOptions([
        //             'debug' => true,
        //         ])->get($endpoint, ['auth' =>  array("test_2760QR1EEDKYSH4E5J1R", "58Z8P0szn0yLLtx0PN9s500kvJe69jLk")]);
        // dd($response);


    }

    public function nwmlsapis()
    {

        // $dateHere = '2023-12-11T00:00:00.000Z';
        // echo Carbon::parse($dateHere)->setTimezone(config('app.timezone'))->format('Y-m-d h:i:s');
        // dd();
        $apiCredential = [
            'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
            'Accept-Encoding' => 'gzip'
        ];
        //// Query by the name
        $endtesting = "https://api.mlsgrid.com/v2/Property?\$filter=OriginatingSystemName%20eq%20'nwmls'%20and%20StandardStatus%20eq%20enums.StandardStatus'Closed'&\$expand=Media%2CRooms%2CUnitTypes&\$top=1000&\$skip=45000";
        //$Lookups = "https://api.mlsgrid.com/v2/Lookup?\$filter='Office'";

        $endpoint = "https://api.mlsgrid.com/v2/Property?";
        //$endpoint .= '$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20MlgCanView%20eq%20true';
        $endpoint .= '$filter=OriginatingSystemName%20eq%20%27nwmls%27';
        //$openHouse = "https://api.mlsgrid.com/v2/OpenHouse?\$filter=OriginatingSystemName%20eq%20%27nwmls%27&\$top=5000";
        $response = Http::timeout(1000)->withHeaders([
            'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
            'Accept-Encoding' => 'gzip'
        ]);
        return $response->get($endtesting);
        //echo '<br>';
        //print_r($response);

        //->get($endtesting)->json();
        //return $response;

    }

    public function firstEntry($type = null)
    {
        //$MediaUrl = generateS3BucketUrl('000aae8a-4beb-4176-ac47-3a33c999b286.jpg');
        //echo "<img src='$MediaUrl' alt='S3 Image'>";
        //dd('');
        //echo randBatchLinks();
        //echo createSEOUrl('shakzee');
        //dd('');
        $currentUrl = "https://api.mlsgrid.com/v2/OpenHouse?\$filter=OriginatingSystemName%20eq%20%27nwmls%27&\$top=5000&\$skip=10000";
        $response = Http::timeout(1000)->withHeaders([
            'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
            'Accept-Encoding' => 'gzip'
        ])->get($currentUrl)->json();
        return $response;
        dd('dfdf');
        $nextUrl = '';
        // if (isset($response['@odata.nextLink'])) {
        //   echo 'if here';
        // } else {
        //     echo 'else here'.count($response['value']);
        // }
        // dd('');
        //dd($response['@odata.nextLink']);
        if (isset($response) && isset($response['value'])) {
            if (isset($response['@odata.nextLink'])) {
                $nextUrl = $response['@odata.nextLink'];
            }

            $linkCheck = BatchUrlData::where('currentLink', $currentUrl)->get()->toArray();
            if (count($linkCheck) <= 0) {
                $myBulkData['currentLink'] = $currentUrl;
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
                //BatchUrlData::insert($myBulkData);
                $currendId = DB::table('nwmls_batch_insert')->insertGetId($myBulkData);
                $batchInfoTable['batch_insert_id'] = $currendId;
                $batchInfoTable['urlData'] = json_encode($response);
                $batchInfoTable['sizeOfurlData'] = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit');
                $batchInfoTable['propertyAdded'] = count($response['value']);
                NwmlsBatchInfo::insert($batchInfoTable);
            }
            //echo 'yahan tak aaraha ha';
            //dd('');

        } else {
            echo 'url is not getting the data';
        }
    }


    public function askquestion(Request $request)
    {
        if (isUserLoggedIn()) {
            $table = new PropertyMessageBox();
            $table->message = $request->post('message');
            $table->property_id = $request->post('prprtyId');
            if ($request->post('emailID') != "" && $request->post('agentID') != "") {
                $table->agent_email_id = $request->post('emailID');
                $table->agent_id = $request->post('agentID');
                $data['agent_id'] = $table->agent_id;
                $data['agent_email_id'] = $table->agent_email_id;
                $data['agent_user_name'] = $request->post('agentUserName');
            }
            $data['propertiesData'] = Properties::where('id', $table->property_id)->first()->toArray();
            $data['userData'] = Auth::user();
            $data['userQuery'] = $table->message;
            $data['message'] = 'We have successfully registered your submission.';

            $table->buyer_id = getUserId();
            $inserted = $table->save();
            if ($inserted) {
                $data['type'] = 'Property Message Box';
                $data['link'] = url('admin/more-info/' . $table->id);
                $link = 'admin/more-info/' . $table->id;
                $property = Properties::where('id', $data['propertiesData']['id'])->first()->toArray();
                $data['message'] = 'User (' . Auth::user()->first_name . ') left a message on property ' . $property['PropertyAddress'];
                $data['time'] = Carbon::now();
                $data['is_read'] = false;
                $data['path'] = asset('public/images/userdp/');
                $data['user'] = User::where('id', getUserId())->first()->toArray();
                //$agent = User::where('id',$validatedData['agentId'])->first()->toArray();
                $agent =  isset($data['agent_id']) ? $data['agent_id'] : null;
                createNotification(getUserId(), $request->post('message'), 'User (' . Auth::user()->first_name . ') left a message on property ' . $property['PropertyAddress'], 'Property Message Box', $data['propertiesData']['id'], $agent, null, $link);
                event(new UserNotification($data));
                $data['message'] = 'We have successfully registered your submission.';
                EmailJob::dispatch($data)->delay(now()->addSeconds(10));
                return response()->json($data);
            } else {
                //$data['message'] = 'We have successfully received your request';
                return response()->json($data);
            }
        } else {
            $data['message'] = 'Ensure you are logged in prior to submitting your message.';
            return response()->json($data);
        }
    }

    public function schedule(Request $request)
    {
        if (isUserLoggedIn()) {
            //dd($request->all());
            $table = new PropertySchedule();
            $table->property_id = $request->post('prprtyId');
            $table->scheduled_date = $request->post('date');
            if ($request->post('emailID') != "" && $request->post('agentID') != "") {
                $table->agent_email_id = $request->post('emailID');
                $table->agent_id = $request->post('agentID');

                $data['agent_id'] = $table->agent_id;
                $data['agent_email_id'] = $table->agent_email_id;
                $data['agent_user_name'] = $request->post('agentUserName');
            }
            $data['propertiesData'] = Properties::where('id', $table->property_id)->first()->toArray();
            $data['date'] = $request->post('date');
            $data['userData'] = Auth::user();
            $data['message'] = 'We have successfully Scheduled Your Visit.';
            $table->buyer_id = getUserId();
            $inserted = $table->save();
            if ($inserted) {
                $data['type'] = 'Property Schedule';
                $data['message'] = 'User (' . Auth::user()->first_name . ') scheduled a  property ' . $data['message'];
                $data['time'] = Carbon::now();
                $data['path'] = asset('public/images/userdp/');
                $data['link'] = url('admin/leads?leadType=Schedule');
                $link = 'admin/leads?leadType=Schedule';
                $data['user'] = User::where('id', getUserId())->first()->toArray();
                $agent =  isset($data['agent_id']) ? $data['agent_id'] : null;
                createNotification(getUserId(), $data['message'], 'User (' . Auth::user()->first_name . ') scheduled a  property,  Schedule On ' . $request->post('date'), 'Property Schedule', $data['propertiesData']['id'], $agent, null, $link);
                event(new UserNotification($data));
                //  EmailJob::dispatch($data)->delay(now()->addSeconds(10));
                EmailPropertyScheduleJob::dispatch($data)->delay(now()->addSeconds(10));
                $data['message'] = 'We have successfully Scheduled Your Visit.';
                return response()->json($data);
            } else {
                //$data['message'] = 'We have successfully Scheduled Your Visit.';
                return response()->json($data);
            }
        } else {
            $data['message'] = 'Ensure you are logged in prior to submitting your message.';
            return response()->json($data);
        }
    }
    public function textemailses()
    {

        $data = [];

        Mail::to('shakzee171@gmail.com')->send(new TestEmailSes($data));
    }

    public function textingsameer()
    {
        //ini_set('memory_limit', '-1');
        // $cityies = new Cities();
        // $cityies->name = 'xyz';
        // $cityies->state_id = 1;
        // $cityies->save();
        $type = 'Closed';
        //$linkCheck = DB::table('nwmls_batch_insert')->where('type',$type)->orderBy('id', 'desc')->first();
        $linkCheck = DB::table('nwmls_batch_insert')->where('type', $type)->orderBy('id', 'desc')->first();

        //var_dump($linkCheck->id);
        if (isset($linkCheck) && isset($linkCheck->currentLink)) {
            //$currentUrl = "https://api.mlsgrid.com/v2/Property?\$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27".$type."%27&\$expand=Media%2CRooms%2CUnitTypes&\$top=1000";
            $currentUrl = $linkCheck->currentLink;
            $response = json_decode($linkCheck->urlData, true);
            //dd($linkCheck);
            //     $response = Http::timeout(1000)->withHeaders([
            //     'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
            //     'Accept-Encoding' => 'gzip'
            // ])->get($currentUrl)->json();

            $nextUrl = '';
            // if (isset($response['@odata.nextLink'])) {
            //   echo 'if here';
            // } else {
            //     echo 'else here'.count($response['value']);
            // }
            // dd('');
            //dd($response['@odata.nextLink']);
            if (isset($response) && isset($response['value'])) {
                if (isset($response['@odata.nextLink'])) {
                    $nextUrl = $response['@odata.nextLink'];
                }

                //$linkCheck = BatchUrlData::where('currentLink', $currentUrl)->get()->toArray();
                if (1) { //count($linkCheck) <= 0
                    $myBulkData['currentLink'] = $currentUrl;
                    $myBulkData['type'] = $type;
                    $myBulkData['urlData'] = json_encode($response);
                    $myBulkData['sizeOfurlData'] = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit');
                    $myBulkData['statusMessage'] = 'Obtaining the data without encountering any issues.';
                    //$nextUrl = $response['@odata.nextLink'];
                    $myBulkData['nextLink'] = $nextUrl;
                    $myBulkData['propertyAdded'] = count($response['value']);
                    $myBulkData['created_at'] = Carbon::now();
                    $myBulkData['updated_at'] = Carbon::now();
                    //BatchUrlData::insert($myBulkData);
                    $currendId = DB::table('nwmls_batch_insert')->insertGetId($myBulkData);
                    $batchInfoTable['batch_insert_id'] = $currendId;
                    $batchInfoTable['urlData'] = $myBulkData['urlData'];
                    $batchInfoTable['sizeOfurlData'] = $myBulkData['sizeOfurlData'];
                    $batchInfoTable['propertyAdded'] = count($response['value']);
                    NwmlsBatchInfo::insert($batchInfoTable);
                }
                //echo 'yahan tak aaraha ha';
                //dd('');

            } else {
                //echo 'url is not getting the data';
            }
        } else {
            //echo 'Url is not availabel from database';
        }
    }
    public function prepareUrls($nextUrl = null, $type = null)
    {
        if (isset($type) && !empty($type)) {
            if ($nextUrl != 'false' && !empty($type)) {
                //var_dump($nextUrl);
                //dd($nextUrl);
                $currentUrl = $nextUrl;
                $response = Http::timeout(1000)->withHeaders([
                    'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
                    'Accept-Encoding' => 'gzip'
                ])->get($currentUrl)->json();
                $nextUrl = '';
                //dd($response['@odata.nextLink']);
                if (isset($response) && isset($response['value'])) {
                    if (isset($response['@odata.nextLink'])) {
                        $nextUrl = $response['@odata.nextLink'];
                    }
                    $linkCheck = BatchUrlData::where('currentLink', $currentUrl)->get()->toArray();
                    if (count($linkCheck) <= 0) {
                        $myBulkData['currentLink'] = $currentUrl;
                        $myBulkData['type'] = $type;
                        $myBulkData['urlData'] = json_encode($response);
                        $myBulkData['sizeOfurlData'] = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit');
                        $myBulkData['statusMessage'] = 'Obtaining the data without encountering any issues.';
                        //$nextUrl = $response['@odata.nextLink'];
                        $myBulkData['nextLink'] = $nextUrl;
                        $myBulkData['propertyAdded'] = count($response['value']);
                        $myBulkData['created_at'] = Carbon::now();
                        $myBulkData['updated_at'] = Carbon::now();
                        //BatchUrlData::insert($myBulkData);
                        $currendId = DB::table('nwmls_batch_insert')->insertGetId($myBulkData);
                        $batchInfoTable['batch_insert_id'] = $currendId;
                        $batchInfoTable['urlData'] = json_encode($response);
                        $batchInfoTable['sizeOfurlData'] = mb_strlen(json_encode($response, JSON_NUMERIC_CHECK), '8bit');
                        $batchInfoTable['propertyAdded'] = count($response['value']);
                        NwmlsBatchInfo::insert($batchInfoTable);
                    }


                    if (isset($response['@odata.nextLink'])) {
                        $this->prepareUrls($nextUrl, $type);
                    }
                } else {
                    echo 'url is not getting the data';
                }
            } else {
                //dd('first itrateion');
                //$linkCheck = BatchUrlData::where('type',$type)->get()->toArray();


            }
        } else {
            echo 'Please provide Us the Type for the API Hits.';
        }
    }
    public function testingAutomation()
    {
        // $cityies = new Cities();
        // $cityies->name = 'adding first one';
        // $cityies->state_id = 1;
        // $cityies->save();

        for ($i = 0; $i < 2; $i++) {
            $checkmlsStatus = MlsStandardStatu::where('status', 0)->limit(1)->get()->toArray();
            if (isset($checkmlsStatus) && count($checkmlsStatus) > 0) {
                $type = $checkmlsStatus[0]['name'];
                $linkCheck = DB::table('nwmls_batch_insert')->select('currentLink', 'nextLink')->where('type', $type)->orderBy('id', 'desc')->first();
                dd($linkCheck);
                if (isset($linkCheck) && isset($linkCheck->nextLink)) {
                    //$currentUrl = "https://api.mlsgrid.com/v2/Property?\$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27".$type."%27&\$expand=Media%2CRooms%2CUnitTypes&\$top=1000";
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
                        } else {
                            MlsStandardStatu::where('id', $checkmlsStatus[0]['id'])
                                ->update(
                                    ['status' => 1, 'random' => randBatchLinks()]
                                );
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
                            ['currentLink' => $currentUrl],
                            $myBulkData
                        );
                        //$currendId = DB::table('nwmls_batch_insert')->insertGetId($myBulkData);

                        $batchInfoTable['batch_insert_id'] = $currendId->id;
                        $batchInfoTable['urlData'] = $myBulkData['urlData'];
                        $batchInfoTable['sizeOfurlData'] = $myBulkData['sizeOfurlData'];
                        $batchInfoTable['mls_standard_id'] = $checkmlsStatus[0]['id'];
                        $batchInfoTable['mls_standard_random_id'] = $checkmlsStatus[0]['random'];
                        $batchInfoTable['created_at'] = Carbon::now();
                        $batchInfoTable['updated_at'] = Carbon::now();
                        $batchInfoTable['lastInsertedDate'] = Carbon::now();
                        $batchInfoTable['propertyAdded'] = count($response['value']);
                        NwmlsBatchInfo::insert($batchInfoTable);
                        addNotiOfBatchData('Data inserting after first result.');
                        //echo 'yahan tak aaraha ha';
                        //dd('');

                    } //checking value coming from API
                    else {
                        addNotiOfBatchData('else here checking value coming from API');
                        //echo 'url is not getting the data';
                    }
                } //checking link from database
                else {
                    dd('else here next link not exist');
                    if (isset($checkmlsStatus) && count($checkmlsStatus[0]) > 0 && isset($checkmlsStatus[0]['name'])) {
                        $response = Http::timeout(1000)->withHeaders([
                            'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
                            'Accept-Encoding' => 'gzip'
                        ])->get($checkmlsStatus[0]['firstUrl'])->json();
                        addLinktoBatchInsertTable($response, $checkmlsStatus);
                    } else {
                        addNotiOfBatchData('data not coming from this table mls_standard_status');
                    }
                }
            } else {

                $allData = MlsStandardStatu::where('status', 1)->get()->toArray();
                if (isset($allData) && count($allData) > 0) {
                    dd('else here first entry');
                    foreach ($allData as  $newvlaue) {
                        MlsStandardStatu::where('id', $newvlaue['id'])->update(
                            [
                                'random' => randBatchLinks(), 'lastInsertedDate' => Carbon::now(),
                                'updated_at' => Carbon::now(), 'status' => 0
                            ]
                        );
                    }
                    addNotiOfBatchData('epoch completed and reset the all links.');
                }
            }
        } //loop here


    }
    public function debugproperty()
    {
        $chunkSize = 100;
        for ($i = 0; $i < 3; $i++) {
            $media = Media::select('MediaURL', 'id', 's3buckettempurl')
                ->where('status', 1)
                ->where('updated_at', '<', now()->subHours(20))
                ->skip($i * $chunkSize)
                ->take($chunkSize)
                ->get();

            if ($media->isNotEmpty()) {
                foreach ($media as $value) {
                    UpdateMediaJob::dispatch($value);
                }
            } else {
                // No more data, break the loop
                break;
            }
        }
        //var_dump($mydata);
    }
    // public function mainAPI($nextValue = null,$type){
    //     if (isset($type)) {
    //         if (isset($nextValue)) {
    //             $currentUrl = $nextValue;
    //             $this->MlsInsertProperty($currentUrl);
    //         }
    //         else{
    //             $currentUrl = "https://api.mlsgrid.com/v2/Property?\$filter=OriginatingSystemName%20eq%20%27nwmls%27%20and%20StandardStatus+eq+%27".$type."%27&\$expand=Media%2CRooms%2CUnitTypes&\$top=1000";
    //             $this->MlsInsertProperty($currentUrl);
    //         }
    //     } else {
    //         echo 'Erro here';
    //     }



    // }
    public function s3chck()
    {
        $imageUrl = generateS3BucketUrl('dbfc0d6e-dc80-48e1-9d2c-4b39a1118a5b.jpg');
        //echo '<img src="'.$imageUrl.'" />';
        //dd('');
        //echo Storage::disk('s3')->response('images/1678104444aris.jpg');
        //env('AWS_DEFAULT_REGION') //env('AWS_DEFAULT_REGION')
        $media = Media::select('MediaURL', 'status', 'wherfrom', 'id')
            ->where('status', 0)
            ->limit(1)
            ->get();
        //dd($media);
        foreach ($media as $value) {
            $name = basename($value['MediaURL']);
            $path =  Storage::disk('s3')->put('properties/' . $name, file_get_contents('https://s3.amazonaws.com/mlsgrid/images/' . $name));
            $ch = curl_init($value['MediaURL']);
            $fp = fopen($path, 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            // $array['status'] = 1;
            // $array['wherfrom'] = 1;
            $updateMedia = ['status' => 1, 'wherfrom' => 1];
            Media::where('id', $value['id'])->update($updateMedia);
            //Media::updateOrCreate(
            //     ['MediaKey'=>$value['MediaKey'],'mlsproperties_id'=>$value['mlsproperties_id']],
            //     ['status'=>1,'wherfrom'=>1,'mlsproperties_id'=>$value['mlsproperties_id']]
            // );
        }
    }

    public function MlsInsertProperty()
    {
        //$type = 'Active';
        $batchByPropertyCount = BatchUrlData::getUrlData();
        //dd($batchByPropertyCount);
        //
        foreach ($batchByPropertyCount as $typeswithCount) {
            //dd($batchByPropertyCount);
            if (isset($typeswithCount) && isset($typeswithCount['type'])) {
                $linkCheck = BatchUrlData::select('id', 'urlData')->where('type', $typeswithCount['type'])->take(1)->get()->toArray();
                if (isset($linkCheck) && count($linkCheck) > 0) {
                    foreach ($linkCheck as $value) {
                        if (isset($value) && isset($value['urlData'])) {
                            //dd($value['urlData']);
                            $retunRowData = $this->newmthod($value);
                            if ($retunRowData['status'] == TRUE) {
                                BatchUrlData::find($value['id'])->forceDelete();
                                addNotiOfBatchData($retunRowData['message'] . $value['id']);
                                //'delete record';
                            } else {
                                addNotiOfBatchData($retunRowData['message'] . $value['id']);
                                //echo'erro row not exicuted';
                            }
                            //echo '<br>';
                            //echo $value['id'];

                        } else {
                            addNotiOfBatchData('The link is not exist in the current loop.' . $value['id']);
                        }
                    }
                } else {
                    addNotiOfBatchData('data is not comming from database' . $typeswithCount);
                    //echo 'data is not comming from database';
                }
            } else {
                addNotiOfBatchData('all data is completed' . $typeswithCount);
                // echo 'error here';
            }


            //echo $typeswithCount['type'].$typeswithCount['propertyCount'].'<br>';

        }
    }

    public function newmthod($data)
    {
        try {
            $currentValue = json_decode($data['urlData'], true);
            //dd($data['urlData']);
            //echo 'Iteration=>';
            //$countLoop = 1;
            //echo 'batchNumber=>' . $data['id'] . 'Total Count'. count($currentValue['value']);
            foreach ($currentValue['value'] as $key => $jsonToArr) {
                //$value['urlData'] = json_decode($value['urlData'],true);
                //dd($jsonToArr);
                // $countLoop++;
                // $stringKey = preg_replace('/\s+/', '', $jsonToArr['ListingKey']);
                // $exist = Properties::where('ListingKey', $stringKey)->get()->toArray();
                // //var_dump($exist);
                // // echo '<br>';
                // // $countif = 0;
                // // $countelse = 0;

                // if (count($exist) <= 0) {


                // //shakze code ends here
                // }//checking if already exist.
                // else{
                //    echo 'else';
                //     // echo 'else here<br>';
                //     //  echo 'batchNumber=>' . $data['id'];
                //     // echo '<br>';
                //     // echo 'loop=>'.$key;
                //     // echo '<br>';
                // }

                // echo 'main if here =><br>';
                // echo 'batchNumber=>' . $data['id'];
                // echo '<br>';
                // echo 'loop=>'.$key;
                // echo '<br>';
                //echo 'if here'.$data['id'];
                //$countif++;
                $property['IsMlsProperty'] = 1;
                $property['batch_id'] = $data['id'];
                $property['loop_id'] = $key;
                //$property['IsMlsProperty'] = $data[''];
                $property['ListingKeyNumeric'] = isset($jsonToArr['ListingKeyNumeric']) ? $jsonToArr['ListingKeyNumeric'] : "";
                $property['ListingKey'] = isset($jsonToArr['ListingKey']) ? $jsonToArr['ListingKey'] : "";
                $property['ListingId'] = isset($jsonToArr['ListingId']) ? $jsonToArr['ListingId'] : "";
                $property['CityName'] = isset($jsonToArr['City']) ? $jsonToArr['City'] : "";
                $property['StateOrProvince'] = isset($jsonToArr['StateOrProvince']) ? $jsonToArr['StateOrProvince'] : "";
                $property['OriginatingSystemModificationTimestamp'] = isset($jsonToArr['OriginatingSystemModificationTimestamp']) ? $jsonToArr['OriginatingSystemModificationTimestamp'] : "";
                $property['SubdivisionName'] = isset($jsonToArr['SubdivisionName']) ? $jsonToArr['SubdivisionName'] : "";
                $property['PropertyName'] = isset($jsonToArr['BuildingName']) ? $jsonToArr['BuildingName'] : "";
                $property['PostalCode'] = isset($jsonToArr['PostalCode']) ? $jsonToArr['PostalCode'] : "";
                $property['PropetyOriginalPrice'] = isset($jsonToArr['OriginalListPrice']) ? $jsonToArr['OriginalListPrice'] : "";
                $property['PropetySellPrice'] = isset($jsonToArr['ListPrice']) ? $jsonToArr['ListPrice'] : "";
                $property['Bedrooms'] = isset($jsonToArr['BedroomsTotal']) ? $jsonToArr['BedroomsTotal'] : "";
                $property['BathroomsFull'] = isset($jsonToArr['BathroomsFull']) ? $jsonToArr['BathroomsFull'] : "";
                $property['BathroomsHalf'] = isset($jsonToArr['BathroomsHalf']) ? $jsonToArr['BathroomsHalf'] : "";
                $property['PropertyAddress'] =  isset($jsonToArr['UnparsedAddress']) ? $jsonToArr['UnparsedAddress'] : "";
                $property['PropertyDirections'] =  isset($jsonToArr['Directions']) ? $jsonToArr['Directions'] : "";
                $property['PropertyDescription'] = isset($jsonToArr['PublicRemarks']) ? $jsonToArr['PublicRemarks'] : "";
                $property['PropertyArea'] =  isset($jsonToArr['BuildingAreaTotal']) ? $jsonToArr['BuildingAreaTotal'] : "";
                $property['PropertyAreaUnits'] = isset($jsonToArr['BuildingAreaUnits']) ? $jsonToArr['BuildingAreaUnits'] : "";
                $property['PropertyLatitude'] =  isset($jsonToArr['Latitude']) ? $jsonToArr['Latitude'] : "";
                $property['PropertyLongitude'] = isset($jsonToArr['Longitude']) ? $jsonToArr['Longitude'] : "";
                $property['ListAgentFullName'] = isset($jsonToArr['ListAgentFullName']) ? $jsonToArr['ListAgentFullName'] : "";
                $property['ListAgentKeyNumeric'] = isset($jsonToArr['ListAgentKeyNumeric']) ? $jsonToArr['ListAgentKeyNumeric'] : "";
                $property['ListAgentKey'] =  isset($jsonToArr['ListAgentKey']) ? $jsonToArr['ListAgentKey'] : "";
                $property['ListAgentMlsId'] = isset($jsonToArr['ListAgentMlsId']) ? $jsonToArr['ListAgentMlsId'] : "";
                $property['ListOfficeKeyNumeric'] = isset($jsonToArr['ListOfficeKeyNumeric']) ? $jsonToArr['ListOfficeKeyNumeric'] : "";
                $property['ListOfficeKey'] =  isset($jsonToArr['ListOfficeKey']) ? $jsonToArr['ListOfficeKey'] : "";
                $property['ListOfficeMlsId'] =  isset($jsonToArr['ListOfficeMlsId']) ? $jsonToArr['ListOfficeMlsId'] : "";
                $property['ListOfficeName'] =  isset($jsonToArr['ListOfficeName']) ? $jsonToArr['ListOfficeName'] : "";
                $property['ListOfficePhone'] = isset($jsonToArr['ListOfficePhone']) ? $jsonToArr['ListOfficePhone'] : "";
                $property['ListingContractDate'] = isset($jsonToArr['ListingContractDate']) ? $jsonToArr['ListingContractDate'] : "";
                $property['PublishStatus'] = isset($jsonToArr['StandardStatus']) ? $jsonToArr['StandardStatus'] : "";
                ///$property['slug'] = '';
                $property['created_at'] = Carbon::now();

                //dd($property);
                $currentIdskz =  Properties::updateOrCreate(
                    [
                        'ListingKey' => $jsonToArr['ListingKey'],
                        'ListingId' => $jsonToArr['ListingId']
                    ],
                    $property,
                );

                //echo $property['IsMlsProperty'];
                //dd($currentIdskz);
                $propertyId = $currentIdskz->id;
                //$propertyId = DB::table('mlsproperties')->insertGetId($property);


                $propertiesDetails['mlsproperties_id'] = $propertyId;
                //$propertiesDetails['ListingKey'] =  isset($jsonToArr['ListingKeyNumeric']) ? $jsonToArr['ListingKeyNumeric'] : "";
                $propertiesDetails['StreetName'] = isset($jsonToArr['StreetName']) ? $jsonToArr['StreetName'] : " ";
                $propertiesDetails['CountyOrParish'] = isset($jsonToArr['CountyOrParish']) ? $jsonToArr['CountyOrParish'] : " ";
                $propertiesDetails['BuilderName'] = isset($jsonToArr['BuilderName']) ? $jsonToArr['BuilderName'] : "";
                $propertiesDetails['MLSArea'] = isset($jsonToArr['MLSAreaMajor']) ? $jsonToArr['MLSAreaMajor'] : "";
                $propertiesDetails['NWM_WaterHeaterLocation']  = isset($jsonToArr['NWM_WaterHeaterLocation']) ? $jsonToArr['NWM_WaterHeaterLocation'] : "";
                $propertiesDetails['NWM_WaterHeaterType'] = isset($jsonToArr['NWM_WaterHeaterType']) ? $jsonToArr['NWM_WaterHeaterType'] : "";
                $propertiesDetails['FireplaceYN'] = isset($jsonToArr['FireplaceYN']) ? $jsonToArr['FireplaceYN'] : '0';
                $propertiesDetails['FireplacesTotal'] = isset($jsonToArr['FireplacesTotal']) ? $jsonToArr['FireplacesTotal'] : '0';
                $propertiesDetails['Furnished'] = isset($jsonToArr['Furnished']) ? $jsonToArr['Furnished'] : "";
                $propertiesDetails['EntryLocation'] = isset($jsonToArr['EntryLocation']) ? $jsonToArr['EntryLocation'] : "";
                $propertiesDetails['GarageSpaces'] = isset($jsonToArr['GarageSpaces']) ? $jsonToArr['GarageSpaces'] : '0';
                $propertiesDetails['GarageYN'] = isset($jsonToArr['GarageYN']) ? $jsonToArr['GarageYN'] : '0';
                $propertiesDetails['StoriesTotal']  = isset($jsonToArr['StoriesTotal']) ? $jsonToArr['StoriesTotal'] : '0';
                $propertiesDetails['ViewYN'] = isset($jsonToArr['ViewYN']) ? $jsonToArr['ViewYN'] : '0';
                $propertiesDetails['NewConstructionYN'] = isset($jsonToArr['NewConstructionYN']) ? $jsonToArr['NewConstructionYN'] : '0';
                $propertiesDetails['ParkingTotal'] = isset($jsonToArr['ParkingTotal']) ? $jsonToArr['ParkingTotal'] : '0';
                $propertiesDetails['ElevationUnits'] = isset($jsonToArr['ElevationUnits']) ? $jsonToArr['ElevationUnits'] : "";
                $propertiesDetails['CoveredSpaces'] = isset($jsonToArr['CoveredSpaces']) ? $jsonToArr['CoveredSpaces'] : '0';
                $propertiesDetails['TaxAnnualAmount'] = isset($jsonToArr['TaxAnnualAmount']) ? $jsonToArr['TaxAnnualAmount'] : '0';
                $propertiesDetails['TaxYear'] = isset($jsonToArr['TaxYear']) ? $jsonToArr['TaxYear'] : '0';
                $propertiesDetails['PropertySubType'] = isset($jsonToArr['PropertySubType']) ? $jsonToArr['PropertySubType'] : "";
                $propertiesDetails['YearBuilt'] = isset($jsonToArr['YearBuilt']) ? $jsonToArr['YearBuilt'] : '0';
                $propertiesDetails['MiddleOrJuniorSchool'] = isset($jsonToArr['MiddleOrJuniorSchool']) ? $jsonToArr['MiddleOrJuniorSchool'] : "";
                $propertiesDetails['HighSchool'] = isset($jsonToArr['HighSchool']) ? $jsonToArr['HighSchool'] : "";
                $propertiesDetails['HighSchoolDistrict'] = isset($jsonToArr['HighSchoolDistrict']) ? $jsonToArr['HighSchoolDistrict'] : "";
                $propertiesDetails['ElementarySchool'] = isset($jsonToArr['ElementarySchool']) ? $jsonToArr['ElementarySchool'] : "";
                $propertiesDetails['YearBuiltEffective'] = isset($jsonToArr['YearBuiltEffective']) ? $jsonToArr['YearBuiltEffective'] : '0';
                $propertiesDetails['ElectricOnPropertyYN'] = isset($jsonToArr['ElectricOnPropertyYN']) ? $jsonToArr['ElectricOnPropertyYN'] : '0';
                $propertiesDetails['AssociationFee'] = isset($jsonToArr['AssociationFee']) ? $jsonToArr['AssociationFee'] : '0';
                $propertiesDetails['AssociationFeeFrequency'] = isset($jsonToArr['AssociationFeeFrequency']) ? $jsonToArr['AssociationFeeFrequency'] : '0';
                $propertiesDetails['Country'] = isset($jsonToArr['Country']) ? $jsonToArr['Country'] : "";
                $propertiesDetails['HeatingYN'] = isset($jsonToArr['HeatingYN']) ? $jsonToArr['HeatingYN'] : '0';
                $propertiesDetails['Topography'] = isset($jsonToArr['Topography']) ? $jsonToArr['Topography'] : "";
                $propertiesDetails['PowerCompany'] = isset($jsonToArr['NWM_PowerCompany']) ? $jsonToArr['NWM_PowerCompany'] : "";
                $propertiesDetails['Inclusions'] = isset($jsonToArr['Inclusions']) ? $jsonToArr['Inclusions'] : "";
                $propertiesDetails['Status'] = isset($jsonToArr['MlsStatus']) ? $jsonToArr['MlsStatus'] : "";
                $propertiesDetails['LotSizeAcres'] = isset($jsonToArr['LotSizeAcres']) ? $jsonToArr['LotSizeAcres'] : '0';
                $propertiesDetails['LotSizeSquareFeet'] = isset($jsonToArr['LotSizeSquareFeet']) ? $jsonToArr['LotSizeSquareFeet'] : '0';
                $propertiesDetails['SiteFeatures'] = isset($jsonToArr['NWM_SiteFeatures']) ? $jsonToArr['NWM_SiteFeatures'] : "";
                $propertiesDetails['WaterCompany'] = isset($jsonToArr['NWM_WaterCompany']) ? $jsonToArr['NWM_WaterCompany'] : "";
                $propertiesDetails['StyleCode'] = isset($jsonToArr['NWM_StyleCode']) ? $jsonToArr['NWM_StyleCode'] : "";
                $propertiesDetails['SewerCompany'] = isset($jsonToArr['NWM_SewerCompany']) ? $jsonToArr['NWM_SewerCompany'] : "";
                $propertiesDetails['HeatingCoolingType'] = isset($jsonToArr['NWM_HeatingCoolingType']) ? $jsonToArr['NWM_HeatingCoolingType'] : "";
                $propertiesDetails['PropertyType'] = isset($jsonToArr['PropertyType']) ? $jsonToArr['PropertyType'] : "";
                $propertiesDetails['VirtualTourURLUnbranded'] = isset($jsonToArr['VirtualTourURLUnbranded']) ? $jsonToArr['VirtualTourURLUnbranded'] : "";
                $propertiesDetails['BuildingInformation'] = isset($jsonToArr['NWM_BuildingInformation']) ? $jsonToArr['NWM_BuildingInformation'] : "";
                $propertiesDetails['BathroomsThreeQuarter'] = isset($jsonToArr['BathroomsThreeQuarter']) ? $jsonToArr['BathroomsThreeQuarter'] : '0';
                $propertiesDetails['CoListAgentFullName'] = isset($jsonToArr['CoListAgentFullName']) ? $jsonToArr['CoListAgentFullName'] : "";
                $propertiesDetails['CoListAgentKeyNumeric'] = isset($jsonToArr['CoListAgentKeyNumeric']) ? $jsonToArr['CoListAgentKeyNumeric'] : "";
                $propertiesDetails['CoListAgentKey'] = isset($jsonToArr['CoListAgentKey']) ? $jsonToArr['CoListAgentKey'] : "";
                $propertiesDetails['CoListAgentMlsId'] = isset($jsonToArr['CoListAgentMlsId']) ? $jsonToArr['CoListAgentMlsId'] : "";
                $propertiesDetails['CoListOfficeKeyNumeric'] = isset($jsonToArr['CoListOfficeKeyNumeric']) ? $jsonToArr['CoListOfficeKeyNumeric'] : "";
                $propertiesDetails['CoListOfficeKey'] = isset($jsonToArr['CoListOfficeKey']) ? $jsonToArr['CoListOfficeKey'] : "";
                $propertiesDetails['CoListOfficeMlsId'] = isset($jsonToArr['CoListOfficeMlsId']) ? $jsonToArr['CoListOfficeMlsId'] : "";
                $propertiesDetails['CoListOfficeName'] = isset($jsonToArr['CoListOfficeName']) ? $jsonToArr['CoListOfficeName'] : "";
                $propertiesDetails['CoListOfficePhone'] = isset($jsonToArr['CoListOfficePhone']) ? $jsonToArr['CoListOfficePhone'] : "";
                $propertiesDetails['ContractStatusChangeDate'] = isset($jsonToArr['ContractStatusChangeDate']) ? $jsonToArr['ContractStatusChangeDate'] : "";
                $propertiesDetails['created_at'] = Carbon::now();

                // skz code here
                $propertiesDetails['StreetDirPrefix'] = isset($jsonToArr['StreetDirPrefix']) ? $jsonToArr['StreetDirPrefix'] : "";
                $propertiesDetails['NWM_Franchise'] = isset($jsonToArr['NWM_Franchise']) ? $jsonToArr['NWM_Franchise'] : "";
                $propertiesDetails['TotalActualRent'] = isset($jsonToArr['TotalActualRent']) ? $jsonToArr['TotalActualRent'] : "";
                $propertiesDetails['NWM_DepthOfLot'] = isset($jsonToArr['NWM_DepthOfLot']) ? $jsonToArr['NWM_DepthOfLot'] : "";
                $propertiesDetails['MainLevelBedrooms'] = isset($jsonToArr['MainLevelBedrooms']) ? $jsonToArr['MainLevelBedrooms'] : "";
                $propertiesDetails['ApproxbuildSquareFeet'] = isset($jsonToArr['NWM_ApproximateBuildingSquareFeet']) ? $jsonToArr['NWM_ApproximateBuildingSquareFeet'] : "";
                $propertiesDetails['ManufacturingSquareFeet'] = isset($jsonToArr['NWM_ApproximateWarehouseManufacturingSquareFeet']) ? $jsonToArr['NWM_ApproximateWarehouseManufacturingSquareFeet'] : "";
                $propertiesDetails['NWM_AvailablePads'] =  isset($jsonToArr['NWM_AvailablePads']) ? $jsonToArr['NWM_AvailablePads'] : "";
                $propertiesDetails['NWM_HoursOfOperation'] = isset($jsonToArr['NWM_HoursOfOperation']) ? $jsonToArr['NWM_HoursOfOperation'] : "";
                $propertiesDetails['NWM_LeasedItemsFlag'] = isset($jsonToArr['NWM_LeasedItemsFlag']) ? $jsonToArr['NWM_LeasedItemsFlag'] : "";
                $propertiesDetails['NWM_LiensMortgages'] = isset($jsonToArr['NWM_LiensMortgages']) ? $jsonToArr['NWM_LiensMortgages'] : "";
                $propertiesDetails['ModifiTimstp'] = isset($jsonToArr['ModificationTimestamp']) ?
                    Carbon::parse($jsonToArr['ModificationTimestamp'])->setTimezone(config('app.timezone'))->format('Y-m-d h:i:s')
                    : "";
                $propertiesDetails['BuyerAgencyCompensation'] = isset($jsonToArr['BuyerAgencyCompensation']) ? $jsonToArr['BuyerAgencyCompensation'] : "";
                $propertiesDetails['CarportYN'] = isset($jsonToArr['CarportYN']) ? $jsonToArr['CarportYN'] : "";
                $propertiesDetails['CoolingYN'] = isset($jsonToArr['CoolingYN']) ? $jsonToArr['CoolingYN'] : "";
                $propertiesDetails['NWM_ReportsDocsCompleted'] = isset($jsonToArr['NWM_ReportsDocsCompleted']) ? $jsonToArr['NWM_ReportsDocsCompleted'] : "";
                $propertiesDetails['NWM_Restrictions'] = isset($jsonToArr['NWM_Restrictions']) ? $jsonToArr['NWM_Restrictions'] : "";
                $propertiesDetails['DirectionFaces'] = isset($jsonToArr['DirectionFaces']) ? $jsonToArr['DirectionFaces'] : "";
                $propertiesDetails['LandLeaseYN'] = isset($jsonToArr['LandLeaseYN']) ? $jsonToArr['LandLeaseYN'] : "";
                $propertiesDetails['CumulativeDaysOnMarket'] = isset($jsonToArr['CumulativeDaysOnMarket']) ? $jsonToArr['CumulativeDaysOnMarket'] : "";
                $propertiesDetails['InternetAddressDisplayYN'] = isset($jsonToArr['InternetAddressDisplayYN']) ? $jsonToArr['InternetAddressDisplayYN'] : "";
                $propertiesDetails['InternetAutomatedValuationDisplayYN'] = isset($jsonToArr['InternetAutomatedValuationDisplayYN']) ? $jsonToArr['InternetAutomatedValuationDisplayYN'] : "";
                $propertiesDetails['InternetConsumerCommentYN'] = isset($jsonToArr['InternetConsumerCommentYN']) ? $jsonToArr['InternetConsumerCommentYN'] : "";
                $propertiesDetails['InternetEntireListingDisplayYN'] = isset($jsonToArr['InternetEntireListingDisplayYN']) ? $jsonToArr['InternetEntireListingDisplayYN'] : "";
                $propertiesDetails['IrrigationWaterRightsYN'] = isset($jsonToArr['IrrigationWaterRightsYN']) ? $jsonToArr['IrrigationWaterRightsYN'] : "";
                $propertiesDetails['ListOfficePhoneExt'] = isset($jsonToArr['ListOfficePhoneExt']) ? $jsonToArr['ListOfficePhoneExt'] : "";
                $propertiesDetails['OnMarketDate'] = isset($jsonToArr['OnMarketDate']) ? $jsonToArr['OnMarketDate'] : "";
                $propertiesDetails['ParcelNumber'] = isset($jsonToArr['ParcelNumber']) ? $jsonToArr['ParcelNumber'] : "";
                $propertiesDetails['PhotosCount'] = isset($jsonToArr['PhotosCount']) ? $jsonToArr['PhotosCount'] : "";
                $propertiesDetails['SeniorCommunityYN'] = isset($jsonToArr['SeniorCommunityYN']) ? $jsonToArr['SeniorCommunityYN'] : "";
                $propertiesDetails['SignOnPropertyYN'] = isset($jsonToArr['SignOnPropertyYN']) ? $jsonToArr['SignOnPropertyYN'] : "";
                $propertiesDetails['SourceSystemName'] = isset($jsonToArr['SourceSystemName']) ? $jsonToArr['SourceSystemName'] : "";
                $propertiesDetails['WaterfrontYN'] = isset($jsonToArr['WaterfrontYN']) ? $jsonToArr['WaterfrontYN'] : "";
                $propertiesDetails['NWM_Bathrooms'] = isset($jsonToArr['NWM_Bathrooms']) ? $jsonToArr['NWM_Bathrooms'] : "";
                $propertiesDetails['StreetNumber'] = isset($jsonToArr['StreetNumber']) ? $jsonToArr['StreetNumber'] : "";
                $propertiesDetails['StreetNumberNumeric'] = isset($jsonToArr['StreetNumberNumeric']) ? $jsonToArr['StreetNumberNumeric'] : "";
                $propertiesDetails['StsChngTimstmp'] = isset($jsonToArr['StatusChangeTimestamp'])
                    ?
                    Carbon::parse($jsonToArr['StatusChangeTimestamp'])->setTimezone(config('app.timezone'))->format('Y-m-d h:i:s')
                    : "";
                $propertiesDetails['StreetSuffix'] = isset($jsonToArr['StreetSuffix']) ? $jsonToArr['StreetSuffix'] : "";
                $propertiesDetails['NWM_NetProceeds'] = isset($jsonToArr['NWM_NetProceeds']) ? $jsonToArr['NWM_NetProceeds'] : "";
                $propertiesDetails['ContingentDate'] = isset($jsonToArr['ContingentDate']) ? $jsonToArr['ContingentDate'] : "";
                $propertiesDetails['PhtosChngeTmstm'] = isset($jsonToArr['PhotosChangeTimestamp'])
                    ?
                    Carbon::parse($jsonToArr['PhotosChangeTimestamp'])->setTimezone(config('app.timezone'))->format('Y-m-d h:i:s')
                    : "";
                $propertiesDetails['NWM_SOCComments'] = isset($jsonToArr['NWM_SOCComments']) ? $jsonToArr['NWM_SOCComments'] : "";
                $propertiesDetails['ZoningDescription'] = isset($jsonToArr['ZoningDescription']) ? $jsonToArr['ZoningDescription'] : "";
                $propertiesDetails['NWM_AppliancesIncluded'] = isset($jsonToArr['NWM_AppliancesIncluded']) ? $jsonToArr['NWM_AppliancesIncluded'] : "";
                $propertiesDetails['NWM_FreeAndClear'] = isset($jsonToArr['NWM_FreeAndClear']) ? $jsonToArr['NWM_FreeAndClear'] : "";
                $propertiesDetails['NWM_EffectiveYearBuiltSource'] = isset($jsonToArr['NWM_EffectiveYearBuiltSource']) ? $jsonToArr['NWM_EffectiveYearBuiltSource'] : "";
                $propertiesDetails['NWM_AdditionalTaxIds'] = isset($jsonToArr['NWM_AdditionalTaxIds']) ? $jsonToArr['NWM_AdditionalTaxIds'] : "";
                $propertiesDetails['NWM_CalculatedSquareFootage'] = isset($jsonToArr['NWM_CalculatedSquareFootage']) ? $jsonToArr['NWM_CalculatedSquareFootage'] : "";
                $propertiesDetails['NWM_CurrentlyListedForSale'] = isset($jsonToArr['NWM_CurrentlyListedForSale']) ? $jsonToArr['NWM_CurrentlyListedForSale'] : "";
                $propertiesDetails['NWM_MinimumRentalTerm'] = isset($jsonToArr['NWM_MinimumRentalTerm']) ? $jsonToArr['NWM_MinimumRentalTerm'] : "";
                $propertiesDetails['NWM_GrossAdjustedIncome'] = isset($jsonToArr['NWM_GrossAdjustedIncome']) ? $jsonToArr['NWM_GrossAdjustedIncome'] : "";
                $propertiesDetails['NWM_ShortTermRentalYN'] = isset($jsonToArr['NWM_ShortTermRentalYN']) ? $jsonToArr['NWM_ShortTermRentalYN'] : "";
                $propertiesDetails['NWM_DPRYN'] = isset($jsonToArr['NWM_DPRYN']) ? $jsonToArr['NWM_DPRYN'] : "";
                $propertiesDetails['NWM_LandAssessedValue'] = isset($jsonToArr['NWM_LandAssessedValue']) ? $jsonToArr['NWM_LandAssessedValue'] : "";
                $propertiesDetails['TaxLegalDescription'] = isset($jsonToArr['TaxLegalDescription']) ? $jsonToArr['TaxLegalDescription'] : "";
                $propertiesDetails['NWM_GrossRentMultiplier'] = isset($jsonToArr['NWM_GrossRentMultiplier']) ? $jsonToArr['NWM_GrossRentMultiplier'] : "";
                $propertiesDetails['NWM_ImprovementsAssessedValue'] = isset($jsonToArr['NWM_ImprovementsAssessedValue']) ? $jsonToArr['NWM_ImprovementsAssessedValue'] : "";
                $propertiesDetails['NWM_ElectricityStatus'] = isset($jsonToArr['NWM_ElectricityStatus']) ? $jsonToArr['NWM_ElectricityStatus'] : "";
                $propertiesDetails['NWM_FIRPTAYN'] = isset($jsonToArr['NWM_FIRPTAYN']) ? $jsonToArr['NWM_FIRPTAYN'] : "";
                $propertiesDetails['NWM_FirstRightOfRefusal'] = isset($jsonToArr['NWM_FirstRightOfRefusal']) ? $jsonToArr['NWM_FirstRightOfRefusal'] : "";
                $propertiesDetails['NWM_LotNumber'] = isset($jsonToArr['NWM_LotNumber']) ? $jsonToArr['NWM_LotNumber'] : "";
                $propertiesDetails['NWM_GasStatus'] = isset($jsonToArr['NWM_GasStatus']) ? $jsonToArr['NWM_GasStatus'] : "";
                $propertiesDetails['NWM_MLSLotSizeSource'] = isset($jsonToArr['NWM_MLSLotSizeSource']) ? $jsonToArr['NWM_MLSLotSizeSource'] : "";
                $propertiesDetails['NWM_EnergySource'] = isset($jsonToArr['NWM_EnergySource']) ? $jsonToArr['NWM_EnergySource'] : "";
                $propertiesDetails['NWM_NewConstruction'] = isset($jsonToArr['NWM_NewConstruction']) ? $jsonToArr['NWM_NewConstruction'] : "";
                $propertiesDetails['FuelExpense'] = isset($jsonToArr['FuelExpense']) ? $jsonToArr['FuelExpense'] : "";
                $propertiesDetails['NetOperatingIncome'] = isset($jsonToArr['NetOperatingIncome']) ? $jsonToArr['NetOperatingIncome'] : "";
                $propertiesDetails['NumberOfUnitsTotal'] = isset($jsonToArr['NumberOfUnitsTotal']) ? $jsonToArr['NumberOfUnitsTotal'] : "";
                $propertiesDetails['CapRate'] = isset($jsonToArr['CapRate']) ? $jsonToArr['CapRate'] : "";
                $propertiesDetails['CarportSpaces'] = isset($jsonToArr['CarportSpaces']) ? $jsonToArr['CarportSpaces'] : "";
                $propertiesDetails['ElectricExpense'] = isset($jsonToArr['ElectricExpense']) ? $jsonToArr['ElectricExpense'] : "";
                $propertiesDetails['OffMarketDate'] = isset($jsonToArr['OffMarketDate']) ? $jsonToArr['OffMarketDate'] : "";
                $propertiesDetails['NWM_InactiveDate'] = isset($jsonToArr['NWM_InactiveDate']) ? $jsonToArr['NWM_InactiveDate'] : "";
                $propertiesDetails['Model'] = isset($jsonToArr['Model']) ? $jsonToArr['Model'] : "";
                $propertiesDetails['NWM_BathsFullGarage'] = isset($jsonToArr['NWM_BathsFullGarage']) ? $jsonToArr['NWM_BathsFullGarage'] : "";
                $propertiesDetails['NWM_BathsFullLower'] = isset($jsonToArr['NWM_BathsFullLower']) ? $jsonToArr['NWM_BathsFullLower'] : "";
                $propertiesDetails['NWM_BathsFullMain'] = isset($jsonToArr['NWM_BathsFullMain']) ? $jsonToArr['NWM_BathsFullMain'] : "";
                $propertiesDetails['NWM_BathsFullUpper'] = isset($jsonToArr['NWM_BathsFullUpper']) ? $jsonToArr['NWM_BathsFullUpper'] : "";
                $propertiesDetails['NWM_BathsHalfGarage'] = isset($jsonToArr['NWM_BathsHalfGarage']) ? $jsonToArr['NWM_BathsHalfGarage'] : "";
                $propertiesDetails['NWM_BathsHalfLower'] = isset($jsonToArr['NWM_BathsHalfLower']) ? $jsonToArr['NWM_BathsHalfLower'] : "";
                $propertiesDetails['NWM_BathsHalfMain'] = isset($jsonToArr['NWM_BathsHalfMain']) ? $jsonToArr['NWM_BathsHalfMain'] : "";
                $propertiesDetails['NWM_BathsHalfUpper'] = isset($jsonToArr['NWM_BathsHalfUpper']) ? $jsonToArr['NWM_BathsHalfUpper'] : "";
                $propertiesDetails['NWM_BathsThreeQuarterGarage'] = isset($jsonToArr['NWM_BathsThreeQuarterGarage']) ? $jsonToArr['NWM_BathsThreeQuarterGarage'] : "";
                $propertiesDetails['NWM_BathsThreeQuarterLower'] = isset($jsonToArr['NWM_BathsThreeQuarterLower']) ? $jsonToArr['NWM_BathsThreeQuarterLower'] : "";
                $propertiesDetails['NWM_BathsThreeQuarterMain'] = isset($jsonToArr['NWM_BathsThreeQuarterMain']) ? $jsonToArr['NWM_BathsThreeQuarterMain'] : "";
                $propertiesDetails['NWM_BathsThreeQuarterUpper'] = isset($jsonToArr['NWM_BathsThreeQuarterUpper']) ? $jsonToArr['NWM_BathsThreeQuarterUpper'] : "";
                $propertiesDetails['NWM_BedroomsLower'] = isset($jsonToArr['NWM_BedroomsLower']) ? $jsonToArr['NWM_BedroomsLower'] : "";
                $propertiesDetails['NWM_BedroomsUpper'] = isset($jsonToArr['NWM_BedroomsUpper']) ? $jsonToArr['NWM_BedroomsUpper'] : "";
                $propertiesDetails['OtherExpense'] = isset($jsonToArr['OtherExpense']) ? $jsonToArr['OtherExpense'] : "";
                $propertiesDetails['GrossScheduledIncome'] = isset($jsonToArr['GrossScheduledIncome']) ? $jsonToArr['GrossScheduledIncome'] : "";
                $propertiesDetails['InsuranceExpense'] = isset($jsonToArr['InsuranceExpense']) ? $jsonToArr['InsuranceExpense'] : "";
                $propertiesDetails['LeasableArea'] = isset($jsonToArr['LeasableArea']) ? $jsonToArr['LeasableArea'] : "";
                $propertiesDetails['LeasableAreaUnits'] =  isset($jsonToArr['LeasableAreaUnits']) ? $jsonToArr['LeasableAreaUnits'] : "";
                $propertiesDetails['OpenParkingSpaces'] = isset($jsonToArr['OpenParkingSpaces']) ? $jsonToArr['OpenParkingSpaces'] : "";
                $propertiesDetails['NWM_ParkingUncoveredTotal'] = isset($jsonToArr['NWM_ParkingUncoveredTotal']) ? $jsonToArr['NWM_ParkingUncoveredTotal'] : "";
                $propertiesDetails['NWM_Offers'] = isset($jsonToArr['NWM_Offers']) ? $jsonToArr['NWM_Offers'] : "";
                $propertiesDetails['NWM_PreliminaryTitleOrdered'] = isset($jsonToArr['NWM_PreliminaryTitleOrdered']) ? $jsonToArr['NWM_PreliminaryTitleOrdered'] : "";
                $propertiesDetails['NWM_RoadOnWhichSide'] = isset($jsonToArr['NWM_RoadOnWhichSide']) ? $jsonToArr['NWM_RoadOnWhichSide'] : "";
                $propertiesDetails['NWM_TermsAndConditionsComments'] = isset($jsonToArr['NWM_TermsAndConditionsComments']) ? $jsonToArr['NWM_TermsAndConditionsComments'] : "";
                $propertiesDetails['NWM_SaleType'] = isset($jsonToArr['NWM_SaleType']) ? $jsonToArr['NWM_SaleType'] : "";
                $propertiesDetails['NWM_SellerDisclosure'] = isset($jsonToArr['NWM_SellerDisclosure']) ? $jsonToArr['NWM_SellerDisclosure'] : "";
                $propertiesDetails['NWM_SeniorExemption'] = isset($jsonToArr['NWM_SeniorExemption']) ? $jsonToArr['NWM_SeniorExemption'] : "";
                $propertiesDetails['NWM_SepticDesignInstalled'] = isset($jsonToArr['NWM_SepticDesignInstalled']) ? $jsonToArr['NWM_SepticDesignInstalled'] : "";
                $propertiesDetails['AvailabilityDate'] = isset($jsonToArr['AvailabilityDate']) ? $jsonToArr['AvailabilityDate'] : "";
                $propertiesDetails['BathroomsTotalInteger'] = isset($jsonToArr['BathroomsTotalInteger']) ? $jsonToArr['BathroomsTotalInteger'] : "";
                $propertiesDetails['BedroomsPossible'] = isset($jsonToArr['BedroomsPossible']) ? $jsonToArr['BedroomsPossible'] : "";
                $propertiesDetails['NWM_ShowMapLink'] = isset($jsonToArr['NWM_ShowMapLink']) ? $jsonToArr['NWM_ShowMapLink'] : "";
                $propertiesDetails['NWM_SignageStays'] = isset($jsonToArr['NWM_SignageStays']) ? $jsonToArr['NWM_SignageStays'] : "";
                $propertiesDetails['NWM_SquareFootageFinished'] = isset($jsonToArr['NWM_SquareFootageFinished']) ? $jsonToArr['NWM_SquareFootageFinished'] : "";
                $propertiesDetails['NWM_SquareFootageUnfinished'] = isset($jsonToArr['NWM_SquareFootageUnfinished']) ? $jsonToArr['NWM_SquareFootageUnfinished'] : "";
                $propertiesDetails['NWM_Location'] = isset($jsonToArr['NWM_Location']) ? $jsonToArr['NWM_Location'] : "";
                $propertiesDetails['NWM_RealProperty'] = isset($jsonToArr['NWM_RealProperty']) ? $jsonToArr['NWM_RealProperty'] : "";
                $propertiesDetails['NWM_SketchSubmitted'] = isset($jsonToArr['NWM_SketchSubmitted']) ? $jsonToArr['NWM_SketchSubmitted'] : "";
                $propertiesDetails['NWM_Block'] = isset($jsonToArr['NWM_Block']) ? $jsonToArr['NWM_Block'] : "";
                $propertiesDetails['BusinessName'] = isset($jsonToArr['BusinessName']) ? $jsonToArr['BusinessName'] : "";
                $propertiesDetails['detachedDwelingSqFtFnshed'] = isset($jsonToArr['NWM_DetachedDwellingSqFtFinished']) ? $jsonToArr['NWM_DetachedDwellingSqFtFinished'] : "";
                $propertiesDetails['NWM_FireplacesMain'] = isset($jsonToArr['NWM_FireplacesMain']) ? $jsonToArr['NWM_FireplacesMain'] : "";
                $propertiesDetails['NWM_BusRouteNumber'] = isset($jsonToArr['NWM_BusRouteNumber']) ? $jsonToArr['NWM_BusRouteNumber'] : "";
                $propertiesDetails['NWM_BusLineNearby'] =  isset($jsonToArr['NWM_BusLineNearby']) ? $jsonToArr['NWM_BusLineNearby'] : "";
                $propertiesDetails['NWM_WaterJurisdiction'] = isset($jsonToArr['NWM_WaterJurisdiction']) ? $jsonToArr['NWM_WaterJurisdiction'] : "";
                $propertiesDetails['NWM_PropertyFeatures'] =  isset($jsonToArr['NWM_PropertyFeatures']) ? $jsonToArr['NWM_PropertyFeatures'] : "";
                $propertiesDetails['NWM_RoadInformation'] =  isset($jsonToArr['NWM_RoadInformation']) ? $jsonToArr['NWM_RoadInformation'] : "";
                $propertiesDetails['AttachedGarageYN'] = isset($jsonToArr['AttachedGarageYN']) ? $jsonToArr['AttachedGarageYN'] : "";
                $propertiesDetails['PurchaseContractDate'] = isset($jsonToArr['PurchaseContractDate']) ? $jsonToArr['PurchaseContractDate'] : "";
                $propertiesDetails['NWM_ThirdPartyApproval'] = isset($jsonToArr['NWM_ThirdPartyApproval']) ? $jsonToArr['NWM_ThirdPartyApproval'] : "";
                $propertiesDetails['NWM_ZoningClass'] = isset($jsonToArr['NWM_ZoningClass']) ? $jsonToArr['NWM_ZoningClass'] : "";
                $propertiesDetails['NWM_ZoningJurisdiction'] = isset($jsonToArr['NWM_ZoningJurisdiction']) ? $jsonToArr['NWM_ZoningJurisdiction'] : "";
                $propertiesDetails['AssociationYN'] =  isset($jsonToArr['AssociationYN']) ? $jsonToArr['AssociationYN'] : "";
                $propertiesDetails['OriginatingSystemName'] = isset($jsonToArr['OriginatingSystemName']) ? $jsonToArr['OriginatingSystemName'] : "";
                $propertiesDetails['MlgCanView'] = isset($jsonToArr['MlgCanView']) ? $jsonToArr['MlgCanView'] : "";
                $propertiesDetails['LeaseAssignableYN'] = isset($jsonToArr['LeaseAssignableYN']) ? $jsonToArr['LeaseAssignableYN'] : "";
                $propertiesDetails['LivingArea'] = isset($jsonToArr['LivingArea']) ? $jsonToArr['LivingArea'] : "";
                $propertiesDetails['LivingAreaUnits'] = isset($jsonToArr['LivingAreaUnits']) ? $jsonToArr['LivingAreaUnits'] : "";
                $propertiesDetails['LotSizeDimensions'] = isset($jsonToArr['LotSizeDimensions']) ? $jsonToArr['LotSizeDimensions'] : "";
                $propertiesDetails['LotSizeUnits'] = isset($jsonToArr['LotSizeUnits']) ? $jsonToArr['LotSizeUnits'] : "";
                $propertiesDetails['OpenParkingYN'] = isset($jsonToArr['OpenParkingYN']) ? $jsonToArr['OpenParkingYN'] : "";
                //skz code here

                //DB::table('properties_detials')->insert($propertiesDetails);
                //dd('');
                PropertiesDetials::updateOrCreate(
                    ['mlsproperties_id' => $propertyId],
                    $propertiesDetails,
                );
                //1 - Appliences
                if (isset($jsonToArr['Appliances'])) {
                    foreach ($jsonToArr['Appliances'] as $value) {
                        $appliances = Appliances::updateOrCreate(
                            ['ApplianceName' => $value],
                            ['ApplianceName' => $value,]
                        );

                        // $proAppliances['mlsproperties_id'] = $propertyId;
                        // $proAppliances['mlsappliances_id'] = $appliances->id;
                        //$proAppliances['created_at'] = Carbon::now();
                        PropertyAppliances::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsappliances_id' => $appliances->id],
                            ['mlsproperties_id' => $propertyId, 'mlsappliances_id' => $appliances->id],
                        );
                        //DB::table('mlsproperty_appliances')->insert($proAppliances);
                    }

                    //var_dump($arrproAppliances);
                    //echo '<br><br>';
                }


                //2: Architectural Style
                if (isset($jsonToArr['ArchitecturalStyle'])) {
                    foreach ($jsonToArr['ArchitecturalStyle'] as $value) {
                        $archi = ArchitecturalStyle::updateOrCreate(
                            ['ArchitecturalName' => $value],
                            ['ArchitecturalName' => $value,]
                        );

                        PropertyArchitecturalStyle::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsarchitectural_styles_id' => $archi->id],
                            ['mlsproperties_id' => $propertyId, 'mlsarchitectural_styles_id' => $archi->id],
                        );
                        // $proArchi['mlsproperties_id'] = $propertyId;;
                        // $proArchi['mlsarchitectural_styles_id'] = $archi->id;
                        // $proArchi['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_architectural')->insert($proArchi);
                    }
                }

                //     //3:  Basements
                if (isset($jsonToArr['Basement'])) {
                    foreach ($jsonToArr['Basement'] as $value) {
                        $basement = Basement::updateOrCreate(
                            ['BasementName' => $value],
                            ['BasementName' => $value,]
                        );
                        PropertyBasement::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsbasement_id' => $basement->id],
                            ['mlsproperties_id' => $propertyId, 'mlsbasement_id' => $basement->id],
                        );
                        // $proBasement['mlsproperties_id'] = $propertyId;;
                        // $proBasement['mlsbasement_id'] = $basement->id;
                        // $proBasement['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_basements')->insert($proBasement);
                    }
                }
                //     //4: Comunuty Features
                if (isset($jsonToArr['CommunityFeatures'])) {
                    foreach ($jsonToArr['CommunityFeatures'] as $value) {
                        $community = CommunityFeatures::updateOrCreate(
                            ['CommunityFeatureName' => $value],
                            ['CommunityFeatureName' => $value,]
                        );
                        PropertyCommunity::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlscommunity_features_id' => $community->id],
                            ['mlsproperties_id' => $propertyId, 'mlscommunity_features_id' => $community->id],
                        );
                        // $proCommunity['mlsproperties_id'] = $propertyId;;
                        // $proCommunity['mlscommunity_features_id'] = $community->id;
                        // $proCommunity['created_at'] = Carbon::now();
                        // DB::table('property_communities')->insert($proCommunity);

                    }
                }

                //     //5: Exterior Features
                if (isset($jsonToArr['ExteriorFeatures'])) {
                    foreach ($jsonToArr['ExteriorFeatures'] as $value) {
                        $exterior = ExteriorFeatures::updateOrCreate(
                            ['ExterFeatureName' => $value],
                            ['ExterFeatureName' => $value,]
                        );

                        PropertyExterior::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsexterior_features_id' => $exterior->id],
                            ['mlsproperties_id' => $propertyId, 'mlsexterior_features_id' => $exterior->id],
                        );
                        // $proExterior['mlsproperties_id'] = $propertyId;;
                        // $proExterior['mlsexterior_features_id'] = $exterior->id;
                        // $proExterior['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_exteriors')->insert($proExterior);
                    }
                }

                //     //6: FireplaceFeatures
                if (isset($jsonToArr['FireplaceFeatures'])) {
                    foreach ($jsonToArr['FireplaceFeatures'] as $value) {
                        $fireplace = FireplaceFeatures::updateOrCreate(
                            ['FirePlaceName' => $value],
                            ['FirePlaceName' => $value,]
                        );
                        PropertyFirePlace::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsfireplace_features_id' => $fireplace->id],
                            ['mlsproperties_id' => $propertyId, 'mlsfireplace_features_id' => $fireplace->id],
                        );
                        // $proFireplace['mlsproperties_id'] = $propertyId;;
                        // $proFireplace['mlsfireplace_features_id'] = $fireplace->id;
                        // $proFireplace['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_fire_places')->insert($proFireplace);
                    }
                }

                //     //7:  Flooring
                if (isset($jsonToArr['Flooring'])) {
                    foreach ($jsonToArr['Flooring'] as $value) {
                        $flooring = Flooring::updateOrCreate(
                            ['FloringName' => $value],
                            ['FloringName' => $value,]
                        );

                        PropertyFlooring::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsfloorings_id' => $flooring->id],
                            ['mlsproperties_id' => $propertyId, 'mlsfloorings_id' => $flooring->id],
                        );
                        // $proFlooring['mlsproperties_id'] = $propertyId;;
                        // $proFlooring['mlsfloorings_id'] = $flooring->id;
                        // $proFlooring['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_floorings')->insert($proFlooring);
                    }
                }

                //     //8: FoundationDetails
                if (isset($jsonToArr['FoundationDetails'])) {
                    foreach ($jsonToArr['FoundationDetails'] as $value) {
                        $foundation = FoundationDetails::updateOrCreate(
                            ['FoundationDetailsName' => $value],
                            ['FoundationDetailsName' => $value,]
                        );

                        PropertyFoundationDetails::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsfoundation_details_id' => $foundation->id],
                            ['mlsproperties_id' => $propertyId, 'mlsfoundation_details_id' => $foundation->id],
                        );
                        // $proFoundation['mlsproperties_id'] = $propertyId;;
                        // $proFoundation['mlsfoundation_details_id'] = $foundation->id;
                        // $proFoundation['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_foundation_details')->insert($proFoundation);
                    }
                }

                //     //9:  GreenEnergyEfficient

                if (isset($jsonToArr['GreenEnergyEfficient'])) {
                    foreach ($jsonToArr['GreenEnergyEfficient'] as $value) {
                        $energy = GreenEnergyEfficient::updateOrCreate(
                            ['GreenEnergyName' => $value],
                            ['GreenEnergyName' => $value,]
                        );
                        PropertyGreenEnergy::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsgreen_energy_efficients_id' => $energy->id],
                            ['mlsproperties_id' => $propertyId, 'mlsgreen_energy_efficients_id' => $energy->id],
                        );
                        // $proEnergy['mlsproperties_id'] = $propertyId;;
                        // $proEnergy['mlsgreen_energy_efficients_id'] = $energy->id;
                        // $proEnergy['created_at'] = Carbon::now();
                        // DB::table('property_green_energies')->insert($proEnergy);
                    }
                }

                //     //10: Levels

                if (isset($jsonToArr['Levels'])) {
                    foreach ($jsonToArr['Levels'] as $value) {
                        $levels = Levels::updateOrCreate(
                            ['LevelsName' => $value],
                            ['LevelsName' => $value,]
                        );
                        PropertyLevel::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlslevels_id' => $levels->id],
                            ['mlsproperties_id' => $propertyId, 'mlslevels_id' => $levels->id],
                        );
                        // $proLevel['mlsproperties_id'] = $propertyId;;
                        // $proLevel['mlslevels_id'] = $levels->id;
                        // $proLevel['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_levels')->insert($proLevel);
                    }
                }
                //     //11: InteriorFeatures

                if (isset($jsonToArr['InteriorFeatures'])) {
                    foreach ($jsonToArr['InteriorFeatures'] as $value) {
                        $interior = mlsInteriorFeatures::updateOrCreate(
                            ['InteriorFeatureName' => $value],
                            ['InteriorFeatureName' => $value,]
                        );
                        PropertyInterior::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mls_interior_features_id' => $interior->id],
                            ['mlsproperties_id' => $propertyId, 'mls_interior_features_id' => $interior->id],
                        );
                        // $proInterior['mlsproperties_id'] = $propertyId;;
                        // $proInterior['mls_interior_features_id'] = $interior->id;
                        // $proInterior['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_interiors')->insert($proInterior);
                    }
                }
                //     //12: Listing Terms
                if (isset($jsonToArr['ListingTerms'])) {
                    foreach ($jsonToArr['ListingTerms'] as $value) {
                        $terms = ListingTerms::updateOrCreate(
                            ['TermName' => $value],
                            ['TermName' => $value,]
                        );
                        PropertyListingTerms::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlslisting_terms_id' => $terms->id],
                            ['mlsproperties_id' => $propertyId, 'mlslisting_terms_id' => $terms->id],
                        );
                        // $propertyListingterms['mlsproperties_id'] = $propertyId;;
                        // $propertyListingterms['mlslisting_terms_id'] = $terms->id;
                        // $propertyListingterms['created_at'] = Carbon::now();
                        // DB::table('mlsproperty_listing_terms')->insert($propertyListingterms);
                    }
                }

                //     //13: LotFeatures

                if (isset($jsonToArr['LotFeatures'])) {
                    foreach ($jsonToArr['LotFeatures'] as $value) {
                        $lot = LotFeatures::updateOrCreate(
                            ['LotFeatureName' => $value],
                            ['LotFeatureName' => $value,]
                        );
                        PropertyLotFeatures::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlslot_features_id' => $lot->id],
                            ['mlsproperties_id' => $propertyId, 'mlslot_features_id' => $lot->id],
                        );
                        // $proLot['mlsproperties_id'] = $propertyId;;
                        // $proLot['mlslot_features_id'] = $lot->id;
                        // $proLot['created_at'] = Carbon::now();
                        // DB::table('property_lot_features')->insert($proLot);
                    }
                }

                //     //14: Possession
                if (isset($jsonToArr['Possession'])) {
                    foreach ($jsonToArr['Possession'] as $value) {
                        $pos = Possession::updateOrCreate(
                            ['PossessionsName' => $value],
                            ['PossessionsName' => $value,]
                        );
                        PropertyPossession::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlspossessions_id' => $pos->id],
                            ['mlsproperties_id' => $propertyId, 'mlspossessions_id' => $pos->id],
                        );
                        // $propertyPossession['mlsproperties_id'] = $propertyId;;
                        // $propertyPossession['mlspossessions_id'] = $pos->id;
                        // $propertyPossession['created_at'] = Carbon::now();
                        // DB::table('property_possessions')->insert($propertyPossession);
                    }
                }

                //     //15: Roof
                if (isset($jsonToArr['Roof'])) {
                    foreach ($jsonToArr['Roof'] as $value) {
                        $roof = Roof::updateOrCreate(
                            ['RoofName' => $value],
                            ['RoofName' => $value,]
                        );
                        PropertyRoof::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsroofs_id' => $roof->id],
                            ['mlsproperties_id' => $propertyId, 'mlsroofs_id' => $roof->id],
                        );
                        // $proRoof['mlsproperties_id'] = $propertyId;;
                        // $proRoof['mlsroofs_id'] = $roof->id;
                        // $proRoof['created_at'] = Carbon::now();
                        // DB::table('property_roofs')->insert($proRoof);
                    }
                }

                //     //16:  Sewer
                if (isset($jsonToArr['Sewer'])) {
                    foreach ($jsonToArr['Sewer'] as $value) {
                        $sewer = Sewer::updateOrCreate(
                            ['SewerName' => $value],
                            ['SewerName' => $value,]
                        );
                        PropertySewer::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlssewers_id' => $sewer->id],
                            ['mlsproperties_id' => $propertyId, 'mlssewers_id' => $sewer->id],
                        );
                        // $propertySewer['mlsproperties_id'] = $propertyId;;
                        // $propertySewer['mlssewers_id'] = $sewer->id;
                        // $propertySewer['created_at'] = Carbon::now();
                        // DB::table('property_sewers')->insert($propertySewer);
                    }
                }

                //     //17: PropertyShowingRequirements
                if (isset($jsonToArr['ShowingRequirements'])) {
                    foreach ($jsonToArr['ShowingRequirements'] as $value) {
                        $showing = ShowingRequirements::updateOrCreate(
                            ['ShowingName' => $value],
                            ['ShowingName' => $value,]
                        );
                        PropertyShowingRequirements::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsshowing_requirements_id' => $showing->id],
                            ['mlsproperties_id' => $propertyId, 'mlsshowing_requirements_id' => $showing->id],
                        );
                        // $propertyRequirements['mlsproperties_id'] = $propertyId;;
                        // $propertyRequirements['mlsshowing_requirements_id'] = $showing->id;
                        // $propertyRequirements['created_at'] = Carbon::now();
                        // DB::table('property_showing_requirements')->insert($propertyRequirements);
                    }
                }
                //     //18: SpecialListingConditions
                if (isset($jsonToArr['SpecialListingConditions'])) {
                    foreach ($jsonToArr['SpecialListingConditions'] as $value) {
                        $condition = SpecialListingConditions::updateOrCreate(
                            ['ListConditionName' => $value],
                            ['ListConditionName' => $value,]
                        );
                        PropertyListingConditions::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsspecial_listing_conditions_id' => $condition->id],
                            ['mlsproperties_id' => $propertyId, 'mlsspecial_listing_conditions_id' => $condition->id],
                        );
                        // $listingCondition['mlsproperties_id'] = $propertyId;;
                        // $listingCondition['mlsspecial_listing_conditions_id'] = $condition->id;
                        // $listingCondition['created_at'] = Carbon::now();
                        // DB::table('property_spe_listing')->insert($listingCondition);
                    }
                }

                //     //19: StructureType
                if (isset($jsonToArr['StructureType'])) {
                    foreach ($jsonToArr['StructureType'] as $value) {
                        if (isset($jsonToArr['ListPrice']) && $jsonToArr['ListPrice'] >= 1000000) {

                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Premier Properties'],
                                ['StructureTypeName' => 'Premier Properties',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'House') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Single Family'],
                                ['StructureTypeName' => 'Single Family',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Manufactured House') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Single Family'],
                                ['StructureTypeName' => 'Single Family',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Multi Family') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Single Family'],
                                ['StructureTypeName' => 'Single Family',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Duplex') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Condominium'],
                                ['StructureTypeName' => 'Condominium',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Triplex') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Condominium'],
                                ['StructureTypeName' => 'Condominium',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Quadruplex') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Condominium'],
                                ['StructureTypeName' => 'Condominium',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Warehouse') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);

                        } elseif ($value == 'Industrial') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);

                        } elseif ($value == 'Hotel/Motel') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);

                        } elseif ($value == 'Office') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Retail') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Dock') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Floating House') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Other'],
                                ['StructureTypeName' => 'Other',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Unspecified') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Land'],
                                ['StructureTypeName' => 'Land',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        } elseif ($value == 'Townhouse') {
                            $structure = StructureType::updateOrCreate(
                                ['StructureTypeName' => 'Townhouse'],
                                ['StructureTypeName' => 'Townhouse',]
                            );
                            PropertyStructureType::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                                ['mlsproperties_id' => $propertyId, 'mlsstructure_types_id' => $structure->id],
                            );
                            // $structureType['mlsproperties_id'] = $propertyId;;
                            // $structureType['mlsstructure_types_id'] = $structure->id;
                            // $structureType['created_at'] = Carbon::now();
                            // DB::table('property_structure_types')->insert($structureType);
                        }
                    }
                }

                //20: Utilities
                if (isset($jsonToArr['Utilities'])) {
                    foreach ($jsonToArr['Utilities'] as $value) {
                        $utility = Utilities::updateOrCreate(
                            ['UtilityName' => $value],
                            ['UtilityName' => $value,]
                        );
                        Propertyutilities::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsutilities_id' => $utility->id],
                            ['mlsproperties_id' => $propertyId, 'mlsutilities_id' => $utility->id],
                        );
                        // $utilities['mlsproperties_id'] = $propertyId;;
                        // $utilities['mlsutilities_id'] = $utility->id;
                        // $utilities['created_at'] = Carbon::now();
                        // DB::table('propertyutilities')->insert($utilities);
                    }
                }
                //21: View
                if (isset($jsonToArr['View'])) {
                    foreach ($jsonToArr['View'] as $value) {
                        $view = PropertyView::updateOrCreate(
                            ['ProperyViewName' => $value],
                            ['ProperyViewName' => $value,]
                        );
                        PropertiesViews::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsproperty_views_id' => $view->id],
                            ['mlsproperties_id' => $propertyId, 'mlsproperty_views_id' => $view->id],
                        );
                        // $proView['mlsproperties_id'] = $propertyId;;
                        // $proView['mlsproperty_views_id'] = $view->id;
                        // $proView['created_at'] = Carbon::now();
                        // DB::table('properties_views')->insert($proView);
                    }
                }
                //22: WaterSource
                if (isset($jsonToArr['WaterSource'])) {
                    foreach ($jsonToArr['WaterSource'] as $value) {
                        $water = WaterSource::updateOrCreate(
                            ['WaterSourceName' => $value],
                            ['WaterSourceName' => $value,]
                        );
                        PropertyWaterSource::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlswater_sources_id' => $water->id],
                            ['mlsproperties_id' => $propertyId, 'mlswater_sources_id' => $water->id],
                        );
                        // $waterSource['mlsproperties_id'] = $propertyId;;
                        // $waterSource['mlswater_sources_id'] = $water->id;
                        // $waterSource['created_at'] = Carbon::now();
                        // DB::table('property_water_sources')->insert($waterSource);
                    }
                }

                //23: ParkingFeatures
                if (isset($jsonToArr['ParkingFeatures'])) {
                    foreach ($jsonToArr['ParkingFeatures'] as $value) {
                        $parking = ParkingFeatures::updateOrCreate(
                            ['ParkingFeatureName' => $value],
                            ['ParkingFeatureName' => $value,]
                        );
                        PropertyParking::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsparking_features_id' => $parking->id],
                            ['mlsproperties_id' => $propertyId, 'mlsparking_features_id' => $parking->id],
                        );
                        // $parkingFeature['mlsproperties_id'] = $propertyId;;
                        // $parkingFeature['mlsparking_features_id'] = $parking->id;
                        // $parkingFeature['created_at'] = Carbon::now();
                        // DB::table('property_parkings')->insert($parkingFeature);
                    }
                }
                //24: Vegetation
                if (isset($jsonToArr['Vegetation'])) {
                    foreach ($jsonToArr['Vegetation'] as $value) {
                        $vegetation = Vegetation::updateOrCreate(
                            ['VegetationName' => $value],
                            ['VegetationName' => $value,]
                        );
                        PropertyVegetation::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsvegetations_id' => $vegetation->id],
                            ['mlsproperties_id' => $propertyId, 'mlsvegetations_id' => $vegetation->id],
                        );
                        // $proVegetation['mlsproperties_id'] = $propertyId;;
                        // $proVegetation['mlsvegetations_id'] = $vegetation->id;
                        // $proVegetation['created_at'] = Carbon::now();
                        // DB::table('property_vegetations')->insert($proVegetation);
                    }
                }
                //25: Petsallowed
                if (isset($jsonToArr['PetsAllowed'])) {
                    foreach ($jsonToArr['PetsAllowed'] as $value) {
                        $pets = PetsAllowed::updateOrCreate(
                            ['PetsAllowedName' => $value],
                            ['PetsAllowedName' => $value,]
                        );
                        PropertyPetsAllowed::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlspets_alloweds_id' => $pets->id],
                            ['mlsproperties_id' => $propertyId, 'mlspets_alloweds_id' => $pets->id],
                        );
                        // $petAllowed['mlsproperties_id'] = $propertyId;;
                        // $petAllowed['mlspets_alloweds_id'] = $pets->id;
                        // $petAllowed['created_at'] = Carbon::now();
                        // DB::table('property_pets_alloweds')->insert($petAllowed);
                    }
                }
                //26: Conditions
                if (isset($jsonToArr['PropertyCondition'])) {
                    foreach ($jsonToArr['PropertyCondition'] as $value) {
                        $condition = PropertyCondition::updateOrCreate(
                            ['ConditionName' => $value],
                            ['ConditionName' => $value,]
                        );
                        PropertyConditionRel::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlsproperty_conditions_id' => $condition->id],
                            ['mlsproperties_id' => $propertyId, 'mlsproperty_conditions_id' => $condition->id],
                        );
                        // $proCondition['mlsproperties_id'] = $propertyId;;
                        // $proCondition['mlsproperty_conditions_id'] = $condition->id;
                        // $proCondition['created_at'] = Carbon::now();
                        // DB::table('property_condition_rels')->insert($proCondition);
                    }
                }

                //27: PowerProductionType
                if (isset($jsonToArr['PowerProductionType'])) {
                    foreach ($jsonToArr['PowerProductionType'] as $value) {
                        $power = PowerProductionType::updateOrCreate(
                            ['ProductionTypeName' => $value],
                            ['ProductionTypeName' => $value,]
                        );
                        PropertyPowerProductionType::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'mlspower_production_types_id' => $power->id],
                            ['mlsproperties_id' => $propertyId, 'mlspower_production_types_id' => $power->id],
                        );
                        // $proPower ['mlsproperties_id'] = $propertyId;;
                        // $proPower['mlspower_production_types_id'] = $power->id;
                        // $proPower['created_at'] = Carbon::now();
                        // DB::table('property_power_production')->insert($proPower);
                    }
                }

                if (isset($jsonToArr['Media'])) {
                    foreach ($jsonToArr['Media'] as $value) {
                        if (isset($value)) {
                            $media['mlsproperties_id'] = $propertyId;
                            $media['MediaKey']       = isset($value['MediaKey']) ? $value['MediaKey'] : " ";
                            $media['MediaObjectID']         = isset($value['MediaObjectID']) ? $value['MediaObjectID'] : " ";
                            $media['MediaModificationTimestamp']    = isset($value['MediaModificationTimestamp']) ? $value['MediaModificationTimestamp'] : " ";
                            $media['Order']      = isset($value['Order']) ? $value['Order'] : "";
                            $media['PreferredPhotoYN']  = isset($value['PreferredPhotoYN']) ? $value['PreferredPhotoYN'] : "";
                            $media['LongDescription']  = isset($value['LongDescription']) ? $value['LongDescription'] : "";
                            $media['ImageWidth']  = isset($value['ImageWidth']) ? $value['ImageWidth'] : "";
                            $media['ImageHeight']  = isset($value['ImageHeight']) ? $value['ImageHeight'] : "";
                            $media['ImageSizeDescription']   = isset($value['ImageSizeDescription']) ? $value['ImageSizeDescription'] : "";
                            $media['MediaURL']  = isset($value['MediaURL']) ? $value['MediaURL'] : "";
                            //DB::table('mlsmedia')->insert($media);
                            Media::updateOrCreate(
                                ['mlsproperties_id' => $propertyId, 'MediaKey' => $value['MediaKey']],
                                $media,
                            );
                        }
                    }
                }
                if (isset($jsonToArr['Rooms'])) {
                    foreach ($jsonToArr['Rooms'] as $value) {

                        $rooms['mlsproperties_id'] = $propertyId;
                        $rooms['RoomKey']       = isset($value['RoomKey']) ? $value['RoomKey'] : " ";
                        $rooms['RoomLevel']        = isset($value['RoomLevel']) ? $value['RoomLevel'] : " ";
                        $rooms['RoomType']   = isset($value['RoomType']) ? $value['RoomType'] : " ";
                        //DB::table('mlsrooms')->insert($rooms);
                        Rooms::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'RoomKey' => $value['RoomKey']],
                            $rooms,
                        );
                    }
                }
                if (isset($jsonToArr['UnitTypes'])) {
                    foreach ($jsonToArr['UnitTypes'] as $value) {
                        $unitTypes['mlsproperties_id'] = $propertyId;
                        $unitTypes['UnitTypeKey']       = isset($value['UnitTypeKey']) ? $value['UnitTypeKey'] : " ";
                        $unitTypes['UnitName']       = isset($value['NWM_UnitName']) ? $value['NWM_UnitName'] : " ";
                        $unitTypes['UnitTypeBathsTotal']       = isset($value['UnitTypeBathsTotal']) ? $value['UnitTypeBathsTotal'] : '0';
                        $unitTypes['UnitTypeBedsTotal']   = isset($value['UnitTypeBedsTotal']) ? $value['UnitTypeBedsTotal'] : '0';
                        $unitTypes['UnitDishwasher']      = isset($value['NWM_UnitDishwasher']) ? $value['NWM_UnitDishwasher'] : "";
                        $unitTypes['UnitFireplaces']          = isset($value['NWM_UnitFireplaces']) ? $value['NWM_UnitFireplaces'] : "";
                        $unitTypes['UnitRangeOven']  = isset($value['NWM_UnitRangeOven']) ? $value['NWM_UnitRangeOven'] : '0';
                        $unitTypes['UnitRefrigerator']  = isset($value['NWM_UnitRefrigerator']) ? $value['NWM_UnitRefrigerator'] : '0';
                        $unitTypes['UnitTypeActualRent']  = isset($value['UnitTypeActualRent']) ? $value['UnitTypeActualRent'] : "";
                        $unitTypes['UnitSquareFeet']  = isset($value['NWM_UnitSquareFeet']) ? $value['NWM_UnitSquareFeet'] : "";
                        //DB::table('unit_types')->insert($unitTypes);
                        UnitTypes::updateOrCreate(
                            ['mlsproperties_id' => $propertyId, 'UnitTypeKey' => $value['UnitTypeKey']],
                            $unitTypes,
                        );
                    }
                }
                // // shakzee code here
                if (isset($jsonToArr['AssociationAmenities'])) {
                    foreach ($jsonToArr['AssociationAmenities'] as $value) {
                        $AssociationAmenities = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'AssociationAmenities'],
                            ['name' => $value, 'tableName' => 'AssociationAmenities']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $AssociationAmenities->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $AssociationAmenities->id],
                        );
                        // $AssociationAmenitiesInn['propertyId'] = $propertyId;
                        // $AssociationAmenitiesInn['extraTableId'] = $AssociationAmenities->id;
                        // $AssociationAmenitiesInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($AssociationAmenitiesInn);
                    }
                }
                if (isset($jsonToArr['AccessibilityFeatures'])) {
                    foreach ($jsonToArr['AccessibilityFeatures'] as $value) {
                        $AccessibilityFeatures = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'AccessibilityFeatures'],
                            ['name' => $value, 'tableName' => 'AccessibilityFeatures']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $AccessibilityFeatures->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $AccessibilityFeatures->id],
                        );
                        // $skzAccblfea['propertyId'] = $propertyId;
                        // $skzAccblfea['extraTableId'] = $AccessibilityFeatures->id;
                        // $skzAccblfea['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($skzAccblfea);
                    }
                }
                if (isset($jsonToArr['AssociationFeeIncludes'])) {
                    foreach ($jsonToArr['AssociationFeeIncludes'] as $value) {
                        $AssociationFeeIncludes = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'AssociationFeeIncludes'],
                            ['name' => $value, 'tableName' => 'AssociationFeeIncludes']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $AssociationFeeIncludes->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $AssociationFeeIncludes->id],
                        );
                        // $AssociationFeeIncludesIn['propertyId'] = $propertyId;
                        // $AssociationFeeIncludesIn['extraTableId'] = $AssociationFeeIncludes->id;
                        // $AssociationFeeIncludesIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($AssociationFeeIncludesIn);
                    }
                }
                if (isset($jsonToArr['BodyType'])) {
                    foreach ($jsonToArr['BodyType'] as $value) {
                        $BodyType = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'BodyType'],
                            ['name' => $value, 'tableName' => 'BodyType']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $BodyType->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $BodyType->id],
                        );
                        // $BodyTypeIn['propertyId'] = $propertyId;
                        // $BodyTypeIn['extraTableId'] = $BodyType->id;
                        // $BodyTypeIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($BodyTypeIn);
                    }
                }
                if (isset($jsonToArr['BuildingFeatures'])) {
                    foreach ($jsonToArr['BuildingFeatures'] as $value) {
                        $BuildingFeatures = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'BuildingFeatures'],
                            ['name' => $value, 'tableName' => 'BuildingFeatures']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $BuildingFeatures->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $BuildingFeatures->id],
                        );
                        // $BuildingFeaturesInn['propertyId'] = $propertyId;
                        // $BuildingFeaturesInn['extraTableId'] = $BuildingFeatures->id;
                        // $BuildingFeaturesInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($BuildingFeaturesInn);
                    }
                }

                if (isset($jsonToArr['BusinessType'])) {
                    foreach ($jsonToArr['BusinessType'] as $value) {
                        $BusinessType = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'BusinessType'],
                            ['name' => $value, 'tableName' => 'BusinessType']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $BusinessType->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $BusinessType->id],
                        );
                        // $BusinessTypeInn['propertyId'] = $propertyId;
                        // $BusinessTypeInn['extraTableId'] = $BusinessType->id;
                        // $BusinessTypeInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($BusinessTypeInn);
                    }
                }
                //AccessibilityFeatures
                if (isset($jsonToArr['BuyerFinancing'])) {
                    foreach ($jsonToArr['BuyerFinancing'] as $value) {
                        $BuyerFinancing = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'BuyerFinancing'],
                            ['name' => $value, 'tableName' => 'BuyerFinancing']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $BuyerFinancing->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $BuyerFinancing->id],
                        );
                        // $BuyerFinancingIn['propertyId'] = $propertyId;
                        // $BuyerFinancingIn['extraTableId'] = $BuyerFinancing->id;
                        // $BuyerFinancingIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($BuyerFinancingIn);
                    }
                }
                if (isset($jsonToArr['Cooling'])) {
                    foreach ($jsonToArr['Cooling'] as $value) {
                        $Coolingskz = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'Cooling'],
                            ['name' => $value, 'tableName' => 'Cooling']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $Coolingskz->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $Coolingskz->id],
                        );
                        // $CoolingskzInn['propertyId'] = $propertyId;
                        // $CoolingskzInn['extraTableId'] = $Coolingskz->id;
                        // $CoolingskzInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($CoolingskzInn);
                    }
                }
                if (isset($jsonToArr['GreenEnergyGeneration'])) {
                    foreach ($jsonToArr['GreenEnergyGeneration'] as $value) {
                        $GreenEnergyGeneration = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'GreenEnergyGeneration'],
                            ['name' => $value, 'tableName' => 'GreenEnergyGeneration']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $GreenEnergyGeneration->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $GreenEnergyGeneration->id],
                        );
                        // $GreenEnergyGenerationInn['propertyId'] = $propertyId;
                        // $GreenEnergyGenerationInn['extraTableId'] = $GreenEnergyGeneration->id;
                        // $GreenEnergyGenerationInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($GreenEnergyGenerationInn);
                    }
                }
                if (isset($jsonToArr['Heating'])) {
                    foreach ($jsonToArr['Heating'] as $value) {
                        $Heating = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'Heating'],
                            ['name' => $value, 'tableName' => 'Heating']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $Heating->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $Heating->id],
                        );
                        // $HeatingInn['propertyId'] = $propertyId;
                        // $HeatingInn['extraTableId'] = $Heating->id;
                        // $HeatingInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($HeatingInn);
                    }
                }
                if (isset($jsonToArr['LaundryFeatures'])) {
                    foreach ($jsonToArr['LaundryFeatures'] as $value) {
                        $LaundryFeatures = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'LaundryFeatures'],
                            ['name' => $value, 'tableName' => 'LaundryFeatures']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $LaundryFeatures->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $LaundryFeatures->id],
                        );
                        // $LaundryFeaturesInn['propertyId'] = $propertyId;
                        // $LaundryFeaturesInn['extraTableId'] = $LaundryFeatures->id;
                        // $LaundryFeaturesInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($LaundryFeaturesInn);
                    }
                }
                if (isset($jsonToArr['Fencing'])) {
                    foreach ($jsonToArr['Fencing'] as $value) {
                        $skzFencing = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'Fencing'],
                            ['name' => $value, 'tableName' => 'Fencing']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $skzFencing->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $skzFencing->id],
                        );
                        // $skzFencingInn['propertyId'] = $propertyId;
                        // $skzFencingInn['extraTableId'] = $skzFencing->id;
                        // $skzFencingInn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($skzFencingInn);
                    }
                }
                if (isset($jsonToArr['OtherEquipment'])) {
                    foreach ($jsonToArr['OtherEquipment'] as $value) {
                        $OtherEquipment = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'OtherEquipment'],
                            ['name' => $value, 'tableName' => 'OtherEquipment']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $OtherEquipment->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $OtherEquipment->id],
                        );
                        // $OtherEquipmentIn['propertyId'] = $propertyId;
                        // $OtherEquipmentIn['extraTableId'] = $OtherEquipment->id;
                        // $OtherEquipmentIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($OtherEquipmentIn);
                    }
                }
                if (isset($jsonToArr['PoolFeatures'])) {
                    foreach ($jsonToArr['PoolFeatures'] as $value) {
                        $PoolFeatures = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'PoolFeatures'],
                            ['name' => $value, 'tableName' => 'PoolFeatures']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $PoolFeatures->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $PoolFeatures->id],
                        );
                        // $PoolFeaturesIn['propertyId'] = $propertyId;
                        // $PoolFeaturesIn['extraTableId'] = $PoolFeatures->id;
                        // $PoolFeaturesIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($PoolFeaturesIn);
                    }
                }
                if (isset($jsonToArr['PossibleUse'])) {
                    foreach ($jsonToArr['PossibleUse'] as $value) {
                        $PossibleUse = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'PossibleUse'],
                            ['name' => $value, 'tableName' => 'PossibleUse']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $PossibleUse->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $PossibleUse->id],
                        );
                        // $PossibleUseIn['propertyId'] = $propertyId;
                        // $PossibleUseIn['extraTableId'] = $PossibleUse->id;
                        // $PossibleUseIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($PossibleUseIn);
                    }
                }
                if (isset($jsonToArr['RoadResponsibility'])) {
                    foreach ($jsonToArr['RoadResponsibility'] as $value) {
                        $RoadResponsibility = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'RoadResponsibility'],
                            ['name' => $value, 'tableName' => 'RoadResponsibility']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $RoadResponsibility->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $RoadResponsibility->id],
                        );
                        // $RoadResponsibilityIn['propertyId'] = $propertyId;
                        // $RoadResponsibilityIn['extraTableId'] = $RoadResponsibility->id;
                        // $RoadResponsibilityIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($RoadResponsibilityIn);
                    }
                }

                if (isset($jsonToArr['RoadSurfaceType'])) {
                    foreach ($jsonToArr['RoadSurfaceType'] as $value) {
                        $RoadSurfaceType = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'RoadSurfaceType'],
                            ['name' => $value, 'tableName' => 'RoadSurfaceType']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $RoadSurfaceType->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $RoadSurfaceType->id],
                        );
                        // $RoadSurfaceTypeIn['propertyId'] = $propertyId;
                        // $RoadSurfaceTypeIn['extraTableId'] = $RoadSurfaceType->id;
                        // $RoadSurfaceTypeIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($RoadSurfaceTypeIn);
                    }
                }

                if (isset($jsonToArr['SecurityFeatures'])) {
                    foreach ($jsonToArr['SecurityFeatures'] as $value) {
                        $SecurityFeatures = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'SecurityFeatures'],
                            ['name' => $value, 'tableName' => 'SecurityFeatures']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $SecurityFeatures->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $SecurityFeatures->id],
                        );
                        // $SecurityFeaturesI['propertyId'] = $propertyId;
                        // $SecurityFeaturesI['extraTableId'] = $SecurityFeatures->id;
                        // $SecurityFeaturesI['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($SecurityFeaturesI);
                    }
                }

                if (isset($jsonToArr['Skirt'])) {
                    foreach ($jsonToArr['Skirt'] as $value) {
                        $Skirtskz = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'Skirt'],
                            ['name' => $value, 'tableName' => 'Skirt']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $Skirtskz->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $Skirtskz->id],
                        );
                        // $SkirtskzIn['propertyId'] = $propertyId;
                        // $SkirtskzIn['extraTableId'] = $Skirtskz->id;
                        // $SkirtskzIn['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($SkirtskzIn);
                    }
                }

                if (isset($jsonToArr['SpecialLicenses'])) {
                    foreach ($jsonToArr['SpecialLicenses'] as $value) {
                        $SpecialLicenses = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'SpecialLicenses'],
                            ['name' => $value, 'tableName' => 'SpecialLicenses']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $SpecialLicenses->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $SpecialLicenses->id],
                        );
                        // $SpecialLicensesI['propertyId'] = $propertyId;
                        // $SpecialLicensesI['extraTableId'] = $SpecialLicenses->id;
                        // $SpecialLicensesI['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($SpecialLicensesI);
                    }
                }
                if (isset($jsonToArr['WaterfrontFeatures'])) {
                    foreach ($jsonToArr['WaterfrontFeatures'] as $value) {
                        $WaterfrontFeatures = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'WaterfrontFeatures'],
                            ['name' => $value, 'tableName' => 'WaterfrontFeatures']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $WaterfrontFeatures->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $WaterfrontFeatures->id],
                        );
                        // $WaterfrontFeaturesI['propertyId'] = $propertyId;
                        // $WaterfrontFeaturesI['extraTableId'] = $WaterfrontFeatures->id;
                        // $WaterfrontFeaturesI['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($WaterfrontFeaturesI);
                    }
                }

                if (isset($jsonToArr['IrrigationSource'])) {
                    foreach ($jsonToArr['IrrigationSource'] as $value) {
                        $IrrigationSource = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'IrrigationSource'],
                            ['name' => $value, 'tableName' => 'IrrigationSource']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $IrrigationSource->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $IrrigationSource->id],
                        );
                        // $IrrigationSourceI['propertyId'] = $propertyId;
                        // $IrrigationSourceI['extraTableId'] = $IrrigationSource->id;
                        // $IrrigationSourceI['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($IrrigationSourceI);
                    }
                }
                if (isset($jsonToArr['OperatingExpenseIncludes'])) {
                    foreach ($jsonToArr['OperatingExpenseIncludes'] as $value) {
                        $OperatingExpenseIncludes = Extratables::updateOrCreate(
                            ['name' => $value, 'tableName' => 'OperatingExpenseIncludes'],
                            ['name' => $value, 'tableName' => 'OperatingExpenseIncludes']
                        );
                        ExtraLinkTable::updateOrCreate(
                            ['propertyId' => $propertyId, 'extraTableId' => $OperatingExpenseIncludes->id],
                            ['propertyId' => $propertyId, 'extraTableId' => $OperatingExpenseIncludes->id],
                        );
                        // $OperatingExpenseIncludesI['propertyId'] = $propertyId;
                        // $OperatingExpenseIncludesI['extraTableId'] = $OperatingExpenseIncludes->id;
                        // $OperatingExpenseIncludesI['created_at'] = Carbon::now();
                        // DB::table('extra_tables_prop_link_data')->insert($OperatingExpenseIncludesI);
                    }
                }
                // echo 'batchNumber=>' . $data['id'];
                // echo '<br>';
                // echo 'loop=>'.$key;
                // echo '<br>';

            } //foreach here
            $data['status'] = true;
            $data['message'] = 'Row Successfully added.';
            return $data;
        } catch (\PDOException $e) {
            $data['status'] = false;
            $data['message'] = $e;
            return $data;
        }
        // echo 'if count=>'.$countif.'and<br>';
        // echo 'else count=>'.$countif;

        // if ($exist) {
        //     return response()->json([
        //         'result' => true,
        //         'status' => 200,
        //         'message' => 'Data Inserted Successfully.',
        //     ]);
        // } else {
        //     return response()->json([
        //         'result' => false,
        //         'message' => 'Record already inserted.',
        //     ]);
        // }
    }


    public function imageupload()
    {

        return view('properties.s3image');
    }
    public function s3imageupload(Request $request)
    {

        $request->validate([
            'photos' => 'required|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Modify the validation rules as per your requirements
        ]);

        $uploadedImages = [];

        foreach ($request->file('photos') as $image) {
            $uniqueName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put('sameer/' . $uniqueName, file_get_contents($image));

            $uploadedImages[] = $uniqueName;
        }

        // Save the $uploadedImages array or individual image names to your database or perform any other necessary operations

        return redirect()->back()->with('success', 'Images uploaded successfully.');
        dd('');

        $message = '';
        // $files = $request->file('photos');
        // dd($files);
        try {
            if ($files = $request->file('photos')) {

                foreach ($files as $file => $value) {
                    dd($value);
                    $filename = date('YmdHi') . $value->getClientOriginalName();
                    //dd(file_get_contents($filename));
                    // $value->move(public_path('/images'), $filename);
                    $path =  Storage::disk('s3')->put('sameer/' . $filename, file_get_contents($filename));
                    //$path = $filename;
                    $data['image'] = $path;
                    //dd($data);
                    /* Image for insertion*/
                    Media::insert([
                        'mlsproperties_id' => 1,
                        'MediaModificationTimestamp' => Carbon::now(),
                        'Order' => $file,
                        'PreferredPhotoYN' => $file ? 0 : 1,
                        'MediaURL' => implode("|", $data),
                        'created_at' => Carbon::now(),
                        's3buckettempurl' => 'test',
                        'wherfrom'   => 2 // featured properties

                    ]);
                }
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect()->back()->withSuccess($message);
    }




    public function liveData()
    {
        $checking = "https://api.mlsgrid.com/v2/OpenHouse?\$filter=ListingId eq 'NWM2160214'";
        //  $checking = "https://api.mlsgrid.com/v2/OpenHouse?\ 'NWM2151800'";
        $sample2 = "https://api.mlsgrid.com/v2/Property?\$filter=OriginatingSystemName%20eq%20'nwmls'%20and%20ModificationTimestamp%20gt%202020-12-30T23%3A59%3A59.99Z&\$top=500";
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
            'Accept-Encoding' => 'gzip'
        ])->get($checking)->json();
        //$response = Http::withToken('e0bfe2b330ab814931d66953b95ed505645b0f0a')->get('https://api-demo.mlsgrid.com/v2/Property?$expand=Media&$filter=OriginatingSystemName eq "nwmls"');
        return $response;
    }
}//class here
