<!--Clients Section-->
<section class="clients-section" style="background-image:url(images/background/1.jpg)">
    <div class="auto-container">

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                @foreach($sponsors as $sponsor)
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset($sponsor->img)}}" alt=""></a></figure></li>
                @endforeach
            </ul>
        </div>

    </div>
</section>
<!--End Clients Section-->
