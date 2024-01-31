@extends('common.web.layout.base')
@section('styles')

@parent
<link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/owl-carousel/css/owl.carousel.min.css')}}"/>
<style>
.top-section {
    color: #2c2e30;
   padding-bottom: 100px !important;
   padding-top: 80px; 

}
h2{
    font-weight: 400;
    font-size: 2.571rem;
    line-height: 1.5;
    color: #575962;
    letter-spacing: 0;

}
.container h3{
    margin-top: 10px;
}
.img-abt-us{
    width: 100%;
    display: block;
    margin: 0 auto;
}
</style>
@stop
@section('content')
<section class="top-section dis-center">
   <div class="container">
        @foreach(Helper::getcmspage() as $k=>$v)
            @if($v->page_name == $type )
                {!!$v->content !!}
            @endif
        @endforeach
   </div>
</section>
@stop
@section('scripts')
@parent

<script>
    $(document).ready(function() {
        $('.menu').hide();
    });
</script>
@stop
