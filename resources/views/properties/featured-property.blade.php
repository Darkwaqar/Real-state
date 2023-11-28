@extends('properties.layouts.main')
@section('content')

    <script src="{{asset('public/assets/js/jquery.js')}}"></script>

    <style>
        .gm-style-iw-d {
            overflow: auto !important;
        }

        .gm-ui-hover-effect {
            display: none !important;
        }

        .gm-style .gm-style-iw-c {
            padding: 0px !important;
        }

        .row .search-column{
            padding-left:5px!important;
            padding-right:5px!important
        }

        .feature-block-one .inner-box .lower-content .price-box .other-option li {
            position: relative;
            display: inline-block;
            float: right;
            margin-right: 0px;
        }

        @media (max-width:1730px) and (min-width:991px) {

            .feature-block-one .inner-box .lower-content .more-details li {
                    width: 50%!important;
                    margin-bottom: 5px!important;
            }

        }
        
        @media (max-width:1380px) and (min-width:991px) {

            .feature-block-one .inner-box .lower-content .price-box .other-option li a {
                width: 30px;
                height: 30px;
                line-height: 30px;
                font-size: 16px;
            }

        }


        @media (min-width:991px) {

            #googleMap{
                width: 100%;
                height: calc(100vh - 272px);
                border-top-right-radius: 10px;
            }

            .fixed_search_section{
                width: 100%;
                position: fixed ;
                z-index: 10;
            }

        }

        @media (max-width:990px) {

            #googleMap{
                display: none
            }

        }
        
        @media (max-width:575px) {

            .advanced-search{
                width: 99%!important;
                max-width:99%!important;
            }

        }
        
        .price-input {
  width: 100%;
  display: flex;
  margin: 30px 0 35px;
}
.price-input .field {
  display: flex;
  width: 100%;
  height: 45px;
  align-items: center;
}
.field input {
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 19px;
  margin-left: 12px;
  border-radius: 5px;
  text-align: center;
  border: 1px solid #999;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.price-input .separator {
  width: 130px;
  display: flex;
  font-size: 19px;
  align-items: center;
  justify-content: center;
}
.slider {
  height: 5px;
  position: relative;
  background: #ddd;
  border-radius: 5px;
  cursor: pointer;
}
.slider .progress {
  height: 100%;
  left: 0%;
  right: 50%;
  position: absolute;
  border-radius: 5px;
  background: #DE1E25;
}
.range-input {
  position: relative;
}
.range-input input {
  position: absolute;
  width: 100%;
  height: 5px;
  top: -5px;
  background: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="range"]::-webkit-slider-thumb {
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background: #DE1E25;
  pointer-events: auto;
  -webkit-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}
