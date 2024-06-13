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
                            Services & AMC
                        </span>
                        <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                            <span class="text-black-50 fw-normal ">
                                Services & AMC for
                            </span>
                            <span class="fw-bold">Home Automation in UAE</span>
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
    <img src="https://gadgeon.ae/wp-content/uploads/2023/10/amc-1.jpg" class="w-100">
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-1.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
                    
                    <h1>Bring it Back to Life</h1>
                    
                    <p class="mt-5 inner-para">
                        Has your smart home system seen better days? Our “Bring it Back to Life” service is designed to revive and rejuvenate your existing home automation setup. Our expert technicians will assess your current system, identify areas that need improvement, and implement the necessary upgrades to bring it back to its former glory.
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
                    <h1>Residential Revamp</h1>
                    <p class="mt-5 inner-para">
                        If you’re looking for a more comprehensive overhaul, our “Residential Revamp” service is tailored for you. We’ll work closely with you to understand your evolving needs and preferences, designing and implementing a state-of-the-art smart home system that meets your expectations.
                    </p>
                </div>

            </div>

        </div>
        <div class="row"> 
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-2.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
                    <h1>Glitches Correction</h1>
                    <p class="mt-5 inner-para">
                        Smart home systems can sometimes experience glitches or technical issues. Our “Glitches Correction” service ensures that any hiccups in your home automation setup are swiftly identified and resolved. Our skilled technicians will troubleshoot the system, making sure it runs seamlessly and efficiently.
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
                                <h1 class="mb-4">Office/Commercial</h1>
                                <p class="mt-2 " style="line-height: 2;">
                                    Commercial Automation and AV Overhaul: For a complete transformation of your commercial space, our “Commercial Automation Overhaul” service is your solution. We’ll collaborate closely with you to design and implement a state-of-the-art automation system tailored to your business needs.                       
                                </p>

                                <p class="mt-2 " style="line-height: 2;">
                                    Maintenance and Support: Regular maintenance is crucial for the uninterrupted operation of your automation system. Our maintenance plans offer routine checkups, software updates, and priority support to ensure your system performs at its peak.
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

<section class="py-5 why-choose-gadgeon">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto text-center ">
                <h1 class="fw-semibold">
                    Residential and Commercial Systems -<br>
                    Annual Maintenance Contracts (AMC)
                </h1>
                <h5 class="fw-normal text-black-50 text-muted mt-4">Maintaining an automation and AV system is crucial to ensure it performs optimally over time.
                    Our AMC services are designed to provide you with peace of mind by offering regular maintenance, updates, and support.</h5>
            </div>
        </div>
        

        <div class="row pt-5 justify-content-center">
            <div class="col-lg-4 mb-5">
                <div class="card info-box h-100">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/8-2.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Regular System Check-upse</h6>
                            <p>
                                We'll schedule routine check-ups to ensure your smart home system is operating at its best.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-5">
                <div class="card info-box h-100">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/9-2.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            <h6 class="mb-3">Software and Firmware Updates</h6>
                            <p>Keeping your smart devices and system software up-to-date is essential for security and performance. We'll take care of all necessary updates.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card info-box h-100">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/10-2.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Priority Support</h6>
                            <p>
                                As an AMC customer, you'll receive priority support in case of any issues or emergencies, ensuring quick resolution.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-5">
                <div class="card info-box h-100">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/11-1.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Extended Warranty</h6>
                            <p>
                                We offer extended warranty coverage for the components of your smart home system, giving you added protection.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card info-box  h-100">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/12-1.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Discounted Services</h6>
                            <p>
                                Enjoy special discounts on additional services, upgrades, or new installations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card info-box h-100">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/13-1.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Our Goal</h6>
                            <p>
                                Our goal is to make your smart home experience as seamless and hassle-free as possible. Whether you need minor corrections, a complete revamp, or ongoing maintenance, we've got you covered.
                            </p>
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
                    Contact us today to discuss your specific needs and schedule a consultation.
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