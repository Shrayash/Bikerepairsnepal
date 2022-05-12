<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>GlocalPlatform Admin Dashboard</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{ asset('dashboard')}}/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('dashboard')}}/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="{{ asset('dashboard')}}/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="{{ asset('dashboard')}}/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('dashboard')}}/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('dashboard')}}/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ url('/')}}"><span class="m-l-10">GlocalPlatform</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('dashboard')}}/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>{{Auth::user()->name }}</h4>
                        <small>Administrator</small>
                    </div>
                </div>
            </li>
            <li class="{{ 'admin/home'== request()->path() ? 'active' :'' }} open"><a href="{{ url('/home')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-book-image"></i><span>News Management</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ url('admin/news/categories')}}">News Category</a></li>
                    <li><a href="{{ url('admin/news/regions')}}">News Regions</a></li>
                    <li><a href="{{url('admin/news')}}">News Listing</a></li>
                    <li><a href="{{url('admin/news')}}">News Comments</a></li>

                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-collection-video"></i><span>Shows Management</span></a>
                <ul class="ml-menu">
                    {{-- <li class="{{ 'admin/home'== request()->path() ? 'active' :'' }} open"><a href="{{ url('/home')}}"><i class="zmdi zmdi-image"></i><span>Slider Images</span></a></li> --}}
                    <li><a href="#">Shows Category</a></li>
                    <li><a href="#">Shows Listing</a></li>
                    <li><a href="#">Shows Comments</a></li>

                </ul>
            </li>

            {{-- <li class="{{ 'admin/banner'== request()->path() ? 'active' :'' }}"><a  href="{{ url('admin/banner')}}" ><i class="zmdi zmdi-collection-folder-image"></i><span>Slider Images</span></a>
            </li> --}}
            {{-- <li class="{{ 'admin/testimonials'== request()->path() ? 'active' :'' }}"> <a href="{{ url('admin/testimonials')}}" ><i class="zmdi zmdi-quote"></i><span>Testimonials</span></a>

            </li> --}}

            {{-- <li class="nav-item {{ 'admin/blog'== request()->path() ? 'active' :'' }}">
                <a href="{{ url('admin/blog')}}"><i class="zmdi zmdi-blogger"></i><span>Blogs and Articles</span></a>

            </li> --}}



            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Users Management</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Admin Users Management</a></li>
                    <li><a href="#">Authors Management</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-email-open"></i><span>Form Data</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Newsletter Subscribers</a></li>
                    <li><a href="#">Contact Form Queries</a></li>
                </ul>
            </li>
            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                <ul class="ml-menu">
                    <li><a href="google.html">Change Password</a></li>
                </ul>
            </li>

            <li>

                    <span>
                        <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="zmdi zmdi-power"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </span>

            </li>
        </ul>
    </div>
</aside>
<!-- Main Content -->

<section class="content">
    @yield('content')
</section>




</body>

<!-- Jquery Core Js -->
<script src="{{ asset('dashboard')}}/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('dashboard')}}/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('dashboard')}}/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('dashboard')}}/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="{{ asset('dashboard')}}/bundles/c3.bundle.js"></script>

<script src="{{ asset('dashboard')}}/bundles/mainscripts.bundle.js"></script>
<script src="{{ asset('dashboard')}}/js/pages/index.js"></script>
@yield('scripts')
</html>
