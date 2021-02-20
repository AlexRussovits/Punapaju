@extends('layout.layout_second')
@section('content')
    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset($service->image)}}" alt="" />
                        </div>
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>{{$service->title}}</h2>
                        <div class="text">{{$service->descr_long}}</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section-->
@endsection
