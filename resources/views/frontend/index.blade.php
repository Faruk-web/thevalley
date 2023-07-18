
@extends('frontend.main_master')

@section('index')
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
               <div class="page-content">
                   <!-- SLIDER -->
                    <div class="rev_slider_wrapper fullwidthbanner-container">
                        <div id="rev-slider2" class="rev_slider fullwidthabanner">
                            <ul>
                                <!-- Slide 1 -->
                                @foreach ( $sliders as $slider )
                                <li data-transition="random">
                                    <!-- Main Image -->
                                    <img src="{{ asset($slider->slider_img) }}" alt="" data-bgposition="center center" data-no-retina>
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
                                        {{ $slider->title }}
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
                                        data-responsive_offset="on"style="filter: drop-shadow(1px 1px 5px #000);">
                                        {{ $slider->short_description }}
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
                                        {{ $slider->description }}
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
                                @endforeach
                                <!-- /End Slide 1 -->
                            </ul>
                        </div>
                    </div>
                    <!-- END SLIDER -->
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div>
@endsection

