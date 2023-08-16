@extends('frontend.main_master')

@section('index')
<section id="tt-intro" class="slideshow-intro">
    <div class="tt-intro-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
        <div class="gl-carousel-wrap no-padding"> <!-- Optional: use class "no-padding" to disable paddings -->
            <div class="owl-carousel cc-height-5 cursor-grab dots-right bg-dark" data-items="1" data-loop="true" data-nav="true" data-nav-speed="500" data-dots-speed="500" data-autoplay="true" data-autoplay-timeout="2000" data-autoplay-speed="500" data-autoplay-hover-pause="true">
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


<!-- ==============================
///// Begin blog list section /////
=============================== -->
<section id="blog-list-section" class="blog-list-classic">
    <div class="blog-list-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <div class="row no-margin">

            <!-- Content column -->
            <div class="col-md-12 no-padding-left no-padding-right">

                <div class="isotope-wrap">

                    <!-- Begin isotope
                    ===================
                    * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
                    * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                    -->
                    <div class="isotope col-3 gutter-3">

                        <!-- Begin isotope items wrap
                        ============================== -->
                        <div class="isotope-items-wrap no-margin">

                            <!-- Grid sizer (do not remove!!!) -->
                            <div class="grid-sizer"></div>


                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/7.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Photography</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>5 Reasons You Should Fall In Love With Photography</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/6.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Equipment</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>10 Top Choices for Aerial Photography</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">John Young</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/7.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Travel</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>How to Take Professional Travel Photos</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Anna Vernik</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/about_1.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Photography</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>5 Tips Your Camera Manual Never Told You About Portrait Photography</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Julia Beck</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/about.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Photography</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>Most Common Wedding Photography Mistakes Every Beginner Will Make</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/1.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Food</a> <a href="#">Photography</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>The Serious Eats Guide to Food Photography</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/2.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Fashion</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>How to Become a Fashion Photographer</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Jack Jackson</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

                                        <!-- Begin blog list item attributes -->
                                        <ul class="bl-item-attr">
                                            <li>
                                                <!-- Begin comments count -->
                                                <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 2</a>
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
                                                    <div class="fav-count">14</div>
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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/3.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Fashion</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>Best Lighting Tips For High Fashion Photography</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

                                        <!-- Begin blog list item attributes -->
                                        <ul class="bl-item-attr">
                                            <li>
                                                <!-- Begin comments count -->
                                                <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 79</a>
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
                                                    <div class="fav-count">114</div>
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
                            <!-- End isotope item -->

                            <!-- =====================
                            /// Begin isotope item ///
                            ====================== -->
                            <div class="isotope-item">

                                <!-- Begin blog list item -->
                                <article class="blog-list-item">

                                    <!-- Blog list item image -->
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/4.png" alt="image"></a>

                                    <!-- Begin blog list item info -->
                                    <div class="bl-item-info">
                                        <div class="bl-item-category"><a href="blog-archive.html">Streets</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>These Ideas Will Get Your Street Photography Rocking</h2></a>
                                        <div class="bl-item-meta">
                                            <span class="published">May 26, 2017</span>
                                            <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Mike Leon</a></span>
                                        </div>

                                        <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                        <div class="bl-item-desc" data-max-words="14">Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesen congue convallis artula ellis.</div>

                                        <a href="blog-single.html" class="bl-item-read-more" title="Read More"><span></span></a>

                                        <!-- Begin blog list item attributes -->
                                        <ul class="bl-item-attr">
                                            <li>
                                                <!-- Begin comments count -->
                                                <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 9</a>
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
                                                    <div class="fav-count">6</div>
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
                            <!-- End isotope item -->
                        </div>
                        <!-- End isotope items wrap -->
                    </div>
                    <!-- End isotope -->
                </div> <!-- /.isotope-wrap -->
                <!-- Begin pagination -->
                <nav class="pagination-wrap">
                    <ul class="pagination">
                        <li>
                            <a href="" aria-label="Previous">
                                <span aria-hidden="true">First</span>
                            </a>
                        </li>
                        <li><a href="">Prev</a></li>
                        <li class="active"><a href="#0">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li>...</li>
                        <li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                        <li><a href="">8</a></li>
                        <li><a href="">Next</a></li>
                        <li>
                            <a href="" aria-label="Next">
                                <span aria-hidden="true">Last</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Begin pagination info -->
                    <div class="pagination-info">
                        <span>Showing page 1 of 8</span>
                        <span>Items 1 - 5 of 40</span>
                    </div>
                    <!-- End pagination info -->
                </nav>
                <!-- End pagination -->
            </div> <!-- /.col (Content column) -->
        </div> <!-- /.row -->
    </div> <!-- /.blog-list-inner -->
</section>
<!-- End blog list section -->
<div class="split-box">
    <div class="container-fluid">
        <div class="row">
            <div class="row-lg-height full-height-vh">
                <!-- Column -->
                <div class="col-lg-12 col-lg-height col-lg-middle no-padding">
                    <!-- Begin split box content -->
                    <div class="split-box-content" style="padding-top: 0%;">
                        <!-- Begin contact form
                        ========================= -->
                        <form id="contact-form">
                            <div class="contact-form-inner text-left">

                                <div class="contact-form-info">
                                    <div class="tt-heading">
                                        <div class="tt-heading-inner">
                                            <h1 class="tt-heading-title">Contact With Us</h1>
                                            <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                                            <hr class="hr-short">
                                        </div> <!-- /.tt-heading-inner -->
                                    </div>
                                    <!-- End tt-heading -->

                                    <div class="margin-top-30">
                                        <p>Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
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
                                            <input type="text" class="form-control" name="Phone" placeholder="Phone" required>
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
                                            <select class="form-control" name="option" required>
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="Say Hello">Say hello</option>
                                                <option value="New Project">New project</option>
                                                <option value="Feedback">Feedback</option>
                                                <option value="Other">Other</option>
                                            </select>
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


@endsection
