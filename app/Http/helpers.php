<?php

use App\Jobs\HouseCanaryDataStoreJob;
use App\Models\BatchUrlData;
use App\Models\Cities;
use App\Models\Media;
use App\Models\MlsStandardStatu;
use App\Models\Notifications;
use App\Models\NwmlsBatchInfo;
use App\Models\OpenHouseProperties;
use App\Models\Properties;
use App\Models\PropertiesDetials;
use App\Models\StructureType;
use App\Models\User;
use App\Models\Schools;
use App\Models\SchoolSubrating;
use App\Models\UserRoles;
use Aws\S3\S3Client;
use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists('PMT')) {
    function PMT($interest, $period, $downpayment)
    {
        $interest = (float) $interest;
        $period = (float) $period;
        $downpayment = (float) $downpayment;
        $period = $period * 12;
        $interest = $interest / 1200;
        $amount = $interest * -$downpayment * pow((1 + $interest), $period) / (1 - pow((1 + $interest), $period));
        return $amount;
    }
}


if (!function_exists('showValue')) {
    function showValue($value)
    {
        echo number_format($value);
    }
}

if (!function_exists('getSetFlashData')) {
    function getSetFlashData()
    {
        if (session()->has('success')) {
            $flashdata = [
                'class' => session()->get('class'),
                'message' => session()->get('message'),
            ];
            return view('flashdata')->with($flashdata);
        }
    }
}

if (!function_exists('setFlashData')) {
    function setFlashData($className, $Message, $redirectUrl)
    {
        session()->flash('class', $className);
        session()->flash('message', $Message);
        abort($redirectUrl);
    }
}

// Code by Shehzad Bhai

if (!function_exists('getAdminId')) {
    function getAdminId()
    {
        $roleHere = auth()->user()->load('role')->toArray()['role']['name'];
        if (Auth::check() && $roleHere == 'Admin') {
            return Auth::user()->id;
        } else {
            return false;
        }
    }
}
if (!function_exists('getUserSessionData')) {
    function getUserSessionData($key)
    {
        return session()->get($key);
    }
}

