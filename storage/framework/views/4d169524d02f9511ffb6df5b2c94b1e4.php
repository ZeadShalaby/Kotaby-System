
<?php $__env->startSection('content-admin'); ?>
    <!----- content ----->

    <style>
        .container-card {
            margin-top: 20px;
            margin-bottom: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Row styling */
        .row {
            margin-bottom: 30px;
            /* Space between rows */
        }
    </style>
    <!--- tape top --->
    <?php $__env->startComponent('components.section-tape', ['title' => $title]); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="container">
        <div class="row">
            <?php $__env->startComponent('components.card-department', ['departments' => $departments]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Departments/index.blade.php ENDPATH**/ ?>