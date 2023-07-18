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
   <div class="detail-gallery">
       {{-- <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div> --}}
       <div class="themesflat-headings style-2 clearfix">
           <h2 class="heading">OVERVIEW PROJECT VIDEO</h2>
           <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
       </div><!-- /.themesflat-heading -->
       {{-- <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div> --}}
       <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
        <iframe width="1600" height="545" type="video/mp4" src="https://www.youtube.com/embed/J-DLplx2iMw?autoplay=1" allow="autoplay">
           </iframe>
       </div><!-- /.themesflat-cousel-box -->
   </div>
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
                                            <h2 class="heading">The Valley Bangladesh</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">The greatest fine art of the future will be the making of comfortable living from small piece of land. The Valley Bangladesh is the place where you can find the essence of living close to nature. It is situated at countries first ever Dhaka – Mawa Expressway. To increase connectivity with southern part of the country Government is developing “Padma Bridge” the Dream of every people of Bangladesh. Flyover, Underpass and Railway connectivity is now available to this location.</p>
                                        </div>
                                        {{-- <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div> --}}
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
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
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">Location Direction</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">The Valley Bangladesh is set in the heart of the highway. A commutable distance of just 20km from Zero Point through Babu-bazar Bridge or 22km distance through Postogola Bridge or just 2km from Nimtoli bazar. You can reach The Valley Bangladesh from any route in 20-25minute drive in style.</p>

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
                    <!-- END QUOTE -->
                    <div class="row-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                    <h2 class="widget-title margin-bottom-30"><span>
                                        Plot Type
                                        </span></h2>
                                    <ul class="themesflat-filter style-1 clearfix">
                                        <li class="active"><a href="#" data-filter="*">All</a></li>
                                        <li><a href="#" data-filter=".green"> 3 Katha </a></li>
                                        <li><a href="#" data-filter=".architecture">4 Katha    </a></li>
                                        <li><a href="#" data-filter=".construction">5 Katha  </a></li>
                                        <li><a href="#" data-filter=".villa">6 Katha </a></li>
                                        <li><a href="#" data-filter=".building">7 Katha </a></li>
                                    </ul>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                        <div class="project-item green villa">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset('frontend/assets/img/valley/a1.png')}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">Green House</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        <div class="project-item architecture building construction">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset('frontend/assets/img/valley/a1.png')}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">CAVAL RIDGE MINE PROJECT </a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">Architecture</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        <div class="project-item villa architecture building construction">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset('frontend/assets/img/valley/a1.png')}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">GRAM HOTEL MAMZANA, MEWYORK</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">Green House</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        <div class="project-item green villa">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset('frontend/assets/img/valley/a1.png')}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">Green House</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        <div class="project-item architecture building construction">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset('frontend/assets/img/valley/a1.png')}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">CAVAL RIDGE MINE PROJECT </a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">Architecture</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        <div class="project-item villa green">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset('frontend/assets/img/valley/a1.png')}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">GRAM HOTEL MAMZANA, MEWYORK</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">Green House</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                    </div><!-- /.themesflat-project -->
                                    <div class="button-wrap has-icon icon-left size-14 pf21 text-center">
                                        <a href="#" class="themesflat-button bg-accent pd32"><span>LOAD MORE <span class="icon"><i class="ion-load-c"></i></span></span></a>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey" style="height: 350px;">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">Explore the Natural Beauty</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">There is a deep connection between humans & the nature. The Valley Bangladesh has all the best eco-friendly options combined with cutting edge landscape architecture that enables a sustainable living. The place where you can live near to nature. A good landscape has emotional and psychological value. Rain & Trees can be a process of creating memory, memory of childhood, memory that involves colors, light, shade and shadow. Nature is the place where you can explore. Explore each and every detail of nature here in The Valley Bangladesh. Because home is where the heart is & for many people, home extends beyond a house & includes the indescribable beauty of the great nature.</p>
                                        </div>

                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <div class="row equalize sm-equalize-auto faruk_char">
                        <div class="col-md-6 bg-light-grey">
                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                            <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                <div class="themesflat-headings style-1 clearfix">
                                    <h2 class="heading">Customer Support</h2>
                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                    <p class="sub-heading margin-top-30">The gate of The Valley Bangladesh is always open for our valuable customers. Contact us for any type of query. Our agents are always ready to answer your questions. The agent will share their knowledge, expertise, answering questions and explaining aspects of the property journey to help you. All our agents are experts in their field and passionate about their work. Take expert help to make your investment decision. We are also available in social media sites; Facebook & Instagram.</p>

                                </div>
                            </div><!-- /.themesflat-content-box -->
                            <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                        </div>
                        <!-- /.col-md-6 -->
                    </div><!-- /.row -->
                    <!-- END ABOUT -->
                    <!-- END PARTNER -->
                    <br><br>
               </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection
