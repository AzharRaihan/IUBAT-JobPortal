
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo">
            <i class="zmdi zmdi-group-work icon-c-logo"></i>
            <span>{{ setting('site_title') }}</span>
        </a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="zmdi zmdi-notifications-none noti-icon"></i>
                    <span class="noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><small><span class="badge badge-danger">7</span>Notification</small></h5>
                    </div>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                        <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                        <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                    </a>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                        View All
                    </a>
                </div>
            </li>
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{ Auth::user()->profile_photo != null ? asset('users/profile-pic/'. Auth::user()->profile_photo) : asset('default-avater/default.png') }}" alt="{{ Auth::user()->name }}-Image" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>{{ Auth::user()->name }}</small> </h5>
                    </div>
                    <!-- item-->
                    <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                        <i class="icon-user"></i> <span>Profile</span>
                    </a>
                    <!-- item-->
                    <a href="{{ route('admin.change.password') }}" class="dropdown-item notify-item">
                        <i class="icon-key"></i> <span>Change Password</span>
                    </a>
                    <!-- item-->
                    <a href="{{ route('admin.setting.generel') }}" class="dropdown-item notify-item">
                        <i class="icon-settings"></i> <span>Settings</span>
                    </a>
                    <!-- item-->

                    <a href="javascript:void(0);" class="dropdown-item notify-item border-top" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="icon-power"></i> <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="zmdi zmdi-menu"></i>
                </button>
            </li>
            <li class="hidden-mobile app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>
    </nav>
</div>
