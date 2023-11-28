@extends('cms.layouts.header')
@extends('cms.layouts.navbar')
<!-- Main Container Start -->
<main class="main--container" style="display:none">
    <!-- Page Header Start -->
    <section class="page--header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Title Start -->
                    <h2 class="page--title h5">First Time Home Buyer</h2>
                    <!-- Page Title End -->

                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="ecommerce.html">Ecommerce</a></li>
                        <li class="breadcrumb-item active"><span>Edit Products</span></li>
                    </ul> -->
                </div>

            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Main Content Start -->
    <section class="main--content">
        <div class="panel">
            <!-- Records Header Start -->
            <div class="records--header">
                <div class="title">
                    <h3 class="h3">First Time Home Buyer Content</h3>
                </div>
            </div>
            <!-- Records Header End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Main Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control" value="{!! $page[0]['content'];!!}" id="73">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[1]['content'];!!}" id="74">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass({!! $page[0]['id'];!!},{!! $page[1]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Steps Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[2]['content'];!!}" id="75">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[3]['content'];!!}" id="76">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass2({!! $page[2]['id'];!!},{!! $page[3]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>


        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP ONE Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[4]['content'];!!}" id="77">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="78">{!! $page[5]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass3({!! $page[4]['id'];!!},{!! $page[5]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP TWO Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[6]['content'];!!}" id="79">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="80">{!! $page[7]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass4({!! $page[6]['id'];!!},{!! $page[7]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP THREE Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[8]['content'];!!}" id="81">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="82">{!! $page[9]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass5({!! $page[8]['id'];!!},{!! $page[9]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP FOUR Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[10]['content'];!!}" id="83">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="84">{!! $page[11]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass6({!! $page[10]['id'];!!},{!! $page[11]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP FIVE Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[12]['content'];!!}" id="85">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="86">{!! $page[13]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary "onclick="datapass7({!! $page[12]['id'];!!},{!! $page[13]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP SIX Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[14]['content'];!!}" id="87">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="88">{!! $page[15]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass8({!! $page[14]['id'];!!},{!! $page[15]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP SEVEN Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[16]['content'];!!}" id="89">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="90">{!! $page[17]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass9({!! $page[16]['id'];!!},{!! $page[17]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP EIGHT Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[18]['content'];!!}" id="91">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="92">{!! $page[19]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass10({!! $page[18]['id'];!!},{!! $page[19]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Advise Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[20]['content'];!!}" id="93">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[21]['content'];!!}" id="94">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass11({!! $page[20]['id'];!!},{!! $page[21]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Recently Sold Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[22]['content'];!!}" id="95">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[23]['content'];!!}" id="96">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass12({!! $page[22]['id'];!!},{!! $page[23]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Calculate Now Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[24]['content'];!!}" id="97">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[25]['content'];!!}" id="98">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass13({!! $page[24]['id'];!!},{!! $page[25]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Mortgage Rates Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[26]['content'];!!}" id="99">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[27]['content'];!!}" id="100">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass14({!! $page[26]['id'];!!},{!! $page[27]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Search For Homes Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[28]['content'];!!}" id="101">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[29]['content'];!!}" id="102">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass15({!! $page[28]['id'];!!},{!! $page[29]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">FAQ Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    {{-- <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="ARIS360 FAQs">
                        </div>
                    </div> --}}

                    <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[30]['content'];!!}" id="103">
                            <textarea name="textarea"
                                class="form-control" id="104">{!! $page[31]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[32]['content'];!!}" id="105">
                            <textarea name="textarea"
                                class="form-control" id="106">{!! $page[33]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[34]['content'];!!}" id="107">
                            <textarea name="textarea"
                                class="form-control" id="108">{!! $page[35]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass16({!! $page[30]['id'];!!},{!! $page[31]['id'];!!},{!! $page[32]['id'];!!},{!! $page[33]['id'];!!},{!! $page[34]['id'];!!},{!! $page[35]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>



    </section>
    @extends('cms.layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
         datapass = (id,id2) => {
                            var content1 = document.getElementById("73").value;
                            var content2 = document.getElementById("74").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }

         datapass2 = (id,id2) => {
                            var content1 = document.getElementById("75").value;
                            var content2 = document.getElementById("76").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }

         datapass3 = (id,id2) => {
                            var content1 = document.getElementById("77").value;
                            var content2 = document.getElementById("78").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }

         datapass4 = (id,id2) => {
                            var content1 = document.getElementById("79").value;
                            var content2 = document.getElementById("80").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass5 = (id,id2) => {
                            var content1 = document.getElementById("81").value;
                            var content2 = document.getElementById("82").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass6 = (id,id2) => {
                            var content1 = document.getElementById("83").value;
                            var content2 = document.getElementById("84").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass7 = (id,id2) => {
                            var content1 = document.getElementById("85").value;
                            var content2 = document.getElementById("86").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass8 = (id,id2) => {
                            var content1 = document.getElementById("87").value;
                            var content2 = document.getElementById("88").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass9 = (id,id2) => {
                            var content1 = document.getElementById("89").value;
                            var content2 = document.getElementById("90").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass10 = (id,id2) => {
                            var content1 = document.getElementById("91").value;
                            var content2 = document.getElementById("92").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass11 = (id,id2) => {
                            var content1 = document.getElementById("93").value;
                            var content2 = document.getElementById("94").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass12 = (id,id2) => {
                            var content1 = document.getElementById("95").value;
                            var content2 = document.getElementById("96").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass13 = (id,id2) => {
                            var content1 = document.getElementById("97").value;
                            var content2 = document.getElementById("98").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass14 = (id,id2) => {
                            var content1 = document.getElementById("99").value;
                            var content2 = document.getElementById("100").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass15 = (id,id2) => {
                            var content1 = document.getElementById("101").value;
                            var content2 = document.getElementById("102").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwocontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
         }
         datapass16 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("103").value;
                            var content2 = document.getElementById("104").value;
                            var content3 = document.getElementById("105").value;
                            var content4 = document.getElementById("106").value;
                            var content5 = document.getElementById("107").value;
                            var content6 = document.getElementById("108").value;
                           
                             $.ajax({
                        type: "post",
                        url: "{{ url('savesixcontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                            id3:id3,
                            content3: content3,
                            id4:id4,
                            content4: content4,
                            id5:id5,
                            content5: content5,
                            id6:id6,
                            content6: content6
                          
                        },
                        dataType: "json",
                        beforeSend: function() {},
                         success: function(response) {
                            console.log(response);
                            swal( 'Success Alert!', 'Content Update.', 'success' );
                        }, 
                        error: function(e) {
                             console.log(e);
                        }

                            });
                    }
    </script>