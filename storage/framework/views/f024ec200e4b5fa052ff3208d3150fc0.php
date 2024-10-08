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
            <!-- Language Switcher with Icons -->
            <div class="ml-auto d-flex align-items-center" style="margin-top: -25px">
                <a href="<?php echo e(url('/lang/en')); ?>" class="nav-link text-dark"
                    style="font-size: 20px; text-decoration: none; color: rgb(211, 214, 216);">
                    <i class="fas fa-globe-americas"></i> <!-- English icon -->
                </a>
                <span class="mx-2">|</span>
                <a href="<?php echo e(url('/lang/ar')); ?>" class="nav-link text-dark"
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
                    <a href="<?php echo e(route('admin.home')); ?>">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.home'); ?></span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="<?php echo e(route('admin.dep.create')); ?>">
                        <i class="fas fa-add icon"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.add_department'); ?></span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="<?php echo e(route('admin.dep.index')); ?>">
                        <i class="bx bx-bar-chart-alt-2 icon"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.departments'); ?></span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-bell icon"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.notifications'); ?></span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="<?php echo e(route('admin.report.index')); ?>">
                        <i class="fas fa-book -alt icon" style="font-size: 17px"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.report_books'); ?></span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo e(route('admin.report.review.index')); ?>">
                        <i class="fas fa-comment-alt icon" style="font-size: 17px;"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.report_reviews'); ?></span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo e(route('admin.report.author.index')); ?>">
                        <i class="fas fa-user-alt icon" style="font-size: 17px;"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.report_authors'); ?></span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo e(route('admin.dep.trash')); ?>">
                        <i class="bx bx-trash icon"></i>
                        <span class="text nav-text"><?php echo app('translator')->get('kotaby.trash'); ?></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li>
                <a href="<?php echo e(route('admin.logout')); ?>">
                    <i class="bx bx-log-out icon"></i>
                    <span class="text nav-text"><?php echo app('translator')->get('kotaby.logout'); ?></span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class="bx bx-moon icon moon"></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text"><?php echo app('translator')->get('kotaby.dark_mode'); ?></span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/layouts/dashboard/partials/dashboard-left.blade.php ENDPATH**/ ?>