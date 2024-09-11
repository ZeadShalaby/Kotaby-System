
<?php $__env->startSection('content-admin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/report-book.css')); ?>">
    <div class="container">
        <div class="row">
            <!--- book card --->
            <?php if (isset($component)) { $__componentOriginal0b7f704b3223ba1104810229e3edef71 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b7f704b3223ba1104810229e3edef71 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-author','data' => ['authors' => $authors,'status' => true,'report' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['authors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($authors),'status' => true,'report' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b7f704b3223ba1104810229e3edef71)): ?>
<?php $attributes = $__attributesOriginal0b7f704b3223ba1104810229e3edef71; ?>
<?php unset($__attributesOriginal0b7f704b3223ba1104810229e3edef71); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b7f704b3223ba1104810229e3edef71)): ?>
<?php $component = $__componentOriginal0b7f704b3223ba1104810229e3edef71; ?>
<?php unset($__componentOriginal0b7f704b3223ba1104810229e3edef71); ?>
<?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Users/report.blade.php ENDPATH**/ ?>