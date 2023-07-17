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
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto faruk_char">
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 4% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading"> Plot Size</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-0">In The Valley Bangladesh 3katha,4katha and 5katha plots are available.</p>
                                            <p class="sub-heading margin-top-0"><b>3katha</b> plot is a top choice for small families. Ideal for making a villa with garden, water body with sitting arrangement in ground floor & one car parking.</p>
                                            <p class="sub-heading margin-top-0"> <b>4katha</b> plot is a top choice for vacation home. Ideal for making a villa garden, water body with sitting arrangement in ground floor & two car parking.</p>
                                            <p class="sub-heading margin-top-0"> <b>5katha </b>plot is a top choice for families. Ideal for making a Villa with garden, water body with sitting arrangement in the ground floor & car parking space.
                                            </p>
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
                            {{-- -----------------for mobile----------- --}}
                            <div class="row equalize sm-equalize-auto faruk_cha">
                                <div class="col-md-6 half-background style-1" style="background-image: url('{{ asset('frontend/assets/img/valley/a1.png')}}');center center no-repeat; background-size: cover;">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey" style="height: 700px;">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 5% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading"> Explore the Natural Beauty</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30">There is a deep connection between humans & the nature. The Valley Bangladesh has all the best eco-friendly options combined with cutting edge landscape architecture that enables a sustainable living. The place where you can live near to nature. A good landscape has emotional and psychological value. Rain & Trees can be a process of creating memory, memory of childhood, memory that involves colors, light, shade and shadow. Nature is the place where you can explore. Explore each and every detail of nature here in The Valley Bangladesh. Because home is where the heart is & for many people, home extends beyond a house & includes the indescribable beauty of the great nature.</p>

                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div>
                            {{-- ---------------------end mobile--------------- --}}
                        </div><!-- /.container-fluid -->
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
