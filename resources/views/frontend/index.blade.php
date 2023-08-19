
@extends('frontend.main_master')

@section('index')
<section id="tt-intro" class="slideshow-intro">
    <div class="tt-intro-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
        <div class="gl-carousel-wrap no-padding"> <!-- Optional: use class "no-padding" to disable paddings -->
            <div class="owl-carousel cc-height-5 cursor-grab dots-right bg-dark" data-items="1" data-loop="true" data-nav="true" data-nav-speed="500" data-dots-speed="500" data-autoplay="true" data-autoplay-timeout="4000" data-autoplay-speed="500" data-autoplay-hover-pause="true">

                <!-- Begin carousel item
                ========================= -->
                @foreach ($sliders as $item)
                <div class="cc-item">
                    <!-- Element cover -->
                    <span class="cover bg-transparent-3-dark"></span>
                    <!-- cc image -->
                    <div class="cc-image bg-image" style="background-image: url({{ asset($item->slider_img) }}); background-position: 50% 50%;"></div>
                    <!-- Begin intro caption
                    =========================
                    * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                    * Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
                    -->
                    <div class="intro-caption caption-animate intro-caption-xxlg center-left">
                        <h1 class="intro-title">The Valley</h1>
                        <h2 class="intro-subtitle">Photography Portfolio Theme</h2>

                        <p class="intro-description max-width-650">
                            Made for photographers, photo studios, design agencies. <br>
                            Create your own unique and beautiful photography website!
                        </p>

                        <div class="margin-top-30">
                            <a href="http://www.thevalleybd.com/" class="btn btn-primary margin-top-5 margin-right-10" target="_blank">Buy It Now!</a>
                            <a href="albums-grid-fluid-2.html" class="btn btn-white-bordered margin-top-5">Discover More</a>
                        </div>
                    </div>
                    <!-- End intro caption -->

                </div>
                @endforeach
                <!-- End carousel item -->
            </div>
            <!-- End content carousel -->

        </div> <!-- /.gl-carousel-wrap -->
    </div> <!-- /.tt-intro-inner -->
</section>
<!-- End intro section -->


<!-- =============================
///// Begin about me section /////
============================== -->
<section id="about-me-section">
    <div class="tt-heading tt-heading-lg padding-on text-center">
        <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
            <h1 class="tt-heading-title">Who we are ?</h1>
            <div class="tt-heading-subtitle">My latest photo projects / <a href="categories-grid.html">View All</a></div>
            <hr class="hr-short">
        </div> <!-- /.tt-heading-inner -->
    </div>
    <div class="about-me-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
        <!-- ======================
        ///// Begin split box /////
        based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
        ======================= -->
        <div class="split-box about-me">
            <div class="container-fluid">
                <div class="row">
                    <div class="row-lg-height">

                        <!-- Column -->
                        <div class="col-lg-5 col-lg-height split-box-image no-padding bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%;">

                            <!-- Split box image height
                            ============================
                            * You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.
                            -->
                            <div class="sbi-height padding-height-80"></div>

                        </div> <!-- /.col -->

                        <!-- Column -->
                        <div class="col-lg-7 col-lg-height col-lg-middle no-padding">

                            <div class="full-cover for-light-style bg-gray-3 bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%;"></div>
                            <div class="full-cover for-dark-style bg-gray-3 bg-image" style="background-image: url(assets/img/valley/1.png); background-position: 50% 50%;"></div>

                            <!-- Begin split box content
                            =============================
                            * Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
                            -->
                            <div class="split-box-content sb-content-right" >

                                <!-- Begin tt-heading
                                ======================
                                * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
                                * Use class "text-center" or "text-right" to align tt-heading.
                                * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
                                -->
                                <div class="tt-heading">
                                    <div class="tt-heading-inner">
                                        <h1 class="tt-heading-title">About</h1>
                                        <div class="tt-heading-subtitle">Who I am and what I do</div>
                                        <hr class="hr-short">
                                    </div> <!-- /.tt-heading-inner -->
                                </div>
                                <!-- End tt-heading -->

                                <div class="margin-top-30">
                                    <p>Hi, my name is <strong>Martin Vegas</strong>. I am an artist and photographer. Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit aut fugit. Vivamus at nibh tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                                </div>

                                <a href="about-me-fluid.html" class="btn btn-primary margin-top-20">Read More</a>
                                <a href="contact.html" class="btn btn-dark margin-top-20">Hire Me!</a>

                                <!-- Begin signature -->
                                <!-- <div class="signature">
                                    <img class="signature-dark" src="assets/img/signature-dark.png" alt="">
                                    <img class="signature-light" src="assets/img/signature-light.png" alt="">
                                </div> -->
                                <!-- End signature -->

                            </div>
                            <!-- End split box content -->

                        </div> <!-- /.col -->

                    </div> <!-- /.row-height -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End split box -->

    </div> <!-- /.about-me-inner -->
</section>
<!-- End about me section -->


<!-- =================================
///// Begin gallery list section /////
================================== -->
<section id="gallery-list-section">

    <!-- Begin tt-heading
    ======================
    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
    * Use class "text-center" or "text-right" to align tt-heading.
    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
    -->
    <div class="tt-heading tt-heading-lg padding-on text-center">
        <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
            <h1 class="tt-heading-title">Latest Works</h1>
            <div class="tt-heading-subtitle">My latest photo projects / <a href="categories-grid.html">View All</a></div>
            <hr class="hr-short">
        </div> <!-- /.tt-heading-inner -->
    </div>
    <!-- End tt-heading -->

    <div class="isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <!-- Begin isotope
        ===================
        * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
        * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
        -->
        <div class="isotope col-4">

            <!-- Begin isotope items wrap
            ==============================
            * Use class "gli-alter-1", "gli-alter-2", "gli-alter-3", "gli-alter-4" or "gli-alter-5" to change gallery list item style.
            * Use class "gli-dark" or "gli-colored" to enable colored hover overlay (effect only with default hover overlay and "gli-alter-4", "gli-alter-5" classes!).
            * Use class "gli-frame" to enable image frames.
            -->
            <div class="isotope-items-wrap gli-colored gli-alter-4">

                <!-- Grid sizer (do not remove!!!) -->
                <div class="grid-sizer"></div>


                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/2.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">49</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">The Old Man Dreams</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/3.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">85</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">These Wonderful Freckles</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Black &amp; White</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/4.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">7</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Paris Fashion Week</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Fashion</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/5.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">12</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Afternoon Photoshoot</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/6.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">96</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Sit Back and Relax</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Portraits</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/7.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">56</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Something In The Water vol.2</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Fashion</a>, <a href="albums-archive.html">Outdoor</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/about.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">53</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Autumn Nights</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/about_1.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">71</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Beauty &amp; Fashion</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Fashion</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">68</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">No Colors This Time</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Black &amp; White</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/2.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">32</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Monday's Monochromes</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/3.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">13</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Something In The Water</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Fashion</a>, <a href="albums-archive.html">Portraits</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="{{ url('/the-valley') }}" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/4.png); background-position: 50% 50%"></div>

                                <span class="gl-item-image-zoom"></span>
                            </a>
                            <!-- End gallery list item image inner -->

                            <!-- Begin gallery list item meta -->
                            <ul class="gli-meta">
                                <!-- <li>
                                    <div class="img-count" title="Image count"><i class="fas fa-camera"></i> 32</div>
                                </li> -->
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">11</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End gallery list item meta -->

                        </div>
                        <!-- End gallery list item image -->

                        <!-- Begin gallery list item info -->
                        <div class="gl-item-info">
                            <div class="gl-item-caption">
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">Beautiful Bride</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a>, <a href="albums-archive.html">Fashion</a></span>
                            </div>
                        </div>
                        <!-- End gallery list item info -->

                    </div>
                    <!-- End gallery list item -->

                </div>
                <!-- End isotope item -->

            </div>
            <!-- End isotope items wrap -->


            <!-- Begin isotope pagination
            ============================== -->
            <!-- <div class="isotope-pagination">
                <div class="iso-load-more">
                    <a class="btn btn-dark-bordered btn-lg" href="">View More <i class="fas fa-refresh"></i></a>
                </div>
            </div> -->
            <!-- End isotope pagination -->

        </div>
        <!-- End isotope -->

    </div> <!-- /.isotope-wrap -->
