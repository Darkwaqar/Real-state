@extends('properties.layouts.main')

@section('content')
    <!-- Sell Your Home Content Start's Here -->
    <section class="applyjob-realestate realestate-agent-index1">
        <div class="container">
            <div class="agent-sec1-content-left">
                <p class="title">Become An Aris Agent</p>
            </div>
        </div>
    </section>
    <!-- myprofile-section -->
    <section class="agentInfo-wrapper myprofile-section sec-pad">
        <div class="container-fluid">
            <div class="tabs-box">
                <ul class="tab-btns tab-buttons clearfix">
                    <li class="list_tab1 tab-btn active-btn" data-tab="#tab-1"><span>1</span>My Information</li>
                    <li class="list_tab2 tab-btn" data-tab="#tab-2"><span>2</span>My Experience</li>
                    <li class="list_tab3 tab-btn" data-tab="#tab-3"><span>3</span>Application Questions 1 of 2</li>
                    <li class="list_tab4 tab-btn" data-tab="#tab-4"><span>4</span>Application Questions 2 of 2</li>
                    <li class="list_tab5 tab-btn" data-tab="#tab-5"><span>5</span>Voluntary Disclosures</li>
                    {{-- <li class="list_tab6 tab-btn" data-tab="#tab-6"><span>6</span>Review</li> --}}
                    <!-- <li class="list_tab7 tab-btn" data-tab="#tab-7"><span>7</span>Floor Plan</li> -->
                </ul>
                <form action="{{ url('/new-user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tabs-content container">
                        <div class="row">
                            <div class="col-md-12">
                                {{ getSetFlashData() }}
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-1">
                            <div class="general-information">
                                <h4>My Information</h4>
                                <div class="inner-box default-form">
                                    <div class="row clearfix">

                                        <!--<div class="col-lg-6 col-md-6 col-sm-12 column">-->
                                        <!--    <label>Have you worked for Aris 360 or its subsidiaries in the past or are you a Aris 360 Associate Agent? (Note: If you are currently an active employee, please apply via Workday). </label>-->
                                        <!--    <ul class="other-option clearfix">-->
                                        <!--        <li>-->
                                        <!--            <div class="radio-box">-->
                                        <!--                <input type="checkbox" id="check4a" checked="">-->
                                        <!--                <label for="check4a">Yes</label>-->
                                        <!--            </div>-->
                                        <!--        </li>-->
                                        <!--        <li>-->
                                        <!--            <div class="radio-box">-->
                                        <!--                <input type="checkbox" id="check5a">-->
                                        <!--                <label for="check5a">No</label>-->
                                        <!--            </div>-->
                                        <!--        </li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>First Name <span class="text-danger">*</span> </label>
                                                <input type="text" name="first_name" value="{{ old('first_name') }}">
                                            </div>
                                            @error('first_name')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Last Name <span class="text-danger">*</span> </label>
                                                <input type="text" name="last_name" value="{{ old('last_name') }}">
                                            </div>
                                            @error('last_name')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Email <span class="text-danger">*</span> </label>
                                                <input type="email" name="email" value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Contact Number <span class="text-danger">*</span> </label>
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
                                                <label>Address <span class="text-danger">*</span> </label>
                                                <input type="text" name="address" value="{{ old('address') }}">
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
                                                <label>Country <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="country">
                                                        <option data-display="USA">USA</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Belgium</option>
                                                        <option value="4">Central African Republic</option>
                                                        <option value="2">Egypt</option>
                                                        <option value="3">Grenada</option>
                                                        <option value="4">Japan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('country')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>State <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="state">
                                                        <option data-display="Alabama">Alabama</option>
                                                        <option value="1">Alaska</option>
                                                        <option value="2">Ohio</option>
                                                        <option value="3">Washington</option>
                                                        <!--<option value="4">West Virginia</option>-->
                                                        <!--<option value="2">North Dakota</option>-->
                                                        <option value="3">Texas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('state')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>City <span class="text-danger">*</span> </label>
                                                <input type="text" name="city" value=" {{ old('city') }}">
                                            </div>
                                            @error('city')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Postal Code <span class="text-danger">*</span> </label>
                                                <input type="text" name="postal_code"
                                                    value="{{ old('postal_code') }}">
                                            </div>
                                            @error('postal_code')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>How Did You Hear About Us? <span class="text-danger">*</span>
                                                </label>
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
                                        <div class="col-12 d-flex justify-content-end">
                                            <a class="theme-btn btn-one btn_next1">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="tab-2">
                            <div class="property-details">
                                <h4>My Experience:</h4>
                                <div class="inner-box default-form">
                                    <h6>Work Experience</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Job Title <span class="text-danger">*</span> </label>
                                                <input type="text" name="job_title" value="{{ old('job_title') }}"
                                                    placeholder="">
                                            </div>
                                            @error('job_title')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Company <span class="text-danger">*</span> </label>
                                                <input type="text" name="company" value="{{ old('company') }}"
                                                    placeholder="">
                                            </div>
                                            @error('company')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>From <span class="text-danger">*</span> </label>
                                                <input type="date" name="from_date" value="{{ old('from_date') }}"
                                                    placeholder="">
                                            </div>
                                            @error('from_date')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>To <span class="text-danger">*</span> </label>
                                                <input type="date" name="to_date" value="{{ old('to_date') }}"
                                                    placeholder="">
                                            </div>
                                            @error('to_date')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-end">

                                        <button class="btn btn-danger btn-lg ">Add</button>
                                    </div>

                                    <h6>Education</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>School or University <span class="text-danger">*</span> </label>
                                                <input type="text" name="school_university"
                                                    value="{{ old('school_university') }}" placeholder="">
                                            </div>
                                            @error('school_university')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Degree <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="degree">
                                                        <option data-display="High School/GED">High School/GED</option>
                                                        <option value="1">Associate's Degree</option>
                                                        <option value="2">Bachelor's Degree</option>
                                                        <option value="3">Master's Degree</option>
                                                        <option value="4">Doctor of Philosophy (PhD)</option>
                                                        <option value="5">Junis Doctor (JD)</option>
                                                        <option value="6">Doctor of Medicine (MD)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('degree')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Field of Study </label>
                                                <input type="text" name="study_field"
                                                    value="{{ old('study_field') }}" placeholder="">
                                            </div>
                                            @error('study_field')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Overall Result (GPA) <span class="text-danger">*</span> </label>
                                                <input type="text" name="overall_result"
                                                    value="{{ old('overall_result') }}" placeholder="">
                                            </div>
                                            @error('overall_result')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>From <span class="text-danger">*</span> </label>
                                                <input type="date" name="from_date_edu"
                                                    value="{{ old('from_date_edu') }}" placeholder="">
                                            </div>
                                            @error('from_date_edu')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>To <span class="text-danger">*</span> </label>
                                                <input type="date" name="to_date_edu"
                                                    value="{{ old('to_date_edu') }}" placeholder="">
                                            </div>
                                            @error('to_date_edu')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h6>Skills</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Type to add Skills </label>
                                                <input type="text" name="skill" value="{{ old('skill') }}"
                                                    placeholder="">
                                            </div>
                                            @error('skill')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Resume/CV <span class="text-danger">*</span> </label>
                                                <input type="file" name="userResume" value="{{ old('userResume') }}"
                                                    placeholder="">
                                            </div>
                                            @error('userResume')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Language <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="language">
                                                        <option value="4">Latin</option>
                                                        <option value="2">English</option>
                                                        <option value="3">German</option>
                                                        <option value="4">Italian</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--<ul class="other-option clearfix mt-2">-->
                                            <!--    <li>-->
                                            <!--        <div class="radio-box">-->
                                            <!--            <input type="checkbox" id="checklanguage" checked="">-->
                                            <!--            <label for="checklanguage">I am fluent in this language.</label>-->
                                            <!--        </div>-->
                                            <!--    </li>-->
                                            <!--</ul>-->
                                            @error('language')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Overall <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="fluency_level">
                                                        <option data-display="Beginner">Beginner</option>
                                                        <option value="1">Classroom Study</option>
                                                        <option value="2">Intermediate</option>
                                                        <option value="3">Advanced</option>
                                                        <option value="4">Fluent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('fluency_level')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h6>Websites</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>URL <span class="text-danger">*</span> </label>
                                                <input type="text" name="web_link" value="{{ old('web_link') }}"
                                                    placeholder="">
                                            </div>
                                            @error('web_link')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>LinkedIn (Optional):</label>
                                                <input type="text" name="linkedin_link"
                                                    value="{{ old('linkedin_link') }}" placeholder="">
                                            </div>
                                            @error('linkedin_link')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between my-3">
                                        <a class="theme-btn btn-two btn_previous1">Previous</a>
                                        <a class="theme-btn btn-one btn_next2">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="tab-3">
                            <div class="property-details">
                                <h4>Application Questions 1 of 2</h4>
                                <div class="inner-box default-form">
                                    <div class="row clearfix property-details2">
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Do you currently hold an active real estate license? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="active_license_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Yes"
                                                            {{ old('active_license_status') == 'Yes' ? 'selected' : '' }}>
                                                            Yes</option>
                                                        <option value="No"
                                                            {{ old('active_license_status') == 'No' ? 'selected' : '' }}>No
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('active_license_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>What is/are your license number(s)? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="license_number" value="" id="exampleFormControlTextarea1"
                                                            rows="3">
                                                            {{ old('license_number') }}
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('license_number')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>How many residential real estate deals have you completed as an
                                                    agent? <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="deals_completed">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="0"
                                                            {{ old('deals_completed') == 0 ? 'selected' : '' }}>0</option>
                                                        <option value="1 to 5"
                                                            {{ old('deals_completed') == '1 to 5' ? 'selected' : '' }}>1 -
                                                            5</option>
                                                        <option value="6 to 15"
                                                            {{ old('deals_completed') == '6 to 15' ? 'selected' : '' }}>6 -
                                                            15</option>
                                                        <option value="26 to 50"
                                                            {{ old('deals_completed') == '26 to 50' ? 'selected' : '' }}>26
                                                            - 50</option>
                                                        <option value="50 +"
                                                            {{ old('deals_completed') == '50 +' ? 'selected' : '' }}>50 +
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('deals_completed')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--<div class="col-lg-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Are you currently, or have you ever been a Aris 360 Partner Agent? </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide">-->
                                        <!--                <option data-display="Select One">Select One</option>-->
                                        <!--                <option value="1">Yes</option>-->
                                        <!--                <option value="1">No</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Within the last 10 years, have you had any action (such as a fine,
                                                    suspension, revocation, censure, etc) taken against your real estate
                                                    license or any other professional license? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="license_suspension_ten_years_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Yes"
                                                            {{ old('license_suspension_ten_years_status') == 'Yes' ? 'selected' : '' }}>
                                                            Yes</option>
                                                        <option value="No"
                                                            {{ old('license_suspension_ten_years_status') == 'No' ? 'selected' : '' }}>
                                                            No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('license_suspension_ten_years_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Have you ever been disciplined by any local board of Realtors, local
                                                    Realtor Association, the National Association of Realtors, or any other
                                                    real estate association or governing body? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="real_estate_assoc_disciplined_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Yes"
                                                            {{ old('real_estate_assoc_disciplined_status') == 'Yes' ? 'selected' : '' }}>
                                                            Yes</option>
                                                        <option value="No"
                                                            {{ old('real_estate_assoc_disciplined_status') == 'No' ? 'selected' : '' }}>
                                                            No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('real_estate_assoc_disciplined_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Are you currently under investigation or is there a pending charge
                                                    against you involving your real estate license? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="license_under_investigation_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Yes"
                                                            {{ old('license_under_investigation_status') == 'Yes' ? 'selected' : '' }}>
                                                            Yes</option>
                                                        <option value="No"
                                                            {{ old('license_under_investigation_status') == 'No' ? 'selected' : '' }}>
                                                            No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('license_under_investigation_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Do you have any restrictions on your real estate license? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="license_restriction_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Yes"
                                                            {{ old('license_restriction_status') == 'Yes' ? 'selected' : '' }}>
                                                            Yes</option>
                                                        <option value="No"
                                                            {{ old('license_restriction_status') == 'No' ? 'selected' : '' }}>
                                                            No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('license_restriction_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between my-3">
                                        <a class="theme-btn btn-two btn_previous2">Previous</a>
                                        <a class="theme-btn btn-one btn_next3">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="tab-4">
                            <div class="property-details">
                                <h4>Application Questions 2 of 2</h4>
                                <div class="inner-box default-form">
                                    <div class="row clearfix property-details2">
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Do you currently hold an active and unrestricted real estate license?
                                                    (Please note: An active real estate license is required for this role.)
                                                </label>
                                                <div class="select-box">
                                                    <select class="wide" name="license_unrestricted_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Yes"
                                                            {{ old('license_unrestricted_status') == 'Yes' ? 'selected' : '' }}>
                                                            Yes</option>
                                                        <option value="No"
                                                            {{ old('license_unrestricted_status') == 'No' ? 'selected' : '' }}>
                                                            No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('license_unrestricted_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>How many residential real estate deals have you completed as an agent
                                                    (excluding leases)? </label>
                                                <div class="select-box">
                                                    <select class="wide" name="deals_exclude_lease_completed">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="0 to 4"
                                                            {{ old('deals_exclude_lease_completed') == '0 to 4' ? 'selected' : '' }}>
                                                            0-4 deals</option>
                                                        <option value="5 to 9"
                                                            {{ old('deals_exclude_lease_completed') == '5 to 9' ? 'selected' : '' }}>
                                                            5-9 deals</option>
                                                        <option value="10 to 19"
                                                            {{ old('deals_exclude_lease_completed') == '10 to 19' ? 'selected' : '' }}>
                                                            10-19 deals</option>
                                                        <option value="20 to 49"
                                                            {{ old('deals_exclude_lease_completed') == '20 to 49' ? 'selected' : '' }}>
                                                            20-49 deals</option>
                                                        <option value="50 +"
                                                            {{ old('deals_exclude_lease_completed') == '50 +' ? 'selected' : '' }}>
                                                            50+ deals</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('deals_exclude_lease_completed')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--<div class="col-lg-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Are you currently, or have you ever been a Aris 360 Partner Agent? </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide">-->
                                        <!--                <option data-display="Select One">Select One</option>-->
                                        <!--                <option value="1">Yes</option>-->
                                        <!--                <option value="1">No</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Within the last 10 years, have you had any action (such as a fine, suspension, revocation, censure, etc) taken against your real estate license or any other professional license? </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide">-->
                                        <!--                <option data-display="Select One">Select One</option>-->
                                        <!--                <option value="1">Yes</option>-->
                                        <!--                <option value="1">No</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Have you ever been disciplined by any local board of Realtors, local Realtor Association, the National Association of Realtors, or any other real estate association or governing body? </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide">-->
                                        <!--                <option data-display="Select One">Select One</option>-->
                                        <!--                <option value="1">Yes</option>-->
                                        <!--                <option value="1">No</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-12 column">-->
                                        <!--    <div class="field-input">-->
                                        <!--        <label>Are you currently under investigation or is there a pending charge against you involving your real estate license? </label>-->
                                        <!--        <div class="select-box">-->
                                        <!--            <select class="wide">-->
                                        <!--                <option data-display="Select One">Select One</option>-->
                                        <!--                <option value="1">Yes</option>-->
                                        <!--                <option value="1">No</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <ul class="other-option  clearfix">
                                                    <label>Are you a member of the following real estate associations?
                                                        Select all that apply:</label>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="real_estate_assoc_name[]"
                                                                value="NAREB" id="CoolingexampleCheck1aa">
                                                            <label class="form-check-label" for="CoolingexampleCheck1aa">
                                                                NAREB</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="real_estate_assoc_name[]"
                                                                value="NAHREP" id="CoolingexampleCheck1ab">
                                                            <label class="form-check-label" for="CoolingexampleCheck1ab">
                                                                NAHREP</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="real_estate_assoc_name[]"
                                                                value="AREA" id="CoolingexampleCheck1ac">
                                                            <label class="form-check-label" for="CoolingexampleCheck1ac">
                                                                AREA</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="real_estate_assoc_name[]"
                                                                value="OTHER" id="CoolingexampleCheck1ad">
                                                            <label class="form-check-label" for="CoolingexampleCheck1ad">
                                                                OTHER</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row property-details2 clearfix">
                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>If Other, which association(s)?</label>
                                                <div class="form-group">
                                                    <textarea name="real_estate_assoc_name[]" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between my-3">
                                        <a class="theme-btn btn-two btn_previous3">Previous</a>
                                        <a class="theme-btn btn-one btn_next4">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="tab-5">
                            <div class="property-details">
                                <h4>Voluntary Disclosures</h4>
                                <div class="inner-box default-form">
                                    <h6>Personal Data Statement</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <small>Instructions</small>
                                            <p>A diverse, inclusive culture is vital to Aris 360's mission of making real
                                                estate better for people from all walks of life. We’re proud that Aris 360
                                                is a place where different points of view and backgrounds are encouraged and
                                                respected. We constantly strive to build a company that reflects the world
                                                around us, based on our conviction that pursuing and developing talent of
                                                all types is the only way for a business to thrive over the long haul. You
                                                are being given the opportunity to provide the following information in
                                                order to help us comply with federal and state Equal Employment
                                                Opportunity/Affirmative Action record keeping, reporting, and other legal
                                                requirements.
                                                Please complete the survey below to help Aris 360 better understand how our
                                                mission is genuinely impacting our culture. Completion of the form is
                                                entirely voluntary and will not be considered during the hiring process or
                                                thereafter. Any information you do provide will be recorded and maintained
                                                in a confidential file. Individuals seeking employment are considered
                                                without regards to race, color, religion, national origin, age, sex, marital
                                                status, ancestry, physical or mental disability, veteran status or sexual
                                                orientation. </p>
                                            <h6 class="py-4">Veteran Status Identification Instructions:</h6>
                                            <p>You are considered a protected veteran if you belong to any of the following
                                                categories: </p>
                                            <p>Disabled Veteran - Veteran who served on active duty in the U.S. military
                                                ground, naval, or air service, and: </p>
                                            <p>1. is entitled to disability compensation (or who but for the receipt of
                                                military retired pay would be entitled to disability compensation) under
                                                laws administered by the Secretary of Veterans Affairs, or </p>
                                            <p>2. was discharged or released from active duty because of a service-connected
                                                disability.</p>
                                            <p>Recently Separated Veteran - With respect to federal contracts and
                                                subcontracts entered into before December 1, 2003: </p>
                                            <p>Any veteran who served on active duty in the U.S. military ground, naval, or
                                                air service during the one-year period beginning on the date of such
                                                veteran’s discharge or release from active duty. With respect to federal
                                                contracts and subcontracts entered into on or after December 1, 2003: Any
                                                veteran who served on active duty during the three-year period beginning on
                                                the date of such veteran’s discharge or release from active duty. </p>
                                            <p>Other Protected Veteran - Any other veteran who served on active duty in the
                                                U.S. military ground, naval, or air service during a war or in a campaign or
                                                expedition for which a campaign badge has been authorized, other than a
                                                special disabled veteran, veteran of the Vietnam era, or recently separated
                                                veteran. </p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Veteran Status</label>
                                                <div class="select-box">
                                                    <select class="wide" name="veteran_status">
                                                        <option data-display="Select One">Select One</option>
                                                        <option
                                                            value="I identify as one or more of the classifications of Protected Veteran"
                                                            {{ old('veteran_status') == 'I identify as one or more of the classifications of Protected Veteran' ? 'selected' : '' }}>
                                                            I identify as one or more of the classifications of Protected
                                                            Veteran
                                                        </option>
                                                        <option
                                                            value="I identify as a Veteran, just not a Protected Veteran"
                                                            {{ old('veteran_status') == 'I identify as a Veteran, just not a Protected Veteran' ? 'selected' : '' }}>
                                                            I identify as a Veteran, just not a Protected Veteran
                                                        </option>
                                                        <option value="I am not a Veteran"
                                                            {{ old('veteran_status') == 'I am not a Veteran' ? 'selected' : '' }}>
                                                            I am not a Veteran
                                                        </option>
                                                        <option value="I do not wish to answer"
                                                            {{ old('veteran_status') == 'I do not wish to answer' ? 'selected' : '' }}>
                                                            I do not wish to answer
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('veteran_status')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Gender</label>
                                                <div class="select-box">
                                                    <select class="wide" name="gender">
                                                        <option data-display="Select One">Select One</option>
                                                        <option value="Male"
                                                            {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female"
                                                            {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('gender')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Ethnicity </label>
                                                <div class="select-box">
                                                    <select class="wide" name="ethnicity">
                                                        <option data-display="Select One">Select One</option>
                                                        <option
                                                            value="American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)"
                                                            {{ old('ethnicity') == 'American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)' ? 'selected' : '' }}>
                                                            American Indian or Alaska Native (Not Hispanic or Latino)
                                                            (United States of America)
                                                        </option>
                                                        <option
                                                            value="Asian (Not Hispanic or Latino) (United States of America)"
                                                            {{ old('ethnicity') == 'Asian (Not Hispanic or Latino) (United States of America)' ? 'selected' : '' }}>
                                                            Asian (Not Hispanic or Latino) (United States of America)
                                                        </option>
                                                        <option
                                                            value="Black or African American (Not Hispanic or Latino) (United States of America)"
                                                            {{ old('ethnicity') == 'Black or African American (Not Hispanic or Latino) (United States of America)' ? 'selected' : '' }}>
                                                            Black or African American (Not Hispanic or Latino) (United
                                                            States of America)
                                                        </option>
                                                        <option value="Decline to State (United States of America)"
                                                            {{ old('ethnicity') == 'Decline to State (United States of America)' ? 'selected' : '' }}>
                                                            Decline to State (United States of America)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('ethnicity')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <h6><strong>Terms and Conditions</strong></h6>
                                            <p class="py-3"><strong>Terms & Conditions and Nondisclosure
                                                    Agreement</strong></p>
                                            <p class="py-2">By checking the box below you expressly agree to the Aris 360
                                                Nondisclosure Agreement, and give Aris 360 consent to use your personal data
                                                as follows: Aris 360, Inc. collects your personal data for the purposes of
                                                managing Aris 360's recruitment related activities.To this end, Aris 360 may
                                                use your personal data in relation to processing your application for
                                                employment, including for example, the evaluation and selection of
                                                applicants, conducting interviews and tests, evaluating and assessing the
                                                results thereto and as is otherwise needed in the recruitment process. Aris
                                                360 does not disclose your personal data to unauthorized third parties.
                                                However, Aris 360 may from time to time also use third party vendors to act
                                                on Aris 360's behalf. You agree to the fact that to the extent necessary
                                                your personal data may be transferred and/or disclosed to such third
                                                parties.</p>
                                            <p class="py-3"><strong>Interview Nondisclosure Agreement</strong></p>
                                            <p class="py-2">This Interview Non-Disclosure Agreement (“Agreement”) is made
                                                and entered into between Aris 360 Corporation (“Aris 360”) and candidate
                                                (“Candidate”). Aris 360 is interviewing Candidate for potential employment
                                                or independent contractor services, as applicable. Candidate acknowledges
                                                that Aris 360’s Confidential Information may be disclosed to Candidate
                                                during the interview process. Candidate and Aris 360 enter into this
                                                agreement to ensure the secrecy of such Confidential Information consistent
                                                with the following terms:</p>
                                            <p class="py-2">1. Confidential Information includes nonpublic information
                                                relating to products, services, marketing plans,business policies,
                                                practices, and strategies; organization and employee and hiring information;
                                                inventions,formula, code, and technical information; trade secrets;
                                                research; financial information; customer information; information received
                                                from third parties that Aris 360 is obligated to treat as confidential; and
                                                information which by its nature would reasonably be considered Confidential
                                                Information.</p>
                                            <p class="py-2">2. Candidate will keep confidential and will not make use of
                                                nor disclose to any third party any of Aris 360’s Confidential Information
                                                until it becomes publicly known or made generally available through no fault
                                                of Applicant.</p>
                                            <p class="py-2">3. Aris 360 does not wish to receive any Confidential
                                                Information from Candidate, and Candidate acknowledges that Aris 360 assumes
                                                no obligation (whether express or implied) for any information disclosed by
                                                Candidate.</p>
                                            <p class="py-2">4. Nothing in this Agreement obligates Aris 360 to provide
                                                Confidential Information to Candidate, nor to hire or contract with
                                                Candidate, as applicable.</p>
                                            <p class="py-2">5. Candidate acknowledges that because damages for improper
                                                disclosure of Confidential Information maybe irreparable, Aris 360 may seek
                                                equitable relief, including in junctive relief, in addition to other
                                                remedies.</p>
                                            <p class="py-2">6. Aris 360 retains all intellectual property rights in any
                                                intellectual property invented or composed in the course of or incident to
                                                the performance of Candidate’s interview with Aris 360 under this
                                                Agreement.Candidate acquires no right or interest in any such intellectual
                                                property, by virtue of this Agreement or the work performed with respect to
                                                the Candidate’s interview with Aris 360.</p>
                                            <p class="py-2">7. This constitutes the entire agreement between the parties
                                                with respect to the subject matter hereof, and supersedes any prior oral or
                                                written agreements. This Agreement shall be governed by the laws of the
                                                State of Washington without reference to conflict of laws principles. The
                                                exclusive venue for any dispute relating to this Agreement shall be in the
                                                state or federal courts within King County, Washington.</p>

                                            <ul class="other-option  clearfix">
                                                <li>
                                                    <div class="radio-box">
                                                        <input type="checkbox" name="i_agree" value="1"
                                                            id="CoolingexampleCheck1aa0">
                                                        <label class="form-check-label" for="CoolingexampleCheck1aa0">
                                                            Yes, I consent to the Terms & Conditions and agree to the terms
                                                            of Aris 360's Nondisclosure Agreement.</label>

                                                    </div>
                                                </li>
                                            </ul>
                                            @error('i_agree')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between my-3">
                                        <a class="theme-btn btn-two btn_previous4">Previous</a>
                                        <button type="submit" class="theme-btn btn-one">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="tab" id="tab-6">
                            <div class="review-content-wrapper">
                                <h4>Reviews:</h4>
                                <div class="review-inner-box">
                                    <h6>My Information</h6>
                                    <p class="pt-4"><strong>How Did You Hear About Us?</strong></p>
                                    <p>Aris 360 Mobile App Ad</p>
                                    <p class="pt-4"><strong>Have you worked for Aris 360 or its subsidiaries in the past or are you a Aris 360 Associate Agent? (Note: If you are currently an active employee, please apply via Workday).</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>Legal Name</strong></p>
                                    <p>John Smith</p>
                                    <p class="pt-4"><strong>Address</strong></p>
                                    <p>United States of America</p>
                                    <p class="pt-4"><strong>Email</strong></p>
                                    <p>user@gmail.com</p>
                                    <p class="pt-4"><strong>Phone</strong></p>
                                    <p>+1 (202) 5550152 (Telephone)</p>
                                </div>
                                <div class="review-inner-box">
                                    <h6>My Experience</h6>
                                    <p class="pt-4"><strong>Work Experience</strong></p>
                                    <p>Your Response</p>
                                    <p class="pt-4"><strong>Education</strong></p>
                                    <p>No Response</p>
                                    <p class="pt-4"><strong>Languages</strong></p>
                                    <p>No Response</p>
                                    <p class="pt-4"><strong>Websites</strong></p>
                                    <p>Add any relevant websites. Format should be: http://</p>
                                    <p class="pt-4"><strong>Social Network URLs</strong></p>
                                    <p>LinkedIn</p>
                                </div>
                                <div class="review-inner-box">
                                    <h6>Application Questions 1 of 2</h6>
                                    <p class="pt-4"><strong>Do you currently hold an active real estate license?</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>How many residential real estate deals have you completed as an agent?</strong></p>
                                    <p>No</p>
                                    <!--<p class="pt-4"><strong>Are you currently, or have you ever been a Aris 360 Partner Agent?</strong></p>-->
                                    <!--<p>No</p>-->
                                    <p class="pt-4"><strong>Within the last 10 years, have you had any action (such as a fine, suspension, revocation, censure, etc) taken against your real estate license or any other professional license?</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>Have you ever been disciplined by any local board of Realtors, local Realtor Association, the National Association of Realtors, or any other real estate association or governing body?</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>Are you currently under investigation or is there a pending charge against you involving your real estate license?</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>Do you have any restrictions on your real estate license?</strong></p>
                                    <p>No</p>
                                </div>
                                <div class="review-inner-box">
                                    <h6>Application Questions 2 of 2</h6>
                                    <p class="pt-4"><strong>Do you currently hold an active and unrestricted real estate license? (Please note: An active real estate license is required for this role.)</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>Are you seeking a sponsoring broker to activate your new or inactive license?</strong></p>
                                    <p>No</p>
                                    <p class="pt-4"><strong>How many residential real estate deals have you completed as an agent (excluding leases)?</strong></p>
                                    <p>No</p>
                                    <!--<p class="pt-4"><strong>Are you currently, or have you ever been a Aris 360 Partner Agent?</strong></p>-->
                                    <!--<p>No</p>-->
                                    <!--<p class="pt-4"><strong>Within the last 10 years, have you had any action (such as a fine, suspension, revocation, censure, etc) taken against your real estate license or any other professional license?</strong></p>-->
                                    <!--<p>No</p>-->
                                    <!--<p class="pt-4"><strong>Have you ever been disciplined by any local board of Realtors, local Realtor Association, the National Association of Realtors, or any other real estate association or governing body?</strong></p>-->
                                    <!--<p>No</p>-->
                                    <!--<p class="pt-4"><strong>Are you currently under investigation or is there a pending charge against you involving your real estate license?</strong></p>-->
                                    <!--<p>No</p>-->
                                    <p class="pt-4"><strong>Are you a member of the following real estate associations? Select all that apply:</strong></p>
                                    <p>NAREB</p>
                                    <p class="pt-4"><strong>If Other, which association(s)?</strong></p>
                                    <p>Association Name</p>
                                </div>
                                <div class="review-inner-box">
                                    <h6>Voluntary Disclosures</h6>
                                    <p class="pt-3"><strong>Personal Data Statement</strong></p>
                                    <p class="pt-4"><strong>Veteran Status</strong></p>
                                    <p>I identify as one or more of the classifications of Protected Veteran</p>
                                    <p class="pt-4"><strong>Gender</strong></p>
                                    <p>Male</p>
                                    <p class="pt-4"><strong>Ethnicity</strong></p>
                                    <p>American Indian or Alaska Native (Not Hispanic or Latino) (United States of America)</p>
                                    <h6 class="pt-4">Terms and Conditions</p>
                                    <p><strong>Yes, I consent to the Terms & Conditions and agree to the terms of Aris 360's Nondisclosure Agreement.</strong></p>
                                    <p>Yes</p>
                                    <p class="pt-4"><strong>Within the last 10 years, have you had any action (such as a fine, suspension, revocation, censure, etc) taken against your real estate license or any other professional license?</strong></p>
                                </div>

                                <div class="d-flex justify-content-between my-3">
                                    <a class="theme-btn btn-two btn_previous5">Previous</a>
                                    <button type="submit" class="theme-btn btn-one">Submit</button>
                                </div>
                            </div>
                        </div> --}}
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
        })
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
@endsection
