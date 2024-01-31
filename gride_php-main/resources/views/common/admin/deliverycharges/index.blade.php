@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('Delivery Charges') }} @stop

@section('styles')
@parent
    <link rel="stylesheet"  type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/responsive.bootstrap.min.css')}}">
    <style type="text/css">
        .pac-container{
            z-index: 9999999999!important;
        }
        #data-table_filter{
            display:none;
        }
    </style>
@stop

@section('content')
@include('common.admin.includes.image-modal')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">{{ __('Delivery Charges') }}</span>
            <h3 class="page-title">{{ __('Delivery Charges List') }}</h3>
        </div>
    </div>
    <div class="row mb-4 mt-20">
        <div class="col-md-12">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0 pull-left">{{ __('Delivery Charges') }}</h6>

                    <!-- <a href="javascript:;" class="btn btn-success pull-right add"><i class="fa fa-plus"></i> {{ __('store.admin.deliverycharges.add') }}</a> -->


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
                            <th data-value="city_name">City Name</th>
                            <th data-value="store_type">Store Type</th>
                            <th data-value="minimum_delivery_charge">Minimum Delivery</th>
                            <th data-value="5 to 9 Km">5-9 KM Charges</th>
                            <th data-value="10 to 15 Km">10-15 KM Charges</th>
                            <th data-value="16 to 24 Km">16-24 KM Charges</th>
                            <th data-value="maximum_delivery_charge">Maximum Delivery</th>
                            <th data-value="action">Action</th>

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

    $('body').on('click', '.edit', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/delivery-charges/') }}/"+$(this).data('id')+"/edit", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

    table = table.DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": getBaseUrl() + "/admin/deliverycharges",
            "type": "GET",
            'beforeSend': function (request) {
                showLoader();
            },
            "headers": {
                Authorization: "Bearer " + getToken("admin")
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
                console.log(json);
                return JSON.stringify( json ); // return JSON string
            }
        },
        "columns": [
             { "data": "id"  ,render: function (data, type, row, meta) {
               return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "city_name" },
            { "data": "admin_service" },
            { "data": "minimum_delivery_charge" },
            { "data": "upto9km_charge" },
            { "data": "upto15km_charge" },
            { "data": "upto24km_charge" },
            { "data": "maximum_delivery_charge" },
            { "data": "id", render: function (data, type, row) {

                

                    var button=`<div class="input-group-btn action_group"> <li class="action_icon"> 
                    <button type="button"class="btn btn-info btn-block "data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true" title="View"></i></button>
                    <ul class="dropdown-menu">
                   <li><a href="javascript:;" data-id="`+data+`" class="dropdown-item edit"><i class="fa fa-edit"></i> Edit</a> </li>  
                    </ul> </li></div>`;
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
