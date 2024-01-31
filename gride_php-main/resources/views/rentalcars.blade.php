@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
  .dash-section {
    padding: 70px 60px;
    
}

div#map, div#map div {
    height: 100%;
}
div#map div iframe ~ div {
    display: none;
}

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #f26822;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #575962;;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #f26822;
  background: #f26822;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
.main-title p{
    color:#575962 !important;
    font-weight: 400 !important;
}
.main-title h2{
    color: #575962 !important;
}
/*Resize the wrap to see the search bar change!*/
.wrap{
   
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
}
.wrap h1{
    padding-bottom: 30px;
}
.section-header{
    padding: 90px 150px;
    text-align: center;
    background: rgba(234, 223, 223, 0.358);
}
.section-header h2{
    padding-bottom: 50px;
}
.section-header p{
    padding: 30px 20px 0 20px;
    color: #575962 !important;
    font-weight: 400 !important;
}

.section-header .colmn3{
     display: grid !important;
    grid-template-columns: 1fr 1fr 1fr !important;
}
.colmn3 img{
  width: 300px;
}
.location h1{
    padding-bottom: 50px;
}
.location label{
    font-size: 22px;
  
}
.location select{
    font-size: 16px;
}
.location select{
    color: #fffcfc !important;
    background: #0000005c;
}
.submit-btn{
    background-color: #f26822;
    font-size: 16px;
    color: white;
    cursor: pointer;
    border: solid 1px white;
    padding: 10px 20px !important;
    margin-bottom: 30px;
}
.submit-btn:hover{
    background-color: white;
    color: #f26822;
    border: solid 1px #f26822;
    cursor: pointer;
    
}
</style>
      <style>
    header .menu-item {
    padding: 0px 12px;
}
.dash-banner{
  background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
    url("../../assets/layout/images/rental2.jpg");
    background-repeat: no-repeat;
  background-size: cover;
  color: white !important;
  text-align: center;
  padding: 50px 0;
}
.dash-banner h1{
  color: white;
}
h4{
  padding-bottom: 10px;
}
.m-0{
  color: #f26822 !important;
}
.location .main-text{

  background-color: #0000005c;
  border: 1px solid white;
  padding: 5px !important;
  margin-bottom: 10px;
}
.location .main-text::placeholder{ 
  color: #fff;
}
.location input{
  color: white;
  width: 100%;
}

.car-grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
}
.car-grid div{
    border: 1px solid rgba(77, 75, 75, 0.75);
    margin: 30px 40px;
}

.car-grid img{
    width: 400px !important;
    height: 220px;
    object-fit: cover;
    display: block;
    margin: auto;
}

.car-grid p{
    text-align: center;
}
.car-grid h4{
    text-align: center;
}
.topnav2 {
    
  overflow: hidden;
  background-color: #000000;
}

.topnav2 a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav2 .main-help{
    color: #F26821 !important;
}
.topnav2 .main-help:hover{
    background-color: #000000 !important;
}
.topnav2 a:hover {
  background-color: #f9b694;
  color: black;
}

.topnav2 a.active {
  background-color: #F26821;
  color: white;
}
.car-listing{
    color: #F26821;
    font-size: 20px;
    margin-top: 40px !important;
    text-decoration: underline;
}
.car-listing:hover{
    color: #f26721b8;
    
}

@media (max-width: 799px) {
  .section-header .colmn3 {
    
    grid-template-columns: 1fr !important;
}

.section-header p {
    padding: 5px 5px 0 5px;
    color: #575962 !important;
    font-weight: 400 !important;
}
.owl-carousel .owl-item img {
    display: block;
    width: 200px !important;
}
.section-header {
    padding: 80px 5px;
    text-align: center;
    background: rgba(234, 223, 223, 0.358);
}

}
@media(max-width: 500px){
body.index section.car-grid img{
      width:100% !important;
}
body.index section.car-grid {
      display:block;
}
}
section.car-grid img {
    width: 100% !important;
    max-width: 100%;
}
.car-grid div {
    border: 1px solid rgba(77, 75, 75, 0.75);
    margin: 30px 15px;
}
section.car-grid {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
}
section.car-grid a {
    width: 50%;
    margin-bottom: 20px;
}

@media(max-width: 1267px){
section.car-grid a {
    width: 33%;
}
}

@media(max-width: 990px){
section.car-grid a {
    width: 50%;
}
}

