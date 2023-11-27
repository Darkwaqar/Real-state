@extends('properties.layouts.main')
@section('content')

<section>
    <div class="row ">
        <div class="col-lg-7 col-md-7 col-12 featured_propertise_left">
            <div class="search-field-section style-two mb-3">
                <div class="inner-container">
                    <div class="search-field">
                    <div class="inner-box">
                        <div class="top-search">
                        <form action="#" method="post" class="px-3">
                            <input type="hidden" name="_token" value="HKrTaVx7ahekyxnLaPK99THIHqOc3qys41DDyQuE">
                            <div class="row d-flex justify-content-end align-items-center py-3">
                            <div class="col-12 search-column mb-2">
                                <div class="form-group">
                                 <label>Search Property</label>
                                <div class="field-input">
                                    <i class="fas fa-search"></i>
                                    <input type="search" name="search" id="search" placeholder="Address, Neighborhood, City, or Zip" required="">
                                </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                    <button class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                        <span>PRICE</span>
                                        <i class="fas fa-angle-down"> </i>
                                    </button>

                                    <div class="advanced-search" style="top: 55px !important">
                                        <div class="range-box">

                                            <div class="price-range">

                                                <h6>Select Price Range</h6>

                                                <div class="price-input">
                                                    <div class="field">
                                                      <span>Min</span>
                                                      <input type="number" class="input-min minPrice" name="minPrice" value="0">
                                                    </div>
                                                    <div class="separator">-</div>
                                                    <div class="field">
                                                      <span>Max</span>
                                                      <input type="number" class="input-max maxPrice" name="maxPrice" value="4900000">
                                                    </div>
                                                 </div>
                                                 <div class="slider">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="range-input mb-0">
                                                    <input type="range" class="range-min minPrice" min="0" name="minPrice" max="10000000" value="0" step="100" style="margin-bottom: -5px;">
                                                    <input type="range" class="range-max maxPrice" min="0" name="maxPrice" max="10000000" value="4900000" step="100">
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" id="priceButton" class="btn btn-block done_btn mt-4">Done</button>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                <button class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                    <span>BEDS &amp; BATHS</span>
                                    <i class="fas fa-angle-down"> </i>
                                </button>

                                <div class="advanced-search" style="top: 55px !important">

                                    <div class="form-group">

                                        <label>Number of Bedrooms</label>

                                        <div class="btn-group search_btn_group" role="group">
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="0" id="no_of_bedroom" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom">Any</label>

                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="1" id="no_of_bedroom1" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom1">1+</label>

                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="2" id="no_of_bedroom2" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom2">2+</label>

                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="3" id="no_of_bedroom3" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom3">3+</label>

                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="4" id="no_of_bedroom4" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom4">4+</label>

                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="5" id="no_of_bedroom5" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom5">5+</label>

                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <label>Number of Bathrooms</label>

                                        <div class="btn-group search_btn_group" role="group">
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="0" id="no_of_bathroom" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom">Any</label>

                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="1" id="no_of_bathroom1" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom1">1+</label>

                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="2" id="no_of_bathroom2" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom2">2+</label>

                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="3" id="no_of_bathroom3" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom3">3+</label>

                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="4" id="no_of_bathroom4" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom4">4+</label>

                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="5" id="no_of_bathroom5" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom5">5+</label>

                                        </div>
                                    </div>


                                    <button type="button" id="bathButton" class="btn btn-block done_btn mt-4">Done</button>

                                </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                <button class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                    <span>HOME TYPE</span>
                                    <i class="fas fa-angle-down"> </i>
                                </button>

                                <div class="advanced-search" style="top: 55px !important">

                                    <div class="form-group">

                                        <label>Home Type</label>

                                        <div class="search_btn_group" role="group">

                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="1" id="home_type1" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type1">House</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="2" id="home_type2" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type2">Manufactured House</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="3" id="home_type3" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type3">Multi Family</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="4" id="home_type4" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type4">Townhouse</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="5" id="home_type5" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type5">Unspecified</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="6" id="home_type6" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type6">Office</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="7" id="home_type7" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type7">Duplex</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="8" id="home_type8" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type8">Triplex</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="9" id="home_type9" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type9">Quadruplex</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="10" id="home_type10" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type10">Retail</label>


                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="11" id="home_type11" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type11">Industrial</label>









                                        </div>
                                    </div>


                                    <button type="button" id="homeTypeButton" class="btn btn-block done_btn mt-4">Done</button>

                                </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                <button class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                    MORE<i class="fas fa-angle-down ml-2"></i>
                                </button>
                                <div class="advanced-search" style="top: 65px !important; left:auto!important; padding-left:25px; padding-right:10px">
                                     <div class="close-btn">
                                                                    <a href="#" class="close-side-widget"><i
                                                                            class="far fa-times"></i></a>
                                                                </div> -->
                                    <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <label>Distance from Location</label>
                                        <div class="select-box">
                                            <select class="wide" style="display: none;">
                                            <option data-display="Distance from Location">
                                                Distance from Location
                                            </option>

                                            <option value="2">
                                                Within 1 Miles
                                            </option>
                                            <option value="3">
                                                Within 2 Miles
                                            </option>
                                            <option value="4">
                                                Within 3 Miles
                                            </option>
                                            <option value="1">
                                                Within 4 Miles
                                            </option>
                                            </select><div class="nice-select wide" tabindex="0"><span class="current">Distance from Location</span><ul class="list"><li data-value="Distance from Location" data-display="Distance from Location" class="option selected">
                                                Distance from Location
                                            </li><li data-value="2" class="option">
                                                Within 1 Miles
                                            </li><li data-value="3" class="option">
                                                Within 2 Miles
                                            </li><li data-value="4" class="option">
                                                Within 3 Miles
                                            </li><li data-value="1" class="option">
                                                Within 4 Miles
                                            </li></ul></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <label>Bedrooms</label>
                                        <div class="select-box">
                                            <select class="wide rooms" style="display: none;">
                                                <option data-display="Max Rooms" value="5">
                                                    Max Rooms
                                                </option>
                                                <option value="1">One Rooms</option>
                                                <option value="2">Two Rooms</option>
                                                <option value="3">Three Rooms</option>
                                                <option value="4">Four Rooms</option>
                                            </select><div class="nice-select wide rooms" tabindex="0"><span class="current">Max Rooms</span><ul class="list"><li data-value="5" data-display="Max Rooms" class="option selected">
                                                    Max Rooms
                                                </li><li data-value="1" class="option">One Rooms</li><li data-value="2" class="option">Two Rooms</li><li data-value="3" class="option">Three Rooms</li><li data-value="4" class="option">Four Rooms</li></ul></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <label>SORT BY</label>
                                        <div class="select-box">
                                            <select class="wide" style="display: none;">
                                            <option data-display="Most Popular">
                                                Most Popular
                                            </option>
                                            <option value="1">Top Rating</option>
                                            <option value="2">New Rooms</option>
                                            <option value="3">
                                                Classic Rooms
                                            </option>
                                            <option value="4">Luxry Rooms</option>
                                            </select><div class="nice-select wide" tabindex="0"><span class="current">Most Popular</span><ul class="list"><li data-value="Most Popular" data-display="Most Popular" class="option selected">
                                                Most Popular
                                            </li><li data-value="1" class="option">Top Rating</li><li data-value="2" class="option">New Rooms</li><li data-value="3" class="option">
                                                Classic Rooms
                                            </li><li data-value="4" class="option">Luxry Rooms</li></ul></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <label>Floor</label>
                                        <div class="select-box">
                                            <select class="wide floors" style="display: none;">
                                            <option data-display="Select Floor">
                                                Select Floor
                                            </option>
                                            <option value="1">One Floor</option>
                                            <option value="2">Two Floor</option>
                                            <option value="3">Three Floor</option>
                                            <option value="4">Four Floor</option>
                                            <option value="5">Five Floor</option>
                                            </select><div class="nice-select wide floors" tabindex="0"><span class="current">Select Floor</span><ul class="list"><li data-value="Select Floor" data-display="Select Floor" class="option selected">
                                                Select Floor
                                            </li><li data-value="1" class="option">One Floor</li><li data-value="2" class="option">Two Floor</li><li data-value="3" class="option">Three Floor</li><li data-value="4" class="option">Four Floor</li><li data-value="5" class="option">Five Floor</li></ul></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <label>Bath</label>
                                        <div class="select-box">
                                            <select class="wide baths" style="display: none;">
                                            <option data-display="Max Bath" value="5">
                                                Max Bath
                                            </option>
                                            <option value="1">1 Bath</option>
                                            <option value="2">2 Baths</option>
                                            <option value="3">3 Baths</option>
                                            <option value="4">4 Baths</option>
                                            </select><div class="nice-select wide baths" tabindex="0"><span class="current">Max Bath</span><ul class="list"><li data-value="5" data-display="Max Bath" class="option selected">
                                                Max Bath
                                            </li><li data-value="1" class="option">1 Bath</li><li data-value="2" class="option">2 Baths</li><li data-value="3" class="option">3 Baths</li><li data-value="4" class="option">4 Baths</li></ul></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <label>Parking Spots</label>
                                        <div class="select-box">
                                            <select class="wide parkings" style="display: none;">
                                            <option data-display="No Spot">
                                                No Spot
                                            </option>
                                            <option value="1">1 Spot</option>
                                            <option value="2">2 Spots</option>
                                            <option value="3">3 Spots</option>
                                            <option value="4">4 Spots</option>
                                            <option value="5">5 Spots</option>
                                            </select><div class="nice-select wide parkings" tabindex="0"><span class="current">No Spot</span><ul class="list"><li data-value="No Spot" data-display="No Spot" class="option selected">
                                                No Spot
                                            </li><li data-value="1" class="option">1 Spot</li><li data-value="2" class="option">2 Spots</li><li data-value="3" class="option">3 Spots</li><li data-value="4" class="option">4 Spots</li><li data-value="5" class="option">5 Spots</li></ul></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="range-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="price-range">
                                            <h6>Select Price Range</h6>
                                            <div class="range-input">
                                            <div class="input">
                                                <input type="text" class="property-amount price-prop" name="field-name" readonly="" style="height:15px!important">
                                            </div>
                                            </div>
                                            <div class="price-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 49%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 49%;"></span></div>
                                        </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="area-range">
                                            <h6>Select Area</h6>
                                            <div class="range-input">
                                            <div class="input">
                                                <input type="text" class="area-range area-prop" name="field-name" readonly="" style="height:15px!important">
                                            </div>
                                            </div>
                                            <div class="area-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="width: 52%; left: 1.33333%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 1.33333%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 53.3333%;"></span></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 search-column">
                                <button class="theme-btn btn-one clear_search nav-btn nav-toggler navSidebar-button search__toggler w-100">
                                    <span>Clear Search</span>
                                </button>
                            </div>

                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            <div id="googleMap" style="width:100%;height:850px; position: fixed;" class=""></div>
        </div>
        <div class="col-md-12 col-lg-5 offset-0 offset-sm-7 pt-5">
            <h3>Real Estate & Homes For Sale</h3>
            <div class="row my-4" style="margin-right: 0px;
                margin-left: -20px;">

    @foreach ($properties['Featured'] as $property)
                <div class="col-md-6 col-12">

                    <a href="{{ route('featured-properties-detail') }}">
                        <div class="feature-block">

                        <div class="feature-block-one">

                            <div class="inner-box">

                               <div class="image-box">
                        <a href="{{ route('home.property-detail', ['id' => $property->id]) }}">
                        <figure class="image"><img src="{{asset("public/images/".basename($property->MediaURL))}}"
                        alt="">  </figure>

                    </a>

                    <!--<div class="batch"></div>-->

                    <span class="category">Featured</span>

                </div>

                                <div class="lower-content pt-4 pb-0">





                                    <div
                                        class="price-box mb-3 d-flex justify-content-between align-items-center">

                                        <div class="price-info pull-left">



                                            <h4 class="mt-2">$ {{number_format($property->PropetySellPrice)}}</h4>

                                        </div>

                                        <ul class="other-option pull-right clearfix">



                                            <li><a href="#"><i class="icon-13"></i></a></li>

                                        </ul>

                                    </div>



                                    <ul class="more-details clearfix mb-2">


                                    <li><i class="icon-14"></i> {{$property->Bedrooms}} Beds</li>

                                    <li><i class="icon-15"></i> {{$property->BathroomsFull}} Baths</li>

                                    <li><i class="icon-16"></i> {{$property->PropertyArea}} {{$property->PropertyAreaUnits}}</li>

                                    </ul>

                                        <div class="title-text">

                                            <h5><a href="#">{{$property->PropertyAddress}}</a></h5>
                                        </div>

                                        <div class="listing_key_section">
                                            <ul>
                                                <li>
                                                    <p>#{{$property->ListingKeyNumeric}}</p>
                                                </li>
                                                <li>
                                                    <p>House</p>
                                                </li>
                                                <li>

                                                </li>
                                            </ul>
                                        </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    </a>
                </div>
                @endforeach()


            </div>
        </div>
    </div>
