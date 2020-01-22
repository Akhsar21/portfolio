@extends('layouts.front')

@section('title','Portfolio')

@section('banner')
<!-- intro -->
<section class="iq-breadcrumb overview-block-pt text-center iq-bg iq-bg-fixed iq-over-black-90 iq-box-shadow"
    style="background: url(images/about/04.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                    <h1 class="title iq-tw-8 iq-font-white">@yield('title')</h1>
                    <div class="divider white"></div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="ion-home"></i> Home</a></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End intro -->
@endsection

@section('content')
<section id="screenshots" class="overview-block-ptb">
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-sm-12">
            <div class="owl-carousel popup-gallery" data-autoplay="true" data-loop="true" data-nav="false"
                data-dots="true" data-items="4" data-items-laptop="4" data-items-tab="3" data-items-mobile="2"
                data-items-mobile-sm="1" data-margin="15">
                @foreach ($project->images as $image)
                <div class="item"><a href="{{ asset($image->src) }}" class="popup-img"><img class="img-responsive"
                            src="{{ asset($image->src) }}" alt="#"></a></div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="gallery-area section-gap">
    <div class="container">
        @foreach ($projects as $project)
        <div class="row">
            @foreach ($project->images as $image)
            <a href="{{ asset($image->src) }}" class="img-gal">
                <div class="single-imgs relative">
                    <div class="overlay overlay-bg"></div>
                    <div class="relative">
                        <img class="img-fluid" src="{{ asset($image->src) }}" alt="">
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
@endsection