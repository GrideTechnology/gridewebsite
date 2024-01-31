@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<style>
  .dash-section {
    padding: 70px 60px;
    
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
   .serivce-demands {padding: 150px 0;}
   .centers-text{display: flex; flex-wrap: wrap; justify-items: center; align-items: center;}
   .serivce-demands .media-img img {width: 100%;height: 300px;object-fit: cover;padding-right: 15%;}
   .serivce-demands .media-text h3 {color: #000;line-height: 38px;margin-bottom: 15px; font-weight: 500;}
   .serivce-demands .media-text p {color: #000; font-size: 14px;}

   /*services cab*/
   .service-cabs {background-color: rgba(255, 255, 255, 0.737); padding: 75px 0;}
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
  .service-cabs .cabs-box {text-align: center; display: block; background:#f26822; padding: 30px;
    border-radius: 30px;  margin-right: 8px;  box-shadow: 0 0 5px 1px #dedddd;}
  div#better .owl-stage{padding-right: 0; padding-left: 0;}
  div#better .owl-stage {padding-top: 40px !important; padding-bottom: 40px !important;}
  .service-cabs .entry-details {display: none;transition: all .3s;}
  .service-cabs .owl-item.lookp .carousel-item.took .entry-details {display: none;transition: all .3s;}  
.service-cabs .entry-overlay {display: none;transition: all .3s;}
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

.cabs-box h3, p{
color: white !important;
font-weight: 700;
}
.cabs-box img{
    display: block;
    margin: 0 auto;
    width: 300px !important;
}

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #f26822;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #575962;;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #f26822;
  background: #f26822;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
.main-title p{
    color:#575962 !important;
    font-weight: 400 !important;
}
.main-title h2{
    color: #575962 !important;
}
/*Resize the wrap to see the search bar change!*/
.wrap{
   
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
}
.wrap h1{
    padding-bottom: 30px;
}
.section-header{
    padding: 90px 150px;
    text-align: center;
    background: rgba(234, 223, 223, 0.358);
}
.section-header h2{
    padding-bottom: 50px;
}
.section-header p{
    padding: 30px 20px 0 20px;
    color: #575962 !important;
    font-weight: 400 !important;
}

.section-header .colmn3{
     display: grid !important;
    grid-template-columns: 1fr 1fr 1fr !important;
}
.colmn3 img{
  width: 300px;
}
.location h1{
    padding-bottom: 50px;
}
.location label{
    font-size: 22px;
  
}
.location select{
    font-size: 16px;
}
.location select{
  color: #bdbec3 !important;
}
.submit-btn{
    background-color: #f26822;
    font-size: 16px;
    color: white;
    cursor: pointer;
    border: solid 1px white;
    padding: 10px 20px !important;
    
}
.submit-btn:hover{
    background-color: white;
    color: #f26822;
    border: solid 1px #f26822;
    cursor: pointer;
}
</style>

      <style>
    header .menu-item {
    padding: 0px 12px;
}
.dash-banner{
  background-image: linear-gradient(rgba(221, 121, 27, 0.711), rgba(228, 138, 53, 0.821)),
    url("{{url('/')}}/assets/layout/images/bgimg2.jpg");
    background-repeat: no-repeat;
  background-size: cover;
  color: white !important;
  text-align: center;
  padding: 50px 0;
}
.dash-banner h1{
  color: white;
}
h4{
  padding-bottom: 10px;
}
.m-0{
  color: #f26822 !important;
}
.car-form{
    width: 400px;
}
.form-control {
    border-radius: 4px;
    padding: 10px 30px !important;
    margin: 0px 0px;
    color: #000;
    border-color: rgba(151, 151, 151, 0.25);
    min-width: 100px;
    min-height: 41px;
}
.panel {
    margin-bottom: 20px;
     background-color: transparent; 
    border: 0px solid transparent; 
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}

#myCarousel{
    
    width: 350px;
    justify-content: center;
    align-items: center;
    
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    justify-content: center;
    align-items: center;
}
.carousel-inner .item img{
    object-fit: cover;
    height:200px;
}
.car-section{
display: grid;
grid-template-columns: 1fr 1fr;
gap:30px;
justify-content: space-evenly;
justify-items: center;
align-content: space-evenly;
margin: auto;
padding-top:40px;
width: 75%;

}

.info-section p{
    color: #3c3b3b !important;
    width: 100%;
    font-weight: 400;
    
}
.info-section h1{
    padding-bottom: 20px;
    font-weight: 400;
    
}
.people div {
  padding-bottom: 25px;
  display: flex;
  align-items: center;
}
 .people div img {
  width: 65px;
  height: 65px;
  object-fit: cover;
  margin-right: 15px;
}
 .people div p {
  margin: 0;
  font-size: 13px;
  line-height: 25px;
}
 .people div p span {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: black;
}
.car-price{
    color: #3c3b3b !important;
    text-align: center;
    font-size: 30px;
}
.car-price span{
    color: #575962;
}
.recommend-grid{
    display: grid;
    grid-template-columns: 1fr  1fr;
    gap: 15px;

}
.recommend-grid .recommend-car{
    border-radius: 2px;
    border: 1px solid gray;
    width: 100% !important;
    justify-content: space-evenly;
  justify-items: center;
  align-content: space-evenly;
  align-items: center;
  text-align: center;
    
}
.recommend-grid .recommend-car img{
    height:160px;
    width: 300px;
    object-fit: cover;
}
.recommend-car div{
    background-color: #c2c3c6;
}

@media (max-width: 799px) {
    .car-section{

grid-template-columns: 1fr;

}
.container{
    padding-top: 10px;
}

}

@media (min-width: 320px) and (max-width: 767px){
.recommend-grid {
    
    grid-template-columns:  1fr;
    
}

.dash-banner {
    background-image: linear-gradient(rgba(221, 121, 27, 0.711), rgba(228, 138, 53, 0.821)), url(images/bgimg2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white !important;
    text-align: center;
    padding: 0px 0;
   
}
}
@media (max-width: 600px) {
    .dash-banner {
        display:none!important;
    }
    .car-section{
        margin-top: 70px;
    }
}
.chat-btn{
    background: #007bff;
    color: #fff!important;
    padding: 10px 15px;
    border-radius: 4px;
    text-align: center;
    text-decoration: none!important;
    width: 29%;
}

</style>

@stop
@section('content')
<section class="dash-banner dash-section dis-column">

<div class="serivce-demands">
      <div class="container">
         <div class="row">
           
            <!-- search bar
            <div class="wrap">
                <h1>Rentals</h1>
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="What are you looking for?">
                   <button type="submit" class="searchButton">
                     <i class="fa fa-search"></i>
                  </button>
                </div>
             </div>
            -->

            
         </div><!--row-->




         
      </div><!--container-->
      
   </div><!--serivce-demands-->   

</section>

<section class="car-section">

    <section class="car-form">
    
        <div class="car-info-sec">
    
            
        <div class="container">
         
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
    
          
    
    
        <div class="sc-gzOgki bhoIOA" style="padding: 1.5em;">
            <p class="car-price">2020 Honda Electric <br><span>$42 / Day</span></p>
            <form action="{{url('/')}}/user/rental/car/{{$id}}/book" method="get">
                <div>
                    <div class="form-group">
                        <label class="control-label">
                            When would you like to start?
                            <span class="sc-hMqMXs bwEkLH"> *</span>
                        </label>
                        <div class="sc-Rmtcm gxnsEf">
                            <div class="DayPickerInput">
                                <span class="input-group">
                                    <input name="fromdate" id="fromdate" class="form-control" type="text" placeholder="mm/dd/yyyy" required>
                                   
                                </span>
                            </div></div>
                            <div class="sc-jzJRlG eoUYaU">
    
                            </div><div class="sc-jzJRlG eoUYaU">
    
                            </div><div class="sc-jzJRlG eoUYaU"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">How many days will you be driving?
                                <span class="sc-hMqMXs bwEkLH"> *</span>
                            </label>
                            <div class="sc-jzJRlG eoUYaU" style="width: 100%;"><div class="sc-bwzfXH ihgQcP sc-htpNat eLQHN">
                                <div class="sc-bwzfXH fYmzPq">
                                    <input name="rentalDays" id="rentalDays" type="number" class="sc-eqIVtm jaWZrR form-control" value="1" required>
                                </div>
                                <div class="sc-bwzfXH bzReoz"></div></div></div>
                                <div class="sc-jzJRlG eoUYaU"></div><div class="sc-jzJRlG eoUYaU"></div>
                                <div class="sc-jzJRlG eoUYaU"></div></div>
                                <table class="table table-striped table-condensed">
                                    <thead><tr><th>Rental Price</th></tr></thead>
                                    <tbody><tr><td class="sc-gxMtzJ dvJaGi">$<span class="amount"></span> x <span class="days">1</span> Days</td>
                                        <td class="sc-gxMtzJ hEvvBL">$<span class="amount_total"></span></td>
                                    </tr>
                                    <tr><td class="sc-gxMtzJ dvJaGi">Insurance Fee ($<span class="insurance_fee"></span> x <span class="days">1</span> Days)</td>
                                        <td class="sc-gxMtzJ hEvvBL">$<span class="insurance_fee_total"></span></td>
                                    </tr>
                                    <tr><td class="sc-gxMtzJ dvJaGi">Booking Fee ($<span class="trip_fee"></span> x <span class="days">1</span> Days)</td>
                                            <td class="sc-gxMtzJ hEvvBL">$<span class="trip_fee_total"></span></td></tr>
                                    <tr>
                                        <td class="sc-gxMtzJ dvJaGi">Sales Tax (<span class="sales_tax"></span>%)</td>
                                        <td class="sc-gxMtzJ hEvvBL">$<span class="sales_tax_total"></span></td></tr>
                                        </tbody>
                                            <thead><tr><th style="font-size: 18px;">Total</th>
                                                <th style="font-size: 18px; text-align: right;">$<span class="total_amount"></span></th></tr></thead></table>
                                                <div style="padding: 5px 0px;">
                                                    <div header="[object Object]" class="sc-dVhcbM zgxVN panel panel-default"><div class="form-group"><span class="input-group">
                                                        <input placeholder="Coupon" class="form-control" value="">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-primary">Apply</button></span></span><div class="sc-jzJRlG eoUYaU"></div><div class="sc-jzJRlG eoUYaU"></div><div class="sc-jzJRlG eoUYaU"></div></div></div></div><div class="sc-ckVGcZ gjKadA"></div></div><button type="submit" id="book" class="btn btn-primary btn-block">Continue</button></form></div>
    </div>
                                                       
    
    
    </section>

    <section class="info-section">
        <h1>Car Information</h1>
        <p class="car-about"></p>
        <p><b>Mileage Allowed:</b>
            <span class="mile_allowed"></span> mi/day</p>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:100%">
            <h1>Owner</h1>
            <div class="people">
                <div>
                  <img src="{{url('/')}}/assets/layout/images/people.png" class="driver_profile"/>
                  <p>
                    <span class="driver_name"></span>
                </p>
                                                                                                    <a href="javascript:void(0)" class="chat-btn" id="chatid" data-id="">Message the owner</a>
                </div>
                </div>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:100%">
                <h1>Recommended For You</h1>
                <div class="recommend-grid">
                    
                </div>
    </section>






</section>

<section class="section">
    <div class="section-header">
        
    
    
    
    
    
    </div>
</section>
@stop
@section('scripts')
@parent
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script>
var url = "https://api.gridetech.com/api/v1/user/transport/cars-details/"+"{{$id}}";

$.ajax({
    type:"GET",
    url: url,
    headers: {
        Authorization: "Bearer " + getToken("admin")
    },
    'beforeSend': function (request) {
        showInlineLoader();
    },
    success:function(data){
            var carData = data.responseData.carlist[0];
            var carImages = data.responseData.carimages;
            var admincharges = data.responseData.admincharges;

            imageSlider='';
            sliderDots='';

            $('.car-price').html(carData.year+' '+carData.model+' <br><span id="price">$'+carData.daily_charges+' / Day</span>');
            $('.car-about').html(carData.about);
            $('.amount').html(carData.daily_charges);
            $('.driver_name').html(carData.first_name+' '+carData.last_name);
            if(carData.picture!=''){
                $('.driver_profile').attr('src', carData.picture);
            }else{
                $('.driver_profile').attr('src', '{{url("/")}}/assets/layout/images/people.png');
            }
            $('.insurance_fee').html(admincharges.insurance_fee);
            $('.sales_tax').html(admincharges.sales_tax);
            $('.trip_fee').html(admincharges.booking_fee);
            $('.mile_allowed').html(carData.milleage_allowed);
            var i=1;
            var j=0;
            if(carImages.length>0){
                Object.keys(carImages[0]).forEach(key => {
                    
                    if(carImages[0][key]!==null){
                    	if(i==1){
                    		isActive='class="item active"';
                    	}
                    	else{
                    		isActive='class="item"';
                    	}
                        imageSlider+='<div '+isActive+'><img src="'+carImages[0][key]+'" style="width:100%;"></div>';

                        if(j==0){
                    		isActive='class="active"';
                    	}
                    	else{
                    		isActive='';
                    	}
                        sliderDots+='<li data-target="#myCarousel" data-slide-to="'+j+'" '+isActive+'></li>';

                        i++;
                        j++
                    }
                });
            }

            $('.carousel-inner').html(imageSlider);    
            $('.carousel-indicators').html(sliderDots);
            hideInlineLoader();

			jQuery(document).ready(function($){
			  let slider = $('.owl-carousel');
			  slider.each(function () {
			    $(this).owlCarousel({
			      nav: true,
			      loop:false,
			      dots: false,
			      pagination: false,
			      margin: 2,
			      autoHeight: false,
			      stagePadding: 150,
			      responsive:{
			        0:{
			          items: 1,
			          stagePadding: 0,
			          margin: 30,
			        },
			        767:{
			          items: 3,
			          stagePadding: 25,
			        },
			        1000:{
			          items: 3,
			        }
			      }
			    });

			    $(document).ready(function(){
			      $("#better button.owl-next").click(function(){
			        $("#better .owl-item").removeClass("lookp");
			      });
			      $("#better button.owl-prev").click(function(){
			        $("#better .owl-item").removeClass("lookp");
			      });
			    });
			    $('.owl-carousel .owl-item').removeClass('lookp');
			    //add active class on click
			    $('.owl-carousel .owl-item').click(function() {
			      
			      $(this).toggleClass('lookp').siblings().removeClass('lookp');
			    });

			    //I need this to do the same thing as the above code when it is dragged
			    $('.owl-carousel .owl-item').on('changed.owl.carousel', function(event) {
			      $(this).toggleClass('lookp').siblings().removeClass('lookp');
			    });
			  });
			});


            calculateTotal();
        }
});


    var current_latitude = 34.1352786;
    var current_longitude = -94.6107576;

   

    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services');
    }

    function success(position)
    {
        // document.getElementById('long').value = position.coords.longitude;
        // document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
            var url = "https://api.gridetech.com/api/v1/user/transport/recommended-cars";
            $.ajax({
                type:"POST",
                url: url,
                headers: {
                    Authorization: "Bearer " + getToken("owner")
                },
                data: {long: current_longitude, lat:current_latitude},
                'beforeSend': function (request) {
                    showInlineLoader();
                },
                success:function(data){
                    var recommendedCars = data.responseData;

                        recommendedList='';
                        recommendedCars.forEach(function(item, index){
                            recommendedList += '<div class="recommend-car"><a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><p>'+item.year+' '+item.model+' </p><p>$'+item.daily_charges+' / Day</p></div><img src="'+item.right+'" ><p>'+item.distance+' from you</p></a></div>';
                        });

                        $('.recommend-grid').html(recommendedList);
                }
            });
        }

    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
         //initMap();
    }

$('#rentalDays').keyup(function(){
	calculateTotal();
});

$('#book').click(function(){
    var days = $('#rentalDays').val();
    if(days==0 || days==''){
        $('#rentalDays').val(1);
    }
    
});

function calculateTotal(){
    var days = $('#rentalDays').val();
    var amount = $('.amount').html();
    var insurance_fee = $('.insurance_fee').html();
    var sales_tax = $('.sales_tax').html();
    var trip_fee = $('.trip_fee').html();
    // if(days=='' || days==0){
    // 	days=1;
    // 	$('#rentalDays').val(days);
    // }
    $('#days').val(days);
    $('.days').html(days);

    var amount_total = amount*days;
    var insurance_fee_total = insurance_fee*days;
    var trip_fee_total = trip_fee*days;  
    var tax = ((amount_total+insurance_fee_total+trip_fee_total)/100)*6;
    var sales_tax_total = Math.round(tax * 100) / 100;
    
    var total_amount = amount_total+insurance_fee_total+trip_fee_total+sales_tax_total;

    $('.amount_total').html(amount_total.toFixed(2));
    $('.insurance_fee_total').html(insurance_fee_total.toFixed(2));
    $('.sales_tax_total').html(sales_tax_total.toFixed(2));
    $('.trip_fee_total').html(trip_fee_total.toFixed(2));

    $('.total_amount').html(total_amount.toFixed(2));
}

$.ajax({
    url: getBaseUrl() + "/user/transport/carbooking-status/{{$id}}",
    type: 'GET',
    headers: {
            Authorization: "Bearer " + getToken("user")
        },
    success: function(response){
       var response = response.responseData;
       var dateList = [];
       response.forEach(function(item, index){
            var start = new Date(item.booking_start_date);
            var end = new Date(item.booking_end_date);

            var date = getDatesInRange(start, end);

            dateList.push(date);
            
       });
       exclude = [];
       dateList.forEach(function(item, index){
            item.forEach(function(item1, index1){
                exclude.push(item1);
            });
       });
       $('#fromdate').datepicker({
            setStartDate: new Date(),
            beforeShowDay: function(date) {
                var day = jQuery.datepicker.formatDate('dd-mm-yy', date);
                var month = date.getMonth();
                var year = date.getFullYear();
                return [!~$.inArray(day, exclude)];
              },
        });
    }
});

function getDatesInRange(startDate, endDate) {
  const date = new Date(startDate.getTime());

  const dates = [];

  while (date <= endDate) {
    month =date.getMonth();
    month = month + 1;
    month = month.toString();
    if(month.length==1){
        month = '0'+month;
    }
    dates.push(date.getDate()+'-'+month+'-'+date.getFullYear());
    date.setDate(date.getDate() + 1);
  }

  return dates;
}

$('#chatid').click(function(){
    var chatid = $('#chatid').attr('data-id');

    localStorage.setItem("chatid", chatid);

    window.location.href="{{url('/')}}/user/rental/messages";
})
</script>


@stop