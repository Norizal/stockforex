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
                            <h1 class="home-title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Overpips</h1>
                            <h5 class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">All In One Application For Forex Traders</h5>
                            <h4 class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">A must have live forex signals app for every trader with instant
                            notifications on signal updates &#38; market movements.</h4>
                            <div class="bttn-head wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                                <a href="#" data-tooltip="Apple Store"><i class="fa fa-apple"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.overpips.app" target="_blank" data-tooltip="Google Play"><i class="fa fa-android"></i></a>
                                <a href="#video-app" data-tooltip="Overpips Video"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Text Header -->
                    <!-- Start Slider Phone -->
                    <div class="col-md-6 col-sm-12 col-lg-pull-6 col-md-pull-6 wow fadeInLeft" data-wow-duration="1s">
                        <div class="phone-carousel">
                            <div class="phone">
                                <img src="{{ asset('img/header-slider.png') }}" alt="Phone" class="img-responsive">
                                <div class="header-slider owl-carousel owl-theme">
                                    <div class="item"><img src="{{ asset('img/scshot/signals.jpg') }}" alt="Signals" class="img-responsive"></div>
                                    <div class="item"><img src="{{ asset('img/scshot/notification.png') }}" alt="Notification" class="img-responsive"></div>
                                    <div class="item"><img src="{{ asset('img/scshot/analysis.jpg') }}" alt="Analysis" class="img-responsive"></div>
                                    <div class="item"><img src="{{ asset('img/scshot/video-tutorial.jpg') }}" alt="Video Tutorial" class="img-responsive"></div>
                                    <div class="item"><img src="{{ asset('img/scshot/webinar.jpg') }}" alt="Webinar" class="img-responsive"></div>
                                </div>
                            </div>
                            <!-- .phone -->
                        </div>
                        <!-- .phone-carousel -->
                    </div>
                    <!-- End Slider Phone -->
                </div><!-- row -->
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
                        <div class="single-feat-img">
                            <img src="{{ asset('img/scshot/notification.png') }}" alt="Notification" class="img-responsive">
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feat-img">
                            <img src="{{ asset('img/scshot/news.jpg') }}" alt="News" class="img-responsive">
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feat-img">
                            <img src="{{ asset('img/scshot/analysis.jpg') }}" alt="Analysis" class="img-responsive">
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feat-img">
                            <img src="{{ asset('img/scshot/video-tutorial.jpg') }}" alt="Video Tutorial" class="img-responsive">
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feat-img">
                            <img src="{{ asset('img/scshot/webinar.jpg') }}" alt="Webinar" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile Slider -->
            <!-- Start Mobile Slider Content -->
            <div class="col-md-8 wow fadeInRight" data-wow-duration="2s">
                <!-- Start Slider Links -->
                <ul class="nav nav-pills mobile-nav-pills nav-stacked">
                    <li class="active-icon" data-owl-item="0"><a href="#tab_a" data-toggle="pill"><i class="fa fa-eye"></i></a></li>
                    <li data-owl-item="1"><a href="#tab_b" data-toggle="pill"><i class="fa fa-bell-o"></i></a></li>
                    <li data-owl-item="2"><a href="#tab_c" data-toggle="pill"><i class="fa fa-filter"></i></a></li>
                    <li data-owl-item="3"><a href="#tab_d" data-toggle="pill"><i class="fa fa-cog"></i></a></li>
                    <li data-owl-item="4"><a href="#tab_e" data-toggle="pill"><i class="fa fa-list-ol"></i></a></li>
                </ul>
                <!-- End Slider Links -->
                <div class="tab-content">
                    <!-- Start Signal -->
                    <div class="tab-pane mobile-tab-pane active" id="tab_a" data-owl-item="0">
                        <h4>Signal with Instant Notification</h4>
                        <p>Get instantly notified about the recent signal update using the push notification alerts without a need to open the app and never miss out any signal.</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> There will be a <strong>minimum</strong> of <strong>five (5) signals every week</strong> to ensure you are frequently updated with your account.</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> Signals are updated from trusted, experienced &#38; qualified traders from around the world, especially from FxUnion.</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> Your mobile device will notify you immediately if there are any signals or important messages to be read.</p>
                    </div>
                    <!-- End Signal -->
                    <!-- Start Built in News -->
                    <div class="tab-pane mobile-tab-pane" id="tab_b" data-owl-item="1">
                        <h4>Built in News</h4>
                        <p><i class="fa fa-check"></i> Any form of news will be updated constantly and immediately to inform our users and traders about the current issues trending.</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> By having the latest updates, our traders can take safety precautions if there were to be any dilemmas or situations.</p>
                    </div>
                    <!-- End Built in News -->
                    <!-- Market Analysis -->
                    <div class="tab-pane mobile-tab-pane" id="tab_c" data-owl-item="2">
                        <h4>Market Analysis</h4>
                        <p><i class="fa fa-check"></i> Market Analysis will be uploaded once (1) a week. This analysis is to ensure that you will be aware and ready for the trends that are expected. </p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> These analyses are analysed and evaluated by our experienced traders that put in all their effort to provide you with the best information available.</p>
                    </div>
                    <!-- End Market Analysis -->
                    <!-- Start Video Tutorial -->
                    <div class="tab-pane mobile-tab-pane" id="tab_d" data-owl-item="3">
                        <h4>Video Tutorial</h4>
                        <p><i class="fa fa-check"></i> To those who wish to have basic or extra knowledge regarding our app or forex in general, contact us and we will give you some insights.</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> Furthermore, some key techniques will be given to you to improve your forex skills.</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> The techniques will be provided by FxUnion, which assures their reliability.</p>
                    </div>
                    <!-- End Video Tutorial -->
                    <!-- Start Webinar -->
                    <div class="tab-pane mobile-tab-pane" id="tab_e" data-owl-item="4">
                        <h4>Webinar</h4>
                        <p><i class="fa fa-check"></i> Having trouble adapting? Have any questions? Log on to our Webinar as we will be able to provide you with the assistance you need in order for you to use our services to the fullest!</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> The Webinar, provided by OVERPIPS will be held <strong>once (1) a week</strong>, so be sure to tune in &#38; catch us live!</p>
                        <p>&nbsp;</p>
                        <p><i class="fa fa-check"></i> Plus, there will be a Q&#38;A session conducted by <strong>professional traders</strong> during the Webinar to help solve your problems or any uncertainty regarding the app and how it works.</p>
                    </div>
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
                            <div class="swiper-slide">
                                <img alt="Sign Up" src="img/scshot/sign-up1.jpg" class="img-responsive">
                            </div>
                            <!-- End One Screen -->
                            <!-- Start One Screen -->
                            <div class="swiper-slide">
                                <img alt="Signals" src="img/scshot/signals.jpg" class="img-responsive">
                            </div>
                            <!-- End One Screen -->
                            <!-- Start One Screen -->
                            <div class="swiper-slide">
                                <img alt="News" src="img/scshot/news.jpg" class="img-responsive">
                            </div>
                            <!-- End One Screen -->
                            <!-- Start One Screen -->
                            <div class="swiper-slide">
                                <img alt="Video Tutorial" src="img/scshot/video-tutorial.jpg" class="img-responsive">
                            </div>
                            <!-- End One Screen -->
                            <!-- Start One Screen -->
                            <div class="swiper-slide">
                                <img alt="Webinar" src="img/scshot/webinar.jpg" class="img-responsive">
                            </div>
                            <!-- End One Screen -->
                        </div>
                        <!-- Start Swiper Slider Controls -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <!-- End Swiper Slider Controls -->
                </div>
            </div>
        <!-- End Screenshots Content -->
    </div><!-- End Container -->
