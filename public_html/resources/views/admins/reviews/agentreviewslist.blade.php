@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Reviews</h1>                            </div>

                <div class="float-right d-none">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="tables-basic.html">Tables</a>
                        </li>
                        <li class="">
                            <strong>Responsive Tables</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xl-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title float-left">Agent's Review</h2>

                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th data-priority="1">Email</th>
                                            <th data-priority="3">Contact Number</th>
                                            <th data-priority="3">Rating</th>
                                            <th data-priority="3">Message</th>
                                            <th>Date</th>
                                            <th data-priority="6">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($reviews as $review)
                                        <tr>

                                            <th>

                                                <a href="#">

                                                    {{ $review['review_by_user']['first_name'].$review['review_by_user']['last_name']  }}

                                                </a>

                                            </th>

                                            <!-- <td>123-456</td> -->
                                           
                                            <td>{{ $review['review_by_user']['email'] }}</td>

                                            <td>{{ $review['review_by_user']['mobile_number'] }}</td>

                                            <td>{{ $review['rating'] }}</td>
                                            <td>{{ $review['content'] }}</td>

                                            <td>{{ stringTodate($review['created_at']) }}</td>

                                            <td colspan="2">
                                                @if ($review['verified'] == 'no')
                                                    <button class="btn btn-primary verifyreview" id="verifyreview{{$review['id']}}" data-id="{{$review['id']}}">Verify</a>
                                                @elseif ($review['verified'] == 'yes')
                                                    <button class="btn btn-primary verified" >Already verified</button>
                                                @endif
                                            </td>
                                            

                  

                                        

                                        </tr>
                                        @empty
                                        <h5>The data does not exist.</h5>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </section></div>






    </section>
</section>
@endsection

{{-- favModel-start --}}
<div class="modal align-middle" id="favModalNoti">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="favtle"></h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="favbdy">
            </div>
            <div class="modal-footer">
                <button class="theme-btn btn-one" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    {{-- favModel-end --}}

<script src="{{ asset('public/admin/assets/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $("body").on('click', '.verifyreview', (function(e) {
            var review_id = $(this).data("id");
            $.ajax({
                url: "<?php echo url('/admin/verifyreview'); ?>",
                type: "GET",
                data: {
                    "review_id": review_id
                },
                success: function(response) {
                    if (response.return == true) {
                        $('#favtle').text('Favorite');
                        $('#favbdy').text(response.message);
                        $('#favModalNoti').modal('show');
                        $('#verifyreview'+review_id).html("Already Verified");
                        $('#verifyreview'+review_id).removeClass("verifyreview");
                        $('#verifyreview'+review_id).addClass("verified");
                        
                        
                    }
                    else{
                        $('#favtle').text('Favorite');
                        $('#favbdy').text(response.message);
                        $('#favModalNoti').modal('show');
                        
                    }
                },
                error: function(e) {
                    alert('Failed to submit');
                }
            });

        }));

    })
    </script>
