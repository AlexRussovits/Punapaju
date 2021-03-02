@extends('layout.layout_second')
@section('content')
    <!--Contact Form Section-->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Связаться c нами!</h2>
            </div>

            @if(session('success_delivery'))
                <div class="alert alert-success">
                    <p class="mb-0">
                        Your message was delivered
                    </p>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="{{asset('/send-contact')}}" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="name" value="" placeholder="Имя и Фамилия" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="email" value="" placeholder="Почта" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="text" placeholder="Комментарий..."></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn btn-style-two">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!--End Contact Form Section-->

    <!-- Map Section -->
    <section class="map-section">
        <div class="image-layer" style="background-image:url(images/background/1.jpg)"></div>
        <div class="auto-container">
            <h2><span>Как нас найти?</span></h2>
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
