@extends('frontEnd.layouts.master')
@section('title','Contact Us')
@section('content')

 <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                @foreach($contactinfos as $value)
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Phone</h4>
                            {{$value->phone}}
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Address</h4>
                            <p>{{$value->address}}</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Open time</h4>
                            <p>{{$value->time}}</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p>{{$value->email}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                 Google Maps 

                <div class="google-maps">
              
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.274737653566!2d90.41208887248324!3d23.778122188302678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c703373dc6bb%3A0xea775044ad72ff36!2sShinepukur%20Suites!5e0!3m2!1sen!2sbd!4v1586598652643!5m2!1sen!2sbd" ></iframe>
                </div>
-->
            </div>
        </div>
    </section>
    <!-- Google Maps & Contact Info Area End -->	
@endsection