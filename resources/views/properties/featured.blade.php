<div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
    @foreach ($properties['featuedproperties'] as $property)
    <div class="feature-block">
        <div class="feature-block-one">
            <div class="inner-box">
                <div class="image-box">
                        <a href="{{ route('home.property-detail', ['id' => $property->id]) }}">
                            @php
                                $mediaurl = basename($property->MediaURL);

                            @endphp
                        <figure class="image"><img src="{{asset("public/images/".$mediaurl)}}"
                        alt="">  </figure>

                    </a>

                    <!--<div class="batch"></div>-->

                    <span class="category">Active</span>

                </div>

                <div class="lower-content">

                    <!--<div class="author-info clearfix">-->

                    <!--    <div class="author pull-left">-->

                    <!--        <figure class="author-thumb"><img src="public/assets/images/agents/author-1.jpg"-->
                    <!--                alt=""></figure>-->

                    <!--        <h6>Michael Bean</h6>-->

                    <!--    </div>-->

                    <!--    <div class="buy-btn pull-right"><a href="#">For Buy</a></div>-->

                    <!--</div>-->


                    <div class="price-info custom_price_info">
                        <!--<h6>Start From</h6>-->
                        <h4 class="mt-2">$ {{number_format($property->PropetyOriginalPrice)}}</h4>
                        <!--<div class="price-box clearfix">-->
                        <!--    <ul class="other-option clearfix">-->
                        <!--        <li><a href="#"><i class="icon-12"></i></a></li>-->
                        <!--        <li><a href="#"><i class="icon-13"></i></a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <div>
                        <ul class="more-details mt-2 clearfix">

                        <li><i class="icon-14"></i> {{$property->Bedrooms}} Beds</li>

                        <li><i class="icon-15"></i> {{$property->BathroomsFull}} Baths</li>

                        <li><i class="icon-16"></i> {{$property->PropertyArea}} {{$property->PropertyAreaUnits}}</li>

                    </ul>
                    </div>

                    <div class="title-text">

                        <h5><a href="#">{{$property->PropertyAddress}}</a></h5>
                    </div>
                    <div class="listing_key_section">
                        <ul>
                            <li>
                                <p>#{{$property->ListingKeyNumeric}}</p>
                            </li>
                            <li>
                                <p>House</p>
                            </li>
                            <li>
                                <img src="public/assets/images/NWMLS2.jpeg" class="img-fluid">
                            </li>
                        </ul>
                    </div>
                    <h5 class="mt-2">Listing Firm: {{$property->ListOfficeName}}.</h5>
                    {{-- <!--<p> {{@substr($property->PropertyDescription, 0, 100) . '...'}}</p>--> --}}



                    <!--<div class="btn-box"><a href="{{ route('home.property-detail', ['id' => $property->id]) }}" class="theme-btn btn-two">See Details</a></div>-->

                </div>

            </div>

        </div>

        <!--<div class="feature-block-one">-->

        <!--    <div class="inner-box">-->

        <!--        <div class="image-box">-->
        <!--            <a href="{{ route('home.property-detail', ['id' => $property->id]) }}">-->
        <!--                @php-->
        <!--                        $mediaurl = basename($property->MediaURL);-->
        <!--                @endphp-->
        <!--                <figure class="image"><img style="height: 250px; width:400px;" src="{{asset("public/images/".$mediaurl)}}"-->
        <!--                alt="">  </figure></a>-->
        <!--            <div class="batch"><i class="icon-11"></i></div>-->

        <!--            <span class="category">Featured</span>-->

        <!--        </div>-->
        <!--        <div class="lower-content">-->

        <!--            <div class="author-info clearfix">-->

        <!--                <div class="author pull-left">-->

        <!--                    <figure class="author-thumb"><img src="public/assets/images/agents/author-1.jpg"-->
        <!--                            alt=""></figure>-->

        <!--                    <h6>Michael Bean</h6>-->

        <!--                </div>-->

        <!--                <div class="buy-btn pull-right"><a href="#">For Buy</a></div>-->

        <!--            </div>-->

        <!--            <div class="title-text">-->

        <!--                <h4><a href="#">{{$property->PropertyAddress}}</a></h4>-->
        <!--            </div>-->

        <!--            <div class="price-box clearfix">-->

        <!--                <div class="price-info pull-left">-->

        <!--                    <h6>Start From</h6>-->

        <!--                    <h4>$ {{number_format($property->PropetyOriginalPrice)}}</h4>-->

        <!--                </div>-->

        <!--                <ul class="other-option pull-right clearfix">-->

        <!--                    <li><a href="#"><i class="icon-12"></i></a></li>-->

        <!--                    <li><a href="#"><i class="icon-13"></i></a></li>-->

        <!--                </ul>-->

        <!--            </div>-->

        {{-- <!--            <p> {{@substr($property->PropertyDescription, 0, 100) . '...'}}</p>--> --}}

        <!--            <ul class="more-details clearfix">-->

        <!--                <li><i class="icon-14"></i> {{$property->Bedrooms}} Beds</li>-->

        <!--                <li><i class="icon-15"></i> {{$property->BathroomsFull}} Baths</li>-->

        <!--                <li><i class="icon-16"></i> {{$property->PropertyArea}} {{$property->PropertyAreaUnits}}</li>-->

        <!--            </ul>-->

        <!--            <div class="btn-box"><a href="#" class="theme-btn btn-two">See Details</a></div>-->

        <!--        </div>-->

        <!--    </div>-->

        <!--</div>-->

    </div>
    @endforeach


</div>
