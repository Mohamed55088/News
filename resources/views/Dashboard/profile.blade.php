@extends('Dashboard.master')
@section('content')
    <!-- ====================================
                 ——— PAGE WRAPPER
        ===================================== -->
    <div class="page-wrapper">

        <!-- Header -->
        <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>

                <span class="page-title">user profile settings</span>

                <div class="navbar-right ">

                    <!-- search form -->
                    <div class="search-form">
                        <form action="index.html" method="get">
                            <div class="input-group input-group-sm" id="input-group-search">
                                <input type="text" autocomplete="off" name="query" id="search-input"
                                    class="form-control" placeholder="Search..." />
                                <div class="input-group-append">
                                    <button class="btn" type="button">/</button>
                                </div>
                            </div>
                        </form>
                        <ul class="dropdown-menu dropdown-menu-search">

                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Morbi leo risus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Vestibulum at eros</a>
                            </li>

                        </ul>

                    </div>

                    <ul class="nav navbar-nav">
                        <!-- Offcanvas -->
                        <li class="custom-dropdown">
                            <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off"
                                href="javascript:">
                                <i class="mdi mdi-contacts icon"></i>
                            </a>
                        </li>
                        <li class="custom-dropdown">
                            <button class="notify-toggler custom-dropdown-toggler">
                                <i class="mdi mdi-bell-outline icon"></i>
                                <span class="badge badge-xs rounded-circle">21</span>
                            </button>
                            <div class="dropdown-notify">

                                <header>
                                    <div class="nav nav-underline" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all"
                                            role="tab" aria-controls="nav-home" aria-selected="true">All (5)</a>
                                        <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message"
                                            role="tab" aria-controls="nav-profile" aria-selected="false">Msgs (4)</a>
                                        <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other"
                                            role="tab" aria-controls="nav-contact" aria-selected="false">Others (3)</a>
                                    </div>
                                </header>

                                <div class="" data-simplebar style="height: 325px;">
                                    <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade show active" id="all" role="tabpanel"
                                            aria-labelledby="all-tabs">

                                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                                                <div class="media-sm-wrapper">
                                                    <a href="user-profile.html">
                                                        <img src="images/user/user-sm-02.jpg" alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">John Doe</span>
                                                        <span class="discribe">Extremity sweetness difficult behaviour he
                                                            of. On disposal of as landlord horrible. Afraid at highly months
                                                            do things on at.</span>
                                                        <span class="time">
                                                            <time>Just now</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 bg-light mb-0">
                                                <div class="media-sm-wrapper bg-primary">
                                                    <a href="user-profile.html">
                                                        <i class="mdi mdi-calendar-check-outline"></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">New event added</span>
                                                        <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                        <span class="time">
                                                            <time>10 min ago...</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper">
                                                    <a href="user-profile.html">
                                                        <img src="images/user/user-sm-03.jpg" alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Sagge Hudson</span>
                                                        <span class="discribe">On disposal of as landlord Afraid at highly
                                                            months do things on at.</span>
                                                        <span class="time">
                                                            <time>1 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper bg-info-dark">
                                                    <a href="user-profile.html">
                                                        <i class="mdi mdi-account-multiple-check"></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Add request</span>
                                                        <span class="discribe">Add Dany Jones as your contact.</span>
                                                        <div class="buttons">
                                                            <a href="#"
                                                                class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                            <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                        </div>
                                                        <span class="time">
                                                            <time>6 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper bg-info">
                                                    <a href="user-profile.html">
                                                        <i class="mdi mdi-playlist-check"></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Task complete</span>
                                                        <span class="discribe">Afraid at highly months do things on
                                                            at.</span>
                                                        <span class="time">
                                                            <time>1 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="message" role="tabpanel"
                                            aria-labelledby="message-tab">

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper">
                                                    <a href="user-profile.html">
                                                        <img src="images/user/user-sm-01.jpg" alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Selena Wagner</span>
                                                        <span class="discribe">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit.</span>
                                                        <span class="time">
                                                            <time>15 min ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper">
                                                    <a href="user-profile.html">
                                                        <img src="images/user/user-sm-03.jpg" alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Sagge Hudson</span>
                                                        <span class="discribe">On disposal of as landlord Afraid at highly
                                                            months do things on at.</span>
                                                        <span class="time">
                                                            <time>1 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                                                <div class="media-sm-wrapper">
                                                    <a href="user-profile.html">
                                                        <img src="images/user/user-sm-02.jpg" alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">John Doe</span>
                                                        <span class="discribe">Extremity sweetness difficult behaviour he
                                                            of. On disposal of as landlord horrible. Afraid
                                                            at highly months do things on at.</span>
                                                        <span class="time">
                                                            <time>Just now</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper">
                                                    <a href="user-profile.html">
                                                        <img src="images/user/user-sm-04.jpg" alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Albrecht Straub</span>
                                                        <span class="discribe"> Beatae quia natus assumenda laboriosam,
                                                            nisi perferendis aliquid consectetur expedita non
                                                            tenetur.</span>
                                                        <span class="time">
                                                            <time>Just now</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="other" role="tabpanel"
                                            aria-labelledby="contact-tab">

                                            <div class="media media-sm p-4 bg-light mb-0">
                                                <div class="media-sm-wrapper bg-primary">
                                                    <a href="user-profile.html">
                                                        <i class="mdi mdi-calendar-check-outline"></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">New event added</span>
                                                        <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                        <span class="time">
                                                            <time>10 min ago...</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper bg-info-dark">
                                                    <a href="user-profile.html">
                                                        <i class="mdi mdi-account-multiple-check"></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Add request</span>
                                                        <span class="discribe">Add Dany Jones as your contact.</span>
                                                        <div class="buttons">
                                                            <a href="#"
                                                                class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                            <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                        </div>
                                                        <span class="time">
                                                            <time>6 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media media-sm p-4 mb-0">
                                                <div class="media-sm-wrapper bg-info">
                                                    <a href="user-profile.html">
                                                        <i class="mdi mdi-playlist-check"></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="user-profile.html">
                                                        <span class="title mb-0">Task complete</span>
                                                        <span class="discribe">Afraid at highly months do things on
                                                            at.</span>
                                                        <span class="time">
                                                            <time>1 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <footer class="border-top dropdown-notify-footer">
                                    <div class="d-flex justify-content-between align-items-center py-2 px-4">
                                        <span>Last updated 3 min ago</span>
                                        <a id="refress-button" href="javascript:"
                                            class="btn mdi mdi-cached btn-refress"></a>
                                    </div>
                                </footer>
                            </div>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle"
                                    alt="User Image" />
                                <span class="d-none d-lg-inline-block">John Doe</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a class="dropdown-link-item" href="user-profile.html">
                                        <i class="mdi mdi-account-outline"></i>
                                        <span class="nav-text">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-link-item" href="email-inbox.html">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="nav-text">Message</span>
                                        <span class="badge badge-pill badge-primary">24</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-link-item" href="user-activities.html">
                                        <i class="mdi mdi-diamond-stone"></i>
                                        <span class="nav-text">Activitise</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-link-item" href="user-account-settings.html">
                                        <i class="mdi mdi-settings"></i>
                                        <span class="nav-text">Account Setting</span>
                                    </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log
                                        Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- ====================================
                              ——— CONTENT WRAPPER
                              ===================================== -->
        <div class="content-wrapper">
            <div class="content"><!-- Card Profile -->
                <div class="card card-default card-profile">

                    <div class="card-header-bg" style="background-image:url(assets/img/user/user-bg-01.jpg)"></div>

                    <div class="card-body card-profile-body">

                        <div class="profile-avata">
                            <img class="rounded-circle" src="images/user/user-md-01.jpg" alt="Avata Image">
                            <a class="h5 d-block mt-3 mb-2" href="#">Albrecht Straub</a>
                            <a class="d-block text-color" href="#">albercht@example.com</a>
                        </div>

                        <ul class="nav nav-profile-follow">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">1503</span>
                                    <span class="text-color d-block">Friends</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">2905</span>
                                    <span class="text-color d-block">Followers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="h5 d-block">1200</span>
                                    <span class="text-color d-block">Following</span>
                                </a>
                            </li>
                        </ul>
                        <div class="profile-button">
                            <a class="btn btn-primary btn-pill" href="user-planing-settings.html">Upgrade Plan</a>
                        </div>
                    </div>
                    <div class="card-footer card-profile-footer">
                        <ul class="nav nav-border-top justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="user-profile.html">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user-activities.html">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="user-profile-settings.html">Settings</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <!--  -->
                        <div class="col-xl-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2 class="mb-5">Profile Settings</h2>
                                </div>
                                <div class="card-body">
                                    <div class="media media-sm">
                                        <div class="media-sm-wrapper">
                                            <img src="images/user/user-sm-01.jpg" alt="User Image">
                                        </div>
                                        <div class="media-body">
                                            <span class="title h3">The stars are twinkling.</span>
                                            <p>Click the current avatar to change your photo.</p>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Cover
                                                Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" class="custom-file-input" id="coverImage"
                                                        required>
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                                <span class="d-block ">Upload a new cover image, JPG 1200x300</span>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-6">
                                            <label for="occupation"
                                                class="col-sm-4 col-lg-2 col-form-label">Occupation</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <input type="text" class="form-control" id="occupation">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-6">
                                            <label for="com-name" class="col-sm-4 col-lg-2 col-form-label">Company
                                                name</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <input type="text" class="form-control" id="com-name">
                                                <span class="d-block ">Upload a new cover image, JPG 1200x300</span>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                                Profile</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="card card-default">

                                <div class="card-header">
                                    <h2>Social Networks</h2>

                                </div>

                                <div class="card-body">
                                    <div class="media media-sm">
                                        <div class="media-body">
                                            <div class="row">

                                                <div class="col-lg-6">

                                                    <div class="d-flex mb-5">
                                                        <button type="button" class="btn btn-icon facebook mr-2">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </button>
                                                        <input type="text" class="form-control"
                                                            placeholder="Facebook username">
                                                    </div>

                                                    <div class="d-flex mb-5">
                                                        <button type="button" class="btn btn-icon google-plus mr-2">
                                                            <i class="mdi mdi-google-plus"></i>
                                                        </button>
                                                        <input type="text" class="form-control"
                                                            placeholder="Google plus username">
                                                    </div>

                                                    <div class="d-flex mb-5">
                                                        <button type="button" class="btn btn-icon vimeo mr-2">
                                                            <i class="mdi mdi-vimeo"></i>
                                                        </button>
                                                        <input type="text" class="form-control"
                                                            placeholder="Vimeo username">
                                                    </div>

                                                </div>

                                                <div class="col-lg-6">

                                                    <div class="d-flex mb-5">
                                                        <button type="button" class="btn btn-icon twitter mr-2">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </button>
                                                        <input type="text" class="form-control"
                                                            placeholder="Twitter username">
                                                    </div>

                                                    <div class="d-flex mb-5">
                                                        <button type="button" class="btn btn-icon linkedin mr-2">
                                                            <i class="mdi mdi-linkedin"></i>
                                                        </button>
                                                        <input type="text" class="form-control"
                                                            placeholder="Linkedin username">
                                                    </div>

                                                    <div class="d-flex mb-5">
                                                        <button type="button" class="btn btn-icon pinterest mr-2">
                                                            <i class="mdi mdi-pinterest"></i>
                                                        </button>
                                                        <input type="text" class="form-control"
                                                            placeholder="Pinterest username">
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>

                    </div>


                </div>

            </div>

            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a
                            class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>
@endsection
