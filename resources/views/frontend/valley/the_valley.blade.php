@extends('frontend.main_master')
@section('index')
<section id="page-header" class="ph-lg">

    <!-- Begin page header image
    =============================
    * Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
    * Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
    * Use class "hide-ph-image" to hide page header image without removing the code.
    -->
    <div class="page-header-image parallax-bg-3 bg-image" style="background-image: url({{ asset('frontend') }}/assets/img/valley/b1.png);">

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
        <div class="page-header-caption parallax-4 fade-out-scroll-4">
            <h1 class="page-header-title">The Coolest Photo Project I've Ever Created</h1>
            <div class="page-header-category"><a href="albums-archive.html">Outdoor</a></div>

            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
            <div class="page-header-description" data-max-words="40">
                <p>Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus vitae turpis. Pellentesque men egestas odio mi, vitae egestas massa elementum ut. Cras dolor dui consequat massi.</p>
            </div>

            <!-- Begin modal trigger -->
            <a href="#0" class="ph-more-info-trigger" data-toggle="modal" data-target="#modal-67230981"><span class="ph-more-info-trigger-icon"></span> Show More...</a>
            <!-- End modal trigger -->

            <!-- Begin modal
            =================
            * Use class "modal-center" to enable modal center position (use for short content only!).
            * Use class "modal-left" to enable left sidebar modal.
            * Use class "modal-right" to enable right sidebar modal.
            -->
            <div id="modal-67230981" class="modal modal-left fade" tabindex="-1" role="dialog" aria-hidden="false">
               <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="tt-close-btn"></i></button>
                            <h4 class="modal-title">Info:</h4>
                        </div> <!-- /.modal-header -->

                        <div class="modal-body">

                            <!-- Begin modal body image
                            ============================
                            * Use class "modal-body-image-1" or "modal-body-image-2" to set modal body image style.
                            -->
                            <div class="modal-body-image-1 bg-image" style="background-image: url({{ asset('frontend') }}/assets/img/valley/b1.png); background-position: 50% 50%;"></div>
                            <!-- End modal body image -->

                            <!-- Begin modal body content -->
                            <div class="modal-body-content">

                                <!-- Begin tt-heading
                                ======================
                                * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
                                * Use class "text-center" or "text-right" to align tt-heading.
                                * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
                                -->
                                <div class="tt-heading tt-heading-lg">
                                    <div class="tt-heading-inner">
                                        <h1 class="tt-heading-title">The Coolest Photo Project I've Ever Created</h1>
                                        <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                                        <!-- <hr class="hr-short"> -->
                                    </div> <!-- /.tt-heading-inner -->
                                </div>
                                <!-- End tt-heading -->

                                <div class="margin-top-20">
                                    <p>Integer viverra arcu ac facilisis interdum. Proin dignissim sagittis tellus. Duis et pharetra est, vel ullamcorper libero. Fusce sed leo in dolor ornare fermentum. Sed facilisis eu justo at mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue malesuada eros, ut varius metus accumsan non. Pellentesque facilisis tortor risus, quis convallis nunc faucibus et. Proin egestas pulvinar sem, sit amet auctor ligula faucibus quis. Maecenas in libero nec turpis molestie dictum. Suspendisse id mi eget mi suscipit faucibus vitae eu metus.</p>

                                    <p>Integer accumsan iaculis pharetra. Curabitur ultricies ut justo at hendrerit. Sed quis condimentum dui. In ac nunc leo. Quisque erat sem, consequat at rutrum at, ultricies nec sapien. Sed hendrerit libero augue, sit amet ultricies urna tincidunt at. In hac habitasse platea dictumst. Vivamus et sem nec velit scelerisque molestie. Suspendisse tempus posuere venenatis.</p>
                                </div>

                                <a href="http://www.thevalleybd.com/" class="btn btn-primary" target="_blank">Buy this Time!</a>

                                <!-- Begin social buttons share -->
                                <div class="social-buttons margin-top-40">
                                    <ul>
                                        <li><strong>Share:</strong> </li>
                                        <li><a href="" class="btn btn-social-min btn-facebook btn-sm btn-rounded-full" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="" class="btn btn-social-min btn-twitter btn-sm btn-rounded-full" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="" class="btn btn-social-min btn-google btn-sm btn-rounded-full" title="Share on Google+"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="" class="btn btn-social-min btn-pinterest btn-sm btn-rounded-full" title="Share on Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End social buttons share -->

                            </div>
                            <!-- End modal body content -->

                        </div> <!-- /.modal-body -->

                        <div class="modal-footer">
                            &copy; AMG 2003 / All rights reserved
                        </div> <!-- /.modal-footer -->

                    </div> <!-- /.modal-content -->
                </div> <!-- /.modal-dialog -->
            </div>
            <!-- End modal -->

        </div>
        <!-- End page header caption -->

        <!-- Begin gallery single nav -->
        <div class="gallery-single-nav parallax-2 fade-out-scroll-4">
            <a href="{{ url('/gallery') }}" class="gsn-prew" title="Prew Project"><i class="fas fa-angle-left"></i></a>
            <a href="{{ url('/gallery') }}" class="gsn-back" title="Back to albums"><i class="fas fa-th"></i></a>
            <a href="{{ url('/gallery') }}" class="gsn-next" title="Next Project"><i class="fas fa-angle-right"></i></a>
        </div>
        <!-- End gallery single nav -->

    </div>
    <!-- End page header inner -->

