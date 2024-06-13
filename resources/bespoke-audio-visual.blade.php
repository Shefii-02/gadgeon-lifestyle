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
                            Bespoke Audio Visual
                        </span>
                        <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                        <span class="text-black-50 fw-normal">Make your leisure time more
                        </span>
                            <span class="fw-bold">
                                enjoyable, flexible, and
                                user-friendly              
                            </span>
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
    <img src="https://gadgeon.ae/wp-content/uploads/2023/10/bespoke2.jpg" class="w-100">
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-1.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
                   
                    <h1> Smart TVs and Streaming</h1>
                    
                    <p class="mt-5">
                        Combine breathtaking, high-definition screens with the power of streaming services like Apple TV and enjoy a vast range of content.
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
                    
                    <h1>Multi-Room Audio</h1>
                    <p class="mt-5">
                        Smart entertainment extends to multi-room audio systems, which allow you to play music in different rooms simultaneously or independently. You can create custom playlists or sync your audio throughout your home, delivering a cohesive and immersive audio experience for everyone.
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
                                
                                <h1 class="mb-4">Bespoke Audio
                                </h1>
                                <p class="mt-2 " style="line-height: 2;">
                                    Discover and enjoy the perfect harmony of sound with our high-quality speakers, sound systems and custom audio installations. We bring your audio dreams to life with precision and passion. Elevate your listening experience with audio that’s as unique as you are.
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
                    Elevate your leisure time and create unforgettable moments with family and friends. Build your dream entertainment setup with GadgeOn!
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