</section>
<!-- End gallery list section -->


<!-- ===========================
///// Begin prices section /////
============================ -->
<section id="prices-section">

    <!-- Begin tt-heading
    ======================
    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
    * Use class "text-center" or "text-right" to align tt-heading.
    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
    -->
    <div class="tt-heading tt-heading-lg padding-on">
        <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
            <div class="row">
                <div class="tt-heading tt-heading-lg padding-on text-center">
                    <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                        <h1 class="tt-heading-title">Services &amp; Pricing</h1>
                        <div class="tt-heading-subtitle">Please choose your package</div>
                        <hr class="hr-short">
                    </div> <!-- /.tt-heading-inner -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.tt-heading-inner -->
    </div>
    <!-- End tt-heading -->
    <div class="prices-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <!-- Begin price boxes container
        ================================= -->
        <div class="price-boxes-container margin-bottom-80">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">

                    <!-- Begin price box -->
                    <div class="price-box">
                        <div class="pr-box price-heading bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/5.png);">
                            <div class="price-heading-inner">
                                <i class="fas fa-umbrella"></i>
                                <h3 class="price-title">3 Katha</h3>
                                <div class="price-heading-text">Studio Photo Session</div>
                            </div>
                        </div>
                        <div class="pr-box price-box-price">
                            <div class="price"><span class="price-currency">$</span>59</div>
                            <!-- <div class="price-tenure">Per 1 Month</div> -->
                        </div>
                        <div class="pr-box price-features">
                            <ul class="list-unstyled">
                                <li>Ascimo Ellan Tareck</li>
                                <li>Fitrim Namzeck</li>
                                <li>Fartimo antera Maunos</li>
                            </ul>
                        </div>
                        <div class="pr-box">
                            {{-- <a href="contact.html" class="btn btn-price-box btn-dark btn-lg">Purchase Now</a> --}}
                            <a href="{{ url('/plot_detail') }}" class="btn btn-link btn-lg btn-block">or Read More...</a>
                        </div>
                    </div>
                    <!-- End price box -->

                </div> <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">

                    <!-- Begin price box (featured) -->
                    <div class="price-box price-box-featured">
                        <div class="pr-box price-heading bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/6.png);">
                            <div class="price-heading-inner">
                                <i class="fas fa-tree"></i>
                                <h3 class="price-title">4 Katha</h3>
                                <div class="price-heading-text">Outdoor Photo Session</div>
                            </div>
                        </div>
                        <div class="pr-box price-box-price">
                            <div class="price"><span class="price-currency">$</span>89</div>
                            <!-- <div class="price-tenure">Per 6 Month</div> -->
                        </div>
                        <div class="pr-box price-features">
                            <ul class="list-unstyled">
                                <li>Cunning Fuziness</li>
                                <li>Lartem Sainter Omna</li>
                                <li>Bullerti Naiten</li>
                            </ul>
                        </div>
                        <div class="pr-box">
                            {{-- <a href="contact.html" class="btn btn-price-box btn-dark btn-lg">Purchase Now</a> --}}
                            <a href="{{ url('/plot_detail') }}" class="btn btn-link btn-lg btn-block">or Read More...</a>
                        </div>
                    </div>
                    <!-- End price box -->
                </div> <!-- /.col -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- Begin price box -->
                    <div class="price-box">
                        <div class="pr-box price-heading bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/7.png);">
                            <div class="price-heading-inner">
                                <i class="fas fa-user"></i>
                                <h3 class="price-title">10 Katha</h3>
                                <div class="price-heading-text">Personal Photo Session</div>
                            </div>
                        </div>
                        <div class="pr-box price-box-price">
                            <div class="price"><span class="price-currency">$</span>129</div>
                            <!-- <div class="price-tenure">Per 1 Year</div> -->
                        </div>
                        <div class="pr-box price-features">
                            <ul class="list-unstyled">
                                <li>Artemize Naice Femme</li>
                                <li><strong>Putras Torrim</strong></li>
                                <li>10 Voites Trante</li>
                            </ul>
                        </div>
                        <div class="pr-box">
                            {{-- <a href="contact.html" class="btn btn-price-box btn-dark btn-lg">Purchase Now</a> --}}
                            <a href="{{ url('/plot_detail') }}" class="btn btn-link btn-lg btn-block">or Read More...</a>
                        </div>
                    </div>
                    <!-- End price box -->
                </div> <!-- /.col -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- Begin price box -->
                    <div class="price-box">
                        <div class="pr-box price-heading bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/about.png);">
                            <div class="price-heading-inner">
                                <i class="fas fa-gem"></i>
                                <h3 class="price-title">Commertial</h3>
                                <div class="price-heading-text">Wedding Photo Session</div>
                            </div>
                        </div>
                        <div class="pr-box price-box-price">
                            <div class="price"><span class="price-currency">$</span>299</div>
                            <!-- <div class="price-tenure">Per 1 Year</div> -->
                        </div>
                        <div class="pr-box price-features">
                            <ul class="list-unstyled">
                                <li>Mollimo Namis Ferra</li>
                                <li><strong>Oppera Tulpas</strong></li>
                                <li><strong>Verrum Daster Hunza</strong></li>
                            </ul>
                        </div>
                        <div class="pr-box">
                            {{-- <a href="contact.html" class="btn btn-price-box btn-dark btn-lg">Purchase Now</a> --}}
                            <a href="{{ url('/plot_detail') }}" class="btn btn-link btn-lg btn-block">or Read More...</a>
                        </div>
                    </div>
                    <!-- End price box -->

                </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row margin-top-70 margin-auto max-width-800">
                <div class="col-md-12 text-center">
                    <p>Duis mattis quam quis quam cursus, a rutrum ante luctus.
                    Phasellus porta ornare enim ac euismod. Nulla fringilla
                    lectus ac tincidunt viverra a accumsan <a href="#">sapien mollis</a>.</p>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div>
        <!-- End price boxes container -->

    </div> <!-- /.prices-section-inner -->
