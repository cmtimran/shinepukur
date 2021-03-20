<!--     
    Theme Name: QuickTech Limited
    Author: QuickTech Limited 
    Author URI: http://quicktech-ltd.com
    Description: QuicTech IT maintain standard quality for Website and Creative Design
    Version: 23.0.0 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Shinepukur Suites | boutique hotel par excellence </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('public/frontEnd')}}/img/core-img/favicon.png">
    
  <link rel="stylesheet" href="{{asset('public/backEnd/')}}/dist/css/toastr.min.css">
  <!-- custom css -->
    <link rel="stylesheet" href="{{asset('public/frontEnd')}}/style.css">

</head>

<body>


    <!-- Header Area Start -->
    <header class="header-area">


        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="tel:+8802-55045682-5"><i class="icon_phone"></i> <span>+8802-55045682-5 </span></a>
                            <a href="mailto:it@shinepukursuites.com"><i class="icon_mail"></i> <span>it@shinepukursuites.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="https://www.facebook.com/shinepukursuitesbd/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/shinepukur_suite/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="quicktechNav">

                        <!-- Logo -->
                        <a class="nav-brand " href="{{url('/')}}"><img src="{{asset('public/frontEnd')}}/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('our-rooms')}}">Rooms</a></li>
                                    <li><a href="{{url('resturant')}}">Restaurant</a></li>

                                    <li><a href="{{url('banquet-hall')}}">Banquet Hall </a></li>

                                    <li><a href="{{url('gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact</a></li>
                                    <li><a style="color: red;" href="{{url('/offer')}}"> Offers</a></li>
                                </ul>



                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="{{url('book-now')}}"> Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    @yield('content')

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="{{asset('public/frontEnd')}}/img/core-img/logo2.png" alt=""></a>

                            <h4> +8802-55045682-5 <br> +8801958-606044</h4>
                            <span>it@shinepukursuites.com</span>
                            <span>House # 8/C | Road # 143 | Gulshan-1 | Dhaka-1212</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Our Blog</h5>

                            @foreach($blogs as $value)
                            <div class="latest-blog-area">
                                <a href="{{url('/blog-details/'.$value->id.'/'.$value->slug)}}" class="post-title">{{$value->title}}</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> {{date('M d, Y', strtotime($value->created_at))}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="{{url('/about')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                <li><a href="{{url('/our-rooms')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Rooms</a></li>
                                <li><a href="{{url('resturant')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Restaurant</a></li>
                                <li><a href="{{url('gallery')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Gallery </a></li>

                                <li><a href="{{url('offer')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>  Offers </a></li>
                                <li><a href="{{url('book-now')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>  Book Now  </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter for get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="{{url('/visitor/subscribe')}}" class="nl-form" method="POST">
                                @csrf
                                <input type="email" class="form-control" name="subscribe_email" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>

                                © 2020 Shinepukur Suites. All rights reserved |  Design & Developed by <a href="https://quicktech-ltd.com" target="_blank">Quicktech IT.</a>

                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="https://www.facebook.com/shinepukursuitesbd/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/shinepukur_suite/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{asset('public/frontEnd')}}/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="{{asset('public/frontEnd')}}/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/backEnd/')}}/dist/js/toastr.min.js"></script>
    <!-- Toastr -->
    {!! Toastr::message() !!}
    <script src="{{asset('public/frontEnd')}}/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="{{asset('public/frontEnd')}}/js/quicktech.bundle.js"></script>
    <!-- Active -->
    <script src="{{asset('public/frontEnd')}}/js/default-assets/active.js"></script>
    
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eda02c74a7c62581799f932/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
