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
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4 h-100">
                                <i class="bi bi-house-check fs-1"></i>
                                <span class="my-3 h5">Corporate Office</span>
                                <span class="text-muted text-center text-capitalize">
                                    <h6 style="line-height: 1.8;">
                                        <a href="https://maps.app.goo.gl/sNTwwWBANYwt7VcB6" class="text-dark">
                                            Gadgeon Lifestyle Pvt. LTD<br>
                                            VI 405/E1, Fathima Tower, Thrikkakara PO, Kakkanad, Kochi – 682021, Kerala,
                                            India.
                                        </a><br>
                                        <a href="+914842903000">+91 484 290 30 00  </a>/
                                        <a href="+919995325348">+91 999 532 53 48 </a>/
                                        <a href="+919562411333">+91 956 241 13 33 </a>
                                       
                                    </h6>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4 h-100">
                                <i class="bi bi-houses fs-1"></i>

                                <span class="my-3 h5">MIDDLE EAST</span>
                                <span class="text-muted text-center text-capitalize">

                                    <h6 style="line-height: 1.8;">
                                        <a href="https://maps.app.goo.gl/sNTwwWBANYwt7VcB6" class="text-dark">
                                            Gadgeon Middle East.<br>
                                            DSO-THUB-1-D-OFF-121,THUB,Dubai Silicon Oasis, UAE
                                            <br>
                                            <a href="+971528370353">+971 52 83 70 353</a>
                                        </a>
                                    </h6>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4 h-100">
                                <i class="bi bi-house fs-1"></i>
                                <span class="my-3 h5">Regional Office</span>
                                <span class="text-muted text-center" style="line-height: 1.8;">
                                    <h6 style="line-height: 1.8;">
                                        <a href="https://maps.app.goo.gl/sNTwwWBANYwt7VcB6" class="text-dark">
                                            Gadgeon Systems Inc.<br>
                                            881 Yosemite Way, Milpitas, CA 95035, USA<br>
                                           <br>
                                           <a href="+14086212570">+1-408-621-2570</a>
                                           
                                        </a>
                                    </h6>
                                </span>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1113.3808546925145!2d76.33754018224651!3d10.027737884221906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDCsDAxJzQxLjYiTiA3NsKwMjAnMTUuMyJF!5e0!3m2!1sen!2sin!4v1719222799234!5m2!1sen!2sin" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
