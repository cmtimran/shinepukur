@extends('frontEnd.layouts.master')
@section('title','Company Profile')
@section('content')
<!-- header end -->
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-text">
						<h3>Company Profile</h3>
						<p>we always give best service</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="profile-pdf section-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">	
					<div class="pdf-heading">
						<h2>Gateway Information Technology</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="company-pdf">
						@foreach($profilepdfs as $value)
						<embed src="{{asset($value->pdf)}}" type="application/pdf" width="100%" height="600px" />
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection