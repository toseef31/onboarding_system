<div class="sidebar" data-color="#072f44" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo text-center">
        <!-- <a href="{{url('/')}}" class="simple-text logo-mini">
          <div class="logo-image-small">
          
          </div>
        </a> -->
        <a href="{{url('/')}}" class="simple-text logo-normal">
          Nautilus 
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        @if(Session::get('chat_admin')->role =='admin')
          <li class="{{ request()->is('/dashboard') ? 'active' : '' }} ">
            <a href="{{url('/dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
           <li class="{{ request()->is('/dashboard/user_management') ? 'active' : '' }}">
            <a href="#manageUsers"  data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="manageUsers">
              <i class="fas fa-users"></i>
              <p>User Management</p>
            </a>
            <ul class="collapse" id="manageUsers">
              <li><a href="{{url('dashboard/user_management')}}"><i class="fas fa-user-plus" style="font-size: 17px; margin-right: 0;"></i>  Add New User </a></li>
              <li><a href="{{url('dashboard/user_management')}}"><i class="fas fa-eye" style="font-size: 17px; margin-right: 0;"></i> View Users </a></li>
            </ul>
          </li>
          @endif
          @if(Session::get('chat_admin')->role =='admin' || Session::get('chat_admin')->role =='a')
          <li class="{{ request()->is('/dashboard/numbers/create') ? 'active' : '' }}">
            <a href="#manageJobs"  data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="manageJobs">
              <i class="fas fa-phone"></i>
              <p>Landline Numbers</p>
            </a>
            <ul class="collapse" id="manageJobs">
              <li><a href="{{url('dashboard/numbers/create')}}"><i class="fas fa-plus" style="font-size: 17px; margin-right: 0;"></i>  Add New Numbers</a></li>
              <li><a href="{{url('dashboard/numbers')}}"><i class="fas fa-eye" style="font-size: 17px; margin-right: 0;"></i> View Numbers</a></li>
            </ul>

          </li>
           @endif
         
           @if(Session::get('chat_admin')->role =='admin')
        
          <!--<li>
            <a class="" data-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="customer">
              <i class="nc-icon nc-diamond"></i>
              <p>Blogs</p>
            </a>
            <ul class="collapse" id="blog">
              <li><a href="{{url('/dashboard/blogs')}}">Blogs</a></li>
            </ul>
          </li>-->
         
         
          @endif
           @if(Session::get('chat_admin')->role =='admin' || Session::get('chat_admin')->role =='c')
          <li>
            <a href="{{url('dashboard/payments')}}">
              <i class="far fa-money-bill-alt"></i>
              <p>Payments</p>
            </a>
          </li>
          @endif
           @if(Session::get('chat_admin')->role =='admin')
          <li>
            <a href="">
              <i class="fas fa-question"></i>
              <p>Help Menu</p>
            </a>
          </li>
          @endif
		   <li>
            <a href="{{ url('dashboard/logout') }}">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
