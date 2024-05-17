<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <img src="images/logo.png" alt="Mono">
                <span class="brand-name">UTOP</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="{{ Request::routeIs('dashboard.home') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{ route('dashboard.home') }}">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Business Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('dashboard.content') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{ route('dashboard.content') }}">
                        <i class="mdi mdi-playlist-edit"></i>
                        <span class="nav-text">Contents</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('dashboard.team') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{ route('dashboard.team') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Team</span>
                    </a>
                </li>
                <li>
                    <a class="sidenav-item-link" href="{{ route('dashboard.calander') }}">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="nav-text">Calendar</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                                class="mdi mdi-settings"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                class="mdi mdi-chat-processing"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
