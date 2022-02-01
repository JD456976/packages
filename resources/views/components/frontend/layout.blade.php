<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords') }}" content="Streamlab - Video Streaming HTML5 Template" />
    <meta name="description" content="Streamlab - Video Streaming HTML5 Template" />
    <meta name="author" content="StreamLab" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title ?? 'PackageThieves'}}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
    <!-- CSS bootstrap-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <!--  Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <!--  Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" />
    @livewireStyles
</head>


<body>


@unless (Route::is(['login', 'register']) || Request::is(['forgot-password', 'reset-password/*', 'confirm-password']))
    <!--========== Header ==============-->
    @include('frontend.partials.header')
    <!--========== Header ==============-->
@endunless

{{ $slot }}


@unless (Route::is(['login', 'register']) || Request::is(['forgot-password', 'reset-password/*', 'confirm-password']))
    <!-- footer start -->
    @include('frontend.partials.footer')
    <!-- footer End -->
@endunless


<!-- Back-to-Top start -->
<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!-- Back-to-Top end -->

<!-- js-min -->
<!-- popper-js -->
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/asyncloader.min.js') }}"></script>
<!-- JS bootstrap -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<!-- owl-carousel -->
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<!-- counter-js -->
<script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
<!-- Iscotop -->
<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/streamlab-core.js') }}"></script>

<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

<script src="{{ asset('assets/frontend/js/share.js') }}"></script>

@include('sweetalert::alert')

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script src="//unpkg.com/alpinejs') }}" defer></script>

@livewireScripts

</body>

</html>
