@extends('layouts.front')

@section('title', 'Blog Post')

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
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End intro -->
@endsection

@section('content')
<!-- Blog -->
<section id="blog" class="iq-page-blog overview-block-ptb">
    <div class="container">
        <div class="row">
            @include('layouts.partials.posts.blog')
        </div>

        <div class="row iq-mt-80">
            <div class="col-lg-12 col-md-12 text-center">
                @include('layouts.partials.posts.paginate')
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->
@endsection