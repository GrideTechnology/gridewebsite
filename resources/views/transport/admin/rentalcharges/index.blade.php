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
    </style>
@stop

@section('content')

    
@include('transport.admin.rentalcharges.form')

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

@stop

