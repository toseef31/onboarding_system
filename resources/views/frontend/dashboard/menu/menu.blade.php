<div class="sidebar hidden-xs" data-background-color="black" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text" id="dash_Name">
                    Zeeshan
                </a>
            </div>

            <ul class="nav">
                <li  class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{url('/dashboard')}}">
                        <i class="ti-panel"></i>
                        <p>Company</p>
                    </a>
                </li>
                <li class="{{ request()->is('dashboard/profile') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/profile')}}">
                        <i class="ti-user"></i>
                        <p>User Account</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('/dashboard/changepassword')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Telephone Setting</p>
                    </a>
                </li>
                <li class="{{ request()->is('dashboard/favorite') ? 'active' : '' }}">
                    <a href="typography.html">
                        <i class="ti-pulse"></i>
                        <p>My Favorites</p>
                    </a>
                </li>
                
                <li class="{{ request()->is('dashboard/coupan') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/coupan')}}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Call Reporting</p>
                    </a>
                </li>
                
                <li class="{{ request()->is('dashboard/listing') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/listing')}}">
                        <i class="ti-map"></i>
                        <p>Disposition of calls report</p>
                    </a>
                </li>
                 <li class="{{ request()->is('dashboard/news') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/news')}}">
                        <i class="ti-receipt"></i>
                        <p>Billing Information</p>
                    </a>
                </li>
                
                 <li class="{{ request()->is('dashboard/listing') ? 'active' : '' }}">
                    <a href="{{url('/dashboard/listing')}}">
                        <i class="ti-map"></i>
                        <p>Upgrade package</p>
                    </a>
                </li>
                
                <li class="{{ request()->is('dashboard/profiles') ? 'active' : '' }}">
                    <a href="notifications.html">
                        <i class="ti-comments"></i>
                        <p>WebRTC</p>
                    </a>
                </li>
                <!--  <li class="{{ request()->is('dashboard/affiliate') ? 'active' : '' }}">
                    <a href="/dashboard/affiliate">
                        <i class="ti-image"></i>
                        <p>Affiliate Program</p>
                    </a>
                </li>
                <li class="{{ request()->is('dashboard/user_upload') ? 'active' : '' }}">
                    <a href="/dashboard/user_upload">
                        <i class="ti-image"></i>
                        <p>Image/Video Upload</p>
                    </a>
                </li>
                 <li class="{{ request()->is('dashboard/affiliatedata') ? 'active' : '' }}">
                    <a href="/dashboard/affiliatedata">
                        <i class="ti-image"></i>
                        <p>Local Data Upload</p>
                    </a>
                </li> -->
				
            </ul>
    	</div>
    </div>