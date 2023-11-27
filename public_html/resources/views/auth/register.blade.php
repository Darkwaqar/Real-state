@extends('properties.layouts.main')
@section('content')
    <section class="applyjob-realestate realestate-agent-index1">
        <div class="container">
            <div class="agent-sec1-content-left">
                <p class="title">Become An ARIS360 Prime Agent</p>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="form_submitting_content">
                            <span class="check_icon"><i class="far fa-times-circle"></i></span>
                            {{-- <h3>Thank You!</h3> --}}
                            <p>Please enter the mandatory fields in the current tab.</p>
                            <button class="close_btn alert_close_btn"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- myprofile-section -->
    <section class="agentInfo-wrapper myprofile-section sec-pad" id="scrollToApplyForm">
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
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="agentForm">
                    {{ csrf_field() }}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Full Name <span class="text-danger">*</span> </label>
                                                <input type="text" id="full_name" name="full_name"
                                                    value="{{ old('full_name') }}">
                                            </div>
                                            @error('full_name')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Email <span class="text-danger">*</span> </label>
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    id="emailAgent">
                                                <span style="color:red" id="errorEmailAgent"></span>
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Address <span class="text-danger">*</span> </label>
                                                <input onkeyup="codeAddressRegister()" onfocusout="codeAddressRegister()"
                                                    type="text" name="address" value="{{ old('address') }}"
                                                    id="agentAddress">
                                            </div>
                                            @error('address')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>City <span class="text-danger">*</span> </label>
                                                <input type="text" name="city" value=" {{ old('city') }}"
                                                    id="locality">
                                            </div>
                                            @error('city')
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
                                                <label>State<span class="text-danger">*</span> </label>
                                                <input type="text" name="state" id="administrative_area_level_1">
                                            </div>
                                            @error('state')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Country <span class="text-danger">*</span> </label>
                                                <input type="text" name="country" id="country">
                                            </div>
                                            @error('country')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Postal Code <span class="text-danger">*</span> </label>
                                                <input type="text" name="postal_code" id="postal_code">
                                            </div>
                                            @error('postal_code')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Identity (Passport/ID Card/ Driving Licence) <span
                                                        class="text-danger">*</span> </label>
                                                <input type="file" name="userIdentity" placeholder=""
                                                    accept="image/*">
                                            </div>
                                            @error('userIdentity')
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

                                        <div class="col-12 d-flex justify-content-end">
                                            <a class="theme-btn btn-one btn_next1" id="btnOneAgent">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="tab-2">
                            <div class="property-details">
                                <h4>My Experience: <span id="addNewDivButton"
                                        style="position: absolute;right:0px; cursor: pointer;">
                                        <svg width="46" height="46" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 5v14"></path>
                                            <path d="M5 12h14"></path>
                                        </svg></span> </h4>
                                <div class="inner-box default-form">
                                    <h6>Work Experience</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Job Title <span class="text-danger">*</span> </label>
                                                <input type="text" name="job_title[]" id="job_title" placeholder="">
                                            </div>
                                            @error('job_title')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Company <span class="text-danger">*</span> </label>
                                                <input type="text" name="company[]" placeholder="">
                                            </div>
                                            @error('company')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>From <span class="text-danger">*</span> </label>
                                                <input type="date" name="from_date[]" placeholder="">
                                            </div>
                                            @error('from_date')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="radio-box"
                                                style="position: absolute;
                                            bottom: -20px;
                                            left: 16%;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;">
                                                <label for="currently_working" class="mt-2 position-relative">
                                                    <input type="checkbox" id="currently_working">
                                                    Currently Employed
                                                </label>
                                            </div>
                                            <div class="field-input" id="to_data_box">

                                                <label>To <span class="text-danger">*</span> </label>
                                                <input type="date" name="to_date[]" placeholder="">
                                            </div>
                                            @error('to_date')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-end">
                                    </div>
                                    <h6>Skills</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Type to add Skills <span class="text-danger">*</span> </label>
                                                <input type="text" name="skill" placeholder="">
                                            </div>
                                            @error('skill')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Resume/CV <span class="text-danger">*</span> </label>
                                                <input type="file"
                                                    accept="application/pdf,application/doc,application/docx"
                                                    name="userResume" value="{{ old('userResume') }}" placeholder="">
                                            </div>
                                            @error('userResume')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <h6>Websites</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>URL <span class="text-dark">(Optional)</span> </label>
                                                <input type="text" name="web_link" id="web_link"
                                                    value="{{ old('web_link') }}" placeholder="">
                                            </div>
                                            @error('web_link')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>LinkedIn (Optional):</label>
                                                <input type="text" name="linkedin_link" id="linkedin_link"
                                                    value="{{ old('linkedin_link') }}" placeholder="">
                                            </div>
                                            @error('linkedin_link')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Language<span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select id="languageSelect" class="wide  multi-select"
                                                        name="language[]" multiple>
                                                        <option value="AF">Afrikaans</option>
                                                        <option value="SQ">Albanian</option>
                                                        <option value="AR">Arabic</option>
                                                        <option value="HY">Armenian</option>
                                                        <option value="EU">Basque</option>
                                                        <option value="BN">Bengali</option>
                                                        <option value="BG">Bulgarian</option>
                                                        <option value="CA">Catalan</option>
                                                        <option value="KM">Cambodian</option>
                                                        <option value="ZH">Chinese (Mandarin)</option>
                                                        <option value="HR">Croatian</option>
                                                        <option value="CS">Czech</option>
                                                        <option value="DA">Danish</option>
                                                        <option value="NL">Dutch</option>
                                                        <option value="EN" selected>English</option>
                                                        <option value="ET">Estonian</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finnish</option>
                                                        <option value="FR">French</option>
                                                        <option value="KA">Georgian</option>
                                                        <option value="DE">German</option>
                                                        <option value="EL">Greek</option>
                                                        <option value="GU">Gujarati</option>
                                                        <option value="HE">Hebrew</option>
                                                        <option value="HI">Hindi</option>
                                                        <option value="HU">Hungarian</option>
                                                        <option value="IS">Icelandic</option>
                                                        <option value="ID">Indonesian</option>
                                                        <option value="GA">Irish</option>
                                                        <option value="IT">Italian</option>
                                                        <option value="JA">Japanese</option>
                                                        <option value="JW">Javanese</option>
                                                        <option value="KO">Korean</option>
                                                        <option value="LA">Latin</option>
                                                        <option value="LV">Latvian</option>
                                                        <option value="LT">Lithuanian</option>
                                                        <option value="MK">Macedonian</option>
                                                        <option value="MS">Malay</option>
                                                        <option value="ML">Malayalam</option>
                                                        <option value="MT">Maltese</option>
                                                        <option value="MI">Maori</option>
                                                        <option value="MR">Marathi</option>
                                                        <option value="MN">Mongolian</option>
                                                        <option value="NE">Nepali</option>
                                                        <option value="NO">Norwegian</option>
                                                        <option value="FA">Persian</option>
                                                        <option value="PL">Polish</option>
                                                        <option value="PT">Portuguese</option>
                                                        <option value="PA">Punjabi</option>
                                                        <option value="QU">Quechua</option>
                                                        <option value="RO">Romanian</option>
                                                        <option value="RU">Russian</option>
                                                        <option value="SM">Samoan</option>
                                                        <option value="SR">Serbian</option>
                                                        <option value="SK">Slovak</option>
                                                        <option value="SL">Slovenian</option>
                                                        <option value="ES">Spanish</option>
                                                        <option value="SW">Swahili</option>
                                                        <option value="SV">Swedish </option>
                                                        <option value="TA">Tamil</option>
                                                        <option value="TT">Tatar</option>
                                                        <option value="TE">Telugu</option>
                                                        <option value="TH">Thai</option>
                                                        <option value="BO">Tibetan</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TR">Turkish</option>
                                                        <option value="UK">Ukrainian</option>
                                                        <option value="UR">Urdu</option>
                                                        <option value="UZ">Uzbek</option>
                                                        <option value="VI">Vietnamese</option>
                                                        <option value="CY">Welsh</option>
                                                        <option value="XH">Xhosa</option>
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
                                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 column">
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
                                        </div> --}}
                                    </div>
                                    <div class="next_buton_div"></div>
                                    <div class="col-12 d-flex justify-content-between my-3 ">
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
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                <label>What is/are your license number? <span class="text-danger">*</span>
                                                </label>
                                                <div class="select-box">
                                                    <div class="form-group">
                                                        <input type="text" name="license_number" value=""
                                                            id="exampleFormControlTextarea1" placeholder="">
                                                        <!--<textarea class="form-control" name="license_number" value="" id="exampleFormControlTextarea1"
                                                            rows="3">-->
                                                        <!--    {{ old('license_number') }}-->
                                                        <!--</textarea>-->
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
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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

                                        <div class="col-lg-12 column">
                                            <div class="field-input">
                                                <label>Within the last 10 years, have you had any action (such as a fine,
                                                    suspension, revocation, censure, etc) taken against your real estate
                                                    license or any other professional license? <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="license_suspension_ten_years_status">
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                    (Please note: An active real estate license is for this role.) <span
                                                        class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="license_unrestricted_status">
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                <ul class="other-option  clearfix">
                                                    <label>Are you a member of the following real estate associations?
                                                        Select all that apply: <span class="text-danger">*</span> </label>
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
                                                <label>If Other, which association(s)? <span class="text-danger">*</span>
                                                </label>
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
                                                <label>Veteran Status <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="veteran_status">
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                <label>Gender <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="gender">
                                                        {{-- <option data-display="Select One">Select One</option> --}}
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
                                                <label>Ethnicity <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="ethnicity">
                                                        {{-- <option data-display="Select One">Select One</option> --}}
                                                        <option value="">-- select one --</option>
                                                        <option value="afghan">Afghan</option>
                                                        <option value="albanian">Albanian</option>
                                                        <option value="algerian">Algerian</option>
                                                        <option value="american">American</option>
                                                        <option value="andorran">Andorran</option>
                                                        <option value="angolan">Angolan</option>
                                                        <option value="antiguans">Antiguans</option>
                                                        <option value="argentinean">Argentinean</option>
                                                        <option value="armenian">Armenian</option>
                                                        <option value="australian">Australian</option>
                                                        <option value="austrian">Austrian</option>
                                                        <option value="azerbaijani">Azerbaijani</option>
                                                        <option value="bahamian">Bahamian</option>
                                                        <option value="bahraini">Bahraini</option>
                                                        <option value="bangladeshi">Bangladeshi</option>
                                                        <option value="barbadian">Barbadian</option>
                                                        <option value="barbudans">Barbudans</option>
                                                        <option value="batswana">Batswana</option>
                                                        <option value="belarusian">Belarusian</option>
                                                        <option value="belgian">Belgian</option>
                                                        <option value="belizean">Belizean</option>
                                                        <option value="beninese">Beninese</option>
                                                        <option value="bhutanese">Bhutanese</option>
                                                        <option value="bolivian">Bolivian</option>
                                                        <option value="bosnian">Bosnian</option>
                                                        <option value="brazilian">Brazilian</option>
                                                        <option value="british">British</option>
                                                        <option value="bruneian">Bruneian</option>
                                                        <option value="bulgarian">Bulgarian</option>
                                                        <option value="burkinabe">Burkinabe</option>
                                                        <option value="burmese">Burmese</option>
                                                        <option value="burundian">Burundian</option>
                                                        <option value="cambodian">Cambodian</option>
                                                        <option value="cameroonian">Cameroonian</option>
                                                        <option value="canadian">Canadian</option>
                                                        <option value="cape verdean">Cape Verdean</option>
                                                        <option value="central african">Central African</option>
                                                        <option value="chadian">Chadian</option>
                                                        <option value="chilean">Chilean</option>
                                                        <option value="chinese">Chinese</option>
                                                        <option value="colombian">Colombian</option>
                                                        <option value="comoran">Comoran</option>
                                                        <option value="congolese">Congolese</option>
                                                        <option value="costa rican">Costa Rican</option>
                                                        <option value="croatian">Croatian</option>
                                                        <option value="cuban">Cuban</option>
                                                        <option value="cypriot">Cypriot</option>
                                                        <option value="czech">Czech</option>
                                                        <option value="danish">Danish</option>
                                                        <option value="djibouti">Djibouti</option>
                                                        <option value="dominican">Dominican</option>
                                                        <option value="dutch">Dutch</option>
                                                        <option value="east timorese">East Timorese</option>
                                                        <option value="ecuadorean">Ecuadorean</option>
                                                        <option value="egyptian">Egyptian</option>
                                                        <option value="emirian">Emirian</option>
                                                        <option value="equatorial guinean">Equatorial Guinean</option>
                                                        <option value="eritrean">Eritrean</option>
                                                        <option value="estonian">Estonian</option>
                                                        <option value="ethiopian">Ethiopian</option>
                                                        <option value="fijian">Fijian</option>
                                                        <option value="filipino">Filipino</option>
                                                        <option value="finnish">Finnish</option>
                                                        <option value="french">French</option>
                                                        <option value="gabonese">Gabonese</option>
                                                        <option value="gambian">Gambian</option>
                                                        <option value="georgian">Georgian</option>
                                                        <option value="german">German</option>
                                                        <option value="ghanaian">Ghanaian</option>
                                                        <option value="greek">Greek</option>
                                                        <option value="grenadian">Grenadian</option>
                                                        <option value="guatemalan">Guatemalan</option>
                                                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                        <option value="guinean">Guinean</option>
                                                        <option value="guyanese">Guyanese</option>
                                                        <option value="haitian">Haitian</option>
                                                        <option value="herzegovinian">Herzegovinian</option>
                                                        <option value="honduran">Honduran</option>
                                                        <option value="hungarian">Hungarian</option>
                                                        <option value="icelander">Icelander</option>
                                                        <option value="indian">Indian</option>
                                                        <option value="indonesian">Indonesian</option>
                                                        <option value="iranian">Iranian</option>
                                                        <option value="iraqi">Iraqi</option>
                                                        <option value="irish">Irish</option>
                                                        <option value="israeli">Israeli</option>
                                                        <option value="italian">Italian</option>
                                                        <option value="ivorian">Ivorian</option>
                                                        <option value="jamaican">Jamaican</option>
                                                        <option value="japanese">Japanese</option>
                                                        <option value="jordanian">Jordanian</option>
                                                        <option value="kazakhstani">Kazakhstani</option>
                                                        <option value="kenyan">Kenyan</option>
                                                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                        <option value="kuwaiti">Kuwaiti</option>
                                                        <option value="kyrgyz">Kyrgyz</option>
                                                        <option value="laotian">Laotian</option>
                                                        <option value="latvian">Latvian</option>
                                                        <option value="lebanese">Lebanese</option>
                                                        <option value="liberian">Liberian</option>
                                                        <option value="libyan">Libyan</option>
                                                        <option value="liechtensteiner">Liechtensteiner</option>
                                                        <option value="lithuanian">Lithuanian</option>
                                                        <option value="luxembourger">Luxembourger</option>
                                                        <option value="macedonian">Macedonian</option>
                                                        <option value="malagasy">Malagasy</option>
                                                        <option value="malawian">Malawian</option>
                                                        <option value="malaysian">Malaysian</option>
                                                        <option value="maldivan">Maldivan</option>
                                                        <option value="malian">Malian</option>
                                                        <option value="maltese">Maltese</option>
                                                        <option value="marshallese">Marshallese</option>
                                                        <option value="mauritanian">Mauritanian</option>
                                                        <option value="mauritian">Mauritian</option>
                                                        <option value="mexican">Mexican</option>
                                                        <option value="micronesian">Micronesian</option>
                                                        <option value="moldovan">Moldovan</option>
                                                        <option value="monacan">Monacan</option>
                                                        <option value="mongolian">Mongolian</option>
                                                        <option value="moroccan">Moroccan</option>
                                                        <option value="mosotho">Mosotho</option>
                                                        <option value="motswana">Motswana</option>
                                                        <option value="mozambican">Mozambican</option>
                                                        <option value="namibian">Namibian</option>
                                                        <option value="nauruan">Nauruan</option>
                                                        <option value="nepalese">Nepalese</option>
                                                        <option value="new zealander">New Zealander</option>
                                                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                        <option value="nicaraguan">Nicaraguan</option>
                                                        <option value="nigerien">Nigerien</option>
                                                        <option value="north korean">North Korean</option>
                                                        <option value="northern irish">Northern Irish</option>
                                                        <option value="norwegian">Norwegian</option>
                                                        <option value="omani">Omani</option>
                                                        <option value="pakistani">Pakistani</option>
                                                        <option value="palauan">Palauan</option>
                                                        <option value="panamanian">Panamanian</option>
                                                        <option value="papua new guinean">Papua New Guinean</option>
                                                        <option value="paraguayan">Paraguayan</option>
                                                        <option value="peruvian">Peruvian</option>
                                                        <option value="polish">Polish</option>
                                                        <option value="portuguese">Portuguese</option>
                                                        <option value="qatari">Qatari</option>
                                                        <option value="romanian">Romanian</option>
                                                        <option value="russian">Russian</option>
                                                        <option value="rwandan">Rwandan</option>
                                                        <option value="saint lucian">Saint Lucian</option>
                                                        <option value="salvadoran">Salvadoran</option>
                                                        <option value="samoan">Samoan</option>
                                                        <option value="san marinese">San Marinese</option>
                                                        <option value="sao tomean">Sao Tomean</option>
                                                        <option value="saudi">Saudi</option>
                                                        <option value="scottish">Scottish</option>
                                                        <option value="senegalese">Senegalese</option>
                                                        <option value="serbian">Serbian</option>
                                                        <option value="seychellois">Seychellois</option>
                                                        <option value="sierra leonean">Sierra Leonean</option>
                                                        <option value="singaporean">Singaporean</option>
                                                        <option value="slovakian">Slovakian</option>
                                                        <option value="slovenian">Slovenian</option>
                                                        <option value="solomon islander">Solomon Islander</option>
                                                        <option value="somali">Somali</option>
                                                        <option value="south african">South African</option>
                                                        <option value="south korean">South Korean</option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="sri lankan">Sri Lankan</option>
                                                        <option value="sudanese">Sudanese</option>
                                                        <option value="surinamer">Surinamer</option>
                                                        <option value="swazi">Swazi</option>
                                                        <option value="swedish">Swedish</option>
                                                        <option value="swiss">Swiss</option>
                                                        <option value="syrian">Syrian</option>
                                                        <option value="taiwanese">Taiwanese</option>
                                                        <option value="tajik">Tajik</option>
                                                        <option value="tanzanian">Tanzanian</option>
                                                        <option value="thai">Thai</option>
                                                        <option value="togolese">Togolese</option>
                                                        <option value="tongan">Tongan</option>
                                                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian
                                                        </option>
                                                        <option value="tunisian">Tunisian</option>
                                                        <option value="turkish">Turkish</option>
                                                        <option value="tuvaluan">Tuvaluan</option>
                                                        <option value="ugandan">Ugandan</option>
                                                        <option value="ukrainian">Ukrainian</option>
                                                        <option value="uruguayan">Uruguayan</option>
                                                        <option value="uzbekistani">Uzbekistani</option>
                                                        <option value="venezuelan">Venezuelan</option>
                                                        <option value="vietnamese">Vietnamese</option>
                                                        <option value="welsh">Welsh</option>
                                                        <option value="yemenite">Yemenite</option>
                                                        <option value="zambian">Zambian</option>
                                                        <option value="zimbabwean">Zimbabwean</option>
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
                                                nor disclose to any third party any of Aris 360's Confidential Information
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
                                                        {{-- <input type="checkbox" name="i_agree"
                                                            value="1"id="CoolingexampleCheck1aa0">
                                                        <label class="form-check-label" for="CoolingexampleCheck1aa0">
                                                            Yes, I consent to the Terms & Conditions and agree to the terms
                                                            of Aris 360's Nondisclosure Agreement.</label> --}}
                                                        <input type="checkbox" name="i_agree"
                                                            id="CoolingexampleCheck1aa0">
                                                        <label class="form-check-label " for="CoolingexampleCheck1aa0">
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

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="fl" id="skzmessages"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between my-3">
                                        <a class="theme-btn btn-two btn_previous4">Previous</a>
                                        <input type="submit" class="theme-btn btn-one">
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
    <script>
        $(".multi-select").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
        // Get the container element where new divs will be appended

        var divId = 0;
        // Function to create a new div and append it to the container
        function addNewDiv() {
            divId++;
            const newDiv = document.createElement("div");
            newDiv.classList.add("inner-box", "default-form", 'mt-5', 'max-width-100', );
            newDiv.innerHTML = `
                                <div class="property-details box-shadow-none">
                                <h4> <span class="deleteButton" style="position: absolute;right:0px; cursor: pointer;">
                                    <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5 12h14"></path>
                                </svg></span> </h4>
                                <div class="inner-box default-form " >
                                    <h6>Work Experience</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Job Title <span class="text-danger">*</span> </label>
                                                <input type="text" name="job_title[]"
                                                    placeholder="">
                                            </div>
                                            @error('job_title')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Company <span class="text-danger">*</span> </label>
                                                <input type="text" name="company[]"
                                                    placeholder="">
                                            </div>
                                            @error('company')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>From <span class="text-danger">*</span> </label>
                                                <input id='from_date_${divId}' type="date" name="from_date[]"
                                                    placeholder="">
                                            </div>
                                            @error('from_date')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="radio-box"
                                                style="position: absolute;
                                            bottom: -20px;
                                            left: 16%;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;">
                                                <label for="currently_working" class="mt-2 position-relative">
                                                    <input type="checkbox" id="currently_working${divId}">
                                                    Currently Employed
                                                </label>
                                            </div>
                                            <div class="field-input" id="to_data_box${divId}">

                                                <label>To <span class="text-danger">*</span> </label>
                                                <input id="to_date_${divId}" type="date" name="to_date[]"
                                                    placeholder="">
                                            </div>
                                            @error('to_date')
                                                <span class="red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-end">
                                    </div>

                                    {{-- <h6>Education</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>School or University <span class="text-danger">*</span>  </label>
                                                <input type="text" name="school_university" value="{{ old('school_university') }}" placeholder="" >
                                            </div>
                                            @error('school_university')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Degree <span class="text-danger">*</span> </label>
                                                <div class="select-box">
                                                    <select class="wide" name="degree" >
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
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Field of Study <span class="text-danger">*</span> </label>
                                                <input type="text" name="study_field" value="{{ old('study_field') }}" placeholder="" >
                                            </div>
                                            @error('study_field')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Overall Result (GPA) <span class="text-danger">*</span> </label>
                                                <input type="text" name="overall_result" value="{{ old('overall_result') }}" placeholder="" >
                                            </div>
                                            @error('overall_result')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>From <span class="text-danger">*</span>  </label>
                                                <input type="date" name="from_date_edu" value="{{ old('from_date_edu') }}" placeholder="" >
                                            </div>
                                            @error('from_date_edu')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>To <span class="text-danger">*</span> </label>
                                                <input type="date" name="to_date_edu" value="{{ old('to_date_edu') }}" placeholder="" >
                                            </div>
                                            @error('to_date_edu')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    </div>
                                </div>
                            </div>
            `;
            container.appendChild(newDiv);
            const deleteButton = newDiv.querySelector(".deleteButton");
            deleteButton.addEventListener("click", function() {
                container.removeChild(newDiv);
            });
            $(`#currently_working${divId}`).click(() => {
                if ($(`#currently_working${divId}`).prop('checked') === true) {
                    $(`#to_data_box${divId}`).hide();
                } else {
                    $(`#to_data_box${divId}`).show();

                }
            })
        }
        var container = document.querySelector(".next_buton_div");

        // Get the button element
        var addButton = document.getElementById("addNewDivButton");
        // Function to delete the div when clicking on the delete button
        // Add click event listener to the button
        addButton.addEventListener("click", addNewDiv);
    </script>

    <!-- Sell Your Home Content End's Here -->
    <script>
        $('#currently_working').click(() => {
            if ($('#currently_working').prop('checked') === true) {
                $('#to_data_box').hide();
            } else {
                $('#to_data_box').show();

            }
        })
        $(document).ready(function() {
            // Next
            $('.btn_next1').click(function() {
                $('.list_tab2').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

            });
            $('.btn_next2').click(function() {
                $('.list_tab3').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

            });
            $('.btn_next3').click(function() {
                $('.list_tab4').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

            });
            $('.btn_next4').click(function() {
                $('.list_tab5').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

            });
            $('.btn_next5').click(function() {
                $('.list_tab6').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

            });
            $('.btn_next6').click(function() {
                $('.list_tab7').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

            });
            // Previous
            $('.btn_previous1').click(function() {
                $('.list_tab1').click();
                $("html").css("scroll-padding", "40px");
                document.getElementById("scrollToApplyForm").scrollIntoView();

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
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
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

    <script>
        var agentAddress = document.getElementById('agentAddress')


        function codeAddressRegister() {
            var geocoder, map, address;
            var address = agentAddress.value;
            var componentForm = {
                postal_code: 'short_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'long_name',
            };
            console.log(componentForm, 'componentForm')
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
                            var Allcomponents = document.getElementById(addressType);
                            Allcomponents.value = val;
                            console.log(Allcomponents, 'addressType')
                        }
                    }

                }
            });
        }
    </script>





    <script>
        $("#emailAgent").blur(function() {



            var value = $(this).val();

            $.ajax({
                type: 'get',
                url: '{{ URL::to('email-validate') }}',
                data: {
                    "email": value
                },
                success: function(data) {
                    if (data.error) {
                        $('#errorEmailAgent').html(data.error);


                    } else {
                        $('#errorEmailAgent').html("");


                    }
                }
            });
        });
    </script>
@endsection
