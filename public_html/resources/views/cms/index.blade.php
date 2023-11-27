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
                    <h2 class="page--title h5">Home</h2>
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
                <div class="title fa-shopping-bag">
                    <h3 class="h3">Home Content</h3>
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
                            <input type="text" name="text" class="form-control" value="{!! $page[0]['content'] !!}" id="140">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass({!! $page[0]['id'] !!});">
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
                    <h6 class="h6">ARIS360 Customer Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Content: </span>

                        <div class="col-md-11">
                            <textarea name="textarea"  maxlength="500"
                                class="form-control myTextarea" id="141">{!! $page[1]['content'] !!}"></textarea>

                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2({!! $page[1]['id'] !!});">
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
                    <h6 class="h6">CEO Message</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="ceo_message">
                    <div class="form-group row plan-content">
                        <div class="col-md-12">
                            <input type="text" name="text" class="form-control" value="{!! $page[2]['content'] !!}" id="{!! $page[2]['id'] !!}">
                            <textarea name="textarea"  class="form-control" id="{!! $page[3]['id'] !!}">{!! $page[3]['content'] !!}</textarea>
                            </div>
                        

                        </div>
                        <div class="row update-btn">
                            <div class="col-12 update-btn">
                                <input type="button" value="Update" class="btn btn-primary" onclick="datapass3();"/>
                            </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Next Plan Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="plan_content">
                    <div class="form-group row plan-content">
                        {{-- <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[2]['content'] !!}" id="{!! $page[2]['id'] !!}">
                            <textarea name="textarea"  maxlength="500"class="form-control" id="{!! $page[3]['id'] !!}">{!! $page[3]['content'] !!}</textarea>
                            </div> --}}
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[4]['content'] !!}" id="{!! $page[4]['id'] !!}">
                            <textarea name="textarea"  class="form-control" id="{!! $page[5]['id'] !!}">{!! $page[5]['content'] !!}</textarea>
                                
                            </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[6]['content'] !!}" id="{!! $page[6]['id'] !!}">
                            <textarea name="textarea"  class="form-control" id="{!! $page[7]['id'] !!}">{!! $page[7]['content'] !!}</textarea>
                        </div>
                    
                    <div class="col-md-4">
                        <input type="text" name="text" class="form-control" value="{!! $page[8]['content'] !!}" id="{!! $page[8]['id'] !!}">
                        <textarea name="textarea"  class="form-control" id="{!! $page[9]['id'] !!}">{!! $page[9]['content'] !!}</textarea>
                    </div>
                </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4();"/>
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
                    <h6 class="h6">Why Choose Content Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#" name="choose_content">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[12]['content'] !!}" id="{!! $page[12]['id'] !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[13]['content'] !!}" id="{!! $page[13]['id'] !!}">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[14]['content'] !!}" id="{!! $page[14]['id'] !!}">
                            <textarea name="textarea"  maxlength="500"
                                class="form-control" id="{!! $page[15]['id'] !!}">{!! $page[15]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[16]['content'] !!}" id="{!! $page[16]['id'] !!}">
                            <textarea name="textarea"  maxlength="500"
                                class="form-control" id="{!! $page[17]['id'] !!}">{!! $page[17]['content'] !!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[18]['content'] !!}" id="{!! $page[18]['id'] !!}">
                            <textarea name="textarea"  maxlength="500"
                                class="form-control" id="{!! $page[19]['id'] !!}">{!! $page[19]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5();"/>
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
                    <h6 class="h6">Buy/Sell Properties Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title: </span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[20]['content'] !!}" id="145">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6({!! $page[20]['id'] !!});"/>
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
                    <h6 class="h6">Fees Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Content: </span>

                        <div class="col-md-11">
                            <textarea name="textarea"  maxlength="500"
                            class="form-control" id="147">{!! $page[21]['content'] !!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7({!! $page[21]['id'] !!});"/>
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
        datapass = (i) => {
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
        datapass2 = (i) => {
                            var content = document.getElementById("141").value;
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
                var elements = document.forms["ceo_message"].elements;
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
                var elements = document.forms["plan_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
            $.ajax({
                type: "post",
                url: "{{ url('savesixcontent') }}",
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
                var elements = document.forms["choose_content"].elements;
                for (i = 0; i < elements.length; i++) {
                    result["id" + (i + 1)] = elements[i].id;
                    result["content" + (i + 1)] = elements[i].value;
                }
            $.ajax({
                type: "post",
                url: "{{ url('saveeightcontent') }}",
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

        datapass6 = (i) => {
                            var content = document.getElementById("145").value;
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
        datapass7 = (i) => {
                            var content = document.getElementById("147").value;
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
    </script>