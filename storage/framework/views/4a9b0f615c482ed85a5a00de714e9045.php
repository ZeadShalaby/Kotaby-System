
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/book-show.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--- tape section --->
    <?php if (isset($component)) { $__componentOriginalfd56616f4a6dab860ae516f8f1ac7bb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd56616f4a6dab860ae516f8f1ac7bb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.setting-right','data' => ['title' => $title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
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


    <div class="container mt-5">
        <div class="card mb-4" style="max-width: 1040px; margin: 20px auto;">

            <!-- Dropdown Menu -->
            <?php if (isset($component)) { $__componentOriginalfd56616f4a6dab860ae516f8f1ac7bb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd56616f4a6dab860ae516f8f1ac7bb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.setting-right','data' => ['book' => $book]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['book' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book)]); ?>
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

            <div class="row g-0">
                <!-- الصورة ناحية اليمين -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="<?php echo e(asset($book->media_one->media)); ?>" class="img-fluid book-image"
                        style="width: 460px; height: 450px; object-fit: cover; margin-top: 30px;" alt="Book Cover">
                </div>
                <!-- النص ناحية اليسار -->
                <div class="col-md-8 d-flex flex-column justify-content-start align-items-start" style="padding-top: 32px;">
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #EBBB3F; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        <?php echo e($book->user->username); ?>

                    </h5>
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #1C2A39; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        <?php echo e($book->title); ?>

                    </h5>
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #EBBB3F; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        <?php echo e($book->department->name ?? 'not found'); ?> </h5>
                    <ul>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong class="text-left"><?php echo app('translator')->get('kotaby.language'); ?>:</strong>
                            <span style="margin-right: 400px"><?php echo e($book->language); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;"><?php echo app('translator')->get('kotaby.release_date'); ?>:</strong>
                            <span><?php echo e($book->creation_date_formatted); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;"><?php echo app('translator')->get('kotaby.pages'); ?>:</strong>
                            <span><?php echo e($book->num_pages); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;"><?php echo app('translator')->get('kotaby.file_size'); ?>:</strong>
                            <span>148.13 <?php echo app('translator')->get('kotaby.mb'); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;"><?php echo app('translator')->get('kotaby.file_type'); ?>:</strong>
                            <span><?php echo app('translator')->get('kotaby.pdf'); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;"><?php echo app('translator')->get('kotaby.downloads'); ?>:</strong>
                            <span><?php echo e($book->download ?? 0); ?></span>
                        </li>
                    </ul>


                    <div class="d-flex justify-content-right align-items-right mb-7" style="margin-right:34px">
                        <p class="stars" style="color: #fff200; font-size: 30px;">
                            <?php for($i = 1; $i <= $book->stars['fullStars']; $i++): ?>
                                <?php if($i <= 5): ?>
                                    &#9733; <!-- Full Star -->
                                <?php else: ?>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($book->stars['halfStar']): ?>
                                &#9733; <!-- Half Star (can be styled differently if needed) -->
                            <?php endif; ?>

                            <?php for($i = 1; $i <= $book->stars['emptyStars']; $i++): ?>
                                &#9734; <!-- Empty Star -->
                            <?php endfor; ?>

                        </p>
                        <span class="mx-3"></span>
                        <span
                            style="color:#EBBB3F;font-weight:bold;font-size: 15px; margin-top: -10px">(<?php echo e($book->view); ?>)
                            <?php echo app('translator')->get('kotaby.views'); ?></span>
                        <span class="mx-3"></span>
                        <span
                            style="color:#EBBB3F;font-weight:bold;font-size: 15px; margin-top: -10px">(<?php echo e($book->reviews()->count()); ?>)
                            <?php echo app('translator')->get('kotaby.reviews'); ?></span>

                    </div>

                    <div class="btn-container d-flex justify-content-center mt-3" style="margin-right: 35px">

                        <form action="<?php echo e(route('favourite.store', ['book_id' => $book->id])); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <button style="background: none; border: none" id = 'toggleButton'>
                                <a href="#" class="btn"
                                    style="border: 2px solid #1B3764; color:
                                    <?php echo e($book->isFavoritedBy(auth()->user()) ? '#ff0000' : '#1B3764'); ?>"><i
                                        class="fas fa-save" style="margin-left:2px;"></i><?php echo app('translator')->get('kotaby.save'); ?></a>
                            </button>

                        </form>

                        <a href="#" type="button" class="btn me-2" style="border: 2px solid #1B3764"
                            data-bs-toggle="modal" data-bs-target="#rateModal"><i class="fas fa-star"
                                style="color: #1B3764;margin-left: 2px"></i>
                            <?php echo app('translator')->get('kotaby.rate'); ?></a>
                        
                        <a href="<?php echo e(route('download.pdf', $book->id)); ?>" class="btn me-2"
                            style="border: 2px solid #1B3764"><i class="fas fa-download"
                                style="color: #1B3764;margin-left: 2px"></i> <?php echo app('translator')->get('kotaby.download_pdf'); ?></a>
                        <a href="<?php echo e(route('books.pdf', $book->id)); ?>" class="btn" style="border: 2px solid #1B3764"><i
                                class="fas fa-book" style="color: #1B3764; margin-left: 2px"></i> <?php echo app('translator')->get('kotaby.view_pdf'); ?></a>
                        <a href="#" class="btn" style="border: 2px solid #1B3764" data-bs-toggle="modal"
                            data-bs-target="#rateModals"><i class="fas fa-warning"
                                style="color: #1B3764; margin-left: 2px"></i> <?php echo app('translator')->get('kotaby.report'); ?></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- star commit --->

    <?php if (isset($component)) { $__componentOriginal3081b591c5c0fc447e238f246914a486 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3081b591c5c0fc447e238f246914a486 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.star-commit','data' => ['bookid' => $book->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('star-commit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bookid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3081b591c5c0fc447e238f246914a486)): ?>
<?php $attributes = $__attributesOriginal3081b591c5c0fc447e238f246914a486; ?>
<?php unset($__attributesOriginal3081b591c5c0fc447e238f246914a486); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3081b591c5c0fc447e238f246914a486)): ?>
<?php $component = $__componentOriginal3081b591c5c0fc447e238f246914a486; ?>
<?php unset($__componentOriginal3081b591c5c0fc447e238f246914a486); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal4306b978481ea8d55223ceb5ca234559 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4306b978481ea8d55223ceb5ca234559 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.report-book-commit','data' => ['bookid' => $book->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('report-book-commit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bookid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4306b978481ea8d55223ceb5ca234559)): ?>
<?php $attributes = $__attributesOriginal4306b978481ea8d55223ceb5ca234559; ?>
<?php unset($__attributesOriginal4306b978481ea8d55223ceb5ca234559); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4306b978481ea8d55223ceb5ca234559)): ?>
<?php $component = $__componentOriginal4306b978481ea8d55223ceb5ca234559; ?>
<?php unset($__componentOriginal4306b978481ea8d55223ceb5ca234559); ?>
<?php endif; ?>

    <div class="container mt-5">
        <div class="summary-section">
            <h5 class="summary-title"><?php echo app('translator')->get('kotaby.summary'); ?></h5>
            <p class="summary-text">
                <?php echo e($book->description); ?> .. <a href="#"><?php echo app('translator')->get('kotaby.read_more'); ?> </a>
            </p>
            <div class="share-section">
                <p class="share-text"><?php echo app('translator')->get('kotaby.share_with_friends'); ?></p>
                <div class="share-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="reviews-section">
            <h5 class="reviews-title"><?php echo app('translator')->get('kotaby.reviewes'); ?></h5>

            <!--- comment reviews--->
            <?php if (isset($component)) { $__componentOriginalfe4855bb643954c83a0cbd6710da1102 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe4855bb643954c83a0cbd6710da1102 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comment','data' => ['reviews' => $reviews]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['reviews' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reviews)]); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/show.blade.php ENDPATH**/ ?>