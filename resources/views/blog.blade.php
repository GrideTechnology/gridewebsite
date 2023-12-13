@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/blog.css')}}"/>
<style>
    .card{
        display:none;
    }
    .showCard{
        display:block;
    }
</style>
@stop
@section('content')
    <?php
        function limit_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
                $words = str_word_count($text, 2);
                $pos   = array_keys($words);
                $text  = substr($text, 0, $pos[$limit]) . '...';
            }
            return $text;
        }
    ?>
    <section class="details-card">
        <div class="container">
            <h1 class="text-center">
                <span class="txt-green">See what's happening at Gride</span>
            </h1>
            <div class="wrap">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Search" name="serachBlog" id="serachBlog">
                    <button type="submit" class="searchButton" id="searchBtn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="container grid-main" id="blogGride">
            </div>
        </div>
    </section>

    <section class="view-more">
        <a id="pageLink" href="#">View More</a>
    </section>
@stop

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        var skip = 0;
        var limit = 9;
        var searchClick = 1;
        var urldata = "{{config('gride.BASE_URL')}}" + "/blogs";
        var blogHtml = ``;
        var tempData = '';
        callBlogAjax();
        $("#pageLink").click(function(){
            var displayed = $('.showCard').length;
            var showMore = displayed+6;
            var totalBox = $('.blog-box').length;
            var i=0;
            $('.blog-box').each(function(){
                if(i<showMore){
                    $(this).addClass('showCard');
                }

                if(showMore>=totalBox){
                    $("#pageLink").hide();
                }
                i++;
            });
        });
        $("#searchBtn").click(function(){
            var searchData = $("#serachBlog").val();
            if(searchClick == 1) {
                skip = 0;
                limit = 9;
                blogHtml = ``;
                $("#pageLink").show();
                $("#blogGride").html(blogHtml);
            }
            if(searchData != '') {
                callBlogAjax(searchData);
            }
            else {
                callBlogAjax();
            }
        });

        function callBlogAjax(searchData='') {
            $.ajax({
                url: urldata,
                type: "post",
                data: {
                    searchData:searchData
                },
                success: (data, textStatus, jqXHR) => {
                if((Object.keys(data.responseData)).length > 0) {
                    var result = data.responseData;
                    //var totalBlog = data.responseData.total;
                    if(result.length > 0) {
                        for(var i in result) {
                            var blogUrl = "{{url('/pages/single_blog')}}" + "/" + result[i].slug;
                            var blogImage = result[i].image;
                            var content = result[i].content;

                            if(i<6){
                                blogHtml += `<div class="card blog-box showCard">
                                            <a href="` + blogUrl + `">
                                            <img src="` + blogImage +`" class="img-abt-us" alt=" ` + result[i].title + `">
                                            </a>
                                            <div class="text"> 
                                                <small>` + result[i].time + `</small>
                                                <h4>` + result[i].title + `</h4>
                                                <p class="content-para" data-content="`+content+`">` + content.substr(0,100) + `</p>
                                            </div>
                                        </div>`;
                            }else{
                                 blogHtml += `<div class="card blog-box">
                                            <a href="` + blogUrl + `">
                                            <img src="` + blogImage +`" class="img-abt-us" alt=" ` + result[i].title + `">
                                            </a>
                                            <div class="text"> 
                                                <small>` + result[i].time + `</small>
                                                <h4>` + result[i].title + `</h4>
                                                <p>` + content.substr(0,100) + `</p>
                                            </div>
                                        </div>`;
                            }

                        }
                        $("#blogGride").html(blogHtml);
                    }
                }
                // skip = skip + 6;
                // if(totalBlog <= skip) {
                //     $("#pageLink").hide();
                // }
                // if(totalBlog == 0) {
                //     blogHtml = ``;
                //     $("#blogGride").html(blogHtml);
                // }
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.log(jqXHR.responseJSON.message);
                }
            });
        }
       

    });
</script>