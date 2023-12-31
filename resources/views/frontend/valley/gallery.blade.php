@extends('frontend.main_master')

@section('index')
<section id="page-header">

    <!-- Begin page header image
    =============================
    * Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
    * Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
    * Use class "hide-ph-image" to hide page header image without removing the code.
    -->
    <div class="page-header-image parallax-bg-3 bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/about_1.png);">

        <!-- Element cover
        ===================
        * You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".
        -->
        <div class="cover bg-transparent-5-dark"></div>

    </div>
    <!-- End page header image -->

    <!-- Begin page header inner -->
    <div class="page-header-inner tt-wrap">

        <!-- Begin page header caption
        ===============================
        * Use classes "ph-caption-xs", "ph-caption-sm", "ph-caption-lg" or "ph-caption-xlg" to set page header size.
        * Use class "parallax-1" up to "parallax-6" to enable parallax effect.
        * Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
        -->
        <div class="page-header-caption ph-caption-lg parallax-5 fade-out-scroll-3">
            <h1 class="page-header-title">Portfolio</h1>
            <hr class="hr-short">

            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
            <div class="page-header-description" data-max-words="40">
                <p>Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus vitae turpis. Pellentesque men egestas odio mi, vitae egestas massa elementum.</p>
            </div>

        </div>
        <!-- End page header caption -->

    </div>
    <!-- End page header inner -->

</section>
<!-- End page header -->


<!-- =================================
///// Begin gallery list section /////
================================== -->
<section id="gallery-list-section">
    <div class="isotope-wrap tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <!-- Begin isotope
        ===================
        * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
        * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
        -->
        <div class="isotope col-3 gutter-3">

            <!-- Begin isotope top content -->
            <div class="isotope-top-content">

                <!-- Begin isotope filter
                ==========================
                * Use class "fi-to-button" to enable isotope filter button syle.
                * Use class "fi-center" or "fi-right" to align filter ("fi-center"= no effect on "fi-to-button").
                -->
                <div class="isotope-filter">
                    <div class="isotope-filter-button">
                        <span class="ifb-icon"><i class="fas fa-sliders-h"></i></span>
                        <span class="ifb-icon-close"><i class="fas fa-times"></i></span> <!-- effect on small screens!) -->
                    </div>
                    <ul class="isotope-filter-links">
                        <li><a href="#" class="active" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter=".fashion">Fashion</a></li>
                        <li><a href="#" data-filter=".portraits">Portraits</a></li>
                        <li><a href="#" data-filter=".black-and-white">Black &amp; White</a></li>
                        <li><a href="#" data-filter=".outdoor">Outdoor</a></li>
                    </ul>
                </div>
                <!-- End isotope filter -->

            </div>
            <!-- End isotope top content -->

            <!-- Begin isotope items wrap
            ==============================
            * Use class "gli-alter-1", "gli-alter-2", "gli-alter-3", "gli-alter-4" or "gli-alter-5" to change gallery list item style.
            * Use class "gli-dark" or "gli-colored" to enable colored hover overlay (effect only with default hover overlay and "gli-alter-4", "gli-alter-5" classes!).
            * Use class "gli-frame" to enable image frames.
            -->
            <div class="isotope-items-wrap gli-colored">

                <!-- Grid sizer (do not remove!!!) -->
                <div class="grid-sizer"></div>


                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item outdoor iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
                                <div class="gl-item-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%"></div>

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
                <div class="isotope-item black-and-white iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item fashion iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item outdoor iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item portraits iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item fashion outdoor iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item outdoor iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item fashion iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item black-and-white iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item outdoor iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item fashion portraits iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                <div class="isotope-item outdoor fashion iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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

                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                <div class="isotope-item outdoor fashion iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">My Super Awesome Album</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a>, <a href="albums-archive.html">Fashion</a></span>
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
                <div class="isotope-item portraits iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                                        <div class="fav-count">23</div>
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
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">One Day Shoot With Ordinary People</a></h2>
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
                <div class="isotope-item outdoor iso-height-1">

                    <!-- Begin gallery list item -->
                    <div class="gallery-list-item">

                        <!-- Begin gallery list item image -->
                        <div class="gl-item-image-wrap">

                            <!-- Begin gallery list item image inner -->
                            <a href="gallery-single-grid.html" class="gl-item-image-inner">
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
                                        <div class="fav-count">6</div>
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
                                <h2 class="gl-item-title"><a href="gallery-single-grid.html">The Beauty of Nature</a></h2>
                                <span class="gl-item-category"><a href="albums-archive.html">Outdoor</a></span>
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
            <div class="isotope-pagination">
                <div class="iso-load-more">
                    <a class="btn btn-dark-bordered btn-lg" href="">View More <i class="fas fa-refresh"></i></a>
                </div>
            </div>
            <!-- End isotope pagination -->

        </div>
        <!-- End isotope -->

    </div> <!-- /.isotope-wrap -->
</section>
<!-- End gallery list section -->

@endsection
