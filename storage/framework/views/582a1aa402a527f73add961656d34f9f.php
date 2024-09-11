
<?php $__env->startSection('content-admin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/report-book.css')); ?>">
    <div class="container">
        <div class="row">
            <!--- book card --->
            <?php if (isset($component)) { $__componentOriginal3dce51f1e307f50b5c413d039ee2a8fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3dce51f1e307f50b5c413d039ee2a8fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-book-card','data' => ['books' => $books,'report' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-book-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['books' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($books),'report' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3dce51f1e307f50b5c413d039ee2a8fc)): ?>
<?php $attributes = $__attributesOriginal3dce51f1e307f50b5c413d039ee2a8fc; ?>
<?php unset($__attributesOriginal3dce51f1e307f50b5c413d039ee2a8fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3dce51f1e307f50b5c413d039ee2a8fc)): ?>
<?php $component = $__componentOriginal3dce51f1e307f50b5c413d039ee2a8fc; ?>
<?php unset($__componentOriginal3dce51f1e307f50b5c413d039ee2a8fc); ?>
<?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Books/report.blade.php ENDPATH**/ ?>