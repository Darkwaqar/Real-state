@extends('properties.layouts.main')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

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
    height: 330px !important;
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
/*fifth-inner-page-ENd*/
/*sixth-page-start*/
.lender-sec1{
    padding:40px 0;
}
.lender-sec1 .guide-head{
    font-size: 25px;
    color: #282828;
    font-weight: 600;
    text-align: center;
}
.lender-cardwrap .count-text {
    font-size: 60px;
    color: #b90000;
    font-weight: 600;
}
.lender-cardwrap .gen-heading {
    font-size: 20px;
    color: #282828;
    font-weight: 500;
}
.lender-cardwrap .gen-text {
    font-size: 16px;
    color: #9e9e9e;
    font-weight: 400;
}
.lender-cardwrap {
    background: #fff;
    padding: 50px 10px;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 0 10px 0 #ccc;
    text-align: center;
}
.lender-cardwrap:before {
    content: '';
    position: absolute;
    left: 0;
    background: #b90000;
    height: 100%;
    width: 6px;
    top: 0;
    border-radius: 15px;
}
.lender-cardwrapper .tabs-btnwrap {
    text-align: center;
    margin-top: 35px;
}
.lender-content .gen-heading {
    font-size: 20px;
    color: #282828;
    font-weight: 500;
}
.lender-content .gen-text {
    font-size: 15px;
    color: #9e9e9e;
    font-weight: 400;
}
.lender-boxwrap {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 20px 10px;
}
.lender-boximage {
    background: #b90000;
    padding: 15px 10px;
    border-radius: 5px;
}
.lender-content {
    padding-left: 30px;
}
.lender-sec2 {
    padding: 20px 0;
}
.lender-sec3content .gen-heading{
    font-size: 20px;
    color: #282828;
    font-weight: 500;
}
.lender-sec3content .gen-text {
    font-size: 17px;
    color: #282828;
    max-width: 1060px;
    font-weight: 400;
}
.lender-sec3 {
    padding: 20px 0;
}
.lendex-sec3box {
    margin-top: 40px;
}
.lendex-sec3box {
    margin-top: 40px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 25px;
    max-width: 1040px;
}
.lender-sec4 {
    padding: 30px 0;
}
.lender-sec4 .lender-cardwrap {
    background: #fff;
    padding: 20px 18px;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 0 10px 0 #ccc;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lender-sec4  .lender-cardwrap .count-text {
    font-size: 70px;
    color: #b90000;
    font-weight: 600;
}
.lender-sec4boxwrap {
    margin-top: 40px;
}
.lender-numberleft{
    border:1px solid #b90000;
    padding:20px 30px;
    background:transparent;
    text-align:center;   
    min-height: 100px;
    max-height: 100px;
}
.lender-numberleft .gen-heading {
    font-size: 30px;
    color: #b90000;
    font-weight: 500;
}
.lender-numberleft .gen-text {
    font-size: 20px;
    color: #3b4144;
    font-weight: 500;
}
.lender-numberright{
    border:1px solid #b90000;
    padding:20px 30px;
    background:#b90000;
    text-align:center;
    min-height: 100px;
    max-height: 100px;
}
.lender-numberright .gen-heading{
   font-size: 30px;
    color: #fff;
    font-weight: 500;
}
.lender-numberright .gen-text{
   font-size: 20px;
    color:#fff;
    font-weight: 500;
}
.lender-sec5 {
    padding: 20px 0;
}
.lender-sec6{
    padding:30px 0;
}
.faq-lastcontent .gen-text{
    font-size:14px;
    color:#282828;
    font-weight:400;
}
.faq-lastcontent .red-content{
    font-size:14px;
    color: #b90000;
    font-weight:400;
    text-decoration:underline;
}
.faq-lastcontent {
    padding-left: 20px;
    max-width: 1130px;
}
.lender-sec7 {
    padding: 20px 0 170px 0px;
}
.lender-sec7 .line-wrapper .whysec2-contentwrap:before {
    content: '';
    background: #b90000;
    width: 92px;
    height: 7px;
    position: absolute;
    top: 0%;
    z-index: 1;
    left: 0;
}
.lender-sec7 .whysec2-contentwrap .gen-heading {
    font-size: 30px;
    color: #282828;
    font-weight: 500;
    max-width: 320px;
    line-height: 1.2;
}
.lender-sec7 .whysec2-contentwrap .gen-text {
    max-width: 640px;
}
.lender-sec7 .whysec2-contentwrap {
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    padding: 40px 30px;
    position: absolute;
    left: 7%;
    width: 530px;
    margin-top: -70px;
    border-radius: 0 10px 10px 10px;
}
.lender-sec7 .curve-dot {
    position: absolute;
    bottom: -62%;
    right: -18%;
    z-index: -1;
}
.lender-sec7 .whysec2-rightwrap {
    position: relative;
}
/*sixth-page-end*/
/*seven-page start*/
.resource-sec1 {
    padding: 80px 0;
}
.resource-boxhead .gen-text {
    color: #fff;
    font-size: 30px;
    font-weight: 600;
    text-transform: uppercase;
}
.resource-tophead {
    position: absolute;
    z-index: 999;
    top: 12%;
}
.resourcesec1-leftwrap {
    background: #fff;
    padding: 30px 50px;
    box-shadow: 0 0 10px 0 #ccc;
    border-radius: 5px;
    margin-left: 100px;
    margin-bottom: 90px;
    margin-top: -40px;
    z-index: -1;
    position: relative;
}
.resource-boxhead {
    max-width: 500px;
    background: #b90000;
    padding: 40px 30px;
    border-radius: 5px;
}
.first_time_homebuying_sect2.resource-sec1 {
    padding:0px 0 50px 0;
    position: relative;
    min-height: 1320px;
}
.resource-sec-2 {
    padding: 0 0 30px 0;
}
.resource-sec-2 .guide-head .gen-heading {
    font-size: 30px;
    color: #282828;
    font-weight: 600;
    text-align: center;
}
.client-container {
    padding-left: 130px;
}
.owl-buyer .guide-image img{
    max-width:100%;
}
.owl-buyer .guide-text .gen-heading {
    font-size: 16px;
    color: #b90000;
    font-weight: 500;
    text-align: left;
    line-height: 1.2;
}
.owl-buyer  .owl-nav {
    display: block;
    position: absolute;
    left: -3%;
    top: 40%;
}
.owl-buyer  .owl-next {
    display: none;
}
.owl-buyer .owl-prev {
    background: transparent;
    font-size: 55px;
}
.owl-buyer .guide-text {
    padding: 25px 40px;
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    border-radius: 0px 0px 10px 10px;
    margin-bottom: 20PX;
}


