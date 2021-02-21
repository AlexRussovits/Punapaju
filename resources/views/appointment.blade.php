@extends('layout.layout_second')
@section('content')

    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Get in touch!</h2>
            </div>

            @if(session('success_delivery'))
                <div class="alert alert-success">
                    <p class="mb-0">
                        Your appointment was delivered
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
                <form method="post" action="{{asset('send-appointment')}}" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="name" value="" placeholder="Name" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="email" value="" placeholder="Email" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="phone_number" value="" placeholder="Phone Number" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <input type="text" name="index_number_auto" value="" placeholder="Index Number Auto" required>
                        </div>


                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="text" placeholder="Write Your Comment..." required></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn btn-style-two">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection
