@extends('properties.layouts.main')

@section('content')

<section class="buy-with-aris-sect1">
    <div class="auto-container">
        <div class="row">
            <div class='col-12'>
                <div class="about-homeloan-content">
                    <!--<p class="title">The Right Home <br> For The Right Price</p>-->
                    <p class="title">Aris360 is the key to your fabulous home</p>
                    <p class="para">Dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                </div>
            </div>
            <!--<div class="col-lg-6 col-md-6 col-12">-->
            <!--    <div class="about-bannerImg">-->
            <!--        <img src="public/assets/images/buy-with-aris-Banner.png" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</section>


<section class="agent-resource-center-sec3">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title">Why Choose Aris 360?</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">Speedy home search,<br> instant home tours</p>
                    <p class="para">Dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">An authorized agent<br>as your advisor</p>
                    <p class="para">Dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">Save as<br>investment </p>
                    <p class="para">Dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="request-free-consultaion">
    <div class="container">
        <div class='row'>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-homeloan-content">
                    <p class="title">Request A <br> Free Consultation!!</p>
                    <p class="para">This is Dummy-text This is Dummy-text<br> This is Dummy-text.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <form class="free-consultation-form" method="POST" action="{{route('store_property_lead')}}">

                    <p class="para">Where Are You Searching For Homes?</p>
                    <input id="buySearch" type="text" name="address" placeholder="Enter an address, neighborhood, city, or ZIP code" required>
                    <input type="text" placeholder="Enter your name" name="name" required>
                    <input type="email" placeholder="your email address *" name="email" required>
                    <input type="text" placeholder="phone number" name="contact" required>
                    <textarea placeholder="your message" name="message" required></textarea>
                    <input type="hidden" name="lead_type" value="Buyer"/>
                    <div class="btn-box mt-4 text-center">
                        <button type="submit" class="theme-btn btn-one">SEND MESSAGE NOW </button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</section>

<section class="tour-day-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="tour-day-content">
                    <p class="title">Instant Tour <br> Today</p>
                    <p class="para">This is Dummy-text, This is Dummy-text, This is Dummy-text, This is Dummy-text, This is Dummy-text, This is Dummy-text, This is Dummy-text.</p>
                    <div class="app-store-img">
                        <ul>
                            <li>
                                <a href="#!"><img src="public/assets/images/app-store-img.png" class="img-fluid"></a>
                            </li>
                            <li>
                                <a href="#!"><img src="public/assets/images/google-play-img.png" class="img-fluid"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="mobile-baner">
                    <img src="public/assets/images/buy-with-aris-mobile.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script>

<script>
        function initialize() {
            initAutocomplete();
        }


        var autocomplete;

        var search6 = document.getElementById('buySearch');



        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.




            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search6), {
                    types: ['geocode']
            });




        }

        </script>

@endsection
