@extends('frontend.layouts.master')
@section('styling')
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center mb-5 mt-5">
		<div class="col-md-10 text-center">
			<h1 class="mb-5">Nautilus <span class="text-danger">Pricing Plans</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
		</div>
	</div>
	<!-- Subscription Box -->
	<div class="row justify-content-center mb-5 mt-5">
		<div class="col text-center text-white">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus free</h6>
				<h1 class="mt-3 mb-3">Free<sub class="h6">months</sub></h1>
				<p class="pt-1 pb-1">Up to 3 users</p>
				<a href="{{url('/dashboard')}}" class="btn btn-danger">Subscribe</a>
			</div>
		</div>
		<div class="col text-center text-white">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Basic</h6>
				<h1 class="mt-3 mb-3">$90<sub class="h6">months</sub></h1>
				<p class="pt-1 pb-1">Up to 5 users</p>
				<a href="{{url('/dashboard')}}" class="btn btn-danger">Subscribe</a>
			</div>
		</div>
		<div class="col text-center text-white">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Standard</h6>
				<h1 class="mt-3 mb-3">$150<sub class="h6">months</sub></h1>
				<p class="pt-1 pb-1">Up to 10 users</p>
				<a href="{{url('/dashboard')}}" class="btn btn-danger">Subscribe</a>
			</div>
		</div>
		<div class="col text-center text-white">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Premium</h6>
				<h1 class="mt-3 mb-3">$240<sub class="h6">months</sub></h1>
				<p class="pt-1 pb-1">Up to 20 users</p>
				<a href="{{url('/dashboard')}}" class="btn btn-danger">Subscribe</a>
			</div>
		</div>
		<div class="col text-center text-white">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Enterprise</h6>
				<h1 class="mt-3 mb-3">$300<sub class="h6">months</sub></h1>
				<p class="pt-1 pb-1">Up to 30 users</p>
				<a href="{{url('/dashboard')}}" class="btn btn-danger">Subscribe</a>
			</div>
		</div>
	</div>
	<!-- End Box -->
</div>
@endsection
@section('script')
@endsection
