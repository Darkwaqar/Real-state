@extends('properties.layouts.main')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<style>
/*fifth-inner-page-start*/
.guide-sec1 {
    padding: 40px 0 20px 0;
}
.guide-head .gen-heading{
    font-size: 24px;
    color: #282828;
    font-weight: 600;
    text-align:center;
}
.guide-head .gen-text{
    font-size: 17px;
    color: #282828;
    font-weight: 400;
    text-align:center;
}
.guide-text{
    padding:40px 40px;
}
.guide-text .gen-heading{
    font-size: 22px;
    color: #282828;
    font-weight: 600;
    text-align:center;
}
.guidecardimg {
    max-width: 360px;
    object-fit: cover;
    object-position: center;
}
.guide-cardwrap {
    margin-top: 40px;
}
.guide-text {
    padding: 25px 40px;
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    border-radius: 0px 0px 10px 10px;
}
.guide-sec2{
    padding:40px 0;
}
/*table-css*/
.table-guide tr td {
    padding: 20px 20px !important;
}
.tableguidehead{
    background:#b90000;
}
.tableguidehead tr th {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
}
.table-guide.table>tbody>tr>td, .table-guide.table>tbody>tr>th {
    vertical-align: middle;
}
.table-guide.table>thead>tr>th {
    vertical-align: middle;
}
.table-guide .gen-heading {
    font-size: 16px;
    font-weight: 600;
    color: #282828;
    margin-bottom: 0;
}
.table-guide .gen-text {
    font-size: 15px;
    font-weight: 400;
    color: #282828;
    margin-bottom: 0;
    max-width: 400px;
}
.tablefooters {
    max-width: 1050px;
    display: flex;
    justify-content: space-between;
}
.tablefooters .foottable-text{
    font-size: 13px;
    font-weight: 400;
    color: #282828;
    margin-bottom: 0;
}
.tablefooters .foottable-gentext a {
    color: #b90000;
    font-size: 13px;
    font-weight: 400;
}
.guidesc2-tablewrapper {
    margin-top: 30px;
}
.pdt-0{
    padding-top:0 !important;
}
.guide-sec3contentright {
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
}
.guide-sec3contentright .gen-text{
    font-size: 16px;
    color: #b90000;
    font-weight: 600;
    text-decoration:underline;
}
.bdb-0{
    border-bottom:0 !important;
}
.guide-sec3right .gen-heading {
    font-size: 32px;
    color: #282828;
    font-weight: 500;
    max-width: 300px;
    line-height: 1.1;
}
.guide-sec3right {
    margin-top:5px;
}
/*table-end*/
.guide-sec3content .whysec1-rightwrap:before {
    content: '';
    background: #e4a3a3;
    width: 380px;
    min-height: 260px;
    position: absolute;
    top: 7%;
    left: 25%;
    z-index: -1;
}
.guide-sec4 .guide-head .gen-text {
    max-width: 720px;
    margin: 0 auto;
}
.guide-sec4 {
    padding: 60px 0;
}
.tab-gentext{
    font-size: 15px;
    color: #b90000;
    font-weight: 500;
}
.nav-tabs.tabs-guide .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    color: #b90000;
}
.tab-wrappers .tab-content {
    padding: 40px 20px 20px 20px;
}
.tab-content {
    padding: 40px 20px 40px 20px;
    border: 1px solid #cccccc78;
    border-radius: 5px;
}
.tab-formwrapper .gen-text{
    color:#6b7780;
    font-size:17px;
    font-weight:500;
}
.tab-input {
    width: 100%;
    padding: 10px 20px;
    color: #000;
    font-size: 16px;
    font-weight: 400;
    border: 1px solid #ccc;
    border-radius: 50px;
}
.percnt-btn {
    background: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 0px 50px 50px 0;
    color: #282828;
    border: 1px solid #ccc;
    padding: 10px 60px 10px 20px;
    font-size: 16px;
    text-align: left;
    width: 145px;
}
.tab-percwrap {
    display: flex;
    align-items: baseline;
}
.tab-input.tab-input-two {
    width: 100%;
    padding: 10px 20px;
    color: #000;
    font-size: 16px;
    font-weight: 400;
    border: 1px solid #ccc;
    border-radius: 50px 0px 0px 50px;
    border-right: unset;
}
.tabs-perc-content {
    width: calc(100% - 150px);
}
.perc-btn {
    max-width: 150px;
    width: 100%;
}
/*tabs-select-start*/

.tabs-selectswrap .select {
    height: 50px;
    border: 1px solid #ccc;
    border-radius: 50px;
    position: relative;
    background: #fff;
}
.tabs-selectswrap .select * {
  user-select: none;
}
.tabs-selectswrap .select__control {
  position: relative;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 15px;
}

.tabs-selectswrap .select__view-button {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  cursor: pointer;
  z-index: 1;
  opacity: 0;
}
.tabs-selectswrap .select__view-button:checked ~ .select__options {
  display: block;
}
.tabs-selectswrap .select__view-button {
  transition: transform 0.25s;
}
.tabs-selectswrap .select__view-button:checked + .select__control > .control__chevron > i {
  transform: rotate(180deg);
  transition: transform 0.25s;
}
.tabs-selectswrap .select__options {
    position: absolute;
    display: none;
    top: 55px;
    left: 0;
    width: 100%;
    max-height: calc(7 * 40px);
    overflow: auto;
    box-shadow: 2px 2px 2px 0px rgb(58 58 58 / 10%);
    z-index: 999;
}
.tabs-selectswrap .select__options .options__option:last-child {
  border: none;
}
.tabs-selectswrap .options__option {
  height: 39px;
  display: flex;
  align-items: center;
  border-bottom: 1px solid #c4c4c4;
  font-family: "Work Sans", sans-serif;
  color: #515151;
  background: #fff;
}

.tabs-selectswrap .options__option input[type="radio"] {
  width: 100%;
  line-height: 40px;
  padding: 0 15px;
}

.tabs-selectswrap .options__option input[type="radio"]:checked + label {
  background: #b71a73;
  color: #fff;
  transition: background 0.25s, color 0.5s;
}

.tabs-selectswrap .options__option label {
  display: block;
  width: 100%;
  cursor: pointer;
  line-height: 39px;
  padding: 0 15px;
}

.tabs-selectswrap .options__option input[type="radio"] {
  display: none;
}
/*tabs-select-end*/
.select-check .gen-text {
    font-size: 17px;
    font-weight: 400;
    color: #282828;
    padding-left: 5px;
}
.select-check .form-check {
    padding-left: 0;
}
.tab-checks{
    transform: scale(1.1);
}
.tabs-btnwrap {
    text-align:center;
}
.tabs-btnwrap .theme-btn.btn-one {
    background-color: #b90000;
    border: 2px solid #b90000;
    color: white;
    padding: 7px 70px;
}
.guide-sec3content .whysec1-rightwrap .whysec1-rightimage {
    position: relative;
    text-align: right;
}
.playimgtwo {
    max-width: 400px;
    object-fit: cover;
    object-position: center;
}
.dotthree {
    max-width: 125px;
    object-fit: cover;
    object-position: center;
    position: absolute;
    bottom: 5%;
    left: 20%;
}
.reddotthree {
    max-width: 36px;
    object-fit: cover;
    object-position: center;
    position: absolute;
    right: 0;
    top: -4%;
}
.guide-sec3 {
    padding-top: 30px;
    padding-bottom: 10px;
}
/*faq-start*/
:root {
  --accent-color: #b90000;
}
.faq-container {
    max-width: 100%;
    margin: 0 auto;
    border-radius: 10px;
    overflow: hidden;
}
.faq {
    box-sizing: border-box;
    background: transparent;
    padding: 20px;
    position: relative;
    overflow: hidden;
}

.faq:not(:first-child) {
  border-top: 1px solid #e6e6e6;
}

.faq-title {
    font-size: 18px;
    color: #282828;
    font-weight: 400;
}

.faq-text {
  margin: 30px 0 0;
  display: none;
  line-height: 1.5rem;
}

