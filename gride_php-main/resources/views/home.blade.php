@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}

@section('content')
<?php
$base_url = \App\Helpers\Helper::getBaseUrl();

$content='';
foreach(Helper::getcmspage() as $k=>$v){
    if($v->page_name == 'home'){
        $content=$v->content;
    }
}
$content=explode('<!--Section-->',$content);
?>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/home.css')}}"/>

<section id="home" class="top-section dis-center">
    <div class="background-holder background-holder--auto background-holder--left-top d-none d-lg-block d-xl-block " style="background-image:  url(assets/layout/images/common/city.jpg); background-repeat: no-repeat; background-size: 100%;">
        <img src="{{ asset('assets/layout/images/common/hero-dots.png') }}" alt="hero-dots" class="background-image-holder " style="display:none;">
    </div>
    <div class="background-holder background-holder--auto background-holder--left-top d-sm-block d-lg-none d-xl-none" style="background-image: url(assets/layout/images/common/bgimg1.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    </div>
    <div class="overlay d-sm-block d-lg-none d-xl-none"></div>
    <img class="shape1 d-none d-xl-block " src="{{ asset('assets/layout/images/common/round-shape1.png') }}" alt="">
    <img class="shape2 d-none d-xl-block " src="{{ asset('assets/layout/images/common/round-shape3.png') }}" alt="">
    <!-- <img class="bgimg" src="./img/wave.png" alt=""> -->
    <div class="col-12 col-xl-7 col-lg-9 pos-abs-top-right pr-0 d-sm-block d-lg-none d-xl-none">
        <!-- <div class="hero__block5 background-holder--cover background-holder--center ml-auto" style="clip-path: url(&quot;#hero__block5&quot;); width: 800px; height: 680px; background-image: url(&quot;./img/hero-5.png&quot;); background-repeat: no-repeat;">
               <img src="./img/hero-5.png" alt="oval" class="background-image-holder " style="display: none;">
            </div> -->

        <!-- <img src="./img/xjek_app.png" alt="oval" class="background-image-holder img-fluid jump-anim"> -->

        <!-- <svg height="0" width="0">
               <defs>
                  <clipPath id="hero__block5">
                     <path d="M0,0c0,0,18.2,428.9,283.2,549.5S655.1,598.4,800,680V0H0z"></path>
                  </clipPath>
               </defs>
            </svg> -->
    </div>
    <div class="container">
        <div class="row banner-section">
            <!-- <div class="col-12 col-lg-6 d-sm-block d-lg-none d-xl-none">
                  <div class="hero__block5-mobile background-holder--cover background-holder--center d-xl-none mx-auto mb-30" style="background-image: url(&quot;./img/landing_bg.png&quot;); background-repeat: no-repeat;">
                     <img src="./img/landing_bg.png" alt="oval" class="background-image-holder " style="display: none;">
                  </div>
               </div> -->
            <div class="col-12 col-lg-6 d-sm-block d-lg-none d-xl-none">
                <img src="{{ asset('assets/layout/images/common/xjek_app.png') }}" alt="oval" class="background-image-holder img-fluid shape1">
            </div>
            <div class="banner-content col-lg-6 col-md-6 col-sm-12 col-xl-5 col-xs-12 z-index1 dis-column-left p-0 " style="margin-top: 77px;">
                   <div class="navtabs-module">
                    <div class="nav-tabs">
                        <ul id="myTab" class="nav nav-tabs">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25"  fill="#f26822"  class="bi bi-car-front-fill form-icon" viewBox="0 0 16 16">
                                    <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"></path>
                                </svg>
                                <a href="#Specifications" data-toggle="tab" class="active show">Ride</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="#f26822" viewBox="0 0 448 512" class="form-icon"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                                <a href="#Eating" data-toggle="tab" class="">Eat</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f26822" class="bi bi-basket2-fill form-icon" viewBox="0 0 16 16">
                                    <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"></path>
                                </svg>
                                <a href="#Grocery" data-toggle="tab" class="">Grocery</a>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active show" id="Specifications">
                            <div class="tab-contents">
                                <div class="tab-header">
                                    <h1>Ride with Gride</h1>
                                </div><!--tab-header-->
                                <div class="tab-body">
                                    <div class="tab-form">
                                        <div class="field">
                                            <input type="text"  id="origin-input" name="s_address" class="form-control pac-target-input" type="text"autocomplete="off" placeholder="Enter Pickup Location">
                                            <input type="hidden" name="s_latitude" id="origin_latitude" />
                                            <input type="hidden" name="s_longitude" id="origin_longitude" />
                                                                    <input type="hidden" name="d_latitude" id="destination_latitude" />
                                            <input type="hidden" name="d_longitude" id="destination_longitude" />
                                                                    <input type="hidden" name="current_longitude" id="long" />
                                            <input type="hidden" name="current_latitude" id="lat" />
                                            <div id="map" class="col-sm-12 col-md-12 col-lg-7 map-section" style="width:100%; height: 500px; margin-left:15px; box-shadow: 2px 2px 10px #ccc;display: none;">
                                            </div>
                                        </div><!--field-->
                                        <div class="field">
                                            <input id="destination-input" name="d_address" class="form-control pac-target-input" type="text" placeholder=" Enter Destination" autocomplete="off">
                                        </div><!--field-->
                                    </div><!--tab-form-->
                                </div><!--tab-body-->
                                <div class="tab-btn">
                                    <a href="{{ url('provider/login') }}" onclick="setCookie()" class="btn">Sign up to drive</a>
                                    <a href="{{ url('user/login') }}"  onclick="setCookie()" class="btn btn-grey">Order now</a>
                                </div><!--tab-btn-->
                                <a href="#">Learn more about driving and delivering with Gride</a>
                            </div><!--tab-contents-->
                        </div>
                        
                        <div class="tab-pane" id="Eating">
                            <div class="tab-contents">
                                <div class="tab-header">
                                    <h1>Eat with Gride</h1>
                                </div><!--tab-header-->
                                <div class="tab-body">
                                    <div class="tab-form">
                                        <div class="field" style="display:none;">
                                            <input type="text"  id="origin-input" name="s_address" class="form-control pac-target-input" type="text"autocomplete="off" placeholder="Enter Your Delivery Address">
                                            <input type="hidden" name="s_latitude" id="origin_latitude" />
                                            <input type="hidden" name="s_longitude" id="origin_longitude" />
                                                                    <input type="hidden" name="d_latitude" id="destination_latitude" />
                                            <input type="hidden" name="d_longitude" id="destination_longitude" />
                                                                    <input type="hidden" name="current_longitude" id="long" />
                                            <input type="hidden" name="current_latitude" id="lat" />
                                            <div id="map" class="col-sm-12 col-md-12 col-lg-7 map-section" style="width:100%; height: 500px; margin-left:15px; box-shadow: 2px 2px 10px #ccc;display: none;">
                                            </div>
                                        </div><!--field-->
                                        <div class="field" style="display:none;">
                                            <input id="destination-input" name="d_address" class="form-control pac-target-input" type="text" placeholder=" Enter Destination" autocomplete="off">
                                        </div><!--field-->
                                    </div><!--tab-form-->
                                </div><!--tab-body-->
                                <div class="tab-btn">
                                    <a href="{{ url('user/login') }}" onclick="setCookie()" class="btn">Sign Up to Deliver</a>
                                    <a href="{{ url('user/login') }}"  onclick="setCookie()" class="btn btn-grey">Order now</a>
                                </div><!--tab-btn-->
                                <a href="#">Learn more about driving and delivering with Gride</a>
                            </div><!--tab-contents-->
                        </div>

                        <div class="tab-pane" id="Grocery">
                            <div class="tab-contents">
                                <div class="tab-header">
                                    <h1>Grocery with Gride</h1>
                                </div><!--tab-header-->
                                <div class="tab-body">
                                    <div class="tab-form">
                                        <div class="field" style="display:none;">
                                            <input type="text"  id="origin-input" name="s_address" class="form-control pac-target-input" type="text"autocomplete="off" placeholder="Enter Your Delivery Address">
                                            <input type="hidden" name="s_latitude" id="origin_latitude" />
                                            <input type="hidden" name="s_longitude" id="origin_longitude" />
                                                                    <input type="hidden" name="d_latitude" id="destination_latitude" />
                                            <input type="hidden" name="d_longitude" id="destination_longitude" />
                                                                    <input type="hidden" name="current_longitude" id="long" />
                                            <input type="hidden" name="current_latitude" id="lat" />
                                            <div id="map" class="col-sm-12 col-md-12 col-lg-7 map-section" style="width:100%; height: 500px; margin-left:15px; box-shadow: 2px 2px 10px #ccc;display: none;">
                                            </div>
                                        </div><!--field-->
                                        <div class="field" style="display:none;">
                                            <input id="destination-input" name="d_address" class="form-control pac-target-input" type="text" placeholder=" Enter Destination" autocomplete="off">
                                        </div><!--field-->
                                    </div><!--tab-form-->
                                </div><!--tab-body-->
                                <div class="tab-btn">
                                    <a href="{{ url('user/login') }}" onclick="setCookie()" class="btn">Sign Up to Deliver</a>
                                    <a href="{{ url('user/login') }}"  onclick="setCookie()" class="btn btn-grey">Order now</a>
                                </div><!--tab-btn-->
                                <a href="#">Learn more about driving and delivering with Gride</a>
                            </div><!--tab-contents-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 col-xl-5 col-sm-12 col-xs-12  p-0 text-center" style="margin-top: 77px;">
             <?php echo $content[0];?>
                <!-- <a class="btn btn-secondary mt-3 bg-white txt-green" href="./login.html"> Buy Now - {{Helper::getSettings()->site->site_title}} App  <i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a> -->
            </div>
        </div>
    </div>
