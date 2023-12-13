@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<style>
  /*--thank you pop starts here--*/
.thank-you-pop{
  width:100%;
  padding:20px;
  text-align:center;
}
.thank-you-pop .fa-check-circle{
color: #f26822;
    font-size: 69px;
}

.thank-you-pop h1{
  font-size: 42px;
    margin-bottom: 25px;
  color:#5C5C5C;
}
.thank-you-pop p{
  font-size: 20px;
    margin-bottom: 27px;
  color:#5C5C5C;
}


.thank-you-pop a{
  display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
  margin-right:5px;
  color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*--thank you pop ends here--*/

.item-feature {
    background-color: black!important;
 }
 .item-feature p{
    color: #fff;
 }
 .hed_wrp{
   padding-top:50px;
 }
 .loader-container {
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: 9999;
    background: rgba(255, 255, 255, .9);
}
.lds-ripple {
      display: inline-block;
    position: absolute;
    z-index: 9999;
    /* width: 64px; */
    height: 64px;
    left: 40%;
    top: 64%;
    color: black;
    font-size: 17px;
}
.lds-ripple div {
    position: absolute;
    opacity: 1;
    border-radius: 50%;
    animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
    animation-delay: -0.5s;
}
.toaster {
    position: fixed;
    top: 10px;
    right: 10px;
    width: 300px;
    z-index: 1500;
}
</style>
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
@section('content')
<div class="loader-container">
            <div class="lds-ripple">
              Please wait .We are submitting your request
              <div></div><div></div></div>
        </div>
        <div id="toaster" class="toaster"></div>
<section id="features">
    <div class="container">
        <div class="heading dis-column ">
            <hr>
            <h1 class="text-center hed_wrp"><span class="txt-green">SignUp</span></h1>
 

			
            <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  border-radius: 28px;
}

h1 {
  text-align: center;  
}
option {
    color: #000;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
  font-family: 'Poppins';
}
#regForm {
    margin: 19px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    background: #000;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.form-group input {
    width: 100%;
    font-family: 'Poppins';
}
.step.active {
  opacity: 1;
}
p {
    color: #ffffff;
    font-size: 19px;
    line-height: 1.5;
}
button#nextBtn {
    background: #fff;
    color: #000;
    border-radius: 14px;
    font-family: 'Poppins';
}
button#prevBtn{
  background: #fff;
    color: #000;
    border-radius: 14px;
    font-family: 'Poppins';
}
h3 {
    font-size: 23px;
    padding-left: 20px;
    padding-bottom: 3px;
    color: #fff;
    text-transform: uppercase;
    font-family: 'Poppins';
    text-align: left;
}
select {
    font-size: 20px !important;
    padding: 17px 14px !important;
    margin-left: 10px;
    width: 96%;
    color:#fff;
    border: 1px solid;
    border-radius: 5px !important;
}
/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #f26822;
}


/* Hide the browser's default radio button */



</style>
<?php
$base_url = \App\Helpers\Helper::getBaseUrl();


?>
<div class="container">
    <div class="row">

        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
          
                    <div class="modal-body">
                       
            <div class="thank-you-pop">
           <i class="fa fa-check-circle"></i>
              <h1>Thank You!</h1>
              <p>Your submission is received and We will get back to you shortly</p>
              
            </div>
                         
                    </div>
          
                </div>
            </div>
        </div>
    </div>
</div>
<form id="regForm">
  {{ csrf_field() }}
  <!-- <h1 class="inform">Your Information</h1> -->
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h3>Your Information</h3>
  <div class="form-group">
            <input type="text" placeholder="First Name" name="first_name_new" required>
          </div>
        <div class="form-group">
          <input type="text" placeholder="Last Name" name="last_name_new" required>
        </div>
        <div class="form-group">
          <input type="email" name="email_new" id="email_new" placeholder="Email Address"  onkeyup="myFunctionemail()">
        </div>
        <div class="form-group">
          <input type="number" name="phone_new" placeholder="Phone No." maxlength="10"  onkeyup="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" oninput="stringLengthCheck('phone_new',10,10)">
        </div> 
  </div>
  <div class="tab"><h3>What services would you like to sign up for?</h3>
  <label class="rd">Grocery Sign Up
  <input type="radio" checked="checked" class="radio_service" name="service_radio" value="Grocery Sign Up">
  <span class="checkmark"></span></label>
<label class="rd">Restaurant Sign Up
  <input type="radio" name="service_radio" class="radio_service"  value="Restaurant Sign Up">
  <span class="checkmark"></span></label>

  <!-- <label class="rd">Others
  <input type="radio" name="service_radio" class="radio_service"  value="Others">
  <span class="checkmark"></span></label>
      <select name="service_types" id="cars">
      <option value="Tow Truck ">Tow Truck </option>
      <option value="Movers">Movers</option>
      <option value="Electrician">Electrician</option>
      <option value="Doctor">Doctor</option>
      <option value="Plumber">Plumber</option>
      <option value="Beauty Services">Beauty Services </option>
      <option value="Dog Walking">Dog Walking</option>
      <option value="House Cleaning">House Cleaning</option>
      <option value="Carpenter">Carpenter </option>
      <option value="Tutor"> Tutor </option>
      <option value="Massage"> Massage </option>
      <option value="DJ">DJ</option>
      <option value="Baby Sitting">Baby Sitting</option>
      </select>
  -->
  </div>
  <div class="tab">
        <!-- <label for="size"><h3>Size:</h3></label>
        <select name="size" id="size" required="">
        <option value="basic">Basic</option>
        <option value="ultra">Ultra</option>
        <option value="premium">Premium</option>
        </select> -->
  <h3 id="restro_heading">GROCERY Information</h3>
  <div class="row">
    
  <select name="size" id="size" required="">
        <option value="basic">Basic</option>
        <option value="ultra">Ultra</option>
        </select>
  <div class="col-md-4">
  
<label class="rd">2-9
  <input type="radio" name="restro_radio"  checked="checked" value="2-9">
  <span class="checkmark"></span>
</label>
        </div>
        <div class="col-md-4">
        <label class="rd">10-24
  <input type="radio" name="restro_radio" value="10-14">
  <span class="checkmark"></span>
</label>

        </div>
           <div class="col-md-4">
        <label class="rd">24+
  <input type="radio" name="restro_radio" value="24+">
  <span class="checkmark"></span>
</label>

        </div>
  </div>
    <div class="row">
       <div class="col-md-12">
       </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Grocery Name" id="restro_name" name="restro_name">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Grocery Address" id="restro_address" name="restro_address">
            <!-- <input type="text"  id="origin-input" name="s_address" class="form-control pac-target-input" type="text"autocomplete="off" placeholder="Grocery Address">
            <input type="hidden" name="s_latitude" id="origin_latitude" />
            <input type="hidden" name="s_longitude" id="origin_longitude" />
                                    <input type="hidden" name="d_latitude" id="destination_latitude" />
            <input type="hidden" name="d_longitude" id="destination_longitude" />
                                    <input type="hidden" name="current_longitude" id="long" />
            <input type="hidden" name="current_latitude" id="lat" />
            <div id="map" class="col-sm-12 col-md-12 col-lg-7 map-section" style="width:100%; height: 500px; margin-left:15px; box-shadow: 2px 2px 10px #ccc;display: none;">
            </div> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="number" placeholder="Grocery Phone" id="restro_phone" name="restro_phone"  maxlength="10"  onkeyup="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" oninput="stringLengthCheck('restro_phone',10,10)">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Company Name" id="restro_company_name" name="restro_company_name">
          </div>
        </div>
      </div>
      <label for="cars"><h3>Choose One:</h3></label>
      <select name="cars_type" id="cars" required="">
      <option value="I want Gride to deliver">I want Gride to deliver </option>
      <option value="I want to deliver myself "> I want to deliver myself </option>
  
      </select>
    <h3>Tax Information</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" placeholder="Company  Name" name="tax_company_name">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="number" placeholder="EIN" name="tax_FEIN"  maxlength="9"  onkeyup="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" oninput="stringLengthCheck('tax_FEIN',9,9)">
        </div>
      </div>
    </div>
  </div>
  <div class="tab"><h3>Payment</h3>
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="First Name" name="payment_firstname">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Last Name" name="payment_lastname">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" placeholder="Bank Name" name="payment_bankname">
          </div>
        </div>
            <div class="col-md-6">
          <div class="form-group">
            <input type="number" placeholder="Account Number" name="acc_number">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="number" placeholder="Routing Number" name="payment_ach_number">
          </div>
        </div>
      
