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
                    <h2 class="page--title h5">Agent Resource Center</h2>
                    <!-- Page Title End -->
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
                    <h3 class="h3">Agent Resource Center Content</h3>
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

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[0]['content'] !!}"
                                id="473">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[1]['content'] !!}"
                                id="474">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary"
                                onclick="datapass({!! $page[0]['id'] !!},{!! $page[1]['id'] !!});">
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
                    <h6 class="h6">Stories from authorized ARIS360 Prime agents Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[2]['content'] !!}"
                                id="475">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>
                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[3]['content'] !!}"
                                id="476">
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary"
                                onclick="datapass2({!! $page[2]['id'] !!},{!! $page[3]['id'] !!});">
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
                    <h6 class="h6">Story # 1 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[4]['content'] !!}"
                                id="477">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="478">{!! $page[5]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary"
                                onclick="datapass3({!! $page[4]['id'] !!},{!! $page[5]['id'] !!});">
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
                    <h6 class="h6">Story # 2 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[6]['content'] !!}" id="479">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="480">{!! $page[7]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary"
                                onclick="datapass4({!! $page[6]['id'] !!},{!! $page[7]['id'] !!});">
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
                    <h6 class="h6">Story # 3 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[8]['content'] !!}" id="481">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="482">{!! $page[9]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary"
                                onclick="datapass5({!! $page[8]['id'] !!},{!! $page[9]['id'] !!});">
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
                    <h6 class="h6">Featured Articles Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="feature">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[10]['content'] !!}" id="{!! $page[10]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row plan-content">
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[11]['content'] !!}" id="{!! $page[11]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[12]['id'] !!}">{!! $page[12]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[13]['content'] !!}" id="{!! $page[13]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[14]['id'] !!}">{!! $page[14]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[15]['content'] !!}" id="{!! $page[15]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[16]['id'] !!}">{!! $page[16]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[17]['content'] !!}" id="{!! $page[17]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[18]['id'] !!}">{!! $page[18]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[19]['content'] !!}" id="{!! $page[19]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[20]['id'] !!}">{!! $page[20]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[21]['content'] !!}" id="{!! $page[21]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[22]['id'] !!}">{!! $page[22]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[23]['content'] !!}" id="{!! $page[23]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[24]['id'] !!}">{!! $page[24]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[25]['content'] !!}" id="{!! $page[25]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[26]['id'] !!}">{!! $page[26]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"
                                class="form-control"value="{!! $page[27]['content'] !!}" id="{!! $page[27]['id'] !!}">
                            <textarea name="textarea"class="form-control" id="{!! $page[28]['id'] !!}">{!! $page[28]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary"
                                onclick="datapass6();">
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
                    <h6 class="h6">Get In Touch Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="banner_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[29]['content'] !!}" id="{!! $page[29]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[30]['content'] !!}" id="{!! $page[30]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="{!! $page[31]['id'] !!}">{!! $page[31]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7();">
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
                    <h6 class="h6">Buyer For Every Property Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="property_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[32]['content'] !!}" id="{!! $page[32]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                            value="{!! $page[33]['content'] !!}" id="{!! $page[33]['id'] !!}">
                        </div>
                    </div>


                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass8();">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>



    </section>
    <!-- Main Content End -->

    @extends('cms.layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        datapass = (id, id2) => {
            var content1 = document.getElementById("473").value;
            var content2 = document.getElementById("474").value;
            $.ajax({
                type: "post",
                url: "{{ url('savetwocontent') }}",
                data: {
                    _token: '{!! csrf_token() !!}',
                    id1: id,
                    content1: content1,
                    id2: id2,
                    content2: content2,
                },
                dataType: "json",
                beforeSend: function() {},
                success: function(response) {
                    console.log(response);
                    swal('Success Alert!', 'Content Update.', 'success');
                },
                error: function(e) {
                    console.log(e);
                }

            });
        }
        datapass2 = (id, id2) => {
            var content1 = document.getElementById("475").value;
            var content2 = document.getElementById("476").value;
            $.ajax({
                type: "post",
                url: "{{ url('savetwocontent') }}",
                data: {
                    _token: '{!! csrf_token() !!}',
                    id1: id,
                    content1: content1,
                    id2: id2,
                    content2: content2,
                },
                dataType: "json",
                beforeSend: function() {},
                success: function(response) {
                    console.log(response);
                    swal('Success Alert!', 'Content Update.', 'success');
                },
                error: function(e) {
                    console.log(e);
                }

            });
        }
        datapass3 = (id, id2) => {
            var content1 = document.getElementById("477").value;
            var content2 = document.getElementById("478").value;
            $.ajax({
                type: "post",
                url: "{{ url('savetwocontent') }}",
                data: {
                    _token: '{!! csrf_token() !!}',
                    id1: id,
                    content1: content1,
                    id2: id2,
                    content2: content2,
                },
                dataType: "json",
                beforeSend: function() {},
                success: function(response) {
                    console.log(response);
                    swal('Success Alert!', 'Content Update.', 'success');
                },
                error: function(e) {
                    console.log(e);
                }

            });
        }
        datapass4 = (id, id2) => {
            var content1 = document.getElementById("479").value;
            var content2 = document.getElementById("480").value;
            $.ajax({
                type: "post",
                url: "{{ url('savetwocontent') }}",
                data: {
                    _token: '{!! csrf_token() !!}',
                    id1: id,
                    content1: content1,
                    id2: id2,
                    content2: content2,
                },
                dataType: "json",
                beforeSend: function() {},
                success: function(response) {
                    console.log(response);
                    swal('Success Alert!', 'Content Update.', 'success');
                },
                error: function(e) {
                    console.log(e);
                }

            });
        }
        datapass5 = (id, id2) => {
            var content1 = document.getElementById("481").value;
            var content2 = document.getElementById("482").value;
            $.ajax({
                type: "post",
                url: "{{ url('savetwocontent') }}",
                data: {
                    _token: '{!! csrf_token() !!}',
                    id1: id,
                    content1: content1,
                    id2: id2,
                    content2: content2,
                },
                dataType: "json",
                beforeSend: function() {},
                success: function(response) {
                    console.log(response);
                    swal('Success Alert!', 'Content Update.', 'success');
                },
                error: function(e) {
                    console.log(e);
                }

            });
        }
        datapass6 = () => {
                var result = {}
                var elements = document.forms["feature"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
         
                $.ajax({
                    type: "post",
                    url: "{{ url('savenineteencontent') }}",
                    data: {
                        _token: '{!! csrf_token() !!}',
                       ...result
                    },
                    dataType: "json",
                    beforeSend: function() {},
                    success: function(response) {
                        console.log(response);
                        swal('Success Alert!', 'Content Update.', 'success');
                    },
                    error: function(e) {
                        console.log(e);
                    }

                });
            }
            datapass7 = () => {
                var result = {}
                var elements = document.forms["banner_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
                             $.ajax({
                        type: "post",
                        url: "{{ url('savethreecontent') }}",
                        data: {
                            _token: '{!! csrf_token() !!}',
                            ...result
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
                   
                    datapass8 = (id, id2) => {
                        var result = {}
                var elements = document.forms["property_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
            $.ajax({
                type: "post",
                url: "{{ url('savetwocontent') }}",
                data: {
                    _token: '{!! csrf_token() !!}',
                    ...result
                },
                dataType: "json",
                beforeSend: function() {},
                success: function(response) {
                    console.log(response);
                    swal('Success Alert!', 'Content Update.', 'success');
                },
                error: function(e) {
                    console.log(e);
                }

            });
        }  
       
    </script>
