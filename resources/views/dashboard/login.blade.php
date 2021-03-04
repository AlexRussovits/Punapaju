<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/login_files/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('/login_files/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/login_files/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('/login_files/css/style.css')}}">

    <title>Log in</title>
</head>
<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="{{asset('login_files/images/undraw_file_sync_ot38.svg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3><strong>Вход в систему</strong></h3>
                        </div>
                        <form action="{{asset('/loginToSystem')}}" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Логин</label>
                                <input type="text" class="form-control" id="username" name="username">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" id="password" name="password">

                            </div>

                            <input type="submit" value="Войти" class="btn text-white btn-block btn-primary">

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="{{asset('/login_files/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/login_files/js/popper.min.js')}}"></script>
<script src="{{asset('/login_files/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/login_files/js/main.js')}}"></script>
</body>
</html>
