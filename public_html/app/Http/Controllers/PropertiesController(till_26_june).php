<?php



namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Blogs;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewPropertyListingEmail;
use App\Models\Appliances;

use App\Models\ArchitecturalStyle;

use App\Models\Basement;

use App\Models\CommunityFeatures;

use App\Models\CoolingType;

use App\Models\ExteriorFeatures;

use App\Models\FeaturedRoom;

use App\Models\Flooring;

use App\Models\HeatingFuel;

use App\Models\HeatingType;

use App\Models\Media;

use App\Models\mlsInteriorFeatures;

use App\Models\ParkingFeatures;

use App\Models\Properties;

use App\Models\PropertiesDetials;

use App\Models\PropertiesViews;

use App\Models\PropertyAppliances;

use App\Models\PropertyArchitecturalStyle;

use App\Models\PropertyBasement;

use App\Models\PropertyCommunity;

use App\Models\PropertyConditionRel;

use App\Models\PropertyCoolingType;

use App\Models\PropertyExterior;

use App\Models\PropertyFeaturedRoom;

use App\Models\FavoriteProperty;
use App\Models\page;
use App\Models\pagecontent;

use App\Models\PropertyFirePlace;

use App\Models\PropertyFlooring;

use App\Models\PropertyFoundationDetails;

use App\Models\PropertyGreenEnergy;

use App\Models\PropertyHeatingFuel;

use App\Models\PropertyHeatingType;

use App\Models\PropertyInterior;

use App\Models\PropertyLevel;

use App\Models\PropertyLotFeatures;

use App\Models\PropertyParking;

use App\Models\PropertyPossession;

use App\Models\PropertyPowerProductionType;

use App\Models\PropertyRoof;

use App\Models\PropertySewer;

use App\Models\PropertyStructureType;

use App\Models\Propertyutilities;

use App\Models\PropertyVegetation;

use App\Models\PropertyView;

use App\Models\PropertyWaterSource;

use App\Models\Roof;

use App\Models\Rooms;

use App\Models\StructureType;

use App\Models\OutDoor;

use App\Models\PropertyOutDoor;

use App\Models\User;

use App\Models\PropertyLeads;

use App\Models\AgentTeam;

use Carbon\Carbon;

use DateTime;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Json;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Jobs\EmailJob;
use App\Jobs\ShareListingEmail;
use App\Models\Reviews;
use Stripe\Review;

class PropertiesController extends Controller
{

  private $pagecontent;

  public function __construct()
  {

    define('MLS_DATA', "0");
    $this->pagecontent = new pagecontent();
  }


  //--------------------------- Home Page Mls --------------------//

  public function index()
  {
    $properties = Properties::propertiesSeatle(1,'Active'); // passing 1 as parameter is for mls property
    $FeaturedProperties = Properties::HomepagePrpty(0,'Sold')->get()->toArray(); //passing 0 as parameter, is for featured property
    $agents = User::with('Education', 'Experience', 'Language', 'Question', 'Skills','role')
    ->where('status' , 1)
    ->whereHas('role', function ($q)  { $q->where('name', '=', 'Agent'); })
    ->orderBy('agent_sort_key', 'DESC')
    ->get()
    ->each(function ($user) {
        $user['review_statistics'] = $user->getReviewStatistics();
    })
    ->toArray();
    //  dd($agents);
    //$FeaturedProperties = Properties::HomeFeatured();
    $categories = StructureType::countCategories();// //dd($categories);
    $AllProperties = array(
      "properties" => $properties,
      "featured" => $FeaturedProperties,
      "cat" => $categories,
      "allAgents" => $agents
    );
    return view('properties.home', ['properties' => $AllProperties]);
  }





  //--------------------------- Our Community Mls Page --------------------//

  public function OurCommunity(Request $request)
  {
    $pulicshStatus = Properties::select('PublishStatus')->distinct()->orderBy('PublishStatus')->get()->toArray();
    $properties = Properties::Community($request);
    $map = Properties::mapProperties($request);
     //dd($properties);
     $search = [];

    if($request->search || $request->zip){
        $search['search'] = $request->search;
        $search['zip'] = $request->zip;
    }

    $Properties = array(
      "community" => $properties,
      "map" => addslashes(json_encode($map->toArray())),
      "pulicshStatus" => $pulicshStatus,
      "search" => $search
    );

    return view('properties.our-community', ['properties' => $Properties]);
  }



  //--------------------------- Our Community  Mls Search Filter, Sorting  --------------------//

