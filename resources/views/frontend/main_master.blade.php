<!DOCTYPE html>

<!--
   Template:   Sepia - Photography Portfolio HTML Website Template
   Author:     Themetorium
   URL:        https://themetorium.net
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>The Valley</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Responsive Photography HTML5 Website Template">
		<meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, Photography, Portfolio, Template, Theme, Website, Themetorium" />
		<meta name="author" content="themetorium.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google Analytics (https://analytics.google.com/) -->
		<!-- Add your Google Analytics code here -->

		<!-- Google fonts (https://www.google.com/fonts) -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> <!-- Global font -->

		<!-- Bootstrap CSS (http://getbootstrap.com) -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}"> <!-- bootstrap CSS (http://getbootstrap.com) -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animsition/css/animsition.min.css')}}"> <!-- Animsition CSS (http://git.blivesta.com/animsition/) -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/fontawesome/css/fontawesome-all.min.css')}}"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/lightgallery/css/lightgallery.min.css')}}"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl-carousel/css/owl.carousel.min.css')}}"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl-carousel/css/owl.theme.default.min.css')}}"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css')}}"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

		<!-- Template master CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/helper.css')}}">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500|Roboto:400,500,700&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css'><link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">

		<!-- Template RTL mode CSS (just uncomment all 3 lines below to enable right to left mode) -->
			<!-- <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap-rtl/bootstrap-rtl.min.css')}}"> -->
			<!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/rtl/theme-rtl.css')}}"> -->
			<!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/rtl/helper-rtl.css')}}"> -->

			<!-- FOR DEMO SITE ONLY! -->
			<link rel="stylesheet" href="{{ asset('frontend/assets/css/demo-panel.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/assets/css/dark-style.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/assets/css/round-style.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-red" href="{{ asset('frontend/assets/css/color-skins/skin-red.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-green" href="{{ asset('frontend/assets/css/color-skins/skin-green.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-blue" href="{{ asset('frontend/assets/css/color-skins/skin-blue.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-orange" href="{{ asset('frontend/assets/css/color-skins/skin-orange.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-purple" href="{{ asset('frontend/assets/css/color-skins/skin-purple.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-pink" href="{{ asset('frontend/assets/css/color-skins/skin-pink.css') }}">
			<link rel="alternate stylesheet" media="screen" title="skin-brown" href="{{ asset('frontend/assets/css/color-skins/skin-brown.css') }}">
		<style type="text/css">

			#tt-theme-stats { background-color: #111; padding: 5% 0; margin-bottom: 60px; color: #fff; padding: 5% 0; }
			.tt-theme-stats-inner {}
			.tt-stats-box { background-color: rgba(0, 43, 41, 0.46); padding: 60px 15px; box-shadow: 0 20px 30px -18px rgba(0, 0, 0, 0.7); }
			.tt-stats-box span { font-size: 64px; font-weight: bold; font-weight: 600; }
			.tt-stats-box p { font-size: 20px; font-weight: bold; font-weight: 500; }
			@media (max-width: 768px) {
				.tt-stats-box { padding: 40px 15px; }
				.tt-stats-box span { font-size: 42px; }
				.tt-stats-box p { font-size: 14px; }
			}

			#demo-section {}
			.demo-section-inner {}
			.demo-item {}
			.demo-img {
				overflow: hidden;
				border: 1px solid rgba(128, 128, 128, 0.2);
				box-shadow: 0 4px 23px rgba(0, 0, 0, 0.09);
				-webkit-transition: all 0.3s ease-in-out;
				-moz-transition: all 0.3s ease-in-out;
				-o-transition: all 0.3s ease-in-out;
				-ms-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
			}
			@media (min-width: 992px) {
				.demo-img:hover {
					box-shadow: 0 20px 50px 0 rgba(0, 0, 0, .4);
					-webkit-transform: translateY(-7px) translateZ(0);
					-moz-transform: translateY(-7px) translateZ(0);
					-o-transform: translateY(-7px) translateZ(0);
					-ms-transform: translateY(-7px) translateZ(0);
					transform: translateY(-7px) translateZ(0);
				}
			}
			.demo-img a { display: block; }
			.demo-title { padding: 20px 0; text-align: center; }
			.demo-title h2 { margin: 0; font-size: 17px; font-weight: 500; }
			.demo-title span { color: #b1b1b1; }

		</style>
		<!-- End demo page styles -->

	</head>
        <body id="body" class="animsition">
			<!-- BEGIN DEMO PANEL (FOR DEMO SITE ONLY!) -->
		<div class="demo-panel">
			<div class="demo-panel-trigger">
				<span class="dpt-icon"></span>
				<span class="dpt-close"></span>
			</div>
			<div class="demo-panel-inner">
				<div class="demo-panel-header">Demo Panel</div>
				<div class="demo-panel-content">
					<div class="demo-panel-block light-sw-block">
						<h2 class="dp-heading">Light Switcher:</h2>
						<div class="light-switcher">
							<div class="lsw-btn light-lsw-btn" title="Day Mode"></div>
							<div class="lsw-btn dark-lsw-btn" title="Night Mode"></div>
						</div>
					</div>
					<div class="demo-panel-block rtl-sw-block">
						<h2 class="dp-heading">Round Style:</h2>
						<div class="round-switcher">
							<div class="roundsw-btn ltr-roundsw-btn" title="Round style OFF">OFF</div>
							<div class="roundsw-btn round-roundsw-btn" title="Round style ON">ON</div>
						</div>
					</div>
					<div class="demo-panel-block rtl-sw-block">
						<h2 class="dp-heading">RTL Mode:</h2>
						<div class="rtl-switcher">
							<div class="rtlsw-btn ltr-rtlsw-btn" title="Left to right mode">LTR</div>
							<div class="rtlsw-btn rtl-rtlsw-btn" title="Right to left mode">RTL</div>
						</div>
					</div>
					<div class="demo-panel-block">
						<h2 class="dp-heading">Color Switcher:</h2>
						<div class="skin-switcher">
							<a class="sksw-btn sksw-btn-default" href="javascript:chooseStyle('none', 60)" title="Default Skin"></a>
							<a class="sksw-btn sksw-btn-red" href="javascript:chooseStyle('skin-red', 60)" data-class="tt-skin-red" title="Red Skin"></a>
							<a class="sksw-btn sksw-btn-green" href="javascript:chooseStyle('skin-green', 60)" data-class="tt-skin-green" title="Green Skin"></a>
							<a class="sksw-btn sksw-btn-blue" href="javascript:chooseStyle('skin-blue', 60)" data-class="tt-skin-blue" title="Blue Skin"></a>
							<a class="sksw-btn sksw-btn-orange" href="javascript:chooseStyle('skin-orange', 60)" data-class="tt-skin-orange" title="Orange Skin"></a>
							<a class="sksw-btn sksw-btn-purple" href="javascript:chooseStyle('skin-purple', 60)" data-class="tt-skin-purple" title="Purple Skin"></a>
							<a class="sksw-btn sksw-btn-pink" href="javascript:chooseStyle('skin-pink', 60)" data-class="tt-skin-pink" title="Pink Skin"></a>
							<a class="sksw-btn sksw-btn-brown" href="javascript:chooseStyle('skin-brown', 60)" data-class="tt-skin-brown" title="Brown Skin"></a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- END DEMO PANEL (FOR DEMO SITE ONLY!) -->
            @include('frontend.body.header')
            <!-- End header -->
            <div id="body-content">
                @yield('index')
                <!-- End intro section -->
                @include('frontend.body.footer')
                <!-- End footer section -->
            </div>
            <!-- End body content -->
            </div>
            <!-- End body content -->
		<!-- Core JS -->
		<script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script> <!-- jquery JS (https://jquery.com) -->
		<script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- bootstrap JS (http://getbootstrap.com) -->
		<!-- Libs and Plugins JS -->
		<script src="{{ asset('frontend/assets/vendor/animsition/js/animsition.min.js') }}"></script> <!-- Animsition JS (http://git.blivesta.com/animsition/) -->
		<script src="{{ asset('frontend/assets/vendor/jquery.easing.min.js') }}"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="{{ asset('frontend/assets/vendor/isotope.pkgd.min.js') }}"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="{{ asset('frontend/assets/vendor/imagesloaded.pkgd.min.js') }}"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="{{ asset('frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<script src="{{ asset('frontend/assets/vendor/jquery.mousewheel.min.js') }}"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
		<script src="{{ asset('frontend/assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js') }}"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<script src="{{ asset('frontend/assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<!-- Theme master JS -->
		<script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
		<!-- FOR DEMO SITE ONLY! JS -->
		<script src="{{ asset('frontend/assets/js/demo-panel.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/styleswitch.js') }}"></script>
        <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://rawgit.com/cfoehrdes/slick/master/slick/slick.js'></script><script  src="{{ asset('frontend/assets/js/script.js') }}"></script>
	</body>
</html>
