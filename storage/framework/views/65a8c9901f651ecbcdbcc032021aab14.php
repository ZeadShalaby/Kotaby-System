
<?php $__env->startSection('content-admin'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/book-show.css')); ?>">

    <div class="container mt-5">
        <div class="reviews-section">
            <!--- book card --->
            <?php if (isset($component)) { $__componentOriginalfe4855bb643954c83a0cbd6710da1102 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe4855bb643954c83a0cbd6710da1102 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comment','data' => ['reviews' => $reviews,'status' => true,'report' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['reviews' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reviews),'status' => true,'report' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe4855bb643954c83a0cbd6710da1102)): ?>
<?php $attributes = $__attributesOriginalfe4855bb643954c83a0cbd6710da1102; ?>
<?php unset($__attributesOriginalfe4855bb643954c83a0cbd6710da1102); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe4855bb643954c83a0cbd6710da1102)): ?>
<?php $component = $__componentOriginalfe4855bb643954c83a0cbd6710da1102; ?>
<?php unset($__componentOriginalfe4855bb643954c83a0cbd6710da1102); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Reviews/report.blade.php ENDPATH**/ ?>