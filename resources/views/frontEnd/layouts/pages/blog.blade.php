@extends('frontEnd.layouts.master')
@section('title','Blog')
@section('content')
 <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset(asset('public/frontEnd'))}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Blog </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog </li>
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

                    @foreach($allblogs as $value)
                    <div class="single-blog-post d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}"><img src="{{asset($value->image)}}" alt=""></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-author">{{date('M d, Y', strtotime($value->created_at))}}</a>
                                <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-title">{{$value->title}}</a>
                            <p>{!!str_limit($value->description,100)!!}</p>
                            <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="btn continue-btn">Read More</a>
                        </div>
                    </div>
                    @endforeach
                   
                   
                    <!-- Pagination -->
                    <nav class="quicktech-pagination wow fadeInUp mb-100" data-wow-delay="600ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
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
                                        <a href="{{url('package-details/'.$value->slug.'/'.$value->id)}}" class="post-tutorial"> Day</a>
                                    </div>
                                    <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}" class="post-title">{{$value->title}}</a>
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
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset(asset('public/frontEnd'))}}/img/bg-img/1.jpg);">
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