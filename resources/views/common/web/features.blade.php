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
</style>
@stop
@section('content')
<section id="features">
    <div class="container">
        <div class="heading dis-column">
            <hr>
            <h1 class="text-center"><span class="txt-green">{{ __(Helper::getSettings()->site->site_title) }}</span> {{__('App Features') }}</h1>
            <p class="mt-4 col-lg-10 col-md-12 p-0 text-center">
                {{Helper::getSettings()->site->site_title}} {{ __('depending on what 
service is required by the user, has a variety of options. The workflow of these respective
choices are as follows:') }}
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
                <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/time.svg') }}" class="feature_box1-icon" alt="ESTIMATED TRAVEL TIME">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('ESTIMATED TRAVEL TIME') }}</h4>
                    <p>{{ __('This feature enables one to calculate the estimated travel time from the pick-up point to the destination point') }}.</p>
                </div>
            </div>

            <div class="dis-grid">

                
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
                  <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/call.svg') }}" class="feature_box1-icon" alt="Call features">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('CALL FEATURES') }}</h4>
                    <p>{{ __('Users of the application can communicate with the inbuilt call service provided for them') }}.</p>
                </div>
            </div>
            <div class="dis-grid">

              
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

                   <div class="item-feature">
                    <div class="icon">
                        <img src="{{ asset('assets/layout/images/common/svg/301-folder.svg') }}" class="feature_box1-icon" alt="Availability Options">
                        <div class="animation_round"></div>
                    </div>
                    <h4>{{ __('AVAILABILITY OPTIONS') }}</h4>
                    <p>{{ __('Availability toggles allow users to determine whether drivers/delivery personnel are available to provide their services') }}. </p>
                </div>
            </div>
            <div class="dis-grid">

             
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