</section>

<section id="about" class="services-list">
    <div class="container-fluid">
        <div class="heading dis-column col-12 col-lg-12">
            <hr>
            <?php echo $content[1];?> 
            <!-- <a class="btn btn-secondary mt-3 col-md-5 col-lg-3" href="./login.html"> Buy Now - {{Helper::getSettings()->site->site_title}}  <i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a> -->
        </div>
        <div class="row bg-dots">
            <div class="col-sm-12">
                <div class="clearfix tab-content">
                    <div role="tabpanel" class="tab-pane active col-sm-12 col-md-12 col-lg-12 p-0" id="general_info">
                        <div class="dis-row flex-wrap">
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('user/login') }}">
                                    <div class="service-item item-shadow bg-1">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/sedan-car-model.svg') }}">
                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Ride') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/delivery_food') }}">
                                    <div class="service-item item-shadow bg-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" viewBox="0 0 448 512" class="form-icon"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Eat') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/delivery_city') }}">
                                    <div class="service-item item-shadow bg-3">
                                        <svg class="img-responsive" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-basket2-fill " viewBox="0 0 16 16">
                                            <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"></path>
                                          </svg>
                                        
                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Groceries') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('rental') }}">
                                    <div class="service-item item-shadow bg-1">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/rental.png') }}">
                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">Rental</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane col-sm-12 col-md-12 col-lg-12 p-0" id="password">
                        <div class="dis-row flex-wrap">
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('user/login') }}">
                                    <div class="service-item item-shadow bg-5">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/chef.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Food') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('user/login') }}">
                                    <div class="service-item item-shadow bg-6">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/groceries-bag.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Grocery') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('user/login') }}">
                                    <div class="service-item item-shadow bg-7">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/flower-bouquet.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Flower') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dis-row align-items">
                             <a class="btn btn-green py-2" href="{{ url('/delivery-contract') }}" target="_blank">Delivery Contract</a>
                         </div>
                    </div>
                    <div role="tabpanel" class="tab-pane col-sm-12 col-md-12 col-lg-12 p-0" id="payment_method">
                        <div class="dis-row flex-wrap">
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-4">
                                        <img alt="" class="img-responsive" style="width:60px;" src="{{ asset('assets/layout/images/common/svg/electricity.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Electrician') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-8">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/doctor-stethoscope.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Doctor') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-9">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/tap.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Plumber') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-10">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/hair-dryer.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Beauty Services') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-11">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/pawprints.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Dog Walking') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-12">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/laundry.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Laundry') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-13">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/vacuum.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('House Cleaning') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-14">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/toolbox.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Carpenter') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-15">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/lawn-mower.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Lawn Mowing') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-16">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/man-on-his-knees-to-cuddle-his-dog.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Cuddling') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-17">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/open-book.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Tutor') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0 ">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-18">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/essential-oil-drop-for-spa-massage-falling-on-an-open-hand.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Massage') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-19">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/vynil.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('DJ') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-list col-md-3 col-lg-2 col-sm-12 p-0">
                                <a href="{{ url('pages/coming_soon') }}">
                                    <div class="service-item item-shadow bg-20">
                                        <img alt="" class="img-responsive" src="{{ asset('assets/layout/images/common/svg/baby-stroller.svg') }}">

                                    </div>
                                    <div class="service-section">
                                        <div class="service-content ">
                                            <h3 class="service-title">{{ __('Baby Sitting') }}</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

