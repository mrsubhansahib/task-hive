
   <!-- SIDEBAR -->
   <div class="sidebar">
    <div class="sidebar-logo">
        <a href="{{url('/home')}}">
            <img src="images/logo.png" alt="Protend logo">
        </a>
        <div class="sidebar-close" id="sidebar-close">
            <i class='bx bx-left-arrow-alt'></i>
        </div>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="simlebar-sc" data-simplebar>
        <ul class="sidebar-menu tf">
            <li class="sidebar-submenu">
                <a href="{{url('/home')}}" class="sidebar-menu-dropdown">
                    <i class='bx bxs-home'></i>
                    <span>Dashboard</span>
                    <div class="dropdown-icon">
                        <i class='bx bx-chevron-down'></i>
                    </div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="{{url('/home')}}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/profile')}}">
                            User Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}">
                            User Login
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/account}')}}">
                           New Account
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="{{url('/project')}}" class="sidebar-menu-dropdown">
                    <i class='bx bxs-bolt'></i>
                    <span>Project</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="{{url('/project')}}">
                           Project
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/project-details')}}">
                            Project Details
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/new-project')}}">
                            New Project
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-submenu">
                <a href="{{url('/client')}}" class="sidebar-menu-dropdown">
                    <i class='bx bxs-user'></i>
                    <span>Client</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="{{url('/client-manage')}}">
                           Manager Client
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/client')}}">
                            Client Details
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('/board')}}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Board</span>
                </a>
            </li>
            <li>
                <a href="{{url('/calendar')}}">
                    <i class='bx bx-calendar'></i>
                    <span>Calendar</span>
                </a>
            </li>

            <li>
                <a href="{{url('/message')}}">
                    <i class='bx bxs-message-rounded-detail' ></i>
                    <span>Message</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="{{url('/components')}}" class="sidebar-menu-dropdown">
                    <i class='bx bxs-component' ></i>
                    <span>Components</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="{{url('/components')}}">
                            Apex Charts
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                    <div>
                        <i class='bx bx-cog mr-10'></i>
                        <span>darkmode</span>
                    </div>

                    <span class="darkmode-switch"></span>
                </a>
            </li>
        </ul>
    </div>

    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