</section>
<!-- End prices section -->
<!-- =================================
///// Begin testimonials section /////
================================== -->
<section id="testimonials-section" class="bg-dark bg-image-fixed" style="background-image: url({{asset('frontend') }}/assets/img/valley/about_1.png); background-position: 50% 50%;">
    <!-- Element cover -->
    <span class="cover bg-transparent-7-dark"></span>
    <div class="testimonials-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
        <!-- Begin testimonials carousel
        =================================
        * Use class "tm-hide-image" to hide testimonial image.
        * Use class "tm-center" or "tm-right" to align testimonials.
        -->
        <div class="testimonials-carousel tm-center">
            <div class="owl-carousel cursor-grab nav-outside dots-outside" data-items="1" data-loop="true" data-autoheight="true" data-nav="true" data-nav-speed="500" data-dots-speed="500" data-autoplay="true" data-autoplay-timeout="8000" data-autoplay-speed="500" data-autoplay-hover-pause="true">
                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">
                    <!-- Begin testimonial item -->
                    <div class="testimonial-item text-white">
                        <div class="tm-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%;"></div>
                        <blockquote>
                            <p>"Duis vel ligula non neque varius eleifend quis id elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse lacus dui, pellentesque ut porta et, consequat sit amet."</p>
                            <small>Anna Clarkson</small>
                        </blockquote>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin testimonial item -->
                    <div class="testimonial-item text-white">
                        <div class="tm-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/2.png); background-position: 50% 50%;"></div>
                        <blockquote>
                            <p>"Maecenas sit amet diam iaculis, lobortis tortor sed, bibendum quam. Nam mauris odio, sodales interdum facilisis in, dignissim et massa. In suscipit quam nisi."</p>
                            <small>John Smith</small>
                        </blockquote>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin testimonial item -->
                    <div class="testimonial-item text-white">
                        <div class="tm-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/3.png); background-position: 50% 50%;"></div>
                        <blockquote>
                            <p>"Proin at tincidunt leo. Morbi ut metus sit amet purus molestie sollicitudin. Maecenas convallis est vitae neque feugiat, in accumsan odio vestibulum. Pellentesque sodales fermentum porttitor."</p>
                            <small>Jack Paterson</small>
                        </blockquote>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <!-- End carousel item -->

            </div>
            <!-- End content carousel -->

        </div>
        <!-- End testimonials carousel -->

    </div> <!-- /.tt-intro-inner -->
