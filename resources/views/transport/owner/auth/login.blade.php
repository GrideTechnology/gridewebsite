@extends('common.user.layout.auth')
@section('styles')
<style>
   .showhide{
      position: absolute;
      right: 30px;
      padding-top: 12px;
   }
   .showhide2, .showhide3{
      right: 20px;
      padding-top: 45px;
   }
   .password-box{
      position:relative;
      display:flex;
      flex-wrap: wrap;
   }
   .password-box .mt-4 {
       margin-top: 0 !important;
   }
   .account_kit{
      width:100%;
   }
   .dis-column{
      align-items: start!important;
   }
   #signup-confirm{display:none; margin-top: 20px;}
</style>
@parent
@stop
@section('content')
@include('common.alert')
<section id="login-form" class="">
   <div class="login-bg ">
   <div class="login-content">
      <div class="logo-section dis-center">
         <a href="{{URL::to('')}}">
            <img src="{{ Helper::getSiteLogo() }}" class="" width="100" alt="logo">
         </a>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 dis-row">
         <ul class="nav nav-tabs b-0 dis-row">
            <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#login">@lang('auth.login')</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#sign-up">@lang('auth.signup')</a>
            </li>
         </ul>
      </div>
      <div class="tab-content">
         <div id="login" class="tab-pane active col-sm-12 col-md-12 col-lg-12">
            <div class="dis-center">
               <!-- <div class="h-100 col-sm-12 col-md-12 col-lg-7 dis-column d-lg-none d-md-block d-sm-block">
                  <img src="{{ asset('assets/layout/images/common/login.png') }}" class="w-50">
               </div> -->
               <!-- <div class="offset-md-7 d-lg-block d-md-none d-sm-none"></div> -->
               <form class="h-100 col-sm-12 col-md-12 col-lg-12 col-xl-12 dis-column validateForm">
                     <div id="toaster" class="toaster"></div>
                     <h6 class="txt-primary text-center" style="align-items: center;width: 100%;"><strong>@lang('auth.login-with')</strong></h6>
                     <div class="choose-mode mb-3 col-sm-12 col-md-12 col-lg-12">
                              <span class="radio-box"><input type="radio" checked="checked" name="filter" value="phone" id="filt1-4"><label for="filt1-4">@lang('auth.phone_number')</label></span>
                              <span class="radio-box"><input type="radio" name="filter" value="email" id="filt1-5"><label for="filt1-5">@lang('auth.email')</label></span>
                        </div>
                     <input id="email" name="email" class="form-control required email mb-4" style="display:none" placeholder="@lang('auth.email')" type="email" aria-required="true">
                     <input id="phone" name="phone" maxlength="15" class="intl-tel-input form-control mb-4" placeholder="@lang('auth.phone_number')"  type="text" >
                     <input id="password" name="password" class="form-control mb-4" value="" placeholder="@lang('auth.password')" type="password"><span class="showhide1 showhide" onclick="showHidePassword('password', '1')"><i class="fa fa-eye"></i></span>
                     <button type="submit" class="btn btn-primary btn-md mb-4">@lang('auth.login')<i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></button>
                     <a href="{{url('owner/forgot-password')}}" class="forgot-link">@lang('auth.forgot_password')</a>

                     @if( Helper::getSettings()->site->social_login == 1)
                     <div class="or-section mt-2 mb-3">
                        <hr>
                        <span>OR</span>
                        <hr>
                     </div>
                     <div class="social-login">
                           <span class="fb-bg" onclick="fbLogin()"><i class="fa fa-facebook-square "></i></span>
                           <span id="glogin" class="google_login google-bg "><i class="fa fa-google-plus-square "></i></span>
                     </div>
                     @endif
                     <div class="copyrights">
                        <p>{!! Helper::getSettings()->site->site_copyright !!}</p>
                     </div>
                     
               </form>
            </div>
         </div>
         <div id="sign-up" class="tab-pane fade col-sm-12 col-md-12 col-lg-12">


         

            <div class="dis-center">
               <!-- <div class="h-100 col-sm-12 col-md-12 col-lg-7 dis-column d-lg-none d-md-block d-sm-block">
                  <img src="{{ asset('assets/layout/images/common/sign-up.png') }}" class="w-50">
               </div>
               <div class="offset-md-7 d-lg-block d-md-none d-sm-none"></div> -->
               <form class=" h-100 col-sm-12 col-md-12 col-lg-12 col-xl-12 dis-column validateSignForm">
                     
                     <div id="toaster" class="toaster"></div>
                     <label>Phone Number</label>
                     <input name="phone" maxlength="15" class="intl-tel-input form-control mb-4" placeholder="Phone Number"  type="text" >
                     @if(Helper::getSettings()->site->send_sms == 1)
                     <input id="otp" name="otp" maxlength="4" style="display: none" class=" form-control mb-4" placeholder="@lang('auth.otp')" type="text" >
                     @endif
                     <div class="account_kit" @if(Helper::getSettings()->site->send_sms == 1) style="display:none" @endif >
                        <label>Email</label>
                     <input id="email" name="email" class="form-control mb-4" placeholder="@lang('auth.email')" type="email" aria-required="true" required>
                     <!-- <div class="col-sm-12 col-md-12 col-lg-12 p-0 d-flex">
                        <div class="col-sm-12 p-0 mr-1">
                           <input id="name" name="name" class="form-control mb-4" value="" placeholder="Name" type="text" required>
                        </div>
                     </div> -->
                     <div class="col-sm-12 col-md-12 col-lg-12 p-0 d-flex">
                        <div class="col-sm-12 p-0 mr-1">
                           <label>First Name</label>
                           <input id="first_name" name="first_name" class="form-control mb-4" value="" placeholder="First Name" type="text" required>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-12 p-0 d-flex">
                        <div class="col-sm-12 p-0 mr-1">
                           <label>Last Name</label>
                           <input id="last_name" name="last_name" class="form-control mb-4" value="" placeholder="Last Name" type="text" required>
                        </div>
                     </div>
                    <!--  w-100 -->
                    <label>Gender</label>
                     <select name="gender" class="form-control mb-4">
                        <option value="">@lang('auth.select_gender')</option>
                        <option value="MALE">@lang('auth.MALE')</option>
                        <option value="FEMALE">@lang('auth.FEMALE')</option>
                        <option value="GENERAL">@lang('auth.GENERAL')</option>
                     </select>
                     <div class="password-box">
                        <label>Password</label>
                     <input id="signin_password" name="password" class="form-control mb-4" value="" placeholder="@lang('auth.password')" type="password" required><span class="showhide2 showhide" onclick="showHidePassword('signin_password', '2')"><i class="fa fa-eye"></i></span>
                     </div>
                     <div class="password-box">
                        <label>Confirm Password</label>
                     <input id="password_confirmation" name="password_confirmation" class="form-control mb-4" value="" placeholder="@lang('auth.confirm_password')" type="password" required><span class="showhide3 showhide" onclick="showHidePassword('password_confirmation', '3')"><i class="fa fa-eye"></i></span>
                     </div>
                     <label>Profile Picture</label>
                     <input id="picture" name="picture" class="form-control " placeholder="Picture" type="file" >
                     
                     </div>
                     @if(Helper::getSettings()->site->send_sms == 1)
                     <a class="btn btn-block btn-secondary btn-md mt-2 verify_btn">@lang('auth.verify')<i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a>
                     <a class="btn btn-block btn-primary btn-md mb-2 check_otp"  style="display: none !important" >@lang('auth.submit')<i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a>
                     @endif
                     <div class="alert alert-success" id="signup-confirm"></div>
                     <button type="submit" class="btn btn-block btn-secondary btn-md mt-2 signup account_kit" @if(Helper::getSettings()->site->send_sms == 1) style="display:none !important" @endif >@lang('auth.signup')<i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></button>

                     

                     @if(Helper::getSettings()->site->social_login == 1)
                        <div class="or-section mt-2 mb-3">
                        <hr>
                        <span>@lang('auth.or')</span>
                        <hr>
                     </div>
                     <div class="social-login">
                           <span class="fb-bg" onclick="fbLogin()"><i class="fa fa-facebook-square "></i></span>
                           <span id="glogin1" class="google_login google-bg "><i class="fa fa-google-plus-square "></i></span>
                     </div>

                    
                     @endif

                     <div class="copyrights">
                        <p>{!! Helper::getSettings()->site->site_copyright !!}</p>
                     </div>
               </form>
            </div>
         </div>
         <div id="social-login" class="tab-pane fade col-sm-12 col-md-12 col-lg-12">
            <div class="dis-reverse">
             <!--   <div class="h-100 col-sm-12 col-md-12 col-lg-7 dis-column d-lg-none d-md-block d-sm-block">
                  <img src="{{ asset('assets/layout/images/common/sign-up.png') }}" class="w-50">
               </div>
               <div class="offset-md-7 d-lg-block d-md-none d-sm-none"></div> -->
               <form class="signin-section h-100 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <input name="mobile" maxlength="15" autocomplete="off" class="intl-tel phone form-control mb-4 d-none" placeholder="Phone Number"  value="" type="text" >
                     <input name="email" autocomplete="off" class="form-control mb-4 d-none" placeholder="E-mail Address"  value="" type="email" aria-required="true">
                     <select name="gender" class="w-100 mb-3 d-none" autocomplete="off">
                        <option value="">@lang('auth.select_gender')</option>
                        <option value="MALE">@lang('auth.MALE')</option>
                        <option value="FEMALE">@lang('auth.FEMALE')</option>
                        <option value="GENERAL">@lang('auth.GENERAL')</option>
                     </select>
                     <select name="country_id" autocomplete="off" class=" mb-4 form-control d-none">
                        <option value="">@lang('auth.select_country')</option>
                     </select>
                     <select name="city_id" autocomplete="off" class=" mb-4 form-control d-none">
                        <option value="">@lang('auth.select_city')</option>
                     </select>
                     <a class="btn btn-block btn-secondary btn-md mb-2 social_login">@lang('auth.signup')<i class="fa fa-arrow-circle-right ml-2" aria-hidden="true"></i></a>
               </form>
            </div>
         </div>
      </div>
</div>
      <div class="wave">
            <div class="wave-green"></div>
            <div class="wave-blue"></div>
         </div>

   </div>
</section>
@stop
@section('scripts')
@parent
<script src="https://apis.google.com/js/api:client.js"></script>


<script>

   

      // phone form submission handler
      // $('.verify_btn').on('click', function() {
      
      //    var countryCode = $('#sign-up .phone').intlTelInput('getSelectedCountryData').dialCode;
      //    var phoneNumber = $('#sign-up input[name=mobile]').val();

      //    if(phoneNumber != "") {
      //       $.post( getBaseUrl() + "/user/send-otp",{ 
      //          country_code : countryCode, 
      //          mobile : phoneNumber,
      //          salt_key: '{{Helper::getSaltKey()}}'
      //       })
      //       .done(function(response){ 
      //          $('.verify_btn').attr("style", "display: none !important");
      //          $('.intl-tel-input').hide();
      //          $('#sign-up input[name=otp]').show();
      //          $('.check_otp').show();
      //       })
      //       .fail(function(xhr, status, error) {
      //          $('.verify_btn').attr("style", "display: block !important");
      //          $('.intl-tel-input').show();
      //          $('#sign-up input[name=otp]').hide();
      //          $('.check_otp').hide();
      //          alertMessage('Error', xhr.responseJSON.message, "danger");
      //       });
      //    }
      // });

      // $('.check_otp').on('click', function() {
         
      //    var countryCode = $('#sign-up .phone').intlTelInput('getSelectedCountryData').dialCode;
      //    var phoneNumber = $('#sign-up input[name=mobile]').val();
      //    var otp = $('#sign-up input[name=otp]').val();

      //    if(phoneNumber != "") {
      //       $.post(getBaseUrl() + "/user/verify-otp",{ 
      //          country_code : countryCode, 
      //          mobile : phoneNumber,
      //          otp : otp,
      //          salt_key: '{{Helper::getSaltKey()}}'
      //       })
      //       .done(function(response){ 
      //          $('.intl-tel-input').show();
      //          $('#sign-up input[name=mobile]').attr('readonly',true);
      //          $('.account_kit').fadeIn(400);
      //          $('#sign-up input[name=otp]').hide();
      //          $('.verify_btn, .check_otp').remove();
      //       })
      //       .fail(function(xhr, status, error) {
      //          alertMessage('Error', xhr.responseJSON.message, "danger");
      //          /* $('.verify_btn').attr("style", "display: block !important");
      //          $('.intl-tel-input').show();
      //          $('#sign-up input[name=otp]').hide();
      //          $('.check_otp').hide(); */
      //       });
      //    }
      // });


