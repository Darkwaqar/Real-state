@php
    $metaTitle = 'List Your Washington Property | Washington Property Listing';
    $metaDescription = "List your Washington property on our online platform.
     Get your Washington property listing seen by a wide audience, and connect with potential
      buyers or renters easily and efficiently.";
@endphp
@extends('properties.layouts.main')

<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
</head>
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

    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                $("#exampleModalsubmit").modal('show');
            });
        </script>
        <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                        <form action="{{ route('storeProperty') }}" method="post" enctype="multipart/form-data">
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
                                            <label> For rent or sale <span class="text-danger">*</span> </label>
                                            <div class="select-box">
                                                <select class="wide" name="rent">
                                                    @if (isset($property['prprtyRentOrsale']) && $property['prprtyRentOrsale'] == 'Sale')
                                                        <option value="{{ $property['prprtyRentOrsale'] }}">
                                                            {{ $property['prprtyRentOrsale'] }} </option>
                                                        <option value="Rent"> Rent </option>
                                                    @elseif (isset($property['prprtyRentOrsale']) && $property['prprtyRentOrsale'] == 'Rent')
                                                        <option value="{{ $property['prprtyRentOrsale'] }}">
                                                            {{ $property['prprtyRentOrsale'] }} </option>
                                                        <option value="Sale"> Sale </option>
                                                    @else
                                                        <option value="Sale"> Sale </option>
                                                        <option value="Rent"> Rent </option>
                                                    @endif
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
                                                    @forelse($Structure as $hometype)
                                                        <option value="{{ $hometype['id'] }}"
                                                            {{ in_array($hometype['id'], $property->StructureType->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                            {{ $hometype->StructureTypeName }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="field-input">
                                            <label> Property Status <span class="text-danger">*</span> </label>
                                            <div class="select-box">
                                                <select class="wide" name="status">
                                                    @php
                                                        $propertyTypes = propertiesStatus();
                                                    @endphp
                                                    @if ($property['PublishStatus'])
                                                        <option value="{{ $property['PublishStatus'] }}">
                                                            {{ $property['PublishStatus'] }}</option>
                                                    @endif
                                                    @forelse ($propertyTypes as $value)
                                                        @if ($value['PublishStatus'] != $property['PublishStatus'])
                                                            <option value="{{ $value['PublishStatus'] }}">
                                                                {{ $value['PublishStatus'] }}</option>
                                                        @endif
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
                                                value="{{ isset($property['propertyDetail']['PropertySubType']) ? $property['propertyDetail']['PropertySubType'] : '' }}"
                                                class="form-control" id="PropertySubType">
                                            <input name="propertyId" type="hidden" value="{{ $property['id'] }}">
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
                                                value="{{ isset($property['PropetySellPrice']) ? $property['PropetySellPrice'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['HOAdues']) ? $property['propertyDetail']['HOAdues'] : '' }}"
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
                                                value="{{ isset($property['Bedrooms']) ? $property['Bedrooms'] : '' }}"
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
                                                value="{{ isset($property['BathroomsFull']) ? $property['BathroomsFull'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['BathroomsOneQuarter']) ? $property['propertyDetail']['BathroomsOneQuarter'] : '' }}"
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
                                                value="{{ isset($property['BathroomsHalf']) ? $property['BathroomsHalf'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['BathroomsThreeQuarter']) ? $property['propertyDetail']['BathroomsThreeQuarter'] : '' }}"
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
                                                value="{{ isset($property['PropertyArea']) ? $property['PropertyArea'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['LotSizeSquareFeet']) ? $property['propertyDetail']['LotSizeSquareFeet'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['YearBuilt']) ? $property['propertyDetail']['YearBuilt'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['TaxYear']) ? $property['propertyDetail']['TaxYear'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['TaxAnnualAmount']) ? $property['propertyDetail']['TaxAnnualAmount'] : '' }}"
                                                class="form-control wizard-required" id="TaxAnnualAmount">
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
                                                value="{{ isset($property['propertyDetail']['YearBuiltEffective']) ? $property['propertyDetail']['YearBuiltEffective'] : '' }}"
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
                                                value="{{ isset($property['propertyDetail']['TotalRooms']) ? $property['propertyDetail']['TotalRooms'] : '' }}"
                                                class="form-control wizard-required" id="TotalRooms">
                                            <label for="TotalRooms" class="wizard-form-text-label">Rooms*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group ">
                                            <input type="text" name="VirtualTourURL"
                                                {{ isset($property['propertyDetail']['VirtualTourURLUnbranded']) ? $property['propertyDetail']['VirtualTourURLUnbranded'] : '' }}
                                                class="form-control" id="VirtualTourURL">
                                            <label for="VirtualTourURL" class="wizard-form-text-label">Virtual Tour
                                                Link</label>
                                            {{-- <div class="wizard-form-error"></div> --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group ">
                                            <textarea type="text" name="description" class="form-control wizard-required" id="description">{{ isset($property['PropertyDescription']) ? $property['PropertyDescription'] : '' }}</textarea>
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
                                                        <div class="upload__img-wrap">
                                                            @foreach ($property['propertyMedia'] as $key => $image)
                                                                <div class="old-photo">
                                                                    <div class="upload__img-box">
                                                                        <div class="upload_image_div"
                                                                            style="background-image: url({{ $image['s3buckettempurl'] }})"
                                                                            data-number="{{ $key }}"
                                                                            data-file="{{ $image['s3buckettempurl'] }}"
                                                                            class="img-bg">
                                                                            <div class="upload__img-close">
                                                                                <i class="fas fa-times text-white"
                                                                                    style="color: white;"></i>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="existing_photos[]"
                                                                            value="{{ $image['id'] }}">
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group clearfix">
                                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
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
                                            <p class="mt-2 mb-2">APPLIANCES <span class="text-danger">*</span></p>
                                            @foreach ($appliances as $key => $appliance)
                                                @php
                                                    $selected = in_array($appliance['id'], $property['appliances']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="appliance[]" type="checkbox"
                                                            id="appliances_{{ $key }}"
                                                            value="{{ $appliance['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="appliances_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $appliance->ApplianceIcon) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $appliance->ApplianceSelectedIcon) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $appliance->ApplianceName }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details APPLIANCES_details_radio clearfix">
                                            <p class="mt-2 mb-2">BASEMENT <span class="text-danger">*</span></p>
                                            @foreach ($basement as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['basement']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="basement[]" type="checkbox"
                                                            id="basement_{{ $key }}"
                                                            value="{{ $value['id'] }}" {{ $selected ? 'checked' : '' }}>
                                                        <label for="basement_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['BasementIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['BasementSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['BasementName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">FLOOR COVERING <span class="text-danger">*</span></p>
                                            @foreach ($floor as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['propertyFlooring']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="floor[]" type="checkbox"
                                                            id="floor_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="floor_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['FloringeIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['FloringSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['FloringName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">ROOMS <span class="text-danger">*</span></p>

                                            @foreach ($Rooms as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['featuredRoom']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="PropertyRooms[]" type="checkbox"
                                                            id="room_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="room_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['RoomIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['RoomSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['RoomName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">INDOOR FEATURES <span class="text-danger">*</span> </p>
                                            @foreach ($Interior as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['Interior']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="interior[]" type="checkbox"
                                                            id="Interior_{{ $key }}"
                                                            value="{{ $value['id'] }}" {{ $selected ? 'checked' : '' }}>
                                                        <label for="Interior_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['InteriorFeatureIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['InteriorFeatureSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['InteriorFeatureName'] }}
                                                        </label>
                                                    </div>
                                                </li>
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
                                            <p class="mt-2 mb-2">BUILDING AMENITIES <span class="text-danger">*</span></p>
                                            @foreach ($Community as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['CommunityFeatures']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="community[]" type="checkbox"
                                                            id="com_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="com_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['CommunityFeatureIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['CommunityFeatureSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['CommunityFeatureName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details APPLIANCES_details_radio clearfix">
                                            <p class="mt-2 mb-2">ARCHITECTURAL STYLE <span class="text-danger">*</span>
                                            </p>

                                            @foreach ($archi as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['ArchitecturalStyle']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="ArchitecturalStyle[]" type="checkbox"
                                                            id="archi_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="archi_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['ArchitecturalIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['ArchitecturalSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['ArchitecturalName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">Exterior <span class="text-danger">*</span></p>
                                            @foreach ($Exterior as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['ExteriorFeaturs']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="exteriorFeatures[]" type="checkbox"
                                                            id="exte_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="exte_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['ExterFeatureIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['ExterFeatureSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['ExterFeatureName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">Outdoor Amenities <span class="text-danger">*</span></p>
                                            @foreach ($outDoor as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['outdoorAmenities']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="outDoor[]" type="checkbox"
                                                            id="outdoor_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="outdoor_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['OutdooramenityIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['OutdooramenitySelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['OutdooramenityName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="other-option APPLIANCES_details clearfix">
                                            <p class="mt-2 mb-2">Parking <span class="text-danger">*</span></p>
                                            @foreach ($parking as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['ParkingFeature']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="parking[]" type="checkbox"
                                                            id="parking_{{ $key }}"
                                                            value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="parking_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['ParkingFeatureIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['ParkingFeatureSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['ParkingFeatureName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>

                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Roof <span class="text-danger">*</span></p>
                                            @foreach ($roof as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['PropertyRoof']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="roof[]" type="checkbox"
                                                            id="roof_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="roof_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['RoofIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['RoofSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['RoofName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>

                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">View <span class="text-danger">*</span></p>
                                            @foreach ($view as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['PropertyView']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="propertyview[]" type="checkbox"
                                                            id="view_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="view_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['ProperyViewIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['ProperyViewSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['ProperyViewName'] }}
                                                        </label>
                                                    </div>
                                                </li>
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

                                            <p class="mt-2 mb-2">Cooling Type <span class="text-danger">*</span></p>
                                            @foreach ($cooling as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['coolingTypes']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="propertycooling[]" type="checkbox"
                                                            id="cooling_{{ $key }}"
                                                            value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="cooling_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['CoolingTypeIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['CoolingTypeSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['CoolingTypeName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>



                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Heating Type <span class="text-danger">*</span></p>
                                            @foreach ($heating as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['heatingTypes']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="propertyheating[]" type="checkbox"
                                                            id="heating_{{ $key }}"
                                                            value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="heating_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['CoolingTypeIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['CoolingTypeSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['HeatingTypeName'] }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach


                                        </ul>



                                        <ul class="other-option APPLIANCES_details clearfix">

                                            <p class="mt-2 mb-2">Heating Fuel <span class="text-danger">*</span></p>
                                            @foreach ($fuel as $key => $value)
                                                @php
                                                    $selected = in_array($value['id'], $property['heatingFuel']->pluck('id')->toArray());
                                                @endphp
                                                <li>
                                                    <div class="radio-box">
                                                        <input name="propertyfuel[]" type="checkbox"
                                                            id="fuel_{{ $key }}" value="{{ $value['id'] }}"
                                                            {{ $selected ? 'checked' : '' }}>
                                                        <label for="fuel_{{ $key }}">
                                                            <img src="{{ asset('public/assets/images/' . $value['HeatingFuelIcon']) }}"
                                                                class="img-fluid check_icons" alt="">
                                                            <img src="{{ asset('public/assets/images/' . $value['HeatingFuelSelectedIcon']) }}"
                                                                class="img-fluid check_icons_red" alt="">
                                                            {{ $value['HeatingFuelName'] }}
                                                        </label>
                                                    </div>
                                                </li>
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
                                                    id="autocomplete"
                                                    value="{{ isset($property['PropertyAddress']) ? $property['PropertyAddress'] : '' }}">
                                                <label for="autocomplete" class="wizard-form-text-label">Address*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <a id="b1" style="display:none"><i class="fas fa-location-arrow"></i>
                                                Current Location </a>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="City" class="form-control wizard-required"
                                                    id="locality"
                                                    value="{{ isset($property['CityName']) ? $property['CityName'] : '' }}">
                                                <label for="City" class="wizard-form-text-label">City* </label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="State" class="form-control wizard-required"
                                                    id="administrative_area_level_1"
                                                    value="{{ isset($property['StateOrProvince']) ? $property['StateOrProvince'] : '' }}">
                                                <label for="administrative_area_level_1"
                                                    class="wizard-form-text-label">State / Province*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="CountyOrParish"
                                                    class="form-control wizard-required" id="country"
                                                    value="{{ isset($property['propertyDetail']['CountyOrParish']) ? $property['propertyDetail']['CountyOrParish'] : '' }}">
                                                <label for="country" class="wizard-form-text-label">County Or
                                                    Parish*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="zipCode" class="form-control wizard-required"
                                                    id="postal_code"
                                                    value="{{ isset($property['PostalCode']) ? $property['PostalCode'] : '' }}">
                                                <label for="postal_code" class="wizard-form-text-label">Postal / Zip
                                                    code*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Longitude"
                                                    class="form-control wizard-required" id="long"
                                                    value="{{ isset($property['PropertyLongitude']) ? $property['PropertyLongitude'] : '' }}">
                                                <label for="long" class="wizard-form-text-label">Longitude*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Latitude"
                                                    class="form-control wizard-required" id="lat"
                                                    value="{{ isset($property['PropertyLatitude']) ? $property['PropertyLatitude'] : '' }}">
                                                <label for="lat" class="wizard-form-text-label">Latitude*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="Street" class="form-control wizard-required"
                                                    id="street_number"
                                                    value="{{ isset($property['propertyDetail']['StreetName']) ? $property['propertyDetail']['StreetName'] : '' }}">
                                                <label for="street_number" class="wizard-form-text-label">Street*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="MLSArea" class="form-control wizard-required"
                                                    id="route"
                                                    value="{{ isset($property['propertyDetail']['MLSArea']) ? $property['propertyDetail']['MLSArea'] : '' }}">
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
                                                    value="{{ isset($property['propertyDetail']['Topography']) ? $property['propertyDetail']['Topography'] : '' }}"
                                                    class="form-control wizard-required" id="Topography">
                                                <label for="Topography" class="wizard-form-text-label">Topography*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="PowerCompany"
                                                    value="{{ isset($property['propertyDetail']['PowerCompany']) ? $property['propertyDetail']['Topography'] : '' }}"
                                                    class="form-control wizard-required" id="PowerCompany">
                                                <label for="PowerCompany" class="wizard-form-text-label">Power
                                                    Company*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="SewerCompany"
                                                    value="{{ isset($property['propertyDetail']['SewerCompany']) ? $property['propertyDetail']['SewerCompany'] : '' }}"
                                                    class="form-control wizard-required" id="SewerCompany">
                                                <label for="SewerCompany" class="wizard-form-text-label">Sewer
                                                    Company*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="HighSchoolDistrict"
                                                    value="{{ isset($property['propertyDetail']['HighSchoolDistrict']) ? $property['propertyDetail']['HighSchoolDistrict'] : '' }}"
                                                    class="form-control wizard-required" id="HighSchoolDistrict">
                                                <label for="HighSchoolDistrict" class="wizard-form-text-label">High School
                                                    District*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="highSchool"
                                                    value="{{ isset($property['propertyDetail']['HighSchool']) ? $property['propertyDetail']['HighSchool'] : '' }}"
                                                    class="form-control wizard-required" id="highSchool">
                                                <label for="highSchool" class="wizard-form-text-label">High
                                                    School*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="MiddleOrJuniorSchool"
                                                    value="{{ isset($property['propertyDetail']['MiddleOrJuniorSchool']) ? $property['propertyDetail']['MiddleOrJuniorSchool'] : '' }}"
                                                    class="form-control wizard-required" id="MiddleOrJuniorSchool">
                                                <label for="MiddleOrJuniorSchool" class="wizard-form-text-label">Middle Or
                                                    Junior School*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group ">
                                                <input type="text" name="ElementarySchool"
                                                    value="{{ isset($property['propertyDetail']['ElementarySchool']) ? $property['propertyDetail']['ElementarySchool'] : '' }}"
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

                $('.upload__inputfile').on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).data('max_length');
                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;

                    filesArr.forEach(function(f, index) {
                        if (!f.type.match('image.*')) {
                            console.log('File is not an image:', f);
                            return;
                        }

                        if (imgArray.length >= maxLength) {
                            console.log('Maximum number of images reached:', maxLength);
                            return false;
                        } else {
                            imgArray.push(f);
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div class='upload_image_div' style='background-image: url(" +
                                    e.target.result + ")' data-number='" + iterator +
                                    "' data-file='" + f.name +
                                    "' class='img-bg'><div class='upload__img-close'><i class='fas fa-times text-white' style='color: white;'></i></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            };
                            reader.readAsDataURL(f);
                        }
                    });
                });

                $(document).on('click', '.upload__img-close', function(e) {
                    var file = $(this).parent().data('file');
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



                    geocoder.geocode({

                            location: geolocation

                        })

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

                                        var val = response.results[0].address_components[i][componentForm[

                                            addressType]];

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

                                    draggable: true,

                                });



                                // code for drag marker and fetch location starts here

                                google.maps.event.addListener(marker, 'dragend', function() {



                                    geocoder.geocode({

                                        latLng: marker.getPosition(),

                                    }, function(responses) {

                                        if (responses && responses.length > 0) {

                                            marker.formatted_address = responses[0]
                                                .formatted_address;

                                            $('#autocomplete').val(marker.formatted_address);

                                            for (var component in componentForm) {

                                                document.getElementById(component).value = '';

                                                document.getElementById(component).disabled =
                                                    false;

                                            }

                                            for (var i = 0; i < responses[0].address_components
                                                .length; i++) {

                                                var addressType = responses[0]
                                                    .address_components[i].types[0];

                                                if (componentForm[addressType]) {

                                                    var val = responses[0].address_components[i]
                                                        [componentForm[

                                                            addressType]];

                                                    document.getElementById(addressType).value =
                                                        val;

                                                }

                                            }



                                            var latt = responses[0].geometry.location.lat;

                                            var lngg = responses[0].geometry.location.lng;

                                            $('#lat').val(latt);

                                            $('#long').val(lngg);



                                        } else {

                                            marker.formatted_address =
                                                'Cannot determine address at this location.';

                                        }

                                        infowindow.setContent(marker.formatted_address);

                                        infowindow.open(map, marker);

                                    });

                                    infowindow.open(map, marker);

                                });



                                // Code for drag marker and fetch location ends here



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
        $(document).ready(function() {
            var existingPhotoIds = [];

            $('input[name="existing_photos[]"]').each(function() {
                existingPhotoIds.push($(this).val());
            });

            $('.upload__img-close').click(function() {
                var photoId = $(this).closest('.upload__img-box').find('input[name="existing_photos[]"]')
                    .val();
                var index = existingPhotoIds.indexOf(photoId);
                if (index > -1) {
                    existingPhotoIds.splice(index, 1);
                }
                $(this).closest('.old-photo').remove();
            });


        });
        let inputElement = document.querySelector("#number_element");
        inputElement.addEventListener("keyup", (event) => {
            var tempNumber = inputElement.value.replace(/,/gi, "");
            var commaSeparatedNumber = tempNumber.split(/(?=(?:\d{3})+$)/).join(",");
            inputElement.value = commaSeparatedNumber;
        })
    </script>
@endsection
