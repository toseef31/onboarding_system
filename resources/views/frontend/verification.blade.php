@extends('frontend.layouts.master')
@section('styling')

@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center mt-5 mb-5">
		<div class="col-md-5">
		@if(Session::has('fNotice'))
        <div class="alert alert-danger" style="margin-top:12px">
           {{ Session::get('fNotice')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
			<div class="verification-form shadow p-3 mt-5 mb-5 bg-white rounded">
				<form action="" method="post">
					<h5 class="text-uppercase mb-3 mt-1">Verify your mobile number</h5>
					{{csrf_field()}}
					<div class="form-group">
						<label>Code:</label>
						<input class="form-control"  type="number" name="verify_code" placeholder="Enter Code" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit Verfication Code</button>
						<a href="" class="btn btn-info w-50">Resend Code</a>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection