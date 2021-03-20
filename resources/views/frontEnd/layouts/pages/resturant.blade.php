@extends('frontEnd.layouts.master')
@section('title','Resturant')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Restaurant</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Restaurant</li>
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
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h6><img src="{{asset('public/frontEnd')}}/img/core-img/logo.png" alt="" class="wow fadeInUp" data-wow-delay="500ms"></h6>
                        <h2> The Cinnamon Tree Restaurant</h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p> a multicuisine dining experience</p>
                        <div class="restaurant-feature">
                            <p>Our all day restaurant offers delicacies from around the world including European, American, Japanese, Thai, Indian, Pan-Asian and Bengali cuisines, ensuring an authentic culinary experience in a cozy bistro setting.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-restaurant.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->
    <!-- About Us Area Start -->
    <section class="quicktech-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{asset('public/frontEnd')}}/img/bg-img/shinepukursuites-coffee-shop.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h6><img src="{{asset('public/frontEnd')}}/img/core-img/logo.png" alt="" class="wow fadeInUp" data-wow-delay="500ms"></h6>
                        <h2> COFFEE SHOP</h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p>Contemporary meets classic chic.</p>
                        <p>………………………..is the most fashionable space in the city to relax with a cup of brewed coffee with friends or business associates. The menu features local & international soft beverages, signature mock tails made with a Bengali twist.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Gallery Area Start -->
    <section class="quicktech-gallery">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                <h6>Our Menu</h6>
                <h2>SPECIAL</h2>
            </div>

 

            <div class="row">
                @foreach($specialmenus as $value)
                <div class="col-md-3">
                    <!-- Single gallery -->
                    <div class="zoom-gallery wow fadeInUp">
                        <a href="{{asset($value->image)}}" data-source="{{asset($value->image)}}" title="Menu" style="width:193px;height:125px;">
                    		<img src="{{asset($value->image)}}">
                    	</a>

                    </div>
                </div>
                @endforeach

                
            </div>
<div class="quicktech-download-restaurent-menu  wow fadeInUp" data-wow-delay="300ms"">
                        <a href="{{asset('public/frontEnd')}}/img/menu.pdf" class="btn quicktech-btn mb-50">Download our restaurant menu</a>
                    </div>
        </div>


    </section>
    <!-- Gallery Area End -->

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