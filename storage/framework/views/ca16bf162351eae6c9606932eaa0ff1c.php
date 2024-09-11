

<?php $__env->startSection('content'); ?>
    <!--- setting  --->
    <?php if (isset($component)) { $__componentOriginalfd56616f4a6dab860ae516f8f1ac7bb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd56616f4a6dab860ae516f8f1ac7bb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.setting-right','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd56616f4a6dab860ae516f8f1ac7bb1)): ?>
<?php $attributes = $__attributesOriginalfd56616f4a6dab860ae516f8f1ac7bb1; ?>
<?php unset($__attributesOriginalfd56616f4a6dab860ae516f8f1ac7bb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd56616f4a6dab860ae516f8f1ac7bb1)): ?>
<?php $component = $__componentOriginalfd56616f4a6dab860ae516f8f1ac7bb1; ?>
<?php unset($__componentOriginalfd56616f4a6dab860ae516f8f1ac7bb1); ?>
<?php endif; ?>

    <!--- tape top --->
    <?php if (isset($component)) { $__componentOriginalb2713e09024d7527992be0596d92df19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2713e09024d7527992be0596d92df19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-tape','data' => ['title' => $title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-tape'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb2713e09024d7527992be0596d92df19)): ?>
<?php $attributes = $__attributesOriginalb2713e09024d7527992be0596d92df19; ?>
<?php unset($__attributesOriginalb2713e09024d7527992be0596d92df19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb2713e09024d7527992be0596d92df19)): ?>
<?php $component = $__componentOriginalb2713e09024d7527992be0596d92df19; ?>
<?php unset($__componentOriginalb2713e09024d7527992be0596d92df19); ?>
<?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">
    <!--- author card --->
    <?php if (isset($component)) { $__componentOriginal0b7f704b3223ba1104810229e3edef71 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b7f704b3223ba1104810229e3edef71 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-author','data' => ['authors' => $authors]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['authors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($authors)]); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/authors-card.blade.php ENDPATH**/ ?>