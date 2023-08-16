<header id="header" class="menu-align-right">

    <!-- Begin header inner -->
    <div class="header-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <!-- Begin logo
        ================ -->
        <div id="logo">
            <a href="{{ url('/') }}" class="logo-dark"><img src="{{ asset('frontend') }}/assets/img/Valley_logo.png" alt="logo"></a>
            <a href="{{ url('/') }}" class="logo-light"><img src="{{ asset('frontend') }}/assets/img/Valley_logo.png" alt="logo"></a>

            <!-- for small screens -->
            <a href="{{ url('/') }}" class="logo-dark-m"><img src="{{ asset('frontend') }}/assets/img/Valley_logo.png" alt="logo"></a>
            <a href="{{ url('/') }}" class="logo-light-m"><img src="{{ asset('frontend') }}/assets/img/Valley_logo.png" alt="logo"></a>
        </div>
        <!-- End logo -->

        <!-- ====================
        //// Begin main menu ////
        ===================== -->
        <nav class="tt-main-menu">

            <!-- Begin mobile menu toggle button -->
            <div id="tt-m-menu-toggle-btn">
                <span></span>
            </div>
            <!-- End mobile menu toggle button -->

            <!-- Begin menu tools
            ====================== -->
            <div class="tt-menu-tools">
                <ul>
                    <!-- Begin search -->
                    <li>
                        <a href="#" class="tt-clobal-search-trigger"><i class="fas fa-search"></i></a>
                        <div class="tt-clobal-search">
                            <div class="tt-clobal-search-inner">
                                <span class="tt-clobal-search-title">Search</span>
                                <form id="tt-clobal-search-form" class="form-btn-inside" method="get" action="search-results.html">
                                    <input type="text" id="tt-clobal-search-input" name="search" placeholder="Type your keywords ...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div> <!-- /.tt-clobal-search-inner -->
                            <div class="tt-clobal-search-close"><i class="tt-close-btn tt-close-light"></i></div>
                        </div> <!-- /.tt-clobal-search -->
                    </li>
                    <!-- End search -->
                </ul>
            </div>
            <!-- End menu tools -->

            <!-- Collect the nav links for toggling
            ========================================
            * Use class "tt-submenu-dark" to enable submenu dark style.
            -->
            <div class="tt-menu-collapse tt-submenu-dark">
                <ul class="tt-menu-nav">

                    <!-- Begin submenu (submenu master)
                    ==================================== -->
                    <li class="tt-submenu-wrap tt-submenu-master">
                        <a href="{{ url('/') }}">Home</a>
                        {{-- <ul class="tt-submenu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                        </ul> --}}
                        <!-- /.tt-submenu -->
                    </li>
                    <!-- End submenu (sub-master) -->

                    <!-- Begin submenu (submenu master)
                    ==================================== -->
                    <li class="tt-submenu-wrap tt-submenu-master">
                        <a href="{{ url('/about') }}">About</a>
                        {{-- <ul class="tt-submenu">
                            <li><a href="{{ url('/about') }}">About Me</a></li>
                        </ul> --}}
                         <!-- /.tt-submenu -->
                    </li>
                    <!-- End submenu (sub-master) -->

                    <!-- Begin submenu (submenu master)
                    ==================================== -->
                    <li class="tt-submenu-wrap tt-submenu-master">
                        <a href="{{ url('/the-valley') }}">The Valley</a>
                            <!-- Begin submenu
                            =================== -->
                            {{-- <li class="tt-submenu-wrap">
                                <a href="{{ url('/the-valley') }}">The Valley</a>
                                </li> --}}
                                <!-- /.tt-submenu -->
                            </li>
                            <!-- End submenu -->

                            <!-- Begin submenu
                            =================== -->
                            <li class="tt-submenu-wrap">
                                <a href="{{url('/plot/type') }}">Plot Typet</a>
                                    <!-- Begin submenu
                                    =================== -->
                                    {{-- <li class="tt-submenu-wrap">
                                        <a href="{{url('/plot/type') }}">Plot Typet</a>
                                    </li> --}}
                                    <!-- End submenu -->
                            </li>
                            <!-- End submenu -->

                            <!-- Begin submenu
                            =================== -->
                            <li class="tt-submenu-wrap">
                                <a href="{{ url('/the/nature') }}">The Nature</a>
                                    {{-- <li><a href="{{ url('/the/nature') }}">The Nature</a></li> --}}
                                 <!-- /.tt-submenu -->
                            </li>
                            <!-- End submenu -->
                            <li >
                                <a href="{{ url('/contact_us') }}">Contact</a>
                            </li>

                        </ul> <!-- /.tt-submenu -->
                    </li>
                    <!-- End submenu (sub-master) -->
                </ul> <!-- /.tt-menu-nav -->
            </div> <!-- /.tt-menu-collapse -->

        </nav>
        <!-- End main menu -->

    </div>
    <!-- End header inner -->

</header>
