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
                            Gadgeon Industrial Solutions
                        </span>
                        <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                            <span class="fw-bold">
                                Empowering Industries 
                            </span>
                            <span class="text-black-50 fw-normal">with Smart IIoT Solutions</span>
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
                               
                            <span class="text-black-50 ">Fueling industries with pioneering</span><br> IIoT solutions 
                             <span class="text-black-50 ">for amplified efficiency and 
                                connectivity</span>
                        </h3>
                    </div>
                </div>
                @include('social-media-links')
            </div>
        </div>
    </div>
</section>

<section class="pt-5 second-section">
    <img src="{{url('assets/images/pictures/img2.jpg')}}" class="w-100">
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-1.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
                    
                    <h1>Designing And Implementing Robust Industrial loT Solutions</h1>
                    
                    <p class="mt-5">
                        Specialized in crafting robust Industrial lIoT solutions, 
                        utilizing sensor technologies, connectivity, data analytics, and machine leaming. 
                        Our solutions enable real-time monitoring, predictive maintenance, asset tracking, energy manage - ment, and process 
                        optimization,leading to increased operational efficiency and reduced downtime.

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
                    <h1>Providing Comprehensive Digitalization services</h1>
                    <p class="mt-5">
                        Aiding businesses in digital transformation by offering comprehensive digitalization services. Collaborating closely,w edeveloptailoredstrategies,implement data driven solutions, and lever agee merging technologies like cloud computing,
                        big data analytics, and artificial intelligence for optimization and innovation.
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
                    <h1>Advanced Industrial Automation Solutions</h1>
                    <p class="mt-5">
                        We optimise manufacturing with advanced automation solutions, boosting productivity. 
                        Specializing in PLC programming, SCADA systems, HMI development, robotics integration, 
                        and process control solutions
                        for enhanced efficiency
                    </p>
                </div>

            </div>

        </div>
        
        <div class="row">
            
            <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                <img src="{{url('assets/images/pictures/solution-img-4.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                <div class="p-5">
                    <h1>Top-tier industrial spares from trusted manufacturers for quality assurance.</h1>
                    <p class="mt-5">
                        We provide a wide range of high-quality industrial spares and components sourced from trusted manufacturers. Our product portfolio includes Industrial Automation products Electrical Switch gears, field instruments and Pneumatics Weensure reliable and efficient supply chain management
                        to meet the diverse requirements of our clients.
                    </p>
                </div>

            </div>

        </div>
         <div class="row">
            
            <div class="col-lg-6 m-0 p-0">
                <img src="{{url('assets/images/pictures/solution-img-5.jpg')}}" class="w-100">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0  order-0 order-lg-2">
                <div class="p-5">
                    <h1>Revolutionizing Automotive Technology - EV Charging Station</h1>
                    <p class="mt-5">
                       Discover Gadgeon's comprehensive solutions tailored for the automotive industry. From cutting-edge EV charger management platforms to specialized services like embedded software development and mobile applications, we innovate to meet diverse automotive needs with precision and customization
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
                                <h1 class="mb-4">Expert Installation</h1>
                                <p class="mt-2 " style="line-height: 2;">
                                    Our seasoned professionals ensure seamless implementation of cutting-edge automation solutions tailored to your industry needs."
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
            <div class="col-lg-10 mx-auto text-left ">
                <h1 class="fw-semibold">
                    Why Choose GADGEON LIFESTYLE - Industrial Solutions

                </h1>

            </div>
        </div>
        <div class="row pt-5 justify-content-center">
            <div class="col-lg-4 mb-5">
                <div class="card info-box">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/8-2.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Industrial Expertise</h6>
                            <p>
                                Years of experience in manufacturing processes and technological advancements, with a team delivering successful projects across diverse industries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-5">
                <div class="card info-box">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/9-2.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            <h6 class="mb-3">Technological Innovation</h6>
                            <p>Staying at the forefront with cutting-edge IIoT, data analytics, automation,
                            and digitalization strategies for process optimization and predictive maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card info-box">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/10-2.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Customer Satisfaction</h6>
                            <p>
                                Commitment to exceptional service, timely execution, and ongoing technical support,
                                fostering long-term partnerships based on trust and mutual success.
                                <br>  <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-5">
                <div class="card info-box">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/11-1.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Customized Solutions</h6>
                            <p>
                               Tailored approach to understanding unique client needs and designing solutions 
                               aligned with business objectives, scalability goals, and industry standards.
                                 <br>  <br>
                                   <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card info-box">
                    <div>
                        <div class="text-center">
                            <img loading="lazy" decoding="async" class="w-25 text-center"
                                src="{{url('assets/images/icons/12-1.png')}}">
                        </div>
                        <div class="mt-3 p-2 text-center">
                            
                            <h6 class="mb-3">Quality Assurance and Support</h6>
                            <p>
                                Prioritizing quality and reliability in all solutions and services, 
                                ensuring equipment and components meet the highest 
                                standards while providing comprehensive support and maintenance.
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