<div class="schedule-box content-widget" id="schedule-tour">
    <div class="title-box">
        <h4>Schedule A Tour</h4>
    </div>
    <div class="form-inner">
        <form id="contact_form"  action="{{ route('scheduleTour') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
                @if(Auth::check())
                <div class="col-lg-6 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <i class="far fa-calendar-alt"></i>
                        <input type="hidden" name="sellerId"  value="{{  isset($Details['properties']->user_id) ? $Details['properties']->user_id : '' }}">
                        <input type="hidden" name="propertyId"  value="{{ $Details['properties']->id }}">
                        <input type="text" name="date" value="{{old('date')}}" placeholder="Tour Date"
                            id="datepicker">
                    </div>
                    @error('date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        {{-- <i class="far fa-clock"></i> --}}
                        <input type="time" name="time" value="{{old('time')}}" placeholder="Any Time">
                    </div>
                    @error('time')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <input type="text" name="name" readonly value="{{Auth::user()->first_name}}{{Auth::user()->last_name}}" required="">
                    </div>
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <input type="email" name="email" readonly value="{{Auth::user()->email}}"
                            required="">
                    </div>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <input type="tel" name="phone" readonly value="{{Auth::user()->mobile_number}}" required="">
                    </div>
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <textarea name="message" value="{{old('message') ? old('message') : "" }}"  placeholder="Your message"></textarea>
                    </div>
                    @error('message')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                @else
                <div class="col-lg-6 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <i class="far fa-calendar-alt"></i>
                        <input type="hidden" name="sellerId"  value="{{  isset($Details['properties']->user_id) ? $Details['properties']->user_id : '' }}">                        <input type="hidden" name="propertyId"  value="{{ $Details['properties']->id }}">
                        <input type="text" name="date" value="{{old('date')}}" placeholder="Tour Date"
                            id="datepicker">
                    </div>
                    @error('date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <!-- <i class="far fa-clock"></i> -->
                        <input type="time" name="time" value="{{old('time')}}" placeholder="Any Time">
                    </div>
                    @error('time')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <input type="text" name="name"  value="{{old('name')}}" placeholder="Your Name" required="">
                    </div>
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <input type="email" name="email"  value="{{old('email')}}" placeholder="Your Email"
                            required="">
                    </div>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <input type="tel" name="phone"  value="{{old('phone')}}"  placeholder="Your Phone" required="">
                    </div>
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 column">
                    <div class="form-group">
                        <textarea name="message" value="{{old('message')}}"  placeholder="Your message"></textarea>
                    </div>
                    @error('message')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-12 column">
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Submit Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>