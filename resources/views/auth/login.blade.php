<!doctype html>
<html class="no-js " lang="en">


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
</head>

<body class="theme-blush">

    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header">
                            <img class="logo" src="{{ asset('assets') }}/images/favicon.png" alt=""
                                style="width:10rem;">
                            <h5>Log in</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="forgot-password.html" class="forgot"
                                            title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" type="checkbox">
                                <label for="remember_me">Remember Me</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN
                                IN</button>
                            <div class="signin_with mt-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <p>New to Glocal Platform ? <a href="{{ url('/register') }}">Sign Up</a>. </p>

                            </div>
                        </div>
                    </form>
                    <div class="copyright text-center">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        <span><a href="#">GlocalPlatform</a></span>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('assets') }}/images/signin.svg" alt="Sign In" />
                    </div>
                </div>
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


</html>
