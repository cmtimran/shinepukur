@extends('frontEnd.layouts.master')
@section('title','Our Services')
@section('content')
<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-text">
						<h3>{{$serviceposts->name}}</h3>
						<p>we always give best service</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="main-content section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="sidebar">
						<div class="single-sidebar">
							<div class="title">
								<h3>services</h3>
							</div>
							<div class="sidebar-content">
								<ul>
									@foreach($servicecategory as $key=>$service)
									<li><a href="{{url('our-service/'.$service->slug.'/'.$service->id)}}"><i class="fa fa-angle-double-right"></i>{{$service->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- single sidebar -->

						<div class="single-sidebar">
							<img src="{{asset('public/frontEnd/')}}/images/pearson.jpg" alt="">
						</div>
						<div class="single-sidebar">
							<div class="title">
								<h3>Our Pricing</h3>
							</div>
							<div class="sidebar-content">
								<ul>
									@foreach($packagecategories as $value)
										<li><a href="{{url('/pricing/'.$value->id.'/'.$value->slug)}}">{{$value->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- single sidebar -->
						<div class="single-sidebar moreinfo">
							<div class="sidebar-content">
								<div class="moreinfo-image">
									<img src="{{asset('public/frontEnd/')}}/images/sidebar-phone.png" alt="">
								</div>
								<div class="moreinfo-content">
									<h4>Any Information</h4>
									<h6>Call Us</h6>
									<p><a href="tel:01766666687">01766666687</a>,<a href="tel:01766666685">01766666685</a></p>
								</div>
							</div>
						</div>
						<!-- single sidebar -->
					</div>
				</div>
				<!-- sidebar content end -->
				<div class="col-lg-9 col-md-9 col-sm-6">
					<div class="content-area">
						<div class="title">
							<h4>{{$serviceposts->title}}</h4>
						</div>
						<div class="content-banner">
							<img src="{{asset($serviceposts->image)}}" alt="">
						</div>
						<div class="overview">
							<h4>Overview</h4>
						</div>
						<div class="content">
							{!!$serviceposts->overview!!}
						</div>
						<!-- <div class="feature">
							<div class="overview">
								<h4>Our ecommerce package</h4>
							</div>
							<div class="list">
								<table class="table table-bordered table-striped">
								  <thead>
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">Package Name</th>
								      <th scope="col">Total Cost</th>
								      <th scope="col">Renewal</th>
								      <th scope="col">More info</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">1</th>
								      <td>Ecommerce package-1</td>
								      <td>Tk 15000/-</td>
								      <td>Tk 4500/-</td>
								      <td><a href="single-price.html">view details</a></td>
								    </tr>
								    <!-- tr end -->
								    <tr>
								      <th scope="row">2</th>
								      <td>Ecommerce package-2</td>
								      <td>Tk 25000/-</td>
								      <td>Tk 4500/-</td>
								      <td><a href="single-price.html">view details</a></td>
								    </tr>
								    <!-- tr end -->
								    <tr>
								      <th scope="row">3</th>
								      <td>Ecommerce package-3</td>
								      <td>Tk 30000/-</td>
								      <td>Tk 4500/-</td>
								      <td><a href="single-price.html">view details</a></td>
								    </tr>
								    <!-- tr end -->
								    <tr>
								      <th scope="row">4</th>
								      <td>Ecommerce custom</td>
								      <td>depend on requirment</td>
								      <td>depend on requirment</td>
								      <td><a href="single-price.html">view details</a></td>
								    </tr>
								    <!-- tr end -->
								  </tbody>
								</table>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection