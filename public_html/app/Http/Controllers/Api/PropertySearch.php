<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Events\UserNotification;
use App\Http\Controllers\Controller;
use App\Jobs\BuyerLeadJob;
use App\Jobs\EmailPropertyScheduleJob;
use App\Jobs\SellerLeadJob;
use App\Mail\NewPropertyListingEmail;
use App\Models\FavoriteProperty;
use App\Models\Media;
use App\Models\Properties;
use App\Models\PropertyLeads;
use App\Models\PropertyMessageBox;
use App\Models\PropertySchedule;
use App\Models\RecentlyViewedProperties;
use App\Models\SaveSearches;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Isset_;

class PropertySearch extends Controller
{

    public function propertySearch(Request $request)
    {
        $token = $request->header('Authorization');
        // Extract the token value (assuming it's a bearer token)
        $parts = explode('|', $token);
        // Get the value after the "|" character
        if (count($parts) === 2) {
            $token2 = $parts[1];
        }

        $hashedPreviousToken = hash('sha256', isset($token2) ? $token2 : '');

        // Find the user associated with the token
        $userToken =  DB::table('personal_access_tokens')
            ->where('token', $hashedPreviousToken)
            ->first();
        $userId = isset($userToken->tokenable_id) ? $userToken->tokenable_id : '';
        $query = Properties::select(
            'mlsproperties.id',
            'mlsproperties.ListingKeyNumeric',
            'mlsproperties.PropertyName',
            'mlsproperties.ListingContractDate',
            'mlsproperties.OriginatingSystemModificationTimestamp',
            'mlsproperties.ListOfficeName',
            'mlsproperties.PropetySellPrice',
            'mlsproperties.Bedrooms',
            'mlsproperties.BathroomsFull',
            'mlsproperties.PropertyAddress',
            'mlsproperties.PropertyArea',
            'mlsproperties.PropertyAreaUnits',
            'mlsproperties.PropertyDescription',
            'mlsproperties.PropertyLatitude',
            'mlsproperties.PropertyLongitude',
            'mlsproperties.PublishStatus',
            'mlsproperties.PropertyStatus',
            'mlsproperties.created_at',
        )
            ->with(['prefferedMedia', 'StructureType', 'PropertiesDetials', 'userFav' => function ($query) use ($userId) {
                // Filter favoriteProperty based on the provided user_id
                $query->where('user_id', $userId)->where('is_fav', '=', 1);
            }])
            ->where('mlsproperties.MlgCanView', '=', 1)
            ->where('mlsproperties.PropertyStatus', '=', 1);

        if ($request->sort == 'Recomended' || $request->sort == null) {
            $query->orderBy('mlsproperties.ListingContractDate', 'DESC')->orderBy('mlsproperties.created_at', 'DESC');
        }

        // $query->when($request->search, function ($query) use ($request) {
        //     $query->orderByRaw("CASE
        //                 WHEN mlsproperties.PropertyAddress LIKE ? THEN 1
        //                 WHEN mlsproperties.PropertyAddress LIKE ? THEN 2
        //                 WHEN mlsproperties.PropertyAddress LIKE ? THEN 3
        //                 WHEN mlsproperties.PropertyAddress LIKE ? THEN 4
        //                 ELSE 5
        //             END", [$request->search, $request->search.'%', '%'.$request->search.'%', '%'.$request->search]);
        // });



        if (isset($request->search_from) && $request->search_from == 'polygonCoordinates') {
            $query->when($request->search_from, function ($query) use ($request) {
                $polygonCoordinate = json_decode($request->value);
                if ($polygonCoordinate === null) {
                    // JSON decoding failed
                    $errorCode = json_last_error();
                    $errorMessage = json_last_error_msg();
                    echo "JSON decoding error (Code: $errorCode): $errorMessage";
                }
                $latitudes = array_column($polygonCoordinate, 'lat');
                $longitudes = array_column($polygonCoordinate, 'lng');

                $polygonCoordinates = [];
                foreach ($latitudes as $index => $latitude) {
                    $longitude = $longitudes[$index];
                    $polygonCoordinates[] = $longitude . ' ' . $latitude;
                }
                $polygonCoordinates[] = $longitudes[0] . ' ' . $latitudes[0];

                $polygon = 'POLYGON((' . implode(',', $polygonCoordinates) . '))';

                $query->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_POLYGONFROMTEXT(?))', [$polygon]);
            });
        }