function showHidePassword(fieldid, id) {
  var x = document.getElementById(fieldid);
  if (x.type === "password") {
    x.type = "text";
    $('.showhide'+id+' i').attr('class', 'fa fa-eye-slash');
  } else {
    x.type = "password";
    $('.showhide'+id+' i').attr('class', 'fa fa-eye');
  }
}

// function showHidePassword1() {
//   var x = document.getElementById("password_confirmation");
//   if (x.type === "password") {
//     x.type = "text";
//     $('.showhide1 i').attr('class', 'fa fa-eye-slash');
//   } else {
//     x.type = "password";
//     $('.showhide1 i').attr('class', 'fa fa-eye');
//   }
// }

$(document).ready(function() {

if(getToken('owner')!=null){
   window.location.href='https://gridetech.com/owner/dashboard';
}
   var base_url_data = JSON.parse(decodeHTMLEntities('{{$base}}'));

   for(var i in Object.keys(base_url_data)) {
      var key = String(Object.keys(base_url_data)[i]);
      var value = String(Object.values(base_url_data)[i]);
      localStorage.setItem(key, value);
   }

   setBaseUrl('{{$base_url}}');
   setUrl('{{ url('/') }}');

  

   $('.validateForm').validate({
      errorElement: 'span', //default input error message container
      errorClass: 'help-block', // default input error message class
      focusInvalid: false, // do not focus the last invalid input
      rules: {
            mobile: { required: true },
            email: { required: true, email: true },
            password: { required: true },
      },

      messages: {
            mobile: { required: "{{__('auth.mobile_required')}}" },
            email: { required: "{{__('auth.email_required')}}" },
            password: { required: "{{__('auth.password_required')}}" },
      },

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

            if($('.phone').is(':visible')) {
               //data.append( 'country_code', $('#login .phone').intlTelInput('getSelectedCountryData').dialCode );
            }

            data.append( 'salt_key', '{{Helper::getSaltKey()}}'); 

            $.ajax({
               url: getBaseUrl() + "/user/owner",
               type: "post",
               data: data,
               processData: false,
               contentType: false,
               beforeSend: function() {
                  showLoader();
               },
               success: function(response, textStatus, jqXHR) {
                  var data = parseData(response);
                  setToken("owner", data.responseData.access_token);
                  setUserDetails(data.responseData.user);
                  document.cookie="user_language="+data.responseData.user.language+"; path=/";
                  window.location.replace("{{ url('/owner/dashboard') }}");
                  hideLoader();
               },
               error: function(jqXHR, textStatus, errorThrown) {
                  alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
                  hideLoader();
               }
            });

      }
   });

   var number;

   $(".phone").intlTelInput({
      initialCountry: "<?php echo isset(Helper::getSettings()->site->country_code)?Helper::getSettings()->site->country_code :'us'; ?>",
    });

   $('input[name=filter]').on('change', function() {
      var value = $(this).val();
      $("#login #email, #login .intl-tel-input").hide();
      if(value == "email") {
         $("#login #email").show();
      } else {
         $("#login .intl-tel-input").show();
      }
   });

   $('.validateSignForm').validate({
      errorElement: 'span', //default input error message container
      errorClass: 'help-block', // default input error message class
      focusInvalid: false, // do not focus the last invalid input
      rules: {
            name: { required: true },
            phone: { required: true },
            email: { required: true, email: true },
            gender: { required: true },
            password: { required: true },
            password_confirmation: {
               equalTo: "#signin_password"
            },
      },

      messages: {
            name: { required: "{{__('auth.name_required')}}" },
            phone: { required: "{{__('auth.mobile_required')}}" },
            email: { required: "{{__('auth.email_required')}}" },
            password: { required: "{{__('auth.password_required')}}" },
            gender: { required: "{{__('auth.gender')}}" },
      },

      highlight: function(element)
      {
         $(element).closest('.form-group').addClass('has-error');
         $(element).removeClass('mb-4').addClass('mb-0').addClass('mt-4');;
      },

      success: function(label) {
         label.closest('.form-group').removeClass('has-error');
         label.remove();
      },

      submitHandler: function(form) {

         var SignupFormGroup = $(".validateSignForm").serialize().split("&");

         var SignupData = new FormData();

         for(var i in SignupFormGroup) {
            var SignupParams = SignupFormGroup[i].split("=");
            SignupData.append( SignupParams[0], decodeURIComponent( SignupParams[1]) );
         }
         SignupData.append( 'salt_key', '{{Helper::getSaltKey()}}');

         if(($('input[name=picture][type=file]')[0].files).length > 0) {
            SignupData.append('picture', $('input[name=picture][type=file]')[0].files[0]); 
         }

         $.ajax({
            url: getBaseUrl() + "/user/owner/signup",
            type: "post",
            data: SignupData,
            processData: false,
            contentType: false,
            beforeSend: function() {
               showLoader();
            },
            success: function(response, textStatus, jqXHR) {
               var data = parseData(response);
               setToken("owner", data.responseData.access_token);
               setUserDetails(data.responseData.user);
               document.cookie="user_language="+data.responseData.user.language+"; path=/";
               hideLoader();
               $('#signup-confirm').text('You have registered successfull. Redirecting you to dashboard.');
               $('#signup-confirm').show();
               setTimeout(function(){
                  window.location.replace("{{ url('/owner/dashboard') }}");
               }, 4000);
               
               
            },
            error: function(jqXHR, textStatus, errorThrown) {
               hideLoader();
               alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
            }
         });

      }
   });

});
</script>

@stop
