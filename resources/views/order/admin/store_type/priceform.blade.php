{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<link rel="stylesheet" href="{{ asset('assets/layout/css/service-master.css')}}">
<div class="row p-2">
    {{-- <div class="col-md-12 box-card border-rightme myprice">

    </div> --}}
    <div class="col-md-12 box-card price_lists_sty priceBody">
        <form class="validateForm" >
            <div class="row mb-2 col_md_3">
                <div class="col-md-4">
                    <label for="feFirstName">Country</label>
                    <select class="form-control select2" name="country_name" id="country_list">

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="feFirstName">State</label>
                    <select class="form-control select2" name="state_name" id="state_list">

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="feFirstName">City</label>
                    <select class="form-control select2" name="city_name" id="city_list">

                    </select>
                </div>
            </div>
            <div class="col-xs-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="true">{{ __('Daily') }}</a>
                    </div>
                </nav>
                <div class="tab-content pricing-nav nav-wrapper" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="daily" role="tabpanel" aria-labelledby="nav-daily-tab">

                        <!-- Pricing for Country -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="hidden" id="countryId" value=""name="country_id">
                                <input type="hidden" id="cityId" value="" name="city_id">
                                <input type="hidden" id="store_type_id" value="" name="store_type_id">
                                <input type="hidden" id="id" value="" name="id">
                                <label for="feFirstName">Delivery Charges</label>
                                <input class="form-control decimal" type="text" value="" name="delivery_charge" id="delivery_charge" placeholder="Delivery Charges" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Minimum Delivery Charges</label>
                                <input class="form-control decimal" type="text" value="" name="minimum_delivery_charge" id="minimum_delivery_charge" placeholder="Minimum Delivery Charges" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Maximum Delivery Charges</label>
                                <input class="form-control decimal" type="text" value="" name="maximum_delivery_charge" id="maximum_delivery_charge" placeholder="Maximum Delivery Charges" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Minimum Surge Delivery Charge</label>
                                <input class="form-control decimal" type="text" value="" name="minimum_surge_delivery_charge" id="minimum_surge_delivery_charge" placeholder="Minimum Surge Delivery Charge" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Maximum Surge Delivery Charge</label>
                                <input class="form-control decimal" type="text" value="" name="maximum_surge_delivery_charge" id="maximum_surge_delivery_charge" placeholder="Maximum Surge Delivery Charge" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Service Fee</label>
                                <input class="form-control decimal" type="text" value="" name="service_fee" id="service_fee" placeholder="Service Fee" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Cancellation Fee</label>
                                <input class="form-control decimal" type="text" value="" name="cancellation_fee" id="cancellation_fee" placeholder="Cancellation Fee" min="0">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="feFirstName">Commission Fee</label>
                                <input class="form-control decimal" type="text" value="" name="commission_fee" id="commission_fee" placeholder="Commission Fee" min="0">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="feFirstName">Small order Fee</label>
                                <input class="form-control decimal" type="text" value="" name="small_order_fee" id="small_order_fee" placeholder="Commission Fee" min="0">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="col-xs-10">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-success ">{{ __('Submit') }}</button>
                                    <button type="reset" class="btn btn-danger cancel">{{ __('Cancel') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>

<script>
    old_country_id = null;
    old_value = null;

    $('body').on('change', '#country_list', function() {
        var value = $(this).val();   
        
        var stateurl = getBaseUrl() + "/admin/transport/getcompanystatelist/"+value;
        $('#state_list').empty();
        $.ajax({
            url: stateurl,
            type: "GET",
            async: false,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            beforeSend: function(request) {
                showInlineLoader();
            },
            success: function(data) {                            
                if(data.statusCode == 200){
                    // console.log(data.responseData);
                    var stateList = '';
                    stateList += `<option value="">select</option>`;
                    $.each(data.responseData, function(key, state) {
                        stateList += `<option value=`+state.id+`>`+state.state_name+`</option>`;
                        // var newOption = new Option(country.country_name, country.id, false, false);                                                                        
                    });
                    // $("#state_list").val($("#state_list option:first").val());
                    // $('select[name=state_name] option:eq(2)').attr('selected', 'selected');
                    $('#state_list').append(stateList);
                    $("#state_list").prop("selectedIndex", 1).val();
                    $("#state_list").trigger('change');
                }
                hideInlineLoader();
            }
        });

        // Do not touch below code as it's old code of country state city categorization
        // $('#state_list').html("");
        // $.each(state[value], function(key, stateData) {            
        //     var newOption = new Option(stateData.state_name, stateData.id, false, false);
        //     $('#state_list').append(newOption).trigger('change');
        // });
        // $('#city_list').html("");
        // $.each(city[value], function(key, cityData) {
        //     var newOption = new Option(cityData.city_name, cityData.id, false, false);
        //     $('#city_list').append(newOption).trigger('change');
        // });

    });

    $('body').on('change','#state_list',function(){
        var value = $(this).val();
        // $('#state_list').html(`<option value="">select</option>`);
        // $('#city_list').html(`<option value="">select</option>`);
        var cityurl = getBaseUrl() + "/admin/transport/getcompanycitylist/"+value;
        $('#city_list').empty();
        $.ajax({
            url: cityurl,
            type: "GET",
            async: false,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            beforeSend: function(request) {
                showInlineLoader();
            },
            success: function(data) {                            
                if(data.statusCode == 200){
                    // console.log(data.responseData);
                    var cityList = '';
                    cityList += `<option value="">select</option>`;
                    $.each(data.responseData, function(key, city) {            
                        cityList += `<option value=`+city.id+`>`+city.city_name+`</option>`;
                        // var newOption = new Option(country.country_name, country.id, false, false);                                                                        
                    });
                    $('#city_list').append(cityList);
                    $("#city_list").prop("selectedIndex", 1).val();
                    $("#city_list").trigger('change');
                }
                hideInlineLoader();
            }
        });
    });

    $('body').on('change', '#city_list', function() {
        var country_id = $("#country_list").val();
        var state_id = $("#state_list").val();
        var value = $(this).val();
        if(value && country_id && state_id && old_value != value){
            old_value = value;
            getData(price_id,value,country_id)
        }

    });
    $('.select2').select2();
    basicFunctions();
    var id={{$id}};
    price_id = id;
  $.ajax({
        url: getBaseUrl() + "/admin/store/get-store-price",
        type: "GET",
        async : false,
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success: function(data) {            
            var countryCityList ='';

            var countryurl = getBaseUrl() + "/admin/transport/getcompanycountrylist";
            $.ajax({
                url: countryurl,
                type: "GET",
                async: false,
                headers: {
                    Authorization: "Bearer " + getToken("admin")
                },
                beforeSend: function(request) {
                    showInlineLoader();
                },
                success: function(data) {                            
                    if(data.statusCode == 200){
                        // console.log(data.responseData);                                
                        var countryList = '';
                        $.each(data.responseData, function(key, country) {            
                            countryList += `<option value=`+country.id+`>`+country.country_name+`</option>`;
                            // var newOption = new Option(country.country_name, country.id, false, false);                                                                        
                        });
                        $('#country_list').append(countryList).trigger('change');
                    }
                    hideInlineLoader();
                }
            });
            // state = [];
            // city = [];
            // var data = parseData(data);            
            // var country_list = $('#country_list');            
            // // $.each(data.responseData, function(key,val) {
            // //     console.log(val.id);
            // // });
            // $.each(data.responseData, function(key, country) {          
            //     // console.log(country);
            //     var newOption = new Option(country.country_name, country.id, false, false);
            //     $('#country_list').append(newOption).trigger('change');                    
            //     if (country.state) {//company_country_states
            //         state[country.id] = country.state//company_country_states                    
            //     }
            //     // console.log(state);
            //     if (country.city) {//company_country_cities
            //         city[country.id] = country.city//company_country_cities
            //     }
            // });
            // $.each( data.responseData,function(key,value){                
            //     countryCityList += `<label class="country_list_style">`+value.country_name+`<span class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i></span></label>`;
            //     $.each( value.city,function(key1,value1){
            //         if(value1.city!=null){
            //             if(key == 0 && key1 ==0){
            //                 var cityActiveClass ="active";
            //                 $("#countryId").val(value.id);//country
            //                 $("#cityId").val(value1.city.id);
            //                 $("#store_type_id").val(id);
            //                 getData(id,value1.city.id,value.id);//country
            //             }else{
            //                 var cityActiveClass ='';
            //             }
            //         countryCityList +=  `<a href="#" class="list-group-item cityActiveClass  `+cityActiveClass+`" onclick="getData(`+id+`,`+value1.city.id+`,`+value.country.id+`)" id="`+value1.city.id+`"><span>`+value1.city.city_name+`</span></a>`;
            //         }                
            //     });
            // });
            // $('.myprice').empty().append(`<div class="form-group">
            //         <div class="select_city nav-wrapper"><div class="list-group">
            //             `+countryCityList+`
            //         </div>
            //         </div>
            //     </div>
            // `);
        }
    });

function getData(storeId,cityId,countryId){
 $('#delivery_charge,#tax,#id').val('');   
$('.cityActiveClass').removeClass("active");
$('#'+cityId).addClass(" active");
var url = getBaseUrl() + "/admin/store/pricing/"+storeId+"/"+cityId
$("#cityId").val(cityId);
$("#countryId").val(countryId);
$("#store_type_id").val(storeId);
setData( url ); 
}

$('.validateForm').validate({
		errorElement: 'span', //default input error message container
		errorClass: 'help-block', // default input error message class
		focusInvalid: false, // do not focus the last invalid input
		rules: {
            delivery_charge: { required: true },
            tax: { required: true },
        },

		messages: {
			// vehicle_type: { required: "Vehicle Type is required." },
			delivery_charge: { required: "Delivery charge  is required." },
            tax: { required: "Tax is required." },
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

            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }
             var url = getBaseUrl() + "/admin/store/pricings";
            saveRow( url, table, data);

		}
    });

    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });




</script>
