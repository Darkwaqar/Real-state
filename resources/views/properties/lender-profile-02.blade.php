@extends('properties.layouts.main')
@section('content')

<style>
.agentDetail-askQuestion-sect .estate-agent-form input[type="text"] , .agentDetail-askQuestion-sect .estate-agent-form input[type="email"] {
    border: 1px solid #ccc;
}
.contact-gentext {
    font-size: 30px;
    font-weight: 500;
}
.lendel-sec1 .in-sidebar-widget {
    padding: 40px 30px;
    border-radius: 12px;
    margin-bottom: 40px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 50px 0px rgb(0 0 0 / 5%);
    /* box-shadow: 0px 0px 30px 0px rgb(0 0 0 / 12%); */
    max-width: 1040px;
    margin: 0 auto;
}
.lendel-sec1 .img-360 {
    max-width: 230px;
}
.tristart-text{
    font-size:30px;
}
.nmls-text{
    font-size: 18px !important;
    font-weight: 500;
    margin-top: 0;
}
.lendl-carddetail {
    margin-left: 20px;
}
.lendl-cardwrap {
    display: flex;
    justify-content: center;
    align-items: center;
}
.contact-pd{
    padding: 10px 60px !important;
    font-size: 20px !important;
}
.in-blog-details-text-area.about-wrapper p {
    padding-bottom: 10px;
}
.lender-reviewwrapper {
      display: flex;
    justify-content: space-between;
    align-items: baseline;
}
.lender-mainwrap{
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    padding: 10px 30px;
    border-radius: 10px;
    margin-top: 30px;
}
.comment_content.pera-content{
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}
.comment_element {
    padding-top:0px;
}
.review-headtext a {
    color: #282828;
    font-size: 24px;
    font-weight: 500;
}
.review-headtext {
    margin-bottom: 0;
}
.pdd-top{
    padding-top:20px;
}
.reviews-headwrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.review-gentext{
    font-size: 15px;
    font-weight: 400;
    color: #282828;
    margin-bottom: 10px;
}
</style>

<section class="mortgage-calc-sect1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mortgage-sec1-banner">
                    <p class="title">Lender's Profile</p>
                    <p class="para">Empowering Lenders with Expert Insights and Tools</p>
     <!--               <div class="in-sidebar-widget">-->
					<!--	<div class="row d-flex justify-content-between align-items-center">-->
					<!--		<div class="col-md-6 col-12 text-left">-->
					<!--			<img src="public/assets/images/tristar.png" class="img-360 mb-2" alt="">-->
					<!--		</div>-->
					<!--		<div class="col-md-6 col-12 text-xl-end text-lg-end text-md-end  text-end">-->
					<!--			<div class="in-btn-2 position-relative text-end">-->
					<!--				<a href="#"  data-toggle="modal" data-target="#exampleModalcontact" class="theme-btn btn-one">Contact</a>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->

					<!--	<hr>-->

					<!--	<div class="row">-->
					<!--	    <div class="col-12 col-lg-8 col-md-8">-->
					<!--		<h5 class="mb-0 text-left">-->
					<!--			<span>Tristar, Inc.</span>-->
								
					<!--			<small class="text-muted font_14">NMLS# 43583</small>-->
					<!--		</h5>-->
					<!--		<div class="font_14 text-left">-->
					<!--			<i class="fas fa-star bg_primary"></i> -->
					<!--			<i class="fas fa-star bg_primary"></i> -->
					<!--			<i class="fas fa-star bg_primary"></i> -->
					<!--			<i class="fas fa-star bg_primary"></i> -->
					<!--			<i class="fas fa-star bg_primary"></i> -->
					<!--			<strong>4.96 rating</strong>-->
					<!--		</div>-->
					<!--		<div class="font_14 text-left">-->
					<!--			<strong>3300 Reviews</strong> -->
					<!--			<small class="text-muted">(0 Recent | 31 Verified)</small>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	</div>-->

						<!--<div class="font_14">-->
						<!--	<i class="fas fa-star bg_primary"></i> -->
						<!--	<i class="fas fa-star bg_primary"></i> -->
						<!--	<i class="fas fa-star bg_primary"></i> -->
						<!--	<i class="fas fa-star bg_primary"></i> -->
						<!--	<i class="fas fa-star bg_primary"></i> -->
						<!--	<strong>4.96 rating</strong>-->
						<!--</div>-->
						<!--<div class="font_14">-->
						<!--	<strong>3300 Reviews</strong> -->
						<!--	<small class="text-muted">(0 Recent | 31 Verified)</small>-->
						<!--</div>-->
					<!--</div>-->
                </div>
            </div>
        </div>
    </div>
</section>


<section id="in-blog-details" class="in-blog-details-section lendel-sec1">
		<div class="container">
			<div class="in-blog-details-content">
                 <!--profile-card-->
    			    <div class="in-sidebar-widget mb-5">
    						<div class="row d-flex justify-content-between align-items-center">
    							<div class="col-lg-6 col-12 col-md-6  text-left">
    								 <div class="lendl-cardwrap">
    								     <div class="tri-imagewrap">
        								    <img src="public/images/low-rates-profile.png" class="img-360 mb-2" alt="">
    								     </div>
    								     <div class="lendl-carddetail">
							            	<h5 class="mb-0 text-left">
                								<span class="tristart-text">Low Rates</span>
                								
                								<small class="text-muted font_14 nmls-text">NMLS# 43583</small>
                							</h5>
                							<div class="font_14 text-left">
                								<i class="fas fa-star bg_primary"></i> 
                								<i class="fas fa-star bg_primary"></i> 
                								<i class="fas fa-star bg_primary"></i> 
                								<i class="fas fa-star bg_primary"></i> 
                								<i class="fas fa-star bg_primary"></i> 
                								<strong>5 rating</strong>
                							</div>
                							<div class="font_14 text-left">
                								<strong>2 Reviews</strong> 
                								<small class="text-muted">(2 Recent)</small>
                							</div>
                    						</div>
    								     </div>
    								 </div>
    							<div class="col-lg-6  col-md-6 col-12 text-xl-end text-lg-end text-md-end  text-end">
    								<div class="in-btn-2 position-relative text-end">
    									<a href="#" data-toggle="modal" data-target="#exampleModalcontact" class="theme-btn btn-one contact-pd">Contact</a>
    								</div>
    							</div>
    						</div>
    
    						<hr>
    
    						<!--<div class="row">-->
    						<!--    <div class="col-12 col-lg-8 col-md-8">-->
    						<!--	<h5 class="mb-0 text-left">-->
    						<!--		<span class="tristart-text">Tristar, Inc.</span>-->
    								
    						<!--		<small class="text-muted font_14 nmls-text">NMLS# 43583</small>-->
    						<!--	</h5>-->
    						<!--	<div class="font_14 text-left">-->
    						<!--		<i class="fas fa-star bg_primary"></i> -->
    						<!--		<i class="fas fa-star bg_primary"></i> -->
    						<!--		<i class="fas fa-star bg_primary"></i> -->
    						<!--		<i class="fas fa-star bg_primary"></i> -->
    						<!--		<i class="fas fa-star bg_primary"></i> -->
    						<!--		<strong>4.96 rating</strong>-->
    						<!--	</div>-->
    						<!--	<div class="font_14 text-left">-->
    						<!--		<strong>3300 Reviews</strong> -->
    						<!--		<small class="text-muted">(0 Recent | 31 Verified)</small>-->
    						<!--	</div>-->
    						<!--</div>-->
    						<!--</div>-->
    
    						<!--<div class="font_14">-->
    						<!--	<i class="fas fa-star bg_primary"></i> -->
    						<!--	<i class="fas fa-star bg_primary"></i> -->
    						<!--	<i class="fas fa-star bg_primary"></i> -->
    						<!--	<i class="fas fa-star bg_primary"></i> -->
    						<!--	<i class="fas fa-star bg_primary"></i> -->
    						<!--	<strong>4.96 rating</strong>-->
    						<!--</div>-->
    						<!--<div class="font_14">-->
    						<!--	<strong>3300 Reviews</strong> -->
    						<!--	<small class="text-muted">(0 Recent | 31 Verified)</small>-->
    						<!--</div>-->
    					</div>
    			    <!--profile-card-end-->
    	<!--			<div class="col-lg-4 col-12 order-lg-2 order-1">-->
					<!--	<div class="in-blog-side-bar left-side-bar">-->
					<!--		<div class="in-sidebar-widget">-->
					<!--			<div class="category-widget ul-li-block">-->
					<!--				<h3 class="widget-title position-relative">Address</h3>-->
					<!--				<ul>-->
					<!--					<li>-->
					<!--						<a href="#">-->
					<!--							1177 West Loop South, Ste 700-->
					<!--							<br> Houston, TX 77027-->
					<!--						</a>-->
					<!--					</li>-->
					<!--				</ul>-->
					<!--			</div>-->
					<!--		</div>-->
								
					<!--		<div class="in-sidebar-widget">-->
					<!--			<div class="category-widget ul-li-block">-->
					<!--				<h3 class="widget-title position-relative">Office</h3>-->
					<!--				<ul>-->
					<!--					<li>-->
					<!--						<a href="#">-->
					<!--							(844) 466-3010-->
					<!--						</a>-->
					<!--					</li>-->
					<!--				</ul>-->
					<!--			</div>-->
					<!--		</div>-->
								
					<!--		<div class="in-sidebar-widget">-->
					<!--			<div class="category-widget ul-li-block">-->
					<!--				<h3 class="widget-title position-relative">Website</h3>-->
					<!--				<ul>-->
					<!--					<li>-->
					<!--						<a href="#">-->
					<!--							www.tristar.com-->
					<!--						</a>-->
					<!--					</li>-->
					<!--				</ul>-->
					<!--			</div>-->

					<!--		</div>-->

					<!--	</div>-->
					<!--</div>-->
				<div class="row">
					<div class="col-lg-8 col-12 order-lg-1 order-2">
						<div class="in-blog-details-content-area">
							
							<div class="in-blog-details-text-area about-wrapper headline ul-li-block pera-content">
								<div class="in-blog-details-text-wrap">
									
									<h3>About Low Rates</h3>

									<!--<div class="collapse collapse_show_less" id="collapseCompanyDetails">-->
									<div class="about-text-wrap">
											<p>Low Rates is a national lender for borrowers who want to work with a great lender that goes above and beyond for them!</p>
										<!--<blockquote>-->
										<!--	Lorem Ipsum is simply dummy text the printing and typesetting industry. Lo rem Ipsum has been the indus try’s standard. Neque porro quisquam est, qui is dolor emr ipsum.-->
										<!--</blockquote>-->
										<p><strong>Additional languages spoken : </strong> Cantonese, Spanish, Vietnamese</p>
										<p><strong>Licensed to work in :</strong> Alabama (23309), Alaska (AK43583), Arizona (1042765), Arkansas (130126), California (603K695), Colorado, Connecticut (ML-43583), Florida (MBR6040), Idaho (MBL-8079), Illinois (MB.6761821), Iowa (2022-0211), Kansas (MC.0026256), Maryland, Michigan (FL0024835), Minnesota (MN-MO-43583), Mississippi (43583), Montana (43583), Nebraska, New Hampshire (25132-MB), New Mexico, Ohio (RM.805004.000), Oklahoma (ML015307), Oregon (ML-5231), Pennsylvania (102510), South Carolina (MLS - 43583), Tennessee (43583), Texas, Virginia (MC-7647), Washington (CL-43583), Washington D.C. (MLB43583), West Virginia (ML-43583), Wyoming (4843)</p>
										<!--<ul>-->
										<!--	<li>Planning solution,10 construction drawings, selection materials</li>-->
										<!--	<li>Developers and technical architects, selection of materials</li>-->
										<!--	<li>Digital project planning resourcing selection of materials</li>-->
										<!--</ul>-->
										<!--<p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound equal blame belongs</p>-->
									</div>

								</div>
								<!--<div class="in-blog-share-tag d-flex justify-content-between">-->
								<!--	<div class="in-blog-share">-->
								<!--		<a class="theme-btn btn-one" data-bs-toggle="collapse" href="#collapseCompanyDetails" role="button" aria-bs-expanded="false" aria-bs-controls="collapseCompanyDetails">-->
								<!--			Show More-->
								<!--		</a>-->
								<!--	</div>-->
								<!--</div>-->
							</div>
							
						</div>
						
						<!--<div class="blog_comment_box headline">-->
						<!--	<h3>-->
						<!--		Tristar, Inc.’s Reviews-->
						<!--		<div class="d-inline" style="font-size: 16px;">-->
						<!--			<i class="fas fa-star bg_primary"></i> -->
						<!--			<i class="fas fa-star bg_primary"></i> -->
						<!--			<i class="fas fa-star bg_primary"></i> -->
						<!--			<i class="fas fa-star bg_primary"></i> -->
						<!--			<i class="fas fa-star bg_primary"></i> -->
						<!--			<strong class="text-muted">4.96 rating</strong>-->
						<!--		</div>-->
						<!--	</h3>-->
						<!--	<div class="comment_box_area ul-li-block">-->
						<!--		<ul class="comment_itemlist">-->
						<!--			<li>-->
						<!--				<div class="comment_element d-flex position-relative">-->
						<!--					<div class="comment_img"> -->
						<!--						<img src="public/assets/images/ca1.jpg" alt="">-->
						<!--					</div>-->
						<!--					<div class="comment_content pera-content">-->
						<!--						<h4><a href="#">Full Name</a></h4>-->
						<!--						<span>19th May 2018</span>-->
						<!--						<p>This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. </p>-->
						<!--					</div>-->
						<!--					<div class="reply-btn position-absolute">-->
						<!--						<div class="d-inline font_14">-->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--			<li>-->
						<!--				<div class="comment_element d-flex position-relative">-->
						<!--					<div class="comment_img"> -->
						<!--						<img src="public/assets/images/ca1.jpg" alt="">-->
						<!--					</div>-->
						<!--					<div class="comment_content pera-content">-->
						<!--						<h4><a href="#">Full Name</a></h4>-->
						<!--						<span>19th May 2018</span>-->
						<!--						<p>This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. </p>-->
						<!--					</div>-->
						<!--					<div class="reply-btn position-absolute">-->
						<!--						<div class="d-inline font_14">-->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--			<li>-->
						<!--				<div class="comment_element d-flex position-relative">-->
						<!--					<div class="comment_img"> -->
						<!--						<img src="public/assets/images/ca1.jpg" alt="">-->
						<!--					</div>-->
						<!--					<div class="comment_content pera-content">-->
						<!--						<h4><a href="#">Full Name</a></h4>-->
						<!--						<span>19th May 2018</span>-->
						<!--						<p>This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. </p>-->
						<!--					</div>-->
						<!--					<div class="reply-btn position-absolute">-->
						<!--						<div class="d-inline font_14">-->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--							<i class="fas fa-star bg_primary"></i> -->
						<!--						</div>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--			<li class="text-center mb-3">-->
						<!--				<div class="in-blog-share">-->
						<!--					<a href="#" class="theme-btn btn-one">-->
						<!--						Load More-->
						<!--					</a>-->
						<!--				</div>-->
						<!--			</li>-->
						<!--		</ul>-->
						<!--	</div>-->
							
						<!--	<h3>Write a review</h3>-->
						<!--	<div class="comment_formfield arck-contact-page-form">-->
						<!--		<div class="in-faq-contact-form">-->
						<!--			<form action="#" method="get">-->
						<!--				<div class="row">-->
						<!--					<div class="col-md-12">-->
						<!--						<textarea name="message" placeholder="Massaege"></textarea>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--				<button class="theme-btn btn-one mt-3" type="submit">Submit Now</button>-->
						<!--			</form>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div> -->

					</div>

					<div class="col-lg-4 col-12 order-lg-2 order-1">
						<div class="in-blog-side-bar left-side-bar">
							<div class="in-sidebar-widget">
								<div class="category-widget ul-li-block">
									<h3 class="widget-title position-relative">Address</h3>
									<ul>
										<li>
											<a href="#">
												1177 West Loop South, Ste 700
												<br> Houston, TX 77027
											</a>
										</li>
									</ul>
								</div>
							</div>
								
							<div class="in-sidebar-widget">
								<div class="category-widget ul-li-block">
									<h3 class="widget-title position-relative">Office</h3>
									<ul>
										<li>
											<a href="#">
												(844) 466-3010
											</a>
										</li>
									</ul>
								</div>
							</div>
								
							<div class="in-sidebar-widget">
								<div class="category-widget ul-li-block">
									<h3 class="widget-title position-relative">Website</h3>
									<ul>
										<li>
											<a href="#">
												www.lowrates.com
											</a>
										</li>
									</ul>
								</div>

							</div>

						</div>
					</div>

				</div>
				<div class="row">
				    <div clas="col-12 col-md-12 col-lg-12">
				          <div class="lender-mainwrap">
				              <div class="lender-reviewwrapper">
				                 <div class="blog_comment_box headline">
							<h3>
								Low Rates’s Reviews
								<div class="d-inline" style="font-size: 16px;">
									<i class="fas fa-star bg_primary"></i> 
									<i class="fas fa-star bg_primary"></i> 
									<i class="fas fa-star bg_primary"></i> 
									<i class="fas fa-star bg_primary"></i> 
									<i class="fas fa-star bg_primary"></i> 
									<strong class="text-muted">5 rating</strong>
								</div>
							</h3>
							<!--review-wrapper-start-->
							<!--<h3>Write a review</h3>-->
							<!--<div class="comment_formfield arck-contact-page-form">-->
							<!--	<div class="in-faq-contact-form">-->
							<!--		<form action="#" method="get">-->
							<!--			<div class="row">-->
							<!--				<div class="col-md-12">-->
							<!--					<textarea name="message" placeholder="Massaege"></textarea>-->
							<!--				</div>-->
							<!--			</div>-->
							<!--			<button class="theme-btn btn-one mt-3" type="submit">Submit Now</button>-->
							<!--		</form>-->
							<!--	</div>-->
							<!--</div>-->
							<!--review-wrapper-End-->
						    </div> 
						         <div class="in-btn-2 position-relative text-end">
								<a href="#" data-toggle="modal" data-target="#writeReviewModal"     class="theme-btn btn-one contact-pd">write a review</a>
							</div>
							  </div>
						    	<div class="comment_box_area ul-li-block">
								<ul class="comment_itemlist">
									<li>
										<div class="comment_element">
											<!--<div class="comment_img"> -->
											<!--	<img src="public/assets/images/ca1.jpg" alt="">-->
											<!--</div>-->
											<div class="reply-btn">
												<div class="d-inline font_14">
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
												</div>
											</div>
											<div class="comment_content pera-content mt-2" style="border-bottom: unset !important;">
												<div class="reviews-headwrapper">
												    <h4 class="review-headtext"><a href="#">Great refinance experience</a></h4>
												    <span>12/18/2022</span>
												</div>
												<p class="review-gentext">Xin from Bellevue, WA</p>
												<p>They had the best rates. If that wasn't enough, They were extremely professional, responsive and checked in every step of the way to lighten what can be a stressful process. I didn't feel pressured at all and would strongly recommend.</p>
											</div>
										</div>
									</li>
								 
								 	<li>
										<div class="comment_element">
											<!--<div class="comment_img"> -->
											<!--	<img src="public/assets/images/ca1.jpg" alt="">-->
											<!--</div>-->
											<div class="reply-btn">
												<div class="d-inline font_14">
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
													<i class="fas fa-star bg_primary"></i> 
												</div>
											</div>
											<div class="comment_content pera-content mt-2" style="border-bottom: unset !important;">
												<div class="reviews-headwrapper">
												    <h4 class="review-headtext"><a href="#">Got the job done</a></h4>
												    <span>12/18/2022</span>
												</div>
												<p class="review-gentext">HappyHomeBuyer from Kennewick, WA</p>
												<p>Working with them was great. They were professional and not pushy. Did a grey job communicating our options and helped us find a great loan for our situation.</p>
											</div>
										</div>
									</li>
									<!--<li class="text-center mb-3">-->
									<!--	<div class="in-blog-share">-->
									<!--		<a href="#" class="theme-btn btn-one">-->
									<!--			Load More-->
									<!--		</a>-->
									<!--	</div>-->
									<!--</li>-->
								</ul>
							</div>
				          </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</section>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



@endsection