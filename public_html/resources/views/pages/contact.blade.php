@extends('properties.layouts.main')

@section('content')
    <section class="contact_banner">
        <div class="container">
            <div class="contact_banner_sect">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="in-contact-page-content position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="in-faq-contact-info-wrap">
                        <div class="in-faq-contact-info-title headline pera-content">
                            <h3>Connect With Us </h3>
                            </p>
                        </div>
                        <div class="in-faq-contact-info">
                            <div class="info-item-area d-flex align-items-center">
                                <div class="inner-icon d-flex align-items-center justify-content-center">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="inner-text headline pera-content">
                                    <h4>Office Address, USA</h4>
                                    <p>10510 Northrup Way, Suite 115
                                        <br> Kirkland, WA 98033
                                    </p>
                                </div>
                            </div>
                            <div class="info-item-area d-flex align-items-center">
                                <div class="inner-icon d-flex align-items-center justify-content-center">
                                    <i class="fal fa-envelope-open-text"></i>
                                </div>
                                <div class="inner-text headline pera-content">
                                    <h4>Mail Us</h4>
                                    <p>support@aris360.com</p>
                                    <p>info@aris360.com</p>
                                </div>
                            </div>
                            <div class="info-item-area d-flex align-items-center">
                                <div class="inner-icon d-flex align-items-center justify-content-center">
                                    <i class="fal fa-phone-plus"></i>
                                </div>
                                <div class="inner-text headline pera-content">
                                    <h4>Phone Call</h4>
                                    <p>(833) 966-1976</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-1 widget reviews contact_Page">
                        <h3 class="sidebar-title">Send Us A Message</h3>
                        <form id="contactForm" action="{{ route('contactStore') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

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
                            <div class="row">
                                @if (Auth::check() && Auth::user()->id)
                                    <div class="col-12 form-group name">
                                        <input type="text" name="name" readonly value="{{ Auth::user()->first_name }}"
                                            class="form-control" placeholder="" aria-label="Full Name" required>
                                    </div>
                                    @error('name')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group email">
                                        <input type="email" name="email" readonly value="{{ Auth::user()->email }}"
                                            class="form-control" placeholder="" aria-label="Email Address" required>
                                    </div>
                                    @error('email')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group number">
                                        <input type="text" name="phone" readonly
                                            value="{{ Auth::user()->mobile_number }}" class="form-control" placeholder=""
                                            aria-label="Phone Number" required>
                                    </div>
                                    @error('phone')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group number">
                                        <input type="text" name="city" readonly value="{{ Auth::user()->city }}"
                                            class="form-control" placeholder="" aria-label="City" required>
                                    </div>
                                    @error('city')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group message">
                                        <textarea class="form-control" name="message" value="{{ old('message') ? old('message') : '' }}"
                                            placeholder="Write message" aria-label="Write message" data-gramm="false" wt-ignore-input="true" required></textarea>
                                    </div>
                                    @error('message')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                @else
                                    <div class="col-12 form-group name">
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" placeholder="Name" aria-label="Full Name" required>
                                    </div>
                                    @error('name')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group email">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" placeholder="Email Address" aria-label="Email Address"
                                            required>
                                    </div>
                                    @error('email')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group number">
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                            class="form-control" placeholder="Phone" aria-label="Phone Number" required>
                                    </div>
                                    @error('phone')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group number">
                                        <input type="text" name="city" value="{{ old('city') }}"
                                            class="form-control" placeholder="City" aria-label="City" required>
                                    </div>
                                    @error('city')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group message">
                                        <textarea cols="10" rows="10" class="form-control" name="message" value="{{ old('message') }}"
                                            placeholder="Write message" aria-label="Write message" data-gramm="false" wt-ignore-input="true" required></textarea>
                                    </div>
                                    @error('message')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="fl" id="skzmessages2"></div>
                                    </div>
                                </div>
                                <div class="send-btn">
                                    <button type="submit" class="theme-btn btn-one w-100 ml-4">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
            <div class="map_wrapper">
               
                    <div class="gmap_canvas"><iframe width="100%" height="510" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=10510 Northrup Way, Suite 115    Kirkland, WA 98033&t=&z=10&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://2yu.co">2yu</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 510px;
                                width: 100%;
                            }
                        </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 510px;
                                width: 100%;
                            }
                        </style>
                    </div>
                
            </div>
        
@endsection
