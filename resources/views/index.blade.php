@extends('layout.layout_index')
@section('content')

    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="images/img/1.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Don’t Let Your Truck Leak Oil, Make It Sweat Horse Power!</h2>
                        <h3>If It Runs On Diesel…We’ll Fix It!</h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section-->

    <!-- Map Section -->
    <section class="map-section">
        <div class="image-layer" style="background-image:url(images/background/1.jpg)"></div>
        <div class="auto-container">
            <h2>Your Automotive Repair Experts.<span> Where to find us?</span></h2>
            <div class="map-box">
                <!--Map Canvas-->
                <div class="map-canvas"
                     data-zoom="12"
                     data-lat="-37.817085"
                     data-lng="144.955631"
                     data-type="roadmap"
                     data-hue="#ffc400"
                     data-title="Envato"
                     data-icon-path="images/icons/map-marker.png"
                     data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@endsection
