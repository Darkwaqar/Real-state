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
                    <h2 class="page--title h5">Why Choose ARIS360</h2>
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
                    <h3 class="h3">Why Choose ARIS360 Content</h3>
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
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[0]['content'];!!}" id="30">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[1]['content'];!!}" id="31">
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
                    <h6 class="h6">Why Choose ARIS360 Reasons Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[2]['content'];!!}" id="32">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[3]['content'];!!}" id="33">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[4]['content'];!!}" id="34">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[5]['content'];!!}" id="35">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[6]['content'];!!}" id="36">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[7]['content'];!!}" id="37">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[8]['content'];!!}" id="38">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[9]['content'];!!}" id="39">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary  " onclick="datapass2({!! $page[2]['id'];!!},{!! $page[3]['id'];!!},{!! $page[4]['id'];!!},{!! $page[5]['id'];!!},{!! $page[6]['id'];!!},{!! $page[7]['id'];!!},{!! $page[8]['id'];!!},{!! $page[9]['id'];!!});">
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
                    <h6 class="h6">Why Choose ARIS360 Benefits Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[10]['content'];!!}" id="40">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[11]['content'];!!}" id="41">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[12]['content'];!!}" id="42">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[13]['content'];!!}" id="43">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[14]['content'];!!}" id="44">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Subtitle :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[15]['content'];!!}" id="45">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary  " onclick="datapass3({!! $page[10]['id'];!!},{!! $page[11]['id'];!!},{!! $page[12]['id'];!!},{!! $page[13]['id'];!!},{!! $page[14]['id'];!!},{!! $page[15]['id'];!!});">
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
                    <h6 class="h6">Unique Experience Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text  col-md-1 col-form-label">Title :</span>

                        <div class=" col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[16]['content'];!!}" id="46">
                        </div>
                    </div>

                    <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[17]['content'];!!}" id="47">
                            <textarea name="textarea"
                                class="form-control" id="48">{!! $page[18]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[19]['content'];!!}" id="49">
                            <textarea name="textarea"
                                class="form-control" id="50">{!! $page[20]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control" value="{!! $page[21]['content'];!!}" id="51">
                            <textarea name="textarea"
                                class="form-control" id="52">{!! $page[22]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-6 mt-3">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[23]['content'];!!}" id="53">
                            <textarea name="textarea"
                                class="form-control" id="54">{!! $page[24]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-6 mt-3">
                            <input type="text" name="text" class="form-control" value="{!! $page[25]['content'];!!}" id="55">
                            <textarea name="textarea"
                                class="form-control" id="56">{!! $page[26]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({!! $page[16]['id'];!!},{!! $page[17]['id'];!!},{!! $page[18]['id'];!!},{!! $page[19]['id'];!!},{!! $page[20]['id'];!!},{!! $page[21]['id'];!!},{!! $page[22]['id'];!!},{!! $page[23]['id'];!!},{!! $page[24]['id'];!!},{!! $page[25]['id'];!!},{!! $page[26]['id'];!!});">
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
        var content1 = document.getElementById("30").value;
        var content2 = document.getElementById("31").value;
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

datapass2 = (id,id2,id3,id4,id5,id6,id7,id8) => {
                            var content1 = document.getElementById("32").value;
                            var content2 = document.getElementById("33").value;
                            var content3 = document.getElementById("34").value;
                            var content4 = document.getElementById("35").value;
                            var content5 = document.getElementById("36").value;
                            var content6 = document.getElementById("37").value;
                            var content7 = document.getElementById("38").value;
                            var content8 = document.getElementById("39").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('saveeightcontent') }}",
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
                            content8: content8
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

                    datapass3 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("40").value;
                            var content2 = document.getElementById("41").value;
                            var content3 = document.getElementById("42").value;
                            var content4 = document.getElementById("43").value;
                            var content5 = document.getElementById("44").value;
                            var content6 = document.getElementById("45").value;
                           
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

                    datapass4 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10,id11) => {
                            var content1 = document.getElementById("46").value;
                            var content2 = document.getElementById("47").value;
                            var content3 = document.getElementById("48").value;
                            var content4 = document.getElementById("49").value;
                            var content5 = document.getElementById("50").value;
                            var content6 = document.getElementById("51").value;
                            var content7 = document.getElementById("52").value;
                            var content8 = document.getElementById("53").value;
                            var content9 = document.getElementById("54").value;
                            var content10 = document.getElementById("55").value;
                            var content11 = document.getElementById("56").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('saveelevencontent') }}",
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