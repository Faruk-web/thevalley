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
<!-- End Featured Title -->
   {{-- ===================================vedio================================ --}}
   <!-- SLIDER -->
   <div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider2" class="rev_slider fullwidthabanner">
        <ul>
            <!-- Slide 1 -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="{{ asset('frontend/assets/img/valley/b1.png')}}" alt="" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 "
                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                    data-fontsize="['20','20','20','16']"
                    data-lineheight="['70','70','40','24']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="700"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    A GLOBAL LEADER IN INFRASTRUCTURE
                </div>
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                    data-fontsize="['52','52','42','32']"
                    data-lineheight="['65','65','45','35']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    WE WILL BE HAPPY
                </div>
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                    data-fontsize="['52','52','42','32']"
                    data-lineheight="['65','65','45','35']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    TO TAKE CARE OF YOUR WORK
                </div>
                <div class="tp-caption "
                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                </div>
            </li>
            <!-- /End Slide 1 -->
            <!-- Slide 2 -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="{{ asset('frontend/assets/img/valley/b1.png')}}" alt="" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                    data-fontsize="['20','20','20','16']"
                    data-lineheight="['70','70','40','24']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="700"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    A GLOBAL LEADER IN INFRASTRUCTURE
                </div>
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                    data-fontsize="['52','52','42','32']"
                    data-lineheight="['65','65','45','35']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    WE WILL BE HAPPY
                </div>
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                    data-fontsize="['52','52','42','32']"
                    data-lineheight="['65','65','45','35']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    TO TAKE CARE OF YOUR WORK
                </div>
                <div class="tp-caption text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                </div>
            </li>
            <!-- /End Slide 2 -->
            <!-- Slide 3 -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="{{ asset('frontend/assets/img/valley/b1.png')}}" alt="" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-600 text-right"
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                    data-fontsize="['20','20','20','16']"
                    data-lineheight="['70','70','40','24']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="700"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    A GLOBAL LEADER IN INFRASTRUCTURE
                </div>
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                    data-fontsize="['52','52','42','32']"
                    data-lineheight="['65','65','45','35']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    WE WILL BE HAPPY
                </div>
                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right"
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                    data-fontsize="['52','52','42','32']"
                    data-lineheight="['65','65','45','35']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on" style="filter: drop-shadow(1px 1px 5px #000);">
                    TO TAKE CARE OF YOUR WORK
                </div>
                <div class="tp-caption text-right"
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['153','153','153','153']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    <a href="#" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                </div>
            </li>
            <!-- /End Slide 3 -->
        </ul>
    </div>
