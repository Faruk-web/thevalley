<div id="bottom" class="clearfix has-spacer">
    <div id="bottom-bar-inner" class="container">
        <div class="bottom-bar-inner-wrap">
            <div class="bottom-bar-content">
                <div id="copyright">© <span class="text">Construction Template. Design <a href="#" class="text-accent">by @Niche_Theme</a></span>
                </div>
            </div><!-- /.bottom-bar-content -->
            <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    <li class="menu-item current-menu-item">
                        <a href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('user.thevalley') }}">Life At The Valley</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('user.plot.type') }}">Plot Type</a>
                    </li>
                    <li class="menu-item">
                        <a href="page-projects.html">The Nature</a>
                    </li>
                    <!-- <li class="menu-item">
                        <a href="page-testimonial.html">The Desing</a>
                    </li> -->
                    <li class="menu-item">
                        <a href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/contact_us') }}">CONTACT</a>
                    </li>
                </ul>
            </div><!-- /.bottom-bar-menu -->
            <style>
                body {
                font-family: sans-serif;
                }
                /* Add WA floating button CSS */
                .floating {
                position: fixed;
                width: 55px;
                height: 55px;
                bottom: 70px;
                right: 15px;
                background-color: #25d366;
                color: #fff;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
                }
                .fab-icon {
                margin-top: 13px;
                }
                </style>
                <!-- render the button and direct it to wa.me -->
                <a href="https://api.WhatsApp.com/send?phone=+880 1844 527 808&text=Hello!" class="floating" target="_blank">
                <i class="fa fa-whatsapp fab-icon"></i>
               </a>
        </div><!-- /.bottom-bar-inner-wrap -->
    </div><!-- /#bottom-bar-inner -->
</div>
