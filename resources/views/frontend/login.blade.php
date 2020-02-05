@extends('frontend.layouts.master')
@section('styling')
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5 col-xs-12">
			<div class="login-form">
				<form action="" method="post">
				  <div class="form-group">
				    <input type="email" class="form-control" placeholder="Enter email" id="email">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
				  </div>
				  <div class="form-group form-check">
				    <label class="form-check-label text-danger">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div>
				  <a href="{{url('/pricing-plan')}}" type="submit" class="btn btn-danger">Submit</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection