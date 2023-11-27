@extends('properties.layouts.main')

@section('content')

    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="admin-dashboard-section1">
                    <div class="admin-tab-wrapp">
                        <div class="admin-prof-tabs">
                            <div class="auto-container">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard" type="button" role="tab" aria-controls="pills-dashboard" aria-selected="true">Dashboard</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-lead-tab" data-toggle="pill" href="#pills-lead" type="button" role="tab" aria-controls="pills-lead" aria-selected="false">
                                            Featured Leads
                                        </button>
                                    </li>
                                    @if (isAgentFeatured())
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-myresponse-tab" data-toggle="pill" href="#pills-myresponse" type="button" role="tab" aria-controls="pills-myresponse" aria-selected="false">
                                                My Leads
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-wallet-tab" data-toggle="pill" href="#pills-wallet" type="button" role="tab" aria-controls="pills-wallet" aria-selected="false">
                                                Wallet
                                            </button>
                                        </li>
                                    @endif
    
    
                                    {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-notification-tab" data-toggle="pill" href="#pills-notification" type="button" role="tab" aria-controls="pills-notification" aria-selected="false">Notification</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#pills-setting" type="button" role="tab" aria-controls="pills-setting" aria-selected="false">Profile</button>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="user-inner-content-wrapp">
                            <div class="container">
                                <h1>Good morning,{{ getUserSessionData('first_name') . ' '. getUserSessionData('last_name') }}!</h1>
                            </div>
                            <div class="tab-content mt-3" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">
                                    <div class="container">
                                        <div class="user-inner-content">
                                            <div class="user-leftSect">
                                                <div class="logo_img">
                                                    <img src="public/assets/images/agents/toprated-agent2.jpg" alt="">
                                                </div>
                                                <!--<div class="prof-setting">-->
                                                <!--    <p class="text_modal_btn"><span>Your profile is 93% complete</span></p>-->
                                                <!--    <div class="progress">-->
                                                <!--        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>-->
                                                <!--    </div>-->
                                                <!--    <p class="paragraph">Complete your profile is a great way to appeal to customers.</p>-->
                                                <!--</div>-->
                                                <h5 class="prof_title">Your Account</h5>
                                                <div class="prof-setting">
                                                    <p class="text_modal_btn"><span><i class="fas fa-user"></i> Agent</span></p>
                                                    <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 33500 Aris Credits</span></p>
                                                </div>
                                                <h5 class="prof_title">Help</h5>
                                                <div class="prof-setting">
                                                    <p class="paragraph">visit <a href="javascript:void(0)">help center</a> for tips &amp; advice</p>
                                                    <p><a href="emailto:support@aris360.com" class="paragraph">Email: support@aris360.com</a></p>
                                                    <p><a href="tel:(111) 111-1111" class="paragraph">Call: (111) 111-1111</a></p>
                                                    <small>open 24 hours a day, 7 days a week</small>
                                                </div>
                                            </div>
                                            <div class="user-rightSect">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                        <div class="ff_one ">
                                                            <div class="detais">
                                                                <div class="timer">37</div>
                                                                <p>Leads</p>
                                                            </div>
                                                            <div class="icon">
                                                                <span class="flaticon-home">
                                                                    <img src="public/assets/images/negotiation.png" class="img-fluid">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                        <div class="ff_one style2">
                                                            <div class="detais">
                                                                <div class="timer">24</div>
                                                                <p>Purchase Leads</p>
                                                            </div>
                                                            <div class="icon">
                                                                <span class="flaticon-view">
                                                                    <img src="public/assets/images/negotiation.png" class="img-fluid">
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="ff_one style3">
                                                                <div class="detais">
                                                                    <div class="timer">50</div>
                                                                    <p>My Properties</p>
                                                                </div>
                                                                <div class="icon">
                                                                    <span class="flaticon-chat">
                                                                        <i class="icon-21"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                        <div class="ff_one style4">
                                                            <div class="detais">
                                                                <div class="timer">18</div>
                                                                <p>My Pending Properties</p>
                                                            </div>
                                                            <div class="icon">
                                                                <span class="flaticon-heart">
                                                                    <i class="icon-21"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="prof-setting">
                                                    <p class="text_modal_btn"><span>Locations</span></p>
                                                    <p class="paragraph">You're recieving customers within</p>
                                                    <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Seattle</span></p>
                                                </div>
    
                                                <!--<div class="user-rightSect-1">-->
    
    
                                                <!--    <h5 class="prof_title">Lead settings</h5>-->
                                                <!--    <div class="prof-setting">-->
                                                <!--        <p class="text_modal_btn"><span>Services</span></p>-->
                                                <!--        <p class="paragraph">You'll recieve leads in these categories</p>-->
                                                <!--        <ul>-->
                                                <!--            <li>-->
                                                <!--                <a href="javascript:void(0)" class="service_btn">Buyer</a>-->
                                                <!--            </li>-->
                                                <!--            <li>-->
                                                <!--                <a href="javascript:void(0)" class="service_btn">Seller</a>-->
                                                <!--            </li>-->
                                                <!--            <li>-->
                                                <!--                <a href="javascript:void(0)" class="service_btn">Both</a>-->
                                                <!--            </li>-->
                                                <!--        </ul>-->
                                                <!--    </div>-->
                                                <!--    <h5 class="prof_title">Lead settings</h5>-->
                                                <!--    <div class="prof-setting">-->
                                                <!--        <p class="paragraph">Sending new leads to</p>-->
                                                <!--        <p><a href="emailto:abc@gmail.com" class="paragraph">Email: abc@gmail.com</a></p>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="user-rightSect-2">-->
                                                <!--    <h5 class="prof_title">Leads</h5>-->
                                                <!--    <div class="lead_sect">-->
                                                <!--        <p class="total_leads">2733</p>-->
                                                <!--        <p>Leads</p>-->
                                                <!--        <ul>-->
                                                <!--            <li>-->
                                                <!--                <p class="total_leads">500</p>-->
                                                <!--                <p>Lead purchased</p>-->
                                                <!--            </li>-->
                                                <!--        </ul>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-lead" role="tabpanel" aria-labelledby="pills-lead-tab">
                                    <div class="container">
                                        <div class="lead-inner-content">
                                            <div class="lead-leftSect">
                                                <h5 class="prof_title">733 leads matching</h5>
                                                <!--<div class="prof-setting">-->
                                                <!--    <p class="text_modal_btn mb-0"><span>Show all 2,733 leads</span> <a href="javascript:void(0)" class="edit_Popup_btn">Upadte to Elite Pro</a></p>-->
                                                <!--    <small>Update 2m ago <a href="javascript:void(0)">Refresh</a></small>-->
                                                <!--</div>-->
    
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                        <h5 class="prof_title">Andre <small>15 feb 2023</small></h5>
                                                        <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Seattle</span></p>
                                                        <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 2500 Aris credits</span></p>
                                                  </a>
                                                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                        <h5 class="prof_title">Alan <small>19 jan 2023</small></h5>
                                                        <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Seattle</span></p>
                                                        <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 2500 Aris credits</span></p>
                                                  </a>
                                                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                      <h5 class="prof_title">Donna <small>13 jan 2023</small></h5>
                                                        <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Tacoma</span></p>
                                                        <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 2500 Aris credits</span></p>
                                                  </a>
                                                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                        <h5 class="prof_title">Maria <small>10 jan 2023</small></h5>
                                                        <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Pasco</span></p>
                                                        <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 2500 Aris credits</span></p>
                                                  </a>
                                                </div>
                                            </div>
                                            <div class="lead-rightSect">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                      <div class="lead_right_innercontent">
                                                        <ul class="mt-2">
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Name: </span>And******* </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Email: </span>And*******@gmail.com</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Contact: </span>*** *** ****</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>City: </span>Richland</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="javascript:void(0)" class="theme-btn btn-one">Purchase lead</a>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                      <div class="lead_right_innercontent">
                                                        <ul class="mt-2">
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Name: </span>Ala*******</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Email: </span>ala********@gmail.com</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Contact: </span>*** *** ****</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>City: </span>Houston</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="javascript:void(0)" class="theme-btn btn-one">Purchase lead</a>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                      <div class="lead_right_innercontent">
                                                        <ul class="mt-2">
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Name: </span>Don********</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Email: </span>Don*******</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Contact: </span>*** *** ****</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>City: </span>Houston</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="javascript:void(0)" class="theme-btn btn-one">Purchase lead</a>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                      <div class="lead_right_innercontent">
    
                                                        <ul class="mt-2">
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Name: </span>Mar*******</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Email: </span>Mar********</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Contact: </span>***-***-****</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>City: </span>Houston</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="javascript:void(0)" class="theme-btn btn-one">Purchase lead</a>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (isAgentFeatured())
                                    <div class="tab-pane fade" id="pills-myresponse" role="tabpanel" aria-labelledby="pills-myresponse-tab">
                                        <div class="container">
                                            <div class="lead-inner-content">
                                                <div class="lead-leftSect">
                                                    <h5 class="prof_title">733 leads matching</h5>
                                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="v-pills-home1-tab" data-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home1" aria-selected="true">
                                                            <h5 class="prof_title">Roita <small>Purchased<br>15 feb 2023</small></h5>
                                                            <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Seattle</span></p>
                                                            <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 250 Aris credits</span></p>
                                                    </a>
                                                    <a class="nav-link" id="v-pills-profile1-tab" data-toggle="pill" href="#v-pills-profile1" role="tab" aria-controls="v-pills-profile1" aria-selected="false">
                                                            <h5 class="prof_title">Nadia <small>Purchased<br>19 jan 2023</small></h5>
                                                            <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Seattle</span></p>
                                                            <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 250 Aris credits</span></p>
                                                    </a>
                                                    <a class="nav-link" id="v-pills-messages1-tab" data-toggle="pill" href="#v-pills-messages1" role="tab" aria-controls="v-pills-messages1" aria-selected="false">
                                                        <h5 class="prof_title">Alan <small>Purchased<br>13 jan 2023</small></h5>
                                                            <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Tacoma</span></p>
                                                            <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 250 Aris credits</span></p>
                                                    </a>
                                                    <a class="nav-link" id="v-pills-settings1-tab" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">
                                                            <h5 class="prof_title">John <small>Purchased<br>10 jan 2023</small></h5>
                                                            <p class="text_modal_btn"><span><i class="fas fa-map-marker-alt"></i> Pasco</span></p>
                                                            <p class="text_modal_btn"><span><i class="fas fa-coins"></i> 250 Aris credits</span></p>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="lead-rightSect">
                                                    <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home1-tab">
                                                        <div class="lead_right_innercontent">
                                                            <ul class="mt-2">
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Name: </span>Roita Roa </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Email: </span>Roitaroa@gmail.com</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Contact: </span>202-555-0142</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>City: </span>Richland</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile1-tab">
                                                        <div class="lead_right_innercontent">
                                                            <ul class="mt-2">
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Name: </span>Nadia Van Hauwaert</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Email: </span>nadiavanhau@gmail.com</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Contact: </span>202-555-0142</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>City: </span>Houston</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages1-tab">
                                                        <div class="lead_right_innercontent">
                                                            <ul class="mt-2">
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Name: </span>Alan Arnfield</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Email: </span>alanarnfield@gmail.com</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Contact: </span>202-555-0142</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>City: </span>Houston</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings1-tab">
                                                        <div class="lead_right_innercontent">
                                                            <ul class="mt-2">
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Name: </span>John Doe</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Email: </span>johndoe@gmail.com</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Contact: </span>202-555-0142</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>City: </span>Houston</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>State: </span>Washington</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Lead type: </span>Buyer</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)"><span>Property type</span> Single home</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-wallet" role="tabpanel" aria-labelledby="pills-wallet-tab">
                                    <div class="container">
                                            <div class="wallet_inner_content">
                                                <div class="deposite_withdraw">
                                                    <div class="total_balance">
                                                        <h4>$33500</h4>
                                                        <p>Total balance</p>
                                                    </div>
                                                    <div class="deposite_section">
                                                        <div class="btn-box">
                                                            <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#examplenedepositeModal"><span>+</span>Make a deposit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="trans_list">
                                                    <p>Transaction History</p>
                                                    <div class="main_trans_wrap">
                                                        <div class="row trans_history">
                                                            <div class="col-lg-3">
                                                                <p>Name</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>Date</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>Amount</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>Card number</p>
                                                            </div>
                                                        </div>
                                                        <div class="row trans_history">
                                                            <div class="col-lg-3">
                                                                <p>Andre Aivazians</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>Sat, 11 Feb 2023</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>$5000</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>4731 37XX XXXX XXXX</p>
                                                            </div>
                                                        </div>
                                                        <div class="row trans_history">
                                                            <div class="col-lg-3">
                                                                <p>Andre Aivazians</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>Sat, 11 Feb 2023</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>$5000</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>4731 37XX XXXX XXXX</p>
                                                            </div>
                                                        </div>
                                                        <div class="row trans_history">
                                                            <div class="col-lg-3">
                                                                <p>Aivazians</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>Sat, 11 Feb 2023</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>$5000</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>4731 37XX XXXX XXXX</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                @endif
    
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
