

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/add-book.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">

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

    <div class="container form-container">
        <h2 class="text-center mb-4" id="title">أنشر كتابك على مكتبة كتبي</h2>
        <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <?php if (isset($component)) { $__componentOriginalc4d8c62280491fe877a70c709179b73e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4d8c62280491fe877a70c709179b73e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.add-edit-book','data' => ['categories' => $categories,'book' => $book ?? '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('add-edit-book'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'book' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4d8c62280491fe877a70c709179b73e)): ?>
<?php $attributes = $__attributesOriginalc4d8c62280491fe877a70c709179b73e; ?>
<?php unset($__attributesOriginalc4d8c62280491fe877a70c709179b73e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4d8c62280491fe877a70c709179b73e)): ?>
<?php $component = $__componentOriginalc4d8c62280491fe877a70c709179b73e; ?>
<?php unset($__componentOriginalc4d8c62280491fe877a70c709179b73e); ?>
<?php endif; ?>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="bookCover" class="form-label text-right d-block">Book Cover</label>
                    <div class="custom-file-upload">
                        <i id="bookCoverIcon" class="fas fa-upload"></i>
                        <span id="bookCoverText">اختر غلاف الكتاب</span>
                        <input type="file" id="bookCover" name="bookCover" accept="image/*"
                            onchange="updateCoverIcon('bookCover')">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="bookFile" class="form-label text-right d-block">Upload Book</label>
                    <div class="custom-file-upload">
                        <i id="bookFileIcon" class="fas fa-upload"></i>
                        <span id="bookFileText">اختر ملف الكتاب</span>
                        <input type="file" id="bookFile" name="bookFile" accept=".pdf,.ppt,.doc,.docx"
                            onchange="updateCoverIcon('bookFile')">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary share">حفظ كتابك</button>
            </div>
        </form>
    </div>
    <script src="<?php echo e(asset('js/add-book.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/edit.blade.php ENDPATH**/ ?>