</section>

<!-- <section id="partner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row dis-center">
            <div class="col-6">
                <div class="heading dis-column">
                    <hr>
                    <h1 class="txt-white"><span class="txt-white">Partner </span>With Us</h1>
                    <p class="mt-3 col-lg-12 col-md-12 p-0 text-center txt-white">Register your Shop details with us for becoming a Gride Partner
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="mx-auto text-center">
                     <a class="btn btn-lg big-btn mr-2" href="#" data-toggle="modal" data-target="#restaurant-modal">Restaurant Signup</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="features">
    <div class="container-fluid">
        <div class="heading dis-column">
            <hr>
            <h1 class="text-center"><span class="txt-green">{{ __(Helper::getSettings()->site->site_title) }}</span> {{__('App Features') }}</h1>
            <p class="mt-4 col-lg-10 col-md-12 p-0 text-center">
                {{Helper::getSettings()->site->site_title}} {{ __('depending on what service is required by the user, has three options. The workflow of these respective choices are as follows') }}:
            </p>
        </div>
        <div class="">
            <div class="dis-grid">
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/student.svg') }}" class="feature_box1-icon" alt="PROFILE">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('PROFILE') }}</h4>
                    <p>{{ __('A user/service provider can update their detailed profile as well as add/remove their info from the application. Gride Tech ensures that information is not stored without the approval or knowledge of the enduser') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/book.svg') }}" class="feature_box1-icon" alt="SAVED ADDRESS">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('SAVED ADDRESS') }}</h4>
                    <p>{{ __('Frequently visited addresses can be saved to eliminate the repetitive entry of a location when the user travels. For example, a user can add and then automatically choose their home address instead of typing it in every time') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/call.svg') }}" class="feature_box1-icon" alt="SCHEDULE BOOKINGS">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('SCHEDULE BOOKINGS') }}</h4>
                    <p>{{ __('If one needs to commute daily at a routine time, this feature enables them to perform scheduled bookings') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/clock.svg') }}" class="feature_box1-icon" alt="BOOKING RECORDS">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('BOOKING RECORDS') }}</h4>
                    <p>{{ __('This feature keeps a record of the user’s trip destinations, the price of trips and other important information. It helps the user in case they need to review their past trips') }}.</p>
                </div>
            </div>

            <div class="dis-grid">
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/payment-method.svg') }}" class="feature_box1-icon" alt="MULTIPLE PAYMENT METHODS">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('MULTIPLE PAYMENT METHODS') }}</h4>
                    <p>{{ __('This feature enables the user to pay through multiple modes like cash, card or any e-commerce payment applications, therefore, making it convenient for users to make payments') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/gift-card.svg') }}" class="feature_box1-icon" alt="RATE CARD">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('RATE CARD') }}</h4>
                    <p>{{ __('When the user is not sure of proper destination, the rate card gives a rate in accordance with the distance travelled') }}.</p>
                </div>

                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/route.svg') }}" class="feature_box1-icon" alt="LIVE VEHICLE TRACKING">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('LIVE VEHICLE TRACKING') }}</h4>
                    <p>{{ __('Real-time tracking helps the customer to be aware of the location of their delivery and also for drivers and riders to locate each other') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/review.svg') }}" class="feature_box1-icon" alt="REVIEWING">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('REVIEWING') }}</h4>
                    <p>{{ __('This feature helps with maintaining quality standards on the application based on feedback received from both service providers and customers') }}.</p>
                </div>
            </div>

            <div class="dis-grid">

                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/time.svg') }}" class="feature_box1-icon" alt="ESTIMATED TRAVEL TIME">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('ESTIMATED TRAVEL TIME') }}</h4>
                    <p>{{ __('This feature enables one to calculate the estimated travel time from the pick-up point to the destination point') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/cash.svg') }}" class="feature_box1-icon" alt="TRIP RATE ESTIMATOR">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('TRIP RATE ESTIMATOR') }}</h4>
                    <p>{{ __('Trip Fare estimator helps to calculate the approximate trip fare based on the distance to be travelled') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/email-notify.svg') }}" class="feature_box1-icon" alt="SMS/ EMAIL NOTIFICATIONS">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('SMS/ EMAIL NOTIFICATIONS') }}</h4>
                    <p>{{ __('This feature enables the service provider to send notifications or alerts to their customers through SMS or Emails') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/notification.svg') }}" class="feature_box1-icon" alt="Instant notification">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('INSTANT NOTIFICATION') }}</h4>
                    <p>{{ __('The app instantly alerts or notifies its users on booking status, change/cancellation, payment notifications, etc') }}.</p>
                </div>
            </div>
            <div class="dis-grid">

                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/call.svg') }}" class="feature_box1-icon" alt="Call features">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('CALL FEATURES') }}</h4>
                    <p>{{ __('Users of the application can communicate with the inbuilt call service provided for them') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/gift-card.svg') }}" class="feature_box1-icon" alt="Promo code">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('PROMO CODE') }}</h4>
                    <p>{{ __('This feature enables the users of the app to enjoy discounts and offers, thereby bringing in more users') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/301-gps.svg') }}" class="feature_box1-icon" alt="Geo-Fencing">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('GEO-FENCING') }}</h4>
                    <p>{{ __('Geo-fencing allows the drivers/delivery person to locate the customers and vice versa. Its accuracy goes a long way in increasing the efficiency of the service provided') }}.</p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/301-key.svg') }}" class="feature_box1-icon" alt="Authentication">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('AUTHENTICATION') }}</h4>
                    <p>{{ __('This feature helps with maintaining quality standards on the application based on feedback received from both service providers and customers') }}.</p>
                </div>
            </div>
            <div class="dis-grid">

                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/301-folder.svg') }}" class="feature_box1-icon" alt="Availability Options">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('AVAILABILITY OPTIONS') }}</h4>
                    <p>{{ __('Availability toggles allow users to determine whether drivers/delivery personnel are available to provide their services') }}. </p>
                </div>
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/301-check.svg') }}" class="feature_box1-icon" alt="Flexible Vehicle Option">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('FLEXIBLE VEHICLE OPTION') }}</h4>
                    <p>{{ __('An app provides its users with multiple vehicle options to choose from based on their requirements') }}.</p>
                </div>

                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/301-analytics.svg') }}" class="feature_box1-icon" alt="Analytics Tracking">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('ANALYTICS TRACKING') }}</h4>
                    <p>{{ __('This feature helps collect user-based data to make changes and further improve the services provided') }}.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="demo">
    <div class="overlay"></div>
    <div class="">
        <div class="row dis-center">
            <div class="heading dis-column">
                <hr>
               <?php echo $content[2];?>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 dis-row">

                <div class="col-md-12 col-lg-6 col-sm-12 mt-3 dis-column">
                    <img src="{{asset('/assets/img/app-logo.jpeg')}}"  alt="app logo" width="100px">
                    <h5 class="txt-white">{{ __('User iOS App & Android App') }}</h5>
                    <div class="app-links">

                        <a class="btn btn-lg big-btn mr-2" target="_blank" href="@if(isset(Helper::getSettings()->site->store_link_ios_user)){{ Helper::getSettings()->site->store_link_ios_user}} @else # @endif">
                            <img width="22px" class="pull-left" src="{{ asset('assets/layout/images/common/apple.png') }}">
                            <div class="btn-text"><small>{{ __('Download on the') }}</small><br><strong>{{ __('App Store') }}</strong></div>
                        </a>
                        <a class="btn btn-lg  big-btn" target="_blank" href="@if(isset(Helper::getSettings()->site->store_link_android_user)){{ Helper::getSettings()->site->store_link_android_user}} @else # @endif">
                            <img width="22px" class="pull-left" src="{{ asset('assets/layout/images/common/google-play.png') }}">
                            <div class="btn-text"><small>{{ __('Get it on') }}</small><br><strong>{{ __('Google Play') }}</strong></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 mt-3 dis-column">
                    <img src="{{asset('/assets/img/app-logo.jpeg')}}"  alt="app logo" width="100px">

                    <h5 class="txt-white">{{ __('Provider / Driver iOS App & Android App') }} </h5>
                    <div class="app-links">

                        <a class="btn btn-lg big-btn mr-2" target="_blank" href="@if(isset(Helper::getSettings()->site->store_link_ios_provider)){{ Helper::getSettings()->site->store_link_ios_provider}} @else # @endif">
                            <img width="22px" class="pull-left" src="{{ asset('assets/layout/images/common/apple.png') }}">
                            <div class="btn-text"><small>{{ __('Download on the') }}</small><br><strong>{{ __('App Store') }}</strong></div>
                        </a>
                        <a class="btn btn-lg  big-btn" target="_blank" href="@if(isset(Helper::getSettings()->site->store_link_android_provider)){{ Helper::getSettings()->site->store_link_android_provider}} @else # @endif">
                            <img width="22px" class="pull-left" src="{{ asset('assets/layout/images/common/google-play.png') }}">
                            <div class="btn-text"><small>{{ __('Get it on') }}</small><br><strong>{{ __('Google Play') }}</strong></div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-12 col-xl-3 col-sm-12 mt-5 dis-column">

                        <h5 class="txt-white">Website & Admin Panel Demo </h5>
                        <div class="app-links">

                            <a class="btn btn-lg big-btn mr-2" href="#">
                                <img height="22px" class="pull-left" {{ asset('assets/layout/images/common/svg/chef.svg') }}/svg/admin.svg">
                                <strong>Live Demo</strong>
                            </a>
                            <a class="btn btn-lg  big-btn" href="#">
                                <img height="22px" class="pull-left" {{ asset('assets/layout/images/common/svg/chef.svg') }}/svg/web.svg">
                                <strong>Live Demo</strong>
                            </a>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</section>

<!-- <section class="screenShots" id="screenShots">
    <div class="heading dis-column">
        <hr>
        <h1 class="">{{ __('App') }} <span class="">{{ __('Screenshots') }}</span></h1>
    </div>
    <div class="app-screen">
        <div class="mobile-mockup text-center">
            <img alt="" src="{{ asset('assets/layout/images/common/iphone-frame.png') }}">
        </div>
        <div class="swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img alt="" src="{{ asset('assets/layout/images/common/homepage.png') }}" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <img alt="" src="{{ asset('assets/layout/images/common/home_service.png') }}" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <img alt="" src="{{ asset('assets/layout/images/common/home_show_more.png') }}" class="img-responsive">
                </div>

                <div class="swiper-slide">
                    <img alt="" src="{{ asset('assets/layout/images/common/home_go_offline.png') }}" class="img-responsive">
                </div>
            </div>
            <div class="custom_slider_arrows">
                <ul class="list-inline list-unstyled">
                    <li>
                        <button class="appsLand-btn appsLand-btn-gradient screenShots__style-1__btn-prev">
                            <span><i class="fa fa-angle-left"></i></span>
                        </button>
                    </li>
                    <li>
                        <button class="appsLand-btn appsLand-btn-gradient screenShots__style-1__btn-next">
                            <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
 -->
@stop

@section('scripts')
      <script type="text/javascript" src="{{ asset('assets/plugins/jquery-3.3.1.min.js')}}"></script>

<script type="text/javascript">

    var current_latitude = 13.0574400;
    var current_longitude = 80.2482605;

    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services');
    }

    function success(position)
    {
        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
        }

      initMap();
    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
         initMap();
    }
     $('#origin-input').change(function(){
     
     
      setTimeout(function(){ 
         current_latitude=$('#origin_latitude').val();
         current_longitude=$('#origin_longitude').val();
         getRideTypes(); 
         
         }, 1000);

   });
     
</script>
<script type="text/javascript" src="{{asset('/assets/layout/js/map.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2AWl-ag4AHap1LUBqgM1FvNUkbdZRQ6M&libraries=places&callback=initMap" async defer></script>
@parent

<!-- <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script> -->
<script>

    function setCookie() {
        var cname="location";
        var cvalue=$('#origin-input').val();
        var exdays="1";
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

        var dname="destination";
        var dvalue=$('#destination-input').val();
        var dexdays="1";
        d.setTime(d.getTime() + (dexdays * 24 * 60 * 60 * 1000));
        let dexpires = "expires="+d.toUTCString();
        document.cookie = dname + "=" + dvalue + ";" + dexpires + ";path=/";

        window.location.href='{{url("/user/login")}}';
    }


    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function openToggle() {
        document.getElementById("toggle-bg").style.width = "100%";
        document.getElementById("sideToggle").style.right = "-10px";
    }

    function closeToggle() {
        document.getElementById("toggle-bg").style.width = "0";
        document.getElementById("sideToggle").style.right = "-640px";
    }

    $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
        $.getJSON('http://www.geoplugin.net/json.gp?ip=' + data.geobytesremoteip, function(response) {
            if (response.geoplugin_countryCode == 'AE') {
                if (!(window.location.href).includes('/ar')) {
                    location.replace('/ar');
                }
            }
        });
    });


    // jQuery(document).ready(function ($) {
    //    "use strict";

    // $('#rides').owlCarousel({

    //    items: 3,
    //    margin: 10,
    //    nav: true,
    //    autoplay: true,
    //    dots: true,
    //    autoplayTimeout: 5000,
    //    navText: ['<span class="icon ion-ios-arrow-left"></span>', '<span class="icon ion-ios-arrow-right"></span>'],
    //    smartSpeed: 450,
    //    responsive: {
    //       0: {
    //          items: 1
    //       },
    //       768: {
    //          items: 2
    //       },
    //       1170: {
    //          items: 4
    //       }
    //    }
    // });

    // $('#deliveries').owlCarousel({

    //    items: 3,
    //    margin: 10,
    //    nav: true,
    //    autoplay: true,
    //    dots: true,
    //    autoplayTimeout: 5000,
    //    navText: ['<span class="icon ion-ios-arrow-left"></span>', '<span class="icon ion-ios-arrow-right"></span>'],
    //    smartSpeed: 450,
    //    responsive: {
    //       0: {
    //          items: 1
    //       },
    //       375: {
    //          items: 1
    //       },
    //       768: {
    //          items: 2
    //       },
    //       1170: {
    //          items: 4
    //       }
    //    }
    // });

    // $('#other-services').owlCarousel({
    //    items: 3,
    //    margin: 10,
    //    nav: true,
    //    autoplay: true,
    //    dots: true,
    //    autoplayTimeout: 5000,
    //    navText: ['<span class="icon ion-ios-arrow-left"></span>', '<span class="icon ion-ios-arrow-right"></span>'],
    //    smartSpeed: 450,
    //    responsive: {
    //       0: {
    //          items: 1
    //       },
    //       375: {
    //          items: 1
    //       },
    //       768: {
    //          items: 2
    //       },
    //       1170: {
    //          items: 4
    //       }
    //    }
    // });
</script>

<!-- 
<script>
    $(document).ready(function() {

    setBaseUrl('{{$base_url}}');


    $('#restaurant-modal').validate({
      // errorElement: 'span', //default input error message container
      // errorClass: 'help-block', // default input error message class
      // focusInvalid: false, // do not focus the last invalid input
      // rules: {
      //       first_name: { required: true },
      //       last_name: { required: true },
      //       email: { required: true, email: true },
      //       mobile: { required: true },
      //       location : {required:true},
      //       cuisine : {required:true},
      //       res_name : {required:true},
      //       res_address : {required:true},
      //       res_mobile : {required:true},
      //       g_deliver : {required:true},
      //       my_deliver : {required:true},
      //       company_name : {required:true},
      //       company_deliver : {required:true},
      //       b_fname : {required:true},
      //       b_lname : {required:true},
      //       bank_name : {required:true},
      //       routing_number : {required:true},
      //       ach_number : {required:true},
      //       fein : {required:true},
      //       b_email : {required:true},
      //       b_mobile : {required:true}
      // },

      // messages: {
      //       first_name : { required: "{{__('auth.firstname_required')}}" },
      //       last_name : { required: "{{__('auth.lastname_required')}}" },
      //       mobile: { required: "{{__('auth.mobile_required')}}" },
      //       email: { required: "{{__('auth.email_required')}}" },
      //       location: { required: "{{__('auth.location_required')}}" },
      //       cuisine: { required: "{{__('auth.cuisine_required')}}" },
      //       res_name: { required: "{{__('auth.res_name_required')}}" },
      //       res_address: { required: "{{__('auth.res_address_required')}}" },
      //       res_mobile: { required: "{{__('auth.res_mobile_required')}}" },
      //       g_deliver: { required: "{{__('auth.g_deliver_required')}}" },
      //       my_deliver: { required: "{{__('auth.my_deliver_required')}}" },
      //       company_name: { required: "{{__('auth.company_name_required')}}" },
      //       company_deliver: { required: "{{__('auth.company_deliver_required')}}" },
      //       b_fname: { required: "{{__('auth.b_fname_required')}}" },
      //       b_lname: { required: "{{__('auth.b_lname_required')}}" },
      //       bank_name: { required: "{{__('auth.bank_name_required')}}" },
      //       routing_number: { required: "{{__('auth.routing_number_required')}}" },
      //       ach_number: { required: "{{__('auth.ach_number_required')}}" },
      //       fein: { required: "{{__('auth.fein_required')}}" },
      //       b_email: { required: "{{__('auth.b_email_required')}}" },
      //       b_mobile: { required: "{{__('auth.b_mobile_required')}}" },
      // },

      highlight: function(element)
      {
         $(element).closest('.form-group').addClass('has-error');
      },

      success: function(label) {
         label.closest('.form-group').removeClass('has-error');
         label.remove();
      },

      submitHandler: function(form) {

            var formGroup = $(".validateForm").find("input[type='hidden'], select, :input:not(:hidden)").serialize().split("&");

            var data = new FormData();

            for(var i in formGroup) {
               var params = formGroup[i].split("=");
               data.append( params[0], decodeURIComponent(params[1]) );
            }

            if($('.mobile').is(':visible')) {
               data.append( 'country_code', $('.mobile').intlTelInput('getSelectedCountryData').dialCode );
            }

            $.ajax({
               url: "https://api.gridetech.com/send/mail",
               type: "post",
               data: data,
               processData: false,
               contentType: false,
               beforeSend: function() {
                  showLoader();
               },
               success: function(response, textStatus, jqXHR) {
                    var data = parseData(response);
                    hideLoader();
                    $('#restaurant-modal').hide();

                    alertMessage("Success", data.message, "success");
               },
               error: function(jqXHR, textStatus, errorThrown) {
                  alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
                  hideLoader();
               }
            });

      }
   });

    });


</script> -->


<script>
   $(document).ready(function() {

     setBaseUrl('{{$base_url}}');

$(".validateResForm").submit(function(){

    var data = new FormData($(this)[0]);
    console.log(data);
    data.append( 'salt_key', '{{Helper::getSaltKey()}}'); 
    $.ajax({
       url:  "https://api.gridetech.com/send/mail",
       type: "post",
       data: data,
       processData: false,
       contentType: false,
       beforeSend: function() {
          showLoader();
          // alert('send');
       },
       success: function(response, textStatus, jqXHR) {
        console.log("success");
            location.reload();
            alertMessage("Success", response.message, "success");
           
         // window.location.replace("{{ url('/mail/success') }}");
       },
       error: function(jqXHR, textStatus, errorThrown) {
        alert('error');
        console.log(errorThrown);
          //alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
       }
    });

    return false;


});

    });




</script>

@stop