
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">

    <!--- setting users --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>

    <object data="<?php echo e(asset('images/books/pdf/pdfs.pdf')); ?>" type="application/pdf" width="100%" height="600px">
        <p>PDF غير مدعوم على المتصفح الخاص بك. يمكنك <a href="<?php echo e(asset('images/books/pdf/pdf.pdf')); ?>">تحميل الملف هنا</a>.
        </p>
    </object>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/PDF/show-pdf.blade.php ENDPATH**/ ?>