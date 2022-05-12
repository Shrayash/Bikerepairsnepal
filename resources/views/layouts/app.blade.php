<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Glocal Platform</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Slick slider -->
    <link href="{{ asset('assets') }}/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            grid-gap: 10px;
            padding: 10px;
        }


        .item1 {
            grid-column: 1/3;
            grid-row: 1/3;
        }

        .item3 {
            grid-column: 3;
            grid-row: 2;
        }

        .navbar-upper {
            background-color: #fff;
        }

        .navbar-lower {
            background-color: rgb(219, 216, 216)
        }

        .navbar-logo {
            width: 50px;
            height: auto;
        }

        .nav-upper ul {
            float: right;
            display: flexbox;
        }

        #navline {
            display: flexbox;
        }

        .nav-upper .navbar-upper>li {

            font-size: 14px;
        }

        .nav-upper .navbar-upper>li>a {
            color: #777;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <!-- Main Style -->
    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
    <!-- Google Fonts Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


</head>

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start Header -->

    <div class="container">
        <nav class="nav-upper">
            <div class="grid-container">
                <div class="grid-item item1">
                    <a class="navbar-logo" href="/"><img src="{{ asset('assets') }}/images/favicon.png" width="25%"
                            height="auto" alt="logo"></a>
                </div>
                <div class="grid-item item2">
                    <ul class="nav navbar-upper" style="display: flex;">
                        <li><a href="#">Subscribe</a>
                        </li>
                        @guest
                        <li><a href="{{ url('/register')}}">Register</a>
                        </li>
                        <li><a href="{{ url('/login')}}">Sign-In</a>
                        </li>
                        @else
                        <li><a href="{{ url('/home')}}">Dashboard</a>
                        </li>
                        <li> <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i> {{ __('Sign-Out') }}
                        </li>
                        @endguest
                    </ul>
                </div>
                <div class="grid-item item3">
                    <ul class="nav navbar-upper ">
                        <li><a href="#" style="text-transform: uppercase;">{{date("M j Y").', '.date("D");}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- <nav class="navbar navbar-static-top navbar-lower">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar" style="margin: 0px 24px;">
                <ul class="nav navbar-nav" id="navline">
                    <li class="nav-link active-link"><a href="#">Home</a>
                        <div class="underline"></div>
                    </li>
					<li class="nav-link"><a href="#">News</a></button>
                        <div class="underline"></div>
						<ul class="dropdown">
							<li><a href="#">Sub-1</a></li>
							<li><a href="#">Sub-2</a></li>
							<li><a href="#">Sub-3</a></li>
						  </ul>
                    </li>
                    <li class="nav-link"><a href="#">Shows</a>
                        <div class="underline"></div>
                    </li>
                    <li class="nav-link"><a href="#">Shop</a>
                        <div class="underline"></div>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Glocal Search">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">Search</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav> --}}
    <header id="glocalheader">
        <div class=" container">
            <nav class="navbar navbar-expand-lg navbar-light glocal-navbar">
                {{-- <div class="navbar-header"> --}}
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto glocal-navbar-nav">
                        <li class="nav-item active">
                            <a href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('news') }}" role="button" id="navbarDropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">News</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/news/world') }}">World</a>
                                <a class="dropdown-item" href="{{ url('/news/world') }}">USA</a>
                                <a class="dropdown-item" href="{{ url('/news/world') }}">Bussiness</a>
                                <a class="dropdown-item" href="{{ url('/news/world') }}">Sports</a>
                                <a class="dropdown-item" href="{{ url('news') }}">All News</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="{{ url('shows') }}">Shows</a></li>
                        <li class="nav-item"><a href="#">Shop</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Glocal Search">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </header>


    @yield('content')
    <!-- Start footer -->
    <footer id="glocal-footer">
        <div class="glocal-footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <div class="glocal-single-footer">
                            <img class="glocal-footer-logo" src="{{ asset('assets') }}/images/favicon.png"
                                width="100%" height="auto" alt="logo">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="glocal-single-footer">
                            <h4>CONTACT INFORMATION</h4>

                            <ul class="list-unstyled">
                                <li class="media">
                                    <span class="fa fa-phone"></span> +00 123 456 789 00
                                </li>
                                <li class="media">
                                    <span class="fa fa-home"></span> USA
                                </li>

                                <li class="media">
                                    <span class="fa fa-envelope"></span> support@glocalplatform.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="glocal-single-footer">
                            <h4>QUICK LINKS</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Shows</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="glocal-single-footer">
                            <h4>FOR NEWSLETTER</h4>
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email"
                                            style="width: 140%">
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success mb-2" style="width: 98%">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <!-- End footer -->

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
    var header = document.getElementById("navbarSupportedContent");
        var btns = header.getElementsByClassName("nav-item");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('assets') }}/js/slick.min.js"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>


    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/custom.js"></script>

    <!-- About us Skills Circle progress  -->
    <script>
        // First circle
        new Circlebar({
            element: "#circle-1",
            type: "progress",
            maxValue: "90"
        });

        // Second circle
        new Circlebar({
            element: "#circle-2",
            type: "progress",
            maxValue: "84"
        });

        // Third circle
        new Circlebar({
            element: "#circle-3",
            type: "progress",
            maxValue: "60"
        });

        // Fourth circle
        new Circlebar({
            element: "#circle-4",
            type: "progress",
            maxValue: "74"
        });
        $( '#topheader .navbar-nav a' ).on( 'click', function () {
	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
});
    </script>

</body>

</html>
