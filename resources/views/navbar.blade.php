<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm expand-header">
        <div class="header-left d-flex">
            <div class="logo">
{{--                 <img src="{{ asset('images/logo_default-icon.jpg') }}" class="w-25" alt="">--}}
                VIANOL
            </div>
            <a class="sidebarCollapse" id="toggleSidebar" data-placement="bottom">
                <span class="fas fa-bars me-3"></span>
                Dashboard
            </a>
        </div>
        <ul class="navbar-item flex-row">
            <!--Notification part-->
            {{-- <li class="nav-item">
                <i class="fas fa-user-circle"></i>
            </li> --}}
            <!--Profile part-->
            <li class="nav-item dropdown user-profile-dropdown">
                <a href="" class="nav-link user" id="Notify" data-bs-toggle="dropdown">
                    <img src="{{ asset('img/user.png') }}" alt="" class="icon">
                </a>
                <div class="dropdown-menu">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid">
                            <div class="media-body">
                                <h5>John Doe</h5>
                                <p>Super Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="dp-main-menu">
                        <a href="" class="dropdown-item"><span class="p-icon fas fa-user"></span> Profile</a>
                        <a href="" class="dropdown-item"><span class="p-icon fa-solid fa-power-off"></span> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
