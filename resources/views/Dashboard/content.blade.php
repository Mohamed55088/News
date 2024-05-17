@extends('Dashboard.master')
@section('content')
    <!-- ====================================
                         @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach                                                                                                                                        ===================================== -->
    <div class="page-wrapper">
        <!-- Header -->
        @include('Dashboard.header_page', ['title_page' => 'Email Compose'])
        <!-- ====================================
                            ——— CONTENT WRAPPE
                            ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <!-- ====================================
                                                                                                                                                                           ——— EMAIL WRAPPER
                                                                                                                                                                ===================================== -->
                <div class="email-wrapper rounded border bg-white">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-4 col-xl-3 col-xxl-2">
                            <div class="email-left-column email-options p-4 p-xl-5">

                                <ul class="pb-2">
                                    <li class="d-block active mb-4">
                                        <a href="email-inbox.html">
                                            <i class="mdi mdi-download mr-2"></i> Inbox</a>
                                        <span class="badge badge-secondary">{{ $blog }}</span>
                                    </li>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9 col-xxl-10">
                            <div class="email-right-column  email-body p-4 p-xl-5">
                                <div class="email-body-head mb-5 ">
                                    <h4 class="text-dark">New Message</h4>
                                </div>
                                <form class="email-compose" action="{{ route('dashboard.content') }}" method="post"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    EN :
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleEmail" placeholder="title: "
                                            name="title_en">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleSubject"
                                            placeholder="Brief explanation " name="Brief_explanation_en">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="plain-textarea" rows="10" style="width: 100%" name="long_explaination_en"></textarea>
                                    </div>

                                    AR :
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleEmail" placeholder="title: "
                                            name="title_ar">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleSubject"
                                            placeholder="Brief explanation " name="Brief_explanation_ar">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="plain-textarea" rows="10" style="width: 100%" name="long_explaination_ar"></textarea>
                                    </div>

                                    ER :
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleEmail" placeholder="title: "
                                            name="title_er">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleSubject"
                                            placeholder="Brief explanation " name="Brief_explanation_er">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="plain-textarea" rows="10" style="width: 100%" name="long_explaination_er"></textarea>
                                    </div>

                                    <div class="email-attachment mt-4 mb-3">
                                        <i class="fa fa-paperclip fa-1x"></i>
                                        <span class="text-dark d-inline-block font-weight-medium pl-2">Attachment</span>
                                        <input type="file" accept="image/*" name="photo" id="photoInput">
                                    </div>

                                    <button class="btn btn-primary btn-pill mb-5" type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
