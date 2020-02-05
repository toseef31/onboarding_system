@extends('frontend.dashboard.layout.master')

@section('title', 'My Profile')

@section('styling')
<style>
.field-icon {
  float: right;
  right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
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
                    <a class="navbar-brand" href="#">Change Password/Mobile Number/Email</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid app-view-mainCol">
                <div class="row">
                <div class="cards">
                  <div class="header">
                <h4 class="title">Change Mobile Number</h4>
            </div>
            <div class="content">
                <form class="form-change1">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="mobile" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Current Mobile Number</label>
                                <input type="number" class="form-controls border-input" name="current_no" placeholder="Enter Current Mobile Number" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter New Mobile Number</label>
                                <input type="number" class="form-controls border-input" name="new_no"  placeholder="Enter New Mobile Number" required>
                            </div>
                            <button type="submit" class="btn btn-danger btn-fill btn-wd" style="float:right">Send Verify Code</button>
                        </div>
                       
                    </div>
                    
                    </form>

                      <form class="form-changemobile" id="mobile_verify" style="display:none">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Verification Code</label>
                                <input type="text" class="form-controls border-input" name="user_code"  placeholder="Verification Code" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill btn-wd" style="float:right">Change Mobile Number</button>
                        </div>
                       
                      </div>
                    
                    </form>
                    </div>
                    
                  <div class="header">
                <h4 class="title">Change Email</h4>
            </div>
            <div class="content">
                <form class="form-change2">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="email" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Current Email</label>
                                <input type="email" class="form-controls border-input" name="current_no" placeholder="Enter Current Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter New Email</label>
                                <input type="email" class="form-controls border-input" name="new_no"  placeholder="Enter New Email" required>
                            </div>
                            <button type="submit" class="btn btn-danger btn-fill btn-wd" style="float:right">Send Verify Code</button>
                        </div>
                       
                    </div>
                    
                    </form>
                    <form class="form-changeemail" id="email_verify" style="display:none">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Verification Code</label>
                                <input type="text" class="form-controls border-input" name="user_code"  placeholder="Verification Code" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill btn-wd" style="float:right">Change Email</button>
                        </div>
                       
                      </div>
                    
                    </form>
                    </div>
            <div class="header">
                <h4 class="title">Change Password</h4>
            </div>
            <div class="content">
                <form class="form-change">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Current Password</label>
                                <input id="password-field" type="password" class="form-controls border-input" name="oldpass" placeholder="Enter Current Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter New Password</label>
                                <input id="password-field1" type="password" class="form-controls border-input" name="currentpass"  placeholder="Enter New Password" required>
                                <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill btn-wd" style="float:right">Change Password</button>
                        </div>
                       
                    </div>
                    
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>

       


    </div>
    @endsection

    @section('script')
    <script type="text/javascript" charset="utf-8">
    $('form.form-change').submit(function(e){
	$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
	var formdata = $('form.form-change').serialize(); 
	console.log(formdata);
	$.ajax({
		type: 'post',
		data: formdata,
        dataType: 'json',
		url: "{{ url('dashboard/changepassword') }}",
		success: function(response){
            console.log(response)
			if(response=='1'){
			toastr.success('Change password successfully', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
            else{
                toastr.error('Your current password not match', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
        }

	});
	e.preventDefault();
})
</script>

<script type="text/javascript" charset="utf-8">
    $('form.form-change1').submit(function(e){
	$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
	var formdata = $('form.form-change1').serialize(); 
	console.log(formdata);
	$.ajax({
		type: 'post',
		data: formdata,
        dataType: 'json',
		url: "{{ url('dashboard/changemobile') }}",
		success: function(response){
            console.log(response)
			if(response=='1'){
			toastr.success('Please check your mobile for verification code', '', {timeOut: 5000, positionClass: "toast-top-right"});
          $('#mobile_verify').show();
            }
            else{
                toastr.error('Your current password not match', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
        }

	});
	e.preventDefault();
})
</script>

<script type="text/javascript" charset="utf-8">
    $('form.form-change2').submit(function(e){
	$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
	var formdata = $('form.form-change2').serialize(); 
	console.log(formdata);
	$.ajax({
		type: 'post',
		data: formdata,
        dataType: 'json',
		url: "{{ url('dashboard/changeemail') }}",
		success: function(response){
            console.log(response)
			if(response=='1'){
			toastr.success('Please check your mobile for verification code', '', {timeOut: 5000, positionClass: "toast-top-right"});
           $('#email_verify').show();
            }
            else{
                toastr.error('Your current email not match', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
        }

	});
	e.preventDefault();
})
</script>


<script type="text/javascript" charset="utf-8">
    $('form.form-changemobile').submit(function(e){
	$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
	var formdata = $('form.form-changemobile').serialize(); 
	console.log(formdata);
	$.ajax({
		type: 'post',
		data: formdata,
        dataType: 'json',
		url: "{{ url('dashboard/verifynum') }}",
		success: function(response){
            console.log(response)
			if(response=='1'){
			toastr.success('Change mobile number successfully', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
            else{
                toastr.error('Verification code not match', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
        }

	});
	e.preventDefault();
})
</script>


<script type="text/javascript" charset="utf-8">
    $('form.form-changeemail').submit(function(e){
	$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
	var formdata = $('form.form-changeemail').serialize(); 
	console.log(formdata);
	$.ajax({
		type: 'post',
		data: formdata,
        dataType: 'json',
		url: "{{ url('dashboard/verifyemail') }}",
		success: function(response){
            console.log(response)
			if(response=='1'){
			toastr.success('Change email successfully', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
            else{
                toastr.error('Verification code not match', '', {timeOut: 5000, positionClass: "toast-top-right"});
            }
        }

	});
	e.preventDefault();
})
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
    @endsection