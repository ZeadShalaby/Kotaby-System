<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="<?php echo e(asset('images/img/logo.png')); ?>" alt="logo" />
            </span>

            <div class="text logo-text">
                <span class="name"><?php echo e(Auth::guard('admin')->user()->name); ?></span>
                <span class="profession"><?php echo e(Auth::guard('admin')->user()->username); ?></span>
            </div>
        </div>

        <i class="bx bx-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class="bx bx-search icon"></i>
                <input type="text" placeholder="Search..." />
            </li>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-bar-chart-alt-2 icon"></i>
                        <span class="text nav-text">Revenue</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-bell icon"></i>
                        <span class="text nav-text">Notifications</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-pie-chart-alt icon"></i>
                        <span class="text nav-text">Analytics</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-heart icon"></i>
                        <span class="text nav-text">Likes</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-wallet icon"></i>
                        <span class="text nav-text">Wallets</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="<?php echo e(route('admin.logout')); ?>">
                    <i class="bx bx-log-out icon"></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class="bx bx-moon icon moon"></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
<?php /**PATH D:\my projects\company task\hash-studio\Library-System\resources\views/layouts/dashboard/partials/dashboard-left.blade.php ENDPATH**/ ?>