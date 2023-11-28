

@if (isset($properties))
    <div class="row my_searchProperty" id="searchResultProperty">
        @forelse ($properties['community'] as $property)
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 custom_mediumCol">
            <div class="feature-block">
            <div class="feature-block-one feature_block_two">
                <a target="_blank" id="active-box" href="{{ route('home.property-detail', ['id' => $property['id']]) }}">
                        <div class="inner-box">
                            <div class="image-box">
                                    @if (isset($property['prefferedMedia']) && count($property['prefferedMedia']) > 0)
                                    <figure class="image"><img src="{{getS3BucketTempUrl($property['prefferedMedia'][0]['id'])}}"
                                    alt=""></figure>
                                    @endif

                                <!--<div class="batch"></div>-->
                                @if($property['PropetySellPrice'] > 1000000)
                                {{-- <span class="category">Active</span> --}}
                                <span class="category"> ARIS360 Premier</span>
                                @endif
                                @if(isset($property['PublishStatus']) && !empty($property['PublishStatus']))
                                {{-- <span class="category">Active</span> --}}
                                <span class="category2">{{$property['PublishStatus']}}</span>
                                @endif

                            </div>

                            <div class="lower-content">
                                <div class="price-info custom_price_info">
                                    <!--<h6>Start From</h6>-->
                                    <h4 class="mt-2">$ {{number_format($property['PropetySellPrice'])}}</h4>


                                    <div class="fav_and_share">
                                        <div class="share_onlyIcon">
                                            <ul class="other-option feat_fav pull-right clearfix">
                                                @if (auth()->check())
                                                <li>
                                                    <button id="shrBtnListed{{$property['id']}}"
                                                        data-id="{{$property['id']}}"
                                                        data-text="{{$property['id']}}"
                                                        data-user="{{Auth::id()}}"
                                                        href="javascript:;"
                                                        data-toggle="modal"
                                                        data-target="#shareModal"
                                                        class="formShare">
                                                        <i class="far fa-share"></i>
                                                    </button>
                                                </li>
                                            @else
                                            <li>
                                                <button class="shrNotLoggedIn"><i class="far fa-share"></i></button>
                                            </li>
                                            @endif
                                            </ul>
                                        </div>
                                        <div class="fav_onlyIcon">
                                                @if (auth()->check())

                                                    @if (isset($property['favoriteProperty'][0]['is_fav']) and $property['favoriteProperty'][0]['is_fav'] == 1 && $property['favoriteProperty'][0]['user_id'] ==  Auth::user()->id)
                                                    <ul class="other-option feat_fav pull-right clearfix">
                                                        <li>
                                                            <button id="favBtnListed{{$property['id']}}" data-id="{{$property['id']}}" data-text="{{$property['id']}}" class="formFavourite skzfavx"><i class="fas fa-heart"></i></button>
                                                        </li>
                                                    </ul>
                                                    @else
                                                    <ul class="other-option feat_fav pull-right clearfix">
                                                        <li>
                                                            <button id="favBtnListed{{$property['id']}}" data-id="{{$property['id']}}" data-text="{{$property['id']}}" class="formFavourite"><i class="far fa-heart"></i></button>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                @else
                                                <ul class="other-option feat_fav pull-right clearfix">
                                                    <li>
                                                        <button class="favNotLoggedIn"><i class="far fa-heart"></i></button>
                                                    </li>
                                                </ul>
                                                @endif
                                        </div>

                                    </div>


                                </div>
                                <div>
                                    <ul class="more-details custom_price_infoDetails bedDetail  mt-2 clearfix">

                                    <li> {{$property['Bedrooms']}} Beds</li>

                                    <li> {{$property['BathroomsFull']}} Baths</li>

                                    <li> {{$property['PropertyArea']}} sq. ft</li>
                                    {{-- <i class="icon-14"></i>
                                    <i class="icon-15"></i>
                                    <i class="icon-16"></i> --}}
                                </ul>
                                </div>

                                <div class="title-text">

                                    <h5><a href="{{ route('home.property-detail', ['id' => $property['id']]) }}">{{$property['PropertyAddress']}}</a></h5>
                                </div>
                                <div class="listing_key_section">
                                    <ul>
                                        <li>
                                           <span class="text-danger">Property Category:</span>
                                        </li>
                                        <li>
                                            @if($property['PropetySellPrice'] > 1000000)
                                            <p> Premier Properties </p>
                                        @else
                                            <p> {{isset($property['StructureType'][0]['StructureTypeName']) ?
                                                $property['StructureType'][0]['StructureTypeName'] : " N/A "
                                                                }} </p>
                                        @endif
                                        </li>

                                    </ul>
                                    <small>Listing provided by NWMLS</small>
                                </div>




                            </div>

                        </div>
                    </a>
                    </div>

                    </div>
                </div>
                @empty
                <div class="mt-2 col-12 text-center">
                    <h4>No properties found  in this category</h4>
                </div>
                @endforelse
            </div>


@endif

<script>
    document.getElementById("active-box").addEventListener("click", function(element){
        element.preventDefault();
        $(".inner-box").addClass("active-property");

    });
</script>
