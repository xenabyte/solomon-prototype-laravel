<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Business Directory || Admin Login</title>
        <meta content="Business Directory" name="description" />
        <meta content="3GIS Test" name="Ogundele Damilare Solomon" />


        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
     </head>
    <body class="pb-0">
                <div class="home-btn d-none d-sm-block">
            <a href="{{ url('/') }}" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="logo"><img src="assets/images/logo-dark.png" height="22" alt="logo"></a>
                    </div>
                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>

                        <form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusid="email" placeholder="Enter Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password" required autocomplete="current-password" placeholder="Enter password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customControlInline" >{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i> {{ __('Forgot Your Password?') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="{{ route('register') }}" class="font-500 text-primary"> {{ __('Signup Now?') }} </a> </p>
            </div>
        </div>
        <!-- end wrapper-page -->
        <!-- App's Basic Js  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script>


<!-- App js-->
<script src="assets/js/app.js"></script>
    </body>
</html>

