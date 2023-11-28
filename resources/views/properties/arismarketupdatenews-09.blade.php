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
                     The Role of ESG in Real Estate Investment: Beyond Financial Returns
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
                  The Role of ESG in Real Estate Investment: Beyond Financial Returns
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/images/The Role of ESG in Real Estate Investment Beyond Financial Returns.jpg" alt="The Role of ESG in Real Estate Investment: Beyond Financial Returns">
                </div>
                 <div class="details">
                   <p>ESG (Environmental, Social, and Governance) factors are increasingly important in real estate investment. Investors are recognizing the value of sustainability, social responsibility, and good governance practices in real estate. A strong ESG strategy can improve a property's long-term value and reduce risk. ESG is also becoming more important to tenants, who are increasingly aware of the importance of sustainability and social responsibility in the buildings they occupy. By incorporating ESG factors into real estate investment decisions, investors can achieve both financial and non-financial returns. Ultimately, the real estate industry must recognize the importance of ESG and work to integrate it into investment decisions.</p>
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

