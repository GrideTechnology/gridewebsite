@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('Add') }} {{ __($type) }} @stop

@section('styles')
@parent
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet"  type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css')}}" />

    <style>
        #data-table th{
            width:100%!important;
            white-space: nowrap;
        }
    </style>
@stop

@section('content')
@include('common.admin.includes.image-modal')
<input type="hidden" name="type" value="{{$type}}">
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">{{ __('Restaurant Users') }} </span>
            <h3 class="page-title">{{ __('Restaurant Users List') }}</h3> 
        </div>
    </div>
    <div class="row mb-4 mt-20">
        <div class="col-md-12">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0 pull-left">{{ __('Restaurant Users') }}</h6>
                   
                        <!-- @if($type == "Account")
                            <a href="javascript:;" class="btn btn-success pull-right add"><i class="fa fa-plus"></i> {{ __('Add New') }} {{ __($type) }} {{ __('Manager') }}</a>
                        @else
                            <a href="javascript:;" class="btn btn-success pull-right add"><i class="fa fa-plus"></i> {{ __('Add New') }} {{ __($type) }}</a>
                        @endif -->
                    
               </div>

                <div class="col-md-12">
                    <div class="note_txt">
                        @if(Helper::getDemomode() == 1)
                        <p>** Demo Mode : {{ __('admin.demomode') }}</p>
                        <span class="pull-left">(*personal information hidden in demo)</span>
                        @endif
               </div>
                </div>

                <table id="data-table" class="table table-hover table_width display">
                <thead>
                    <tr>
                        <th data-value="id">#</th>
                        <th data-value="name">First Name</th>
                        <th data-value="name">Last Name</th>
                        <th data-value="email">Email</th>
                        <th data-value="mobile">Phone Number</th>
                        <th data-value="Service Type">Serive Type</th>
                        <th data-value="size">Grocery Size</th>
                        <th data-value="Restaurant Name">Restaurant Name</th>
                        <th data-value="Restaurant Phone">Restaurant Phone</th>
                        <th data-value="Restaurant address">Restaurant Address</th>
                        <th data-value="Restaurant address">Company Name</th>
                        <th data-value="Gride Type">Gride Type</th>
                        <th data-value="tax company">Tax Company Name</th>
                        <th data-value="tax ein">Tax Ein</th>
                        <th data-value="payment">Payment User First Name</th>
                        <th data-value="payment">Payment User Last Name</th>
                        <th data-value="payment">Payment User Bank Name</th>
                        <th data-value="payment">Payment User Account Number</th>
                        <th data-value="payment">Payment User Routing Number</th>
                    </tr>
                 </thead>


                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
@parent

