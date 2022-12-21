<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Future Art Broadcast Trading L.L.C - Professional Video, Broadcast, Cinema, Pro Audio & Photography Equipment
        Supplier</title>
    <link rel="stylesheet" href="{{ URL::asset('font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lib/bootstrap.min.css') }}">
    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugin/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/redparts/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lib/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader"></div>
    <!-- ====== end loading page ====== -->


    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-1">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="top-links">
                            <div class="text text-white">
                                <i class="fas fa-bullhorn"></i>
                                <strong>Now Hiring:</strong>
                                <span>Are you a driven and motivated <a href="/" class="p-0"><u>1st Line IT
                                            Support
                                            Engineer?</u></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="r-side">
                            <div class="socail-icons">
                                <a href="/">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="/" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="me-1" src="assets/img/lang.png" alt=""> English
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/">French</a></li>
                                    <li><a class="dropdown-item" href="/">Arabic</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->


    @include('layout.navbar')

    @yield('content')
    @include('layout.footer')


    <!-- ====== start to top button ====== -->
    <a href="/" class="to_top">
        <i class="bi bi-chevron-up"></i>
        <small>top</small>
    </a>
    <!-- ====== end to top button ====== -->


    <script src="{{ URL::asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugin/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/redparts/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/pace.js') }}"></script>
    @yield('scripts')
    <script src="{{ URL::asset('assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>

</html>
