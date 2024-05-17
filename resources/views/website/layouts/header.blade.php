<div class="container-fluid p-0 m-0  position-absolute ">
    <nav class="navbar navbar-expand-lg" id="navbar-example">
        <div class="container-fluid">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="navButton">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class=" fs-1 h1 navbar-brand navbar-toggler border-0 caption2" aria-expanded="false"
                aria-controls="navbarSupportedContent" data-bs-toggle="collapse" href="#"
                aria-controls="navbarSupportedContent" data-bs-target="#navbarSupportedContent">فِلَسْطِين</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul
                    class="icon d-flex navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center justify-content-center ">
                    <li class="  mx-2 pt-5 nav-item">
                        <div class="dropdown">
                            <input type="checkbox" id="dropdown">
                            <label class="dropdown__face" for="dropdown">
                                <div class="dropdown__text"></div>
                                <i class="fa-solid fa-globe fs-4"></i>
                            </label>
                            <ul class="dropdown__items d-block">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="  mx-2 pt-5 nav-item ">
                        <div class="dropdown">
                            @if (Auth::guard('web')->user())
                                <a href="{{ route('profile.edit') }}">
                                    <i class="fa-regular fa-user border text-black "></i>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="auth-st">{{ t('login') }}</a> /
                                <a href="{{ route('register') }}" class="auth-st">{{ t('register') }}</a>
                            @endif
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center"
                    style="top: -3px;position: relative; ">
                    <li class=" ms-5 pt-5 nav-item ">
                        <a class=" fs-1 h1" aria-current="page" id="mainTitle">
                            {{ app()->getLocale() == 'ar' ? 'فِلَسْطِين' : (app()->getLocale() == 'en' ? 'Ｐａｌａｓｔｉｎｅ' : 'פלסטין') }}
                        </a>
                    </li>
                    <li class="nav-item mx-4 ">
                        <a class="nav-link active" aria-current="page" href="#main">{{ t('home page') }}</a>
                    </li>

                    <li class="nav-item  mx-4 ">
                        <a class="nav-link"aria-current="page" href="{{ route('about') }}">{{ t('about us') }}</a>
                    </li>
                    <li class="nav-item  mx-4 ">
                        <a class="nav-link  " aria-current="page"
                            href="{{ route('contents') }}">{{ t('news') }}</a>
                    </li>
                    <li class="nav-item  mx-4">
                        <a class="nav-link " href="#" aria-current="page">{{ t('support') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
