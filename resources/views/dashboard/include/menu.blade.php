    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow expanded" data-scroll-to-active="true"
        style="touch-action: none; -webkit-user-select: none; -webkit-user-drag: none;">
        <div class="navbar-header expanded">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">{{config('app.name')}}</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="icon-x d-block d-xl-none font-medium-4 primary toggle-icon feather icon-disc"></i><i
                            class="toggle-icon icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary feather"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom" style="display: block;"></div>
        <div class="main-menu-content ps ps--active-y">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item has-sub"><a href="index.html"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span><span
                            class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class=" nav-item"><a href="{{ route('roles.index') }}"><i class="feather icon-mail"></i><span
                            class="menu-title" data-i18n="Email">Roles</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('permissions.index') }}"><i class="feather icon-message-square"></i><span
                            class="menu-title" data-i18n="Chat">Permissions</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('posts.index') }}"><i class="feather icon-check-square"></i><span
                            class="menu-title" data-i18n="Todo">Posts</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('categories.index') }}"><i class="feather icon-calendar"></i><span
                            class="menu-title" data-i18n="Calender">Category</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('polls.index') }}"><i class="feather icon-check-square"></i><span
                    class="menu-title" data-i18n="Todo">Poll</span></a>
        </li>
        </div>
    </div>
    <!-- END: Main Menu-->
