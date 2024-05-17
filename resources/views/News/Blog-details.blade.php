@extends('News.Master')
@section('content')
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid"
                                src="{{ Storage::url($blog->image->folder_save . '/' . $blog->image->url) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $blog->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{ $blog->admin->name ?? null }}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> {{ $blog->comments->count() }}
                                        {{ t('comment') }}</a></li>
                            </ul>

                            <div class="quote-wrapper">
                                <div class="quotes">
                                    {{ t('notes') }}
                                </div>
                            </div>
                            <p class="excert">
                                {!! $blog->long_explaination !!}
                            </p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span></p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span>
                                    {{ $blog->comments->count() }}
                                    {{ t('comment') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="{{ asset('build/assets/newsPage/images/AdobeStock_665610143_Preview.jpeg') }}"
                                alt="" width="90px" height="90px">
                            <div class="media-body">
                                <a href="#">
                                    <h4> {{ $blog->admin->name ?? null }}</h4>
                                </a>
                                <p>{{ t('notes') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        @if ($blog->comments)
                            <h4>{{ $blog->comments->count() }} {{ t('comment') }}</h4>
                            @foreach ($blog->comments as $comment)
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="assets/img/comment/comment_1.png" alt="">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    {{ $comment->comment }}
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">{{ $comment->user->name }}</a>
                                                        </h5>
                                                        <p class="date">{{ $comment->created_at }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h4> {{ t('nocomment') }}</h4>
                        @endif
                    </div>
                    <div class="comment-form">
                        <h4>{{ t('l_reply') }}</h4>
                        <form class="form-contact comment_form"
                            action="{{ Auth::guard('web')->user() ? route('comment') : route('login') }}" id="commentForm"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                    <input type="hidden" name="id_blog" value="{{ $blog->id }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="button button-contactForm btn_1 boxed-btn">{{ t('sendMessage') }}</button>
                            </div>
                        </form>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
