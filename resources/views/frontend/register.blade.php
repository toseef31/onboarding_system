@extends('frontend.layouts.master')
@section('styling')

<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/telphone_input/build/css/intlTelInput.css')}}">
<style>
	.iti{
		display: block;
	}
	.intl-tel-input .flag-dropdown .selected-flag {
    margin: 10px 6px;
    padding: 6px 16px 6px 6px;
	}
	.intl-tel-input input{
		padding-left: 47px !important;
	}
</style>
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-xs-12">
		  @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
             @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
          </ul>
        </div>
      @endif
			<div class="signup-form mb-5 mt-5">
				<form action="{{ url('/register') }}" method="post">
				{{ csrf_field() }}
					<h5 class="text-uppercase mb-3 mt-5">Find a Number</h5>
					<div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label>Local</label>
				  			<select class="form-control" name="local">
				  				<option>Singapore</option>
				  			</select>
				  		</div>	
				  		<!-- <div class="col-md-4">
				  			<label>Location</label> 
				  			<select class="form-control" name="location">
				  				<option>Singapore</option>
				  			</select>
				  		</div> -->	
				  		<div class="col-md-6">
				  			<label>Choose Number</label>
				  			<select class="form-control" name="choice_number">
				  				<option>+65-51-4898947</option>
				  				<option>+65-51-4898947</option>
				  				<option>+65-82-4898947</option>
				  			</select>
				  		</div>	
				  	</div>
				  </div>
					<h5 class="text-uppercase mb-3 mt-4">Create Account</h5>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label>First Name</label>
				  			<input type="text" class="form-control" placeholder="Enter firstname" id="f_name" name="f_name">
				  		</div>	
				  		<div class="col-md-6">
				  			<label>Surname</label>
				  			<input type="text" class="form-control" placeholder="Enter surname" id="sur_name" name="sur_name">
				  		</div>	
				  	</div>
				  </div>
				  <div class="form-group">
				  	<label>Company Name</label>
				    <input type="text" class="form-control" placeholder="Enter company name" id="company_name" name="company_name">
				  </div>
				  <div class="form-group">
				  	<label>Email</label>
				    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
				  </div>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label>Password</label>
				  			<input type="password" class="form-control" placeholder="Enter password" id="password" name="password" autocomplete="off">
				  		</div>	
				  		<div class="col-md-6">
				  			<label>Confirm Password</label>
				  			<input type="password" class="form-control" placeholder="Enter confirm password" id="confirm_password" autocomplete="off">
				  		</div>	
				  	</div>
				  </div>
				  <div class="form-group">
				  	<label>Phone Number</label>
				    <input type="tel"  class="form-control" placeholder="Enter phone number" id="phone_number" name="mobile">
				  </div>
				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox" id="terms" required> I agree to <a href="">terms & conditions</a>
				    </label>
				  </div>
				  <button type="submit" class="btn btn-danger" id="Signup" disabled>Signup</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
<script>
$(document).on("click","#terms",function(){
        if($(this).prop("checked") == true){
        	$(':input[type="submit"]').prop('disabled', false);
        }
        else if($(this).prop("checked") == false){
        	$(':input[type="submit"]').prop('disabled', true);
        }
    });
   $("#phone_number").intlTelInput();
</script>
@endsection