<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('build/assets/styleHomePage/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/styleHomePage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/styleHomePage/css/main.css') }}">
    <style>
        .dropdown {
            position: relative;
            width: auto;
            filter: url(#goo);
        }

        .dropdown__face {

            padding: 20px;
            border-radius: 25px;
        }

        .dropdown__items {
            padding: 20px;
            border-radius: 25px;
            background-color: #fff;
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
            width: 100%;
            list-style: none;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
            visibility: hidden;
            z-index: -1;
            opacity: 0;

            transition: all 0.4s cubic-bezier(0.93, 0.88, 0.1, 0.8);
        }

        .dropdown__items::before {
            content: "";
            background-color: #fff;
            position: absolute;
            bottom: 100%;
            right: 20%;
            height: 40px;
            width: 20px;
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

        @media (min-width: 1568px) {
            .navbar {
                padding: 0 15em;
            }
        }

        .auth-st {
            font-size: 110%;
            font-weight: 700
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <!--************************ navbar********************** -->
    <main id="main">
        <!--*----------------------------------- Home------------------------------------- -->
        @include('website.layouts.header')
        <section id="home" class="py-5 px-5 mb-5" style="position: relative;top: 7em;">
            <div class="pt-3 container ">
                <div class="row d-flex align-items-center justify-content-between   ">
                    <div class="col-md-7 d-flex align-items-center ">
                        <img src="{{ asset('build/assets/styleHomePage/images/fakurian-design-LoLi.png') }}"
                            class="w-75 main-img " alt="">
                        <div class="d-flex  flex-column  circle-photo w-25 ">
                            <img src="{{ asset('build/assets/styleHomePage/images/download (10).png') }}"
                                class=" img1 circle mb-1 rounded-5  " alt="">
                            <img src="{{ asset('build/assets/styleHomePage/images/download (2).png') }}"
                                class=" img2 circle mb-3 " alt="">
                            <img src="{{ asset('build/assets/styleHomePage/images/download (3).png') }}"
                                class=" img3 circle mb-1" alt="">
                            <img src="{{ asset('build/assets/styleHomePage/images/download (4).png') }}"
                                class=" img4 circle mb-1" alt="">
                            <!-- <img src="./images/Mask Group 46.png" class=" img5 circle" alt=""> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="home-h3">{{ t('palastine') }}</h3>
                        <p class="home-p">{{ t('wpalastine') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section id="section3" class="pt-5">
            <div class="container py-5 ">
                <div class="row d-flex align-items-center  justify-content-between">
                    <div class="col-md-6 py-3 page1">
                        <div id="carouselExampleAutoplaying" class="carousel slide w-100 d-flex justify-content-start"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('build/assets/styleHomePage/images/map.png') }}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('build/assets/styleHomePage/images/map.png') }}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('build/assets/styleHomePage/images/map.png') }}"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev  " type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-black   " aria-hidden="true"></span>
                                <span class="visually-hidden ">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-black " aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 ">
                        <div
                            class="position-relative fit w-100 d-flex justify-content-end   page2 flex-column align-items-center    ">
                            <h3 class="text-end  h6 py-2 "> {{ t('points issue') }} </h3>
                            <div class="cool position-relative ">
                                <h4 class="position-absolute mx-4 start-50 task1">وعد بلفور</h4>
                                <div class="circle-icon position-absolute cir1"></div>
                                <h4 class="position-absolute mx-4  end-50  task1">1917</h4>
                                <h4 class="position-absolute mx-4 start-50 task2">النكبة</h4>
                                <div class="circle-icon position-absolute cir2"></div>
                                <h4 class="position-absolute mx-4  end-50  task2">1947</h4>
                                <h4 class="position-absolute mx-4 start-50 task3">حرب 1948</h4>
                                <div class="circle-icon position-absolute cir3"></div>
                                <h4 class="position-absolute mx-4  end-50  task3">1948</h4>
                                <h4 class="position-absolute mx-4 start-50 task4">حرب 1956</h4>
                                <div class="circle-icon position-absolute cir4"></div>
                                <h4 class="position-absolute mx-4  end-50  task4">1956</h4>
                                <h4 class="position-absolute mx-4 start-50 task5">حرب 1967</h4>
                                <div class="circle-icon position-absolute cir5"></div>
                                <h4 class="position-absolute mx-4  end-50  task5">1967</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--  -->
        <section id="section">
            <div class="container py-5">
                <div class="row d-flex align-items-center justify-content-between  ">
                    <div class=" col-md-6 ">
                        <img src="{{ asset('build/assets/styleHomePage/images/aksa.png') }}" alt=""
                            class="w-100">
                    </div>
                    <div class=" col-md-6 pb-3 ">
                        <h2> {{ t('prominent crimes') }} </h2>
                        <ul>
                            <li><a href="#"> مجزرة حيفا </a></li>
                            <li> <a href="#">مذبحة الاقصى الاولى </a></li>
                            <li><a href="#">مجزرة جنين</a></li>
                            <li><a href="#">مجزرة قانا </a></li>
                            <li><a href="#">مجزرة مخيم صبرا وشاتيلا</a> </li>
                            <li class="last"><a>مذبحة الاقصى الأولى </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!--*----------------------------------- ابرز محطات نضال الفلسطنيين------------------------------------- -->
        <section id="about">
            <div class="container-fluid ">
                <div class="border-bottom  ">
                    <h3>{{ t('prominent stages') }}</h3>
                </div>
                <div class="d-flex justify-content-center align-items-center  justify-content-center parent   ">
                    <div class="row gx-3  d-flex justify-content-between  align-items-center">
                        <div class="col-lg-7 parent d-flex  align-items-center  justify-content-center   ">
                            <div class="d-flex align-items-center   flex-column">
                                <div class="d-flex  align-items-center ">
                                    <div class="hr"></div>
                                    <div class="rhombus">
                                        <h5 class="rotate-text">طوفان الاقصي</h5>
                                    </div>
                                    <div class="hr"></div>
                                </div>
                                <div class="hr2"></div>
                                <div class="circle2">
                                    <h5>2023</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end   flex-column">
                                <div class="d-flex justify-content-center align-items-center ">
                                    <div class="hr"></div>

                                    <div class="rhombus">
                                        <h5 class="rotate-text">انتفاضة القدس </h5>
                                    </div>
                                    <div class="hr"></div>
                                </div>
                                <div class="hr2"></div>
                                <div class="circle2">
                                    <h5>2015</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end   flex-column ">
                                <div class="d-flex justify-content-center align-items-center ">
                                    <div class="hr hrrr"></div>

                                    <div class="rhombus">
                                        <h5 class="rotate-text">انتفاضة الأقصي </h5>
                                    </div>
                                    <div class="hr hrrr"></div>
                                </div>
                                <div class="hr2"></div>
                                <div class="circle2">
                                    <h5>2000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 parent d-flex  align-items-center  justify-content-center  ">
                            <div class="d-flex align-items-center justify-content-center  flex-column ">
                                <div class="d-flex justify-content-center align-items-center ">
                                    <div class="hr"></div>
                                    <div class="rhombus">
                                        <h5 class="rotate-text"> هبةالنفق </h5>
                                    </div>
                                    <div class="hr"></div>
                                </div>
                                <div class="hr2"></div>
                                <div class="circle2">
                                    <h5>1996</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end   flex-column">
                                <div class="d-flex justify-content-center align-items-center ">
                                    <div class="hr"></div>

                                    <div class="rhombus">
                                        <h5 class="rotate-text">انتفاضة الحجارة </h5>
                                    </div>
                                    <div class="hr"></div>

                                </div>

                                <div class="hr2"></div>
                                <div class="circle2">
                                    <h5>1987</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative w-50  ">
                    <div class="position-absolute bg-body caption pe-1   end-0  ">
                        <h3 class="h5">مذبحه الاقصي الاولي</h2>
                            <p>
                                عمليّة طُوفان الاقصي،وفي إسرائبل عملية السيوف الحديدية،
                                كما تشير إليها بعض المصادر بالإنتفاضة
                                الثالثة،هي عملية عسكرية ممتدة شنتها فصائل المقاومة
                                الفلسطينية في قطاع غزة وعلي رأسها حركة حماس عبر ذراعها
                                العسكري كتائب الشهيد عز الدين القسام في
                                اول ساعات الصباح من يوم السبت 7 نشرين الاول /أكتوبر 2023م الموافق ل 22 ربيع اول1445هجريا
                                ،اذ اعلن القائد للكتائب محمد الضيف بدء العملية ردًا علي"الانتهاكات
                                الإسرائليةساحات المسجد الاقصي المبارك واعتدراء المستوطنين
                                الاسرائيلين علي المواطنين الفلسطنيين في القدس والضفةوالداخل المحتل.
                            </p>
                    </div>
                    <img src="{{ asset('build/assets/styleHomePage/images/Component 1 – 1.png') }}"
                        class="w-50 imagee" alt="">
                </div>
            </div>
        </section>
        <!--*----------------------------------- ابرز محطات نضال الفلسطنيين------------------------------------- -->
    </main>
    <script src="{{ asset('build/assets/styleHomePage/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/assets/styleHomePage/js/main.js') }}"></script>
</body>

</html>
