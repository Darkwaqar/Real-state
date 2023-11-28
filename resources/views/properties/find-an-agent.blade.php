@php
    $metaTitle = 'Find an Agent in Washington | Find Mortgage Agent Washington';
    $metaDescription = "Find a reliable agent in Washington to assist you in your home buying journey.
     Discover experienced mortgage agents in Washington to guide you through the loan process.";
@endphp
@extends('properties.layouts.main')
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')
    <section class="agent-sect1 agents-banners">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="agent-sec1-content-left">

                        <p class="title" style="text-transform:capitalize">{!! $page[0]['content'] !!}</p>

                        <p class="para">{!! $page[1]['content'] !!}</p>

                        {{-- <form action="{{route('real-estate-agent')}}" Method="GET" class="agent-search-field">

                        <input type="text" placeholder="Find an agent in your area" id="agentSearch" onkeyup="codeAddress()" onfocusout="codeAddress()" required>

                        <input type="hidden" name="search" placeholder="Find an agent in your area" id="locality"> --}}

                        <div class="btn-box">
                            <a href="{{ route('real-estate-agent') }}" class="theme-btn btn-one">Find an ARIS360 Prime Agent
                                near you</a>
                        </div>

                        {{-- </form> --}}

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="agent-sect2">
        <div class="container">
            <div class="why-choose-us">
                <p class="title mb-0">{!! $page[2]['content'] !!}</p>
                <p class="para">{!! $page[3]['content'] !!}</p>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img src="public/assets/images/iconn4.png">
                        </div>
                        <p class="title2">{!! $page[4]['content'] !!}</p>
                        <p class="para">{!! $page[5]['content'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img src="public/assets/images/expert-services.png">
                        </div>
                        <p class="title2">{!! $page[6]['content'] !!}</p>
                        <p class="para">{!! $page[7]['content'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img src="public/assets/images/iconn1.png">
                        </div>
                        <p class="title2">{!! $page[8]['content'] !!}</p>
                        <p class="para">{!! $page[9]['content'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img src="public/assets/images/iconn2.png">
                        </div>
                        <p class="title2">{!! $page[10]['content'] !!}</p>
                        <p class="para">{!! $page[11]['content'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img src="public/assets/images/iconn3.png">
                        </div>
                        <p class="title2">{!! $page[12]['content'] !!}</p>
                        <p class="para">{!! $page[13]['content'] !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img src="public/assets/images/real-estate-redimg-icon.png">
                        </div>
                        <p class="title2">{!! $page[14]['content'] !!}</p>
                        <p class="para">{!! $page[15]['content'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                $("#exampleModalsubmit").modal('show');
            });
        </script>
        <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
    <section class="request-free-consultaion">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">

                    <div class="about-homeloan-content form-content-text">

                        <p class="title">{!! $page[16]['content'] !!}</p>

                        <p class="para">{!! $page[17]['content'] !!}</p>

                        <p class="para">{!! $page[18]['content'] !!}</p>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <form class="free-consultation-form" method="POST" action="{{ route('store_property_lead') }}"
                        id="buywitharisform">

                        @csrf

                        <p class="para">Searching For Homes?</p>

                        <input id="buySearch" type="text" onkeyup="codeAddressTwo()" onfocusout="codeAddressTwo()"
                            name="address" placeholder="Enter an address, neighborhood, city, or ZIP code" required=""
                            class="pac-target-input" autocomplete="off">

                        <input type="hidden" name="city" id="administrative_area_level_2">

                        <input type="hidden" name="state" id="administrative_area_level_1">

                        <input type="text" placeholder="Enter your name" name="name" required="">

                        <input type="email" placeholder="your email address *" name="email" required="">

                        <input type="text" placeholder="phone number" name="contact" required="">

                        <textarea placeholder="your message" name="message" required=""></textarea>

                        <input type="hidden" name="property_type" value="NULL">

                        <input type="hidden" name="lead_type" value="Buyer">

                        <div class="btn-box mt-4 text-center">

                            <button type="submit" class="theme-btn btn-one">SEND MESSAGE NOW </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <section class="home-worth-body real-slider-sec1 find-an-agent-slider">

        <div class="container">

            <div class="title-sec my-2">

                <p class="title my-2 font-36 text-center mb-5">

                    {!! $page[19]['content'] !!}

                </p>

            </div>



            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one pb-5">
                <div class="item p-2">

                    <div class="custom_row_homeworth">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="house-marketimg">

                                    <img src="public/assets/images/stories-11.png" class="image-fluid arisindximg">

                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="house-marketsecwrap">

                                    <div class="search_top_sect">

                                        <div class="resource-center-titleSec">

                                            <p class="gen-heading slider-heading mb-3">{!! $page[20]['content'] !!}</p>

                                            <p class="gen-text slider-gen-text mb-2">{!! $page[21]['content'] !!}</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                
                <div class="item p-2">

                    <div class="custom_row_homeworth">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="house-marketimg">

                                    <img src="public/assets/images/stories-12.png" class="image-fluid arisindximg">

                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="house-marketsecwrap">

                                    <div class="search_top_sect">

                                        <div class="resource-center-titleSec">

                                            <p class="gen-heading slider-heading mb-3">{!! $page[22]['content'] !!}</p>

                                            <p class="gen-text slider-gen-text mb-2">{!! $page[23]['content'] !!}</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item p-2">

                    <div class="custom_row_homeworth">
                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="house-marketimg">

                                    <img src="public/assets/images/stories-13.png" class="image-fluid arisindximg">

                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="house-marketsecwrap">

                                    <div class="search_top_sect">

                                        <div class="resource-center-titleSec">

                                            <p class="gen-heading slider-heading mb-3">{!! $page[24]['content'] !!}</p>

                                            <p class="gen-text slider-gen-text mb-2">{!! $page[25]['content'] !!}</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Add more items as needed -->
            </div>






        </div>

    </section>



    <section class="find-anagentsec5">

        <div class="container">

            <div class="agentsec5cardwrap">

                <!--<div class="title-sec my-2">-->

                <!--    <p class="title my-2 font-36 text-center mb-5">-->

                <!--        Help Clients Do <br> Less real estat-ing & more living-->

                <!--    </p>-->

                <!--</div>-->

                <div class="row">

                    <div class="col-12 col-md-4 col-lg-4">

                        <div class="agentsec5cardcont">

                            <div class="why-choose-us-innercontent">

                                <div class="agentsec5-logo">

                                    <img src="public/assets/images/iconn4.png" class="img-fluid mb-3">

                                </div>

                                <div class="agentcardhad">

                                    <p class="gen-text mt-2">{!! $page[26]['content'] !!}</p>

                                </div>

                                <div class="agent-cardtaxt">

                                    <p class="gen-numbertext">{!! $page[27]['content'] !!}</p>

                                </div>

                                <p class="agent-text mb-3">{!! $page[28]['content'] !!}</p>

                                <div class="agentcardfoot">

                                    <p class="gen-countxt">{!! $page[29]['content'] !!}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-4 col-lg-4">

                        <div class="agentsec5cardcont">

                            <div class="why-choose-us-innercontent">

                                <div class="agentsec5-logo">

                                    <img src="public/assets/images/iconn3.png" class="img-fluid mb-3">

                                </div>

                                <div class="agentcardhad">

                                    <p class="gen-text mt-2">{!! $page[30]['content'] !!}</p>

                                </div>

                                <div class="agent-cardtaxt">

                                    <p class="gen-numbertext">{!! $page[31]['content'] !!}</p>

                                </div>

                                <p class="agent-text">{!! $page[32]['content'] !!}</p>

                                <div class="agentcardfoot">

                                    <p class="gen-countxt">{!! $page[33]['content'] !!}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-4 col-lg-4">

                        <div class="agentsec5cardcont">

                            <div class="why-choose-us-innercontent">

                                <div class="agentsec5-logo">

                                    <img src="public/assets/images/iconn1.png" class="img-fluid mb-3">

                                </div>

                                <div class="agentcardhad">

                                    <p class="gen-text mt-2">{!! $page[34]['content'] !!}</p>

                                </div>

                                <div class="agent-cardtaxt">

                                    <p class="gen-numbertext">{!! $page[35]['content'] !!}</p>

                                </div>

                                <p class="agent-text">{!! $page[36]['content'] !!}</p>

                                <div class="agentcardfoot">

                                    <p class="gen-countxt">{!! $page[37]['content'] !!}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- <section class="find-an-agent-banner">

    <div class="aris-new-banner-Sect"></div>

</section> --}}

    <section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
        <div class="container">



            <div class="in-why-choose-content-2">

                <div class="row">

                    <div class="col-lg-6">



                        <div class="in-section-title-2 headline wow fadeInLeft animated animated" data-wow-delay="200ms"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">

                            <h2>ARIS360 FAQs</h2>

                        </div>



                        <div class="in-why-choose-img-text">

                            <div class="in-why-choose-img-area">

                                <div class="row">

                                    <div class="col-md-6 wow fadeInUp animated animated" data-wow-delay="400ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">

                                        <div class="in-why-choose-img">

                                            <img src="public/assets/images/wc2.jpg" alt="">

                                        </div>



                                    </div>

                                    <div class="col-md-6 wow fadeInUp animated animated" data-wow-delay="500ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">

                                        <div class="in-why-choose-img">

                                            <img src="public/assets/images/wc3.jpg" alt="">

                                        </div>



                                    </div>

                                </div>

                            </div>



                        </div>

                        <div class="react_to_us">

                            <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us! <i
                                    class="fas fa-phone"></i></a>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="in-why-choose-faq">

                            <div class="accordion" id="accordionExample2">

                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated"
                                    data-wow-delay="200ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

                                    <h2 class="accordion-header" id="headingOne2">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                            aria-expanded="false" aria-controls="collapseOne">

                                            {!! $page[38]['content'] !!}

                                        </button>

                                    </h2>

                                    <div id="collapseOne2" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">

                                        <div class="accordion-body">

                                            {!! $page[39]['content'] !!}

                                        </div>

                                    </div>

                                </div>



                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated"
                                    data-wow-delay="400ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">

                                    <h2 class="accordion-header" id="headingTwo22">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">

                                            {!! $page[40]['content'] !!}


                                        </button>

                                    </h2>

                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">

                                        <div class="accordion-body">

                                            {!! $page[41]['content'] !!}


                                        </div>

                                    </div>

                                </div>

                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated"
                                    data-wow-delay="600ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">

                                    <h2 class="accordion-header" id="headingThree2">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">

                                            {!! $page[42]['content'] !!}

                                        </button>

                                    </h2>

                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">

                                        <div class="accordion-body">

                                            {!! $page[43]['content'] !!}

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>
    </section>

    <script>
        var search5 = document.getElementById('buySearch');

        function codeAddressTwo() {
            var geocoder, map, address;
            var address = search5.value;
            var componentForm = {
                locality: 'long_name',
                postal_code: 'short_name',
            };
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
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
                }
            });
        }
    </script>



    {{-- <script

        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"

        defer></script> --}}



    {{-- <script>

        function initialize() {

            initAutocomplete();

        }





        var autocomplete;



        var search6 = document.getElementById('agentSearch');







        function initAutocomplete() {





            autocomplete = new google.maps.places.Autocomplete(

                /** @type {!HTMLInputElement} */

                (search6), {

                    types: ['geocode']

            });



             autocomplete = new google.maps.places.Autocomplete(

                (document.getElementById('buySearch')), {

                    types: ['geocode']

            });









        }



        function codeAddress() {





            var geocoder, map, address;



            var address = $('#agentSearch').val();





                var componentForm = {

                    locality: 'long_name',

                };



                geocoder = new google.maps.Geocoder();

                geocoder.geocode({

                    'address': address

                }, function(results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {





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



             function codeAddressTwo() {









            var geocoder, map, address;



            var address = $('#buySearch').val();





                var componentForm = {

                    administrative_area_level_2: 'long_name',

                    administrative_area_level_1: 'short_name',

                };



                geocoder = new google.maps.Geocoder();

                geocoder.geocode({

                    'address': address

                }, function(results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {





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



                        // $('#locality2').val(results[0].address_components['locality'].long_name);

                        // $('#administrative_area_level_1').val();

                    }

                });

            }



        </script> --}}



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
