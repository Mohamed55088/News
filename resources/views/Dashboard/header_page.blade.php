<header class="main-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>

        <span class="page-title">{{ $title_page }}</span>

        <div class="navbar-right ">

            <!-- search form -->
            <div class="search-form">
                <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                        <input type="text" autocomplete="off" name="query" id="search-input" class="form-control"
                            placeholder="Search..." />
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
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="{{ asset('build/assets/newsPage/images/AdobeStock_665610143_Preview.jpeg') }}"
                            class="user-image rounded-circle" alt="User Image" width="40px" height="40px" />
                        <span class="d-none d-lg-inline-block">{{ Auth::user()->name ?? null }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-link-item" href="user-profile.html">
                                <i class="mdi mdi-account-outline"></i>
                                <span class="nav-text">My Profile</span>
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
                            <a class="dropdown-link-item" href="{{ route('dashboard.logout') }}"> <i
                                    class="mdi mdi-logout"></i> Log
                                Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


</header>
