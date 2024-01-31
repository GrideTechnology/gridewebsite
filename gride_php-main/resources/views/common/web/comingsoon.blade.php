@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<style>
.item-feature {
    background-color: black!important;
 }
 .item-feature p{
    color: #fff;
 }
 .carousel {
    position: relative;
    padding-top: 25px;
}
 .icon ul li {
    display: inline-block;
    font-size: 13px;
    padding: 13px 15px;
    background: #000;
    color: #fff;
    border-radius: 16px;
    margin-bottom: 20px;
}
.mov_wrp h3 {
    color: #000;
    font-size: 28px;
}
.icon ul{
    padding-left: 0px;
}
a.left.carousel-control {
    background: transparent !important;
}
a.right.carousel-control {
    background: transparent !important;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    left: 578% !important;
    margin-left: -10px;
}
.carousel-control {
    position: absolute;
    top:43% !important;
    bottom: 0;
    left: 0;
    width: 14% !important;
    font-size: 20px;
    color: #000 !important;
    text-align: center;
    text-shadow: 0 1px 2px rgb(0 0 0) !important;
    background-color: rgba(0,0,0,0);
    filter: alpha(opacity=50);
    opacity: 1;
}
.mov_wrp p {
    text-align: justify;
    line-height: 32px;
    color: #000;
}
.item img {
    border-radius: 20px;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    height: 400px;
}
.mov_wrp {
    padding-top: 50px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
@stop
@section('content')
<section id="features">
    <div class="container">
        <div class="heading dis-column">
            <hr>
            <h1 class="text-center"><span class="txt-green">Coming Soon</span></h1>
           
<div class="container">
    <div class="row">
       
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
				<li data-target="#myCarousel" data-slide-to="6"></li>
				<li data-target="#myCarousel" data-slide-to="7"></li>
				<li data-target="#myCarousel" data-slide-to="8"></li>
				<li data-target="#myCarousel" data-slide-to="9"></li>
				<li data-target="#myCarousel" data-slide-to="10"></li>
				<li data-target="#myCarousel" data-slide-to="11"></li>
				<li data-target="#myCarousel" data-slide-to="12"></li>
				<li data-target="#myCarousel" data-slide-to="13"></li>
				<li data-target="#myCarousel" data-slide-to="14"></li>
				<li data-target="#myCarousel" data-slide-to="15"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-6">
                      <img src="{{asset('/assets/img/foody/t-1.jpg')}}" style="width: 100%;">
                  </div>
                  <div class="col-md-6">
                      <div class="mov_wrp">
                   <h3>Tow Truck</h3>
                   <p>If you ever stuck on the road, Gride plans on sending the nearest tow truck
to your location to help you</p>
                        <h3>Follow Us :</h3>
                        <div class="icon">
                            <ul>
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                            </ul>
                        </div>
                        </div>
                </div>
                </div>
          
                <div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-2.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Movers</h3>
                            <p>Gride plans on having its movers to help you move from your old location
to your new location</p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                                 </div>
                  </div>
                </div>
              
                <div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-3.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Electrician</h3>
                            <p>If you are ever running into any electrical issues Gride plans on making this fix easy by bringing a electrician to you </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>

				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-4.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Grocery</h3>
                            <p>Groceries are important, but so is you staying comfortable that’s why
Gride plans on allowing you to deliver these groceries to your home </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>

				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-5.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Doctor</h3>
                            <p>If you are every feeling under the weather, Gride wants to bring them to
your location so you don’t have to move a muscle </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>
				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-6.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Plumber</h3>
                            <p>Clogs or broken pipes, Gride plans on bringing in a plumbing service that
will handle all tasks given to them </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>
				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-7.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Beauty Services</h3>
                            <p>Nails, Hair, Makeup, are important that’s why Gride wants to bring it to
you </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>
				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-8.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Dog Walking</h3>
                            <p>Treat your dogs by letting go for a walk, this will soon be available on
Gride </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>

				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-9.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>House Cleaning</h3>
                            <p>A clean home is something everyone happy home, which is why having
someone clean it for you relax is a great idea. </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>
				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-10.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Carpenter</h3>
                            <p>Need a book shelf or a new table Gride plans on rolling out carpentry
services to make your custom builds easier </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>
				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-11.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Landscaping</h3>
                            <p>Lawn need to be taking care of that is why Gride will be adding this
service soon </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>
				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-12.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Tutor</h3>
                            <p>Math, history, science, or english, Gride wants to add a tutoring services
and bring them to you. </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>

				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-13.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Massage</h3>
                            <p>Coming soon Gride wants to want to bring masseuses to you
 </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>

				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-14.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>DJ</h3>
                            <p>Need a DJ for your event, use Gride to book one. Coming Soon

 </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>

				<div class="item">
                    <div class="col-md-6">
                        <img src="{{asset('/assets/img/foody/t-15.jpg')}}" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <div class="mov_wrp">
                            <h3>Baby Sitting</h3>
                            <p>Gride want to add babysitters apart of it services for your convenience 

 </p>
                                 <h3>Follow Us :</h3>
                                 <div class="icon">
                                     <ul>
                                         <li><i class="fa fa-facebook"></i></li>
                                         <li><i class="fa fa-instagram"></i></li>
                                         <li><i class="fa fa-twitter"></i></li>
                                     </ul>
                                 </div>
                        </div>
                  </div>
                </div>






















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
</div>



        </div>
      
    </div>
</section>
@stop

<style type="text/css">
section {
    padding: 101px 0 0;
    margin-bottom: auto;
}
	.sec-title h3 {
		padding-bottom: 15px;
		font-size: 30px;
	}
	.sec-content ol li {
		list-style-type: decimal;
    	padding: 20px 10px;
	}
	.sec-content ul li {
		list-style-type: disc;
	    padding: 5px;
	    margin-left: 20px;
	    margin-top: 10px;
	}
</style>