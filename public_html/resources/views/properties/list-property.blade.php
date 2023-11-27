@extends('properties.layouts.main')

@section('content')
    <style>
        #b1{
    width: 100%;
    padding: 10px;
    background: #cccccc9c;
    text-align: left;
    color: #de1e25;
}
        #map {
            width: 100%;
            height: 500px;
        }
        #locationField,
        #controls {
            position: relative;
            width: 480px;
        }

        /* #autocomplete {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 99%;
        } */

        .label {
            text-align: right;
            font-weight: bold;
            width: 100px;
            color: #303030;
        }

        #address {
            border: 1px solid #000090;
            background-color: #f0f0ff;
            width: 480px;
            padding-right: 2px;
        }

        #address td {
            font-size: 10pt;
        }

        .field {
            width: 99%;
        }

        .slimField {
            width: 80px;
        }

        .wideField {
            width: 200px;
        }

        #locationField {
            height: 20px;
            margin-bottom: 2px;
        }
    </style>
    <!-- Sell Your Home Content Start's Here -->

    <!-- myprofile-section -->
    <section class="myprofile-section sec-pad">
        <div class="container-fluid">
            <div class="title">
                <h3>List Your Property</h3>
                <h6>Please enter the home details for your property to appear in our exclusive feature property
                    page.</h6>
            </div>
            <div class="tabs-box">
                <ul class="tab-btns tab-buttons clearfix">
                    <!--<li class="list_tab1 tab-btn active-btn" data-tab="#tab-1"><span>1</span>Owner Information</li>-->
                    <li class="list_tab2 tab-btn active-btn" data-tab="#tab-2"><span>1</span>Property Details</li>
                    <li class="list_tab3 tab-btn" data-tab="#tab-3"><span>2</span>Room Details</li>
                    <li class="list_tab4 tab-btn" data-tab="#tab-4"><span>3</span>Building Details</li>
                    <li class="list_tab5 tab-btn" data-tab="#tab-5"><span>4</span>Utility Details</li>
                    <li class="list_tab6 tab-btn" data-tab="#tab-6"><span>5</span>Location</li>
                    <li class="list_tab7 tab-btn" data-tab="#tab-7"><span>6</span>Floor Plan</li>
                </ul>
                <div class="tabs-content container">
                    <!--<div class="tab active-tab" id="tab-1">-->
                    <!--    <div class="general-information">-->
                    <!--        <h4><i class="icon-42"></i>Owner Information:</h4>-->
                    <!--        <div class="inner-box default-form">-->
                    <!--            <div class="row clearfix">-->
                    <!--                <div class="col-lg-6 col-md-6 col-sm-12 column">-->
                    <!--                    <div class="field-input">-->
                    <!--                        <label>Email</label>-->
                    <!--                        <input type="email" name="Email Address"-->
                    <!--                            placeholder="Enter Email Address">-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="col-lg-6 col-md-6 col-sm-12 column">-->
                    <!--                    <div class="field-input">-->
                    <!--                        <label>Name</label>-->
                    <!--                        <input type="text" name="Name" placeholder="Name">-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="col-lg-6 col-md-6 col-sm-12 column">-->
                    <!--                    <div class="field-input">-->
                    <!--                        <label>Phone Number</label>-->
                    <!--                        <input type="number" placeholder="Phone Number">-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="col-lg-6 col-md-6 col-sm-12 column">-->
                    <!--                    <label>Willing To Work With Agents</label>-->
                    <!--                    <ul class="other-option clearfix">-->
                    <!--                        <li>-->
                    <!--                            <div class="radio-box">-->
                    <!--                                <input type="checkbox" id="check4a" checked="">-->
                    <!--                                <label for="check4a">Yes</label>-->
                    <!--                            </div>-->
                    <!--                        </li>-->
                    <!--                        <li>-->
                    <!--                            <div class="radio-box">-->
                    <!--                                <input type="checkbox" id="check5a">-->
                    <!--                                <label for="check5a">No</label>-->
                    <!--                            </div>-->
                    <!--                        </li>-->
                    <!--                    </ul>-->
                    <!--                </div>-->
                    <!--                <div class="col-12 d-flex justify-content-end">-->
                    <!--                    <button class="theme-btn btn-one btn_next1">Next</button>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="tab active-tab" id="tab-2">
                        <div class="property-details">
                            <h4>
                                <!--<i class="icon-19"></i>-->
                                Property Details:
                            </h4>
                            <div class="inner-box default-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Virtual Tour URL</label>
                                            <input type="text" name="Virtual Tour URL" placeholder="www.sample.com">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-2 mb-2"><strong>Home Facts</strong></h5>
                                <div class="row clearfix">
                                    <!--<div class="col-lg-6  col-md-6  col-sm-12 column">-->
                                    <!--    <div class="field-input">-->
                                    <!--        <label>Set Your Price</label>-->
                                    <!--        <input type="text" name="Set Your Price" placeholder="$ 1">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Home Type</label>
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Property Type">Property Type</option>
                                                    <option value="1">House</option>
                                                    <option value="2">Manufactured House</option>
                                                    <option value="3">Multi Family</option>
                                                    <option value="4">Townhouse</option>
                                                    <option value="5">Vacant Land</option>
                                                    <option value="6">Office</option>
                                                    <option value="7">Duplex</option>
                                                    <option value="8">Triplex</option>

                                                    <option value="9">Retail</option>
                                                    <option value="10">Commercial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>HOA Dues</label>
                                            <input type="text" name="" placeholder="$">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Bed</label>
                                            <input type="text" name="Bed" placeholder="Bed">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Full Bath</label>
                                            <input type="text" name="Full Bath" placeholder="Full Bath">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>3/4 Baths</label>
                                            <input type="text" name="3/4 Baths" placeholder="3/4 Baths">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>1/2 Baths</label>
                                            <input type="text" name="3/4 Baths" placeholder="1/2 Baths">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>1/4 Baths</label>
                                            <input type="text" name="3/4 Baths" placeholder="1/4 Baths">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Finished square feet</label>
                                            <input type="text" name="Finished square feet" placeholder="1,000">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Lot Size</label>
                                            <input type="text" name="Lot Size" placeholder="Lot Size">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Year Built</label>
                                            <input type="date" name="Year Built" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Structure Remodal Year</label>
                                            <input type="text" name="Structure Remodal Year" placeholder="">
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-6  col-md-6 col-sm-12 column">-->
                                    <!--    <div class="field-input">-->
                                    <!--        <label>Open House</label>-->
                                    <!--        <p>Open houses may not currently allow for social distancing or comply with public health orders. Please consider alternatives, such as Zillow 3D Home tours, or scheduling a real-time video tour.</p>-->
                                    <!--        <input type="date" name="Open House" placeholder="">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Related Website</label>
                                            <input type="text" name="Open House" placeholder="www.sample.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Description</label>
                                            <textarea style="border-radius:10px"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <h6>Photos</h6>
                                        <div class="upload-inner centred">
                                            <i class="fal fa-cloud-upload"></i>
                                            <div class="upload-box">
                                                <input type="file" id="check2">
                                                <label for="check2">Click here to upload your image</label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="theme-btn btn-one">Add Images</a>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end my-3">
                                        <!--<button class="theme-btn btn-two btn_previous1">Previous</button>-->
                                        <button class="theme-btn btn-one btn_next2">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab" id="tab-3">
                        <div class="property-details">
                            <h4>
                                <!--<i class="icon-19"></i>-->
                                Room Details:
                            </h4>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">APPLIANCES</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41">
                                        <label for="check41"><img src="public/assets/images/11-dishwasher.png"
                                                class="img-fluid check_icons" alt=""> <img
                                                src="public/assets/images/11-dishwasher-red.png"
                                                class="img-fluid check_icons_red" alt=""> Dishwasher</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41t">
                                        <label for="check41t"><img src="public/assets/images/dryer.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/dryer-red.png" class="img-fluid check_icons_red"
                                                alt=""> Dryer</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51">
                                        <label for="check51"><img src="public/assets/images/02-refrigerator.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/refrigerator-red.png"
                                                class="img-fluid check_icons_red" alt=""> Freezer</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61">
                                        <label for="check61"><img src="public/assets/images/microwave.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/microwave-red.png"
                                                class="img-fluid check_icons_red" alt=""> Microwave</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71">
                                        <label for="check71"> <img src="public/assets/images/02-refrigerator.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/refrigerator-red.png"
                                                class="img-fluid check_icons_red" alt=""> Refrigerator</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check81">
                                        <label for="check81"> <img src="public/assets/images/11-dishwasher.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/11-dishwasher-red.png"
                                                class="img-fluid check_icons_red" alt=""> Washer</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check91">
                                        <label for="check91"> <img src="public/assets/images/disposal-icon.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/disposal-icon-red.png"
                                                class="img-fluid check_icons_red" alt=""> Garbage Disposal</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check101">
                                        <label for="check101"> <img src="public/assets/images/01-microwave.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/01-microwave-red.png"
                                                class="img-fluid check_icons_red" alt=""> Range / Oven</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check102">
                                        <label for="check102"> <img src="public/assets/images/disposal-icon.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/disposal-icon-red.png"
                                                class="img-fluid check_icons_red" alt=""> Trash Compactor</label>
                                    </div>
                                </li>
                            </ul>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">BASEMENT</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41a">
                                        <label for="check41a"><img src="public/assets/images/basement.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/basement-red.png"
                                                class="img-fluid check_icons_red" alt=""> Finished</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51a">
                                        <label for="check51a"><img src="public/assets/images/basement.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/basement-red.png"
                                                class="img-fluid check_icons_red" alt=""> Unfinished</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61a">
                                        <label for="check61a"><img src="public/assets/images/basement.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/basement-red.png"
                                                class="img-fluid check_icons_red" alt=""> Partially
                                            finished</label>
                                    </div>
                                </li>
                                <!-- <li>
                                            <div class="radio-box">
                                                <input type="checkbox" id="check71a">
                                                <label for="check71a">None</label>
                                            </div>
                                        </li> -->
                            </ul>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">FLOOR COVERING</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41b">
                                        <label for="check41b"> <img src="public/assets/images/carpet.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/carpet-red.png"
                                                class="img-fluid check_icons_red" alt=""> Carpet</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51b">
                                        <label for="check51b"> <img src="public/assets/images/concrete.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/concrete-red.png"
                                                class="img-fluid check_icons_red" alt=""> Concrete</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61b">
                                        <label for="check61b"> <img src="public/assets/images/wood.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/wood-red.png" class="img-fluid check_icons_red"
                                                alt=""> Hardwood</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71b">
                                        <label for="check71b"> <img src="public/assets/images/parquet.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/parquet-red.png"
                                                class="img-fluid check_icons_red" alt=""> Laminate</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41c">
                                        <label for="check41c"> <img src="public/assets/images/vinyl.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/vinyl-red.png" class="img-fluid check_icons_red"
                                                alt=""> Linoleum / Vinyl</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51c">
                                        <label for="check51c"> <img src="public/assets/images/slate.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Slate-red.png" class="img-fluid check_icons_red"
                                                alt=""> Slate</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61c">
                                        <label for="check61c"> <img src="public/assets/images/wood.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/wood-red.png" class="img-fluid check_icons_red"
                                                alt=""> Softwood</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71d">
                                        <label for="check71d"> <img src="public/assets/images/floor.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/floor-red.png" class="img-fluid check_icons_red"
                                                alt=""> Tile</label>
                                    </div>
                                </li>
                                <!-- <li>
                                            <div class="radio-box">
                                                <input type="checkbox" id="check71da">
                                                <label for="check71da">Other</label>
                                            </div>
                                        </li> -->
                            </ul>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">ROOMS</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41ba0">
                                        <label for="check41ba0"> <img src="public/assets/images/croissant.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/croissant-red.png"
                                                class="img-fluid check_icons_red" alt=""> Breakfast nook</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ba0">
                                        <label for="check51ba0"> <img src="public/assets/images/dinning-table.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/dinning-table-red.png"
                                                class="img-fluid check_icons_red" alt=""> Dining room</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61ba0">
                                        <label for="check61ba0"> <img src="public/assets/images/family-room.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/family-room-red.png"
                                                class="img-fluid check_icons_red" alt=""> Family room</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71ba0">
                                        <label for="check71ba0"> <img src="public/assets/images/laundry-room.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/laundry-room-red.png"
                                                class="img-fluid check_icons_red" alt=""> Laundry room</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41ca0">
                                        <label for="check41ca0"> <img src="public/assets/images/library.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/library-red.png"
                                                class="img-fluid check_icons_red" alt=""> Library</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ca0">
                                        <label for="check51ca0"> <img src="public/assets/images/bath.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/bath-red.png" class="img-fluid check_icons_red"
                                                alt=""> Master bath</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61ca0">
                                        <label for="check61ca0"> <img src="public/assets/images/shelves.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/shelves-red.png"
                                                class="img-fluid check_icons_red" alt=""> Mud room</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71da0">
                                        <label for="check71da0"> <img src="public/assets/images/workplace.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/workplace-red.png"
                                                class="img-fluid check_icons_red" alt=""> Office</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71ea0">
                                        <label for="check71ea0"> <img src="public/assets/images/pantry.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/pantry-red.png"
                                                class="img-fluid check_icons_red" alt=""> Pantry</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ea0">
                                        <label for="check51ea0"> <img src="public/assets/images/Recreation-room.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Recreation-room-red.png"
                                                class="img-fluid check_icons_red" alt=""> Recreation room</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61ea0">
                                        <label for="check61ea0"> <img src="public/assets/images/workplace.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/workplace-red.png"
                                                class="img-fluid check_icons_red" alt=""> Workshop</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71ea0a">
                                        <label for="check71ea0a"> <img src="public/assets/images/solarium.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/solarium-red.png"
                                                class="img-fluid check_icons_red" alt=""> Solarium /
                                            Atrium</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41ea0">
                                        <label for="check41ea0"> <img src="public/assets/images/sun-room.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/sun-room-red.png"
                                                class="img-fluid check_icons_red" alt=""> Sun room</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ea01">
                                        <label for="check51ea01"> <img src="public/assets/images/Walkin-closet.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Walkin-closet-red.png"
                                                class="img-fluid check_icons_red" alt=""> Walk-in closet</label>
                                    </div>
                                </li>
                            </ul>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">INDOOR FEATURES</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41ba02">
                                        <label for="check41ba02"> <img src="public/assets/images/attic.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/attic-red.png" class="img-fluid check_icons_red"
                                                alt=""> Attic</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ba02">
                                        <label for="check51ba02"> <img src="public/assets/images/wiring.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/wiring-red.png"
                                                class="img-fluid check_icons_red" alt=""> Cable ready</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61ba02">
                                        <label for="check61ba02"> <img src="public/assets/images/ceiling-fan.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/ceiling-fan-red.png"
                                                class="img-fluid check_icons_red" alt=""> Ceiling fans</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71ba02">
                                        <label for="check71ba02"> <img
                                                src="public/assets/images/Double-pane-Stoem-window.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Double-pane-Stoem-window-red.png"
                                                class="img-fluid check_icons_red" alt=""> Double pane/storm
                                            windows</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check41ca02">
                                        <label for="check41ca02"> <img src="public/assets/images/fireplace.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/fireplace-red.png"
                                                class="img-fluid check_icons_red" alt=""> Fireplace</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ca02">
                                        <label for="check51ca02"> <img src="public/assets/images/Intercom-system.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Intercom-system-red.png"
                                                class="img-fluid check_icons_red" alt=""> Intercom system</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61ca02">
                                        <label for="check61ca02"> <img src="public/assets/images/bath.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/bath-red.png" class="img-fluid check_icons_red"
                                                alt=""> Jetted tub</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71da02">
                                        <label for="check71da02"> <img src="public/assets/images/verified.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/verified-red.png"
                                                class="img-fluid check_icons_red" alt=""> Security system</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71ea02">
                                        <label for="check71ea02"> <img src="public/assets/images/sun-room.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/sun-room-red.png"
                                                class="img-fluid check_icons_red" alt=""> Skylights</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check51ea03">
                                        <label for="check51ea03"> <img src="public/assets/images/ceiling.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/ceiling-red.png"
                                                class="img-fluid check_icons_red" alt=""> Vaulted ceiling</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check61ea02">
                                        <label for="check61ea02"> <img src="public/assets/images/Wet-bar.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Wet-bar-red.png"
                                                class="img-fluid check_icons_red" alt=""> Wet bar</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="check71ea021">
                                        <label for="check71ea021"> <img src="public/assets/images/wire.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/wire-red.png" class="img-fluid check_icons_red"
                                                alt=""> Wired</label>
                                    </div>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between my-3">
                                <button class="theme-btn btn-two btn_previous2">Previous</button>
                                <button class="theme-btn btn-one btn_next3">Next</button>
                            </div>

                        </div>
                    </div>

                    <div class="tab" id="tab-4">
                        <div class="property-details">
                            <h4>
                                <!--<i class="icon-19"></i>-->
                                Building Details:
                            </h4>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">BUILDING AMENITIES</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1">
                                        <label class="form-check-label" for="BuildingexampleCheck1"> <img
                                                src="public/assets/images/Assisted-living-community.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Assisted-living-community-red.png"
                                                class="img-fluid check_icons_red" alt=""> Assisted living
                                            community</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1a">
                                        <label class="form-check-label" for="BuildingexampleCheck1a"> <img
                                                src="public/assets/images/sport-court.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/sport-court-red.png"
                                                class="img-fluid check_icons_red" alt=""> Basketball court</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1b">
                                        <label class="form-check-label" for="BuildingexampleCheck1b"> <img
                                                src="public/assets/images/access-control.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/access-control-red.png"
                                                class="img-fluid check_icons_red" alt=""> Controlled
                                            access</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1c">
                                        <label class="form-check-label" for="BuildingexampleCheck1c"> <img
                                                src="public/assets/images/access-control.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/access-control-red.png"
                                                class="img-fluid check_icons_red" alt=""> Disable access</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1d">
                                        <label class="form-check-label" for="BuildingexampleCheck1d"> <img
                                                src="public/assets/images/doorman.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/doorman-red.png"
                                                class="img-fluid check_icons_red" alt=""> Doorman</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1e">
                                        <label class="form-check-label" for="BuildingexampleCheck1e"> <img
                                                src="public/assets/images/elevator.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/elevator-red.png"
                                                class="img-fluid check_icons_red" alt=""> Elevator</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1f">
                                        <label class="form-check-label" for="BuildingexampleCheck1f"> <img
                                                src="public/assets/images/fitness-center.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/fitness-center-red.png"
                                                class="img-fluid check_icons_red" alt=""> Fitness center</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1g">
                                        <label class="form-check-label" for="BuildingexampleCheck1g"> <img
                                                src="public/assets/images/gated-entry.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/gated-entry-red.png"
                                                class="img-fluid check_icons_red" alt=""> Gated entry</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1h">
                                        <label class="form-check-label" for="BuildingexampleCheck1h"> <img
                                                src="public/assets/images/bus-stop.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bus-stop-red.png"
                                                class="img-fluid check_icons_red" alt=""> Near
                                            transportation</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1i">
                                        <label class="form-check-label" for="BuildingexampleCheck1i"> <img
                                                src="public/assets/images/basement.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/basement-red.png"
                                                class="img-fluid check_icons_red" alt=""> Over 55+ active
                                            community</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1j">
                                        <label class="form-check-label" for="BuildingexampleCheck1j"> <img
                                                src="public/assets/images/sport-court.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/sport-court-red.png"
                                                class="img-fluid check_icons_red" alt=""> Sports court</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1k">
                                        <label class="form-check-label" for="BuildingexampleCheck1k"> <img
                                                src="public/assets/images/storage.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/storage-red.png"
                                                class="img-fluid check_icons_red" alt=""> Storage</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="BuildingexampleCheck1l">
                                        <label class="form-check-label" for="BuildingexampleCheck1l"> <img
                                                src="public/assets/images/tennis-court.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/tennis-court-red.png"
                                                class="img-fluid check_icons_red" alt=""> Tennis court</label>
                                    </div>
                                </li>
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">ARCHITECTURAL STYLE</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck1">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck1"> <img
                                                src="public/assets/images/bungalow.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bungalow-red.png"
                                                class="img-fluid check_icons_red" alt=""> Bungalow</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck12">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck12"> <img
                                                src="public/assets/images/Cape-code.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Cape-code-red.png"
                                                class="img-fluid check_icons_red" alt=""> Cape Cod</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck13">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck13"> <img
                                                src="public/assets/images/colony.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/colony-red.png"
                                                class="img-fluid check_icons_red" alt=""> Colonial</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck14">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck14"> <img
                                                src="public/assets/images/colony.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/colony-red.png"
                                                class="img-fluid check_icons_red" alt=""> Contemporary</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck15">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck15"> <img
                                                src="public/assets/images/craftsman.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/craftsman-red.png"
                                                class="img-fluid check_icons_red" alt=""> Craftsman</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck16">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck16"> <img
                                                src="public/assets/images/French.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/French-red.png"
                                                class="img-fluid check_icons_red" alt=""> French</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck17">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck17"> <img
                                                src="public/assets/images/bungalow.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bungalow-red.png"
                                                class="img-fluid check_icons_red" alt=""> Georgian</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck18">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck18"> <img
                                                src="public/assets/images/bungalow.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bungalow-red.png"
                                                class="img-fluid check_icons_red" alt=""> Loft</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck19">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck19"> <img
                                                src="public/assets/images/Modern.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Modern-red.png"
                                                class="img-fluid check_icons_red" alt=""> Modern</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck1101">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck1101"> <img
                                                src="public/assets/images/victorian.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/victorian-red.png"
                                                class="img-fluid check_icons_red" alt=""> Queen Anne /
                                            Victorian</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck122">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck122"> <img
                                                src="public/assets/images/Ranch-Rambler.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Ranch-Rambler-red.png"
                                                class="img-fluid check_icons_red" alt=""> Ranch / Rambler</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck133">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck133"> <img
                                                src="public/assets/images/bungalow.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bungalow-red.png"
                                                class="img-fluid check_icons_red" alt=""> Santa Fe / Pueblo
                                            Style</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck144">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck144"> <img
                                                src="public/assets/images/Spanish.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Spanish-red.png"
                                                class="img-fluid check_icons_red" alt=""> Spanish</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck155">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck155"> <img
                                                src="public/assets/images/bungalow.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bungalow-red.png"
                                                class="img-fluid check_icons_red" alt=""> Split-level</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ArchitecturalexampleCheck166">
                                        <label class="form-check-label" for="ArchitecturalexampleCheck166"> <img
                                                src="public/assets/images/bungalow.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bungalow-red.png"
                                                class="img-fluid check_icons_red" alt=""> Tudor</label>
                                    </div>
                                </li>
                                <!-- <li>
                                                <div class="radio-box">
                                                    <input type="checkbox"  id="ArchitecturalexampleCheck177">
                                                    <label class="form-check-label" for="ArchitecturalexampleCheck177">Other</label>
                                                </div>
                                            </li> -->
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Exterior</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck1">
                                        <label class="form-check-label" for="ExteriorexampleCheck1"> <img
                                                src="public/assets/images/bricks.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bricks-red.png"
                                                class="img-fluid check_icons_red" alt=""> Brick</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck12">
                                        <label class="form-check-label" for="ExteriorexampleCheck12"> <img
                                                src="public/assets/images/concrete.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/concrete-red.png"
                                                class="img-fluid check_icons_red" alt=""> Cement /
                                            Concrete</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck13">
                                        <label class="form-check-label" for="ExteriorexampleCheck13"> <img
                                                src="public/assets/images/composition-exterior.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/composition-exterior-red.png"
                                                class="img-fluid check_icons_red" alt=""> Composition</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck14">
                                        <label class="form-check-label" for="ExteriorexampleCheck14"> <img
                                                src="public/assets/images/Metal-Exterior.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Metal-Exterior-red.png"
                                                class="img-fluid check_icons_red" alt=""> Metal</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck15">
                                        <label class="form-check-label" for="ExteriorexampleCheck15"> <img
                                                src="public/assets/images/Shingle-Exterior.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Shingle-Exterior-red.png"
                                                class="img-fluid check_icons_red" alt=""> Shingle</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck16">
                                        <label class="form-check-label" for="ExteriorexampleCheck16"> <img
                                                src="public/assets/images/stone.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/stone-red.png"
                                                class="img-fluid check_icons_red" alt=""> Stone</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck17">
                                        <label class="form-check-label" for="ExteriorexampleCheck17"> <img
                                                src="public/assets/images/Stucco-Exterior.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Stucco-Exterior-red.png"
                                                class="img-fluid check_icons_red" alt=""> Stucco</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck18">
                                        <label class="form-check-label" for="ExteriorexampleCheck18"> <img
                                                src="public/assets/images/Vinyl-Exterior.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Vinyl-Exterior-red.png"
                                                class="img-fluid check_icons_red" alt=""> Vinyl</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck19">
                                        <label class="form-check-label" for="ExteriorexampleCheck19"> <img
                                                src="public/assets/images/wood.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wood-red.png"
                                                class="img-fluid check_icons_red" alt=""> Wood</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="ExteriorexampleCheck10">
                                        <label class="form-check-label" for="ExteriorexampleCheck10"> <img
                                                src="public/assets/images/wood.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wood-red.png"
                                                class="img-fluid check_icons_red" alt=""> Wood Products</label>
                                    </div>
                                </li>
                                <!-- <li>
                                            <div class="radio-box">
                                                <input type="checkbox" id="ExteriorexampleCheck100">
                                                <label class="form-check-label" for="ExteriorexampleCheck100">others <img src="public/assets/images/brick.png" class="img-fluid check_icons" alt=""></label>
                                            </div>
                                        </li> -->
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Outdoor Amenities</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck1">
                                        <label class="form-check-label" for="OutdoorexampleCheck1"> <img
                                                src="public/assets/images/balcony.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/balcony-red.png"
                                                class="img-fluid check_icons_red" alt=""> Balcony/patio</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck12">
                                        <label class="form-check-label" for="OutdoorexampleCheck12"> <img
                                                src="public/assets/images/barbecue.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/barbecue-red.png"
                                                class="img-fluid check_icons_red" alt=""> Barbecue area</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck13">
                                        <label class="form-check-label" for="OutdoorexampleCheck13"> <img
                                                src="public/assets/images/deck.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Deck-red.png"
                                                class="img-fluid check_icons_red" alt=""> Deck</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck14">
                                        <label class="form-check-label" for="OutdoorexampleCheck14"> <img
                                                src="public/assets/images/dock.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Dock-red.png"
                                                class="img-fluid check_icons_red" alt=""> Dock</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck15">
                                        <label class="form-check-label" for="OutdoorexampleCheck15"> <img
                                                src="public/assets/images/fenced-yard.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/fenced-yard-red.png"
                                                class="img-fluid check_icons_red" alt=""> Fenced yard</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck16">
                                        <label class="form-check-label" for="OutdoorexampleCheck16"> <img
                                                src="public/assets/images/garden.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/garden-red.png"
                                                class="img-fluid check_icons_red" alt=""> Garden</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck17">
                                        <label class="form-check-label" for="OutdoorexampleCheck17"> <img
                                                src="public/assets/images/green-house.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/green-house-red.png"
                                                class="img-fluid check_icons_red" alt=""> Greenhouse</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck18">
                                        <label class="form-check-label" for="OutdoorexampleCheck18"> <img
                                                src="public/assets/images/bath.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/bath-red.png"
                                                class="img-fluid check_icons_red" alt=""> Hot tub/spa</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck19">
                                        <label class="form-check-label" for="OutdoorexampleCheck19"> <img
                                                src="public/assets/images/wood.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wood-red.png"
                                                class="img-fluid check_icons_red" alt=""> Lawn</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck100">
                                        <label class="form-check-label" for="OutdoorexampleCheck100"> <img
                                                src="public/assets/images/pond.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/pond-red.png"
                                                class="img-fluid check_icons_red" alt=""> Pond</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck101">
                                        <label class="form-check-label" for="OutdoorexampleCheck101"> <img
                                                src="public/assets/images/pool.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/pool-red.png"
                                                class="img-fluid check_icons_red" alt=""> Pool</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck102">
                                        <label class="form-check-label" for="OutdoorexampleCheck102"> <img
                                                src="public/assets/images/porch.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/porch-red.png"
                                                class="img-fluid check_icons_red" alt=""> Porch</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck103">
                                        <label class="form-check-label" for="OutdoorexampleCheck103"> <img
                                                src="public/assets/images/RV-Parking.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/RV-Parking-red.png"
                                                class="img-fluid check_icons_red" alt=""> RV parking</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck104">
                                        <label class="form-check-label" for="OutdoorexampleCheck104"> <img
                                                src="public/assets/images/sauna.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/sauna-red.png"
                                                class="img-fluid check_icons_red" alt=""> Sauna</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck105">
                                        <label class="form-check-label" for="OutdoorexampleCheck105"> <img
                                                src="public/assets/images/Sprinkle-system.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Sprinkle-system-red.png"
                                                class="img-fluid check_icons_red" alt=""> Sprinkler
                                            system</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck106">
                                        <label class="form-check-label" for="OutdoorexampleCheck106"> <img
                                                src="public/assets/images/water-front.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/water-front-red.png"
                                                class="img-fluid check_icons_red" alt=""> Waterfront</label>
                                    </div>
                                </li>
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Parking</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck1p">
                                        <label class="form-check-label" for="OutdoorexampleCheck1p"><img
                                                src="public/assets/images/carport.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/carport-red.png"
                                                class="img-fluid check_icons_red" alt=""> Carport</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck12p">
                                        <label class="form-check-label" for="OutdoorexampleCheck12p"><img
                                                src="public/assets/images/garage.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/garage-red.png"
                                                class="img-fluid check_icons_red" alt=""> Garage -
                                            Attached</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck13p">
                                        <label class="form-check-label" for="OutdoorexampleCheck13p"><img
                                                src="public/assets/images/garage.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/garage-red.png"
                                                class="img-fluid check_icons_red" alt=""> Garage -
                                            Detached</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck14p">
                                        <label class="form-check-label" for="OutdoorexampleCheck14p"><img
                                                src="public/assets/images/spaces.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/spaces-red.png"
                                                class="img-fluid check_icons_red" alt=""> Off-street</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck15p">
                                        <label class="form-check-label" for="OutdoorexampleCheck15p"><img
                                                src="public/assets/images/spaces.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/spaces-red.png"
                                                class="img-fluid check_icons_red" alt=""> On-street</label>
                                    </div>
                                </li>
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Roof</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck1r">
                                        <label class="form-check-label" for="OutdoorexampleCheck1r"><img
                                                src="public/assets/images/Asphalt.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Asphalt-red.png"
                                                class="img-fluid check_icons_red" alt=""> Asphalt</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck12r">
                                        <label class="form-check-label" for="OutdoorexampleCheck12r"><img
                                                src="public/assets/images/built-up.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/built-up-red.png"
                                                class="img-fluid check_icons_red" alt=""> Built-up</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck13r">
                                        <label class="form-check-label" for="OutdoorexampleCheck13r"><img
                                                src="public/assets/images/composition.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/composition-red.png"
                                                class="img-fluid check_icons_red" alt=""> Composition</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck14p3">
                                        <label class="form-check-label" for="OutdoorexampleCheck14p3"><img
                                                src="public/assets/images/metal.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/metal-red.png"
                                                class="img-fluid check_icons_red" alt=""> Metal</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck15p2">
                                        <label class="form-check-label" for="OutdoorexampleCheck15p2"><img
                                                src="public/assets/images/shake-shingle.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/shake-shingle-red.png"
                                                class="img-fluid check_icons_red" alt=""> Shake /
                                            Shingle</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck15pr1">
                                        <label class="form-check-label" for="OutdoorexampleCheck15pr1"><img
                                                src="public/assets/images/Slate-roof.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/slate-roof-red.png"
                                                class="img-fluid check_icons_red" alt=""> Slate</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck15pr">
                                        <label class="form-check-label" for="OutdoorexampleCheck15pr"><img
                                                src="public/assets/images/tile.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/tile-red.png"
                                                class="img-fluid check_icons_red" alt=""> Tile</label>
                                    </div>
                                </li>
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">View</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck1rv">
                                        <label class="form-check-label" for="OutdoorexampleCheck1rv"><img
                                                src="public/assets/images/city.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/city-red.png"
                                                class="img-fluid check_icons_red" alt=""> City</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck12vr">
                                        <label class="form-check-label" for="OutdoorexampleCheck12vr"><img
                                                src="public/assets/images/mountain.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/mountain-red.png"
                                                class="img-fluid check_icons_red" alt=""> Mountain</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck13rv">
                                        <label class="form-check-label" for="OutdoorexampleCheck13rv"><img
                                                src="public/assets/images/park.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/park-red.png"
                                                class="img-fluid check_icons_red" alt=""> Park</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck14pv">
                                        <label class="form-check-label" for="OutdoorexampleCheck14pv"><img
                                                src="public/assets/images/territorial.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/territorial-red.png"
                                                class="img-fluid check_icons_red" alt=""> Territorial</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="OutdoorexampleCheck15p2v">
                                        <label class="form-check-label" for="OutdoorexampleCheck15p2v"><img
                                                src="public/assets/images/water-view.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/water-view-red.png"
                                                class="img-fluid check_icons_red" alt=""> Water</label>
                                    </div>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between my-3">
                                <button class="theme-btn btn-two btn_previous3">Previous</button>
                                <button class="theme-btn btn-one btn_next4">Next</button>
                            </div>


                        </div>
                    </div>

                    <div class="tab" id="tab-5">
                        <div class="property-details">
                            <h4>
                                <!--<i class="icon-19"></i>-->
                                Utility Details:
                            </h4>
                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Cooling Type</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="CoolingexampleCheck1">
                                        <label class="form-check-label" for="CoolingexampleCheck1"><img
                                                src="public/assets/images/air-conditioner.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/air-conditioner-red.png"
                                                class="img-fluid check_icons_red" alt=""> Central</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="CoolingexampleCheck12">
                                        <label class="form-check-label" for="CoolingexampleCheck12"><img
                                                src="public/assets/images/Evaporative.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Evaporative-red.png"
                                                class="img-fluid check_icons_red" alt=""> Evaporative</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="CoolingexampleCheck13">
                                        <label class="form-check-label" for="CoolingexampleCheck13"><img
                                                src="public/assets/images/geothermal.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/geothermal-red.png"
                                                class="img-fluid check_icons_red" alt=""> Geothermal</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="CoolingexampleCheck14">
                                        <label class="form-check-label" for="CoolingexampleCheck14"><img
                                                src="public/assets/images/Refrigeration.png"
                                                class="img-fluid check_icons" alt=""><img
                                                src="public/assets/images/Refrigeration-red.png"
                                                class="img-fluid check_icons_red" alt=""> Refrigeration</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="CoolingexampleCheck15">
                                        <label class="form-check-label" for="CoolingexampleCheck15"><img
                                                src="public/assets/images/solar.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/solar-red.png"
                                                class="img-fluid check_icons_red" alt=""> Solar</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="CoolingexampleCheck16">
                                        <label class="form-check-label" for="CoolingexampleCheck16"><img
                                                src="public/assets/images/wall.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wall-red.png"
                                                class="img-fluid check_icons_red" alt=""> Wall</label>
                                    </div>
                                </li>
                                <!-- <li>
                                            <div class="radio-box">
                                                <input type="checkbox"  id="CoolingexampleCheck17">
                                                <label class="form-check-label" for="CoolingexampleCheck17">Other</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio-box">
                                                <input type="checkbox"  id="CoolingexampleCheck18">
                                                <label class="form-check-label" for="CoolingexampleCheck18">None</label>
                                            </div>
                                        </li> -->
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Heating Type</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck1">
                                        <label class="form-check-label" for="HeatingexampleCheck1"><img
                                                src="public/assets/images/wall.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wall-red.png"
                                                class="img-fluid check_icons_red" alt=""> Baseboard</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck12">
                                        <label class="form-check-label" for="HeatingexampleCheck12"><img
                                                src="public/assets/images/Forced-air.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Forced-air-red.png"
                                                class="img-fluid check_icons_red" alt=""> Forced Air</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck13">
                                        <label class="form-check-label" for="HeatingexampleCheck13"><img
                                                src="public/assets/images/geothermal.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/geothermal-red.png"
                                                class="img-fluid check_icons_red" alt=""> Geothermal</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck14">
                                        <label class="form-check-label" for="HeatingexampleCheck14"><img
                                                src="public/assets/images/Heat-pump.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/Heat-pump-red.png"
                                                class="img-fluid check_icons_red" alt=""> Heat pump</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck15">
                                        <label class="form-check-label" for="HeatingexampleCheck15"><img
                                                src="public/assets/images/heater.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/heater-red.png"
                                                class="img-fluid check_icons_red" alt=""> Radiant</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck16">
                                        <label class="form-check-label" for="HeatingexampleCheck16"><img
                                                src="public/assets/images/stove.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/stove-red.png"
                                                class="img-fluid check_icons_red" alt=""> Stove</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="HeatingexampleCheck17">
                                        <label class="form-check-label" for="HeatingexampleCheck17"><img
                                                src="public/assets/images/wall.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wall-red.png"
                                                class="img-fluid check_icons_red" alt=""> Wall</label>
                                    </div>
                                </li>
                                <!-- <li>
                                            <div class="radio-box">
                                                <input type="checkbox"  id="HeatingexampleCheck18">
                                                <label class="form-check-label" for="HeatingexampleCheck18">Other</label>
                                            </div>
                                        </li> -->
                            </ul>

                            <ul class="other-option APPLIANCES_details clearfix">
                                <p class="mt-2 mb-2">Heating Fuel</p>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a1">
                                        <label class="form-check-label" for="a1"><img
                                                src="public/assets/images/coal.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/coal-red.png"
                                                class="img-fluid check_icons_red" alt=""> Coal</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a2">
                                        <label class="form-check-label" for="a2"><img
                                                src="public/assets/images/electric.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/electric-red.png"
                                                class="img-fluid check_icons_red" alt=""> Eletric</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a3">
                                        <label class="form-check-label" for="a3"><img
                                                src="public/assets/images/gas.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/gas-red.png"
                                                class="img-fluid check_icons_red" alt=""> Gas</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a4">
                                        <label class="form-check-label" for="a4"><img
                                                src="public/assets/images/oil.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/oil-red.png"
                                                class="img-fluid check_icons_red" alt=""> Oil</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a5">
                                        <label class="form-check-label" for="a5"><img
                                                src="public/assets/images/butane.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/butane-red.png"
                                                class="img-fluid check_icons_red" alt=""> Propane /
                                            Butane</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a6">
                                        <label class="form-check-label" for="a6"><img
                                                src="public/assets/images/solar.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/solar-red.png"
                                                class="img-fluid check_icons_red" alt=""> Solar</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="checkbox" id="a7">
                                        <label class="form-check-label" for="a7"><img
                                                src="public/assets/images/wood.png" class="img-fluid check_icons"
                                                alt=""><img src="public/assets/images/wood-red.png"
                                                class="img-fluid check_icons_red" alt=""> Wood / Pellet</label>
                                    </div>
                                </li>
                                <!-- <li>
                                            <div class="radio-box">
                                                <input type="checkbox"  id="a8">
                                                <label class="form-check-label" for="a8">Other</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio-box">
                                                <input type="checkbox"  id="a9">
                                                <label class="form-check-label" for="a9">None</label>
                                            </div>
                                        </li> -->
                            </ul>
                            <div class="d-flex justify-content-between my-3">
                                <button class="theme-btn btn-two btn_previous4">Previous</button>
                                <button class="theme-btn btn-one btn_next5">Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab" id="tab-6">
                        <div class="gallery-box">
                            <h4>
                                <!--<i class="icon-34"></i>-->
                                Address:
                            </h4>
                            <div class="inner-box default-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Address</label>
                                            <input type="text" id="autocomplete"
                                                name="Address" placeholder="Address">
                                                <button id="b1" style="display:none" ><i class="fas fa-location-arrow"></i> Current Location </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>City</label>
                                            <input type="text" id="locality" name="City" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>State / Province</label>
                                            <input type="text" id="administrative_area_level_1" name="State"
                                                placeholder="State / Province">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Postal / Zip code</label>
                                            <input type="text" id="postal_code" name="Zip code"
                                                placeholder="Postal / Zip code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Longitude</label>
                                            <input type="text" id="long" name="Longitude" placeholder="-122.626829">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Latitude</label>
                                            <input type="text" id="lat" name="Latitude" placeholder="48.313443">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>MLS Area</label>
                                            <input type="text" name="MLS Area"
                                                placeholder="813 - North Whidbey Is">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <div class="field-input">
                                            <label>Regions</label>
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Regions">Regions</option>
                                                    <option value="1">New York</option>
                                                    <option value="2">California</option>
                                                    <option value="2">London</option>
                                                    <option value="2">Chicago</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=5209%20Lake%20Washington%20Blvd%20NE,%20Suite%20220%20%20Kirkland,%20WA%2098033-7355&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>                                    </div></div> --}}
                                    <div id="map"></div>
                                    {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-i.net">escape room 2 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> --}}
                                </div>

                            </div>
                            <div class="d-flex justify-content-between my-3">
                                <button class="theme-btn btn-two btn_previous5">Previous</button>
                                <button class="theme-btn btn-one btn_next6">Next</button>
                            </div>
                        </div>

                        <div class="tab" id="tab-7">
                            <div class="gallery-box">
                                <h4>
                                    <!--<i class="icon-16"></i>-->
                                    Floor Plan:
                                </h4>
                                <div class="inner-box default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6  col-md-6  col-sm-12 column">
                                            <div class="field-input">
                                                <label>Select Floor</label>
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Select Floor">Select Floor</option>
                                                        <option value="1">First Floor</option>
                                                        <option value="2">Second Floor</option>
                                                        <option value="2">Third Floor</option>
                                                        <option value="2">Four Floor</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6  col-md-6  col-sm-12 column">
                                            <div class="field-input">
                                                <label>Floor Plan Title</label>
                                                <input type="text" name="flor_plan" placeholder="Floor Plan Title">
                                            </div>
                                        </div>
                                        <div class="col-lg-6  col-md-6  col-sm-12 column">
                                            <div class="field-input">
                                                <label>Size In Sq Ft</label>
                                                <input type="text" placeholder="2412 Sq Ft">
                                            </div>
                                        </div>
                                        <div class="col-lg-6  col-md-6  col-sm-12 column">
                                            <div class="field-input">
                                                <label>Size Of Rooms In Sq Ft</label>
                                                <input type="text" placeholder="150 Sq Ft">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="upload-inner centred">-->
                                <!--    <i class="fal fa-cloud-upload"></i>-->
                                <!--    <div class="upload-box">-->
                                <!--        <input type="file" id="check3">-->
                                <!--        <label for="check3">Click here to upload your image</label>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<a href="#" class="theme-btn btn-one">Add Images</a>-->
                                <div class="d-flex justify-content-between my-3">
                                    <button class="theme-btn btn-two btn_previous6">Previous</button>
                                    <button class="theme-btn btn-one" data-toggle="modal"
                                        data-target="#exampleModalsubmit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- myprofile-section end -->


    <!-- Sell Your Home Content End's Here -->
    <script>
        $(document).ready(function() {
            // Next
            $('.btn_next1').click(function() {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next2').click(function() {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next3').click(function() {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next4').click(function() {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next5').click(function() {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next6').click(function() {
                $('.list_tab7').click();
                $('.scroll-to-target').click();

            });
            // Previous
            $('.btn_previous1').click(function() {
                $('.list_tab1').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous2').click(function() {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous3').click(function() {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous4').click(function() {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous5').click(function() {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous6').click(function() {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--<div class="modal-header">-->
                <!--  <h5 class="modal-title" id="exampleModalLabel">List Your Property</h5>-->
                <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--    <span aria-hidden="true">&times;</span>-->
                <!--  </button>-->
                <!--</div>-->
                <div class="modal-body">
                    <div class="form_submitting_content">
                        <span class="check_icon"><i class="fas fa-check-circle"></i></span>
                        <h3>Thank You!</h3>
                        <p>The details of your property have been submitted.</p>
                    </div>
                </div>
                <!--<div class="modal-footer">-->
                <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script>
    <script>
        function initialize() {
            initMap();
            initAutocomplete();
        }
        var map, marker;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 11
            });

            const geocoder = new google.maps.Geocoder();
              const infowindow = new google.maps.InfoWindow();

              document.getElementById("b1").addEventListener("click", () => {
                geocodeLatLng(geocoder, map, infowindow);
              });
        }


        // Function for Fatch Address using Lat and Long -- Start
        function geocodeLatLng(geocoder, map, infowindow) {

            if (navigator.geolocation) {

                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());



                    geocoder = new google.maps.Geocoder();

                geocoder.geocode({ location: geolocation })
                    .then((response) => {
                      if (response.results[0]) {



                        $('#autocomplete').val(response.results[0].formatted_address);
                                for (var component in componentForm) {
                                    document.getElementById(component).value = '';
                                    document.getElementById(component).disabled = false;
                                }
                                for (var i = 0; i < response.results[0].address_components.length; i++) {
                                    var addressType = response.results[0].address_components[i].types[0];
                                    if (componentForm[addressType]) {
                                        var val = response.results[0].address_components[i][componentForm[addressType]];
                                        document.getElementById(addressType).value = val;
                                    }
                                }
                                var locationn = response.results[0].geometry.location;
                                var latt = response.results[0].geometry.location.lat;
                                var lngg = response.results[0].geometry.location.lng;
                                $('#lat').val(latt);
                                $('#long').val(lngg);

                                map.setZoom(17);

                                const marker = new google.maps.Marker({
                                  position: locationn,
                                  map: map,
                                });

                                infowindow.setContent(response.results[0].formatted_address);
                                infowindow.open(map, marker);



                      } else {
                        window.alert("No results found");
                      }
                    })
                    .catch((e) => window.alert("Geocoder failed due to: " + e));

                });


            }

        }

        // Function for Fatch Address using Lat and Long -- End


       // Code for Fetch Address using autocomplete -- Start

         $("#autocomplete").on("focus", function( e ) {
            $('#b1').show();
        });




        var placeSearch, autocomplete;
        var componentForm = {
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            postal_code: 'short_name',

        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete')), {
                    types: ['geocode']
                });

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }



        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17); // Why 17? Because it looks good.
            }
            if (!marker) {
                marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
                });
            } else marker.setMap(null);
            marker.setOptions({
                position: place.geometry.location,
                map: map

            });

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }


            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }

            $('#lat').val(place.geometry.location.lat());
            $('#long').val(place.geometry.location.lng());
        }

        // Code for Fetch Address using autocomplete -- End




    </script>

<script>
    $(document).ready( function() {

});
</script>
@endsection
