@extends('frontend.main_master')
@section('index')

<section id="blog-list-carousel-section" class="blc-featured-slideshow">
    <div class="bl-carousel-wrap tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
        <div class="owl-carousel cc-height-3 cc-height-m cursor-grab nav-bottom-right" data-items="1" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="8000" data-autoplay-hover-pause="true" data-animate-in="fadeIn" data-animate-out="fadeOut">
            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">
                <!-- Element cover -->
                <span class="cover bg-transparent-4-dark"></span>
                <!-- cc image -->
                <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/about.png); background-position: 50% 50%;"></div>
                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-xlg bottom-left caption-animate max-width-1000"> <!-- max width class is optional -->
                    <div class="cc-category">
                        <a href="blog-archive.html">Featured</a> <a href="blog-archive.html">Photography</a>
                    </div>
                    <h2 class="cc-title">
                        <a href="blog-single.html">The Best New Photo Products &amp; Gadgets In This Year</a>
                    </h2>
                    <div class="cc-meta">
                        <span class="published">May 26, 2017</span>
                        <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                    </div>
                    <a href="blog-single.html" class="btn btn-primary btn-sm margin-top-20">Read More!</a>
                </div>
                <!-- End caption -->
                <!-- Begin carousel item attributes -->
                <ul class="cc-item-attr attr-animated">
                    <li>
                        <!-- Begin comments count -->
                        <a href="blog-single.html#blog-post-comments" class="cc-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 12</a>
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
                            <div class="fav-count">47</div>
                        </div>
                        <!-- End favorite button -->
                    </li>
                </ul>
                <!-- End carousel item attributes -->
            </div>
            <!-- End carousel item -->
            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">
                <!-- Element cover -->
                <span class="cover bg-transparent-4-dark"></span>
                <!-- cc image -->
                <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/4.png); background-position: 50% 50%;"></div>
                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-xlg bottom-left caption-animate max-width-1000"> <!-- max width class is optional -->
                    <div class="cc-category">
                        <a href="blog-archive.html">Featured</a> <a href="blog-archive.html">Photography</a>
                    </div>
                    <h2 class="cc-title">
                        <a href="blog-single.html">How To Use A Styled Photo Shoot To Build Your Portfolio</a>
                    </h2>
                    <div class="cc-meta">
                        <span class="published">May 26, 2017</span>
                        <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                    </div>
                    <a href="blog-single.html" class="btn btn-primary btn-sm margin-top-20">Read More!</a>
                </div>
                <!-- End caption -->

                <!-- Begin carousel item attributes -->
                <ul class="cc-item-attr attr-animated">
                    <li>
                        <!-- Begin comments count -->
                        <a href="blog-single.html#blog-post-comments" class="cc-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 32</a>
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
                            <div class="fav-count">61</div>
                        </div>
                        <!-- End favorite button -->
                    </li>
                </ul>
                <!-- End carousel item attributes -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-4-dark"></span>

                <!-- cc image -->
                <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-xlg bottom-left caption-animate max-width-1000"> <!-- max width class is optional -->
                    <div class="cc-category">
                        <a href="blog-archive.html">Featured</a> <a href="blog-archive.html">Photography</a>
                    </div>
                    <h2 class="cc-title">
                        <a href="blog-single.html">Test Your Photography Knowledge</a>
                    </h2>
                    <div class="cc-meta">
                        <span class="published">May 26, 2017</span>
                        <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                    </div>
                    <a href="blog-single.html" class="btn btn-primary btn-sm margin-top-20">Read More!</a>
                </div>
                <!-- End caption -->

                <!-- Begin carousel item attributes -->
                <ul class="cc-item-attr attr-animated">
                    <li>
                        <!-- Begin comments count -->
                        <a href="blog-single.html#blog-post-comments" class="cc-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 5</a>
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
                            <div class="fav-count">21</div>
                        </div>
                        <!-- End favorite button -->
                    </li>
                </ul>
                <!-- End carousel item attributes -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-4-dark"></span>

                <!-- cc image -->
                <div class="cc-image bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/2.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-xlg bottom-left caption-animate max-width-1000"> <!-- max width class is optional -->
                    <div class="cc-category">
                        <a href="blog-archive.html">Featured</a> <a href="blog-archive.html">Photography</a>
                    </div>
                    <h2 class="cc-title">
                        <a href="blog-single.html">More Couples Hiring Pro Photographers</a>
                    </h2>
                    <div class="cc-meta">
                        <span class="published">May 26, 2017</span>
                        <span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>
                    </div>
                    <a href="blog-single.html" class="btn btn-primary btn-sm margin-top-20">Read More!</a>
                </div>
                <!-- End caption -->

                <!-- Begin carousel item attributes -->
                <ul class="cc-item-attr attr-animated">
                    <li>
                        <!-- Begin comments count -->
                        <a href="blog-single.html#blog-post-comments" class="cc-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 9</a>
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
                            <div class="fav-count">129</div>
                        </div>
                        <!-- End favorite button -->
                    </li>
                </ul>
                <!-- End carousel item attributes -->

            </div>
            <!-- End carousel item -->
        </div>
        <!-- End content carousel -->

    </div> <!-- /.gl-carousel-wrap -->
