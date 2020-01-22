<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.partials.meta')

    <title>Appino &mdash; @yield('title', 'Everything is free')</title>

    <!-- Favicon -->
    @include('layouts.partials.favicon')

    <!-- Google Fonts -->
    {{-- <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;Raleway:300,400,500,600,700,800,900"> --}}

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/assets/css/bootstrap.min.css">

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="/assets/assets/css/owl-carousel/owl.carousel.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/assets/assets/css/font-awesome.css" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="/assets/assets/css/magnific-popup/magnific-popup.css" />

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="/assets/assets/css/animate.css" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="/assets/assets/css/ionicons.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/assets/assets/css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="/assets/assets/css/responsive.css">

    <!-- custom style -->
    <link rel="stylesheet" href="/assets/assets/css/custom.css" />

    <link rel="stylesheet" href="/assets/vendors/sweetalert/sweetalert2.min.css">

    @yield('styles')


</head>

<body>

    <!-- loading -->
    {{-- <div id="loading" class="green-bg">
        <div id="loading-center">
            <div class="boxLoading"></div>
        </div>
    </div> --}}
    <!-- loading End -->

    <!-- Header -->
    <header id="header-wrap" data-spy="affix" data-offset-top="55">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="/assets/brand/coreui-base-white.svg" alt="logo">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                @php
                                $routeName = \Request::route()->getName();
                                @endphp
                                <li class="@if ($routeName === 'home') active @endif">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="@if ($routeName === 'home') active @endif">
                                    <a href="#about-us">About</a>
                                </li>
                                <li class="@if ($routeName === 'portfolio') active @endif">
                                    <a href="{{ route('portfolio') }}">Portfolio</a>
                                </li>
                                <li class="@if ($routeName === 'blog') active @endif">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="@if ($routeName === 'contact.index') active @endif">
                                    <a href="{{ route('contact.index') }}">Contact</a>
                                </li>
                                @guest
                                @else
                                <li class="">
                                    @include('layouts.partials.front.logout-fom')
                                </li>
                                @endguest
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('banner')

    <div class="main-content">
        @yield('content')
    </div>

    <div class="footer">

        <!-- Footer -->
        <footer class="iq-footer white-bg text-center">
            <div class="container">

                @include('layouts.partials.front.form')

                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-copyright iq-ptb-20">&copy; Copyright {{ date('Y') }} Appino Developed by <a
                                target="_blank" href="https://iqonicthemes.com/">iqonicthemes</a>.</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->

    </div>

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->

    <!-- jQuery -->
    <script src="/assets/assets/js/jquery.min.js"></script>

    <!-- owl-carousel -->
    <script src="/assets/assets/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Counter -->
    <script src="/assets/assets/js/counter/jquery.countTo.js"></script>

    <!-- Jquery Appear -->
    <script src="/assets/assets/js/jquery.appear.js"></script>

    <!-- Magnific Popup -->
    <script src="/assets/assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Retina -->
    <script src="/assets/assets/js/retina.min.js"></script>

    <!-- wow -->
    <script src="/assets/assets/js/wow.min.js"></script>

    <!-- Countdown -->
    <script src="/assets/assets/js/jquery.countdown.min.js"></script>

    <!-- bootstrap -->
    <script src="/assets/assets/js/bootstrap.min.js"></script>

    <!-- Custom -->
    <script src="/assets/assets/js/custom.js"></script>

    <!-- Particles -->
    <script src="/assets/assets/js/particles/particles.min.js"></script>
    <script src="/assets/assets/js/particles/app.js"></script>

    <script src="/assets/vendors/sweetalert/sweetalert2.min.js"></script>

    <script>
        @if (session('flash_message'))
            let Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5500,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
    
            Toast.fire({
                icon:'success',
                title: "{{ Session::get('flash_message') }}"
            })
        @endif
    </script>

</body>

</html>