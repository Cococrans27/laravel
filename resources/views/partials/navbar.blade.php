<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="/">
            <img src="{{ asset('blog') }}/assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
            <img src="{{ asset('blog') }}/assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>
        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            @auth
                <li class="list-inline-item mb-0">
                    <div class="btn-group dropdown-primary me-2 mt-2 dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu">
                            <a href="/dashboard/home" class="dropdown-item"><i class="fas fa-tachometer-alt me-1"></i>My Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-1"></i>Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
            @else
                <li class="list-inline-item mb-0">
                    <a href="/login" class="btn btn-primary">
                        Login
                    </a>
                </li>
            @endauth

        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li><a href="/about" class="sub-menu-item">About</a></li>
                <li><a href="/posts" class="sub-menu-item">post</a></li>
                <li><a href="/categories" class="sub-menu-item">Category</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>
