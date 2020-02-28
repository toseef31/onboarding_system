@extends('frontend.dashboard.layout.master')

@section('title', 'My Profile')

@section('styling')
<link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/credit-card.css')}}">
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
        <a class="navbar-brand" href="#">Dashboard</a>
      </div>

    </div>
  </nav>


  <div class="content">
    <div class="container-fluid app-view-mainCol">
      <div class="row">
        <div class="col-lg-6 col-md-6 app-view-mainCol">
          <div class="cards cards-user">
            <div class="header">
              <h4 class="title">Telephone Setting</h4>
            </div>
            <div class="content">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Label</th>
                      <th>Number</th>
                      <th>Connect To</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Business Number</td>
                      <td>
                     @if(Boarding::Numberget($user->choice_number) != null)
                     @if(Boarding::Numberget($user->choice_number)->status == '3')
                       Unavailable
                     @else
                      {{Boarding::Numberget($user->choice_number)->number}} 

                      @endif
                     @else
                     <form action="{{ url('user-portal/changeNumber')}}" method="post" id="submitchangeNumber">
                      {{ csrf_field() }}
                      <select name="number" id="selectNumber" class="form-control" required="required">
                        <option value="">Select Number</option>
                        @foreach(Boarding::availableNumber() as $num)
                          <option value="{{$num->num_id}}">{{$num->number}}</option>
                          @endforeach
                      </select>
                     </form>
                     @endif
                      </td>
                      <td>Virtual Receptionist</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a href="{{url('user-portal/create-extension')}}" class="btn btn-fill">Manage Number</a>
             @if($userplan != null) <a href="{{url('user-portal/stopnumber/'.$user->choice_number)}}" onclick='deleteItem()' class="btn btn-warning">Stop Number</a>@endif

            </div>
            <hr>
            <div class="header">
              <h4 class="title">Call Reporting</h4>
            </div>
            <div class="content">
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th>Phone</th>
                      <th>State of Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>+60-3-2935-9078</td>
                      <td>Ringing</td>
                    </tr>
                    <tr>
                      <td>+60-3-2935-9078</td>
                      <td>Answered</td>
                    </tr>
                    <tr>
                      <td>+60-3-2935-9078</td>
                      <td>Hang up</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a href="{{url('user-portal/call-report')}}" class="btn btn-fill">Manage Call Reports</a>

            </div>
            <hr>

          </div>

        </div>
        @if($userplan != null)
        <div class="col-lg-6 col-md-6 app-view-mainCol">
           <div class="cards">
            <div class="row">
            	<div class="col-md-12">
            		<div class="header">
            		  <h4 class="title">Billing Information</h4>
            		</div>
            		<div class="content">
            		  <div class="table-responsive">
            		    <table class="table  table-bordered">
            		      <thead>
            		        <tr>
            		          <th>Package Name</th>
            		          <th>Card Owner</th>
            		          <th>Payment</th>
                          <th>Payment Date</th>
            		        </tr>
            		      </thead>
            		      <tbody>
            		        <tr>
            		          <td>{{ $userplan->name}}</td>
            		          <td>{{ $userplan->f_name}}</td>
            		          <td>$ {{ $userplan->cost}}</td>
                          <td>{{ $userplan->created_at}}</td>
            		        </tr>
            		      </tbody>
            		    </table>
            		  </div>
                <a href="{{url('/user-portal/billing-info')}}" class="btn btn-fill">Billing Info</a>
            		</div>
            	</div>
            </div>
            @endif
            
          </div>
            <div style="clear: both;"></div>
        </div>


      </div>
    </div>
  </div>


</div>
@endsection

@section('script')
<script>
function deleteItem() {
    if (confirm("Are you sure?")) {
        // your deletion code
    }
    return false;
}
$('#selectNumber').change(function(){
  $('#submitchangeNumber').submit();
})
</script>
@endsection