.faq.active {
  background-color: #f8f8f8;
  box-shadow: inset 4px 0px 0px 0px var(--accent-color);
}

.faq.active .faq-title {
  color: var(--accent-color);
}

.faq.active .faq-text {
  display: block;
}

.faq-toggle {
    background-color: transparent;
    border: 1px solid #e6e6e6;
    color: inherit;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    padding-top: 3px;
    position: absolute;
    top: 15px;
    right: 30px;
    height: 30px;
    width: 30px;
    transition: 0.3s ease;
}

.faq-toggle:focus {
  outline: none;
}

.faq.active .faq-toggle {
  transform: rotate(180deg);
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: #fff;
}

/*faq-end*/
.guide-sec5 {
    padding-bottom: 60px;
}
.app-sec4.guide-sec6 {
    background: #f5f6f7;
    padding: 80px 0;
}
.app-sec4.guide-sec6 .gen-heading {
    font-size: 32px;
    color: #282828;
    font-weight: 600;
    max-width: 780px;
    margin: 0 auto;
    line-height: 1.2;
}
.app-sec4.guide-sec6 .gen-text {
    font-size: 17px;
    color: #000;
    font-weight: 400;
    max-width: 680px;
    margin: 0 auto;
    text-align: center;
}
.guide-sec6 .tabs-perc-content {
    width: 280px;
}
.guide-sec6 .tab-percwrap {
    display: flex;
    align-items: baseline;
    justify-content: center;
}
.guide-sec6 .percnt-btn {
    background: #b90000;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    border: 1px solid #b90000;
    padding: 10px 30px 10px 20px;
    font-size: 16px;
    text-align: left;
    width: 145px;
    border-radius: 0px 50px 50px 0px;
}
.guide-sec6 .percnt-btn:hover {
    color: #000;
    background: transparent;
    transition: all 0.55s ease-in-out;
}
.guide-sec6 .tab-input.tab-input-two {
    width: 100%;
    padding: 10px 20px;
    color: #000;
    font-size: 16px;
    font-weight: 400;
    border: 1px solid #ccc;
    border-radius: 50px 0px 0px 50px;
    border-right: unset;
}
.guide-graphsec5 {
    padding: 24px 0 30px 0;
}
.guide-chart #myChart-1 {
    height: 400px !important;
}
.guide-graphwrapper {
    margin-bottom: 40px;
}
.guid-chartbtn{
    border:1px solid #ccc;
    border-radius:10px;
    display:flex;
    margin-top: 40px;
}
.guid-chartbtn .btn-one {
    padding: 10px 40px;
    border-right: 1px solid #ccc;
    width: 100%;
    cursor:pointer;
}
.chart-btns {
    background: transparent;
    display: inline-block;
    color: #000;
    font-weight: 500;
    font-size: 16px;
}
.brr-0{
    border-right: unset !important;
}
.guid-chartbtn .btn-one:hover{
    background:#b90000;
    color:#fff;
    transition:all 0.5s ease-in-out;
}
.guid-chartbtn .btn-one:hover .chart-btns{
    color:#fff;
    transition:all 0.5s ease-in-out;
}
.view-text {
    font-size: 16px;
    color: #b90000;
    text-decoration: underline !important;
    font-weight: 400;
    display: inline-block;
}
.view-text:hover{
    color:#000;
}
.inner-circle{
    width:10px;
    height:10px;
    border-radius:50%;
    margin-left:10px;
} 
.col-one{
    background:#00adbb;
}
.col-two{
    background:#c2d500;
}
.col-three{
    background:#ff5e3f;
}
.table-circle{
    display:flex;
    align-items:baseline;
}
.chart-tablewrapper .view-text {
    font-size: 16px;
    color: #b90000;
    text-decoration: none;
    font-weight: 400;
    display: inline-block;
}
.guide-sec6  .search_top_sect {
    padding: 0px 0;
}
.banner-heading {
    font-size: 50px !important;
}
.guide-sec6.banner-inputs .percnt-btn {
    background: #b90000;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    border: 1px solid #b90000;
    padding: 10px 30px 10px 20px;
    font-size: 16px;
    text-align: left;
    width: 185px;
    border-radius: 0px 50px 50px 0px;
}
.guide-sec6.banner-inputs .tab-input.tab-input-two {
    width: 100%;
    padding: 10px 20px;
    color: #000;
    font-size: 16px;
    font-weight: 400;
    border: 1px solid #fff;
    border-radius: 50px 0px 0px 50px;
    border-right: unset;
}
.sell-home-sect1.why_choose_aris.mortgage-appsec1{
    background: url(public/assets/images/mortgageguidebann.png);
    height: 550px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.mortgage-appsec1 .sell-home-bannerSec h1 {
    line-height: 1.0;
}
/*fifth-inner-page-ENd*/
</style>
<section class="sell-home-sect1 why_choose_aris mortgage-appsec1">
     <div class="container">
         <div class="sell-home-bannerSec">
             <h1 class="banner-heading">Looking For a Mortgage? <br>Let Aris 360 be Your guide</h1>
             <h5 class="mt-2 banner-text text-light">Take The First Step And Get Pre-Qualified</h5>
         </div>
          <!--<div class="guide-sec6 banner-inputs mt-4">-->
          <!--    <div class="tab-formwrapper ">-->
          <!--      <div class="tab-percwrap">-->
          <!--         <div class="tabs-perc-content">-->
          <!--              <input name="address" type="text" placeholder="Enter Your ZipCode" class="tab-input tab-input-two">-->
          <!--         </div>-->
          <!--         <div class="perc-btn">-->
          <!--             <button type="submit" class="percnt-btn">Get Pre-Qualified</button>-->
          <!--         </div>-->
          <!--      </div>-->
          <!--  </div>-->
          <!--</div>-->
     </div>
</section>
<section class="guide-sec1">
    <div class="container">
        <div class="guide-head">
            <p class="gen-heading mb-1">Try our helpful mortgage tools</p>
            <p class="gen-text">Overwhelmed by mortgage?Don't sweat it Here are some tool to help make it easier.</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="guide-cardwrap">
                    <div class="guide-image">
                        <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                    </div>
                    <div class="guide-text">
                        <p class="gen-heading">Affordability Calculator</p>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-4 col-lg-4">
                <div class="guide-cardwrap">
                    <div class="guide-image">
                        <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                    </div>
                    <div class="guide-text">
                        <p class="gen-heading">Affordability Calculator</p>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-4 col-lg-4">
                <div class="guide-cardwrap">
                    <div class="guide-image">
                        <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                    </div>
                    <div class="guide-text">
                        <p class="gen-heading">Affordability Calculator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="guide-sec2">
    <div class="container">
        <div class="guide-head">
            <p class="gen-heading mb-1">Discover Your Loan Option</p>
            <p class="gen-text">Overwhelmed by mortgage?Don't sweat it Here are some tool to help make it easier.</p>
        </div>
        <div class="guidesc2-tablewrapper">
            <div class="table-responsive"> 
                <table class="table table-guide table-bordered table-hover">
                      <thead class="tableguidehead">
                        <tr>
                          <th scope="col">Loan type</th>
                          <th scope="col">Best for</th>
                          <th scope="col">Current avg.APR</th>
                          <th scope="col">Min.down payment*</th>
                          <th scope="col">More details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row"><p class="gen-heading">30-Year Fixed</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                        <tr>
                          <td scope="row"><p class="gen-heading">15-Year Fixed</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                        <tr>
                          <td scope="row"><p class="gen-heading">7/1 ARM</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                        <tr>
                          <td scope="row"><p class="gen-heading">5/1 ARM</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                        <tr>
                          <td scope="row"><p class="gen-heading">FHA 30-Year Fixed</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                        <tr>
                          <td scope="row"><p class="gen-heading">VA 30-Year Fixed</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                        <tr>
                          <td scope="row"><p class="gen-heading">Jumbo 30-Year Fixed</p></td>
                          <td><p class="gen-text">Low monthly payments that won't change</p></td>
                          <td><p class="gen-text">6.61%</p></td>
                          <td><p class="gen-text">3.0%</p></td>
                          <td><p class="gen-text">30-year fixed is the most common mortgage type fixed is the most common mortgage type</p></td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>
        <div class="tablefooters">
            <P class="foottable-text">*Actual minimum required down payment may vary depending on criteria established by the lender,invester or insureer of your loan</P>
            <p class="foottable-gentext"><a href="#!">See rate disclosures</a></p>
        </div>
    </div>
</section>
<section class="guide-sec3">
    <div class="container">
         <div class="guide-head mb-5">
            <p class="gen-heading mb-1">Read popular mortgage topics </p>
            <p class="gen-text">Overwhelmed by mortgage?Don't sweat it Here are some tool to help make it easier.</p>
        </div>
        <div class="guide-sec3content">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="whysec1-rightwrap">
                        <div class="whysec1-rightimage">
                            <img src="public/assets/images/playimgtwo.png" class="image-fluid playimgtwo">
                        </div>
                        <img src="public/assets/images/reddotthree.png" class="img-fluid reddotthree">
                        <img src="public/assets/images/dotthree.png" class="image-fluid dotthree">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="guide-sec3contentright pdt-0">
                        <P class="gen-text">How much house can you really afford</P>
                    </div>
                    <div class="guide-sec3contentright">
                        <P class="gen-text">How to get a loan with bad credit</P>
                    </div>
                    <div class="guide-sec3contentright">
                        <P class="gen-text">Tax Benefits of home ownership</P>
                    </div>
                    <div class="guide-sec3contentright bdb-0">
                        <P class="gen-text">4VA loan myth that hurt buyers and sellers</P>
                    </div>
                    <div class="guide-sec3right">
                        <P class="gen-heading">How to build and improve your credit</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="guide-sec4">
    <div class="container">
         <div class="guide-head mb-5">
            <p class="gen-heading mb-3">Get rates for your unique scenario </p>
            <p class="gen-text">Overwhelmed by mortgage?Don't sweat it Here are some tool to help make it easier.Overwhelmed by mortgage?Don't sweat it</p>
        </div>
        <div class="tabs-wrapper">
            <ul class="nav tabs-guide nav-tabs" role="tablist">
            	<li class="nav-item">
            		<a class="nav-link tab-gentext active" data-toggle="tab" href="#tabs-1" role="tab">Purchase</a>
            	</li>
            	<li class="nav-item">
            		<a class="nav-link tab-gentext" data-toggle="tab" href="#tabs-2" role="tab">Refinance</a>
            	</li>
            </ul><!-- Tab panes -->
            <div class="tab-content">
            	<div class="tab-pane active" id="tabs-1" role="tabpanel">
            		<div class="tabs-form">
            		    <div class="row">
            		        <div class="col-12 col-md-6 col-lg-6">
            		            <div class="tab-formwrapper">
            		                <p class="gen-text mb-1">Zip Code</p>
            		                <input name="address" type="text" placeholder="Enter Your ZipCode"  class="tab-input">
            		            </div>
            		        </div>
            		        <div class="col-12 col-md-6 col-lg-6">
        		                <div class="tab-formwrapper  mb-3">
            		                <p class="gen-text mb-1">Purchase Price</p>
            		                <input name="address" type="text" placeholder="Enter Your ZipCode"  class="tab-input">
            		            </div>
            		        </div>
            		    </div>
            		    <div class="row">
            		        <div class="col-12 col-md-6 col-lg-6">
            		            <div class="tab-formwrapper">
    		                        <p class="gen-text mb-1">Down Payment</p>
            		                <div class="tab-percwrap">
            		                   <div class="tabs-perc-content">
            		                        <input name="address" type="text" placeholder="Enter Your ZipCode"  class="tab-input tab-input-two">
            		                   </div>
            		                   <div class="perc-btn">
            		                       <button type="submit" class="percnt-btn">20%</button>
            		                   </div>
            		                </div>
            		            </div>
            		        </div>
            		        <div class="col-12 col-md-6 col-lg-6">
            		            <div class="tab-formwrapper mb-4">
    		                        <p class="gen-text mb-1">Crdit Score</p>
                                     <!--tabs-select-start-->
                                     <div class="tabs-selectswrap">
                                         <div class="select">
                                            <input type="checkbox" class="select__view-button">
                                            <div class="select__control">
                                                <div class="control__label">Select a value</div>
                                                <div class="control__chevron">
                                                    <i class="fa fa-chevron-down"></i>
                                                </div>
                                            </div>
                                            <div class="select__options">
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option1" name="option">
                                                    <label for="option1">
                                                        lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option2" name="option">
                                                    <label for="option2">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option3" name="option">
                                                    <label for="option3">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option4" name="option">
                                                    <label for="option4">
                                                         lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option5" name="option">
                                                    <label for="option5">
                                                         lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option6" name="option">
                                                    <label for="option6">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option7" name="option">
                                                    <label for="option7">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <!--tabs-select-end-->
            		            </div>
            		        </div>
            		    </div>
            		    <div class="select-check mb-3">
	        				<div class="form-check">
        						<input type="checkbox" class="tab-checks" id="miltary">
        						<label for="miltary" class="gen-text">Served in the U.S. Military</label>
        					</div>
            		    </div>
            		    <div class="tabs-btnwrap">
            		        <div class="btn-box">
                                <a href="#!" class="theme-btn btn-one">See Rates</a>
                             </div>
            		    </div>
            		</div>
            	</div>
            	<div class="tab-pane" id="tabs-2" role="tabpanel">
            		<div class="tabs-form">
            		    <div class="row">
            		        <div class="col-12 col-md-6 col-lg-6">
            		            <div class="tab-formwrapper">
            		                <p class="gen-text mb-1">Zip Code2</p>
            		                <input name="address" type="text" placeholder="Enter Your ZipCode"  class="tab-input">
            		            </div>
            		        </div>
            		        <div class="col-12 col-md-6 col-lg-6">
        		                <div class="tab-formwrapper  mb-3">
            		                <p class="gen-text mb-1">Purchase Price2</p>
            		                <input name="address" type="text" placeholder="Enter Your ZipCode"  class="tab-input">
            		            </div>
            		        </div>
            		    </div>
            		    <div class="row">
            		        <div class="col-12 col-md-6 col-lg-6">
            		            <div class="tab-formwrapper">
    		                        <p class="gen-text mb-1">Down Payment2</p>
            		                <div class="tab-percwrap">
            		                   <div class="tabs-perc-content">
            		                        <input name="address" type="text" placeholder="Enter Your ZipCode"  class="tab-input tab-input-two">
            		                   </div>
            		                   <div class="perc-btn">
            		                       <button type="submit" class="percnt-btn">20%</button>
            		                   </div>
            		                </div>
            		            </div>
            		        </div>
            		        <div class="col-12 col-md-6 col-lg-6">
            		            <div class="tab-formwrapper mb-4">
    		                        <p class="gen-text mb-1">Crdit Score2</p>
                                     <!--tabs-select-start-->
                                     <div class="tabs-selectswrap">
                                         <div class="select">
                                            <input type="checkbox" class="select__view-button">
                                            <div class="select__control">
                                                <div class="control__label">Select a value</div>
                                                <div class="control__chevron">
                                                    <i class="fa fa-chevron-down"></i>
                                                </div>
                                            </div>
                                            <div class="select__options">
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option1" name="option">
                                                    <label for="option1">
                                                        lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option2" name="option">
                                                    <label for="option2">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option3" name="option">
                                                    <label for="option3">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option4" name="option">
                                                    <label for="option4">
                                                         lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option5" name="option">
                                                    <label for="option5">
                                                         lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option6" name="option">
                                                    <label for="option6">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                                <div class="options__option">
                                                    <input type="radio" class="option" id="option7" name="option">
                                                    <label for="option7">
                                                          lorem Ipsum
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <!--tabs-select-end-->
            		            </div>
            		        </div>
            		    </div>
            		    <div class="select-check mb-3">
	        				<div class="form-check">
        						<input type="checkbox" class="tab-checks" id="miltary">
        						<label for="miltary" class="gen-text">Served in the U.S. Military</label>
        					</div>
            		    </div>
            		    <div class="tabs-btnwrap">
            		        <div class="btn-box">
                                <a href="#!" class="theme-btn btn-one">See Rates</a>
                             </div>
            		    </div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
</section>
<section class="guide-graphsec5">
    <div class="container">
       <div class="guide-head mb-5">
            <p class="gen-heading mb-3">See today's national average interest rates </p>
            <p class="gen-text">Overwhelmed by mortgage?Don't sweat it Here are some tool to help make it easier.</p>
        </div>
        <div class="guide-graphwrapper">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="chart-tablewrapper">
                        <!--table-start-->
                           <!-- <div class="container table-responsive"> -->
                           <!--     <table class="table  table-hover">-->
                           <!--       <thead class="table-data">-->
                           <!--         <tr>-->
                           <!--           <th scope="col">Loan Type</th>-->
                           <!--           <th scope="col">Today's avg.</th>-->
                           <!--           <th scope="col">Graph</th>-->
                           <!--         </tr>-->
                           <!--       </thead>-->
                           <!--       <tbody>-->
                           <!--         <tr>-->
                           <!--           <th scope="row" class="table-circle"><p>30-Year Fixed</p>-->
                           <!--             <div class="inner-circle col-one"></div>-->
                           <!--           </th>-->
                           <!--           <td><p>6.52%</p></td>-->
                           <!--           <td>-->
                           <!--               <div class="form-check">-->
                        			<!--			<input type="checkbox" class="tab-checks">-->
                    					  <!--</div>-->
                           <!--           </td>-->

                           <!--         </tr>-->
                           <!--         <tr>-->
                           <!--           <th scope="row" class="table-circle"><p>15-Year Fixed</p>-->
                           <!--             <div class="inner-circle col-two"></div>-->
                           <!--           </th>-->
                           <!--           <td><p>5.73%</p></td>-->
                           <!--           <td>-->
                           <!--               <div class="form-check">-->
                        			<!--			<input type="checkbox" class="tab-checks">-->
                    					  <!--</div>-->
                           <!--           </td> -->
                           <!--         </tr>-->
                           <!--         <tr>-->
                           <!--           <th scope="row" class="table-circle"><p>5/1 ARM</p>-->
                           <!--             <div class="inner-circle col-three"></div>-->
                           <!--           </th>-->
                           <!--           <td><p>5.98%</p></td>-->
                           <!--           <td>-->
                           <!--              <div class="form-check">-->
                        			<!--			<input type="checkbox" class="tab-checks">-->
                    					  <!--</div>-->
                        			<!--   </td>-->
                           <!--         </tr>-->
                           <!--       </tbody>-->
                           <!--     </table>-->
                           <!--     <a href="#!" class="view-text">See More</a>-->
                           <!-- </div>-->
                        <!--table-end-->
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                   <div class="guide-chartwrapper">
                        <div class="guide-chart">
                             <canvas id="myChart-1"></canvas>
                        </div>
                        <!--<div class="guid-chartbtn">-->
                        <!--    <div class="btn-one">-->
                        <!--        <button class="chart-btns">1W</button>-->
                        <!--    </div>-->
                        <!--    <div class="btn-one">-->
                        <!--        <button class="chart-btns">1M</button>-->
                        <!--    </div>-->
                        <!--    <div class="btn-one">-->
                        <!--        <button class="chart-btns">3M</button>-->
                        <!--    </div>-->
                        <!--    <div class="btn-one">-->
                        <!--        <button class="chart-btns">6M</button>-->
                        <!--    </div>-->
                        <!--    <div class="btn-one">-->
                        <!--        <button class="chart-btns">1Y</button>-->
                        <!--    </div>-->
                        <!--    <div class="btn-one brr-0">-->
                        <!--        <button class="chart-btns">2Y</button>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<a href="#!" class="view-text mt-2">View as a Table</a>-->
                   </div>
 
                </div>
            </div>
        </div>
    </div>
</section>
<section class="guide-sec5">
    <div class="container">
        <div class="guide-head mb-4">
            <p class="gen-heading mb-3">Most-asked mortgage questions</p>
        </div>
        <div class="faqs-wrapper">
            <!--faq-start-->
            <div class="faq-container">
                  <div class="faq">
                        <h3 class="faq-title">
                          How much do you you need to put down on a house?
                        </h3>
                        <p class="faq-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod nobis, repellat neque non dicta
                          fugiat veritatis sit delectus perspiciatis quis?</p>
                        <button class="faq-toggle">
                          <i class="fas fa-angle-down"></i>
                        </button>
                  </div>
                  <div class="faq active">
                        <h3 class="faq-title">
                          How do I choose a mortgage lender? 
                        </h3>
                        <p class="faq-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod nobis, repellat neque non dicta
                          fugiat veritatis sit delectus perspiciatis quis?</p>
                        <button class="faq-toggle">
                          <i class="fas fa-angle-down"></i>
                        </button>
                  </div>
                  <div class="faq">
                        <h3 class="faq-title">
                           How much mortgage can I afford?
                        </h3>
                        <p class="faq-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod nobis, repellat neque non dicta
                          fugiat veritatis sit delectus perspiciatis quis?</p>
                        <button class="faq-toggle">
                          <i class="fas fa-angle-down"></i>
                        </button>
                  </div>
                  <div class="faq">
                        <h3 class="faq-title">
                          what is mortgage pre-qualification?
                        </h3>
                        <p class="faq-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod nobis, repellat neque non dicta
                          fugiat veritatis sit delectus perspiciatis quis?</p>
                        <button class="faq-toggle">
                          <i class="fas fa-angle-down"></i>
                        </button>
                  </div>
                  <div class="faq">
                        <h3 class="faq-title">
                           How do I qualify to buy a home 
                        </h3>
                        <p class="faq-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod nobis, repellat neque non dicta
                          fugiat veritatis sit delectus perspiciatis quis?</p>
                        <button class="faq-toggle">
                          <i class="fas fa-angle-down"></i>
                        </button>
                  </div>
            </div>
            <!--faq-end-->
        </div>
    </div>
</section>
<section class="app-sec4 guide-sec6">
    <div class="container">
        <div class="search_top_sect mb-4">
            <div class="resource-center-titleSec">
                <p class="gen-heading mb-3">Get help from a local lender.</p>
            </div>
             <p class="gen-text mb-3">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
        </div>
        <div class="tab-formwrapper">
            <div class="tab-percwrap">
               <div class="tabs-perc-content">
                    <input name="address" type="text" placeholder="Enter Your ZipCode" class="tab-input tab-input-two">
               </div>
               <div class="perc-btn">
                   <button type="submit" class="percnt-btn">Get Started</button>
               </div>
            </div>
        </div>
    </div>
</section>
<script>
var ctx = document.getElementById("myChart-1").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["January",	"Feburary","March","April","May","June","July","August","Sep","Oct"],
        datasets: [{
            label: 'Series 1', 
            data: [1.5,	2.5,3.5,4.5,6.5,7.5,8.5,7.5,9.5,9], 
            fill: false,
            borderColor: '#b90000', 
            backgroundColor: '#b90000',
            borderWidth: 1 
        },
                  {
            label: 'Series 2', 
             data: [2.5,1.5,4.5,3.5,5.5,6.5,7.5,4.5,8.9,7], 
            fill: false,
            borderColor: '#c3d121', 
            backgroundColor: '#c3d121', 
            borderWidth: 1 
        },
              {
            label: 'Series 3', 
            data: [5.5,4.5,3.5,1.5,6.5,4.5,3.5,1.5,2.8,6],  
            fill: false,
            borderColor: '#30bdc8', 
            backgroundColor: '#30bdc8', 
            borderWidth: 1 
        }
        
        ]
    },
    options: {
      responsive: true, 
      maintainAspectRatio: false, 
    }
});
</script>
<script>
const buttons = document.querySelectorAll(".faq-toggle");
buttons.forEach((button) => {
  button.addEventListener("click", () =>
    button.parentElement.classList.toggle("active")
  );
});
</script>

@endsection