<?php 
    // dd(Auth::id());
    // dd($property[0]['id']);
?>
<div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
    @foreach ($properties['properties'] as $property)
        <div class="feature-block">
            <div class="feature-block-one">
                <div class="inner-box bestDeal_innerbox">
                    <div class="image-box">
                        <a href="{{ route('home.property-detail', ['id' => $property['id']]) }}">
                            <figure class="image">
                                <img class="lazy"
                                     alt=""
                                     data-src="{{ isset($property['preffered_media'][0]['id']) ? $property['preffered_media'][0]['s3buckettempurl'] : ''}}">
                            </figure>
                        </a>
                        <!--<div class="batch"></div>-->

                        {{-- <span class="category">Active</span> --}}
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

                                        @if (isset($property['favorite_property'][0]['is_fav']) and $property['favorite_property'][0]['is_fav'] == 1 && $property['favorite_property'][0]['user_id'] ==  Auth::user()->id)
                                            <ul class="other-option feat_fav pull-right clearfix">
                                                <li>
                                                    <button id="favBtnListed{{$property['id']}}"
                                                            data-id="{{$property['id']}}"
                                                            data-text="{{$property['id']}}"
                                                            class="formFavourite skzfavx">
                                                        <i class="fas fa-heart"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        @else
                                            <ul class="other-option feat_fav pull-right clearfix">
                                                <li>
                                                    <button id="favBtnListed{{$property['id']}}"
                                                            data-id="{{$property['id']}}"
                                                            data-text="{{$property['id']}}" class="formFavourite">
                                                        <i class="far fa-heart"></i>
                                                    </button>
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
                            <!--<div class="price-box clearfix">-->
                            <!--    <ul class="other-option clearfix">-->
                            <!--        <li><a href="#"><i class="icon-12"></i></a></li>-->
                            <!--        <li><a href="#"><i class="icon-13"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                        <div>
                            <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                <li> {{$property['Bedrooms']}} Beds</li>
                                <li> {{$property['BathroomsFull']}} Baths</li>
                                <li> {{$property['PropertyArea']}} sq. ft.</li>
                                {{-- <i class="icon-14"></i>
                                <i class="icon-15"></i>
                                <i class="icon-16"></i> --}}
                            </ul>
                        </div>
                        <div class="title-text">
                            <h5>
                                <a href="{{ route('home.property-detail', ['id' => $property['id']]) }}">{{@substr($property['PropertyAddress'], 0, 80) . '...'}}</a>
                            </h5>
                        </div>
                        <div class="listing_key_section">
                            <ul>
                                <li>
                                    <span class="text-danger">Property Category:</span>
                                </li>
                                <li>
                                    @if($property['PropetySellPrice'] > 1000000)
                                        <p> ARIS360 Premier </p>
                                    @else
                                        <p> {{isset($property['structure_type'][0]['StructureTypeName']) ?
                                        $property['structure_type'][0]['StructureTypeName'] : " N/A "
                                                        }} </p>
                                    @endif
                                </li>
                            </ul>
                            <small>Listing provided by NWMLS</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
