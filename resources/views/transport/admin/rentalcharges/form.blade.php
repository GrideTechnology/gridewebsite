{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">

                @php($action_text=__('Rental Charges'))
           
            <h6 class="m-0"style="margin:10!important;">{{$action_text}}</h6>
        </div>
        <div class="form_pad">
            <form class="validateForm">
 
                <input type="hidden" name="_method" value="PATCH">
 
                <div class="form-row">
                 <div class="form-group col-md-6">
                    <label for="name" class="col-xs-2 col-form-label">Booking Fee</label>
                        <input type="number" class="form-control" id="booking_fee" name="booking_fee" placeholder="Booking Charges" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price"  class="col-xs-2 col-form-label">Insurance Fee</label>
                        <input type="number" class="form-control" id="insurance_fee" name="insurance_fee" placeholder="Insurance Fee" value="" autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Cancellation Fee">Cancellation Fee</label>
                        <input type="text" class="form-control" id="cancellation_fee" name="cancellation_fee" placeholder="Cancellation Fee" value="" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="name" class="col-xs-2 col-form-label">Sales Tax (%)</label>
                        <input type="number" class="form-control" id="sales_tax" name="sales_tax" placeholder="Sales Tax" value="" autocomplete="off">
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
    
$(document).ready(function()
{

  basicFunctions();
        var url = getBaseUrl() + "/admin/rental-charges";
        setData( url );


    $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        rules: {
            booking_fee: { required: true },
            insurance_fee: { required: true },
            sales_tax:{required: true}
        },

        messages: {
            booking_fee: { required: "Booking fee is required." },
            insurance_fee:{required: "Insurance fee is required."},
            sales_tax: { required: "Sales tax is required." },
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

            var url = getBaseUrl() + "/admin/rental-charges";


            $.ajax({
                url: url,
                type: 'post',
                headers: {
                    Authorization: "Bearer " + getToken("admin")
                },
                'beforeSend': function (request) {
                    showInlineLoader();
                },
                data: $('.validateForm').serialize(),
                success: function(data){
                    alertMessage("Success", data.message, "success");
                    hideInlineLoader();
                }
            })

        }
    });

    
});
 </script>