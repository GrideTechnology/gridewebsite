@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<style>
.item-feature {
    background-color: black!important;
 }
 .item-feature p{
    color: #fff;
 }
</style>
@stop
@section('content')
<section id="features">
    <div class="container">
        <div class="heading dis-column">
            <hr>
            <h1 class="text-center"><span class="txt-green">investment page</span></h1>
           
        </div>
      
    </div>
</section>
@stop

<style type="text/css">
    section {
        padding: 120px 0;
    }
    .sec-title h3 {
        padding-bottom: 15px;
        font-size: 30px;
    }
    .sec-content ol li {
        list-style-type: decimal;
        padding: 20px 10px;
    }
    .sec-content ul li {
        list-style-type: disc;
        padding: 5px;
        margin-left: 20px;
        margin-top: 10px;
    }
</style>