<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register | Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />


        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

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
                                    <img src=" {{ asset('backend/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src=" {{asset('backend/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

                        <div class="p-3">
                                <form  class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                                    @csrf

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Name" :value="old('name')"  autofocus autocomplete="name">
                                        @if($errors->has('name'))
                                        <span style="color: red; font-size:12px; margin-left:8px; margin-top:3px;">{{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" id="username" name="username" placeholder="Username" :value="old('username')"  autofocus autocomplete="name">
                                        @if($errors->has('username'))
                                        <span style="color: red; font-size:12px; margin-left:8px; margin-top:3px;">{{$errors->first('username')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="Email" :value="old('email')"  autocomplete="email">
                                        @if($errors->has('email'))
                                        <span style="color: red; font-size:12px; margin-left:8px; margin-top:3px;">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="Password"
                                         autocomplete="new-password" >
                                        @if($errors->has('password'))
                                        <span style="color: red; font-size:12px; margin-left:8px; margin-top:3px;">{{$errors->first('password')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password_confirmation"  type="password" placeholder="Confirm Password"  name="password_confirmation"  autocomplete="new-password">
                                        @if($errors->has('password_confirmation'))
                                        <span style="color: red; font-size:12px; margin-left:8px; margin-top:3px;">{{$errors->first('password_confirmation')}}</span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </div>

                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="{{route('login')}}" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
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
        <script src=" {{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src=" {{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src=" {{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src=" {{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src=" {{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    </body>
</html>
