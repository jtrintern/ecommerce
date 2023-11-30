<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="{{ asset('admin/assets/img/logo.png') }}" class="navbar-brand-img h-100"
                alt="main_logo">
            <span class="ms-1 font-weight-bold" style="font-size:18px;">Toyspace.Inc</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <!-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main"> -->
    <div class="w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if (request()->is('admin/dashboard')) active @endif"
                    href="{{ route ('admin.dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" id="tablesDropdown">
                <a class="nav-link @if (request()->is('admin/product')) active @endif" href="#">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-regular fa-file text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Product</span>
                </a>
                <ul class="dropdown-menu-sidenav">
                    <li><a class="dropdown-item" href="{{ route ('index_Product') }}">Show
                            Product</a></li>
                    <li><a class="dropdown-item" href="./pages/tables.html">Add Product</a></li>
                    <!-- Tambahkan opsi dropdown lainnya sesuai kebutuhan -->
                </ul>
            </li>
            <li class="nav-item" id="tablesDropdown">
                <a class="nav-link @if (request()->is('admin/category')) active @endif" href="#">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i> -->
                        <i class="fas fa-book text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
                <ul class="dropdown-menu-sidenav">
                    <li><a class="dropdown-item" href="{{ route ('index_Category') }}">Show
                            Product</a></li>
                    <li><a class="dropdown-item" href="./pages/tables.html">Add Product</a></li>
                    <!-- Tambahkan opsi dropdown lainnya sesuai kebutuhan -->
                </ul>
            </li>
            <li class="nav-item" id="tablesDropdown">
                <a class="nav-link" href="#">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i> -->
                        <i class="fa-solid fa-money-bill text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
                <ul class="dropdown-menu-sidenav">
                    <li><a class="dropdown-item" href="">Show Product</a></li>
                    <li><a class="dropdown-item" href="./pages/tables.html">Add Product</a></li>
                    <!-- Tambahkan opsi dropdown lainnya sesuai kebutuhan -->
                </ul>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mt-auto pt-8 mx-3">
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank"
            class="btn btn-sm w-100 mb-3" style="background: #FDA72C; color:white;">Documentation</a>
        <a class="btn btn-sm mb-0 w-100" style="background: #24263D; color: #fff"
            href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Log out</a>
    </div>
</aside>
