@extends('layouts.front')

@section('banner')
<!-- Banner -->
<section id="iq-home" class="bannerq-bg iq-bg-fixed iq-box-shadow iq-over-black-90"
    style=" background: url({{ asset('assets/assets/images/banner/bg.jpg') }});">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row banner-text">
            <div class="col-md-8 col-lg-8 hidden-xs hidden-sm">
                <h1 class="iq-font-white iq-tw-8" data-animation="animated fadeInLeft"><small
                        class="iq-font-white iq-tw-6"><b class="iq-font-white">&#9679;</b> Appino provide amazing &
                        outstanding feature</small>AWESOME MOBILE APP</h1>
                <a class="button bt-white iq-mr-15" href="# "> <i class="ion-social-apple"></i> App Store</a>
                <a class="button bt-white" href="# "> <i class="ion-social-android"></i> Play Store</a>
            </div>

            @guest
            @include('layouts.partials.front.login')
            @else
            @endguest
        </div>
    </div>
</section>
<!-- Banner End -->
@endsection

@section('content')
<!-- Feature -->
{{-- <section id="about-us" class="overview-block-ptb iq-mt-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title">
                    <h2 class="title iq-tw-6">Amazing Features</h2>
                    <div class="divider"></div>
                    <p>We've been working really hard to improve the appino with this amazing new features that you aked
                        for! Check out the appino’s new amazing features. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="iq-fancy-box-03 text-left">
                    <i aria-hidden="true" class="ion-ios-pie-outline iq-font-blue"></i>
                    <h4 class="iq-tw-6">Easy To use <span class="iq-font-blue">.</span></h4>
                    <div class="info-03">
                        <p>Ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                            ut labore.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 re7-mt-30">
                <div class="iq-fancy-box-03 text-left">
                    <i aria-hidden="true" class="ion-ios-color-filter-outline iq-font-blue"></i>
                    <h4 class="iq-tw-6">Awesome Design <span class="iq-font-blue">.</span></h4>
                    <div class="info-03">
                        <p>Dadolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut
                            labore madolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 re7-mt-30">
                <div class="iq-fancy-box-03 text-left">
                    <i aria-hidden="true" class="ion-ios-gear-outline iq-font-blue"></i>
                    <h4 class="iq-tw-6">Unlimited Features <span class="iq-font-blue">.</span></h4>
                    <div class="info-03">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum
                            madolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Feature END -->

<hr>

<!-- Counter -->
{{-- <div class="iq-ptb-70 iq-counter-box iq-bg iq-bg-fixed iq-over-black-80" style="background: url(images/about/04.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-xs-6 text-center">
                <div class="counter"> <i class="ion-ios-folder-outline iq-font-white" aria-hidden="true"></i> <span
                        class="timer iq-tw-6 iq-font-black" data-to="1540" data-speed="10000">1540</span>
                    <label class="iq-font-white">Project</label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6 text-center">
                <div class="counter"> <i class="ion-ios-paper-outline iq-font-white" aria-hidden="true"></i> <span
                        class="timer iq-tw-6 iq-font-black" data-to="2530" data-speed="10000">2530</span>
                    <label class="iq-font-white">LINE CODE</label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50">
                <div class="counter"> <i class="ion-ios-person-outline iq-font-white" aria-hidden="true"></i> <span
                        class="timer iq-tw-6 iq-font-black" data-to="8120" data-speed="10000">8120</span>
                    <label class="iq-font-white">HAPPY CLIENTS</label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50">
                <div class="counter"> <i class="ion-ios-star iq-font-white" aria-hidden="true"></i> <span
                        class="timer iq-tw-6 iq-font-black" data-to="1620" data-speed="10000">1620</span>
                    <label class="iq-font-white">TOTAL APP RATES</label>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Counter END -->

<!-- Latest Blog Post -->
<section id="blog" class="overview-block-ptb white-bg iq-blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title">
                    <h2 class="title iq-tw-6">Latest Blog Post</h2>
                    <div class="divider"></div>
                    <p>We have completely updated our work, making it much easier for you to find the information you
                        need. Check out the recently updated work and learn more about application.</p>
                </div>
            </div>
        </div>
        <div class="row">

            @include('layouts.partials.front.home')

            <div class="col-sm-12 text-center">
                <a class="button iq-mt-50" href="{{ route('blog') }}">Go To Blog</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Post END -->
@endsection