<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    @if (app()->getLocale() == 'ar' || app()->getLocale() == 'he')
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/ticker-style.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/ar/assets/css/style.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/ticker-style.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/en/assets/css/style.css') }}">
    @endif
    @notifyCss

    @livewireStyles
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">@php
                                            echo 'Today is ' . date('Y-m-d') . ' | ' . date('h:i:sa');
                                        @endphp
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li>
                                            <div class="dropdown">
                                                @if (Auth::guard('web')->user())
                                                    <a href="{{ route('profile.edit') }}">
                                                        <i class="fa-regular fa-user border text-black "></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('login') }}"
                                                        class="auth-st">{{ t('login') }}</a> /
                                                    <a href="{{ route('register') }}"
                                                        class="auth-st">{{ t('register') }}</a>
                                                @endif
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid  d-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('build/assets/newsPage/images/Palestine-title.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#">{{ t('choose_language') }}</a>
                                                <ul class="submenu">
                                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li> <a rel="alternate" hreflang="{{ $localeCode }}"
                                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @if (!Request::routeIs('contents'))
                                                <li> <a href="{{ route('contents') }}">{{ t('back_to_home') }}</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    @yield('content')
    <!-- footer start -->
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png"
                                            alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames
                                            lectus tempor da blandit gravida sodales Suscipit mauris pede for con
                                            sectetuer sodales adipisci for cursus fames lectus tempor da blandit
                                            gravida sodales Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>{{ t('photo_feeds') }} </h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    @if (!empty($recentBlogs))
                                        <ul>
                                            @foreach ($recentBlogs as $blog)
                                                <li>
                                                    <a href="#">
                                                        <img class="img-fluid"
                                                            src="{{ Storage::url($blog->image->folder_save . '/' . $blog->image->url) }}"
                                                            alt="" width="120px" height="100px">
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('build/assets/newsPage/images/AdobeStock_666318545_Preview.jpeg') }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('build/assets/newsPage/images/AdobeStock_244471353_Preview.jpeg') }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('build/assets/newsPage/images/AdobeStock_521348644_Preview.jpeg') }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('build/assets/newsPage/images/AdobeStock_629626080_Preview.jpeg') }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('build/assets/newsPage/images/AdobeStock_660481789_Preview.jpeg') }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('build/assets/newsPage/images/AdobeStock_665610143_Preview.jpeg') }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> {{ t('copyright') }} <i class="ti-heart"
                                        aria-hidden="true"></i> by UTOP</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    @livewireScripts
    <script src="{{ asset('build/assets/en/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/site.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/contact.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/main.js') }}"></script>
    <script src="{{ asset('build/assets/en/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('') }}"></script>
    @notifyJs




</body>

</html>
