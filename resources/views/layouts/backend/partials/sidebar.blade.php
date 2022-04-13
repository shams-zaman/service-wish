@if (!auth()->user()->type == 'agency')
@else
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
        <a class="navbar-brand mr-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img
                class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="user-avatar lg-avatar mr-4">
                        <img src="../../assets/img/team/profile-picture-3.jpg"
                            class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h6">Hi, Jane</h2>
                        <a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span
                                class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse" data-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item   ">
                    <a class="nav-link">
                        <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                        <span>Overview</span>
                    </a>
                </li>
                <hr style="margin-top: 5px">
                @if (Request::is('admin*'))
                    <li class="nav-item  {{ Request::is('admin/dashboard') ? 'active' : '' }} ">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                            <span class="" style="font-size: .9rem;">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item  {{ Request::is('admin/quote-request') ? 'active' : '' }} ">
                        <a href="{{ route('admin.quote_req') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                            <span class="" style="font-size: .9rem;">New Quote Req_</span>
                        </a>
                    </li>

                    <li class="nav-item  {{ Request::is('admin/all_users') ? 'active' : '' }} ">
                        <a href="{{ route('admin.all_users') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                            <span style="font-size: .9rem;">Transactions</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ Request::is('admin/agency-request') ? 'active' : '' }} ">
                        <a href="{{ route('admin.agency_request') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-bell bell-shake shaking"></span></span>
                            <span style="font-size: .9rem;">New Agency Req..</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ Request::is('admin/category') ? 'active' : '' }} ">
                        <a href="{{ route('admin.cat.show') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
                            <span style="font-size: .9rem;">Category</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                            data-toggle="collapse" data-target="#submenu-pages">
                            <span>
                                <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                Mananage Blog
                            </span>
                            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                        </span>
                        <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
                            <ul class="flex-column nav">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('admin.all_blogs') }}"><span>Blog Posts</span></a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/sign-up.html"><span>Sign Up</span></a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                            data-toggle="collapse" data-target="#submenu-pages">
                            <span>
                                <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                Page examples
                            </span>
                            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                        </span>
                        <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
                            <ul class="flex-column nav">
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/sign-in.html"><span>Sign In</span></a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/sign-up.html"><span>Sign Up</span></a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/forgot-password.html"><span>Forgot
                                            password</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/reset-password.html"><span>Reset password</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/lock.html"><span>Lock</span></a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/404.html"><span>404 Not Found</span></a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../../pages/examples/500.html"><span>500 Server Error</span></a></li>
                            </ul>
                        </div>
                    </li>
                @else
                @endif
                @if (Request::is('myagency*'))
                    <li class="nav-item  {{ Request::is('myagency/dashboard') ? 'active' : '' }} ">
                        <a href="{{ route('agency.dashboard') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                            <span class="" style="font-size: .9rem;">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ Request::is('myagency/profile') ? 'active' : '' }} ">
                        <a href="{{ route('agency.profile') }}" class="nav-link">
                            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                            <span class="" style="font-size: .9rem;">Dashboard</span>
                        </a>
                    </li>
                @endif

                {{-- <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
                <li class="nav-item">
                    <a href="../../index.html" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="../../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                        </span>
                        <span class="mt-1">Volt Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/"
                        target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon"><span class="fas fa-book"></span></span>
                        <span>Quick Start</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard"
                        target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon"><span class="fas fa-rocket"></span></span>
                        <span>Upgrade to Pro</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="../../assets/img/themesberg.svg" height="20" width="20" alt="Themesberg Logo">
                        </span>
                        <span>Themesberg</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </nav>
@endif
