@extends('layout.layout_gallery')
@section('content')


    <!--Gallery Page Section-->
    <section class="gallery-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach($galleries as $gallery)
                <!--Poject Block Two-->
                <div class="gallery-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset($gallery->img)}}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset($gallery->img)}}" data-fancybox="gallery" data-caption="" class="link"><span class="icon flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                    @endforeach
            </div>

            <div class="btn-box text-center">
                <a href="#" class="theme-btn btn-style-four">load more</a>
            </div>

        </div>
    </section>
    <!--End Gallery Page Section-->
@endsection
