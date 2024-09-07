<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fabrigan | @yield('title')</title>
    <meta name="keywords" content="fabrigan" />
    <meta name="description" content="fabrigan - Karate suits" />
    <meta name="author" content="fabrigan" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/icons/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/icons/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/icons/favicon.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/images/icons/site.html') }}" />
    <link rel="mask-icon" href="{{ asset('frontend/images/icons/safari-pinned-tab.html') }}" color="#666666" />
    <link rel="shortcut icon" href="{{ asset('frontend/images/icons/favicon.ico') }}" />
    <meta name="apple-mobile-web-app-title" content="fabrigan" />
    <meta name="application-name" content="fabrigan" />
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content={{ asset('frontend/images/icons/browserconfig.xml') }} />
    <meta name="theme-color" content="#ffffff"/ />
    <!-- Swiper Slider CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> --}}
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/demos/demo-18.css') }}" />
</head>

<body>
    <div class="page-wrapper">
        @include('frontend.layouts.header')
        @yield('main-container')
        @include('frontend.layouts.footer')
    </div><!-- End .page-wrapper -->
    @include('frontend.layouts.mobileMenu')


    <button id="scroll-top" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
    <a href="https://wa.me/+923016001700" target="_blank" class="float">
        <img src={{ asset('frontend/images/whatsapp_icon.png') }} alt="WhatsApp Chat">
    </a>
    <script>
        var video = document.getElementById('video');
        var playButton = document.getElementById('play-button');

        function togglePlayPause() {
            if (video.paused || video.ended) {
                video.play();
                playButton.innerHTML = 'Pause';
            } else {
                video.pause();
                playButton.innerHTML = 'Play';
            }
        }
    </script>
    <!-- Plugins JS File -->
    <script src={{ asset('frontend/js/jquery.min.js') }}></script>
    <script src={{ asset('frontend/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('frontend/js/jquery.hoverIntent.min.js') }}></script>
    <script src={{ asset('frontend/js/jquery.waypoints.min.js') }}></script>
    <script src={{ asset('frontend/js/superfish.min.js') }}></script>
    <script src={{ asset('frontend/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('frontend/js/bootstrap-input-spinner.js') }}></script>
    <script src={{ asset('frontend/js/jquery.magnific-popup.min.js') }}></script>
    <!-- Main JS File -->
    <script src={{ asset('frontend/js/main.js') }}></script>
    <script src={{ asset('frontend/js/demos/demo-18.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