</section>
<!-- End testimonials section -->


<!-- ================================
///// Begin latest news section /////
================================= -->
<section id="latest-news-section">

    <!-- Begin tt-heading
    ======================
    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
    * Use class "text-center" or "text-right" to align tt-heading.
    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
    -->
    <div class="tt-heading tt-heading-lg padding-on text-center">
        <div class="tt-heading-inner tt-wrap">
            <h1 class="tt-heading-title">Latest From Blog</h1>
            <div class="tt-heading-subtitle">News, Reviews, Tips &amp; Tricks</div>
            <hr class="hr-short">
        </div>
    </div>
    <!-- End tt-heading -->

    <div class="latest-news-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <!-- Begin latest news carousel
        ================================ -->
        <div class="latest-news-carousel">
            <div class="owl-carousel cursor-grab nav-outside-top" data-items="3" data-margin="30" data-loop="true" data-dots="false" data-nav="true" data-nav-speed="500" data-autoplay="true" data-autoplay-timeout="5000" data-autoplay-speed="500" data-autoplay-hover-pause="true" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="1" data-mobile-portrait="1">

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin blog list item -->
                    <article class="blog-list-item">

                        <!-- Blog list item image -->
                        <a href="{{ route('user.nature.detail') }}" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/4.png" alt="image"></a>

                        <!-- Begin blog list item info -->
                        <div class="bl-item-info">
                            <div class="bl-item-category"><a href="{{ route('user.nature.detail') }}">Photography</a></div>
                            <a href="{{ route('user.nature.detail') }}" class="bl-item-title"><h2>5 Reasons You Should Fall In Love With Photography</h2></a>
                            <div class="bl-item-meta">
                                <span class="published">May 26, 2017</span>
                                <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                            </div>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                            <a href="{{ url('/nature') }}" class="bl-item-read-more" title="Read More"><span></span></a>

                            <!-- Begin blog list item attributes -->
                            <ul class="bl-item-attr">
                                <li>
                                    <!-- Begin comments count -->
                                    <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 10</a>
                                    <!-- End comments count -->
                                </li>
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn active">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">48</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End blog list item attributes -->

                        </div>
                        <!-- End blog list item info -->

                    </article>
                    <!-- End blog list item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin blog list item -->
                    <article class="blog-list-item">

                        <!-- Blog list item image -->
                        <a href="{{ route('user.nature.detail') }}" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/5.png" alt="image"></a>

                        <!-- Begin blog list item info -->
                        <div class="bl-item-info">
                            <div class="bl-item-category"><a href="{{ route('user.nature.detail') }}">Equipment</a></div>
                            <a href="{{ route('user.nature.detail') }}" class="bl-item-title"><h2>10 Top Choices for Aerial Photography</h2></a>
                            <div class="bl-item-meta">
                                <span class="published">May 26, 2017</span>
                                <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">John Young</a></span>
                            </div>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                            <a href="{{ url('/nature') }}" class="bl-item-read-more" title="Read More"><span></span></a>

                            <!-- Begin blog list item attributes -->
                            <ul class="bl-item-attr">
                                <li>
                                    <!-- Begin comments count -->
                                    <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 66</a>
                                    <!-- End comments count -->
                                </li>
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">98</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End blog list item attributes -->

                        </div>
                        <!-- End blog list item info -->

                    </article>
                    <!-- End blog list item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin blog list item -->
                    <article class="blog-list-item">

                        <!-- Blog list item image -->
                        <a href="{{ route('user.nature.detail') }}" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/6.png" alt="image"></a>

                        <!-- Begin blog list item info -->
                        <div class="bl-item-info">
                            <div class="bl-item-category"><a href="{{ route('user.nature.detail') }}">Travel</a></div>
                            <a href="{{ route('user.nature.detail') }}" class="bl-item-title"><h2>How to Take Professional Travel Photos</h2></a>
                            <div class="bl-item-meta">
                                <span class="published">May 26, 2017</span>
                                <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Anna Vernik</a></span>
                            </div>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                            <a href="{{ url('/nature') }}" class="bl-item-read-more" title="Read More"><span></span></a>

                            <!-- Begin blog list item attributes -->
                            <ul class="bl-item-attr">
                                <li>
                                    <!-- Begin comments count -->
                                    <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 3</a>
                                    <!-- End comments count -->
                                </li>
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn active">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">54</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End blog list item attributes -->

                        </div>
                        <!-- End blog list item info -->

                    </article>
                    <!-- End blog list item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin blog list item -->
                    <article class="blog-list-item">

                        <!-- Blog list item image -->
                        <a href="{{ route('user.nature.detail') }}" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/6.png" alt="image"></a>

                        <!-- Begin blog list item info -->
                        <div class="bl-item-info">
                            <div class="bl-item-category"><a href="{{ route('user.nature.detail') }}">Photography</a></div>
                            <a href="{{ route('user.nature.detail') }}" class="bl-item-title"><h2>5 Tips Your Camera Manual Never Told You About Portrait Photography</h2></a>
                            <div class="bl-item-meta">
                                <span class="published">May 26, 2017</span>
                                <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Julia Beck</a></span>
                            </div>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                            <a href="{{ url('/nature') }}" class="bl-item-read-more" title="Read More"><span></span></a>

                            <!-- Begin blog list item attributes -->
                            <ul class="bl-item-attr">
                                <li>
                                    <!-- Begin comments count -->
                                    <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 0</a>
                                    <!-- End comments count -->
                                </li>
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">3</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End blog list item attributes -->

                        </div>
                        <!-- End blog list item info -->

                    </article>
                    <!-- End blog list item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin blog list item -->
                    <article class="blog-list-item">

                        <!-- Blog list item image -->
                        <a href="{{ route('user.nature.detail') }}" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/7.png" alt="image"></a>

                        <!-- Begin blog list item info -->
                        <div class="bl-item-info">
                            <div class="bl-item-category"><a href="{{ route('user.nature.detail') }}">Photography</a></div>
                            <a href="{{ route('user.nature.detail') }}" class="bl-item-title"><h2>Most Common Wedding Photography Mistakes Every Beginner Will Make</h2></a>
                            <div class="bl-item-meta">
                                <span class="published">May 26, 2017</span>
                                <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                            </div>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                            <a href="{{ url('/nature') }}" class="bl-item-read-more" title="Read More"><span></span></a>

                            <!-- Begin blog list item attributes -->
                            <ul class="bl-item-attr">
                                <li>
                                    <!-- Begin comments count -->
                                    <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 8</a>
                                    <!-- End comments count -->
                                </li>
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">71</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End blog list item attributes -->

                        </div>
                        <!-- End blog list item info -->

                    </article>
                    <!-- End blog list item -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
                ========================= -->
                <div class="cc-item">

                    <!-- Begin blog list item -->
                    <article class="blog-list-item">

                        <!-- Blog list item image -->
                        <a href="{{ route('user.nature.detail') }}" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/about.png" alt="image"></a>

                        <!-- Begin blog list item info -->
                        <div class="bl-item-info">
                            <div class="bl-item-category"><a href="{{ route('user.nature.detail') }}">Food</a> <a href="#">Photography</a></div>
                            <a href="{{ route('user.nature.detail') }}" class="bl-item-title"><h2>The Serious Eats Guide to Food Photography</h2></a>
                            <div class="bl-item-meta">
                                <span class="published">May 26, 2017</span>
                                <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                            </div>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                            <a href="{{ url('/nature') }}" class="bl-item-read-more" title="Read More"><span></span></a>

                            <!-- Begin blog list item attributes -->
                            <ul class="bl-item-attr">
                                <li>
                                    <!-- Begin comments count -->
                                    <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 28</a>
                                    <!-- End comments count -->
                                </li>
                                <li>
                                    <!-- Begin favorite button -->
                                    <div class="favorite-btn">
                                        <div class="fav-inner">
                                            <div class="icon-heart">
                                                <span class="icon-heart-empty"></span>
                                                <span class="icon-heart-filled"></span>
                                            </div>
                                        </div>
                                        <div class="fav-count">65</div>
                                    </div>
                                    <!-- End favorite button -->
                                </li>
                            </ul>
                            <!-- End blog list item attributes -->

                        </div>
                        <!-- End blog list item info -->

                    </article>
                    <!-- End blog list item -->

                </div>
                <!-- End carousel item -->

            </div>
            <!-- End content carousel -->

        </div>
        <!-- End latest news carousel -->

    </div> <!-- /.latest-news-section-inner -->
