<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>SPORT65</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon"/>
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{asset('style.css')}}">
<!-- Colors CSS -->
<link rel="stylesheet" href="{{asset('css/colors.css')}}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{asset('css/versions.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<!-- font family -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="{{asset('css/3dslider.css')}}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

@yield('css')
</head>
<section id="top">

    <body class="game_info" data-spy="scroll" data-target=".header">

    <header>
        <div class="container">
            <div class="header-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                            <div class="logo">
                                <a href="/"><img src="{!! asset('images/logo.png') !!}" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right_top_section">
                            <!-- social icon -->
                            <ul class="social-icons pull-left">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                            <!-- end social icon -->
                            <!-- button section -->
                            <ul class="login">
                                <li class="login-modal">
                                    <a href="{!! asset('/login') !!}" class="login"><i class="fa fa-user"></i>Login</a>
                                </li>
                                <li>
                                    <div class="cart-option">
                                        <a href="{!! asset('/register') !!}"><i class="fa fa-shopping-cart"></i>Register</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- end button section -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main-menu-section">
                                <div class="menu">
                                    <nav class="navbar navbar-inverse">
                                        <div class="navbar-header">
                                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                    data-target=".js-navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">Menu</a>
                                        </div>
                                        <div class="collapse navbar-collapse js-navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="active"><a href="/">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="{!! asset('/p_blog') !!}">Blog</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.nav-collapse -->
                                    </nav>
                                    <div class="search-bar">
                                        <div id="imaginary_container">
                                            <div class="input-group stylish-input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <!-- jQuery 3.1.1 -->
    {{--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    <script src="{!! asset('js/app.js') !!}"></script>
    <script src="{{asset('js/3dslider.js')}}"></script>

    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>--}}
    {{--    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>--}}
    <!-- AdminLTE App -->
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>--}}

    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>--}}

    @yield('scripts')
    </body>


</html>