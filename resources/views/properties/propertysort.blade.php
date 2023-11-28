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


    </style>

    
  

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

                                            <div class="range-input">
                                            <div class="input">
                                                <input
                                                type="text"
                                                class="property-amount"
                                                name="field-name"
                                                readonly=""
                                                />
                                            </div>
                                            </div>
                                            <div class="price-range-slider"></div>
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
                                            {{-- @foreach($properties['hometype'] as $home)
                                          
                                                <input type="radio" class="btn-check homeType" name="home_type" value="{{$home->id}}" id="home_type{{$home->id}}" autocomplete="off">
                                                <label class="theme-btn btn-two" for="home_type">{{$home->StructureTypeName}}</label>
                                            @endforeach --}}

                                            <input type="radio" class="btn-check homeType" name="home_type" value="1" id="home_type" autocomplete="off">
                                            <label class="theme-btn btn-two" for="home_type">House</label>
                                        
                                            <input type="radio" class="btn-check homeType" name="home_type" value="2" id="home_type1" autocomplete="off">
                                            <label class="theme-btn btn-two" for="home_type1">Manufactured House</label>
                                        
                                            <input type="radio" class="btn-check homeType" name="home_type" value="3" id="home_type2" autocomplete="off">
                                            <label class="theme-btn btn-two" for="home_type2">Multi Family</label> 
                                            
                                           
                                        
                                            

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
                                    style="top: 65px !important; left:auto!important"
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
                                            <select class="wide">
                                            <option data-display="Max Rooms">
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
                                            <select class="wide">
                                            <option data-display="Select Floor">
                                                Select Floor
                                            </option>
                                            <option value="1">One Floor</option>
                                            <option value="2">Two Floor</option>
                                            <option value="3">Three Floor</option>
                                            <option value="4">Four Floor</option>
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
                                            <select class="wide">
                                            <option data-display="Max Bath">
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
                                            <select class="wide">
                                            <option data-display="No Spot">
                                                No Spot
                                            </option>
                                            <option value="1">1 Spot</option>
                                            <option value="2">2 Spots</option>
                                            <option value="3">3 Spots</option>
                                            <option value="4">4 Spots</option>
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
                                                class="property-amount"
                                                name="field-name"
                                                readonly=""
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
                                                class="area-range"
                                                name="field-name"
                                                readonly=""
                                                />
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

                @include('properties.sortmap')

            </div>

          </div>

          <div class="col-xl-5 col-lg-4 col-md-12 col-12 offset-xl-7 offset-lg-8">
            
            <div class="item-shorting d-flex justify-content-between">
                
                <div class="">
                    
                </div>
                
                <div class="">
                    
                    <div class="short-box clearfix">
                        <div class="select-box">
                            <form id="sortByFilter" name="sortByFilter" action="{{route('home.sortproperty')}}" method="POST">
                            @csrf
                                <select name="property_id" class="wide" style="display: none;" id="PropertySort">
                                <option data-display="Sort by">Sort by</option>
                                <option value="1">Price (High to Low)</option>
                                <option value="2">Price (Low to High)</option>
                                <option value="3">City</option>
                                <option value="4">Listing Date</option>
                                <option value="5">Listing Number</option>
                                <option value="6">Open Home Date Asc</option>
                             </select>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row" id="sort">
   
            </div>

          </div>

        </div>
    </section>

       
   <script>
    $(document).ready(function () {
        $('#PropertySort').on('change', function () {
                this.form.submit();
        });

    });

   </script>

    <script type="text/javascript">

    //--------------- Properties Sorting Script ------------------//
    
    
            // function GetSelectedTextValue(sortProperty) {

            //     // var selectedText = ddlFruits.options[ddlFruits.selectedIndex].innerHTML;
            //      var selectedValue = sortProperty.value;
            //      $.ajax({
            //         type : 'post',
            //         url : '{{URL::to('home/propertysort/')}}',
            //         data:{'propertysort':selectedValue},
            //         success:function(data){
            //             $('#sortResultProperty').html(data);
            //         }
            //     });
            // }

            $(document).ready(function () {
            $('#sortProperty').on('change', function () {
                $value=$(this).val();
                $.ajax({
                    url: "{{url('home/propertysort')}}",
                    type: "get",
                    data:{'property_id':$value},
                    success:function(data){
                        
                        htmlSearch="";
                        $.each(data, function (key, value) {
                            alert(value.PropetySellPrice);
                                htmlSearch +='<div class="col-md-6 col-12">\
                                    <div class="feature-block">\
                                        <div class="feature-block-one">\
                                            <div class="inner-box">\
                                                <div class="image-box">\
                                                    <figure class="image">\
                                                        <img src="../public/assets/images/properties/property1.jpg" alt="">\
                                                    </figure>\
                                                </div>\
                                                <div class="lower-content pt-4 pb-0">\
                                                    <div class="price-box mb-3 d-flex justify-content-between align-items-center">\
                                                        <div class="price-info pull-left">\
                                                            <h4>$'+value.PropetySellPrice+'</h4>\
                                                        </div>\
                                                        <ul class="other-option pull-right clearfix">\
                                                            <li><a href="#"><i class="icon-12"></i></a></li>\
                                                            <li><a href="#"><i class="icon-13"></i></a></li>\
                                                        </ul>\
                                                    </div>\
                                                    <ul class="more-details clearfix mb-2">\
                                                        <li><i class="icon-14"></i>'+value.Bedrooms+' Beds</li>\
                                                        <li><i class="icon-15"></i>'+value.BathroomsFull+' Baths</li>\
                                                        <li><i class="icon-16"></i>'+value.PropertyArea+' '+value.PropertyAreaUnits+'</li>\
                                                    </ul>\
                                                    <p>'+value.PropertyAddress+'</p>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
						});
                        $('#searchResultProperty').empty('').append(htmlSearch);
                    
                    }
                });
            });
           

        });
        </script>   

 <!-- main-js -->

 <script type="text/javascript">
            
    //---------------- Search Bar Filter Code Ajax ----------------

            $('#search').on('keyup',function(){
                $value=$(this).val();
                $.ajax({
                    type : 'get',
                    url : '{{URL::to('home/search')}}',
                    data:{'search':$value},
                    success:function(data){
                        htmlSearch="";
                        $.each(data, function (key, value) {
                                htmlSearch +='<div class="col-md-6 col-12">\
                                    <div class="feature-block">\
                                        <div class="feature-block-one">\
                                            <div class="inner-box">\
                                                <div class="image-box">\
                                                    <figure class="image">\
                                                        <img src="../public/assets/images/properties/property1.jpg" alt="">\
                                                    </figure>\
                                                </div>\
                                                <div class="lower-content pt-4 pb-0">\
                                                    <div class="price-box mb-3 d-flex justify-content-between align-items-center">\
                                                        <div class="price-info pull-left">\
                                                            <h4>$'+value.PropetySellPrice+'</h4>\
                                                        </div>\
                                                        <ul class="other-option pull-right clearfix">\
                                                            <li><a href="#"><i class="icon-12"></i></a></li>\
                                                            <li><a href="#"><i class="icon-13"></i></a></li>\
                                                        </ul>\
                                                    </div>\
                                                    <ul class="more-details clearfix mb-2">\
                                                        <li><i class="icon-14"></i>'+value.Bedrooms+' Beds</li>\
                                                        <li><i class="icon-15"></i>'+value.BathroomsFull+' Baths</li>\
                                                        <li><i class="icon-16"></i>'+value.PropertyArea+' '+value.PropertyAreaUnits+'</li>\
                                                    </ul>\
                                                    <p>'+value.PropertyAddress+'</p>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
						});
                        $('#searchResultProperty').empty('').append(htmlSearch);
                    
                    }
                });
            });
            
    //---------------- Bed & Bath Filter Code Ajax ----------------

            $("#bathButton").click(function(){
                
                $numBed = $(".bed:checked").val();
                $numBath = $(".bath:checked").val();
                $.ajax({
                    type : 'get',
                    url : '{{URL::to('home/search')}}',
                    data:{'bed':$numBed,'bath':$numBath},
                    success:function(data){
                        htmlSearch="";
                        $.each(data, function (key, value) {
                                htmlSearch +='<div class="col-md-6 col-12">\
                                    <div class="feature-block">\
                                        <div class="feature-block-one">\
                                            <div class="inner-box">\
                                                <div class="image-box">\
                                                    <figure class="image">\
                                                        <img src="../public/assets/images/properties/property1.jpg" alt="">\
                                                    </figure>\
                                                </div>\
                                                <div class="lower-content pt-4 pb-0">\
                                                    <div class="price-box mb-3 d-flex justify-content-between align-items-center">\
                                                        <div class="price-info pull-left">\
                                                            <h4>$'+value.PropetySellPrice+'</h4>\
                                                        </div>\
                                                        <ul class="other-option pull-right clearfix">\
                                                            <li><a href="#"><i class="icon-12"></i></a></li>\
                                                            <li><a href="#"><i class="icon-13"></i></a></li>\
                                                        </ul>\
                                                    </div>\
                                                    <ul class="more-details clearfix mb-2">\
                                                        <li><i class="icon-14"></i>'+value.Bedrooms+' Beds</li>\
                                                        <li><i class="icon-15"></i>'+value.BathroomsFull+' Baths</li>\
                                                        <li><i class="icon-16"></i>'+value.PropertyArea+' '+value.PropertyAreaUnits+'</li>\
                                                    </ul>\
                                                    <p>'+value.PropertyAddress+'</p>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
						});
                        $('#searchResultProperty').empty('').append(htmlSearch);
                    }
                });
                
            });

    //---------------- Price Range Filter Code Ajax ----------------

            $("#priceButton").click(function(){
                
                var [firstVal,secondVal] = $(".property-amount").val().split('-');
                $minPrice = firstVal.replace('$','');
                $maxPrice = secondVal.replace('$','');
                $.ajax({
                    type : 'get',
                    url : '{{URL::to('home/search')}}',
                    data:{'min':$minPrice,'max':$maxPrice},
                    success:function(data){
                        htmlSearch="";
                        $.each(data, function (key, value) {
                                htmlSearch +='<div class="col-md-6 col-12">\
                                    <div class="feature-block">\
                                        <div class="feature-block-one">\
                                            <div class="inner-box">\
                                                <div class="image-box">\
                                                    <figure class="image">\
                                                        <img src="../public/assets/images/properties/property1.jpg" alt="">\
                                                    </figure>\
                                                </div>\
                                                <div class="lower-content pt-4 pb-0">\
                                                    <div class="price-box mb-3 d-flex justify-content-between align-items-center">\
                                                        <div class="price-info pull-left">\
                                                            <h4>$'+value.PropetySellPrice+'</h4>\
                                                        </div>\
                                                        <ul class="other-option pull-right clearfix">\
                                                            <li><a href="#"><i class="icon-12"></i></a></li>\
                                                            <li><a href="#"><i class="icon-13"></i></a></li>\
                                                        </ul>\
                                                    </div>\
                                                        <ul class="more-details clearfix mb-2">\
                                                            <li><i class="icon-14"></i>'+value.Bedrooms+' Beds</li>\
                                                            <li><i class="icon-15"></i>'+value.BathroomsFull+' Baths</li>\
                                                            <li><i class="icon-16"></i>'+value.PropertyArea+' '+value.PropertyAreaUnits+'</li>\
                                                        </ul>\
                                                        <p>'+value.PropertyAddress+'</p>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
						});
                        $('#searchResultProperty').empty('').append(htmlSearch);
                    }
                });
                
            });

    //---------------- Home Type Filter Code Ajax ----------------
    $("#homeTypeButton").click(function(){
                
                $homeType = $(".homeType:checked").val();

                $.ajax({
                    type : 'get',
                    url : '{{URL::to('home/search')}}',
                    data:{'home':$homeType},
                    success:function(data){
                        htmlSearch="";
                        console.log(data);
                        $.each(data, function (key, value) {
                                htmlSearch +='<div class="col-md-6 col-12">\
                                    <div class="feature-block">\
                                        <div class="feature-block-one">\
                                            <div class="inner-box">\
                                                <div class="image-box">\
                                                    <figure class="image">\
                                                        <img src="../public/assets/images/properties/property1.jpg" alt="">\
                                                    </figure>\
                                                </div>\
                                                <div class="lower-content pt-4 pb-0">\
                                                    <div class="price-box mb-3 d-flex justify-content-between align-items-center">\
                                                        <div class="price-info pull-left">\
                                                            <h4>$'+value.PropetySellPrice+'</h4>\
                                                        </div>\
                                                        <ul class="other-option pull-right clearfix">\
                                                            <li><a href="#"><i class="icon-12"></i></a></li>\
                                                            <li><a href="#"><i class="icon-13"></i></a></li>\
                                                        </ul>\
                                                    </div>\
                                                        <ul class="more-details clearfix mb-2">\
                                                            <li><i class="icon-14"></i>'+value.Bedrooms+' Beds</li>\
                                                            <li><i class="icon-15"></i>'+value.BathroomsFull+' Baths</li>\
                                                            <li><i class="icon-16"></i>'+value.PropertyArea+' '+value.PropertyAreaUnits+'</li>\
                                                        </ul>\
                                                        <p>'+value.PropertyAddress+'</p>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
						});
                        $('#searchResultProperty').empty('').append(htmlSearch);
                    }
                });
                
            });

    
    
    //---------------- Advanced Search Filter Code Ajax ----------------

            


        </script>
            
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXxZfe3ydEUow5-Qa0S69FEddWOj-ut2k&callback=myMap"></script>

@endsection