</section>

     Script for Map
    <script>
        function myMap() {

            var locations = ` <div class="feature-block">

                <div class="feature-block-one mb-0">

                    <div class="inner-box map_card">

                        <div class="image-box">

                            <figure class="image"><img src="public/assets/images/properties/property1.jpg" alt="">
                            </figure>


                        </div>

                        <div class="lower-content pt-4 pb-0">





                            <div class="price-box mb-3 d-flex justify-content-between align-items-center">

                                <div class="price-info pull-left">



                                    <h4>$45,000.00</h4>

                                </div>



                            </div>



                            <ul class="more-details clearfix mb-2">

                                <li><i class="icon-14"></i>3 Beds</li>

                                <li><i class="icon-15"></i>2 Baths</li>

                                <li><i class="icon-16"></i>600 Sq Ft</li>

                            </ul>

                            <p> 8950 Melbourne Dr, Colorado Springs, CO 80920</p>



                        </div>

                    </div>

                </div>

            </div>`;



            var data = [
                {
                    s_no: '1',
                    position: { lat: 32.954430818373176, lng: -96.84920783449174 },
                    content: locations,
                    iconImage: {
                        scaledSize: new google.maps.Size(30, 30),
                    }
                }
                ,
                {
                    s_no: '2',
                    position: { lat: 32.956515733245226, lng: -96.88723130014336 },
                    content: locations,
                    iconImage: {
                        // url: "https://icon-library.com/images/view-map-icon/view-map-icon-24.jpg",
                        scaledSize: new google.maps.Size(30, 30),
                    }
                }
            ];


            var mapProp = {
                center: { lat: 32.954430818373176, lng: -96.84920783449174 },
                zoom: 14,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);


            var infoWindow = new google.maps.InfoWindow({
                maxWidth: 320
            });


            for (let i = 0; i < data.length; i++) {

                addmarker(data[i]);
            }


            function addmarker(props) {

                var marker = new google.maps.Marker({
                    position: props.position,
                    map: map,
                });

                if (props.content) {

                    // click on marker icon
                    marker.addListener('click', function () {
                        infoWindow.setContent(props.content);
                        infoWindow.open(googleMap, marker);
                    });

                }

                // if data has own icon
                if (props.iconImage) {
                    marker.setIcon(props.iconImage);
                }

                // if map drag
                map.addListener('drag', function () {

                });

                // if map drag
                map.addListener('click', function () {
                    infoWindow.close(googleMap, marker);
                });
            }

        var autocomplete;

        var search6 = document.getElementById('search');







            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search6), {
                    types: ['geocode']
            });





        }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=myMap"></script>








@endsection
