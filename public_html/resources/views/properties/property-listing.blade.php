@php
    $metaTitle = 'List Your Washington Property | Washington Property Listing';
    $metaDescription = "List your Washington property on our online platform.
     Get your Washington property listing seen by a wide audience, and connect with potential
      buyers or renters easily and efficiently.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Sell Your Home Content Start's Here -->
    <!-- myprofile-section -->
    <style>
        .myprofile-section .other-option .radio-box label {
            position: relative;
            display: block;
            padding-left: 22px;
            margin-right: 5px;
            margin-bottom: 5px;
            color: #282828;
            font-size: 18px;
            line-height: 30px;
            cursor: pointer;
            transition: all 500ms ease;
        }
        #b1 {
            width: 100%;
            padding: 10px;
            background: #cccccc9c;
            text-align: left;
            color: #de1e25;
            display: block;
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
        #autocomplete {
            max-width: unset;
            margin: unset;
            text-align: left;
            color: #888888;
        }
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

    <section class="wizard-section">
        <div class="container">
            <div class="myprofile-section mt-5">
                <div class="title">

                    <h3>List Your Property</h3>

                    <p>Please enter the home details for your property to appear in our exclusive feature property

                        page.</p>

                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="form-wizard">
                        <form action="{{ route('home.property-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-wizard-header">
                                <ul class="list-unstyled form-wizard-steps clearfix">
                                    <li class="active"><span>1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li><span>4</span></li>
                                    <li><span>5</span></li>
                                    <li><span>6</span></li>
                                </ul>
                            </div>
                            <fieldset class="wizard-fieldset show">
                                <h5>Home Facts</h5>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="field-input">
                                            <label> For Rent or Sale <span class="text-danger">*</span> </label>
                                            <div class="select-box">
                                                <select class="wide" name="rent">
                                                    <option value="">
                                                        Select an option </option>
                                                            <option value="Rent">
                                                                 Rent </option>
                                                                 <option value="Sale">
                                                                    Sale </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="field-input">
                                            <label> Home Type <span class="text-danger">*</span> </label>
                                            <div class="select-box">
                                                <select class="wide" name="hometype">
                                                    @php
                                                        $propertyTypes = categoriesCount();
                                                    @endphp
                                                    @forelse ($propertyTypes as $value)
                                                            <option value="{{ $value->id }}">
                                                                {{ $value->StructureTypeName }}
                                                            </option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div> <div class="col-lg-6 col-md-6 col-12">
                                        <div class="field-input status">
                                            <label> Property Status <span class="text-danger">*</span> </label>
                                            <div class="select-box">
                                                <select class="wide" name="status">

                                                    @php
                                                        $propertyTypes = propertiesStatus();
                                                    @endphp
                                                    <option value="">
                                                        Select an option </option>
                                                    @forelse ($propertyTypes as $value)
                                                            <option value="{{ $value['PublishStatus'] }}">
                                                                {{ $value['PublishStatus'] }}
                                                            </option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input type="text" name="PropertySubType"
                                                class="form-control"
                                                id="PropertySubType">
                                            <label for="PropertySubType" class="wizard-form-text-label">Property
                                                Subtype</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="SellingPrice"
                                                class="form-control wizard-required" id="number_element">
                                            <label for="SellingPrice" class="wizard-form-text-label">List Price*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input type="text"
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                name="HOAdues"
                                                class="form-control wizard-required" id="HOAdues">
                                            <label for="HOAdues" class="wizard-form-text-label">Hoa Dues*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="Beds"
                                                class="form-control wizard-required" id="Beds">
                                            <label for="Beds" class="wizard-form-text-label">Bed*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="FullBaths"
                                                class="form-control wizard-required" id="FullBaths">
                                            <label for="FullBaths" class="wizard-form-text-label">Full Bath*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="OneQuarter"
                                                class="form-control wizard-required" id="OneQuarter">
                                            <label for="OneQuarter" class="wizard-form-text-label">3/4 Baths*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="halfbaths"
                                                class="form-control wizard-required" id="halfbaths">
                                            <label for="halfbaths" class="wizard-form-text-label">1/2 Baths*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="threeQuarter"
                                                class="form-control wizard-required" id="threeQuarter">
                                            <label for="threeQuarter" class="wizard-form-text-label">1/4 Baths*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="Finishedsquarefeet"

                                                class="form-control wizard-required" id="Finishedsquarefeet">
                                            <label for="Finishedsquarefeet" class="wizard-form-text-label">Finished square
                                                feet*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="LotSize"
                                                class="form-control wizard-required" id="LotSize">
                                            <label for="LotSize" class="wizard-form-text-label">Lot Size*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="YearBuilt"
                                                class="form-control wizard-required" id="YearBuilt">
                                            <label for="YearBuilt" class="wizard-form-text-label">Year Built*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="TaxYear"
                                                class="form-control wizard-required" id="TaxYear">
                                            <label for="TaxYear" class="wizard-form-text-label">Tax Year*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="TaxAnnualAmount"
                                                 class="form-control wizard-required"
                                                id="TaxAnnualAmount">
                                            <label for="TaxAnnualAmount" class="wizard-form-text-label">Tax Annual
                                                Amount*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="EffectiveYearBuilt"
                                                class="form-control wizard-required" id="EffectiveYearBuilt">
                                            <label for="EffectiveYearBuilt" class="wizard-form-text-label">Structure
                                                Remodel Year*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                type="text" name="TotalRooms"
                                                class="form-control wizard-required" id="TotalRooms">
                                            <label for="TotalRooms" class="wizard-form-text-label">Rooms*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input type="text" name="VirtualTourURL"
                                                 class="form-control"
                                                id="VirtualTourURL">
                                            <label for="VirtualTourURL" class="wizard-form-text-label">Virtual Tour
                                                Link</label>
                                                <span id="urlError" style="color: red;"></span> 
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group ">
                                            <textarea type="text" name="description" class="form-control wizard-required"
                                                id="description"></textarea>
                                            <label for="description" class="wizard-form-text-label">Description*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="myprofile-section">
                                        <div class="inner-box">
                                            <div class="col-12">
                                                <h5>Photos <span class="text-danger">*</span></h5>
                                                <div class="upload-inner centred">
                                                    <div class="upload__box">
                                                        <div class="upload-inner centred upload__btn-box">
                                                            <label class="upload-box upload__btn w-100"
                                                                style="cursor: pointer">
                                                                <i class="fal fa-cloud-upload"></i>
                                                                <p>Upload images</p>
                                                                <input type="file" name="photos[]"

                                                                    accept="image/png, image/gif, image/jpeg"
                                                                    multiple="" data-max_length="100"
                                                                    class="form-control upload__inputfile d-none">
                                                            </label>
                                                        </div>
                                                        <div class="upload__img-wrap"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group clearfix">
                                            <a href="javascript:;" id="nextButton" class="form-wizard-next-btn float-right">Next</a>
                                        </div>
                                    </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <h5>Room Details:</h5>
                                <div class="myprofile-section">
                                    <div class="property-details">

                                        <h4>

                                            <!--<i class="icon-19"></i>-->

                                            Room Details:

                                        </h4>

                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">APPLIANCES</p>
                                            @foreach ($listProperties['appliances'] as $key => $property)
                                                @if (isset($property->ApplianceIcon) and isset($property->ApplianceSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input name="appliance[]" type="checkbox"
                                                                id="appliances_{{ $key }}"
                                                                value="{{ $property->id }}">
                                                            <label for="appliances_{{ $key }}">
                                                                <img src="{{ asset('public/assets/images/' . $property->ApplianceIcon) }}"
                                                                    class="img-fluid check_icons" alt=""> <img
                                                                    src=" {{ asset('public/assets/images/' . $property->ApplianceSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->ApplianceName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details APPLIANCES_details_radio clearfix">
                                            <p class="mt-2 mb-2">BASEMENT</p>
                                            @foreach ($listProperties['basement'] as $key => $property)
                                                @if (isset($property->BasementIcon) and isset($property->BasementSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="basement"
                                                                id="basement_{{ $key }}"
                                                                value="{{ $property->id }}">
                                                            <label for="basement_{{ $key }}"><img
                                                                    src="{{ asset('public/assets/images/' . $property->BasementIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->BasementSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->BasementName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">FLOOR COVERING</p>
                                            @foreach ($listProperties['floor'] as $key => $property)
                                                @if (isset($property->FloringeIcon) and isset($property->FloringSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="floor[]"
                                                                id="floor_{{ $key }}"
                                                                value="{{ $property->id }}">
                                                            <label for="floor_{{ $key }}"> <img
                                                                    src="{{ asset('public/assets/images/' . $property->FloringeIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->FloringSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->FloringName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">ROOMS</p>
                                            @foreach ($listProperties['Rooms'] as $key => $property)
                                                @if (isset($property->RoomIcon) and isset($property->RoomSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="PropertyRooms[]"
                                                                id="room_{{ $key }}"
                                                                value="{{ $property->id }}">
                                                            <label for="room_{{ $key }}"> <img
                                                                    src="{{ asset('public/assets/images/' . $property->RoomIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->RoomSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->RoomName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">INDOOR FEATURES</p>
                                            @foreach ($listProperties['Interior'] as $key => $property)
                                                @if (isset($property->InteriorFeatureIcon) and isset($property->InteriorFeatureSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input name="interior[]" type="checkbox"
                                                                id="Interior_{{ $key }}"
                                                                value="{{ $property->id }}">
                                                            <label for="Interior_{{ $key }}"> <img
                                                                    src="{{ asset('public/assets/images/' . $property->InteriorFeatureIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->InteriorFeatureSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">

                                                                {{ $property->InteriorFeatureName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <h5>Building Details:</h5>
                                <div class="myprofile-section">
                                    <div class="property-details">
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">BUILDING AMENITIES</p>
                                            @foreach ($listProperties['Community'] as $key => $property)
                                                @if (isset($property->CommunityFeatureIcon) and isset($property->CommunityFeatureSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox"id="com_{{ $key }}"
                                                                name="community[]" value="{{ $property->id }}">
                                                            <label class="form-check-label"
                                                                for="com_{{ $key }}"> <img
                                                                    src="{{ asset('public/assets/images/' . $property->CommunityFeatureIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->CommunityFeatureSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->CommunityFeatureName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details APPLIANCES_details_radio clearfix">
                                            <p class="mt-2 mb-2">ARCHITECTURAL STYLE</p>
                                            @foreach ($listProperties['archi'] as $key => $property)
                                                @if (isset($property->ArchitecturalIcon) and isset($property->ArchitecturalSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="ArchitecturalStyle"
                                                                id="archi_{{ $key }}" name="ArchitecturalStyle"
                                                                value="{{ $property->id }}">
                                                            <label class="form-check-label"
                                                                for="archi_{{ $key }}"> <img
                                                                    src="{{ asset('public/assets/images/' . $property->ArchitecturalIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->ArchitecturalSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->ArchitecturalName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">Exterior</p>
                                            @foreach ($listProperties['Exterior'] as $key => $property)
                                                @if (isset($property->ExterFeatureIcon) and isset($property->ExterFeatureSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" id="exte_{{ $key }}"
                                                                name="exteriorFeatures[]" value="{{ $property->id }}">
                                                            <label class="form-check-label"
                                                                for="exte_{{ $key }}">
                                                                <img src="{{ asset('public/assets/images/' . $property->ExterFeatureIcon) }}"
                                                                    class="img-fluid check_icons" alt="">
                                                                <img src="{{ asset('public/assets/images/' . $property->ExterFeatureSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->ExterFeatureName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">Outdoor Amenities</p>
                                            @foreach ($listProperties['outDoor'] as $key => $property)
                                                @if (isset($property->OutdooramenityIcon) and isset($property->OutdooramenitySelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" id="outdoor_{{ $key }}"
                                                                name="outDoor[]" value="{{ $property->id }}">
                                                            <label class="form-check-label"
                                                                for="outdoor_{{ $key }}">
                                                                <img src="{{ asset('public/assets/images/' . $property->OutdooramenityIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->OutdooramenitySelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->OutdooramenityName }}</label>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">Parking </p>
                                            @foreach ($listProperties['parking'] as $key => $property)
                                                @if (isset($property->ParkingFeatureIcon) and isset($property->ParkingFeatureSelectedIcon))
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="checkbox" name="parking[]"
                                                                id="parking_{{ $key }}"
                                                                value="{{ $property->id }}">
                                                            <label class="form-check-label"
                                                                for="parking_{{ $key }}">
                                                                <img src="{{ asset('public/assets/images/' . $property->ParkingFeatureIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->ParkingFeatureSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">
                                                                {{ $property->ParkingFeatureName }}</label>

                                                        </div>

                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>

                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Roof</p>

                                            @foreach ($listProperties['roof'] as $key => $property)
                                                @if (isset($property->RoofIcon) and isset($property->RoofSelectedIcon))
                                                    <li>

                                                        <div class="radio-box">

                                                            <input type="checkbox" name="roof[]"
                                                                id="roof_{{ $key }}"
                                                                value="{{ $property->id }}">

                                                            <label class="form-check-label"
                                                                for="roof_{{ $key }}">

                                                                <img src="{{ asset('public/assets/images/' . $property->RoofIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->RoofSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">

                                                                {{ $property->RoofName }}</label>

                                                        </div>

                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>

                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">View </p>

                                            @foreach ($listProperties['view'] as $key => $property)
                                                @if (isset($property->ProperyViewIcon) and isset($property->ProperyViewSelectedIcon))
                                                    <li>

                                                        <div class="radio-box">

                                                            <input type="checkbox" id="view_{{ $key }}"
                                                                name="propertyview[]" value="{{ $property->id }}">

                                                            <label class="form-check-label"
                                                                for="view_{{ $key }}"><img
                                                                    src="{{ asset('public/assets/images/' . $property->ProperyViewIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->ProperyViewSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">

                                                                {{ $property->ProperyViewName }}</label>

                                                        </div>

                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <h5>Utility Details</h5>
                                <div class="myprofile-section">
                                    <div class="property-details">
                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Cooling Type</p>

                                            @foreach ($listProperties['cooling'] as $key => $property)
                                                @if (isset($property->CoolingTypeIcon) and isset($property->CoolingTypeSelectedIcon))
                                                    <li>

                                                        <div class="radio-box">

                                                            <input type="checkbox" name="propertycooling[]"
                                                                id="cooling_{{ $key }}"
                                                                name="propertycooling[]" value="{{ $property->id }}">

                                                            <label class="form-check-label"
                                                                for="cooling_{{ $key }}"><img
                                                                    src="{{ asset('public/assets/images/' . $property->CoolingTypeIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->CoolingTypeSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">

                                                                {{ $property->CoolingTypeName }}</label>

                                                        </div>

                                                    </li>
                                                @endif
                                            @endforeach


                                        </ul>



                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Heating Type</p>

                                            @foreach ($listProperties['heating'] as $key => $property)
                                                @if (isset($property->HeatingTypeIcon) and isset($property->HeatingTypeSelectedIcon))
                                                    <li>

                                                        <div class="radio-box">

                                                            <input type="checkbox" name="propertyheating[]"
                                                                id="heating_{{ $key }}"
                                                                name="propertyheating[]" value="{{ $property->id }}">

                                                            <label class="form-check-label"
                                                                for="heating_{{ $key }}"><img
                                                                    src="{{ asset('public/assets/images/' . $property->HeatingTypeIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->HeatingTypeSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">

                                                                {{ $property->HeatingTypeName }}</label>

                                                        </div>

                                                    </li>
                                                @endif
                                            @endforeach


                                        </ul>



                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Heating Fuel</p>

                                            @foreach ($listProperties['fuel'] as $key => $property)
                                                @if (isset($property->HeatingFuelIcon) and isset($property->HeatingFuelSelectedIcon))
                                                    <li>

                                                        <div class="radio-box">

                                                            <input type="checkbox" name="propertyfuel[]"
                                                                id="fuel_{{ $key }}" name="propertyfuel[]"
                                                                value="{{ $property->id }}">

                                                            <label class="form-check-label"
                                                                for="fuel_{{ $key }}"><img
                                                                    src="{{ asset('public/assets/images/' . $property->HeatingFuelIcon) }}"
                                                                    class="img-fluid check_icons" alt=""><img
                                                                    src="{{ asset('public/assets/images/' . $property->HeatingFuelSelectedIcon) }}"
                                                                    class="img-fluid check_icons_red" alt="">

                                                                {{ $property->HeatingFuelName }}</label>

                                                        </div>

                                                    </li>
                                                @endif
                                            @endforeach


                                        </ul>


                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <h5>Address</h5>
                                <div class="myprofile-section">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Address" class="form-control wizard-required"
                                                    id="autocomplete">
                                                <label for="autocomplete" class="wizard-form-text-label">Address*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <a id="b1" style="display:none"><i class="fas fa-location-arrow"></i>
                                                Current Location </a>
                                            </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="City"  class="form-control wizard-required"
                                                    id="locality">
                                                <label for="City" class="wizard-form-text-label">City*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="State"  class="form-control wizard-required"
                                                    id="administrative_area_level_1">
                                                <label for="administrative_area_level_1"
                                                    class="wizard-form-text-label">State / Province*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="CountyOrParish"
                                                    class="form-control wizard-required" id="country">
                                                <label for="country" class="wizard-form-text-label">County Or
                                                    Parish*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="zipCode"  class="form-control wizard-required"
                                                    id="postal_code" placeholder="Address">
                                                <label for="postal_code" class="wizard-form-text-label">Postal / Zip
                                                    code*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Longitude"
                                                    class="form-control wizard-required" id="long"
                                                    placeholder="City">
                                                <label for="long" class="wizard-form-text-label">Longitude*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Latitude"
                                                    class="form-control wizard-required" id="lat"
                                                    placeholder="State">
                                                <label for="lat" class="wizard-form-text-label">Latitude*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Street"  class="form-control wizard-required"
                                                    id="street_number">
                                                <label for="street_number" class="wizard-form-text-label">Street*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="MLSArea" class="form-control wizard-required"
                                                    id="route">
                                                <label for="route" class="wizard-form-text-label">Area*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <h5>Other Details</h5>
                                <div class="myprofile-section">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Topography"
                                                    class="form-control wizard-required" id="Topography">
                                                <label for="Topography" class="wizard-form-text-label">Topography</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="PowerCompany"
                                                    class="form-control wizard-required" id="PowerCompany">
                                                <label for="PowerCompany" class="wizard-form-text-label">Power
                                                    Company*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="SewerCompany"
                                                    class="form-control wizard-required" id="SewerCompany">
                                                <label for="SewerCompany" class="wizard-form-text-label">Sewer
                                                    Company*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="HighSchoolDistrict"
                                                    class="form-control wizard-required" id="HighSchoolDistrict">
                                                <label for="HighSchoolDistrict" class="wizard-form-text-label">High School
                                                    District*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="highSchool"
                                                    class="form-control wizard-required" id="highSchool">
                                                <label for="highSchool" class="wizard-form-text-label">High
                                                    School*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="MiddleOrJuniorSchool"
                                                    class="form-control wizard-required" id="MiddleOrJuniorSchool">
                                                <label for="MiddleOrJuniorSchool" class="wizard-form-text-label">Middle Or
                                                    Junior School*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="ElementarySchool"
                                                    class="form-control wizard-required" id="ElementarySchool">
                                                <label for="ElementarySchool" class="wizard-form-text-label">Elementary
                                                    School*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <button type="submit" class="form-wizard-submit float-right">Submit</button>
                                    {{-- <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> --}}
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- myprofile-section end -->





    <!-- Sell Your Home Content End's Here -->



    <script>

            $(document).ready(function() {
                // Get the input element by its ID
                var virtualTourInput = $("#VirtualTourURL");
                var urlError = $("#urlError");
                var nextButton = $("#nextButton");
                // Add an event listener to detect changes in the input field
                virtualTourInput.on("input", function() {
                    // Get the value entered in the input field
                    var inputValue = virtualTourInput.val();

                    // Regular expression to match URLs
                    var urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;

                    // Check if the entered value matches the URL pattern
                    if (urlPattern.test(inputValue)||inputValue==="") {
            // It's a valid URL, clear the error message and hide it
                        urlError.text("");
                        urlError.hide();
                        nextButton.css("pointer-events", "");
                    } else {
                        // It's not a valid URL, display the error message
                        urlError.text("Not a valid URL! it should start with http// or https// ");
                        urlError.show();
                        nextButton.css("pointer-events", "none"); 
                    }
                });
            });
        jQuery(document).ready(function() {
            // click on next button
            jQuery('.form-wizard-next-btn').click(function() {
                var parentFieldset = jQuery(this).parents('.wizard-fieldset');
                var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                    '.form-wizard-steps .active');
                var next = jQuery(this);
                var nextWizardStep = true;
                parentFieldset.find('.wizard-required').each(function() {
                    var thisValue = jQuery(this).val();

                    if (thisValue == "") {
                        jQuery(this).siblings(".wizard-form-error").slideDown();
                        nextWizardStep = false;
                    } else {
                        jQuery(this).siblings(".wizard-form-error").slideUp();
                    }
                });
                if (nextWizardStep) {
                    next.parents('.wizard-fieldset').removeClass("show", "400");
                    currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',
                        "400");
                    next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                    jQuery(document).find('.wizard-fieldset').each(function() {
                        if (jQuery(this).hasClass('show')) {
                            var formAtrr = jQuery(this).attr('data-tab-content');
                            jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(
                                function() {
                                    if (jQuery(this).attr('data-attr') == formAtrr) {
                                        jQuery(this).addClass('active');
                                        var innerWidth = jQuery(this).innerWidth();
                                        var position = jQuery(this).position();
                                        jQuery(document).find('.form-wizard-step-move').css({
                                            "left": position.left,
                                            "width": innerWidth
                                        });
                                    } else {
                                        jQuery(this).removeClass('active');
                                    }
                                });
                        }
                    });
                }
            });
            //click on previous button
            jQuery('.form-wizard-previous-btn').click(function() {
                var counter = parseInt(jQuery(".wizard-counter").text());;
                var prev = jQuery(this);
                var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                    '.form-wizard-steps .active');
                prev.parents('.wizard-fieldset').removeClass("show", "400");
                prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
                currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',
                    "400");
                jQuery(document).find('.wizard-fieldset').each(function() {
                    if (jQuery(this).hasClass('show')) {
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(
                            function() {
                                if (jQuery(this).attr('data-attr') == formAtrr) {
                                    jQuery(this).addClass('active');
                                    var innerWidth = jQuery(this).innerWidth();
                                    var position = jQuery(this).position();
                                    jQuery(document).find('.form-wizard-step-move').css({
                                        "left": position.left,
                                        "width": innerWidth
                                    });
                                } else {
                                    jQuery(this).removeClass('active');
                                }
                            });
                    }
                });
            });
            //click on form submit button
            jQuery(document).on("click", ".form-wizard .form-wizard-submit", function() {
                var parentFieldset = jQuery(this).parents('.wizard-fieldset');
                var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                    '.form-wizard-steps .active');
                parentFieldset.find('.wizard-required').each(function() {
                    var thisValue = jQuery(this).val();
                    if (thisValue == "") {
                        jQuery(this).siblings(".wizard-form-error").slideDown();
                    } else {
                        jQuery(this).siblings(".wizard-form-error").slideUp();
                    }
                });
            });
            // focus on input field check empty or not
            jQuery(".form-control").on('focus', function() {
                var tmpThis = jQuery(this).val();
                if (tmpThis == '') {
                    jQuery(this).parent().addClass("focus-input");
                } else if (tmpThis != '') {
                    jQuery(this).parent().addClass("focus-input");
                }
            }).on('blur', function() {
                var tmpThis = jQuery(this).val();
                if (tmpThis == '') {
                    jQuery(this).parent().removeClass("focus-input");
                    jQuery(this).siblings('.wizard-form-error').slideDown("3000");
                } else if (tmpThis != '') {
                    jQuery(this).parent().addClass("focus-input");
                    jQuery(this).siblings('.wizard-form-error').slideUp("3000");
                }
            });
        });
    </script>


    <!-- Modal -->

    <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

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


<script>
  $(document).ready(function() {
    // Get the rent select element and the property status div
    var rentSelect = $('select[name="rent"]');
    var propertyStatusDiv = $('div.status');

    // Add an event listener to the rent select element
    rentSelect.on('change', function() {
      // Check if the selected option is "Rent"
      if (rentSelect.val() === "Rent") {
        // Hide the property status div
        propertyStatusDiv.hide();
      } else {
        // Show the property status div
        propertyStatusDiv.show();
      }
    });
  });
</script>






    <script>
        $(".btn_next2").click(function() {
            var empty = $(this).parent().find("input").filter(function() {
                return this.value === "";
            });
            if (empty.length) {
                //At least one input is empty
            }
        });

        $(".list_tab2").click(function() {
            var empty = $(this).parent().find("input").filter(function() {
                return this.value === "";
            });
            if (empty.length) {
                //At least one input is empty
            }
        });
        $(".list_tab3").click(function() {
            var empty = $(this).parent().find("input").filter(function() {
                return this.value === "";
            });
            if (empty.length) {
                //At least one input is empty
            }
        });


        $(document).ready(function() {



            ImgUpload();



            function ImgUpload() {

                var imgWrap = "";

                var imgArray = [];



                $('.upload__inputfile').each(function() {

                    $(this).on('change', function(e) {

                        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');

                        var maxLength = $(this).attr('data-max_length');



                        var files = e.target.files;

                        var filesArr = Array.prototype.slice.call(files);

                        var iterator = 0;

                        filesArr.forEach(function(f, index) {



                            if (!f.type.match('image.*')) {

                                return;

                            }



                            if (imgArray.length > maxLength) {

                                return false

                            } else {

                                var len = 0;

                                for (var i = 0; i < imgArray.length; i++) {

                                    if (imgArray[i] !== undefined) {

                                        len++;

                                    }

                                }

                                if (len > maxLength) {

                                    return false;

                                } else {

                                    imgArray.push(f);
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var html =
                                            "<div class='upload__img-box'><div class='upload_image_div' style='background-image: url(" +

                                            e.target.result + ")' data-number='" + $(

                                                ".upload__img-close").length +

                                            "' data-file='" + f.name +

                                            "' class='img-bg'><div class='upload__img-close'><i class='fas fa-times text-white' style='color: white;'></i></div></div></div>";
                                        imgWrap.append(html);
                                        iterator++;
                                    }
                                    reader.readAsDataURL(f);
                                }
                            }
                        });
                    });
                });
                $(document).on('click', ".upload__img-close", function(e) {
                    var file = $(this).parent().data("file");
                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i].name === file) {
                            imgArray.splice(i, 1);
                            break;
                        }
                    }
                    $(this).parent().parent().remove();
                });
            }
        });
    </script>
    <script>
        function initialize() {
            PropertyListinginitMap();
            PropertyListinginitAutocomplete();
        }
        var map, marker;
        function PropertyListinginitMap() {
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

        // function geocodeLatLng(geocoder, map, infowindow) {



        //     if (navigator.geolocation) {



        //         navigator.geolocation.getCurrentPosition(function(position) {

        //             var geolocation = {

        //                 lat: position.coords.latitude,

        //                 lng: position.coords.longitude

        //             };

        //             var circle = new google.maps.Circle({

        //                 center: geolocation,

        //                 radius: position.coords.accuracy

        //             });

        //             autocomplete.setBounds(circle.getBounds());
        //             geocoder = new google.maps.Geocoder();
        //             geocoder.geocode({
        //                 location: geolocation
        //             }).then((response) => {
        //                 if (response.results[0]) {
        //                     $('#autocomplete').val(response.results[0].formatted_address);
        //                     for (var component in componentForm) {
        //                         document.getElementById(component).value = '';
        //                         document.getElementById(component).disabled = false;
        //                     }
        //                     for (var i = 0; i < response.results[0].address_components.length; i++) {

        //                         var addressType = response.results[0].address_components[i].types[0];

        //                         if (componentForm[addressType]) {

        //                             var val = response.results[0].address_components[i][componentForm[addressType]];
        //                             document.getElementById(addressType).value = val;
        //                         }
        //                     }
        //                     var locationn = response.results[0].geometry.location;

        //                     var latt = response.results[0].geometry.location.lat;

        //                     var lngg = response.results[0].geometry.location.lng;

        //                     $('#lat').val(latt);

        //                     $('#long').val(lngg);
        //                      map.setZoom(17);
        //                        const marker = new google.maps.Marker({
        //                         position: locationn,
        //                         map: map,
        //                         draggable: true,
        //                         });
        //                         google.maps.event.addListener(marker, 'dragend', function() {
        //                             geocoder.geocode({
        //                             latLng: marker.getPosition(),
        //                             }, function(responses) {
        //                                 if (responses && responses.length > 0) {
        //                                     marker.formatted_address = responses[0].formatted_address;
        //                                     $('#autocomplete').val(marker.formatted_address);
        //                                     for (var component in componentForm) {
        //                                         document.getElementById(component).value = '';
        //                                         document.getElementById(component).disabled =false;
        //                                     }
        //                                     for (var i = 0; i < responses[0].address_components.length; i++) {
        //                                         var addressType = responses[0].address_components[i].types[0];
        //                                         if (componentForm[addressType]) {
        //                                             var val = responses[0].address_components[i]
        //                                                 [componentForm[addressType]];
        //                                             document.getElementById(addressType).value = val;
        //                                         }
        //                                     }
        //                                     var latt = responses[0].geometry.location.lat;
        //                                     var lngg = responses[0].geometry.location.lng;
        //                                     $('#lat').val(latt);
        //                                     $('#long').val(lngg);
        //                                 } else {
        //                                     marker.formatted_address =
        //                                     'Cannot determine address at this location.';
        //                                 }
        //                                 infowindow.setContent(marker.formatted_address);
        //                                 infowindow.open(map, marker);
        //                             });
        //                             infowindow.open(map, marker);
        //                         });
        //                         infowindow.setContent(response.results[0].formatted_address);
        //                         infowindow.open(map, marker);
        //                     } else {
        //                         window.alert("No results found");
        //                     }

        //                 }).catch((e) => window.alert("Geocoder failed due to: " + e));
        //         });
        //     }
        // }
        $("#autocomplete").on("focus", function(e) {

            $('#b1').show();

        });

        var placeSearch, autocomplete;

        var componentForm = {

            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            postal_code: 'short_name',
            country: 'long_name',
            street_number: 'short_name',
            route: 'long_name',
        };

        function PropertyListinginitAutocomplete() {
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
            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();
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
                    anchorPoint: new google.maps.Point(0, -29),
                    draggable: true,
                });

            } else marker.setMap(null);
            marker.setOptions({
                position: place.geometry.location,
                map: map,
                draggable: true,

            });
            // code for drag marker and fetch location starts here

            google.maps.event.addListener(marker, 'dragend', function() {
                geocoder.geocode({
                    latLng: marker.getPosition(),
                }, function(responses) {
                    if (responses && responses.length > 0) {
                        marker.formatted_address = responses[0].formatted_address;
                        $('#autocomplete').val(marker.formatted_address);
                        for (var component in componentForm) {
                            document.getElementById(component).value = '';
                            document.getElementById(component).disabled = false;
                        }
                        for (var i = 0; i < responses[0].address_components.length; i++) {
                            var addressType = responses[0].address_components[i].types[0];
                            if (componentForm[addressType]) {
                                var val = responses[0].address_components[i][componentForm[
                                    addressType]];
                                document.getElementById(addressType).value = val;
                            }
                        }
                        var latt = responses[0].geometry.location.lat;
                        var lngg = responses[0].geometry.location.lng;
                        $('#lat').val(latt);
                        $('#long').val(lngg);
                    } else {
                        marker.formatted_address = 'Cannot determine address at this location.';
                    }
                    infowindow.setContent(marker.formatted_address);
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            });

            // Code for drag marker and fetch location ends here
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
        let inputElement = document.querySelector("#number_element");
        inputElement.addEventListener("keyup", (event) => {
            var tempNumber = inputElement.value.replace(/,/gi, "");
            var commaSeparatedNumber = tempNumber.split(/(?=(?:\d{3})+$)/).join(",");
            inputElement.value = commaSeparatedNumber;
        })
    </script>
@endsection
