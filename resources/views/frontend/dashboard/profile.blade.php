@extends('frontend.dashboard.layout.master')

@section('title', 'My Profile')

@section('styling')
@endsection
@section('content')

@include('frontend.dashboard.menu.menu')

<?php
$userImage = url('frontend-assets/images/dashboard/new_logo.png');
if($userdata->user_image != ''){

	$userImage = url('frontend-assets/images/dashboard/profile-photos/'.$userdata->user_image);

}

?>
<div class="main-panel">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<a class="navbar-brand" href="#">User Profile</a>
			</div>

		</div>
	</nav>


	<div class="content">
		<div class="container-fluid app-view-mainCol">
			<div class="row">
				<div class="col-lg-4 col-md-5 app-view-mainCol">
					<div class="cards cards-user">
						<div class="image">
							<img src="{{asset('frontend-assets/images/dashboard/background.jpg')}}" alt="...">
						</div>
						<div class="content">
							<div class="author">
								<div class="re-img-box">
									<img class="avatar border-white" src="{{$userImage}}" alt="...">
									<div class="re-img-toolkit">
										<div class="re-file-btn">
											Change <i class="fa fa-camera"></i>
											<input type="file" class="upload" id="imageFile"  name="image"  onchange="uploadpicture(this)">
										</div>

									</div>
								</div>

								<h4 class="title" id="userName">{{ucfirst($userdata->user_firstname)}}<br>

								</h4>
							</div>

						</div>
						<hr>
						<div class="text-center">
							<div class="row">

							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-8 col-md-7 app-view-mainCol">
					<div class="cards">
						<div class="header">
							<h4 class="title">Edit Profile</h4>
						</div>
						<div class="content">
							<form class="form-horizontals">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-controls border-input" disabled="" placeholder="Company" value="{{$userdata->user_mobileNumber}}">
										</div>
									</div>
								</div>
                                 <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-controls border-input" disabled="" placeholder="Company" value="{{$userdata->user_email}}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-controls border-input"  name="user_firstname" value="{{ucfirst($userdata->user_firstname)}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-controls border-input" name="user_lastname" value="{{$userdata->user_lastname}}">
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Address</label>
											<input type="text" id="pac-input" class="form-controls border-input" placeholder="Home Address" name="address" value="{{$userdata->address}}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Street Address</label>
											<input type="text" class="form-controls border-input" placeholder="Home Address" name="address1" value="{{$userdata->address1}}">
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-md-4">
										<div class="form-group">
											<label>Country</label>
											<select class="form-controls border-input job-country " name="country">
												<option value="" >Select Country</option>
												@foreach(BookingYo::getJobCountries() as $cntry)
												<option value="{{ $cntry->id }}"  {{ $userdata->country == $cntry->id ? 'selected="selected"' : '' }}>{{$cntry->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>State</label>
											<select class="form-controls border-input job-state" name="state" data-state="{{ $userdata->state }}" required>
											<option value="0">Select State</option>
												@foreach(BookingYo::getJobStates($userdata->country) as $cntry)
												<option value="{{ $cntry->id }}"  {{ $userdata->state == $cntry->id ? 'selected="selected"' : '' }}>{{$cntry->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>City</label>
											<select class="form-controls border-input job-city" name="city" data-city="{{ $userdata->city }}" required>
											<option value="0">Select City</option>
												@foreach(BookingYo::getJobCities($userdata->state) as $cntry)
												<option value="{{ $cntry->id }}"  {{ $userdata->city == $cntry->id ? 'selected="selected"' : '' }}>{{$cntry->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div> 

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Pincode</label>
											<input type="number" id="pac-input" class="form-controls border-input" placeholder="Pincode" name="pincode" value="{{$userdata->pincode}}">
										</div>
									</div>
								</div>

								<div class="text-center">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
								</div>

								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>


</div>
@endsection

@section('script')
<script type="text/javascript" charset="utf-8">
var pageToken = '{{ csrf_token() }}';
$('form.form-horizontals').submit(function(e){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	var formdata = $('form.form-horizontals').serialize();
	console.log(formdata);
	$.ajax({
		type: 'post',
		data: formdata,
		dataType: 'json',

		url: "{{ url('dashboard/profileUpdate') }}",
		success: function(response){
			$('#userName').text(response.user_firstname);
			$('span#headerName').text(response.user_firstname);
			$('a#dash_Name').text(response.user_firstname+' '+response.user_lastname);
			toastr.success('update successfully', '', {timeOut: 5000, positionClass: "toast-top-right"});
		}

	});
	e.preventDefault();
})
$('.job-country').on('change',function(){
	var countryId = $(this).val();
	getStates(countryId,'job-state')
})
function getStates(countryId,cType){
	$.ajax({
		url: "{{ url('get-state') }}/"+countryId,
		success: function(response){
			var currentState = $('.'+cType).attr('data-state');
			// alert(currentState);
			var obj = $.parseJSON(response);
			$('.'+cType).html('');
			var newOption = new Option('Select State', '0', true, false);
			$('.'+cType).append(newOption).trigger('change');
			$.each(obj,function(i,k){
				var vOption = k.id == currentState ? true : false;
				var newOption = new Option(k.name, k.id, true, vOption);
				$('.'+cType).append(newOption);
			})
			$('.'+cType).trigger('change');
		}
	})
}
$('.job-state').on('change',function(){
	var stateId = $(this).val();
	getCities(stateId,'job-city');
})


function getCities(stateId,cType){
	if(stateId == '0'){
		$('.'+cType).html('').trigger('change');
		var newOption = new Option('Select City', '0', true, false);
		$('.'+cType).append(newOption).trigger('change');
		return false;
	}
	$.ajax({
		url: "{{ url('get-city') }}/"+stateId,
		success: function(response){
			var currentCity = $('.'+cType).attr('data-city');
			var obj = $.parseJSON(response);
			$('.'+cType).html('').trigger('change');
			var newOption = new Option('Select City', '0', true, false);
			$('.'+cType).append(newOption).trigger('change');
			$.each(obj,function(i,k){
				var vOption = k.id == currentCity ? true : false;
				var newOption = new Option(k.name, k.id, true, vOption);
				$('.'+cType).append(newOption).trigger('change');
			})
		}
	})
}

function uploadpicture(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	var formData = new FormData();
	formData.append('user_image', $('.upload')[0].files[0]);

	console.log(formData);
	$.ajax({
		url : "{{ url('dashboard/profile/picture') }}",
		type : 'POST',
		data :  formData,
		processData: false,
		contentType: false,
		timeout: 30000000,
		success : function(response) {
			if($.trim(response) != '1'){
				var splitURL = response.split("/");
				var userId = "{{ Session::get('bkyUser')->user_Id}}";
				$.ajax({
					url : 'https://peeklet.com:22000/updateUser/image',
					type : 'POST',
					data :  {id:userId,image:splitURL[7]},
					success : function(response) {
					}
				});
				$('img.border-white').attr('src',response);
				$('img#headerImage').attr('src',response);
			}else{
				alert('Following format allowed (PNG/JPG/JPEG)');
			}
		}
	});
}

</script>
<script>
  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  function initMap() {


    var input = document.getElementById('pac-input');


    var autocomplete = new google.maps.places.Autocomplete(input);

    // Bind the map's bounds (viewport) property to the autocomplete object,
    // so that the autocomplete requests use the current map bounds for the
    // bounds option in the request.


    // Set the data fields to return when the user selects a place.

    autocomplete.addListener('place_changed', function() {


      var place = autocomplete.getPlace();
      if (!place.geometry) {
        // User entered the name of a Place that was not suggested and
        // pressed the Enter key, or the Place Details request failed.
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
      var lat = place.geometry.location.lat(),
      lng = place.geometry.location.lng();

      // Then do whatever you want with them
      $('#lat').val(lat);
      $('#lng').val(lng);
      console.log(lat);
      console.log(lng);
    });


  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initMap" async defer></script>

@endsection
