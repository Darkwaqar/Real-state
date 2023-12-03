<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Events\UserNotification;
use App\Jobs\BuyerLeadJob;
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
use App\Models\SchoolSubrating;
use App\Models\Schools;
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
use App\Jobs\SaveSchoolDetailsJob;
use App\Jobs\SellerLeadJob;
use App\Models\HouseCanaryPropertyData;
use App\Models\Newsletter;
use App\Models\Reviews;
use App\Models\Notifications;
use App\Models\OpenHouseProperties;
use App\Models\RecentlyViewedProperties;
use App\Models\SaveSearches;
use Illuminate\Support\Facades\Http;
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
    $content = $this->pagecontent->getbyid('22');

    // dd($data['page']);
    $properties = Properties::propertiesSeatle(1, 'Active'); // passing 1 as parameter is for mls property
    $FeaturedProperties = Properties::HomepagePrpty(0, 'Sold')->get()->toArray(); //passing 0 as parameter, is for featured property
    $Aris360PrimeProperties = Properties::Aris360PrimeProperties()->get()->toArray(); //passing 0 as parameter, is for featured property
    $agents = User::with('Education', 'Experience', 'Language', 'Question', 'Skills', 'role')
      ->where('status', 1)
      ->whereHas('role', function ($q) {
        $q->where('name', '=', 'Agent');
      })
      ->orderBy('agent_sort_key', 'DESC')
      ->get()
      ->each(function ($user) {
        $user['review_statistics'] = $user->getReviewStatistics();
      })
      ->toArray();
    //  dd($Aris360PrimeProperties);
    //$FeaturedProperties = Properties::HomeFeatured();
    $categories = StructureType::countCategories(); // //dd($categories);
    $AllProperties = array(
      "properties" => $properties,
      "featured" => $FeaturedProperties,
      "Aris360PrimeProperties" => $Aris360PrimeProperties,
      "cat" => $categories,
      "allAgents" => $agents,
      "page_data" => $content,
    );

    // dd($AllProperties['page_data']);

    return view('properties.home', ['properties' => $AllProperties]);
  }

  //--------------------------- Our Community Mls Page --------------------//

  public function OurCommunity(Request $request)
  {
    $search = [];
    $bounds = [];
    if ($request->search || $request->zip) {
      $search['search'] = $request->search;
      $search['zip'] = $request->zip;
      $search['rent'] = $request->rent;
      $search['savedSearch'] = $request->search_criteria;
    } else {
      $defaultBounds = [
        'northeast' => [
          'lat' => 47.86988771787181,
          'lng' => -121.68765871972656,
        ],
        'southwest' => [
          'lat' => 47.36259555947764,
          'lng' => -123.05408328027343,
        ],
      ];
      $bounds = $defaultBounds;
    }
    $pulicshStatus = Properties::select('PublishStatus')->distinct()->orderBy('PublishStatus')->get()->toArray();
    // Iterate through the array and modify the values
    foreach ($pulicshStatus as &$status) {
      if ($status["PublishStatus"] === "Closed" || $status["PublishStatus"] === "Sold") {
        $status["PublishStatus"] = "Sold";
      }
    }
    // Remove duplicate values
    $pulicshStatus = array_unique($pulicshStatus, SORT_REGULAR);

    // Reset array keys after removing duplicates
    $pulicshStatus = array_values($pulicshStatus);
    $properties = Properties::CommunityDefault($request, $bounds);
    $count = Properties::CountProperties($request, $bounds);
    if (Auth::check()) {

      $savedSearch['searchCriteria'] = json_decode(base64_decode($request->query('search_criteria')), true);
    } else {
      $savedSearch = '';
    }

    //dd($savedSearch);
    $Properties = array(
      "community" => $properties,
      "map" => addslashes(json_encode($properties->toArray())),
      "propertiesCount" => $count,
      //   "map" => addslashes(json_encode($map->toArray())),
      "pulicshStatus" => $pulicshStatus,
      "search" => $search,
      "savedSearch" => json_encode($savedSearch)
    );
    return view('properties.our-community', ['properties' => $Properties]);
  }

  //--------------------------- Our Community  Mls Search Filter, Sorting  --------------------//
  public function getproperties(Request $request)
  {

    try {
      if ($request->ajax()) {
        $published = [];
        $mainData = [];
        $query = Properties::select('mlsproperties.id', 'mlsproperties.ListingKeyNumeric', 'mlsproperties.PropertyName', 'mlsproperties.ListOfficeName', 'mlsproperties.PropetySellPrice', 'mlsproperties.Bedrooms', 'mlsproperties.BathroomsFull', 'mlsproperties.PropertyAddress', 'mlsproperties.PropertyArea', 'mlsproperties.PropertyAreaUnits', 'mlsproperties.PropertyDescription', 'mlsproperties.PropertyLatitude', 'mlsproperties.PropertyLongitude', 'mlsproperties.PublishStatus', 'mlsmedia.MediaURL', 'mlsmedia.s3buckettempurl', 'property_structure_types.mlsstructure_types_id')
          ->join('mlsmedia', 'mlsproperties.id', '=', 'mlsmedia.mlsproperties_id')
          ->join('property_structure_types', 'mlsproperties.id', '=', 'property_structure_types.mlsproperties_id')
          ->join('properties_detials', 'mlsproperties.id', '=', 'properties_detials.mlsproperties_id')
          ->where('mlsmedia.PreferredPhotoYN', '=', '1')
          ->where('mlsproperties.PropetySellPrice', '>', 9999)
          ->groupBy('mlsproperties.id');

        if ($request->has('coordinates')) {
          $data = $request->input('coordinates'); // Use input() method instead of post()
          //\Log::info($data);
          foreach ($data as $coordinate) {
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
      } //ajax here
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => $e->getMessage(),
      ]);
    }
  }
  public function PropertySearch(Request $request)
  {
    if ($request->ajax()) {
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
        'mlsmedia.MediaURL',
        'mlsmedia.s3buckettempurl',
        'property_structure_types.mlsstructure_types_id',
        'mlsproperties.created_at',
      )
        ->join('mlsmedia', 'mlsproperties.id', '=', 'mlsmedia.mlsproperties_id')
        ->join('property_structure_types', 'mlsproperties.id', '=', 'property_structure_types.mlsproperties_id')
        ->join('properties_detials', 'mlsproperties.id', '=', 'properties_detials.mlsproperties_id')
        ->where('mlsproperties.MlgCanView', '=', 1)
        ->where('mlsmedia.PreferredPhotoYN', '=', '1');


      if ($request->sort == 'Recomended' || $request->sort == null) {
        $query->orderBy('mlsproperties.ListingContractDate', 'DESC')->orderBy('mlsproperties.created_at', 'DESC');
      }

      $query->when($request->search, function ($query) use ($request) {
        $query->orderByRaw("CASE
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 1
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 2
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 3
                            WHEN mlsproperties.PropertyAddress LIKE ? THEN 4
                            ELSE 5
                        END", [$request->search, $request->search . '%', '%' . $request->search . '%', '%' . $request->search]);
      });



      if (isset($request->polygonCoordinates) && !empty($request->polygonCoordinates)) {
        $query->when($request->polygonCoordinates, function ($query) use ($request) {
          $polygonCoordinate = $request->input('polygonCoordinates');
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

      if (isset($request->zip) && !empty($request->zip)) {
        $query->when($request->zip, function ($query) use ($request) {
          $query->where('mlsproperties.PostalCode', $request->zip);
        });
      } else {
        $query->when($request->address, function ($query) use ($request) {
          $query->where('mlsproperties.CityName', $request->address);
        });
      }


      $query->when($request->rent, function ($query) use ($request) {
        $query->where('mlsproperties.prprtyRentOrsale', 'Rent');
      });



      $query->when($request->description, function ($query) use ($request) {
        $query->where('mlsproperties.PropertyDescription', 'LIKE', '%' . $request->description . "%");
      });


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

      if ($request->has('coordinates') && !empty($request->input('coordinates'))) {
        $data = $request->input('coordinates'); // Use input() method instead of post()
        //\Log::info($data);
        foreach ($data as $coordinate) {
          $latitudes[] = $coordinate['lat'];
          $longitudes[] = $coordinate['lng'];
        }
        $query->whereIn('mlsproperties.PropertyLatitude', $latitudes)
          ->whereIn('mlsproperties.PropertyLongitude', $longitudes);
      }

      $query->when($request->zoomCoordinates, function ($query) use ($request) {
        $zoomCoordinates = $request->input('zoomCoordinates');
        // dd($zoomCoordinates['southwestLat']);
        $swLng = $zoomCoordinates['southwestLng'];
        $swLat = $zoomCoordinates['southwestLat'];
        $neLng = $zoomCoordinates['northeastLng'];
        $neLat = $zoomCoordinates['northeastLat'];

        $query->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_GEOMFROMTEXT(?))', [
          "POLYGON(($swLng $swLat, $swLng $neLat, $neLng $neLat, $neLng $swLat, $swLng $swLat))"
        ]);
      });

      $query2 = Properties::select('id')->distinct('PropertyAddress')
        ->join('mlsmedia', 'mlsproperties.id', '=', 'mlsmedia.mlsproperties_id')
        ->join('property_structure_types', 'mlsproperties.id', '=', 'property_structure_types.mlsproperties_id')
        ->join('properties_detials', 'mlsproperties.id', '=', 'properties_detials.mlsproperties_id')
        ->where('mlsproperties.MlgCanView', '=', 1)
        ->where('mlsmedia.PreferredPhotoYN', '=', 1);


      if ($request->sort == 'Recomended' || $request->sort == null) {
        $query2->orderBy('mlsproperties.ListingContractDate', 'DESC')->orderBy('mlsproperties.created_at', 'DESC');
      }

      $query2->when($request->search, function ($query2) use ($request) {
        $query2->orderByRaw("CASE
                                WHEN mlsproperties.PropertyAddress LIKE ? THEN 1
                                WHEN mlsproperties.PropertyAddress LIKE ? THEN 2
                                WHEN mlsproperties.PropertyAddress LIKE ? THEN 3
                                WHEN mlsproperties.PropertyAddress LIKE ? THEN 4
                                ELSE 5
                            END", [$request->search, $request->search . '%', '%' . $request->search . '%', '%' . $request->search]);
      });



      if (isset($request->polygonCoordinates) && !empty($request->polygonCoordinates)) {
        $query2->when($request->polygonCoordinates, function ($query2) use ($request) {
          $polygonCoordinate = $request->input('polygonCoordinates');
          $latitudes = array_column($polygonCoordinate, 'lat');
          $longitudes = array_column($polygonCoordinate, 'lng');

          $polygonCoordinates = [];
          foreach ($latitudes as $index => $latitude) {
            $longitude = $longitudes[$index];
            $polygonCoordinates[] = $longitude . ' ' . $latitude;
          }
          $polygonCoordinates[] = $longitudes[0] . ' ' . $latitudes[0];

          $polygon = 'POLYGON((' . implode(',', $polygonCoordinates) . '))';

          $query2->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_POLYGONFROMTEXT(?))', [$polygon]);
        });
      }

      if (isset($request->zip) && !empty($request->zip)) {
        $query2->when($request->zip, function ($query2) use ($request) {
          $query2->where('mlsproperties.PostalCode', $request->zip);
        });
      } else {
        $query2->when($request->address, function ($query2) use ($request) {
          $query2->where('mlsproperties.CityName', $request->address);
        });
      }


      $query2->when($request->rent, function ($query2) use ($request) {
        $query2->where('mlsproperties.prprtyRentOrsale', 'Rent');
      });



      $query2->when($request->description, function ($query2) use ($request) {
        $query2->where('mlsproperties.PropertyDescription', 'LIKE', '%' . $request->description . "%");
      });


      $query2->when($request->bed, function ($query2) use ($request) {
        if (($request->bed !== null && is_numeric($request->bed))) {
          $query2->where('mlsproperties.Bedrooms', '>=', $request->bed);
        }
      });

      $query2->when($request->bath, function ($query2) use ($request) {
        if (($request->bath !== null && is_numeric($request->bath))) {
          $query2->where('mlsproperties.BathroomsFull', '>=', $request->bath);
        }
      });

      $query2->when($request->min || $request->max, function ($query2) use ($request) {
        $query2->whereBetween('mlsproperties.PropetySellPrice', [$request->min, $request->max]);
      });

      $query2->when($request->home, function ($query2) use ($request) {
        $query2->whereIn('property_structure_types.mlsstructure_types_id', $request->home);
      });

      $query2->when($request->home_type, function ($query2) use ($request) {
        $query2->where('property_structure_types.mlsstructure_types_id', $request->home_type);
      });

      $query2->when($request->floor, function ($query2) use ($request) {
        $query2->where('properties_detials.StoriesTotal', '>=', $request->floor);
      });

      $query2->when($request->parking, function ($query2) use ($request) {
        $query2->where('properties_detials.ParkingTotal', '>=', $request->parking);
      });

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
        $query2->where('mlsproperties.PublishStatus', '=', 'Active');
      }

      $query2->when($request->min_area || $request->max_area, function ($query2) use ($request) {
        $query2->whereBetween('mlsproperties.PropertyArea', [$request->min_area, $request->max_area]);
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
        $query2->orderByRaw($sortOptions[$request->sort]);
      }

      if ($request->has('coordinates') && !empty($request->input('coordinates'))) {
        $data = $request->input('coordinates'); // Use input() method instead of post()
        //\Log::info($data);
        foreach ($data as $coordinate) {
          $latitudes[] = $coordinate['lat'];
          $longitudes[] = $coordinate['lng'];
        }
        $query2->whereIn('mlsproperties.PropertyLatitude', $latitudes)
          ->whereIn('mlsproperties.PropertyLongitude', $longitudes);
      }

      $query2->when($request->zoomCoordinates, function ($query2) use ($request) {
        $zoomCoordinates = $request->input('zoomCoordinates');
        // dd($zoomCoordinates['southwestLat']);
        $swLng = $zoomCoordinates['southwestLng'];
        $swLat = $zoomCoordinates['southwestLat'];
        $neLng = $zoomCoordinates['northeastLng'];
        $neLat = $zoomCoordinates['northeastLat'];

        $query2->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_GEOMFROMTEXT(?))', [
          "POLYGON(($swLng $swLat, $swLng $neLat, $neLng $neLat, $neLng $swLat, $swLng $swLat))"
        ]);
      });

      //for getting raw query

      // $rawQuery = $query->toSql();
      // $bindings = $query->getBindings();
      // // Replace the question mark with the actual value
      // foreach ($bindings as $binding) {
      //     $rawQuery = preg_replace('/\?/', "'" . $binding . "'", $rawQuery, 1);
      // }
      // dd($rawQuery);

      $mainData['count'] = $query2->count();
      $properties = $query->groupBy('mlsproperties.PropertyAddress')->limit(200)->get();

      $mainData['mapData'] = json_encode($properties->toArray());
      $mainData['pagination'] = $properties;
      return response($mainData);
    }

    if ($request->isMethod) {
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

  public function PropertyDetail(Request $request, $id)
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
      $Lists = Properties::PropertiesListedMLS($properties['PostalCode'], $properties['CityName']);
      $SimilarProperties = Properties::SimilarProperties($properties['PostalCode'], $properties['CityName']);
      $countMedia = Media::mediaCount($id);
      $topThree = Media::topThree($id);
      $propertyMedia = Media::ProMedia($id);
      $detailFav = Properties::find($id)->favoriteProperty;
      if ($properties['user_id'] != 0) {
        $Agent = User::realEstateAgentByUserId($properties['user_id']);
      } else {
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
        "countMedia" => $countMedia,
        "electricity" => $this->electricity_wattbuy($properties->PostalCode, $properties->PropertyAddress, $properties->CityName, $properties->StateOrProvince, $properties->Bedrooms, $properties->BathroomsFull),
        "agent_details" => $Agent,
      );

      // $property = HouseCanaryPropertyData::where('property_id', $id)->first();
      //   if ($property) {
      //     $PropertiesDetails['canaryData'][0] =
      //       [
      //         'property/block_crime' => json_decode($property['property_block_crime'], true),
      //         'property/details' => json_decode($property['property_details'], true),
      //         'property/fema_disaster_area' => json_decode($property['property_fema_disaster_area'], true),
      //         'property/flood' => json_decode($property['property_flood'], true),
      //         'property/geo_features' => json_decode($property['property_geo_features'], true),
      //         'property/rental_value' => json_decode($property['property_rental_value'], true),
      //         'property/sales_history' => json_decode($property['property_sales_history'], true),
      //         //'property/school' => json_decode($property['property_school'], true),
      //         'property/tax_history' => json_decode($property['property_tax_history'], true),
      //         'property/value' => json_decode($property['property_value'], true),
      //         'address_info' => json_decode($property['property_address_info'], true),
      //     ];
      //    } else {
      // Property data is not available in the local database, fetch from HouseCanary API
      $PropertiesDetails['canaryData'] = getHouseCanaryResult($properties->PropertyAddress, $id);
      //   }



      //dd($PropertiesDetails['canaryData']);
      // $PropertiesDetails['canaryData'] = '';
      // $resultCanary = getHouseCanaryResult($properties->PropertyAddress,$id);

      // if ($resultCanary != false) {
      //   $PropertiesDetails['canaryData'] = $resultCanary;
      // }
      //dd($properties);

      if (env('CUSTOM_API_ENABLED')) {
        $parsedData = $this->foursquareData($properties->PropertyLatitude, $properties->PropertyLongitude);
        $categoriesData = [];
        // Only process data if it is properly parsed and 'results' key exists
        // if ($parsedData !== null && json_last_error() === JSON_ERROR_NONE && array_key_exists('results', $parsedData)) {
        if ($parsedData !== null && array_key_exists('results', $parsedData)) {

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
      } else {
        $categoriesData = [];
      }
      $PropertiesDetails['fourSquareData'] = $categoriesData;

      // $PropertiesSchoolDetails = Schools::with('schoolRating')->where('property_id',$id)->get()->toArray();

      // if($PropertiesSchoolDetails){

      //   // Now, when you access the 'schoolRating' relationship, it will contain only the selected columns from the 'SchoolSubrating' model.
      //   $i = 0;
      //   foreach ($PropertiesSchoolDetails as $key=>$school) {
      //     foreach ($school['school_rating'] as $key=>$innerSchool) {
      //       if($key == "test-scores-rating" || $key == "college-readiness-rating" || $key == "equity-rating" || $key == "academic-progress-rating" || $key == "student-growth-rating" || $key == "attendance-flag" || $key == "discipline-flag")
      //       {
      //         if($innerSchool != '[]')
      //         {
      //           $PropertiesSchoolDetails[$i]['sub_rating'][$key] = convertObjectsToArray(json_decode($innerSchool));
      //         }
      //       }
      //     }
      //     $i++;

      //   }
      //   $PropertiesDetails['SchoolDetails'] = $PropertiesSchoolDetails;
      // }else{
      //     $PropertiesSchoolDetails =  greatSchool($properties->PropertyLatitude,$properties->PropertyLongitude,$id);
      //     $PropertiesDetails['SchoolDetails'] = [];
      //     // $i = 0;
      //     if(isset($PropertiesSchoolDetails['schools']) && count($PropertiesSchoolDetails['schools']) > 0)
      //     {
      //         // foreach($PropertiesSchoolDetails['schools'] as $schoolListing)
      //         // {
      //         //     $subratting = greatSchoolSubrating($schoolListing['universal-id']);
      //         //     foreach($subratting as $key=>$innerSubratting){
      //         //         if(isset($innerSubratting) && !empty($innerSubratting))
      //         //         {
      //         //             if($key == 'status' || $key == 'error' || $key == 'message')
      //         //             {
      //         //                 $PropertiesSchoolDetails['schools'][$i]['sub_rating'] = [];
      //         //                 continue;
      //         //             }
      //         //             else
      //         //             {
      //         //                 $PropertiesSchoolDetails['schools'][$i]['sub_rating'][$key] = $innerSubratting;
      //         //             }
      //         //         }
      //         //     }
      //         //     $i++;
      //         // }
      //         $PropertiesDetails['SchoolDetails'] = $PropertiesSchoolDetails['schools'];
      //     }
      //  }
      // openHouse($properties->ListingId,$properties->id);
      // $today = Carbon::now()->toDateString();
      // $PropertiesDetails['openHouse'] = OpenHouseProperties::where('property_id', $id)
      //   ->whereDate('openHouseDate', '>=', $today) // Filter for dates equal to or greater than today
      //   ->orderBy('openHouseDate', 'ASC') // Order by open house date in ascending order
      //   ->first()->toArray();




      // Check if the user is authenticated
      if (auth()->check()) {
        $userId = auth()->user()->id;
      } else {
        $userId = null;
      }

      RecentlyViewedProperties::updateOrCreate(
        ['user_id' => $userId, 'property_id' => $properties->id],
        ['updated_at' => now()]
      );


      $PropertiesDetails['recentlyViewedProperties'] = RecentlyViewedProperties::with('property', 'property.prefferedMedia', 'property.favoriteProperty', 'property.StructureType', 'user')
        ->where(function ($query) use ($userId) {
          $query->where('user_id', $userId)
            ->orWhereNull('user_id');
        })
        ->whereHas('property', function ($query) use ($properties) {
          $query->where('PostalCode', $properties->PostalCode);
          $query->where('CityName', $properties->CityName);
          $query->where('PublishStatus', $properties->PublishStatus);
        })
        ->where('property_id', '!=', $properties->id)
        ->take(3)->orderBy('updated_at', 'DESC')
        ->get()->toArray();
      // dd($PropertiesDetails['recentlyViewedProperties']);
      $PropertiesDetails['SchoolDetails'] = [];
      //dd($PropertiesDetails['recentlyViewedProperties']);
      if (env('GREAT_API_ENABLED')) {
        $PropertiesSchoolDetails = greatSchool($properties->PropertyLatitude, $properties->PropertyLongitude, $id);
        if (isset($PropertiesSchoolDetails) && count($PropertiesSchoolDetails) > 0) {
          $PropertiesDetails['SchoolDetails'] = $PropertiesSchoolDetails;
        }
      }

      return view('properties.property-detail', ['Details' => $PropertiesDetails]);
    } else {
      return view('properties.404notfound');
    }
  }



  public function foursquareData($latitude, $longitude)
  {
    $client = new Client();

    $response = $client->request('GET', 'https://api.foursquare.com/v3/places/search', [
      'headers' => [
        //   'Authorization' => 'fsq3gutziT0iquussQLqNEAbhvG5Db+d1SHsosOOiXOgin8=',
        'Authorization' => 'fsq3pWC1bj05shBo1tiA+HCkM8So2sBhr6p57l1gNGvjDTQ=',
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


    if ($city != '' || $state != '' || $zip != '' || $address != '') {
      $request_url_params = '?';

      if ($wattkey != '' || $wattkey != null) {
        $request_url_params .= "wattkey=$wattkey&";
      }

      if ($address != '' || $address != null) {
        $request_url_params .= "address=$address&";
      }

      if ($city != '' || $city != null) {
        $request_url_params .= "city=$city&";
      }

      if ($state != '' || $state != null) {
        $request_url_params .= "state=$state&";
      }

      if ($zip != '' || $zip != null) {
        $request_url_params .= "zip=$zip&";
      }

      if ($year_built != '' || $year_built != null) {
        $request_url_params .= "year_built=$year_built&";
      }

      if ($bedrooms != '' || $bedrooms != null) {
        $request_url_params .= "bedrooms=$bedrooms&";
      }

      if ($bathrooms != '' || $bathrooms != null) {
        $request_url_params .= "bathrooms=$bathrooms&";
      }

      if ($sq_ft != '' || $sq_ft != null) {
        $request_url_params .= "sq_ft=$sq_ft&";
      }

      if ($stories != '' || $stories != null) {
        $request_url_params .= "stories=$stories&";
      }

      if ($house_type != '' || $house_type != null) {
        $request_url_params .= "house_type=$house_type";
      }

      try {
        $response = $client->request('GET', "https://apis.wattbuy.com/v3/electricity/estimation" . $request_url_params, [
          'headers' => [
            'accept' => 'application/json',
            'x-api-key' => 'DMUYdHOVgh5OxuDo3K1uJppbArpV93URaRr6Wd10', // replace with client api key
          ],
        ]);

        $response_data = json_decode($response->getBody());

        if ($response_data) {
          $data['min_cost'] = $response_data->est_bill_amount->min;
          $data['min_usage'] = $response_data->est_usage / 12;

          return $data;
        } else {
          $data['min_cost'] = 0;
          $data['min_usage'] = 0;

          return $data;
        }
      } catch (RequestException $e) {
        $data['min_cost'] = 0;
        $data['min_usage'] = 0;

        return $data;
      }
    } else {
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
    //dd( $request->all());
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
    $property['MlgCanView'] = 1;
    if ($request->rent == 'Rent') {
      $property['PublishStatus'] = 'Rent';
    } else {
      $property['PublishStatus'] = $request->status;
    }
    $property['prprtyRentOrsale'] = $request->rent;
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
    $propertiesDetails['MlgCanView'] = 1;
    $propertiesDetails['TotalRooms'] = $request->TotalRooms;
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
      $selected['ArchitecturalStyle'] = $request->input('ArchitecturalStyle', []);
      $findProperty->ArchitecturalStyle()->sync($selected['ArchitecturalStyle']);


      //---------Outdoor building Aminities ----------//
      $selected['outDoor'] = $request->input('outDoor', []);
      $findProperty->outdoorAmenities()->sync($selected['outDoor']);


      //-------------Property Rooms ------------//
      $selected['PropertyRooms'] = $request->input('PropertyRooms', []);
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

      //structure
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
      Mail::to(Auth::user()->email)->send(new NewPropertyListingEmail($data));
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

      // $message = 'somethig went wrong. Try again and select your property type from the hometype dropdown field';
    }
    return redirect()->back()->withSuccess($message);
  }

  public function propertyEdit(Properties $property)
  {
    $cehcking = Properties::where(function ($query) {
      $userId = getUserId();
      $fullName = Auth::user()->first_name . ' ' . Auth::user()->last_name;

      $query->where('user_id', $userId)
        ->orWhere('ListAgentFullName', $fullName);
    });
    if ($cehcking) {

      $data['property'] = $property->load(
        'propertyDetail',
        'WaterSource',
        'ParkingFeature',
        'PropertyRoof',
        'PropertyView',
        'Utilities',
        'ExteriorFeaturs',
        'Interior',
        'StructureType',
        'propertyMedia',
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
        'heatingFuel'
      );
      $data['Structure'] = StructureType::all();
      $data['appliances'] = Appliances::all();
      $data['basement'] = Basement::all();
      $data['floor'] = Flooring::all();
      $data['outDoor'] = OutDoor::all();
      $data['cooling'] = CoolingType::all();
      $data['heating'] = HeatingType::all();
      $data['fuel'] = HeatingFuel::all();
      $data['Interior'] = mlsInteriorFeatures::all();
      $data['roof'] = Roof::all();
      $data['archi'] = ArchitecturalStyle::all();
      $data['parking'] = ParkingFeatures::all();
      $data['view'] = PropertyView::all();
      $data['Rooms'] = FeaturedRoom::all();
      $data['Community'] = CommunityFeatures::all();
      $data['Exterior'] = ExteriorFeatures::all();
      //dd($data['property']);
      return view('properties.edit-properties', $data);
    } else {
      return view('properties.404notfound');
    }
  }

  public function storeProperty(Request $request, )
  {
    $propertyId = Properties::find($request->propertyId);
    $price = intval(preg_replace('/[^\d.]/', '', $request->SellingPrice));

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
    $property['MlgCanView'] = 1;
    if ($request->rent == 'Rent') {
      $property['PublishStatus'] = 'Rent';
    } else {
      $property['PublishStatus'] = $request->status;
    }
    $property['prprtyRentOrsale'] = $request->rent;
    $property['updated_at'] = Carbon::now();

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
    $propertiesDetails['MlgCanView'] = 1;
    $propertiesDetails['Status'] = $request->status;
    $propertiesDetails['updated_at'] = Carbon::now();
    DB::beginTransaction();
    $message = '';
    try {
      //code...
      DB::table('mlsproperties')->where('id', $request->propertyId)->update($property);

      // Update the property details record
      DB::table('properties_detials')->where('mlsproperties_id', $request->propertyId)->update($propertiesDetails);
      // propertyAppliance table - linking(pivot) table of appliances and property
      $selected['appliances'] = $request->input('appliance', []);
      $propertyId->appliances()->sync($selected['appliances']);

      //basement
      $selected['basement'] = $request->input('basement', []);
      $propertyId->basement()->sync($selected['basement']);

      // propertyArchitecturalStyle table - linking(pivot) table of ArchitecturalStyle  and property
      $selected['ArchitecturalStyle'] = $request->input('ArchitecturalStyle', []);
      $propertyId->ArchitecturalStyle()->sync($selected['ArchitecturalStyle']);


      //---------Outdoor building Aminities ----------//
      $selected['outDoor'] = $request->input('outDoor', []);
      $propertyId->outdoorAmenities()->sync($selected['outDoor']);


      //-------------Property Rooms ------------//
      $selected['PropertyRooms'] = $request->input('PropertyRooms', []);
      $propertyId->featuredRoom()->sync($selected['PropertyRooms']);

      //-------------Property Floor------------//
      $selected['floor'] = $request->input('floor', []);
      $propertyId->propertyFlooring()->sync($selected['floor']);

      //-------------Property community ------------//
      $selected['community'] = $request->input('community', []);
      $propertyId->CommunityFeatures()->sync($selected['community']);


      //-------------Property exteriorFeatures ------------//
      $selected['exteriorFeatures'] = $request->input('exteriorFeatures', []);
      $propertyId->ExteriorFeaturs()->sync($selected['exteriorFeatures']);

      //interior
      $selected['interior'] = $request->input('interior', []);
      $propertyId->Interior()->sync($selected['interior']);

      //-------------Property parking ------------//
      $selected['parking'] = $request->input('parking', []);
      $propertyId->ParkingFeature()->sync($selected['parking']);

      //-------------Property roof ------------//
      $selected['roof'] = $request->input('roof', []);
      $propertyId->PropertyRoof()->sync($selected['roof']);


      //-------------Property propertyview ------------//
      $selected['propertyview'] = $request->input('propertyview', []);
      $propertyId->propertyview()->sync($selected['propertyview']);

      //-------------Property Cooling ------------//
      $selected['propertycooling'] = $request->input('propertycooling', []);
      $propertyId->coolingTypes()->sync($selected['propertycooling']);

      //-------------Property Heating ------------//
      $selected['propertyheating'] = $request->input('propertyheating', []);
      $propertyId->heatingTypes()->sync($selected['propertyheating']);

      //-------------Property fuel ------------//
      $selected['propertyfuel'] = $request->input('propertyfuel', []);
      $propertyId->heatingFuel()->sync($selected['propertyfuel']);

      //structure
      $selected['hometype'] = $request->input('hometype');
      $propertyId->StructureType()->sync($selected['hometype']);

      //--------------------    Media Uploads ------------------//

      $existingPhotos = $request->input('existing_photos', []);
      Media::where('mlsproperties_id', $request->propertyId)->whereNotIn('id', $existingPhotos)->delete();

      if (isset($request->photos)) {
        $files = $request->file('photos');
        //dd($request->photos);
        foreach ($files as $file => $value) {
          $uniqueName = str::uuid() . '.' . $value->getClientOriginalExtension();
          Storage::disk('s3')->put('properties/' . $uniqueName, file_get_contents($value));
          $data['image'] = $uniqueName;
          $mediaData['Order'] = $file;
          $mediaData['mlsproperties_id'] = $request->propertyId;
          $mediaData['PreferredPhotoYN'] = $file ? 0 : 1;
          $mediaData['wherfrom'] = 2;
          $mediaData['status'] = 1;
          $mediaData['MediaModificationTimestamp'] = Carbon::now();
          $mediaData['MediaURL'] = implode("|", $data);
          $mediaData['created_at'] = Carbon::now();
          $mediaData['updated_at'] = Carbon::now();
          // echo "<pre>";
          // print_r($mediaData);
          $mediaId = Media::updateOrCreate(['mlsproperties_id' => $propertyId], $mediaData);


          Media::where('id', $mediaId->id)
            ->update(
              ['status' => 1, 's3buckettempurl' => getS3BucketTempUrl($mediaId->id)]
            );
        }
      }




      $message = 'property has been updated.';
      //Mail::to(Auth::user()->email)->send(new NewPropertyListingEmail($data));
      DB::commit();
    } catch (\Exception $e) {
      DB::rollback();
      $message = $e->getMessage();
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
    $data['page'] = $this->pagecontent->getbyid('16');
    return view('properties.find-an-agent', $data);
  }

  // Fetching agents data on Agents Page
  public function Realestateagent(Request $request)
  {

    $agents['properties'] = Properties::featuredclosedPrpty(5)->get()->toArray();
    $agents['allAgents'] = User::with('Education', 'Experience', 'Language', 'Question', 'Skills', 'role')
      ->where('status', 1)
      ->whereHas('role', function ($q) {
        $q->where('name', '=', 'Agent');
      })
      ->orderBy('agent_sort_key', 'DESC')
      ->get()
      ->each(function ($user) {
        $user['review_statistics'] = $user->getReviewStatistics();
      })
      ->toArray();
    //  dd($agents['allAgents']);
    return view('properties.real-estate-agent', $agents);
  }

  // Fetching single agent data by agent Id
  public function Realestateagentdetail($id)
  {
    $userId = getUserIdbySlug($id);
    if ($userId) {
      $data['reviews'] = Reviews::getAgentReviews($userId);
      // dd($data['reviews'] );
      $data['agentTeams'] = AgentTeam::agentTeamById($userId);
      //dd($data['agentTeams']);
      $data['agentlistings'] = Properties::agentListingById($userId);
      $data['username'] = User::select('id', 'first_name', 'last_name', 'user_dp', 'total_deals', 'deals_volume', 'highest_deal')
        ->where('id', $userId)->first()->toArray();
      //dd($data['username']['first_name']);
      $data['Agents'] = User::realEstateAgentById($userId);
      $user = User::find($userId)->toArray();
      //dd($user['first_name'].$user['last_name']);
      if ($userId == 6) {
        $data['aris360PrimeProperties'] = Properties::Aris360PrimeProperties()->get()->toArray(); //passing 0 as parameter, is for featured property
      } else {
        $data['aris360PrimeProperties'] = Properties::with('StructureType', 'prefferedMedia', 'favoriteProperty')
          ->where('ListAgentFullName', $user['first_name'] . ' ' . $user['last_name'])
          ->where('PublishStatus', 'Active')->get()->toArray();
      }
      //dd($data['aris360PrimeProperties']);
      return view('properties.real-estate-agent-detail', $data);
    }

    //dd($userId);
    // $Agents = User::realEstateAgentById($id);
    // return view('properties.real-estate-agent-detail', ['Agents' => $Agents]);

  }
  public function Realestate()
  {
    $data['page'] = $this->pagecontent->getbyid('17');
    return view('properties.real-estate', $data);
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
    $data['page'] = $this->pagecontent->getbyid('18');
    return view('properties.agent-resource-center', $data);
  }

  public function Agentresourcecenterdetail()
  {
    return view('properties.agent-resource-center-detail');
  }

  public function Agentabouthomeloan()
  {
    $data['page'] = $this->pagecontent->getbyid('13');
    return view('properties.agent-about-homeloan', $data);
  }
  public function Buywitharis()
  {
    $data['page'] = $this->pagecontent->getbyid('1');
    // dd($data);
    // echo $data[0]['page'];
    return view('properties.buy-with-aris', $data);
  }
  public function homeValues()
  {
    $data['page'] = $this->pagecontent->getbyid('7');
    return view('properties.home-values', $data);
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


  public function Sellwitharis()
  {
    $data['sold_properties'] = Properties::HomepagePrpty(0, 'Sold')->get()->toArray(); //passing 0 as parameter, is for featured property
    // dd($data);
    $data['page'] = $this->pagecontent->getbyid('8');
    return view('properties.sell-with-aris', $data);
  }

  public function Myhomeworth()
  {
    $data['page'] = $this->pagecontent->getbyid('6');
    return view('properties.my-home-worth', $data);
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
      $address = $data['address'];
      $country = '';
      $state = $data['state'];
      $city = $data['city'];
      $postal_code = '';
      $leadType = $data['lead_type'];

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
        'lead_type' => $data['lead_type'],
        'user_id' => isset(Auth::user()->id) ? getUserId() : null
      ]);


      if (isUserLoggedIn()) {
        $data['is_read'] = false;
        $data['time'] = Carbon::now();
        $data['type'] = 'Selling Leads';
        $data['time'] = Carbon::now();
        $data['message'] = $data['name'] . ' Just requested a selling lead';
        $data['link'] = url('admin/leads-info/' . $lead->id);
        $link = 'admin/leads-info/' . $lead->id;
        $data['path'] = asset('public/images/userdp/');
        $data['user'] = User::where('id', getUserId())->first()->toArray();
        createNotification(getUserId(), 'Selling Leads', $data['name'] . ' Just requested a selling lead', 'Selling Lead', null, null, null, $link);
        event(new UserNotification($data));
      } else {
        $data['is_read'] = false;
        $data['time'] = Carbon::now();
        $data['type'] = 'Selling Leads';
        $data['time'] = Carbon::now();
        $data['message'] = $data['name'] . ' Just requested a selling lead';
        $data['link'] = url('admin/leads-info/' . $lead->id);
        $link = 'admin/leads-info/' . $lead->id;
        $data['user'] = '';
        $data['path'] = '';
        createNotification(null, 'Selling Leads', $data['name'] . ' Just requested a selling lead', 'Selling Lead', null, null, null, $link);
        event(new UserNotification($data));
      }
      //$data['user'] = User::where('id', getUserId())->first()->toArray();
      //$data['property'] = Properties::where('id', $request['text'])->first()->toArray();

      SellerLeadJob::dispatch($data)->delay(now()->addSeconds(10));
      // importing value to hupspot to create leads
      $url = "https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/$email";
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $headers = array(
        "Authorization: Bearer " . env('HUbSPOT_TOKEN'),
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
      $address = $data['address'];
      $country = '';
      $state = $data['state'];
      $city = $data['city'];
      $postal_code = '';
      $leadType = $data['lead_type'];
      $postal_code = '';
      $lead = PropertyLeads::create([
        'address' => $data['address'],
        'city' => $data['city'],
        'state' => $data['state'],
        'name' => $data['name'],
        'email' => $data['email'],
        'contact' => $data['contact'],
        'message' => $data['message'],
        'property_type' => $data['property_type'],
        'lead_type' => $data['lead_type'],
        'user_id' => isset(Auth::user()->id) ? getUserId() : null
      ]);

      if (isUserLoggedIn()) {
        $data['is_read'] = false;
        $data['time'] = Carbon::now();
        $data['type'] = 'Buying Leads';
        $data['time'] = Carbon::now();
        $data['message'] = $data['name'] . ' Just requested a buying lead';
        $data['link'] = url('admin/leads-info/' . $lead->id);
        $link = 'admin/leads-info/' . $lead->id;
        $data['path'] = asset('public/images/userdp/');
        $data['user'] = User::where('id', getUserId())->first()->toArray();
        createNotification(getUserId(), $data['message'], $data['name'] . ' Just requested a buying lead', 'Buying Lead', null, null, null, $link);
        event(new UserNotification($data));
      } else {
        $data['is_read'] = false;
        $data['time'] = Carbon::now();
        $data['type'] = 'Buying Leads';
        $data['time'] = Carbon::now();
        $data['message'] = $data['name'] . ' Just requested a buying lead';
        $data['link'] = url('admin/leads-info/' . $lead->id);
        $link = 'admin/leads-info/' . $lead->id;
        $data['user'] = '';
        $data['path'] = '';
        createNotification(null, $data['message'], $data['name'] . ' Just requested a buying lead', 'Buying Lead', null, null, null, $link);
        event(new UserNotification($data));
      }
      BuyerLeadJob::dispatch($data)->delay(now()->addSeconds(10));
      // importing value to hupspot to create leads
      $url = "https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/$email";
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $headers = array(
        "Authorization: Bearer " . env('HUbSPOT_TOKEN'),
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
    return view('properties.home-sale-proceeds-calculator', $data);
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
    $data['page'] = $this->pagecontent->getbyid('14');
    $data['homebuyingguide'] = Blogs::where('b_type', 'mortgage-resource-center')
      ->get()->toArray();
    return view('properties.mortgage-learning', $data);
  }
  public function Lenderresource()
  {
    $data['page'] = $this->pagecontent->getbyid('15');
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
    $data['page'] = $this->pagecontent->getbyid('12');
    return view('properties.mortgage-rates', $data);
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
    $query = User::where('status', 1);
    //$data['userData'] = ;
    if (isset($search) && !empty($search)) {
      $query->where('address', 'LIKE', "%" . $search . "%");
      $query->orWhere('address2', 'LIKE', "%" . $search . "%");
    }
    //dd();
    $data['userData'] = $query
      ->with([
        "role" => function ($q) {
          $q->where('name', '=', 'Lender')->orWhere('name', '=', 'Loan Officer');
        }
      ])
      ->simplePaginate(20);
    return view('properties.mortgage-rate-list', $data);
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
    return view('properties.why-choose-aris', $data);
  }
  public function Firsttimehomebuyer()
  {


    $data['page'] = $this->pagecontent->getbyid('4');
    $data['properties'] = Properties::featuredclosedPrpty(7)->get()->toArray();
    //dd($data);
    return view('properties.first-time-homebuyer', $data);
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
    return view('properties.current-home-owner', $data);
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
    return view('properties.compare-my-option', $data);
  }

  // todays-mortgage-rates
  public function todaysmortgagerates()
  {
    $data['page'] = $this->pagecontent->getbyid('20');
    $data['homebuyingguide'] = Blogs::where('b_type', 'present-mortgage-rates')
      ->get()->toArray();
    return view('properties.todays-mortgage-rates', $data);
  }

  // mortgage-or-buy
  public function mortgagebuy()
  {
    $data['page'] = $this->pagecontent->getbyid('21');
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
    $data['page'] = $this->pagecontent->getbyid('19');
    $data['homebuyingguide'] = Blogs::where('b_type', 'housing-market-updates')
      ->get()->toArray();
    return view('properties.aris-market-update', $data);
  }

  public function deleteFavourite(Request $request)
  {
    $id = $request->id;
    $unfavorite = FavoriteProperty::where(['properties_id' => $id, 'user_id' => getUserId()])->forceDelete();
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
    $data['type'] = 'Property Favourite';
    $data['is_read'] = false;
    $data['time'] = Carbon::now();
    $data['path'] = asset('public/images/userdp/');
    $data['link'] = url('admin/properties/' . $request['text']);
    $link = 'admin/properties/' . $request['text'];
    $data['user'] = User::where('id', getUserId())->first()->toArray();
    $data['property'] = Properties::where('id', $request['text'])->first()->toArray();
    if (!$exist->isEmpty()) {
      $query = FavoriteProperty::updateOrCreate(
        ['properties_id' => $request['text'], 'user_id' => getUserId()],
        ['is_fav' => 0]
      );
      if ($query) {
        $data['return'] = false;
        $data['message'] = Auth::user()->first_name . ' remove the property from favorite list.';
        createNotification(getUserId(), 'Favourite property removed', 'property removed from favorite list', 'Property Favoruite', $request['text'], null, null, $link);
        event(new UserNotification($data));
        $data['message'] = 'You have remove the property to your favorite list.';
        return response()->json($data);
      } else {
        $data['return'] = false;
        $data['message'] = 'We can\'t add this property to your favorite list.';
        return response()->json($data);
      }
    } else {
      $query = FavoriteProperty::updateOrCreate(
        ['properties_id' => $request['text'], 'user_id' => getUserId()],
        ['is_fav' => 1]
      );

      $data['return'] = true;
      $data['message'] = Auth::user()->first_name . ' added the property to favorite list.';
      createNotification(getUserId(), 'Favourite property added', 'property added to favorite list', 'Property Favoruite', $request['text'], null, null, $link);
      event(new UserNotification($data));
      $data['message'] = 'You have added the property to your favorite list.';
      return response()->json($data);
    }
  }

  public function shareListing(Request $request)
  {
    if (isUserLoggedIn()) {
      $data['property'] = Properties::where('id', $request['property_id'])->first()->toArray();
      $data['userData'] = Auth::user();
      $data['userMessage'] = $request['message'];
      $data['email'] = $request['email'];
      $data['type'] = 'Property Shared';
      $data['is_read'] = false;
      $data['link'] = url('admin/properties/' . $request['property_id']);
      $link = 'admin/properties/' . $request['property_id'];
      $data['time'] = Carbon::now();
      $data['path'] = asset('public/images/userdp/');
      $data['user'] = User::where('id', getUserId())->first()->toArray();
      // $data['property'] = Properties::where('id', $request['text'])->first()->toArray();

      //$data['is_read'] = false;
      //$data['time'] = Carbon::now();
      //$data['path'] = asset('public/images/userdp/');
      //$data['user'] = User::where('id', getUserId())->first()->toArray();
      //$data['property'] = Properties::where('id', $request['text'])->first()->toArray();
      $data['message'] = 'User (' . Auth::user()->first_name . ') Shared a  property ' . $data['property']['PropertyAddress'];
      createNotification(getUserId(), $request['message'], 'User (' . Auth::user()->first_name . ') shared  a  property ' . $data['property']['PropertyAddress'], 'Property Shared', $request['property_id'], null, null, $link);
      event(new UserNotification($data));
      ShareListingEmail::dispatch($data)->delay(now()->addSeconds(10));
      $data['return'] = true;
      $data['message'] = "Property Shared Successfully";
      return response()->json($data);
    } else {

      $data['message'] = 'Ensure you are logged in prior to submitting your message.';
      return response()->json($data);
    }
  }

  public function newsletter(Request $request)
  {
    //dd($request->email);

    $request->validate([
      'email' => 'required|email',
    ]);



    $data['link'] = url('admin/newsletter');
    $link = 'admin/newsletter';
    // $newsletter['user_id'] = isset(Auth::user()->id) ? Auth::user()->id : '' ;
    $newsletter['email'] = $request->email;
    $data['type'] = 'New Subcriber';
    $data['time'] = Carbon::now();
    $data['is_read'] = false;
    $data['message'] = $request->email;
    if (isUserLoggedIn()) {
      $data['path'] = asset('public/images/userdp/');
      $data['user'] = User::where('id', getUserId())->first()->toArray();
      event(new UserNotification($data));
      createNotification(getUserId(), 'New Subcriber', $request->email, 'Newsletter', null, null, null, $link);
    } else {
      $data['path'] = '';
      $data['user'] = '';
      event(new UserNotification($data));
      createNotification(null, 'New Subcriber', $request->email, 'Newsletter', null, null, null, $link);
    }
    Newsletter::create($newsletter);
    $message = 'Thanks for subscribing to our newsletter';
    return response()->json([
      'message' => $message
    ]);
  }

  public function notificationUpdate(Request $request)
  {
    Notifications::where('is_read', 0)->update(['is_read' => true]);
    return response()->json(['message' => 'All notifications marked as read']);
  }

  public function schoolSubrating(Request $request)
  {

    if (!empty($request->universalId)) {
      $school = greatSchoolSubrating($request->universalId);
      //dd($school['equity-rating']);
      $i = 0;
      foreach ($school as $key => $innerSubratting) {
        if (isset($innerSubratting) && !empty($innerSubratting)) {
          if ($key == 'status' || $key == 'error' || $key == 'message') {
            $PropertiesSchoolDetails['schools'][$i]['sub_rating'] = [];
            continue;
          } else {
            $PropertiesSchoolDetails['schools'][$i]['sub_rating'][$key] = $innerSubratting;
          }
        }
      }
      $i++;
      $PropertiesDetails['SchoolDetails'] = $PropertiesSchoolDetails['schools'];


      return response()->json($PropertiesDetails['SchoolDetails']);
    } else {

      return response()->json(['message' => 'No data found']);
    }
    //dd($subrating);


  }

  public static function buyDown()
  {
    return view('properties.buydown-calculator');
  }



  public function tourCheckout()
  {

    return view('properties.tour-checkout');
  }

  public function tourBooking()
  {

    return view('properties.tour-booking');
  }

  public function saveSearch(Request $request)
  {
    if (isUserLoggedIn()) {
      $data = $request->all();
      //dd($data);
      $user = auth()->user();
      // Create a new SavedSearch model instance and save it to the database
      $savedSearch = new SaveSearches();
      $savedSearch->user_id = $user->id;
      $savedSearch->name = $data['searchName'];
      $savedSearch->search_criteria = json_encode($data['allData']); // Store data as JSON
      $savedSearch->save();
      return response()->json(['message' => 'Search saved successfully']);
    } else {

      $data['message'] = 'Ensure you are logged in prior to submitting the data.';
      return response()->json($data);
    }
  }

  public function places(Request $request)
  {
    $client = new Client();
    $query = $request->query('query'); // Get the search query from the request

    $combinedData = [];
    // Make a request to the Google Places API using Guzzle
    $googleApiKey = 'AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc';

    //postal Code API
    $PostalCodeUrl = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" . $query . "+in:US&types=postal_code&key=" . $googleApiKey . "&limit=5";
    $googlePostalCodeResponse = $client->get($PostalCodeUrl);
    $googlePostalCodeData = json_decode($googlePostalCodeResponse->getBody(), true);
    $combinedData['googlePostalCodeData'] = $googlePostalCodeData;
    //City Search
    if (empty($combinedData['googlePostalCodeData']['results'])) {
      $cityUrl = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" . $query . "+in:US&types=locality&key=" . $googleApiKey . "&limit=5";
      $googleCityResponse = $client->get($cityUrl);
      $googleCityData = json_decode($googleCityResponse->getBody(), true);
      $combinedData['googleCityData'] = $googleCityData;

      //School Search
      $schoolUrl = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" . $query . "+in:US&types=school&key=" . $googleApiKey . "&limit=5";
      $googleSchoolsResponse = $client->get($schoolUrl);
      $googleSchoolsData = json_decode($googleSchoolsResponse->getBody(), true);

      $combinedData['googleSchoolsData'] = $googleSchoolsData;
    }
    return response()->json($combinedData);
  }
} // class here
