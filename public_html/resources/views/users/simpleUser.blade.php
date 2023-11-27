@extends('properties.layouts.main')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <section class="agentInfo-wrapper myprofile-section sec-pad">
        <div class="container-fluid">
            <div class="tabs-box">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="skzxyylxe" value="skzxyylxe">
                    <div class="tabs-content container">
                        <div class="row">
                            <div class="col-md-12">
                                {{ getSetFlashData() }}
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-1">
                            <div class="general-information">
                                <h4>Sign Up</h4>
                                <div class="inner-box default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-6 col-sm-12 column">
                                            <div class="social_login_opt reg_social_login">
                                                <a href="{{ route('login.google') }}" class="google_btn">Continue with <img
                                                        src="{{ asset('public/assets/images/google.png') }}"></a>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="social_login_opt reg_social_login">
                                                <a href="{{ route('facebook') }}" class="facbook_btn">Continue with <img src="{{asset('public/assets/images/facebook.png')}}"></a>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Full Name</label>
                                                <input type="text" name="full_name" value="{{ old('full_name') }}">
                                            </div>
                                            @error('first_name')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Last Name </label>
                                                <input type="text" name="last_name" value="{{ old('last_name') }}">
                                            </div>
                                            @error('last_name')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div> --}}

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Email</label>
                                                <input type="email" name="email" value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Contact Number </label>
                                                <input type="number" id="number" name="mobile_number"
                                                    value="{{ old('mobile_number') }}">

                                            </div>
                                            @error('mobile_number')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <ul class="other-option clearfix">-->
                                        <!--        <li>-->
                                        <!--            <div class="radio-box">-->
                                        <!--                <input type="checkbox" id="checkname" checked="">-->
                                        <!--                <label for="checkname">I have a preferred name</label>-->
                                        <!--            </div>-->
                                        <!--        </li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Address </label>
                                                <input onkeyup="codeAddressUserSignUp()"
                                                    onfocusout="codeAddressUserSignUp()" type="text" name="address"
                                                    value="{{ old('address') }}" id="userAddress">
                                            </div>
                                            @error('address')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Address Line 2 </label>-->
                                        <!--        <input type="text" name="Name">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Country </label>
                                                <input type="text" name="country" value="" id="country">
                                            </div>
                                            @error('country')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Country </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide" name="country">-->
                                        <!--                <option data-display="USA">USA</option>-->
                                        <!--                <option value="1">Afghanistan</option>-->
                                        <!--                <option value="2">Albania</option>-->
                                        <!--                <option value="3">Belgium</option>-->
                                        <!--                <option value="4">Central African Republic</option>-->
                                        <!--                <option value="2">Egypt</option>-->
                                        <!--                <option value="3">Grenada</option>-->
                                        <!--                <option value="4">Japan</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    @error('country')
        -->
                                            <!--    <span class="red">{{ $message }}</span>-->
                                            <!--
    @enderror-->
                                        <!--</div>-->
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>State </label>
                                                <input type="text" name="state" value=""
                                                    id="administrative_area_level_1">
                                            </div>
                                            @error('state')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>State</label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide" name="state">-->
                                        <!--                <option data-display="Alabama">Alabama</option>-->
                                        <!--                <option value="1">Alaska</option>-->
                                        <!--                <option value="2">Ohio</option>-->
                                        <!--                <option value="3">Washington</option>-->
                                        <!--<option value="4">West Virginia</option>-->
                                        <!--<option value="2">North Dakota</option>-->
                                        <!--                <option value="3">Texas</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    @error('state')
        -->
                                            <!--    <span class="red">{{ $message }}</span>-->
                                            <!--
    @enderror-->
                                        <!--</div>-->

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>City </label>
                                                <input type="text" name="city" value=" {{ old('city') }}"
                                                    id="locality">
                                            </div>
                                            @error('city')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Postal Code </label>
                                                <input type="text" name="postal_code"
                                                    value="{{ old('postal_code') }}" id="postal_code">
                                            </div>
                                            @error('postal_code')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>How Did You Hear About Us? </label>
                                                <div class="select-box">
                                                    <select class="wide" name="hear_about_us">
                                                        <option data-display="Social media">Social media</option>
                                                        <option data-display="Search Engine">Search Engine (Google, Yahoo,
                                                            etc.)</option>
                                                        <option data-display="Recommended">Recommended by friend or
                                                            colleague</option>
                                                        <option data-display="Blog or Publication">Blog or Publication
                                                        </option>
                                                        <option data-display="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('hear_about_us')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Password </label>
                                                <div class="input_eye_icon input_eye_icon_2"><i class="fas fa-eye-slash"
                                                        id="regeye"></i></div>
                                                <input type="password" id="regpassword" name="passsword"
                                                    value="{{ old('passsword') }}">
                                            </div>
                                            @error('passsword')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Confirm Password </label>
                                                <div class="input_eye_icon input_eye_icon_2"><i class="fas fa-eye-slash"
                                                        id="confirmeye"></i></div>
                                                <input type="password" id="confirmpassword" name="confirm_password"
                                                    value="{{ old('confirm_password') }}">
                                            </div>
                                            @error('confirm_password')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Phone Device Type: </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide">-->
                                        <!--                <option data-display="Mobile">Mobile</option>-->
                                        <!--                <option value="1">Telephone</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Phone Number </label>-->
                                        <!--        <input type="number" name="number">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Phone Extension</label>-->
                                        <!--        <input type="text" name="number">-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="fl" id="skzmessages"></div>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="theme-btn btn-one btn_next1 google-signup">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- myprofile-section end -->


    <!-- Sell Your Home Content End's Here -->
    <script>
        $(document).ready(function() {
            // Next
            $('.btn_next1').click(function() {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next2').click(function() {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next3').click(function() {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next4').click(function() {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next5').click(function() {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next6').click(function() {
                $('.list_tab7').click();
                $('.scroll-to-target').click();

            });
            // Previous
            $('.btn_previous1').click(function() {
                $('.list_tab1').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous2').click(function() {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous3').click(function() {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous4').click(function() {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous5').click(function() {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous6').click(function() {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var wrapper2 = $(".input_fields_wrap2");
            var add_review_button = $(".add_review_button");
            $(add_review_button).click(function(e) { //on add input button click
                e.preventDefault();

                $(wrapper2).append(
                    '<div class="input-group mb-1"><input placeholder="" type="text" name="mytext[]" class="form-control"></div>'
                ); //add input box
            });
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                        <h3>Thank You!</h3>
                        <p>Your form to become an agent has been submitted.</p>
                        <p>Our team will get back to you!</p>
                    </div>
                </div>
                <!--<div class="modal-footer">-->
                <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>

    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script>

    <script>
        var userAddress = document.getElementById("userAddress")


        function codeAddressUserSignUp() {
            var geocoder, map, address;
            var address = userAddress.value;
            var componentForm = {
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                postal_code: 'short_name',
                country: 'long_name',
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
@endsection
