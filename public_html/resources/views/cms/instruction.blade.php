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
                    <h2 class="page--title h5">Instructions</h2>
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
                <div class="title fa-file-text">
                    <h3 class="h3">Instructions</h3>
                </div>
            </div>
            <!-- Records Header End -->
        </div>

        <div class="panel">

            <!-- Edit Product Start -->
            <div class="records--body">
                <div class="title">
                    <h6 class="h6">Instructions to use Tags</h6>

                    <!-- <a href="#" class="btn btn-rounded btn-danger">Delete Product</a> -->
                </div>
                <ul>
                    <li><p>&lt;strong&gt; This text is important! &lt;/strong&gt; The content inside is typically displayed in bold. <strong>This text is important!</strong></p></li>
                    <li><p>This is &lt;sup&gt; superscripted &lt;/sup&gt; text. This is <sup>superscripted</sup> text.</p></li>
                    <li><p>This is a &lt;br&gt; paragraph with a line break. <br> This is a <br> paragraph with a line break.</p></li>
                </ul>

                {{-- <form action="#">
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
                </form> --}}


            </div>
            <!-- Edit Product End -->
        </div>

    </section>
    <!-- Main Content End -->
    @extends('cms.layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   