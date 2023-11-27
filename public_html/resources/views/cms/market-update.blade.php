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
                    <h2 class="page--title h5">Housing Market Updates</h2>
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
                    <h3 class="h3">Housing Market Updates Content</h3>
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

                <form action="#" name="banner_content">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[0]['content'] !!}" id="{!! $page[0]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[1]['content'] !!}" id="{!! $page[1]['id'] !!}">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass();">
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
                    <h6 class="h6">ARIS360 Real Estate Insights Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="insight_content">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[2]['content'] !!}" id="{!! $page[2]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[3]['content'] !!}" id="{!! $page[3]['id'] !!}">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2();">
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
                    <h6 class="h6">Real Estate Metrics Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="matrics_content">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[4]['content'] !!}" id="{!! $page[4]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Metric 01 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[5]['content'] !!}" id="{!! $page[5]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Metric 02 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[6]['content'] !!}" id="{!! $page[6]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Metric 03 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[7]['content'] !!}" id="{!! $page[7]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Metric 04 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[8]['content'] !!}" id="{!! $page[8]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Metric 05 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[9]['content'] !!}" id="{!! $page[9]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Note :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[10]['content'] !!}" id="{!! $page[10]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Impact Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[11]['content'] !!}" id="{!! $page[11]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="{!! $page[12]['id'] !!}"> {!! $page[12]['content'] !!}</textarea>
                    

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass3();">
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
                    <h6 class="h6">News And Updates On The Real Estate Market Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="market_content">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[13]['content'] !!}" id="{!! $page[13]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row plan-content">
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text" class="form-control"value="{!! $page[14]['content'] !!}" id="{!! $page[14]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[15]['id'] !!}">{!! $page[15]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[16]['content'] !!}" id="{!! $page[16]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[17]['id'] !!}">{!! $page[17]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[18]['content'] !!}" id="{!! $page[18]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[19]['id'] !!}">{!! $page[19]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[20]['content'] !!}" id="{!! $page[20]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[21]['id'] !!}">{!! $page[21]['content'] !!}</textarea>>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[22]['content'] !!}" id="{!! $page[22]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[23]['id'] !!}">{!! $page[23]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[24]['content'] !!}" id="{!! $page[24]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[25]['id'] !!}">{!! $page[25]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[26]['content'] !!}" id="{!! $page[26]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[27]['id'] !!}">{!! $page[27]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[28]['content'] !!}" id="{!! $page[28]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[29]['id'] !!}">{!! $page[29]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text"class="form-control"value="{!! $page[30]['content'] !!}" id="{!! $page[30]['id'] !!}">
                            <textarea name="textarea"class="form-control"id="{!! $page[31]['id'] !!}">{!! $page[31]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4();">
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
                    <h6 class="h6">Housing Market Focus Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="focus_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[32]['content'] !!}" id="{!! $page[32]['id'] !!}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[33]['content'] !!}" id="{!! $page[33]['id'] !!}">
                        </div>
                    </div>


                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5();">
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
       datapass = () => {
                        var result = {}
                var elements = document.forms["banner_content"].elements;
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
       datapass2 = () => {
                        var result = {}
                var elements = document.forms["insight_content"].elements;
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
       datapass3 = () => {
                        var result = {}
                var elements = document.forms["matrics_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
            $.ajax({
                type: "post",
                url: "{{ url('savninecontent') }}",
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
       datapass4 = () => {
                        var result = {}
                var elements = document.forms["market_content"].elements;
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
        
        datapass5 = () => {
                        var result = {}
                var elements = document.forms["focus_content"].elements;
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