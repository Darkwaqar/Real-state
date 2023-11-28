<?php

namespace App\Models;

use App\TraitModules\Queries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cities;
use App\Models\Appliances;
use App\Models\ArchitecturalStyle;
use App\Models\Basement;
use App\Models\CommunityFeatures;
use App\Models\ExteriorFeatures;
use App\Models\FireplaceFeatures;
use App\Models\Flooring;
use App\Models\FoundationDetails;
use App\Models\GreenEnergyEfficient;
use App\Models\mlsInteriorFeatures;
use App\Models\Levels;
use App\Models\ListingTerms;
use App\Models\LotFeatures;
use App\Models\Possession;
use App\Models\Roof;
use App\Models\Sewer;
use App\Models\ShowingRequirements;
use App\Models\SpecialListingConditions;
use App\Models\StructureType;
use App\Models\Utilities;
use App\Models\PropertyView;
use App\Models\WaterSource;
use App\Models\PropertiesDetials;
use App\Models\PropertyFoundationDetails;
use App\Models\PropertyAppliances;
use App\Models\PropertyArchitecturalStyle;
use App\Models\PropertyBasement;
use App\Models\PropertyCommunity;
use App\Models\Media;
use Illuminate\Support\Facades\DB;
use Nette\Schema\Elements\Structure;

class Properties extends Model
{
    protected $table = 'mlsproperties';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ListingKeyNumeric', 'ListingKey', 'ListingId', 'CityName', 'StateOrProvince',
        'OriginatingSystemModificationTimestamp', 'PropertyName', 'PostalCode', 'SubdivisionName',
        'PropetyOriginalPrice', 'PropetySellPrice', 'Bedrooms', 'BathroomsFull', 'PropertyName', 'slug',
        'BathroomsPartial', 'PropertyAddress', 'PropertyArea', 'PropertyAreaUnits', 'IsMlsProperty', 'ListAgentKey',
        'PropertyLatitude', 'PropertyLongitude', 'PropertyDirections', 'BathroomsHalf', 'ListAgentFullName', 'ListAgentKeyNumeric',
        'PropertyStatus', 'PropertyDescription', 'batch_id', 'loop_id', 'ListAgentMlsId', 'ListOfficeKeyNumeric', 'ListOfficeKey',
        'ListOfficeMlsId', 'ListOfficeName', 'ListOfficePhone', 'ListingContractDate', 'PublishStatus', 'created_at', 'updated_at', 'user_id', 'admin_id', 'OriginalEntryTimestamp', 'MlgCanView', 'ClosePrice', 'CloseDate'
    ];

    use HasFactory;
    public function basement()
    {
        return $this->belongsToMany(
            Basement::class,
            'mlsproperty_basements',
            'mlsproperties_id',
            'mlsbasement_id'
        );
    }
    public function appliances()
    {
        return $this->belongsToMany(
            Appliances::class,
            'mlsproperty_appliances',
            'mlsproperties_id',
            'mlsappliances_id'
        );
    }

    public function ArchitecturalStyle()
    {
        return $this->belongsToMany(
            ArchitecturalStyle::class,
            'mlsproperty_architectural',
            'mlsproperties_id',
            'mlsarchitectural_styles_id'
        );
    }
    public function ExteriorFeaturs()
    {
        return $this->belongsToMany(
            ExteriorFeatures::class,
            'mlsproperty_exteriors',
            'mlsproperties_id',
            'mlsexterior_features_id'
        );
    }
    public function propertyFireplacefeatures()
    {
        return $this->belongsToMany(
            FireplaceFeatures::class,
            'mlsproperty_fire_places',
            'mlsproperties_id',
            'mlsfireplace_features_id'
        );
    }
    public function userfavProperties()
    {
        return $this->belongsToMany(FavoriteProperty::class, 'properties_id', 'id');
    }
    public function propertyFlooring()
    {
        return $this->belongsToMany(
            Flooring::class,
            'mlsproperty_floorings',
            'mlsproperties_id',
            'mlsfloorings_id'
        );
    }
    public function propertyFoundationDetails()
    {
        return $this->belongsToMany(
            FoundationDetails::class,
            'mlsproperty_foundation_details',
            'mlsproperties_id',
            'mlsfoundation_details_id'
        );
    }
    public function CommunityFeatures()
    {
        return $this->belongsToMany(
            CommunityFeatures::class,
            'property_communities',
            'mlsproperties_id',
            'mlscommunity_features_id'
        );
    }

    public function Interior()
    {
        return $this->belongsToMany(
            mlsInteriorFeatures::class,
            'mlsproperty_interiors',
            'mlsproperties_id',
            'mls_interior_features_id'
        );
    }

    public function featuredRoom()
    {
        return $this->belongsToMany(
            FeaturedRoom::class,
            'property_featured_rooms',
            'mlsproperties_id',
            'featured_rooms_id'
        );
    }

    public function outdoorAmenities()
    {
        return $this->belongsToMany(
            OutDoor::class,
            'property_outdoor_amenities',
            'mlsproperties_id',
            'outdoor_amenities_id'
        );
    }

    public function PowerProduction()
    {
        return $this->belongsToMany(
            PowerProductionType::class,
            'property_power_production',
            'mlsproperties_id',
            'mlspower_production_types_id'
        );
    }

    public function WaterSource()
    {
        return $this->belongsToMany(
            WaterSource::class,
            'property_water_sources',
            'mlsproperties_id',
            'mlswater_sources_id'
        );
    }
    public function PropertyRoof()
    {
        return $this->belongsToMany(
            Roof::class,
            'property_roofs',
            'mlsproperties_id',
            'mlsroofs_id'
        );
    }
    public function coolingTypes()
    {

        return $this->belongsToMany(
            CoolingType::class,
            'property_cooling_types',
            'mlsproperties_id',
            'cooling_types_id'
        );
    }
    public function heatingFuel()
    {

        return $this->belongsToMany(
            HeatingFuel::class,
            'property_heating_fuels',
            'mlsproperties_id',
            'heating_fuels_id'
        );
    }

    public function heatingTypes()
    {

        return $this->belongsToMany(
            HeatingType::class,
            'property_heating_types',
            'mlsproperties_id',
            'heating_types_id'
        );
    }

    public function PropertyCondition()
    {
        return $this->belongsToMany(
            PropertyCondition::class,
            'property_condition_rels',
            'mlsproperties_id',
            'mlsproperty_conditions_id'
        );
    }

    public function GreenEnergy()
    {
        return $this->belongsToMany(
            GreenEnergyEfficient::class,
            'property_green_energies',
            'mlsproperties_id',
            'mlsgreen_energy_efficients_id'
        );
    }

    public function Utilities()
    {
        return $this->belongsToMany(
            Utilities::class,
            'propertyutilities',
            'mlsproperties_id',
            'mlsutilities_id'
        );
    }

    public function LotFeatures()
    {
        return $this->belongsToMany(
            LotFeatures::class,
            'property_lot_features',
            'mlsproperties_id',
            'mlslot_features_id'
        );
    }

    public function PropertyView()
    {

        return $this->belongsToMany(
            PropertyView::class,
            'properties_views',
            'mlsproperties_id',
            'mlsproperty_views_id'
        );
    }
    public function PropertyLevel()
    {

        return $this->belongsToMany(
            Levels::class,
            'mlsproperty_levels',
            'mlsproperties_id',
            'mlslevels_id'
        );
    }
    public function StructureType()
    {
        return $this->belongsToMany(
            StructureType::class,
            'property_structure_types',
            'mlsproperties_id',
            'mlsstructure_types_id'
        );
    }
    public function PropertyPossession()
    {
        return $this->belongsToMany(
            Possession::class,
            'property_possessions',
            'mlsproperties_id',
            'mlspossessions_id'
        );
    }

    public function ParkingFeature()
    {
        return $this->belongsToMany(
            ParkingFeatures::class,
            'property_parkings',
            'mlsproperties_id',
            'mlsparking_features_id'
        );
    }
    public function PropertyVegetation()
    {
        return $this->belongsToMany(
            Vegetation::class,
            'property_vegetations',
            'mlsproperties_id',
            'mlsvegetations_id'
        );
    }

    public function propertySewer()
    {
        return $this->belongsToMany(
            Sewer::class,
            'property_sewers',
            'mlsproperties_id',
            'mlssewers_id'
        );
    }

    public function SpecialListingConditions()
    {
        return $this->belongsToMany(
            SpecialListingConditions::class,
            'property_spe_listing',
            'mlsproperties_id',
            'mlsspecial_listing_conditions_id'
        );
    }


    public function ListingTerm()
    {
        return $this->belongsToMany(
            ListingTerms::class,
            'mlsproperty_listing_terms',
            'mlsproperties_id',
            'mlslisting_terms_id'
        );
    }


    public function propertyMedia()
    {
        return $this->hasMany(Media::class, 'mlsproperties_id');
    }

    // property featured image

    public function prefferedMedia()
    {
        return $this->hasMany(Media::class, 'mlsproperties_id', 'id')->where('PreferredPhotoYN', 1);
    }
    public function PropertiesDetials()
    {
        return $this->hasOne(PropertiesDetials::class, 'mlsproperties_id');
    }

    //------------------------------For Home For Washington-------------------------------//
    public function activeProperties()
    {
        return $this->hasOne(PropertiesDetials::class, 'mlsproperties_id', 'id');
    }

    // homepage properties
    public function scopeHomepagePrpty($query, $count, $published = null)
    {
        return $query->with([
            'StructureType:id,StructureTypeName',
            'prefferedMedia:id,mlsproperties_id,s3buckettempurl',
            'favoriteProperty:id,user_id,properties_id,is_fav',
        ])
            ->select('id', 'PropetySellPrice', 'Bedrooms', 'BathroomsFull', 'PropertyArea', 'PropertyAddress', 'PublishStatus') // Select only the necessary columns from the main table
            ->where('IsMlsProperty', '=', $count)
            ->where('PropertyStatus', '=', 1)
            ->where('PublishStatus', '=', $published)
            //->where('PropetySellPrice','>', 9999)
            ->orderBy('created_at', 'desc')
            ->limit(20);
    }


    public function scopeAris360PrimeProperties($query)
    {
        return $query->with([
            'StructureType:id,StructureTypeName',
            'prefferedMedia:id,mlsproperties_id,s3buckettempurl',
            'favoriteProperty:id,user_id,properties_id,is_fav',
        ])
            ->select('id', 'PropetySellPrice', 'Bedrooms', 'BathroomsFull', 'PropertyArea', 'PropertyAddress', 'PublishStatus') // Select only the necessary columns from the main table
            ->where('ListOfficeName', '=', 'Aris360')->orWhere('bought_with_agent_office', '=', 'Aris360')
            ->where('PropertyStatus', '=', 1)
            ->where('id','!=',938)
           // ->where('PublishStatus', '=', "Active")
            //->where('PropetySellPrice','>', 9999)
            ->orderBy('created_at', 'desc')
            ->limit(20);
    }

    public static function propertiesSeatle($count, $published = null)
    {
        return Properties::with([
            'StructureType:id,StructureTypeName',
            'prefferedMedia:id,mlsproperties_id,s3buckettempurl',
            'favoriteProperty:id,user_id,properties_id,is_fav',
            // 'favoriteProperty'
        ])
            ->select('id', 'PropetySellPrice', 'Bedrooms', 'BathroomsFull', 'PropertyArea', 'PropertyAddress', 'PublishStatus') // Select only the necessary columns from the main table
            ->where('IsMlsProperty', '=', $count)
            ->where('PropertyStatus', '=', 1)
            ->where('PublishStatus', '=', $published)
            ->where('CityName', '=', 'Seattle')
            //->where('PropetySellPrice','>', 9999)
            ->orderBy('created_at', 'desc')
            ->limit(20)->get()->toArray();
    }

    public static function mapProperties($request, $bounds)
    {
        $swLng = 0;
        $swLat = 0;
        $neLng = 0;
        $neLat = 0;

        $query = Properties::select('PropetySellPrice', 'PublishStatus', 'PropertyLatitude', 'PropertyLongitude', 'id', 'CityName', 'PropertyAddress')
            ->with('StructureType:StructureTypeName,id')
            ->where('PropertyStatus', '=', '1')
            ->where('PropetySellPrice', '>', 9999);

        // ->orderBy('created_at', 'desc');

        if (isset($request->rent) && !empty($request->rent)) {
            $query->where('mlsproperties.PublishStatus', $request->rent);
        } else {
            $query->where('PublishStatus', 'Active');
        }

        if (isset($request->search) && !empty($request->search)) {
            $query->where('mlsproperties.CityName', 'LIKE', '%' . $request->search . "%");
        }

        if (!empty($request->type)) {
            $query->whereHas('StructureType', function ($q) use ($request) {
                $q->where('StructureTypeName', '=', $request->type);
            });
        }

        if (isset($request->zip) && !empty($request->zip)) {
            $query->where('mlsproperties.PostalCode', $request->zip);
        };


        if (!empty($bounds)) {
            $swLng = $bounds['southwest']['lng'];
            $swLat = $bounds['southwest']['lat'];
            $neLng = $bounds['northeast']['lng'];
            $neLat = $bounds['northeast']['lat'];

            $query->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_GEOMFROMTEXT(?))', [
                "POLYGON(($swLng $swLat, $swLng $neLat, $neLng $neLat, $neLng $swLat, $swLng $swLat))"
            ]);
        }

        // $rawQuery = $query->toSql();
        // $bindings = $query->getBindings();
        // // Replace the question mark with the actual value
        // foreach ($bindings as $binding) {
        //     $rawQuery = preg_replace('/\?/', "'" . $binding . "'", $rawQuery, 1);
        // }
        // dd($rawQuery);


        return $query->limit(2000)->get();
    }

    //------------------------------Our Community Page-------------------------------//
    public static function Community($request)
    {

        $data = Properties::with('StructureType', 'activeProperties', 'prefferedMedia', 'PropertiesDetials', 'userProperties', 'favoriteProperty')
            ->where('PropertyStatus', '1')
            ->where('MlgCanView', 1)
            ->orderBy('ListingContractDate', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->groupBy('mlsproperties.PropertyAddress');


        $data->when($request->search, function ($query) use ($request) {
            $query->where('mlsproperties.CityName', $request->search);
        });
        $data->when($request->rent, function ($query) use ($request) {
            $query->where('mlsproperties.prprtyRentOrsale', $request->rent);
        });

        $data->when($request->zip, function ($query) use ($request) {
            $query->where('mlsproperties.PostalCode', $request->zip);
        });

        if (isset($request->rent)) {
            $data->when($request->rent, function ($query) use ($request) {
                $query->where('mlsproperties.PublishStatus', $request->rent);
            });
        } else {
            $data->where('PublishStatus', 'Active');
        }

        $data->when($request->type, function ($query) use ($request) {
            $query->whereHas('StructureType', function ($query) use ($request) {
                $query->where('StructureTypeName', $request->type);
            });
        });

        return $data->limit(200)->get();
    }

    public static function CommunityDefault($request, $bounds)
    {

        if (isset($request->search_criteria)) {
            $request = (object) json_decode(base64_decode($request->search_criteria), true);

            if (isset($request->zoomCoordinates)) {
                $outputArray = [
                    "northeast" => [
                        "lat" => (float) $request->zoomCoordinates["northeastLat"],
                        "lng" => (float) $request->zoomCoordinates["northeastLng"],
                    ],
                    "southwest" => [
                        "lat" => (float) $request->zoomCoordinates["southwestLat"],
                        "lng" => (float) $request->zoomCoordinates["southwestLng"],
                    ],
                ];
                // Convert the output array to a Laravel Collection if needed
                $bounds = collect($outputArray);

                if (isset($request->address)) {
                    $request->search = $request->address;
                }
            }
        }

        // dd($request);

        $swLng = 0;
        $swLat = 0;
        $neLng = 0;
        $neLat = 0;

        $data = Properties::with('StructureType', 'activeProperties', 'prefferedMedia', 'PropertiesDetials', 'userProperties', 'favoriteProperty')
            ->where('PropertyStatus', '1')
            ->where('MlgCanView', 1)
            ->orderBy('ListingContractDate', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->groupBy('mlsproperties.PropertyAddress');

        if (isset($request->search)) {
            $data->when($request->search, function ($query) use ($request) {
                $query->where('mlsproperties.CityName', $request->search);
            });
        }

        if (isset($request->rent)) {
            $data->when($request->rent, function ($query) use ($request) {
                $query->where('mlsproperties.prprtyRentOrsale', $request->rent);
            });
        }

        if (isset($request->zip)) {
            $data->when($request->zip, function ($query) use ($request) {
                $query->where('mlsproperties.PostalCode', $request->zip);
            });
        }

        if (isset($request->PublishStatus)) {
            $data->when($request->PublishStatus, function ($query) use ($request) {
                $query->where('mlsproperties.PublishStatus', $request->PublishStatus);
            });
        }
        if (isset($request->bed)) {
            $data->when($request->bed, function ($query) use ($request) {
                if (($request->bed !== null && is_numeric($request->bed))) {
                    $query->where('mlsproperties.Bedrooms', '>=', $request->bed);
                }
            });
        }
        if (isset($request->bath)) {
            $data->when($request->bath, function ($query) use ($request) {
                if (($request->bath !== null && is_numeric($request->bath))) {
                    $query->where('mlsproperties.BathroomsFull', '>=', $request->bath);
                }
            });
        }
        if (isset($request->min) && isset($request->max)) {
            $data->when($request->min || $request->max, function ($query) use ($request) {
                $query->whereBetween('mlsproperties.PropetySellPrice', [$request->min, $request->max]);
            });
        }

        if (isset($request->home)) {
            $data->whereHas('StructureType', function ($query) use ($request) {
                $query->where('StructureTypeName', $request->home);
            });
        }
        //   $data->when($request->home_type, function ($query) use ($request) {
        //     $query->where('property_structure_types.mlsstructure_types_id', $request->home_type);
        //   });
        if (isset($request->floor)) {

            $data->whereHas('PropertiesDetials', function ($query) use ($request) {
                $query->where('StoriesTotal', $request->floor);
            });
        }
        if (isset($request->parking)) {
            $data->whereHas('PropertiesDetials', function ($query) use ($request) {
                $query->where('ParkingTotal', $request->parking);
            });
        }
        //   $data->when($request->parking, function ($query) use ($request) {
        //     $query->where('properties_detials.ParkingTotal', '>=', $request->parking);
        //   });

        if ($request->publishStatus != null) {
            if ($request->publishStatus == 'Sold') {
                $data->when($request->publishStatus, function ($query) use ($request) {
                    $query->whereIn('mlsproperties.PublishStatus', ['Sold', 'Closed']);
                });
            } else {
                $data->when($request->publishStatus, function ($query) use ($request) {
                    $query->where('mlsproperties.PublishStatus', $request->publishStatus);
                });
            }
        } else {
            $data->where('mlsproperties.PublishStatus', '=', 'Active');
        }
        if (isset($request->min_area) && isset($request->max_area)) {
            $data->when($request->min_area || $request->max_area, function ($query) use ($request) {
                $query->whereBetween('mlsproperties.PropertyArea', [$request->min_area, $request->max_area]);
            });
        }
        if (isset($request->sort)) {
            $sortOptions = [
                '1' => 'mlsproperties.PropetySellPrice desc',
                '2' => 'mlsproperties.PropetySellPrice asc',
                '3' => 'mlsproperties.CityName asc',
                '4' => 'mlsproperties.OriginatingSystemModificationTimestamp desc',
                '5' => 'mlsproperties.ListingKeyNumeric desc',
                '6' => 'mlsproperties.OriginatingSystemModificationTimestamp asc'
            ];

            if (isset($sortOptions[$request->sort])) {
                $data->orderByRaw($sortOptions[$request->sort]);
            }
        } else {
            $data->where('PublishStatus', 'Active');
        }

        // $data->when($request->type, function ($query) use ($request) {
        //     $query->whereHas('StructureType', function ($query) use ($request) {
        //         $query->where('StructureTypeName', $request->type);
        //     });
        // });

        if (!empty($bounds)) {
            $swLng = $bounds['southwest']['lng'];
            $swLat = $bounds['southwest']['lat'];
            $neLng = $bounds['northeast']['lng'];
            $neLat = $bounds['northeast']['lat'];

            $data->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_GEOMFROMTEXT(?))', [
                "POLYGON(($swLng $swLat, $swLng $neLat, $neLng $neLat, $neLng $swLat, $swLng $swLat))"
            ]);
        }

        // $rawQuery = $data->toSql();
        // $bindings = $data->getBindings();
        // // Replace the question mark with the actual value
        // foreach ($bindings as $binding) {
        //     $rawQuery = preg_replace('/\?/', "'" . $binding . "'", $rawQuery, 1);
        // }
        // dd($rawQuery);
        // dd($data->limit(1)->get());
        return $data->limit(200)->get();
        // return $data->paginate(360)->appends(request()->query());
        // dd($data->paginate(20)->appends(request()->query()));
    }

    public static function CountProperties($request, $bounds)
    {
        $swLng = 0;
        $swLat = 0;
        $neLng = 0;
        $neLat = 0;

        $data = Properties::with('StructureType')->distinct('PropertyAddress')->where('PropertyStatus', '1')->where('MlgCanView', 1)->orderBy('PublishStatus', 'asc');

        $data->when($request->search, function ($query) use ($request) {
            $query->where('mlsproperties.CityName', $request->search);
        });
        $data->when($request->rent, function ($query) use ($request) {
            $query->where('mlsproperties.prprtyRentOrsale', $request->rent);
        });

        $data->when($request->zip, function ($query) use ($request) {
            $query->where('mlsproperties.PostalCode', $request->zip);
        });

        if (isset($request->rent)) {
            $data->when($request->rent, function ($query) use ($request) {
                $query->where('mlsproperties.PublishStatus', $request->rent);
            });
        } else {
            $data->where('PublishStatus', 'Active');
        }

        $data->when($request->type, function ($query) use ($request) {
            $query->whereHas('StructureType', function ($query) use ($request) {
                $query->where('StructureTypeName', $request->type);
            });
        });

        if (!empty($bounds)) {
            $swLng = $bounds['southwest']['lng'];
            $swLat = $bounds['southwest']['lat'];
            $neLng = $bounds['northeast']['lng'];
            $neLat = $bounds['northeast']['lat'];

            $data->whereRaw('ST_WITHIN(POINT(mlsproperties.PropertyLongitude, mlsproperties.PropertyLatitude), ST_GEOMFROMTEXT(?))', [
                "POLYGON(($swLng $swLat, $swLng $neLat, $neLng $neLat, $neLng $swLat, $swLng $swLat))"
            ]);
        }

        // $rawQuery = $data->toSql();
        // $bindings = $data->getBindings();
        // // Replace the question mark with the actual value
        // foreach ($bindings as $binding) {
        //     $rawQuery = preg_replace('/\?/', "'" . $binding . "'", $rawQuery, 1);
        // }
        // dd($rawQuery);

        return $data->count();
        // return $data->paginate(360)->appends(request()->query());
        // dd($data->paginate(20)->appends(request()->query()));
    }





    //------------------------------JustListed MlsProPerty Detail Page-------------------------------//

    public static function PropertiesListedMLS($postalCode, $city)
    {
        $Properties = Properties::with('StructureType',  'PropertiesDetials', 'prefferedMedia', 'favoriteProperty')
            ->where(function ($query) use ($postalCode, $city) {
                $query->where('PostalCode', '=', $postalCode)
                    ->orWhere('CityName', '=', $city);
            })
            ->where('PropertyStatus', '=', '1')
            ->where(function ($query) {
                $query->where('PublishStatus', '!=', 'Sold')
                    ->orWhere('PublishStatus', '!=', 'Closed');
            })
            ->orderBy('created_at', 'DESC')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return $Properties;
    }
    //-------------------- properties Ajax ------------------//
    public static function CommunitySearch($request)
    {
        $query = Properties::select('mlsproperties.id', 'mlsproperties.ListingKeyNumeric', 'mlsproperties.PropertyName', 'mlsproperties.ListOfficeName', 'mlsproperties.PropetySellPrice', 'mlsproperties.Bedrooms', 'mlsproperties.BathroomsFull', 'mlsproperties.PropertyAddress', 'mlsproperties.PropertyArea', 'mlsproperties.PropertyAreaUnits', 'mlsproperties.PropertyDescription', 'mlsproperties.PropertyLatitude', 'mlsproperties.PropertyLongitude', 'mlsproperties.PublishStatus', 'mlsmedia.MediaURL', 'mlsmedia.s3buckettempurl', 'property_structure_types.mlsstructure_types_id')
            ->join('mlsmedia', 'mlsproperties.id', '=', 'mlsmedia.mlsproperties_id')
            ->join('property_structure_types', 'mlsproperties.id', '=', 'property_structure_types.mlsproperties_id')
            ->join('properties_detials', 'mlsproperties.id', '=', 'properties_detials.mlsproperties_id')
            ->where('mlsmedia.PreferredPhotoYN', '=', '1')
            //->where('mlsproperties.PropetySellPrice','>', 9999)
            ->groupBy('mlsproperties.id');
        if (isset($request->search) && !empty($request->search)) {
            $query->orderByRaw("CASE
                        WHEN mlsproperties.PropertyAddress LIKE '" . $request->search . "' THEN 1
                        WHEN mlsproperties.PropertyAddress LIKE '" . $request->search . "%' THEN 2
                        WHEN mlsproperties.PropertyAddress LIKE '%" . $request->search . "%' THEN 3
                        WHEN mlsproperties.PropertyAddress LIKE '%" . $request->search . "' THEN 4
                        ELSE 5
                    END");
            //$query->where('mlsproperties.CityName', '=', $request->search)->orWhere('mlsproperties.PropertyAddress', 'LIKE', ''.$request->search.'%')->orWhere('mlsproperties.PostalCode', '=', $request->search);
            // ->orWhere('mlsproperties.PropertyAddress', 'LIKE', ''.$request->search.'%');
        }
        // if (!empty($request->zip)) {

        //     $query->where('mlsproperties.PostalCode', '=', ''.$request->zip.'');
        // }
        if (!empty($request->address)) {

            $query->where('mlsproperties.CityName', '=', '' . $request->address . '');
        }
        if (isset($request->zip) && !empty($request->zip)) {
            $query->where('mlsproperties.PostalCode', '=', $request->zip);
        }

        if (!empty($request->description)) {
            $query->where('mlsproperties.PropertyDescription', 'LIKE', '%' . $request->description . "%");
        }
        if (!empty($request->bed) || !empty($request->bath)) {
            $query->where('mlsproperties.Bedrooms', '>=', '' . $request->bed . '');
            $query->where('mlsproperties.BathroomsFull', '>=', '' . $request->bath . '');
        }
        if (!empty($request->min) || !empty($request->max)) {
            $query->whereBetween('mlsproperties.PropetySellPrice', ['' . $request->min . '', '' . $request->max . '']);
        }

        if (!empty($request->home)) {
            $query->whereIn('property_structure_types.mlsstructure_types_id', $request->home);
        }
        if (!empty($request->home_type)) {
            $query->where('property_structure_types.mlsstructure_types_id', '=', $request->home_type);
        }
        if (!empty($request->floor)) {
            $query->where('properties_detials.StoriesTotal', '>=', '' . $request->floor . '');
        }

        if (!empty($request->parking)) {
            $query->where('properties_detials.ParkingTotal', '>=', '' . $request->parking . '');
        }
        if (!empty($request->publishStatus)) {

            $query->where('mlsproperties.PublishStatus', '=', '' . $request->publishStatus . '');
        }
        if (!empty($request->min_area) || !empty($request->max_area)) {

            $query->whereBetween('mlsproperties.PropertyArea', ['' . $request->min_area . '', '' . $request->max_area . '']);
        }
        if ($request->sort == 1) {

            $query->orderBy('mlsproperties.PropetySellPrice', 'desc');
        }
        if ($request->sort == 2) {

            $query->orderBy('mlsproperties.PropetySellPrice', 'asc');
        }
        if ($request->sort == 3) {

            $query->orderBy('mlsproperties.CityName', 'asc');
        }
        if ($request->sort == 4) {

            $query->orderBy('mlsproperties.OriginatingSystemModificationTimestamp', 'desc');
        }
        if ($request->sort == 5) {

            $query->orderBy('mlsproperties.ListingKeyNumeric', 'desc');
        }
        if ($request->sort == 6) {

            $query->orderBy('mlsproperties.OriginatingSystemModificationTimestamp', 'asc');
        }
        $Properties = $query->paginate(20);
        return $Properties;
    }

    //detail of page favorite
    public static function detailFav($id)
    {
        $favorite = Properties::with('favoriteProperty')->find($id);
        return $favorite;
    }


    //------------- Mls Similar Properties ---------------//
    public static function SimilarProperties($postalCode,  $city)
    {
        $Properties = Properties::with('StructureType', 'activeProperties', 'PropertiesDetials', 'prefferedMedia', 'favoriteProperty')
            ->where(function ($query) use ($postalCode, $city) {
                $query->where('PostalCode', '=', $postalCode)
                    ->orWhere('CityName', '=', $city);
            })
            ->where('PropertyStatus', '=', '1')
            ->where(function ($query) {
                $query->where('PublishStatus', '!=', 'Sold')
                    ->orWhere('PublishStatus', '!=', 'Closed');
            })
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return $Properties;
    }
    //------------- Featured Similar Properties ---------------//

    // code by Shehzad Bhai
    public function propertyDetail()
    {
        return $this->hasOne(PropertiesDetials::class, 'mlsproperties_id', 'id');
    }
    public function media()
    {

        return $this->hasMany(Media::class, 'mlsproperties_id', 'id');
    }
    public function mlsRooms()
    {

        return $this->hasMany(Rooms::class, 'mlsproperties_id', 'id');
    }
    public function userListedPro()
    {

        return $this->belongsToMany(User::class, 'user_id', 'id');
    }

    public function userProperties()
    {

        return $this->hasMany(User::class, 'id', 'user_id');
    }

    //      user/agent listing in profile
    public static function agentListing()
    {

        $listing = Properties::with('StructureType', 'prefferedMedia')
            ->where('IsMlsProperty', '=', '0')
            ->where('user_id', '=', getUserId())
            ->get();
        return $listing;
    }
    public static function agentListingById($id)
    {
        $listing = Properties::with('StructureType', 'prefferedMedia', 'userProperties')
            ->where('IsMlsProperty', '=', '0')
            ->where('user_id', '=', $id)
            ->get();
        return $listing;
    }
    public function favorite_property()
    {
        return $this->belongsToMany(User::class, 'favorite_property');
    }

    public function favoriteProperty()
    {
        return $this->hasMany(FavoriteProperty::class, 'properties_id', 'id')
            ->where('user_id', '=', getUserId());
    }

    public function userFav()
    {
        return $this->hasMany(FavoriteProperty::class, 'properties_id', 'id');
    }

    public function favoriteDetail()
    {
        return $this->hasMany(FavoriteProperty::class, 'properties_id', 'id')
            ->where(['user_id' => getUserId(), 'is_fav' => 1]);
    }

    public function scopeFeaturedclosedPrpty($query, $count)
    {
        return $query->with('prefferedMedia', 'userProperties')
            ->where('IsMlsProperty', '=', '0')
            ->where('PropertyStatus', '=', '1')
            //->where('PublishStatus', '=', 'Closed')
            ->where('PublishStatus', '=', 'Closed')->orWhere('PublishStatus', '=', 'Sold')
            //->orderBy('created_at', 'desc')
            ->limit(intval($count));
    }

    public function propertyContact()
    {
        return $this->belongsToMany(PropertyMessageBox::class, 'property_id', 'id');
    }
}
