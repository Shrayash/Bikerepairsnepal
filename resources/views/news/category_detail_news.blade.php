@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="up category-title">World</h4>
    <div class="row" style="padding:12px 0px;">
        <div class="col-md-6">
            <a href="{{ url('/news/detailnews')}}"><img class="cover"
                    src="{{ asset('assets') }}/images/news.jpg" width="850px;"
                    height="300px" alt="blgo image"></a>
        </div>
        <div class="col-md-6">
            <div class="glocal-blog-item-content" style="padding: 0px 0px;">
                <h3><a href="{{ url('/news/detailnews')}}">Seeing the big
                        picture of information</a></h3>
                <h5>Thursday, 19 December 2021</h5>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                    penatibus et magnis dis.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                    penatibus et magnis dis.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor. </p>
                <a class="glocal-blg-readmore-btn" href="blog-single.html">Continue
                    Reading
                    <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top:30px;">
        <div class="col-md-4">
            <div class="glocal-sidebar-widget">
                <h2 class="glocal-sidebar-widget-title">Africa News</h2>
                <div class="glocal-popular-content-widget">
                    <div class="media">

                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="glocal-sidebar-widget">
                <h2 class="glocal-sidebar-widget-title">America News</h2>
                <div class="glocal-popular-content-widget">
                    <div class="media">

                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="glocal-sidebar-widget">
                <h2 class="glocal-sidebar-widget-title">Asia News</h2>
                <div class="glocal-popular-content-widget">
                    <div class="media">

                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="international">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6" style="background-color: {{ url('/news/detailnews')}}F9F6FF;padding:15px;border: 4px solid white;">
                
                    <h5>24 Hour News</h5>
                    <a href="{{ url('/news/detailnews')}}"><img class="cover" src="{{ asset('assets') }}/images/news.jpg"
                            width="850px;" height="218px" alt="blgo image"></a>
                    <div style="padding-top: 15px;">
                        <h5>
                            <a href="{{ url('/news/detailnews')}}">Seeing the big
                                picture of information and
                                information management</a>
                        </h5>
                        <p class="limitline">Lorem
                            ipsum dolor sit amet,
                            consectetuer adipiscing elit.
                            Aenean commodo ligula eget
                            dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis.
                        </p>

                    </div>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    
                 
                </div>
                <div class="col-md-6" style="background-color: {{ url('/news/detailnews')}}F9F6FF;padding:15px;border: 4px solid white;">
                
                    <h5>Extra News</h5>
                    <a href="{{ url('/news/detailnews')}}"><img class="cover" src="{{ asset('assets') }}/images/news.jpg"
                            width="850px;" height="218px" alt="blgo image"></a>
                    <div style="padding-top: 15px;">
                        <h5>
                            <a href="{{ url('/news/detailnews')}}">Seeing the big
                                picture of information and
                                information management</a>
                        </h5>
                        <p class="limitline">Lorem
                            ipsum dolor sit amet,
                            consectetuer adipiscing elit.
                            Aenean commodo ligula eget
                            dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis.
                        </p>

                    </div>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    <hr style="border: 1px solid rgb(221, 220, 220);">
                    <b>
                        <a href="{{ url('/news/detailnews')}}" style="color: gray">Seeing the big
                            picture of information and
                            information management</a>
                    </b>
                    
                 
                </div>
            </div>
        </div>
</section>
<div class="container" style="padding:12px 0px;">
    <div class="row" style="padding:12px 0px;">
        <div class="col-md-4">
            <div class="glocal-sidebar-widget">
                <h2 class="glocal-sidebar-widget-title">Europe News</h2>
                <div class="glocal-popular-content-widget">
                    <div class="media">

                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="glocal-sidebar-widget">
                <h2 class="glocal-sidebar-widget-title">Middle East News</h2>
                <div class="glocal-popular-content-widget">
                    <div class="media">

                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="glocal-sidebar-widget">
                <h2 class="glocal-sidebar-widget-title">Australia News</h2>
                <div class="glocal-popular-content-widget">
                    <div class="media">

                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5" style="padding: 0px 0px;">
                                <a href="{{ url('/news/detailnews')}}" class="glocal-popular-post-img"><img
                                        class="cover"
                                        src="{{ asset('assets') }}/images/news.jpg"
                                        width="400px;" height="80px" alt="blgo image"></a>
                            </div>
                            <div class="col-md-7" style="padding: 0px 8px;">
                                <div class="media-body">
                                    <b>Lorem ipsum dolor sit amet </b>
                                    <p class="limitline">Lorem
                                        ipsum dolor sit amet,
                                        consectetuer adipiscing elit.
                                        Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis.
                                    </p>

                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection