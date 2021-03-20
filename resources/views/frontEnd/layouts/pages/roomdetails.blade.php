@extends('frontEnd.layouts.master')
@section('title','Rooms Details')
@section('content')
<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{$packagedetails->title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('our-rooms')}}">Rooms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$packagedetails->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rooms Area Start -->
    <div class="quicktech-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <div class="single-title d-flex align-items-center justify-content-between pb-2">
                            <h2 class="room-title">{{$packagedetails->title}}</h2>
                            <h2 class="room-price" style="color:#ffcc00;"> {{$packagedetails->newprice}} <span style="color:#afb4bf; font-size:18px;">{{$packagedetails->perday}}</span></h2>
                        </div>
                       
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                     @foreach($productimage as $key=>$proimage)
                                      @if($packagedetails->id==$proimage->product_id)
                                        <div class="carousel-item  {{ $key != 0 ? ' active' : ''  }}">
                                            <img src="{{asset($proimage->image)}}" class="d-block w-100" alt="">
                                        </div>
                                      @endif
                                      @endforeach

                                </div>

                                <ol class="carousel-indicators">
                                    @foreach($productimage as $proimage)
                                      @if($packagedetails->id==$proimage->product_id)
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="{{ $key == 1 ? ' active' : ''  }}">
                                        <img src="{{asset($proimage->image)}}" class="d-block w-100" alt="">
                                    </li>
                                      @endif
                                      @endforeach 
                                </ol>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area d-flex flex-wrap mb-50">
                            @if($packagedetails->size) <h6> Size: <span>{{$packagedetails->size}} </span></h6>@endif
                            @if($packagedetails->capacity) <h6> Capacity: <span>{{$packagedetails->capacity}} </span></h6>@endif
                            @if($packagedetails->bed) <h6> Bed: <span>{{$packagedetails->bed}} </span></h6>@endif
                            @if($packagedetails->packageservice) <h6> Services: <span>{{$packagedetails->packageservice}}</span></h6>@endif
                        </div>

                       {!!$packagedetails->description!!}
                    </div>

                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Our Services</h4>

                        <ul>
                            @foreach($roomservice as $key=>$value)
                            <li><img src="{{asset($value->image)}}" alt=""> {{$value->title}}</li>
                            @endforeach
                        </ul>
                    </div>

                    
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                       <h4>Reservation Details</h4>
                        <form action="{{url('/visitor/booknow')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-30">
                                <label for="book_checkInDate">Check In *</label>
                                 <input type="date" class="form-control" id="book_checkInDate" name="book_checkInDate"  required>
                            </div>
                             <div class="form-group mb-30">
                                <label for="book_checkOutDate">Check Out *</label>
                                  <input type="date" class="form-control" id="book_checkOutDate" name="book_checkOutDate" required>
                            </div>
                            <!--<div class="form-group mb-30">-->
                            <!--    <label for="book_checkInDate">Date *</label>-->
                            <!--    <div class="input-daterange" id="datepicker">-->
                            <!--        <div class="row no-gutters">-->
                            <!--            <div class="col-6">-->
                            <!--                <input type="text" class="input-small form-control" name="book_checkInDate" id="book_checkInDate" placeholder="Check In" required>-->
                                            
                            <!--            </div>-->
                            <!--            <div class="col-6">-->
                            <!--                <input type="text" class="input-small form-control" name="book_checkOutDate" placeholder="Check Out" required>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="form-group mb-30">
                                <label for="book_adults">Adults</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="book_adults" id="book_adults" class="form-control">
                                            <option value="">Adults</option>
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
                                    <div class="col-6">
                                        <select name="book_children" id="book_children" class="form-control">
                                            <option value="">Children</option>
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
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="book_package">Room Category *</label>
                               
                                        <select name="book_package" id="book_package" class="form-control" required>
                                            <option value="">--Select rooms--</option>
                                            @foreach($allpackage as $value)
                                                <option value="{{$value->title}}">{{$value->title}}</option>
                                            @endforeach
                                        </select>
                             
                                </div>
                            <br> <br>
                            <h4>Guest Details</h4>
                            <div class="form-group mb-30">
                                <label for="book_name">Full Name *</label>
                                    <div class="row no-gutters">
                                      <input type="text" class="form-control" id="book_name" name="book_name" placeholder="please enter your full name" required>  
                                    </div> 
                            </div>
                            <div class="form-group mb-30">
                                <label for="book_email">Email Address  *</label>
                                    <div class="row no-gutters">
                                      <input type="email" class="form-control" id="book_email" name="book_email" placeholder="please enter your email address" required>
                                        
                                    </div> 
                            </div>
                            <div class="form-group mb-30">
                                <label for="book_phone">Phone Number  *</label>
                                    <div class="row no-gutters">
                                      <input type="email" class="form-control" id="book_phone" name="book_phone" placeholder="please enter your phone number" required>
                                        
                                    </div> 
                            </div>
                            <div class="form-group mb-30">
                                <label for="book_passport">Upload Passport *</label>
                                    <div class="row no-gutters">
                                     <input type="file" class="form-control-file" id="book_passport" name="book_passport" required>
                                    </div> 
                            </div>
                              <div class="form-group mb-30">
                                    <div class="row no-gutters">
                                      <input type="text" class="form-control" id="book_ai" name="book_ai" placeholder="additional information" >  
                                    </div> 
                              </div>
                            <div class="form-group">
                                <button type="submit" class="btn quicktech-btn w-100">Book Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="single-widget-area mb-100 related-room">
                            <h4 class="widget-title mb-30">Related Room</h4>

                            @foreach($allpackage as $value)
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                 @foreach($productimage as $proimage)
                                 @if($value->id==$proimage->product_id)
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="{{asset($proimage->image)}}" alt=""></a>
                                    </div>
                                  @break
                                  @endif
                                  @endforeach
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}" class="post-author">{{$value->newprice}}</a>
                                        <a href="{{url('room-details/'.$value->slug.'/'.$value->id)}}" class="post-tutorial">{{$value->perday}}</a>
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
    <!-- Rooms Area End -->

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
