
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-show.css')); ?>">
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


    <link rel="stylesheet" href="<?php echo e(asset('css/author-card.css')); ?>">



    <div class="container my-4" style=" text-align: right; ">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-3 text-center"><img src="<?php echo e(asset($authors->media_one->media)); ?>"
                        class="img-fluid rounded-circle mt-3" alt="Profile Picture"></div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title" style="padding: 15px"> <?php echo e($authors->username); ?></h5>
                        <p class="card-text"><?php echo app('translator')->get('kotaby.info'); ?>
                            <?php echo e($authors->about); ?> <a href="#" class="text-decoration-none"> <?php echo app('translator')->get('kotaby.read_more'); ?></a></p>
                        <div class="rating d-flex align-items-center"><span class="stars me-2"><i <p class="rating">
                                    <p class="stars" style="color: #fff200; font-size: 29px;">
                                        <?php for($i = 1; $i <= $authors->stars['fullStars']; $i++): ?>
                                            <?php if($i <= 5): ?>
                                                &#9733;
                                            <?php else: ?>
                                            <?php endif; ?>
                                            <!-- Full Star -->
                                        <?php endfor; ?>

                                        <?php if($authors->stars['hasHalfStar']): ?>
                                            &#9733; <!-- Half Star (can be styled differently if needed) -->
                                        <?php endif; ?>

                                        <?php for($i = 1; $i <= $authors->stars['emptyStars']; $i++): ?>
                                            &#9734; <!-- Empty Star -->
                                        <?php endfor; ?>

                                        <span class="span-author"> (<?php echo e($authors->getCountStar()); ?>

                                            <?php echo app('translator')->get('kotaby.reviews'); ?>)</span>
                                        <span class="span-author"> (<?php echo e($authors->getCountView()); ?> <?php echo app('translator')->get('kotaby.views'); ?>)</span>

                                    </p>
                                    <div class="btn-container d-flex justify-content-center mt-3"
                                        style="margin-right: 200px">

                                        <a href="#" class="btn" style="border: 2px solid #1B3764"
                                            data-bs-toggle="modal" data-bs-target="#rateModals"><i class="fas fa-warning"
                                                style="color: #1B3764; margin-left: 2px"></i>
                                            <?php echo app('translator')->get('kotaby.report'); ?></a>

                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Author report --->
    <?php if (isset($component)) { $__componentOriginal865fab65a95dcf01b26ce3ed0810ddf5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal865fab65a95dcf01b26ce3ed0810ddf5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.report-author-commit','data' => ['userid' => $authors->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('report-author-commit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['userid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($authors->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal865fab65a95dcf01b26ce3ed0810ddf5)): ?>
<?php $attributes = $__attributesOriginal865fab65a95dcf01b26ce3ed0810ddf5; ?>
<?php unset($__attributesOriginal865fab65a95dcf01b26ce3ed0810ddf5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal865fab65a95dcf01b26ce3ed0810ddf5)): ?>
<?php $component = $__componentOriginal865fab65a95dcf01b26ce3ed0810ddf5; ?>
<?php unset($__componentOriginal865fab65a95dcf01b26ce3ed0810ddf5); ?>
<?php endif; ?>


    <!--- tape top --->

    <?php if (isset($component)) { $__componentOriginalb2713e09024d7527992be0596d92df19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2713e09024d7527992be0596d92df19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-tape','data' => ['title' => ' كتب > ' . $authors->username]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-tape'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(' كتب > ' . $authors->username)]); ?>
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

    <!---- books card ---->
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/show.blade.php ENDPATH**/ ?>