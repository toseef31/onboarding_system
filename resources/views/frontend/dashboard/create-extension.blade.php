@extends('frontend.dashboard.layout.master')

@section('title', 'My Profile')

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

@include('frontend.dashboard.menu.menu')

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
				<a class="navbar-brand" href="#">Create Extension</a>
			</div>

		</div>
	</nav>


	<div class="content">
		<div class="container-fluid app-view-mainCol">
			<div class="row">
				<!-- <div class="col-lg-4 col-md-5 app-view-mainCol">
					<div class="cards cards-user">
						<div class="image">
							<img src="{{asset('frontend-assets/images/dashboard/background.jpg')}}" alt="...">
						</div>
						<div class="content">
							<div class="author">
								<div class="re-img-box">
									<img class="avatar border-white" src="" alt="...">
									<div class="re-img-toolkit">
										<div class="re-file-btn">
											Change <i class="fa fa-camera"></i>
											<input type="file" class="upload" id="imageFile"  name="image"  onchange="uploadpicture(this)">
										</div>

									</div>
								</div>

								<h4 class="title" id="userName">Zeeshan<br>

								</h4>
							</div>

						</div>
						<hr>
						<div class="text-center">
							<div class="row">

							</div>
						</div>
					</div>

				</div> -->
				<div class="col-lg-9 col-md-9 app-view-mainCol">
					<div class="cards">
						<div class="header">
							<h3 class="title">New Extension</h3>
							<hr>
						</div>
						<div class="content">
							<form class="form-horizontals profile-form" action="" method="post">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Extension Type</label> <br>
											<input type="radio" name="extension_type"> Personal &nbsp; &nbsp;
											<input type="radio" name="extension_type"> Department
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Role</label> <br>
											<input type="radio" name="role"> Admin &nbsp; &nbsp;
											<input type="radio" name="role"> Non Admin
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-controls border-input" disabled="" placeholder="First Name" value="">
										</div>
									</div>
								</div>
                <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Surname</label>
											<input type="text" class="form-controls border-input" disabled="" placeholder="Enter Surname" value="">
										</div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Email(login)</label>
											<input type="email" id="pac-input" class="form-controls border-input" placeholder="Emater your login email Address" name="password" value="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Mobile Phone Number</label>
											<input type="tel" class="form-controls border-input" placeholder="Mobile phone number" name="phone_number" value="" id="phone_number">
										</div>
									</div>
								</div> 

								<div class="text-center">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Add Extension</button>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
<script>

   $("#phone_number").intlTelInput();
</script>

@endsection
