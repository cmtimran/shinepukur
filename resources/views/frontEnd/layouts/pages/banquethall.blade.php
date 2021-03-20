@extends('frontEnd.layouts.master')
@section('title','Banquethall')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">BANQUET</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Banquet</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- About Us Area Start -->
    <section class="quicktech-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-hall.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h6>Banquet Hall</h6>
                        <h2> The Shinepukur Signature Hall</h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p>Our multipurpose banquet hall is built to host a wide array of events, from conferences, seminars, corporate meetings to celebrations with family and friends. It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting. </p>
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->
    <!-- Projects Area Start -->
    <section class="quicktech-project-area  quicktech-offers">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/57.jpg);">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h5>Theatre</h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h5>Theatre</h5>
                                <p> It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting. </p>
                            </div>
                            <a href="#request-proposal-form" class="btn project-btn">Request a Proposal  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/58.jpg);">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h5>U-Shape</h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h5>U-Shape</h5>
                                <p> It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting.</p>
                            </div>
                            <a href="#request-proposal-form" class="btn project-btn">Request a Proposal  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/59.jpg);">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h5>V-Shape</h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h5>V-Shape</h5>
                                <p>It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting.</p>
                            </div>
                            <a href="#request-proposal-form" class="btn project-btn">Request a Proposal  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/60.jpg);">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h5>Board Room</h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h5>Board Room</h5>
                                <p>It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting.</p>
                            </div>
                            <a href="#request-proposal-form" class="btn project-btn">Request a Proposal  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/61.jpg);">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h5>Informal</h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h5>Informal</h5>
                                <p>It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting.</p>
                            </div>
                            <a href="#request-proposal-form" class="btn project-btn">Request a Proposal  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/62.jpg);">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h5>Oval</h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h5>Oval</h5>
                                <p>It can accommodate up to 100+ guests in a theatre setting and 50-60+ in a roundtable setting.</p>
                            </div>
                            <a href="#request-proposal-form" class="btn project-btn">Request a Proposal  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- Projects Area End -->
    <!-- Gallery Area Start -->
    <section class="quicktech-gallery">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                <h6>Our Recent Work Some Photos</h6>
                <h2>The Shinepukur Signature Hall</h2>
            </div>



            <div class="row">
                @foreach($banquetphotos as $value)
                <div class="col-md-3">
                    <!-- Single gallery -->
                    <div class="zoom-gallery wow fadeInUp">
                        <a href="{{asset($value->image)}}" data-source="{{asset($value->image)}}" title="Into The Blue" style="width:193px;height:125px;">
                            <img src="{{asset($value->image)}}">
                        </a>

                    </div>
                </div>
                @endforeach

            </div>

        </div>


    </section>
    <!-- Gallery Area End -->
     <!-- Gallery Area Start -->
    <section class="quicktech-video gallery">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                <h6>Our Recent Work Some video</h6>
                <h2> The Shinepukur Signature Hall</h2>
            </div>



            <div class="row">
                @foreach($banquetvideos as $value)
                <div class="col-md-4">
                    <!-- Single gallery -->
                    <div class="video wow fadeInUp">
                        <iframe src="https://www.youtube.com/embed/{{$value->video}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>

                    </div>
                </div>
                @endforeach

                
                
               
            </div>

        </div>


    </section>
    <!-- Gallery Area End -->
    <!-- Call To Action Area Start -->
    <section class="quicktech-request-proposal-form" id="request-proposal-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <h4>Request a Proposal</h4>
                        <br>
                        <br>
                        <form action="{{url('request/proposal')}}" method="POST">
                            @csrf
                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="proposal_name"> Name</label>
                                        <input type="text" class="form-control" id="proposal_name" name="proposal_name" required>
                                    </div>
                                    <div class="col-4">
                                        <label for="proposal_email">Email*</label>
                                        <input type="email" class="form-control" id="proposal_email" name="proposal_email" required>

                                    </div>
                                    <div class="col-4">
                                        <label for="proposal_phone">Phone *</label>
                                        <input type="number" class="form-control" id="email" name="proposal_phone" required>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="proposal_company"> Company</label>
                                        <input type="text" class="form-control" id="proposal_company" name="proposal_company">
                                    </div>
                                    <div class="col-4">
                                        <label for="proposal_checkInDate">Event Date *</label>
                                        <div class="input-daterange" id="datepicker">
                                            <input type="text" class="input-small form-control" name="proposal_checkInDate" id="proposal_checkInDate" required></div>

                                    </div>
                                    <div class="col-4">
                                        <label for="proposal_numberofGuests">Number of Guests</label>
                                        <input type="text" class="form-control" id="numberofGuests" name="proposal_numberofGuests" required>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="proposal_catering">Catering Required </label>
                                        <select name="proposal_catering" id="proposal_catering" class="form-control">
                                            <option value="">Sitting Plans</option>
                                            <option value="1">Theatre</option>
                                            <option value="2">U-Shape</option>
                                            <option value="3">V-Shape</option>
                                            <option value="4">Board Room</option>
                                            <option value="5">Informal</option>
                                            <option value="6">Oval</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="proposal_sitplans">Sitting Plans *</label>

                                        <select name="proposal_sitplans" id="proposal_sitplans" class="form-control" required>
                                            <option value="">Sitting Plans</option>
                                            <option value="1">Theatre</option>
                                            <option value="2">U-Shape</option>
                                            <option value="3">V-Shape</option>
                                            <option value="4">Board Room</option>
                                            <option value="5">Informal</option>
                                            <option value="6">Oval</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group mb-30">
                                <label for="proposal_ai">Additional Information *</label>
                                <div class="row no-gutters">
                                    <input type="text" class="form-control" id="proposal_ai" name="proposal_ai" placeholder="additional information" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn quicktech-btn w-100">Submit Your Request </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area End -->
   <!-- Call To Action Area Start -->
    <section class="quicktech-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+88) 02-55045682-5 |
(+88) 01958-606044 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="{{url('/contact-us')}}" class="btn quicktech-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->
@endsection