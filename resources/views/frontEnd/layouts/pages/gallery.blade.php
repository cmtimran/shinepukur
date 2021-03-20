@extends('frontEnd.layouts.master')
@section('title','Gallery')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Gallery Area Start -->
    <section class="quicktech-gallery section-padding-100-0">
        <div class="container">
            <div class="row">
                @foreach($galleries as $value)
                <div class="col-md-4">
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

     <!-- Call To Action Area Start -->
    <section class="quicktech-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+88) 02-55045681-5 |
(+88) 01958-606030 to book directly or for advice</h6>
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