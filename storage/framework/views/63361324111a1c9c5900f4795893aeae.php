
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/card-profile.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">

    <!--- input Edit --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>
    <!--- tape top --->
    <?php $__env->startComponent('components.section-tape'); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-end">
                <h2 class="mb-4 text-center d-block">الصفحة الشخصية</h2>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">تحميلات</h5>
                        <p class="card-text">0 تحميلات <i class="fas fa-download"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">مراجعاتي</h5>
                        <p class="card-text">0 مراجعة <i class="fas fa-book"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">مكتبتي</h5>
                        <p class="card-text">1 كتاب <i class="fas fa-book"></i></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">قراءات</h5>
                        <p class="card-text">0 قراءات <i class="fas fa-book"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/profile.blade.php ENDPATH**/ ?>