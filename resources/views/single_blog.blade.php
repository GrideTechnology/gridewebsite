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
            <h1 class="text-center"><span class="txt-green">{{ __(Helper::getSettings()->site->site_title) }}</span></h1>
          
        </div>
      <div class="col-md-12">
            <article>
                   <?php if($data->image!=="NULL" && $data->image!==""){ ?>
                      <img src="{{ $data->image }}" alt="" class="img-fluid mb30" style="width: 100%;">
                    <?php }else if( $data->video!=="NULL" &&  $data->video!==""){ ?>
                        <?php echo $data->video ; 
                    }?>
                <div class="post-content">
                    <h3>{{ $data->title }}</h3>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">{{ $data->time }}</a>
                        </li>
                    </ul>
                    <p><?php  echo nl2br($data->content); ?></p>
                </div>
            </article>
            <!-- post article-->

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