</section>
<!-- End latest news section -->

<!-- End about me section -->
<div class="split-box">
    <div class="container-fluid">
        <div class="row">
            <div class="row-lg-height full-height-vh">
                <!-- Column -->
                <div class="col-lg-12 col-lg-height col-lg-middle no-padding">

                    <!-- Begin split box content -->
                    <div class="split-box-content" style="padding:0px 10%!important;">

                        <!-- Begin contact form
                        ========================= -->
                        <form id="contact-form">
                            <div class="contact-form-inner text-left">

                                <div class="contact-form-info">
                                    <div class="tt-heading">
                                        <div class="tt-heading-inner">
                                            <h1 class="tt-heading-title">SET AN ONLINE APPOINTMENT WITH US</h1>
                                            <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                                            <hr class="hr-short">
                                        </div> <!-- /.tt-heading-inner -->
                                    </div>
                                    <!-- End tt-heading -->

                                    <div class="margin-top-30">
                                        <p>Would you like to speak to one of our financial advisers over the phone? Just submit your details and we’ll be in touch shortly.</p>
                                    </div>

                                </div> <!-- /.contact-form-info -->

                                <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
                                <input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
                                <input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
                                <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
                                <!-- End Hidden Required Fields -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="datetime-local" class="form-control" name="email" placeholder="Date Time" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="small text-gray"><em>* All fields are required!</em></div>

                            </div> <!-- /.contact-form-inner -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-lg margin-top-40">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <!-- End contact form -->

                    </div>
                    <!-- End split box content -->

                </div> <!-- /.col -->
            </div> <!-- /.row-height -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    </head>
    <style>
    .iti {
    position: relative;
    display: block;
    }
    </style>
    <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    </script>
 <section id="tt-intro" class="video-intro">
    <div class="tt-intro-inner full-height-vh bg-dark tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
        <!-- Element cover -->
        <div class="cover bg-transparent-2-dark"></div>
        <div class="youtube-bg-wrap ytp-full"> <!-- Class "ytp-full" is for full cover (depend on parent element size). -->
            <div class="youtube-bg"
                style="background-image: url({{asset('frontend') }}/assets/img/valley/about.png); background-position: 100% 100%;"
                data-property="{
                    videoURL: 'https://www.youtube.com/embed/31nXbsXmhfs',
                    containment: 'self',
                    quality: 'default',
                    startAt: 12,
                    stopAt:750,
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
        <div class="intro-caption caption-animate intro-caption-xxlg center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="tt-heading tt-heading-lg text-center">
                        <div class="tt-heading-inner tt-wrap">
                            <h1 class="tt-heading-title">What Next?</h1>
                            <div class="tt-heading-subtitle">Interested in working with me?</div>
                            <hr class="hr-short">
                        </div>
                    </div>
                    <!-- End tt-heading -->
                    <div class="margin-top-30 max-width-1000 margin-auto">
                        <p>Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque.</p>

                        <div class="margin-top-30">
                            <a href="https://www.youtube.com/@thevalleybangladesh" target="_blank" class="btn btn-dark margin-top-5 margin-right-5">Read More</a>
                            <a href="https://www.youtube.com/@thevalleybangladesh" target="_blank" class="btn btn-primary margin-top-5">Let's Work Together!</a>
                        </div>
                    </div>

                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div>
        <!-- End intro caption -->

    </div> <!-- /.tt-intro-inner -->
</section>
<!-- End intro section -->

@endsection

