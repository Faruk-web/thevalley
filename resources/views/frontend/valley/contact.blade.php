@extends('frontend.main_master')

@section('index')
 <!-- Featured Title -->
 <div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ url('/') }}" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Contact</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Contact Us
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
               <div class="page-content">
                   <!-- CONTACT -->
                    <div class="row-contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">CONTACT US</h2>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                        <p class="sub-heading">For more information on our services please contact us.</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-contact-form style-2 clearfix">
                                        <form method="POST" action="{{ route('contactUs.send')  }}" enctype="multipart/form-data">
                                            @csrf
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Name*" required>
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-phone">
                                                <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone">
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Your Email*" required>
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-subject">
                                                <input type="text" tabindex="4" id="subject" name="subject" value="" class="wpcf7-form-control" placeholder="Subject">
                                            </span>
                                            <span class="wpcf7-form-control-wrap your-message">
                                               <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message*" required ></textarea>
                                            </span>
                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info" value="Send US">
                                            </div>
                                        </form>
                                    </div><!-- /.themesflat-contact-form -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">INFOMATION</h2>
                                        <div class="sep has-width w80 accent-bg clearfix"></div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="36" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-tabs style-1 w168 clearfix">
                                        <ul class="tab-title clearfix">
                                            <li class="item-title active">
                                                <span class="inner">Head Office</span>
                                            </li>
                                            <li class="item-title">
                                                <span class="inner">Chittagong</span>
                                            </li>
                                            {{-- <li class="item-title">
                                                <span class="inner">Mexico</span>
                                            </li> --}}
                                        </ul>

                                        <div class="tab-content-wrap clearfix">
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">Address : 752, Satmasjid Road, Dhanmondi C/A, Dhaka-1205, Bangladesh </span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">Call Us : (+88) 01844 527 808</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EmailL : amfl@amgbd.com</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">348, CDA Avenue Nasirabad, Chittagong</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">Call Us : (+88) 01844 527 808</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EmailL : amfl@amgbd.com</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-map-marker"></span>
                                                                <span class="text">348, CDA Avenue Nasirabad, Chittagong</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-phone"></span>
                                                                <span class="text">Call Us : (+88) 01844 527 808</span>
                                                            </div>
                                                        </li>

                                                        <li class="clearfix">
                                                            <div class="inner">
                                                                <span class="fa fa-envelope"></span>
                                                                <span class="text">EmailL : amfl@amgbd.com</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.tab-content -->
                                        </div>
                                    </div><!-- /.themesflat-tabs -->
                                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="35" data-smobile="35"></div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58441.11557723887!2d90.37683036511066!3d23.727054811305003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1samin%20mohammad%20foundation!5e0!3m2!1sbn!2sbd!4v1687347484220!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    {{-- <div class="themesflat-map"></div> --}}
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="78" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END CONTACT -->
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
