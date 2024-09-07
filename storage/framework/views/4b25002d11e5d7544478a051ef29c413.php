
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/book-show.css')); ?>">

    <!--- tape section --->
    <?php $__env->startComponent('components.section-tape', ['title' => $title]); ?>
    <?php echo $__env->renderComponent(); ?>
    <!--- setting users --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container mt-5">
        <div class="reviews-section">
            <h5 class="reviews-title">التقييمات</h5>


            <?php $__env->startComponent('components.comment', ['reviews' => $reviews]); ?>
            <?php echo $__env->renderComponent(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/my-reviews.blade.php ENDPATH**/ ?>