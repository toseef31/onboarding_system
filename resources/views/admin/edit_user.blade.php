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
                        <a class="navbar-brand" href="#pablo">User Management</a>
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
                                <h4 class="card-title"> Edit User</h4>
                            </div>
                             @include('frontend.includes.messages')
                            <div class="row" style="margin: 0;">
                            	<div class="col-md-12">
                            		<form action="" method="post">
                  			          {{ csrf_field() }}
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <label>First name</label>
                                        <input type="text" name="f_name" class="form-control" value="{{$user->f_name}}">
                                      </div>
                                      <div class="col-md-6">
                                          <label>Last name</label>
                                          <input type="text" name="sur_name" class="form-control" value="{{$user->sur_name}}">
                                      </div>    
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="company_name" class="form-control" value="{{$user->company_name}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="mobile" class="form-control" value="{{$user->mobile}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Number of Employees</label>
                                    <input type="number" name="no_of_employees" class="form-control" value="{{$user->no_of_employees}}">
                                  </div>                 
                                  <div class="form-group">
                                    <label>Business Nature</label>
                                    <input type="text" name="business_nature" class="form-control" value="{{$user->business_nature}}">
                                  </div>                 
                                  <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                      <option value="active" {{$user->status ==  'active' ? 'selected' : ''}}>Active</option>
                                      <option value="inactive" {{$user->status ==  'inactive' ? 'selected' : ''}}>InActive</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="">
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add </button>
                                  </div>
                            		</form>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection
