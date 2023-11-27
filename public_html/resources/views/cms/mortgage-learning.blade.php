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
                    <h2 class="page--title h5">Mortgage Learning Center</h2>
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
                    <h3 class="h3">Mortgage Learning Center</h3>
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
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[0]['content'];!!}" id="380">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[1]['content'];!!}" id="381">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass({!! $page[0]['id'];!!},{!! $page[1]['id'];!!});">
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
                                value="{!! $page[2]['content'];!!}" id="382">
                            <textarea name="textarea"
                                class="form-control" id="383">{!! $page[3]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[4]['content'];!!}" id="384">
                            <textarea name="textarea"
                                class="form-control" id="385">{!! $page[5]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[6]['content'];!!}" id="386">
                            <textarea name="textarea"
                                class="form-control" id="387">{!! $page[7]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary " onclick="datapass2({!! $page[2]['id'];!!},{!! $page[3]['id'];!!},{!! $page[4]['id'];!!},{!! $page[5]['id'];!!},{!! $page[6]['id'];!!},{!! $page[7]['id'];!!});">
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
        var content1 = document.getElementById("380").value;
        var content2 = document.getElementById("381").value;
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


datapass2 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("382").value;
                            var content2 = document.getElementById("383").value;
                            var content3 = document.getElementById("384").value;
                            var content4 = document.getElementById("385").value;
                            var content5 = document.getElementById("386").value;
                            var content6 = document.getElementById("387").value;
                           
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