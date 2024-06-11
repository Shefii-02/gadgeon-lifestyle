@extends('layout.layout')
@section('contents')
    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="col-lg-12 top-content">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div >
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">
                                <span class="text-black-50 fw-normal">Empowering factories with customized</span> 
                                <span class="fw-bold">digital solutions for enhanced productivity</span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img decoding="async" width="50%" 
                                src="https://www.gadgeon.ae/wp-content/uploads/2023/09/Screenshot-2023-09-27-at-1.42.32-PM.png">
                        </div>
                        
                    </div>
                    @include('social-media-links')
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 second-section">
        <img src="{{url('assets/images/pictures/about-image-2.jpg')}}" class="w-100">
    </section>
    <section class=''>
        <div class="container" style="py-5">
            <div class="row">
                <div class="col-lg-10 mx-auto  ">
                    <div class="py-5">
                        <h3 class="fw-normal text-center text-muted"  style="line-height: 1.8;">
                            A full range of products & solutions to
                            elevate industrial processes, enhance quality, accuracy, and precision across simple to complex operations.
                        </h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/artifical-intelligence1.png" class="w-50">
                                <span  class="my-3 h5">Consultation</span>
                            </div>
                        </div> 
                        <div class="col-lg-3  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/development.png" class="w-50">
                                <span  class="my-3 h5">Design</span>
                            </div> 
                        </div>
                        <div class="col-lg-3  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/deployment.png" class="w-50">
                                <span class="my-3 h5">Installation</span>
                            </div>
                        </div>
                        <div class="col-lg-3  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/data-analytics.png" class="w-50">
                                <span  class="my-3 h5">Maintenance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section 
        style="background-image: url({{url('assets/images/pictures/about-image-1.jpg')}});background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6  py-5">
        
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" >
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="p-5">
                                <p class="mt-2 " style="line-height: 2;">
                                    We offer customized digital solutions for factories and infrastructure of all sizes, from small-batch to high-volume production. As leaders in Industrial IIOT, digitalization, and automation, we provide innovative and data-driven solutions for manufacturing and commercial sectors. 
                                </p>
                                <p class="mt-2 " style="line-height: 2;">
                                    Our offerings optimize operations, enhance connectivity, and boost productivity. With a focus on IIOT platforms, digitalization, and automation, we ensure real-time monitoring and operational excellence. Trust our seasoned experts to drive your business into the digital era.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>

    <section class="py-5">
        <div class="container">
           <div class="col-lg-10 mx-auto py-2 ">
                <div class="">
                    <h1 class="fw-normal text-center text-muted fw-bold" style="line-height: 1.8;">
                       About Gadgeon
                    </h1>
                </div>
            </div>
            <div class="row pt-5  px-5">
                <div class="col-lg-10 mx-auto mb-5">
                    <div class="card " style="border: 4px solid gray">
                        <div class="row">
                            <div class=" icon-part position-relative">
                                <div class=" icon-div" >
                                    <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                        src="https://www.gadgeon.ae/wp-content/uploads/2023/10/1.png">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-div">
                                    <h2 class="mb-3 title">Unique Value Proposition</h2>
                                    <ul class="p-0 m-0 text-muted points">
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> End-to-end solution capability in Digital Transformation                                        </li>
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> Create business value by making sense from Data</li>
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> Engineering Excellence is one of our core values</li>
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> Never defaulted on quality of deliverables</li>
                                    </ul>
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 px-5">
                    <div class="row mb-5">
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class=" icon-part position-relative">
                                        <div class=" icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/2.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-div ">
                                            <h2 class="mb-3 title">Background</h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Established in 2011</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> 900+ Client focused Engineers</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Over 100 Customers</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Headquartered in Kochi, India</li>
                                           </ul>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 mb-1"></div>
                        <div class="col-lg-1 mb-1"></div>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="icon-part   position-relative">
                                        <div class=" icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/3.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-div">
                                            <h2 class="mb-3 title">Global Presence </h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Systems Inc (USA)</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Europe (Belgium)</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Middle East (Dubai)</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Smart Systems (India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="icon-part   position-relative">
                                        <div class="icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/4.png">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="content-div">
                                            <h2 class="mb-3 title">Quality</h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> ISO 9001:2015</li>
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> ISO 13485:2016</li>
                                           </ul>
                                           <img loading="lazy" loading="lazy" decoding="async" class="text-left w-50 mt-2" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/Image-6@2x.png" >
                                     
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <dv class="col-lg-2 mb-2"></dv>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class=" icon-part  position-relative">
                                        <div class="text-left  icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/5.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-div  text-left">
                                            <h2 class="mb-3 title">Subsidiaries</h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> Gadgeon Lifestyle</li>
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> Gadgeon Medical Systems</li>
                                            </ul>
                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <img loading="lazy" loading="lazy" decoding="async" class="text-center w-100"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/logo-01-1.svg">
                                                    
                                                </div>
                                                <div class="col-lg-6">
                                                    <img loading="lazy" loading="lazy" decoding="async" class="text-center w-100"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/logo-02-1.svg">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- global Section -->
    <section class="py-5">
        <div class="container-fluid">
                <div class="col-lg-12 mx-auto text-center py-5">
                    <h1 class="fw-bold" style="line-height: 1.4;">
                        Our Global Presence
                    </h1>
                    <div class="mt-5">
                        <p class="h6">Global Presence. Local Focus.</p>
                    </div>
                    <div class="col-lg-12 mx-auto py-4">
                        <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/1-1.png" class="w-75">
                    </div>
                </div>
        </div>
    </section>

    <section 
        style="background-image: url(https://www.gadgeon.ae/wp-content/uploads/2023/10/bg2.jpg);background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12  d-flex align-items-center " style="height:600px">
                <div class="row ">
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/09/gadgeon-middle-east.png" class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-lifestyle-logo@2x.png" class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5  text-center">
                                <h3> Gadgeon Lifestyle</h3>
                                <p class="mt-2 " style="line-height: 2;">Personalized smart home control at your.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-smart-systems-logo@2x.png" class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-custome"></div>
    </section>
    
    @include('locations')

@endsection