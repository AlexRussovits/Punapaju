@extends('layout.layout_second')
@section('content')

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach($services as $service)
                <!--Team Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="1.html"><img src="{{asset($service->image)}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="1.html">{{$service->title}}</a></h3>
                            <div class="text">{{$service->description}}</div>
                            <a href="{{asset('/service/' . $service->id)}}" class="theme-btn btn-style-two">Читать подробнее</a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!--End Team Section-->

    @include('layout.elements.clients')
@endsection
