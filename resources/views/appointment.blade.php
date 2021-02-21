@extends('layout.layout_appointment')
@section('content')

    <!--Contact Form Section-->
    <section class="contact-form-section">

            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="name" value="" placeholder="Name" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="email" value="" placeholder="Email" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="phoneNumber" value="" placeholder="Phone Number" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <input type="text" name="bookingDate" value="" placeholder="Booking Date" required>
                        </div>


                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="message" placeholder="Write Your Comment..."></textarea>
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
