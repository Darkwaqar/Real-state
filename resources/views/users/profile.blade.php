@extends('properties.layouts.main')



@section('content')
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

                            <p>{{ Session::get('success') }}.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
    <section class="realtor-sect1">

        <div class="container">
            <div class="profile_main_wrap">

                <div class="profile_wrap_left ">

                    <div class="profile_setting m-0">

                        <form action="{{ url('/agent/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="profile_photo">
                                <h5>Profile Picture </h5>
                                <div class="circle">
                                    <img class="profile-pic"
                                        src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}">
                                </div>


                            </div>

                            <div class="profile_fields">
                                <label>First Name</label>
                                <input type="text" name="firstName" value="{{ Auth::user()->fresh()->first_name }}">
                            </div>

                            <div class="profile_fields">
                                <label>Last Name</label>
                                <input type="text" name="lastName" value="{{ Auth::user()->fresh()->last_name }}">
                            </div>

                            <h5 class="mt-2 mb-2">Agent type</h5>
                            <div class="profile_fields_radio">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agentType" id="exampleRadios1"
                                        value="buyer" {{ $agentType == 'buyer' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Buyer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agentType" id="exampleRadios2"
                                        value="seller" {{ $agentType == 'seller' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Seller
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agentType" id="exampleRadios3"
                                        value="both" {{ $agentType == 'both' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Both
                                    </label>
                                </div>
                            </div>

                            <div class="profile_fields">
                                <label>Email</label>
                                <input type="text" value="{{ Auth::user()->fresh()->email }}" readonly>
                            </div>
                            <div class="profile_fields">
                                <label>Total Deals</label>
                                <input type="number" value="{{ Auth::user()->fresh()->total_deals }}" name="totalDeals">
                            </div>
                            <div class="profile_fields">
                                <label>Deal Volume</label>
                                <input type="number" value="{{ Auth::user()->fresh()->deals_volume }}" name="dealVolume">
                            </div>
                            <div class="profile_fields">
                                <label>Highest Deal Price</label>
                                <input type="number" value="{{ Auth::user()->fresh()->highest_deal }}" name="highestDeal">
                            </div>
                            <div class="profile_fields">
                                <label>Contact Number</label>
                                {{-- <input type="text" value="{{ isset(Auth::user()->fresh()->mobile_number) ? userMobile(Auth::user()->fresh()->mobile_number) : ''  }}"  id="mobile-number-input"> --}}
                                <input id="phoneNumber" name="contact"
                                    value="{{ isset(Auth::user()->fresh()->mobile_number) ? Auth::user()->fresh()->mobile_number : '' }}"
                                    type="tel" name="phone">
                                {{-- <input type="hidden" name="contact" id="mobile-number-hidden"> --}}
                                {{-- <input type="text"  name="contact"> --}}
                            </div>

                            <div class="profile_fields">
                                <label>Password</label>
                                <input type="password" name="password" value="">
                            </div>
                            {{-- <div class="profile_fields">
                        <label>Home Sold</label>
                        <input type="text" name="homeSold" value="{{ Auth::user()->load('questions')['deals_completed'] }}">

                    </div> --}}
                            <div class="profile_fields">
                                <label>License number </label>
                                <input type="text" name="licenseNumber"
                                    value="{{ isset(
                                        Auth::user()->load('questions')->toArray()['questions']['license_number'],
                                    )
                                        ? Auth::user()->load('questions')->toArray()['questions']['license_number']
                                        : 'N/A' }}">
                            </div>
                            <div class="profile_fields">
                                <label>City</label>
                                <input type="text" value="{{ Auth::user()->fresh()->city }}" id="searchPropertyText1"
                                    onkeyup="codeAddress()" onfocusout="codeAddress()">
                                <input type="hidden" name="city" id="locality"
                                    value="{{ Auth::user()->fresh()->city }}">
                            </div>
                            <div class="profile_fields">
                                <label>About</label>
                                <textarea name="about" value="{{ Auth::user()->fresh()->about }}" data-gramm="false" wt-ignore-input="true">
                            {{ Auth::user()->fresh()->about }}

                        </textarea>
                            </div>
                            <div class="profile_fields">
                                <label>Profile Picture</label>
                                <input type="file" name="userDp">
                            </div>
                            <div class="btn-box mt-3 text-align-end">
                                <button type="submit" href="javascript:void(0)" class="theme-btn btn-one">Save
                                    Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="profile_wrap_right">
                    <div class="widget wdt-2 latest-reviews">
                    </div>
                    <div class="agentsale-left-listingcontent">
                        @if (getUserSessionData('first_name'))
                            <p class="title mt-3 mb-2">Listed by {{ getUserSessionData('first_name') }}</p>
                        @endif
                        @if (getUserId())
                            <div class="profile_carosuel owl-carousel owl-theme owl-dots-none nav-style-one">
                                @forelse ($agentlistings as $listing)
                                    <div class="item p-2">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    @if (isset($listing['prefferedMedia'][0]['MediaURL']))
                                                        <img src="{{ $listing['prefferedMedia'][0]['s3buckettempurl'] }}"
                                                            class="img-fluid" alt="">
                                                    @endif
                                                    @if (isset($listing->PropertyStatus) and $listing->PropertyStatus == 1)
                                                        <p class="pending">ARIS360 Featured</p>
                                                    @endif
                                                </div>
                                                <div class="lower-content">
                                                    <div class="price-info custom_price_info">
                                                        <h4 class="mt-2">$
                                                            {{ number_format($listing['PropetySellPrice']) }}</h4>
                                                    </div>
                                                    <div>
                                                        <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                                            <li> {{ $listing['Bedrooms'] }} Beds</li>
                                                            <li> {{ $listing['BathroomsFull'] }} Baths</li>
                                                            <li> {{ $listing['PropertyArea'] }} sq. ft.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p> No listing found </p>
                                @endforelse

                            </div>
                        @endif
                        <script>
                            $(document).ready(function() {
                                const carousel = $('.profile_carosuel').owlCarousel({
                                    loop: true,
                                    margin: 10,
                                    nav: true,
                                    items: 3,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        600: {
                                            items: 2
                                        },
                                        1000: {
                                            items: 2
                                        },
                                        1400: {
                                            items: 3
                                        }
                                    }
                                });

                                carousel.trigger('refresh.owl.carousel');
                            });
                        </script>
                    </div>
                    <div class="add_new_section mt-3">

                        <div class="btn-box">

                            <!--<a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#examplepropertylistModal">List New Property</a>-->

                            <a href="{{ route('home.property-listing') }}" class="theme-btn btn-one">List New
                                Property</a>

                        </div>

                    </div>

                    <div class="add_new_section mt-3">


                        <div class="agentDetail-team-wrapper mt-4">

                            @if (getUserSessionData('first_name'))
                                <p class="title"> Meet {{ getUserSessionData('first_name') }} Team</p>
                            @endif

                            @if (getUserId() && !empty($agentTeams))
                                <div class="row mt-3">
                                    @foreach ($agentTeams as $team)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInLeft delay-04s animated animated animated"
                                            style="visibility: visible; animation-name: fadeInLeft;">
                                            <div class="team-1">
                                                <div class="team-inner d-block">
                                                    <div class="team-overflow">
                                                        <div class="team-photo">
                                                            <div class="team-img">
                                                                <a href="{{ url('real-estate-agent-detail/' . (isset($team['slug']) ? $team['slug'] : '')) }}"
                                                                    target="_blank">
                                                                    <img src="{{ asset('public/images/userdp/' . (isset($team['user_dp']) ? $team['user_dp'] : '')) }}"
                                                                        alt="agent-2"
                                                                        class="img-fluid w-100 agent_team_max_width">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-details">
                                                        <h5><a href="{{ url('real-estate-agent-detail/' . (isset($team['slug']) ? $team['slug'] : '')) }}"
                                                                target="_blank">
                                                                {{ isset($team['first_name']) && isset($team['last_name']) ? $team['first_name'] . ' ' . $team['last_name'] : '' }}
                                                            </a></h5>
                                                        <p>{{ isset($team['state']) && isset($team['city']) ? $team['state'] . ', ' . $team['city'] : '' }}
                                                        </p>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    @endforeach
                            @endif

                        </div>
                        <div class="btn-box">

                            <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal"
                                data-target="#examplenewmemberModal"><span>+</span>Add New Member</a>

                        </div>

                    </div>

                </div>



            </div>









        </div>

        </div>

        </div>

    </section>

    <script>
        const isNumericInput = (event) => {
            const key = event.keyCode;
            return ((key >= 48 && key <= 57) || // Allow number line
                (key >= 96 && key <= 105) // Allow number pad
            );
        };

        const isModifierKey = (event) => {
            const key = event.keyCode;
            return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
                (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
                (key > 36 && key < 41) || // Allow left, up, right, down
                (
                    // Allow Ctrl/Command + A,C,V,X,Z
                    (event.ctrlKey === true || event.metaKey === true) &&
                    (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
                )
        };
        const enforceFormat = (event) => {
            // Input must be of a valid number format or a modifier key, and not longer than ten digits
            if (!isNumericInput(event) && !isModifierKey(event)) {
                event.preventDefault();
            }
        };
        const formatToPhone = (event) => {
            if (isModifierKey(event)) {
                return;
            }
            const input = event.target.value.replace(/\D/g, '').substring(0, 10); // First ten digits of input only
            const areaCode = input.substring(0, 3);
            const middle = input.substring(3, 6);
            const last = input.substring(6, 10);

            if (input.length > 6) {
                event.target.value = `${areaCode}-${middle}-${last}`;
            } else if (input.length > 3) {
                event.target.value = `${areaCode}-${middle}`;
            } else if (input.length > 0) {
                event.target.value = `${areaCode}`;
            }
        };

        const inputElement = document.getElementById('phoneNumber');
        inputElement.addEventListener('keydown', enforceFormat);
        inputElement.addEventListener('keyup', formatToPhone);
    </script>

    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script>



    <script>
        function initialize() {

            initAutocomplete();

        }





        var autocomplete;

        var search1 = document.getElementById('searchPropertyText1');





        function initAutocomplete() {

            // Create the autocomplete object, restricting the search to geographical

            // location types.



            autocomplete = new google.maps.places.Autocomplete(

                /** @type {!HTMLInputElement} */

                (search1), {

                    types: ['geocode']

                });



        }



        function codeAddress() {





            //     });
            // }
            // function codeAddress() {
            var geocoder, map, address;



            var address = $('#searchPropertyText1').val();





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
    </script>
@endsection
