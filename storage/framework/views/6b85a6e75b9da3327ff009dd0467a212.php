
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">


    <!--- tape section --->
    <?php $__env->startComponent('components.section-tape', ['title' => $title]); ?>
    <?php echo $__env->renderComponent(); ?>
    <!--- setting users --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container">
        <div class="row">
            <!--- card books --->
            <?php $__env->startComponent('components.card-book', ['books' => $books]); ?>
            <?php echo $__env->renderComponent(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/index.blade.php ENDPATH**/ ?>