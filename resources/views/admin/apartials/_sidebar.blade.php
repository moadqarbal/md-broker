<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            @if (Auth::user()->user_image)
                <img src="{{ asset('storage/' . Auth::user()->user_image) }}" alt="Profile Image" class="rounded-circle img-thumbnail avatar-md">
            @else
                <img src="{{ asset('admin_assets/images/users/user-1.jpg') }}" alt="Default Profile Image" class="rounded-circle img-thumbnail avatar-md">
            @endif

            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->first_name }}
                </a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <p class="text-muted left-user-info">{{ Auth::user()->role == "su" ? 'Super User' : 'Admin' }}</p>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-muted left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Users</li>

                <li>
                    <a href="#user-mngmt" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-outline"></i>
                        <span> User Managment </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="user-mngmt">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.myprofile') }}">My Profile</a>
                            </li>
                            
                            @can('viewAllUsers')
                                <li>
                                    <a href="{{ route('users.index') }}">All Users</a>
                                </li>
                            @endcan
                            
                            @can('addUser')
                                <li>
                                    <a href="{{ route('users.create') }}">Add User</a>
                                </li>
                            @endcan
                            
                            <li>
                                <a href="{{ route('users.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li>
                    <a href="#contacts" data-bs-toggle="collapse">
                        <i class="mdi mdi-book-open-page-variant-outline"></i>
                        <span> Contacts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="contacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="contacts-list.html">Members List</a>
                            </li>
                            <li>
                                <a href="contacts-profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
