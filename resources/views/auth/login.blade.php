<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('presets/admin/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css') }}" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('presets/admin/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('presets/admin/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('presets/admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Halo, silahkan login terlebih dahulu!</p>
                    </div>
                    <div class="login-form-body">
                        @error('username')
                            <div class="text-center small mb-4">Email/Username atau password Anda salah</div>
                        @enderror
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address or Username</label>
                            <!-- <input type="text" id="exampleInputEmail1" name="username" value="{{ old('username') }}"> -->
                            <input id="exampleInputEmail1" type="text" name="username" value="{{ old('username') }}" required>
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <!-- <input type="password" id="exampleInputPassword1" name="password" > -->
                            <input id="exampleInputPassword1" type="password" name="password" required autocomplete="current-password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <!-- <input class="form-check-input" type="checkbox" name="remember" id="customControlAutosizing" {{ old('remember') ? 'checked' : '' }}> -->
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <!-- <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('presets/admin/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('presets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('presets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('presets/admin/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('presets/admin/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('presets/admin/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('presets/admin/js/jquery.slicknav.min.js') }}"></script>
    
    <!-- others plugins -->
    <script src="{{ asset('presets/admin/js/plugins.js') }}"></script>
    <script src="{{ asset('presets/admin/js/scripts.js') }}"></script>
</body>

</html>
