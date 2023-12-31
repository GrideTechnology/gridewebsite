@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('Owner') }} @stop

@section('styles')
@parent
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet"  type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/layout/css/service-master.css')}}">

    <style>
        .newowner{
            color: red;
            font-size: 10px;
            padding: 5px;
            border-radius: 50%;
            background: #eee9e9;
        }
    </style>
@stop

@section('content')
@include('common.admin.includes.image-modal')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">{{ __('Owners') }}</span>
            <h3 class="page-title">{{ __('Owners') }} {{ __('List') }}</h3>
        </div>
    </div>
    <div class="row mb-4 mt-20">
        <div class="col-md-12">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0 pull-left">{{ __('Owners') }}</h6>

                     <a href="javascript:;" class="btn btn-success pull-right add"><i class="fa fa-plus"></i> {{ __('Add New') }} {{ __('Owner') }}</a>

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
                        <th data-value="id">{{ __('admin.id') }}</th>
                        <th data-value="first_name">{{ __('admin.first_name') }}</th>
                        <th data-value="first_name">{{ __('admin.last_name') }}</th>
                        <th data-value="email">{{ __('admin.email') }}</th>
                        <th data-value="mobile">Phone</th>
                        <th data-value="status">{{ __('admin.status') }}</th>
                        <th>{{ __('admin.action') }}</th>
                    </tr>
                 </thead>


                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-modal-lg documentdetails" tabindex="-1" role="basic" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-container">

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
showLoader();
$(document).ready(function() {

    var url = getBaseUrl() + "/admin/owner";
    

    $('.add').on('click', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/owner/create') }}", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

    $('body').on('click', '.edit', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/owner/') }}/"+$(this).data('id')+"/edit", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

   table = table.DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": url,
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
            { "data": "id"  ,render: function (data, type, row, meta) {
               return meta.row + meta.settings._iDisplayStart + 1;
                }
             },
            { "data":  "first_name" },
            { "data":  "last_name" },
            { "data": function (data, type, dataToSet) {
                if({{Helper::getEncrypt()}} == 1){
                    return protect_email(data.email)
                }
                else{
                    return data.email
                }

            } },
            { "data": function (data, type, dataToSet) {                
                if({{Helper::getEncrypt()}} == 1){
                    return protect_number(data.phone);
                }
                else{
                    return data.phone;
                }    
            } },
           /* { "data": "id" ,render: function (data, type, rows) {
            var service_name='';
                        $.each( rows.city_service, function( key, row ) {
                            service_name +=row.admin_service.display_name+"<br>";
                      });
               return service_name;
             }
            },*/
            { "data": "status" ,render: function (data, type, row) {
                if(data ==1){
                    return "Active";
                }else{
                    return "Inactive <span class='newowner'>New</span>";
                }
            }
            },
            { "data": function (data, type, row) {


                    var button=`<div class="input-group-btn action_group"> <li class="action_icon"> 
                    <button type="button"class="btn btn-info btn-block "data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true" title="View"></i></button>
                    <ul class="dropdown-menu">
                    <li><a href="javascript:;" data-id="` + data.id + `" data-value="` + data.status + `" class="dropdown-item status"><i class="fa fa-plus"></i>&nbsp;Status</a> </li>
                   <li><a href="javascript:;" data-id="` + data.id + `" class="dropdown-item edit"><i class="fa fa-edit"></i> Edit</a> </li> 
                    <li><a href="javascript:;" data-id="` + data.id + `" class="dropdown-item delete"><i class="fa fa-trash"></i>&nbsp;Delete</a> </li> 
                    </ul> </li></div>`;
                 return  button;
                


                // if({{Helper::getDemomode()}} != 1)
                // return " <button onclick='myFunction("+JSON.stringify(row)+")' data-toggle='modal' data-target='#service_type_2' class='btn btn-block price'>Commission</button> <button data-id='"+data+"' class='btn btn-block btn-success edit'>Edit</button> <button data-id='"+data+"' class='btn btn-block btn-danger delete'>Delete</button>";
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

    $('body').on('click', '.delete', function() {
        var id = $(this).data('id');
        var value = $(this).data('value');
        var url = getBaseUrl() + "/admin/owner/"+id+"/delete";
        $.ajax({
            type:"delete",
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

    $('body').on('click', '.status', function() {
        var id = $(this).data('id');
        var value = $(this).data('value');

         $(".status-modal").modal("show");
            $(".status-modal-btn")
                .off()
                .on("click", function() {


                    var url = getBaseUrl() + "/admin/owner/"+id+'/updateStatus?status='+value;

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

} );
</script>

@stop