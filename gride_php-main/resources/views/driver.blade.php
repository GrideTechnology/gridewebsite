@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<style>
    header h2{
    font-weight: 400;
    font-size: 60px;
    line-height: 1.5;
    color: white !important;
    letter-spacing: 0;
    margin-top: 130px!important;
    margin-bottom: 20px;
}
header p{
    color: white !important;
    font-size: 20px;
    margin-bottom: 25px !important;
}
h4{
    font-size: 35px !important;
    font-weight: 400 !important;
    text-align: center;
    margin-bottom: 35px !important;
}
header{
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
    url("https://gridetech.com/assets/layout/images/driver2.png");
    background-repeat: no-repeat;
  background-size: cover;
  color: white;
  text-align: center;
  padding: 200px 0;
}

.driver-signup{
    padding: 10px 20px;
    border-radius: 4px;
    background:#f26822;
    color:white;
    border: solid 1px black;
    font-size: 16px; 
    cursor: pointer;
}
.driver-signup:hover{
    border: solid 1px #f26822;
    background:white;
    color:#f26822;
}
    header .menu-item {
    padding: 0px 12px;
}
 .section1{
    padding: 50px 0 !important;
}
.section1 h1{
    text-align: center;
}
.grid{
    display: grid;
}
.grid h1{
  margin-bottom: 30px;
  font-size: 40px;
}
.est-earning{
  background: rgba(234, 223, 223, 0.358);
  grid-template-columns: 1fr 1fr;
}
.est-earning h1{
  margin: 40px;
  margin-bottom: 0px;
}
.est-earning h3{
  margin: 40px;
 margin-top:0px;
 font-size: 25px;
}
.est-earning .grid{
  grid-template-columns: 1fr 1fr;
}
.col3{
  grid-template-columns: 1fr 1fr 1fr;
  padding: 40px 0;
  margin: 1px 100px;
}
.col3 h3{
  text-align: center;
  gap: 40px;
  padding-bottom: 10px;
  font-size: 25px;
}
.col3 p{
  margin: 1px 20px;
}
.col3 a{
  margin: 1px 20px;
  text-decoration: underline;
  color: rgba(0, 0, 0, 0.727);
}
.col3 a:hover{
  margin: 1px 20px;
  text-decoration: underline;
  color: rgb(0, 0, 0);
}
.col2{
  grid-template-columns: 1fr 1fr;
padding-top: 50px;
padding-bottom: 50px;

}
.requirements {
margin-right: 100px !important;
}
.col2 h1{
  margin-right: 0 !important;
  text-align: end;
  padding-right: 150px;
  margin-left: 200px;
}
.col2 ul{
  margin-bottom: 5px;
 
}
.requirements p{
  margin-left: 10px;
}
.col2 li{
  font-size: 20px;
}
.col2 a{
  
  text-decoration: underline;
  color: rgba(0, 0, 0, 0.727);
}
.col2 a:hover{
  
  text-decoration: underline;
  color: rgb(0, 0, 0);
}
.section3{
  background: rgba(234, 223, 223, 0.358);
}
.section3 h1{
  text-align: center;
  padding-top: 50px;
}
.colm-2{
  margin: 1px 40px;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  padding-bottom: 40px;

}
.colm-2 img{
  transform: scaleX(-1);
  display: block;
  margin: 0 auto;
}
.section3-wrapper{
  margin-left: 200px;
}
.section3-wrapper li{
  font-size: 20px;
}
input{
  padding: 18px 0!important;
}
input[type=range] {
  -webkit-appearance: none;
  margin: 20px 0;
  width: 100%;
 
}
input[type=range]:focus {
  outline: none;
   
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 4px;
  cursor: pointer;

  
  background: #f26822;
  border-radius: 25px;
}
input[type=range]::-webkit-slider-thumb {
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 0 4px 0 rgba(0,0,0, 1);
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -8px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #f26822;
  
}
.range-wrap{
  width: 500px;
  position: relative;
  margin-top: 50px;
  
}
.range-value{
  position: absolute;
  top: -15%;
}
.range-value span{
  width: 45px;
  height: 28px;
  line-height: 28px;
  text-align: center;
  background: #f26822;
  color: #fff;
  font-size: 25px;
  display: block;
  position: absolute;
  left: 50%;
  transform: translate(-50%, 0);
  border-radius: 6px;
}
.range-value span:before{
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 10px solid #f26822;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  margin-top: -1px;
}
.rent-car{
  font-size: 20px !important;
}
@media (max-width: 799px) {
  .col3 {
    grid-template-columns: 1fr 1fr 1fr;
    padding: 5px 0;
    margin: 1px 10px;
}
.col2 {
    grid-template-columns:  1fr;
    
    padding: 30px 10px;
}
.col2 h1 {
    margin-right: 0 !important;
   text-align: center;
   padding-right: 0px;
    margin-left: 0px;
}
.colm-2 {
    margin: 5px;
    grid-template-columns: 1fr;
    gap: 40px;
    padding-bottom: 40px;
    text-align: center;
}
.section3-wrapper {
    margin-left: 5px;
}
}
@media (min-width: 320px) and (max-width: 767px){
.col3 {
    grid-template-columns: 1fr;
    padding: 5px 0;
    margin: 1px 10px;
}
.est-earning .grid {
    grid-template-columns:  1fr;
}
.range-wrap {
    width: 100%;
}
.col2 {
   text-align: center;
}
.requirements {
    margin-right: 0px !important;
}
}
@media (max-width: 991px){
	.range-wrap {
	    max-width: 90%;
	    margin: auto;
	}
	header {
	    padding-left: 15px;
	    padding-right: 15px;
	}
	.col2 h1 {
	    margin-right: 0 !important;
	    text-align: start;
	    padding-right: 80px;
	    margin-left: 70px;
	}
}
@media (max-width: 799px){
	.col2 h1 {
	    margin-right: 0 !important;
	    text-align: center;
	    padding-right: 0px;
	    margin-left: 0px;
	}
	header{
		padding: 70px 0;
	}
	.colm-2 {
	    padding-left: 15px;
	    padding-right: 15px;
	}
	header h2 {
    	font-size: 40px;
    	line-height: 1.3;
    }
}
.col3 h3 {
    margin: 20px 20px 2px;
    text-align: left;
    }
    @media (max-width: 767px){
  header h2 {
    margin-top: 70px!important;
    margin-bottom: 5px;
    font-size: 38px;
  }
  header {
      padding: 40px 0;
      background-position: center;
  }
  header p {
      font-size: 18px;
  }
}
</style>
@stop
@section('content')
   <header>
    <div>                         
    <h2><b>Drive with Gride</b></h2>
    <p>Our top priority is the safety of our riders and drivers. we will make sure the ride is safe, reliable, and comfortable.
    </p>
    <button class="driver-signup">Sign up as a driver</button>