.owl-buyervideo .guide-image img{
    max-width:100%;
}
.owl-buyervideo  .owl-nav {
    display: block;
    position: absolute;
    left: -3%;
    top: 40%;
}
.owl-buyervideo  .owl-next {
    display: none;
}
.owl-buyervideo .owl-prev {
    background: transparent;
    font-size: 55px;
}
.owl-buyervideo .guide-text {
    padding: 25px 40px;
    background: #fff;
    box-shadow: 0 0 10px 0 #ccc;
    border-radius: 0px 0px 10px 10px;
    margin-bottom: 20PX;
    text-align: left;
    min-height: 210px;
    max-height: 210px;
    position:relative;
}
.owl-buyervideo .guide-text .gen-heading {
    font-size: 25px;
    color: #282828;
    font-weight: 400;
    text-align: left;
    max-width: 200px;
    line-height: 1.2;
}
.owl-buyervideo .guide-text  .gen-text{
    font-size: 16px;
    color: #777777;
    font-weight: 400;
    text-align:left;
}
.owl-buyervideo .guide-text  .read-text{
    font-size: 15px;
    color: #b90000;
    font-weight: 400;
    text-align:left;
    text-transform: uppercase;
}
.resource-sec3 .guide-head .gen-heading {
    font-size: 30px;
    color: #282828;
    font-weight: 600;
    text-align: center;
}
.owl-buyervideo .guide-text:after {
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    background: #b90000;
    top: -30px;
    right: 7%;
}
.resourcesec4-rightwrap .guide-head .gen-heading {
    font-size: 40px;
    color: #b90000;
    font-weight: 700;
    text-align: left;
}
.resourcesec4-rightwrap .title {
    font-size: 22px;
    color: #333;
    font-weight: 600;
}
.resourcesec4-rightwrap .theme-btn.btn-one {
    background-color: transparent;
    border: 1px solid #888888;
    color: #888888;
    padding: 10px 40px;
}
.resourcesec4-rightwrap .theme-btn.btn-one:hover {
   color:#fff;
   border:1px solid transparent;
   transition:all 0.5s ease-in-out;
}
.resourcesec1-leftwrap .theme-btn.btn-one {
    background-color: transparent;
    border: 1px solid #888888;
    color: #888888;
    padding: 10px 40px;
}
.resourcesec1-leftwrap .theme-btn.btn-one:hover {
   color:#fff;
   border:1px solid transparent;
   transition:all 0.5s ease-in-out;
}
.resourcesec4-rightwrap .guide-head {
    padding: 20px 0 40px 0;
}
.resource-sec4 {
    padding: 30px 0 50px 0;
}
/*seven page end*/
</style>

<section class="sell-home-sect1 why_choose_aris">
     <div class="container">
         <div class="sell-home-bannerSec">
             <h1>United States</h1>
             <h5 class="mt-2 text-light">Make The Smart Decision</h5>
         </div>
     </div>
</section>
<section class="sell-home-sect2 housing-marketsec1">
    <div class="container">
        <div class="search_top_sect">
            <div class="resource-center-titleSec">
                <p class="gen-heading mb-3">What is the Aris360 Home Values Index?</p>
                <p class="gen-text mb-3">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties, creating the largest multi-source real estate database.</p>
            </div>
            <p class="gen-text col-redd text-center">Learn More About the Aris360 Home value Index</p>
        </div>
    </div>
<!--    <section class="request-free-consultaion req-consultant-sell">-->
<!--    <div class="container">-->
<!--        <div class='row'>-->
<!--            <div class="col-lg-6 col-md-6 col-12">-->
<!--                <div class="about-homeloan-content">-->
<!--                    <p class="title">Request A <br> Free Consultation!!</p>-->
<!--                    <p class="para">This is Dummy-text This is Dummy-text<br> This is Dummy-text.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-6 col-md-6 col-12">-->
<!--              <form class="free-consultation-form">-->
<!--                    <p class="para">Where Are You Searching For Homes?</p>-->
<!--                    <input type="text" placeholder="Enter your name">-->
<!--                    <input type="email" placeholder="your email address *">-->
<!--                    <input type="text" placeholder="phone number">-->
<!--                    <input type="text" placeholder="Washington, DC">-->
<!--                    <textarea placeholder="your message"></textarea>-->
<!--                    <div class="btn-box mt-4 text-center">-->
<!--                        <a href="javascript:void(0)" class="theme-btn btn-one">SEND MESSAGE NOW</a>-->
<!--                    </div>-->
<!--              </form>  -->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
    <!--<div class="container-fluid mt-5">-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-8 col-md-12 col-12 p-0">-->
    <!--            <div class="sell-banner-image">-->
    <!--                <img src="public/assets/images/sell-img1.png" class="img-fluid">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-4 col-md-12 col-12">-->
    <!--            <div class="sell-banner-details">-->
    <!--                <p class="title2">Benefits Of Choosing Aris360</p>-->
    <!--                <p class="para">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties, creating the largest multi-source real estate database.</p>-->
    <!--                <p class="title2">Market Intelligence</p>-->
    <!--                <p class="para">Marketing tactics that are focused on the foundation of predictive analytics using transaction and mortgage data.</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</section>
<section class="housing-marketsec2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 pd-right0">
                <div class="housingsec2-leftwrap">
                    <div class="mapwrap">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6317584.638433441!2d-113.54731807648996!3d39.36171371551328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!3m2!1d37.7749295!2d-122.4194155!4m5!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!3m2!1d37.09024!2d-95.712891!5e0!3m2!1sen!2s!4v1677693782050!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 pd-left0">
                <div class="housingsec2-rightwrap">
                    <div class="housingsec2-contentwrap">
                        <p class="gen-heading mb-5">United States Key Take aways</p>
                        <p class="gen-text mb-2">Typical Home values: <span>$328,745</span></p>
                        <p class="gen-text mb-2">Typical Home values: <span>+8.7%</span></p>
                        <p class="light-text">(Data through january 31, 2023)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="housing-marketsec3">
   <div class="container">
       <div class="row">
            <div class="col-12 col-md-5 col-lg-5">
                <div class="housing-sec3left">
                    <div class="housing-sec3wrapper">
                        <p class="gen-heading mb-4">Market Overview</p>
                       <div class="housing-sec3text">
                            <p class="gen-text">0.7% <span> 1-Year Market Forecast </span> <span class="light-text">(january 31.2023)</span></p>
                       </div>
                        <div class="housing-sec3text">
                            <p class="gen-text">0.993% <span> Median Sale to list ratio </span> <span class="light-text">(january 31.2023)</span></p>
                       </div>
                        <div class="housing-sec3text">
                            <p class="gen-text">27.7% <span> Percent of sale over list Price </span> <span class="light-text">(january 31.2023)</span></p>
                       </div>
                        <div class="housing-sec3text">
                            <p class="gen-text">52.9% <span> Percent of under list Price </span> <span class="light-text">(january 31.2023)</span></p>
                       </div>
                        <div class="housing-sec3text" style="border-bottom:unset;">
                            <p class="gen-text mb-2">28% <span> Median days to pending </span> <span class="light-text">(january 31.2023)</span></p>
                       </div>
                       <p class="small-text mb-4">(Metric availability is based on market coverage and data)</p>
                    </div>
                    <div class="housing-sec3box">
                        <div class="whysec1-leftwrap mb-2">
                             <div class="whysec1-leftimage">
                                 <img src="public/assets/images/red-check.png" class="image-fluid data-img">
                             </div>
                            <div class="whysec1-contentwrap">
                                 <p class="gen-heading mb-2">How does this data help me ?</p>
                                 <p class="gen-text">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-lg-7">
                 <div class="housing-sec3right">
                     <div class="market-sec3content">
                        <div class="market-sec3head mb-3">
                            <div class="marketsec3-optionwrapper">
                                <!--select-start-->
                                <div class="wrap">
                                    <select>
                                      <option>Zillow Home value Index</option>
                                      <option>0</option>
                                      <option active>1</option>
                                      <option>2 </option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                    </select>
                                </div>
                                <!--select-end-->
                               <!--select-start-->
                                <div class="wrap">
                                    <select>
                                      <option>All homes</option>
                                      <option>lorem Ipsum</option>
                                      <option active>lorem Ipsum</option>
                                      <option>lorem Ipsum </option>
                                      <option>lorem Ipsum</option>
                                      <option>lorem Ipsum</option>
                                      <option>lorem Ipsum</option>
                                      <option>lorem Ipsum</option>
                                      <option>lorem Ipsum</option>
                                      <option>lorem Ipsum</option>
                                    </select>
                                </div>
                                <!--select-end-->
                            </div>
                             <div class="market-sec3-btnwrapper">
                                  <div class="market-sec3btn">
                                      <a href="#!" class="cta-btn-1 mb-3">1-Yr</a>
                                  </div>
                                   <div class="market-sec3btn">
                                      <a href="#!" class="cta-btn-1 mb-3">5-Yr</a>
                                  </div>
                                  <div class="market-sec3btn">
                                      <a href="#!" class="cta-btn-1 mb-3">Max</a>
                                  </div>
                             </div>
                         </div>
                         <div class="marketsec3-graph">
                             <div class="graph-text">
                                 <p class="gen-text">United States</p>
                             </div>
                             <div class="chart-wrapper mb-3">
                                 <canvas id="myChart"></canvas>
                             </div>
                         </div>
                         <div class="marketsec3-form">
                             <form>
                                 <div class="marketsec3-formwrapper">
                                     <div class="btn-box">
                                        <a href="#!" class="theme-btn btn-one">United States</a>
                                     </div>
                                     <div class="input-fieldwrapper">
                                         <div class="input-fields">
                                             <input type="text" placeholder="Enter your name" name="name" required="">
                                         </div>
                                          <div class="btn-box">
                                            <a href="#!" class="theme-btn btn-one">Submit</a>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
   </div>
