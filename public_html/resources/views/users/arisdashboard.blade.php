@extends('properties.layouts.main')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        .notification_wrapper {
            position: fixed;
            top: 120px;
            right: 10px;
            z-index: 999;
            box-shadow: 0 0 10px #d4d4d4;
            border-radius: 10px;
            background: #3c3c3c;
            display: flex;
            align-items: flex-start;
            padding: 20px;
            padding-top: 30px;
            animation: notify .3s both;
            transition: .3s;
            transform: translateX(0)
        }

        .notification_wrapper .close_alert {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #ffffff;
            font-size: 22px;
            background: transparent
        }

        .hide_notification {
            transform: translateX(200%);
        }

        .notification_wrapper .icon_wrap {
            background: #DE1E25;
            height: 40px;
            width: 40px;
            border-radius: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            margin-right: 20px;
        }

        .notification_wrapper * {
            max-width: 350px;
            color: #ffffff;
        }

        .notification_wrapper .close_alert {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #fff;
            font-size: 22px;
        }

        .nav-link {
            position: relative;
        }


        .data_complete_alert {
            background: #DE1E25;
            height: 10px;
            width: 10px;
            position: absolute;
            top: 4px;
            right: 4px;
            border-radius: 10px;
        }



        @keyframes notify {
            from {
                opacity: 0;
                transform: translateX(100%)
            }

            top {
                transform: translateX(0);
                opacity: 1;

            }
        }
    </style>
    @if (Session::has('success') || Session::has('status'))
        <script>
            $(document).ready(function() {
                $("#exampleModalsubmit").modal('show');
            });
        </script>
        <div class="modal fade" id="exampleModalsubmit" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="form_submitting_content">
                            <span class="check_icon"><i class="fas fa-check-circle"></i></span>
                            {{-- <h3>Thank You!</h3> --}}
                            <p>{{ Session::get('success') ? Session::get('success') : Session::get('status') }}.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
    <section class="aris_user_dashboard">
        @if (auth()->user()->mobile_number == null || auth()->user()->address == null)
            <div class="notification_wrapper" id="notification">
                <button class="close_alert fa fa-times" onclick="onHideNotification('notification')"></button>
                <div class="icon_wrap">
                    <i class="fa fa-info"></i>
                </div>
                <div class="content_wrap">
                    <p>Please complete your profile by providing your <strong>Phone Number</strong> and
                        <strong>Address</strong> before proceeding. We
                        appreciate
                        your attention to this matter.
                    </p>
                </div>
            </div>
        @endif


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section class="admin-dashboard-section1">
                        <div class="admin-tab-wrapp">
                            <div class="admin-prof-tabs">
                                <div class="auto-container">
                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-dashboard-tab" data-toggle="pill"
                                                data-tab="tab1" type="button" href="#pills-dashboard" role="tab"
                                                aria-controls="pills-dashboard" aria-selected="true">Dashboard</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile_btn" id="pills-lead-tab" data-toggle="pill"
                                                data-tab="tab2" type="button" href="#pills-lead" role="tab"
                                                aria-controls="pills-lead" aria-selected="false">
                                                Profile
                                                @if (auth()->user()->mobile_number == null || auth()->user()->address == null)
                                                    <span class="data_complete_alert" id="data_alert_badge"></span>
                                                @endif

                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-notification-tab" data-toggle="pill"
                                                data-tab="tab3" type="button" href="#pills-notification" role="tab"
                                                aria-controls="pills-notification" aria-selected="true">Favorites</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-saved-tab" data-toggle="pill"
                                                href="#pills-saved" type="button" role="tab"
                                                aria-controls="pills-notification" aria-selected="true"
                                                data-tab="tab7">Saved Searches</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-setting-tab" data-toggle="pill"
                                                data-tab="tab4" type="button" href="#pills-setting" role="tab"
                                                aria-controls="pills-setting" aria-selected="false">My
                                                Listings</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-complain-tab" data-toggle="pill"
                                                data-tab="tab5" type="button" href="#pills-complain" role="tab"
                                                aria-controls="pills-complain" aria-selected="false">Complaint
                                                Box</button>
                                        </li>
                                        @if (auth()->user()->google_id == null && auth()->user()->facebook_id == null)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-reset-tab" data-toggle="pill"
                                                    data-tab="tab6" type="button" href="#pills-reset-password"
                                                    role="tab" aria-controls="pills-complain"
                                                    aria-selected="false">Reset
                                                    Password</button>
                                            </li>
                                        @endif
                                        {{-- <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-propertyiquiry-tab" data-toggle="pill"
                                                href="#pills-propertyiquiry" type="button" role="tab"
                                                aria-controls="pills-propertyiquiry" aria-selected="false"> Inquiries</button>
                                        </li> --}}


                                    </ul>
                                </div>
                            </div>
                            <div class="user-inner-content-wrapp">
                                <div class="tab-content mt-3" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                        aria-labelledby="pills-dashboard-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1>Hey {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h1>
                                            </div>
                                            <div class="user-inner-content">
                                                <div class="user-leftSect">
                                                    <div class="logo_img">
                                                        <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"
                                                            alt="">
                                                    </div>
                                                    <h3>{{ getUserSessionData('first_name') }}</h3>
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="ff_one style3">
                                                                <div class="detais">
                                                                    <div class="timer">
                                                                        @php
                                                                            echo totalUserProperties(1, getUserId());
                                                                        @endphp
                                                                    </div>
                                                                    <p>My Properties</p>
                                                                </div>
                                                                <div class="icon">
                                                                    <span class="flaticon-chat">
                                                                        <i class="icon-21"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="ff_one style4">
                                                                <div class="detais">
                                                                    <div class="timer">
                                                                        @php
                                                                            echo totalUserProperties(2, getUserId());
                                                                        @endphp
                                                                    </div>
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
                                                </div>
                                                <div class="user-rightSect">
                                                    <div class="prof-setting">
                                                        <p class="text_modal_btn mb-2"><span>Locations</span></p>
                                                        <div class="in-google-map" id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-lead" role="tabpanel"
                                        aria-labelledby="pills-lead-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1>Profile</h1>
                                            </div>
                                            <div class="profile_main_wrap">
                                                <div class="profile_wrap_left ">
                                                    <div class="profile_setting m-0">
                                                        <form action="{{ url('/user/update') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="profile_photo">
                                                                <h5>Profile Picture </h5>
                                                                <div class="circle">
                                                                    <img class="profile-pic"
                                                                        src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}">
                                                                </div>
                                                                <div class="p-image">
                                                                    <i class="fa fa-camera upload-button"></i>
                                                                    <input class="file-upload" name="profile_image"
                                                                        data-url="{{ route('updateProfileImage') }}"
                                                                        type="file" accept="image/*">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>First Name</label>
                                                                        <input name="firstName" type="text"
                                                                            value="{{ Auth::user()->fresh()->first_name }}">
                                                                    </div>
                                                                    @error('firstName')
                                                                        <span class="red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Last Name</label>
                                                                        <input name="lastName" type="text"
                                                                            value="{{ Auth::user()->fresh()->last_name }}">
                                                                    </div>
                                                                    @error('lastName')
                                                                        <span class="red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Email</label>
                                                                        <input type="text"
                                                                            value="{{ Auth::user()->fresh()->email }}"
                                                                            disabled readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Contact No</label>
                                                                        <input id="phoneNumber" name="phone"
                                                                            type="tel"
                                                                            value="{{ Auth::user()->fresh()->mobile_number }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Zip Code</label>
                                                                        <input id="postal_code" name="postal_code"
                                                                            type="text"
                                                                            value="{{ Auth::user()->fresh()->postal_code }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Street Line 1</label>
                                                                        <input id="street_number" name="street_number" type="text"
                                                                            value="{{ Auth::user()->fresh()->address }}">
                                                                    </div>
                                                                    @error('address')
                                                                        <span class="red">{{ $message }}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Street Line 2</label>
                                                                        <input onkeyup="ArisDasboardcodeAddress()" name="address" id="agentAddressProfile" type="text"
                                                                            value="">
                                                                    </div>
                                                                    @error('address')
                                                                        <span class="red">{{ $message }}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>City</label>
                                                                        <input id="locality" name="city" type="text">
                                                                    </div>
                                                                    @error('cityName')
                                                                        <span class="red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>State</label>
                                                                        <input id="administrative_area_level_1" name="state" type="text"
                                                                            value="{{ Auth::user()->fresh()->state }}">
                                                                    </div>
                                                                    @error('state')
                                                                        <span class="red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-lg-4 col-md-4 col-12">
                                                                    <div class="profile_fields">
                                                                        <label>Zip Code</label>
                                                                        <input type="text" name="zip"
                                                                            value="{{ Auth::user()->fresh()->postal_code }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-box mt-3 text-align-end">
                                                                <button class="theme-btn btn-one" type="submit"
                                                                    href="javascript:void(0)">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-notification" role="tabpanel"
                                        aria-labelledby="pills-notification-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1>Favorite Properties</h1>
                                            </div>
                                            <div class="row">
                                                @forelse ($addTofavourite->favorite_property as $property)
                                                    <div class="col-md-4 col-12">
                                                        <div class="feature-block">
                                                            <div class="feature-block-one">
                                                                <div class="inner-box">
                                                                    <div class="image-box">
                                                                        <a
                                                                            href="{{ route('home.property-detail', ['id' => $property['id']]) }}">
                                                                            <figure class="image"><img
                                                                                    src="{{ isset($property['prefferedMedia']['0']['s3buckettempurl']) ? $property['prefferedMedia']['0']['s3buckettempurl'] : '' }}"
                                                                                    alt=""> </figure>
                                                                        </a>
                                                                        <!--<div class="batch"></div>-->
                                                                        @if ($property['PropetySellPrice'] > 1000000)
                                                                            <span class="category">ARIS360 Premier</span>
                                                                        @endif
                                                                        <ul class="close_fav_icon">
                                                                            <li>
                                                                                <button class="formFavourite"
                                                                                    type="button"
                                                                                    onclick="unfavorite('{{ $property->id }}')"><i
                                                                                        class="fas fa-times"></i>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="lower-content">
                                                                        <div class="price-info custom_price_info">
                                                                            <h4 class="mt-2">$
                                                                                {{ number_format($property['PropetySellPrice']) }}
                                                                            </h4>
                                                                            <div class="fav_and_share">
                                                                                <div class="share_onlyIcon">
                                                                                    <ul
                                                                                        class="other-option feat_fav pull-right clearfix">
                                                                                        <li>
                                                                                            {{-- <button class="formFavourite"><i class="fas fa-share"></i></button> --}}
                                                                                            <button class=""><i
                                                                                                    class="far fa-share"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#shareModal"></i></button>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <ul
                                                                                class="more-details custom_price_infoDetails mt-2 clearfix">
                                                                                <li> {{ $property['Bedrooms'] }} Beds</li>
                                                                                <li> {{ $property['BathroomsFull'] }} Baths
                                                                                </li>
                                                                                <li> {{ $property['PropertyArea'] }} sq.
                                                                                    ft.
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="title-text">
                                                                            <h5><a
                                                                                    href="{{ route('home.property-detail', ['id' => $property['id']]) }}">{{ @substr($property['PropertyAddress'], 0, 80) . '...' }}</a>
                                                                            </h5>
                                                                        </div>
                                                                        <div class="listing_key_section">
                                                                            <ul>
                                                                                <li>
                                                                                    <span class="text-danger">Property
                                                                                        Category:</span>
                                                                                </li>
                                                                                <li>
                                                                                    @if ($property['PropetySellPrice'] > 1000000)
                                                                                        <p> ARIS360 Premier </p>
                                                                                    @else
                                                                                        <p> {{ isset($property['StructureType'][0]['StructureTypeName'])
                                                                                            ? $property['StructureType'][0]['StructureTypeName']
                                                                                            : ' N/A ' }}
                                                                                        </p>
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="col-12 alert alert-primary" role="alert">
                                                        No favorite properties.
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>

                                <div class="tab-pane fade" id="pills-saved" role="tabpanel"
                                    aria-labelledby="pills-saved-tab">
                                    <div class="container">
                                        <div class="user-inner-content-title">
                                            <h1>Saved Searches</h1>
                                        </div>
                                        <div class="row">
                                            @forelse ($savedSearches as $savedSearch)
                                            @php
                                                $searchCriteria = json_decode($savedSearch['search_criteria']);
                                            @endphp
                                                
                                                <div class="col-lg-4">
                                                    <div class="saved_search_wrapper">
                                                        @if(isset( $searchCriteria->publishStatus) &&  $searchCriteria->publishStatus == 'Active')
                                                        <h3> For Sale</h3>
                                                        @else
                                                        <h3> {{$searchCriteria->publishStatus}}</h3>
                                                        @endif
                                                        <a target="_blank" href="{{ route('home.our-community', [
                                                            'search' => isset($searchCriteria->address) ? $searchCriteria->address : '',
                                                            'zip' => isset($searchCriteria->zip) ? $searchCriteria->zip : '',
                                                            'search_criteria' => base64_encode(json_encode($searchCriteria)),
                                                            'id' => $savedSearch['id']
                                                        ]) }}">
                                                        <h1 class="title">{{ isset($savedSearch->name) ? $savedSearch->name : 'View Search '  }}</h1>
                                                        </a>
                                                        <div class="s_flex_between">
                                                            
                                                            <div class="s_action">
                                                                
                                                                <form action="{{ route('delete-saved-search', $savedSearch->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            @empty
                                                <div class="col-12 alert alert-primary" role="alert">
                                                    No Saved Searches.
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>



                                    <div class="tab-pane fade" id="pills-setting" role="tabpanel"
                                        aria-labelledby="pills-setting-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1>My Listings</h1>
                                            </div>
                                            <div class="trans_list_2">
                                                <!--<p>Property Listed By You</p>-->
                                                <div class="row">
                                                    @forelse ($userProperties as $usrProperty)
                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="feature-block">
                                                                <div class="feature-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="image-box">
                                                                            <a
                                                                                href="{{ route('home.property-detail', ['id' => $usrProperty['id']]) }}">
                                                                                <figure class="image"><img
                                                                                    src="{{ isset($usrProperty['preffered_media'][0]['s3buckettempurl']) ? $usrProperty['preffered_media'][0]['s3buckettempurl'] : '' }}"                                                                            </a>
                                                                            <!--<div class="batch"></div>-->
                                                                            @if (isset($usrProperty['PropetySellPrice']) && $usrProperty['PropetySellPrice'] > 1000000)
                                                                                <span class="category">ARIS360 Premier</span>
                                                                            @endif
                                                                            <ul class="close_fav_icon">
                                                                                <li>
                                                                                    <button class="formFavourite"
                                                                                        type="button"
                                                                                        onclick="confirmDelete('{{ $usrProperty['id'] }}')"><i
                                                                                            class="fas fa-times"></i>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="lower-content">
                                                                            <div class="price-info custom_price_info">
                                                                                <h4 class="mt-2">$
                                                                                    {{ isset($usrProperty['PropetySellPrice']) ? number_format($usrProperty['PropetySellPrice']) : '' }}
                                                                                </h4>
                                                                                <div class="fav_and_share">
                                                                                    <div class="share_onlyIcon">
                                                                                        <ul
                                                                                            class="other-option feat_fav pull-right clearfix">
                                                                                            <li>
                                                                                                {{-- <button class="formFavourite"><i class="fas fa-share"></i></button> --}}
                                                                                                <button class=""><i
                                                                                                        class="far fa-share"
                                                                                                        data-toggle="modal"
                                                                                                        data-target="#shareModal"></i></button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <ul
                                                                                    class="more-details custom_price_infoDetails mt-2 clearfix">
                                                                                    <li> {{ isset($usrProperty['Bedrooms']) ? $usrProperty['Bedrooms'] : '0' }} Beds
                                                                                    </li>
                                                                                    <li> {{ isset($usrProperty['BathroomsFull']) ?  $usrProperty['BathroomsFull'] : '0' }}
                                                                                        Baths</li>
                                                                                    <li> {{ isset($usrProperty['PropertyArea']) ?  $usrProperty['PropertyArea']  : '0'}} sq.
                                                                                        ft.</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="title-text">
                                                                                <h5><a
                                                                                        href="{{ route('home.property-detail', ['id' => $usrProperty['id']]) }}">{{ @substr($property['PropertyAddress'], 0, 80) . '...' }}</a>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="listing_key_section">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span class="text-danger">Property
                                                                                            Category:</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        @if ( isset($usrProperty['PropetySellPrice']) &&  $usrProperty['PropetySellPrice'] > 1000000)
                                                                                            <p> Premier Properties </p>
                                                                                        @else
                                                                                            <p> {{ isset($usrProperty['structure_type'][0]['StructureTypeName'])
                                                                                                ? $usrProperty['structure_type'][0]['StructureTypeName']
                                                                                                : ' N/A ' }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <div class="col-lg-12 col-md-6 col-12 alert alert-primary"
                                                            role="alert">
                                                            You have not yet listed any properties; please <a
                                                                href="{{ url('/property-listing') }}">
                                                                click here </a>
                                                            to do so.
                                                        </div>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-complain" role="tabpanel"
                                        aria-labelledby="pills-complain-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1>Complaint Box</h1>
                                            </div>
                                            <div class="complain-btn-container col-lg-12 col-md-6 col-12 mg-5 mb-3 ">
                                                <button class="theme-btn btn-one center" id="complaintButton"
                                                    href="javascript:void">
                                                    Add Complaint </button>
                                            </div>
                                            <div class="profile_setting mb-4" id="complaintForm"
                                                style="display: none; margin:auto;">
                                                <form action="{{ url('/user/complaint') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <div class="profile_fields">
                                                                <label>Complain Type</label>
                                                                <select id="complaintType" name="complaintType">
                                                                    <option value="">Select One</option>
                                                                    <option value="Agents">Agent</option>
                                                                    <option value="Properties">Properties</option>
                                                                    <option value="Users">Users</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                            @error('complaintType')
                                                                <span class="red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <div class="profile_fields">
                                                                <label>Subject</label>
                                                                <input name="subject" type="text"
                                                                    value="{{ old('subject') }}">
                                                            </div>
                                                            @error('subject')
                                                                <span class="red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <div class="profile_fields">
                                                                <label>Description</label>
                                                                <textarea name="description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <div class="profile_fields">
                                                                <label for="attachments">Attachments (up to 4):</label>
                                                                <input id="attachments" name="attachments[]"
                                                                    type="file" multiple>
                                                            </div>
                                                            @error('attachments')
                                                                <span class="red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="btn-box  text-align-end">
                                                        <button class="theme-btn btn-one" type="submit"
                                                            href="javascript:void(0)">Submit Ticket</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="main_trans_wrap">
                                                @if (isset($complaints) && count($complaints) > 0)
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Token No:</th>
                                                                <th>Type</th>
                                                                <th>Subject</th>
                                                                <th>Description</th>
                                                                <th>Status</th>
                                                                <th> Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($complaints as $complaint)
                                                                <tr>
                                                                    <td>{{ isset($complaint->ticket_no) ? $complaint->ticket_no : '' }}
                                                                    </td>
                                                                    <td>{{ isset($complaint->type) ? $complaint->type : '' }}
                                                                    </td>
                                                                    <td>{{ isset($complaint->subject) ? $complaint->subject : '' }}
                                                                    </td>
                                                                    <td>{{ isset($complaint->description) ? $complaint->description : '' }}
                                                                    </td>
                                                                    <td>{{ isset($complaint->status) ? $complaint->status : '' }}
                                                                    </td>
                                                                    <td>{{ isset($complaint->created_at) ? stringTodate($complaint->created_at) : '' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <div class="alert alert-primary" role="alert">
                                                        No Data is not available.
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-3">

                                                    {{ $complaints->links('admins.pagination') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Proprty Inquiry --}}
                                    <div class="tab-pane fade" id="pills-propertyiquiry" role="tabpanel"
                                        aria-labelledby="pills-propertyiquiry-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1> Inquiries </h1>
                                            </div>
                                            <div class="trans_list">
                                                <!--<p>Inquiries Recieved</p>-->
                                                <div class="main_trans_wrap">
                                                    @if (isset($inquiries) && count($inquiries) > 0)
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Contact Number</th>
                                                                    <th>message</th>
                                                                    <th> Property</th>
                                                                    <th> Schedule Date </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($inquiries as $tour)
                                                                    <tr>
                                                                        <td>{{ $tour->name }}</td>
                                                                        <td>{{ $tour->email }}</td>
                                                                        <td>{{ $tour->phone }}</td>
                                                                        <td>{{ $tour->message }}</td>
                                                                        <td>
                                                                            @if (isset($tour['propertyTour'][0]['id']))
                                                                                <a href="{{ url('property-detail/' . $tour['propertyTour'][0]['id']) }}"
                                                                                    target="_blank">
                                                                                    {{ $tour['propertyTour'][0]['PropertyAddress'] }}</a>
                                                                            @else
                                                                                <p> N/A </p>
                                                                            @endif
                                                                        </td>
                                                                        <td>{{ \Carbon\Carbon::parse($tour->date)->toFormattedDateString() }}
                                                                            {{ $tour->time }}</td>
                                                                        <!-- <td colspan="2">
                                                                                                                                                                                                                                        <button class="btn btn-default">Add to Database</button>
                                                                                                                                                                                                                                    </td> -->
                                                                    </tr>
                                                                @empty
                                                                    <div class="col-lg-12 col-md-6 col-12 alert alert-primary"
                                                                        role="alert">
                                                                        No records found
                                                                    </div>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <div class="alert alert-primary" role="alert">
                                                            The data is not available.
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-reset-password" role="tabpanel"
                                        aria-labelledby="pills-complain-tab">
                                        <div class="container">
                                            <div class="user-inner-content-title">
                                                <h1> Paasword Reset</h1>
                                            </div>
                                            <div class="row">


                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    @if (auth()->user()->google_id == null && auth()->user()->facebook_id == null)
                                                        <form action="{{ route('resetpassword') }}" method="POST">
                                                            @csrf
                                                            <div class="profile_fields">
                                                                <label>Current Password</label>
                                                                <input name="current_password" type="password" required>
                                                                @error('current_password')
                                                                    <span class="red">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="profile_fields">
                                                                <label>New Password</label>
                                                                <input name="new_password" type="password" required>
                                                                @error('new_password')
                                                                    <span class="red">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="profile_fields">
                                                                <label>Confirm New Password</label>
                                                                <input name="new_password_confirmation" type="password"
                                                                    required>
                                                                @error('new_password_confirmation')
                                                                    <span class="red">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <button class="theme-btn btn-one center" type="submit">Change
                                                                Password</button>
                                                        </form>
                                                    @else
                                                        <div class="user-inner-content-title">
                                                            <h1>Reset Password is not available for users logged in with
                                                                their
                                                                social accounts</h1>
                                                        </div>
                                                    @endif

                                                </div>
                                                <div class="col-4"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        // $(document).ready(function(){
        //     initMap();
        // })

         document.addEventListener("DOMContentLoaded", function() {
            // Check if a tab index is stored in local storage
            const storedTabIndex = localStorage.getItem("activeTab");

            // If a stored index exists, activate the tab
            if (storedTabIndex !== null) {
                $(".nav-link[data-tab='" + storedTabIndex + "']").tab("show");
            }

            // When a tab is clicked, store the index in local storage
            $(".nav-link[data-toggle='pill']").on("shown.bs.tab", function(event) {
                const targetTab = $(event.target).data("tab");
                localStorage.setItem("activeTab", targetTab);
            });
        });


        const complaintButton = document.getElementById("complaintButton");
        const complaintForm = document.getElementById("complaintForm");

        complaintButton.addEventListener("click", () => {
            if (complaintForm.style.display === "none") {
                complaintForm.style.display = "block";
            } else {
                complaintForm.style.display = "none";
            }
        });

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



    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            // Get the required elements
            let dataAlertBadgeElem = document.getElementById('data_alert_badge');
            let profileBtnElem = document.getElementById('profile_btn');
            // Attach a click event listener to the profile_btn
            profileBtnElem.addEventListener('click', function() {
                // Hide the data_alert_badge element
                dataAlertBadgeElem.style.display = 'none';
            });
        });

        const onHideNotification = (id) => {
            let elem = document.getElementById(id);

            elem.classList.add("hide_notification")
            let timer = setTimeout(() => {
                elem.style.display = "none"
            }, 300);

        }






        var agentAddressProfile = document.getElementById('agentAddressProfile')
        function ArisDasboardcodeAddress() {
        var geocoder, map, address;
        var address2 = agentAddressProfile.value;
        var componentForm = {
            postal_code: 'short_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
        };
        console.log(componentForm, 'componentForm')
        geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': address2
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                console.log(status,results)
                for (var component in componentForm) {
                    document.getElementById(component).value = '';
                    document.getElementById(component).disabled = false;
                    for (var i = 0; i < results[0].address_components.length; i++) {
                        var addressType = results[0].address_components[i].types[0];
                        if (componentForm[addressType]) {
                            var val = results[0].address_components[i][componentForm[addressType]];
                            var Allcomponents = document.getElementById(addressType);
                            Allcomponents.value = val;
                            console.log(val, 'addressType value')
                            console.log(Allcomponents, 'Allcomponents')
                            console.log(addressType, 'addressType')
                        }
                    }
                }

            }
        });
}
        /// userlisting delete
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure you want to delete this listing? ',
                text: "You won't be able to revert this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your listing  has been deleted.',
                        'success'
                    )
                }
                if (result.isConfirmed == true) {
                    $.ajax({
                        url: "{{ route('delete-property') }}",
                        type: "GET",
                        data: {
                            "id": id,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function() {
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                            swal("Done!", "It was succesfully deleted!", "success");
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                };
            });
        }
        // user  favorite remove
        function unfavorite(id) {
            // alert(id);
            Swal.fire({
                title: 'Are you sure you want to remove this property from favorites?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, remove it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Removed!',
                        'Property Removed from favorites.',
                        'success'
                    )
                }
                if (result.isConfirmed == true) {
                    $.ajax({
                        url: "{{ route('deleteFavourite') }}",
                        type: "GET",
                        data: {
                            "id": id,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function() {
                            setTimeout(() => {
                                location.reload();
                            }, 500);
                            swal("Done!", "It was succesfully removed!", "success");
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                };
            });
        }

        // const onHideNotification = (id) => {
        //     let elem = document.getElementById(id);
        //     elem.classList.add("hide_notification")
        //     let timer = setTimeout(() => {
        //         elem.style.display = "none"
        //     }, 300);
        //     return () => clearTimeout(timer)
        // }
        // user ptofile update
        $(document).ready(() => {
            ArisDasboardinitMap()
        })
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.upload-button').on('click', function() {
                $(this).siblings('.file-upload').click();
            });

            $('.file-upload').on('change', function() {
                let fileInput = $(this);
                let file = fileInput[0].files[0];
                let formData = new FormData();
                formData.append('profile_image', file);

                let url = fileInput.data('url');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#profile-image-preview img').attr('src',
                            '{{ asset('images/userdp') }}/' + response.profileImage);
                        console.log(response.message);
                    },
                    error: function(error) {
                        console.log('Error uploading profile image.');
                    }
                });
            });
        });

        
    </script>

@endsection
