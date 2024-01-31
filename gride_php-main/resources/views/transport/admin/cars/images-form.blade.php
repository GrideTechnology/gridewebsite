{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            
                @php($action_text=__(' Add Car Images'))
            <h6 class="m-0"style="margin:10!important;">{{$action_text}}</h6>
        </div>
        <div class="form_pad">
            <form class="validateForm">
                @if(!empty($id))
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" id="id" name="id" value="{{$id}}">
                @endif
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="front">Front</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="1"/>
                            <input type="file" name="front" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="back">Back</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="2"/>
                            <input type="file" name="back" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="left">Left Side</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="3"/>
                            <input type="file" name="left" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="right">Right</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="4"/>
                            <input type="file" name="right" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="front_left_tire">Front Left Tire</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="5"/>
                            <input type="file" name="front_left_tire" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="front_right_tire">Front Right Tire</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="6"/>
                            <input type="file" name="front_right_tire" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="back_left_tire">Back Left Tire</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="7"/>
                            <input type="file" name="back_left_tire" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="back_right_tire">Back Right Tire</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="8"/>
                            <input type="file" name="back_right_tire" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="left_front_seat_interior">Left front seat interior including floor</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="9"/>
                            <input type="file" name="left_front_seat_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="right_front_seat_interior">Right front seat interior including floor</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="10"/>
                            <input type="file" name="right_front_seat_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="left_back_seat_interior">Left back seat interior</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="11"/>
                            <input type="file" name="left_back_seat_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="right_back_seat_interior">Right back seat interior including</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="12"/>
                            <input type="file" name="right_back_seat_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="left_front_door">Left front door interior</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="13"/>
                            <input type="file" name="left_front_door" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="right_front_door">Right front door interior</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="14"/>
                            <input type="file" name="right_front_door" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="left_back_door_interior">Left back door interior</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="15"/>
                            <input type="file" name="left_back_door_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="right_back_door_interior">Right back door interior</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="16"/>
                            <input type="file" name="right_back_door_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="back_interior">Back Interior</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="17"/>
                            <input type="file" name="back_interior" class="upload-btn picture_upload">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="trunk">Trunk</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" id="18"/>
                            <input type="file" name="trunk" class="upload-btn picture_upload">
                        </div>
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

var left = '';
var leftName = '';
var right = '';
var rightName = '';
var front = '';
var frontName = '';
var back = '';
var backName = '';
var frontlefttire = '';
var frontlefttireName = '';
var frontrighttire = '';
var frontrighttireName = '';
var backlefttire = '';
var backlefttireName = '';
var backrighttire = '';
var backrighttireName = '';
var leftfrontseatinterior = '';
var leftfrontseatinteriorName = '';
var rightfrontseatinterior = '';
var rightfrontseatinteriorName = '';
var leftbackseatinterior = '';
var leftbackseatinteriorName = '';
var rightbackseatinterior = '';
var rightbackseatinteriorName = '';
var leftfrontdoor = '';
var leftfrontdoorName = '';
var rightfrontdoor = '';
var rightfrontdoorName = '';
var leftbackdoor = '';
var leftbackdoorName = '';
var rightbackdoor = '';
var rightbackdoorName = '';
var backinterior = '';
var backinteriorName = '';
var trunk = '';
var trunkName = '';

$(document).ready(function()
{

    $('.picture_upload').on('change', function(e) {
      var files = e.target.files;
      var obj = $(this);
      if (files && files.length > 0) {
            if(obj.attr('name') == 'front') {
                frontName = files[0].name;
            } else if(obj.attr('name') == 'back') {
                backName = files[0].name;
            } else if(obj.attr('name') == 'left') {
                leftName = files[0].name;
            } else if(obj.attr('name') == 'right') {
                rightName = files[0].name;
            } else if(obj.attr('name') == 'front_left_tire') {
                frontlefttireName = files[0].name;
            } else if(obj.attr('name') == 'front_right_tire') {
                frontrighttireName = files[0].name;
            } else if(obj.attr('name') == 'back_left_tire') {
                backlefttireName = files[0].name;
            } else if(obj.attr('name') == 'back_right_tire') {
                backrighttireName = files[0].name;
            } else if(obj.attr('name') == 'left_front_seat_interior') {
                leftfrontseatinteriorName = files[0].name;
            } else if(obj.attr('name') == 'right_front_seat_interior') {
                rightfrontseatinteriorName = files[0].name;
            } else if(obj.attr('name') == 'left_back_seat_interior') {
                leftbackseatinteriorName = files[0].name;
            } else if(obj.attr('name') == 'right_back_seat_interior') {
                rightbackseatinteriorName = files[0].name;
            } else if(obj.attr('name') == 'left_front_door') {
                leftfrontdoorName = files[0].name;
            } else if(obj.attr('name') == 'right_front_door') {
                rightfrontdoorName = files[0].name;
            } else if(obj.attr('name') == 'left_back_door_interior') {
                leftbackdoorName = files[0].name;
            } else if(obj.attr('name') == 'right_back_door_interior') {
                rightbackdoorName = files[0].name;
            } else if(obj.attr('name') == 'back_interior') {
                backinteriorName = files[0].name;
            } else if(obj.attr('name') == 'trunk') {
                trunkName = files[0].name;
            }
        
         cropImage(obj, files[0], obj.closest('.image-placeholder').find('img'), function(data) {
            image = data;
            if(obj.attr('name') == 'front') {
                front = data;
            } else if(obj.attr('name') == 'back') {
                back = data;
            } else if(obj.attr('name') == 'left') {
                left = data;
            } else if(obj.attr('name') == 'right') {
                right = data;
            }else if(obj.attr('name') == 'front_left_tire') {
                frontlefttire = data;
            } else if(obj.attr('name') == 'front_right_tire') {
                frontrighttire = data;
            } else if(obj.attr('name') == 'back_left_tire') {
                backlefttire = data;
            }else if(obj.attr('name') == 'back_right_tire') {
                backrighttire = data;
            } else if(obj.attr('name') == 'left_front_seat_interior') {
                leftfrontseatinterior = data;
            } else if(obj.attr('name') == 'right_front_seat_interior') {
                rightfrontseatinterior = data;
            }else if(obj.attr('name') == 'left_back_seat_interior') {
                leftbackseatinterior = data;
            } else if(obj.attr('name') == 'right_back_seat_interior') {
                rightbackseatinterior = data;
            } else if(obj.attr('name') == 'left_front_door') {
                leftfrontdoor = data;
            }else if(obj.attr('name') == 'right_front_door') {
                rightfrontdoor = data;
            } else if(obj.attr('name') == 'left_back_door_interior') {
                leftbackdoor = data;
            } else if(obj.attr('name') == 'right_back_door_interior') {
                rightbackdoor = data;
            }else if(obj.attr('name') == 'back_interior') {
                backinterior = data;
            } else if(obj.attr('name') == 'trunk') {
                trunk = data;
            }
         });
      }
   });
    id = "/"+ $("input[name=id]").val();
     basicFunctions();
     $.ajax({
        type:"GET",
        url: getBaseUrl() + "/admin/cars/images"+id,
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        'beforeSend': function (request) { },
        success:function(response){
            var data = parseData(response);
            var carsimages = data.responseData;
            carsimages.forEach(function(item, key){
                $('#1').attr('src', item.front);
                $('#2').attr('src', item.back);
                $('#3').attr('src', item.left);
                $('#4').attr('src', item.right);
                $('#5').attr('src', item.front_left_tire);
                $('#6').attr('src', item.front_right_tire);
                $('#7').attr('src', item.back_left_tire);
                $('#8').attr('src', item.back_right_tire);
                $('#9').attr('src', item.left_front_seat_interior);
                $('#10').attr('src', item.right_front_seat_interior);
                $('#11').attr('src', item.left_back_seat_interior);
                $('#12').attr('src', item.right_back_seat_interior);
                $('#13').attr('src', item.left_front_door);
                $('#14').attr('src', item.right_front_door);
                $('#15').attr('src', item.left_back_door);
                $('#16').attr('src', item.right_back_door);
                $('#17').attr('src', item.back_interior);
                $('#18').attr('src', item.trunk);
            }); 
        }
    });

    $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        
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
            if(front != "") data.append('front', front, frontName);
            if(back != "") data.append('back', back, backName);
            if(left != "") data.append('left', left, leftName);
            if(right != "") data.append('right', right, rightName);
            if(frontlefttire != "") data.append('front_left_tire', frontlefttire, frontlefttireName);
            if(frontrighttire != "") data.append('front_right_tire', frontrighttire, frontrighttireName);
            if(backlefttire != "") data.append('back_left_tire', backlefttire, backlefttireName);
            if(backrighttire != "") data.append('back_right_tire', backrighttire, backrighttireName);
            if(leftfrontseatinterior != "") data.append('left_front_seat_interior', leftfrontseatinterior, leftfrontseatinteriorName);
            if(rightfrontseatinterior != "") data.append('right_front_seat_interior', rightfrontseatinterior, rightfrontseatinteriorName);
            if(leftbackseatinterior != "") data.append('left_back_seat_interior', leftbackseatinterior, leftbackseatinteriorName);
            if(rightbackseatinterior != "") data.append('right_back_seat_interior', rightbackseatinterior, rightbackseatinteriorName);
             if(leftfrontdoor != "") data.append('left_front_door', leftfrontdoor, leftfrontdoorName);
             if(rightfrontdoor != "") data.append('right_front_door', rightfrontdoor, rightfrontdoorName);
            if(leftbackdoor != "") data.append('left_back_door', leftbackdoor, leftbackdoorName);
            if(rightbackdoor != "") data.append('right_back_door', rightbackdoor, rightbackdoorName);
            if(backinterior != "") data.append('back_interior', backinterior, backinteriorName);
            if(trunk != "") data.append('trunk', trunk, trunkName);

            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }

            id = "/"+ $("input[name=id]").val();

            var url = getBaseUrl() + "/admin/cars/images"+id;
            console.log(data);

            saveRow( url, table, data);

        }
    });

    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });

});
</script>
