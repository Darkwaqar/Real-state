@extends('properties.layouts.main')

@section('content')
@if(Session::has('success'))
<script>
    $(document).ready(function() {
        $("#exampleModalsubmit").modal('show');
    });
</script>
<div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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


<section class="aris-agent-banner">
    <figure class="badgeImg animate-content">
        <img src="{{asset("public/images/bannerBadge.png")}}" alt="">
    </figure>
    <div class="agent-view-banner-content">
       <div class="contetn-wrapper">
        <div class="animate-content">
            <div class="aris_premier_title">
                <p class="premierTittle">
                    ARIS360&deg; <span>PRIME</span>
                </p>
                {{-- <p class="premierTittle2">PRIME</p> --}}
                <div class="aris_premier_desc">
                    <p class="premier_title">Unlock Limitless Opportunities <br> with Experienced Agents</p>
                    {{-- <p class="premier_paragraph">ARIS360 Premier has been meticulously designed to provide an unparalleled luxury real estate experience. You will be guided by a select agent who possesses exceptional expertise in navigating the current market, and you will gain advantages from ARIS360's cutting-edge technology and extensive marketing capabilities.</p> --}}
                    <p class="premier_paragraph"></p>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>

<section class="real-estate-section1">
    {{-- <div class="container">
        <div class="real-estate-topSect">
            <p class="title">ARIS360 most elite agents</p>
            <p class="para_address">ARIS360 Premier agents have extensive experience buying and selling high-end homes, ranking them in the top 1% of agents working in luxury real estate.</p>
            <p class="title">Real Estate Agents in {{ Request::get('search') }}</p>
            <p class="para_address">Looking for agents in <a href="#!">nearby areas</a> ?</p>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-buy-tab" data-toggle="pill" href="#pills-buy" role="tab"
                    aria-controls="pills-buy" aria-selected="true">Buyer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab"
                    aria-controls="pills-sell" aria-selected="false">Seller</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-both-tab" data-toggle="pill" href="#pills-both" role="tab"
                    aria-controls="pills-both" aria-selected="false">Both</a>
            </li>
        </ul>
    </div> --}}
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
            <div class="topRated-agent-section">
                {{-- <div class="container text-center">
                    <p class="title2">Buy With an Authorized ARIS360 Agent in Washington</p>
                    <p class="para">ARIS360 Agents sell homes for $1,600 more on average and charge less than the
                    typical listing fee.</p>
                </div> --}}
                <div class="container">
                    <div class="row mt-3">
                        @forelse ($allAgents as $agent)
                        <div class="col-md-4 mt-3">
                                {{-- @if ($agent->type == "aris") --}}
                                {{-- @if($agent->city == "Seattle" || $agent->city == "seattle") --}}
                                    <div class="PremierCard PremierAgentCard ">
                                        <a href="{{ route('real-estate-agent-detail', ['id' => $agent['slug']]) }}">
                                            <img class="agent-photo" src="{{ asset('public/images/userdp/'.$agent['user_dp']) }}" alt="team-2"
                                                class="img-fluid">
                                        </a>
                                        <div class="agent-details">
                                            <div class="details-section">
                                                <div class="agent-location">{{$agent['city']}}</div>
                                                <h2>
                                                    <a href="{{ route('real-estate-agent-detail', ['id' => $agent['slug']]) }}">{{ $agent['first_name'] }} {{$agent['last_name']}}</a>
                                                </h2>
                                            </div>
                                            <div class="details-section">
                                                <div class="stats-header">
                                                    <span class="border"></span>
                                                </div>
                                                <div class="stats-row">
                                                    <div class="PremierAgentStat">
                                                        {{-- <div class="stat"> {{isset($agent['Question'][0]['deals_completed']) ? $agent['Question'][0]['deals_completed'] : '-'}}</div>
                                                        <div class="description">Deals</div> --}}
                                                    </div>
                                                    <div class="btn-box">
                                                        <a href="{{ route('real-estate-agent-detail', ['id' => $agent['slug']]) }}" class="theme-btn btn-one">View Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details-section">
                                                <ul class="agent_review_star">
                                                    <li>
                                                        @for ($j = 0; $j < round($agent['review_statistics']['average_rating']); $j++)
                                                        <i class="reviews fas fa-star filled"></i>
                                                        @endfor
                                                        @for ($k = 0; $k < (5 - round($agent['review_statistics']['average_rating'])); $k++)
                                                        <i class="fas fa-star"></i>
                                                        @endfor
                                                    </li>
                                                    <li style="color: white">
                                                      {{"(". $agent['review_statistics']['count'].")" }}
                                                    </li>
                                                </ul>
                                                <p class="phone-cta">Text or call
                                                    <a href="tel:{{ $agent['mobile_number'] }}">
                                                        {{-- {{'(' . substr($agent['mobile_number'], 0, 3) . ') ' . substr($agent['mobile_number'], 3, 3) . '-' . substr($agent['mobile_number'], 6)  }} --}}
                                                        {{$agent['mobile_number']}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endif --}}
                                {{-- @endif --}}
                            </div>
                            @empty
                            @endforelse


                    </div>

                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
            <div class="topRated-agent-section">
                {{-- <div class="container text-center">
                    <p class="title2">Sell With an Authorized ARIS360 Agent in Washington</p>
                    <p class="para">ARIS360 Agents sell homes for $1,600 more on average and charge less than the
                    typical listing fee.</p>
                </div> --}}

            </div>
        </div>
        <div class="tab-pane fade" id="pills-both" role="tabpanel" aria-labelledby="pills-both-tab">
            <div class="topRated-agent-section">
                {{-- <div class="container text-center">
                    <p class="title2">Buy and/or Sell with an Authorized ARIS360 Agent in Washington</p>
                    <p class="para">ARIS360 Agents sell homes for $1,600 more on average and charge less than the
                    typical listing fee.</p>
                </div> --}}

            </div>
        </div>
    </div>

</section>


<section class="sold_slider_section">
    <div class="container">
        <h3 class="tittle">RECENT ARIS360 HOME SALES</h3>
        <div class="options">
        @forelse ($properties  as $key => $property )


            <div class="option {{ $key == 0 ? 'active' : '' }}" style="--optionBackground:url({{isset($property['preffered_media'][0]['id']) ? $property['preffered_media'][0]['s3buckettempurl'] : ''}});">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        {{-- {{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }} --}}
                        @if (isset($property['user_properties'][0]['user_dp']))
                        <img class="lazy" data-src="{{ asset('public/images/userdp/'.$property['user_properties'][0]['user_dp'])}}" alt="">
                        @endif
                    </div>
                    <div class="info">
                        <div class="main">{{isset($property['user_properties'][0]['first_name']) ? $property['user_properties'][0]['first_name'].$property['user_properties'][0]['last_name'] : 'N/A'  }}</div>
                        @if (isset($property['user_properties'][0]['type']) && $property['user_properties'][0]['type'] == 'aris')
                        <div class="sub"> ARIS360 Prime Agent</div>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p class="sub"> No data found<p>
        @endforelse
            </div>

    </div>
</section>

<section class="first_time_homebuying_searchfield">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="real_agent_borderimg">
                    <img class="lazy" data-src="public/assets/images/agent_selling_home_bg.jpg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="agent-sec1-content-left">
                    <p class="title">Reduced Fees. Increased Proceeds.</p>
                    <p class="para">When you choose to buy and sell with us, you can retain more of your home's sale proceeds, as we charge only a 1% listing fee, which is less than half of what other brokerages typically charge.</p>
                    <div class="row">
                        <div class="col-12 text-sm-center">
                            <a href="{{url('all-properties')}}" type="submit" class="theme-btn btn-one">View All Properties</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="agent-sect2">
    <div class="container">
        <div class="why-choose-us">
            <p class="title mb-0">Why choose ARIS360 ?</p>
            <p>Discover the Benefits of Choosing ARIS360 Revolutionize Your Real Estate Experience</p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="why-choose-us-innercontent">
                    <div>
                        <img class="lazy" data-src="public/assets/images/iconn4.png">
                    </div>
                    <p class="title2">Authorized agent as your advisor</p>
                    <p class="para">Trusted representation for smooth real estate transactions: The value of working with an authorized agent on our plaform. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="why-choose-us-innercontent">
                    <div>
                        <img class="lazy" data-src="public/assets/images/expert-services.png">
                    </div>
                    <p class="title2">Personalized expert services for you</p>
                    <p class="para">we believe that every client is unique  and our experienced agents understand your needs, preferences, goals, and provide tailored solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="why-choose-us-innercontent">
                    <div>
                        <img class="lazy" data-src="public/assets/images/iconn1.png">
                    </div>
                    <p class="title2">Access best market rates</p>
                    <p class="para">Our agents have extensive knowledge of the real estate market and work tirelessly to provide you the best possible deal.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="why-choose-us-innercontent">
                    <div>
                        <img class="lazy" data-src="public/assets/images/iconn2.png">
                    </div>
                    <p class="title2">Flexible Closing Dates </p>
                    <p class="para">We understand that moving can be a stressful experience, and finding a flexible closing date can make all the difference.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="why-choose-us-innercontent">
                    <div>
                        <img class="lazy" data-src="public/assets/images/iconn3.png">
                    </div>
                    <p class="title2">Diverse Agent Profiles</p>
                    <p class="para">We pride ourselves on offering a diverse range of agent profiles to meet the unique needs of our clients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="why-choose-us-innercontent">
                    <div>
                        <img class="lazy" data-src="public/assets/images/real-estate-redimg-icon.png">
                    </div>
                    <p class="title2">Exclusive Property Listings</p>
                    <p class="para">Accessing the best properties on the market: Our real estate platform's exclusive listings.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whychoose-sec1 banner-wrap-choose realestate_new_sect_wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
                    <div class="whysec1-leftwrap mb-4">
                    <div class="whysec1-contentwrap">
                            <p class="gen-heading mb-3">International Presence</p>
                            <P class="gen-text">Your home will be showcased to millions of potential buyers through syndication on prominent global news and luxury lifestyle websites.</P>
                        </div>
                    </div>
                    <div class="whysec1-leftwrap mb-4">
                    <div class="whysec1-contentwrap">
                            <p class="gen-heading mb-3">Focussed Social Media</p>
                            <P class="gen-text">We utilize the latest Facebook and Instagram capabilities, powered by AI technology, for our advertising efforts.</P>
                        </div>
                    </div>
                    <div class="whysec1-leftwrap mb-4">
                    <div class="whysec1-contentwrap">
                            <p class="gen-heading mb-3">Collaborative Email Campaigns</p>
                            <P class="gen-text">We send high-impact emails to thousands of potential buyers who are actively searching for properties on ARIS360.com app</P>
                        </div>
                    </div>
                    <div class="whysec1-leftwrap">
                    <div class="whysec1-contentwrap">
                            <p class="gen-heading mb-3">Upscale Mailers and Brochures</p>
                            <P class="gen-text">We carefully curate premium-quality mailers and brochures to connect you with the ideal buyer you're seeking.</P>
                        </div>
                    </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="whysec1-rightwrap realestate_agent_newimg">
                    <div class="whysec1-rightimage">
                        <img data-src="public/assets/images/agent-essentials-home-ownership-gap-hero.jpg"  class="image-fluid lazy"/>
                    </div>
                    <img data-src="public/assets/images/reddottwo.png" class="img-fluid redtwo lazy"/>
                    <img data-src="public/assets/images/dottwo.png" class="image-fluid dottwo lazy"/>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="aris-agent-feedback">
    <div class="container">
        <div class="title-sec my-2">
            <p class="title my-2 font-36 text-center mb-5">
                Read Real Stories of ARIS360 Agents in Seattle
            </p>
        </div>

        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one pb-5">
            <div class="item p-2">
                <div class="custom_row_homeworth">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketimg">
                                 <img src="public/assets/images/seattle-reviews-1.jpg" class="image-fluid arisindximg">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketsecwrap">
                               <div class="search_top_sect">
                                    <div class="resource-center-titleSec">
                                         <p class="gen-heading slider-heading mb-3">Jane's Success Story:</p>
                                         <p class="gen-text slider-gen-text mb-2">Jane was a first-time homebuyer in Washington and had no idea where to start. She stumbled upon ARIS360's website and found the "Find an Agent in Washington" page. She connected with an agent who listened to her needs and found the perfect home within her budget. Jane is now a happy homeowner and highly recommends ARIS360's agents to anyone looking to buy or sell a home in Washington.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="item p-2">
                <div class="custom_row_homeworth">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketimg">
                                 <img src="public/assets/images/seattle-reviews-2.jpg" class="image-fluid arisindximg">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketsecwrap">
                               <div class="search_top_sect">
                                    <div class="resource-center-titleSec">
                                         <p class="gen-heading slider-heading mb-3">Joe's Luxury Home Search:</p>
                                         <p class="gen-text slider-gen-text mb-2">Joe was in search of a luxury home in Washington and was having trouble finding an agent who specialized in high-end properties. He found ARIS360's "Find an Agent in Washington" page and was connected with an agent who had extensive experience with luxury homes. With his agent's help, Joe found his dream home and was impressed with the agent's professionalism and expertise.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item p-2">
                <div class="custom_row_homeworth">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketimg">
                                 <img src="public/assets/images/seattle-reviews-3.jpg" class="image-fluid arisindximg">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketsecwrap">
                               <div class="search_top_sect">
                                    <div class="resource-center-titleSec">
                                         <p class="gen-heading slider-heading mb-3">Lisa's Investment Property:</p>
                                         <p class="gen-text slider-gen-text mb-2">Lisa was interested in purchasing an investment property in Washington but was unsure of the best areas to invest in. She came across ARIS360's "Find an Agent in Washington" page and was connected with an agent who specialized in investment properties. The agent provided valuable insights into the local real estate market and helped Lisa find a property that fit her investment goals. Lisa is now a successful real estate investor thanks to ARIS360's agent network.</p>
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
@endsection
