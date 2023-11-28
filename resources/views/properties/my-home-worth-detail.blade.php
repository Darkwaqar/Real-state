@extends('properties.layouts.main')
@section('content')

<style>
    #map {
            width: 100%;
            height: 400px;
        }

        #locationField,
        #controls {
            position: relative;
            width: 480px;
        }

        /* #autocomplete {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 99%;
            } */

        .label {
            text-align: right;
            font-weight: bold;
            width: 100px;
            color: #303030;
        }

        #address {
            border: 1px solid #000090;
            background-color: #f0f0ff;
            width: 480px;
            padding-right: 2px;
        }

        #address td {
            font-size: 10pt;
        }

        .field {
            width: 99%;
        }

        .slimField {
            width: 80px;
        }

        .wideField {
            width: 200px;
        }

        #locationField {
            height: 20px;
            margin-bottom: 2px;
        }
</style>
@if(Session::has('success'))
    <script>
        $(document).ready(function() {
            $("#exampleModalsubmit").modal('show');
        });
    </script>
    <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="form_submitting_content">
                        <span class="check_icon"><i class="fas fa-check-circle"></i></span>
                        <h3>Thank You!</h3>
                        <p>{{ Session::get('success') }}.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endif
        <!-- myprofile-section -->
        <section class="agentInfo-wrapper myprofile-section">
            <div class="container-fluid">
                <div class="tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="list_tab1 tab-btn active-btn" data-tab="#tab-1"><span>1</span>Confirm Your Address</li>
                        <li class="list_tab2 tab-btn" data-tab="#tab-2"><span>2</span>Valuation Plan</li>
                        <li class="list_tab3 tab-btn" data-tab="#tab-3"><span>3</span>Contact Details</li>

                    </ul>
                    <div class="tabs-content container">
                        <div class="tab active-tab" id="tab-1">
                            <div class="general-information">



                                <div class="inner-box default-form">
                                    <div class="row clearfix">

                                        <div class="col-12 column mb-3">
                                            <div class="title-sec">
                                               <p class="title my-2 p-0">
                                                    Confirm Your Address
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 column">

                                        <div id="map" class="in-google-map">

		                                </div>

                                        </div>

                                        <!--<div class="col-12 column my-3">-->
                                        <!--    <div class="title-sec">-->
                                        <!--       <p class="title my-2 p-0 text-center">-->
                                        <!--            Let's Get Your Valuation Started!-->
                                        <!--        </p>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-12 column my-3 text-center">
                                            <p class="own-text">
                                                Is This The Home You Own Today?
                                            <p>
                                        </div>
                                        <div class="col-12 column mb-2 text-center">
                                            <input type="text" name="address" value="{{ $address }}" required id="autocomplete" readonly>



                                        </div>

                                        <div class="col-12 column mb-2 text-center">
                                            <a href="#" class="theme-btn btn-one btn_next1">Confirm</a>
                                        </div>

                                        <div class="col-12 column mb-2 text-center">
                                            <p class="own-text">
                                              Not Your Exact Address?
                                            <p>
                                        </div>

                                        <div class="col-12 column mb-2 text-center">
                                            <a href="{{url()->previous()}}" class="theme-btn btn-one">Edit Address</a>
                                        </div>

                                        <!--<div class="col-12 d-flex justify-content-end">-->
                                        <!--    <button class="theme-btn btn-one btn_next1">Next</button>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{route('store_property_lead')}}" method="POST">
                         @csrf
                        <div class="tab" id="tab-2">
                            <div class="property-details">

                                <input type="hidden" name="address" value="{{ $address }}" required id="autocomplete" readonly>
                                <input type="hidden" name="city" required id="locality" readonly>
                                <input type="hidden" name="state" required id="administrative_area_level_1" readonly>

                                <div class="inner-box default-form">
                                    <div class="row clearfix">
                                        <div class="col-12 column my-3">
                                                <div class="title-sec">
                                                   <p class="title my-2 p-0">
                                                        Valuation Plan
                                                    </p>
                                                </div>
                                        </div>
                                        <div class="property_select_field">
                                            <div class="field-input">
                                                <label>What is your property type?</label>
                                                <div class="select-box">
                                                    <select class="wide" name="property_type" required>
                                                        <option data-display="Property Type">Property Type</option>
                                                        @php
                                                        $propertyTypes = categoriesCount();
                                                            //var_dump($cities);
                                                        @endphp
                                                       @if (isset($propertyTypes) && count($propertyTypes) > 0)

                                                       @foreach ($propertyTypes as $value)
                                                       @if ($value->properties_count > 0 )
                                                        <option value="{{$value->StructureTypeName}}">{{$value->StructureTypeName}}
                                                        </option>
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 column">
                                            <h5>When Would You Plan To Sell Your House ? </h5>
                                        </div>


                                         <div class="col-lg-12 column mt-4">
                                            <!--<button class="theme-btn btn-one">Yes</button>-->
                                            <!--<button class="theme-btn btn-one">No</button>-->

                                            <div class="selector d-flex justify-content-between">
                                            <div class="selecotr-item">
                                                    <input type="radio" id="radio7" name="plan_to_sell_home" value="Immediately" class="selector-item_radio" checked >
                                                    <label for="radio7" class="selector-item_label">Immediately</label>
                                                </div>
                                                <div class="selecotr-item">
                                                    <input type="radio" id="radio3" name="plan_to_sell_home" value="Next 3 Months" class="selector-item_radio">
                                                    <label for="radio3" class="selector-item_label">Next 3 Months</label>
                                                </div>
                                                <div class="selecotr-item">
                                                    <input type="radio" id="radio4" name="plan_to_sell_home" value="Next 3-6 Months" class="selector-item_radio">
                                                    <label for="radio4" class="selector-item_label">Next 3-6 Months</label>
                                                </div>
                                                <div class="selecotr-item">
                                                    <input type="radio" id="radio5" name="plan_to_sell_home" value="Next 6-12 Months" class="selector-item_radio">
                                                    <label for="radio5" class="selector-item_label">Next 6-12 Months</label>
                                                </div>
                                                <div class="selecotr-item">
                                                    <input type="radio" id="radio6" name="plan_to_sell_home" value="Next 12+ Months" class="selector-item_radio">
                                                    <label for="radio6" class="selector-item_label">Next 12+ Months</label>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-12 column my-3">
                                                <div class="title-sec">
                                                   <p class="title my-2 p-0">
                                                        Any Other Agent
                                                    </p>
                                                </div>
                                        </div>

                                        <div class="col-lg-12 column">
                                            <h5>Have You Signed An Agreement With An Agent To Help You Sell Your Home ? </h5>
                                        </div>
                                        <div class="col-lg-12 column mt-4 mb-4">
                                            <!--<button class="theme-btn btn-one">Yes</button>-->
                                            <!--<button class="theme-btn btn-one">No</button>-->

                                            <div class="selector d-flex justify-content-start">
                                                <div class="selecotr-item">
                                                    <input type="radio" id="radioaa" name="any_agent" value="Yes" class="selector-item_radio">
                                                    <label for="radioaa" class="selector-item_label">Yes</label>
                                                </div>
                                                <div class="selecotr-item">
                                                    <input type="radio" id="radiobb" name="any_agent" value="No" class="selector-item_radio" checked>
                                                    <label for="radiobb" class="selector-item_label">No</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-between my-3 mt-3">
                                                <a class="theme-btn btn-two btn_previous1">Previous</a>

                                                <a class="theme-btn btn-one btn_next2">Next</a>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab" id="tab-3">
                            <div class="property-details">

                                <div class="inner-box default-form">
                                    <div class="row clearfix property-details2">
                                        <div class="col-lg-12 column">

                                            <div class="buying-Bottom-form">
                                                <form>
                                                    <h4 class="text-center p-0">Confirm Your Contact Details</h4>

                                                    <div class="buying-form-field mt-4">
                                                        <label>Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="name"  placeholder="name" required>
                                                    </div>
                                                    <div class="buying-form-field">
                                                        <label>Email<span class="text-danger">*</span></label>
                                                        <input type="email" name="email" placeholder="email" required>
                                                    </div>
                                                    <div class="buying-form-field">
                                                        <label>Contact<span class="text-danger">*</span></label>
                                                        <input type="text" name="contact" placeholder="contact" required>
                                                        <input type="hidden" name="lead_type" value="Seller">
                                                    </div>

                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="d-flex justify-content-between my-3 mt-3">
                                        <a class="theme-btn btn-two btn_previous2">Previous</a>
                                        <button type="submit" class="theme-btn btn-one">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </form>




                    </div>
                </div>
            </div>
        </section>
          <script src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize" defer></script>
        <!-- myprofile-section end -->


        <style>

        iframe.map {
                        max-height: 300px;
                    }

        h5{
            font-weight: 500;
        }

        .selector{
            position:relative;
            /*width:60%;*/
            background-color:transparent;
            /*height:80px;*/
            display:flex;
            justify-content:space-around;
            align-items:center;
            border-radius:9999px;
            /*box-shadow:0 0 16px rgba(0,0,0,.2);*/
            gap: 10px;
            flex-wrap: wrap;
        }
        .selecotr-item{
            position:relative;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .selector-item_radio{
            appearance:none;
            display:none;
        }
        .selector-item_label{
            position: relative;
            height: 50px;
            width: 180px;
            border: 1px solid gray;
            text-align: center;
            border-radius: 9999px;
            line-height: 3 !important;
            margin: 0;
            border-radius: 6px;
            padding: 0;
            font-weight: 900;
            transition-duration: .5s;
            transition-property: transform, color, box-shadow;
            transform: none;
        }
        .selector-item_radio:checked + .selector-item_label{
            /*background-color:var(--blue);*/
            /*color:var(--white);*/
            /*box-shadow:0 0 4px rgba(0,0,0,.5),0 2px 4px rgba(0,0,0,.5);*/
            /*transform:translateY(-2px);*/
            border: 1px solid #DE1E25;
            color: #DE1E25;
        }
        @media screen and (max-width: 425px){
.property-details {
    padding: 20px 0px !important;
}
}
        </style>


        <!-- Sell Your Home Content End's Here -->
    <script>
        $(document).ready(function () {
            // Next
            $('.btn_next1').click(function () {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next2').click(function () {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next3').click(function () {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next4').click(function () {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next5').click(function () {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next6').click(function () {
                $('.list_tab7').click();
                $('.scroll-to-target').click();

            });
            // Previous
            $('.btn_previous1').click(function () {
                $('.list_tab1').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous2').click(function () {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous3').click(function () {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous4').click(function () {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous5').click(function () {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous6').click(function () {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
        });
    </script>
    <script>
        $(document).ready(function (){
            var wrapper2 = $(".input_fields_wrap2");
            var add_review_button = $(".add_review_button");
            $(add_review_button).click(function (e) { //on add input button click
                    e.preventDefault();

                    $(wrapper2).append('<div class="input-group mb-1"><input placeholder="" type="text" name="mytext[]" class="form-control"></div>'); //add input box
                });
        });
    </script>

    <!-- Modal -->
<div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">-->
      <!--  <h5 class="modal-title" id="exampleModalLabel">List Your Property</h5>-->
      <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
      <!--    <span aria-hidden="true">&times;</span>-->
      <!--  </button>-->
      <!--</div>-->
      <div class="modal-body">
        <div class="form_submitting_content">
            <span class="check_icon"><i class="fas fa-check-circle"></i></span>
            <h3>Great!</h3>
            <p>A Representative will call you within 24 Business Hours to get the best deal.</p>

            <!--<p>To share more details on our preferred partner</p>-->
            <!--<p>and if desired - introduce you to them.</p>-->
            <a href="{{ route('home') }}" class="theme-btn btn-one my-4 text-center" >Back To Home Page</a>
        </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>

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

            var address = $('#autocomplete').val();

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

                        google.maps.event.addListener(marker, 'dragend', function() {
                            geocoder.geocode({
                                        latLng: marker.getPosition(),
                                      }, function(responses) {
                                        if (responses && responses.length > 0) {
                                          marker.formatted_address = responses[0].formatted_address;
                                           $('#autocomplete').val(marker.formatted_address);
                                          for (var component in componentForm) {
                                                document.getElementById(component).value = '';
                                                document.getElementById(component).disabled = false;
                                            }
                                            for (var i = 0; i < responses[0].address_components.length; i++) {
                                                var addressType = responses[0].address_components[i].types[0];
                                                if (componentForm[addressType]) {
                                                    var val = responses[0].address_components[i][componentForm[
                                                        addressType]];
                                                    document.getElementById(addressType).value = val;
                                                }
                                            }



                                         } else {
                                           marker.formatted_address = 'Cannot determine address at this location.';
                                         }
                                         infowindow.setContent(marker.formatted_address);
                                         infowindow.open(map, marker);
                                      });
                                    infowindow.open(map, marker);
                        });

                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);

                        for (var component in componentForm) {
                            document.getElementById(component).value = '';
                            document.getElementById(component).disabled = false;
                        }


                        for (var i = 0; i < results[0].address_components.length; i++) {
                            var addressType = results[0].address_components[i].types[0];
                            if (componentForm[addressType]) {
                                var val = results[0].address_components[i][componentForm[addressType]];
                                document.getElementById(addressType).value = val;
                            }
                        }

                        // $('#locality').val(results[0].address_components[4].long_name);
                        // $('#administrative_area_level_1').val();
                    }
                });
            }







        // Code for Fetch Address using autocomplete -- End
    </script>

@endsection
