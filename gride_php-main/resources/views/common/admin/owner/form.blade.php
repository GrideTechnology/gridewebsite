{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            @if(empty($id))
                @php($action_text=__('admin.add'))
            @else
                @php($action_text=__('admin.edit'))
                    
            @endif
            <h6 class="m-0" style="margin:10!important;"> {{$action_text}} {{ __('User') }}</h6>
        </div>
        <div class="form_pad">
            <form class="validateForm" files="true">
                @csrf()
                @if(!empty($id))
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="{{$id}}">
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name" class="col-xs-2 col-form-label">{{ __('admin.first_name') }}</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="first_name" class="col-xs-2 col-form-label">{{ __('admin.last_name') }}</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="" autocomplete="off">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 email">
                        
                        <label for="email" class="col-xs-2 col-form-label">{{ __('admin.email') }}</label>
                        
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" autocomplete="off">
                       
                        
                    </div>
                    
                    <div class="form-group col-md-6 ">
                        <label for="mobile" class="col-xs-2 col-form-label">Phone</label>
                        <input type="text" class="form-control phone" id="phone" name="phone" placeholder="Phone" value="">
                    </div> 
                    
                    
                    
                    <div class="form-group col-md-6">
                        <label for="password" class="col-xs-2 col-form-label">{{ __('admin.password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation" class="col-xs-2 col-form-label">{{ __('admin.password_confirmation') }}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-Type-Password" value="" autocomplete="off">
                    </div>
                   

                <div class="form-row">
                    <div class="form-group col-md-6"> 
                        <label for="male" class="col-xl-3 col-form-label">{{ __('admin.male') }}
                            <input type="radio" class="form-control mt-2" id="male" name="gender" value="MALE">
                        </label>
                        <label for="female" class="col-xl-3 col-form-label">{{ __('admin.female') }}
                            <input type="radio" class="form-control mt-2" id="female" name="gender" value="FEMALE">
                        </label>
                        <div>
                        <span id="gender-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="picture">{{ __('admin.picture') }}</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="picture1" class="upload-btn picture_upload">
                        </div>
                    </div>
                    
                </div>
            </div>
                <br>
                <button type="submit" class="btn btn-accent">{{$action_text}} {{ __('Owner') }}</button>
                <button type="reset" class="btn btn-danger cancel">{{ __('Cancel') }}</button>

            </form>
        </div>
    </div>
</div>
<script>

var blobImage = '';
var blobName = '';

var validDemo = 0;
<?php $demoMode = 0; ?>
$(document).ready(function()
{
    $(".phone").intlTelInput({
      initialCountry: "<?php echo isset(Helper::getSettings()->site->country_code)?Helper::getSettings()->site->country_code :'us'; ?>",
    });
    basicFunctions();
    

    var id = "";

    $('.picture_upload').on('change', function(e) {
      var files = e.target.files;
      var obj = $(this);
      if (files && files.length > 0) {
        blobName = files[0].name;
         cropImage(obj, files[0], obj.closest('.image-placeholder').find('img'), function(data) {
            blobImage = data;
         });
      }
   });

    $
    if($("input[name=id]").length){

        id = "/" +$("input[name=id]").val();
        var url = getBaseUrl() + "/admin/owner"+id;
        setData( url );
        @if(Helper::getEncrypt() == 1 || Helper::getDemomode() == 1)
            $('#phone').remove();
            $('#email').remove();
            $('.phone,.email').hide();
            <?php $demoMode = 1; ?>
        @endif
    }

        
    $('.validateForm').validate({
		errorElement: 'span', //default input error message container
		errorClass: 'help-block', // default input error message class
		focusInvalid: false, // do not focus the last invalid input
		rules: {
            first_name: { required: true },
            last_name: { required: true },
            @if($demoMode == 1)
            email: { required: true, email: true },
             
            phone: { required: true, maxlength: 15 },    
            @endif      
            password: { required: true },
            password_confirmation: { equalTo: "#password" },
            gender: { required: true },
		},

		messages: {
			first_name: { required: "First name is required." },
            last_name: { required: "Last name is required." },
			email: { required: "Email is required." },
			phone: { required: "Phone number is required.", maxlength: "Phone no should not exceed 15 digits." },
            password: { required: "Password is required." },
            gender: { required: "Gender is required." },
		},
        errorPlacement: function(error, element) {
            var n = element.attr("name"); 
            if (n == "gender"){
                error.appendTo(element.parent().next().next());    
            }
            else{
                error.appendTo(element.parent());
            }
        },

		highlight: function(element)
		{ 
            $(element).closest('.form-group').addClass('has-error');
            if($(element).attr('id')=='phone'){
                $('.selected-flag').css('height','60%');
            }
		},

		success: function(label) {
			label.closest('.form-group').removeClass('has-error');
			label.remove();
            $('.selected-flag').css('height','100%');
		},

		submitHandler: function(form) {

            var formGroup = $(".validateForm").serialize().split("&");

            var data = new FormData();

            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }

            if(blobImage != "") data.append('picture', blobImage, blobName);

            var url = getBaseUrl() + "/admin/owner"+id;

            saveRow( url, table, data);

		}
    });

    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });

});
</script>