        if (isset($request->search_from) && $request->search_from == 'zip') {
            $query->when($request->value, function ($query) use ($request) {
                $query->where('mlsproperties.PostalCode', $request->value);
            });
        } elseif (isset($request->search_from) && ($request->search_from == 'address' || $request->search_from == 'school')) {
            $query->when($request->value, function ($query) use ($request) {
                $query->where('mlsproperties.CityName', $request->value);
            });
        }


        // $query->when($request->rent, function ($query) use ($request) {
        //     $query->where('mlsproperties.prprtyRentOrsale', 'Rent');
        // });


        $query->when($request->bed, function ($query) use ($request) {
            if (($request->bed !== null && is_numeric($request->bed))) {
                $query->where('mlsproperties.Bedrooms', '>=', $request->bed);
            }
        });

        $query->when($request->bath, function ($query) use ($request) {
            if (($request->bath !== null && is_numeric($request->bath))) {
                $query->where('mlsproperties.BathroomsFull', '>=', $request->bath);
            }
        });

        $query->when($request->min || $request->max, function ($query) use ($request) {
            $query->whereBetween('mlsproperties.PropetySellPrice', [$request->min, $request->max]);
        });



        if (isset($request->home_type) && $request->home_type != '') {
            $query->whereHas('StructureType', function ($query) use ($request) {
                $query->where('StructureTypeName', $request->home_type);
            });
        }


        if (isset($request->floor) && $request->floor != '') {
            $query->whereHas('PropertiesDetials', function ($query) use ($request) {
                $query->where('StoriesTotal', $request->floor);
            });
        }

        if (isset($request->parking) && $request->parking != '') {
            $query->whereHas('PropertiesDetials', function ($query) use ($request) {
                $query->where('ParkingTotal', $request->parking);
            });
        }


        if ($request->publishStatus != null) {
            if ($request->publishStatus == 'Sold') {
                $query->when($request->publishStatus, function ($query) use ($request) {
                    $query->whereIn('mlsproperties.PublishStatus', ['Sold', 'Closed']);
                });
            } else {
                $query->when($request->publishStatus, function ($query) use ($request) {
                    $query->where('mlsproperties.PublishStatus', $request->publishStatus);
                });
            }
        } else {
            $query->where('mlsproperties.PublishStatus', '=', 'Active');
        }

        $query->when($request->min_area || $request->max_area, function ($query) use ($request) {
            $query->whereBetween('mlsproperties.PropertyArea', [$request->min_area, $request->max_area]);
        });

        if (isset($request->sort) && $request->sort >  0) {
            $sortOptions = [
                '1' => 'mlsproperties.PropetySellPrice desc',
                '2' => 'mlsproperties.PropetySellPrice asc',
                '3' => 'mlsproperties.CityName asc',
                '4' => 'mlsproperties.OriginatingSystemModificationTimestamp desc',
                '5' => 'mlsproperties.ListingKeyNumeric desc',
                '6' => 'mlsproperties.OriginatingSystemModificationTimestamp asc'
            ];

            $query->orderByRaw($sortOptions[$request->sort]);
        }


        if (isset($request->search_from) && $request->search_from == 'zoomCoordinates') {
            $query->when($request->search_from, function ($query) use ($request) {
                $zoomCoordinates = json_decode($request->value, true);

                $swLng = $zoomCoordinates['southwestLng'];
                $swLat = $zoomCoordinates['southwestLat'];
                $neLng = $zoomCoordinates['northeastLng'];
                $neLat = $zoomCoordinates['northeastLat'];

                $query->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_GEOMFROMTEXT(?))', [
                    "POLYGON(($swLng $swLat, $swLng $neLat, $neLng $neLat, $neLng $swLat, $swLng $swLat))"
                ]);
            });
        }

        //for getting raw query

        // $rawQuery = $query->toSql();
        // $bindings = $query->getBindings();
        // // Replace the question mark with the actual value
        // foreach ($bindings as $binding) {
        //     $rawQuery = preg_replace('/\?/', "'" . $binding . "'", $rawQuery, 1);
        // }
        // dd($rawQuery);

        $mapdata = $query->groupBy('mlsproperties.PropertyAddress')->limit(200)->get()->toArray();
        $properties = $query->groupBy('mlsproperties.PropertyAddress')->paginate(40);

        return response([
            'status' => 200,
            'message' => 'Search Property Results.',
            'properties' => $properties,
            'mapdata' => $mapdata,
        ], 200);
    }

    public function getRecentProperties(Request $request)
    {
        $token = $request->header('Authorization');
        // Extract the token value (assuming it's a bearer token)
        $parts = explode('|', $token);
        // Get the value after the "|" character
        if (count($parts) === 2) {
            $token2 = $parts[1];
        }

        $hashedPreviousToken = hash('sha256', isset($token2) ? $token2 : '');

        // Find the user associated with the token
        $userToken =  DB::table('personal_access_tokens')
            ->where('token', $hashedPreviousToken)
            ->first();
        $userId = isset($userToken->tokenable_id) ? $userToken->tokenable_id : null;
        $recentProperties = RecentlyViewedProperties::with('property', 'property.prefferedMedia', 'property.favoriteProperty', 'property.StructureType', 'user')
            ->where(function ($query) use ($userId) {
                $query->where('user_id', $userId)
                    ->orWhereNull('user_id');
            })
            ->take(10)->orderBy('updated_at', 'DESC')
            ->get()->toArray();
        return response()->json($recentProperties);
    }

    public function propertyDetail(Request $request)
    {

        $token = $request->header('Authorization');
        // Extract the token value (assuming it's a bearer token)
        $parts = explode('|', $token);
        // Get the value after the "|" character
        if (count($parts) === 2) {
            $token2 = $parts[1];
        }

        $hashedPreviousToken = hash('sha256', isset($token2) ? $token2 : '');

        // Find the user associated with the token
        $userToken =  DB::table('personal_access_tokens')
            ->where('token', $hashedPreviousToken)
            ->first();
        $userId = isset($userToken->tokenable_id) ? $userToken->tokenable_id : null;
        try {
            $propertyId = $request->property_id;
            // Check if the property exists
            $findProperty = Properties::find($propertyId);
            //dd($findProperty);
            if (!isset($findProperty)) {
                throw new \Exception('Property not found', 404);
            }

            $existingRecord = RecentlyViewedProperties::where('property_id', $propertyId)
                ->first();

            if ($existingRecord) {
                // Calculate the time difference
                $currentTime = Carbon::now();
                $viewedTime = Carbon::parse($existingRecord->created_at);
                $timeDifferenceInMinutes = $currentTime->diffInMinutes($viewedTime);

                // Define the time threshold (e.g., 60 minutes)
                $timeThresholdInMinutes = 60;

                if ($timeDifferenceInMinutes <= $timeThresholdInMinutes) {
                    // Update the timestamp of the existing record
                    $existingRecord->touch();
                } else {
                    // Create a new record
                    RecentlyViewedProperties::create([
                        'user_id' => $userId,
                        'property_id' => $propertyId,
                    ]);
                }
            } else {
                // Create a new record since there's no existing record
                RecentlyViewedProperties::create([
                    'user_id' => $userId,
                    'property_id' => $propertyId,
                ]);
            }

            $data['property'] = $findProperty->load([
                'propertyDetail',
                'WaterSource',
                'ParkingFeature',
                'PropertyVegetation',
                'PropertyRoof',
                'PropertyView',
                'Utilities',
                'ExteriorFeaturs',
                'Interior',
                'StructureType',
                'media',
                'basement',
                'propertyFlooring',
                'mlsRooms',
                'featuredRoom',
                'ArchitecturalStyle',
                'CommunityFeatures',
                'appliances',
                'outdoorAmenities',
                'coolingTypes',
                'heatingTypes',
                'heatingFuel',
                'propertyFireplacefeatures',
                'propertyFoundationDetails',
                'PowerProduction',
                'PropertyCondition',
                'GreenEnergy',
                'LotFeatures',
                'PropertyLevel',
                'PropertyPossession',
                'propertySewer',
                'SpecialListingConditions',
                'ListingTerm',
                'userFav' => function ($query) use ($userId) {
                    // Filter favoriteProperty based on the provided user_id
                    $query->where('user_id', $userId)->where('is_fav', '=', 1);
                }
            ])
                ->toArray();


            $data['recentlyListed'] = Properties::PropertiesListedMLS($findProperty['PostalCode'], $findProperty['CityName']);
            $data['similarListing'] = Properties::SimilarProperties($findProperty['PostalCode'], $findProperty['CityName']);
            return response()->json($data);
        } catch (\Exception $e) {
            // Handle exceptions and provide informative error messages
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }

    public function propertyFavorite(Request $request)
    {
        $propertyId = $request->input('property_id');
        $userId = getUserId(); // Replace with your logic to get the user ID
        //dd($userId);

        // Check if the property is already in favorites
     
        $favoriteProperty = FavoriteProperty::where([
            'properties_id' => $propertyId,
            'user_id' => $userId,
            'is_fav' => 1
        ])->first();

        if ($favoriteProperty) {
            // Property is in favorites, toggle the is_fav flag
            $favoriteProperty->update(['is_fav' => 0]);
           
            $data['message'] = 'Property removed from favorites.';
            $isFavorite = false;
        } else {
            FavoriteProperty::updateOrCreate([
                'properties_id' => $propertyId,
                'user_id' => $userId,
            ], ['is_fav' => 1]);
             $data['message']  = 'Property added to favorites.';
            $isFavorite = true;
        }
        return response()->json([
            'return' => $isFavorite,
            'message' => $data['message'],
        ]);
    }
    public function propertySchedule(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'prprtyId' => 'required|exists:mlsproperties,id',
            'date' => 'required|date',
            //'agentEmail' => 'sometimes|required|email',
            'agentID' => 'sometimes|required|integer',
           // 'userID' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        if (Auth::check()) {
            $table = new PropertySchedule();
            $table->property_id = $request->input('prprtyId');
            $table->scheduled_date = $request->input('date');

            if ($request->filled('agentID')) {
                $table->agent_id = $request->input('agentID');
            }

            $table->buyer_id = Auth::id();

            $inserted = $table->save();

            if ($inserted) {
        
                $data['message'] = 'We have successfully scheduled your visit.';
                $data['status'] = true;
                return response()->json($data, 200);
            } else {
                $data['message'] = 'Failed to schedule your visit.';
                $data['status'] = false;
                return response()->json($data, 500);
            }
        } else {
            $data['message'] = 'Ensure you are logged in prior to scheduling your visit.';
            return response()->json($data, 401);
        }
    }

    public function askQuestion(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'message' => 'required|string',
            'prprtyId' => 'required|exists:mlsproperties,id',
            'emailID' => 'nullable|email',
            'agentID' => 'nullable|integer',
            // 'agentUserName' => 'sometimes|required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

      //  dd($request->all());
        if (Auth::check()) {
            $table = new PropertyMessageBox();
            $table->message = $request->input('message');
            $table->property_id = $request->input('prprtyId');

            if ($request->filled('agentID')) {
                $table->agent_id = $request->input('agentID');
            }
            
            $table->buyer_id = getUserId();
            $inserted = $table->save();

            $data = [
                'userQuery' => $table->message,
                'message' => $inserted ? 'We have successfully registered your submission.' : 'Failed to register your submission.',
            ];

            return response()->json($data, $inserted ? 200 : 500);
        } else {
            $data['message'] = 'Ensure you are logged in prior to submitting your message.';
            return response()->json($data, 401);
        }
    }

    public function sellerLeads(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plan_to_sell_home' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'property_type' => 'required',
            'any_agent' => ['required', 'in:yes,no'],
            // 'agentUserName' => 'sometimes|required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = $request->all();
        $token = $request->header('Authorization');
        // Extract the token value (assuming it's a bearer token)
        $parts = explode('|', $token);
        // Get the value after the "|" character
        if (count($parts) === 2) {
            $token2 = $parts[1];
        }

        $hashedPreviousToken = hash('sha256', $token2);

        // Find the user associated with the token
        $userToken =  DB::table('personal_access_tokens')
            ->where('token', $hashedPreviousToken)
            ->first();
        $userId = $userToken->tokenable_id;

        // Create the property lead
        $lead = PropertyLeads::create([
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'plan_to_sell_home' => $data['plan_to_sell_home'],
            'property_type' => $data['property_type'],
            'any_agent' => $data['any_agent'],
            'lead_type' => 'Seller',
            'user_id' => isset($userId) ? $userId : null,
        ]);

        // Prepare notification data
        if (isUserLoggedIn()) {
            $data['is_read'] = false;
            $data['time'] = Carbon::now();
            $data['type'] = 'Selling Leads';
            $data['time'] = Carbon::now();
            $data['message'] = $data['name'] . ' Just requested a selling lead';
            $data['link'] =  url('admin/leads-info/' . $lead->id);
            $link = 'admin/leads-info/' . $lead->id;
            $data['path'] = asset('public/images/userdp/');
            $data['user'] = User::where('id', $userId)->first()->toArray();
            createNotification($userId, 'Selling Leads', $data['name'] . ' Just requested a selling lead', 'Selling Lead', null, null, null, $link);
            event(new UserNotification($data));
        } else {
            $data['is_read'] = false;
            $data['time'] = Carbon::now();
            $data['type'] = 'Selling Leads';
            $data['time'] = Carbon::now();
            $data['message'] = $data['name'] . ' Just requested a selling lead';
            $data['link'] =  url('admin/leads-info/' . $lead->id);
            $link = 'admin/leads-info/' . $lead->id;
            $data['user'] = '';
            $data['path'] = '';
            createNotification(null, 'Selling Leads', $data['name'] . ' Just requested a selling lead', 'Selling Lead', null, null, null, $link);
            event(new UserNotification($data));
        }

        // Dispatch the job
        SellerLeadJob::dispatch($data)->delay(now()->addSeconds(10));

        // Return a JSON response
        return response()->json(['message' => 'Your request has been submitted, our agent will contact you soon!']);
    }
    public function buyerLeads(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required',
            'city' => 'sometimes|required',
            'state' => 'sometimes|required',
            'message' => 'required|string'
            // 'agentUserName' => 'sometimes|required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = $request->all();
        $token = $request->header('Authorization');
        // Extract the token value (assuming it's a bearer token)
        $parts = explode('|', $token);
        // Get the value after the "|" character
        if (count($parts) === 2) {
            $token2 = $parts[1];
        }

        $hashedPreviousToken = hash('sha256', $token2);

        // Find the user associated with the token
        $userToken =  DB::table('personal_access_tokens')
            ->where('token', $hashedPreviousToken)
            ->first();
        $userId = $userToken->tokenable_id;
        // Create the property lead
        $lead = PropertyLeads::create([
            'address' => $data['address'],
            'city' => isset($data['city']) ? $data['city'] : null,
            'state' => isset($data['state']) ? $data['state'] : null,
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'message' => $data['message'],
            'lead_type' => 'Buyer',
            'user_id' => isset($userId) ? $userId : null,
        ]);

        // Prepare notification data
        if (isUserLoggedIn()) {
            $data['is_read'] = false;
            $data['time'] = Carbon::now();
            $data['type'] = 'Buying Leads';
            $data['time'] = Carbon::now();
            $data['message'] = $data['name'] . ' Just requested a buying lead';
            $data['link'] =  url('admin/leads-info/' . $lead->id);
            $link = 'admin/leads-info/' . $lead->id;
            $data['path'] = asset('public/images/userdp/');
            $data['user'] = User::where('id', $userId)->first()->toArray();
            createNotification($userId, $data['message'], $data['name'] . ' Just requested a buying lead', 'Buying Lead', null, null, null, $link);
            event(new UserNotification($data));
        } else {
            $data['is_read'] = false;
            $data['time'] = Carbon::now();
            $data['type'] = 'Buying Leads';
            $data['time'] = Carbon::now();
            $data['message'] = $data['name'] . ' Just requested a buying lead';
            $data['link'] =  url('admin/leads-info/' . $lead->id);
            $link = 'admin/leads-info/' . $lead->id;
            $data['user'] = '';
            $data['path'] = '';
            createNotification(null, $data['message'], $data['name'] . ' Just requested a buying lead', 'Buying Lead', null, null, null, $link);
            event(new UserNotification($data));
        }
        BuyerLeadJob::dispatch($data)->delay(now()->addSeconds(10));

        // Return a JSON response
        return response()->json(['message' => 'Your request has been submitted, our agent will contact you soon!']);
    }

    public function propertyListing(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'virtualTourURL' => 'nullable|url',
            'status' => 'nullable',
            'rent' => 'nullable',
            'hometype' => 'required',
            'propertySubType' => 'nullable',
            'sellingPrice' => 'required|numeric|max:9999999',
            'HOAdues' => 'nullable|numeric|max:1000000',
            'beds' => 'required|numeric|max:100',
            'fullBaths' => 'required|numeric|max:100',
            'oneQuarter' => 'nullable|numeric|max:100',
            'halfbaths' => 'nullable|numeric|max:100',
            'threeQuarter' => 'nullable|numeric|max:100',
            'finishedsquarefeet' => 'required|numeric|max:9999999',
            'lotSize' => 'nullable|numeric|max:9999999',
            'yearBuilt' => 'required|numeric|digits:4',
            'taxYear' => 'nullable|numeric|digits:4',
            'taxAnnualAmount' => 'nullable|numeric|max:1000000',
            'effectiveYearBuilt' => 'nullable|numeric|digits:4',
            'totalRooms' => 'nullable|numeric|digits_between:1,2',
            'relatedWeb' => 'nullable|url',
            'description' => 'required|min:50|max:1500',
            'photos' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'countyOrParish' => 'nullable',
            'zipCode' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'street' => 'nullable',
            'MLSArea' => 'nullable',
            'topography' => 'nullable',
            'powerCompany' => 'nullable',
            'sewerCompany' => 'nullable',
            'highSchoolDistrict' => 'nullable',
            'highSchool' => 'nullable',
            'middleOrJuniorSchool' => 'nullable',
            'elementarySchool' => 'nullable',
        ]);
        //dd($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $property['IsMlsProperty'] = 0;
        $property['PropetySellPrice'] = $request->sellingPrice;
        $property['PropertyAddress'] = $request->address;
        $property['CityName'] = $request->city;
        $property['Bedrooms'] = $request->beds;
        $property['StateOrProvince'] = $request->state;
        $property['BathroomsFull'] = $request->fullBaths;
        $property['BathroomsHalf'] = $request->halfbaths;
        $property['PropertyArea'] = $request->finishedsquarefeet;
        $property['PropertyDescription'] = $request->description;
        $property['PropertyLongitude'] = $request->longitude;
        $property['PostalCode'] = $request->zipCode;
        $property['PropertyDirections'] = $request->PropertyDirections;
        $property['PropertyLatitude'] = $request->latitude;
        $property['MlgCanView'] = 1;
        if ($request->rent == 'Rent') {
            $property['PublishStatus'] = 'Rent';
        } else {
            $property['PublishStatus'] = $request->status;
        }
        $property['prprtyRentOrsale'] = $request->rent;
        $randomNo = rand(1000, 9999);
        // Create a Carbon instance with the current date and time
        $dateTime = Carbon::now();
        // Append the random number to the timestamp and format it as desired
        $dateString = $dateTime->format('YmdHis') . $randomNo;
        $dateString = strtotime($dateTime->format(("Y-m-d H:i:s" . $randomNo)));
        $property['ListingKeyNumeric'] = $dateString;
        $property['ListingKey'] = 'ARIS' . $dateString;
        $property['ListingId'] = 'ARIS' . $dateString;
        $property['user_id'] = getUserId();
        $property['PropertyStatus'] = 2; // 2: pending for admin's approval
        $property['created_at'] = Carbon::now();
        //============  property Details table ===============//
        $propertiesDetails['StreetName'] = $request->street;
        $propertiesDetails['MLSArea'] = $request->MLSArea;
        $propertiesDetails['Topography'] = $request->topography;
        $propertiesDetails['SewerCompany'] = $request->sewerCompany;
        $propertiesDetails['PowerCompany'] = $request->powerCompany;
        $propertiesDetails['HighSchool'] = $request->highSchool;
        $propertiesDetails['CountyOrParish'] = $request->countyOrParish;
        $propertiesDetails['MiddleOrJuniorSchool'] = $request->middleOrJuniorSchool;
        $propertiesDetails['HighSchoolDistrict'] = $request->highSchoolDistrict;
        $propertiesDetails['ElementarySchool'] = $request->elementarySchool;
        $propertiesDetails['PropertySubType'] = $request->propertySubType;
        $propertiesDetails['TaxYear'] = $request->taxYear;
        $propertiesDetails['TaxAnnualAmount'] = $request->taxAnnualAmount;
        $propertiesDetails['VirtualTourURLUnbranded'] = $request->virtualTourURL;
        $propertiesDetails['BathroomsThreeQuarter'] = $request->threeQuarter;
        $propertiesDetails['BathroomsOneQuarter'] = $request->oneQuarter;
        $propertiesDetails['LotSizeSquareFeet'] = $request->lotSize;
        $propertiesDetails['YearBuilt'] = $request->yearBuilt;
        $propertiesDetails['YearBuiltEffective'] = $request->effectiveYearBuilt;
        $propertiesDetails['HOAdues'] = $request->HOAdues;
        $propertiesDetails['Relatedwebsite'] = $request->relatedWeb;
        $propertiesDetails['MlgCanView'] = 1;
        $propertiesDetails['TotalRooms'] = $request->totalRooms;
        // $propertiesDetails['Status'] = $request->status;
        if ($request->rent == 'Rent') {
            $propertiesDetails['Status'] = 'Rent';
        } else {
            $propertiesDetails['Status'] = $request->status;
        }
        $propertiesDetails['created_at'] = Carbon::now();
        DB::beginTransaction();
        $message = '';
        try {
            //code...
            $propertyId = DB::table('mlsproperties')->insertGetId($property);
            $propertiesDetails['mlsproperties_id'] = $propertyId;
            DB::table('properties_detials')->insert($propertiesDetails);

            $findProperty = Properties::find($propertyId);

            // propertyAppliance table - linking(pivot) table of appliances and property
            $selected['appliances'] = $request->input('appliance', []);
            $findProperty->appliances()->sync($selected['appliances']);

            //basement
            $selected['basement'] = $request->input('basement', []);
            $findProperty->basement()->sync($selected['basement']);

            // propertyArchitecturalStyle table - linking(pivot) table of ArchitecturalStyle  and property
            $selected['ArchitecturalStyle'] = $request->input('architecturalStyle', []);
            $findProperty->ArchitecturalStyle()->sync($selected['ArchitecturalStyle']);


            //---------Outdoor building Aminities ----------//
            $selected['outDoor'] = $request->input('outDoor', []);
            $findProperty->outdoorAmenities()->sync($selected['outDoor']);


            //-------------Property Rooms ------------//
            $selected['PropertyRooms'] = $request->input('propertyRooms', []);
            $findProperty->featuredRoom()->sync($selected['PropertyRooms']);

            //-------------Property Floor------------//
            $selected['floor'] = $request->input('floor', []);
            $findProperty->propertyFlooring()->sync($selected['floor']);

            //-------------Property community ------------//
            $selected['community'] = $request->input('community', []);
            $findProperty->CommunityFeatures()->sync($selected['community']);


            //-------------Property exteriorFeatures ------------//
            $selected['exteriorFeatures'] = $request->input('exteriorFeatures', []);
            $findProperty->ExteriorFeaturs()->sync($selected['exteriorFeatures']);

            //interior
            $selected['interior'] = $request->input('interior', []);
            $findProperty->Interior()->sync($selected['interior']);

            //-------------Property parking ------------//
            $selected['parking'] = $request->input('parking', []);
            $findProperty->ParkingFeature()->sync($selected['parking']);

            //-------------Property roof ------------//
            $selected['roof'] = $request->input('roof', []);
            $findProperty->PropertyRoof()->sync($selected['roof']);


            //-------------Property propertyview ------------//
            $selected['propertyview'] = $request->input('propertyview', []);
            $findProperty->propertyview()->sync($selected['propertyview']);

            //-------------Property Cooling ------------//
            $selected['propertycooling'] = $request->input('propertycooling', []);
            $findProperty->coolingTypes()->sync($selected['propertycooling']);

            //-------------Property Heating ------------//
            $selected['propertyheating'] = $request->input('propertyheating', []);
            $findProperty->heatingTypes()->sync($selected['propertyheating']);

            //-------------Property fuel ------------//
            $selected['propertyfuel'] = $request->input('propertyfuel', []);
            $findProperty->heatingFuel()->sync($selected['propertyfuel']);

            // //structure
            $selected['hometype'] = $request->input('hometype');
            $findProperty->StructureType()->sync($selected['hometype']);

            //--------------------    Media Uploads ------------------//
            if (isset($request->photos)) {
                //dd($request->photos);
                $input = $request->photos;
                $images = array();
                if ($files = $request->file('photos')) {
                    //$uploadedImages = [];
                    foreach ($files as $file => $value) {
                        $uniqueName = str::uuid() . '.' . $value->getClientOriginalExtension();
                        Storage::disk('s3')->put('properties/' . $uniqueName, file_get_contents($value));
                        $data['image'] = $uniqueName;
                        //$uploadedImages[] = $uniqueName;
                        /* Image for insertion*/
                        $mediaId = DB::table('mlsmedia')->insertGetId([
                            'mlsproperties_id' => $propertyId,
                            // 'MediaKey' => generateRandomNumber('ARIS'.$value),
                            // 'MediaObjectID' => generateRandomNumber($value),
                            'MediaModificationTimestamp' => Carbon::now(),
                            'Order' => $file,
                            'PreferredPhotoYN' => $file ? 0 : 1,
                            'wherfrom' => 2,
                            'status' => 1,
                            'MediaURL' => implode("|", $data),
                            'created_at' => Carbon::now()
                        ]);
                        Media::where('id', $mediaId)
                            ->update(
                                ['status' => 1, 's3buckettempurl' => getS3BucketTempUrl($mediaId)]
                            );
                    }
                }
            }
            $message = 'your property listing is pending, wait for a confirmation email.';
            // Mail::to(Auth::user()->email)->send(new NewPropertyListingEmail($data));
            DB::commit();
            $newlisting['type'] = 'New Property Listed';
            //$newlisting['property'] = Properties::with('userProperties')->where('id',$propertyId)->first()->toArray();
            $newlisting['property'] = Properties::where('id', $propertyId)->first()->toArray();
            $newlisting['time'] = Carbon::now();
            $newlisting['path'] = asset('public/images/userdp/');
            $newlisting['user'] = User::where('id', getUserId())->first()->toArray();
            $newlisting['message'] = Auth::user()->first_name . ' Listed a New property ' . $newlisting['property']['PropertyAddress'];
            $newlisting['is_read'] = false;
            $newlisting['link'] = url('admin/properties/' . $propertyId);
            $link = 'admin/properties/' . $propertyId;

            createNotification(getUserId(), 'New Property Lisitng', Auth::user()->first_name . ' Listed a New property' . $newlisting['property']['PropertyAddress'], 'New Property Listed', $propertyId, null, null, $link);
            event(new UserNotification($newlisting));
        } catch (\Exception $e) {

            DB::rollback();
            //dd($e);
            $message = $e->getMessage();
        }
        $listing = Properties::where('id', $propertyId)->with('prefferedMedia', 'StructureType')->first();
        return response()->json(['message' => 'Property created successfully', 'property' => $listing], 200);
    }

    public function saveSearch(Request $request)
    {
        // dd( $request->all());
        if (auth()->check()) {
            $data = $request->validate([
                'searchName' => 'required|string',
                'allData' => 'required|json',
            ]);
            $user = auth()->user();

            $savedSearch = new SaveSearches();
            $savedSearch->user_id = $user->id;
            $savedSearch->name = $data['searchName'];
            $savedSearch->search_criteria = $data['allData'];
            $savedSearch->save();

            return response()->json(['message' => 'Search saved successfully']);
        } else {
            return response()->json(['message' => 'Ensure you are logged in prior to submitting the data.'], 401);
        }
    }
}
