@extends('properties.layouts.main')
@section('content')
<style>
.housing-marketsec1 .resource-center-titleSec .gen-heading {
   font-size: 32px;
    color: #282828;
    font-weight: 500;
    max-width: 530px;
    line-height: 1.2;
    margin: 0 auto;
}
.housing-marketsec1 .resource-center-titleSec .gen-text {
    font-size: 16px;
    color: #282828;
    font-weight: 400;
    max-width: 940px;
    line-height: 1.2;
    margin: 0 auto;
}
.housing-marketsec1{
    background:#f2faff;
}    
.housing-marketsec2 {
    padding: 80px 0;
}
.col-redd.gen-text {
    color: #b90000;
    max-width: 350px;
    font-weight: 600;
    font-size: 17px;
    line-height: 1.1;
    margin: 0 auto;
}
.housingsec2-contentwrap .gen-heading{
    font-size: 32px;
    color: #282828;
    font-weight: 700;
    max-width: 530px;
    line-height: 1.2;
}
.housingsec2-contentwrap .gen-text{
    font-size: 20px;
    color: #282828;
    font-weight: 600;
}
.housingsec2-contentwrap .gen-text span{
    font-weight: 400;
}
.housingsec2-rightwrap {
    background: #fff;
    box-shadow: 0 0 5px 0 #ccc;
    padding: 80px 35px;
    min-height: 340px;
    max-height: 340px;
}
.light-text{
    color:#b2b1b6;
    font-size:16px;
    font-weight:400;
}
.mapwrap iframe {
    width: 100%;
    max-height: 340px;
}
.pd-right0{
    padding-right: 0;
}
.pd-left0{
    padding-left: 0;
}
.housing-sec3wrapper .gen-heading{
    font-size: 36px;
    color: #282828;
    font-weight: 500;
}
.housing-sec3wrapper .housing-sec3text .gen-text{
    font-size: 20px;
    color: #282828;
    font-weight: 600;
}
.housing-sec3wrapper .housing-sec3text .gen-text span {
    font-weight: 400;
    font-size: 18px;
}
.housing-marketsec3 {
    padding: 20px 0 40px 0;
}
.housing-sec3text {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    padding-top: 15px;
}
.small-text{
   font-size: 14px;
    color: #282828;
    font-weight: 400;
}
.housing-sec3box .whysec1-leftwrap {
    display: flex;
    justify-content: center;
    align-items: baseline;
    background: #f2faff;
    padding: 20px 30px;
    border-radius: 10px;
}
.housing-sec3box .whysec1-contentwrap .gen-heading {
    font-size: 20px;
    color: #282828;
    font-weight: 600;
}
.data-img{
    max-width:50px;
    object-fit:cover;
    object-position:center;
}
.housing-sec3box .whysec1-contentwrap {
    margin-left: 20px;
}
.housing-marketsec4 {
    background: #b90000;
    padding: 90px 0;
}
.markesec4wrapper {
    text-align: center;
}
.markesec4wrapper .gen-text {
    font-size: 18px;
    color: #ffffff;
    font-weight: 400;
    max-width: 830px;
    margin: 0 auto;
}
.markesec4wrapper .gen-heading{
    font-size: 34px;
    color: #ffffff;
    font-weight: 600;
 
}
.markesec4wrapper .theme-btn.btn-one {
    background-color: #fff;
    border: 2px solid #fff;
    color: #b90000;
}
.markesec4wrapper .theme-btn.btn-one:hover {
    color: #fff;
}
.housing-marketsec5 {
    background: #f6f6fa;
    padding: 70px 0;
}
.marketsec5-boxwrapper {
    background: #fff;
    padding: 40px 30px;
    border-radius: 10px;
}
.housing-marketsec5 .gen-heading {
    font-size: 25px;
    color: #282828;
    font-weight: 600;
}
.housing-marketsec5 .gen-text {
    font-size: 16px;
    color: #282828;
    font-weight: 400;
    max-width: 900px;
}
.housing-marketsec5 .whysec1-leftwrap {
    display: flex;
    justify-content: flex-start;
    align-items: baseline;
}
.housing-marketsec5 .whysec1-contentwrap {
    margin-left: 22px;
}
.marketsec4image .data-img {
    max-width: 80px;
    object-fit: cover;
    object-position: center;
}
.cta-btn-1 {
    font-size: 14px;
    font-weight: 600;
    color: #000;
    outline: none;
    background: #f9f9fb;
    border-radius: 0px;
    transition: all 0.3s ease-in-out;
    padding: 14px 15px;
    font-family: made-light;
}

.market-sec3-btnwrapper{
    display:flex;
    align-items:baseline;
}

/*select-start*/
.marketsec3-optionwrapper .select {
     cursor: pointer;
     display: inline-block;
     position: relative;
     font-size: 16px;
     color: #fff;
     width: 100%;
     height: 40px;
}
.marketsec3-optionwrapper select {
     display: none;
}
.marketsec3-optionwrapper .custom-select {
    position: absolute;
    top: 6px;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #f9f9fb;
    color: #9E9E9E;
    padding: 8px 15px;
    -moz-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    -webkit-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    font-size: 14px;
}
.marketsec3-optionwrapper .custom-select:after {
     content: "";
     width: 0;
     height: 0;
     /*border: 7px solid transparent;*/
     border-color:#9E9E9E transparent transparent transparent;
     position: absolute;
     top: 16px;
     right: 10px;
     transform: rotateZ(0deg);
     transition: all 0.5s;
     transform-origin: 50% 25%;
}
.marketsec3-optionwrapper .custom-select:active, .custom-select.active {
     background-color: #fff;
     color: #9E9E9E;
}
.marketsec3-optionwrapper .custom-select:active:after, .custom-select.active:after {
     transform: rotateZ(180deg);
     transition: all 0.5s;
     transform-origin: 50% 25%;
}
.marketsec3-optionwrapper .custom-select:focus{
    outline: 2px;
}
.marketsec3-optionwrapper .select-options {
     max-height: 200px;
     overflow-y: auto;
     position: absolute;
     top: 100%;
     right: 0;
     left: 0;
     z-index: 999;
     margin: 0;
     padding: 0;
     list-style: none;
     background-color: #de1e25;
     border-radius: 0px 0px 5px 5px;
     display: none;
}
.marketsec3-optionwrapper .select-options li {
    color: #fff;
    margin: 0;
    padding: 12px 0;
    -moz-transition: all 0.15s ease-in;
    -o-transition: all 0.15s ease-in;
    -webkit-transition: all 0.15s ease-in;
    transition: all 0.15s ease-in;
    padding-left: 15px;
}
.marketsec3-optionwrapper .select-options li:hover {
     color: #424242;
     background: #fff;
}
.marketsec3-optionwrapper  .select-options li[rel="hide"] {
     display: none;
}
 ::-webkit-scrollbar {
     width: 10px;
     background-color: #F5F5F5;
     border-radius: 0 0 5px 0;
}
 ::-webkit-scrollbar-thumb {
     border-radius: 10px;
     background-color:#9E9E9E;
}
.marketsec3-optionwrapper .nice-select.hide-select{
    display:none;
}
/*select-end*/
.marketsec3-optionwrapper .wrap {
    width: 50%;
    margin-left: 10px;
}
.marketsec3-optionwrapper {
    width: 73%;
    display: flex;
}
.market-sec3-btnwrapper {
    display: flex;
    align-items: baseline;
}
.market-sec3head {
    display: flex;
    align-items: center;
    background: #f9f9fb;
}
.cta-btn-1:hover {
    background: #fff;
    color: #000;
    border-bottom: 2px solid #b90000;
    transition:all 0.5s ease-in-out;
} 
.graph-text .gen-text{
    font-size: 16px;
    color: #b90000;
    font-weight: 500;
}
.marketsec3-formwrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.input-fieldwrapper {
    display: flex;
    align-items: baseline;
}
.input-fields input {
    width: 90%;
    background: #f9f9fb;
    border: 1px solid #ccc;
    padding: 8px 20px;
    border-radius: 4px;
    margin-bottom: 30px;
    color: #000000a8;
    font-size: 16px;
    margin-bottom: 0;
}
.marketsec3-formwrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #f9f9fb;
    padding: 15px 10px;
    border-radius: 5px;
}
.marketsec3-formwrapper .theme-btn {
    position: relative;
    display: inline-block;
    overflow: hidden;
    vertical-align: middle;
    font-size: 16px;
    line-height: 22px;
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
    text-align: center;
    padding: 10px 20px;
    text-transform: capitalize;
    border-radius: 5px;
    z-index: 1;
    transition: all 500ms ease;
}
.input-fieldwrapper .btn-box {
    margin-left: 10px;
}
.input-fields {
    text-align: end;
}
.chart-wrapper #myChart {
    height: 420px !important;
}

/*third-inner-page-start*/
.sell-home-sect1.why_choose_aris.app-sec.aris-app-banner {
    background: url(public/assets/images/aris-apps-banners.png);
    height: 550px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.aris-app-banner .text-light {
    color: #f8f9fa !important;
    max-width: 480px;
    margin: 0 auto 0 0;
}
.appsec3-cardwrapper .gen-heading{
    font-size: 24px;
    color: #282828;
    font-weight: 500;
}
.appsec3-cardwrapper .gen-text {
    font-size: 16px;
    color: #282828;
    font-weight: 400;
    max-width: 500px;
    margin: 0 auto;
}
.appsec3-cardwrapper .agentCard-bottomSect {
    text-align: center;
    margin-bottom: 0;
}
.app-sec3 {
    padding: 90px 0;
}
.app-sec4 {
    background: #b90000;
    padding: 90px 0;
}
.app-sec4 .search_top_sect {
    padding: 0px 0;
}
.app-sec4 .input-fields input {
    background: #f9f9fb;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #000000a8;
    font-size: 16px;
    margin-bottom: 0;
    max-width: 560px;
    width: 100%;
    padding: 12px 10px;
}
.app-sec4  .input-fields {
    text-align: end;
    max-width: 600px;
    width: 100%;
}
.app-sec4  .theme-btn.btn-one {
    background-color: #ffff;
    border: 2px solid #fff;
    color: #b90000;
}
.app-sec4 .gen-heading {
    font-size: 40px;
    color: #fff;
    font-weight: 600;
    max-width: 780px;
    margin: 0 auto;
    line-height: 1.2;
}
.app-sec4 .gen-text {
    font-size: 16px;
    color: #fff;
    font-weight: 400;
    max-width: 680px;
    margin: 0 auto;
    text-align: center;
}
.app-sec4 .input-fieldwrapper {
    display: flex;
    align-items: baseline;
    justify-content: center;
}
.app-sec4  .resource-center-titleSec {
    padding: 0;
    text-align: center;
}
.app-sec4 .theme-btn.btn-one:hover {
    color: #fff;
    transition: all 0.5s ease-in-out;
}
.app-sec2{
    background:#e0f2ff;
    padding:80px 0;
}
.app-sec2 .gen-heading {
    font-size: 28px;
    color: #282828;
    font-weight: 600;
}
.app-sec2 .gen-text {
    font-size: 20px;
    color: #282828;
    font-weight: 500;
}
.star-wrapper span i {
    color: #fed037;
    font-size: 22px;
}
.appsec2-content {
    display: flex;
    align-items: center;
}
.mrr-15{
    margin-right: 15px;
}
.cta-btn {
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    outline: none;
    background: #000;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
    padding: 14px 35px;
    font-family: made-light;
    text-transform: uppercase;
}
.cta-btn:hover {
    background: transparent;
    color: #000;
    border: 1px solid #282828;
    transition: all 0.5s ease-in-out;
}
.app-sec1 {
    padding: 70px 0;
}
.app-sec1 .gen-heading {
    font-size: 22px;
    color: #282828;
    font-weight: 600;
}
.app-sec1 .gen-text {
    font-size: 18px;
    color: #949494;
    font-weight: 500;
    max-width: 390px;
    margin: 0 auto;
}
.appsec1-cardcontent {
    text-align: center;
    padding: 58px 20px 40px 20px;
    border: 1px solid #ccc;
    border-left: unset;
    min-height: 300px;
    max-height: 300px;
    cursor:pointer;
}
.appsec1-cardcontent:hover{
    background:#b90000;
    transition:all 0.5s ease-in-out;
}
.appsec1-cardcontent:hover .gen-heading , .appsec1-cardcontent:hover .gen-text{
    color:#fff;
}
.appsec2-image i {
    font-size: 32px;
    margin-right: 10px;
    color: #000;
}
.appsec1-imagewrapper img {
    max-width: 300px;
    object-fit: cover;
    object-position: center;
}
.pdd-0{
    padding-left: 0;
    padding-right: 0;
}
.home-img{
    max-width:100%;
    object-fit:cover;
    object-position:center;
}
.real-estate-agent {
    min-height: 345px;
    text-align: center;
}
.appbanner-img img {
    max-width: 450px;
    object-fit: cover;
    object-position: center;
}
.app-sec .sell-home-bannerSec {
    position: relative;
    text-align: left;
}
.appsec1-cardcontent:hover .cta-btn {
    background: #fff;
    color: #000;
    border: 1px solid #fff;
    transition: all 0.5s ease-in-out;
}
/*third-inner-page-end*/

/*fouth-inner-page-start*/
.paymentsec1-benefitwrapper {
    background: #fff;
    border-radius: 10px;
    padding: 20px 20px;
    box-shadow: 0 0 10px 0 #ccc;
}
.paysec1-benefithead .gen-heading {
    font-size: 24px;
    color: #282828;
    font-weight: 600;
}
.paysec1-benefithead .gen-text {
    font-size: 16px;
    color: #282828;
    font-weight: 400;
    max-width: 990px;
}
.paysec1-listwrap .gen-heading{
    font-size: 18px;
    color: #282828;
    font-weight: 600;
}
.paysec1-listwrap .whysec1-leftwrap {
    display: flex;
    align-items: center;
}
.mrr-12{
    margin-left: 12px;
}
.paymentsec1-benefitwrapper .theme-btn.btn-one {
    background-color: #b90000;
    border: 2px solid #b90000;
    color: white;
    padding: 10px 100px;
}
.paymentsec1-benefitwrapper .btn-box {
    text-align: center;
    margin-top:30px;
}
.paysec1-benefitfoot {
    background: #f9f9fb;
    border-radius: 10px;
    padding: 18px 20px;
}
.mortgage-percent .gen-heading {
    font-size: 40px;
    font-weight: 600;
    color: #fff;
}
.mortgage-percent {
    max-width: 100px;
    width: 100%;
}
.border-right{
    border-right: 1px solid #fff;
}
.border-left{
    border-left: 1px solid #fff;
}
.bck-colbrown{
    background: #333333;
}
.bck-colred{
    background:#b90000;
}
.bck-colgreen{
    background:#128a29;
}
.mortgage-box1 {
    padding: 20px 10px;
}
.mortgage-pay .gen-text {
    color: #fff;
    font-weight: 400;
    font-size: 16px;
    margin-left: 20px;
    margin-right: 10px;
    line-height: 1.4;
}
.mortgage-pay .gen-text span {
    display: block;
    text-align: end;
    font-weight: 700;
    font-size: 17px;
}
.paysec1-foothead .gen-heading{             
    font-size: 18px;
    font-weight: 600;
    text-align: center;
}    
.pll-0{
    padding-left: 0;
}
.pll-18{
    padding-left: 18px;
}
.max-one{
    max-width: 350px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin: 0 0 0 auto;
}
.max-two{
  max-width:300px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.max-three{
    max-width:200px;
    margin: 0 0 0 auto;
    text-align: end;
}
.max-four {
    max-width: 320px;
    text-align: start;
}
.max-five{
    max-width: 330px;
    margin: 0 0 0 auto;
}
.text-end{
    text-align:end;
}
.max-six {
    max-width: 380px;
}
.mrr-10{
    margin-right: 10px;
}
.gen-text.text-left span {
    text-align: left;
}
.foot-text .gen-text {
    font-size: 14px;
    font-weight: 400;
    color: #282828;
    text-align: center;
    margin-top: 10px;
}
.paysec2-box1 .gen-heading{
    font-size: 18px;
    color: #282828;
    font-weight: 600;
}
.paysec2-box1 .gen-text{
    font-size: 16px;
    color: #282828;
    font-weight: 400;
}
.pausec2-imgwrap {
    width: 90px;
    height: 90px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin: 0 auto;
}
.payment-sec-2{
    padding:40px 0;
}
.paysec2-box1 {
    text-align: center;
    background: #f6f6f6;
    border-radius: 10px;
    padding: 50px 20px;
    min-height: 400px;
    box-shadow: 0 0 10px 0 #ccc;
    margin-top: 25px;
    cursor:pointer;
}
.payment-sec-2 .paysec1-benefithead {
    text-align: center;
}
.assimg {
    max-width: 30px;
    object-fit: cover;
    object-position: center;
}
.paysec2-box1:hover {
    background: #b90000;
    transition: all 0.5s ease-in-out;
}
.paysec2-box1:hover .gen-heading , .paysec2-box1:hover .gen-text{
    color:#fff;
}
.red-cross {
    max-width: 25px;
    object-fit: cover;
    object-position: center;
}
.paysec4-contentwrap .gen-text {
    color: #282828;
    font-size: 17px;
    font-weight: 400;
}
.eligibility-list .gen-text{
    color:#282828;
    font-size:17px;
    font-weight:400;
}
.eligibility-list{
    margin-left:25px;
}
.paysec4-contentwrap {
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    padding: 50px 40px;
}
.payment-sec4 {
    padding: 30px 0;
}
.paysec4-contentwrap .gen-heading {
    color: #b90000;
    font-size: 24px;
    font-weight: 600;
}
.paysec4-contentwrap  .gen-head{
   color: #b90000;
    font-size: 17px;
    font-weight: 600;
}
.payment-sec5{
    padding:30px 0;
}
.payment-sec5 .paysec4-contentwrap {
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    padding: 20px 40px;
    text-align: center;
}
.payment-sec5 .theme-btn.btn-one {
    background-color: #b90000;
    border: 2px solid #b90000;
    color: white;
}

/*fourth-inner-page-end*/

</style>

<section class="sell-home-sect1 why_choose_aris app-sec aris-app-banner">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-12 col-md-6 col-lg-6">
                <div class="sell-home-bannerSec">
                     <h1>Download The <br> Aris 360 App</h1>
                     <h5 class="mt-2 text-light">Don't Miss Out On The Right Home For you - Browse Up To Date Listing , Refine Your Search and More</h5>
                 </div>
             </div>
             <div class="col-12 col-md-6 col-lg-6">
                 <div class="appbanner-img">
                     <img src="public/assets/images/mobileloc.png" class="image-fluid mobileloc">
                 </div>
             </div>
         </div>
  
     </div>
</section>

<section class="app-sec1">
    <div class="container">
       <div class="appsec1-cardwrapper">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-imagewrapper">
                                <img src="public/assets/images/sweetimg.png" class="image-fluid appsec1card-img">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-cardcontent">
                                <p class="gen-heading mb-3">Find your sweet spot</p>
                                <p class="gen-text mb-4">dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                                <a href="#!" class="cta-btn">View Detail</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-cardcontent">
                                <p class="gen-heading mb-3">Find your sweet spot</p>
                                <p class="gen-text mb-4">dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                                <a href="#!" class="cta-btn">View Detail</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-imagewrapper">
                                <img src="public/assets/images/sweetimg.png" class="image-fluid appsec1card-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                        <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-imagewrapper">
                                <img src="public/assets/images/sweetimg.png" class="image-fluid appsec1card-img">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-cardcontent">
                                <p class="gen-heading mb-3">Find your sweet spot</p>
                                <p class="gen-text mb-4">dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                                <a href="#!" class="cta-btn">View Detail</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-cardcontent">
                                <p class="gen-heading mb-3">Find your sweet spot</p>
                                <p class="gen-text mb-4">dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>
                                <a href="#!" class="cta-btn">View Detail</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pdd-0">
                            <div class="appsec1-imagewrapper">
                                <img src="public/assets/images/sweetimg.png" class="image-fluid appsec1card-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>

<section class="app-sec2">
    <div class="container">
        <div class="appsec2-wrapper">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="appsec2-leftwrapper">
                        <div class="appsec2-content">
                            <div class="appsec2-image">
                                <i class="fab fa-apple"></i>
                            </div>
                            <p class="gen-heading mrr-15">4.8</p>
                            <div class="star-wrapper mrr-15">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p class="gen-text">Based on 3.8M Ratings</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="appsec2-rightwrapper">
                        <div class="appsec2-leftwrapper">
                            <div class="appsec2-content">
                                <div class="appsec2-image">
                                    <i class="fab fa-google-play"></i>
                                </div>
                                <p class="gen-heading mrr-15">4.5</p>
                                <div class="star-wrapper mrr-15">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <p class="gen-text">Based on 481k Ratings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="app-sec3">
    <div class="container">
       <div class="appsec3-cardwrapper">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="real-estate-agent">
                        <div class="realestate-image">
                            <img src="public/assets/images/homeone.png" class="img-fluid home-img mb-4" alt="">
                        </div>
                        <div class="agentCard-bottomSect">
                            <p class="gen-heading mb-3">Buy a home</p>
                            <p class="gen-text">Aris 360 Agents earn twice the median pay of agents at other brokerages.Aris 360 Agents earn twice the median</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="real-estate-agent">
                       <div class="realestate-image">
                            <img src="public/assets/images/hometwo.png" class="img-fluid home-img mb-4" alt="">
                        </div>
                        <div class="agentCard-bottomSect">
                            <p class="gen-heading mb-3">Sell a home</p>
                            <p class="gen-text">Aris 360 Agents earn twice the median pay of agents at other brokerages.Aris 360 Agents earn twice the median</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="real-estate-agent">
                        <div class="realestate-image">
                            <img src="public/assets/images/homethree.png" class="img-fluid home-img mb-4" alt="">
                        </div>
                        <div class="agentCard-bottomSect">
                            <p class="gen-heading mb-3">Rent a home</p>
                            <p class="gen-text">Aris 360 Agents earn twice the median pay of agents at other brokerages.Aris 360 Agents earn twice the median</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>

<section class="app-sec4">
    <div class="container">
        <div class="search_top_sect">
            <div class="resource-center-titleSec">
                <p class="gen-heading mb-4">Search millions of new beginnings. Download the Arise 360 App.</p>
            </div>
            <div class="input-fieldwrapper mb-3">
                 <div class="input-fields">
                     <input type="text" placeholder="Enter your name" name="name" required="">
                 </div>
                  <div class="btn-box">
                    <a href="#!" class="theme-btn btn-one">Text me the free app</a>
                 </div>
             </div>
             <p class="gen-text mb-3">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
        </div>
    </div>
</section>

@endsection