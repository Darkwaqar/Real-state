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
                    <h2 class="page--title h5">Rent or Buy Decision</h2>
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
                    <h3 class="h3">Rent or Buy Decision Content</h3>
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
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[0]['content'] !!}" id="{!! $page[0]['id'] !!}">
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
                    <h6 class="h6">IS IT BETTER FOR ME TO PURCHASE A HOME Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="home_content">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[2]['content'] !!}" id="140">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2({!! $page[2]['id'] !!});">
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
                    <h6 class="h6">Banner # 1 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="banner_1_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[3]['content'] !!}" id="{!! $page[3]['id'] !!}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="{!! $page[4]['id'] !!}">{!! $page[4]['content'] !!} </textarea>
                        </div>
                    </div>

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
                    <h6 class="h6">Banner # 2 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="banner_2_contentr">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[5]['content'] !!}" id="{!! $page[5]['id'] !!}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="{!! $page[6]['id'] !!}">{!! $page[6]['content'] !!} </textarea>
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
                    <h6 class="h6">Banner # 3 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="banner_3_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[7]['content'] !!}" id="{!! $page[7]['id'] !!}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="{!! $page[8]['id'] !!}">{!! $page[8]['content'] !!} </textarea>
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


       
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Comparative Analysis To Rent Or Buy Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="rent_buy_content">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[9]['content'] !!}" id="{!! $page[9]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row plan-content">
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[10]['content'] !!}" id="{!! $page[10]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[11]['id'] !!}">{!! $page[11]['content'] !!} </textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[12]['content'] !!}" id="{!! $page[12]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[13]['id'] !!}">{!! $page[13]['content'] !!} </textarea></div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[14]['content'] !!}" id="{!! $page[14]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[15]['id'] !!}">{!! $page[15]['content'] !!} </textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[16]['content'] !!}" id="{!! $page[16]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[17]['id'] !!}">{!! $page[17]['content'] !!} </textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[18]['content'] !!}" id="{!! $page[18]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[19]['id'] !!}">{!! $page[19]['content'] !!} </textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[20]['content'] !!}" id="{!! $page[20]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[21]['id'] !!}">{!! $page[21]['content'] !!} </textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6();">
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

                <form action="#" name="faq_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[22]['content'] !!}" id="{!! $page[22]['id'] !!}">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[23]['content'] !!}" id="{!! $page[23]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[24]['id'] !!}">{!! $page[24]['content'] !!} </textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[25]['content'] !!}" id="{!! $page[25]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[26]['id'] !!}">{!! $page[26]['content'] !!} </textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[27]['content'] !!}" id="{!! $page[27]['id'] !!}">
                            <textarea name="textarea" class="form-control" id="{!! $page[28]['id'] !!}">{!! $page[28]['content'] !!} </textarea>
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
  datapass2  = (i) => {
                            var content = document.getElementById("140").value;
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
                    datapass3 = () => {
                        var result = {}
                var elements = document.forms["banner_1_content"].elements;
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
                    datapass4 = () => {
                        var result = {}
                var elements = document.forms["banner_2_contentr"].elements;
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
                    datapass5 = () => {
                        var result = {}
                var elements = document.forms["banner_3_content"].elements;
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
                    datapass6 = () => {
                        var result = {}
                var elements = document.forms["rent_buy_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
            $.ajax({
                type: "post",
                url: "{{ url('savethirteencontent') }}",
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
                var elements = document.forms["faq_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
            $.ajax({
                type: "post",
                url: "{{ url('savesevencontent') }}",
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