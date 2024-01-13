@include("base")
<!--Sidebar Start-->
<div class="left-menu">
    <div class="menubar-content">
        <nav class="animated bounceInDown">
            <ul id="sidebar" class="w-100">
                <li class="active">
                    <a href="{{ url('/') }}"><span class="iconify me-3 fs-4" data-icon="lets-icons:chart"></span>Dashboard</a>
                </li>
                <li>
                    <a href="" class=""><span class="iconify me-3" data-icon="solar:star-linear"></span>Favorite</a>
                </li>
                <div class="ms-3 mt-3">
                    <span class="sidelink-title">
                        App Management
                    </span>
                </div>
                <li class="sub-menu">
                    <a href="#"><span class="iconify me-3" data-icon="humbleicons:users"></span>Suppliers
                        <div class="fas fa-caret-down right"></div>
                    </a>
                    <!--Sidebar dropdown-->
                    <ul class="left-menu-dp">
                        <li class="w-100"><a href="{{ route('providers') }}"><span class="iconify me-3" data-icon="humbleicons:users"></span>Suppliers</a></li>
                        <li class="w-100"><a href="{{ route('gallery_index') }}"><span class="iconify me-3" data-icon="solar:gallery-wide-linear"></span>Galleries</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('category_index') }}"><span class="iconify me-3" data-icon="ph:folder-bold"></span>Categories</a>
                </li>
                <li class="sub-menu">
                    <a href="#"><span class="iconify me-3" data-icon="mynaui:grid"></span>Products
                        <div class="fas fa-caret-down right"></div>
                    </a>
                    <!--Sidebar dropdown-->
                    <ul class="left-menu-dp">
                        <li><a href="{{ route('products_index') }}"><span class="iconify me-3" data-icon="mynaui:grid"></span>Products</a></li>
                        <li><a href="#"><span class="iconify me-3" data-icon="lucide:message-square-heart"></span>Reviews Products</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#"><span class="iconify me-3" data-icon="octicon:book-16"></span>Reservations
                        <div class="fas fa-caret-down right"></div>
                    </a>
                    <!--Sidebar dropdown-->
                    <ul class="left-menu-dp">
                        <li class=""><a href="#"><span class="iconify me-3" data-icon="octicon:book-16"></span>List Book Reservations</a></li>
                        <li><a href="#"><span class="iconify me-3" data-icon="octicon:book-16"></span>Checking Reservations</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="iconify me-3" data-icon="la:user-circle"></span>Users</a>
                </li>
                <li class="sub-menu">
                    <a href="#"><span class="iconify me-3" data-icon="ion:headset-outline"></span>FAQ
                        <div class="fas fa-caret-down right"></div>
                    </a>
                    <!--Sidebar dropdown-->
                    <ul class="left-menu-dp">
                        <li><a href="#"><span class="iconify me-3" data-icon="ion:headset-outline"></span>Categories FAQ</a></li>
                        <li><a href="#"><span class="iconify me-3" data-icon="ion:headset-outline"></span>The FAQ</a></li>
                    </ul>
                </li>
                <div class="ms-3 mt-3">
                    <span class="sidelink-title">
                        Settings
                    </span>
                </div>
                <li>
                    <a href="#"><span class="iconify me-3" data-icon="lucide:image"></span>Librar Mediay</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--Sidebar End-->