if (!function_exists('isAgent')) {
    function isAgent()
    {
        //dd(auth()->user());
        $roleHere = Auth::user()->load('role')->toArray()['role']['name'];
        //.dd($roleHere);
        if (Auth::check() && $roleHere == 'Agent') {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('getUserIdbySlug')) {
    function getUserIdbySlug($slug)
    {
        $userData = User::where('slug', $slug)->get()->toArray();
        if (isset($userData) && count($userData) === 1) {
            return $userData[0]['id'];
        } else {
            return false;
        }
    }
}


if (!function_exists('getUserId')) {
    function getUserId()
    {
        if (Auth::check()) {
            return Auth::id();
        }
    }
}


if (!function_exists('isAgentFeatured')) {
    function isAgentFeatured()
    {
        if (Auth::check() && Auth::user()->type == 'featured') {
            return true;
        } else {
            return false;
        }
    }
}


if (!function_exists('isUserLoggedIn')) {
    function isUserLoggedIn()
    {
        if (Auth::check()) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('getUserRole')) {
    function getUserRole()
    {
        $user = UserRoles::where('name', 'User')->get()->toArray();
        if (isset($user) && count($user) == 1) {
            return $user[0]['id'];
        } else {
            return false;
        }
    }
}


if (!function_exists('getAgentRole')) {
    function getAgentRole()
    {
        $user = UserRoles::where('name', 'Agent')->get()->toArray();
        if (isset($user) && count($user) == 1) {
            return $user[0]['id'];
        } else {
            return false;
        }
    }
}


if (!function_exists('getUserRole')) {
    function getUserRole()
    {
        $user = UserRoles::where('name', 'User')->get()->toArray();
        if (isset($user) && count($user) == 1) {
            return $user[0]['id'];
        } else {
            return false;
        }
    }
}

if (!function_exists('getLenderRole')) {
    function getLenderRole()
    {
        $user = UserRoles::where('name', 'Lender')->get()->toArray();
        if (isset($user) && count($user) == 1) {
            return $user[0]['id'];
        } else {
            return false;
        }
    }
}

if (!function_exists('getUserDp')) {
    function getUserDp($sessionId)
    {
        $user = User::where('id', $sessionId)->get()->toArray();
        if (isset($user) && count($user) == 1) {
            if (isset($user[0]['user_dp'])) {
                $filePath = asset('images/userdp');
                if ($filePath . '/' . $user[0]['user_dp']) {
                    return $user[0]['user_dp'];
                } else {
                    //var_dump($user);
                    return  'profile.jpg';
                }
            } else {
                return  'profile.jpg';
            }
        } else {
            return  'profile.jpg';
        }
    }
}

if (!function_exists('isAgentandUser')) {
    function isAgentandUser()
    {
        $roleHere = auth()->user()->load('role')->toArray()['role']['name'];
        if (
            Auth::check() && $roleHere == 'Agent' ||
            $roleHere == 'User'
        ) {
            return true;
        } else {
            return false;
        }
    }
}


if (!function_exists('getCitiesFromListing')) {
    function getCitiesFromListing()
    {
        $cities = Properties::select('CityName')->where('PropertyStatus', 1)->distinct()->get()->toArray();
        if (isset($cities) && count($cities) >= 1) {
            return  $cities;
        } else {
            return false;
        }
    }
}

if (!function_exists('getPropertyTypes')) {
    function getPropertyTypes()
    {
        $propertyTypes = PropertiesDetials::select('PropertyType')->distinct()->get()->toArray();
        if (isset($propertyTypes) && count($propertyTypes) >= 1) {
            return  $propertyTypes;
        } else {
            return false;
        }
    }
}

if (!function_exists('getStructureType')) {
    function getStructureType()
    {
        $propertyTypes = StructureType::all();
        if (isset($propertyTypes) && count($propertyTypes) >= 1) {
            return  $propertyTypes;
        } else {
            return false;
        }
    }
}
// Categories Count

if (!function_exists('categoriesCount')) {
    function categoriesCount()
    {
        $categories = StructureType::select('StructureTypeName', 'id')->get();
        if (isset($categories) && count($categories) >= 1) {
            return  $categories;
        } else {
            return false;
        }
    }
}

if (!function_exists('getCitiesFromUsers')) {
    function getCitiesFromUsers()
    {
        $users = User::select('city')->distinct()->get()->toArray();
        if (isset($users) && count($users) >= 1) {
            return  $users;
        } else {
            return false;
        }
    }
}


if (!function_exists('totalUserProperties')) {
    function totalUserProperties($status, $userId)
    {
        $users = Properties::where(
            [
                'PropertyStatus' => $status,
                'user_id' => $userId
            ]
        )->get()->toArray();
        if (isset($users) && count($users) >= 1) {
            return  count($users);
        } else {
            return 0;
        }
    }
}


if (!function_exists('generateRandomNumber')) {
    function generateRandomNumber($number)
    {
        return  Str::random($number);
    }
}



if (!function_exists('getAgentType')) {
    function getAgentType($agentType)
    {
        if ($agentType == 'aris') {
            return 'Aris360 Agent';
        } elseif ($agentType == 'featured') {
            return 'Aris360 Partner';
        } else {
            return 'Aris360';
        }
    }
}

if (!function_exists('getuuserdata')) {
    function getuuserdata($userId)
    {
        return User::where('id', $userId)->get()->toArray();
    }
}



if (!function_exists('generateRandomString')) {
    function generateRandomString($number)
    {
        return  Str::random($number);
    }
}

if (!function_exists('stringTodate')) {
    function stringTodate($date)
    {
        return  Carbon::parse($date)->format('m-d-Y');
    }
}


if (!function_exists('createSEOUrl')) {
    function createSEOUrl($number)
    {
        $seotitle = preg_replace("/[^a-zA-Z0-9\s]/", "", $number);
        $seotitle = trim($seotitle);
        $seotitle = preg_replace("/\s+/", " ", $seotitle);
        $seotitle = str_replace(" ", "+", $seotitle);
        $seotitle = strtolower($seotitle);
        $randomNumber = date('i') . random_int(0, 1000);
        return $seotitle . '-' . $randomNumber;
    }
}

if (!function_exists('createSEOUrlWithPlus')) {
    function createSEOUrlWithPlus($number)
    {
        $seotitle = preg_replace("/[^a-zA-Z0-9\s]/", "", $number);
        $seotitle = trim($seotitle);
        $seotitle = preg_replace("/\s+/", " ", $seotitle);
        $seotitle = str_replace(" ", "+", $seotitle);
        $seotitle = strtolower($seotitle);
        return $seotitle;
    }
}

if (!function_exists('createUrlHomeEstimation')) {
    function createUrlHomeEstimation($number)
    {
        $seotitle = preg_replace("/[^a-zA-Z0-9\s]/", "", $number);
        $seotitle = trim($seotitle);
        $seotitle = preg_replace("/\s+/", " ", $seotitle);
        $seotitle = str_replace(" ", "+", $seotitle);
        return $seotitle = strtolower($seotitle);
        //     $randomNumber = date('i').random_int(0, 1000);
        //    return $seotitle.'-'.$randomNumber;
    }
}
if (!function_exists('checkDatafromAPI')) {
    function checkDatafromAPI($apidata)
    {
        return  isset($jsonToArr[$apidata]) ? $apidata : "";
    }
}





if (!function_exists('addLinktoBatchInsertTable')) {
    function addLinktoBatchInsertTable($response, $checkmlsStatus)
    {
        if (isset($response) && isset($response['value'])) {
            $nextUrl = '';
            if (isset($response['@odata.nextLink'])) {
                $nextUrl = $response['@odata.nextLink'];
            } else {
                MlsStandardStatu::where('id', $checkmlsStatus[0]['id'])
                    ->update(
                        ['status' => 1, 'random' => randBatchLinks(), 'last_record_inserted_time' => Carbon::now()]
                    );
                addNotiOfBatchData('Record Inserted and updated the status of the mls_standard_status from Helper');
            }

            $type = $checkmlsStatus[0]['name'];
            $last_record_inserted_time = $checkmlsStatus[0]['last_record_inserted_time'];
            $last_record_inserted_time = Carbon::parse($last_record_inserted_time)->utc()->format('Y-m-d\TH:i:s\Z');


            $linkCheck = BatchUrlData::where('currentLink', $nextUrl)->get()->toArray();
            //dd($linkCheck);
            if (count($linkCheck) <= 0) {
                $myBulkData['currentLink'] =  "https://api.mlsgrid.com/v2/Property?" . "\$filter=OriginatingSystemName eq 'nwmls' and ModificationTimestamp gt " . $last_record_inserted_time . " and StandardStatus eq '" . $type . "'" . "&\$expand=Media,Rooms,UnitTypes&\$top=1000";
                $myBulkData['type'] = $checkmlsStatus[0]['name'];
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
                $batchInfoTable['urlData'] = $myBulkData['urlData'];
                $batchInfoTable['sizeOfurlData'] = $myBulkData['sizeOfurlData'];
                $batchInfoTable['mls_standard_id'] = $checkmlsStatus[0]['id'];
                $batchInfoTable['mls_standard_random_id'] = $checkmlsStatus[0]['random'];
                $batchInfoTable['created_at'] = Carbon::now();
                $batchInfoTable['updated_at'] = Carbon::now();
                $batchInfoTable['lastInsertedDate'] = Carbon::now();
                $batchInfoTable['propertyAdded'] = count($response['value']);
                NwmlsBatchInfo::insert($batchInfoTable);
                addNotiOfBatchData('First Entry Added');
            } else {
                addNotiOfBatchData('Else of First Entry');
            }
        } else {
            addNotiOfBatchData('Hiting the API and the value is not coming.');
        }
    }
}


if (!function_exists('addNotiOfBatchData')) {
    function addNotiOfBatchData($noti)
    {
        $cityies = new Cities();
        $cityies->name = $noti;
        $cityies->state_id = 1;
        $cityies->save();
    }
}



if (!function_exists('randBatchLinks')) {
    function randBatchLinks()
    {
        return  strtolower(date('s') . Str::random(5) . rand(2, 1000) . Str::random(5));
    }
}

if (!function_exists('generateS3BucketUrl')) {
    function generateS3BucketUrl($mediaName)
    {
        $imagePath = 'properties/' . $mediaName;

        // Create an instance of the S3 client
        $s3 = new S3Client([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
        ]);

        // Generate a pre-signed URL with a specific expiration time (e.g., 1 hour)
        $expires = '+24 hours';
        $command = $s3->getCommand('GetObject', [
            'Bucket' => env('AWS_BUCKET'),
            'Key' => $imagePath,
        ]);

        $request = $s3->createPresignedRequest($command, $expires);
        return $presignedUrl = (string) $request->getUri();
    }
}


if (!function_exists('getS3BucketTempUrl')) {
    function getS3BucketTempUrl($id)
    {
        $myData = Media::select('MediaURL', 's3buckettempurl')
            ->where('status', 1)
            ->where('id', $id)
            //->orWhere('','')
            ->get()->toArray();
        foreach ($myData as $value) {
            if (isset($value['s3buckettempurl']) && !empty($value['s3buckettempurl'])) {
                //echo  $value['s3buckettempurl'].'<br>';
                return $value['s3buckettempurl'];
            } else {
                return generateS3BucketUrl(basename($value['MediaURL']));
            }
        }
    }
}



if (!function_exists('getHouseCanaryResult')) {
    function getHouseCanaryResult($address, $propertyId)
    {
        $address = str_replace("'", '', $address);
        $apiKey = 'AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc';
        $adressskz = createUrlHomeEstimation($address);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $adressskz . "&key=" . $apiKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($result, true);
        //dd ($data);
        if (
            isset($data["results"]) && isset($data["results"][0])
            && isset($data["results"][0]["address_components"])
        ) {
            $components = $data["results"][0]["address_components"];

            function filter($components, $type)
            {
                return array_filter($components, function ($component) use ($type) {
                    return array_filter($component["types"], function ($data) use ($type) {
                        return $data == $type;
                    });
                });
            }
            // var_dump(count(array_values(filter($components, "street_number"))) > 0
            // &&
            // count(array_values(filter($components, "route"))) > 0
            // &&
            // count(array_values(filter($components, "postal_code"))) > 0);

            if (
                count(array_values(filter($components, "street_number"))) > 0
                &&
                count(array_values(filter($components, "route"))) > 0
                &&
                count(array_values(filter($components, "postal_code"))) > 0
            ) {

                //dd('true');
                // $streetNumber = array_values(filter($components, "street_number"))[0]["long_name"];
                // $address = array_values(filter($components, "route"))[0]["long_name"];
                // $zipcode = array_values(filter($components, "postal_code"))[0]["long_name"];
                // //$streetNumber = 'skz';
                // // $endpoint = "https://api.housecanary.com/v2/property/component_mget?";
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

                // //$otherValue = 'components=property/details,property/school,property/value,property/tax_history,property/sales_history,property/rental_value,property/block_crime,property/fema_disaster_area,property/flood,property/geo_features';
                // // $otherValue = 'components=property/details,property/value,property/tax_history,property/sales_history,property/rental_value,property/block_crime,property/fema_disaster_area,property/flood,property/geo_features';
                // // $otherValue = 'components=details,value_report,rental_report';
                // // $endpoint .='&'.$otherValue;

                // // $response = $client->request('GET', $endpoint, ['auth' =>  array("Q27MYU3BC1HPW5VWPPAF", "58Z8P0szn0yLLtx0PN9s500kvJe69jLk")]);
                // $response = $client->request('GET', $endpoint, ['auth' =>  array("test_2760QR1EEDKYSH4E5J1R", "GaLuogyq13z4MpGsFqn0F3GArWiHtKBc")]);

                // // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

                // $statusCode = $response->getStatusCode();
                // $content = $response->getBody();

                // $data['apiData'] = json_decode($response->getBody(), true);
                $data['apiData'] = [];
                // dd($data['apiData'][0]['address_info']);
                if (
                    // isset($data['apiData'][0]) && !empty($data['apiData'][0]) &&
                    // isset($data['apiData'][0]['property/value'])
                    // && $data['apiData'][0]['property/value']
                    !empty($data['apiData'][0]['property/value'])
                ) {
                    //dd('true');
                    $data['propertyId'] = $propertyId;
                    $job = new HouseCanaryDataStoreJob($data);
                    dispatch($job)->delay(now()->addSeconds(10));
                    return ($data['apiData']);
                } else {
                    //dd('false here');
                    //return 'data not coming from cannary';
                    return false;
                }
            } else {
                //return 'three not coming from googelmap';
                return false;
            }
        } else {
            //return 'data not coming from googelmap';
            return false;
        }

        // echo '<pre>';
        // print_r ($data);
        // echo'<br>';
        // filter the address_components field for type : $type


        // var_dump($streetNumber);
        // var_dump($address);
        // var_dump($zipcode);


    }
}

//great Schools API data
if (!function_exists('greatSchool')) {
    function greatSchool($lat, $long, $propertyID)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://gs-api.greatschools.org/nearby-schools?lat=" . $lat . "&&lon=" . $long . "&limit=10&distance=3&school_type=public",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content: application/json',
                'X-API-Key:' . env('GREAT_API_KEY'),
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;
        return json_decode($response, true);
    }
}
if (!function_exists('greatSchoolSubrating')) {
    function greatSchoolSubrating($schoolID)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://gs-api.greatschools.org/schools/' . $schoolID . '/subratings',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content: application/json',
                'X-API-Key:' . env('GREAT_API_KEY'),
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        //echo $response;
        return json_decode($response, true);
    }
}


if (!function_exists('confidenceScore')) {
    function confidenceScore($value)
    {
        return round((1 - $value) * 100);
    }
}
if (!function_exists('schoolLevel')) {
    function schoolLevel($value)
    {
        // Step 1: Explode the string to create an array
        $levelArray = explode(',', $value);

        // Step 2: Get the first and last elements from the array
        $firstLevel = $levelArray[0];
        $lastLevel = end($levelArray);

        // Return an array containing both the first and last levels
        return [$firstLevel, $lastLevel];
    }
}
if (!function_exists('formatDistance')) {
    function formatDistance($distance)
    {
        $formattedDistance = number_format($distance, 1) . 'mi';
        return $formattedDistance;
    }
}
if (!function_exists('propertiesStatus')) {
    function propertiesStatus()
    {
        $cities = Properties::select('PublishStatus')->distinct()->get()->toArray(); //->where('PropertyStatus',1)
        if (isset($cities) && count($cities) >= 1) {
            return  $cities;
        } else {
            return false;
        }
    }
}

if (!function_exists('highestDeal')) {
    function highestDeal($value)
    {
        if ($value >= 1000000) {
            $formattedValue = '$' . number_format($value / 1000000, 1) . 'M';
        } elseif ($value >= 1000) {
            $formattedValue = '$' . number_format($value / 1000, 1) . 'K';
        } else {
            $formattedValue = '$' . $value;
        }
        return  $formattedValue;
    }
}


if (!function_exists('userMobile')) {
    function userMobile($mobileNumber)
    {
        $mobileNumber = Auth::user()->fresh()->mobile_number;
        $formattedNumber = implode('-', str_split($mobileNumber, 3));
        $formattedNumber = "(" . substr($formattedNumber, 0, 4) . ") " . substr($formattedNumber, 4);
        return  $formattedNumber;
    }
}
if (!function_exists('getTimeSinceCreation')) {
    function getTimeSinceCreation($createdDate)
    {

        $contractDate = Carbon::parse($createdDate);
        $currentDate = Carbon::today();
        // Calculate the difference in days between the contractDate and the current date
        $numberOfDays = $contractDate->diffInDays($currentDate);
        return $numberOfDays;
    }
}

if (!function_exists('convertObjectsToArray')) {
    function convertObjectsToArray($data)
    {
        if (is_object($data)) {
            $data = (array)$data;
        }

        if (is_array($data)) {
            $result = [];
            foreach ($data as $key => $value) {
                // Convert nested objects recursively
                $result[$key] = convertObjectsToArray($value);
            }
            return $result;
        }

        return $data;
    }
}

if (!function_exists('dateTostring')) {
    function dateTostring($dateString)
    {
        $formattedDate = Carbon::createFromFormat('Y-m-d', $dateString)->format('F j, Y');
        return $formattedDate;
    }
}

if (!function_exists('createNotification')) {
    function createNotification($user, $title, $message, $type, $propertyId, $agentId, $forumId, $source)
    {
        Notifications::create([
            'user_id'       => $user,
            'title'         => $title,
            'message'       => $message,
            'type'          => $type,
            'property_id'   => $propertyId,
            'created'       => Carbon::now(),
            'priority'      => 'normal',
            'icon'          => null,
            'link'          => null,
            'source'        => $source,
            'agent_id'      => $agentId,
            'forum_id'      => $forumId,
        ]);
    }
}

if (!function_exists('fetchNotification')) {
    function fetchNotification()
    {
        $notification = [];
        $count = 0;
        $notification['data'] =  Notifications::with('user', 'properties', 'agents', 'topic')->orderBy('created_at', 'DESC')->take(10)->get()->toArray();
        foreach ($notification['data'] as $data) {
            if ($data['is_read'] == 0)
                $count++;
        }
        $notification['count'] = $count;
        return $notification;
    }
}

if (!function_exists('getTimeAgoAttribute')) {
    function getTimeAgoAttribute($time)
    {
        return Carbon::parse($time)->diffForHumans();
    }
}
if (!function_exists('agentTeam')) {
    function agentTeam()
    {
        $currentUserId = Auth::id();

        $agents = User::select('id', 'first_name', 'last_name')
            ->where([
                ['role_id', '=', 2],
                ['id', '!=', $currentUserId],
                ['status', '=', 1],
            ])
            ->whereDoesntHave('agentTeams', function ($query) {
                $query->whereNotNull('agent_team_id');
            })
            ->get()
            ->toArray();

        return $agents;
    }
}
if (!function_exists('limitString')) {
    function limitString($value)
    {
        return Str::limit($value, 30);
    }
}

if (!function_exists('openHouse')) {
    function openHouse($lintingId, $propertyId)
    {
        $openHouse = OpenHouseProperties::where('property_id', $propertyId)->get()->toArray();
        if (!$openHouse) {
            // dd('main if');
            $checking = "https://api.mlsgrid.com/v2/OpenHouse?\$filter=ListingId eq '$lintingId'";
            $data = Http::withHeaders([
                'Authorization' => 'Bearer 0ba9756a30e06048cbbcbc81e46d0d325f67997c',
                'Accept-Encoding' => 'gzip'
            ])->get($checking)->json();

            foreach ($data['value'] as $key => $value) {
                if (isset($value['OpenHouseDate']) && strtotime($value['OpenHouseDate']) > time()) {
                    // Create an array to store the property data
                    $propertyData = [];

                    // Populate the property data array
                    $propertyData['property_id'] = (string)$propertyId; // Cast to string
                    $propertyData['openHouseKey'] = isset($value['OpenHouseKey']) ? (string)$value['OpenHouseKey'] : '';
                    $propertyData['nwmDeleted'] = isset($value['NWM_Deleted']) ? (string)$value['NWM_Deleted'] : '';
                    $propertyData['openHouseDate'] = isset($value['OpenHouseDate']) ? Carbon::parse($value['OpenHouseDate'])->format('Y-m-d') : null;
                    $propertyData['openHouseStartTime'] = isset($value['OpenHouseStartTime']) ? Carbon::parse($value['OpenHouseStartTime'])->format('Y-m-d H:i:s') : null;
                    $propertyData['openHouseEndTime'] = isset($value['OpenHouseEndTime']) ? Carbon::parse($value['OpenHouseEndTime'])->format('Y-m-d H:i:s') : null;
                    $propertyData['nwmTypeId'] = isset($value['NWM_TypeId']) ? (string)$value['NWM_TypeId'] : '';
                    $propertyData['modificationTimestamp'] = isset($value['ModificationTimestamp']) ? Carbon::parse($value['ModificationTimestamp']) : '';
                    $propertyData['originatingSystemName'] = isset($value['OriginatingSystemName']) ? (string)$value['OriginatingSystemName'] : '';
                    $propertyData['listingKey'] = isset($value['ListingKey']) ? (string)$value['ListingKey'] : '';
                    $propertyData['listingId'] = isset($value['ListingId']) ? (string)$value['ListingId'] : '';
                    $propertyData['mlgCanView'] = isset($value['MlgCanView']) ? (string)$value['MlgCanView'] : '';
                    // $propertyData['mlgCanUse'] = isset($value['MlgCanUse']) ? (string)$value['MlgCanUse'] : '';
                    $propertyData['refreshments'] = isset($value['Refreshments']) ? (string)$value['Refreshments'] : '';
                    $propertyData['openHouseRemarks'] = isset($value['OpenHouseRemarks']) ? (string)$value['OpenHouseRemarks'] : '';
                    $propertyData['created_at'] = Carbon::now();
                    $propertyData['updated_at'] = Carbon::now();
                    // Insert the property data into the database
                    DB::table('open_house_properties')->insert(array_filter($propertyData, function ($value) {
                        return $value !== null && $value !== '';
                    }));
                }
            }
            $openHouse = OpenHouseProperties::where('property_id', $propertyId)->get()->toArray();
            //dd($openHouse);
            return $openHouse;
        } else {
            //dd($openHouse);
            return  $openHouse;
        }
    }
}

if (!function_exists('formattedDate')) {
    function formattedDate()
    {

        $currentDate = Carbon::now();

        // Format the current date as "D, d F Y" (Day, day of the month, full month name, and year)
        $formattedDate = $currentDate->format('D, d F Y');

        // Output the formatted current date
        return $formattedDate;
    }
}
// helpers.php

if (!function_exists('getSetFlashData')) {
    function getSetFlashData(){
        $flashdata = [];

        if (session()->has('success')) {
            $flashdata = [
                'class' => 'success',
                'icon' => 'fas fa-check-circle',
                'message' => session()->get('success'),
            ];
        } elseif (session()->has('error')) {
            $flashdata = [
                'class' => 'error',
                'icon' => 'fas fa-exclamation-triangle',
                'message' => session()->get('error'),
            ];
        }

        session()->forget(['success', 'error']); // Clear the session data

        return $flashdata;
    }
}