@media(max-width: 600px){
section.car-grid a {
    width: 100%;
}
}

section.car-grid a div {
    height: 100%;
    margin-bottom: 0;
}
.price-range-slider {
  width: 100%;
  float: left;
  display:flex;
}
.price-range-slider .range-value {
  margin: 0;
}
.price-range-slider .range-value input {
  width: 100%;
  background: none;
  color: #fff;
  font-size: 16px;
  font-weight: initial;
  box-shadow: none;
  border: none;
}
.price-range-slider .range-bar {
  border: none;
  background: #000;
  height: 3px;
  width: 96%;
  margin-left: 8px;
  margin-top:25px;
}
.price-range-slider .range-bar .ui-slider-range {
  background: #f26822;
}
.price-range-slider .range-bar .ui-slider-handle {
  border: none;
  border-radius: 25px;
  background: #fff;
  border: 2px solid #f26822;
  height: 17px;
  width: 17px;
  top: -0.52em;
  cursor: pointer;
}
.price-range-slider .range-bar .ui-slider-handle + span {
  background: #f26822;
}

</style>

@stop
@section('content')
<section class="dash-banner dash-section dis-column">

<div class="serivce-demands">
      <div class="container">
         <div class="row">
            <div class="location">
                        <form id="filters-form" method="post">
                        <h1>Rentals</h1>
                            <label for="location">Location:</label> <br>
                            <input type="text" class="main-text" id="location_input" placeholder="Enter your location">
                            <br>
                            <label for="location">Price Range:</label> <br>
                            <div class="price-range-slider">
                                <!-- <select >
                                  <option  value="" selected>Select price</option>
                                  <option value="20">$20</option>
                                  <option value="30">$30</option>
                                  <option value="40" >$40</option>
                                  <option value="50" >$50</option>
                                  <option value="60" >$60</option>
                                  <option value="70" >$70</option>
                                  <option value="80" >$80</option>
                                  <option value="90" >$90</option>
                                  <option value="100" >$100</option>
                                  <option value="110" >$110</option>
                                  <option value="120" >$120</option>
                                  <option value="130" >$130</option>
                                  <option value="140" >$140</option>
                                  <option value="150" >$150</option>
                                </select> -->
                                 <p class="range-value">
                                <input type="text" id="amount" value="$0 - $150" readonly>
                                      </p>
                                <input type="hidden" id='pricestart' value="0">
                                <input type="hidden" id='priceend' value="150">
                                  <div id="slider-range" class="range-bar"></div>
                            </div>
                            <br>
                            <label for="location">Sort by:</label> <br>
                            <select name="order" id="order">
                              <option selected>Relevance</option>
                              <option value="asc">Price low to high</option>
                              <option value="desc">Price high to low</option>
                              <option value="distance" >Distance</option>
                              
                            </select>  
                            <input type="button" class="submit-btn" value="Search">


                <a href="{{url('/')}}/owner/dashboard" class="car-listing">List your car</a>
                          </form>
            </div>
         </div><!--row-->
      </div><!--container-->
   </div><!--serivce-demands-->   

</section>


<div class="topnav2">
    <a href="rental.html" class="main-help">Rentals</a>
    <span id="typelist">
        
    </span>
</div>

<div class="row">
    <div class="col-md-8 col-lg-8 col-sm-12">
        <section class="car-grid">

        </section>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div id="map">
        </div>
    </div>
</div>
@stop
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/layout/js/map.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{Helper::getSettings()->site->browser_key}}&libraries=places&callback=initMap" async defer></script>
<script>
    
function initMap() {

    var input = document.getElementById('location_input');
    var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(34.1352786, -94.6107576),
    new google.maps.LatLng(34.1352786, -94.6107576));

    var defaultPlace = new google.maps.LatLng(34.1352786, -94.6107576);

    var options = {
                    location: defaultPlace,
                    radius: 2000,
                    //types: ['address'],
                    componentRestrictions: {country: 'US'}
                };
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        document.getElementById('location').innerHTML = place.name;
    });

    var url = getBaseUrl() + "/user/transport/cars-list/"+"{{$id}}";

        $.ajax({
            type:"GET",
            url: url,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            'beforeSend': function (request) {
                showLoader();
            },
            success:function(data){
                    var vehicles=data.responseData.carlist;
                    var vehicleList='';
                    var typeList='';
                    var i=0;
                    var carspoint = [];
                    vehicles.forEach(function(item, index){
                        
                        var address = item.pickup_address;

                       $.ajax({
                            'async': false,
                            'type': "POST",
                            'global': false,
                            'dataType': 'html',
                            'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key={{Helper::getSettings()->site->browser_key}}',
                            'data': {'type': 'data'},
                            'success': function (result) {
                           
                             response = JSON.parse(result);
                             lat=response.results[0].geometry.location.lat;
                             long=response.results[0].geometry.location.lng;

                             loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                            
                             carspoint.push(loc);
                             //console.log(response.results[0].geometry.location.lat);

                            }
                        });


                        vehicleList+='<a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>'
                        
                    });

                    

                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 5,
                        center: { lat: 34.1352786, lng: -94.6107576 },
                    });

                    
                    setMarkers(map, carspoint);

                    if(vehicles.length==0){
                        vehicleList='<p>No Result Found.</p>';
                    }

                    $('.car-grid').html(vehicleList);

                    var types=data.responseData.typelist;
                    var typeList='';
                    var i=1;
                    types.forEach(function(item, index){
                        var isActive='';
                        if(item.id=="{{$id}}"){
                            typeList+='<a  class="active" href="{{url("/")}}/rental/'+item.id+'/cars">'+item.name+'</a>';
                        }else{
                            typeList+='<a  href="{{url("/")}}/rental/'+item.id+'/cars">'+item.name+'</a>';
                        }
                    });

                    $('#typelist').html(typeList);
                     hideLoader();
            }
        });
}
</script>
<script>
// var url = "https://api.gridetech.com/api/v1/user/transport/cars-list/"+{{$id}};

// $.ajax({
//     type:"GET",
//     url: url,
//     headers: {
//         Authorization: "Bearer " + getToken("admin")
//     },
//     'beforeSend': function (request) {
//         showInlineLoader();
//     },
//     success:function(data){
//             var vehicles=data.responseData.carlist;
//             var vehicleList='';
//             var typeList='';
//             var i=0;
//             var carspoint = [];
//             vehicles.forEach(function(item, index){
                
//                 var address = item.pickup_address;

//                $.ajax({
//                     'async': false,
//                     'type': "POST",
//                     'global': false,
//                     'dataType': 'html',
//                     'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key=AIzaSyBUAqh3HZlWcLu8aN-daT6BwMgagga-C7U',
//                     'data': {'type': 'data'},
//                     'success': function (result) {
                   
//                      response = JSON.parse(result);
//                      lat=response.results[0].geometry.location.lat;
//                      long=response.results[0].geometry.location.lng;

//                      loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                    
//                      carspoint.push(loc);
//                      //console.log(response.results[0].geometry.location.lat);

//                     }
//                 });


//                 vehicleList+='<a href="{{url("/")}}/user/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>'
                
//             });

            

//             const map = new google.maps.Map(document.getElementById("map"), {
//                 zoom: 5,
//                 center: { lat: 34.1352786, lng: -94.6107576 },
//             });

            
//             setMarkers(map, carspoint);

//             if(vehicles.length==0){
//                 vehicleList='<p>No Result Found.</p>';
//             }
//             $('.car-grid').html(vehicleList);

//             var types=data.responseData.typelist;
//             var typeList='';
//             var i=1;
//             types.forEach(function(item, index){
//                 var isActive='';
//                 if(item.id=="{{$id}}"){
//                     typeList+='<a  class="active" href="{{url("/")}}/rental/'+item.id+'/cars">'+item.name+'</a>';
//                 }else{
//                     typeList+='<a  href="{{url("/")}}/rental/'+item.id+'/cars">'+item.name+'</a>';
//                 }
//             });

//             $('#typelist').html(typeList);
//             hideInlineLoader();
//         }
//     });

