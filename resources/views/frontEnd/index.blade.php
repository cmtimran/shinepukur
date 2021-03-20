@extends('frontEnd.layouts.master')
@section('title','Home')
@section('content')
<!-- Welcome Area Start -->
    <section class="welcome-area">

        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            @foreach($sliders as $value)
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset($value->image)}});" data-img-url="{{asset($value->image)}}">

            </div>

            @endforeach


        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="quicktech-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="{{url('/visitor/homebooking')}}" method="POST">
                        @csrf
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="visitor_name">Your Name *</label>
                                <input type="visitor_name" class="form-control" id="visitor_name" name="visitor_name" required>
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="visitor_email">Your Email *</label>
                                <input type="visitor_email" class="form-control" id="visitor_email" name="visitor_email" required>
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="visitor_phone">Your Phone *</label>
                                <input type="visitor_phone" class="form-control" id="visitor_phone" name="visitor_phone" required>
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="visitor_checkin">Check In *</label>
                                <input type="date" class="form-control" id="visitor_checkin" name="visitor_checkin" required>
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="visitor_checkout">Check Out *</label>
                                <input type="date" class="form-control" id="visitor_checkout" name="visitor_checkout" required>
                            </div>
                            <div class="col-12 col-md-3">
                                <label for="visitor_package">Room Category *</label>
                                <select name="visitor_package" id="visitor_package" class="form-control" required>
                                    <option value="">--Select rooms--</option>
                                    @foreach($packages as $value)
                                    <option value="{{$value->title}}">{{$value->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="visitor_room">Room</label>
                                <select name="visitor_room" id="visitor_room" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="visitor_adults">Adult</label>
                                <select name="visitor_adults" id="visitor_adults" class="form-control">
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="visitor_children">Children</label>
                                <select name="visitor_children" id="visitor_children" class="form-control">
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="form-control btn quicktech-btn w-100">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-100">

            <div class="home-about">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                            <h6>About Us</h6>
                            <h2>Welcome to <br>Shinepukur Suites</h2>
                        </div>
                        <div class="about-us-content mb-100">
                            <h5 class="wow fadeInUp" data-wow-delay="300ms">A luxury boutique hotel in Dhaka.
                            </h5>
                            <p class="wow fadeInUp" data-wow-delay="400ms"> Overlooking the Hatirjheel Lake in front and Botanical Park on the other side of prominent location connected to Tejgaon Industrial Area in the east & diplomatic western part of Gulshan along with uncountable glamorous panoramic views of Dhaka, Shinepukur Suites stands tall saluting the city in the center.</p>
                            <p class="wow fadeInUp" data-wow-delay="400ms"> <a href="{{url('about')}}">More...</a> </p>

                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <div class="single-thumb">
                                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-1.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-thumb">
                                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-about-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- About Us Area End -->

    <!-- Service Area Start -->
    <div class="quicktech-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{asset('public/frontEnd')}}/img/core-img/icon-1.png" alt="">
                            <h5>Transportion</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{asset('public/frontEnd')}}/img/core-img/icon-2.png" alt="">
                            <h5>Gym</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="{{asset('public/frontEnd')}}/img/core-img/icon-3.png" alt="">
                            <h5>Restaurant</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="{{asset('public/frontEnd')}}/img/core-img/icon-4.png" alt="">
                            <h5>Coffee Shop</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{asset('public/frontEnd')}}/img/core-img/icon-5.png" alt="">
                            <h5>Conference Hall</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- Our Room Area Start -->
    <section class="quicktech-rooms-area blue">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <h6>Our Rooms</h6>
                <h2>Our Package</h2>
            </div>
            <div class="rooms-slides owl-carousel">
                <!-- Single Room Slide -->
                @foreach($packages as $value)
                <div class="single-room-slide  align-items-center">
                    <!-- Content -->
                    <div class="room-content">
                          @foreach($productimage as $proimage)
                          @if($value->id==$proimage->product_id)
                                <a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}"><img src="{{asset($proimage->image)}}" alt=""></a>
                          @break
                          @endif
                          @endforeach
                        <div class="room-details">
                            <h2><a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}">{{$value->title}}</a></h2>

                            <ul class="room-feature">
                                <li><span><i class="fa fa-check"></i> Size</span> <span>: {{$value->size}}</span></li>
                                <li><span><i class="fa fa-check"></i> Capacity</span> <span>: {{$value->capacity}}</span></li>
                                <li><span><i class="fa fa-check"></i> Bed</span> <span>: {{$value->bed}}</span></li>
                                <li><span><i class="fa fa-check"></i> Services</span> <span>: {{$value->packageservice}}</span></li>
                            </ul>
                            
                            <a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}" class="btn quicktech-btn ">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

    </section>
    <!-- Our Room Area End -->

    <!-- Testimonials Area Start -->
    <section class="quicktech-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        @foreach($testimonials as $value)
                        <img src="{{asset($value->image)}}" alt="">
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h2>Our Guests Love Us</h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonial-slides owl-carousel mb-100">
                        @foreach($testimonials as $value)
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>{!!$value->description!!}</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>{{$value->name}} <span>- {{$value->city}}</span></h6>
                            </div>
                        </div>
                        @endforeach
                       

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->

   <!-- Projects Area Start -->
    <section class="quicktech-project-area blue">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <h6>Special Offers</h6>
                <h2>View Special Package</h2>
            </div>
            <!-- Projects Slide -->
            <div class="projects-slides owl-carousel">
                <!-- Single Project Slide -->

                @foreach($specialpackages as $value)

                @foreach($productimage as $proimage)
                @if($value->id==$proimage->product_id)
                <div class="single-project-slide active bg-img" style="background-image: url({{asset($proimage->image)}});">
                    <!-- Project Text -->
                    <div class="project-content">
                        <div class="text">
                            <h6>{{$value->title}}</h6>
                            <h5>{{$value->newprice}}tk <del>{{$value->oldprice}}tk</del></h5>
                        </div>
                    </div>
                    <!-- Hover Effects -->
                    <div class="hover-effects">
                        <div class="text">
                            <h6>{{$value->title}}</h6>
                            <h5>{{$value->newprice}}tk <del>{{$value->oldprice}}tk</del></h5>
                            {!!str_limit($value->description,100)!!}
                        </div>
                        <a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}" class="btn project-btn">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                 @break
                  @endif
                  @endforeach
                @endforeach

              

            </div>
        </div>

    </section>
    <!-- Projects Area End -->

    <!-- Blog Area Start -->
    <section class="quicktech-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Our Blog</h6>
                        <h2>Latest News &amp; Event</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                @foreach($allblogs as $value)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-thumbnail"><img src="{{asset($value->image)}}" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-date">{{date('M d, Y', strtotime($value->created_at))}}</a>
                            <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-title">{{$value->title}}</a>
                        <p>{!!str_limit($value->description,100)!!}</p>
                        <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- Call To Action Area Start -->
    <section class="quicktech-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+88) 02-55045682-5 | (+88) 01958-606044 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="{{url('contact-us')}}" class="btn quicktech-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->


@endsection
