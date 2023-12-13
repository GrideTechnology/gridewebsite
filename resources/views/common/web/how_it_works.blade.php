@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
@stop
@section('content')
<section class="screenShots" id="screenShots">
    <div class="heading dis-column">
        <hr>
        <h1 class="">{{ __('App') }} <span class="">{{ __('Screenshots') }}</span></h1>
    </div>
    <div class="app-screen">
        <div class="mobile-mockup text-center">
            <img alt="" src="{{ asset('assets/layout/images/common/iphone-x-frame.png') }}">
        </div>
        <div class="swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="swiper-wrapper">
                 @foreach(Helper::getcmspage() as $k=>$v)
                    @if($v->page_name == 'how_it_works')
                        @php echo $v->content; @endphp
                    @endif
                @endforeach
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

@stop

<style type="text/css">
	section {
		padding: 120px 0;
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