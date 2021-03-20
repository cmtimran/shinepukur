@extends('frontEnd.layouts.master')
@section('title','Blog Details')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{$show_data->title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                 <li class="breadcrumb-item"><a href="{{url('blog')}}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$show_data->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="quicktech-news-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="{{asset($show_data->image)}}" alt="">
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                       {!!$show_data->description!!}
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">
                        

                        <!-- Author Social Info -->
                        <div class="author-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           
                        </div>
                    </div>

                    
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="quicktech-sidebar-area pl-md-4">

                       

                        <!-- offer room -->
                        <div class="single-widget-area mb-100 related-room">
                            <h4 class="widget-title mb-30">Offers</h4>
                            @foreach($specialpackages as $value)
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                @foreach($productimage as $proimage)
                                @if($value->id==$proimage->product_id)
                                <div class="post-thumb">
                                    <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}"><img src="{{asset($proimage->image)}}" alt=""></a>
                                </div>
                                @break
                                @endif
                                @endforeach
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}" class="post-author">{{$value->newprice}} <del>{{$value->oldprice}}</del> </a>
                                        <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}" class="post-tutorial"> Day</a>
                                    </div>
                                    <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}" class="post-title"> {{$value->title}}</a>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
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