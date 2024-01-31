@extends('common.web.layout.base')
{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
@section('styles')
@parent
<?php $id=1; ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
  .pac-container{
    z-index: 999999999!important;
  }

    .address-block .address-set .address-category {
    color: #fff;
    font-size: 85px;
    opacity: .2;
    position: absolute;
    right: 8px;
    top: 5px;
}
.address-block .address-set h5 {
    font-size: 16px;
    font-weight: 500;
    margin: 0;
    color: #fff;
}
.address-block .address-set p {
    font-size: 18px !important;
    color: #fff !important;
    font-weight: 300;
}
 .dash-section {
    padding: 70px 60px;
    
}
   .serivce-demands {padding: 150px 0;}
   .centers-text{display: flex; flex-wrap: wrap; justify-items: center; align-items: center;}
   .serivce-demands .media-img img {width: 100%;height: 300px;object-fit: cover;padding-right: 15%;}
   .serivce-demands .media-text h3 {color: #000;line-height: 38px;margin-bottom: 15px; font-weight: 500;}
   .serivce-demands .media-text p {color: #000; font-size: 14px;}

   /*services cab*/
   .service-cabs {background-color: rgba(255, 255, 255, 0.737); padding: 30px 0;}
   .service-cabs h2 {font-size: 32px;line-height: 40px;margin-bottom: 15px;color: #000; font-weight: 500;}
   .service-cabs p {color: #000; font-size: 15px;}
  .service-cabs .owl-nav .owl-prev span {font-size: 0px;width: 50px;height: 50px;line-height: 50px;border-radius: 50%;display: block;color: #3c3b3b;border-color: #cccccc;background: #d6d6d6;position: relative;top: 18px;
}
  .service-cabs .owl-nav .owl-prev span:before {content: "\f060";position: absolute;font-size: 22px;font-family: FontAwesome;left: 0;right: 0;top: 0px;
}
  .service-cabs .owl-nav .owl-next span {font-size: 0px; width: 50px; height: 50px; line-height: 50px; display: block; color: #fff; border-radius: 50%; border-color: #f26822; background: #f26822; position: relative;}
   .service-cabs .owl-nav .owl-next span:before {content: "\f061";position: absolute;font-size: 22px;font-family: FontAwesome;left: 0;right: 0;top: 0px;
}
  .owl-theme .owl-nav [class*='owl-']:hover, .owl-theme .owl-nav [class*='owl-']:focus {background: transparent; border: none; outline: none;}
  .service-cabs .owl-nav {position: absolute;right: 11%;top: -132px;}
  .service-cabs .owl-nav .owl-prev {left: 0px; }
  .service-cabs .owl-nav .owl-next {left: 50px;top:-2px; }
  .service-cabs .cabs-box {text-align: center; display: block; background:#ff8548; padding: 30px;
    border-radius: 30px;  margin-right: 8px;  box-shadow: 0 0 5px 1px #dedddd;}
  div#better .owl-stage{padding-right: 0; padding-left: 0;}
  div#better .owl-stage {padding-top: 40px !important; padding-bottom: 40px !important;}
  .service-cabs .entry-details {display: none;transition: all .3s;}
  .service-cabs .owl-item.lookp .carousel-item.took .entry-details {display: none;transition: all .3s;}  
.service-cabs .entry-overlay {transition: all .3s;}
  .service-cabs .owl-item.lookp .carousel-item.took .entry-overlay {display: block;transition: all .3s;}
.service-cabs .btn {background: #000;color: #f26822 !important;}
.service-cabs .owl-item.lookp .carousel-item.took .entry-overlay p {font-size: 13px; font-weight: 400; color:white;}
.service-cabs .owl-item .cabs-box .entry-img {margin: 20px 0;}
.service-cabs .owl-item.lookp .carousel-item.took .cabs-box .entry-img {margin: 10px 0;}
#better .owl-item.lookp {z-index: 99;}
.owl-item .carousel-item.took{ -webkit-transition: all .3s linear 0s; transition: all .3s linear 0s;}
.owl-item.lookp .carousel-item.took {transform: scale(1.1); -webkit-transition: all .3s linear 0s; transition: all .3s linear 0s;}
.service-cabs .main-title {margin-bottom:35px}
.service-cabs .cabs-box .entry-img img {max-width: 38%;display: block;margin: 0 auto;height: 48px;}
.service-cabs .cabs-box.current .entry-overlay {display: block;transition: all .3s;}
.service-cabs .btn:hover {transition: all .3s;background: #000;color: #fff !important;}
.service-cabs .btn {background: #fff; color: #000 !important; border: 2px solid #000 !important;border-radius: 25px !important;}
.service-cabs .entry-details ul{max-width: 125px; text-align: left; margin-left: 55%; transform: translateX(-50%);color: white;}
.service-cabs .entry-details ul span {margin-right: 8px;}
.service-cabs .cabs-box .entry-header h3 {font-size: 24px;color: #000;font-weight: 400;}
.carousel-item.took {display: block !important;}
.carousel-item.took{
    width:95%;
}
.cabs-box h3{
color: rgb(79, 76, 76) !important;
font-weight: 700;
}
.cabs-box img{
    display: block;
    margin: 0 auto;
    width: 100px !important;
}
.owl-item{
    width: 300px !important;
}


    header h2{
    font-weight: 400;
    font-size: 60px;
    line-height: 1.5;
    color: white !important;
    letter-spacing: 0;
    margin-top: 90px!important;
    margin-bottom: 20px;
}
header p{
    color: white !important;
    font-size: 20px;
    margin-bottom: 25px !important;
}
h4{
    font-size: 35px !important;
    font-weight: 400 !important;
    
    margin-bottom: 10px !important;
}
header{
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
    url("https://gridetech.com/assets/layout/images/food-delivery.jpeg");
    background-repeat: no-repeat;
  background-size: cover;
  color: white;
  text-align: center;
  padding: 300px 0;
}

.driver-signup{
    padding: 10px 20px;
    border-radius: 4px;
    background:#f26822;
    color:white;
    border: solid 1px black;
    font-size: 16px; 
    cursor: pointer;
}
.driver-signup:hover{
    border: solid 1px #f26822;
    background:white;
    color:#f26822;
}
    header .menu-item {
    padding: 0px 12px;
}
 
.section1 h1{
    text-align: center;
}

.food-delivery{
padding: 50px 40px 50px 40px
}


.wrap{
   display: block;
   margin: 0 auto;
   width: 30%;
   padding-left: 0 !important;

 }
 .wrap h1{
     padding-bottom: 30px;
 }
 .search {
  width: 100%;
  display: flex;
  padding-left: 0 !important;
}

.searchTerm {
  width: 100%;
  border: 3px solid #f26822;
  border-right: none;
 font-size: 20px;
  height: 50px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #575962;;
}

.searchButton {
  width: 70px;
  height: 50px;
  border: 1px solid #f26822;
  background: #f26822;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
.search-items{
    margin-top: 150px;
   
}
.item a:hover{
text-decoration: none;
}

.owl-stage{
    padding-left: 43px!important;
}
.page-wrapper {
    /* padding-top: 10px; */
    z-index: 1;
    position: relative;
}
.result-show {
    /* padding: 10px 0px; */
    border-bottom: 1px solid #eaebeb;
    color: #7e8085;
    /* margin-bottom: 20px; */
}
.location-title {
    font-weight: 700;
    color: #3d4152;
    float: left;
}
.landmark {
    display: block;
    min-width: 30px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
.city {
    display: block;
    padding-left: 5px;
    margin-left: 5px;
    color: #686b78;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
.arrow-icon {
    position: absolute;
    right: -12px;
    top: 40%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: .9rem;
    color: #f26822;
    font-weight: 700;
}
.dis-ver-center {
    display: flex;
    align-items: center;
}
.sidebar {
    float: left;
    width: 100%;
}
.widget.style2 {
    padding: 0;
}
.widget-title2 {
    float: left;
    width: 100%;
    font-size: 16px !important;
    color: #575962;
    font-weight: 500;
    position: relative;
   padding-left: 20px;
    
    margin-top: 0;
    letter-spacing: 0;
}

.widget-data {
    float: left;
    width: 100%;
    position: relative;
    background-color: #f4f4fb;
    padding: 50px 15px;
    overflow: hidden;
    margin-bottom: 50px;
}
.widget ul {
    padding: 0 !important;
    list-style: none;
    margin-bottom: 0;
    display: flex;
}
.check-box [type="checkbox"]:checked, .check-box [type="checkbox"]:not(:checked) {
    position: absolute;
    margin-top: 3px;
}
input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}
.check-box [type="checkbox"]:checked+label, .check-box [type="checkbox"]:not(:checked)+label {
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    display: inline-block;
    margin-bottom: 0;
}
.widget.style2 ul li+li {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid #ededed;
}
.widget ul li {
    font-size: 13px;
    color: #575962;
    float: left;
    width: 100%;
    position: relative;
    margin-top: 12px;
    margin-bottom: 12px;
}
.restaurant-entry {
    /* border: 1px solid #eaebeb; */
    border-radius: 4px;
    margin-bottom: 20px;
    background: #fff;
    /* padding: 10px 15px; */
    display: flex;
    margin: 10px 0px 20px;
    position: relative;
    flex-direction: column;
    box-shadow: 0px 2px 5px rgb(0 0 0 / 9%);
}
.restaurant-entry .entry-logo {
    /* float: left; */
    /* height: auto; */
    /* border: 1px dashed #eaebeb; */
    border-radius: 4px;
    margin-bottom: 5px;
    /* margin-left: 15px; */
    overflow: hidden;
    /* display: flex; */
    width: 100%;
    justify-content: center;
}
.food-item-wrap .figure-wrap {
    position: relative;
    /* height: 210px; */
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
.restaurant-entry .entry-logo img {
    display: block;
    width: 100%;
    object-fit: cover;
    height: 250px;
}
.restaurant-entry .img-fluid .post-rate {
    background: #ffa342;
    color: #fff;
    padding: 6px 10px;
    /* margin-left: 20px; */
    border-radius: 4px;
    font-weight: 700;
    position: absolute;
    top: 10px;
    left: 10px;
}
.restaurant-entry .entry-dscr {
    padding: 0px 15px 15px;
    /* margin-top: -55px; */
    /* text-align: center; */
}
.restaurant-entry .entry-dscr a {
    color: #575962;
    font-size: 22px;
    font-weight: 500;
}
.restaurant-entry .entry-dscr span {
    font-size: 12px;
    line-height: 1.5;
}
.restaurant-entry {
    /* border: 1px solid #eaebeb; */
    border-radius: 4px;
    margin-bottom: 20px;
    background: #fff;
    /* padding: 10px 15px; */
    display: flex;
    margin: 10px 0px 20px;
    position: relative;
    flex-direction: column;
    box-shadow: 0px 2px 5px rgb(0 0 0 / 9%);
}
.widget-data::before {
    left: -90px;
    top: -46px;
}
.widget-data::before, .widget-data::after {
    background-color: #fff;
    border-radius: 10%;
    content: "";
    height: 50px;
    position: absolute;
    transform: skewX(74deg) rotate(-4deg);
    width: 486px;
}
.widget ul li a {
    display: inline-block;
    position: relative;
    padding-left: 20px;
    color: #636363;
}
.widget ul li a:before {
    content: "\f101";
    font-family: fontawesome;
    position: absolute;
    left: 0;
    opacity: 0;
}
.widget-data::after {
    bottom: -46px;
    right: -90px;
    top: auto;
}
.widget-title2:before {
    content: "";
    position: absolute;
    left: 0px;
    top: 4px;
    height: 13px;
    width: 3px;
    background-color: #1fbcc4;
}
.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}
button.close {
    padding: 0 !important;
    cursor: pointer;
    background: 0 0;
    border: none !important;
    -webkit-appearance: none;
    right: 5px;
    position: absolute;
    top: 5px;
    background-color: #1fbcc4;
    opacity: 1;
    width: 30px;
    height: 30px;
    color: #fff;
    text-shadow: none;
    font-size: 14px;
    display: block;
}
.modal-title {
    margin-bottom: 0!important;
    line-height: 1.5;
    font-size: 20px !important;
}
.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
}
.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 0.3rem;
    outline: 0;
}

.material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
  }
  .address-block {
    padding: 0;
    margin: 20px 0px;
    position: relative;
    display: flex;
    align-items: center;
    flex-direction: column;
}
.form-control {
    display: block;
    width: 100%;
    /* height: calc(2.25rem + 2px); */
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    border: 1px solid #eaebeb;
    padding: 6px 25px !important;
    border-radius: 4px !important;
    margin: 0 0;
  }
  button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.search-check input{
float:left;
}
.type-active{
    font-weight: bold;
    
}
.space{
    padding-left: 50px;
    padding-right: 50px;
}
.text-center a{
	padding-left: 0!important;
}
.delivery-navigation{
	margin-left: 30px;
    padding-bottom: 30px;
}
.login{
	border: 1px solid #f26822;
	background-color: #f26822;
	color: white;
	padding: 10px 20px;
	border-radius: 4px;
	cursor: pointer ;
	transition: all 0.2s ease-in-out;
	margin-right: 5px;
}
.signup{
    
	border: 1px solid #f26822;
	background-color: rgb(228, 223, 223);
	color: #f26822;
	padding: 10px 20px;
	border-radius: 4px;
	cursor: pointer;
	transition: all 0.2s ease-in-out;
}
.login:hover{
	text-decoration: none !important;
	background-color: #d65a1c;
	color: white;
}
.signup:hover{
	text-decoration: none !important;
	border: 1px solid #f26822;
    color: #f26822;
	background-color: rgb(204, 199, 199);
	
}
.fa-shopping-cart{
	padding: 0 0;
	font-size: 16px;
	padding: 12px 7px;
	border-radius: 50%;
	color: #f26822;
	background-color: rgb(228, 223, 223);
	margin-right: 5px;
	cursor: pointer;
	
}
.fa-shopping-cart:hover{
    text-decoration: none !important;
	background-color: rgb(166, 161, 161);
	
}
.search-form{
	
	margin-top: 5px;
	width: 100%;
	display: flex;
	padding-left: 0 !important;
	justify-content: center;
padding-bottom: 10px;
}

.search-form input {
	width: 100%;
	border: 3px solid #f26822;
	border-right: none;
	font-size: 14px;
	height: 15px;
	border-radius: 5px 0 0 5px;
	outline: none;
	color: #9DBFAF;
}

.search-form button {
	width: 40px;
	height: 35px;
	border: 1px solid #f26822;
	background: #f26822;
	text-align: center;
	color: #fff;
	border-radius: 0 5px 5px 0;
	cursor: pointer;
	font-size: 14px;
}
.restaurants-page{
	padding-top: 10px!important;
}
@media (max-width: 799px) {
    .wrap {
    display: block;
    margin: 0 auto;
    width: 95%;
    padding-left: 0 !important;
}
header {
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url(https://gridetech.com/assets/layout/images/food-delivery.png);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    text-align: center;
    padding: 87px 0;
}

}
@media (min-width: 320px) and (max-width: 767px){
header h2 {
    font-weight: 400;
    font-size: 30px;
    line-height: 1.5;
    color: white !important;
    letter-spacing: 0;
    margin-top: 90px!important;
    margin-bottom: 20px;
}
header {
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url(https://gridetech.com/assets/layout/images/food-delivery.png);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    text-align: center;
    padding: 59px 0;
}
}
ul#cuisine_list li span.check-box {
    position: relative;
}
.check-box [type="checkbox"]:checked, .check-box [type="checkbox"]:not(:checked) {
    position: absolute;
    margin-top: 3px;
    left: 0;
    width: auto;
}
.search-form input{
	border-radius: 0 !important;
}
@media (max-width: 1199px){
.sidebar.left .widget.style2 {
    max-width: 32%;
}
header {
    padding-left: 10px;
    padding-right: 10px;
}
.sidebar.left {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5%;
    justify-content: space-between;
}
.location-section{
	float: left;
}
}
@media (max-width: 767px){
	.sidebar.left .widget.style2 {
	    max-width: 100%;
	    width: 100%;
	}
}
@media (max-width: 370px){
.delivery-navigation {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    margin-left: 0;
}
}
.address-block .address-set {
    display: flex;
    padding: 10px 25px;
    cursor: pointer;
    width: 100%;
    text-align: left;
    margin: 10px;
    /* border: 1px dashed #fff; */
    position: relative;
}
</style>
@stop
@section('content')

<header>
    <div>                         
    <h2><b>Food Delivery in <c class="user_city"></c></b></h2>
   
    <!-- <div class="wrap">
        
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Search for city">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div> -->

</div> 
       
 </header>
 <section class="food-delivery">
    <h3>Delivering in <c class="user_city"></c></h3>
    <p>Have your favorite food delivered in <c class="user_city"></c> with Gride. Gride makes it easy to discover new and nearby places to eat in {cityName}, whether <br> you want to order breakfast, lunch, dinner, or snacks. Browse from the many food delivery options, place your order, and track it instantly.</p>
 </section>
<div class="page-wrapper z-1 content-box">
  <!-- start: Inner page hero -->
  <div class="result-show">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12 col-md-6 col-xl-4" >
                         <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" readonly >
                        <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" readonly >
                    
                        <div class="location-section m-0"  data-toggle="modal" data-target="#addressModal">
                           <span class="location-title">
                           <span class="landmark">Select Address</span>
                           </span><span class="city"> </span>
                           <span class="fa fa-angle-down arrow-icon"></span>
                        </div>
                     </div>
                     </p>
                     <div class="col-sm-9 dis-ver-center c-pointer">
                        <!-- <p><span class="primary-color"><strong>124</strong></span> Results so far  -->
                     </div>
                  </div>
               </div>
            </div>
  <!-- //results show -->


  <section class="restaurants-page pt-5 pb-5">
     <div class="row bg-white p-3">
        <div class="col-md-12 col-sm-12 col-xl-2 filtsrc p-0">

                     <div class="sidebar left">
                        <div class="widget style2 Search_filters d-none">
                           <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search Filters</h4>
                           <div class="widget-data">
                              <ul class="d-block" id="cuisine_list">
                                 <!-- <li><a href="#" title="" itemprop="url">Pizza</a> <span>6</span></li>
                                 <li><a href="#" title="" itemprop="url">Ice Cream</a> <span>6</span></li>
                                 <li><a href="#" title="" itemprop="url">Rolls</a> <span>6</span></li> -->
                              </ul>
                           </div>
                        </div>
                        <div class="widget style2 quick_filters d-none">
                           <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                           <div class="widget-data">
                              <ul class="d-block">
                                 <li class="text-center"><a href="javascript:void(0)" class="reset_radio_btn">Reset</a></li>
                                 <li><span class="radio-box"><input type="radio" name="qfilter" class="search" value="non-veg" id="qfilt1-2"><label for="qfilt1-2" >Non Veg</label></span></li>
                                 <li><span class="radio-box"><input type="radio" name="qfilter" class="search" id="qfilt1-3" value="pure-veg" ><label for="qfilt1-3">Pure veg</label></span></li>
                                 <li><span class="radio-box"><input type="radio" name="qfilter" class="search" id="qfilt1-4" value="freedelivery"><label for="qfilt1-4">Free Delivery</label></span></li>
                                <!--  <li><span class="radio-box"><input type="radio" name="qfilter" class="search" id="qfilt1-5" value="onlinepayment" ><label for="qfilt1-5">Online Payments</label></span></li> -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xl-10 col-sm-12 col-lg-12 contsrc">
					<div class="delivery-navigation">
						<a href="path/to/shopping/cart" aria-label="View 3 items in your shopping cart">
							<i class="fa fa-shopping-cart" aria-hidden="true"> 0</i>
						</a>
						<a href="https://gridetech.com/user/login" class="login">Log in</a>
					<a href="https://gridetech.com/user/login" class="signup">Sign up</a>
					</div>
                     <div class="row" id="store_list">
                        
                     </div>
                     <!--end:row -->
                     <!-- end:Restaurant entry -->
               </div>
            </section>
         </div>
      </div>

  <!-- Address Modal -->
         <div class="modal" id="addressModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Address Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Choose Location</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Address body -->
                  <div class="modal-body">
                     <div class="col-sm-12 col-lg-12">
                       <!--  <span class="fa fa-location-arrow" style=" position: absolute; left: 5%; top: 25%;color: #495057;font-size: 18px;"></span> -->
                        <input class="form-control search-loc-form" type="text" id="pac-input" name="search_loc" placeholder="Search for area, street name.." required>
                         
                         <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" readonly >
                         <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" readonly >
                         <div id="my_map"   style="height:500px;width:500px;display: none" ></div>
                        <span class="my_map_form_current"><i class="material-icons" style=" position: absolute; right: 5%; top: 25%;color: #495057;font-size: 18px;cursor: pointer;">my_location</i> </span>
                     </div>
                     <div class="address-block " id="address_saved">
                        
                     </div>
                  </div>
                  <!-- Address footer -->
                  <!-- <div class="modal-footer">
                     <a  class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Schedule later</a>
                     </div> -->
               </div>
            </div>
         </div>
         <!-- Address Modal -->
@stop

@section('scripts')
@parent
<script>   
function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}

$.get("https://ipinfo.io", function(response) {
       var location=response.loc;
       var letlog = location.split(',');
       window.localStorage.setItem('city',response.region);
       window.localStorage.setItem('landmark',response.city);
       window.localStorage.setItem('latitude',letlog[0]);
       window.localStorage.setItem('longitude',letlog[1]);
        }, "json")

 sleep(3000);

    var Api="https://api.gridetech.com/api/v1";
    
    function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }
      
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
     
       // Input Checked
    $(document).ready(function(){
      $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
      });
    });
      $.ajax({
         url: Api + "/user/store/cusines/{{$id}}",
         type:"GET",
         processData: false,
         contentType: false,
         secure: false,
         headers: {
             Authorization: "Bearer " + getToken("user")
         },
         success: (data, textStatus, jqXHR) => {
            if((data.responseData).length != 0) { 
               var cusine_list = data.responseData;
               $.each(cusine_list, function(i,val){
                  var cuisine ='<li><span class="check-box"><input type="checkbox" class="search" name="filter" id="filt1-'+val.id+'" value="'+val.id+'"  ><label for="filt1-'+val.id+'">'+val.name+'</label></span></li>';
                   $('#cuisine_list').append(cuisine);
               });
            }

         }
       });

      $.ajax({
         url: Api + "/user/store/check/request",
         type:"GET",
         processData: false,
         contentType: false,
         secure: false,
         headers: {
             Authorization: "Bearer " + getToken("user")
         },
         success: (data, textStatus, jqXHR) => {
            if((data.responseData).length != 0) { 
               if((data.responseData.data).length>0){
                var order = data.responseData.data ;
                //window.location.href=  "{{url('/user/store/order/')}}/"+order[0].id;
               }
            }

         }
       });

      $.ajax({
         url: Api + "/user/store/useraddress",
         type:"GET",
         processData: false,
         contentType: false,
         secure: false,
         headers: {
             Authorization: "Bearer " + getToken("user")
         },
         success: (data, textStatus, jqXHR) => {
            if((data.responseData).length != 0) { 
               var address_list = data.responseData;
                var address_saved ='<h5 >SAVED ADDRESSES</h5>';
               $.each(address_list, function(i,val){
                  if(val.map_address != null && val.map_address != ''){
                     mapAddress =  val.map_address;
                  }else{
                     mapAddress =  val.street;
                  }
                  address_saved +='<div class="address-set green  setaddr" data-lat="'+val.latitude+'" data-lng="'+val.longitude+'" data-loc="'+val.map_address+'">';
                     if(val.address_type=='Home'){
                           address_saved +='<i class="material-icons address-category">home</i>';
                     }
                     if(val.address_type=='Work'){
                           address_saved +='<i class="material-icons address-category">work</i>';
                     }
                     if(val.address_type=='Other'){
                        address_saved +='<i class="material-icons address-category">location_on</i>';
                     }
                     address_saved +='<div class="">\
                        <h5 class="">'+val.address_type+'</h5>\
                        <p >'+ mapAddress +'</p>\
                     </div>\
                  </div>';
               });
               $('#address_saved').html(address_saved);
            }
         }
       });

      shoplist('');
      function shoplist(){
        var filter =[];
        var qfilter = '';;
        var userSettings = getUserDetails();
        if(userSettings.city_id){
        var city_id=userSettings.city_id;
        }else{
         var city_id=48328;
        }
        //var filter =[];
         $.each($("input[name='filter']:checked"), function(){            
                filter.push($(this).val());
            });
        //  var search = '?city_id='+userSettings.city_id+'&filter='+filter.join(",");
         var search = '?city_id='+city_id+'&filter='+filter.join(",");

         $.each($("input[name='qfilter']:checked"), function(){            
                qfilter = '&qfilter='+$(this).val();
            });
         search +=qfilter;
         if(typeof localStorage.latitude !== 'undefined') {
            search +='&latitude='+window.localStorage.getItem('latitude');
         }
         if(typeof localStorage.longitude !== 'undefined') {
            search +='&longitude='+window.localStorage.getItem('longitude');
         }

        $.ajax({
        url: Api + "/user/store/listfetch/{{$id}}"+search,
        type:"GET",
        processData: false,
        contentType: false,
        secure: false,
        headers: {
              Authorization: "Bearer " + getToken("user")
        },
        success: (data, textStatus, jqXHR) => {
            if((data.responseData).length != 0) { 
                var store_list = data.responseData;
                  $('#store_list').html('');
                  var url = "{{ url('/user/store/details') }}";
                  if(store_list[0].storetype.category=='FOOD'){
                    $('.Search_filters').removeClass('d-none');
                    $('.quick_filters').removeClass('d-none');
                  }else{
                    //$('.Search_filters').addClass('d-none');
                    //$('.quick_filters').addClass('d-none');
                    $('.contsrc').removeClass('col-xl-9').addClass('col-xl-12');
                    $('.filtsrc').remove();
                  }
                $.each(store_list, function(i,val){
                  if(store_list[0].storetype.category=='FOOD'){
                  var store ='<div class="col-sm-12 col-lg-4 col-md-6 col-xl-4 text-xs-center text-sm-left restaurant-list">';
                  }else{
                    var store ='<div class="col-sm-12 col-lg-4 col-md-6 col-xl-3 text-xs-center text-sm-left restaurant-list">';
                  }
                    store +='<div class=" bg-gray restaurant-entry food-item-wrap">\
                    <div class="entry-logo figure-wrap">\
                    <a class="img-fluid" href="'+url+'/'+val.id+'"><img src="'+val.picture+'" alt="Food logo">';
                    if(val.rating){
                    store +='<span class="post-rate"><i class="fa fa-star-o"></i> '+val.rating+'</span>';
                    }else{
                      store +='<span class="post-rate"><i class="fa fa-star-o"></i>0</span>';
                    }
                    store +='</a>\
                    </div>\
                    <div class="entry-dscr"><div>\
                    <a href="#">'+val.store_name+'</a>';

                    store+='</div><span>';
                        var count =0;
                        var mycat = '';
                    $.each(val.categories,function(key,item){ count++;
                           if(count <= 10){
                      mycat+=item.store_category_name+', ';
                           }
                    });
                    mycat = mycat.replace(/,\s*$/, "");
                    store+=mycat+'</span>\
                    <ul class="list-inline">\
                    <li class="list-inline-item"><i class="fa fa-check"></i> Min '+val.offer_min_amount+'</li>';
                    if(store_list[0].storetype.category=='FOOD'){
                    store+='<li class="list-inline-item"><i class="fa fa-motorcycle"></i> '+val.estimated_delivery_time+' min</li>';
                    }
                    store+='</ul>';
                    if(val.shopstatus=='CLOSED'){
                      store+='<a href="'+url+'/'+val.id+'" class="btn btn-danger" > '+val.shopstatus +'</a>';
                    }else{
                      store+='<a href="'+url+'/'+val.id+'" class="btn btn-primary">View Menu</a>';
                    }
                    store+='</div></div></div>';
                   
                    $('#store_list').append(store);
                });
            }else{
                  $('#store_list').html('<h5>No Shop Available</h5>');
               }
        }
      });
   }

    $('body').on('click', '.search', function(e) { 
         shoplist();
     });
    $('body').on('click','.setaddr',function (e){
    var lat = $(this).data('lat');
    var lng = $(this).data('lng');
    var addr = $(this).data('loc');
    updateForm(lat, lng, addr);
    shoplist();
  });
    $('body').on('click','.reset_radio_btn',function(e){ 
      $('input[name="qfilter"]').prop('checked', false);
      shoplist();
    });
    
</script>

<script>
  if(typeof localStorage.landmark !== 'undefined') {
      $('.landmark').html(window.localStorage.getItem('landmark'));
      $('.user_city').text(window.localStorage.getItem('landmark'));

   }

   if(typeof localStorage.city !== 'undefined') {
      $('.city').html(window.localStorage.getItem('city'));
    }

   if(typeof localStorage.latitude !== 'undefined') {
      $('#latitude').val(window.localStorage.getItem('latitude'));
   }
   if(typeof localStorage.longitude !== 'undefined') {
      $('#longitude').val(window.localStorage.getItem('longitude'));
   }
   
   
    var map;
    var input = document.getElementById('pac-input');
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');

    function initMap() { 

        var userLocation = new google.maps.LatLng(
                13.066239,
                80.274816
            );        
        map = new google.maps.Map(document.getElementById('my_map'), {
            center: userLocation,
            zoom: 15
        });

        var service = new google.maps.places.PlacesService(map);
        var autocomplete = new google.maps.places.Autocomplete(input);
        var infowindow = new google.maps.InfoWindow();

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow({
            content: "Shop Location",
        });

        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });

        marker.setVisible(true);
        marker.setPosition(userLocation);
        infowindow.open(map, marker);

        if (navigator.geolocation) { 
            navigator.geolocation.getCurrentPosition(function(location) { 
                var userLocation = new google.maps.LatLng(
                    location.coords.latitude,
                    location.coords.longitude
                );
            });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

        google.maps.event.addListener(map, 'click', updateMarker);
        google.maps.event.addListener(marker, 'dragend', updateMarker);
       

        function updateMarker(event) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'latLng': event.latLng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        input.value = results[0].formatted_address;
                        updateForm(event.latLng.lat(), event.latLng.lng(), results[0].formatted_address);
                    } else {
                        alert('No Address Found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });

            marker.setPosition(event.latLng);
            map.setCenter(event.latLng);
        }

        autocomplete.addListener('place_changed', function(event) {
            marker.setVisible(false);
            var place = autocomplete.getPlace();

            if (place.hasOwnProperty('place_id')) {
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
                updateLocation(place.geometry.location);
            } else {
                service.textSearch({
                    query: place.name
                }, function(results, status) {
                    if (status == google.maps.places.PlacesServiceStatus.OK) {
                        updateLocation(results[0].geometry.location, results[0].formatted_address);
                        input.value = results[0].formatted_address;

                    }
                });
            }
        });

        function updateLocation(location) {
            map.setCenter(location);
            marker.setPosition(location);
            marker.setVisible(true);
            infowindow.open(map, marker);
            updateForm(location.lat(), location.lng(), input.value);
        }
    }

      function getcustomaddress(latLngvar){
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'latLng': latLngvar}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    //console.log(results[0]);
                    if (results[0]) {
                        //input_cur.value = results[0].formatted_address;
                         
                        updateForm(latLngvar.lat, latLngvar.lng, results[0].formatted_address);
                    } else {
                        alert('No Address Found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });
      }

        function updateForm(lat, lng, addr) {
            showLoader(); 
            //console.log(lat,lng, addr);
            latitude.value = lat;
            longitude.value = lng;
            var address = addr;
            var landmark = address.split(',')[0];
            var city = address.replace(address.split(',')[0]+',',' ');
            window.localStorage.setItem('landmark', landmark);
            window.localStorage.setItem('city', city);
            $('.user_city').text(landmark);
            window.localStorage.setItem('latitude', lat);
            window.localStorage.setItem('longitude', lng);
            if(landmark ==''){
               $('.landmark').html('Select Address');
            }else{
               $('.landmark').html(landmark);
            }
            if(city ==''){
               $('.city').html('Select Address');
            }else{
               $('.city').html(city);
            }
            shoplist();
            $("#addressModal").modal('hide');
            hideLoader();
        }
    $('.my_map_form_current').on('click',function(){
        //$('#my_map_form_current').submit();
        var current_latitude = 13.0574400;
       var current_longitude = 80.2482605;

       if( navigator.geolocation ) {
          navigator.geolocation.getCurrentPosition( success, fail );
       } else {
           console.log('Sorry, your browser does not support geolocation services');
           
       }
       function success(position)
       {
           document.getElementById('longitude').value = position.coords.longitude;
           document.getElementById('latitude').value = position.coords.latitude

           if(position.coords.longitude != "" && position.coords.latitude != ""){
               longitude = position.coords.longitude;
               latitude = position.coords.latitude;
                var latlng = {lat: parseFloat(position.coords.latitude), lng: parseFloat(position.coords.longitude)};
                getcustomaddress(latlng);

           }
       }
       function fail()
       {
           // Could not obtain location
           console.log('unable to get your location');
       }
       initMap();

    });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{Helper::getSettings()->site->browser_key}}&libraries=places&callback=initMap" async defer></script>
@stop