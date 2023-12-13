<!DOCTYPE html>
<html>
   <head>
      <title>
      {{ Helper::getSettings()->site->site_title }}
      </title>
      <meta charset='utf-8'>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <meta content='website' property='og:type'>
      <link rel="shortcut icon" type="image/png" href="{{ Helper::getFavIcon() }}"/>
      @section('styles')
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/landing.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/stylesheet.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/owl-carousel/css/owl.carousel.min.css')}}"/>  
      <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/slick/css/slick.min.css')}}"> -->
      <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/slick/css/slick-theme.min.css')}}"> -->
      <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/icons/css/ionicons.min.css')}}"/> -->
      <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/icons/css/linearicons.css')}}"/> -->
      
      <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/media-mobile.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/media-tab.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/media-lap.css')}}"/> -->
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/swiper/swiper.min.css')}}"/>
      <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/animate.css')}}"/> -->
      @show
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/stylesheet.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/home.css')}}"/>
      <!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199529820-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-199529820-1');
		</script>
      <style>
#footer img {
    object-fit: contain;
    margin-bottom: 0;
}
.restaurants-page .widget ul.d-block span.check-box{
    position: relative;
    display: flex;
    align-items: center;
    gap: 5px;
}
.restaurants-page .widget ul.d-block span.check-box input {
    position: absolute;
    margin-top: 3px;
    left: 0;
    width: auto;
    padding: 12px 12px !important;
    border-radius: 4px !important;
    margin-top: 0 !important;
    margin-right: 5px !important;
}
.restaurants-page .widget ul.d-block span.check-box label {
    padding-left: 35px;
}
@media(max-width: 1199px){
	.background-holder {
	    background-size: cover !important;
	}
	header .menu-item {
	    padding: 0px 15px;
	}
	header ul li.menu-item:nth-child(4) {
	    min-width: 80px;
	}
	p img {
    max-width: 100% !important;
    height: auto !important;
}
}
@media(max-width: 991px){
	.row.banner-section {
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	}
	#footer .col-md-3.col-sm-12 {
	    -ms-flex: 0 0 33%;
	    flex: 0 0 33.3%;
	    max-width: 33.3%;
	}
	h1.text-center {
	    font-size: 42px !important;
	}
	section.details-card .wrap {
	    width: 100%;
	    max-width: 500px;
	}
	section.details-card .container {
	    max-width: 100%;
	}
	grid-main h4 {
	    text-align: left;
	    margin-bottom: 10px;
    	margin-top: 10px;
	}
}
@media(max-width: 767px){
	#footer .col-md-3.col-sm-12 {
	    -ms-flex: 0 0 100%;
	    flex: 0 0 100%;
	    max-width: 100%;
	}
	.app-links {
	    display: flex;
	    justify-content: center;
	    gap: 8px;
	    flex-wrap: wrap;
	}
	.app-links {
	    display: flex;
	    justify-content: center;
	    gap: 8px;
	    flex-wrap: wrap;
	}
	.services-list .service-list {
	    max-width: 100%;
	    margin: 10px auto 25px;
	}
	.tab-contents .tab-btn .btn {
	    margin-bottom: 6px;
	}
	.topnav {
	    padding: 0 30px !important;
	}
	header#myTopnavs .dis-ver-center.p-0 {
	    padding-left: 15px !important;
	}
	.user.float-right.p-0 {
	    padding-right: 15px !important;
	}
}
@media(max-width: 575px){
	.topnav {
	    padding: 0 0px !important;
	}
	header#myTopnavs .dis-row.p-0 {
	    padding-left: 0px !important;
	    padding-right: 0px !important;
	}
	header#myTopnavs .dis-ver-center.p-0 {
	    padding-left: 0px !important;
	}
	.user.float-right.p-0 {
	    padding-right: 0px !important;
	}
}
@media(max-width: 450px){
	.tab-contents .tab-header h1 {
	    font-size: 34px;
	}
	.tab-contents a{
	    font-size: 12px;
	    padding-bottom: 2px;
	    text-align: center;
	}
	.banner-heading{
	    font-size: 28px;	
	}
	.heading h1 {
	    font-size: 1.5rem;
	}
}
@media(max-width: 991px){
  .tab-contents .tab-btn .btn {
      width: 100%;
      margin-bottom: 4px;
  }
}

@media (min-width: 320px) and (max-width: 767px){
  .row.dis-center {
      margin-right: 0%;
  }
}

@media(max-width: 991px){
  .tab {
      display: flex;
      flex-wrap: wrap;
  }
  .tab >div button {
      width: 50%;
  }
  .list_wp {
      padding: 0 45px;
  }
}
@media(max-width: 767px){
  .tab >div button {
      width: 100%;
  }
  .list_wp {
      padding: 0 15px;
  }
  .list_wp {
      overflow: hidden;
      max-width: 100%;
      overflow-x: auto;
  }
  .list_wp table {
      min-width: 600px;
      overflow: auto;
  }
}
#mySidenav .dropdown > li > a {
    padding-bottom: 28px;
}
#mySidenav .dropdown > li > a {
    padding: 0 0 25px;
}
    </style>
   </head>
   <body class='index'>
      @include('common.web.includes.header')
      @yield('content')
      @include('common.web.includes.footer')
      @section('scripts')
      <script type="text/javascript" src="{{ asset('assets/plugins/jquery-3.3.1.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/popper.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <!-- <script type="text/javascript" src="{{ asset('assets/plugins/slick/js/slick.min.js')}}"></script> -->
      <script type="text/javascript" src="{{ asset('assets/plugins/owl-carousel/js/owl.carousel.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/swiper.jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/screen.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/layout/js/script.js')}}"></script>
      <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
      
      <script>
         function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
         }

         function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
         }

         
      </script>
      
      @if(Helper::getChatmode() == 1)
      <!-- Start of LiveChat (www.livechatinc.com) code -->
      <script type="text/javascript">
         window.__lc = window.__lc || {};
         window.__lc.license = 8256261;
         (function() {
         var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
         lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
         })();
      </script>
      <!-- End of LiveChat code -->
      @endif
      @show
   </body>
</html>
