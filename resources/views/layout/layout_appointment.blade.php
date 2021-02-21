<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mechanics HTML Template | Team</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
</head>
<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

@include('layout.elements.header')

<!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('images/img/bg.jpg')}})">
        <div class="auto-container">
            <h1>{{$title}}</h1>
        </div>
    </section>
    <!--End Page Title-->

    @yield('content')

    @include('layout.elements.footer')

</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{asset('js/map-script.js')}}"></script>
<!--End Google Map APi-->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
