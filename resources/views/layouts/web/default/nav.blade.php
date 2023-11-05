<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('home.index') }}" class="text-nowrap logo-img">
                <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('home.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Thương hiệu </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('branch') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Tạo thương hiệu </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('branch.list') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-alert-circle"></i>
                        </span>
                        <span class="hide-menu">Quản lý thương hiệu </span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Card</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Typography</span>
                    </a>
                </li> --}}
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Danh mục sản phẩm </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('category') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-description"></i>
                        </span>
                        <span class="hide-menu">Quản lý danh mục sản phẩm </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý sản phẩm </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('product') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Tạo sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('product.list') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Danh sách sản phẩm </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Order </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('order') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Quản lý order </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Vận Chuyển </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('transposts') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Quản lý vận chuyển </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý Blogs </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.posts') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Quản lý Blogs </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý sự kiện </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('events') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Sự kiện</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý tickets </span>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                @auth
                    {{ auth()->user()->name }}
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('logout.perform') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-login"></i>
                            </span>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>
                @endauth
                @guest
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('login.perform') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-login"></i>
                            </span>
                            <span class="hide-menu">Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('register.perform') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-user-plus"></i>
                            </span>
                            <span class="hide-menu">Register</span>
                        </a>
                    </li>
                @endguest
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
