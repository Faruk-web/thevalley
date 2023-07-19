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
                                            <h2 class="heading">{{ $plottype->frist_name }}</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">{{ $plottype->frist_short_descrip }}</p>
                                            <p class="sub-heading margin-top-30">{{ $plottype->frist_descrip }}</p>
                                        </div>
                                        {{-- <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div> --}}
                                        <!-- /.content-list -->
                                        <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.themesflat-content-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset($plottype->frist_image)}}');center center no-repeat; background-size: cover;">
                                </div>
                                <!-- /.col-md-6 -->
                            </div><!-- /.row -->
                          {{-- ------------ for mobile ---------------- --}}
                          <div class="row equalize sm-equalize-auto faruk_cha">
                            <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset($plottype->frist_image)}}');center center no-repeat; background-size: cover;">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 bg-light-grey" style="height: 700px;">
                                <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                    <div class="themesflat-headings style-1 clearfix">
                                        <h2 class="heading">{{ $plottype->frist_name }}</h2>
                                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                        <p class="sub-heading margin-top-30">{{ $plottype->frist_short_descrip }}</p>
                                        <p class="sub-heading margin-top-30">{{ $plottype->frist_descrip }}</p>

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
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset($plottype->sec_image)}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">{{ $plottype->sec_name }}</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">{{ $plottype->sec_short_descrip}}</p>
                                            <p class="sub-heading margin-top-30">{{ $plottype->sec_descrip}}</p>
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
                                        <li><a href="#" data-filter=".3Katha"> 3 Katha </a></li>
                                        <li><a href="#" data-filter=".4Katha">4 Katha    </a></li>
                                        <li><a href="#" data-filter=".5Katha">5 Katha  </a></li>
                                        <li><a href="#" data-filter=".6Katha">6 Katha </a></li>
                                        <li><a href="#" data-filter=".7Katha">7 Katha </a></li>
                                    </ul>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                        @php
                                        $plottypes = App\Models\BannerCatagory::where('plot_type','5Katha')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($plottypes as $item)
                                        <div class="project-item 5Katha">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->bennar_img)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->category_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">{{$item->plot_short_descrip}}</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        @endforeach
                                        @php
                                        $plottypes = App\Models\BannerCatagory::where('plot_type','3katha')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($plottypes as $item)
                                        <div class="project-item 3Katha">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->bennar_img)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->category_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">{{$item->plot_short_descrip}}</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        @endforeach
                                        @php
                                        $plottypes = App\Models\BannerCatagory::where('plot_type','4Katha')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($plottypes as $item)
                                        <div class="project-item villa 4Katha">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->bennar_img)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->category_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">{{$item->plot_short_descrip}}</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        @endforeach
                                        @php
                                        $plottypes = App\Models\BannerCatagory::where('plot_type','7Katha')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($plottypes as $item)
                                        <div class="project-item 7Katha">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->bennar_img)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->category_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">{{$item->plot_short_descrip}}</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        @endforeach
                                        @php
                                        $plottypes = App\Models\BannerCatagory::where('plot_type','6Katha')->orderBy('id','asc')->limit(10)->get();
                                        @endphp
                                        @foreach ($plottypes as $item)
                                        <div class="project-item 6Katha">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                    <img src="{{ asset($item->bennar_img)}}" alt="Image">
                                                    <div class="elm-link">
                                                        <a href="#" class="icon-1 icon-search"></a>
                                                        <a href="#" class="icon-1"></a>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">{{$item->category_name}}</a></h5>
                                                    <div class="elm-meta">
                                                        <span><a href="#">{{$item->plot_short_descrip}}</a></span>
                                                        <span><a href="#">Villa</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        @endforeach
                                    </div><!-- /.themesflat-project -->
                                    <div class="button-wrap has-icon icon-left size-14 pf21 text-center">
                                        <a href="#" class="themesflat-button bg-accent pd32"><span>LOAD MORE <span class="icon"><i class="ion-load-c"></i></span></span></a>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
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
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset($plottype->thi_image)}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey" style="height: 350px;">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">{{ $plottype->thi_name }}</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">{{ $plottype->thi_short_descrip }}</p>
                                            <p class="sub-heading margin-top-30">{{ $plottype->thi_descrip }}</p>
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
                                    <h2 class="heading">{{ $plottype->four_name }}</h2>
                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                    <p class="sub-heading margin-top-30">{{ $plottype->four_short_descrip }}</p>
                                    <p class="sub-heading margin-top-30">{{ $plottype->four_descrip }}</p>
                                </div>
                            </div><!-- /.themesflat-content-box -->
                            <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset($plottype->four_image)}}');center center no-repeat; background-size: cover;">
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
