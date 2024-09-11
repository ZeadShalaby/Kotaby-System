

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
    <link rel="stylesheet" href="<?php echo e(asset('css/author-card.css')); ?>">



    <div class="container my-5">
        <div class="row">

            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <a href="<?php echo e(route('users.show', $author->id)); ?>" style="text-decoration: none">
                        <div class="profile-card shadow-sm">
                            <img src="<?php echo e(asset($author->media_one->media)); ?>" alt="<?php echo e($author->name); ?>">
                            <h5><?php echo e($author->username); ?></h5>

                            <p class="rating">
                                
                                <?php for($i = 1; $i <= $author->stars['fullStars']; $i++): ?>
                                    <?php if($i <= 5): ?>
                                        <i class="fas fa-star filled"></i>
                                    <?php else: ?>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                
                                <?php if($author->stars['hasHalfStar']): ?>
                                    <i class="fas fa-star-half-alt half-filled"></i>
                                <?php endif; ?>

                                
                                <?php for($i = 1; $i <= $author->stars['emptyStars']; $i++): ?>
                                    <img src="<?php echo e(asset('images/img/empty-star.png')); ?>" class="empty-star" alt="Empty Star">
                                <?php endfor; ?>

                                (<?php echo e(number_format($author->getAverageRating(), 1)); ?> تقييم)
                            </p>
                            <p class="book-count">
                                <i class="fas fa-book"></i> <?php echo e($author->getBookssCount($author->id)); ?> كتاب
                            </p>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/authors-card.blade.php ENDPATH**/ ?>