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
                    <h2 class="page--title h5">ARIS360 Agents</h2>
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
                    <h3 class="h3">ARIS360 Agents</h3>
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
                                value="{!! $page[0]['content'];!!}" id="398">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[1]['content'];!!}" id="399">
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
                    <h6 class="h6">Basic Info Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form class="free-consultation-form" method="POST" action="{{ route('store_property_lead') }}"
                            id="buywitharisform">

                            @csrf

                            <p class="para">Searching For Homes?</p>

                            <input id="buySearch" type="text" onkeyup="codeAddress()" name="address"
                                placeholder="Enter an address, neighborhood, city, or ZIP code" required>

                            <input type="hidden" name="city" id="locality">

                            <input type="hidden" name="state" id="administrative_area_level_1">

                            <input type="text" placeholder="Enter your name" name="name" required>

                            <input type="email" placeholder="your email address *" name="email" required>

                            <input type="text" placeholder="phone number" name="contact" required>

                            <textarea placeholder="your message" name="message" required></textarea>

                            <input type="hidden" name="property_type" value="NULL" />

                            <input type="hidden" name="lead_type" value="Buyer" />

                            <div class="btn-box mt-4 text-center">

                                <button type="submit" class="theme-btn btn-one">SEND MESSAGE NOW </button>

                            </div>

                        </form>


            </div>
            <!-- Edit Product End -->
        </div>


        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Why choose ARIS360 boxes</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[4]['content'];!!}" id="402">
                            <textarea name="textarea"
                                class="form-control" id="403">{!! $page[5]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[6]['content'];!!}" id="404">
                            <textarea name="textarea"
                                class="form-control" id="405">{!! $page[7]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[8]['content'];!!}" id="406">
                            <textarea name="textarea"
                                class="form-control" id="407">{!! $page[9]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4 mt-2">
                            <input type="text" name="text" class="form-control" value="{!! $page[10]['content'];!!}" id="408">
                            <textarea name="textarea"
                                class="form-control" id="409">{!! $page[11]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4 mt-2">
                            <input type="text" name="text" class="form-control" value="{!! $page[12]['content'];!!}" id="410">
                            <textarea name="textarea"
                                class="form-control" id="411">{!! $page[13]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4 mt-2">
                            <input type="text" name="text" class="form-control" value="{!! $page[14]['content'];!!}" id="412">
                            <textarea name="textarea"
                                class="form-control" id="413">{!! $page[15]['content'];!!}</textarea>
                        </div>
                    </div>
                        <div class="row update-btn">
                            <div class="col-12 update-btn">
                                <input type="button" value="Update" class="btn btn-primary" onclick="datapass3({!! $page[4]['id'];!!},{!! $page[5]['id'];!!},{!! $page[6]['id'];!!},{!! $page[7]['id'];!!},{!! $page[8]['id'];!!},{!! $page[9]['id'];!!},{!! $page[10]['id'];!!},{!! $page[11]['id'];!!},{!! $page[12]['id'];!!},{!! $page[13]['id'];!!},{!! $page[14]['id'];!!},{!! $page[15]['id'];!!});">
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
                    <h6 class="h6">Get in Touch with ARIS360 Pro!</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[16]['content'];!!}!" id="414">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[17]['content'];!!}" id="415">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[18]['content'];!!}" id="416">
                        </div>
                    </div>
                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({!! $page[16]['id'];!!},{!! $page[17]['id'];!!},{!! $page[18]['id'];!!});">
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
                    <h6 class="h6">Read Real Stories From Our Agents</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[20]['content'];!!}" id="417">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Stories content :</span>

                        <div class="col-md-9">
                        <textarea name="textarea"
                                class="form-control" id="418">{!! $page[21]['content'];!!}</textarea>
                        </div>
                    </div>


                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5({!! $page[20]['id'];!!},{!! $page[21]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[22]['content'];!!}" id="419">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="420">{!! $page[23]['content'];!!}
                            </textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6({!! $page[22]['id'];!!},{!! $page[23]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[24]['content'];!!}" id="421">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="422">{!! $page[25]['content'];!!}
                            </textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7({!! $page[24]['id'];!!},{!! $page[25]['id'];!!});">
                        </div>
                    </div>
                </form>


            </div>
            <!-- Edit Product End -->
        </div>

        {{-- <div class="panel">

            Edit Product Start 
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Story # 3 Content</h6>

                    <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> 
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="David and Sarah: Refinancing Their Mortgage">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control">David and Sarah had been in their home for several years and were interested in refinancing their mortgage to take advantage of lower interest rates. They turned to ARIS360  for help, and their agent was able to guide them through the refinancing process and secure them a fantastic rate that lowered their monthly payments significantly. With the help of their ARIS360  agent, they were able to save money and achieve their financial goals.
                            </textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary">
                        </div>
                    </div>
                </form> --}}


            </div>
            <!-- Edit Product End -->
        </div>
        <div class="panel">

<!-- Edit Product Start -->
<div class="records--body">
    <div class="title">
        <h6 class="h6">Counter boxes</h6>

        <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
    </div>

    <form action="#">

    <div class="form-group row plan-content">
            <div class="col-md-4">
                <input type="text" name="text" class="form-control" value="{!! $page[26]['content'];!!}" id="423">
                <input type="text" name="text" class="form-control" value="{!! $page[27]['content'];!!}" id="424">
                <input type="text" name="text" class="form-control" value="{!! $page[28]['content'];!!}" id="425">
                <input type="text" name="text" class="form-control" value="{!! $page[29]['content'];!!}" id="426">
            </div>
            <div class="col-md-4">
                <input type="text" name="text" class="form-control" value="{!! $page[30]['content'];!!}" id="427">
                <input type="text" name="text" class="form-control" value="{!! $page[31]['content'];!!}" id="428">
                <input type="text" name="text" class="form-control" value="{!! $page[32]['content'];!!}" id="429">
                <input type="text" name="text" class="form-control" value="{!! $page[33]['content'];!!}" id="430">
            </div>
            <div class="col-md-4">
                <input type="text" name="text" class="form-control" value="{!! $page[34]['content'];!!}" id="431">
                <input type="text" name="text" class="form-control" value="{!! $page[35]['content'];!!}" id="432">
                <input type="text" name="text" class="form-control"value="{!! $page[36]['content'];!!}" id="433">
                <input type="text" name="text" class="form-control" value="{!! $page[37]['content'];!!}" id="434">
              
            </div>
    </div>
          
        <div class="row update-btn">
            <div class="col-12 update-btn">
                <input type="button" value="Update" class="btn btn-primary"  onclick="datapass8({!! $page[26]['id'];!!},{!! $page[27]['id'];!!},{!! $page[28]['id'];!!},{!! $page[29]['id'];!!},{!! $page[30]['id'];!!},{!! $page[31]['id'];!!},{!! $page[32]['id'];!!},{!! $page[33]['id'];!!},{!! $page[34]['id'];!!},{!! $page[35]['id'];!!},{!! $page[36]['id'];!!},{!! $page[37]['id'];!!});">
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

                   
                    <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[38]['content'];!!}" id="435">
                            <textarea name="textarea"
                                class="form-control" id="436">{!! $page[39]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[40]['content'];!!}" id="437">
                            <textarea name="textarea"
                                class="form-control" id="438">{!! $page[41]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[42]['content'];!!}" id="439">
                            <textarea name="textarea"class="form-control" id="500">{!! $page[43]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass9({!! $page[38]['id'];!!},{!! $page[39]['id'];!!},{!! $page[40]['id'];!!},{!! $page[41]['id'];!!},{!! $page[42]['id'];!!},{!! $page[43]['id'];!!});">
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
                            var content1 = document.getElementById("398").value;
                            var content2 = document.getElementById("399").value;
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
                            var content1 = document.getElementById("400").value;
                            var content2 = document.getElementById("401").value;
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
                    datapass3 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10,id11,id12) => {
                            var content1 = document.getElementById("402").value;
                            var content2 = document.getElementById("403").value;
                            var content3 = document.getElementById("404").value;
                            var content4 = document.getElementById("405").value;
                            var content5 = document.getElementById("406").value;
                            var content6 = document.getElementById("407").value;
                            var content7 = document.getElementById("408").value;
                            var content8 = document.getElementById("409").value;
                            var content9 = document.getElementById("410").value;
                            var content10 = document.getElementById("411").value;
                            var content11 = document.getElementById("412").value;
                            var content12 = document.getElementById("413").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwelvecontent') }}",
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
                            var content1 = document.getElementById("414").value;
                            var content2 = document.getElementById("415").value;
                            var content3 = document.getElementById("416").value;
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
                    
                    datapass5 = (id,id2) => {
                            var content1 = document.getElementById("417").value;
                            var content2 = document.getElementById("418").value;
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
                            var content1 = document.getElementById("419").value;
                            var content2 = document.getElementById("420").value;
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
                            var content1 = document.getElementById("421").value;
                            var content2 = document.getElementById("422").value;
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

                    datapass8 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10,id11,id12) => {
                            var content1 = document.getElementById("423").value;
                            var content2 = document.getElementById("424").value;
                            var content3 = document.getElementById("425").value;
                            var content4 = document.getElementById("426").value;
                            var content5 = document.getElementById("427").value;
                            var content6 = document.getElementById("428").value;
                            var content7 = document.getElementById("429").value;
                            var content8 = document.getElementById("430").value;
                            var content9 = document.getElementById("431").value;
                            var content10 = document.getElementById("432").value;
                            var content11 = document.getElementById("433").value;
                            var content12 = document.getElementById("434").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetwelvecontent') }}",
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


                    datapass9 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("435").value;
                            var content2 = document.getElementById("436").value;
                            var content3 = document.getElementById("437").value;
                            var content4 = document.getElementById("438").value;
                            var content5 = document.getElementById("439").value;
                            var content6 = document.getElementById("500").value;
                           
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
 