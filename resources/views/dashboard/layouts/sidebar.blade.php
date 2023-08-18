<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="/">
                <img src="{{ asset('dashboar') }}/assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                <img src="{{ asset('dashboar') }}/assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('dashboar') }}/assets/images/logo-light.png" height="24" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="">
                <a href="/dashboard/home"><i class="ti ti-home me-2"></i>Dashboard</a>
            </li>
            <li class="{{ Request::is('dashboard/post/*') ? 'active' : '' }}">
                <a href="/dashboard/post"><i class="fa-regular fa-file-lines me-2"></i>My Post</a>
                <div class="sidebar-submenu">
                </div>
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <!-- Sidebar Footer -->
</nav>