<label class="rd">I agree to the <a href="{{url('/pages/terms')}}">Terms and Conditions</a> & <a href="{{url('/pages/page_privacy')}}">Privacy Policy</a>
  <input type="checkbox" id="terms"   required="">
  <span class="checkmark" style="border-radius: inherit;"></span></label>
      </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script type="text/javascript" src="{{asset('/assets/layout/js/map.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2AWl-ag4AHap1LUBqgM1FvNUkbdZRQ6M&libraries=places&callback=initMap" async defer></script>
<script>
  function myFunctionemail(){
    var email_new=$('#email_new').val();
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(email_new) == false) 
        {
         $('#email_new').addClass('invalid');
         $('#nextBtn').prop('disabled', true);
        }else{
          $('#email_new').removeClass('invalid')
          $('#nextBtn').prop('disabled',false);

        }
   }

function stringLengthCheck(name, minlength, maxlength)
{
      var mnlen = minlength;
      var mxlen = maxlength;
        
      var char = $("input[name="+name+"]").val();
      var charLength = $("input[name="+name+"]").val().length;
      if(charLength < minlength){
      $("input[name="+name+"]").addClass('invalid');
      }else if(charLength > maxlength){
      $("input[name="+name+"]").addClass('invalid');
      }else{
      $("input[name="+name+"]").removeClass('invalid')
      }
}
 </script>
<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {

  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  console.log(n);

  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
      var radioValue = $("input[name='service_radio']:checked").val();
   if(currentTab==2 && radioValue=="Others"){
    window.location.href = "{{url('/pages/coming_soon')}}";
   }

   if($("#terms").prop('checked') == false && currentTab==3){
    $( "#nextBtn" ).prop( "disabled", true );
   }

  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:

  
  setBaseUrl('{{$base_url}}');


      $.ajax({
       url:  "https://api.gridetech.com/api/v1/restaurantsignup",
       type: "post",
       data: $('#regForm').serialize(),
       headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
       },
       beforeSend: function() {
          
        $('.loader-container').show();
       },

       success: function(response, textStatus, jqXHR) {
        console.log("success");
             $('.loader-container').hide();
             $('#ignismyModal').modal('show');

             // $('#regForm').html('<h3 style="color:white;">Thank you for Signup . We will get back to you shortly</h3>');
         // window.location.replace("{{ url('/mail/success') }}");
       },
       error: function(jqXHR, textStatus, errorThrown) {
                     $('.loader-container').hide();
             $('#regForm').html('<h3 style="color:red;">Something went wrong please try again</h3>');
        console.log(errorThrown);
          //alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
       }
    });

    return false;
    // document.getElementById("regForm").submit();
    // return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  } 
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
  $(function(){
    $('#terms').click(function() {
        if($(this).is(':checked')){
        $('#nextBtn').removeAttr("disabled");
        }else{
        $( "#nextBtn" ).prop( "disabled", true );
        }
    });
    
});

 $(document).ready(function(){

   if($("#terms").prop('checked')==true){
       $('#nextBtn').removeAttr("disabled")

   }

 $(".radio_service").click(function(){
    var radioValue = $("input[name='service_radio']:checked").val();
    if(radioValue=='Grocery Sign Up'){
      $('#restro_name').attr("placeholder", "Grocery Name");
      $('#restro_phone').attr("placeholder", "Grocery Phone");
      $('#restro_address').attr("placeholder", "Grocery Address");
      $('#restro_heading').text("GROCERY INFORMATION");
    }
     if(radioValue=='Restaurant Sign Up'){
       $('#restro_name').attr("placeholder", "Restaurant Name");
      $('#restro_phone').attr("placeholder", "Restaurant Phone");
       $('#restro_address').attr("placeholder", "Restaurant Address");
        $('#restro_heading').text("RESTAURANT INFORMATION");
    }
     if(radioValue=='Others'){
       $('#restro_name').attr("placeholder", "Others Name");
      $('#restro_phone').attr("placeholder", "Others Phone");
       $('#restro_address').attr("placeholder", "Others Address");
        $('#restro_heading').text("OTHERS INFORMATION");
    }
  });
  });

</script>
			<!-- Code added by hk -->
	    </div>
	</div>
</section>
<style>
.rd {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color: #fff;
    font-family: 'Poppins';
    margin-top: 20px;
}

/* Hide the browser's default radio button */
.rd input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 5px;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}
.checkmark2 {
  position: absolute;
  top: 5px;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}
/* On mouse-over, add a grey background color */
.rd:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.rd input:checked ~ .checkmark {
  background-color:#f26822;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.rd input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.rd .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>

@stop
