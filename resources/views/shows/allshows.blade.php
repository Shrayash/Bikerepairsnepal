@extends('layouts.app')

@section('content')
    <!-- Start slider area -->
    <div id="glocal-slider">
        <div class="glocal-slide">
            <!-- Start single slide  -->
            <div class="glocal-single-slide">

                <img class="cover" src="http://img.youtube.com/vi/fajeL728XG8/maxresdefault.jpg" width="100%"
                    height="500" alt="blgo">
                <div class="glocal-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-single-news-slide-content">
                                    <h1 class="up">Joy of prayers</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <a href="{{ url('/shows/detailshow')}}"><button type="button" class="btn btn-success" style="padding-top: 10px;">WATCH
                                        NOW</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->
            <div class="glocal-single-slide">
                <img class="cover" src="http://img.youtube.com/vi/80wYgS1hFV0/maxresdefault.jpg" width="100%"
                    height="500" alt="blgo">
                <div class="glocal-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-single-news-slide-content">
                                    <h1 class="up">Joy of prayers</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <button type="button" class="btn btn-success" style="padding-top: 10px;">WATCH
                                        NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glocal-single-slide">
                <img class="cover" src="http://img.youtube.com/vi/yGkqOrCtJ8o/maxresdefault.jpg" width="100%"
                    height="500" alt="blgo">
                <div class="glocal-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="glocal-single-news-slide-content">
                                    <h1 class="up">Joy of prayers</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <button type="button" class="btn btn-success" style="padding-top: 10px;">WATCH
                                        NOW</button>
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
    <section id="glocal-from-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="glocal-from-news-area">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="glocal-title">
                                    <h2>Latest Shows</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="glocal-from-news-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <article class="glocal-blog-item">
                                                <a href="#"><iframe width="100%" height="100%"
                                                        src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe></a>
                                                <div class="glocal-blog-item-content">
                                                    {{-- <ul class="glocal-blog-meta">
                                                        <li>BY: ADMIN </li>
                                                        <li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
                                                        <li><i class="fa fa-heart-o"></i>250</li>
                                                    </ul> --}}
                                                    <h2 class="glocal-blog-item-title"><a href="#">Seeing the big picture of
                                                            information and information management</a></h2>
                                                    <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-4">
                                            <article class="glocal-blog-item">
                                                <a href="#"><iframe width="100%" height="100%"
                                                        src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe></a>
                                                <div class="glocal-blog-item-content">

                                                    <h2 class="glocal-blog-item-title"><a href="#">Vestibulum lacinia elit
                                                            sed elit ultrices consequat.</a></h2>
                                                    <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-4">
                                            <article class="glocal-blog-item">
                                                <a href="#"><iframe width="100%" height="100%"
                                                        src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe></a>
                                                <div class="glocal-blog-item-content">

                                                    <h2 class="glocal-blog-item-title"><a href="#">Aliquam consectetur sem
                                                            sed ante semper, ut convallis risus ullamcorper.</a></h2>
                                                    <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <br>
                                    <div style="text-align: center;">
                                        {{-- <button class="button button2" >More News</button></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div id="glocal-shows">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="glocal-shows-area">
                        <h2 class="up"> Featured SHOWS</h2><br>
                        <!-- Start Shows -->
                        <div class="glocal-shows-slider" style="text-align: center">

                            <div class="glocal-shows-single" style="padding: 10px; ">
                                <a href="#"><iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/yGkqOrCtJ8o" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single" style="padding: 10px; ">
                                <a href="#"><iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/yGkqOrCtJ8o" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single" style="padding: 10px; ">
                                <a href="#">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single" style="padding: 10px; ">
                                <a href="#">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single" style="padding: 10px; ">
                                <a href="#">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single" style="padding: 10px; ">
                                <a href="#">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yGkqOrCtJ8o"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Shows -->


                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
    <div id="glocal-shows" style="margin-top:1px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="glocal-shows-area">
                        <h2 class="up"> Documentary</h2><br>
                        <!-- Start Shows -->
                        <div class="glocal-shows-slider" style="text-align: center">

                            <div class="glocal-shows-single">
                                <a href="#"><img class="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;"
                                        height="300px">
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration : XMAS</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single">
                                <a href="#"><img class="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;"
                                        height="300px">
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single">
                                <a href="#">
                                    <img class="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;"
                                        height="300px">
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single">
                                <a href="#">
                                    <img class="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;"
                                        height="300px">
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single">
                                <a href="#">
                                    <img class="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;"
                                        height="300px">
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>

                            <div class="glocal-shows-single">
                                <a href="#">
                                    <img class="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;"
                                        height="300px">
                                    <div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Shows -->


                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>

@endsection
