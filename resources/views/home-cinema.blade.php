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
                                Luxury Home Cinema Installation Company in UAE
                            </span>
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                                <span class="text-black-50 fw-normal">Three Essentials of a
                                </span>
                                <span class="fw-bold">
                                    Perfect Home Cinema
                                </span>
                                <span class="text-black-50 fw-normal">Experience </span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img decoding="async" width="50%" src="{{ url('assets/images/pictures/banner-dot.png') }}">
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
        <img src="https://gadgeon.ae/wp-content/uploads/2023/10/theatre.jpg" class="w-100">
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img src="{{ url('assets/images/pictures/solution-img-1.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <p class="mt-5 inner-para">
                            A dream of a home cinema that rivals the immersive experience of a theater isn’t just about
                            investing in expensive equipment. It’s about understanding
                            the three crucial elements that, when combined, make your home cinema truly exceptional.
                        </p>
                        <ul
                            style="    font-weight: 200;
                                        line-height: 2;
                                        font-size: 20px;
                                    ">
                            <li>
                                A Good Room: Your Cinema’s Heartbeat
                            </li>
                            <li>
                                Audio-Video Equipment: Bringing Dreams to Life
                            </li>
                            <li>
                                Knowledgeable Team: Crafting Your Vision
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img src="{{ url('assets/images/pictures/solution-img-3.jpg') }}" class="w-100">
                </div>

                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">

                        <h1>Equipment & Design</h1>
                        <p class="mt-5 inner-para">
                            Only the finest audio-visual equipment is selected, paired with a design that complements your
                            space for an unparalleled viewing and listening experience.
                        </p>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img src="{{ url('assets/images/pictures/solution-img-1.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">

                        <h1>Room & Acoustics</h1>
                        <p class="mt-5 inner-para">
                            A room’s acoustics play a pivotal role in delivering optimal sound. It’s not about merely adding
                            wall padding. The room shouldn’t be overly reflective or too dead. Achieving a balanced acoustic
                            environment makes your speakers sound magical.
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <section
        style="background-image: url({{ url('assets/images/pictures/imgepxert.jpg') }});background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center " style="height:620px;">
                        <div class="">
                            <div class="bg-dark text-light">
                                <div class="p-5">
                                    <h1 class="mb-4">
                                        Expert Installation
                                    </h1>
                                    <p class="mt-2 " style="line-height: 2;">
                                        The best equipment needs expert hands. Our team ensures each component is perfectly
                                        calibrated and set up, transforming equipment into an authentic cinematic
                                        experience.
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
                <div class="col-lg-12 mx-auto text-left ">
                    <h1 class="fw-semibold">
                        Services and Annual Maintenance<br>
                        for Home Cinema
                    </h1>
                </div>
            </div>

            <div class="row pt-5 justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="card info-box h-100">
                        <div>
                            <div class="text-center">
                                <img loading="lazy" decoding="async" class="w-25 text-center"
                                    src="{{ url('assets/images/icons/8-2.png') }}">
                            </div>
                            <div class="mt-3 p-2 text-center">

                                <h6 class="mb-3"> Technology and Performance Upgrade</h6>
                                <p>

                                    Our upgrade services breathe new life into your system, ensuring it keeps up with the
                                    latest advancements. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card info-box h-100">
                        <div>
                            <div class="text-center">
                                <img loading="lazy" decoding="async" class="w-25 text-center"
                                    src="{{ url('assets/images/icons/9-2.png') }}">
                            </div>
                            <div class="mt-3 p-2 text-center">
                                <h6 class="mb-3">
                                    Resolve Glitches
                                </h6>
                                <p>
                                    Identify and eliminate these nuisances, ensuring that your cinema experience is smooth,
                                    uninterrupted, and nothing short of spectacular.
                                </p>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card info-box h-100">
                        <div>
                            <div class="text-center">
                                <img loading="lazy" decoding="async" class="w-25 text-center"
                                    src="{{ url('assets/images/icons/9-2.png') }}">
                            </div>
                            <div class="mt-3 p-2 text-center">
                                <h6 class="mb-3"> System Tuning</h6>
                                <p>
                                    We meticulously fine-tune your setup to achieve a level of performance at will
                                    leave you spellbound.

                                </p>
                                <div>
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

    <!-- Cinema Listening Level Categories -->
    <section class="pt-5">
        <div class="container">
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <h1>Cinema Listening Level Categories</h1>
                </div>
            </div>
            <div class="mt-5">
                <div class="col-lg-12 mb-3">
                    <div class="card level-category border-warning ">
                        <h2>Reference <span class="text-theme2">Level 105dB</span></h2>
                        <p>
                            Reference Level' is the calibrated volume of sound reproduction utilised in commercial and high
                            end home cinemas. It is the volume level that directors intend to deliver the full dynamic range
                            of movie dialogue, music and effects with 105d peaks. From quiet whispers to huge explosions -
                            the viewer can experience lifelike transients at the height of realism.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="card level-category border-info">
                        <h2>Performance <span class="text-theme2">Level 102dB</span></h2>
                        <p>
                            Reference Level' is the calibrated volume of sound reproduction utilised in commercial and high
                            end home cinemas. It is the volume level that directors intend to deliver the full dynamic range
                            of movie dialogue, music and effects with 105d peaks. From quiet whispers to huge explosions -
                            the viewer can experience lifelike transients at the height of realism.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="card level-category border-success">
                        <h2>High <span class="text-theme2">99dB</span> </h2>
                        <p>
                            While reference level is the epitome of movie reproduction, not every home cinema owner may
                            need, or want, to reach this level. The 'High Level' volume of audio playback reaches peaks of
                            99d and should not be underestimated. Clean, powerful and lifelike dialogue and effects are more
                            than achieveable at this level.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('contact-section')

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-8 mx-auto text-center py-5">
                    <h1 class="fw-semibold" style="line-height: 1.4;">
                        Elevate your movie nights. Contact us to create your dream home cinema.
                    </h1>
                    <div class="mt-5">
                        <a href="{{ url('contact-us') }}" class="btn btn-theme">Call Us Now</a>
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
