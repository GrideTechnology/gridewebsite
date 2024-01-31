{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            @if(empty($id))
                @php($action_text=__('Cars Type Add'))
            @else
                @php($action_text=__('Cars Type Edit'))
                
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
                    <label for="name" class="col-xs-2 col-form-label">Type Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Type Name" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="" autocomplete="off">
                    </div>
                </div>

                <div class="form-row">
                 <div class="form-group col-md-6">
                    <label for="pricing_method" class="col-xs-2 col-form-label">Pricing Method</label>
                        <select class="form-control" id="pricing_method" name="pricing_method" autocomplete="off">
                            <option value="Hourly">Hourly</option>
                            <option value="Daily">Daily</option>
                            <option value="Weekly">Weekly</option>
                        </select>
                 </div>
                 <div class="form-group col-md-6">
                        <label for="driver_profile">Image</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="image" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
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

var image = '';
var imageName = '';
var marker = '';
var markerName = '';

$(document).ready(function()
{

    $('.picture_upload').on('change', function(e) {
      var files = e.target.files;
      var obj = $(this);
      if (files && files.length > 0) {
            if(obj.attr('name') == 'image') {
                imageName = files[0].name;
            }
        
         cropImage(obj, files[0], obj.closest('.image-placeholder').find('img'), function(data) {
            image = data;
            if(obj.attr('name') == 'vehicle_image') {
                image = data;
            } else if(obj.attr('name') == 'vehicle_marker') {
                marker = data;
            }
         });
      }
   });

     basicFunctions();
    //  $.ajax({
    //     type:"GET",
    //     url: getBaseUrl() + "/admin/getvehicletype",
    //     headers: {
    //         Authorization: "Bearer " + getToken("admin")
    //     },
    //     'beforeSend': function (request) { },
    //     success:function(response){
    //         var data = parseData(response);
    //         $("#ride_type_id").empty();
    //         $("#ride_type_id").append('<option value="">Select</option>');
    //         $.each(data.responseData.vehicle_type,function(key,item){
    //             $("#ride_type_id").append('<option value="'+item.id+'">'+item.ride_name+'</option>');
    //         }); 
    //     }
    // });

     var id = "";
     if($("input[name=id]").length){

        id = "/"+ $("input[name=id]").val();
        var url = getBaseUrl() + "/admin/cars-type"+id;
        setData( url );
     }

    $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        // rules: {
        //     // vehicle_type: { required: true },
        //     model: { required: true },
        //     //vehicle_image: { required: true},
        //     //vehicle_marker: { required: true },
        //     type:{required: true},
        //     capacity: { required: true },
        // },

        // messages: {
        //     // vehicle_type: { required: "Vehicle Type is required." },
        //     model: { required: "Vehicle Name is required." },
        //     //vehicle_image: { required: "Image is required." },
        //     //vehicle_marker: { required: "Marker is required." },
        //     type:{required: "Type is required."},
        //     capacity: { required: "Capacity required." },
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

            var formGroup = $(".validateForm").serialize().split("&");

            var data = new FormData();

            if(image != "") data.append('image', image, imageName);

            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }

            var url = getBaseUrl() + "/admin/cars-type"+id;
            console.log(data);

            saveRow( url, table, data);

        }
    });

    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });

});
</script>
