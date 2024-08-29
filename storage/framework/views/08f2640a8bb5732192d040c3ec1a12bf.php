<nav class="navbar navbar-expand-lg ">


    <div class="container" id="navcontainer">
        <a class="navbar-brand" class="mx-2" href="<?php echo e(route('homeindex')); ?>"><span class="logo">كتبي</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-column" id="navbarNav">

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <input id="search" class="form-control ml-sm-2" type="search" placeholder="ابحث عن كتابك"
                        aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </form>




        </div>
        <?php if(!Auth::user() != null): ?>
            <a href="<?php echo e(route('users.loginindex')); ?>" id="btn-enter" class="btn btn-primary my-2 my-sm-0 ml-2">دخول</a>
            <!-- Added ml-2 for spacing -->
            <a href="<?php echo e(route('users.registindex')); ?>" class="btn btn-warning my-2 my-sm-0">حساب جديد</a>
        <?php else: ?>
            <button type="button" id="btn-enter" class="btn btn-primary my-2 my-sm-0 ml-2" data-toggle="modal"
                data-target="#sidebarModal">
                Setting
            </button>
            <a href="<?php echo e(route('users.logout')); ?>" class="btn btn-warning my-2 my-sm-0"> تسجيل الخروج</a>
            <!-- Button to trigger modal -->
        <?php endif; ?>
    </div>

</nav>
<?php /**PATH D:\my projects\company task\hash-studio\Library-System\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>