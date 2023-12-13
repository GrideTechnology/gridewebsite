@extends('common.admin.layout.base')
{{ App::setLocale(isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en') }}

@section('title') {{ __('Cars') }} @stop

@section('styles')
    @parent
    <link rel="stylesheet" type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/dataTables.bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/responsive.bootstrap.min.css') }}">
    <style>
        .modal-header {
            padding: 10px;
        }

        .btn.btn-white {
            border: 1px solid #0a65c5;
            color: #ffffff;
            background: #007bff;
        }

        #service_type .form-row>.col,
        .form-row>[class*=col-] {
            padding-right: 15px;
            padding-left: 15px;
        }

        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
            background: #f5f5f5;
            border-bottom: 1px solid #d0d0d0;
            padding-top: 30px;
            padding-bottom: 0px;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn.btn-circle {
            border: 2px solid #007bff;
            background: #ffffff;
            color: #007bff;
        }

        .btn.btn-default.btn-circle.btn-primary {
            background: #007bff;
            color: #ffffff;
        }

        /* Check Box */
        .span_pseudo,
        .chiller_cb span:before,
        .chiller_cb span:after {
            content: "";
            display: inline-block;
            background: #fff;
            width: 0;
            height: 0.2rem;
            position: absolute;
            transform-origin: 0% 0%;
        }

        .chiller_cb {
            position: relative;
            height: 2.4rem;
            display: flex;
            align-items: center;
        }

        .chiller_cb input {
            display: none;
        }

        .chiller_cb input:checked~span {
            background: #007bff;
            border-color: #007bff;
        }

        .chiller_cb input:checked~span:before {
            width: 1rem;
            height: 0.15rem;
            transition: width 0.1s;
        }

        .chiller_cb input:checked~span:after {
            width: 0.4rem;
            height: 0.15rem;
            transition: width 0.1s;
            transition-delay: 0.2s;
        }

        .chiller_cb input:disabled~span {
            background: #ececec;
            border-color: #dcdcdc;
        }

        .chiller_cb input:disabled~label {
            color: #dcdcdc;
        }

        .chiller_cb input:disabled~label:hover {
            cursor: default;
        }

        .chiller_cb label {
            padding-left: 2rem;
            position: relative;
            z-index: 2;
            cursor: pointer;
            margin-bottom: 0;
        }

        .chiller_cb span {
            display: inline-block;
            width: 1.2rem;
            height: 1.2rem;
            border: 2px solid #ccc;
            position: absolute;
            left: 0;
            transition: all 0.8s;
            z-index: 1;
            box-sizing: content-box;
        }

        .chiller_cb span:before {
            transform: rotate(-55deg);
            top: 1rem;
            left: 0.37rem;
        }

        .chiller_cb span:after {
            transform: rotate(35deg);
            bottom: 0.35rem;
            left: 0.2rem;
        }

        .select_city,
        .select_country {
            height: 333px;
            overflow-x: auto;
            background: #FFF;
            padding: 0px;
        }

        .select_country.nav-wrapper {
            height: 340px;
            overflow-x: auto;
            background: #FFF;
            padding: 0px;
            margin-top: 0px;
        }

        .select_city .country_list_style {
            font-size: 16px;
            font-weight: 600;
            padding: 12px 10px;
            background: #007bff;
            color: #FFF;
            margin-bottom: 0px;
            width: 100%;
            text-transform: uppercase;
        }

        .modal-body {
            /* padding: 0; */
        }

        /* Accordion */
        #accordion-style-1 .btn-link {
            text-decoration: none !important;
            font-size: 16px;
            font-weight: 500;
            padding-left: 10px;
        }

        .country_accordion h4 {
            margin-bottom: 25px;
            font-size: 24px;
            color: #007bff;
            text-transform: uppercase;
            font-weight: 500;
            padding: 10px;
        }

        .country_accordion {
            border: 1px solid #dedede;
            background-color: #fff;
            margin-bottom: 25px;
            padding: 20px;
            border: none;
            -webkit-box-shadow: 0 2px 5px 0 rgba(212, 212, 212, 0.16), 0 2px 10px 0 rgba(189, 189, 189, 0.12);
            box-shadow: 0 2px 5px 0 rgba(212, 212, 212, 0.16), 0 2px 10px 0 rgba(189, 189, 189, 0.12);
        }

        .card {
            margin-top: 4px;
        }

        .country_accordion .card {
            border: 1px solid #e2e2e2;
            box-shadow: none;
        }

        .collapsed {
            color: #252121;
            background: #ececec;
        }

        #accordion-style-1 .card-body {
            border-top: 2px solid #e6e6e6;
            background: #f7f7f7;
        }

        #accordion-style-1 .card-header .btn.collapsed .fa.main {
            display: none;
        }

        #accordion-style-1 .card-header .btn .fa.main {
            background: #007b5e;
            padding: 13px 11px;
            color: #ffffff;
            width: 35px;
            height: 41px;
            position: absolute;
            left: -1px;
            top: 10px;
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
            display: block;
        }

        @media (min-width: 768px) {
            .modal-xl {
                width: 90%;
                max-width: 1200px;
            }
        }

        #service_type,
        #service_type_2 {
            z-index: 10000;
            background: rgba(0, 0, 0, 0.39);
        }

        .btn-circle {
            width: 50px;
            height: 50px;
            text-align: center;
            padding: 1px 0;
            font-size: 30px;
            line-height: 1.428571429;
            border-radius: 30px;
        }

        .stepwizard-row:before {
            top: 53px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 3px;
            background-color: #ccc;
            z-order: 0;
        }

        .full-section-first .border-rightme {
            padding-right: 5px;
            padding-left: 30px;
            border-right: 2px solid #dcdcdc;
            padding-top: 20px;
        }

        .full-section-first .border-leftme {
            padding-right: 5px;
            padding-left: 30px;
            border-right: 2px solid #dcdcdc;
            padding-top: 20px;
        }

        .txt_clr_4 {
            color: #5a5a5a;
            font-size: 12px;
            opacity: 0.8;
        }

        .setup-content {
            border: 0px;
            background: #ffffff;
        }

        .control-label {
            font-size: 18px;
            color: #007bff;
            font-weight: 500;
            border-bottom: 1px dashed #cecece;
        }

        .box-card .control-label {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 20px;
            font-weight: 500;
            border-bottom: 1px dashed #cecece;
        }

        .btn-danger {
            background-color: #f44236;
            border-color: #f44236;
        }

        .custom-heading.col-md-12 {
            margin-top: 15px;
        }

        .custom-heading.col-md-12 h4 {
            background: #0000;
            color: #007bff;
            margin-bottom: 10px;
            padding: 0px;
        }

        #accordionExample {
            width: 100%;
        }

        .nav-wrapper::-webkit-scrollbar {
            width: 10px;
            background-color: #f7f7f7;
        }

        .nav-wrapper::-webkit-scrollbar-thumb {
            border-radius: 0px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #dedede;
            border-radius: 5px;
        }

        .card-header:first-child {
            border-radius: 0rem 0rem 0 0;
        }

        #country_serv_type_wrapper,
        #country_serv_type {
            border: 1px solid #f1f1f1;
            padding: 10px;
            background: #f9f9f9;
        }

        .country_accordion .btn {
            padding: 1em 1rem;
            font-size: 1rem;
        }

        .card-header {
            padding: 10px !important;
        }

        #step-1 {
            background: #FFF;
        }

        .stepwizard-step [type=reset],
        [type=submit],
        button,
        html [type=button] {
            -webkit-appearance: none !important;
        }

        .full-section-ser .price_lists_sty {
            height: 410px;
            overflow-x: auto;
            margin-top: 20px;
            padding-right: 25px;
            padding-left: 25px;
            padding-bottom: 25px;
        }

        #step-2 .select_city {
            height: 426px;
            overflow-x: auto;
            background: #FFF;
            padding: 0px;
            margin-top: 20px;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        .modal-header h4 {
            display: inline-block;
            font-size: 24px;
            font-weight: 600;
        }

        .full-section-first {
            border-top: 2px solid #dcdcdc;
            border-bottom: 2px solid #dcdcdc;
        }

        .full-section-ser .border-rightme {
            padding-right: 5px;
            padding-left: 20px;
            border-right: 2px solid #d0d0d0;
        }

        /* Services Type 2 */
        #service_type_2 .box-card.border-rightme {
            padding-right: 5px;
            padding-left: 20px;
        }

        #service_type_2 .select_city,
        .select_country {
            height: 473px;
            overflow-x: auto;
            background: #FFF;
            padding: 0px;
            margin-top: 20px;
        }

        #service_type_2 .pricing-nav.nav-wrapper {
            height: 426px;
            overflow-y: auto;
            padding-top: 35px !important;
            padding-right: 10px !important;
            padding-left: 10px !important;
            overflow-x: hidden;
        }

        #service_type_2 .price_lists_sty {
            height: auto !important;
            overflow-x: auto !important;
            margin-top: 20px;
            padding-right: 25px;
            padding-left: 25px;
            padding-bottom: 25px;
        }

        .heading_detls {
            padding: 5px;
            margin-top: 5px;
        }

        .heading_detls h3 {
            font-size: 20px;
            font-weight: 600;
        }

        nav>.nav.nav-tabs {
            border: none;
            color: #fff;
            background: #272e38;
            border-radius: 0;
        }

        nav>div a.nav-item.nav-link,
        nav>div a.nav-item.nav-link.active {
            border: none;
            padding: 10px 20px;
            color: #343434;
            background: #f3f3f3;
            border-radius: 0;
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 500;
        }

        nav>div a.nav-item.nav-link.active:after {
            content: "";
            position: relative;
            bottom: -50px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: #007bff;
            z-index: 10;
            display: none;
        }

        .tab-content {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            /* border-top:5px solid #007bff; */
        }

        nav>div a.nav-item.nav-link:hover,
        nav>div a.nav-item.nav-link:focus {
            border: none;
            background: #007bff;
            color: #fff;
            border-radius: 0;
            transition: background 0.20s linear;
            padding: 10px 20px;
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 500;
        }

        .full-section-ser {
            border-bottom: 2px solid #dcdcdc !important;
            border-top: 2px solid #f3f3f3;
        }

        .list-group-item.active {
            color: #373737;
            background-color: #f3f3f3;
            border-color: #dcdcdc;
        }

        .list-group-item.active span {
            font-weight: 600;
        }

        .col-md-12v {
            max-width: 100%;
        }

        .modal .card-header {
            padding: 15px !important;
        }

        .select2-container {
            display: block;
        }
        span.select2-dropdown.select2-dropdown--below {
            width: 100% !important;
            max-width: 223px !important;
        }
    </style>
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
                <span class="text-uppercase page-subtitle">{{ __('Cars') }}</span>
                <h3 class="page-title">{{ __('Cars') }} </h3>
            </div>
        </div>
        <div class="row mb-4 mt-20">
            <div class="col-md-12">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0 pull-left">{{ __('Cars') }}</h6>
                        <a href="javascript:;" class="btn btn-success pull-right add"><i class="fa fa-plus"></i>
                            Add Car</a>
                    </div>

                    <div class="col-md-12v">
                        <div class="note_txt">
                            @if (Helper::getDemomode() == 1)
                                <p>** Demo Mode : {{ __('admin.demomode') }}</p>
                                <span class="pull-left">(*personal information hidden in demo)</span>
                            @endif
                        </div>
                    </div>

                    <table id="data-table" class="table table-hover table_width display lightgallery">
                        <thead>
                            <tr>
                                <th data-value="id">@lang('admin.id')</th>
                                <th data-value="vehicle_name">Vehicle Type</th>
                                <th data-value="vehicle_name">Model</th>
                                <th data-value="plate_number">Plate Number</th>
                                <th data-value="owner">Owner</th>
                                <th data-value="status">@lang('admin.status')</th>
                                <th>@lang('admin.action')</th>
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

    <script src="{{ asset('assets/plugins/data-tables/js/buttons.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/cropper/js/cropper.js') }}"> </script>
    <script src="{{ asset('assets/layout/js/crop.js') }}"> </script>
    <script>
        /*function CryptoJSAesEncrypt(passphrase, plain_text){

        var salt = CryptoJS.lib.WordArray.random(256);
        var iv = CryptoJS.lib.WordArray.random(16);
        //for more random entropy can use : https://github.com/wwwtyro/cryptico/blob/master/random.js instead CryptoJS random() or another js PRNG

        var key = CryptoJS.PBKDF2(passphrase, salt, { hasher: CryptoJS.algo.SHA512, keySize: 64/8, iterations: 999 });

        var encrypted = CryptoJS.AES.encrypt(plain_text, key, {iv: iv});

        var data = {
            ciphertext : CryptoJS.enc.Base64.stringify(encrypted.ciphertext),
            salt : CryptoJS.enc.Hex.stringify(salt),
            iv : CryptoJS.enc.Hex.stringify(iv)
        }

        return JSON.stringify(data);
    }

    console.log(CryptoJSAesEncrypt('FbcCY2yCFBwVCUE9R+6kJ4fAL4BJxxjd', 'Hello World'));*/

        function CryptoJSAesDecrypt(passphrase, encrypted_json_string) {
            var obj_json = encrypted_json_string;
            var encrypted = obj_json.ciphertext;
            var salt = CryptoJS.enc.Hex.parse(obj_json.salt);
            var iv = CryptoJS.enc.Hex.parse(obj_json.iv);

            var key = CryptoJS.PBKDF2(passphrase, salt, {
                hasher: CryptoJS.algo.SHA1,
                keySize: 32 / 8,
                iterations: 999
            });

            //var decrypted = CryptoJS.AES.decrypt(encrypted, key, { iv: iv});

            var decrypted = CryptoJS.AES.decrypt(encrypted, key, {
                iv: iv,
                padding: CryptoJS.pad.Pkcs7,
                mode: CryptoJS.mode.CBC

            });

            //console.log(decrypted);

            return decrypted.toString(CryptoJS.enc.Utf8);
        }


        var tableName = '#data-table';
        var table = $(tableName);
        $(document).ready(function() {

            $('.select2').select2();

            $("#myInputList").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".list-group a").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $('.add').on('click', function(e) {
                e.preventDefault();
                $.get("{{ url('admin/cars/create') }}", function(data) {
                    $('.crud-modal .modal-container').html("");
                    $('.crud-modal .modal-container').html(data);
                });
                $('.crud-modal').modal('show');
            });

            $('body').on('click', '.edit', function(e) {
                e.preventDefault();
                $.get("{{ url('admin/cars/') }}/" + $(this).data('id') + "/edit", function(data) {
                    $('.crud-modal .modal-container').html("");
                    $('.crud-modal .modal-container').html(data);
                });
                $('.crud-modal').modal('show');
            });

            $('body').on('click', '.images', function(e) {
                e.preventDefault();
                $.get("{{ url('admin/cars/') }}/" + $(this).data('id') + "/images", function(data) {
                    $('.crud-modal .modal-container').html("");
                    $('.crud-modal .modal-container').html(data);
                });
                $('.crud-modal').modal('show');
            });

      

            table = table.DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": getBaseUrl() + "/admin/cars",
                    "type": "GET",
                    'beforeSend': function(request) {
                        showLoader();
                    },
                    "headers": {
                        "Authorization": "Bearer " + getToken("admin")
                    },
                    data: function(data) {

                        var info = $(tableName).DataTable().page.info();
                        delete data.columns;

                        data.page = info.page + 1;
                        data.search_text = data.search['value'];
                        data.order_by = $(tableName + ' tr').eq(0).find('th').eq(data.order[0][
                            'column']).data('value');
                        data.order_direction = data.order[0]['dir'];
                    },
                    dataFilter: function(data) {
                        var json = parseData(data);
                        var encdata = CryptoJSAesDecrypt('FbcCY2yCFBwVCUE9R+6kJ4fAL4BJxxjd', json
                            .responseData);
                        var pdata = parseData(encdata);
                        var sdata = {};
                        sdata.recordsTotal = pdata.total;
                        sdata.recordsFiltered = pdata.total;
                        sdata.data = pdata.data;
                        hideLoader();
                        return JSON.stringify(sdata);


                        /*var json = parseData( data );

                        json.recordsTotal = json.responseData.total;
                        json.recordsFiltered = json.responseData.total;
                        json.data = json.responseData.data;

                        return JSON.stringify( json ); // return JSON string*/
                    }
                },
                "columns": [{
                        "data": "id",
                        render: function(data, type, row, meta) {

                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    { "data": "type_name" },
                    {
                        "data": "model"
                    },
                    {
                        "data": "plate_number"
                    },
                    {
                        "data": function(data, type, row) {

                            return data.first_name+' '+data.last_name;
                        }
                    },
                    {
                        "data": "status",
                        render: function(data, type, row) {

                            if (data == 1) {
                                return "Enable";
                            } else {
                                return "Disable <span class='newowner'>New</span>";
                            }
                        }
                    },
                    {
                        "data": function(data, type, row) {

                            if (data.status == 1) {
                                var status = "Disable";
                            } else {
                                var status = "Enable";
                            }
                            if ({{ Helper::getDemomode() }} != 1) {

                                var button = `<div class="input-group-btn action_group"> <li class="action_icon">
                    <button type="button"class="btn btn-info btn-block "data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true" title="View"></i></button>
                    <ul class="dropdown-menu">
                    <li><a href="javascript:;" data-id="` + data.id + `" data-value="` + data.status + `" class="dropdown-item status"><i class="fa fa-plus"></i>&nbsp;Status</a> </li>
                    <li><a href="javascript:;" data-id="` + data.id + `" class="dropdown-item edit"><i class="fa fa-edit"></i> Edit</a> </li>
                    <li><a href="javascript:;" data-id="` + data.id + `" class="dropdown-item images"><i class="fa fa-image"></i>&nbsp;Images</a> </li>
                    <li><a href="javascript:;" data-id="` + data.id + `" data-value="` + data.status +
                                    `" data-sab_url="/admin/cars/` + data.id +
                                    `" class="dropdown-item delete-record delete"><i class="fa fa-trash"></i>&nbsp;Delete</a> </li> </ul> </li></div>`;
                                return button;
                            } else {
                                return '<h6 style="text-align: center;">-</h6>';
                            }
                        }
                    }

                ],
                responsive: true,
                paging: true,
                info: true,
                lengthChange: false,
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
                }],
                "drawCallback": function() {

                    var info = $(this).DataTable().page.info();
                    if (info.pages <= 1) {
                        $('.dataTables_paginate').hide();
                        $('.dataTables_info').hide();
                    } else {
                        $('.dataTables_paginate').show();
                        $('.dataTables_info').show();
                    }
                }
            });

        });

$('body').on('click', '.delete', function() {
        var id = $(this).data('id');
        var value = $(this).data('value');
        var url = getBaseUrl() + "/admin/cars/"+id+"/delete";
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


                        var url = getBaseUrl() + "/admin/cars/" + id + '/updateStatus?status=' +
                            value;

                        $.ajax({
                            type: "GET",
                            url: url,
                            headers: {
                                Authorization: "Bearer " + getToken("admin")
                            },
                            'beforeSend': function(request) {
                                showInlineLoader();
                            },
                            success: function(data) {
                                $(".status-modal").modal("hide");

                                var info = $('#data-table').DataTable().page.info();
                                table.order([
                                    [info.page, 'asc']
                                ]).draw(false);
                                alertMessage("Success", data.message, "success");
                                hideInlineLoader();
                            }
                        });
                    });

            });
    </script>
@stop

<!-- Modal 2 -->
<div class="modal fade" id="service_type_2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Price Settings</h4>
                <button type="button" class="close" data-dismiss="modal" style="display:inline-block;"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="padding-bottom: 35px;">

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

                <div class="col-md-12">

                    {{-- <div>
                                                <input class="form-control" id="myInputList" type="text" placeholder="Search City..">
                                            </div> --}}
                    <div class="row full-section-ser">
                        {{-- <div class="col-md-4 box-card border-rightme myprice">
                                        </div> --}}
                        <div class="col-md-12 box-card price_lists_sty priceBody">
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</div>
<!-- End Modal 2 -->
