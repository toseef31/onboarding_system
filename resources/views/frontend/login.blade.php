@extends('frontend.layouts.master')
@section('styling')
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5 col-xs-12">
		@if(Session::has('verify'))
               <div class="alert alert-success">
                  {{ Session::get('verify') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               @endif
			<div class="login-form">
				<form action="" method="post">
					{{ csrf_field() }}
				  <div class="form-group">
				    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
				  </div>
				  <div class="form-group form-check">
				    <label class="form-check-label text-danger">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-danger">Submit</button>
					 <a href="{{url('/register')}}" class="pull-right" style="float:right">Creat new account</a>
				</form>
 
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

@endsection