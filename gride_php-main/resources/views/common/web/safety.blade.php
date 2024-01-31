@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/safety.css')}}"/>
<style>
    @media(max-width: 767px){
  .grid-main {
      display: flex;
      flex-wrap: wrap;
  }
  .top-section-main {
    padding-top: 30px;
}
.grid-main2 {
    display: flex;
    flex-wrap: wrap;
}
.grid-main3 {
    display: flex;
    flex-wrap: wrap;
    padding: 10px 20px 30px 20px;
}
.grid-main3 li {
    margin: 0 10px 0 20px !important;
  }
  .grid-main3 p {
      margin: 0 10px 0px 20px !important;
  }
  .grid-main3 div {
      margin-bottom: 60px;
  }
  section.top-section.dis-center h2 {
    margin-top: 40px !important;
}
}
</style>
@stop
@section('content')
    <section class="top-section dis-center">
        <div class="container grid-main">
            @foreach(Helper::getcmspage() as $k=>$v)
                @if($v->page_name == 'safety_section1')
                    {!!$v->content !!}
                @endif
            @endforeach
        </div>
    </section>
    <section class="top-section-main dis-center ">
        @foreach(Helper::getcmspage() as $k=>$v)
            @if($v->page_name == 'safety_section2')
                {!!$v->content !!}
            @endif
        @endforeach
    </section>
    <section class="top-section2 dis-center"> 
        @foreach(Helper::getcmspage() as $k=>$v)
            @if($v->page_name == 'safety_section3')
                {!!$v->content !!}
            @endif
        @endforeach
    </section>
@stop