</div><!-- End Overlay -->
</section><!-- End Screenshots -->

<!--
End Screenshots Section
==================================== -->

<!--
Start Download Section
==================================== -->

<section id="download" class="download">
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
                        <a href="#" class="bttn-appnova-gradient">
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
                        <a href="https://play.google.com/store/apps/details?id=com.overpips.app" target="_blank" class="bttn-appnova-gradient">
                            <i class="fa fa-android"></i>
                            <span>Available on</span>
                            <span>Google Play</span>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
            </div><!-- end row -->
        </div><!-- end store-butt -->
        <!-- End Store Button -->
    </div><!-- end container -->
</div><!-- end overlay -->
</section><!-- end download -->

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
        <a class="playBut wow fadeInDown" data-wow-duration="1s" href="https://www.youtube.com/embed/gkxEgh0fS9E" data-lity="">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                <polygon class="triangle" id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
            </svg>
        </a>
        <!-- End Play Button -->
    </div>
</div><!-- end overlay -->
</section><!-- end video-app -->

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
            <div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                <div class="single-plan">
                    <div class="body-plan">
                        <div class="price-plan">
                            <h3><sup>RM</sup>139</h3>
                            <span>1 Month</span>
                            <p>&nbsp;</p>
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feat-plan">
                            <ul>
                                <li>Forex Signals</li>
                                <li>News</li>
                                <li>Market Analysis</li>
                                <li>Video Tutorials</li>
                                <li>Webinars</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-plan"></div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Start Single Item -->
            <div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1s">
                <div class="single-plan">
                    <div class="body-plan">
                        <div class="price-plan">
                            <h3><sup>RM</sup>387</h3>
                            <span>3 Months</span>
                            <p>SAVE RM30!</p>
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="feat-plan">
                            <ul>
                                <li>Forex Signals</li>
                                <li>News</li>
                                <li>Market Analysis</li>
                                <li>Video Tutorials</li>
                                <li>Webinars</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-plan"></div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Start Single Item -->
            <div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1s">
                <div class="single-plan mgbtt0">
                    <div class="body-plan">
                        <div class="price-plan">
                            <h3><sup>RM</sup>714</h3>
                            <span>6 Months</span>
                            <p>SAVE RM120!</p>
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="feat-plan">
                            <ul>
                                <li>Forex Signals</li>
                                <li>News</li>
                                <li>Market Analysis</li>
                                <li>Video Tutorials</li>
                                <li>Webinars</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-plan"></div>
                </div>
            </div>
            <!-- End Single Item -->
        </div><!-- end row -->
    </div>
    <!-- End Pricing Content -->
