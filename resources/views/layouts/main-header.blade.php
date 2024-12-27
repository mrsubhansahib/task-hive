

        <div class="d-flex align-items-center">

            <!-- App Search-->
            <form method="post" class="app-search d-none d-lg-block">
                @csrf
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-search-alt' ></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="btn dropdown-toggle" id="header-lang-img">
                            EN
                            <i class='bx bx-caret-down'></i>
                        </span>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                        <img src="images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>
            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
            </div> -->
            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @php
                        //---- Generate a color based on the username ----//
                        $username = Auth::user()->username;
                        //---- Array of bg-colors ----//
                        $colors = ['bg-primary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-secondary' , 'bg-dark'];
                        //---- Calculate index for selecting color ----//
                        $colorIndex = ord(strtoupper(substr($username, 0, 1))) % count($colors);
                        //---- Select color based on calculated colorIndex ----//
                        $bgColor = $colors[$colorIndex];
                    @endphp

                    @if(Auth::user()->image)
                        <img class="rounded-circle header-profile-user mx-auto d-block "
                        src="{{asset('uploads/profile/' . Auth::user()->image) }}" width="50px" alt="Profile Image">-->
                    @else
                        <div class="rounded-circle {{ $bgColor }} text-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; font-size: 20px;">
                            {{ strtoupper(substr(Auth::user()->username, 0, 1)) }}
                        </div>
                    @endif
                        <span class="pulse-css"></span>
                        <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">{{ Auth::user()->username }}</span>
                            <span class="d-block mt-7" >{{ Auth::user()->email }}</span>
                        </span>

                        <i class='bx bx-chevron-down'></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{url('/profile')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Profile</span></a>
                    <a class="dropdown-item" href="{{url('/edit-profile')}}"><i class="bx bx-edit font-size-16 align-middle me-1"></i> <span>Edit profile</span></a>
                    <a class="dropdown-item" href="{{url('/change-password')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Change password</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span>My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span>Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{url('/logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Logout</span></a>


                </div>
            </div>
        </div>


    <!-- End Main Header -->
