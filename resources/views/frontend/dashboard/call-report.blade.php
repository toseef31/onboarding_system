@extends('frontend.dashboard.layout.master')

@section('title', 'Call Reporting')

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
        <a class="navbar-brand" href="#">Call Reporting</a>
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
              <h4 class="title">Phone Status</h4>
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
            </div>
            <hr>
            <div class="header">
              <h4 class="title">Incoming Call Status</h4>
            </div>
            <div class="content">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Call Status</th>
                      <th>Total Calls</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Waiting</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Answered</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Missed</td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
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
