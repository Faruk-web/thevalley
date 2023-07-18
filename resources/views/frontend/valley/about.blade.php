@extends('frontend.main_master')

@section('index')
<style>
    .faruk_cha{
      background-color: #1a6888;
      display:none;
    }
    @media (max-width: 600px) {
        .faruk_char{
      background-color: #1a6888;
      display:none;
    }
    .faruk_cha{
      background-color: #1a6888;
      display:block;
    }
  }
</style>
 <!-- Featured Title -->
 <div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ url('/') }}" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <span class="trail-end">About Us</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    About Us
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
                    <!-- ICONBOX -->
                    <!-- ABOUT -->
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto faruk_char">
                                <div class="col-md-6 bg-light-grey">
                                    {{-- <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div> --}}
                                    <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">
                                                Amin Mohammad Holdings Ltd
                                                </h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">AMIN MOHAMMAD FOUNDATION LIMITED (AMFL), a branded housing and commercial building developer has now grown up as a symbol of trust and confidence for the valued customers who need residential and commercial units.</p>
                                            <p class="sub-heading margin-top-30">AMIN MOHAMMAD FOUNDATION LIMITED (AMFL), the flagship company has now emerged as one of the largest and fastest-growing housing developers in Bangladesh. The company has grown with the time and with Bangladesh aiming to improve the living standard of those who have placed their trust in it. The most precious asset of AMFL is its strong and dedicated human resources consisting of people.</p>

                                        </div>
                                        {{-- <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div> --}}
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="22" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.themesflat-content-box -->

                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/amfl/about/1.png')}}');center center no-repeat; background-size: cover;">
                                    <div class="col span_1_of_3">
                                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                                        <div class="widget widget_instagram">
                                            <h2 class="widget-title margin-bottom-30"><span> PHOTOS</span></h2>
                                            <div class="instagram-wrap data-effect clearfix col3 g10">
                                                <div class="instagram_badge_image has-effect-icon">
                                                    <a href="https://www.instagram.com/amflbd/" target="_blank" class="data-effect-item">
                                                        <span class="item"><img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image" ></span>
                                                        <div class="overlay-effect bg-color-2"></div>
                                                        <div class="elm-link">
                                                            <span class="icon-3"></span>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="instagram_badge_image has-effect-icon">
                                                    <a href="https://www.instagram.com/amflbd/" target="_blank" class="data-effect-item">
                                                        <span class="item"><img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image" ></span>
                                                        <div class="overlay-effect bg-color-2"></div>
                                                        <div class="elm-link">
                                                            <span class="icon-3"></span>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="instagram_badge_image has-effect-icon">
                                                    <a href="https://www.instagram.com/amflbd/" target="_blank" class="data-effect-item">
                                                        <span class="item"><img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image"></span>
                                                        <div class="overlay-effect bg-color-2"></div>
                                                        <div class="elm-link">
                                                            <span class="icon-3"></span>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="instagram_badge_image has-effect-icon">
                                                    <a href="https://www.instagram.com/amflbd/" target="_blank" class="data-effect-item">
                                                        <span class="item"><img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image"></span>
                                                        <div class="overlay-effect bg-color-2"></div>
                                                        <div class="elm-link">
                                                            <span class="icon-3"></span>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="instagram_badge_image has-effect-icon">
                                                    <a href="https://www.instagram.com/amflbd/" target="_blank" class="data-effect-item">
                                                        <span class="item"><img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image"></span>
                                                        <div class="overlay-effect bg-color-2"></div>
                                                        <div class="elm-link">
                                                            <span class="icon-3"></span>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="instagram_badge_image has-effect-icon">
                                                    <a href="https://www.instagram.com/amflbd/" target="_blank" class="data-effect-item">
                                                        <span class="item"><img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image"></span>
                                                        <div class="overlay-effect bg-color-2"></div>
                                                        <div class="elm-link">
                                                            <span class="icon-3"></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /.widget_instagram -->
                                    </div><!-- /.col -->
                                </div>
                                <!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row-testimonials">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="widget-title margin-bottom-30"><span>
                                            Board of Directors
                                            </span></h2>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="themesflat-testimonials style-3 align-center has-width w35 circle clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                   <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                                   <span class="icon-wrap">
                                                                       <i class="fa fa-quote-left"></i>
                                                                   </span>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                                    <div class="name-pos clearfix">
                                                                        <h6 class="name">RON TOMLINSON</h6>
                                                                        <span class="position">CEO ThemesFlat</span>
                                                                    </div>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials -->
                                                    <div class="themesflat-testimonials style-3 align-center has-width w35 circle clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                   <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                                   <span class="icon-wrap">
                                                                       <i class="fa fa-quote-left"></i>
                                                                   </span>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                                    <div class="name-pos clearfix">
                                                                        <h6 class="name">KEVIN CINQ-MARS</h6>
                                                                        <span class="position">President</span>
                                                                    </div>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials -->
                                                    <div class="themesflat-testimonials style-3 align-center has-width w35 circle clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                   <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                                   <span class="icon-wrap">
                                                                       <i class="fa fa-quote-left"></i>
                                                                   </span>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                                    <div class="name-pos clearfix">
                                                                        <h6 class="name">ADAM HENDRIKS</h6>
                                                                        <span class="position">General Manager</span>
                                                                    </div>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials -->
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="themesflat-testimonials style-3 align-center has-width w35 circle clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                   <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                                   <span class="icon-wrap">
                                                                       <i class="fa fa-quote-left"></i>
                                                                   </span>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                                    <div class="name-pos clearfix">
                                                                        <h6 class="name">CHRISTOPHER FLANN</h6>
                                                                        <span class="position">Maketing Manager</span>
                                                                    </div>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials -->
                                                    <div class="themesflat-testimonials style-3 align-center has-width w35 circle clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                   <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                                   <span class="icon-wrap">
                                                                       <i class="fa fa-quote-left"></i>
                                                                   </span>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                                    <div class="name-pos clearfix">
                                                                        <h6 class="name">MICHAEL CLEMENT</h6>
                                                                        <span class="position">Design Manager</span>
                                                                    </div>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials -->
                                                    <div class="themesflat-testimonials style-3 align-center has-width w35 circle clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                   <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                                   <span class="icon-wrap">
                                                                       <i class="fa fa-quote-left"></i>
                                                                   </span>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                                    <div class="name-pos clearfix">
                                                                        <h6 class="name">DANA LEWIS</h6>
                                                                        <span class="position">Manager, Human Resources</span>
                                                                    </div>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials -->

                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
