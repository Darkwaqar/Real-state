@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" >

        <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">All Property Details</h1>
                </div>



            </div>
        </div>

        <div class="col-xl-12">
            <section class="box ">
                <header class="panel_header">
                    <!-- <h2 class="title float-left">List A New Property Form</h2> -->

                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">

                                <h4>
                                    Property Name:
                                    <strong>
                                            {{ isset($property['PropertyName']) ? $property['PropertyName']  : $property['PropertyAddress'] }}

                                    </strong>
                                </h4>

                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul  class="skzLeft">
                                            @if (isset($property['propertyDetail']['VirtualTourURLUnbranded']) and !empty($property['propertyDetail']['VirtualTourURLUnbranded']) )
                                            <li>
                                                <p> Virtual Tour url:
                                                    <span>
                                                       <a href="{{ $property['propertyDetail']['VirtualTourURLUnbranded'] }}" target="_blank" rel="noopener">
                                                        {{ $property['propertyDetail']['VirtualTourURLUnbranded'] }}
                                                    </a>
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['Relatedwebsite']) and !empty($property['propertyDetail']['Relatedwebsite']))
                                            <li>
                                                <p> Related Website:
                                                    <span>
                                                        <a href="{{ $property['propertyDetail']['Relatedwebsite'] }}" target="_blank" rel="noopener">
                                                            {{ $property['propertyDetail']['Relatedwebsite'] }}
                                                        </a>
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['PropertyType']) and !empty($property['propertyDetail']['PropertyType']))
                                            <li>
                                                <p> Property Type:
                                                    <span>
                                                        {{ $property['propertyDetail']['PropertyType'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['PropertySubType']) and !empty($property['propertyDetail']['PropertySubType']))
                                            <li>
                                                <p>Property Sub Type
                                                    <span>
                                                        {{ $property['propertyDetail']['PropertySubType'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['HOAduess']) and !empty($property['propertyDetail']['HOAduess']))
                                            <li>
                                                <p> HOA Dues:
                                                    <span>

                                                        {{ $property['propertyDetail']['HOAdues'] }}

                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['Furnished']) and !empty($property['propertyDetail']['Furnished']))
                                            <li>
                                                <p> Is Furnished:
                                                    <span>
                                                        {{ $property['propertyDetail']['Furnished'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['StreetName'])  and !empty($property['propertyDetail']['StreetName']))
                                            <li>
                                                <p> Street:
                                                    <span>
                                                        {{ $property['propertyDetail']['StreetName'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['TotalRooms']) and !empty($property['propertyDetail']['TotalRooms']))
                                            <li>
                                                <p> Total Rooms:
                                                    <span>
                                                        {{ $property['propertyDetail']['TotalRooms'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['HeatingCoolingType']) and !empty($property['propertyDetail']['HeatingCoolingType']))
                                            <li>
                                                <p> Heating Cooling Type:
                                                    <span>
                                                        {{ $property['propertyDetail']['HeatingCoolingType'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            @if (isset($property['Bedrooms']))
                                            <li>
                                                 <p> Bed:
                                                    <span>
                                                        {{ $property['Bedrooms'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['BathroomsFull']))
                                            <li>
                                                 <p> Full Bath
                                                    <span>
                                                        {{$property['BathroomsFull']}}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['BathroomsThreeQuarter']) and $property['propertyDetail']['BathroomsThreeQuarter'] > 0)
                                            <li>
                                                <p> 3/4 Baths:
                                                    <span>
                                                        {{$property['propertyDetail']['BathroomsThreeQuarter']}}
                                                    </span>
                                                </p>

                                            </li>
                                            @endif

                                             @if (isset($property['BathroomsHalf']) and $property['BathroomsHalf'] > 0)
                                            <li>
                                                <p> 1/2 Baths:
                                                    <span>
                                                        {{$property['BathroomsHalf']}}
                                                    </span>
                                                </p>

                                            </li>
                                            @endif

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            @if (isset($property['propertyDetail']['LotSizeSquareFeet']))
                                            <li>
                                                <p>Sqft:
                                                    <span>
                                                        {{ $property['propertyDetail']['LotSizeSquareFeet'] }}

                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['LotSizeAcres']) and $property['propertyDetail']['LotSizeAcres'] > 0)
                                            <li>
                                                <p>Lot Size Acres:
                                                    <span>
                                                        {{ $property['propertyDetail']['LotSizeAcres'] }}

                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['YearBuilt']) and $property['propertyDetail']['YearBuilt'] > 0)
                                            <li>
                                                <p>Year Built:
                                                    <span>

                                                        {{ $property['propertyDetail']['YearBuilt'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['YearBuiltEffective']) and $property['propertyDetail']['YearBuiltEffective'] > 0)
                                            <li>
                                                <p>Structure Remodal Year:
                                                    <span>
                                                        {{ $property['propertyDetail']['YearBuiltEffective'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            @if (isset($property['propertyDetail']['BuilderName']) and !empty($property['propertyDetail']['BuilderName']))
                                            <li>
                                                <p>Builder Name:
                                                    <span>
                                                        {{ $property['propertyDetail']['BuilderName'] }}

                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['Topography']) and !empty($property['propertyDetail']['Topography']))
                                            <li>
                                                <p>Topography
                                                    <span>
                                                        {{ $property['propertyDetail']['Topography'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['PowerCompany']) and !empty($property['propertyDetail']['PowerCompany']))
                                            <li>
                                                <p>Power Company:
                                                    <span>
                                                        {{ $property['propertyDetail']['PowerCompany'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['Inclusions']) and !empty($property['propertyDetail']['Inclusions']))
                                            <li>
                                                <p>Inclusions:
                                                    <span>
                                                        {{ $property['propertyDetail']['Inclusions'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            @if (isset($property['PropetyOriginalPrice']))
                                            <li>
                                                <p>Propety Price:
                                                    <span>
                                                        {{ $property['PropetyOriginalPrice'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                            @if (isset($property['PropetySellPrice']))
                                            <li>
                                                <p>Selling Price
                                                    <span>
                                                        {{ $property['PropetySellPrice'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                            @if (isset($property['PropertyArea']))
                                            <li>
                                                <p>Property Area:
                                                    <span>
                                                        {{ $property['PropertyArea'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['PropertyAreaUnits']))
                                            <li>
                                                <p>Property Area Units:
                                                    <span>
                                                        {{ $property['PropertyAreaUnits'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            @if (isset($property['propertyDetail']['MiddleOrJuniorSchool']))
                                            <li>
                                                <p>Middle Or Junior School:
                                                    <span>
                                                        {{ $property['propertyDetail']['MiddleOrJuniorSchool'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['HighSchool']))
                                            <li>
                                                <p>High School:
                                                    <span>
                                                        {{ $property['propertyDetail']['HighSchool'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                            @if (isset($property['propertyDetail']['HighSchoolDistrict']))
                                            <li>
                                                <p>High School District:
                                                    <span>
                                                        {{ $property['propertyDetail']['HighSchoolDistrict'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['propertyDetail']['ElementarySchool']))
                                            <li>
                                                <p>Elementary School:
                                                    <span>
                                                        {{ $property['propertyDetail']['ElementarySchool'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>

                                </div>

                                @if (isset($property['PropertyDescription']))
                                <div class="col-12">
                                    <h4>Description</h4>
                                    <p class="breakword">
                                        {{ $property['PropertyDescription'] }}
                                    </p>
                                </div>
                                @endif

                                @if (isset($property['media']) && !empty($property['media']))
                                <div class="col-12">
                                    <h4>Images</h4>
                                        <div class="proerty_form_img">
                                            <ul class="skzimgs">
                                                @foreach ($property['media'] as $myImage)
                                                <li>
                                                    <img src="{{$myImage['s3buckettempurl']}}" alt="{{ $property['PropertyName'] }}">
                                                </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                </div>
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <h4>
                                <strong> Room Details</strong>
                            </h4>

                            <div class="property_detail_dashbard_list">
                                <h5>APPLIANCES</h5>
                                <div class="row">
                                    @if (isset($property['appliances']) and !empty($property['appliances']))
                                    @foreach ($property['appliances'] as $appliance)
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($appliance['ApplianceSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$appliance['ApplianceName']}}</span></h6>

                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="property_detail_dashbard_list">
                                <h5>Featured Property Rooms</h5>
                                <div class="row">
                                    @if (isset($property['featuredRoom']) and !empty($property['featuredRoom']))
                                    @foreach ($property['featuredRoom'] as $room)
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($room['RoomSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$room['RoomName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <h5>BASEMENT</h5>
                            <div class="property_detail_dashbard_list">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <ul>
                                            @if (isset($property['basement']) && !empty($property['basement']))
                                               @foreach ($property['basement'] as $myBasement)
                                                    <li>
                                                        <h6>
                                                            <span>{{ $myBasement['BasementName'] }}</span>
                                                        </h6>
                                                    </li>
                                               @endforeach
                                            @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <h5>Floor Covering</h5>
                            <div class="property_detail_dashbard_list">
                                <div class="row">
                                    @if (isset($property['propertyFlooring']) && !empty($property['propertyFlooring']))
                                    @foreach ($property['propertyFlooring'] as $myfloor)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($myfloor['FloringSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$myfloor['FloringName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>






                        @if (isset($property['mlsRooms']) && !empty($property['mlsRooms']))
                        <div class="col-lg-12 col-md-12 col-12">
                            <h5>Property Rooms </h5>
                            <div class="property_detail_dashbard_list">
                                <div class="row">
                                    <div class="col-12">

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th scope="col">Room Key</th>
                                                <th scope="col">Room Level</th>
                                                <th scope="col">Room Type</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($property['mlsRooms'] as $mylmsRooms)
                                                <tr>
                                                    <td>{{ $mylmsRooms['RoomKey'] }}</td>
                                                    <td>{{ $mylmsRooms['RoomLevel'] }}</td>
                                                    <td>{{ $mylmsRooms['RoomType'] }}</td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                          </table>

                                        {{-- @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif


                        <div class="col-lg-12 col-md-12 col-12">
                            <h5>INDOOR FEATURES</h5>
                            <div class="property_detail_dashbard_list">
                                <div class="row">
                                    @if (isset($property['Interior']) and !empty($property['Interior']))
                                    @foreach ($property['Interior'] as $interior)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($interior['InteriorFeatureSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$interior['InteriorFeatureName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <h5>Community Features</h5>
                            <div class="property_detail_dashbard_list">
                                <div class="row">
                                    @if (isset($property['CommunityFeatures']) && !empty($property['CommunityFeatures']))
                                    @foreach ($property['CommunityFeatures'] as $myComFeature)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($myComFeature['CommunityFeatureSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$myComFeature['CommunityFeatureName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>ARCHITECTURAL STYLE</h5>
                                <div class="row">
                                    @if (isset($property['ArchitecturalStyle']) && !empty($property['ArchitecturalStyle']))
                                    @foreach ($property['ArchitecturalStyle'] as $proArchi)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($proArchi['ArchitecturalSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$proArchi['ArchitecturalName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Structure Type</h5>
                                <div class="row">
                                    @if (isset($property['StructureType']) && !empty($property['StructureType']))
                                    @foreach ($property['StructureType'] as $myStrType)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($myStrType['StructureTypeName']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$myStrType['StructureTypeName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Water Source</h5>
                                <div class="row">
                                    <div class="col-12">
                                        @if (isset($property['WaterSource']) && !empty($property['WaterSource']))
                                        <table class="table table-bordered">
                                            <tbody>
                                                @foreach ($property['WaterSource'] as $mywaterSource)
                                                <tr>
                                                    <td>{{ $mywaterSource['WaterSourceName'] }}</td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                          </table>
                                        @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Exterior Features</h5>
                                <div class="row">
                                    @if (isset($property['ExteriorFeaturs']) && !empty($property['ExteriorFeaturs']))
                                    @foreach ($property['ExteriorFeaturs'] as $exterior)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($exterior['ExterFeatureSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$exterior['ExterFeatureName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Outdoor Amenities</h5>
                                <div class="row">
                                    @if (isset($property['outdoorAmenities']) && !empty($property['outdoorAmenities']))
                                    @foreach ($property['outdoorAmenities'] as $outdoor)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($outdoor['OutdooramenitySelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$outdoor['OutdooramenityName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Parking</h5>
                                <div class="row">
                                    @if (isset($property['ParkingFeature']) && !empty($property['ParkingFeature']))
                                    @foreach ($property['ParkingFeature'] as $parking)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($parking['ParkingFeatureSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$parking['ParkingFeatureName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Roof</h5>
                                <div class="row">
                                    @if (isset($property['PropertyRoof']) && !empty($property['PropertyRoof']))
                                    @foreach ($property['PropertyRoof'] as $roof)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($roof['RoofSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$roof['RoofName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>property View</h5>
                                <div class="row">
                                    @if (isset($property['PropertyView']) && !empty($property['PropertyView']))
                                    @foreach ($property['PropertyView'] as $myview)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <h6><img src="{{asset("public/assets/images/".basename($myview['ProperyViewSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$myview['ProperyViewName']}}</span></h6>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <h6>N/A</h6>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12 col-12">
                            <h4>
                                <strong> Utility Details</strong>
                            </h4>
                            <div class="property_detail_dashbard_list">
                                <h5>tilities</h5>
                                <div class="row">
                                        @if (isset($property['Utilities']) && !empty($property['Utilities']))
                                        @foreach ($property['Utilities'] as $myUtility)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <ul>
                                                <li>
                                                    <h6><img src="{{asset("public/assets/images/".basename($myUtility['UtilitySelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$myUtility['UtilityName']}}</span></h6>
                                                </li>
                                            </ul>
                                        </div>
                                              @endforeach
                                        @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div>
                                        @endif

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Cooling Types</h5>
                                <div class="row">
                                        @if (isset($property['coolingTypes']) && !empty($property['coolingTypes']))
                                        @foreach ($property['coolingTypes'] as $cooling)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <ul>
                                                <li>
                                                    <h6><img src="{{asset("public/assets/images/".basename($cooling['CoolingTypeSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$cooling['CoolingTypeName']}}</span></h6>
                                                </li>
                                            </ul>
                                        </div>
                                              @endforeach
                                        @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div>
                                        @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Heating Types</h5>
                                <div class="row">
                                        @if (isset($property['heatingTypes']) && !empty($property['heatingTypes']))
                                        @foreach ($property['heatingTypes'] as $heating)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <ul>
                                                <li>
                                                    <h6><img src="{{asset("public/assets/images/".basename($heating['HeatingTypeSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$heating['HeatingTypeName']}}</span></h6>
                                                </li>
                                            </ul>
                                        </div>
                                              @endforeach
                                        @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div>
                                        @endif

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">
                                <h5>Heating Fuel</h5>
                                <div class="row">
                                        @if (isset($property['heatingFuel']) && !empty($property['heatingFuel']))
                                        @foreach ($property['heatingFuel'] as $fuel)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <ul>
                                                <li>
                                                    <h6><img src="{{asset("public/assets/images/".basename($fuel['HeatingFuelSelectedIcon']))}}" class="img-fluid check_icons_red" alt=""> <span>{{$fuel['HeatingFuelName']}}</span></h6>
                                                </li>
                                            </ul>
                                        </div>
                                              @endforeach
                                        @else
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <h6>N/A</h6>
                                            </div>
                                        @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4>
                                <strong> Location</strong>
                            </h4>

                            <div class="property_detail_dashbard_list">
                                {{-- <h5>Address</h5> --}}
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <ul class="skzLeft">
                                            <li>
                                                <p> Address:
                                                    <span>
                                                        @if (isset($property['PropertyAddress']))
                                                        {{ $property['PropertyAddress'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p> Country:
                                                    <span>
                                                        @if (isset($property['Country']))
                                                        {{ $property['Country'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>

                                            </li>
                                            <li>
                                                <p> City:
                                                    <span>
                                                        @if (isset($property['CityName']))
                                                        {{ $property['CityName'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>

                                            </li>
                                            <li>
                                                <p> State / Province:
                                                    <span>
                                                        @if (isset($property['StateOrProvince']))
                                                        {{ $property['StateOrProvince'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Postal / Zip code:
                                                    <span>
                                                        @if (isset($property['PostalCode']))
                                                        {{ $property['PostalCode'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <ul class="skzLeft">
                                            <li>
                                                <p>Longitude:
                                                    <span>
                                                        @if (isset($property['PropertyLongitude']))
                                                        {{ $property['PropertyLongitude'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Latitude:
                                                    <span>
                                                        @if (isset($property['PropertyLatitude']))
                                                        {{ $property['PropertyLatitude'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>MLS Area:
                                                    <span>
                                                        @if (isset($property['PropertyArea']))
                                                        {{ $property['PropertyArea'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Property Directions:
                                                    <span>
                                                        @if (isset($property['PropertyDirections']))
                                                        {{ $property['PropertyDirections'] }}
                                                       @else
                                                           N/A
                                                       @endif
                                                    </span>
                                                </p>
                                            </li>
                                            {{-- <li>
                                                <h6>Region: </h6>
                                                <p>California D</p>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="property_detail_dashbard_list">
                                <h4>
                                    <strong> Floor Plan D</strong>
                                </h4>
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <ul>
                                            <li>
                                                <h6>Floor: </h6>
                                                <p>First Floor</p>
                                            </li>
                                            <li>
                                                <h6>Floor Plan Title: </h6>
                                                <p>FF 122</p>
                                            </li>
                                            <li>
                                                <h6>Size in Sq Ft: </h6>
                                                <p>2412 Sq Ft</p>
                                            </li>
                                            <li>
                                                <h6>Size of Rooms in Sq Ft: </h6>
                                                <p>150 Sq Ft</p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>

@endsection
