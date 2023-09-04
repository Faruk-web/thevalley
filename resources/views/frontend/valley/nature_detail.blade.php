@extends('frontend.main_master')

@section('index')
<section id="page-header">
    <div class="page-header-image parallax-bg-3 bg-image" style="background-image: url({{asset('frontend') }}/assets/img/valley/about_13.png);">
        <div class="cover bg-transparent-5-dark"></div>

    </div>
    <!-- End page header image -->

    <!-- Begin page header inner -->
    <div class="page-header-inner tt-wrap">
        <div class="page-header-caption ph-caption-lg parallax-4 fade-out-scroll-3">
            <h1 class="page-header-title">Dummy Page</h1>
            <hr class="hr-short">

            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
            <div class="page-header-description" data-max-words="40">
                <p>Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus vitae turpis. Pellentesque men egestas odio mi, vitae egestas massa elementum.</p>
            </div>

        </div>
        <!-- End page header caption -->
    </div>
    <!-- End page header inner -->
</section>
<!-- End page header -->
<section id="page-section" class="page-classic">
    <div class="page-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-lg-8 no-padding margin-bottom-40" style="background-image: url({{asset('frontend') }}/assets/img/valley/Background.png);background-position: 50% 50%;">

                    <!-- Begin page content -->
                    <div class="page-content">

                        <h3>Your Content Here</h3>

                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed viverra rhoncus placerat. Quisque sed auctor turpis. Etiam elementum malesuada felis, sit amet aliquet nibh laoreet et.</p>

                        <p>Nunc pellentesque erat metus, euismod feugiat purus semper ut. Quisque rutrum, nibh quis blandit lacinia, nibh lorem condimentum neque, quis vestibulum mi felis non lectus. Ut at lectus euismod, pharetra libero quis, vestibulum est. Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque massa eget ante. In hac habitasse platea dictumst. Pellentesque non interdum dolor, et imperdiet metus. Phasellus et posuere justo. Donec quis enim eu ex tincidunt rhoncus sit amet et libero.</p>

                        <blockquote>Non mauris nullam. Wisi gravida quis quisque mattis dolor. Etiam sociis turpis nesciunt sed lacus sed hendrerit diam. Accumsan varius venenatis arcu maecenas nulla. Aliquet tempus lobortis. Tortor nibh erat vel gravida est accumsan ut ad. Orci malesuada morbi. Luctus pharetra lectus.</blockquote>

                        <p>Morbi malesuada feugiat nisl. Donec dapibus felis vitae vestibulum laoreet. Quisque scelerisque, nisl at ornare rutrum, orci purus convallis ipsum, et tincidunt ligula est vel turpis. Nunc at finibus elit, vel fringilla ligula. Duis accumsan nibh eget mauris elementum porttitor. Aliquam erat volutpat. Quisque rutrum vulputate metus non aliquet. Nullam vulputate scelerisque tortor nec porttitor.</p>

                        <p>Nunc scelerisque bibendum laoreet. Aenean eleifend quam a dui ullamcorper bibendum. Maecenas blandit at odio nec tempus. Integer nec elit ac nunc aliquam commodo. Pellentesque sed tincidunt neque, in tempor turpis.</p>

                    </div>
                    <!-- End page content -->

                </div> <!-- /.col -->

                <div class="col-md-5 col-lg-4 no-padding">

                    <!-- Begin page sidebar -->
                    <div class="page-sidebar sidebar-right">

                        <p><img src="{{asset($nature->image) }}" alt="Image"></p>

                        <p>{{ $nature->name}}</p>

                    </div>
                    <!-- End page sidebar -->

                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </div> <!-- /.page-section-inner -->
</section>
<!-- End page section -->
@endsection
