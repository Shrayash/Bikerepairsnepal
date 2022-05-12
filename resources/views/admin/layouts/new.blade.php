<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>GlocalPlatform Admin Dashboard</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('dashboard') }}/assets/img/favicon.ico' />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    Hola !
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{ asset('dashboard') }}/assets/img/user.png" class="user-img-radious-style">
                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>

                            <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ url('/') }}"> <img src="{{ asset('assets') }}/images/favicon.png" width="75%"
                                height="auto" alt="logo">
                        </a>
                    </div>
                    <br><br>
                    <ul class="sidebar-menu">

                        <li class="dropdown active">
                            <a href="{{ url('/home') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">News and Shows Settings</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>News Management</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('admin/news/categories') }}">News
                                        Category</a></li>
                                <li><a class="nav-link" href="{{ url('admin/news/regions') }}">News Regions</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('admin/news') }}">News Listing</a></li>
                                <li><a class="nav-link" href="{{ url('admin/news') }}">News Comments</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Shows Management</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('admin.shows.categories') }}">Shows
                                        Category</a></li>
                                <li><a class="nav-link" href="{{ url('admin.shows') }}">Shows Listing</a></li>
                                <li><a class="nav-link" href="#">Shows Comments</a></li>
                                \
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Users
                                    Management</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="email-inbox.html">Admin Users Management</a></li>
                                <li><a class="nav-link" href="email-compose.html">Authors Management</a></li>

                            </ul>
                        </li>
                        <li class="menu-header">Other Settings</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Form
                                    Data
                                </span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="alert.html">Newsletter Subscribers</a></li>
                                <li><a class="nav-link" href="badge.html">Contact Form Queries</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="shopping-bag"></i><span>Settings</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{url('admin.password.change') }}">Change
                                        Password</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>

            </div>

        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('dashboard') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('dashboard') }}/assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('dashboard') }}/assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="{{ asset('dashboard') }}/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('dashboard') }}/assets/js/custom.js"></script>
    @yield('scripts')

    <script>
        $("document").ready(function() {
            setTimeout(function() {
                $("div.alert").remove();
            }, 5000); // 5 secs
        });
    </script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
