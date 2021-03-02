@extends('layout.layout_main')
@section('content')

    <!--Main Slider-->
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/img/bg.jpg); background-size: cover; background-position: center;">
                <div class="auto-container">
                    <div class="content">
                        <h2>Качественный авторемонт по доступным ценам</h2>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Services Section-->
    <section class="services-section pt-5" style="background-image:url(images/resource/image-1.png)">
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
                            <div class="h5">Это современный многопрофильный автосервис в городе Йыхви. Мы осуществляем многие виды ремонта и обслуживание автомобилей. Мы следуем принципам, которые соответствуют ожиданиям клиентов: мы соблюдаем сроки ремонта автомобиля, быстро выявляем неисправности, используем качественное оборудование и расходные материалы. Гарантия качества на все работы. </div>
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
                        <h3><a href="{{asset('/services')}}">Слесарные работы</a></h3>
                        <div class="text">Ремонт ходовой части, двигателя, стартера, тормозов, сцепления, и т.д.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-pressure"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Шиномонтаж</a></h3>
                        <div class="text">Список цен на замену сезонной резины, продажа резины.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-plumber"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Диагностика</a></h3>
                        <div class="text">Диагностика автомобиля на наличие неполадок.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-tools-2"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Замена ГРМ</a></h3>
                        <div class="text">Замена газораспределительного ремня и комплектующих.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-car-repair"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Обслуживание</a></h3>
                        <div class="text">Замена масла, салонных, воздушных, топливных фильтров.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-tyre"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Антикор</a></h3>
                        <div class="text">Покрытие днища машины антикоррозийной мастикой.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-diesel"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Замена масла</a></h3>
                        <div class="text">Замнга мотроного масла и фильтров.</div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-battery"></span>
                        </div>
                        <h3><a href="{{asset('/services')}}">Аккумулятор</a></h3>
                        <div class="text">Ремонт, зарядка аккумулятора.</div>
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
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div>СТАЖ</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Автомастерская PUNAPAJU работает уже более 20 лет! У нас есть весь необзодимый опыт.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div>КАЧЕСТВО</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            <p>В работе мы используем только качественные расходные материалы и запчасти от надежных производителей.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract"></span></div>ГАРАНТИЯ</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>PUNAPAJU осуществляется ремонт автомобилей различных моделей и марок. Мы гарантируем качество проделанной работы.</p>
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
                        <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
                        <div class="text"><span>В автосервисе PUNAPAJU есть все, что нужно для ремонта и обслуживания вашего автомобиля.</span></div>
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
            <h2><span>Как нас найти?</span></h2>
            <div class="map-box">
                <!--Map Canvas-->
                <div class="map-canvas"
                     data-zoom="12"
                     data-lat="59.361000537559825"
                     data-lng="27.44686499845196"
                     data-type="roadmap"
                     data-hue="#ffc400"
                     data-title="Punapaju OÜ"
                     data-icon-path="images/icons/map-marker.png"
                     data-content="Narva maantee 122, Jõhvi, 41536 Ida-Viru maakond, Estonia">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

@endsection