</section>
<!-- End blog list carousel section -->


<!-- ==============================
///// Begin blog list section /////
=============================== -->
<section id="blog-list-section" class="blog-list-grid">
    <div class="blog-list-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <div class="row no-margin">

            <!-- Content column -->
            <div class="col-md-8 no-padding-left no-padding-right">

                <div class="isotope-wrap">

                    <!-- Begin isotope
                    ===================
                    * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
                    * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                    -->
                    <div class="isotope col-2 gutter-3">

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/3.png" alt="image"></a>

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/4.png" alt="image"></a>

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/5.png" alt="image"></a>

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/6.png" alt="image"></a>

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/7.png" alt="image"></a>

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/3.png" alt="image"></a>

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
                                    <a href="blog-single.html" class="bl-item-image"><img src="{{asset('frontend') }}/assets/img/valley/1.png" alt="image"></a>

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
                                        <div class="bl-item-category"><a href="blog-archive.html">Photography</a></div>
                                        <a href="blog-single.html" class="bl-item-title"><h2>Donec faucibus turpis ut egestas</h2></a>
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
                                                <a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 14</a>
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
                                                    <div class="fav-count">90</div>
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

            <!-- Sidebar column -->
            <div class="col-md-4 no-padding-left no-padding-right">

                <!-- Begin sidebar (sidebar right)
                =================================== -->
                <div class="sidebar sidebar-right">
                    <div class="row">

                        <div class="col-sm-12">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget blog-author no-margin-top">
                                <h3 class="sidebar-heading">About Me</h3>
                                <a href="about-me.html" class="blog-author-img bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/6.png); background-position: 50% 50%;"></a>
                                <div class="blog-author-info">
                          <h4 class="blog-author-name"><a href="about-me.html">Martin Vegas</a></h4>
                                    <div class="blog-author-sub">Artist &amp; Photographer</div>

                                    <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                    <p class="blog-author-text" data-max-words="15">Debitis sociis phasellus feugiat luctus diam. Vitae aenean odio ligula interdum suscipit antimoa arte lacus ante.</p>

                      </div>
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-sm-12">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-social">
                                <h3 class="sidebar-heading">Follow</h3>
                                <!-- Begin social buttons -->
                                <div class="social-buttons">
                                    <ul>
                                        <li><a href="https://www.facebook.com/themetorium" class="btn btn-social-min btn-facebook" title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/Themetorium" class="btn btn-social-min btn-twitter" title="Follow me on Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/+SiiliOnu" class="btn btn-social-min btn-google" title="Follow me on Google+" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="https://www.pinterest.com/themetorium" class="btn btn-social-min btn-pinterest" title="Follow me on Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="https://dribbble.com/Themetorium" class="btn btn-social-min btn-dribbble" title="Follow me on Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="https://instagram.com" class="btn btn-social-min btn-instagram" title="Follow me on instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End social buttons -->
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-sm-12">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-search">
                                <h3 class="sidebar-heading">Search</h3>
                                <form id="blog-search-form" class="form-btn-inside" method="get" action="search-results.html">
                                    <div class="form-group no-margin">
                                        <input type="text" class="form-control" id="blog-search" name="search" placeholder="Search...">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-md-12 col-sm-6">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-categories">
                                <h3 class="sidebar-heading">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="">Photography <span>26</span></a></li>
                                    <li><a href="">Equipment <span>54</span></a></li>
                                    <li><a href="">Travel <span>17</span></a></li>
                                    <li><a href="">Fashion <span>19</span></a></li>
                                    <li><a href="">Food <span>67</span></a></li>
                                    <li><a href="">Macro <span>67</span></a></li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-md-12 col-sm-6">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-post-list">
                                <h3 class="sidebar-heading">Most Popular</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="" class="post-thumb bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/7.png); background-position: 50% 50%;"></a>
                                        <div class="post-data">
                                            <h5 class="post-title"><a href="blog-single.html">10 Top Choices for Aerial Photography</a></h5>
                                            <!-- <span class="author">By: <a href="">Martin Vegas</a></span> -->
                                            <span class="date">May 26, 2017</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" class="post-thumb bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/1.png); background-position: 50% 50%;"></a>
                                        <div class="post-data">
                                            <h5 class="post-title"><a href="blog-single.html">How to Take Professional Travel Photos</a></h5>
                                            <!-- <span class="author">By: <a href="">John Doe</a></span> -->
                                            <span class="date">May 12, 2017</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" class="post-thumb bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/2.png); background-position: 50% 50%;"></a>
                                        <div class="post-data">
                                            <h5 class="post-title"><a href="blog-single.html">5 Tips Your Camera Manual Never Told You About Portrait Photography</a></h5>
                                            <!-- <span class="author">By: <a href="">Henry Harrison</a></span> -->
                                            <span class="date">April 17, 2017</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" class="post-thumb bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/3.png); background-position: 50% 50%;"></a>
                                        <div class="post-data">
                                            <h5 class="post-title"><a href="blog-single.html">Most Common Wedding Photography Mistakes Every Beginner Will Make</a></h5>
                                            <!-- <span class="author">By: <a href="">Henry Harrison</a></span> -->
                                            <span class="date">March 21, 2017</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-md-12 col-sm-6">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-comments-list">
                                <h3 class="sidebar-heading">Recent Comments</h3>
                                <ul class="list-unstyled">
                                    <li class="sidebar-comment-wrap">
                                        <a href="blog-single-no-sidebar.html" class="sidebar-comment-avatar bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/4.png); background-position: 50% 50%;"></a>
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="author">By: <a href="">Martin Vegas</a></span>
                                                <span class="date">May 26, 2017</span>
                                            </div>
                                            <div class="sidebar-comment">
                                                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                                <a href="blog-single-no-sidebar.html" data-max-words="15">Aliquet praesent tempor ac dolor aliquet. Risus mi vitae hendrerit orci vitae amet lacus tertis maurum entire satec tatus naite esek. Lacemus ante sider.</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sidebar-comment-wrap">
                                        <a href="blog-single-no-sidebar.html" class="sidebar-comment-avatar bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/5.png); background-position: 50% 50%;"></a>
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="author">By: <a href="">David Bradley</a></span>
                                                <span class="date">May 26, 2017</span>
                                            </div>
                                            <div class="sidebar-comment">
                                                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                                <a href="blog-single-no-sidebar.html" data-max-words="15">Laculis molestie rhoncus. Amet maecenas ut orci id dui. Et dui morbi. Non mauris nautis trettis sitamo egret laites mannis seti faktasi norem.</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sidebar-comment-wrap">
                                        <a href="blog-single-no-sidebar.html" class="sidebar-comment-avatar bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/6.png); background-position: 50% 50%;"></a>
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="author">By: <a href="">Kate Dixon</a></span>
                                                <span class="date">May 26, 2017</span>
                                            </div>
                                            <div class="sidebar-comment">
                                                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                                                <a href="blog-single-no-sidebar.html" data-max-words="15">Feugiat fringilla sequi. Anunc adipiscing nisl lorem morbi tincidunt gravida vistrim nocktac fitset muita opimus necta vimavus canipantri levit naidum unimus.</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-md-12 col-sm-6">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-tags">
                                <h3 class="sidebar-heading">Popular Tags</h3>
                                <ul>
                                    <li><a href="">#portfolio</a></li>
                                    <li><a href="">#multipurpose</a></li>
                                    <li><a href="">#minimal</a></li>
                                    <li><a href="">#agency</a></li>
                                    <li><a href="">#creatives</a></li>
                                    <li><a href="">#freelancers</a></li>
                                    <li><a href="">#design</a></li>
                                    <li><a href="">#bootstrap</a></li>
                                    <li><a href="">#responsive</a></li>
                                    <li><a href="">#simple</a></li>
                                    <li><a href="">#creative</a></li>
                                    <li><a href="">#retina</a></li>
                                    <li><a href="">#blog</a></li>
                                    <li><a href="">#wordpress</a></li>
                                    <li><a href="">#black &amp; white</a></li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->
                        </div> <!-- /.col -->
                        <div class="col-md-12 col-sm-6">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-subscribe">
                                <h3 class="sidebar-heading">Subscribe</h3>
                                <p class="small text-gray">Subscribe to our newsletter and stay updated on the latest news! Do not worry, we will not send spam.</p>

                                <!-- Begin subscribe form -->
                                <form id="sidebar-subscribe-form">
                                    <div class="form-group no-margin">
                                        <input type="email" class="form-control" id="sidebar-subscribe" name="subscribe" placeholder="Enter your email address..." required="">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Subscribe</button>
                                    </div>
                                </form>
                                <!-- End subscribe form -->

                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                        <div class="col-md-12 col-sm-6">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-meta">
                                <h3 class="sidebar-heading">Meta</h3>
                                <ul class="list-unstyled">
                                    <li><a href="">Log In</a></li>
                                    <li><a href="">Entries RSS</a></li>
                                    <li><a href="">Comments RSS</a></li>
                                    <li><a href="https://wordpress.org/">WordPress.org</a></li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div>
                <!-- End sidebar -->

            </div> <!-- /.col (Sidebar column) -->

        </div> <!-- /.row -->

    </div> <!-- /.blog-list-inner -->
</section>
<!-- End blog list section -->
<!-- End about me section -->
<div class="split-box" style="background-image: url({{asset('frontend') }}/assets/img/valley/Background.png);background-position: 50% 50%;">
    <div class="container-fluid">
        <div class="row">
            <div class="row-lg-height full-height-vh">
                <!-- Column -->
                <div class="col-lg-12 col-lg-height col-lg-middle no-padding">

                    <!-- Begin split box content -->
                    <div class="split-box-content">

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