input[type="range"]::-moz-range-thumb {
  height: 17px;
  width: 17px;
  border: none;
  border-radius: 50%;
  background: #DE1E25;
  pointer-events: auto;
  -moz-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}


    </style>

    <script>

    </script>
  

    <section class="mt-2">
        <div class="row">
          <div class="col-xl-7 col-lg-8 col-md-12 col-12 fixed_search_section">

            <div class="">

                <div class="search-field-section style-two mb-3">
                <div class="inner-container">
                    <div class="search-field">
                    <div class="inner-box">
                        <div class="top-search">
                        <form action="#" method="post" class="px-3">
                            @csrf
                            <div
                            class="row d-flex justify-content-end align-items-center py-3"
                            >
                            <div class="col-12 search-column mb-2">
                                <div class="form-group">
                                <!-- <label>Search Property</label> -->
                                <div class="field-input">
                                    <i class="fas fa-search"></i>
                                    <input
                                    type="search"
                                    name="search"
                                    id="search"
                                    placeholder="Address, Neighborhood, City, or Zip"
                                    required=""
                                    
                                    />
                                </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                <button
                                    class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                >
                                    <span>Price</span>
                                    <i class="fas fa-angle-down"> </i>
                                </button>

                                <div
                                    class="advanced-search"
                                    style="top: 55px !important"
                                >
                                    <div class="range-box">
                                    
                                        <div class="price-range">
                                            
                                            <h6>Select Price Range</h6>

                                            <div class="price-input">
        <div class="field">
          <span>Min</span>
          <input type="number" class="input-min minPrice" name="minPrice" value="0">
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max maxPrice" name="maxPrice" value="4900000">
        </div>
      </div>
      <div class="slider">
        <div class="progress"></div>
      </div>
      <div class="range-input mb-0">
        <input type="range" class="range-min minPrice" min="0" name="minPrice" max="10000000" value="0" step="100"style="margin-bottom: -5px;">
        <input type="range" class="range-max maxPrice" min="0" name="maxPrice" max="10000000" value="4900000" step="100" >
      </div>
                                        </div>

                                    </div>

                                    <button type="button" id="priceButton" class="btn btn-block done_btn mt-4">Done</button>

                                </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                <button
                                    class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                >
                                    <span>Beds & Baths</span>
                                    <i class="fas fa-angle-down"> </i>
                                </button>

                                <div
                                    class="advanced-search"
                                    style="top: 55px !important"
                                >
                                
                                    <div class="form-group">
                                        
                                        <label>Number of Bedrooms</label>

                                        <div class="btn-group search_btn_group" role="group" >
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="0" id="no_of_bedroom" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom">Any</label>
                                        
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="1" id="no_of_bedroom1" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom1">1+</label>
                                        
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="2" id="no_of_bedroom2" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom2">2+</label>
                                            
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="3" id="no_of_bedroom3" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom3">3+</label>
                                            
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="4" id="no_of_bedroom4" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom4">4+</label>
                                            
                                            <input type="radio" class="btn-check bed" name="no_of_bedroom" value="5" id="no_of_bedroom5" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bedroom5">5+</label>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        
                                        <label>Number of Bathrooms</label>

                                        <div class="btn-group search_btn_group" role="group" >
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="0" id="no_of_bathroom" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom">Any</label>
                                        
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="1" id="no_of_bathroom1" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom1">1+</label>
                                        
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="2" id="no_of_bathroom2" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom2">2+</label>
                                            
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="3" id="no_of_bathroom3" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom3">3+</label>
                                            
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="4" id="no_of_bathroom4" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom4">4+</label>
                                            
                                            <input type="radio" class="btn-check bath" name="no_of_bathroom" value="5" id="no_of_bathroom5" autocomplete="off">
                                            <label class="theme-btn btn-two" for="no_of_bathroom5">5+</label>

                                        </div>
                                    </div>


                                    <button type="button" id="bathButton" class="btn btn-block done_btn mt-4">Done</button>

                                </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                <div class="switch_btn_one">
                                <button
                                    class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                >
                                    <span>Home Type</span>
                                    <i class="fas fa-angle-down"> </i>
                                </button>

                                <div
                                    class="advanced-search"
                                    style="top: 55px !important"
                                >
                                
                                    <div class="form-group">
                                        
                                        <label>Home Type</label>

                                        <div class="search_btn_group" role="group" >
                                            <?php $i = 1; ?>
                                            @foreach($properties['hometype'] as $home)
                                                                                          
                                                <input type="checkbox" class="btn-check home-type" name="home_type" value="<?php echo $i; ?>" id="home_type<?php echo $i; ?>" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type<?php echo $i; ?>">{{$home->StructureTypeName}}</label>
                                                <?php $i+=1; ?>

                                            @endforeach 

                                            {{-- <input type="radio" class="btn-check home-type" name="home_type" value="1" id="home_type" autocomplete="off">
                                            <label class="theme-btn btn-two" for="home_type">House</label>
                                        
                                            <input type="radio" class="btn-check home-type" name="home_type" value="2" id="home_type1" autocomplete="off">
                                            <label class="theme-btn btn-two" for="home_type1">Manufactured House</label>
                                        
                                            <input type="radio" class="btn-check home-type" name="home_type" value="3" id="home_type2" autocomplete="off">
                                            <label class="theme-btn btn-two" for="home_type2">Multi Family</label>  --}}
                                            
                                           
                                        
                                            

                                        </div>
                                    </div>


                                    <button type="button" id="homeTypeButton" class="btn btn-block done_btn mt-4">Done</button>

                                </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 search-column mb-2">
                                <div class="switch_btn_one">
                                <button
                                    class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                >
                                    More<i
                                    class="fas fa-angle-down ml-2"
                                    ></i>
                                </button>
                                <div
                                    class="advanced-search"
                                    style="top: 65px !important; left:auto!important; padding-left:25px; padding-right:10px"
                                >
                                    <!-- <div class="close-btn">
                                                                    <a href="#" class="close-side-widget"><i
                                                                            class="far fa-times"></i></a>
                                                                </div> -->
                                    <div class="row clearfix">
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                    >
                                        <div class="form-group">
                                        <label>Distance from Location</label>
                                        <div class="select-box">
                                            <select class="wide">
                                            <option
                                                data-display="Distance from Location"
                                            >
                                                Distance from Location
                                            </option>

                                            <option value="2">
                                                Within 1 Miles
                                            </option>
                                            <option value="3">
                                                Within 2 Miles
                                            </option>
                                            <option value="4">
                                                Within 3 Miles
                                            </option>
                                            <option value="1">
                                                Within 4 Miles
                                            </option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                    >
                                        <div class="form-group">
                                        <label>Bedrooms</label>
                                        <div class="select-box">
                                            <select class="wide rooms">
                                                <option data-display="Max Rooms" value="5">
                                                    Max Rooms
                                                </option>
                                                <option value="1">One Rooms</option>
                                                <option value="2">Two Rooms</option>
                                                <option value="3">Three Rooms</option>
                                                <option value="4">Four Rooms</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                    >
                                        <div class="form-group">
                                        <label>Sort by</label>
                                        <div class="select-box">
                                            <select class="wide">
                                            <option data-display="Most Popular">
                                                Most Popular
                                            </option>
                                            <option value="1">Top Rating</option>
                                            <option value="2">New Rooms</option>
                                            <option value="3">
                                                Classic Rooms
                                            </option>
                                            <option value="4">Luxry Rooms</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                    >
                                        <div class="form-group">
                                        <label>Floor</label>
                                        <div class="select-box">
                                            <select class="wide floors">
                                            <option data-display="Select Floor">
                                                Select Floor
                                            </option>
                                            <option value="1">One Floor</option>
                                            <option value="2">Two Floor</option>
                                            <option value="3">Three Floor</option>
                                            <option value="4">Four Floor</option>
                                            <option value="5">Five Floor</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                    >
                                        <div class="form-group">
                                        <label>Bath</label>
                                        <div class="select-box">
                                            <select class="wide baths">
                                            <option data-display="Max Bath" value="5">
                                                Max Bath
                                            </option>
                                            <option value="1">1 Bath</option>
                                            <option value="2">2 Baths</option>
                                            <option value="3">3 Baths</option>
                                            <option value="4">4 Baths</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                    >
                                        <div class="form-group">
                                        <label>Parking Spots</label>
                                        <div class="select-box">
                                            <select class="wide parkings">
                                            <option data-display="No Spot">
                                                No Spot
                                            </option>
                                            <option value="1">1 Spot</option>
                                            <option value="2">2 Spots</option>
                                            <option value="3">3 Spots</option>
                                            <option value="4">4 Spots</option>
                                            <option value="5">5 Spots</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="range-box">
                                    <div class="row clearfix">
                                        <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                        >
                                        <div class="price-range">
                                            <h6>Select Price Range</h6>
                                            <div class="range-input">
                                            <div class="input">
                                                <input
                                                type="text"
                                                class="property-amount price-prop"
                                                name="field-name"
                                                readonly="" style="height:15px!important"
                                                />
                                            </div>
                                            </div>
                                            <div class="price-range-slider"></div>
                                        </div>
                                        </div>
                                        <div
                                        class="col-lg-6 col-md-6 col-sm-12 column"
                                        >
                                        <div class="area-range">
                                            <h6>Select Area</h6>
                                            <div class="range-input">
                                            <div class="input">
                                                <input
                                                type="text"
                                                class="area-range area-prop"
                                                name="field-name"
                                                readonly=""
                                                style="height:15px!important"/>
                                            </div>
                                            </div>
                                            <div class="area-range-slider"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                @include('properties.featuredMap')

            </div>

          </div>

          <div class="col-xl-5 col-lg-4 col-md-12 col-12 offset-xl-7 offset-lg-8">
            
            <div class="item-shorting d-flex justify-content-between">
                
                <div class="">
                </div>
                
                <div class="">
                    
                    <div class="short-box clearfix">
                        <div class="select-box">
                            <select class="wide sort-prop" style="display: none;">
                                <option data-display="Sort by">Sort by</option>
                                <option value="1">Price (High to Low)</option>
                                <option value="2">Price (Low to High)</option>
                                <option value="3">City</option>
                                <option value="4">Listing Date</option>
                                <option value="5">Listing Number</option>
                                <option value="6">Open Home Date Asc</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            @if (isset($properties))
