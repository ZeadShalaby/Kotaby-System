<nav class="navbar navbar-expand-lg">
    <div class="container" id="navcontainer">
        <a class="navbar-brand mx-2" href="<?php echo e(route('homeindex')); ?>">
            <span class="logo"><?php echo app('translator')->get('kotaby.kotaby'); ?></span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex flex-column" id="navbarNav">
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <input id="search" class="form-control ml-sm-2" type="search" placeholder="<?php echo app('translator')->get('kotaby.search book'); ?>"
                        aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </form>
        </div>

        <?php if(!Auth::check()): ?>
            <a href="<?php echo e(route('users.loginindex')); ?>" id="btn-enter"
                class="btn btn-primary my-2 my-sm-0 ml-2"><?php echo app('translator')->get('kotaby.sign in'); ?></a>
            <!-- Added ml-2 for spacing -->
            <a href="<?php echo e(route('users.registindex')); ?>" class="btn btn-warning my-2 my-sm-0"><?php echo app('translator')->get('kotaby.sign up'); ?></a>
        <?php else: ?>
            <button type="button" id="btn-enter" class="btn btn-primary my-2 my-sm-0 ml-2" data-toggle="modal"
                data-target="#sidebarModal">
                <?php echo app('translator')->get('kotaby.settings'); ?>
            </button>
            <a href="<?php echo e(route('users.logout')); ?>" class="btn btn-warning my-2 my-sm-0"> <?php echo app('translator')->get('kotaby.sign out'); ?>
            </a>
            <!-- Button to trigger modal -->
        <?php endif; ?>

    </div>

    <div class="ml-auto d-flex align-items-center" style="font-size: 15px;font-weight: bold">
        <a href="<?php echo e(url('/lang/en')); ?>" class="nav-link text-dark"><?php echo app('translator')->get('kotaby.english'); ?></a>
        <span class="mx-2">|</span>
        <a href="<?php echo e(url('/lang/ar')); ?>" class="nav-link text-dark"><?php echo app('translator')->get('kotaby.arabic'); ?></a>
    </div>
</nav>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>