@extends('layout.layout')
@section('contents')
  <!-- Banner section -->
  <section class="banner-section">
    <div class="container">
        <div class="col-lg-12 top-content">
            <div class="row">
                <div class="col-lg-7 d-flex align-items-end">
                    <div>
                        <span class="text-theme fw-normal pb-4">
                            Smart Lighting
                        </span>
                        <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                        <span class="text-black-50 fw-normal">Smart lighting control offers</span>
                            <span class="fw-bold">
                                convenience, energy savings, customization, and enhanced living
                            </span>
                            <span class="text-black-50 fw-normal">Experience</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-end mt-3">
                        <img decoding="async" width="50%"
                            src="{{url('assets/images/pictures/banner-dot.png')}}">
                    </div>
                    <div class="text-end mt-5">
                        <h3 class="text-start">
                          
                        </h3>
                    </div>
                </div>
                @include('social-media-links')
            </div>
        </div>
    </div>
</section>

<section class="pt-5 second-section">
    <img src="https://gadgeon.ae/wp-content/uploads/2023/10/sl1.jpg" class="w-100">
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-1.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
                    
                    <h1>Remote Control</h1>
                    
                    <p class="mt-5 inner-para">
                        Smart lighting allows you to control your lights remotely using smartphones, tablets, or computers. You can turn lights on or off, adjust brightness, and even change the color of compatible smart bulbs from anywhere with an internet connection.
                    </p>
                   

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                <img src="{{url('assets/images/pictures/solution-img-3.jpg')}}" class="w-100">
            </div>
            
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0"> 
                <div class="p-5">
                    
                    <h1>Voice Control</h1>
                    <p class="mt-5 inner-para">
                        Control your lights with your voice with assistants like Amazon Alexa, Google Assistant, or Apple Siri making life easier.
                    </p>
                </div>

            </div>

        </div>
     
    </div>

</section>

<section
    style="background-image: url({{url('assets/images/pictures/imgepxert.jpg')}});background-position: center center;background-size: cover;">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center " style="height:620px;">
                    <div class="">
                        <div class="bg-dark text-light">
                            <div class="p-5">
                                <h1 class="mb-4">Dimmable and Color-Changing Lights
                                </h1>
                                <p class="mt-2 " style="line-height: 2;">
                                    Set the perfect level of brightness for various occasions. Color-changing capabilities lets you select from a wide spectrum of colors to suit your preferences or set the perfect ambiance.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6  py-5">

                </div>
            </div>
        </div>
    </div>

</section>


<section
    style="background-image: url({{url('assets/images/pictures/imgepxert.jpg')}});background-position: center center;background-size: cover;">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6  py-5">

                </div>
                <div class="col-lg-6 d-flex align-items-center " style="height:620px;">
                    <div class="">
                        <div class="bg-dark text-light">
                            <div class="p-5">
                                <h1 class="mb-4">Smart Sensors
                                </h1>
                                <p class="mt-2 " style="line-height: 2;">
                                    Integrate with motion sensors, occupancy sensors, and ambient light sensors. Lights can automatically turn on when someone enters a room and turn off when the room is vacant or there’s sufficient natural light.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
        </div>
    </div>

</section>




<!-- Global Partnership -->
@include('partnership')

<!-- Cinema Listening Level Categories -->



@include('contact-section')

<!-- Content Section -->
<section class="py-5">
    <div class="container">
        <div class="col-lg-12">
            <div class="col-lg-8 mx-auto text-center py-5">
                <h1 class="fw-semibold" style="line-height: 1.4;">
                    Ready to experience the
                    future of lighting?
                                </h1>
                <div class="mt-5">
                    <a href="{{url('contact-us')}}" class="btn btn-theme">Call Us Now</a>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="mt-4 d-flex justify-content-around gap-2">
                        <div class=" d-flex align-items-center justify-content-center bg-white">
                            <a href=""><i class="bi bi-facebook fs-4"></i></a>
                        </div>
                        <div class=" d-flex align-items-center justify-content-center bg-white">
                            <a href=""><i class="bi bi-youtube fs-4"></i></a>
                        </div>
                        <div class=" d-flex align-items-center justify-content-center bg-white">
                            <a href=""><i class="bi bi-instagram fs-4"></i></a>
                        </div>
                        <div class=" d-flex align-items-center justify-content-center bg-white">
                            <a href=""><i class="bi bi-twitter fs-4"></i></a>
                        </div>
                        <div class=" d-flex align-items-center justify-content-center bg-white">
                            <a href=""><i class="bi bi-linkedin fs-4"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@include('locations')




@endsection