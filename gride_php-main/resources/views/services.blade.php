@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/landing.css')}}"/>
<link href="https://fonts.googleapis.com/css?family=Raleway:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<style>
   .dash-section {
    padding: 70px 60px;
    
}
   .serivce-demands {padding: 70px 0;}
   .centers-text{display: flex; flex-wrap: wrap; justify-items: center; align-items: center;}
   .serivce-demands .media-img img {width: 100%;height: 300px;object-fit: cover;padding-right: 15%;}
   .serivce-demands .media-text h3 {color: #000;line-height: 38px;margin-bottom: 15px; font-weight: 500;}
   .serivce-demands .media-text p {color: #000; font-size: 14px;}

   /*services cab*/
   .service-cabs {background-color: rgb(244, 244, 250); padding: 75px 0;}
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
.grid-services{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  justify-content: center;
  justify-items: center;
  text-align: center;
}
.service-titles{
  text-align: center;
}

@media (max-width: 799px) {

.grid-services{
  display: grid;
  grid-template-columns: 1fr;
  justify-content: center;
  justify-items: center;
  text-align: center;
}
.serivce-demands{
  justify-content: center;
  justify-items: center;
  text-align: center;
}
.owl-item{
  padding-bottom: 10px !important;
}
}

@media (min-width: 320px) and (max-width: 767px){
.serivce-demands .media-text h3 {
  padding-top: 10px;
    padding-right: 0 !important;
    color: #000;
    line-height: 41px;
    margin-bottom: 25px;
}
.dis-column{
padding-left: 5px;
padding-right: 5px;
}
.media-img img{
  display: block !important;
  margin: 0 auto !important;
  padding-right: 0 !important;
}
.owl-item{
  width: 80% !important;
}
}
</style>
@stop
@section('content')

<section class="dash-banner dash-section dis-column" >

<div class="serivce-demands">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="media-img">
                  <img src="{{ asset('assets/img/foody/service_new.jpg')}}" alt="service-demend" title="service-demend" aria-label="service-demend">
               </div><!--media-img-->
            </div><!--col-->
            <div class="col-md-6 col-sm-6 col-xs-12 centers-text">
               <div class="media-text">
                  <h3>Built for Users and Providers</h3>
                  <p>
                    Made for everyone to bring everyone together. Gride is made
                    equal to provide both parties with the best service possible. From ride sharing, to
                    delivery and service, Gride cares about its users and providers.
                  </p>
               </div><!--media-text-->
            </div><!--col-->
         </div><!--row-->
      </div><!--container-->
   </div><!--serivce-demands-->

</section>
  <div class="service-cabs">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="main-title">
                  <h2>Services made easy</h2>
                  <p>GrideTech encompass a wide variety of services brought to you to make your life easier</p>
               </div><!--main-title-->
            </div><!--col-->
         </div><!--row-->
      </div><!--container-->
      <div class="owl-carousel owl-theme owl-loaded owl-drag" id="better">
        <div class="owl-stage-outer">
          <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; ">
            <div class="grid-services">
              <div class="owl-item active" style="width: 536px; margin-right: 2px;">
                <div class="carousel-item took">
                  <div class="item">
                    <div class="cabs-box">
                      <div class="entry-header">
                        <h3>Ride</h3>
                      </div><!--entry-header-->
                      <div class="entry-img">
                        <img alt="" src="{{ asset('assets/img/svg/sedan-car-model.svg') }}">
                      </div><!--entry-img-->
                      <div class="entry-details">
                        <ul>
                          <li><span><i class="fa fa-car" aria-hidden="true"></i></span>Efficient</li>
                          <li><span><i class="fa fa-id-card-o" aria-hidden="true"></i></span>Eco-friendly</li>
                        </ul>
                      </div><!--entry-detail-->
                      <div class="entry-overlay">
                        <p>Need a pickup? Ride with
                          Gride and enjoy our ride sharing services, such as Gride X, Gride Lux and Gride
                          Female.</p>
                        <a href="{{url('user/login')}}" class="btn">Ride now</a>
                      </div><!--entry-overlay-->
                    </div><!--cabs-box-->
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 536px; margin-right: 2px;">
                <div class="carousel-item took">
                  <div class="item">
                    <div class="cabs-box">
                      <div class="entry-header">
                        <h3>Food</h3>
                      </div><!--entry-header-->
                      <div class="entry-img">
                            <img alt="" src="{{ asset('assets/img/svg/chef.svg') }}">
                      </div><!--entry-img-->
                      <div class="entry-details">
                        <ul>
                          <li><span><i class="fa fa-car" aria-hidden="true"></i></span>Efficient</li>
                          <li><span><i class="fa fa-id-card-o" aria-hidden="true"></i></span>Eco-friendly</li>
                        </ul>
                      </div><!--entry-detail-->
                      <div class="entry-overlay">
                        <p>Hunger strikes fast, combat it by having Gride delivery you your favorite food right to your door.</p>
                        <a href="{{url('user/login')}}" class="btn">Order Now</a>
                      </div><!--entry-overlay-->
                    </div><!--cabs-box-->
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 536px; margin-right: 2px;">
                <div class="carousel-item took">
                  <div class="item">
                    <div class="cabs-box">
                      <div class="entry-header">
                        <h3>Grocery</h3>
                      </div><!--entry-header-->
                      <div class="entry-img">
                            <img alt="" src="{{ asset('assets/img/svg/groceries-bag.svg') }}">
                      </div><!--entry-img-->
                      <div class="entry-details">
                        <ul>
                          <li><span><i class="fa fa-car" aria-hidden="true"></i></span>Efficient</li>
                          <li><span><i class="fa fa-id-card-o" aria-hidden="true"></i></span>Eco-friendly</li>
                        </ul>
                      </div><!--entry-detail-->
                      <div class="entry-overlay">
                        <p>Have your groceries delivered to you, so that you can stay in the comfort of your home.</p>
                        <a href="{{url('user/login')}}" class="btn">Order Now</a>
                      </div><!--entry-overlay-->
                    </div><!--cabs-box-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div><!--service-cabs-->

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <!--<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    
<script>
  // jQuery(document).ready(function($){
    // let slider = $('.owl-carousel');
    // slider.each(function () {
    //   $(this).owlCarousel({
    //     nav: true,
    //     loop:false,
    //     dots: false,
    //     pagination: false,
    //     margin: 2,
    //     autoHeight: false,
    //     stagePadding: 150,
    //     responsive:{
    //       0:{
    //         items: 1,
    //         stagePadding: 0,
    //         margin: 30,
    //       },
    //       767:{
    //         items: 3,
    //         stagePadding: 25,
    //       },
    //       1000:{
    //         items: 3,
    //       }
    //     }
    //   });

      $(document).ready(function(){
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
  // });

  // $(document).ready(function() {
  //   $('.took').on('click', function(event){
  //       $('#better .took').removeAttr('style').removeClass('clicked');
  //     var $this = $(this);
  //     if($this.hasClass('clicked')){
  //       $this.removeAttr('style').removeClass('clicked');
  //     } else{
  //       $this.css('transform','scale(1.1)').addClass('clicked');
  //     }
  //   });
  // });
</script>

@stop
