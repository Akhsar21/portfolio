@extends('layouts.front')

@section('title', 'Contact us')

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
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End intro -->
@endsection

@section('content')
<!-- MAP Info -->
<div class="iq-map overview-block-ptb">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921"
        style="border:0" allowfullscreen></iframe>
</div>
<!-- MAP Info END -->

<!-- Get in Touch -->
<section id="contact-us" class="iq-our-touch">
    <div class="container">
        <div class="iq-get-in iq-pall-40 white-bg">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h4 class="heading-left iq-tw-6 iq-pb-20 iq-mb-40">Get in Touch</h4>
                    @include('layouts.partials.front.contact-form')
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 re-mt-30">
                    @include('layouts.partials.front.contact-us')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get in Touch END -->
@endsection