</section>
<section class="housing-marketsec4">
    <div class="container">
        <div class="markesec4wrapper">
            <div class="marketsec4image">
                <img src="public/assets/images/localpartner.png" class="image-fluid data-img mb-3">
            </div>
            <p class="gen-heading mb-4">Move forward with a Local partner</p>
            <p class="gen-text mb-4">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
            <div class="btn-box">
                <a href="#!" class="theme-btn btn-one">Talk to a Local Agent</a>
            </div>
        </div>
    </div>
</section>
<section class="housing-marketsec5">
    <div class="container">
        <div class="marketsec5-boxwrapper">
            <div class="whysec1-leftwrap mb-2">
                 <div class="whysec1-leftimage">
                     <img src="public/assets/images/prequalified.png" class="image-fluid data-img">
                 </div>
                <div class="whysec1-contentwrap">
                     <p class="gen-heading mb-3">Aris can help you get pre-qualified</p>
                     <p class="gen-text mb-4">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
                     <div class="btn-box">
                        <a href="#!" class="theme-btn btn-one mb-3">Start Now</a>
                     </div>
                     <p class="gen-text">Aris Group Marketplace,Inc.NMLS #1303160</p>
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
<section class="payment-sec1">
    <div class="container">
        <div class="paymentsec1-benefitwrapper">
            <div class="paysec1-benefithead">
                <p class="gen-heading mb-3">Benefits</p>
                <p class="gen-text mb-3">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="paysec1-listwrap">
                         <div class="whysec1-leftwrap mb-3">
                             <div class="whysec1-leftimage">
                                 <img src="public/assets/images/redcross.png" class="image-fluid red-cross">
                             </div>
                            <div class="whysec1-contentwrap">
                                 <p class="gen-heading mrr-12">Lower Your mortgage payments</p>
                             </div>
                         </div>
                         <div class="whysec1-leftwrap mb-3">
                             <div class="whysec1-leftimage">
                                 <img src="public/assets/images/redcross.png" class="image-fluid red-cross">
                             </div>
                            <div class="whysec1-contentwrap">
                                 <p class="gen-heading mrr-12">Increase Your home budget</p>
                             </div>
                         </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="paysec1-listwrap">
                        <div class="whysec1-leftwrap mb-3">
                             <div class="whysec1-leftimage">
                                 <img src="public/assets/images/redcross.png" class="image-fluid red-cross">
                             </div>
                            <div class="whysec1-contentwrap">
                                 <p class="gen-heading mrr-12">Build home equity faster</p>
                             </div>
                         </div>
                         <div class="whysec1-leftwrap mb-3">
                             <div class="whysec1-leftimage">
                                 <img src="public/assets/images/redcross.png" class="image-fluid red-cross">
                             </div>
                            <div class="whysec1-contentwrap">
                                 <p class="gen-heading mrr-12">Purchase a home sooner</p>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="#!" class="theme-btn btn-one mb-4">Lower your mortgage costs</a>
             </div>
            <div class="paysec1-benefitfoot">
                <div class="paysec1-foothead">
                    <p class="gen-heading mb-3">Cost of $300,000 home with a 30-year mortgage with 6% APR</p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="mortgage-box1 max-one bck-colbrown  mb-2">
                            <div class="mortgage-percent border-right">
                                <p class="gen-heading">10%</p>
                            </div>
                            <div class="mortgage-pay">
                                <P class="gen-text">Down Payment<span>$30,000</span></P>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 pll-0">
                        <div class="mortgage-box1 max-two bck-colbrown mb-2">
                            <div class="mortgage-pay mrr-10">
                                <P class="gen-text">Down Payment<span>$9,000</span></P>
                            </div>
                            <div class="mortgage-percent border-left pll-18">
                                <p class="gen-heading">3%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="mortgage-box1 max-three bck-colred mb-2">
                            <div class="mortgage-pay">
                                <P class="gen-text">Monthly Payment<span>$1,752</span></P>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 pll-0">
                        <div class="mortgage-box1 max-four bck-colred mb-2">
                            <div class="mortgage-pay mrr-10">
                                <P class="gen-text text-left">Monthly Payment<span>$2,008</span></P>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="mortgage-box1 max-five bck-colgreen mb-2">
                            <div class="mortgage-pay text-end">
                                <P class="gen-text">Total interest over life of loan<span>$353,263</span></P>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 pll-0">
                        <div class="mortgage-box1 max-six bck-colgreen mb-2">
                            <div class="mortgage-pay mrr-10">
                                <P class="gen-text text-left">Total interest over life of loan<span>$380,739</span></P>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="foot-text">
                    <p class="gen-text">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties. including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="payment-sec-2">
    <div class="container">
        <div class="paysec1-benefithead">
            <p class="gen-heading mb-3">How to get down Payment assistance</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3">
               <div class="paysec2-box1">
                   <div class="pausec2-imgwrap mb-4">
                        <img src="public/assets/images/assone.png" class="image-fluid assimg">
                   </div>
                   <p class="gen-heading mb-3">Check eligibility</p>
                   <p class="gen-text">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
               </div> 
            </div>
             <div class="col-12 col-md-3 col-lg-3">
               <div class="paysec2-box1">
                   <div class="pausec2-imgwrap mb-4">
                        <img src="public/assets/images/asstwo.png" class="image-fluid assimg">
                   </div>
                   <p class="gen-heading mb-3">Explore Programs</p>
                   <p class="gen-text">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
               </div> 
            </div>
             <div class="col-12 col-md-3 col-lg-3">
               <div class="paysec2-box1">
                   <div class="pausec2-imgwrap mb-4">
                        <img src="public/assets/images/assthree.png" class="image-fluid assimg">
                   </div>
                   <p class="gen-heading mb-3">Talk to your lender</p>
                   <p class="gen-text">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
               </div> 
            </div>
             <div class="col-12 col-md-3 col-lg-3">
               <div class="paysec2-box1">
                   <div class="pausec2-imgwrap mb-4">
                        <img src="public/assets/images/assfour.png" class="image-fluid assimg">
                   </div>
                   <p class="gen-heading mb-3">Complete requirement</p>
                   <p class="gen-text">Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties.</p>
               </div> 
            </div>
        </div>
    </div>
