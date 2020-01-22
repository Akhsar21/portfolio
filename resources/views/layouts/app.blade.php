<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.meta')

    <title>CoreUI &mdash; @yield('title', 'Free for Everything')</title>

    @include('layouts.partials.favicon')

    <!-- Icons-->
    <link href="/assets/vendors/@coreui/icons/css/free.min.css" rel="stylesheet">
    {{-- <link href="/assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet"> --}}

    <!-- Main styles for this application-->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link href="/assets/vendors/sweetalert/sweetalert2.min.css" rel="stylesheet">
    <link href="/assets/vendors/select2/select2.css" rel="stylesheet">
    {{-- <link href="/assets/vendors/select2/select2.bootstrap4.css" rel="stylesheet"> --}}

    @yield('styles')

    <!-- Global site tag (gtag.js) - Google Analytics-->

</head>

<body class="@yield('body')">
    @guest
    @else
    @include('layouts.partials.sidebar')
    <div class="c-wrapper">
        @include('layouts.partials.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @endguest
                        @yield('content')
                        @guest
                        @else
                    </div>
                </div>
            </main>
        </div>
        <footer class="c-footer">
            <div><a href="#">CoreUI</a> &copy; {{ date('Y') }} creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="#">CoreUI</a></div>
        </footer>
    </div>
    @endguest

    <!-- CoreUI and necessary plugins-->
    <script src="/assets/vendors/pace-progress/js/pace.min.js"></script>
    <script src="/assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/assets/vendors/sweetalert/sweetalert2.min.js"></script>
    {{-- <script src="/assets/js/tooltips.js"></script> --}}
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/vendors/select2/select2.min.js"></script>
    
    @yield('scripts')

    <script>
        $('.select').select2({
            width: 'resolve'
        });

        @if (session('flash_message'))
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
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