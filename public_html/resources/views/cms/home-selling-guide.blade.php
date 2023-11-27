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
                    <h2 class="page--title h5">Home Selling Guide</h2>
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
                    <h3 class="h3">Home Selling Guide Content</h3>
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
                            <input type="text" name="text" class="form-control" value="{!!$page[0]['content']!!}" id="251">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[1]['content']!!}" id="252">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass({!!$page[0]['id']!!},{!!$page[1]['id']!!});">
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
                    <h6 class="h6">Selling Steps Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>
            </div>
            <!-- Edit Product End -->
        </div>


        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">STEP 1 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[2]['content']!!}" id="253">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="254">{!!$page[3]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2({!!$page[2]['id']!!},{!!$page[3]['id']!!});">
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
                    <h6 class="h6">STEP 2 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[4]['content']!!}" id="255">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="256">{!!$page[5]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass3({!!$page[4]['id']!!},{!!$page[5]['id']!!});">
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
                    <h6 class="h6">STEP 3 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!!$page[6]['content']!!}" id="257">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="258">{!!$page[7]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({!!$page[6]['id']!!},{!!$page[7]['id']!!});">
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
                    <h6 class="h6">STEP 4 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!!$page[8]['content']!!}" id="259">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="260">{!!$page[9]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5({!!$page[8]['id']!!},{!!$page[9]['id']!!});">
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
                    <h6 class="h6">Property Sales Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[10]['content']!!}" id="261">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[11]['content']!!}" id="262">
                        </div>
                    </div>
                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6({!!$page[10]['id']!!},{!!$page[11]['id']!!});">
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
 datapass = (id,id2) => {
        var content1 = document.getElementById("251").value;
        var content2 = document.getElementById("252").value;
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
        var content1 = document.getElementById("253").value;
        var content2 = document.getElementById("254").value;
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
        var content1 = document.getElementById("255").value;
        var content2 = document.getElementById("256").value;
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
        var content1 = document.getElementById("257").value;
        var content2 = document.getElementById("258").value;
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
        var content1 = document.getElementById("259").value;
        var content2 = document.getElementById("260").value;
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
        var content1 = document.getElementById("261").value;
        var content2 = document.getElementById("262").value;
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