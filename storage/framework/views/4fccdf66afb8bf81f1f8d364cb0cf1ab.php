
<?php $__env->startSection('content-admin'); ?>
    <!----- content ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/add-dep.css')); ?>">
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="<?php echo e(asset('images/img/img-login.svg')); ?>" alt="" />
            </div>
            <div class="login__forms">
                <form action="<?php echo e(route('admin.dep.store')); ?>" method="POST" class="login__registre" id="form"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <!--- dep add --->
                    <?php if (isset($component)) { $__componentOriginal83ff88799ad0baad98ad4b65fc9477cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal83ff88799ad0baad98ad4b65fc9477cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.add-dep','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('add-dep'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal83ff88799ad0baad98ad4b65fc9477cd)): ?>
<?php $attributes = $__attributesOriginal83ff88799ad0baad98ad4b65fc9477cd; ?>
<?php unset($__attributesOriginal83ff88799ad0baad98ad4b65fc9477cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83ff88799ad0baad98ad4b65fc9477cd)): ?>
<?php $component = $__componentOriginal83ff88799ad0baad98ad4b65fc9477cd; ?>
<?php unset($__componentOriginal83ff88799ad0baad98ad4b65fc9477cd); ?>
<?php endif; ?>


                    <button class="login__button" type="submit" style="width: 100%"><?php echo app('translator')->get('kotaby.save'); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Departments/store.blade.php ENDPATH**/ ?>