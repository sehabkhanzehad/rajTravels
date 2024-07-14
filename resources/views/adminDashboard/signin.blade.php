<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Signin - M/S RAJ TRAVELS</title>

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/adminDashboard/vendors/core/core.css">
    <!-- endinject -->

    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/adminDashboard/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/adminDashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/adminDashboard/css/demo_1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('assets') }}/adminDashboard/images/favicon.png" />

    <style>
        .auth-page {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 320px;
            /* Adjust as needed */
            padding: 0;
        }

        .auth-form-wrapper {
            padding: 2rem;
        }
    </style>

</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center auth-page">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a target="_blank" href="{{ route("user.homepage") }}"
                                    class="noble-ui-logo d-block mb-2">Raj<span>Travels</span></a>
                                <h5 class="text-muted font-weight-normal mb-4">Welcome back! Sign in to continue.</h5>

                                <form class="forms-sample" action="{{ route('admin.signinSubmit') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username or email</label>
                                        <input type="text" name="email" autofocus class="form-control"
                                            id="exampleInputEmail1" value="{{ old('email') }}"
                                            placeholder="Username or email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (session('Invalid'))
                                            <span class="text-danger">{{ session('Invalid') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" autocomplete="current-password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (session('Wrong'))
                                            <span class="text-danger">{{ session('Wrong') }}</span>
                                        @endif
                                    </div>


                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Sign
                                            in</button>

                                        {{-- <button type="button"
                                            class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                            <i class="btn-icon-prepend" data-feather="twitter"></i>
                                            Login with twitter
                                        </button> --}}
                                    </div>



                                    {{-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> --}}

                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('assets') }}/adminDashboard/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets') }}/adminDashboard/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets') }}/adminDashboard/js/template.js"></script>
    <!-- endinject -->

    <!-- custom js for this page -->
    <!-- end custom js for this page -->

</body>
</html>
