@extends('admin.layouts.master')
@section('content')
  <div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Landline Numbeers Management</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Session::get('chat_admin')->name}}
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('dashboard/logout') }}">Logout</a>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Numbers List</h4>
                <a href="{{url('/dashboard/numbers/create')}}" class="btn btn-success" type="button" name="button" style="Background: #87CB16; color: white; margin-top: -45px; float:right;">Add New Number</a>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  @if(session()->has('message'))
                    <div class="row">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <strong>Message:</strong>{{session()->get('message')}}
                      </div>
                    </div>
                  @endif
                  <table class="table">
                    <thead class=" text-primary">
                      <th colspan="">Number_id</th>
                      <th colspan="">Number</th>
                      <th colspan="">Status</th>
                      <th colspan="">Created Date</th>
                      <th class="">Action</th>
                    </thead>
                    <tbody>
                    @foreach($numbers as $jobs)
                      <tr>
                        <td colspan=""> {{$jobs->num_id}}</td>
                        <td colspan=""> {{$jobs->number}}</td>
                        <td colspan=""> @if($jobs->status == 0)Available @else Booked @endif</td>
                        <td colspan=""> {{$jobs->created_at}}</td>
                        <td class="">
                         
                          <i class="fa fa-edit text-primary"></i>
                         <a onclick="return confirm('Do you want to delete this item?')" href="{{ url('dashboard/numbers/delete/'.$jobs->num_id)}}" > <i class="fa fa-trash text-danger"></i> </a>
                          
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
      function myFunction() {

          var x =confirm("you want to delete this job ");
          if (x)
          {
              return true;
          }
          else
          {
              event.preventDefault();
              return false;
          }
      }
  </script>
@endsection

@section('script')
<script>
$('select').on('change', function() {
  var value=this.value;
  var id=$(this).parent().attr("data-id");
   $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
  $.ajax({
          type: "POST",
          url: "{{ url('dashboard/post_portal') }}",
          data: {job_id:id,value:value},
          success: function(data){
            //$('#treeviews').html(data);
            if(data ==1){
            toastr.success("Status Update");
            }
            console.log(data);
          }

    });

});
</script>
@endsection
