@extends('frontEnd.layouts.master')
@section('title','Offer')
@section('content')
 <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Upcamimg Offers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Offers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Projects Area Start -->
    <section class="quicktech-project-area  quicktech-offers">
        <div class="container">
            <div class="row">
                @foreach($specialpackages as $value)
                <div class="col-md-4">
                    <!-- Single Project Slide -->
                    @foreach($productimage as $proimage)
                    @if($value->id==$proimage->product_id)
                    <div class="single-project-slide active bg-img" style="background-image: url({{asset($proimage->image)}});">
                        <!-- Project Text -->
                        <div class="project-content">
                            <div class="text">
                                <h6>{{$value->title}}</h6>
                                <h5>{{$value->newprice}} <del>{{$value->oldprice}}</del></h5>
                            </div>
                        </div>
                        <!-- Hover Effects -->
                        <div class="hover-effects">
                            <div class="text">
                                <h6>{{$value->title}}</h6>
                                <h5>{{$value->newprice}}<del>{{$value->oldprice}}</del></h5>
                                <p>{!!str_limit($value->description,100)!!}</p>
                            </div>
                            <a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}" class="btn project-btn">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                     @break
                      @endif
                      @endforeach
                </div>
                @endforeach
            </div>
            <!-- Projects Slide -->

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