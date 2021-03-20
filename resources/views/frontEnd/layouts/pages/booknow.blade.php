@extends('frontEnd.layouts.master')
@section('title','Offer')
@section('content')

 <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url({{asset('public/frontEnd')}}/img/bg-img/16.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title">Book Now</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Book Now</li>
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
               

                <div class="col-12 col-lg-12">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                       <h4>Book Now</h4>
                        <form action="{{url('/visitor/booknow')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-30">
                                <label for="visitor_checkin">Date *</label>
                                <div class="input-daterange">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="date" class="form-control" id="book_checkInDate" name="book_checkInDate"  required>
                                        </div>
                                        <div class="col-6">
                                               <input type="date" class="form-control" id="book_checkOutDate" name="book_checkOutDate" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <label for="book_package">Room Category  *</label>
                                <select name="book_package" id="book_package" class="form-control" required>
                                    <option value="">--Select rooms--</option>
                                    @foreach($packages as $value)
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
                            <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group mb-30">
                                    <label for="book_email">Email Address  *</label>
                                     <div class="row no-gutters">
                                      <input type="book_email" class="form-control" id="book_email" name="book_email" placeholder="please enter your email address" required>
                                     </div> 
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                      <div class="form-group mb-30">
                                         <label for="book_phone">Phone Number  *</label>
                                         <div class="row no-gutters">
                                          <input type="book_phone" class="form-control" id="book_phone" name="book_phone" placeholder="please enter your phone number" required>
                                         </div> 
                                       </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="book_passport">Upload Passport *</label>
                                    <div class="row no-gutters">
                                     <input type="file" class="form-control-file" id="book_passport" name="book_passport" required>
                                      
                                    </div> 
                            </div>
                              <div class="form-group mb-30">
                                <label for="book_ai">Additional Information </label>
                                    <div class="row no-gutters">
                                      <input type="text" class="form-control" id="book_ai" name="book_ai" placeholder="additional information">
                                           
                                    </div> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn quicktech-btn w-100">Book Now</button>
                            </div>
                        </form>
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