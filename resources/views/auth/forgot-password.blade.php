<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Recover Password | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=" {{asset('backend/assets/images/favicon.ico')}}">



    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="index.html" class="auth-logo">
                                <img src=" {{ asset('backend/assets/images/logo-dark.png')}} " height="30" class="logo-dark mx-auto" alt="">
                                <img src="  {{ asset('backend/assets/images/logo-light.png')}} " height="30" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Reset Password</b></h4>

                    <div class="p-3">
                        <form  class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
                        @csrf


                        @if ($errors->has('email'))
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            Invalid <strong>Email</strong>
                        </div>
                    @elseif (session('status') == Password::RESET_LINK_SENT)
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>E-mail</strong> Confirmation Sent
                        </div>
                    @else
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Forgot your password? <strong>E-mail</strong> No problem. Just let us know your <strong>email address</strong> and we will email you a password reset link that will allow you to choose a new one.
                        </div>
                    @endif




                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input class="form-control" type="email" required="" id="email" placeholder="Email" name="email" :value="old('email')" required autofocus>
                                </div>
                            </div>

                            <div class="form-group pb-2 text-center row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Send
                                        Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>