  public function getproperties(Request $request)
  {

       //dd('');
    try {
        if ($request->ajax()) {
            $published = [];
            $mainData = [];
            $query = Properties::select('mlsproperties.id', 'mlsproperties.ListingKeyNumeric', 'mlsproperties.PropertyName', 'mlsproperties.ListOfficeName', 'mlsproperties.PropetySellPrice', 'mlsproperties.Bedrooms', 'mlsproperties.BathroomsFull', 'mlsproperties.PropertyAddress', 'mlsproperties.PropertyArea', 'mlsproperties.PropertyAreaUnits', 'mlsproperties.PropertyDescription', 'mlsproperties.PropertyLatitude', 'mlsproperties.PropertyLongitude','mlsproperties.PublishStatus' ,'mlsmedia.MediaURL','mlsmedia.s3buckettempurl', 'property_structure_types.mlsstructure_types_id')
                ->join('mlsmedia', 'mlsproperties.id', '=', 'mlsmedia.mlsproperties_id')
                ->join('property_structure_types', 'mlsproperties.id', '=', 'property_structure_types.mlsproperties_id')
                ->join('properties_detials', 'mlsproperties.id', '=', 'properties_detials.mlsproperties_id')
                ->where('mlsmedia.PreferredPhotoYN', '=', '1')
                ->where('mlsproperties.PropetySellPrice','>', 9999)
                ->groupBy('mlsproperties.id');

                if ($request->has('coordinates')) {
                    $data = $request->input('coordinates'); // Use input() method instead of post()
                    //\Log::info($data);
                    foreach($data as $coordinate) {
                        $latitudes[] = $coordinate['lat'];
                        $longitudes[] = $coordinate['lng'];
                    }
                    $query->whereIn('mlsproperties.PropertyLatitude', $latitudes)
                    ->whereIn('mlsproperties.PropertyLongitude', $longitudes);
                    $mainData['mapData'] = json_encode($query->get()->toArray());
                    $properties = $query->paginate(20);
                    $mainData['pagination'] = $properties;
                    return Response($mainData);
                } else {
                return response()->json([
                    'success' => false,
                    'data' => null,
                    'message' => 'No coordinates received'
                ]);
            }
        }//ajax here
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
        ]);
    }


    }
  public function PropertySearch(Request $request)
  {


    //$properties = Properties::CommunitySearch($request);
    //  return $request->all();
    //  dd($request->all());
//    // dd();
//    return json_encode(Response($mainData));
//     echo "<pre>"; print_r(Response($mainData));

        if ($request->ajax()) {
            $query = Properties::select(
                'mlsproperties.id',
                'mlsproperties.ListingKeyNumeric',
                'mlsproperties.PropertyName',
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
                'mlsmedia.MediaURL',
                'mlsmedia.s3buckettempurl',
                'property_structure_types.mlsstructure_types_id'
            )
            ->join('mlsmedia', 'mlsproperties.id', '=', 'mlsmedia.mlsproperties_id')
            ->join('property_structure_types', 'mlsproperties.id', '=', 'property_structure_types.mlsproperties_id')
            ->join('properties_detials', 'mlsproperties.id', '=', 'properties_detials.mlsproperties_id')
            ->where('mlsmedia.PreferredPhotoYN', '=', '1')
            ->where('mlsproperties.PropetySellPrice','>', 9999)
            ->groupBy('mlsproperties.id');

            $query->when($request->search, function ($query) use ($request) {
                $query->orderByRaw("CASE
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 1
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 2
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 3
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 4
                            ELSE 5
                        END", [$request->search, $request->search.'%', '%'.$request->search.'%', '%'.$request->search]);
            });

            if(isset($request->zip) && !empty($request->zip))
            {
                $query->when($request->zip, function ($query) use ($request) {
                    $query->where('mlsproperties.PostalCode', $request->zip);
                });
            }
            else
            {
                $query->when($request->address, function ($query) use ($request) {
                    $query->where('mlsproperties.CityName', $request->address);
                });
            }

            $query->when($request->description, function ($query) use ($request) {
                $query->where('mlsproperties.PropertyDescription', 'LIKE', '%' . $request->description . "%");
            });

            $query->when($request->bed || $request->bath, function ($query) use ($request) {
                $query->where('mlsproperties.Bedrooms', '>=', $request->bed);
                $query->where('mlsproperties.BathroomsFull', '>=', $request->bath);
            });

            $query->when($request->min || $request->max, function ($query) use ($request) {
                $query->whereBetween('mlsproperties.PropetySellPrice', [$request->min, $request->max]);
            });

            $query->when($request->home, function ($query) use ($request) {
                $query->whereIn('property_structure_types.mlsstructure_types_id', $request->home);
            });

            $query->when($request->home_type, function ($query) use ($request) {
                $query->where('property_structure_types.mlsstructure_types_id', $request->home_type);
            });

            $query->when($request->floor, function ($query) use ($request) {
                $query->where('properties_detials.StoriesTotal', '>=', $request->floor);
            });

            $query->when($request->parking, function ($query) use ($request) {
                $query->where('properties_detials.ParkingTotal', '>=', $request->parking);
            });

            $query->when($request->publishStatus, function ($query) use ($request) {
                $query->where('mlsproperties.PublishStatus', $request->publishStatus);
            });

            $query->when($request->min_area || $request->max_area, function ($query) use ($request) {
                $query->whereBetween('mlsproperties.PropertyArea', [$request->min_area, $request->max_area]);
            });

            $sortOptions = [
                '1' => 'mlsproperties.PropetySellPrice desc',
                '2' => 'mlsproperties.PropetySellPrice asc',
                '3' => 'mlsproperties.CityName asc',
                '4' => 'mlsproperties.OriginatingSystemModificationTimestamp desc',
                '5' => 'mlsproperties.ListingKeyNumeric desc',
                '6' => 'mlsproperties.OriginatingSystemModificationTimestamp asc'
            ];

            if (isset($sortOptions[$request->sort])) {
                $query->orderByRaw($sortOptions[$request->sort]);
            }

            $query->when($request->coordinates, function ($query) use ($request) {
                $coordinates = $request->input('coordinates');
                $latitudes = array_column($coordinates, 'lat');
                $longitudes = array_column($coordinates, 'lng');

                $query->whereIn('mlsproperties.PropertyLatitude', $latitudes)
                    ->whereIn('mlsproperties.PropertyLongitude', $longitudes);
            });

            $mainData['mapData'] = json_encode($query->get()->toArray());
            $properties = $query->paginate(20);
            $mainData['pagination'] = $properties;

            return response($mainData);
        }




    if ($request->isMethod('GET')) {
      $homeType = Properties::HomeType();
      $properties = Properties::Community($request);
      $Properties = array(
        "hometype" => $homeType,
        "community" => $properties,
      );

      return view('properties.our-community', ['properties' => $Properties]);
    }
  }

  //--------------------------- Property Details Mls --------------------//

  public function PropertyDetail($id)
  {

    // $id = 27765;
    if ((Properties::where('id', $id)->exists())) {
      $PropertiesAppliances = PropertyAppliances::PropertyAppliance($id);
      $PropertiesBasements = PropertyBasement::PropertyBasement($id);
      $PropertiesExteriors = PropertyExterior::Exterior($id);
      $PropertyStyles = PropertyArchitecturalStyle::PropertyArchitectural($id);
      $PropertyFirePlaceFeature = PropertyFirePlace::propertyFireplacefeatures($id);
      $PropertyFlooring = PropertyFlooring::PropertyFlooring($id);
      $FoundationDetails = PropertyFoundationDetails::FoundationDetails($id);
      $PowerProduction = PropertyPowerProductionType::PropertyPowerProduction($id);
      $PropertyCommunity = PropertyCommunity::PropertyCommunity($id);
      $PropertyInterior = PropertyInterior::PropertyInterior($id);
      $WaterSource = PropertyWaterSource::WaterSource($id);
      $PropertyRoofs = PropertyRoof::PropertyRoofs($id);
      $PropertyCondition = PropertyConditionRel::PropertyCondition($id);
      $GreenEnergy = PropertyGreenEnergy::GreenEnergy($id);
      $Utilities = Propertyutilities::PropertyUtilities($id);
      $LotFeature = PropertyLotFeatures::LotFeature($id);
      $PropertyView = PropertiesViews::PropertyView($id);
      $PropertyLevel = PropertyLevel::PropertyLevel($id);
      $StructureTypeName = PropertyStructureType::StructureTypeName($id);
      $PropertyPossession = PropertyPossession::PropertyPossession($id);
      $ParkingFeature = PropertyParking::ParkingFeature($id);
      $PropertyVegetation = PropertyVegetation::PropertyVegetation($id);
      $PropertySewer = PropertySewer::PropertySewer($id);
      $properties = Properties::find($id);
      $PropertyDetail = Properties::find($id)->PropertiesDetials;
      $Lists = Properties::PropertiesListedMLS();
      $SimilarProperties = Properties::SimilarProperties($properties['PostalCode']);
      $countMedia = Media::mediaCount($id);
      $topThree = Media::topThree($id);
      $propertyMedia = Media::ProMedia($id);
      $detailFav =  Properties::find($id)->favoriteProperty;
      if($properties['user_id'] != 0)
      {
        $Agent = User::realEstateAgentByUserId($properties['user_id']);
      }
      else
      {
        $Agent = [];
      }

    $PropertiesDetails = array(
        "PropertyAppliances" => $PropertiesAppliances['Appliances'],
        "PropertyBasement" => $PropertiesBasements['Basement'],
        "PropertyExteriorFeatures" => $PropertiesExteriors['ExteriorFeaturs'],
        "PropertyArchitecturalStyles" => $PropertyStyles['ArchitecturalStyle'],
        "Fireplacefeatures" => $PropertyFirePlaceFeature['propertyFireplacefeatures'],
        "PropertyFlooring" => $PropertyFlooring['propertyFlooring'],
        "FoundationDetails" => $FoundationDetails['propertyFoundationDetails'],
        "properties" => $properties,
        "favorite" => $detailFav,
        "PropertyCommunity" => $PropertyCommunity['CommunityFeatures'],
        "ParkingFeature" => $ParkingFeature['ParkingFeature'],
        "PropertyInterior" => $PropertyInterior['Interior'],
        "PowerProduction" => $PowerProduction['PowerProduction'],
        "PropertyOtherDetails" => $PropertyDetail,
        "WaterSource" => $WaterSource['WaterSource'],
        "PropertyRoof" => $PropertyRoofs['PropertyRoof'],
        "PropertyCondition" => $PropertyCondition['PropertyCondition'],
        "GreenEnergy" => $GreenEnergy['GreenEnergy'],
        "Utilities" => $Utilities['Utilities'],
        "LotFeature" => $LotFeature['LotFeatures'],
        "PropertyView" => $PropertyView['PropertyView'],
        "PropertyLevel" => $PropertyLevel['PropertyLevel'],
        "StructureType" => $StructureTypeName['StructureType'],
        "PropertyPossession" => $PropertyPossession['PropertyPossession'],
        "PropertyVegetation" => $PropertyVegetation['PropertyVegetation'],
        "PropertySewer" => $PropertySewer['PropertySewer'],
        "PropertyListed" => $Lists,
        "SimilarProperties" => $SimilarProperties,
        "propertyMedia" => $propertyMedia,
        "topThreeMedia" => $topThree,
        "countMedia"    =>  $countMedia,
        "electricity"    =>  $this->electricity_wattbuy($properties->PostalCode, $properties->PropertyAddress, $properties->CityName, $properties->StateOrProvince, $properties->Bedrooms, $properties->BathroomsFull ),
        "agent_details" => $Agent,
    );
      //dd('');
      $PropertiesDetails['canaryData'] = '';
      $resultCanary = getHouseCanaryResult($properties->PropertyAddress);

      //dd($resultCanary);
      //dd($resultCanary);
      if ($resultCanary != false) {
        $PropertiesDetails['canaryData'] = $resultCanary;
      }
      //dd($properties);
      $parsedData = $this->foursquareData($properties->PropertyLatitude, $properties->PropertyLongitude);
      $categoriesData = [];
        // Only process data if it is properly parsed and 'results' key exists
        if ($parsedData !== null && json_last_error() === JSON_ERROR_NONE && array_key_exists('results', $parsedData)) {
            foreach ($parsedData['results'] as $place) {
                foreach ($place['categories'] as $category) {
                    $categoryName = $category['name'];

                    // If the category is not set yet, initialize it with an empty array
                    if (!isset($categoriesData[$categoryName])) {
                        $categoriesData[$categoryName] = [];
                    }

                    // Push the place to the corresponding category array
                    $categoriesData[$categoryName][] = $place;
                }
            }
        }
        $PropertiesDetails['fourSquareData'] = $categoriesData;
        //echo '<pre>';
      //return print_r($categoriesData);
    //   $mydata = $this->getNearbySchools($properties->PropertyLatitude, $properties->PropertyLongitude);
    //   echo '<pre>';
    //   print_r($PropertiesDetails);
    //   dd('');
      return view('properties.property-detail', ['Details' => $PropertiesDetails]);
    } else {
      return redirect()->back();
    }
  }



  public function foursquareData($latitude,$longitude)
  {
      $client = new Client();

      $response = $client->request('GET', 'https://api.foursquare.com/v3/places/search', [
          'headers' => [
              'Authorization' => 'fsq3gutziT0iquussQLqNEAbhvG5Db+d1SHsosOOiXOgin8=',
              'accept' => 'application/json',
          ],
          'query' => [
              'll' => $latitude . ',' . $longitude,
          ],
      ]);

      $responseData = $response->getBody()->getContents();
      $parsedData = json_decode($responseData, true);

      return $parsedData;
  }


  public function getNearbySchools($lat, $lon, $limit = 50, $distance = 7)
  {
      $client = new Client([
          'base_uri' => 'https://gs-api.greatschools.org/',
      ]);

      $apiKey = env('GREATSCHOOLS_API_KEY');  // retrieve this from your .env file

      try {
          $response = $client->request('GET', "nearby-schools", [
              'query' => [
                  'lat' => $lat,
                  'lon' => $lon,
                  'limit' => $limit,
                  'distance' => $distance
              ],
              'headers' => [
                  'Accept' => 'application/json',
                  'Content' => 'application/json',
                  'X-API-Key' => $apiKey
              ]
          ]);

          return $schools = json_decode($response->getBody()->getContents());

          // Then pass the $schools to your view or return as JSON

      } catch (\Exception $e) {
          // handle error here
          return response()->json(['error' => $e->getMessage()], 500);
      }
  }


public function electricity_wattbuy($propertyZipCode, $propertyAddress = null, $propertyCity = null, $propertyState = null, $propertyBedrooms = null, $propertyBathrooms = null)
{
    $client = new Client();

    // $wattkey = ""; // optional
    // $address = $propertyAddress; // mandatory city,state,zip,address any 1 PropertyAddress
    // $city = $propertyCity; // mandatory city,state,zip,address any 1 CityName
    // $state = $propertyState; // mandatory  city,state,zip,address any 1 StateOrProvince
    // $zip = $propertyZipCode; // mandatory city,state,zip,address any 1 PostalCode
    // $year_built = null; // optional -- number only
    // $bedrooms = $propertyBedrooms; // optional -- number only Bedrooms
    // $bathrooms = $propertyBathrooms; // optional -- number only BathroomsFull
    // $sq_ft = null; // optional -- number only
    // $stories = null; // optional -- number only
    // $house_type = 'house'; // optional -- only two options (house,apartment)

    $wattkey = ""; // optional
    $address = ""; // mandatory city,state,zip,address any 1 PropertyAddress
    $city = ""; // mandatory city,state,zip,address any 1 CityName
    $state = ""; // mandatory  city,state,zip,address any 1 StateOrProvince
    $zip = $propertyZipCode; // mandatory city,state,zip,address any 1 PostalCode
    $year_built = null; // optional -- number only
    $bedrooms = null; // optional -- number only Bedrooms
    $bathrooms = null; // optional -- number only BathroomsFull
    $sq_ft = null; // optional -- number only
    $stories = null; // optional -- number only
    $house_type = ''; // optional -- only two options (house,apartment)


    if($city != '' || $state !='' || $zip != '' ||  $address != '')
    {
        $request_url_params = '?';

        if($wattkey != '' || $wattkey != null)
        {
            $request_url_params .= "wattkey=$wattkey&";
        }

        if($address != '' || $address != null)
        {
            $request_url_params .= "address=$address&";
        }

        if($city != '' || $city != null)
        {
            $request_url_params .= "city=$city&";
        }

        if($state != '' || $state != null)
        {
            $request_url_params .= "state=$state&";
        }

        if($zip != '' || $zip != null)
        {
            $request_url_params .= "zip=$zip&";
        }

        if($year_built != '' || $year_built != null)
        {
            $request_url_params .= "year_built=$year_built&";
        }

        if($bedrooms != '' || $bedrooms != null)
        {
            $request_url_params .= "bedrooms=$bedrooms&";
        }

        if($bathrooms != '' || $bathrooms != null)
        {
            $request_url_params .= "bathrooms=$bathrooms&";
        }

        if($sq_ft != '' || $sq_ft != null)
        {
            $request_url_params .= "sq_ft=$sq_ft&";
        }

        if($stories != '' || $stories != null)
        {
            $request_url_params .= "stories=$stories&";
        }

        if($house_type != '' || $house_type != null)
        {
            $request_url_params .= "house_type=$house_type";
        }

        try {
            $response = $client->request('GET', "https://apis.wattbuy.com/v3/electricity/estimation".$request_url_params, [
                'headers' => [
                    'accept' => 'application/json',
                    'x-api-key' => 'DMUYdHOVgh5OxuDo3K1uJppbArpV93URaRr6Wd10', // replace with client api key
                ],
            ]);

            $response_data = json_decode($response->getBody());

            if($response_data)
            {
              $data['min_cost'] = $response_data->est_bill_amount->min;
              $data['min_usage'] = $response_data->est_usage / 12;

              return $data;
            }
            else{
              $data['min_cost'] = 0;
              $data['min_usage'] = 0;

              return $data;
            }


        } catch (RequestException $e) {
            $data['min_cost'] = 0;
            $data['min_usage'] = 0;

            return $data;
        }
    }
    else{
        return 'Please provide zip or address or city or state.';
    }
}


  public function ListProperty()
  {

    return view('properties.list-property');
  }


  //--------Property Listing -----------//

  public function PropertyListing()
  {
    $listProperties['Structure'] = StructureType::all();
    $listProperties['appliances'] = Appliances::all();
    $listProperties['basement'] = Basement::all();
    $listProperties['floor'] = Flooring::all();
    $listProperties['outDoor'] = OutDoor::all();
    $listProperties['cooling'] = CoolingType::all();
    $listProperties['heating'] = HeatingType::all();
    $listProperties['fuel'] = HeatingFuel::all();
    $listProperties['Interior'] = mlsInteriorFeatures::all();
    $listProperties['roof'] = Roof::all();
    $listProperties['archi'] = ArchitecturalStyle::all();
    $listProperties['parking'] = ParkingFeatures::all();
    $listProperties['view'] = PropertyView::all();
    $listProperties['Rooms'] = FeaturedRoom::all();
    $listProperties['Community'] = CommunityFeatures::all();
    $listProperties['Exterior'] = ExteriorFeatures::all();

    return view('properties.property-listing', compact('listProperties'));
  }

  //-------------store Property  -------------//

  public function PropertyStore(Request $request)
  {
    $price = intval(preg_replace('/[^\d.]/', '', $request->SellingPrice));
    $this->validate($request, [
      //'VirtualTourURL' => 'url',
      //'PropertyDirections' => 'required',
      //'hometype' => 'required',
      //'PropertySubType' => 'required',
      //'SellingPrice' => 'required',
     // 'HOAdues' => 'numeric',
      //'Beds' => 'required|numeric',
      //'FullBaths' => 'required|numeric',
      //'OneQuarter' => 'required|numeric',
      //'halfbaths' => 'required|numeric',
      //'threeQuarter' => 'required|numeric',
      //'Finishedsquarefeet' => 'required|numeric',
      //'LotSize' => 'required|numeric',
      //'YearBuilt' => 'required|numeric',
      //'TaxYear' => 'numeric',
      //'TaxAnnualAmount' => 'numeric',
      //'EffectiveYearBuilt' => 'numeric',
      //'TotalRooms' => 'numeric',
      //'RelatedWeb' => 'url',
      //'description' => 'required',
      //'photos' => 'required',
     // 'Address' => 'required',
      //'City' => 'required',
      //'State' => 'required',
      //'CountyOrParish' => 'required',
      //'zipCode' => 'required',
      //'Longitude' => 'required',
      //'Latitude' => 'required',
      //'Street' => 'required',
      //'MLSArea' => 'required',
      //'Topography' => 'required',
      //'PowerCompany' => 'required',
      //'SewerCompany' => 'required',
      //'HighSchoolDistrict' => 'required',
      //'highSchool' => 'required',
      //'MiddleOrJuniorSchool' => 'required',
      //'ElementarySchool' => 'required'
    ]);

    //============  properties table ===============//

    $property['IsMlsProperty'] = MLS_DATA;
    $property['PropetySellPrice'] = $price;
    $property['PropertyAddress'] = $request->Address;
    $property['CityName'] = $request->City;
    $property['Bedrooms'] = $request->Beds;
    $property['StateOrProvince'] = $request->State;
    $property['BathroomsFull'] = $request->FullBaths;
    $property['BathroomsHalf'] = $request->halfbaths;
    $property['PropertyArea'] = $request->Finishedsquarefeet;
    $property['PropertyDescription'] = $request->description;
    $property['PropertyLongitude'] = $request->Longitude;
    $property['PostalCode'] = $request->zipCode;
    $property['PropertyDirections'] = $request->PropertyDirections;
    $property['PropertyLatitude'] = $request->Latitude;
    $property['PublishStatus'] = $request->status;
    $dateTime = new DateTime();
    $randomNo = rand(1000, 9999);
    $listingId = rand(1314, 6547);
    $dateString = strtotime($dateTime->format(("Y-m-d H:i:s" . $randomNo)));
    $property['ListingKeyNumeric'] = $dateString;
    $property['ListingKey'] = 'ARIS' . $dateString;
    $property['ListingId'] = 'ARIS' . strtotime($dateTime->format(("Y-m-d H:i:s" . $listingId)));
    $property['user_id'] = getUserId();
    $property['PropertyStatus'] = 2; // 2: pending for admin's approval
    $property['created_at'] = Carbon::now();
    $property['OriginatingSystemModificationTimestamp'] = Carbon::now();
    //============  property Details table ===============//
    $propertiesDetails['StreetName'] = $request->Street;
    $propertiesDetails['MLSArea'] = $request->MLSArea;
    $propertiesDetails['Topography'] = $request->Topography;
    $propertiesDetails['SewerCompany'] = $request->SewerCompany;
    $propertiesDetails['PowerCompany'] = $request->PowerCompany;
    $propertiesDetails['HighSchool'] = $request->highSchool;
    $propertiesDetails['CountyOrParish'] = $request->CountyOrParish;
    $propertiesDetails['MiddleOrJuniorSchool'] = $request->MiddleOrJuniorSchool;
    $propertiesDetails['HighSchoolDistrict'] = $request->HighSchoolDistrict;
    $propertiesDetails['ElementarySchool'] = $request->ElementarySchool;
    $propertiesDetails['PropertySubType'] = $request->PropertySubType;
    $propertiesDetails['TaxYear'] = $request->TaxYear;
    $propertiesDetails['TaxAnnualAmount'] = $request->TaxAnnualAmount;
    $propertiesDetails['VirtualTourURLUnbranded'] = $request->VirtualTourURL;
    $propertiesDetails['BathroomsThreeQuarter'] = $request->threeQuarter;
    $propertiesDetails['BathroomsOneQuarter'] = $request->OneQuarter;
    $propertiesDetails['LotSizeSquareFeet'] = $request->LotSize;
    $propertiesDetails['YearBuilt'] = $request->YearBuilt;
    $propertiesDetails['YearBuiltEffective'] = $request->EffectiveYearBuilt;
    $propertiesDetails['HOAdues'] = $request->HOAdues;
    $propertiesDetails['Relatedwebsite'] = $request->RelatedWeb;
    $propertiesDetails['TotalRooms'] = $request->TotalRooms;
    $propertiesDetails['Status'] = $request->status;
    $propertiesDetails['created_at'] = Carbon::now();
    DB::beginTransaction();
    $message = '';
    try {
      //code...
      $propertyId = DB::table('mlsproperties')->insertGetId($property);
      $propertiesDetails['mlsproperties_id'] = $propertyId;
      DB::table('properties_detials')->insert($propertiesDetails);
      // propertyAppliance table - linking(pivot) table of appliances and property
      if (isset($request->appliance)) {
        $propertyAppliances = [];
        foreach ($request->appliance as $value) {
          $propertyAppliances[] = [
            'mlsappliances_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now(),
          ];
        }
        PropertyAppliances::insert($propertyAppliances); //done
      }
      // propertyBasement table - linking(pivot) table of Basement  and property
      if (isset($request->basement)) {
        $propertyBasement = [
          'mlsbasement_id' => $request->basement,
          'mlsproperties_id' => $propertyId,
          'created_at' => Carbon::now()
        ];
        PropertyBasement::insert($propertyBasement); //done
      }
      // PropertyStructureType table - linking(pivot) table of StructureType  and property
      if (isset($request->hometype)) {
        $propertyType = [
          'mlsstructure_types_id' => $request->hometype,
          'mlsproperties_id' => $propertyId,
          'created_at' => Carbon::now()

        ];
        PropertyStructureType::insert($propertyType); //done
      }
      // propertyArchitecturalStyle table - linking(pivot) table of ArchitecturalStyle  and property
      if (isset($request->ArchitecturalStyle)) {
        $propertyArchi = [
          'mlsarchitectural_styles_id' => $request->ArchitecturalStyle,
          'mlsproperties_id' => $propertyId,
          'created_at' => Carbon::now()
        ];
        PropertyArchitecturalStyle::insert($propertyArchi); //done
      }

      //---------Outdoor building Aminities ----------//
      if (isset($request->outDoor)) {
        $propertyOutdoor = [];
        foreach ($request->outDoor as $value) {
          $propertyOutdoor[] = [
            'outdoor_amenities_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyOutDoor::insert($propertyOutdoor); //done
      }

      //-------------Property Rooms ------------//

      if (isset($request->PropertyRooms)) {
        $propertyRooms = [];
        foreach ($request->PropertyRooms as $value) {
          $propertyRooms[] = [
            'featured_rooms_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyFeaturedRoom::insert($propertyRooms); //done
      }
      //-------------Property Floor------------//
      if (isset($request->floor)) {
        $propertyFloor = [];
        foreach ($request->floor as $value) {
          $propertyFloor[] = [
            'mlsfloorings_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyFlooring::insert($propertyFloor); //done
      }
      //-------------Property interior ------------//
      if (isset($request->interior)) {
        $propertyInterior = [];
        foreach ($request->interior as $value) {
          $propertyInterior[] = [
            'mls_interior_features_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyInterior::insert($propertyInterior); //done
      }
      //-------------Property community ------------//
      if (isset($request->community)) {
        $propertyCommunity = [];
        foreach ($request->community as $value) {
          $propertyCommunity[] = [
            'mlscommunity_features_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyCommunity::insert($propertyCommunity); //done
      }

      //-------------Property exteriorFeatures ------------//
      if (isset($request->exteriorFeatures)) {
        $propertyExterior = [];
        foreach ($request->exteriorFeatures as $value) {
          $propertyExterior[] = [
            'mlsexterior_features_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyExterior::insert($propertyExterior); //done
      }

      //-------------Property parking ------------//
      if (isset($request->parking)) {
        $propertyParking = [];
        foreach ($request->parking as $value) {
          $propertyParking[] = [
            'mlsparking_features_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyParking::insert($propertyParking); //done
      }
      //-------------Property roof ------------//
      if (isset($request->roof)) {
        $propertyRoof = [];
        foreach ($request->roof as $value) {
          $propertyRoof[] = [
            'mlsroofs_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyRoof::insert($propertyRoof); //done
      }

      //-------------Property propertyview ------------//
      if (isset($request->propertyview)) {
        $propertyView = [];
        foreach ($request->propertyview as $value) {
          $propertyView[] = [
            'mlsproperty_views_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertiesViews::insert($propertyView); //done
      }
      //-------------Property Cooling ------------//
      if (isset($request->propertycooling)) {
        $propertyCooling = [];
        foreach ($request->propertycooling as $value) {
          $propertyCooling[] = [
            'cooling_types_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyCoolingType::insert($propertyCooling); //done
      }
      //-------------Property Heating ------------//
      if (isset($request->propertyheating)) {
        $propertyHeating = [];
        foreach ($request->propertyheating as $value) {
          $propertyHeating[] = [
            'heating_types_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyHeatingType::insert($propertyHeating); //done
      }
      //-------------Property fuel ------------//
      if (isset($request->propertyfuel)) {
        $propertyFuel = [];
        foreach ($request->propertyfuel as $value) {
          $propertyFuel[] = [
            'heating_fuels_id' => $value,
            'mlsproperties_id' => $propertyId,
            'created_at' => Carbon::now()
          ];
        }
        PropertyHeatingFuel::insert($propertyFuel); //done
      }
      //--------------------    Media Uploads ------------------//
      if (isset($request->photos)) {
        //dd($request->photos);
        $input = $request->photos;
        $images = array();
        if ($files = $request->file('photos')) {
          //$uploadedImages = [];
          foreach ($files as $file => $value) {
            $uniqueName = str::uuid().'.'.$value->getClientOriginalExtension();
            Storage::disk('s3')->put('properties/'.$uniqueName, file_get_contents($value));
            $data['image'] = $uniqueName;
            //$uploadedImages[] = $uniqueName;
            /* Image for insertion*/
           $mediaId= DB::table('mlsmedia')->insertGetId([
              'mlsproperties_id' => $propertyId,
              // 'MediaKey' => generateRandomNumber('ARIS'.$value),
              // 'MediaObjectID' => generateRandomNumber($value),
              'MediaModificationTimestamp' => Carbon::now(),
              'Order'=> $file,
              'PreferredPhotoYN' => $file ? 0 : 1,
              'wherfrom' => 2,
              'status' => 1,
              'MediaURL' => implode("|", $data),
              'created_at' => Carbon::now()
            ]);
            Media::where('id',$mediaId)
                  ->update(
                      ['status'=>1,'s3buckettempurl'=>getS3BucketTempUrl($mediaId)]
                  );
          }
        }
      }
      $message = 'your property listing is pending, wait for a confirmation email.';
      //Mail::to(Auth::user()->email)->send(new NewPropertyListingEmail($data));
      DB::commit();
    } catch (\Exception $e) {

      DB::rollback();
      //dd($e);
      $message = $e->getMessage();

     // $message = 'somethig went wrong. Try again and select your property type from the hometype dropdown field';
    }
    return redirect()->back()->withSuccess($message);
  }

  public function FAirHousing()
  {
    return view('properties.fair-housing-eop');
  }

  public function PrivacyNotice()
  {
    return view('properties.homes-privacy-notice');
  }

  public function Terms()
  {
    return view('properties.terms-of-use');
  }
  public function licensing()
  {
    return view('properties.licensing');
  }
  public function ada_accessiblity()
  {
    return view('properties.ada_accessiblity');
  }
  public function Findagent()
  {
    return view('properties.find-an-agent');
  }

  // Fetching agents data on Agents Page
  public function Realestateagent(Request $request)
  {

      // $buyers = User::realEstateAgentBuyer();
      // $sellers = User::realEstateAgentSeller();
      // $both = User::realEstateAgentBoth();
      // $Agents = array(
      //   "buyers" => $buyers,
      //   "sellers" => $sellers,
      //   "both" => $both,
      //   "properties" => $properties
      // );
      $agents['properties'] = Properties::featuredclosedPrpty(5)->get()->toArray();
      $agents['allAgents'] = User::with('Education', 'Experience', 'Language', 'Question', 'Skills','role')
                                  ->where('status' , 1)
                                  ->whereHas('role', function ($q)  { $q->where('name', '=', 'Agent'); })
                                  ->orderBy('agent_sort_key', 'DESC')
                                  ->get()
                                  ->each(function ($user) {
                                      $user['review_statistics'] = $user->getReviewStatistics();
                                  })
                                  ->toArray();
                                  //  dd($agents['allAgents']);
      return view('properties.real-estate-agent',$agents);
    }

  // Fetching single agent data by agent Id
  public function Realestateagentdetail($id)
  {
        $userId  = getUserIdbySlug($id);
        if ($userId) {
            $data['reviews'] = Reviews::getAgentReviews( $userId);
           // dd($data['reviews'] );
            $data['agentTeams'] = AgentTeam::agentTeamById( $userId);
            $data['agentlistings'] = Properties::agentListingById( $userId);
            $data['username'] = User::select('id','first_name','user_dp','total_deals','deals_volume','highest_deal')
                                      ->where('id',$userId)->first()->toArray();
            //dd($data['username']['first_name']);
            $data['Agents'] = User::realEstateAgentById($userId);
            // dd($data['Agents']);
            return view('properties.real-estate-agent-detail', $data);
        }

    //dd($userId);
    // $Agents = User::realEstateAgentById($id);
    // return view('properties.real-estate-agent-detail', ['Agents' => $Agents]);

  }
  public function Realestate()
  {
    return view('properties.real-estate');
  }

  public function Ariscareer()
  {
    return view('properties.aris-career');
  }

  public function Applyjob()
  {
    return view('properties.apply-job');
  }

  public function Agentresourcecenter()
  {
    return view('properties.agent-resource-center');
  }

  public function Agentresourcecenterdetail()
  {
    return view('properties.agent-resource-center-detail');
  }

  public function Agentabouthomeloan()
  {
    return view('properties.agent-about-homeloan');
  }
  public function Buywitharis()
  {
    $data['page'] = $this->pagecontent->getbyid('1');
    // dd($data);
    // echo $data[0]['page'];
    return view('properties.buy-with-aris',$data);
  }
  public function homeValues()
  {
    $data['page'] = $this->pagecontent->getbyid('7');
    return view('properties.home-values',$data);
  }
  public function Arisapp()
  {
    return view('properties.aris-app');
  }
  public function Arishomevalues()
  {
    return view('properties.aris-home-values');
  }

  public function mortgageguide()
  {
    return view('properties.mortgage-guide');
  }

  public function getImages()
  {
    $media = Media::select('MediaURL')->where('MediaURL','like','%https://s3.amazonaws.com/mlsgrid/images/%')
    ->get();
        foreach ($media as $value)
        {
            $name = basename($value['MediaURL']);
            //echo $name;
            $path = "public/images/$name";
            if(file_exists($path)){
                echo "file already exist";
            }
            else
            {
                $ch = curl_init($value['MediaURL']);
                $fp = fopen($path, 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
            }
            }
  }
  public function Sellwitharis()
  {
    $data['page'] = $this->pagecontent->getbyid('8');
    return view('properties.sell-with-aris',$data);
  }
  public function Myhomeworth()
  {
    $data['page'] = $this->pagecontent->getbyid('6');
    return view('properties.my-home-worth',$data);
  }
  public function Myhomeworthdetail(Request $request)
  {
    $address = $request->address;
    return view('properties.my-home-worth-detail', ['address' => $address]);
  }

    // Code to store property leads in database
  public function StorePropertyLeads(Request $request)
  {
    $data = $request->all();
    if ($request->has('plan_to_sell_home')) {
        $name = $data['name'];
        $email = $data['email'];
        $mobile_number = $data['contact'];
        $address= $data['address'];
        $country = '';
        $state = $data['state'];
        $city = $data['city'];
        $postal_code ='';
        $leadType = $data['lead_type'];

      PropertyLeads::create([
        'address' => $data['address'],
        'city' => $data['city'],
        'state' => $data['state'],
        'name' => $data['name'],
        'email' => $data['email'],
        'contact' => $data['contact'],
        'plan_to_sell_home' => $data['plan_to_sell_home'],
        'property_type' => $data['property_type'],
        'any_agent' => $data['any_agent'],
        'lead_type' => $data['lead_type'],
      ]);
    // importing value to hupspot to create leads
    $url = "https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/$email";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
       "Authorization: Bearer " .env('HUbSPOT_TOKEN'),
       "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
    {
      "properties": [
        {
          "property": "firstname",
          "value": "$name"
        },
        {
          "property": "type",
          "value": "$leadType"
        },
        {
          "property": "phone",
          "value": "$mobile_number"
        },
        {
          "property": "address",
          "value": "$address"
        },
         {
          "property": "country",
          "value": "$country"
        },
        {
          "property": "city",
          "value": "$city"
        },
        {
          "property": "state",
          "value": "$state"
        },
        {
          "property": "zip",
          "value": "$postal_code"
        }
      ]
    }
    DATA;

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
      return redirect()->back()->withSuccess('Your request has been submitted, our agent will contact you soon!');
    } else {
        $name = $data['name'];
        $email = $data['email'];
        $last_name = '';
        $mobile_number = $data['contact'];
        $address= $data['address'];
        $country = '';
        $state = $data['state'];
        $city = $data['city'];
        $postal_code = '';
        $leadType = $data['lead_type'];
        $postal_code = '';
      PropertyLeads::create([
        'address' => $data['address'],
        'city' => $data['city'],
        'state' => $data['state'],
        'name' => $data['name'],
        'email' => $data['email'],
        'contact' => $data['contact'],
        'message' => $data['message'],
        'property_type' => $data['property_type'],
        'lead_type' => $data['lead_type'],
      ]);
 // importing value to hupspot to create leads
    $url = "https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/$email";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
        "Authorization: Bearer " .env('HUbSPOT_TOKEN'),
        "Content-Type: application/json",
    );
 curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA
        {
        "properties": [
            {
            "property": "firstname",
            "value": "$name"
            },
            {
                "property": "lastname",
                "value": "$last_name"
              },
            {
            "property": "type",
            "value": "$leadType"
            },
            {
            "property": "phone",
            "value": "$mobile_number"
            },
            {
            "property": "address",
            "value": "$address"
            },
            {
            "property": "country",
            "value": "$country"
            },
            {
            "property": "city",
            "value": "$city"
            },
            {
            "property": "state",
            "value": "$state"
            },
            {
            "property": "zip",
            "value": "$postal_code"
            }
        ]
        }
        DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
      return redirect()->back()->withSuccess('Your request has been submitted, our agent will contact you soon!');
    }
  }

  public function Sellarishomeworth(Request $request)
  {
    $type = StructureType::all();
    $address = $request->address;
    return view('properties.sellaris-homeworth', compact('address', 'type'));
  }

  public function Homesaleproceedscalculator()
  {
    $data['page'] = $this->pagecontent->getbyid('11');
    return view('properties.home-sale-proceeds-calculator',$data);
  }

  public function Mortgagecalculator()
  {
    return view('properties.mortgage-calculator');
  }

  public function Refinancecalculator()
  {
    return view('properties.refinance-calculator');
  }

  public function Amortizationcalculator()
  {
    return view('properties.amortization-calculator');
  }

  public function Affordabilitycalculator()
  {
    return view('properties.affordability-calculator');
  }

  public function Mortgagelearning()
  {
    $data['homebuyingguide'] = Blogs::where('b_type', 'mortgage-resource-center')
      ->get()->toArray();
    return view('properties.mortgage-learning', $data);
  }
  public function Lenderresource()
  {
    $data['homebuyingguide'] = Blogs::where('b_type', 'lender-resource-center')
      ->get()->toArray();
    return view('properties.lender-resource', $data);
  }

  public function Lenderdirectory()
  {
    return view('properties.lender-directory');
  }
  public function Mortgagerates()
  {
    return view('properties.mortgage-rates');
  }
  public function Refinancerates()
  {
    return view('properties.refinance-rates');
  }
  public function Lenderprofile()
  {
    return view('properties.lender-profile');
  }
  public function Lenderprofile2()
  {
    return view('properties.lender-profile-02');
  }
  public function Lenderprofile3()
  {
    return view('properties.lender-profile-03');
  }
  public function Lenderprofile4()
  {
    return view('properties.lender-profile-04');
  }
  public function Lenderprofile5()
  {
    return view('properties.lender-profile-05');
  }
  public function Lenderprofile6()
  {
    return view('properties.lender-profile-06');
  }

  public function Mortgageratelist(Request $request)
  {
    $search = $request['search'];
    $data['search'] = $search;
        //dd($request['search']);
        $query = User::where('status',1);
        //$data['userData'] = ;
        if (isset($search) && !empty($search)) {
            $query->where('address','LIKE',"%".$search."%");
            $query->orWhere('address2','LIKE',"%".$search."%");

        }
        //dd();
        $data['userData'] = $query
        ->with(["role" => function($q){
            $q->where('name', '=', 'Lender')->orWhere('name', '=', 'Loan Officer');
        }])
        ->simplePaginate(20);
    return view('properties.mortgage-rate-list',$data);
  }

  public function arismarketupdatenews1()
  {
    return view('properties.arismarketupdatenews-01');
  }
  public function arismarketupdatenews2()
  {
    return view('properties.arismarketupdatenews-02');
  }
  public function arismarketupdatenews3()
  {
    return view('properties.arismarketupdatenews-03');
  }
  public function arismarketupdatenews4()
  {
    return view('properties.arismarketupdatenews-04');
  }
  public function arismarketupdatenews5()
  {
    return view('properties.arismarketupdatenews-05');
  }
  public function arismarketupdatenews6()
  {
    return view('properties.arismarketupdatenews-06');
  }
  public function arismarketupdatenews7()
  {
    return view('properties.arismarketupdatenews-07');
  }
  public function arismarketupdatenews8()
  {
    return view('properties.arismarketupdatenews-08');
  }
  public function arismarketupdatenews9()
  {
    return view('properties.arismarketupdatenews-09');
  }

  public function agentresourcecenter1()
  {
    return view('properties.agent-resource-center-01');
  }
  public function agentresourcecenter2()
  {
    return view('properties.agent-resource-center-02');
  }
  public function agentresourcecenter3()
  {
    return view('properties.agent-resource-center-03');
  }
  public function agentresourcecenter4()
  {
    return view('properties.agent-resource-center-04');
  }
  public function agentresourcecenter5()
  {
    return view('properties.agent-resource-center-05');
  }
  public function agentresourcecenter6()
  {
    return view('properties.agent-resource-center-06');
  }
  public function agentresourcecenter7()
  {
    return view('properties.agent-resource-center-07');
  }
  public function agentresourcecenter8()
  {
    return view('properties.agent-resource-center-08');
  }
  public function agentresourcecenter9()
  {
    return view('properties.agent-resource-center-09');
  }
  public function alternativeanalysis1()
  {
    return view('properties.alternative-analysis-01');
  }
  public function alternativeanalysis2()
  {
    return view('properties.alternative-analysis-02');
  }
  public function alternativeanalysis3()
  {
    return view('properties.alternative-analysis-03');
  }
  public function alternativeanalysis4()
  {
    return view('properties.alternative-analysis-04');
  }
  public function alternativeanalysis5()
  {
    return view('properties.alternative-analysis-05');
  }
  public function alternativeanalysis6()
  {
    return view('properties.alternative-analysis-06');
  }
  public function Whychoosearis()
  {


    $data['page'] = $this->pagecontent->getbyid('2');
    // dd($data);
    // echo $data[0]['page'];
    return view('properties.why-choose-aris',$data);
  }
  public function Firsttimehomebuyer()
  {


    $data['page'] = $this->pagecontent->getbyid('4');
    $data['properties']  = Properties::featuredclosedPrpty(7)->get()->toArray();
    //dd($data);
    return view('properties.first-time-homebuyer',$data);
  }
  public function Homebuyingguide()
  {
    $data['page'] = $this->pagecontent->getbyid('3');
    $data['homebuyingguide'] = Blogs::where('b_type', 'home-buying-guide')
      ->get()->toArray();
    //dd( $data['homebuyingguide']);
    return view('properties.home-buying-guide', $data);
  }

  public function Sellingguide()
  {
    $data['page'] = $this->pagecontent->getbyid('10');
    $data['homebuyingguide'] = Blogs::where('b_type', 'home-selling-guide')
      ->get()->toArray();
    return view('properties.selling-guide', $data);
  }
  public function Partneragent()
  {
    return view('properties.partner-agent');
  }
  public function Housingmarketupdate()
  {
    return view('properties.housing-market-update');
  }
  public function Currenthomeowner()
  {
    $data['page'] = $this->pagecontent->getbyid('5');
    return view('properties.current-home-owner',$data);
  }

  // homepage navigation filters
  public function propertiesFilter(Request $request)
  {
    $data = $request->all();
    // dd($data['type']);
    if ($request->isMethod('GET')) {
      $homeType = Properties::HomeType();
      $properties = Properties::CommunitySearch($request);
      $Properties = array(
        "hometype" => $homeType,
        "community" => $properties,
      );
      return view('properties.our-community', ['properties' => $Properties]);
    }
    // dd($data['type']);
    // return view('properties.my-home-worth-detail');
  }
  public function comparemyoption()
  {
    $data['page'] = $this->pagecontent->getbyid('9');
    return view('properties.compare-my-option',$data);
  }

  // todays-mortgage-rates
  public function todaysmortgagerates()
  {
    $data['homebuyingguide'] = Blogs::where('b_type', 'present-mortgage-rates')
      ->get()->toArray();
    return view('properties.todays-mortgage-rates', $data);
  }

  // mortgage-or-buy
  public function mortgagebuy()
  {
    $data['homebuyingguide'] = Blogs::where('b_type', 'rent-or-buy-decision')
      ->get()->toArray();
    return view('properties.mortgage-or-buy', $data);
  }

  public function forum()
  {
    return view('properties.forum');
  }

  public function rent()
  {
    return view('properties.rent');
  }

  // // todays-mortgage-rates

  public function arismarketupdate()
  {
    $data['homebuyingguide'] = Blogs::where('b_type', 'housing-market-updates')
      ->get()->toArray();
    return view('properties.aris-market-update', $data);
  }
  public function favouriteProperty(Request $request)
  {
      $exist = FavoriteProperty::where(['properties_id' => $request['text'], 'user_id' => getUserId(), 'is_fav' => 1])->get();
      if(!$exist->isEmpty()){
          $query = FavoriteProperty::updateOrCreate(
                  ['properties_id' => $request['text'], 'user_id' => getUserId()],
                  ['is_fav' => 0]
              );
              if($query) {
                  $data['return'] = false;
                  $data['message'] = 'You have successfully remove the property from your favorite list.';
                  return response()->json($data);
              }else{
                  $data['return'] = false;
                  $data['message'] = 'We can\'t add this property to your favorite list.';
                  return response()->json($data);
              }

      }else{
          FavoriteProperty::updateOrCreate(['properties_id' => $request['text'], 'user_id' => getUserId()]
          ,['is_fav' => 1]);

          $data['return'] = true;
          $data['message'] = 'You have successfully added the property to your favorite list.';
          return response()->json($data);
      }
  }

    public function deleteFavourite(Request $request)
    {
      $id = $request->id;
      $unfavorite = FavoriteProperty::where(['properties_id' => $id, 'user_id' =>getUserId()])->forceDelete();
      // return $contact;
      $notification = array('message' => 'Inquiry Deleted Successfully ! ', 'alert-type' => 'success');
      return redirect()->back()->with($notification);
        // $property = FavoriteProperty::where([
        //     ['properties_id', '=', $id],
        //     ['user_id', '=', getUserId()],
        // ]);
        // $property->update(['is_fav' => '0']);
    }
    public function skzfav(Request $request)
    {
       $exist = FavoriteProperty::where(['properties_id' => $request['text'], 'user_id' => getUserId(), 'is_fav' => 1])->get();
        if(!$exist->isEmpty()){
             $query = FavoriteProperty::updateOrCreate(
                    ['properties_id' => $request['text'], 'user_id' => getUserId()],
                    ['is_fav' => 0]
                );
                if($query) {
                    $data['return'] = false;
                    $data['message'] = 'You have successfully remove the property from your favorite list.';
                    return response()->json($data);
                }else{
                    $data['return'] = false;
                    $data['message'] = 'We can\'t add this property to your favorite list.';
                    return response()->json($data);
                }

        }else{
            FavoriteProperty::updateOrCreate(['properties_id' => $request['text'], 'user_id' => getUserId()]
            ,['is_fav' => 1]);

            $data['return'] = true;
            $data['message'] = 'You have successfully added the property to your favorite list.';
            return response()->json($data);
        }
    }

    public function shareListing(Request $request)
    {
      if(isUserLoggedIn()){

        $data['properties'] = Properties::where('id',$request['property_id'])->get()->toArray();
        $data['userData'] = Auth::user();
        $data['userMessage'] = $request['message'];
        $data['email'] = $request['email'];

        ShareListingEmail::dispatch($data)->delay(now()->addSeconds(10));
        $data['return'] = true;
        $data['message'] = "Property Shared Successfully";
        return response()->json($data);
      }
      else{

          $data['message'] = 'Ensure you are logged in prior to submitting your message.';
          return response()->json($data);
      }
    }


} //clss here
