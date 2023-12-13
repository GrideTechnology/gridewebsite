{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<style>
    .pac-container  {z-index: 1061 !important;}
</style>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            @if(empty($id))
                @php($action_text=__('Cars Add'))
            @else
                @php($action_text=__('Cars Edit'))
                
            @endif
            <h6 class="m-0"style="margin:10!important;">{{$action_text}}</h6>
        </div>
        <div class="form_pad">
            <form class="validateForm">
                @if(!empty($id))
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="{{$id}}">
                @endif
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="type" class="col-xs-2 col-form-label">Owner</label>
                        <select name="owner_id" class="form-control" id="owner_id">
                            
                        </select>
                    </div>
                 <div class="form-group col-md-6">
                    <label for="type" class="col-xs-2 col-form-label">Car Type</label>
                        <select name="type" class="form-control" id="type">
                            
                        </select>
                    </div>
                    
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="model">Car Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Model" value="" autocomplete="off">
                    </div>
                     <div class="form-group col-md-6">
                        <label for="vin" class="col-xs-2 col-form-label">VIN</label>
                            <input type="text" class="form-control" id="vin" name="vin" placeholder="VIN" value="" autocomplete="off">
                     </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="make">Make</label>
                        <input type="text" class="form-control" id="make" name="make" placeholder="Make" value="" autocomplete="off">
                     </div>
                    <div class="form-group col-md-6">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="Year" value="" autocomplete="off">
                    </div>
                </div>
               <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="model">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Color" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="capacity">Capacity</label>
                        <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity" value="" autocomplete="off">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="odometer">Odometer</label>
                        <input type="text" class="form-control" id="odometer" name="odometer" placeholder="Odometer" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="milleage">Milleage Allowed (per day)</label>
                        <input type="text" class="form-control" id="milleage_allowed" name="milleage_allowed" placeholder="Milleage Allowed" value="" autocomplete="off">
                    </div>
                    
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="hourly_charges">Hourly Charges</label>
                        <input type="text" class="form-control" id="hourly_charges" name="hourly_charges" placeholder="Hourly Charges" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="daily_charges">Daily Charges</label>
                        <input type="text" class="form-control" id="daily_charges" name="daily_charges" placeholder="Daily Charges" value="" autocomplete="off">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="weekly_charges">Weekly Charges</label>
                        <input type="text" class="form-control" id="weekly_charges" name="weekly_charges" placeholder="Weekly Charges" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="trip_fee">Trip Fee</label>
                        <input type="text" class="form-control" id="trip_fee" name="trip_fee" placeholder="Trip Fee" value="" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cancellation_charges">Cancellation Fee</label>
                        <input type="text" class="form-control" id="cancellation_charges" name="cancellation_charges" placeholder="Cancellation Fee" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="insurance_charges">Insurance Charges</label>
                        <input type="text" class="form-control" id="insurance_charges" name="insurance_charges" placeholder="Plate Number" value="" autocomplete="off">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="booking_fee">Booking Fee</label>
                        <input type="text" class="form-control" id="booking_fee" name="booking_fee" placeholder="Booking Fee" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sales_tax">Sales Tax</label>
                        <input type="text" class="form-control" id="sales_tax" name="sales_tax" placeholder="Sales Tax" value="" autocomplete="off">
                    </div>
                </div>

                <!-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="driver_name">Driver Name</label>
                        <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Driver Name" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="driver_profile">Driver Profile</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="driver_profile" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="licence">Licence Number</label>
                        <input type="text" class="form-control" id="licence_number" name="licence_number" placeholder="Licence Number" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="licence_state">Licence State</label>
                        <select class="form-control" id="licence_state" name="licence_state" value="" autocomplete="off">
                        </select>
                    </div>
                </div>  -->

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pickup_address">Pickup Address</label>
                        <input type="text" class="form-control" id="pickup_address" name="pickup_address" placeholder="Pickup Address" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="is_female">Is Female</label>
                        <select class="form-control" id="is_female" name="is_female" autocomplete="off">
                            <option value="">Is Female</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="about">About</label>
                        <textarea class="form-control" id="about" name="about" autocomplete="off"></textarea>
                    </div>
                </div>                

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="registration">Registration</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="registration" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="insurance">Insurance</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="insurance" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inspection">Inspection</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="inspection" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="protection">Protection</label>
                        <div class="image-placeholder w-100">
                            <select id="protection" name="protection" autocomplete="off" class="form-control">
                                <option value="">select</option>
                                <option value="basic">Basic</option>
                                <option value="standard">Standard</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plate_number">Plate Number</label>
                        <input type="text" class="form-control" id="plate_number" name="plate_number" placeholder="Plate Number" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="notify_status" class="col-xs-2 col-form-label">@lang('admin.vehicle.vehicle_status')</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>

               
                <div class="form-row">
                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-accent">{{$action_text}}</button>
                <button type="reset" class="btn btn-danger cancel">{{ __('Cancel') }}</button>
                <div>
              </div>
            </form>
        </div>
    </div>
</div>


<script>

var driver = '';
var driverName = '';
var registration = '';
var registrationName = '';
var insurance = '';
var insuranceName = '';
var inspection = '';
var inspectionName = '';

$(document).ready(function()
{

    $('.picture_upload').on('change', function(e) {
      var files = e.target.files;
      var obj = $(this);
      if (files && files.length > 0) {
            if(obj.attr('name') == 'registration') {
                registrationName = files[0].name;
            } else if(obj.attr('name') == 'insurance') {
                insuranceName = files[0].name;
            } else if(obj.attr('name') == 'inspection') {
                inspectionName = files[0].name;
            }
        
         cropImage(obj, files[0], obj.closest('.image-placeholder').find('img'), function(data) {
            image = data;
            if(obj.attr('name') == 'registration') {
                registration = data;
            } else if(obj.attr('name') == 'insurance') {
                insurance = data;
            } else if(obj.attr('name') == 'inspection') {
                inspection = data;
            }
         });
      }
   });

    $.ajax({
        type:"GET",
        url: getBaseUrl() + "/admin/ownerlist",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        'beforeSend': function (request) {
            showInlineLoader();
        },
        success:function(data){
                $("#owner_id").html('');
                $("#owner_id").append('<option value="">Select</option>');
                $.each(data.responseData,function(key,item){
                    var first_name=item.first_name;
                     var last_name=item.last_name;
                    if(item.first_name==null){
                        var first_name='';
                    }
                    if(item.last_name==null){
                        var last_name='';
                    }
                    $("#owner_id").append('<option value="'+item.id+'">'+first_name+' '+last_name+'</option>');
                });
                hideInlineLoader();
             }

    });

     basicFunctions();

     $.ajax({
        type:"GET",
        url: getBaseUrl() + "/admin/cars-type-list",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        'beforeSend': function (request) { },
        success:function(response){
            var data = parseData(response);
            $("#type").empty();
            $("#type").append('<option value="">Select</option>');
            var carstype = data.responseData.data;
            carstype.forEach(function(item, key){
                $("#type").append('<option value="'+item.id+'">'+item.name+'</option>');
            }); 
        }
    });




    // $.ajax({
    //     type:"GET",
    //     url: getBaseUrl() + "/admin/states/231",
    //     headers: {
    //         Authorization: "Bearer " + getToken("admin")
    //     },
    //     'beforeSend': function (request) {
    //         showInlineLoader();
    //     },
    //     success:function(data){
    //             $("#licence_state").html('');
    //             $("#licence_state").append('<option value="">Select</option>');
    //             $.each(data.responseData,function(key,item){
    //                 $("#licence_state").append('<option value="'+item.id+'">'+item.state_name+'</option>');
    //             });
    //             hideInlineLoader();
    //          }
    // });




     var id = "";
     if($("input[name=id]").length){

        id = "/"+ $("input[name=id]").val();
        var url = getBaseUrl() + "/admin/cars"+id;
        setData( url );
     }

    

    $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        rules: {
            // vehicle_type: { required: true },
            model: { required: true },
            //vehicle_image: { required: true},
            //vehicle_marker: { required: true },
            type:{required: true},
            capacity: { required: true },
        },

        messages: {
            // vehicle_type: { required: "Vehicle Type is required." },
            model: { required: "Vehicle Name is required." },
            //vehicle_image: { required: "Image is required." },
            //vehicle_marker: { required: "Marker is required." },
            type:{required: "Type is required."},
            capacity: { required: "Capacity required." },
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

            var formGroup = $(".validateForm").serialize().split("&");

            var data = new FormData();

            if(registration != "") data.append('registration', registration, registrationName);
            if(insurance != "") data.append('insurance', insurance, insuranceName);
            if(inspection != "") data.append('inspection', inspection, inspectionName);

            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }

            var url = getBaseUrl() + "/admin/cars"+id;
            saveRow( url, table, data);

        }
    });


    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });



});
</script>
<script type="text/javascript" src="{{ asset('assets/layout/js/map.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{Helper::getSettings()->site->browser_key}}&libraries=places&callback=initMap" async defer></script>
<script>
function initMap() {

    var input = document.getElementById('pickup_address');
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
}
</script>
