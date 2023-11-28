@php
    $metaTitle = 'Washington Agent Resource Center | Agent Resource Center in Washington';
    $metaDescription = "Access the Washington Agent Resource Center for valuable tools and resources
     to enhance your real estate business. Expand your knowledge and stay ahead in the Washington real
      estate market.";
@endphp
@extends('properties.layouts.main')
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')

<section class="agent-resource-center-sec1">
    <div class="agent-resource-center-content">
        <p class="agent-textqueries">{!! $page[0]['content'];!!},</p>
        <p class="agent-para">{!! $page[1]['content'];!!}</p>
    </div>
</section>

<section class="agent-resource-center-sec2 agent-resourc-sec1">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title">{!! $page[2]['content'];!!}</p>
            <p class="para">{!! $page[3]['content'];!!}</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="resouce-center-agentBox">
                    <div class="resource-center-agentImg">
                        <img data-src="public/assets/images/profone.jpg" class="lazy img-fluid">
                    </div>
                    <div class="resource-center-agentDetail">
                        <a href= 'javascript:void(0)' class="title2">{!! $page[4]['content'];!!}</a>
                        <p class="para">{!! $page[5]['content'];!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="resouce-center-agentBox">
                    <div class="resource-center-agentImg">
                        <img data-src="public/assets/images/agents/george.jpg" class="lazy img-fluid">
                    </div>
                    <div class="resource-center-agentDetail">
                        <a href= 'javascript:void(0)' class="title2">{!! $page[6]['content'];!!}</a>
                        <p class="para">{!! $page[7]['content'];!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="resouce-center-agentBox">
                    <div class="resource-center-agentImg">
                        <img data-src="public/assets/images/profth.jpg" class="lazy img-fluid">
                    </div>
                    <div class="resource-center-agentDetail">
                        <a href= 'javascript:void(0)' class="title2">{!! $page[8]['content'];!!}</a>
                        <p class="para">{!! $page[9]['content'];!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="agent-resource-center-sec3 agentresource-sec2">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title">{!! $page[10]['content'];!!}</p>
        </div>
        <div class="row custom_border_line mt-5">
            <div class="col-lg-4 col-md-4 col-12">
                  <a href="{{route('agent-resource-center-01')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[11]['content'];!!}</p>
                    <p class="para">{!! $page[12]['content'];!!}</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                 <a href="{{route('agent-resource-center-02')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[13]['content'];!!}</p>
                    <p class="para">{!! $page[14]['content'];!!}</p>
                 </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                 <a href="{{route('agent-resource-center-03')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[15]['content'];!!}</p>
                    <p class="para">{!! $page[16]['content'];!!}</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                  <a href="{{route('agent-resource-center-04')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[17]['content'];!!}</p>
                    <p class="para">{!! $page[18]['content'];!!}</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                  <a href="{{route('agent-resource-center-05')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[19]['content'];!!}</p>
                    <p class="para">{!! $page[20]['content'];!!}</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                  <a href="{{route('agent-resource-center-06')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[21]['content'];!!}</p>
                    <p class="para">{!! $page[22]['content'];!!}</p>
                 </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                  <a href="{{route('agent-resource-center-07')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[23]['content'];!!}</p>
                    <p class="para">{!! $page[24]['content'];!!}</p>
                 </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                  <a href="{{route('agent-resource-center-08')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[25]['content'];!!}</p>
                    <p class="para">{!! $page[26]['content'];!!}</p>
                 </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                 <a href="{{route('agent-resource-center-09')}}" class="agent-articaleBox">
                    <p class="title2">{!! $page[27]['content'];!!}</p>
                    <p class="para">{!! $page[28]['content'];!!}</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sell-home-sect2 sell-witharissce1 sell-exp agentresource-sec3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="search_top_sect">
                    <div class="resource-center-titleSec">
                        <p class="title mb-2" style="font-size: 34px;">{!! $page[29]['content'];!!}</p>
                        <p class="para mb-2">{!! $page[30]['content'];!!}</p>
                    </div>
                    <p class="para mb-2">{!! $page[31]['content'];!!}</p>
                    <div class="search_section mb-2">
                        <!--<div class="search_input_field">-->
                        <!--    <span><i class="fas fa-search"></i></span>-->
                        <!--    <input type="text" placeholder="Search">-->
                        <!--</div>-->
                        <div class="btn-box">
                            <a href="{{ route('find-an-agent') }}" class="theme-btn btn-one">Find An Agent</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketimg">
                     <img data-src="public/assets/images/Realtor_Client_Img.jpg" class="image-fluid lazy arisindximg">
                </div>
            </div>
        </div>
    </div>

</section>


<section class="buyer_for_every_property sell-len">
    <div class="container">
        <div class="buyer_for_every_property_wrapper">
            <div class="buyer_for_every_property_content">
                <h3>{!! $page[32]['content'];!!}</h3>
                <p class="paragraph">{!! $page[33]['content'];!!}</p>
                <div class="btn-box">
                    <a href="{{route('home.property-listing')}}" class="theme-btn btn-one">List your property</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
