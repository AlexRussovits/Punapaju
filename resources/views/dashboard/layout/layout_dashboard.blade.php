<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Punapaju Dashboard">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Punapaju Dashboard</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{asset('dashboard_files/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_files/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{asset('dashboard_files/css/connect.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_files/css/dark_theme.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_files/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Загружается...</span>
    </div>
</div>
<div class="connect-container align-content-stretch d-flex flex-wrap">
    <div class="page-sidebar">
        <div class="logo-box"><a href="#" class="logo-text">Punapaju</a></div>
        <div class="page-sidebar-inner slimscroll">
            <ul class="accordion-menu">
                <li class="sidebar-title">
                    Cписок
                </li>
                <li class="active-page">
                    <a href="{{'/dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Главная</a>
                </li>
                <li class="">
                    <a href="{{'/dashboard/appointment_dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Записи</a>
                </li>
                <li class="">
                    <a href="{{'/dashboard/user_dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Пользователи</a>
                </li>
                <li class="">
                    <a href="{{'/dashboard/contacts_dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Контакты</a>
                </li>
                <li class="">
                    <a href="{{'/dashboard/services_dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Услуги</a>
                </li>
                <li class="">
                    <a href="{{'/dashboard/sponsor_dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Спонсоры</a>
                </li>
                <li class="">
                    <a href="{{'/dashboard/gallery_dashboard'}}" class="active"><i class="material-icons-outlined">dashboard</i>Галерея</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-container">
        <div class="page-header">
            <nav class="navbar navbar-expand">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item small-screens-sidebar-link">
                        <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('dashboard_files/images/avatars/profile-image-1.png')}}" alt="profile image">
                            <span>{{Auth::user()->name}}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{'/dashboard/logout'}}">Log out</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                    </li>
                </ul>
            </nav>
        </div>
        @yield('content')
</div>
</div>


    <!-- Javascripts -->
    <script src="{{asset('dashboard_files/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/blockui/jquery.blockUI.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/flot/jquery.flot.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/flot/jquery.flot.time.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/connect.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/pages/dashboard_files.js')}}"></script>

</body>
</html>
