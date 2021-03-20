@extends('frontEnd.layouts.master')
@section('title','Pricing')
@section('content')
<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-text">
						<h3>Pricing</h3>
						<p>we always give best service</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="package-content">
		<div class="container">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<div class="package-category">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="price-bar">
								<ul>
									<li class="active">Pricing</li>
									<li>{{$breadcrumb->name}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- head row end -->
					<div class="row">
						@foreach($show_data as $value)
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="single-package">
								<div class="package-img">
									<img src="{{asset($value->image)}}" alt="">
								</div>
								<div class="package-fashilities">
									<ul>

										@foreach($packagelists as $packagelist)
                                          @if($value->id==$packagelist->package_id) <li><i class="fa fa-check"></i>{{$packagelist->list}}</li>
                                          @endif
                                        @endforeach

									</ul>
									<div class="view-details">
										<a id="demo{{$value->id}}" href="#animatedModal{{$value->id}}"  class="common-button">view details</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>
					<!-- package row end -->
				</div>
			
				<!-- package-category -->
			</div>
		</div>
	</div>
@endsection