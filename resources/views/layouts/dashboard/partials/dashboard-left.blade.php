<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('images/img/logo.png') }}" alt="logo" />
            </span>

            <div class="text logo-text">
                <span class="name">{{ Auth::guard('admin')->user()->name }}</span>
                <span class="profession">{{ Auth::guard('admin')->user()->username }}</span>
            </div>
        </div>

        <i class="bx bx-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <!-- Language Switcher with Icons -->
            <div class="ml-auto d-flex align-items-center" style="margin-top: -25px">
                <a href="{{ url('/lang/en') }}" class="nav-link text-dark"
                    style="font-size: 20px; text-decoration: none; color: rgb(211, 214, 216);">
                    <i class="fas fa-globe-americas"></i> <!-- English icon -->
                </a>
                <span class="mx-2">|</span>
                <a href="{{ url('/lang/ar') }}" class="nav-link text-dark"
                    style="font-size: 20px; text-decoration: none; color: rgb(211, 214, 216);">
                    <i class="fas fa-globe"></i> <!-- Arabic icon -->
                </a>
            </div>

            <li class="search-box">
                <i class="bx bx-search icon"></i>
                <input type="text" placeholder="Search..." />
            </li>

            <!-- Rest of the menu -->
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="{{ route('admin.home') }}">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text">@lang('kotaby.home')</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('admin.dep.create') }}">
                        <i class="fas fa-add icon"></i>
                        <span class="text nav-text">@lang('kotaby.add_department')</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('admin.dep.index') }}">
                        <i class="bx bx-bar-chart-alt-2 icon"></i>
                        <span class="text nav-text">@lang('kotaby.departments')</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-bell icon"></i>
                        <span class="text nav-text">@lang('kotaby.notifications')</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('admin.report.index') }}">
                        <i class="fas fa-book -alt icon" style="font-size: 17px"></i>
                        <span class="text nav-text">@lang('kotaby.report_books')</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('admin.report.review.index') }}">
                        <i class="fas fa-comment-alt icon" style="font-size: 17px;"></i>
                        <span class="text nav-text">@lang('kotaby.report_reviews')</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('admin.report.author.index') }}">
                        <i class="fas fa-user-alt icon" style="font-size: 17px;"></i>
                        <span class="text nav-text">@lang('kotaby.report_authors')</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('admin.dep.trash') }}">
                        <i class="bx bx-trash icon"></i>
                        <span class="text nav-text">@lang('kotaby.trash')</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li>
                <a href="{{ route('admin.logout') }}">
                    <i class="bx bx-log-out icon"></i>
                    <span class="text nav-text">@lang('kotaby.logout')</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class="bx bx-moon icon moon"></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text">@lang('kotaby.dark_mode')</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
