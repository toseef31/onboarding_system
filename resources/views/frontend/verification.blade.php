@extends('frontend.layouts.master')
@section('styling')

@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5">
			<div class="verification-form shadow p-3 mt-5 mb-5 bg-white rounded">
				<form action="" method="post">
					<h5 class="text-uppercase mb-3 mt-1">Verification</h5>
					{{csrf_field()}}
					<div class="form-group">
						<label>Code:</label>
						<input class="form-control"  type="number" name="pincode" placeholder="Enter Code" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block" name="login">Submit Verfication Code</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection