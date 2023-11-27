@extends('properties.layouts.main')


<style>
    #map {
        width: 100%;
        height: 500px;
        border-radius: 12px;
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





    iframe.map {

        max-height: 300px;

    }



    h5 {

        font-weight: 500;

    }



    .selector {

        position: relative;

        /*width:60%;*/

        background-color: transparent;

        /*height:80px;*/

        display: flex;

        justify-content: space-around;

        align-items: center;

        border-radius: 9999px;

        /*box-shadow:0 0 16px rgba(0,0,0,.2);*/

        gap: 10px;

        flex-wrap: wrap;

    }

    .selecotr-item {

        position: relative;

        height: 100%;

        display: flex;

        justify-content: center;

        align-items: center;

    }

    .selector-item_radio {

        appearance: none;

        display: none;

    }

    .selector-item_label {

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

    .selector-item_radio:checked+.selector-item_label {

        /*background-color:var(--blue);*/

        /*color:var(--white);*/

        /*box-shadow:0 0 4px rgba(0,0,0,.5),0 2px 4px rgba(0,0,0,.5);*/

        /*transform:translateY(-2px);*/

        border: 1px solid #DE1E25;

        color: #DE1E25;

    }

    @media screen and (max-width: 425px) {

        .property-details {

            padding: 20px 0px !important;

        }

        .border_right {
            border-right: 0px !important;
        }

    }

    /* ares profile page css */

    .border_right {
        border-right: 1px solid #949494;
    }
</style>


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
@section('content')
    <section class="agent-detail-section1">

        <div class="container">
            <a href="{{ route('real-estate-agent') }}" class="para_link">
                < Back to ARIS360 Agent</a>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($Agents as $agent)
                    @foreach ($agent->Question as $question)
                        <div class="col-12">
                            <div class="row team-4">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-4 col-12 col-pad ">
                                    <div class="team-img">
                                        <img src="{{ asset('public/images/userdp/' . $agent->user_dp) }}" alt="agent"
                                            class="img-fluid img-fluid-cover">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12 col-pad">
                                    <div class="detail">
                                        <div class="agent-details-inner">
                                            <div class="details-section mt-2">
                                                <div class="agent-location">
                                                    {{ isset($agent->company_name) ? $agent->company_name : 'ARIS360 Prime Agent' }}
                                                </div>
                                                <h2>
                                                    <a href="#">{{isset($agent->first_name) ? $agent->first_name : '' }}
                                                        {{ $agent->last_name }}</a>
                                                </h2>
                                                <div class="contact">
                                                    <ul>
                                                        <li>
                                                            <span>License : </span><a
                                                                href="#">#{{ isset($question->license_number) ? $question->license_number : '' }}</a>
                                                        </li>
                                                        <li>
                                                            <span>Phone no. :</span>
                                                            <a href="tel:{{ isset($agent->mobile_number ) ?  $agent->mobile_number : ''}}">
                                                                {{-- {{'(' . substr($agent->mobile_number, 0, 3) . ') ' . substr($agent->mobile_number, 3, 3) . '-' . substr($agent->mobile_number, 6)  }}</a> --}}
                                                                {{ isset($agent->mobile_number ) ?  $agent->mobile_number : ''}}
                                                        </li>
                                                        {{-- <li>
                                                                        <span>Homes Sold: </span><a
                                                                            href="#">{{ $question->deals_completed }}</a>
                                                                    </li> --}}
                                                    </ul>
                                                    <ul class="agent_review_star">
                                                        <li>
                                                            @for ($j = 0; $j < round($agent->review_statistics['average_rating']); $j++)
                                                                <i class="reviews fas fa-star filled"></i>
                                                            @endfor
                                                            @for ($k = 0; $k < 5 - round($agent->review_statistics['average_rating']); $k++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                        </li>
                                                        <li style="color: white">
                                                            {{ '(' . $agent->review_statistics['count'] . ')' }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div  class="btn-box">
                                                    <a href="#getIntouchSection" class="theme-btn btn-one">Get in
                                                        Touch</a>
                                                    {{-- <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#getIntouchModal">Get in Touch</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-premier-agent">
                                            <img src="{{ asset('public/images/bannerBadge.png') }}" class="img-flud"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row my-5">
                                            <div class="col-md-4 mt-5 mt-md-0">
                                                <div class="border_right text-center">
                                                    <h3> {{ isset($username['total_deals']) ? number_format($username['total_deals']) : '0' }}</h3>
                                                    <p>TOTAL DEALS</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-5 mt-md-0">
                                                <div class="border_right text-center">
                                                    <h3>{{ isset($username['deals_volume']) ? highestDeal($username['deals_volume']) : '0' }}</h3>
                                                    <p>DEAL VOLUME</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-5 mt-md-0">
                                                <div class="text-center">
                                                    <h3>{{ isset($username['highest_deal']) ? highestDeal($username['highest_deal']) : '0' }}</h3>
                                                    <p>HIGHEST DEAL PRICE</p>
                                                </div>
                                            </div>
                                        </div> --}}
                            <br>
                        </div>
                        {{-- <div class="col-12">
                                        <div class="agent-biography">
                                            <div
                                                class="user-inner-content-title agent-content-title user-inner-content-title-2">
                                                <h1 class="heading-2">About {{ $agent->first_name }}</h1>
                                            </div>
                                            <p class="para mt-3">
                                                {{ isset($agent->about) ? $agent->about : 'Please update your profile info from your dashboard' }}
                                            </p>
                                            <br>
                                            <div class="social_icons d-flex">
                                                <div>
                                                    <img src="{{ asset('public/assets/images/facebook (1).png') }}">
                                                </div>
                                                <div class="ml-2">
                                                    <img src="{{ asset('public/assets/images/linkedin.png') }}">
                                                </div>
                                                <div class="ml-2">
                                                    <img src="{{ asset('public/assets/images/twitter.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                    @endforeach
                @endforeach
            </div>
        </div>
        <section class="styled_agent_banner styled_section about_styled_overlay">
            <div class="container">
                <div class="row">
                    <div class="{{ isset($agent->about) ? 'col-lg-7 bg_overlay mt-5' : 'd-none' }}">

                        <div class="agent-biography">

                            <h1 class="styled_title">About {{ $agent->first_name . ' ' . $agent->last_name }}</h1>
                            {{--
                            <p  id="agentAboutPara">
                                {{ isset($agent->about) ? (strlen($agent->about) > 300) : 'Please update your profile info from your dashboard' }}
                                <a href="javascript(void);" class="text-danger" id="showMoreBtn">Show More...</a>
                            </p> --}}
                            <div id="profileAbout">

                                {{-- <p class="text-justify">{{ isset($agent->about) ? $agent->about : 'Please update your profile info from your dashboard' }}</p> --}}
                                @if (isset($agent->about) && strlen($agent->about) > 1300)
                                    <p class="para mt-3 text-justify">
                                        <span id="shortAbout">{{ substr($agent->about, 0, 1300) }}</span>
                                        <span id="longAbout" style="display: none;">{{ $agent->about }}</span>
                                        <a href="#" id="toggleAbout" class="text-danger">Show more</a>
                                    </p>
                                @else
                                    <p class="text-justify">
                                        {{ isset($agent->about) ? $agent->about : '' }}
                                    </p>
                                @endif


                            </div>

                            <br>
                            <div class="social_icons d-none">
                                <div>
                                    <img src="http://localhost/aris360/public/assets/images/facebook (1).png">
                                </div>
                                <div class="ml-2">
                                    <img src="http://localhost/aris360/public/assets/images/linkedin.png">
                                </div>
                                <div class="ml-2">
                                    <img src="http://localhost/aris360/public/assets/images/twitter.png">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="{{ isset($agent->about) ? 'col-lg-5 mt-5' : 'col-lg-12 mt-5 ' }}">
                        <div class="sidebar-right">
                            <!-- Contact 1 start -->
                            <div
                                class=" {{ isset($agent->about) ? 'contact-1 contact-2 widget reviews' : 'contact-1 contact-2 widget reviews m-auto' }}">
                                <h3 style="margin-bottom: 33px;" class="sidebar-title">Contact Agent</h3>
                                <form id="contact_form" action="{{ route('add_leads') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="rowo">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control text-dark"
                                                placeholder="Name" aria-label="Full Name" required>
                                        </div>
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control text-dark"
                                                placeholder="Email Address" aria-label="Email Address" required>
                                        </div>
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control text-dark"
                                                placeholder="Phone" aria-label="Phone Number" required>
                                        </div>
                                        <div class="form-group message">
                                            <textarea class="form-control text-dark" name="question" placeholder="Write message" aria-label="Write message"
                                                required></textarea>
                                        </div>
                                        <input type="hidden" name="agent_id" value="{{ $agent->id }}" />
                                        <input type="hidden" name="lead_type" value="both" />
                                        <div class="send-btn">
                                            <button type="submit" class="theme-btn btn-one w-100">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            @if (isset($aris360PrimeProperties) && count($aris360PrimeProperties) > 0)
                <div class="agent-sale-and-listing mt-4">
                    <div
                        class="user-inner-content-title user_inner_content_title_2 user-inner-content-title-2 user_inner_content_title_center">
                        @if ($username['id'] == 6)
                            <h1 class="title2">ARIS360 Prime Properties</h1>
                        @else
                            <h1 class="title2">Listed by
                                {{ isset($username['first_name']) ? $username['first_name'] . ' ' . $username['last_name'] : '' }}
                            </h1>
                        @endif
                    </div>
                </div>
            @endif
        </div>
        @if (isset($aris360PrimeProperties) && count($aris360PrimeProperties) > 0)
            <div class="container">
                <div class=" py-5">
                    <div class="">
                        <div
                            class="three-item-carousel styled_owl_nav owl-carousel owl-theme owl-dots-none nav-style-one">
                            @forelse ($aris360PrimeProperties as $property)
                                <div class="item p-2 m-0">
                                    <div class="feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <a
                                                        href="{{ route('home.property-detail', ['id' => $property['id']]) }}">
                                                        <figure class="image"><img
                                                                src="{{ isset($property['preffered_media'][0]['s3buckettempurl']) ? $property['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                                                alt=""> </figure>
                                                    </a>
                                                    @if ($property['PropetySellPrice'] > 1000000)
                                                        {{-- <span class="category">Active</span> --}}
                                                        <span class="category"> ARIS360 Featured</span>
                                                    @endif
                                                    @if (isset($property['PublishStatus']) && !empty($property['PublishStatus']))
                                                        {{-- <span class="category">Active</span> --}}
                                                        <span class="category2">{{ $property['PublishStatus'] }}</span>
                                                    @endif
                                                </div>
                                                <div class="lower-content">
                                                    <div class="price-info custom_price_info">
                                                        <h4 class="mt-2">$
                                                            {{ number_format($property['PropetySellPrice']) }}</h4>


                                                    </div>
                                                    <div>
                                                        <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                                            <li> {{ $property['Bedrooms'] }} Beds</li>
                                                            <li> {{ $property['BathroomsFull'] }} Baths</li>
                                                            <li> {{ $property['PropertyArea'] }} sq. ft.</li>
                                                        </ul>
                                                    </div>

                                                    <div class="title-text">

                                                        <div class="title-text">

                                                            <h5><a
                                                                    href="{{ route('home.property-detail', ['id' => $property['id']]) }}">{{ @substr($property['PropertyAddress'], 0, 80) . '...' }}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="listing_key_section">
                                                        <ul>
                                                            <li>
                                                                <span class="text-danger">Property Category:</span>

                                                            </li>
                                                            <li>
                                                                @if ($property['PropetySellPrice'] > 1000000)
                                                                    <p> Premier Properties </p>
                                                                @else
                                                                    <p> {{ isset($property['structure_type'][0]['StructureTypeName'])
                                                                        ? $property['structure_type'][0]['StructureTypeName']
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
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($username['id'] == 6)
            <div class="container">
                @if (isset($agentlistings) && count($agentlistings) > 0)
                    <div class="agent-sale-and-listing mt-4">
                        <div
                            class="user-inner-content-title user_inner_content_title_2 user-inner-content-title-2 user_inner_content_title_center">
                            <h1 class="title2">Listed by
                                {{ isset($username['first_name']) ? $username['first_name'] . ' ' . $username['last_name'] : '' }}
                            </h1>
                        </div>
                    </div>
                @endif
            </div>
        @endif
        @if ($username['id'] == 6)
            <div class="container">
                <div class=" py-5">
                    <div class="">
                        <div class="three-item-carousel styled_owl_nav owl-carousel owl-theme owl-dots-none nav-style-one">
                            @forelse ($agentlistings as $property)
                                <div class="item p-2 m-0">
                                    <div class="feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <a
                                                        href="{{ route('home.property-detail', ['id' => $property['id']]) }}">
                                                        <figure class="image"><img
                                                                src="{{ isset($property['prefferedMedia'][0]['s3buckettempurl']) ? $property['prefferedMedia'][0]['s3buckettempurl'] : '' }}"
                                                                alt=""> </figure>
                                                    </a>
                                                    @if ($property['PropetySellPrice'] > 1000000)
                                                        {{-- <span class="category">Active</span> --}}
                                                        <span class="category"> ARIS360 Featured</span>
                                                    @endif
                                                    @if (isset($property['PublishStatus']) && !empty($property['PublishStatus']))
                                                        {{-- <span class="category">Active</span> --}}
                                                        <span class="category2">{{ $property['PublishStatus'] }}</span>
                                                    @endif
                                                </div>
                                                <div class="lower-content">
                                                    <div class="price-info custom_price_info">
                                                        <h4 class="mt-2">$
                                                            {{ number_format($property['PropetySellPrice']) }}</h4>


                                                    </div>
                                                    <div>
                                                        <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                                            <li> {{ $property['Bedrooms'] }} Beds</li>
                                                            <li> {{ $property['BathroomsFull'] }} Baths</li>
                                                            <li> {{ $property['PropertyArea'] }} sq. ft.</li>
                                                        </ul>
                                                    </div>

                                                    <div class="title-text">

                                                        <div class="title-text">

                                                            <h5><a
                                                                    href="{{ route('home.property-detail', ['id' => $property['id']]) }}">{{ @substr($property['PropertyAddress'], 0, 80) . '...' }}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="listing_key_section">
                                                        <ul>
                                                            <li>
                                                                <span class="text-danger">Property Category:</span>

                                                            </li>
                                                            <li>
                                                                @if ($property['PropetySellPrice'] > 1000000)
                                                                    <p> Premier Properties </p>
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
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    </div>
    </div>
    </section>
    @if (!empty($agentTeams))
        <section class="agent_team_section styled_section">
            <div class="container">
                <div class="agentDetail-team-wrapper mt-4">
                    <div
                        class="user-inner-content-title user_inner_content_title_2 user-inner-content-title-2 user_inner_content_title_center">
                        <h1 class="title">Meet
                            {{ isset($username['first_name']) ? $username['first_name'] . ' ' . $username['last_name'] : '' }}'s
                            Team
                        </h1>
                    </div>
                    <div class="row mt-3">
                        @forelse ($agentTeams as $team)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="team-1">
                                    <div class="team-inner">
                                        <div class="team-overflow">
                                            <div class="team-photo">
                                                <div class="agent-detail-img">
                                                    <a href="{{ url('real-estate-agent-detail/' . (isset($team['slug']) ? $team['slug'] : '')) }}"
                                                        target="_blank">
                                                        <img src="{{ asset('public/images/userdp/' . (isset($team['user_dp']) ? $team['user_dp'] : '')) }}"
                                                            alt="agent-2" class="img-fluid img-fluid-cover">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-details">
                                            <h5><a href="{{ url('real-estate-agent-detail/' . (isset($team['slug']) ? $team['slug'] : '')) }}"
                                                    target="_blank">
                                                    {{ isset($team['first_name']) && isset($team['last_name']) ? $team['first_name'] . ' ' . $team['last_name'] : '' }}
                                                </a></h5>
                                            <p class="text-white">
                                                {{ isset($team['state']) && isset($team['city']) ? $team['state'] . ', ' . $team['city'] : '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="para text-center">Currently there are no members in
                                {{ isset($username['first_name']) ? $username['first_name'] . ' ' . $username['last_name'] : '' }}'s
                                team.
                            </p>
                        @endforelse
                    </div>
                    <p class="para text-center">When you work with ARIS360, one agent is responsible for your success, but
                        you
                        really get a whole team. ARIS360 agents work closely with a team of real estate professionals to
                        ensure
                        every sale closes without a hitch.</p>
                </div>
            </div>
        </section>
    @endif
    <section class="styled_section reviews_sec mb-4">
        <div class="container">
            <h1 class="styled_title center">Reviews</h1>
            <div class="testimonial-box-container">
                @if (count($reviews) > 0)
                    <div class="owl-carousel">
                        @foreach ($reviews as $review)
                            <div class="item p-2">
                                <div class="testimonial-box">
                                    <div class="box-top">
                                        <div class="profile">
                                            <div class="profile-img">
                                                @if (isset($review['review_by_user']['user_dp']) && $review['review_by_user']['user_dp'] != '')
                                                    <img
                                                        src="{{ asset('public/images/userdp/' . $review['review_by_user']['user_dp']) }}" />
                                                @else
                                                    <img src="{{ asset('public/images/userdp/profile.jpg') }}" />
                                                @endif

                                            </div>
                                            <div class="name-user">
                                                <strong>{{ $review['review_by_user']['first_name'] }}</strong>
                                                <div class="">
                                                    {{-- @for ($i = 0; $i < 5; $i++) --}}
                                                    @for ($j = 0; $j < $review['rating']; $j++)
                                                        <i class="reviews fas fa-star filled"></i>
                                                    @endfor
                                                    @for ($k = 0; $k < 5 - $review['rating']; $k++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                    {{-- @endfor --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-comment">
                                        <p>{{ $review['content'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="para text-center">Currently there are no reviews available for
                        {{ isset($username['first_name']) ? $username['first_name'] . ' ' . $username['last_name'] : '' }}.
                    </p>
                @endif
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-end review-button-container">
                    @if (auth()->check())
                        <button data-toggle="modal" data-target="#reviewModal"
                            class="agent_review_btn theme-btn btn-one">Review</button>
                    @else
                        <button class="agent_review_btn_not_Loggedin theme-btn btn-one">Review</button>
                    @endif
                </div>
            </div>

            <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel">Add Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body rating-from">
                            <label for="review">Review</label>
                            <div class="form-group">
                                <textarea name="comment" id="review-message" rows="6"></textarea>
                            </div>
                            <label for="review">Rate</label>
                            <div class="rating-container form-group">
                                <span class="star" data-rating="1"><i class="fas fa-star"></i></span>
                                <span class="star" data-rating="2"><i class="fas fa-star"></i></span>
                                <span class="star" data-rating="3"><i class="fas fa-star"></i></span>
                                <span class="star" data-rating="4"><i class="fas fa-star"></i></span>
                                <span class="star" data-rating="5"><i class="fas fa-star"></i></span>
                            </div>
                            <input type="hidden" id="rating" name="rating" value="" required />

                            <div class="w-100 d-flex justify-content-end">
                                <button class="add_agent_review theme-btn btn-one">Add Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal align-middle" id="favModalNoti">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="favtle"></h5>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="favbdy">
                        </div>
                        <div class="modal-footer">
                            <button class="theme-btn btn-one" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Favouite Modal End --}}

        </div>
    </section>
    <section class="agent_banner_img styled_section">
        <div class="container">
            <div class="row">
                <div class="agent_detail_newbanner_content col-md-6">
                    <div class="p-3 p-md-5">
                        <h3>We believe the best homes require the best agents.</h3>
                        <h6>Our team of subject-matter experts specialize in buying and selling high-end homes, ranking them
                            among
                            the top 1% of luxury real estate agents in the industry.
                            When you’re ready to buy, your ARIS360 agent will work tirelessly to help you write a winning
                            offer for
                            the most highly sought-after homes on the market. And, when the time comes to sell your
                            property,
                            they'll leverage their expertise to price, prepare, and market your home to attract the most
                            qualified
                            buyers and achieve the highest possible sale price.
                            We also believe in keeping more money in your pocket. That's why we offer a 1% listing fee when
                            you buy
                            and sell with us, which is less than half of what most brokerages charge.</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>



    {{-- <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script> --}}



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const shortAbout = document.getElementById("shortAbout");
            const longAbout = document.getElementById("longAbout");
            const toggleAbout = document.getElementById("toggleAbout");

            if (shortAbout && longAbout && toggleAbout) {
                toggleAbout.addEventListener("click", function(e) {
                    e.preventDefault();

                    if (shortAbout.style.display === "none") {
                        shortAbout.style.display = "inline";
                        longAbout.style.display = "none";
                        toggleAbout.textContent = "Show more";
                    } else {
                        shortAbout.style.display = "none";
                        longAbout.style.display = "inline";
                        toggleAbout.textContent = "Show less";
                    }
                });
            }
        });
        $(document).ready(function() {
            // Star rating
            $('.star').hover(
                function() {
                    var rating = $(this).data('rating');


                    for (var i = 1; i <= rating; i++) {
                        $('.star:nth-child(' + i + ')').addClass('filled-hover');
                    }
                },
                function() {
                    $('.star').removeClass('filled-hover');
                    $('.star.filled').addClass('filled');
                }
            );

            $('.star').click(function() {
                var rating = $(this).data('rating');
                console.log(rating, "rating")
                $('.star').removeClass('filled filled-hover');
                $('.star').removeClass('selected');
                $(this).addClass('selected');
                for (var i = 1; i <= rating; i++) {
                    $('.star:nth-child(' + i + ')').addClass('filled');
                }
            });

            $('.add_agent_review').one('click', function() {

                var agentId = {{ $Agents[0]->id }};
                var selectedRating = $('.star.selected').data('rating');
                var message = $('#review-message').val();
                $('#reviewModal').modal('hide');
                // console.log(userId + ">>>>" + agentId  + ">>>>" + selectedRating + ">>>>" + message);
                $.ajax({
                    url: "<?php echo url('/add-reviews'); ?>",
                    type: "POST",
                    data: {
                        "agentId": agentId,
                        "selectedRating": selectedRating,
                        "message": message,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.return == true) {
                            $('#favtle').text('Review Submitted');
                            $('#favbdy').text(response.success);
                            $('#favModalNoti').modal('show');
                        } else {
                            $('#favtle').text('Review Not Submitted');
                            $('#favbdy').text(response.success);
                            $('#favModalNoti').modal('show');
                        }
                    },
                    error: function(e) {
                        console.log("Failure");
                    }
                });

            });

            $("body").on('click', '.agent_review_btn_not_Loggedin', (function(e) {
                window.location.href = sturl + '/login';
            }));
        });

        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1,
                        slideBy: 1,

                    },
                    600: {
                        items: 2,
                        slideBy: 1,

                    },
                    1000: {
                        items: 3,
                        slideBy: 1,

                    }
                }
            });
        });




        function initialize() {

            initMap();

        }

        var map, marker;



        function initMap() {

            map = new google.maps.Map(document.getElementById('map'), {

                center: {

                    lat: 47.751076,

                    lng: -120.740135

                },

                zoom: 7

            });



            @foreach ($agentlistings as $property)
                const myLatLng{{ $property->id }} = {
                    lat: {{ $property->PropertyLatitude }},
                    lng: {{ $property->PropertyLongitude }}
                };
                const marker{{ $property->id }} = new google.maps.Marker({

                    position: myLatLng{{ $property->id }},

                    map,

                });

                var contentAddress = '{{ $property->PropertyAddress }}';

                var infowindow = new google.maps.InfoWindow();

                infowindow.setContent(contentAddress);

                google.maps.event.addListener(marker{{ $property->id }}, 'click', function() {

                    infowindow.open(map, marker{{ $property->id }});

                });



                // infowindow.setContent("Hello WOrldsssssss");

                // google.maps.event.addListener(marker, 'click', function() {

                //     infowindow.open(map,marker);

                // });
            @endforeach







        }

        // Code for Fetch Address using autocomplete -- End
    </script>


@endsection
