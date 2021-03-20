@extends('frontEnd.layouts.master')
@section('title','About')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                    <div class="about-first-img about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h6>About Us</h6>
                        <h2> Shinepukur Suites</h2>
                    </div>
                    <div class=" about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p>Overlooking the Hatirjheel Lake in front and Botanical Park on the other side of prominent location connected to Tejgaon Industrial Area in the east & diplomatic western part of Gulshan along with uncountable glamorous panoramic views of Dhaka, Shinepukur Suites stands tall saluting the city in the center.</p>
                        <p><b>The magnificent all suites Hotel is 10TH storied building designed with 30 different luxury room along with full day dining restaurant, Western Coffee bar, lavish Lobby lounge, 50-80 person conference Hall & recreation club is dedicated and welcoming for all short & long term travelers in the capital. Destined to be a landmark, our exquisitely furnished hotel offers lavish decor both inside and outside the building. A seamless fusion of cultural, traditional and contemporary let every aspect of our hotel dazzle you and truly comfort with luxury.</b></p>
                      
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                   
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        
                        <p>Shinepukur Suites would like to continue being the best luxury boutique hotel in Dhaka, Bangladesh, offering the most personalized and hospitable service. We have prepared our suites with the best and largest variety of amenities in the area. Following and exceeding international standards, our rooms are equipped with office stationery, universal chargers, accountable high-speed Wi-Fi, and much more.</p>
                        <p><b>Conveniently located in the commercial zone of Gulshan-1, traveling to most workplaces, Biggest Shopping Malls, Restaurants, Clubs & Bar in the prominent commercial areas of Tejgaon, Gulshan, Baridhara and Banani is just matter of few minutes. We do offer car services to all our valued guests along with exclusive meet & greet (protocol) services in the Airport.</b></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-sec-img about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Video Area Start -->
    <div class="quicktech--video--area bg-img bg-overlay jarallax section-padding-0-100" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-video.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center white wow fadeInUp" data-wow-delay="100ms">
                        <h6>Live </h6>
                        <h2>Our Room</h2>
                    </div>
                    <div class="video-content-area mt-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="#" class="video-play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->

    <!-- Service Area Start -->
    <section class="quicktech-service-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Ultimate Solutions</h6>
                        <h2>Our Hotel &amp; Room</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-service-1.jpg" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Restaurant</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-service-2.jpg" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Gym</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-service-3.jpg" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5> Coffee Shop</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

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