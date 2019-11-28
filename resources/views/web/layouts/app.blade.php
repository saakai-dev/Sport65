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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

@yield('css')
</head>

<body class="game_info" data-spy="scroll" data-target=".header">

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