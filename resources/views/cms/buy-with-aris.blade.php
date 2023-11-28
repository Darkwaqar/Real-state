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
                    <h2 class="page--title h5">Buy With ARIS360</h2>
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
                    <h3 class="h3">Buy With ARIS360 Content</h3>
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

                @if(isset( $page[0]['content']))
                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[0]['content']!!}" id="banner_title">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass({{$page[0]['id']}});">
                        </div>
                    </div>
                </form>
                @endif


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Real Estate Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                @if(isset( $page[0]['content']))
                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[1]['content']!!}" id = "real_state_title">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2({{$page[1]['id']}});">
                        </div>
                    </div>
                </form>
                @endif


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">
            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Services For Buyers Content</h6>
                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{{$page[2]['content']}}" id="reowned_title">
                        </div>
                    </div>
                    @if(isset( $page[0]['content']))
                    <div class="form-group row plan-content">

                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{{$page[3]['content']}}" id="reowned_title_2">
                                    <?php
                                    // $content = $page[2]['content'];
                                    // $breaks = array("<br />","<br>","<br/>");  
                                    // $text = str_ireplace($breaks, "\r\n", $content);  
                                    ?>  
                            <textarea name="textarea"
                                class="form-control" id="reowned_content_2">{{$page[4]['content']}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{{$page[5]['content']}}" id="reowned_title_3">
                            <textarea name="textarea"
                                class="form-control" id="reowned_content_3">{{$page[6]['content']}}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{{$page[7]['content']}}" id="reowned_title_4">
                            <textarea name="textarea"
                                class="form-control" id="reowned_content_4">{{$page[8]['content']}}</textarea>
                        </div>
                    </div>
                    @endif

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass3({{$page[2]['id']}},{{$page[3]['id']}},{{$page[4]['id']}},{{$page[5]['id']}},{{$page[6]['id']}},{{$page[7]['id']}},{{$page[8]['id']}});">
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
                    <h6 class="h6">Get In Touch Form Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                @if(isset( $page[0]['content']))
                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{{$page[9]['content']}}" id="10">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{{$page[10]['content']}}" id="11">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="12">{{$page[11]['content']}}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({{$page[9]['id']}},{{$page[10]['id']}},{{$page[11]['id']}});">
                        </div>
                    </div>
                </form>
                @endif


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Grow With ARIS360 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                @if(isset( $page[0]['content']))
                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{{$page[12]['content']}}" id="13">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{{$page[13]['content']}}" id="14">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{{$page[14]['content']}}" id="15">
                            <textarea name="textarea"
                                class="form-control" id="16">{{$page[15]['content']}}</textarea>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{{$page[16]['content']}}" id="17">
                            <textarea name="textarea"
                                class="form-control" id="18">{{$page[17]['content']}}</textarea>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{{$page[18]['content']}}" id="19">
                            <textarea name="textarea"
                                class="form-control" id="20">{{$page[19]['content']}}</textarea>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{{$page[20]['content']}}" id="21">
                            <textarea name="textarea"
                                class="form-control" id="22">{{$page[21]['content']}}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5({{$page[12]['id']}},{{$page[13]['id']}},{{$page[14]['id']}},{{$page[15]['id']}},{{$page[16]['id']}},{{$page[17]['id']}},{{$page[18]['id']}},{{$page[19]['id']}},{{$page[20]['id']}},{{$page[21]['id']}});">
                        </div>
                    </div>
                </form>
                @endif


            </div>
            <!-- Edit Product End -->
        </div>
        @if(isset( $page[0]['content']))
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Buyer For Every Property Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{{$page[22]['content']}}" id="23">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <span class="label-text col-md-1 col-form-label">Short Description :</span>
                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                    value="{{$page[23]['content']}}" id="24">
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6({{$page[22]['id']}},{{$page[23]['id']}});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>
        @endif

        @if(isset( $page[0]['content']))
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Instant Tour Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{{$page[24]['content']}}" id="25">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                            value="{{$page[25]['content']}}" id="26">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <span class="label-text col-md-1 col-form-label">Short Description :</span>
                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                            value="{{$page[26]['content']}}" id="27">
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7({{$page[24]['id']}},{{$page[25]['id']}},{{$page[26]['id']}});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>
        @endif

        @if(isset( $page[0]['content']))
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">UnBeatable Deals Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"  value="{{$page[27]['content']}}" id="28">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>
                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                            value="{{$page[28]['content']}}" id="29">
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass8({{$page[27]['id']}},{{$page[28]['id']}});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>
        @endif
    </section>
    <!-- Main Content End -->
@extends('cms.layouts.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
                    datapass = (i) => {
                            var content = document.getElementById("banner_title").value;
                        $.ajax({
                        type: "post",
                        url: "{{ url('savecontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id:i,
                            content: content
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

                    datapass2 = (i) => {
                            var content = document.getElementById("real_state_title").value;
                        $.ajax({
                        type: "post",
                        url: "{{ url('savecontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id:i,
                            content: content
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

                    datapass3 = (id,id2,id3,id4,id5,id6,id7) => {
                            var content1 = document.getElementById("reowned_title").value;
                            var content2 = document.getElementById("reowned_title_2").value;
                            var content3 = document.getElementById("reowned_content_2").value;
                            var content4 = document.getElementById("reowned_title_3").value;
                            var content5 = document.getElementById("reowned_content_3").value;
                            var content6 = document.getElementById("reowned_title_4").value;
                            var content7 = document.getElementById("reowned_content_4").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savesevencontent') }}",
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
                            content6: content6,
                            id7:id7,
                            content7: content7
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

                    datapass4 = (id,id2,id3) => {
                            var content1 = document.getElementById("10").value;
                            var content2 = document.getElementById("11").value;
                            var content3 = document.getElementById("12").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savethreecontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                            id3:id3,
                            content3: content3,
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

                    datapass5 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10) => {
                            var content1 = document.getElementById("13").value;
                            var content2 = document.getElementById("14").value;
                            var content3 = document.getElementById("15").value;
                            var content4 = document.getElementById("16").value;
                            var content5 = document.getElementById("17").value;
                            var content6 = document.getElementById("18").value;
                            var content7 = document.getElementById("19").value;
                            var content8 = document.getElementById("20").value;
                            var content9 = document.getElementById("21").value;
                            var content10 = document.getElementById("22").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetencontent') }}",
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
                            content6: content6,
                            id7:id7,
                            content7: content7,
                            id8:id8,
                            content8: content8,
                            id9:id9,
                            content9: content9,
                            id10:id10,
                            content10: content10,
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
                            var content1 = document.getElementById("23").value;
                            var content2 = document.getElementById("24").value;
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

                    datapass7 = (id,id2,id3) => {
                            var content1 = document.getElementById("25").value;
                            var content2 = document.getElementById("26").value;
                            var content3 = document.getElementById("27").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savethreecontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id1:id,
                            content1: content1,
                            id2:id2,
                            content2: content2,
                            id3:id3,
                            content3: content3
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
                            var content1 = document.getElementById("28").value;
                            var content2 = document.getElementById("29").value;
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
        </script>