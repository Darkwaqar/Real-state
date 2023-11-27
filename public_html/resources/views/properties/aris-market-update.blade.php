@php
    $metaTitle = 'Aris Market Update | Washington Real Estate Updates By Aris360';
    $metaDescription = "Stay informed with the latest Washington real estate updates by Aris360.
     Get exclusive market insights and trends to make informed decisions in the dynamic real estate
      landscape.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')
<section class="aris_housemarket_sect1">

    <div class="container">

        <div class="mortgagerate-sec1-banner">

            <h3 class="title">{!! $page[0]['content'];!!}</h3>

            <p class="para">{!! $page[1]['content'];!!}</p>

        </div>

    </div>

</section>



<section class="aris_housemarket_sect2">

    <div class="container">

        <div class="search_top_sect">

            <div class="resource-center-titleSec">

                <p class="gen-heading mb-3">{!! $page[2]['content'];!!}</p>

                <p class="gen-text mb-3">{!! $page[3]['content'];!!}</p>

            </div>

            <!--<p class="gen-text col-redd text-center">Learn More About the Aris360 Home value Index</p>-->

        </div>

    </div>

</section>



<section class="aris_housemarket_sect3">

    <div class="container">

        <div class="row justify-content-between align-items-center">

            <div class="col-lg-6 col-md-6 col-12">

                <div class="housing-sec3left">

                    <div class="housing-sec3wrapper">

                        <p class="gen-heading mb-4">{!! $page[4]['content'];!!}</p>

                       <div class="housing-sec3text">

                            <p class="gen-text">{!! $page[5]['content'];!!}</p>

                       </div>

                        <div class="housing-sec3text">

                            <p class="gen-text">{!! $page[6]['content'];!!}</p>

                       </div>

                        <div class="housing-sec3text">

                            <p class="gen-text">{!! $page[7]['content'];!!}</p>

                       </div>

                        <div class="housing-sec3text">

                            <p class="gen-text">{!! $page[8]['content'];!!}</p>

                       </div>

                        <div class="housing-sec3text" style="border-bottom:unset;">

                            <p class="gen-text mb-2">{!! $page[9]['content'];!!}</p>

                       </div>

                       <p class="small-text mb-4">{!! $page[10]['content'];!!}</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-5 col-md-5 col-12">

                <div class="housing-sec3box">

                    <div class="whysec1-leftwrap mb-2">

                         <!--<div class="whysec1-leftimage">-->

                         <!--    <img src="public/assets/images/red-check.png" class="image-fluid data-img">-->

                         <!--</div>-->

                        <div class="whysec1-contentwrap">

                             <p class="gen-heading mb-2">{!! $page[11]['content'];!!}</p>

                             <p class="gen-text">{!! $page[12]['content'];!!}</p>

                         </div>

                     </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="agent-resource-center-sec3 why_choose_boxesSec">

    <div class="auto-container">

        <div class="resource-center-titleSec renowed-sec">

            <p class="title text-capitalize">{!! $page[13]['content'];!!}</p>

        </div>

        <div class="row mt-5">

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-01')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[14]['content'];!!}</p>

                    <p class="para">{!! $page[15]['content'];!!}</p>

                </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-02')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[16]['content'];!!}</p>

                    <p class="para">{!! $page[17]['content'];!!}</p>

                 </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-03')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[18]['content'];!!}</p>

                    <p class="para">{!! $page[19]['content'];!!}</p>

                 </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-04')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[20]['content'];!!}</p>

                    <p class="para">{!! $page[21]['content'];!!}</p>

                 </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-05')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[22]['content'];!!}</p>

                    <p class="para">{!! $page[23]['content'];!!}</p>

                  </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-06')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[24]['content'];!!}</p>

                    <p class="para">{!! $page[25]['content'];!!}</p>

               </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-07')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[26]['content'];!!}</p>

                    <p class="para">{!! $page[27]['content'];!!}</p>

                 </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

               <a href="{{route('arismarketupdatenews-08')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[28]['content'];!!}</p>

                    <p class="para">{!! $page[29]['content'];!!}</p>

                  </a>

            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-5">

                <a href="{{route('arismarketupdatenews-09')}}" class="agent-articaleBox">

                    <p class="title2">{!! $page[30]['content'];!!}</p>

                    <p class="para">{!! $page[31]['content'];!!}</p>

                 </a>

            </div>

        </div>

    </div>

</section>



{{-- <section class="sell-home-sect4 card-sec1">

    <div class="auto-container">

        <div class="resource-center-titleSec">

            <p class="title">{!! $page[32]['content'];!!}</p>

            <p class="para">{!! $page[33]['content'];!!}</p>

        </div>



        <!-- Swiper -->

        <div class="swiper latestMortgagenews">

            <div class="swiper-wrapper">

                @if(isset($homebuyingguide) && count($homebuyingguide) > 0)
                @foreach ($homebuyingguide as $myhbguide)
                <div class="swiper-slide">

                    <div class="for_blog feat_property">

                        <div class="thumb">

                            <a href="{{ url('/aris-market-update/').'/'.$myhbguide['b_slug'] }}">
                                <img class="img-whp lazy" data-src="{{ asset('public/images/blogs/'.$myhbguide['blog_cover']) }}" alt="/assets/images/blog/5.jpg">
                            </a>

                        </div>

                        <div class="details">

                           <div class="tc_content">

                              <h4>
                                <a href="{{ url('/aris-market-update/').'/'.$myhbguide['b_slug'] }}">
                                    {{ $myhbguide['blog_title'] }}
                                </a>
                            </h4>

                              <p>
                                {{Str::limit(strip_tags($myhbguide['b_body']) , 100)}}
                              </p>

                           </div>

                        </div>

                    </div>

                </div>
                @endforeach
                @endif;







            </div>

            <div class="swiper-button-next custom_prevnxt">

                <i class="fas fa-chevron-right"></i>

            </div>

            <div class="swiper-button-prev custom_prevnxt">

                <i class="fas fa-chevron-left"></i>

            </div>

            <!--<div class="swiper-pagination"></div>-->

        </div>

    </div>

</section> --}}



@endsection
