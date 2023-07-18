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
<div class="row-about">
    <div class="container-fluid">
        <div class="row equalize sm-equalize-auto faruk_char">
            <div class="col-md-6 bg-light-grey" style="height: 910px;">
                <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35" style="height:64px"></div>
                <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%" style="margin:0 4% 0 4.5%">
                    <div class="themesflat-headings style-1 clearfix">
                        <h2 class="heading">The Nature </h2>
                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                        <p class="sub-heading margin-top-0">Late M.M. Enamul Haque (1958-2023) <br><span style="font-size: 13px;">(Founder Chairman Amin Mohammad Group) </span> </p>
                        <p class="sub-heading margin-top-0">He built this organization with a vision for the city dwellers and the country itself. He led the vision and pursued the dream. He foresight the future perspectives of how cities will grow and develop over time. </p>
                        <p class="sub-heading margin-top-0">He built this organization with a vision for the city dwellers and the country itself. He led the vision and pursued the dream. He foresight the future perspectives of how cities will grow and develop over time. </p>
                    </div>
                </div><!-- /.themesflat-content-box -->
                <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60" style="height:76px"></div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6 half-background style-1" >
                 <!-- SERVICES -->
                 <div class="row-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                <div class="themesflat-headings style-1 text-center clearfix">
                                    <h2 class="heading">Our Nature</h2>
                                    <div class="sep has-icon width-125 clearfix">
                                        <div class="sep-icon">
                                            <span class="sep-icon-before sep-center sep-solid"></span>
                                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                            <span class="sep-icon-after sep-center sep-solid"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="35" data-smobile="35"></div>
                                <div class="themesflat-carousel-box has-arrows arrow-center offset-v-111 offset-h-21 arrow-circle arrow-style-2 data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                    <div class="owl-carousel owl-theme">
                                        <div class="themesflat-image-box style-2 clearfix">
                                            <div class="image-box-item">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item">
                                                        <img src="{{ asset('frontend/assets/img/10.jpeg') }}" alt="Image">
                                                        <div class="overlay-effect bg-color-accent"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                        <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                        <div class="elm-readmore">
                                                            <a href="#">DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-image-box -->

                                        <div class="themesflat-image-box style-2 clearfix">
                                            <div class="image-box-item">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item">
                                                        <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                        <div class="overlay-effect bg-color-accent"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">CONSTRUCTION </a></h5>
                                                        <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                        <div class="elm-readmore">
                                                            <a href="#">DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-image-box -->

                                        <div class="themesflat-image-box style-2 clearfix">
                                            <div class="image-box-item">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item">
                                                        <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                        <div class="overlay-effect bg-color-accent"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">METAL BUILDING</a></h5>
                                                        <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                        <div class="elm-readmore">
                                                            <a href="#">DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-image-box -->

                                        <div class="themesflat-image-box style-2 clearfix">
                                            <div class="image-box-item">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item">
                                                        <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                        <div class="overlay-effect bg-color-accent"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                        <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                        <div class="elm-readmore">
                                                            <a href="#">DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-image-box -->

                                        <div class="themesflat-image-box style-2 clearfix">
                                            <div class="image-box-item">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item">
                                                        <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                        <div class="overlay-effect bg-color-accent"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">CONSTRUCTION </a></h5>
                                                        <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                        <div class="elm-readmore">
                                                            <a href="#">DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-image-box -->

                                        <div class="themesflat-image-box style-2 clearfix">
                                            <div class="image-box-item">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item">
                                                        <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                        <div class="overlay-effect bg-color-accent"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">METAL BUILDING </a></h5>
                                                        <p>We develop and understand project expectations and then manage those needs with a design team...</p>
                                                        <div class="elm-readmore">
                                                            <a href="#">DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.themesflat-image-box -->
                                    </div>
                                </div><!-- /.themesflat-carousel-box -->
                                <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>
                <!-- END SERVICES -->
            </div>
            <!-- /.col-md-6 -->
        </div><!-- /.row -->

            <!-- PROJECT -->
            <div class="row-project parallax parallax-1 "style="background-image: url('{{ asset('frontend/assets/img/13.png')}}');center center no-repeat; background-size: cover;height:428px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                            <div class="themesflat-headings style-1 text-center clearfix">
                                <h2 class="heading text-white">FEATURED PROJECT</h2>
                                <div class="sep has-icon width-125 border-color-light clearfix">
                                    <div class="sep-icon">
                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                            <div class="elm-button text-center">
                                <a href="#" class="themesflat-button bg-accent">ALL PROJECTS </a>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <div class="bg-parallax-overlay overlay-black"></div>
            </div>
            <!-- SERVICES -->
        <div class="row-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                            <div class="owl-carousel owl-theme">
                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                <p class="letter-spacing-01">We develop and understand project expectations and then manage those needs with a design [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                <p class="letter-spacing-01">We work closely with architects to understand the project, and ultimately develop a targeted [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                <p class="letter-spacing-01">We develop and understand project expectations and then manage those needs with a design [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                <p class="letter-spacing-01">We work closely with architects to understand the project, and ultimately develop a targeted [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                            </div>
                        </div><!-- /.themesflat-carousel-box -->
                        <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                            <div class="owl-carousel owl-theme">
                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal building [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">PRECONSTRUCTION SERVICES</a></h5>
                                                <p class="letter-spacing-01">Autora Construction Services provides the right resources and expertise to evaluate concepts [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONCRETE STRUCTURES</a></h5>
                                                <p class="letter-spacing-01">We employs a talented team of industry leading professionals capable of self-performing [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal building [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">PRECONSTRUCTION SERVICES</a></h5>
                                                <p class="letter-spacing-01">Autora Construction Services provides the right resources and expertise to evaluate concepts [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONCRETE STRUCTURES</a></h5>
                                                <p class="letter-spacing-01">We employs a talented team of industry leading professionals capable of self-performing [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                            </div>
                        </div><!-- /.themesflat-carousel-box -->
                        <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- END SERVICES -->
        <!-- PROJECT -->
        <div class="row-project parallax parallax-1 "style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;height:428px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                        <div class="themesflat-headings style-1 text-center clearfix">
                            <h2 class="heading text-white">FEATURED PROJECT</h2>
                            <div class="sep has-icon width-125 border-color-light clearfix">
                                <div class="sep-icon">
                                    <span class="sep-icon-before sep-center sep-solid"></span>
                                    <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                    <span class="sep-icon-after sep-center sep-solid"></span>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                        <div class="elm-button text-center">
                            <a href="#" class="themesflat-button bg-accent">ALL PROJECTS </a>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <div class="bg-parallax-overlay overlay-black"></div>
        </div>
         <!-- TESTIMONIALS -->
         <div class="row-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                            <div class="owl-carousel owl-theme">
                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                <p class="letter-spacing-01">We develop and understand project expectations and then manage those needs with a design [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                <p class="letter-spacing-01">We work closely with architects to understand the project, and ultimately develop a targeted [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                <p class="letter-spacing-01">We develop and understand project expectations and then manage those needs with a design [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                <p class="letter-spacing-01">We work closely with architects to understand the project, and ultimately develop a targeted [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/10.jpeg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                            </div>
                        </div><!-- /.themesflat-carousel-box -->
                        <div class="themesflat-spacer clearfix" data-desktop="15" data-mobile="15" data-smobile="15"></div>
                        <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                            <div class="owl-carousel owl-theme">
                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal building [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">PRECONSTRUCTION SERVICES</a></h5>
                                                <p class="letter-spacing-01">Autora Construction Services provides the right resources and expertise to evaluate concepts [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONCRETE STRUCTURES</a></h5>
                                                <p class="letter-spacing-01">We employs a talented team of industry leading professionals capable of self-performing [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                <p class="letter-spacing-01">In the past decade alone, we have completed more than 5 million square feet of metal building [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">PRECONSTRUCTION SERVICES</a></h5>
                                                <p class="letter-spacing-01">Autora Construction Services provides the right resources and expertise to evaluate concepts [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->

                                <div class="themesflat-image-box style-2 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item">
                                                <img src="{{ asset('frontend/assets/img/11.jpg')}}" alt="Image">
                                                <div class="overlay-effect bg-color-accent"></div>
                                            </div>
                                            <div class="text-wrap">
                                                <h5 class="heading"><a href="#">CONCRETE STRUCTURES</a></h5>
                                                <p class="letter-spacing-01">We employs a talented team of industry leading professionals capable of self-performing [...]</p>
                                                <div class="elm-readmore">
                                                    <a href="page-services-detail.html">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                            </div>
                        </div><!-- /.themesflat-carousel-box -->
                        <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="60" data-smobile="60"></div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- END TESTIMONIALS -->
    </div><!-- /.container-fluid -->
</div>

@endsection
