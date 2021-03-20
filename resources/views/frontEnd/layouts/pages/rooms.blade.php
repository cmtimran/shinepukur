@extends('frontEnd.layouts.master')
@section('title','Our Rooms')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Rooms</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}l">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rooms</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="quicktech-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                @foreach($packages as $value)
               <div class="col-md-4">
                   <!-- Single Room Area -->
                    <div class="single-room-area  align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                         @foreach($productimage as $proimage)
                            @if($value->id==$proimage->product_id)
                            <div class="room-img">
                                <a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}"><img src="{{asset($proimage->image)}}" alt=""></a>
                            </div>
                        @break
                        @endif
                        @endforeach
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}">{{$value->title}}</a></h2>
                            <h4>{{$value->newprice}}<span>/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Size: <span>{{$value->size}}</span></h6>
                                <h6>Capacity: <span>{{$value->capacity}}</span></h6>
                                <h6>Bed: <span>{{$value->bed}}</span></h6>
                                <h6>Services: <span>{{$value->packageservice}}</span></h6>
                            </div>
                            <a href="{{url('/room-details/'.$value->slug.'/'.$value->id)}}" class="btn view-detail-btn">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
               </div>
               @endforeach
               
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

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
                        <a href="{{url('contact-us')}}" class="btn quicktech-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

@endsection
