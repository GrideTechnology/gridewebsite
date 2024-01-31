<!--Footer Content Start-->
<footer id="footer" class="footer dis-column p-0">
        <div class="space col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-3 col-sm-12 ">
                        <h5 class="txt-green">{{ __('Contact Us') }}</h5>
                        <!-- <form class="dis-center mt-3">
                     <div class="col-md-12 p-0 dis-start">
                        <input id="name" name="name" class="textInput required" placeholder="First Name" aria-required="true" type="text" required="">
                        <input id="email" name="email" class="textInput required email" placeholder="E-mail Address" type="email" aria-required="true" required="">
                        <input id="contact" name="contact" class="textInput digits" value="" placeholder="Phone" type="text" minlength="10" maxlength="10" required="">
                        <textarea class="form-control" rows="4" cols="50"
                        placeholder="Leave Your Comments..."></textarea>
                        <a class=" btn btn-primary btn-md" href="#">Submit</a>
                        
                     </div>
                  </form> -->
                        <div class="footer-widget">
                            <ul class="">
                                <li>
                                    <p class="m-0"><b>{{ __('Phone') }}:</b> @if(isset(Helper::getSettings()->site->contact_number)){{ Helper::getSettings()->site->contact_number[0]->number}}@endif</p>
                                </li>
                                <li>
                                    <p class="m-0"><b>{{ __('Email') }}:</b> @if(isset(Helper::getSettings()->site->contact_email)){{ Helper::getSettings()->site->contact_email}}@endif</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-xl-2 mb-20 mb-sm-0">
                        <div class="footer-widget">
                            <h5 class="mb-20 txt-green">{{ __('Get Info') }}</h5>
                            <ul class="">
                            @if(Lang::locale() == 'ar' )
                                
                            @else
                                <li><a href="@if(isset(Helper::getSettings()->site->about_us)){{ Helper::getSettings()->site->about_us}}@else#@endif">{{ __('About Us') }}</a></li>
                                <li><a href="@if(isset(Helper::getSettings()->site->help)){{ Helper::getSettings()->site->help}}@else#@endif">{{ __('Help Center') }}</a></li>
                                <li><a href="@if(isset(Helper::getSettings()->site->legal)){{ Helper::getSettings()->site->legal}}@else#@endif">{{ __('Legal') }}</a></li>

                                <!-- <li><a href="@if(isset(Helper::getSettings()->site->delivery_privacy)){{ Helper::getSettings()->site->delivery_privacy}}@else#@endif">{{ __('Delivery Privacy Policy') }}</a></li>

                                <li><a href="@if(isset(Helper::getSettings()->site->service_privacy)){{ Helper::getSettings()->site->service_privacy}}@else#@endif">{{ __('Service Privacy Policy') }}</a></li>

                                <li><a href="@if(isset(Helper::getSettings()->site->rider_privacy)){{ Helper::getSettings()->site->rider_privacy}}@else#@endif">{{ __('Rider Privacy Policy') }}</a></li> -->
                            @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-xl-2 mb-20 mb-sm-0">
                        <div class="footer-widget">
                            <h5 class="mb-20 txt-green">{{ __('Products') }}</h5>
                            <ul class="">
                            @if(Lang::locale() == 'ar' )
                                
                            @else
                               <li><a href="https://gridetech.com/pages/driver">{{ __('Ride') }}</a></li>
                               <li><a href="https://gridetech.com/pages/delivery_food">{{ __('Eat') }}</a></li>
                              <li><a href="https://gridetech.com/pages/delivery_city">{{ __('Deliver') }}</a></li>
                                <li><a href="https://gridetech.com/rental/1/cars">{{ __('Rent A Car From Gride') }}</a></li>
                             

                            @endif
                            </ul>
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class="col-sm-12 col-md-2 col-xl-2 mb-20 mb-sm-0">
                        <div class="footer-widget">
                            <h5 class="mb-20 txt-green">{{ __('Learn More') }}</h5>
                            <ul>
                            @if(Lang::locale() == 'ar' )
                                
                            @else
                                <li><a href="@if(isset(Helper::getSettings()->site->faq)){{ Helper::getSettings()->site->faq}}@else#@endif">{{ __('FAQ') }}</a></li>
                                <li><a href="{{ url('pages/how_it_works') }}">{{ __('How It Works') }}</a></li>
                                <li><a href="@if(isset(Helper::getSettings()->site->page_privacy)){{ Helper::getSettings()->site->page_privacy}}@else#@endif">{{ __('Privacy Policy') }}</a></li>
                                <li><a href="@if(isset(Helper::getSettings()->site->terms)){{ Helper::getSettings()->site->terms}}@else#@endif">{{ __('Terms & Conditions') }}</a></li>
                                <li><a href="{{ url('pages/financial') }}">{{ __('Financial') }}</a></li>
                                <li><a href="{{ url('pages/blog') }}">{{ __('Blog') }}</a></li>
                                <li><a href="{{ url('pages/safety') }}">{{ __('Safety') }}</a></li>
                            @endif
                            </ul>
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class=" col-sm-12 col-md-3 col-xl-3 mb-20 mb-sm-0">
                        <div class="footer-widget">
                            <h5 class="mb-20 txt-green">{{ __('Social Links') }}</h5>

                            <ul class="social-lists d-flex mb-0 fsocial-links">
                                <li><a target="_blank" href="@if(isset(Helper::getSettings()->site->store_facebook_link)){{ Helper::getSettings()->site->store_facebook_link}}@else # @endif"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="@if(isset(Helper::getSettings()->site->store_twitter_link)){{ Helper::getSettings()->site->store_twitter_link}}@else # @endif"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="@if(isset(Helper::getSettings()->site->store_instagram_link)){{ Helper::getSettings()->site->store_instagram_link}}@else # @endif"><i class="fa fa-instagram"></i></a></li>
                                <li><a target="_blank" href="@if(isset(Helper::getSettings()->site->store_linkedin_link)){{ Helper::getSettings()->site->store_linkedin_link}}@else # @endif"><i class="fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="@if(isset(Helper::getSettings()->site->store_youtube_link)){{ Helper::getSettings()->site->store_youtube_link}}@else # @endif"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            <!-- end of social list -->
                            &nbsp;<br>
							 <div id="google_translate_element"></div>

									<script type="text/javascript">
									function googleTranslateElementInit() {
									  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages : 'en,fr,es'}, 'google_translate_element');
									}
									</script>
									<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        </div>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <div class="bor-top py-4 col-md-12">
            <div class="container">
                <div class="row m-0">
                    <div class="col-md-12 col-sm-12 dis-center">
                        <div class="copyright_text">
                            <p class="txt-green"><!-- {{ Helper::getSettings()->site->site_copyright }} --> © 2021 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of container -->
        </div>
    </footer>
    <!--Footer Content End-->


    
