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
	@foreach($plans as $plan)
		<div class="col text-center text-white mb-3 px-1">
			<div class="subscribe-box bg-dark p-3 pt-5 pb-5 rounded">
				<h6 class="text-capitalize">{{$plan->name}}</h6>
				<h1 class="mt-4 mb-4">@if($plan->cost ==0.00) Free @else ${{$plan->cost}} @endif<sub class="h6">months</sub></h1>
				<div class="border-top"></div>
				<ul class="list-group align-items-start mt-4">
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> {{$plan->land_number}}</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> {{$plan->extension}}</li>
					<li class="list-group-item bg-dark border-0 text-start"><i class="fas fa-check pr-2"></i> {{$plan->virtualassistant}}</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> {{$plan->incomming}}</li>
					<li class="list-group-item bg-dark border-0"><i class="fas fa-check pr-2"></i> {{$plan->freemints}}</li>
				</ul>
				<!-- <p class="pt-1 pb-1">Up to 3 users</p> -->
				@if(!auth()->user()->subscribedToPlan($plan->stripe_plan, 'main'))
                          <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-danger btn-block mt-5 py-2">Get Plan</a>
                 
				 @else
				 <button class="btn btn-success btn-block mt-5 py-2">Your Current Plan</button>
				  @endif
				<!--<a href="{{url('/user-portal')}}" class="btn btn-danger btn-block mt-5 py-2">Get Plan</a>-->
			</div>
		</div>
		@endforeach
		
	<!-- End Box -->
	</div>
</div>
@endsection
@section('script')
@endsection
