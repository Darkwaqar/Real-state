@extends('properties.layouts.main')
@section('content')
   <!-- Blog Single Post -->
   <section class="blog_post_container bgc-f7">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 mx-auto">
             <div class="breadcrumb_content style2">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/aris-market-update') }}">
                            Aris Market Update
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      How Demographic Shifts are Reshaping the Real Estate Market
                    </li>
                </ol>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="main_blog_post_content">
               <div class="mbp_thumb_post">
                  <h3 class="blog_sp_title">
                 How Demographic Shifts are Reshaping the Real Estate Market
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/images/How Demographic Shifts are Reshaping the Real Estate Market.jpg" alt="How Demographic Shifts are Reshaping the Real Estate Market">
                </div>
                 <div class="details">
                    <p>The real estate market is being re-shaped by changing demographics. The number of non-family households has increased, and married couples now comprise less than half of all US households [2]. Aging baby boomers and growing millennials, two demographic trends, are changing commercial real estate development [5]. Urbanisation and population ageing are shaping the real estate investment industry [3]. Demographic changes can largely account for house price growth from 1970 to 2010 [4]. The real estate industry must adapt to these changes to meet the demand for new housing [1].</p>
                  </div>
                <br><br>    
               </div>
               <div class="product_single_content mb30">
                  <div class="mbp_pagination_comments">
                     <div class="custom_hr"></div>
                  </div>
               </div>

            </div>
         </div>
          
       </div>
    </div>
 </section>
@endsection

