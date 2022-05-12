@extends('layouts.app')

@section('content')
    <!-- Start slider area -->
    <div id="glocal-slider">
        <div class="glocal-slide">
            <!-- Start single slide  -->
            <div class="glocal-single-slide">
                <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%"
                    alt="blgo">
                <div class="glocal-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-single-news-slide-content">
                                    <h1 class="up">Hope of uncertainty</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->
            <div class="glocal-single-slide">
                <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%"
                    alt="blgo">
                <div class="glocal-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-single-news-slide-content">
                                    <h1 class="up">Hope of uncertainty</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glocal-single-slide">
                <img class="cover" src="{{ asset('assets') }}/images/first_bg.jpg" width="100%" height="60%"
                    alt="blgo">
                <div class="glocal-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-single-news-slide-content">
                                    <h1 class="up">Hope of uncertainty</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start single slide  -->

            <!-- End single slide  -->
        </div>
    </div>
    <!-- End Slider area -->
    <main>
        <!-- Start Blog -->
        <section id="glocal-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="glocal-blog-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="glocal-blog-left">
                                        <!-- start single item -->
                                        <article class="glocal-blog-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <a href="{{ url('/news/detailnews')}}"><img class="cover"
                                                            src="{{ asset('assets') }}/images/news.jpg" width="850px;"
                                                            height="218px" alt="blgo image"></a>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="glocal-blog-item-content" style="padding: 0px 0px;">
                                                        <h2><a href="{{ url('/news/detailnews')}}">Seeing the big
                                                                picture of information</a></h2>
                                                        <h5>Thursday, 19 December 2021</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                            penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Continue
                                                            Reading
                                                            <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                        </article>
                                        <!-- End single item -->
                                        <section id="glocal-from-news" style="padding-left: 16px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="glocal-from-news-area">
                                                            <!-- Title -->
                                                            <div class="row">
                                                                <div class="col-md-11">

                                                                    <h3 class="up">Recent News</h3>

                                                                </div>
                                                                <div class="col-md-11">
                                                                    <div class="glocal-from-news-content">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <article class="glocal-blog-item">
                                                                                    <a href="{{ url('/news/detailnews')}}"><img class="cover"
                                                                                            src="{{ asset('assets') }}/images/news.jpg"
                                                                                            width="850px;" height="218px"
                                                                                            alt="blgo image"></a>
                                                                                    <div class="glocal-blog-item-content">
                                                                                        {{-- <ul class="glocal-blog-meta">
                                                                                            <li>BY: ADMIN </li>
                                                                                            <li><a href="{{ url('/news/detailnews')}}"><i class="fa fa-comment-o"></i>26</a></li>
                                                                                            <li><i class="fa fa-heart-o"></i>250</li>
                                                                                        </ul> --}}
                                                                                        <h2 class="glocal-blog-item-title">
                                                                                            <a href="{{ url('/news/detailnews')}}">Seeing the big
                                                                                                picture of information and
                                                                                                information management</a>
                                                                                        </h2>
                                                                                        <p class="limitline">Lorem
                                                                                            ipsum dolor sit amet,
                                                                                            consectetuer adipiscing elit.
                                                                                            Aenean commodo ligula eget
                                                                                            dolor. Aenean massa. Cum sociis
                                                                                            natoque penatibus et magnis dis.
                                                                                        </p>
                                                                                        <a class="glocal-blg-readmore-btn"
                                                                                            href="blog-single.html">Read
                                                                                            more <i
                                                                                                class="fa fa-long-arrow-right"></i></a>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <article class="glocal-blog-item">
                                                                                    <a href="{{ url('/news/detailnews')}}"><img class="cover"
                                                                                            src="{{ asset('assets') }}/images/news.jpg"
                                                                                            width="850px;" height="218px"
                                                                                            alt="blgo image"></a>
                                                                                    <div class="glocal-blog-item-content">

                                                                                        <h2 class="glocal-blog-item-title">
                                                                                            <a href="{{ url('/news/detailnews')}}">Vestibulum lacinia
                                                                                                elit sed elit ultrices
                                                                                                consequat.</a>
                                                                                        </h2>
                                                                                        <p class="limitline">Lorem
                                                                                            ipsum dolor sit amet,
                                                                                            consectetuer adipiscing elit.
                                                                                            Aenean commodo ligula eget
                                                                                            dolor. Aenean massa. Cum sociis
                                                                                            natoque penatibus et magnis dis.
                                                                                        </p>
                                                                                        <a class="glocal-blg-readmore-btn"
                                                                                            href="blog-single.html">Read
                                                                                            more <i
                                                                                                class="fa fa-long-arrow-right"></i></a>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <article class="glocal-blog-item">
                                                                                    <a href="{{ url('/news/detailnews')}}"><img class="cover"
                                                                                            src="{{ asset('assets') }}/images/news1.jpg"
                                                                                            width="850px;" height="218px"
                                                                                            alt="blgo image"></a>
                                                                                    <div class="glocal-blog-item-content">

                                                                                        <h2 class="glocal-blog-item-title">
                                                                                            <a href="{{ url('/news/detailnews')}}">Aliquam consectetur
                                                                                                sem sed ante semper, ut
                                                                                                convallis risus
                                                                                                ullamcorper.</a>
                                                                                        </h2>
                                                                                        <p class="limitline">Lorem
                                                                                            ipsum dolor sit amet,
                                                                                            consectetuer adipiscing elit.
                                                                                            Aenean commodo ligula eget
                                                                                            dolor. Aenean massa. Cum sociis
                                                                                            natoque penatibus et magnis dis.
                                                                                        </p>
                                                                                        <a class="glocal-blg-readmore-btn"
                                                                                            href="blog-single.html">Read
                                                                                            more <i
                                                                                                class="fa fa-long-arrow-right"></i></a>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <article class="glocal-blog-item">
                                                                                    <a href="{{ url('/news/detailnews')}}"><img class="cover"
                                                                                            src="{{ asset('assets') }}/images/news1.jpg"
                                                                                            width="850px;" height="218px"
                                                                                            alt="blgo image"></a>
                                                                                    <div class="glocal-blog-item-content">

                                                                                        <h2 class="glocal-blog-item-title">
                                                                                            <a href="{{ url('/news/detailnews')}}">Aliquam consectetur
                                                                                                sem sed ante semper, ut
                                                                                                convallis risus
                                                                                                ullamcorper.</a>
                                                                                        </h2>
                                                                                        <p class="limitline">Lorem
                                                                                            ipsum dolor sit amet,
                                                                                            consectetuer adipiscing elit.
                                                                                            Aenean commodo ligula eget
                                                                                            dolor. Aenean massa. Cum sociis
                                                                                            natoque penatibus et magnis dis.
                                                                                        </p>
                                                                                        <a class="glocal-blg-readmore-btn"
                                                                                            href="blog-single.html">Read
                                                                                            more <i
                                                                                                class="fa fa-long-arrow-right"></i></a>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                        <div style="text-align: center;">
                                                                            <button class="button button2">More
                                                                                News</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="glocal-blog-sidebar">

                                        <!-- start Single Widget -->
                                        <div class="glocal-sidebar-widget">
                                            <h2 class="glocal-sidebar-widget-title">Featured News</h2>
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
                                            <!-- End single widget -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->
        <section id="international">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6" style="background-color: {{ url('/news/detailnews')}}F9F6FF;padding:15px;border: 4px solid white;">

                            <h5>World Highlights</h5>
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

                            <h5>USA Highlights</h5>
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
        <hr>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="glocal-from-news-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="glocal-title">
                                        <h2 class="up">Sports</h2>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="glocal-from-news-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <article class="glocal-blog-item">
                                                    <a href="{{ url('/news/detailnews')}}"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                                    <div class="glocal-blog-item-content">
                                                        {{-- <ul class="glocal-blog-meta">
                                                            <li>BY: ADMIN </li>
                                                            <li><a href="{{ url('/news/detailnews')}}"><i class="fa fa-comment-o"></i>26</a></li>
                                                            <li><i class="fa fa-heart-o"></i>250</li>
                                                        </ul> --}}
                                                        <h2 class="glocal-blog-item-title"><a href="{{ url('/news/detailnews')}}">Seeing the big picture of information and information management</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4">
                                                <article class="glocal-blog-item">
                                                    <a href="{{ url('/news/detailnews')}}"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                                    <div class="glocal-blog-item-content">

                                                        <h2 class="glocal-blog-item-title"><a href="{{ url('/news/detailnews')}}">Vestibulum lacinia elit sed elit ultrices consequat.</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4">
                                                <article class="glocal-blog-item">
                                                    <a href="{{ url('/news/detailnews')}}"><img class ="cover" src="{{ asset('assets') }}/images/news1.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                                    <div class="glocal-blog-item-content">

                                                        <h2 class="glocal-blog-item-title"><a href="{{ url('/news/detailnews')}}">Aliquam consectetur sem sed ante semper, ut convallis risus ullamcorper.</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <br>
                                        <div style="text-align: center;">
                                        <button class="button button2" >More News</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr style="margin-bottom: 0px;">
        <section id="glocal-from-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="glocal-from-news-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="glocal-title">
                                        <h2 class="up">Bussiness</h2>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="glocal-from-news-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <article class="glocal-blog-item">
                                                    <a href="{{ url('/news/detailnews')}}"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                                    <div class="glocal-blog-item-content">
                                                        {{-- <ul class="glocal-blog-meta">
                                                            <li>BY: ADMIN </li>
                                                            <li><a href="{{ url('/news/detailnews')}}"><i class="fa fa-comment-o"></i>26</a></li>
                                                            <li><i class="fa fa-heart-o"></i>250</li>
                                                        </ul> --}}
                                                        <h2 class="glocal-blog-item-title"><a href="{{ url('/news/detailnews')}}">Seeing the big picture of information and information management</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4">
                                                <article class="glocal-blog-item">
                                                    <a href="{{ url('/news/detailnews')}}"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                                    <div class="glocal-blog-item-content">

                                                        <h2 class="glocal-blog-item-title"><a href="{{ url('/news/detailnews')}}">Vestibulum lacinia elit sed elit ultrices consequat.</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4">
                                                <article class="glocal-blog-item">
                                                    <a href="{{ url('/news/detailnews')}}"><img class ="cover" src="{{ asset('assets') }}/images/news1.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                                    <div class="glocal-blog-item-content">

                                                        <h2 class="glocal-blog-item-title"><a href="{{ url('/news/detailnews')}}">Aliquam consectetur sem sed ante semper, ut convallis risus ullamcorper.</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <br>
                                        <div style="text-align: center;">
                                        <button class="button button2" >More News</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>

    </main>
@endsection
