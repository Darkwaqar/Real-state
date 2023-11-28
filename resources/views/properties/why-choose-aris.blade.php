@extends('properties.layouts.main')
@php
    $metaTitle = 'Why Choose Aris';
    $metaDescription = 'Discover why Aris is the preferred choice.
     Experience exceptional service, innovative solutions, and a trusted partner for all your needs.
    Choose Aris and unlock new possibilities.';
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')


<section class="sell-home-sect1 why_choose_aris why-banner-1 styled_section">
     <div class="container">
         <div class="sell-home-bannerSec">
             <h1>
                {{-- Why Choose ARIS360  --}}
                {!! $page[0]['content'];!!}
            </h1>
             <h5 class="mt-2 text-light">
                {{-- Discover the benefits of choosing ARIS360 <br>Revolutionize your real estate experience --}}
                {!! $page[1]['content'];!!}
            </h5>
         </div>
     </div>
</section>

<section class="whychoose-sec1 banner-wrap-choose styled_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
                 <div class="whysec1-leftwrap mb-4">
                    <div class="whysec1-contentwrap">
                         <p class="gen-heading mb-3">
                            {{-- Authorized Agents --}}
                            {!! $page[2]['content'];!!}
                        </p>
                         <P class="gen-text">
                            {{-- Trusted representation for smooth real estate transactions: The value of working with an authorized agent on our plaform. --}}
                            {!! $page[3]['content'];!!}
                         </P>
                     </div>
                 </div>
                  <div class="whysec1-leftwrap mb-4">
                    <div class="whysec1-contentwrap">
                         <p class="gen-heading mb-3">
                            {{-- Optimum Profitability --}}
                            {!! $page[4]['content'];!!}
                        </p>
                         <P class="gen-text">
                            {{-- Maximizing  profit potential: How our real estate platform helps you achieve optimum returns on your investment. --}}
                            {!! $page[5]['content'];!!}
                        </P>
                     </div>
                 </div>
                 <div class="whysec1-leftwrap mb-4">
                    <div class="whysec1-contentwrap">
                         <p class="gen-heading mb-3">
                            {{-- Exclusive Property Listings --}}
                            {!! $page[6]['content'];!!}
                        </p>
                         <P class="gen-text">
                            {{-- Accessing the best properties on the market: Our real estate platform's exclusive listings. --}}
                            {!! $page[7]['content'];!!}
                        </P>
                     </div>
                 </div>
                  <div class="whysec1-leftwrap">
                    <div class="whysec1-contentwrap">
                         <p class="gen-heading mb-3">
                            {{-- Swift User Experience --}}
                            {!! $page[8]['content'];!!}
                        </p>
                         <P class="gen-text">
                            {{-- Effortless and expedient: Streamlining your real estate journey with our platform's swift and user-friendly experience. --}}
                            {!! $page[9]['content'];!!}
                        </P>
                     </div>
                 </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="whysec1-rightwrap">
                    <div class="whysec1-rightimage">
                        <img data-src="public/assets/images/front-home-b1.jpg"  class="image-fluid lazy"/>
                    </div>
                    <img data-src="public/assets/images/reddottwo.png" class="img-fluid redtwo lazy"/>
                    <img data-src="public/assets/images/dottwo.png" class="image-fluid dottwo lazy"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whychoose-sec2 why_choose_aris_section_2 styled_section">
    <div class="container">
        <div class="resource-center-titleSec renowed-sec">
            <p class="title">
                {{-- Unique Experience of Real Estate Acquisition --}}
                {!! $page[16]['content'];!!}
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 py-4">
                <img class="w_c_ars_img_1 lazy" data-src="public/assets/images/housekey.png"/>
            </div>
            <div class="col-lg-6 py-4">
                <img class=" lazy w_c_ars_img_2" data-src="public/assets/images/familyimg.png"/>
                <div class="w_c_contet_box">
                    <h1> {!! $page[10]['content'];!!}</h1>
                    <p> {!! $page[11]['content'];!!}</p>
                </div>
            </div>

            <div class="col-lg-6 py-4">
                <img class="w_c_ars_img_1 lazy"  data-src="public/assets/images/familyimgtwo.png" class="lazy"/>
            </div>
            
            <div class="col-lg-6 py-4">
                <img class="lazy w_c_ars_img_2" data-src="public/assets/images/housekeytwo.png"/>
                <div class="w_c_contet_box">
                    <h1> {!! $page[12]['content'];!!}</h1>
                    <p> {!! $page[13]['content'];!!}</p>
                </div>
            </div>

            <div class="col-lg-6 py-4">
                <img class="w_c_ars_img_1 lazy"  data-src="public/assets/images/front-home-b2.jpg" class="lazy"/>
            </div>
            <div class="col-lg-6 py-4">
                <img class="lazy w_c_ars_img_2" data-src="public/assets/images/excellence_img.jpg"  />
                <div class="w_c_contet_box">
                    <h1> {!! $page[14]['content'];!!}</h1>
                    <p> {!! $page[15]['content'];!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="agent-resource-center-sec3 why_choose_boxesSec styled_section">
    <div class="auto-container">
        <div class="resource-center-titleSec renowed-sec">
            <p class="title">
                {{-- Unique Experience of Real Estate Acquisition --}}
                {!! $page[16]['content'];!!}
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox">
                    <p class="title2">
                        {{-- Leverage Your Home's Value --}}
                        {!! $page[17]['content'];!!}
                    </p>
                    <p class="para">
                        {{-- Do you want to access the equity you've built up in your home, but don't want to wait until you sell it? ARIS360  can help you with a unique solution that allows you to unlock your home's value. --}}
                        {!! $page[18]['content'];!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox">
                    <p class="title2">
                        {{-- Sell Your Home on Your Own Terms --}}
                        {!! $page[19]['content'];!!}
                    </p>
                    <p class="para">
                        {{-- With ARIS360  you can sell your home on your own terms - without the pressure of showings, repairs, or uncertain timelines. --}}
                        {!! $page[20]['content'];!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox">
                    <p class="title2">
                        {{-- Proficient Home Planning with ARIS360  --}}
                        {!! $page[21]['content'];!!}
                    </p>
                    <p class="para">
                        {{-- Proficient home planning is critical for creating a comfortable and functional living space. --}}
                        {!! $page[22]['content'];!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox">
                    <p class="title2">
                        {{-- More Thoughtful Approach to Moving --}}
                        {!! $page[23]['content'];!!}
                    </p>
                    <p class="para">
                        {{-- Moving can be a stressful and overwhelming experience, but with ARIS360 's the Move Once concept offers a more thoughtful and deliberate approach to make the process smoother and more efficient. --}}
                        {!! $page[24]['content'];!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox">
                    <p class="title2">
                        {{-- A Smooth and Successful Process --}}
                        {!! $page[25]['content'];!!}
                    </p>
                    <p class="para">
                        {{-- Selling a home can be a complex and challenging process, but with ARIS360 's right strategies, homeowners can ensure a smooth and successful sale. --}}
                        {!! $page[26]['content'];!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script> --}}

{{-- <script>
        function initialize() {
            initAutocomplete();
        }


        var autocomplete;

        var search6 = document.getElementById('sellSearch');



        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.




            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search6), {
                    types: ['geocode']
            });




        }

        </script> --}}

@endsection