</div><!-- end container -->
</section><!-- end pricing-table -->

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
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I download Overpips?</a></h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p><strong>Step 1:</strong> Search ‘Overpips’ in the search bar to find our app.</p>
                            <p><strong>Step 2:</strong> Tap and download the app, it is free.</p>
                            <p><strong>Step 3:</strong> Once the app has been downloaded, feel free to use Overpips. Enjoy!</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How do I sign up for Overpips?</a></h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p><strong>Step 1:</strong> Tap the Overpips app you have already downloaded.</p>
                            <p><strong>Step 2:</strong> Fill the form and click sign up.</p>
                            <p><strong>Step 3:</strong> Enjoy our features!</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to reset my password?</a>
                                    </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p><strong>Step 1:</strong> Email us at <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b787e7b7b64797f4b647d6e797b627b7825686466">[email&#160;protected]</a></p>
                            <p><strong>Step 2:</strong> Provide details such as email address, mobile number, your account username and lastly, your new password you want to change to.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How do I cancel my subscription?</a></h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <p><strong>Step 1:</strong> Send an email to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e99a9c9999869b9da9869f8c9b9980999ac78a8684">[email&#160;protected]</a></p>
                            <p><strong>Step 2:</strong> Make a statement on wanting to terminate your subscription. Provide details such as email address, mobile number and your account username. Subscription will only be terminated on your supposed next payment due. So, please notify us at least 48 hours before the next payment due.</p>
                            <p><strong>Step 3:</strong> We will notify you once your subscription with Overpips is terminated.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div><!-- end panel-group -->
        </div><!-- end col-md-6 -->
        <!-- End Faqs Text -->
    </div><!-- end row -->
</div><!-- end container -->
</section><!-- end faqs -->

<!--
End Faqs Section
==================================== -->




@endsection