$('.submit-btn').click(function(){
    var url = "https://api.gridetech.com/api/v1/user/transport/cars-filter/"+{{$id}};
    var location=$('#location_input').val();
    var pricestart=$('#pricestart').val();
    var priceend=$('#priceend').val();
    var order=$('#order').val();

    if(order=='distance' && location==''){
       var current_latitude = 34.1352786;
        var current_longitude = -94.6107576;

       

        if( navigator.geolocation ) {
           navigator.geolocation.getCurrentPosition( success, fail );
        } else {
            console.log('Sorry, your browser does not support geolocation services');
        }

        function success(position)
        {

            if(position.coords.longitude != "" && position.coords.latitude != ""){
                current_longitude = position.coords.longitude;
                current_latitude = position.coords.latitude;
                $.ajax({
                    type:"POST",
                    url: url,
                    headers: {
                        Authorization: "Bearer " + getToken("admin")
                    },
                    data: {long: current_longitude, lat:current_latitude, order: order, pricestart: pricestart, priceend:priceend},
                    'beforeSend': function (request) {
                        showInlineLoader();
                    },
                    success:function(data){
                        var carlist = data.responseData.carlist;

                            carListhtml='';
                            var carspoint=[];
                            carlist.forEach(function(item, index){

                                var address = item.pickup_address;

                               $.ajax({
                                    'async': false,
                                    'type': "POST",
                                    'global': false,
                                    'dataType': 'html',
                                    'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key=AIzaSyBUAqh3HZlWcLu8aN-daT6BwMgagga-C7U',
                                    'data': {'type': 'data'},
                                    'success': function (result) {
                                   
                                     response = JSON.parse(result);
                                     lat=response.results[0].geometry.location.lat;
                                     long=response.results[0].geometry.location.lng;

                                     loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                                    
                                     carspoint.push(loc);
                                     //console.log(response.results[0].geometry.location.lat);

                                    }
                                });

                                carListhtml += '<a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>';
                            });

                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 5,
                                center: { lat: 34.1352786, lng: -94.6107576 },
                            });

                            
                            setMarkers(map, carspoint);

                            if(carlist.length==0){
                                carListhtml='<p>No Result Found.</p>';
                            }
                            $('.car-grid').html(carListhtml);
                            hideInlineLoader();
                    }
                });
            }

        }

        function fail()
        {
            // Could not obtain location
            console.log('unable to get your location');
             //initMap();
        }
    }else{


        $.ajax({
            type:"POST",
            url: url,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            data: {pricestart: pricestart, priceend: priceend, order:order, location:location},
            'beforeSend': function (request) {
                showInlineLoader();
            },
            success:function(data){
                var carlist=data.responseData.carlist;
                var carListhtml='';
                var typeList='';
                var i=0;
                 var carspoint=[];
                    carlist.forEach(function(item, index){

                        var address = item.pickup_address;

                           $.ajax({
                                'async': false,
                                'type': "POST",
                                'global': false,
                                'dataType': 'html',
                                'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key=AIzaSyBUAqh3HZlWcLu8aN-daT6BwMgagga-C7U',
                                'data': {'type': 'data'},
                                'success': function (result) {
                               
                                 response = JSON.parse(result);
                                 lat=response.results[0].geometry.location.lat;
                                 long=response.results[0].geometry.location.lng;

                                 loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                                
                                 carspoint.push(loc);
                                 //console.log(response.results[0].geometry.location.lat);

                                }
                            });

                        carListhtml += '<a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>';
                    });

                const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 5,
                            center: { lat: 34.1352786, lng: -94.6107576 },
                        });

                        
                        setMarkers(map, carspoint);


                if(carlist.length==0){
                    carListhtml='<p>No Result Found.</p>';
                }
                $('.car-grid').html(carListhtml);

               hideInlineLoader();
            }
        });
    }
});

$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 150,
      values: [ 0, 150 ],
      slide: function( event, ui ) {
        $( "#pricestart" ).val(  ui.values[ 0 ] );
        $( "#priceend" ).val( ui.values[ 1 ] );
        var end = '';
        if(ui.values[ 1 ]==150){
           var end = '+';
        }
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]+end );
      }
    });
    $( "#pricestart" ).val(  $( "#slider-range" ).slider( "values", 0 ) );

    $( "#priceend" ).val($( "#slider-range" ).slider( "values", 1 ));

    // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    //   " - $" + $( "#slider-range" ).slider( "values", 1 ) + end );
});

function setMarkers(map, points) {
  const image = {
    url: "https://developers.google.com/maps/documentation/javascript/examples/full/images/car.png",
    size: new google.maps.Size(20, 32),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32),
  };
  const shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly",
  };

  console.log(points);

  points.forEach(function(item, index){
    var point = JSON.parse(item);
    new google.maps.Marker({
      position: { lat: point.lat, lng: point.long },
      map,
      //icon: image,
      shape: shape,
      title: point.title,
    });
  });
}
</script>
@stop