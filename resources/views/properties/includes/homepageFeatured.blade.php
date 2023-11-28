<div class="three-item-carousel owl_loop owl-carousel owl-theme owl-dots-none nav-style-one">
    @foreach ($properties['featured'] as $property)
        <div class="feature-block">
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('home.property-detail', ['id' => $property['id']]) }}">
                            <figure class="image"><img
                                    src="{{ isset($property['preffered_media'][0]['s3buckettempurl']) ? $property['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                    alt=""> </figure>
                        </a>
                        <!--<div class="batch"></div>-->

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
                            <h4 class="mt-2">$ {{ number_format($property['PropetySellPrice']) }}</h4>

                            <div class="fav_and_share">
                                <div class="share_onlyIcon">
                                    <ul class="other-option feat_fav pull-right clearfix">
                                        @if (auth()->check())
                                            <li>
                                                <button id="shrBtnListed{{ $property['id'] }}"
                                                    data-id="{{ $property['id'] }}" data-text="{{ $property['id'] }}"
                                                    data-user="{{ Auth::id() }}" href="javascript:;"
                                                    data-toggle="modal" data-target="#shareModal" class="formShare">
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
                                        @if (isset($property['favorite_property'][0]['is_fav']) and
                                                $property['favorite_property'][0]['is_fav'] == 1 &&
                                                    $property['favorite_property'][0]['user_id'] == Auth::user()->id)
                                            <ul class="other-option feat_fav pull-right clearfix">
                                                <li>
                                                    <button id="favBtnListed{{ $property['id'] }}"
                                                        data-id="{{ $property['id'] }}"
                                                        data-text="{{ $property['id'] }}"
                                                        class="formFavourite skzfavx">
                                                        <i class="fas fa-heart"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        @else
                                            <ul class="other-option feat_fav pull-right clearfix">
                                                <li>
                                                    <button id="favBtnListed{{ $property['id'] }}"
                                                        data-id="{{ $property['id'] }}"
                                                        data-text="{{ $property['id'] }}" class="formFavourite">
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

                        </div>
                        <div>
                            <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                <li> {{ $property['Bedrooms'] }} Beds</li>
                                <li> {{ $property['BathroomsFull'] }} Baths</li>
                                <li> {{ $property['PropertyArea'] }} sq. ft.</li>
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
    @endforeach
</div>
