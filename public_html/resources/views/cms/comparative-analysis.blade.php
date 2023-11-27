@extends('cms.layouts.header')
@extends('cms.layouts.navbar')
<!-- Main Container Start -->
<!-- Main Container Start -->
<main class="main--container" style="display:none">
    <!-- Page Header Start -->
    <section class="page--header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Title Start -->
                    <h2 class="page--title h5">Comparative Analysis</h2>
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
                    <h3 class="h3">Comparative Analysis Content</h3>
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
                            <input type="text" name="text" class="form-control" value="{!!$page[0]['content']!!}" id="213">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[1]['content']!!}" id="214">
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
                    <h6 class="h6">Way Froward Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[2]['content']!!}" id="215">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2({!!$page[2]['id']!!});">
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
                    <h6 class="h6">Way 1 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[3]['content']!!}" id="216">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 1 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[4]['content']!!}" id="217">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 2 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[5]['content']!!}" id="218">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 3 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[6]['content']!!}" id="219">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 4 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[7]['content']!!}" id="220">
                        </div>  
                    </div>
                    

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass3({!!$page[3]['id']!!},{!!$page[4]['id']!!},{!!$page[5]['id']!!},{!!$page[6]['id']!!},{!!$page[7]['id']!!})">
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
                    <h6 class="h6">Way 2 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[8]['content']!!}" id="221">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 1 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[9]['content']!!}" id="222">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 2 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[10]['content']!!}" id="223">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 3 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[11]['content']!!}" id="224">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">list line 4 :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[12]['content']!!}" id="225">
                        </div>  
                    </div>
                    

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({!!$page[8]['id']!!},{!!$page[9]['id']!!},{!!$page[10]['id']!!},{!!$page[11]['id']!!},{!!$page[12]['id']!!})">
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
                    <h6 class="h6">Find An Agent Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[13]['content']!!}" id="226">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[14]['content']!!}" id="227">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapas5({!!$page[13]['id']!!},{!!$page[14]['id']!!});">
                        </div>
                    </div>
                </form>


            </div>
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">List Your Property Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[15]['content']!!}" id="228">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[16]['content']!!}" id="229">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapas6({!!$page[15]['id']!!},{!!$page[16]['id']!!});">
                        </div>
                    </div>
                </form>


            </div>
        </div>
        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Value360 Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[17]['content']!!}" id="230">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[18]['content']!!}" id="231">
                        </div>
                    </div>
                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7({!!$page[17]['id']!!},{!!$page[18]['id']!!});">
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
                                value="{!!$page[32]['content']!!}" id="232">
                            <textarea name="textarea"
                                class="form-control" id="233">{!!$page[33]['content']!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[34]['content']!!}" id="234">
                            <textarea name="textarea"
                                class="form-control" id="235">{!!$page[35]['content']!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!!$page[36]['content']!!}" id="236">
                            <textarea name="textarea"
                                class="form-control" id="237">{!!$page[37]['content']!!}</textarea>
                        </div>
                    </div>
                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass8({!!$page[32]['id']!!},{!!$page[33]['id']!!},{!!$page[34]['id']!!},{!!$page[35]['id']!!},{!!$page[36]['id']!!},{!!$page[37]['id']!!});">
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
        var content1 = document.getElementById("213").value;
        var content2 = document.getElementById("214").value;
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


datapass2 = (i) => {
                            var content = document.getElementById("215").value;
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

                    datapass3 = (id,id2,id3,id4,id5) => {
                            var content1 = document.getElementById("216").value;
                            var content2 = document.getElementById("217").value;
                            var content3 = document.getElementById("218").value;
                            var content4 = document.getElementById("219").value;
                            var content5 = document.getElementById("220").value;
                           
                             $.ajax({
                        type: "post",
                        url: "{{ url('savefivecontent') }}",
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
                    datapass4 = (id,id2,id3,id4,id5) => {
                            var content1 = document.getElementById("221").value;
                            var content2 = document.getElementById("222").value;
                            var content3 = document.getElementById("223").value;
                            var content4 = document.getElementById("224").value;
                            var content5 = document.getElementById("225").value;
                           
                             $.ajax({
                        type: "post",
                        url: "{{ url('savefivecontent') }}",
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
                    
                    datapas5 = (id,id2) => {
        var content1 = document.getElementById("226").value;
        var content2 = document.getElementById("227").value;
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
datapas6 = (id,id2) => {
        var content1 = document.getElementById("228").value;
        var content2 = document.getElementById("229").value;
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
        var content1 = document.getElementById("230").value;
        var content2 = document.getElementById("231").value;
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


datapass8 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("232").value;
                            var content2 = document.getElementById("233").value;
                            var content3 = document.getElementById("234").value;
                            var content4 = document.getElementById("235").value;
                            var content5 = document.getElementById("236").value;
                            var content6 = document.getElementById("237").value;
                           
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