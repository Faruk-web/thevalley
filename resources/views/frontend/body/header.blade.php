<header id="site-header">
    <marquee style="background-color: #c1924e;color: #fff;" behavior="scroll" direction="left"
        onmouseover="this.stop();"
        onmouseout="this.start();"> Facelift under construction.. new website coming soon…
    </marquee>
    <div id="site-header-inner" class="container">
        <div class="wrap-inner clearfix">
            <div id="site-logo" class="clearfix">
                <div id="site-log-inner">
                    <a href="{{ url('/') }}" rel="home" class="main-logo">
                        <img src="{{ asset('frontend/assets/img/logo-white-small.png')}}" alt="Autora" width="169" height="39" data-retina="{{ asset('frontend/assets/img/logo-white-small.png')}}" data-width="169" data-height="39">
                    </a>
                </div>
            </div><!-- /#site-logo -->
            <div class="mobile-button">
                <span></span>
            </div>
            <!-- /.mobile-button -->
            <nav id="main-nav" class="main-nav">
                <ul id="menu-primary-menu" class="menu">
                    <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="{{ url('/') }}">HOME</a>
                        <ul class="sub-menu">
                            <li class="menu-item current-item"><a href="{{ url('/') }}">HOME</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('user.thevalley') }}">Life At The Valley </a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ route('user.thevalley') }}">Life At The Valley</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('user.plot.type') }}">Plot Type</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ route('user.plot.type') }}">Plot Type</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('user.nature') }}">The Nature</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ route('user.nature') }}">The Nature</a></li>
                        </ul>
                    </li>
                    {{-- <li class="menu-item menu-item-has-children" >
                        <a href="page-testimonial.html">The Desing</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="page-testimonial.html">The Desing</a></li>
                        </ul>
                    </li> --}}
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/about') }}">About</a>
                        <ul class="sub-menu right-sub-menu">
                            <li class="menu-item"><a href="{{ url('/about') }}">About</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('/contact_us') }}">CONTACT</a>
                        <ul class="sub-menu right-sub-menu">
                            <li class="menu-item"><a href="{{ url('/contact_us') }}">CONTACT</a></li>
                            <!-- <li class="menu-item"><a href="page-contact-2.html">CONTACT 2</a></li> -->
                        </ul>
                    </li>
                </ul>
            </nav><!-- /#main-nav -->
            <div id="header-search">
                <a href="#" class="header-search-icon">
                    <span class="search-icon fa fa-search">
                    </span>
                </a>
                <form role="search" method="get" class="header-search-form" action="#">
                    <label class="screen-reader-text">Search for:</label>
                    <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                    <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /#header-search -->
        </div><!-- /.wrap-inner -->
    </div><!-- /#site-header-inner -->
</header>
