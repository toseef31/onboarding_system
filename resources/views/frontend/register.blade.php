@extends('frontend.layouts.master')
@section('styling')
<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/telphone_input/build/css/intlTelInput.min.css')}}">
<style>
	.iti{
		display: block;
	}
</style>
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-xs-12">
			<h5 class="text-uppercase mb-5 mt-5">Create Account</h5>
			<div class="signup-form mb-5 mt-5">
				<form action="" method="post">
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label>First Name</label>
				  			<input type="text" class="form-control" placeholder="Enter firstname" id="fname">
				  		</div>	
				  		<div class="col-md-6">
				  			<label>Surname</label>
				  			<input type="text" class="form-control" placeholder="Enter surname" id="surname">
				  		</div>	
				  	</div>
				  </div>
				  <div class="form-group">
				  	<label>Company Name</label>
				    <input type="text" class="form-control" placeholder="Enter company name" id="company_name">
				  </div>
				  <div class="form-group">
				  	<label>Company Name</label>
				    <input type="email" class="form-control" placeholder="Enter email" id="email">
				  </div>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label>Password</label>
				  			<input type="password" class="form-control" placeholder="Enter password" id="password" autocomplete="off">
				  		</div>	
				  		<div class="col-md-6">
				  			<label>Confirm Password</label>
				  			<input type="password" class="form-control" placeholder="Enter confirm password" id="confirm_password" autocomplete="off">
				  		</div>	
				  	</div>
				  </div>
				  <div class="form-group">
				  	<label>Phone Number</label>
				    <input type="tel" class="form-control" placeholder="Enter phone number" id="phone_number">
				  </div>
				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> I agree to <a href="">terms & conditions</a>
				    </label>
				  </div>
				  <a href="{{url('login')}}" type="submit" class="btn btn-danger">Signup</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend-assets/telphone_input/build/js/intlTelInput.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend-assets/telphone_input/build/js/intlTelInput-jquery.js')}}"></script>
<script>
  var input = document.querySelector("#phone_number");
  window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
    utilsScript: "frontend-assets/telphone_input/build/js/utils.js",
  });
</script>
@endsection