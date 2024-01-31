@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<style>
  .dash-section {
    padding: 70px 60px;
    
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
  .service-cabs .owl-nav .owl-next {left:auto !important;top:-2px; }
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
  color: #d4d6de77 !important;
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
.dash-banner {
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url(../assets/layout/images/rental2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white !important;
    text-align: center;
    background-position: 58% 80%;
    padding: 50px 0;
    height: 50vh;
    max-height: 360px;
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
.location .main-text{

  background-color: transparent;
  border: 1px solid white;
  padding: 5px !important;
  margin-bottom: 10px;
}
.location input{
  color: white;
  width: 100%;
}
@media (max-width: 799px) {
  .section-header .colmn3 {
    
    grid-template-columns: 1fr !important;
}

.section-header p {
    padding: 5px 5px 0 5px;
    color: #575962 !important;
    font-weight: 400 !important;
}
.owl-carousel .owl-item img {
    display: block;
    width: 200px !important;
}
.section-header {
    padding: 80px 5px;
    text-align: center;
    background: rgba(234, 223, 223, 0.358);
}
}

@media(max-width: 767px){
    .service-cabs .owl-nav {
        position: absolute;
        top: 50%;
        left: 2%;
        right: 7%;
    }
    .service-cabs .owl-nav button.owl-next span {
        margin-left: auto;
        background: #d6d6d6;
        border-color: #d6d6d6;
         color: #3c3b3b;
    }
    .dash-banner {
        height: 70vh!important;
        max-height: 280px;
        background-attachment: unset;
    }
}
@media(max-width: 400px){
    .dash-banner {
        height: 30vh!important;
    }
    .dash-section{
        margin-top: 70px!important;
    }
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
<div class="location">
            
</div>

            
         </div><!--row-->




         
      </div><!--container-->
      
   </div><!--serivce-demands-->   

</section>



<section class="section">
    <div class="section-header">

        @foreach(Helper::getcmspage() as $k=>$v)
                @if($v->page_name == 'rental')
                    {!!$v->content !!} 
                @endif
              @endforeach
    
    
    </div>
</section>





   <div class="service-cabs">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="main-title">
                  <h2>Driving made easy</h2>
                  <p>GrideTech encompass a wide variety of vehicles for rent</p>
                  <a href="{{url('/')}}/owner/dashboard">List your car</a>
               </div><!--main-title-->
            </div><!--col-->
         </div><!--row-->
    </div><!--container-->





         <div class="owl-carousel owl-theme owl-loaded owl-drag" id="better">
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2249px; padding-left: 150px; padding-right: 150px;">   </div></div>
      <div class="owl-nav">
        <button type="button" role="presentation" class="owl-next">
          <span aria-label="Next">›</span>
        </button>
        <button type="button" role="presentation" class="owl-prev disabled">
          <span aria-label="Previous">‹</span>
        </button></div>
        <div class="owl-dots disabled"></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
   </div><!--service-cabs-->


<!--
   <section class="section">
    <div class="section-header"><h2>Gride Rentals</h2>
    
    
    
    <div class="colmn3">
    
    <div>
        <h4>
           Select Vehicle
        </h4>
        
        <a href="">
       
       
       <img alt="" src="images/jaguar.png"> </a>
      
      
      
      
      </div>


    <div>
      <h4>
        Select Vehicle
     </h4>
     
     <a href="">
     <img alt="" src="images/van.png"> </a> 
     </div>
  
  
  
  
     <div>
      <h4>
        Select Vehicle
     </h4>
     
     <a href="">
     <img alt="" src="images/van2.png"></a> </div>
    
  
    
    
    </div>
</section>
-->
@stop
@section('scripts')
@parent
<script>
var url = "https://api.gridetech.com/api/v1/user/transport/cars-type-list";

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
            var vehicleType=data.responseData.data;
            var vehicleTypeList='';
            var i=0;
            vehicleType.forEach(function(item, index){
                var isActive='';

                if(i<3){
                    isActive='active';
                    i++;
                }
                vehicleTypeList+='<div class="owl-item '+isActive+'" style="margin-right: 2px;"><div class="carousel-item took"><div class="item"><div class="cabs-box"><div class="entry-header"><h3>'+item.name+'</h3></div><!--entry-header--><div ><img alt="" src="'+item.image+'"><p>Starting from $'+item.price+'/'+item.pricing_method+'</p></div><!--entry-img--><div class="entry-details"><ul><li><span><i class="fa fa-car" aria-hidden="true"></i></span>Efficient</li><li><span><i class="fa fa-id-card-o" aria-hidden="true"></i></span>Eco-friendly</li></ul></div><!--entry-detail--><div class="entry-overlay"><p>Weekly rentalFrom $'+item.price+'*</p><p>Zero Emissions incentive-$'+item.price+'**</p><p>'+item.pricing_method+' rental after Incentive$'+item.price+'</p><p>Refundable deposit$'+item.price+'</p><a href="rental/'+item.id+'/cars" class="btn">Ride now</a></div><!--entry-overlay--></div><!--cabs-box--></div></div></div>';
            });

            $('.owl-stage').html(vehicleTypeList);
            let slider = $('.owl-carousel');
            slider.each(function () {
                $(this).owlCarousel({
                  nav: true,
                  loop:false,
                  dots: false,
                  pagination: false,
                  margin: 2,
                  autoHeight: false,
                  // stagePadding: 150,
                  responsive:{
                    0:{
                      items: 1,
                      // stagePadding: 0,
                      margin: 30,
                    },
                    767:{
                      items: 3,
                      // stagePadding: 25,
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
        }
    });
</script>
@stop



