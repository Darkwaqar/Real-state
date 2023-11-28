@extends('properties.layouts.main')

@section('content')
<section class="realtor-sect1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ getSetFlashData() }}
            </div>
        </div>
        <div class="profile_main_wrap">
            <div class="profile_wrap_left ">
                <div class="profile_setting m-0">
                    <form action="{{ url('/agent/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="profile_photo">
                        <h5>Profile Picture </h5>
                        <div class="circle">
                            <img class="profile-pic" src="{{ asset('public/images/userdp').'/' . getUserDp(getUserId()) }}">
                        </div>
                        <div class="p-image">
                            <i class="fa fa-camera upload-button"></i>
                            <input class="file-upload" type="file" accept="image/*">
                        </div>
                    </div>
                    <div class="profile_fields">
                        <label>First Name</label>
                        <input type="text" name="firstName" value="{{ session('first_name') }}">
                    </div>
                    <div class="profile_fields">
                        <label>Last Name</label>
                        <input type="text" name="lastName" value="{{ session('last_name') }}">
                    </div>

                    <h5 class="mt-2 mb-2">Agent type</h5>
                    <div class="profile_fields_radio">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="agentType" id="exampleRadios1" value="buyer" {{ ($agentType) == 'buyer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="exampleRadios1">
                            Buyer
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="agentType" id="exampleRadios2" value="seller" {{ ($agentType) == 'seller' ? 'checked' : '' }}>
                          <label class="form-check-label" for="exampleRadios2">
                            Seller
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="agentType" id="exampleRadios3" value="both" {{ ($agentType) == 'both' ? 'checked' : '' }}>
                          <label class="form-check-label" for="exampleRadios3">
                            Both
                          </label>
                        </div>
                    </div>
                    <div class="profile_fields">
                        <label>Email</label>
                        <input type="text" value="{{ session('email') }}" readonly>
                    </div>
                    <div class="profile_fields">
                        <label>Password</label>
                        <input type="password" name="password" value="">
                    </div>
                    <div class="profile_fields">
                        <label>Home Sold</label>
                        <input type="text" name="homeSold" value="{{ session('questions')['deals_completed'] }}">
                    </div>
                    <div class="profile_fields">
                        <label>License number</label>
                        <input type="text" name="licenseNumber" value="{{ session('questions')['license_number'] }}">
                    </div>
                    <div class="profile_fields">
                        <label>City</label>
                        <input type="text" name="cityName" value="">
                    </div>
                    <div class="profile_fields">
                        <label>About</label>
                        <textarea name="about" value="{{ session('about') }}" data-gramm="false" wt-ignore-input="true">
                            {{ session('about') }}
                        </textarea>
                    </div>

                    <div class="profile_fields">
                        <label>Profile Picture</label>
                        <input type="file" name="userDp">
                    </div>
                    <div class="btn-box mt-3 text-align-end">
                        <button type="submit" href="javascript:void(0)" class="theme-btn btn-one">Save Changes</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="profile_wrap_right">
                <!--<form>-->
                <!--    <h6>Work Experience</h6>-->
                <!--    <div class="row mt-2">-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Job Title </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Company </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->

                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>From </label>-->
                <!--            <input type="date" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>To </label>-->
                <!--            <input type="date" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-12 d-flex justify-content-end mt-4">-->
                <!--        <button class="theme-btn btn-one">Update Experience</button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</form>-->

                <!--<form>-->
                <!--<h6 class="mt-2">Education</h6>-->
                <!--<div class="row mt-2">-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>School or University </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Degree </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Field of Study </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Overall Result (GPA) </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>From </label>-->
                <!--            <input type="date" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>To </label>-->
                <!--            <input type="date" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-12 d-flex justify-content-end mt-4">-->
                <!--        <button class="theme-btn btn-one">Update Education</button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</form>-->

                <!--<form>-->
                <!--<h6 class="mt-2">Skills</h6>-->
                <!--<div class="row mt-2">-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Type to add Skills </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Resume/CV </label>-->
                <!--            <input type="file" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-12 d-flex justify-content-end mt-4">-->
                <!--        <button class="theme-btn btn-one">Update Skills</button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</form>-->

                <!--<form>-->
                <!--<h6 class="mt-2">Languages</h6>-->
                <!--<div class="row mt-2">-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Language </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                        <!--<ul class="other-option clearfix mt-2">-->
                        <!--    <li>-->
                        <!--        <div class="radio-box">-->
                        <!--            <input type="checkbox" id="checklanguage" checked="">-->
                        <!--            <label for="checklanguage">I am fluent in this language.</label>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--</ul>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>Overall </label>-->
                <!--            <div class="select-box">-->
                <!--                <select class="wide">-->
                <!--                    <option data-display="Beginner">Beginner</option>-->
                <!--                    <option value="1">Classroom Study</option>-->
                <!--                    <option value="2">Intermediate</option>-->
                <!--                    <option value="3">Advanced</option>-->
                <!--                    <option value="4">Fluent</option>-->
                <!--                </select>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-12 d-flex justify-content-end mt-4">-->
                <!--        <button class="theme-btn btn-one">Update Languages</button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</form>-->

                <!--<form>-->
                <!--<h6 class="mt-2">Websites</h6>-->
                <!--<div class="row mt-2">-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>URL </label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-12 ">-->
                <!--        <div class="field-input">-->
                <!--            <label>LinkedIn (Optional):</label>-->
                <!--            <input type="text" name="" >-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-12 d-flex justify-content-end mt-4">-->
                <!--        <button class="theme-btn btn-one">Update Websites</button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</form>-->

                <!--<form>-->
                <!--<h6 class="mt-2">Application Questions</h6>-->
                <!--<div class="inner-box default-form">-->
                <!--    <div class="row clearfix property-details2">-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>Do you currently hold an active real estate license? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">Yes</option>-->
                <!--                        <option value="1">No</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>How many residential real estate deals have you completed as an agent? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">0</option>-->
                <!--                        <option value="2">1 - 5</option>-->
                <!--                        <option value="3">6 - 15</option>-->
                <!--                        <option value="4">26 - 50</option>-->
                <!--                        <option value="5">50 +</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>Within the last 10 years, have you had any action (such as a fine, suspension, revocation, censure, etc) taken against your real estate license or any other professional license? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">Yes</option>-->
                <!--                        <option value="1">No</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>Have you ever been disciplined by any local board of Realtors, local Realtor Association, the National Association of Realtors, or any other real estate association or governing body? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">Yes</option>-->
                <!--                        <option value="1">No</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>Are you currently under investigation or is there a pending charge against you involving your real estate license? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">Yes</option>-->
                <!--                        <option value="1">No</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>Do you have any restrictions on your real estate license? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">Yes</option>-->
                <!--                        <option value="1">No</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>What is/are your license number(s)? </label>-->
                <!--                <input type="text">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>Do you currently hold an active and unrestricted real estate license? (Please note: An active real estate license is required for this role.) </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">Yes</option>-->
                <!--                        <option value="1">No</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>How many residential real estate deals have you completed as an agent (excluding leases)? </label>-->
                <!--                <div class="select-box">-->
                <!--                    <select class="wide">-->
                <!--                        <option data-display="Select One">Select One</option>-->
                <!--                        <option value="1">0-4 deals</option>-->
                <!--                        <option value="2">5-9 deals</option>-->
                <!--                        <option value="3">10-19 deals</option>-->
                <!--                        <option value="4">20-49 deals</option>-->
                <!--                        <option value="5">50+ deals</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 col-12">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <label>If Other, which association(s)?</label>-->
                <!--                <input type="text">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-12 myprofile-section">-->
                <!--            <div class="field-input mt-2">-->
                <!--                <ul class="other-option  clearfix">-->
                <!--                    <label>Are you a member of the following real estate associations? Select all that apply:</label>-->
                <!--                    <li>-->
                <!--                        <div class="radio-box">-->
                <!--                            <input type="checkbox" id="CoolingexampleCheck1aa">-->
                <!--                            <label class="form-check-label" for="CoolingexampleCheck1aa"> NAREB</label>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <div class="radio-box">-->
                <!--                            <input type="checkbox" id="CoolingexampleCheck1ab">-->
                <!--                            <label class="form-check-label" for="CoolingexampleCheck1ab"> NAHREP</label>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <div class="radio-box">-->
                <!--                            <input type="checkbox" id="CoolingexampleCheck1ac">-->
                <!--                            <label class="form-check-label" for="CoolingexampleCheck1ac"> AREA</label>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <div class="radio-box">-->
                <!--                            <input type="checkbox" id="CoolingexampleCheck1ad">-->
                <!--                            <label class="form-check-label" for="CoolingexampleCheck1ad"> OTHER</label>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-12 d-flex justify-content-end mt-4">-->
                <!--            <button class="theme-btn btn-one">Update Application Questions</button>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</form>-->






                <div class="widget wdt-2 latest-reviews">
                    <h3 class="sidebar-title">Latest Reviews</h3>
                    <div class="latest-reviews-box d-flex mb-4 ">
                        <a href="#">
                            <img src="{{asset('public/assets/images/agents/toprated-agent1.jpg')}}" class="flex-shrink-0 me-3" alt="user">
                        </a>
                        <div class="detail">
                            <h5 class="media-heading"><a href="#">Roita Roa</a></h5>
                            <p>dummy text dummy text dummy text dummy text dummy text dummy text</p>
                        </div>
                    </div>
                    <!--<div class="add_new_section">-->
                    <!--    <div class="btn-box">-->
                    <!--        <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#examplereviewModal"><span>+</span>Add Review</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="agentsale-left-listingcontent">
                    <p class="title mt-3 mb-2">Listed by Roita Roa</p>
                    <div class="agentDetail-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one mt-2 owl-loaded owl-drag">




                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3300px, 0px, 0px); transition: all 1.5s ease 0s; width: 4950px;"><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img2.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img3.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img1.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img2.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img1.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img2.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img3.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img2.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img3.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img1.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div><div class="owl-item cloned active" style="width: 300px; margin-right: 30px;"><div class="building-images">
                            <img src="{{asset('public/assets/images/agents/sold-img2.jpg')}}" class="img-fluid" alt="">
                            <p class="pending">Aris 360 Pending</p>
                            <div class="price-address-sect">
                                <p>$889,000</p>
                                <p class="building-price2">3 | 2 | 1437
                                    <br>
                                    Beds | Baths | Sq.ft
                                </p>
                            </div>
                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="far fa-angle-left"></span></button><button type="button" role="presentation" class="owl-next"><span class="far fa-angle-right"></span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="far fa-angle-left"></span></button><button type="button" role="presentation" class="owl-next"><span class="far fa-angle-right"></span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
                    <div class="add_new_section mt-3">
                        <div class="btn-box">
                            <!--<a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#examplepropertylistModal">List New Property</a>-->
                            <a href="https://demo.wizardinnovations.us/aris/list-property" class="theme-btn btn-one">List New Property</a>
                        </div>
                    </div>
                </div>
                <div class="agentDetail-team-wrapper mt-4">
                    <p class="title">Meet Roita Roa's Team</p>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInLeft delay-04s animated animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="team-1">
                                <div class="team-inner">
                                    <div class="team-overflow">
                                        <div class="team-photo">
                                            <div class="team-img">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('public/assets/images/agents/toprated-agent2.jpg')}}" alt="agent-2" class="img-fluid w-100">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details">
                                        <h5><a href="javascript:void(0)">Andre Aivazians</a></h5>
                                        <p>Aris 360 TRANSACTION COORDINATOR</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="add_new_section mt-3">-->
                    <!--    <div class="btn-box">-->
                    <!--        <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#examplenewmemberModal"><span>+</span>Add New Member</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
