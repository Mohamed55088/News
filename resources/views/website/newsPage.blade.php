<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/li-scroller.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/newsPage/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/styleHomePage/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/styleHomePage/css/all.min.css') }}">
    <style>
        .dropdown {
            position: relative;
            filter: url(#goo);
        }

        .dropdown__face {

            padding: 10px;
            border-radius: 25px;
        }

        .dropdown__items {
            padding: 20px;
            border-radius: 25px;
            background-color: #000000;
            width: 10%;
        }

        .dropdown__face {
            display: block;
            position: relative;
        }

        .dropdown__items {
            margin: 0;
            position: absolute;
            right: 0;
            top: 50%;
            width: 47%;
            list-style: none;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
            visibility: hidden;
            z-index: -1;
            opacity: 0;

            transition: all 0.4s cubic-bezier(0.93, 0.88, 0.1, 0.8);
        }

        .dropdown__arrow {
            border-bottom: 2px solid #000;
            border-right: 2px solid #000;
            position: absolute;
            top: 50%;
            right: 30px;
            width: 10px;
            height: 10px;
            transform: rotate(45deg) translateY(-50%);
            transform-origin: right;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]:checked~.dropdown__items {
            top: calc(90% + 5px);
            visibility: visible;
            opacity: 1;
        }

        /*
        @media (min-width: 1568px) {
            .navbar {
                padding: 0 15em;
            }
        } */

        .auth-st {
            font-size: 110%;
            font-weight: 700
        }

        /* Styles for the first div with id navbar */
        #navbar {
            text-align: end;
            background-color: #000000;

        }

        .navbar-header {
            background-color: #000000;
            height: auto;
            padding: 0;
        }

        .navbar-nav {
            margin: 0;
        }

        .navbar {
            background-color: #000000;
            padding: 0;
            height: auto;
        }

        .dropdown {
            padding-top: 5px;
            text-align: end;
        }

        @media screen and (max-width: 962px) {
            .navbar-collapse {
                display: flex;
                justify-content: space-between;
            }

            .dropdown {
                text-align: end;
            }
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container" style="width:100%;">
        <section id="navArea">
            <div class="navbar navbar-inverse" role="navigation">
                <div class=" navbar-collapse ">
                    <div class="nav navbar-nav main_nav">
                        <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span></a></li>
                    </div>
                    <div class="dropdown">
                        <input type="checkbox" id="dropdown">
                        <label class="dropdown__face" for="dropdown">
                            <div class="dropdown__text"></div>
                            <i class="fas fa-globe"style="color: white;"></i>
                        </label>
                        <ul class="dropdown__items d-block">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" style="color: #ffffff" rel="alternate"
                                    hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="newsSection" style="padding-top: 20px;">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="latest_newsarea"> <span>Latest News</span>
                        <ul id="ticker01" class="news_sticker">
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My First News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Second News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Third News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Four News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Five News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Six News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Seven News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Eight News
                                    Item</a></li>
                            <li><a href="#"><img
                                        src="{{ asset('build/assets/newsPage/images/news_thumbnail3.jpg') }}"
                                        alt="">My Nine News
                                    Item</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="sliderSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="slick_slider">
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="{{ asset('build/assets/newsPage/images/slider_img2.jpg') }}"
                                    alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="{{ asset('build/assets/newsPage/images/slider_img2.jpg') }}"
                                    alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="{{ asset('build/assets/newsPage/images/slider_img2.jpg') }}"
                                    alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                        <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                    src="{{ asset('build/assets/newsPage/images/slider_img2.jpg') }}"
                                    alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper
                                        porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                    nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="latest_post">
                        <h2><span>Latest post</span></h2>
                        <div class="latest_post_container">
                            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                            <ul class="latest_postnav">
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img
                                                alt=""
                                                src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img
                                                alt=""
                                                src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img
                                                alt=""
                                                src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 3</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img
                                                alt=""
                                                src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 4</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"> <a href="pages/single_page.html" class="media-left"> <img
                                                alt=""
                                                src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                            </ul>
                            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content">
                        <div class="single_post_content">
                            <h2><span>Business</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="pages/single_page.html"
                                                class="featured_img"> <img alt=""
                                                    src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl
                                                    eu ornare mauris</a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,
                                                egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="{{ asset('build/assets/newsPage/images/post_img2.jpg') }}">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="{{ asset('build/assets/newsPage/images/post_img1.jpg') }}">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt=""
                                                    src="{{ asset('build/assets/newsPage/images/post_img2.jpg') }}">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <h2><span>Fashion</span></h2>
                                    <ul class="business_catgnav wow fadeInDown">
                                        <li>
                                            <figure class="bsbig_fig"> <a href="pages/single_page.html"
                                                    class="featured_img"> <img alt=""
                                                        src="images/featured_img2.jpg"> <span class="overlay"></span>
                                                </a>
                                                <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat
                                                        nisl eu ornare mauris</a> </figcaption>
                                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,
                                                    egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        1</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        2</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        3</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        4</a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="technology">
                                <div class="single_post_content">
                                    <h2><span>Technology</span></h2>
                                    <ul class="business_catgnav">
                                        <li>
                                            <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="featured_img"> <img alt=""
                                                        src="images/featured_img3.jpg"> <span class="overlay"></span>
                                                </a>
                                                <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat
                                                        nisl eu ornare mauris</a> </figcaption>
                                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,
                                                    egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        1</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        2</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        3</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        4</a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_post_content">
                            <h2><span>Photography</span></h2>
                            <ul class="photograph_nav  wow fadeInDown">
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img2.jpg"
                                                title="Photography Ttile 1"> <img src="images/photograph_img2.jpg"
                                                    alt="" /></a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img3.jpg"
                                                title="Photography Ttile 2"> <img src="images/photograph_img3.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img4.jpg"
                                                title="Photography Ttile 3"> <img src="images/photograph_img4.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img4.jpg"
                                                title="Photography Ttile 4"> <img src="images/photograph_img4.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img2.jpg"
                                                title="Photography Ttile 5"> <img src="images/photograph_img2.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons"
                                                data-fancybox-group="button" href="images/photograph_img3.jpg"
                                                title="Photography Ttile 6"> <img src="images/photograph_img3.jpg"
                                                    alt="" /> </a> </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content">
                            <h2><span>Games</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img"
                                                href="pages/single_page.html"> <img src="images/featured_img1.jpg"
                                                    alt=""> <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl
                                                    eu ornare mauris</a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,
                                                egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content">
                        <div class="single_sidebar">
                            <h2><span>Popular Post</span></h2>
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 3</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 4</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_sidebar">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#category" aria-controls="home"
                                        role="tab" data-toggle="tab">Category</a></li>
                                <li role="presentation"><a href="#video" aria-controls="profile" role="tab"
                                        data-toggle="tab">Video</a></li>
                                <li role="presentation"><a href="#comments" aria-controls="messages" role="tab"
                                        data-toggle="tab">Comments</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="category">
                                    <ul>
                                        <li class="cat-item"><a href="#">Sports</a></li>
                                        <li class="cat-item"><a href="#">Fashion</a></li>
                                        <li class="cat-item"><a href="#">Business</a></li>
                                        <li class="cat-item"><a href="#">Technology</a></li>
                                        <li class="cat-item"><a href="#">Games</a></li>
                                        <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                                        <li class="cat-item"><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="video">
                                    <div class="vide_area">
                                        <iframe width="100%" height="250"
                                            src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="comments">
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        1</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        2</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        3</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                    class="media-left"> <img alt=""
                                                        src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html"
                                                        class="catg_title"> Aliquam malesuada diam eget turpis varius
                                                        4</a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Sponsor</span></h2>
                            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Category Archive</span></h2>
                            <select class="catgArchive">
                                <option>Select Category</option>
                                <option>Life styles</option>
                                <option>Sports</option>
                                <option>Technology</option>
                                <option>Treads</option>
                            </select>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Links</span></h2>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Rss Feed</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Life &amp; Style</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInLeftBig">
                            <h2>Flickr Images</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInDown">
                            <h2>Tag</h2>
                            <ul class="tag_nav">
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Life &amp; Style</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">Slider</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInRightBig">
                            <h2>Contact</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.</p>
                            <address>
                                Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax:
                                123-546-567
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p class="copyright">Copyright &copy; 2045 <a href="index.html">NewsFeed</a></p>
                <p class="developer">Developed By Wpfreeware</p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('build/assets/newsPage/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/jquery.li-scroller.1.0.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/jquery.newsTicker.min.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('build/assets/newsPage/assets/js/custom.js') }}"></script>
</body>

</html>
