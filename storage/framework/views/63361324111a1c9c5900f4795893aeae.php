
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/card-profile.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">

    <!--- input Edit --->
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-tape','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-tape'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-end">
                <h2 class="mb-4 text-center d-block"><?php echo app('translator')->get('kotaby.profile'); ?></h2>
            </div>
            <?php if (isset($component)) { $__componentOriginalf6b8ac55b829bb8a077e31beb5108922 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-profile','data' => ['titles' => __('kotaby.downloads'),'method' => Auth::user()->getCountDownload(),'icon' => 'download','title' => __('kotaby.downloads')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.downloads')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->getCountDownload()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('download'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.downloads'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $attributes = $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $component = $__componentOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6b8ac55b829bb8a077e31beb5108922 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-profile','data' => ['titles' => __('kotaby.readings'),'method' => Auth::user()->getCountView(),'icon' => 'book','title' => __('kotaby.readings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.readings')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->getCountView()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('book'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.readings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $attributes = $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $component = $__componentOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6b8ac55b829bb8a077e31beb5108922 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-profile','data' => ['route' => 'reviews.index','titles' => __('kotaby.reviewses'),'method' => Auth::user()->getCountMyReview(),'icon' => 'star','title' => __('kotaby.reviewses')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('reviews.index'),'titles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.reviewses')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->getCountMyReview()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('star'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.reviewses'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $attributes = $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $component = $__componentOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6b8ac55b829bb8a077e31beb5108922 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-profile','data' => ['route' => 'books.index','titles' => __('kotaby.my books'),'method' => Auth::user()->getBookssCount(),'icon' => 'book','title' => __('kotaby.mybooks')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('books.index'),'titles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.my books')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->getBookssCount()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('book'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.mybooks'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $attributes = $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $component = $__componentOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6b8ac55b829bb8a077e31beb5108922 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-profile','data' => ['route' => 'favourite.index','titles' => __('kotaby.favourites'),'method' => Auth::user()->getCountFav(),'icon' => 'bookmark','title' => __('kotaby.favourites')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('favourite.index'),'titles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.favourites')),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->getCountFav()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('bookmark'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('kotaby.favourites'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $attributes = $__attributesOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__attributesOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922)): ?>
<?php $component = $__componentOriginalf6b8ac55b829bb8a077e31beb5108922; ?>
<?php unset($__componentOriginalf6b8ac55b829bb8a077e31beb5108922); ?>
<?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/profile.blade.php ENDPATH**/ ?>