</div> 
       
 </header>

 <section class="section1">
    <div class="grid" >
    <h1>Why drive for us?</h1>
    </div>
    <div class="grid col3">
      <div>
        <h3>
          Flexible hours
        </h3>
        <p>
          With Gride, you can set your own hours and decide when and how often you drive.
        </p>
       
      </div>
      <div>
        <h3>
          Keep all tips
        </h3>
        <p>Gride allows drivers to keep 100% of tips, with zero service fees applied! </p>
     
      </div>
     
      <div>
        <h3>
          Fast support
        </h3>
        <p>With fast and reliable support, drivers can reach us anytime for background checks,how to get paid and much more.</p>
      </div>
    </div>
 </section>


 <section class="est-earning">
  <div class="grid">
    <div>
    <h1>Estimate earnings</h1> 
    <h3 id="earnings">$<span id="rangeAmount"></span> / week</h3> <!--Change estimate earnings when slider number shanges -->
  </div>


  
  
  <div class="range-wrap">
    
    <div class="range-value" id="rangeV"></div>
    <input id="range" type="range" min="10" max="50" value="30" step="5">
    <small>Hours Worked</small>
  </div>


  </div>


</section>


 <section class="section2" id="whatdoineed">
  <div class="grid col2" >

    <div>
  <h1>What do I need?</h1>
</div>

<div class="requirements">
  <ul>
    <li>
        <b>Requirements</b>
    </li>
          </ul>
          <p>
            Driver must be 21 or older <br>
            Drivers vehicle may be no more than 16 years old, or they may rent a vehicle from Gride <br>
            Drivers must use an eligible 4-door vehicle<br>

          </p>
    
          <ul>
            <li>
                <b>Documents</b>
            </li>
                  </ul>
                  <p>
                    Driver must have a valid in-state driver's license and have experince driving for 2 years<br>
                      Proof of vehicle insurance if you driver plans to drive their own car<br>
                      Driver will need to provide proof of residency<br>
                      Driver must provide a forward-facing, centered photo that includes their full face and top of shoulders, with no sunglasses

                  </p>
    
                  <ul>
                    <li>
                        <b>Signing up</b>
                    </li>
                          </ul>
                          <p>
                            Drivers must go through an online background check
                          </p>
                          <a href="#whatdoineed" class="rent-car">Rent a car from Gride</a> <!--Link to rental page-->
                        </div>
</div>
</section>

 @foreach(Helper::getcmspage() as $k=>$v)
    @if($v->page_name == 'driver')
        @php echo $v->content; @endphp
    @endif
@endforeach


<script>
var amt={'10':'250', '15':'340', '20':'460', '25':'580', '30':'710', '35':'840', '40':'960', '45':'1100', '50':'1230'};
const
  range = document.getElementById('range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    key=range.value;
    document.getElementById('rangeAmount').innerHTML=amt[key];
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
    
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
</script>
@stop