<script src="{{ asset('assets/plugins/data-tables/js/buttons.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/buttons.html5.min.js')}}"></script>
<script src = "{{ asset('assets/plugins/cropper/js/cropper.js')}}" > </script> 
<script src = "{{ asset('assets/layout/js/crop.js')}}" > </script> 
<script>
var tableName = '#data-table';
var table = $(tableName);
$(document).ready(function() {

/*if("{{$type}}"=="Admin"){
    
    $.ajax({
        type:"GET",
        url:getBaseUrl() + "/admin/role_list",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success:function(data){
            console.log(data);
            var html="";
           if(data.responseData.length==0){
           
            alertMessage("Note","Please create a Role Type !", "warning");
            $(".add").css("pointer-events",'none');
           }
           
            
            
        }
    });

}*/
    var url = getBaseUrl() + "/admin/RestaurantUserlist";
    var keys = {id: "S.No.", name: "Admin Name", email: "Admin Email", mobile: "Mobile", status: "Status"};

    datatable_export(url, keys, {{Helper::getEncrypt()}});

    $('.add').on('click', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/subadmin/create', [$type]) }}", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

    $('body').on('click', '.edit', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/subadmin/') }}/"+$(this).data('id')+"/edit/{{$type}}", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });
    table = table.DataTable( {
        "processing": true,
        "serverSide": true,
        "aoColumnDefs": [{ "bSortable": false, "aTargets": [5]}],
        "ajax": {
            "url": getBaseUrl() + "/admin/RestaurantUserlist",
            "type": "GET",
            'beforeSend': function (request) {
                showLoader();
            },
            "headers": {
                "Authorization": "Bearer " + getToken("admin")
            },data: function(data){
                var info = $(tableName).DataTable().page.info();
                delete data.columns;

                data.page = info.page + 1;
                data.search_text = data.search['value']; 
                data.order_by = $(tableName+' tr').eq(0).find('th').eq(data.order[0]['column']).data('value');
                data.order_direction = data.order[0]['dir'];
                

                
            },
            dataFilter: function(data){

                var json = parseData( data );

                json.recordsTotal = json.responseData.total;
                json.recordsFiltered = json.responseData.total;
                json.data = json.responseData.data;
                hideLoader();
                return JSON.stringify( json ); // return JSON string
            }

        },
        "columns": [
            { "data": "id" ,render: function (data, type, row, meta) {
               return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            { "data": "first_name_new" },
            { "data": "last_name_new" },
            { "data": function (data, type, dataToSet) {
                if({{Helper::getEncrypt()}} == 1){
                    return protect_email(data.email_new)
                }
                else{
                    return data.email_new
                }

            } },
            { "data": function (data, type, dataToSet) {
                if({{Helper::getEncrypt()}} == 1){
                    return '+'+(data.country_code  ?  data.country_code:'91')+ protect_number(data.phone_new);
                }
                else{
                    return '+'+(data.country_code?data.country_code:'91')+ data.phone_new;
                }
            } },
            { "data": "service_radio" },
            { "data": "size" },
            { "data": "restro_name" },
            { "data": function (data, type, dataToSet) {
                if({{Helper::getEncrypt()}} == 1){
                    return '+'+(data.country_code  ?  data.country_code:'91')+ protect_number(data.restro_phone);
                }
                else{
                    return '+'+(data.country_code?data.country_code:'91')+ data.restro_phone;
                }
            } },
            { "data": "restro_company_name" },
            { "data": "cars_type" },
            { "data": "tax_company_name" },
            { "data": "tax_FEIN" },
            { "data": "payment_firstname" },
            { "data": "payment_lastname" },
            { "data": "payment_bankname" },
            { "data": "acc_number" },
            { "data": "payment_ach_number" },
            { "data": function (data, type, row) {
               // console.log(data); 
                if(data.status ==1){
                    var status ="Disable";
                }else{
                    var status="Enable";
                }
                
                    var button='<div class="input-group-btn action_group"> <li class="action_icon"> <button type="button"class="btn btn-info btn-block "data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true" title="View"></i></button>'+
                           '<ul class="dropdown-menu"><li > <a class="dropdown-item status" data-id="'+data.id+'" data-value="'+data.status+'"  href="javascript:;"><i class="fa fa-plus" aria-hidden="true" title="Status">&nbsp;'+status+'</i></a></li>';
                            
                           button +='<li><a href="javascript:;" data-id="'+data.id+'" class="dropdown-item edit"><i class="fa fa-edit"></i> Edit</a> </li><li><a href="javascript:;" data-id="'+data.id+'" class="dropdown-item logs"><i class="fa fa-database"></i> Logs</a> </li>';

                           button +='<li><a href="javascript:;" data-id="'+data.id+'" data-sab_url="/admin/subadmin/'+data.id+'" class="dropdown-item delete-record"><i class="fa fa-trash"></i>&nbsp;Delete</a> </li>';
                            
                            button +='</ul> </li></div>';
                         return  button;  
                

            }}

        ],
        responsive: true,
        paging:true,
            info:true,
            lengthChange:false,
            dom: 'Bfrtip',
            buttons: [{
               extend: "copy",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }, {
               extend: "csv",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }, {
               extend: "excel",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }, {
               extend: "pdf",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }],"drawCallback": function () {
    
                var info = $(this).DataTable().page.info();
                if (info.pages<=1) {
                   $('.dataTables_paginate').hide();
                   $('.dataTables_info').hide();
                }else{
                    $('.dataTables_paginate').show();
                    $('.dataTables_info').show();
                }
            }
    } );

    // $('body').on('click', '.delete', function() {
    //     var id = $(this).data('id');
    //     var url = getBaseUrl() + "/admin/subadmin/"+id;
    //     deleteRow(id, url, table);
    // });

    $('body').on('click', '.status', function() {
        var id = $(this).data('id');
        var value = $(this).data('value');

         $(".status-modal").modal("show");
            $(".status-modal-btn")
                .off()
                .on("click", function() {
                
                    
                    var url = getBaseUrl() + "/admin/subadmin/"+id+'/updateStatus?status='+value;

                    $.ajax({
                        type:"GET",
                        url: url,
                        headers: {
                            Authorization: "Bearer " + getToken("admin")
                        },
                        'beforeSend': function (request) {
                            showInlineLoader();
                        },
                        success:function(data){
                            $(".status-modal").modal("hide");
                            
                            var info = $('#data-table').DataTable().page.info();
                            table.order([[ info.page, 'asc' ]] ).draw( false );
                            alertMessage("Success", data.message, "success");
                            hideInlineLoader();
                        }
                    });
                });
        
    });

    $('body').on('click', '.logs', function(e) {
        e.preventDefault();
        var type = "Admin";
        $.get("{{ url('admin/logs/') }}/"+$(this).data('id')+"/"+type, function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

} );
</script>
@stop
