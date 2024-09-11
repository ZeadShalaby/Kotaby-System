
<?php $__env->startSection('content-admin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/report-book.css')); ?>">
    <div class="container">
        <div class="row">
            <?php $__env->startComponent('components.admin-book-card', ['books' => $books]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Books/book-dep.blade.php ENDPATH**/ ?>