@extends('properties.layouts.main')

@section('content')

<section class="agent-future-oppertunity-wrapper">
    <div class="container">
        <div class="agent-future-oppertunity-section">
            <div class="future-oppertunity-banner">
                <img src="public/assets/images/agents/future-opp-banner.jpg" alt="">
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="future-oppertunity-detailSec">
                        <div class="future-oppertunity-detailSec1">
                            <p class="title">Real Estate Agent - Birmingham (Future Opportunities)</p>
                            <a href="{{route('apply-job')}}">Apply</a>
                        </div>
                        <div class="future-oppertunity-detailSec2">
                            <ul class="detailSec-stateDesc">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> AL - Birmingham
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Full Time
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Posted 30+ Days Ago
                                </li>
                                <li>
                                    <i class="fas fa-clipboard-list-check"></i> 34934
                                </li>
                            </ul>
                            <strong class="para mt-2">*We’re not hiring now, but we will be in the coming months. Submit your application now to be considered for future real estate agent opportunities.*</strong>
                            <p class="para mt-2">Come join the ranks of Aris360<sup>0</sup> top producing real estate agents who consistently close 50 or more deals per year. You’ll enjoy the benefits and perks of being an employee with the autonomy to achieve unparalleled success. Aris 360 is the best place to take your real estate business to the next level. We take care of you, so you can take care of your customers.</p>
                            <p class="para mt-2 mb-2">Our mission is to redefine real estate in the consumer's favor and we’re looking for customer-centric agents to help us fulfill that mission. As a full-service brokerage and the most-visited nationwide brokerage website, we combine our own technology with real estate agents to make buying or selling a home faster, easier and more efficient.</p>
                            <strong>Get everything you need to be a top producer:</strong>
                            <ul class="detailSec-stateDes2">
                                <li>100+ serious customer introductions per year</li>
                                <li>Technology to drive sales and grow your book of business</li>
                                <li>Dedicated support team to handle scheduling, showing assistance, transaction coordination and more</li>
                                <li>100+ serious customer introductions per year</li>
                                <li>Technology to drive sales and grow your book of business</li>
                                <li>Dedicated support team to handle scheduling, showing assistance, transaction coordination and more</li>
                            </ul>
                        </div>
                    </div>
                    <div class="similar-job-sect">
                        <p class="para"><strong>Similar Jobs (1)</strong></p>
                        <div class="similar_box">
                            <a href="javascript:void(0)">Real Estate Agent - Huntsville (Future Opportunities)</a>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> AL - Birmingham
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Full Time
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Posted 30+ Days Ago
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="future-oppertunity-aboutSect">
                        <p class="para"><strong>About Us</strong></p>
                        <div>
                            <img src="public/assets/images/agents/aris-red-logo.jpg" class="img-fluid" alt="">
                        </div>
                        <p class="para"><strong>About Us</strong></p>
                        <p class="para mt-2">Our mission is to redefine real estate in the customer’s favor. From the technology we build to the brokerage services we provide, every Aris 360nian plays a part.

                            Aris 360 Commitment to a Diverse Workforce
                            The CE Shop
                            *For terms and conditions, visit Aris 360.theceshop.com/legal. The CE shop is not owned or operated by Aris 360. Aris 360 makes a small amount of money when you register for a course.
                            </p>
                            <strong class="mt-2">California Applicant Privacy Policy & Notice at Collection</strong>
                            <strong class="mt-2">Last Updated: January 1, 2023</strong>
                            <strong>This California Applicant Privacy Notice (“Applicant Notice”) describes our information practices relating to applicants and candidates for employmen</strong>
                            <a href="javascript:void(0)" class="read_more">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal agenfutureoppModal-wrapper fade" id="agenfutureoppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <div class="modal-body">
          <div class="agenfutureoppModal-content">
            <p class="title">Start Your Application</p>
            <p class="para mt-2">Real Estate Agent - Birmingham (Future Opportunities)</p>
            <small>Thank you for starting your application! This will take you 5 minutes or less to complete.</small>
            <div class="manually-apply-sect">
                <a href="{{route('apply-job')}}">Apply</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection