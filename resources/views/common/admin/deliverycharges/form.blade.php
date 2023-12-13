{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
        @if(empty($id))
                @php($action_text=__('admin.add'))
            @else
                @php($action_text=__('admin.edit'))
                    
            @endif
            <h6 class="m-0" style="margin:10!important;">{{$action_text}} {{ __('Delivery Charge') }}</h6>
        </div>
        <div class="form_pad">
            <form class="validateForm">
                @csrf()
                @if(!empty($id))
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="{{$id}}">
                @endif
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="minimum_delivery_charge" class="col-xs-2 col-form-label">{{ __('Minimum Delivery Chrage') }}</label>
                        <input type="text" name="minimum_delivery_charge" id="minimum_delivery_charge" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="upto9km_charge" class="col-xs-2 col-form-label">{{ __('Upto 9 KM Delivery Chrage') }}</label>
                        <input type="text" name="upto9km_charge" id="upto9km_charge" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="upto15km_charge" class="col-xs-2 col-form-label">{{ __('Upto 15 KM Delivery Chrage') }}</label>
                        <input type="text" name="upto15km_charge" id="upto15km_charge" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="upto24km_charge" class="col-xs-2 col-form-label">{{ __('Upto 24 KM Delivery Chrage') }}</label>
                        <input type="text" name="upto24km_charge" id="upto24km_charge" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="maximum_delivery_charge" class="col-xs-2 col-form-label">{{ __('Maximum Delivery Chrage') }}</label>
                        <input type="text" name="maximum_delivery_charge" id="maximum_delivery_charge" class="form-control">
                    </div>
                </div>
               
                <div class="form-row">
                    
                </div>                
               
                <button type="submit" class="btn btn-accent updatecharge">{{$action_text}} {{ __('Charge') }}</button>
                <button type="reset" class="btn btn-danger cancel">{{ __('Cancel') }}</button>

            </form>
        </div>
    </div>
</div>



<script>
$(document).ready(function()
{

    id = "/"+$("input[name=id]").val();
    $.ajax({
            type:"GET",
            url: getBaseUrl() + "/admin/deliverycharges"+id,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
        success:function(data){
            row=data.responseData;
            $('#minimum_delivery_charge').val(row.minimum_delivery_charge);
            $('#upto9km_charge').val(row.upto9km_charge);
            $('#upto15km_charge').val(row.upto15km_charge);
            $('#upto24km_charge').val(row.upto24km_charge);
            $('#maximum_delivery_charge').val(row.maximum_delivery_charge);
        }
    });

    console.log(getToken("admin"));

    $('.updatecharge').click(function(){

        var minimum_delivery_charge= $("#minimum_delivery_charge").val();
        var upto9km_charge= $("#upto9km_charge").val();
        var upto15km_charge= $("#upto15km_charge").val();
        var upto24km_charge= $("#upto24km_charge").val();
        var maximum_delivery_charge= $("#maximum_delivery_charge").val();
         $.ajax({
                type:"POST",
                url: getBaseUrl() + "/admin/updatecharge"+id,
                headers: {
                    Authorization: "Bearer " + getToken("admin")
                },
                data: {
                    minimum_delivery_charge: minimum_delivery_charge,
                    upto9km_charge: upto9km_charge,
                    upto15km_charge: upto15km_charge,
                    upto24km_charge: upto24km_charge,
                    maximum_delivery_charge: maximum_delivery_charge 
                },
            success:function(data){
                   
            }
        });
    });


    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });



});
</script>
