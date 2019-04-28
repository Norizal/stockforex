@extends('layouts.app') 
@section('content')

<div class="container">
    <!-- Start Text Header -->
    <div class="header-inner inner-carousel">
        <div class="header-content">
            <div class="row">
                <!-- Start Left Text Header -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-lg-push-6 col-md-push-6">
                    <div class="carousel-head-content">
                        @foreach($mvtds as $mvtd)
                        <h1 class="home-title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">{{ $mvtd->mv_td_title }}</h1>
                        <h5 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">{{ $mvtd->mv_td_head_title }}</h5>
                        <h4 class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">{{ $mvtd->mv_td_description }}</h4>
                        @endforeach
                        @foreach($mvlinks as $mvlink) 
                        <div class="bttn-head wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                            <a href="{{ $mvlink->mv_link_url_ios }}" data-tooltip="Apple Store"><i class="fa fa-apple"></i></a>
                            <a href="{{ $mvlink->mv_link_url_android }}" target="_blank" data-tooltip="Google Play"><i class="fa fa-android"></i></a>
                            <a href="#video-app" data-tooltip="Overpips Video"><i class="fa fa-play"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Left Text Header -->
                <!-- Start Slider Phone -->
                <div class="col-md-6 col-sm-12 col-lg-pull-6 col-md-pull-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="phone-carousel">
                        <div class="phone">
                            <img src="{{ asset('img/header-slider.png') }}" alt="Phone" class="img-responsive">
                            <div class="header-slider owl-carousel owl-theme">
                                @foreach($mvmms as $index => $mvmm)
                                <div class="item"><img src="/storage/mv/mobile/{{ $mvmm->mv_mm_image_mobile }}" alt="{{ $mvmm->mv_mm_image_mobile }}"
                                        class="img-responsive"></div>
                                @endforeach

                            </div>
                        </div>
                        <!-- .phone -->
                    </div>
                    <!-- .phone-carousel -->
                </div>
                <!-- End Slider Phone -->
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- End Text Header -->
</div>
<!-- End Container -->
</div>
<!-- end overlay -->
</header>
<!-- End Header -->

<!--
    End Header
    ==================================== -->

<!--
Start About Section
==================================== -->
<section id="about" class="about waves pdd100">
@foreach($abouts as $about)
    <div class="container">
        <!-- Start Section Title -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Detail of Our Company</h4>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">About Us</h2>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <!-- Start About Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="textWidget-sidebar sidebar-flr48 box-sidebar02 wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title02">
                        <h4>Mission</h4>
                    </div>
                    <div class="textWidget-sidebar-content">
                        {{ $about->about_us_mission }}
                    </div>
                </div>
                <div class="textWidget-sidebar sidebar-flr48 box-sidebar02 wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title02">
                        <h4>Vision</h4>
                    </div>
                    <div class="textWidget-sidebar-content">
                    {{ $about->about_us_vision }}
                    </div>
                </div>
                <div class="textWidget-sidebar sidebar-flr48 box-sidebar02 wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title02">
                        <h4>Who We Are</h4>
                    </div>
                    {!! $about->about_us_who !!}
                </div>
            </div>

            <!-- End mobile-features -->
        </div>
        <!-- End row -->
        <!-- End About Content -->
    </div>
    <!-- End Container -->
    @endforeach
</section>

<section id="work" class="about waves pdd100">
    <div class="container">
        <!-- Start Section Title -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Easy to use</h4>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">How it Works</h2>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <!-- Start About Content -->
        <div class="row">
            <div class="mobile-features">
                <!-- Start Mobile Slider -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s">
                    <div class="features-slider owl-carousel owl-theme">
                        <div class="item">
                                @foreach($hiwanalysiss as $hiwanalysis)
                            <div class="single-feat-img">
                                <img src="/storage/hiw/{{$hiwanalysis->hiw_analysis_image_mobile}}" alt="{{ $hiwanalysis->hiw_analysis_title }}" class="img-responsive">
                            </div>
                            @endforeach
                        </div>
                        <div class="item">
                        @foreach($hiwnews as $hiwnew)
                            <div class="single-feat-img">
                                <img src="/storage/hiw/{{$hiwnew->hiw_new_image_mobile}}" alt="{{ $hiwnew->hiw_new_title }}" class="img-responsive">
                            </div>
                         @endforeach
                        </div>
                        <div class="item">
                        @foreach($hiwnotis as $hiwnoti)
                            <div class="single-feat-img">
                                <img src="/storage/hiw/{{$hiwnoti->hiw_noti_image_mobile}}" alt="{{ $hiwnoti->hiw_noti_title }}" class="img-responsive">
                            </div>
                         @endforeach
                        </div>
                        <div class="item">
                        @foreach($hiwvideos as $hiwvideo)
                            <div class="single-feat-img">
                                <img src="/storage/hiw/{{ $hiwvideo->hiw_video_image_mobile }}" alt="{{ $hiwvideo->hiw_video_title }}" class="img-responsive">
                            </div>
                        @endforeach
                        </div>
                        <div class="item">
                        @foreach($hiwwebs as $hiwweb)
                            <div class="single-feat-img">
                                <img src="/storage/hiw/{{ $hiwweb->hiw_web_image_mobile }}" alt="{{ $hiwweb->hiw_web_title }}" class="img-responsive">
                            </div>
                         @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Mobile Slider -->
                <!-- Start Mobile Slider Content -->
                <div class="col-md-8 wow fadeInRight" data-wow-duration="2s">
                    <!-- Start Slider Links -->
                    <ul class="nav nav-pills mobile-nav-pills nav-stacked">
                        <li class="active-icon" data-owl-item="0"><a href="#tab_a" data-toggle="pill"><i
                                    class="fa fa-eye"></i></a></li>
                        <li data-owl-item="1"><a href="#tab_b" data-toggle="pill"><i class="fa fa-bell-o"></i></a></li>
                        <li data-owl-item="2"><a href="#tab_c" data-toggle="pill"><i class="fa fa-filter"></i></a></li>
                        <li data-owl-item="3"><a href="#tab_d" data-toggle="pill"><i class="fa fa-cog"></i></a></li>
                        <li data-owl-item="4"><a href="#tab_e" data-toggle="pill"><i class="fa fa-list-ol"></i></a></li>
                    </ul>
                    <!-- End Slider Links -->
                    <div class="tab-content">
                        <!-- Start Signal -->
                        @foreach($hiwanalysiss as $hiwanalysis)
                        <div class="tab-pane mobile-tab-pane active" id="tab_a" data-owl-item="0">
                            <h4>{{ $hiwanalysis->hiw_analysis_title }} </h4>
                                {!! $hiwanalysis->hiw_analysis_description !!}
                        </div>
                        @endforeach
                        <!-- End Signal -->
                        <!-- Start Built in News -->
                        @foreach($hiwnews as $hiwnew)
                        <div class="tab-pane mobile-tab-pane" id="tab_b" data-owl-item="1">
                            <h4>{{ $hiwnew->hiw_new_title }} </h4>
                                {!! $hiwnew->hiw_new_description !!}
                        </div>
                        @endforeach
                        <!-- End Built in News -->
                        <!-- Market Analysis -->
                        @foreach($hiwnotis as $hiwnoti)
                        <div class="tab-pane mobile-tab-pane" id="tab_c" data-owl-item="2">
                            <h4>Market Analysis</h4>
                            <h4>{{ $hiwnoti->hiw_noti_title }} </h4>
                                {!! $hiwnoti->hiw_noti_description !!}
                        </div>
                        @endforeach
                        <!-- End Market Analysis -->
                        <!-- Start Video Tutorial -->
                        @foreach($hiwvideos as $hiwvideo)
                        <div class="tab-pane mobile-tab-pane" id="tab_d" data-owl-item="3">
                        <h4>{{ $hiwvideo->hiw_video_title }} </h4>
                                {!! $hiwvideo->hiw_video_description !!}
                        </div>
                        @endforeach
                        <!-- End Video Tutorial -->
                        <!-- Start Webinar -->
                        @foreach($hiwwebs as $hiwweb)
                        <div class="tab-pane mobile-tab-pane" id="tab_e" data-owl-item="4">
                        <h4>{{ $hiwweb->hiw_web_title }} </h4>
                                {!! $hiwweb->hiw_web_description !!}
                        </div>
                        @endforeach
                        <!-- End Webinar -->
                    </div>
                    <!-- End tab content -->
                </div>
                <!-- End Mobile Slider Content -->
            </div>
            <!-- End mobile-features -->
        </div>
        <!-- End row -->
        <!-- End About Content -->
    </div>
    <!-- End Container -->
</section>
<!-- End About -->

<!--
End About Section
==================================== -->

<!--
Start Screenshots Section
==================================== -->

<section id="screenshots" class="screenshots">
    <div class="pdd100">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Mobile-Friendly</h4>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Overpips Interface</h2>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <!-- Start Screenshots Content -->
            <div class="main_drag">
                <div class="swiper-screenshots wow fadeInUp" data-wow-duration="2s">
                    <!-- Start Swiper Container -->
                    <div class="swiper-wrapper">
                        <!-- Start One Screen -->
                        @foreach($screenshots as $screenshot) 
                        <div class="swiper-slide">
                            <img alt="Sign Up" src="/storage/screenshot/{{$screenshot->screenshot_image_mobile}}" class="img-responsive">
                        </div>
                        @endforeach
                        <!-- End One Screen -->
                    </div>
                    <!-- Start Swiper Slider Controls -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- End Swiper Slider Controls -->
                </div>
            </div>
            <!-- End Screenshots Content -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End Overlay -->
</section>
<!-- End Screenshots -->

<!--
End Screenshots Section
==================================== -->

<!--
Start Download Section
==================================== -->

<section id="download" class="download">
        @foreach($mvlinks as $mvlink) 
    <div class="overlay pdd100">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Built For Everyone</h4>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Download</h2>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <!-- Start Store Button -->
            <div class="store-butt">
                <div class="row">
                    <!-- Start Single Item -->
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                        <div class="single-downloadLink">
                            <a href="{{ $mvlink->mv_link_url_ios }}" class="bttn-appnova-gradient">
                                <i class="fa fa-apple"></i>
                                <span>Coming Soon on</span>
                                <span>Apple Store</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Start Single Item -->
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1s">
                        <div class="single-downloadLink">
                            <a href="{{ $mvlink->mv_link_url_android }}" target="_blank" class="bttn-appnova-gradient">
                                <i class="fa fa-android"></i>
                                <span>Available on</span>
                                <span>Google Play</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
                <!-- end row -->
            </div>
            <!-- end store-butt -->
            <!-- End Store Button -->
        </div>
        <!-- end container -->
    </div>
    <!-- end overlay -->
</section>
<!-- end download -->

<!--
Start Download Section
==================================== -->

<!--
Start Video Section
==================================== -->

<section id="video-app" class="video-app">
    <div class="overlay pdd100">
        <div class="container">
            <!-- Start Play Button -->
            <a class="playBut wow fadeInDown" data-wow-duration="1s" href="{{ $mvlink->mv_link_url_youtube }}" data-lity="">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="150px"
                    height="150px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 ">
                    </polygon>
                </svg>
            </a>
            <!-- End Play Button -->
        </div>
    </div>
    <!-- end overlay -->
    @endforeach
</section>
<!-- end video-app -->

<!--
End Video Section
==================================== -->

<!--
Start Pricing Table Section
==================================== -->

<section id="pricing-table" class="our-team pdd100">
    <div class="container">
        <!-- Start Section Title -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Select a Plan</h4>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Pricing Table</h2>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <!-- Start Pricing Content -->
        <div class="pricing-content">
            <div class="row">
                <!-- Start Single Item -->
                @foreach($pricing1s as $pricing1) 
                <div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                    <div class="single-plan">
                        <div class="body-plan">
                            <div class="price-plan">
                                <h3><sup>RM</sup>{{ $pricing1->pricing1_price }}</h3>
                                <span>{{ $pricing1->pricing1_duration }}</span>
                                <p>&nbsp;</p>
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="feat-plan">
                                <ul>
                                    {!! $pricing1->pricing1_description !!}
                                </ul>
                            </div>
                        </div>
                        <div class="footer-plan"></div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->
                <!-- Start Single Item -->
                @foreach($pricing2s as $pricing2) 
                <div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1s">
                    <div class="single-plan">
                        <div class="body-plan">
                            <div class="price-plan">
                                <h3><sup>RM</sup>{{ $pricing2->pricing2_price }}</h3>
                                <span>{{ $pricing2->pricing2_duration }}</span>
                                <p>{{ $pricing2->pricing2_promotion }}</p>
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="feat-plan">
                                <ul>
                                        {!! $pricing2->pricing2_description !!}
                                </ul>
                            </div>
                        </div>
                        <div class="footer-plan"></div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->
                <!-- Start Single Item -->
                @foreach($pricing3s as $pricing3) 
                <div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1s">
                    <div class="single-plan mgbtt0">
                        <div class="body-plan">
                            <div class="price-plan">
                                <h3><sup>RM</sup>{{ $pricing3->pricing3_price }}</h3>
                                <span>{{ $pricing3->pricing3_duration }}</span>
                                <p>{{ $pricing3->pricing3_promotion }}</p>
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="feat-plan">
                                <ul>
                                        {!! $pricing3->pricing3_description !!}
                                </ul>
                            </div>
                        </div>
                        <div class="footer-plan"></div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->
            </div>
            <!-- end row -->
        </div>
        <!-- End Pricing Content -->
    </div>
    <!-- end container -->
</section>
<!-- end pricing-table -->

<!--
End Pricing Table Section
==================================== -->

<!--
Start Faqs Section
==================================== -->

<section id="faqs" class="faqs pdd100">
    <div class="container">
        <!-- Start Section Title -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Queries</h4>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Faqs</h2>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <div class="row">
            <!-- Start Faqs Text -->
            <div class="col-md-12 wow fadeInRight" data-wow-duration="1s">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- Start Single Item -->

                    @foreach($faqs as $faq) 
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{ $faq->faqs_id}}" aria-expanded="true"
                                    aria-controls="collapseOne">{{ $faq->faqs_title }}</a></h4>
                        </div>
                        <div id="{{ $faq->faqs_id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                {!! $faq->faqs_description !!}
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
                <!-- end panel-group -->
            </div>
            <!-- end col-md-6 -->
            <!-- End Faqs Text -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end faqs -->

<!--
End Faqs Section
==================================== -->
@endsection