<div class="row" id="searchResultProperty">

    @foreach ($properties['FeturedProperties'] as $property)
    <div class="col-md-6 col-12">
        <div class="feature-block">

            <div class="feature-block-one">

                <div class="inner-box">

                    <div class="image-box">
                        <a href="{{ route('home.property-detail', ['id' => $property->id]) }}">
                        
                            <figure class="image"><img style="height: 250px; width:400px;" src="{{asset($property->MediaURL)}}"
                            alt="">  </figure></a>
                    </div>
                    <div class="lower-content pt-4 pb-0">
                        <div
                            class="price-box mb-3 d-flex justify-content-between align-items-center">
                            <div class="price-info pull-left">
                                <h4 id="propertyPrice">${{ number_format($property->PropetySellPrice)}}</h4>
                            </div>
                            <ul class="other-option pull-right clearfix">
                                <li><a href="#"><i class="icon-12"></i></a></li>
                                <li><a href="#"><i class="icon-13"></i></a></li>
                            </ul>
                        </div>
                        <ul class="more-details clearfix mb-2">
                            <li id ="propertyBed"><i class="icon-14"></i>{{$property->Bedrooms}} Beds</li>
                            <li id ="propertyBath"><i class="icon-15"></i>{{$property->BathroomsFull}} Baths</li>
                            <li id ="propertyArea"><i class="icon-16"></i>{{$property->PropertyArea}} {{$property->PropertyAreaUnits}}</li>
                        </ul>
                        <p id="propertyAddress"> {{$property->PropertyAddress}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach    
</div>
@endif




          </div>

        </div>
    </section>


        <!-- main-js -->

<script type="text/javascript">
                    const rangeInput = document.querySelectorAll(".range-input input"),
                    priceInput = document.querySelectorAll(".price-input input"),
                    range = document.querySelector(".slider .progress");
                    let priceGap = 1000000;

    priceInput.forEach((input) => {
    input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});


        $(document).ready(function () {

            var global_data = {};

            
    //---------------- Search Bar Filter Code Ajax ----------------

            $('#search').on('keyup',function(){
                var value = $(this).val();
                global_data.search = value;
                pr pertyAjaxCall();
            });
            
    //---------------- Bed & Bath Filter Code Ajax ----------------

            $("#bathButton").click(function(){
                
                var numBed = $(".bed:checked").val();
                var numBath = $(".bath:checked").val();

                global_data.bed = numBed;
                global_data.bath = numBath;
                propertyAjaxCall();
                
            });

    //---------------- Price Range Filter Code Ajax ----------------

            $("#priceButton").click(function(){
                
                // var [firstVal,secondVal] = $(".property-amount").val().split('-');
                // var minPrice = firstVal.replace('$','');
                // var maxPrice = secondVal.replace('$','');
                
                var minPrice =  $('.minPrice').val();
                var maxPrice =  $('.maxPrice').val();
                global_data.min = minPrice;
                global_data.max = maxPrice;
                propertyAjaxCall();
                
                
            });

    //---------------- Home Type Filter Code Ajax ----------------
            
            $("#homeTypeButton").click(function(){               

                        var hometype = []; // New array
                        $(".home-type:checked").each(function () {
                            hometype.push(this.value);
                        });
                        global_data.home = hometype;
                       
                        propertyAjaxCall();
                     
                        
                        
            });
    
    //---------------- Advanced Search Filter Code Ajax ----------------

            $('.rooms').change(function () {
                var value = $(this).val();
                global_data.bed = value;
                propertyAjaxCall();
            });

            $('.baths').change(function () {
                var value = $(this).val();
                global_data.bath = value;
                propertyAjaxCall();
            });

            $('.floors').change(function () {                
                var value = $(this).val();
                global_data.floor = value;
                propertyAjaxCall();                
            });

            $('.parkings').change(function () {                
                var value = $(this).val();
                global_data.parking = value;
                propertyAjaxCall();
            });

            if($('.area-range-slider').length){

                $( ".area-range-slider" ).slider({

                    range: true,

                    min: 0,

                    max: 7500,

                    values: [ 100, 4000 ],

                    slide: function( event, ui ) {

                        $( "input.area-range" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );

                        global_data.min_area = ui.values[0];
                        global_data.max_area = ui.values[1];
                        propertyAjaxCall();
                        
                    }

                });

                $( "input.area-range" ).val( $( ".area-range-slider" ).slider( "values", 0 ) + " - sq ft" + $( ".area-range-slider" ).slider( "values", 1 ) );	

            }
            

    //------------------------- Sort Filters -----------------------------------
    
            $('.sort-prop').change(function(){                
                var sort = $(this).val();
                var data = {'sort':sort};
                global_data.sort = sort;
                propertyAjaxCall();
            });

    //------------------------ Dynamic Function for Ajax Call ------------------
            
            function propertyAjaxCall(){

                console.table(global_data)

                $.ajax({
                    type : 'get',
                    url : '{{URL::to('/home/search')}}',
                    data: global_data ,                    
                    success:function(data){
                        htmlSearch="";
                        if (data.length > 0)
                    {
                            
                        
                        
                        $.each(data, function (key, value) {

                                var id = value.id;
                                var url = '{{ route("home.property-detail", ":id") }}';
                                url = url.replace(':id',  id);
                                var price = value.PropetySellPrice;
                                var newprice = new Intl.NumberFormat().format(price);

                                let image = value.MediaURL;
                                let result = image.replace('https://s3.amazonaws.com/mlsgrid', "https://mlsgrid.idxhome.com");
                                
                                htmlSearch +=`<div class="col-md-6 col-12">
                                    <div class="feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <a class="image" style="height: 250px; width:500px;" href="${url}">
                                                        <img src="${result}" alt="">
                                                    </a>
                                                </div>
                                                <div class="lower-content pt-4 pb-0">
                                                    <div class="price-box mb-3 d-flex justify-content-between align-items-center">
                                                        <div class="price-info pull-left">
                                                            <h4>$${newprice}</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="#"><i class="icon-12"></i></a></li>
                                                            <li><a href="#"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <ul class="more-details clearfix mb-2">
                                                        <li><i class="icon-14"></i>${value.Bedrooms} Beds</li>
                                                        <li><i class="icon-15"></i>${value.BathroomsFull} Baths</li>
                                                        <li><i class="icon-16"></i>${value.PropertyArea+ ' ' +value.PropertyAreaUnits}</li>
                                                    </ul>
                                                    <p>${value.PropertyAddress}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
						});
                        $('#searchResultProperty').empty('').append(htmlSearch);                   
                    }
                    else
                    {
                        htmlSearch +=`
                        
                        <div style="margin:220px "class="d-flex align-items-center">
                         <h5> No properties found </h5>    
                        </div> 
                        
                        `;
                        $('#searchResultProperty').empty('').append(htmlSearch);
                    } 
                    
                }
                });
            }


            
        });

        </script>
            
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXxZfe3ydEUow5-Qa0S69FEddWOj-ut2k&callback=myMap"></script>

@endsection
