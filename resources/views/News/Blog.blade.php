@extends('News.Master')
@section('content')
    <style>
        nav div div .rounded-md {
            display: none;
        }

        nav div .rounded-md {
            color: black;
        }

        nav {
            display: flex;
        }
    </style>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($blogs as $blog)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0"
                                        src="{{ Storage::url($blog->image->folder_save . '/' . $blog->image->url) }}"
                                        alt="Blog Image">
                                    <a href="{{ route('content', $blog->id) }}" class="blog_item_date">
                                        @php
                                            // Assuming $blog is an instance of your Blog model
                                            $createdAt = $blog->created_at;
                                            $day = date('d', strtotime($createdAt));
                                            $month = date('M', strtotime($createdAt));
                                        @endphp

                                        <h3>{{ $day }}</h3>
                                        <p>{{ $month }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('content', $blog->id) }}">
                                        <h2>{{ $blog->title }}</h2>
                                    </a>
                                    <p>{{ $blog->brief_explanation }}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i>
                                                {{ $blog->admin->name ?? null }}</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> {{ $blog->comments->count() }}
                                                {{ t('comment') }}</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                        {{ $blogs->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{ route('contents') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            name="search">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">{{ t('search') }}</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">{{ t('recent_post') }}</h3>
                            @php
                                $recentBlogs = App\Models\Blog::latest()->take(4)->get();
                            @endphp
                            @foreach ($recentBlogs as $blog)
                                <div class="media post_item trand-right-img">
                                    <img class="" width="120px" height="100px"
                                        src="{{ Storage::url($blog->image->folder_save . '/' . $blog->image->url) }}"
                                        alt="post">
                                    <div class="media-body">
                                        <a href="{{ route('content', $blog->id) }}">
                                            <h3>{{ $blog->title }}</h3>
                                        </a>
                                        <p>{{ $blog->created_at }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">{{ t('photo_feeds') }}</h4>
                            <ul class="instagram_row flex-wrap">
                                @foreach ($recentBlogs as $blog)
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ Storage::url($blog->image->folder_save . '/' . $blog->image->url) }}"
                                                alt="" width="120px" height="100px">
                                        </a>
                                    </li>
                                @endforeach
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
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">{{ t('Newsletter') }}</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">{{ t('subscribe') }}</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