</section>
<section class="payment-sec4">
    <div class="container">
        <div class="paysec4-contentwrap">
            <p class="gen-heading mb-3">Program eligibility</p>
            <p class="gen-text mb-3">Program availability varies by areas, and several eligibility factors are considered</p>
            <div class="eligibility-list mb-4">
                <p  class="gen-text mb-2">Household income</p>
                <p  class="gen-text mb-2">Household Size</p>
                <p  class="gen-text mb-2">Employement</p>
                <p  class="gen-text mb-2">Home ownership history</p>
            </div>
            <a href="#!"><p class="gen-head">Learn more</p></a>
        </div>
    </div>
</section>
<section class="payment-sec5">
    <div class="container">
          <div class="paysec4-contentwrap">
            <div class="btn-box">
                <a href="#!" class="theme-btn btn-one">see if you're eligible</a>
             </div>
        </div>         
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
                            <div class="container table-responsive"> 
                                <table class="table  table-hover">
                                  <thead class="table-data">
                                    <tr>
                                      <th scope="col">Loan Type</th>
                                      <th scope="col">Today's avg.</th>
                                      <th scope="col">Graph</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row" class="table-circle"><p>30-Year Fixed</p>
                                        <div class="inner-circle col-one"></div>
                                      </th>
                                      <td><p>6.52%</p></td>
                                      <td>
                                          <div class="form-check">
                        						<input type="checkbox" class="tab-checks">
                    					  </div>
                                      </td>

                                    </tr>
                                    <tr>
                                      <th scope="row" class="table-circle"><p>15-Year Fixed</p>
                                        <div class="inner-circle col-two"></div>
                                      </th>
                                      <td><p>5.73%</p></td>
                                      <td>
                                          <div class="form-check">
                        						<input type="checkbox" class="tab-checks">
                    					  </div>
                                      </td> 
                                    </tr>
                                    <tr>
                                      <th scope="row" class="table-circle"><p>5/1 ARM</p>
                                        <div class="inner-circle col-three"></div>
                                      </th>
                                      <td><p>5.98%</p></td>
                                      <td>
                                         <div class="form-check">
                        						<input type="checkbox" class="tab-checks">
                    					  </div>
                        			   </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <a href="#!" class="view-text">See More</a>
                            </div>
                        <!--table-end-->
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7">
                   <div class="guide-chartwrapper">
                        <div class="guide-chart">
                             <canvas id="myChart-1"></canvas>
                        </div>
                        <div class="guid-chartbtn">
                            <div class="btn-one">
                                <button class="chart-btns">1W</button>
                            </div>
                            <div class="btn-one">
                                <button class="chart-btns">1M</button>
                            </div>
                            <div class="btn-one">
                                <button class="chart-btns">3M</button>
                            </div>
                            <div class="btn-one">
                                <button class="chart-btns">6M</button>
                            </div>
                            <div class="btn-one">
                                <button class="chart-btns">1Y</button>
                            </div>
                            <div class="btn-one brr-0">
                                <button class="chart-btns">2Y</button>
                            </div>
                        </div>
                        <a href="#!" class="view-text mt-2">View as a Table</a>
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
<section class="lender-sec1">
    <div class="container">
         <div class="guide-head mb-4">
            <p class="gen-heading mb-1">How It Works</p>
        </div>
        <div class="lender-cardwrapper">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="lender-cardwrap">
                        <p class="count-text mb-4">1</p>
                        <p class="gen-heading mb-3">Answer a few questions</p>
                        <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</P>
                    </div>
                </div>
                  <div class="col-12 col-md-4 col-lg-4">
                    <div class="lender-cardwrap">
                        <p class="count-text mb-4">2</p>
                        <p class="gen-heading mb-3">Get data-driven result</p>
                        <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</P>
                    </div>
                </div>
                  <div class="col-12 col-md-4 col-lg-4">
                    <div class="lender-cardwrap">
                        <p class="count-text mb-4">3</p>
                        <p class="gen-heading mb-3">Talk to a local lender</p>
                        <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</P>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="tabs-btnwrap mt-4">
        		        <div class="btn-box">
                            <a href="#!" class="theme-btn btn-one">Get Started</a>
                        </div>
        		    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lender-sec2">
    <div class="container">
        <div class="guide-head mb-4">
            <p class="gen-heading mb-1">Why Pre-Qualifications Matters</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="lender-boxwrap">
                    <div class="lender-boximage">
                        <img src="public/assets/images/red-check.png" class="image-fluid data-img">
                    </div>
                    <div class="lender-content">
                        <p class="gen-heading mb-3">Find Your Comfort Zone</p>
                        <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</P>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="lender-boxwrap">
                    <div class="lender-boximage">
                        <img src="public/assets/images/red-check.png" class="image-fluid data-img">
                    </div>
                    <div class="lender-content">
                        <p class="gen-heading mb-3">Find Your Comfort Zone</p>
                        <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</P>
                    </div>
                </div>
            </div>
           <div class="col-12 col-md-4 col-lg-4">
                <div class="lender-boxwrap">
                    <div class="lender-boximage">
                        <img src="public/assets/images/red-check.png" class="image-fluid data-img">
                    </div>
                    <div class="lender-content">
                        <p class="gen-heading mb-3">Find Your Comfort Zone</p>
                        <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="lender-sec3">
    <div class="container">
        <div class="guide-head mb-4">
            <p class="gen-heading mb-1">Common Question about Lenders</p>
        </div>
        <div class="lendex-sec3box">
            <div class="lender-sec3content">
                <p class="gen-heading mb-3">will I get a ton of unwanted ohone calls from multiple lenders?</p>
                <p class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytextdummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytextdummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</p>
            </div>
        </div>
        <div class="lendex-sec3box">
            <div class="lender-sec3content">
                <p class="gen-heading mb-3">Is my information Secure</p>
                <p class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytextdummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytextdummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</p>
            </div>
        </div>
        <div class="lendex-sec3box" style="border-bottom:none">
            <div class="lender-sec3content">
                <p class="gen-heading mb-3">why Should I use this site to find a lender</p>
                <p class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytextdummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytextdummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext</p>
            </div>
        </div>
        <div class="tabs-btnwrap mt-4">
	        <div class="btn-box">
                <a href="#!" class="theme-btn btn-one">Find a Lender Now</a>
            </div>
	    </div>
    </div>
</section>
<section class="lender-sec4">
    <div class="container">
        <div class="guide-head mb-4">
            <p class="gen-heading mb-3">How We help You Find a Lender</p>
        </div>
        <div class="lender-sec4boxwrap">
             <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                   <div class="lender-cardwrap">
                       <div class="lender-cardtxt">
                            <p class="count-text">1</p>
                       </div>
                          <div class="lender-sec4-box">
                             <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext.</P>
                         </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                   <div class="lender-cardwrap">
                       <div class="lender-cardtxt">
                            <p class="count-text">2</p>
                       </div>
                          <div class="lender-sec4-box">
                             <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext.</P>
                         </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                   <div class="lender-cardwrap">
                       <div class="lender-cardtxt">
                            <p class="count-text">3</p>
                       </div>
                          <div class="lender-sec4-box">
                             <P class="gen-text">dummytext dummytext dummytext dummytext dummytext dummytext.</P>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lender-sec5">
       <div class="container">
            <div class="guide-head mb-4">
                <p class="gen-heading mb-3">Why Use Trulia's Mortgage Tools</p>
                <p class="gen-text">Overwhelmed by mortgage?Don't sweat it Here are some tool to help make it easier.</p>
            </div>
            <div class="lender-numberwrap">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 p-0">
                        <div class="lender-numberleft">
                           <p class="gen-heading mb-2">2000+</p> 
                           <p class="gen-text">Local Lenders</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 p-0">
                        <div class="lender-numberright">
                           <p class="gen-heading mb-2">350,000+</p> 
                           <p  class="gen-text">Lender Reviews</p>
                        </div>
                        
                    </div>
                </div>
            </div>
       </div>
