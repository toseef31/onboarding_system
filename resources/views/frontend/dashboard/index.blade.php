@extends('frontend.dashboard.layout.master')

@section('title', 'My Profile')

@section('styling')
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
                      <td>{{ $userplan->choice_number}}</td>
                      <td>Virtual Receptionist</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a href="" class="btn btn-success">Manage Number</a>

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
              <a href="" class="btn btn-success">Manage Call Reports</a>

            </div>
            <hr>

          </div>

        </div>
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
            		          <th>Package Info</th>
            		          <th>Card Owner</th>
            		          <th>Payment</th>
            		        </tr>
            		      </thead>
            		      <tbody>
            		        <tr>
            		          <td>{{ $userplan->name}}</td>
            		          <td>{{ $userplan->f_name}}</td>
            		          <td>$ {{ $userplan->cost}}</td>
            		        </tr>
            		      </tbody>
            		    </table>
            		  </div>
            		</div>
            	</div>
            	<div class="col-md-8">
            		<div class="header">
            		  <h4 class="title">Card Info</h4>
            		</div>
            		<div class="content">
            		  <div class="table-responsive">
            		    <table class="table  table-bordered">
            		      <thead>
            		        <tr>
            		          <th>Card No</th>
            		          <th>Card Type</th>
            		        </tr>
            		      </thead>
            		      <tbody>
            		        <tr>
            		          <td>*******{{ $userplan->card_last_four}}</td>
            		          <td>{{ $userplan->card_brand}}</td>
            		        </tr>
            		      </tbody>
            		    </table>
            		  </div>
            		</div>
            	</div>
            </div>
            <hr>
          </div>
        </div>


      </div>
    </div>
  </div>


</div>
@endsection

@section('script')


@endsection
