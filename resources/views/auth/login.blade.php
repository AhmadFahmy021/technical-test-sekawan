<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>VIHECLE APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
 
    <div>
        <div class="container">
            <div class="row">
<div class="col-12">
    <div class="d-flex align-items-center min-vh-100">
        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center mb-5">
                            <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                <i class="mdi mdi-alpha-x-circle"></i> <b>VIHECLE APP</b>
                            </a>
                        </div>
                        <h1 class="h5 mb-1">Welcome Back!</h1>
                        <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                        <form class="user" method="POST" action="{{ url('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email')
                                    is-invalid
                                @enderror" name="email" id="exampleInputEmail" value="{{ old('email') }}" placeholder="Email Address">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Log In </button>

                            <div class="text-center mt-4">
                                <h5 class="text-muted font-size-16">Login using</h5>
                            
                                <ul class="list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                    </li>
                                </ul>
                            </div>
                            
                        </form>

                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <p class="text-muted mb-0">Don't have an account? <a href="{{ url('register') }}" class="text-muted font-weight-medium ml-1"><b>Register</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end .padding-5 -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end .w-100 -->
    </div> <!-- end .d-flex -->
</div> <!-- end col-->

</div> <!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end page -->

<!-- jQuery  -->
<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/js/metismenu.min.js"></script>
<script src="{{ asset('assets') }}/js/waves.js"></script>
<script src="{{ asset('assets') }}/js/simplebar.min.js"></script>

<!-- App js -->
<script src="{{ asset('assets') }}/js/theme.js"></script>

</body>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

