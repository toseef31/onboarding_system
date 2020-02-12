@extends('frontend.dashboard.layout.master')

@section('title', 'User Portal')

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
      <div class="row main-row box-grid-row">
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-warning text-center">
                    <i class="ti-panel"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('user-portal/dashboard')}}">
                    <div class="numbers">
                      Dashboard
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-success text-center">
                    <i class="ti-user"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('user-portal/manage-profile')}}">
                    <div class="numbers">
                      User Profile Management
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-danger text-center">
                    <i class="ti-pulse"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('user-portal/create-extension')}}">
                    <div class="numbers">
                      Telephone Setting
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-pencil-alt2"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('user-portal/call-report')}}">
                    <div class="numbers">
                      Call Reporting
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-map"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('user-portal/disposition-call-report')}}">
                    <div class="numbers">
                      Disposition of calls report
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-receipt"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('user-portal/billing-info')}}">
                    <div class="numbers">
                      Billing Information
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-image"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('/update-pricing-plan')}}">
                    <div class="numbers">
                      Upgrade package
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-comments"></i>
                  </div>
                </div>
                <div class="col-xs-12">
                  <a href="{{url('')}}">
                    <div class="numbers">
                      WebRTC
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-3">
                  <div class="icon-big icon-info text-center">
                    <i class="fa fa-car"></i>
                  </div>
                </div>
                <div class="col-xs-9">
                  <a href="{{url('/dashboard/user-rides')}}">
                    <div class="numbers">
                      My Rides
                    </div>
                  </a>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div> -->
       
        <!-- <div class="col-lg-4 col-sm-6">
          <div class="cards">
            <div class="content">
              <div class="row">
                <div class="col-xs-3">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-comments"></i>
                  </div>
                </div>
                <div class="col-xs-9">
                  <div class="numbers">
                    Chat box
                  </div>
                </div>
              </div>
              <div class="footer">
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection
