<header class="topnav" id="myTopnavs">
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 dis-row p-0">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="" href="{{ url('/') }}">{{ __('Home') }}</a>
                <a class="" href="{{ url('services') }}">{{ __('Services') }}</a>
                <a class="" href="{{ url('rental/1/cars') }}">{{ __('Rental') }}</a>
                <a class="" href="{{ url('pages/features') }}">{{ __('Features') }}</a>
                <a class="" href="{{ url('pages/how_it_works') }}">{{ __('How It Works') }}</a>
            </div>
            <div id="mySidenav" class=" dis-ver-center col-md-4 col-sm-12 p-0">
                <div id="sidebarCollapse" class="active" onclick="openNav()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--<a href="{{URL::to('')}}" class="logo"><img src="{{ Helper::getSiteLogo() }}" class="" alt="logo"></a> -->
                <a href="{{URL::to('')}}" class="logo"><img src="{{ Helper::getSiteLogo() }}" class="" alt="logo"></a>
                <div class="dropdown">
                    <li class="menu-item active  d-none d-lg-block d-xl-block dropdown-toggle"><a class="" href="#">Learn More <i class="fa fa-arrow-down" aria-hidden="true"></i></i></a>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <ul>
                            <li><a href="{{ url('pages/blog') }}">Blog</a></li>
                            <li><a href="{{ url('pages/faq')}}">FAQ</a></li>
                            <li><a href="{{ url('pages/how_it_works') }}">How It Work</a></li>
                            <li><a class="" href="{{ Helper::getSettings()->site->about_us}}">{{ __('About') }}</a></li>
                            <li><a href="{{ url('pages/page_privacy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('pages/terms')}}">Terms &amp; Conditions</a></li>
                            <li><a href="{{ url('pages/financial')}}">Financial</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=" col-md-7 p-0 user float-right p-0">
                <ul class="w-100 dis-flex-end m-0">
                    <li class="menu-item active  d-none d-lg-block d-xl-block"><a class="" href="{{ url('/') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="menu-item  d-none d-lg-block d-xl-block "><a class="" href="{{ url('services') }}">{{ __('Services') }}</a></li>
                    <li class="menu-item  d-none d-lg-block d-xl-block "><a class="" href="{{ url('rental/1/cars') }}">{{ __('Rental') }}</a></li>
                    <li class="menu-item  d-none d-lg-block d-xl-block"><a class="" href="{{ url('pages/features') }}">{{ __('Features') }}</a>
                    </li>
                    <li class="menu-item  d-none d-lg-block d-xl-block "><a class="" href="{{ url('pages/how_it_works') }}">{{ __('How It Works') }}</a>
                    </li>
                    <li class="menu-item"><a class=" btn-green-secondary" href="javascript:;" onclick="openToggle()">{{ __('Login') }}</a>
                    </li>
                    <!--  <li class="menu-item d-none d-lg-block d-xl-block "><a class="btn btn-green" href="{{ ('/user/home') }}">{{ __('Login as Guest') }}</a> -->
                    <!--   <li class="menu-item d-none d-lg-block d-xl-block "> <a class="btn btn-green" href="#" data-toggle="modal" data-target="#restaurant-modal">Restaurant Signup</a> -->
                        <li class="menu-item d-none d-lg-block d-xl-block "> <a class="btn btn-green" href="{{ url('user/signup') }}" >Service Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div id="toggle-bg" onclick="closeToggle()"></div>
<div class="ongoing-service">
    <div id="sideToggle" class="side-toggle mt-3">
        <a href="javascript:void(0)" class="closebtn" onclick="closeToggle()">&times;</a>
        <ul class="ongoing-list">
            <li>
                <div class="provider-section bg-green">
                    <h5 class="txt-white">{{ __('UserText') }}</h5>
                    <p class="txt-white">{{ __('Find everything you need to track your success on the road') }}.</p>
                    <div class="dis-column">
                        <a class="btn big-btn" href="{{URL::to('user/login')}}">{{ __('User Sign In') }} <i class="fa fa-arrow-circle-right ml-2"
                                aria-hidden="true"></i></a>
                        <a class="btn big-btn mt-3" href="{{URL::to('user/login')}}">{{ __('User Sign Up') }} <i
                                class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                    </div>
            </li>

            <li>
                <div class="provider-section bg-green">
                    <h5 class="txt-white">{{ __('ProviderText') }}</h5>
                    <p class="txt-white">{{ __('Find everything you need to track your success on the road') }}.</p>
                    <div class="dis-column">
                        <a class="btn big-btn" href="{{URL::to('provider/login')}}">{{ __('Provider Sign In') }} <i class="fa fa-arrow-circle-right ml-2"
                                aria-hidden="true"></i></a>
                        <a class="btn big-btn mt-3" href="{{URL::to('provider/signup')}}">{{ __('Provider Sign Up') }} <i
                                class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </li>

            <li>
                <div class="provider-section bg-green">
                    <h5 class="txt-white">{{ __('ShopText') }}</h5>
                    <p class="txt-white">{{ __('Find everything you need to track your success on the road') }}.</p>
                    <div class="dis-column">
                        <a class="btn big-btn" href="{{URL::to('shop/login')}}">{{ __('Shop Sign In') }} <i class="fa fa-arrow-circle-right ml-2"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
