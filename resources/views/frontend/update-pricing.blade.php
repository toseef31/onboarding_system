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
		<!-- <div class="col text-center text-white mb-3 px-1">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus free</h6>
				<h1 class="mt-4 mb-4">Free<sub class="h6">months</sub></h1>
				<div class="border-top"></div>
				<ul class="list-group align-items-start mt-4">
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> 1 landline number</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> 1 extensions</li>
					<li class="list-group-item bg-dark border-0 text-start"><i class="fas fa-check pr-2"></i> 2 interactive virtual assistant</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> Unlimited incoming calls</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> FREE 20 outgoing mins</li>
				</ul>
				<a href="{{url('/dashboard')}}" class="btn btn-danger btn-block mt-5 py-2">Upgrade Plan</a>
			</div>
		</div> -->
		<div class="col col-md-3  text-center text-white mb-3 px-1">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 mb-3 rounded">
				<h6 class="text-capitalize">Nautilus Basic</h6>
				<h1 class="mt-4 mb-4">$90<sub class="h6">months</sub></h1>
				<div class="border-top"></div>
				<ul class="list-group align-items-start mt-4">
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> 1 landline number</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> 2 extensions</li>
					<li class="list-group-item bg-dark border-0 text-start"><i class="fas fa-check pr-2"></i> 2 interactive virtual assistant</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> Unlimited incoming calls</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> FREE 50 outgoing mins</li>
				</ul>
				<!-- <p class="pt-1 pb-1">Up to 5 users</p> -->
				<a href="{{url('/dashboard')}}" class="btn btn-danger btn-block mt-5 py-2">Upgrade Plan</a>
			</div>
		</div>
		<div class="col col-md-3  text-center text-white mb-3 px-1">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Standard</h6>
				<h1 class="mt-4 mb-4">$150<sub class="h6">months</sub></h1>
				<div class="border-top"></div>
				<ul class="list-group align-items-start mt-4">
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> 1 landline number</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> 4 extensions</li>
					<li class="list-group-item bg-dark border-0 text-start"><i class="fas fa-check pr-2"></i> 4 interactive virtual assistant</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> Unlimited incoming calls</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> FREE 150 outgoing mins</li>
				</ul>
				<!-- <p class="pt-1 pb-1">Up to 10 users</p> -->
				<a href="{{url('/dashboard')}}" class="btn btn-danger btn-block mt-5 py-2">Upgrade Plan</a>
			</div>
		</div>
		<!-- <div class="col text-center text-white mb-3">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Premium</h6>
				<h1 class="mt-3 mb-3">$240<sub class="h6">months</sub></h1>
				<p class="pt-1 pb-1">Up to 20 users</p>
				<a href="{{url('/dashboard')}}" class="btn btn-danger">Subscribe</a>
			</div>
		</div> -->
		<div class="col col-md-3  text-center text-white mb-3 px-1">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">Nautilus Enterprise</h6>
				<h1 class="mt-4 mb-4">$300<sub class="h6">months</sub></h1>
				<div class="border-top"></div>
				<ul class="list-group align-items-start mt-4">
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> Everything we offer!</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> More than 50 extensions</li>
					<li class="list-group-item bg-dark border-0 text-start"><i class="fas fa-check pr-2"></i> Customisable virtual assistant</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> Customisable free minutes</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> IDD calling available</li>
				</ul>
				<!-- <p class="pt-1 pb-1">Up to 30 users</p> -->
				<a href="{{url('/dashboard')}}" class="btn btn-danger btn-block mt-5 py-2">Upgrade Plan</a>
			</div>
		</div>
	</div>
	<!-- End Box -->
</div>
@endsection
@section('script')
@endsection
