@extends('layouts.app')

@section('content')


{{-- <div class="online_shop maintitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="glocal-single-slide-content">
                    <h4>WELCOME TO</h4>
                    <h2>GLOCOL PLATFORM</h2>
                    <p> GO THE SMARTER WAY. GO GLOCOL.</p>
                </div>
            </div>
        </div>
    </div>

</div> --}}
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
                                <button type="button" class="btn btn-success" style="padding-top: 10px;">WATCH
                                    NOW</button>
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



<section id="glocal-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="glocal-about-area">
                    <!-- Title -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="glocal-title">
                                <h2>About Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun.</p>
                                <br>
                                <button class="button button1">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start from news -->
<section id="glocal-from-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="glocal-from-news-area">
                    <!-- Title -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="glocal-title">
                                <h2>News</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="glocal-from-news-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <article class="glocal-blog-item">
                                            <a href="#"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                            <div class="glocal-blog-item-content">
                                                {{-- <ul class="glocal-blog-meta">
                                                    <li>BY: ADMIN </li>
                                                    <li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
                                                    <li><i class="fa fa-heart-o"></i>250</li>
                                                </ul> --}}
                                                <h2 class="glocal-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="glocal-blog-item">
                                            <a href="#"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                            <div class="glocal-blog-item-content">

                                                <h2 class="glocal-blog-item-title"><a href="#">Vestibulum lacinia elit sed elit ultrices consequat.</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="glocal-blog-item">
                                            <a href="#"><img class ="cover" src="{{ asset('assets') }}/images/news1.jpg" width="850px;" height="218px" alt="blgo image"></a>
                                            <div class="glocal-blog-item-content">

                                                <h2 class="glocal-blog-item-title"><a href="#">Aliquam consectetur sem sed ante semper, ut convallis risus ullamcorper.</a></h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                <a class="glocal-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <br>
                                <div style="text-align: center;">
                              <a href="{{ url('/news') }}">  <button class="button button2">More News</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End from news -->
		<!-- Start Clients -->
		<div id="glocal-shows">
			<div class="container">
				<div class="row">

					<div class="col-md-12">

						<div class="glocal-shows-area">
                            <h2> SHOWS</h2><br>
							<!-- Start Shows -->
							<div class="glocal-shows-slider" style="text-align: center">

								<div class="glocal-shows-single">
									<a href="#"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;" height="300px"><div class="overlay"></div><br>
                                    <h5>The Holy Celebration : XMAS</h5></a>
								</div>

								<div class="glocal-shows-single">
									<a href="#"><img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;" height="300px"><div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                    </a>
								</div>

								<div class="glocal-shows-single">
                                    <a href="#">
									<img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;" height="300px"><div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                    </a>
								</div>

								<div class="glocal-shows-single">
                                    <a href="#">
									<img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;" height="300px"><div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                    </a>
								</div>

								<div class="glocal-shows-single">
                                    <a href="#">
									<img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;" height="300px"><div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                    </a>
								</div>

								<div class="glocal-shows-single">
                                    <a href="#">
									<img class ="cover" src="{{ asset('assets') }}/images/news.jpg" width="250px;" height="300px"><div class="overlay"></div><br>
                                    <h5>The Holy Celebration</h5>
                                    </a>
								</div>
							</div>
							<!-- End Shows -->

                            <a href="{{ url('/shows') }}">  <button type="button" class="btn btn-success" style="padding-top: 10px;">More Shows</button>
                            </a>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Clients -->
        <section id="glocal-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="glocal-about-area">
							<!-- Title -->
							{{-- <div class="row">
								<div class="col-md-12">
									<div class="glocal-title">
										<h2>Who we are</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div> --}}
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-4">
									<div class="glocal-about-left">
										<div class="glocal-title" style="text-align: left">
                                            <h2>December Sale !</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p><br>
                                            <button class="button button1">Check Out</button>
                                        </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="glocal-about-right">
                                        <div class="row" style="padding-bottom:24px">
                                            <a href="#"><img class="cover" src="{{ asset('assets') }}/images/sale1.jpg" width="390px;" height="120px" alt="blgo image"></a>
                                        </div>
                                        <div class="row" >
                                            <a href="#"><img class="cover" src="{{ asset('assets') }}/images/sale2.jpg" width="390px;" height="120px" alt="blgo image"></a>
                                        </div>
									</div>
								</div>
                                <div class="col-md-4">
									<div class="glocal-about-right">
                                        <a href="#"><img class="cover" src="{{ asset('assets') }}/images/sale3.jpg" width="390px;" height="265px" alt="blgo image"></a>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>

        <div class="online_shop storetitle">
            <h2 style="color:white">Visit Our Online Store</h2>
            <button class="button button1">Go Shopping</button>
        </div>


@endsection
