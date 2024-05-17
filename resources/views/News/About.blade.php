@extends('News.Master')
@section('content')
    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="{{ asset('build/assets/newsPage/images/about_head.png') }}" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>{{ t('about_us') }}</h3>
                            </div>
                            <div class="about-prea">
                                <div class="h5">{{ t('welcome') }}</div>
                                <p class="about-pera1 mb-25">
                                    {{ t('welcome_d') }}
                                </p>
                                <div class="h5">{{ t('mission') }}</div>
                                <p class="about-pera1 mb-25">
                                    {{ t('mission_d') }}
                                </p>
                                <div class="h5">{{ t('team') }}</div>
                                <p class="about-pera1 mb-25">
                                    {{ t('team_d') }}
                                </p>
                                <div class="h5">{{ t('offer') }}</div>
                                <p class="about-pera1 mb-25">
                                    {{ t('offer_d') }}
                                </p>
                                <div class="h5">{{ t('value') }}</div>
                                <p class="about-pera1 mb-25">
                                    {{ t('value_d') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>{{ t('follow_us') }}</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img
                                                src="{{ asset('build/assets/ar/assets/img/news/icon-fb.png') }}"
                                                alt=""></a>
                                    </div>

                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img
                                                src="{{ asset('build/assets/ar/assets/img/news/icon-tw.png') }}"
                                                alt=""></a>
                                    </div>

                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img
                                                src="{{ asset('build/assets/ar/assets/img/news/icon-ins.png') }}"
                                                alt=""></a>
                                    </div>

                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img
                                                src="{{ asset('build/assets/ar/assets/img/news/icon-yo.png') }}"
                                                alt=""></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
    </main>
@endsection
