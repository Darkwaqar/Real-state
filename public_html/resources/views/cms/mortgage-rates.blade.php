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
                    <h2 class="page--title h5">Mortgage Rates</h2>
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
                    <h3 class="h3">Mortgage Rates Content</h3>
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
                                value="{!! $page[0]['content'];!!}" id="282">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[1]['content'];!!}" id="283">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Search Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[2]['content'];!!}" id="284">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass({!! $page[0]['id'];!!},{!! $page[1]['id'];!!},{!! $page[2]['id'];!!});">
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

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control" value="{!! $page[3]['content'];!!}" id="285">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea"
                                class="form-control" id="286">{!! $page[4]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass2({!! $page[3]['id'];!!},{!! $page[4]['id'];!!});">
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
                    <h6 class="h6">STEP 1 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[5]['content'];!!}" id="287">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[6]['content'];!!}" id="288">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass3({!! $page[5]['id'];!!},{!! $page[6]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[7]['content'];!!}" id="289">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[8]['content'];!!}" id="290">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass4({!! $page[7]['id'];!!},{!! $page[8]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[9]['content'];!!}" id="291">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[10]['content'];!!}" id="292">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass5({!! $page[9]['id'];!!},{!! $page[10]['id'];!!});">
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
                    <h6 class="h6">Why Choose ARIS360 Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="{!! $page[11]['content'];!!}" id="293">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Subtitle :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[12]['content'];!!}" id="294">
                        </div>
                    </div>
                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass6({!! $page[11]['id'];!!},{!! $page[12]['id'];!!});">
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
                    <h6 class="h6">Why Choose ARIS360 Boxes Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row plan-content">
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[13]['content'];!!}" id="295">
                            <textarea name="textarea"
                                class="form-control" id="296">{!! $page[14]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{!! $page[15]['content'];!!}" id="297">
                            <textarea name="textarea"
                                class="form-control" id="298">{!! $page[16]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{!! $page[17]['content'];!!}" id="299">
                            <textarea name="textarea"
                                class="form-control" id="300">{!! $page[18]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="text" class="form-control" value="{!! $page[19]['content'];!!}" id="301">
                            <textarea name="textarea"
                                class="form-control" id="302">{!! $page[20]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass7({!! $page[13]['id'];!!},{!! $page[14]['id'];!!},{!! $page[15]['id'];!!},{!! $page[16]['id'];!!},{!! $page[17]['id'];!!},{!! $page[18]['id'];!!},{!! $page[19]['id'];!!},{!! $page[20]['id'];!!});">
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
                    <h6 class="h6">Mortgages Made Easy Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row plan-content">
                        <div class="col-md-6">
                            <textarea name="textarea"
                                class="form-control" id="303">{!! $page[22]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-6">
                            <textarea name="textarea"
                                class="form-control" id="304">{!! $page[23]['content'];!!}</textarea>
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass8({!! $page[22]['id'];!!},{!! $page[23]['id'];!!});">
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
                    <h6 class="h6">Standard Mortgage Documentation Categories Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[24]['content'];!!}" id="305">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[25]['content'];!!}" id="306">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[26]['content'];!!}" id="307">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass9({!! $page[24]['id'];!!},{!! $page[25]['id'];!!},{!! $page[26]['id'];!!});">
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
                    <h6 class="h6">Categories Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row plan-content">
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[27]['content'];!!}" id="308">
                            <textarea name="textarea"
                                class="form-control" id="309">{!! $page[28]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[29]['content'];!!}" id="310">
                            <textarea name="textarea"
                                class="form-control" id="311">{!! $page[30]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[31]['content'];!!}" id="312">
                            <textarea name="textarea"
                                class="form-control" id="313">{!! $page[32]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[33]['content'];!!}" id="314">
                            <textarea name="textarea"
                                class="form-control" id="315">{!! $page[34]['content'];!!}</textarea>
                        </div>
                       
                        <div class="col-md-3">
                        <input type="text" name="text" class="form-control" value="{!! $page[35]['content'];!!}" id="316">
                            <textarea name="textarea"
                                class="form-control" id="317">{!! $page[36]['content'];!!}</textarea>
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass10({!! $page[27]['id'];!!},{!! $page[28]['id'];!!},{!! $page[29]['id'];!!},{!! $page[30]['id'];!!},{!! $page[31]['id'];!!},{!! $page[32]['id'];!!},{!! $page[33]['id'];!!},{!! $page[34]['id'];!!},{!! $page[35]['id'];!!},{!! $page[36]['id'];!!});">
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
                    <h6 class="h6">Alternative Document Products Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[37]['content'];!!}" id="318">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass11({!! $page[37]['id'];!!});">
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
                    <h6 class="h6">Products Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">

                    <div class="form-group row plan-content">
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[38]['content'];!!}" id="319"> 
                            <textarea name="textarea"
                                class="form-control" id="320">{!! $page[39]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[40]['content'];!!}" id="321">
                            <textarea name="textarea"
                                class="form-control" id="322">{!! $page[41]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[42]['content'];!!}" id="323">
                            <textarea name="textarea"
                                class="form-control" id="324">{!! $page[43]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="text" class="form-control" value="{!! $page[44]['content'];!!}" id="325">
                            <textarea name="textarea"
                                class="form-control" id="326">{!! $page[45]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="text" class="form-control" value="{!! $page[46]['content'];!!}" id="327">
                            <textarea name="textarea"
                                class="form-control" id="328">{!! $page[47]['content'];!!}</textarea>
                        </div>

                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass12({!! $page[38]['id'];!!},{!! $page[39]['id'];!!},{!! $page[40]['id'];!!},{!! $page[41]['id'];!!},{!! $page[42]['id'];!!},{!! $page[43]['id'];!!},{!! $page[44]['id'];!!},{!! $page[45]['id'];!!},{!! $page[46]['id'];!!},{!! $page[47]['id'];!!});">
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
                    <h6 class="h6">Begin Your Financing Today Banner Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[48]['content'];!!}" id="329">
                        </div>
                    </div>
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                        <textarea name="textarea"
                                class="form-control" id="330">{!! $page[49]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass13({!! $page[48]['id'];!!},{!! $page[49]['id'];!!});">
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
                    <h6 class="h6">Real Stories Content</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>

                <form action="#">
                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-9">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[50]['content'];!!}" id="331">
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass14({!! $page[50]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[51]['content'];!!}" id="332">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="333">{!! $page[52]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass15({!! $page[51]['id'];!!},{!! $page[52]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[53]['content'];!!}" id="334">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control"id="335">{!! $page[54]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass16({!! $page[53]['id'];!!},{!! $page[54]['id'];!!});">
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
                            <input type="text" name="text" class="form-control" value="{!! $page[55]['content'];!!}" id="336">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span class="label-text col-md-1 col-form-label">Description :</span>

                        <div class="col-md-11">
                            <textarea name="textarea" class="form-control" id="337">{!! $page[56]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass17({!! $page[55]['id'];!!},{!! $page[56]['id'];!!});">
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

                    {{-- <div class="form-group row"> --}}
                        {{-- <span class="label-text col-md-1 col-form-label">Title :</span>

                        <div class="col-md-11">
                            <input type="text" name="text" class="form-control" value="ARIS360 FAQs">
                        </div>
                    </div> --}}

                    <div class="form-group row plan-content">
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[57]['content'];!!}" id="338">
                            <textarea name="textarea"
                                class="form-control" id="339">{!! $page[58]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[59]['content'];!!}" id="340">
                            <textarea name="textarea"
                                class="form-control" id="341">{!! $page[60]['content'];!!}</textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="text" class="form-control"
                                value="{!! $page[61]['content'];!!}" id="342">
                            <textarea name="textarea"
                                class="form-control" id="343">{!! $page[62]['content'];!!}</textarea>
                        </div>
                    </div>

                    <div class="row update-btn">
                        <div class="col-12 update-btn">
                            <input type="button" value="Update" class="btn btn-primary" onclick="datapass18({!! $page[57]['id'];!!},{!! $page[58]['id'];!!},{!! $page[59]['id'];!!},{!! $page[60]['id'];!!},{!! $page[61]['id'];!!},{!! $page[62]['id'];!!});">
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
datapass = (id,id2,id3) => {
                            var content1 = document.getElementById("282").value;
                            var content2 = document.getElementById("283").value;
                            var content3 = document.getElementById("284").value;
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
                            content3: content3,
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
        var content1 = document.getElementById("285").value;
        var content2 = document.getElementById("286").value;
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
        var content1 = document.getElementById("287").value;
        var content2 = document.getElementById("288").value;
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
        var content1 = document.getElementById("289").value;
        var content2 = document.getElementById("290").value;
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
        var content1 = document.getElementById("291").value;
        var content2 = document.getElementById("292").value;
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
        var content1 = document.getElementById("293").value;
        var content2 = document.getElementById("294").value;
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

datapass7 = (id,id2,id3,id4,id5,id6,id7,id8) => {
                            var content1 = document.getElementById("295").value;
                            var content2 = document.getElementById("296").value;
                            var content3 = document.getElementById("297").value;
                            var content4 = document.getElementById("298").value;
                            var content5 = document.getElementById("299").value;
                            var content6 = document.getElementById("300").value;
                            var content7 = document.getElementById("301").value;
                            var content8 = document.getElementById("302").value;
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
                    datapass8 = (id,id2) => {
        var content1 = document.getElementById("303").value;
        var content2 = document.getElementById("304").value;
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
                    datapass9 = (id,id2,id3) => {
                            var content1 = document.getElementById("305").value;
                            var content2 = document.getElementById("306").value;
                            var content3 = document.getElementById("307").value;
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
                            content3: content3,
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
                    datapass10 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10) => {
                            var content1 = document.getElementById("308").value;
                            var content2 = document.getElementById("309").value;
                            var content3 = document.getElementById("310").value;
                            var content4 = document.getElementById("311").value;
                            var content5 = document.getElementById("312").value;
                            var content6 = document.getElementById("313").value;
                            var content7 = document.getElementById("314").value;
                            var content8 = document.getElementById("315").value;
                            var content9 = document.getElementById("316").value;
                            var content10 = document.getElementById("317").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetencontent') }}",
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
                    datapass11 = (i) => {
                            var content = document.getElementById("318").value;
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
                    datapass12 = (id,id2,id3,id4,id5,id6,id7,id8,id9,id10) => {
                            var content1 = document.getElementById("319").value;
                            var content2 = document.getElementById("320").value;
                            var content3 = document.getElementById("321").value;
                            var content4 = document.getElementById("322").value;
                            var content5 = document.getElementById("323").value;
                            var content6 = document.getElementById("324").value;
                            var content7 = document.getElementById("325").value;
                            var content8 = document.getElementById("326").value;
                            var content9 = document.getElementById("327").value;
                            var content10 = document.getElementById("328").value;
                             $.ajax({
                        type: "post",
                        url: "{{ url('savetencontent') }}",
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

                    datapass13 = (id,id2) => {
        var content1 = document.getElementById("329").value;
        var content2 = document.getElementById("330").value;
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

datapass14 = (i) => {
                            var content = document.getElementById("331").value;
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
                    datapass15 = (id,id2) => {
        var content1 = document.getElementById("332").value;
        var content2 = document.getElementById("333").value;
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
                    datapass16 = (id,id2) => {
        var content1 = document.getElementById("334").value;
        var content2 = document.getElementById("335").value;
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
                    datapass17 = (id,id2) => {
        var content1 = document.getElementById("336").value;
        var content2 = document.getElementById("337").value;
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


datapass18 = (id,id2,id3,id4,id5,id6) => {
                            var content1 = document.getElementById("338").value;
                            var content2 = document.getElementById("339").value;
                            var content3 = document.getElementById("340").value;
                            var content4 = document.getElementById("341").value;
                            var content5 = document.getElementById("342").value;
                            var content6 = document.getElementById("343").value;
                           
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