</div>
<!-- END SLIDER -->
   {{-- <div class="detail-gallery" style="background-image: url('{{ asset('frontend/assets/img/valley/b1.png')}}');center center no-repeat; background-size: cover;height:528px;">
   </div> --}}
   <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="60" data-smobile="60"></div>
{{-- ========================================end vedio============================== --}}
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
                                            <h2 class="heading">THE INSPIRATION</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">Since a long time Amin Mohammad Group (AMG) had a vision to put its extensive experience as a real estate developer to good use and provide an exemplary residential community venture. With the legacy in building the best quality construction and professional expertise in real estate, Amin Mohammad Group through its concern Amin Mohammad Holdings Ltd (AMHL) has conceived and actualized ‘The Valley’ for the uber living.</p>
                                            <p class="sub-heading margin-top-30">Amin Mohammad Group (AMG) has delivered five thousands of residential apartments and a million square feet of commercial spaces in over 24 years extending beyond hotels, hospitals, corporate offices and premium residences stretched across Dhaka and Chittagong. Amin Mohammad Holdings Ltd. (AMHL) is now adding to their success list the first of its kind individual residential villa community “The Valley”. The project is located besides Dhaka-Mawa highway. Developing a large residential community adjacent to a 400 feet wide highway is the first ever attempt in Bangladesh.</p>
                                        </div>
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                                </div>
                                <!-- /.col-md-6 -->
                            </div><!-- /.row -->
                          {{-- ------------ for mobile ---------------- --}}
                          <div class="row equalize sm-equalize-auto faruk_cha">
                            <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 bg-light-grey" style="height: 700px;">
                                <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                    <div class="themesflat-headings style-1 clearfix">
                                        <h2 class="heading">The Valley Bangladesh</h2>
                                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                        <p class="sub-heading margin-top-30">The greatest fine art of the future will be the making of comfortable living from small piece of land. The Valley Bangladesh is the place where you can find the essence of living close to nature. It is situated at countries first ever Dhaka – Mawa Expressway. To increase connectivity with southern part of the country Government is developing “Padma Bridge” the Dream of every people of Bangladesh. Flyover, Underpass and Railway connectivity is now available to this location.</p>

                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>

                                    <!-- /.content-list -->
                                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                </div><!-- /.themesflat-content-box -->
                                <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                            </div><!-- /.col-md-6 -->
                        </div>
                          {{-- ------------ end mobile ---------------- --}}

                        </div><!-- /.container-fluid -->
                    </div>
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
                    <!-- END PROJECT -->
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">The Vision</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">In The Valley, you are woken up by the singing of the birds rather than by the noise from the traffic. Villas in The Valley are surrounded by nature which has a soothing effect on both the mind and the body.</p>
                                            <p class="sub-heading margin-top-30">In The Valley, you do not have to leave your home to feel closer to nature because here, the nature comes to you and it is quite common to see birds and butterflies.</p>
                                            <p class="sub-heading margin-top-30">City dwellers chronically lack open spaces and children play computer games with less outdoor play. Here in The Valley you could play real or play with a ball, learn to ride a bicycle or simply have some fun outdoors.</p>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        {{-- <div class="elm-button">
                                            <a href="#"  class="themesflat-button bg-white">GET IN TOUCH</a>
                                        </div> --}}
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
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
                    <!-- END PROJECT -->
                    <!-- END QUOTE -->
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto faruk_char">
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading"> The Design</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-0">The Valley is a premium commuter zone of Dhaka south. Inspired by the necessity of living together both with the nature and the people who matters the most in our life. </p>
                                            <p class="sub-heading margin-top-0">The idea is simple and unique. Living a community life with all urban facilities. Living in a home that encircled by court/uthan along with natural garden. That supports natural airflow and sunlight.</p>
                                            <p class="sub-heading margin-top-0"> The plots are divided by garden along with entry and out pathways to avenue road. That enables every home exclusive access to the backyard garden. Where you can gather for a social hangout and can watch your child playing on the grounds.</p>
                                            {{-- <p class="sub-heading margin-top-0"><p class="sub-heading margin-top-0">He proved that, success is a result of hard work. He believed hard work should be rewarded. Thus, he was involved in developing a lifestyle that people deserve and that would serve as a social motivator to others to work hard and succeed. He added creativity to that and the result is Amin Mohammad Group.</p></p> --}}
                                        </div>
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                                </div>
                                <!-- /.col-md-6 -->
                            </div><!-- /.row -->
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
                    <!-- END PROJECT -->
                            {{-- ===================================vedio================================ --}}
                            <div class="detail-gallery">
                                {{-- <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div> --}}
                                <div class="themesflat-headings style-2 clearfix">
                                    <h2 class="heading">OVERVIEW PROJECT VIDEO</h2>
                                    <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
                                </div><!-- /.themesflat-heading -->
                                {{-- <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div> --}}
                                <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                <iframe width="1500" height="800" type="video/mp4" src="https://www.youtube.com/embed/KQXQS7hBnjM?autoplay=1" allow="autoplay">
                                    </iframe>
                                </div><!-- /.themesflat-cousel-box -->
                            </div>
                            {{-- ========================================end vedio============================== --}}
                        </div><!-- /.container-fluid -->
                    </div>

                    <!-- END ABOUT -->
                    <!-- END PARTNER -->
                    <br><br>
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
