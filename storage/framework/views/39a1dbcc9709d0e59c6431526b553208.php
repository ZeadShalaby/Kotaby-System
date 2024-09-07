

<?php $__env->startSection('content'); ?>
    <!--- input Edit --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>
    <!--- tape top --->
    <?php $__env->startComponent('components.section-tape', ['title' => $title]); ?>
    <?php echo $__env->renderComponent(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">


    <?php $__env->startComponent('components.card-department', ['departments' => $departments]); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Departments/index.blade.php ENDPATH**/ ?>