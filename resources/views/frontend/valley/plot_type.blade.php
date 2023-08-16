@extends('frontend.main_master')
     @section('index')
     <section id="gallery-list-section" class="gallery-list-carousel">
        <div class="gallery-list-carousel-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
            <div class="gl-carousel-wrap no-padding"> <!-- Optional: add class "no-padding" to disable paddings -->
                <div style="overflow: scroll;" class="owl-carousel cc-height-full nav-bottom-right cc-hover-dark cc-hover-zoom" data-items="4" data-dots="false" data-nav="true" data-nav-speed="800" data-autoplay="true" data-autoplay-timeout="8000" data-autoplay-speed="800" data-autoplay-hover-pause="true" data-tablet-landscape="3" data-tablet-portrait="3" data-mobile-landscape="2" data-mobile-portrait="2">
                    <!-- Begin carousel item
                    ========================= -->
                    <a href="{{ url('/plot_detail') }}" class="cc-item">
                        <!-- cc image -->
                        <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/3.png); background-position: 50% 50%;"></div>
                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center cc-caption-lg">
                            <h2 class="cc-title">3  katha </h2>
                        </div>
                        <!-- End caption -->
                    </a>
                    <!-- End carousel item -->
                    <!-- Begin carousel item
                    ========================= -->
                    <a href="{{ url('/plot_detail') }}" class="cc-item">
                        <!-- cc image -->
                        <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/4.png); background-position: 50% 50%;"></div>
                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center cc-caption-lg">
                            <h2 class="cc-title">4 Katha</h2>
                        </div>
                        <!-- End caption -->
                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="{{ url('/plot_detail') }}" class="cc-item">
                        <!-- cc image -->
                        <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/5.png); background-position: 50% 50%;"></div>
                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center cc-caption-lg">
                            <h2 class="cc-title">5 Katha</h2>
                        </div>
                        <!-- End caption -->
                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="{{ url('/plot_detail') }}" class="cc-item">
                        <!-- cc image -->
                        <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/6.png); background-position: 50% 50%;"></div>
                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center cc-caption-lg">
                            <h2 class="cc-title">Commertial</h2>
                        </div>
                        <!-- End caption -->
                    </a>
                    <!-- End carousel item -->
                </div>
                <!-- End content carousel -->

            </div> <!-- /.gl-carousel-wrap -->
        </div> <!-- /.gallery-list-carousel-inner -->
    </section>
    <!-- End gallery list section -->

            <div class="tt-heading text-center">
                <div class="tt-heading-inner">
                    <hr class="hr-short" style="border-color: black;">
                    <h1 class="tt-heading-title">Project Overview</h1>
                    <div class="tt-heading-subtitle">A little bit of our work</div>
                    <hr class="hr-short">
                </div> <!-- /.tt-heading-inner -->
            </div>
            <section id="tt-intro" class="video-intro">
				<div class="tt-intro-inner full-height-vh bg-dark tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
					<!-- Element cover -->
					<div class="cover bg-transparent-2-dark"></div>
					<div class="youtube-bg-wrap ytp-full"> <!-- Class "ytp-full" is for full cover (depend on parent element size). -->
						<div class="youtube-bg"
							style="background-image: url({{ asset('frontend') }}/assets/img/valley/about_13.png); background-position: 50% 50%;"
							data-property="{
								videoURL: 'https://www.youtube.com/embed/DsF4Z_SLyJQ',
								containment: 'self',
								quality: 'default',
								startAt: 12,
								stopAt: 80,
								autoPlay: true,
								loop: true,
								mute: true,
								showControls: false,
								showYTLogo: false,
								realfullscreen: true,
								addRaster: false,
								optimizeDisplay: true,
								stopMovieOnBlur: true
							}">

						</div> <!-- /.youtube-bg -->
					</div>
					<!-- End YTPlayer (Youtube video background) -->
				</div> <!-- /.tt-intro-inner -->
			</section>
			<!-- End intro section -->
@endsection