<!--Modal-->
<div class="modal videoModal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-dialog" role="document" style="margin-top: 12%;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                         <iframe id="iframeYoutube" width="560" height="315"  src="https://www.youtube.com/embed/ElylhMLkYtM" frameborder="0"   allowfullscreen></iframe> 
                         <!-- Your embedded video player code -->
                        <!--  <div id="fb-root"></div>
                        <div class="fb-video"
                          data-href="https://www.facebook.com/163061689956/videos/2342452896018858"
                          data-width="auto" data-height="auto" data-allowfullscreen="true"
                          data-autoplay="true" data-show-captions="true" >
                        </div> -->
                    </div>
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/ElylhMLkYtM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>
            </div>
        </div>
</div>
<!-- End Modal-->
<!-- The Modal -->
<div class="modal"  id="myModal1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      

      <!-- Modal body -->
      <div class="modal-body">
        <iframe height="500" width="500" src="https://www.youtube.com/embed/ElylhMLkYtM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

    
    </div>
  </div>
</div>
<!-- Restaurant The Modal -->
<div class="modal" id="restaurant-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
            <div class="partner-form">
                <h4 class="text-center pb-4">Restaurant Signup</h4>

                <form class="validateResForm">
                    <h5 class="field-title"><b>Your Information</b></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">First Name<span class="text-red">*</span></label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Last Name<span class="text-red">*</span></label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="name">Phone Number<span class="text-red">*</span></label>
                                <input type="text" name="mobile" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Email Address<span class="text-red">*</span></label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="field-title"><b>Restaurant Information</b></h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">How many locations are you signing up?<span class="text-red">*</span></label>
                                <div class="col-md-12 py-2">
                                    <label class="padding-15"><input type="radio" name="location"> 1</label>
                                    <label class="padding-15"><input type="radio" name="location"> 2-9</label>
                                    <label class="padding-15"><input type="radio" name="location"> 10-24</label>
                                    <label class="padding-15"><input type="radio" name="location"> 25+</label>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Type of Cuisine<span class="text-red">*</span></label>
                                <input type="text" name="cuisine" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Restaurant name<span class="text-red">*</span></label>
                                <input type="text" name="res_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="name">Restaurant address<span class="text-red">*</span> </label>
                                <input type="text" name="res_address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Suite</label>
                                <input type="text" name="suite" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Restaurant phone number<span class="text-red">*</span></label>
                                <input type="text" name="res_mobile" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="field-title"><b>Pricing<span class="text-red">*</span></b></h5>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="name">
                                    <input type="Checkbox" name="g_deliver" value="I want Gride to deliver">I want Gride to deliver 
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    <input type="Checkbox" name="my_deliver" value="I want to deliver myself">I want to deliver myself 
                                </label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            $320 activation fee waived for a limited time!</br>
                                <small>(The activation fee, used for your menu photography and a GRIDE welcome kit.)</small><br>
                            Delivery 25%<br>
                            Pickup (fee per order) 0% (for a limited time offer)   
                        </div>
                    </div>
                    <h5 class="field-title"><b>Tax Information</b></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">Business entity/ company name<span class="text-red">*</span></label>
                                <label for="name">
                                    <input type="text" name="company_name" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="name">FEIN <small>(Federal Employer identification number)</small> <span class="text-red">*</span></label>
                                    <input type="text" name="fein" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <h5 class="field-title"><b>Payment</b></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">First Name<span class="text-red">*</span> </label>
                                <label for="name">
                                    <input type="text" name="b_fname" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Last Name <span class="text-red">*</span> </label>
                                    <input type="text" name="b_lname" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">Bank Name  <span class="text-red">*</span> </label>
                                <label for="name">
                                    <input type="text" name="bank_name" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Routing Number <span class="text-red">*</span>  </label>
                                    <input type="text" name="routing_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">ACH Number  <span class="text-red">*</span> </label>
                                <label for="name">
                                    <input type="text" name="ach_number" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Email <span class="text-red">*</span> </label>
                                    <input type="email" name="b_email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Phone <span class="text-red">*</span> </label>
                                    <input type="text" name="b_mobile" class="form-control" required>
                            </div>
                        </div>
                    <!-- Modal footer -->
                      <div class="col-md-12 pull-right">
                        <input type="submit"  class="btn btn-danger" value="Submit">
                      </div>                    
                </form>
            </div>
      </div>
    </div>
  </div>
</div>

    <script>
    
         
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

    </script>

    @include('common.settings')