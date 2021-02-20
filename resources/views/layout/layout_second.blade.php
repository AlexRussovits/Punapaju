<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mechanics HTML Template | Team</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

		<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="top-outer clearfix">

                    <!--Top right-->
                    <div class="top-right">
                    	<ul class="links clearfix">
                        	<li><a href="#"><span class="icon fa fa-phone"></span>  Call us 1-555-133-447</a></li>
                            <li><a href="#"><span class="icon fa fa-envelope-o"></span>contact@mechanic.com</a></li>
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
                    	<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
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
									<li><a href="{{asset('/')}}">Home</a></li>
									<li class="current"><a href="{{asset('/services')}}">Services</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="contact.html">Contact us</a></li>
								</ul>
							</div>

						</nav>

					</div>
                   <!--Option Box-->
					<div class="btn-box">
						<a href="#" class="theme-btn btn-style-one">Make a Appoinment</a>
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
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
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
                            <li><a href="index.html">Home</a></li>
								<li class="current"><a href="services.html">Services</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/img/bg.jpg)">
        <div class="auto-container">
            <h1>{{$title}}</h1>
            <div class="text"> {{$description}}</div>
        </div>
    </section>
    <!--End Page Title-->

    @yield('content')
    <!--Main Footer-->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Big Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">This is Photoshop's version  of Lorem]psukroin gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auctor</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h2>Get In Contact</h2>
                                    <ul class="opening-time">
                                        <li><span>Monday:</span> 9:30 am - 6.00 pm</li>
                                        <li><span>Tuesday:</span> 9:30 am - 6.00 pm</li>
                                        <li><span>Wednesday:</span> 9:30 am - 6.00 pm</li>
                                        <li><span>Thursday:</span> 9:30 am - 6.00 pm</li>
                                        <li><span>Friday:</span> 9:30 am - 6.00 pm</li>
                                        <li><span>Saturday:</span> 9:30 am - 6.00 pm</li>
                                        <li><span>Sunday:</span>Closed</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="bottom-inner">
                    <div class="row clearfix">

                        <!--Nav Column-->
                        <div class="nav-column col-lg-6 col-md-12 col-sm-12">
                            <ul class="footer-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="gallery.html">gallery</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </div>

                        <!--Copyright Column-->
                        <div class="copyright-column col-lg-6 col-md-12 col-sm-12">
                            <div class="copyright">&copy; 2018 Vetura, All Rights Reserved</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/script.js"></script>

</body>
</html>
