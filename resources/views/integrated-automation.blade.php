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
                        Integrated Automation
                        </span>
                        <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                        <span class="text-black-50 fw-normal">Connect and control</span>
                            <span class="fw-bold">
                            smart devices and systems
                            </span>
                            <span class="text-black-50 fw-normal">within your home and create a</span>
                            <span class="fw-bold">unified and automated environment</span>
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
    <img src="https://gadgeon.ae/wp-content/uploads/2023/10/integrated-automation-1.jpg" class="w-100">
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-1.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
            
                    <h1>We call it ONE CONTROL</h1>
                    
                    <p class="mt-5 inner-para">
                    Control lighting, climate, shades, security & more without leaving the couch, One-touch control of media for simplified entertainment. Watch surveillance live on mobile or high resolution touchscreen. 2-way intercom with video doorbell & interfaces throughout the home.
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
            
                    <h1>Set your routine</h1>
                    <p class="mt-5 inner-para">
                    Create customized automation routines or scenes. Set up a “Good Morning” routine that adjusts the thermostat, opens the blinds, and turns on the coffee maker when you wake up.
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
                                <h1 class="mb-4">Access Control
                                </h1>
                                <p class="mt-2 " style="line-height: 2;">
                                    Remotely lock and unlock doors, grant temporary access to outside services, and monitor who enters and exits your home. Valuable for smart locks and intercom systems.                                </p>
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
                    Elevate your living space with Gadgeon’s seamless Automation Integration
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