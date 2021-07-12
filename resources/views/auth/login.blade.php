<!DOCTYPE html>
<html lang="en" style="background-color: #050558">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="robots" content="noindex,nofollow">
            <title>@yield("titulo") Sistema Inmekha</title>

        <!-- Favicon icon -->
        <link rel="icon" type="image/gif" sizes="16x16" href="{{asset("imagenes/favicon.gif")}}">

            <!-- Custom CSS -->
            <!-- Custom CSS -->
            <link href="{{asset("assets/back/css/style.min.css" )}}" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="main-wrapper">
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style ="background-color: #050558">
                <div class="auth-box border-top border-secondary"  style ="background-color: #050558">
                    <div id="loginform">
                        <div class="text-center pt-5 pb-3">
                            <span class="db"><img src="{{asset("imagenes/favicon.gif")}}" alt="logo" /></span>
                        </div>
                        <!-- Form -->
                        <form method ="POST" class="form-horizontal mt-3" id="loginform" action="{{ route('login') }}">
                            @csrf
                            <div class="row pb-4">
                                <div class="col-12">
                                    <br><div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white h-100" id="basic-addon1" style="background-color: #040424">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white h-100" id="basic-addon2" style="background-color:firebrick"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top border-secondary">
                                <div class="col-12">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember" style="color:white">
                                            {{ __('Remember Me') }}
                                        </label>
                                    <br><button class="btn btn-light float-end text-black" href="home" type="submit">
                                        {{ __('Login') }}
                                    </button>
                                    <br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{asset("assets/libs/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            // ==============================================================
            // Login and Recover Password
            // ==============================================================
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });

            $('#to-login').click(function(){
                $("#recoverform").hide();
                $("#loginform").fadeIn();
            });
        </script>
    </body>
</html>
