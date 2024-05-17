<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('build/assets/authwebsite/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/authwebsite/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/authwebsite/css/login.css') }}" />
    <style>
        .header-section {
            top: 22em;
        }

        @media (max-width: 1181px) {
            .header-section {
                top: 11.5em;
            }
        }
    </style>
</head>

<body style="height: auto; background-image: url({{ asset('build/assets/authwebsite/images/login/login.jpg') }});">
    <section class="header-section text-center text-lg-start" style="position: relative;">
        <div class=" mb-4">
            <div class="row g-0 d-flex align-items-center" style="justify-content: center;position: relative;">
                <div class="col-lg-5 col-md-12 col-sm-10 col-xm-10 ">
                    <div class="card-body py-5 px-md-6 col-sm-10 col-xm-10 " style="display: contents">
                        <h1 class="text-center mb-5 text-white">
                            {{ app()->getLocale() == 'ar' ? 'فِلَسْطِين' : (app()->getLocale() == 'en' ? 'Ｐａｌａｓｔｉｎｅ' : 'פלסטין') }}
                        </h1>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('build/assets/authwebsite/js/all.min.js') }}"></script>
    <script src="{{ asset('build/assets/authwebsite/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