</section>
<section class="guide-sec5 lender-sec6">
    <div class="container">
        <div class="guide-head mb-4">
            <p class="gen-heading mb-3">Frequently asked Question</p>
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
                  <div class="faq">
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
            <div class="faq-lastcontent mt-4">
                <p class="gen-text">
                    dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext
                    dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext
                    dummytext dummytext dummytext dummytext dummytext<span class="red-content">dummytext dummytext dummytext</span> 
                    dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext
                    dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext dummytext 
                    <span class="red-content">dummytext</span>
                </p>
            </div>
            <!--faq-end-->
        </div>
    </div>
</section>
<section class="whychoose-sec2 lender-sec7">
    <div class="container">
        <div class="guide-head mb-5">
            <p class="gen-heading mb-3">How to Choose the Right Lender for You</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="whysec2-leftwrap">
                    <div class="whysec2-rightimage">
                        <img src="public/assets/images/housekey.png" class="image-fluid housekeyimg">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="whysec2-rightwrap">
                    <div class="whysec2-rightimage">
                         <img src="public/assets/images/familyimg.png" class="image-fluid family-img">
                    </div>  
                    <div class="whysec2-contentwrapper line-wrapper">
                        <div class="whysec2-contentwrap">
                            <p class="gen-text">dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text  dummy text dummy text dummy text dummy text dummy text dummy text</p>
                        </div>
                    </div>
                    <img src="public/assets/images/curve-dot.png" class="image-fluid curve-dot">
                </div>
            </div>
        </div>
     
    </div>
</section>
<section class="first_time_homebuying_sect2 resource-sec1">
    <div class="container">
           <div class="resource-tophead">
             <div class="resource-boxhead">
                <p class="gen-text">Buying Your First Home</p>
             </div>
             <div class="resourcesec1-leftwrap">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="first_time_homebuying_icon">
                        <img src="public/assets/images/guide-book.png">
                    </div>
                </div>
            <div class="col-lg-9 col-md-9 col-12">
                <div class="first_time_homebuying_details">
                    <p class="title mb-3">Select a Property &amp; Contact Real Estate Agent </p>
                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                    <div class="btn-box">
                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Read guide</a>
                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Lee La guia</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row mt-5">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="first_time_homebuying_icon">
                    <img src="public/assets/images/guide-book.png">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
                <div class="first_time_homebuying_details">
                    <p class="title mb-3">Select a Property &amp; Contact Real Estate Agent </p>
                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                    <div class="btn-box">
                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Calculate Now</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row mt-5">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="first_time_homebuying_icon">
                    <img src="public/assets/images/guide-book.png">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
                <div class="first_time_homebuying_details">
                    <p class="title mb-3">Select a Property &amp; Contact Real Estate Agent </p>
                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                    <div class="btn-box">
                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row mt-5">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="first_time_homebuying_icon">
                    <img src="public/assets/images/guide-book.png">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
                <div class="first_time_homebuying_details">
                    <p class="title mb-3">Select a Property &amp; Contact Real Estate Agent </p>
                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                    <div class="btn-box">
                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
                     </div>
           </div>
           <div class="row">
               <div class="col-12 col-md-5 col-lg-5"></div>
                <div class="col-12 col-md-7 col-lg-7">
                   <div class="whysec1-rightimage">
                    <img src="public/assets/images/playimg.png" class="image-fluid">
                </div>
               </div>
           </div>
    </div>
</section>
<section class="resource-sec-2">
    <div class="container">
          <div class="guide-head">
            <p class="gen-heading">Home Buyer News & Insights</p>
        </div>
    </div>
     <div class="resourcesec2-slider">
            <!--slider-start-->
            <div class="client-container">
              <div id="owl-carousel" class="owl-carousel owl-buyer owl-theme">
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!--slider-end-->
        </div>
</section>
<section class="resource-sec3">
    <div class="container">
          <div class="guide-head">
            <p class="gen-heading">Home Buying Videos</p>
        </div>
    </div>
      <div class="resourcesec2-slider">
            <!--slider-start-->
            <div class="client-container">
              <div id="owl-carousel" class="owl-carousel owl-buyervideo owl-theme">
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!--slider-end-->
        </div>
</section>
<section class="resource-sec4">
    <div class="container">
        <div class="sec4-contentwrapper">
            <div class="row">
                <div classs="col-12 col-md-6 col-lg-6">
                    <div class="resourcesec4-leftwrap">
                        
                    </div>
                </div>
                <div classs="col-12 col-md-6 col-lg-6">
                    <div class="resourcesec4-rightwrap">
                        <div class="guide-head">
                            <p class="gen-heading">Understanding Mortgages</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="first_time_homebuying_icon">
                                    <img src="public/assets/images/guide-book.png">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="first_time_homebuying_details">
                                    <p class="title mb-2">Stress Free Guide to Getting a Mortgage </p>
                                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                                    <div class="btn-box">
                                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Read guide</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="first_time_homebuying_icon">
                                    <img src="public/assets/images/guide-book.png">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="first_time_homebuying_details">
                                    <p class="title mb-2">Mortgage Calculator </p>
                                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                                    <div class="btn-box">
                                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Read guide</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="first_time_homebuying_icon">
                                    <img src="public/assets/images/guide-book.png">
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-12">
                                <div class="first_time_homebuying_details">
                                    <p class="title mb-2">Mortgage 101 </p>
                                    <p class="paragraph mb-3">Search an address on Aris360 Property Listings and find agent contact information.</p>
                                    <div class="btn-box">
                                        <a href="https://demo.wizardinnovations.us/aris-new/home-buying-guide" class="theme-btn btn-one">Read guide</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="resource-sec-2">
    <div class="container">
          <div class="guide-head">
            <p class="gen-heading">Mortgage News & Advice</p>
        </div>
    </div>
     <div class="resourcesec2-slider">
            <!--slider-start-->
            <div class="client-container">
              <div id="owl-carousel" class="owl-carousel owl-buyer owl-theme">
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading">Download the First Time Home Buyer Buyers Guide</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!--slider-end-->
        </div>
</section>
<section class="resource-sec3">
    <div class="container">
          <div class="guide-head">
            <p class="gen-heading">Mortgage Videos</p>
        </div>
    </div>
      <div class="resourcesec2-slider">
            <!--slider-start-->
            <div class="client-container">
              <div id="owl-carousel" class="owl-carousel owl-buyervideo owl-theme">
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
                 <div class="item">
                    <div class="guide-cardwrap">
                        <div class="guide-image">
                            <img src="public/assets/images/guidcardone.png" class="image-fluid guidecardimg">
                        </div>
                        <div class="guide-text">
                            <p class="gen-heading mb-2">How to make the best offer</p>
                            <p class="gen-text mb-2">dummy text dummy text dummy text dummy text dummy text</p>
                            <a href="#!"><p class="read-text">Read More</p></a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!--slider-end-->
        </div>
</section>
<script>
    $('.owl-buyer').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay:true,
    autoplayTimeout:5000,
    smartSpeed: 1000,
    autoplayHoverPause:true,
    items : 5,
    responsive: {
    0: {
      items: 2
    },

    600: {
      items: 3
    },

    1024: {
      items: 5
    },

    1366: {
      items: 6
    }
  }
})
</script>
<script>
    $('.owl-buyervideo').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay:true,
    autoplayTimeout:5000,
    smartSpeed: 1000,
    autoplayHoverPause:true,
    items : 5,
    responsive: {
    0: {
      items: 2
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 5
    }
  }
})
</script>
<script>
    $('select').each(function(){
    var $this = $(this), selectOptions = $(this).children('option').length;
  
    $this.addClass('hide-select'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="custom-select"></div>');

    var $customSelect = $this.next('div.custom-select');
    $customSelect.text($this.children('option').eq(0).text());
  
    var $optionlist = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($customSelect);
  
    for (var i = 0; i < selectOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($optionlist);
    }
  
    var $optionlistItems = $optionlist.children('li');
  
    $customSelect.click(function(e) {
        e.stopPropagation();
        $('div.custom-select.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').slideToggle();
    });
  
    $optionlistItems.click(function(e) {
        e.stopPropagation();
        $customSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $optionlist.hide();
    });
  
    $(document).click(function() {
        $customSelect.removeClass('active');
        $optionlist.hide();
    });

});
</script>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["2015-7",	"2016-08",	"2017-08",	"2018-08",	"2019-08",	"2020-08",	"2021-09","2022-10","2023-11","2024-12"],
        datasets: [{
            data: [500,	50,	2424,	14040,	14141,	4111,	4544,	47,	5555], 
            fill: false,
            borderColor: '#b90000', 
            backgroundColor: '#b90000', 
            borderWidth: 1 
        }]},
    options: {
      responsive: true, 
      maintainAspectRatio: false, 
    }
});
</script>
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