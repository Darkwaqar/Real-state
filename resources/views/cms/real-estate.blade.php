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
                    <h2 class="page--title h5">Become An ARIS360 Prime Agent</h2>
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
                    <h3 class="h3">Become An ARIS360 Prime Agent Content</h3>
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
                                value="{!!$page[0]['content']!!}" id="442">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[1]['content']!!}" id="443">
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
                    <h6 class="h6">Real Estate Industry Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!!$page[2]['content']!!}" id="444">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>
                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!!$page[3]['content']!!}" id="445">
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
                    <h6 class="h6">ARIS360 Agents Preferred Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[4]['content']!!}" id="446">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitile :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!!$page[5]['content']!!}" id="447">
                        </div>
                    </div>
                    <div class="form-group row plan-content">
                        <div class="col-md-4 mb-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[6]['content']!!}" id="448">
                                <textarea name="textarea"class="form-control" id="449">{!!$page[7]['content']!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[8]['content']!!}" id="500">
                            <textarea name="textarea"class="form-control" id="501">{!!$page[9]['content']!!}</textarea></div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[10]['content']!!}" id="502">
                            <textarea name="textarea"class="form-control" id="503">{!!$page[11]['content']!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[12]['content']!!}" id="504">
                                <textarea name="textarea"class="form-control" id="505">{!!$page[13]['content']!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[14]['content']!!}" id="506">
                            <textarea name="textarea"class="form-control" id="507">{!!$page[15]['content']!!}</textarea></div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[16]['content']!!}" id="508">
                            <textarea name="textarea"class="form-control" id="509">{!!$page[17]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass3({!!$page[4]['id']!!},{!!$page[5]['id']!!},{!!$page[6]['id']!!},{!!$page[7]['id']!!},{!!$page[8]['id']!!},{!!$page[9]['id']!!},{!!$page[10]['id']!!},{!!$page[11]['id']!!},{!!$page[12]['id']!!},{!!$page[13]['id']!!},{!!$page[14]['id']!!},{!!$page[15]['id']!!},{!!$page[16]['id']!!},{!!$page[17]['id']!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        <div class="panel">
            <div class="records--header">
                <div class="title">
                    <h3 class="h3">Read Real Stories From Our ARIS360 Agent Content</h3>
                </div>
            </div>
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
                            <input type="text" name="text" class="form-control" value="{!!$page[19]['content']!!}" id="600">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="601">{!!$page[20]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({!!$page[19]['id']!!},{!!$page[20]['id']!!});">
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
                            <input type="text" name="text" class="form-control" value="{!!$page[21]['content']!!}" id="602">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="603">{!!$page[22]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5({!!$page[21]['id']!!},{!!$page[22]['id']!!});">
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
                            <input type="text" name="text" class="form-control" value="{!!$page[23]['content']!!}" id="604">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="605">{!!$page[24]['content']!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6({!!$page[23]['id']!!},{!!$page[24]['id']!!});">
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
                            <input type="text" name="text" class="form-control"value="{!!$page[25]['content']!!}" id="606">
                                <textarea name="textarea"class="form-control" id="607">{!!$page[26]['content']!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[27]['content']!!}" id="608">
                            <textarea name="textarea"class="form-control" id="609">{!!$page[28]['content']!!}</textarea></div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"value="{!!$page[29]['content']!!}" id="610">
                            <textarea name="textarea"class="form-control" id="611">{!!$page[30]['content']!!}</textarea></div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7({!!$page[25]['id']!!},{!!$page[26]['id']!!},{!!$page[27]['id']!!},{!!$page[28]['id']!!},{!!$page[29]['id']!!},{!!$page[30]['id']!!});">
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
                            var content1 = document.getElementById("442").value;
                            var content2 = document.getElementById("443").value;
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
                            var content1 = document.getElementById("444").value;
                            var content2 = document.getElementById("445").value;
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
                    datapass3 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10,id11,id12,id13,id14) => {
                            var content1 = document.getElementById("446").value;
                            var content2 = document.getElementById("447").value;
                            var content3 = document.getElementById("448").value;
                            var content4 = document.getElementById("449").value;
                            var content5 = document.getElementById("500").value;
                            var content6 = document.getElementById("501").value;
                            var content7 = document.getElementById("502").value;
                            var content8 = document.getElementById("503").value;
                            var content9 = document.getElementById("504").value;
                            var content10 = document.getElementById("505").value;
                            var content11 = document.getElementById("506").value;
                            var content12 = document.getElementById("507").value;
                            var content13 = document.getElementById("508").value;
                            var content14 = document.getElementById("509").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savefourteencontent') }}",
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
                            id11:id11,
                            content11: content11,
                            id12:id12,
                            content12: content12,
                            id13:id13,
                            content13: content13,
                            id14:id14,
                            content14: content14,
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
                            var content1 = document.getElementById("600").value;
                            var content2 = document.getElementById("601").value;
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
                            var content1 = document.getElementById("602").value;
                            var content2 = document.getElementById("603").value;
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
                            var content1 = document.getElementById("604").value;
                            var content2 = document.getElementById("605").value;
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
                    datapass7 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("606").value;
                            var content2 = document.getElementById("607").value;
                            var content3 = document.getElementById("608").value;
                            var content4 = document.getElementById("609").value;
                            var content5 = document.getElementById("610").value;
                            var content6 = document.getElementById("611").value;
                           
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