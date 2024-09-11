
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">


    <!--- tape section --->

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
    <!--- setting users --->
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

    <div class="container">
        <div class="row">
            <!--- card books --->
            <?php if (isset($component)) { $__componentOriginal588a326379da9ed58af5b3e0faf5a90e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal588a326379da9ed58af5b3e0faf5a90e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-book','data' => ['books' => $books]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-book'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['books' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($books)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal588a326379da9ed58af5b3e0faf5a90e)): ?>
<?php $attributes = $__attributesOriginal588a326379da9ed58af5b3e0faf5a90e; ?>
<?php unset($__attributesOriginal588a326379da9ed58af5b3e0faf5a90e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal588a326379da9ed58af5b3e0faf5a90e)): ?>
<?php $component = $__componentOriginal588a326379da9ed58af5b3e0faf5a90e; ?>
<?php unset($__componentOriginal588a326379da9ed58af5b3e0faf5a90e); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/common.blade.php ENDPATH**/ ?>