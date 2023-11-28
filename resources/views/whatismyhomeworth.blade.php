@extends('properties.layouts.main')

@section('content')

@if (
        isset($apiData) && isset($apiData[0]['property/value']) &&
        isset($apiData[0]['property/value']['result']) &&
         isset($apiData[0]['property/value']['result']['value'])
     )

<section class="home_estimateSec1">
    <div class="container">
        <div class="home_estimateSec1_wrap">
        <p class="paragraph">ARIS360 Estimate for
            <a href="javascript:void(0)" class="skzMysk">
                {{ $apiData[0]['address_info']['address_full'] }}
            </a>
        </p>
        <div class="aris_estimate_sec_content">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                    <div class="arisestimate_content_list text-center">
                        <small>Upper Value</small>
                        <p>${{
                            number_format($apiData[0]['property/value']['result']['value']['price_upr'])
                        }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                    <div class="arisestimate_content_list text-center">
                        <small>Average Value</small>
                        <p>${{
                            number_format($apiData[0]['property/value']['result']['value']['price_mean'])
                        }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-6">
                    <div class="arisestimate_content_list text-center">
                        <small>Lower Value</small>
                        <p>${{
                            number_format($apiData[0]['property/value']['result']['value']['price_lwr'])
                        }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-4 col-12 col-lg-4 col-md-4 col-sm-6">
                    <div class="arisestimate_content_list text-center">
                        <small>Confidence Score</small>
                        <p>{{
                            confidenceScore($apiData[0]['property/value']['result']['value']['fsd'])
                        }}%</p>
                    </div>
                </div>
            </div>
            {{-- <ul class="arisestimate_content_list">
                <li>
                    <p>$345456</p>
                    <small>Upper Value</small>
                </li>
                <li>
                    <p>$345456</p>
                    <small>Average Value</small>
                </li>
                <li>
                    <p>$345456</p>
                    <small>Lower Value</small>
                </li>
            </ul> --}}
        </div>
        {{-- <div class="home_estimateSec1_content">
            <div class="estimate_propertyBox_img">
                <img src="public/assets/images/sell-inner-img2.jpg" class="img-fluid" alt="">
            </div>

            <div class="estimate_values">
                <div class="estimate_values_1">
                    <p>Upper Value</p>
                    <h5><small>$</small> 9876897</h5>
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="estimate_values_1">
                    <p>Average Value</p>
                    <h5><small>$</small> 76576</h5>
                    <div class="progress">
                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="estimate_values_1">
                    <p>Lower Value</p>
                    <h5><small>$</small> 3455</h5>
                    <div class="progress">
                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="estimate_values_confidenceScore">
                <p>Confidence Score</p>
                <h1><small>$</small> 4565678</h1>
            </div>

            <h1>
                $number_format( $apiData[0]['property/value']['result']['value']['price_upr'], 2, ",", ",")

            </h1>
        </div> --}}
        <p class="btm_para">This house estimate is powerd by House Canary. ARIS360 does not guarantee any of those numbers.</p>
        </div>
    </div>
</section>
@endif


{{-- <section class="home_estimateSec2">
    <div class="container">
        <div class="home_estimateSec2_slider">
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="javascript:void(0)">
                                    <figure class="image">
                                        <img src="public/assets/images/sell-inner-img2.jpg" alt="">
                                    </figure>
                                </a>
                                <span class="category">Sold</span>
                            </div>
                            <div class="lower-content">
                                <div class="price-info custom_price_info">
                                    <h4 class="mt-2"><span class="text-danger">Sold Price:</span> $ 456567</h4>
                                </div>
                                <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                    <li>5 Beds</li>
                                    <li>7 Baths</li>
                                    <li>1240 sq. ft.</li>
                                </ul>
                                <div class="listing_key_section">
                                    <ul>
                                        <li>
                                            <span class="text-danger">Property Category:</span>

                                        </li>
                                        <li>
                                            <p>Single Family Home</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="mapouter" id="xkykksdf" data-id="<?php echo $apiData[0]['address_info']['lat']?>" data-text="{{ $apiData[0]['address_info']['lng'] }}">
                    <div style="width: 100%; height: 100%;" class="gmap_canvas"   id="skzMapEst">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="row mt-5">
    <div class="col-12">
        {{-- <div class="mapouter" id="xkykksdf" data-id="<?php echo $apiData[0]['address_info']['lat']?>" data-text="{{ $apiData[0]['address_info']['lng'] }}">
            <div style="width: 100%; height: 100%;" class="gmap_canvas"   id="skzMapEst">
            </div>
        </div> --}}

        {{-- {{ var_dump($apiData[0]['address_info']) }} --}}
        <div id="map" class="in-google-map"></div>
    </div>
</div>


<section class="agent-resource-center-sec3 mt-4">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title">How We Calculate the ARIS360 Estimate </p>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">The Most Precise Online Estimation</p>
                    <p class="para">The ARIS360 Estimate is the most precise of the top automatic home-value algorithms, according to an independent analysis of on-market properties. In comparison to other top online home-value estimators, we offer the most accurate estimate of a home's value—more than twice as likely to be within 3% of the home's selling price.</p>
                    {{-- <div class="spinner-grow" role="status">
                        <span class="sr-only">Loading...</span>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">Based on The Most Recent Information Available</p>
                    <p class="para">ARIS360 has full and direct access to Multiple Listing Services (MLS), the database used by realtors to list properties. Calculate the current market value of your property using MLS data on recently sold homes in your area.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">Backed by ARIS360 Agent Expertise</p>
                    <p class="para">Once you're ready for a professional home appraisal, a ARIS360 estate agent will personally appraise your home and suggest a price based on its unique characteristics. For a free consultation, speak to a ARIS360 representative who specializes in your area. </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
    function initialize() {

initMap();



}

var map, marker;



function initMap() {

map = new google.maps.Map(document.getElementById('map'), {

    center: {

        lat: -34.397,

        lng: 150.644

    },

    zoom: 11

});



// const geocoder = new google.maps.Geocoder();

// const infowindow = new google.maps.InfoWindow();



var geocoder, map, address;



var address = $('.skzMysk').text();



codeAddress(address);





}



function codeAddress(address) {



    var componentForm = {

        locality: 'long_name',

        administrative_area_level_1: 'short_name',

    };

    const infowindow = new google.maps.InfoWindow();

    geocoder = new google.maps.Geocoder();

    geocoder.geocode({

        'address': address

    }, function(results, status) {

        if (status == google.maps.GeocoderStatus.OK) {

            var myOptions = {

                zoom: 17,

                center: results[0].geometry.location,

                mapTypeId: google.maps.MapTypeId.ROADMAP

            }

            map = new google.maps.Map(document.getElementById("map"), myOptions);



            const marker = new google.maps.Marker({

                map: map,

                position: results[0].geometry.location,

                draggable: true,

            });



            // google.maps.event.addListener(marker, 'dragend', function() {

            //     geocoder.geocode({

            //                 latLng: marker.getPosition(),

            //               }, function(responses) {

            //                 if (responses && responses.length > 0) {

            //                   marker.formatted_address = responses[0].formatted_address;

            //                    $('#autocomplete').val(marker.formatted_address);

            //                   for (var component in componentForm) {

            //                         document.getElementById(component).value = '';

            //                         document.getElementById(component).disabled = false;

            //                     }

            //                     for (var i = 0; i < responses[0].address_components.length; i++) {

            //                         var addressType = responses[0].address_components[i].types[0];

            //                         if (componentForm[addressType]) {

            //                             var val = responses[0].address_components[i][componentForm[

            //                                 addressType]];

            //                             document.getElementById(addressType).value = val;

            //                         }

            //                     }







            //                  } else {

            //                    marker.formatted_address = 'Cannot determine address at this location.';

            //                  }

            //                  infowindow.setContent(marker.formatted_address);

            //                  infowindow.open(map, marker);

            //               });

            //             infowindow.open(map, marker);

            // });



            infowindow.setContent(results[0].formatted_address);

            infowindow.open(map, marker);



            // for (var component in componentForm) {

            //     document.getElementById(component).value = '';

            //     document.getElementById(component).disabled = false;

            // }





            // for (var i = 0; i < results[0].address_components.length; i++) {

            //     var addressType = results[0].address_components[i].types[0];

            //     if (componentForm[addressType]) {

            //         var val = results[0].address_components[i][componentForm[addressType]];

            //         document.getElementById(addressType).value = val;

            //     }

            // }



            // $('#locality').val(results[0].address_components[4].long_name);

            // $('#administrative_area_level_1').val();

        }

    });

}

</script>