</section>
<!-- End page header -->


<!-- ===================================
///// Begin gallery single section /////
==================================== -->
<section id="gallery-single-section">
    <div class="isotope-wrap tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <!-- Begin isotope
        ===================
        * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
        * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
        -->
        <div class="isotope col-3 gutter-3">

            <!-- Begin isotope top content -->
            <div class="isotope-top-content">

                <!-- Begin gallery share button
                ================================
                * Use class "gs-right" to align gallery share button.
                -->
                <a href="#0" class="gallery-share gs-right" data-toggle="modal" data-target="#modal-64253091" title="Share this gallery"><i class="fas fa-share-alt"></i></a>
                <div id="modal-64253091" class="modal modal-center fade" tabindex="-1" role="dialog" aria-hidden="false">
                   <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="tt-close-btn"></i></button>
                                <h4 class="modal-title">Share This Gallery:</h4>
                            </div> <!-- /.modal-header -->

                            <div class="modal-body">

                                <!-- Begin modal body image
                                ============================
                                * Use class "modal-body-image-1" or "modal-body-image-2" to set modal body image style.
                                -->
                                <div class="modal-body-image-1 bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/b1.png); background-position: 50% 50%;"></div>
                                <!-- End modal body image -->

                                <!-- Begin modal body content -->
                                <div class="modal-body-content">

                                    <!-- Begin modal share -->
                                    <div class="modal-share">

                                        <!-- Begin social buttons -->
                                        <div class="social-buttons">
                                            <ul>
                                                <li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full" title="Share on facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full" title="Share on twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full" title="Share on google+"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full" title="Share on pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- End social buttons -->

                                        <!-- modal share grab link -->
                                        <input class="grab-link" type="text" readonly="" value="https://yoursite.com/your-gallery-link/" onclick="this.select()">

                                    </div>
                                    <!-- End modal share -->

                                </div>
                                <!-- End modal body content -->

                            </div> <!-- /.modal-body -->

                            <div class="modal-footer">
                                &copy; Sepia 2017 / All rights reserved
                            </div> <!-- /.modal-footer -->

                        </div> <!-- /.modal-content -->
                    </div> <!-- /.modal-dialog -->
                </div>
                <!-- End modal -->

            </div>
            <!-- End isotope top content -->

            <!-- Begin isotope items wrap
            ==============================
            * Use classes "gsi-color", "gsi-zoom" or "gsi-simple" to change gallery single item cover variations.
            -->
            <div id="gallery" class="isotope-items-wrap lightgallery">
                <!-- Grid sizer (do not remove!!!) -->
                <div class="grid-sizer"></div>
                @php
                    $nature = App\Models\BannerCatagory::get();
                 @endphp
                <!-- =====================
                /// Begin isotope item ///
                ==========================
                * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                -->
                @foreach ($nature as $item)
                @if(isset($item->video_link))
                <div class="isotope-item">
                    <!-- Begin gallery single item -->
                    <a href="{{$item->video_link}}" class="gallery-single-item lg-trigger" data-exthumbnail="{{asset($item->bennar_img) }}" data-sub-html="<p>Yes, you can use image captions :)</p>">
                        <!-- Begin gallery single item image -->
                        <img src="{{asset($item->bennar_img) }}" class="gs-item-image" alt="">
                        <!-- End gallery single item image -->
                        <!-- Gallery single item image caption -->
                        <div class="gsi-image-caption">Yes, you can use image captions :</div>
                        <!-- Gallery single item icon -->
                        <div class="gs-item-icon"><i class="fas fa-play"></i></div>
                    </a>
                    <!-- End gallery single item -->
                </div>
                @else
                <div class="isotope-item">

                    <!-- Begin gallery single item -->
                    <a href="{{asset($item->bennar_img) }}" class="gallery-single-item lg-trigger" data-exthumbnail="{{asset($item->bennar_img) }}">

                        <!-- Begin gallery single item image -->
                        <img src="{{asset($item->bennar_img) }}" class="gs-item-image" alt="">
                        <!-- End gallery single item image -->

                        <!-- Gallery single item icon -->
                        <div class="gs-item-icon"><i class="fas fa-search"></i></div>

                    </a>
                    <!-- End gallery single item -->

                </div>
                <!-- End isotope item -->
                @endif
                @endforeach
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
<!-- End gallery single section -->
<div class="split-box" style="background-image: url({{asset('frontend') }}/assets/img/valley/Background.png);">
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
