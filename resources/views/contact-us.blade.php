@extends('layout.layout')

@section('contents')
<style>
@media only screen and (max-width: 600px) {

    .contatc-form-section{
        margin-top:600px !important;
    }
    
}
</style>
    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="col-lg-12 top-content">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div>
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                                <span class="text-black-50 fw-normal">Explore the World of
                                </span>
                                <span class="fw-bold"> Integrated Technology</span>
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
        <img src="https://www.gadgeon.ae/wp-content/uploads/2023/11/dubai-contact-us.jpg" class="w-100">
    </section>
    <section>
        <div class="container" style="height: 600px">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h3 class="fw-normal text-center text-muted" style="line-height: 1.8;">We are here to assist you
                        </h3>
                        <p class="text-center">Feel free to contact us or just drop a line here. Our support stuff will
                            reach you very soon</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4">
                                <i class="bi bi-house fs-1"></i>
                                <span class="my-3 h5">Head Quarter</span>
                                <span class="text-muted text-center" style="line-height: 1.8;">
                                    VI405/1,FathimaTower, MaleppallyRoad,<br>
                                    Thrikkakara PO, Kochi, Kerala -682021, India.
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4">
                                <i class="bi bi-envelope fs-1"></i>
                                <span class="my-3 h5">Mailing Address</span>
                                <span class="text-muted text-center" style="line-height: 1.8;">
                                    smartindustry@gadgeon.com
                                    <br><br><br></span>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4">
                                <i class="bi bi-telephone fs-1"></i>
                                <span class="my-3 h5">Business Talk</span>
                                <span class="text-muted text-center" style="line-height: 1.8;">
                                    +91 8138 922 466<br>
                                    +91 7736 596 888<br>
                                    +91 8138 922 866</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contatc-form-section  -->
    <section class="contatc-form-section py-5 bg-white">
        <div class="container" style="margin-top: 10px;">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 position-relative rounded-3" style="background-image: url(https://www.gadgeon.ae/wp-content/uploads/2023/11/contact-us.jpg);background-position: center center;background-size: cover;">
                        <div class="px-3" style="bottom: 0;position: absolute;">
                            <h3 class="d-sm-none text-light fw-bold">Wanna plan a new project with us?
                            </h3>
                            <div class="col-lg-12 mb-4 text-left">
                                <button
                                    class="btn btn-theme text-light border-light border rounded-5">Ask Questions</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 bg-gray">
                        <h1 class="mt-5 mb-5 text-light">Feel free to drop a line</h1>
                        <form action="{{route('contact-email')}}" method="POST" class="py-2 px-3 row">
                            @csrf
                            <div class="col-lg-12  mb-3">
                                <label class="mb-2 text-light h6">Full Name</label>
                                <input type="text" required class="form-control" name="fullname" value="{{old('fullname')}}" placeholder="Full Name">  
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="mb-2 text-light h6">Email Address</label>
                                <input type="email" required class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address">
                            </div>
                             <div class="col-lg-6 mb-3">
                                <label class="mb-2 text-light h6">Mobile Number</label>
                                <input id="phone" required maxlength="10" minlength="10" value="{{old('mobile')}}" class="form-control" type="text"  onkeypress="if(event.which < 48 || event.which > 57 ) if(event.which != 8) return false;" autocomplete="off" name="mobile" placeholder="Phone Number">

                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="mb-2 text-light h6">Subject</label>
                                <input type="text" required class="form-control" value="{{old('subject')}}" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="mb-2 text-light h6">Message</label>
                                <textarea type="text" name="message" class="form-control" placeholder="Write Somting..." rows="8">{{old('message')}}</textarea>
                            </div>
                            <div class="col-lg-12 mb-4 text-center">
                                <input type="submit"
                                    class="btn btn-theme2 text-light border-light border rounded-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid">
            <iframe loading="lazy" width="100%" height="600px" src="https://maps.google.com/maps?q=Gadgeon%20Middle%20East%20FZE%20Office%20121%2C%20Techno%20Hub%201%2C%20DTEC%20-%20Dubai%20Silicon%20Oasis%20-%20Dubai%20-%20United%20Arab%20Emirates&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" title="Gadgeon Middle East FZE Office 121, Techno Hub 1, DTEC - Dubai Silicon Oasis - Dubai - United Arab Emirates" aria-label="Gadgeon Middle East FZE Office 121, Techno Hub 1, DTEC - Dubai Silicon Oasis - Dubai - United Arab Emirates"></iframe>
        </div>
    </section>
    <!-- global Section -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="col-lg-12 mx-auto text-center ">
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
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/09/gadgeon-middle-east.png"
                                    class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-lifestyle-logo@2x.png"
                                    class="w-50 p-3">
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
                                <img src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-smart-systems-logo@2x.png"
                                    class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.
                                </p>
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
