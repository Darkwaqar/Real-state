@php
    $metaTitle = 'Home Selling Guide Washington, Washington Home Selling Guide';
    $metaDescription = 'Looking for a comprehensive home selling guide in Washington?
     Navigate the process with ease using our Washington Home Selling Guide. Discover expert tips,
      strategies, and insights to help you successfully sell your home in the Washington real estate
       market. Maximize your profits and make informed decisions with our step-by-step guide.
        Get started on your home selling journey in Washington today.';
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')

<section class="home-trend-section1 selling-guide-sec1">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="home-trend-title">

                    <p class="gen-heading">
                        {{-- Selling made easy <br> bringing it all together for you --}}
                        {!!$page[0]['content']!!}

                    </p>

                    <p class="mt-3 gen-text">
                        {{-- A policy and guide for all sellers on ARIS360  to ensure a smooth and reliable sale --}}
                        {!!$page[1]['content']!!}
                    </p>

                </div>

            </div>

            <!--<div class="col-lg-6 col-md-6 col-12">-->

            <!--    <div class="home-trend-banner">-->

            <!--        <img src="public/assets/images/home-trend-banner.png" class="mig-fluid">-->

            <!--    </div>-->

            <!--</div>-->

        </div>

    </div>

</section>

<section class="home-ownersec2">

    <div class="container">

        <!--<div class="banner-boxwrap">-->

        <!--    <div class="banner-headwrap">-->

        <!--        <p class="gen-heading">You’ve done it once <br> Let us help you do it again.</p>-->

        <!--    </div>-->

        <!--    <div class="banner-textwrapper">-->

        <!--        <p class="gen-text">As a current homeowner, there are a lot of things you need to know when it comes to your current house and the loan that goes with it. Have no fear. We’re here to help you navigate the unknown.</p>-->

        <!--    </div>-->

        <!--</div>-->

        <div class="ownersec2-bannercard">

              <ul class="nav tabs-homebuyingguide nav-pills mb-3" id="pills-tab" role="tablist">

                      <li class="nav-item">

                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">

                            <div class="bannercardwrap">

                                <div class="banner-imagewrap">

                                    <img data-src="public/assets/images/guide4.png" class="img-fluid ownerimg mb-4 lazy" alt="">

                                </div>

                                <div class="ownercardtext">

                                    <p class="gen-text">Let's Begin</p>

                                </div>

                            </div>

                        </a>

                      </li>

                      <li class="nav-item">

                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">

                             <div class="bannercardwrap">

                            <div class="banner-imagewrap">

                                <img data-src="public/assets/images/guide2.png" class="img-fluid ownerimg mb-4 lazy" alt="">

                            </div>

                            <div class="ownercardtext">

                                <p class="gen-text">List Your Property</p>

                            </div>

                        </div>



                        </a>

                      </li>

                      <li class="nav-item">

                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">

                             <div class="bannercardwrap">

                                <div class="banner-imagewrap">

                                    <img data-src="public/assets/images/guide3.png" class="img-fluid ownerimg mb-4 lazy" alt="">

                                </div>

                                <div class="ownercardtext">

                                    <p class="gen-text">Find an Agent</p>

                                </div>

                            </div>

                        </a>

                      </li>

                       <li class="nav-item">

                        <a class="nav-link" id="pills-contact-tab-two" data-toggle="pill" href="#pills-contact-two" role="tab" aria-controls="pills-contact-two" aria-selected="false">

                            <div class="bannercardwrap">

                                <div class="banner-imagewrap">

                                    <img data-src="public/assets/images/guide1.png" class="img-fluid ownerimg mb-4 lazy" alt="">

                                </div>

                                <div class="ownercardtext">

                                    <p class="gen-text">Sale Your Property</p>

                                </div>

                            </div>

                        </a>

                      </li>

                </ul>

        </div>

    </div>

</section>



<section class="home-ownersec3 pdb-40">

    <div class="container">

           <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                     <div class="row align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerleftwrap">

                                <div class="banner-headwrap">

                                    <p class="gen-heading">
                                        {{-- Let's Begin --}}
                                        {!!$page[2]['content']!!}
                                    </p>

                                </div>

                                <div class="ownersec3-text">

                                    <p class="gen-text mb-4">
                                        {{-- The perfect starting point for anyone looking to sell a property. Get introduced to key steps and tips you need to know before you start your home listing, how to evaluate your property, how to choose the right buyer and how to select a real estate agent. So let's take the first step. --}}
                                        {!!$page[3]['content']!!}
                                    </p>

                                </div>

                            </div>

                            <!--<div class="btn-box">-->

                            <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                            <!--</div>-->

                        </div>

                         <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerrightwrap">

                                <img data-src="public/assets/images/guide4.png" class="img-fluid ownsersce3right mb-4 lazy" alt="">

                            </div>

                        </div>

                    </div>

              </div>

              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <div class="row align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerrightwrap">

                                <img data-src="public/assets/images/guide2.png" class="img-fluid ownsersce3right mb-4 lazy" alt="">

                            </div>

                        </div>

                        <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerleftwrap">

                                <div class="banner-headwrap">

                                    <p class="gen-heading">
                                        {{-- List Your Property --}}
                                        {!!$page[4]['content']!!}
                                    </p>

                                </div>

                                <div class="ownersec3-text">

                                    <p class="gen-text mb-4">
                                        {{-- Listing the right property for your clients! Cover everything from identifying your must-haves and deal-breakers, to researching the local market and assessing the value of a property. Experienced real estate professionals put together a comprehensive guide to help you make informed decisions when listing a property, conducting a home evaluation, negotiating with the buyer and closing the deal. Let's dive in exploring the exciting world of real estate with ARIS360 . --}}
                                        {!!$page[5]['content']!!}
                                    </p>

                                </div>

                            </div>

                            <!--<div class="btn-box">-->

                            <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                            <!--</div>-->

                        </div>

                    </div>

              </div>

              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                   <div class="row align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerleftwrap">

                                <div class="banner-headwrap">

                                    <p class="gen-heading">
                                        {{-- Find an Agent --}}
                                        {!!$page[6]['content']!!}
                                    </p>

                                </div>

                                <div class="ownersec3-text">

                                    <p class="gen-text mb-4">
                                        {{-- Connect with a trusted real estate agent who can guide you through the home selling process. A network of experienced agents is available to assist you with everything from identifying the right properties to negotiating the best possible deal. With ARIS360 , you can be confident that you'll have valuable insights throughout your journey to your client. So don't hesitate, contact an agent today and take the first step towards a successful home selling experience with ARIS360 . --}}
                                        {!!$page[7]['content']!!}
                                    </p>

                                </div>

                            </div>

                            <!--<div class="btn-box">-->

                            <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                            <!--</div>-->

                        </div>

                         <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerrightwrap">

                                <img data-src="public/assets/images/guide3.png" class="img-fluid ownsersce3right mb-4 lazy" alt="">

                            </div>

                        </div>

                    </div>

              </div>

               <div class="tab-pane fade" id="pills-contact-two" role="tabpanel" aria-labelledby="pills-contact-tab-two">

                     <div class="row align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerrightwrap">

                                <img data-src="public/assets/images/guide1.png" class="img-fluid ownsersce3right mb-4 lazy" alt="">

                            </div>

                        </div>

                        <div class="col-12 col-md-6 col-lg-6">

                            <div class="home-ownerleftwrap">

                                <div class="banner-headwrap">

                                    <p class="gen-heading">
                                        {{-- Sale Your Property --}}
                                        {!!$page[8]['content']!!}
                                    </p>

                                </div>

                                <div class="ownersec3-text">

                                    <p class="gen-text mb-4">
                                        {{-- Celebrate the final stages of selling a home. From making a bid and negotiating the terms of the sale, to arranging financing and completing the closing process, ARIS360  will be with you every step of the way. We'll provide tips on how to ensure a smooth transaction, how to work with your lender, and how to prepare for the big day when you finally give the keys to your new property. So let's get started. --}}
                                        {!!$page[9]['content']!!}
                                    </p>

                                </div>

                            </div>

                            <!--<div class="btn-box">-->

                            <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                            <!--</div>-->

                        </div>

                    </div>

               </div>

            </div>

    </div>

</section>

<p class="title text-center">Blogs</p>

<section class="home-tool-section">



    <div class="container">

        <div class="row">

            @if(isset($homebuyingguide) && count($homebuyingguide) > 0)

            @foreach ($homebuyingguide as $myhbguide)

            <div class="col-lg-4 col-md-4 col-12">

                <div class="real-estate-agentCard">

                    <span>

                        <a href="{{ url('selling-guide/').'/'.$myhbguide['b_slug'] }}">

                            <img data-src="{{ asset('public/images/blogs/'.$myhbguide['blog_cover']) }}" class="img-fluid lazy" alt=" {{ $myhbguide['blog_title'] }}">

                        </a>

                    </span>

                    <span class="agentCard-bottomSect">

                        <p class="title2">

                            {{ $myhbguide['blog_title'] }}

                        </p>

                        <p class="para">

                            {{Str::limit(strip_tags($myhbguide['b_body']) , 100)}}

                        </p>

                    </span>

                </div>

            </div>

            @endforeach

            @else

                <p class="text-center w-100">
                    The Data is not available

                </p>
            @endif

            <!--  <div class="col-lg-4 col-md-4 col-12">-->

            <!--    <div class="real-estate-agentCard">-->

            <!--        <span>-->

            <!--            <img src="public/assets/images/article-img6.jpg" class="img-fluid" alt="">-->

            <!--        </span>-->

            <!--        <span class="agentCard-bottomSect">-->

            <!--            <p class="title2">Home Worth Estimate Policy</p>-->

            <!--            <p class="para">Market Intelligence and industry analysis for a healthy yield in Real Estate</p>-->

            <!--        </span>-->

            <!--    </div>-->

            <!--</div>-->

        </div>

        <!--<div class="row">-->

        <!--    <div class="col-lg-4 col-md-4 col-12">-->

        <!--        <div class="tool-link-sect">-->

        <!--            <a href=""><span><img src="public/assets/images/man-in-suit-and-tie.png" class="img-fluid"></span> Find an agent</a>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--    <div class="col-lg-4 col-md-4 col-12">-->

        <!--        <div class="tool-link-sect">-->

        <!--            <a href=""><span><img src="public/assets/images/home-guide-icon6.png" class="img-fluid"></span> Free home value analysis</a>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--    <div class="col-lg-4 col-md-4 col-12">-->

        <!--        <div class="tool-link-sect">-->

        <!--            <a href=""><span><img src="public/assets/images/consultation.png" class="img-fluid"></span> Schedule selling consultation</a>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--    <div class="col-lg-4 col-md-4 col-12">-->

        <!--        <div class="tool-link-sect">-->

        <!--            <a href=""><span><img src="public/assets/images/sales.png" class="img-fluid"></span> Sale proceeds calculator</a>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--    <div class="col-lg-4 col-md-4 col-12">-->

        <!--        <div class="tool-link-sect">-->

        <!--            <a href=""><span><img src="public/assets/images/home-insurance.png" class="img-fluid"></span> Affordability calculator</a>-->

        <!--        </div>              -->

        <!--    </div>-->

        <!--    <div class="col-lg-4 col-md-4 col-12">-->

        <!--        <div class="tool-link-sect">-->

        <!--            <a href=""><span><img src="public/assets/images/economy.png" class="img-fluid"></span> Local housing market</a>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--</div>-->

    </div>

</section>

<section class="cta-section bg-color-2 mb-3">



        <div class="pattern-layer" style="background-image: url(public/assets/images/shape/shape-2.png); background-size: cover; background-repeat: no-repeat;"></div>



        <div class="auto-container">



            <div class="inner-box clearfix">



                <div class="text">



                    <h2>
                        {{-- Individual Marketing For Property Sales --}}
                        {!!$page[10]['content']!!}
                    </h2>

                    <h6>
                        {{-- Marketing aimed at promoting the sale of a particular property to individual buyers. --}}
                        {!!$page[11]['content']!!}
                    </h6>



                </div>



                <div class="btn-box">



                    <a href="{{route('sell-with-aris')}}" class="theme-btn btn-one">Sell With Aris</a>



                </div>



            </div>



        </div>



    </section>

<section class="all-article-section selling-formssec p-0">

    <div class="container">
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
        {{-- <div class="buying-Bottom-form">

            <form action="{{route('advice')}}"  method="POST" enctype="">

                @csrf

                @if (isset(Auth::user()->id))

                <p class="title text-center">Do you have any advice on home buying?</p>

                <p class="para text-center">Share it with us</p>

                <div class="buying-form-field mt-4">

                    <label>Name</label>

                    <input type="text" id="name" readonly value="{{ Auth::user()->first_name }}" name="name" placeholder="name" required>

                </div>

                @error('name')

                <div class="error">{{ $message }}</div>

                @enderror

                <div class="buying-form-field">

                    <label>Email</label>

                    <input type="email" id="email" readonly value="{{ Auth::user()->email }}" name="email"  placeholder="email" required>

                </div>

                @error('email')

                <div class="error">{{ $message }}</div>

                @enderror

                <div class="buying-form-field">

                    <label>Contact</label>

                    <input type="text" id="contact" readonly value="{{ Auth::user()->mobile_number }}" name="contact" placeholder="contact" required>

                    <input type="hidden"  value="advice" name="type">

                </div>

                @error('contact')

                <div class="error">{{ $message }}</div>

                @enderror

                <div class="row">

                    <div class="col-12">

                        <div class="field-input">

                        </div>

                        <div class="buying-form-field">

                            <label>city</label>

                            <input type="text" readonly value="{{ Auth::user()->city }}" name="city" placeholder="contact" required>

                        </div>

                        @error('city')

                        <div class="error">{{ $message }}</div>

                        @enderror

                    </div>

                </div>

                <div class="buying-form-field">

                    <label>Your Advice? <span>*</span></label>

                    <textarea plcaceholder="Your Advice" id="" value="{{old('advice')}}" name="advice" required></textarea>

                    @error('advice')

                <div class="error">{{ $message }}</div>

                     @enderror

                </div>

                @else

                <p class="title text-center">Any Suggestions  on Home Selling?</p>

                <p class="para text-center">Share with us!</p>

                <div class="buying-form-field mt-4">

                    <label>Name <span>*</span></label>

                    <input type="text"   value="{{old('name')}}" name="name" placeholder="name" required>

                </div>

                @error('name')

                <div class="error">{{ $message }}</div>

                @enderror

                <div class="buying-form-field">

                    <label>Email <span>*</span></label>

                    <input type="email" id="email"  value="{{old('email')}}" name="email"  placeholder="email" required>

                </div>

                @error('email')

                <div class="error">{{ $message }}</div>

                @enderror

                <div class="buying-form-field">

                    <label>Contact <span>*</span></label>

                    <input type="text"   value="{{old('contact')}}" name="contact" placeholder="contact" required>

                    <input type="hidden"  value="advice" name="type" placeholder="type">

                </div>

                @error('contact')

                <div class="error">{{ $message }}</div>

                @enderror

                 <div class="buying-form-field">

                    <label>City <span>*</span></label>

                    <input type="text"   value="{{old('city')}}"  id="agentSearch"  onkeyup="codeAddress()" required placeholder="city" required>

                    <input type="hidden" name="city" id="locality">

                    <input type="hidden"  value="suggestion" name="type" placeholder="type">

                </div>

                <div class="buying-form-field">

                    <label>Your advice? <span>*</span></label>

                    <textarea plcaceholder="Your advice" id="" value="{{old('advice')}}" name="advice" required></textarea>

                    @error('advice')

                <div class="error">{{ $message }}</div>

                     @enderror

                </div>

                @endif



                <div class="btn-box">

                    <input type="submit" class="theme-btn btn-one"  placeholder="Submit">

                    

                </div>

            </form>

        </div> --}}

    </div>

</section>



{{-- <script

        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize" defer>



</script> --}}



{{-- <script>
        function initialize() {
            initAutocomplete();
        }
        var autocomplete;
        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('agentSearch')), {
                    types: ['geocode']
            });
        }
        function codeAddress() {
            var geocoder, map, address;
            var address = $('#agentSearch').val();
                var componentForm = {
                    locality: 'long_name',
                };
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
                                document.getElementById(addressType).value = val;
                            }
                        }
                    }
                });
            }

        </script> --}}

@endsection

