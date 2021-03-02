@extends('layout.layout_main')
@section('content')

    <!--Main Slider-->
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image:url(images/img/bg.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <h2>PUNAPAJU OÜ <span>Качественный авторемонт
                        по доступным ценам.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
<!--style="background-image:url(images/img/bg.jpg) -->
    <!--Services Section-->
    <section class="services-section pt-5">
        <div class="auto-container">
            <!--Lower Section-->
            <div class="lower-section">
                <div class="row clearfix">

                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('images/img/main.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                    <!--Content Column-->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Автомастерская Punapaju</h2>
                            <div class="text">Это современный многопрофильный автосервис в городе Йыхви.
                                Мы осуществляем многие виды ремонта и обслуживание автомобилей.
                                Мы следуем принципам, которые соответствуют ожиданиям клиентов: мы соблюдаем сроки ремонта автомобиля,
                                быстро выявляем неисправности, используем качественное оборудование и расходные материалы.
                                Гарантия качества на все работы. </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--End Services Section-->

    <!--Services Section Two-->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-car"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Full Service</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-pressure"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Tire Balance</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-plumber"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Oil Change</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-tools-2"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">AC Repair</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-car-repair"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Full Service</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-tyre"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Tire Balance</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-diesel"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Oil Change</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-battery"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">AC Repair</a></h3>
                        <div class="text">This is Photoshop's version  of Lorem Ipsukroin gravida nibh</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Services Section Two-->

    <!--Accordian Section-->
    <section class="accordian-section" style="background-image:url(images/resource/image-2.png)">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Accordian Column-->
                <div class="accordian-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <ul class="accordion-box accordion-style-one">

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div> Strong Engines Require Strong Parts.</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>This is Photoshop's version  of Lorem Ipsum.
                                                Proin gravida nibh vel velit auctor aliquet.
                                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div>Working Hard For The Hard Working.</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            <p>This is Photoshop's version  of Lorem Ipsum.
                                                Proin gravida nibh vel velit auctor aliquet.
                                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div> Prices Never Lower, Customer Care Never Higher.</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>This is Photoshop's version  of Lorem Ipsum.
                                                Proin gravida nibh vel velit auctor aliquet.
                                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Don’t Let Your Truck Leak Oil, Make It Sweat Horse Power!</h2>
                        <h3>If It Runs On Diesel…We’ll Fix It!</h3>
                        <div class="text">This is Photoshop's version velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Accordian Section-->

    <!-- Map Section -->
    <section class="map-section">
        <div class="image-layer" style="background-image:url(images/background/1.jpg)"></div>
        <div class="auto-container">
            <h2>Your Automotive Repair Experts.<span> Where to find us?</span></h2>
            <div class="map-box">
                <!--Map Canvas-->
                <div class="map-canvas"
                     data-zoom="12"
                     data-lat="59.361000537559825"
                     data-lng="27.44686499845196"
                     data-type="roadmap"
                     data-hue="#ffc400"
                     data-title="Punapaju ÖÜ"
                     data-icon-path="images/icons/map-marker.png"
                     data-content="Narva maantee 122, Jõhvi, 41536 Ida-Viru maakond, Estonia
                     <br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

@endsection
