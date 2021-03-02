<!-- Main Header-->
<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-outer clearfix">

                <!--Top Right-->
                <div class="top-right">
                    <ul class="links clearfix">
                        <li><p><span class="icon fa fa-phone"></span>  Звоните нам +372 5293923</p></li>
                        <li><p><span class="icon fa fa-envelope-o"></span>punapaju@gmail.com<p></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Header Top End -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="header-upper-inner clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{asset('/')}}"><img src="{{asset('images/img/logo.png')}}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{asset('/')}}">Главная</a></li>
                                <li><a href="{{asset('/services')}}">Услуги</a></li>
                                <li><a href={{asset('/gallery')}}>Галерея</a></li>
                                <li><a href="{{asset('/contacts')}}">Контакты</a></li>
                            </ul>
                        </div>

                    </nav>

                </div>
                <!--Option Box-->
                <div class="btn-box">
                    <a href="{{asset('/appointment')}}" class="theme-btn btn-style-one">Сделать запись</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{asset('/')}}" class="img-responsive"><img src="{{asset('images/img/logo.png')}}" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li><a href="{{asset('/')}}">Главная</a></li>
                            <li><a href="{{asset('/services')}}">Услуги</a></li>
                            <li><a href="{{asset('/gallery')}}">Галерея</a></li>
                            <li><a href="{{asset('contacts')}}">Контакты</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->
