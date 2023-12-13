{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            @if(empty($id))
                @php($action_text=__('admin.add'))
            @else
                @php($action_text=__('admin.edit'))
                    
            @endif
            <h6 class="m-0" style="margin:10!important;"> {{$action_text}} {{ __('Blog') }}</h6>
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
                        <label for="blog" class="col-xs-2 col-form-label">Title</label>
                        <div class="col-xs-10">
                            <input class="form-control" autocomplete="off"  type="text" value="{{ old('title') }}" name="title" required id="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="blog" class="col-xs-2 col-form-label">Publish Date</label>
                        <div class="col-xs-10">
                            <input class="form-control" id="publish_date" autocomplete="off"  type="date" value="" name="time" required id="date" placeholder="Date">
                        </div>
                    </div>
                 </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="promo_description" class="col-xs-2 col-form-label">Content</label>
                        <div class="col-xs-10">
                            <textarea id="content_description" placeholder="Description" class="form-control" name="content" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-row">   
                    <div class="form-group col-md-12">
                        <label for="promo_description" class="col-xs-2 col-form-label">Video Content</label>
                        <div class="col-xs-10">
                            <textarea id="video" placeholder="Video Content" class="form-control" id="video" name="video"></textarea>
                        </div>
                    </div>
                </div> -->

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="picture">{{ __('admin.picture') }}</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="picture1" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-accent">{{$action_text}} {{ __('Blog') }}</button>
                <button type="reset" class="btn btn-danger cancel">{{ __('Cancel') }}</button>

            </form>
        </div>
    </div>
</div>
<script>
var blobImage = '';
var blobName = '';
<?php $demoMode = 0; ?>
$(document).ready(function()
{
    var id = "";
    $(".validateForm").validate({
        errorElement: 'span', //default input error message container
		errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        rules: {
            title: {
                required: true
            },
            "time": {
                required: true
            },
            video: {
                url: true
            },
            @if($demoMode == 1)
            "picture1": {
                required: true,
                extension: "jpg|jpeg|png|ico|bmp"
            },
            @endif
            "content": {
                required: true
            }

        },
        messages: {
            title: {
                required: "Title is a required field!!!"
            },
            "time": {
                required: "Publish Date is a required field!!!"
            },
            "content": {
                required: "Content is a required field!!!"
            },
            "picture1": {
                required: "Picture is a required field!!!"
            }
        },
        errorPlacement: function(error, element) {
                var n = element.attr("name");   
                if (n == "picture1"){
                    error.insertAfter($(element).parents('div.image-placeholder'));
                }
                else{
                    error.appendTo(element.parent());
                }
        },
        submitHandler: function(form) {
            var formGroup = $(".validateForm").serialize().split("&");

            var data = new FormData();

            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }
            var url = getBaseUrl() + "/admin/blog"+id;

            if(blobImage != "") data.append('picture', blobImage, blobName);

            saveRow( url, table, data);
        }
    });
    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });
    $('.picture_upload').on('change', function(e) {
      var files = e.target.files;
      var obj = $(this);
      if (files && files.length > 0) {
        blobName = files[0].name;
         cropImage(obj, files[0], obj.closest('.image-placeholder').find('img'), function(data) {
            blobImage = data;
         });
        var settings = $('.validateForm').validate().settings;
        delete settings.rules.picture1;

      }
    });
    if($("input[name=id]").length){
    id = "/" +$("input[name=id]").val();
    var url = getBaseUrl() + "/admin/blog"+id;
    setData( url );
        <?php $demoMode = 1; ?>
    }

});
</script>