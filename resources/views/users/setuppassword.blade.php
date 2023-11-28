@extends('properties.layouts.main')

@section('content')
        <section class="agentInfo-wrapper myprofile-section sec-pad">
            <div class="container-fluid">
                <div class="tabs-box">
                    <form action="{{ url('/user/new-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="tabs-content container">
                        <div class="row">
                            <div class="col-md-12">
                                {{ getSetFlashData() }}
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-1">
                            <div class="general-information">
                                <h4>Set Your Password</h4>
                                <div class="inner-box default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Password </label>
                                                <input type="password" name="password" value="{{ old('password') }}">
                                                <input type="hidden" name="token" value="{{ $userData[0]['email_link'] }}">
                                            </div>
                                            @error('password')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="field-input">
                                                <label>Confrim Password </label>
                                                <input type="password" name="confirmPassword" value="{{ old('confirmPassword') }}">
                                            </div>
                                            @error('confirmPassword')
                                            <span class="red">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="theme-btn btn-one btn_next1">Set Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- myprofile-section end -->


        <!-- Sell Your Home Content End's Here -->
    <script>
        $(document).ready(function () {
            // Next
            $('.btn_next1').click(function () {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next2').click(function () {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next3').click(function () {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next4').click(function () {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next5').click(function () {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
            $('.btn_next6').click(function () {
                $('.list_tab7').click();
                $('.scroll-to-target').click();

            });
            // Previous
            $('.btn_previous1').click(function () {
                $('.list_tab1').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous2').click(function () {
                $('.list_tab2').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous3').click(function () {
                $('.list_tab3').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous4').click(function () {
                $('.list_tab4').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous5').click(function () {
                $('.list_tab5').click();
                $('.scroll-to-target').click();

            });
            $('.btn_previous6').click(function () {
                $('.list_tab6').click();
                $('.scroll-to-target').click();

            });
        });
    </script>
    <script>
        $(document).ready(function (){
            var wrapper2 = $(".input_fields_wrap2");
            var add_review_button = $(".add_review_button");
            $(add_review_button).click(function (e) { //on add input button click
                    e.preventDefault();

                    $(wrapper2).append('<div class="input-group mb-1"><input placeholder="" type="text" name="mytext[]" class="form-control"></div>'); //add input box
                });
        }
    </script>

    <!-- Modal -->
<div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <p>Your form to become an agent has been submitted.</p>
            <p>Our team will get back to you!</p>
        </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>

@endsection
