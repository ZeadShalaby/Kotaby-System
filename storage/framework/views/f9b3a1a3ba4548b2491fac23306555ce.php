<link rel="stylesheet" href="<?php echo e(asset('css/dep-card.css')); ?>">


<div class="container my-5">
    <div class="row">
        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <a href="<?php echo e(route('dep.show', $item->id)); ?>" style="text-decoration: none">
                    <div class="book-card">
                        <img src="<?php echo e(asset($item->media_one->media)); ?>" alt="<?php echo e($item->media_one->media); ?>">
                        <div>
                            <h5 class="book-card-title"><?php echo e($item->name); ?></h5>
                            <p class="book-card-text">
                                <?php echo e($item->getBooksCount($item->id)); ?> <?php echo app('translator')->get('kotaby.books'); ?>
                                <i class="fas fa-book book-card-icon"></i>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/card-department.blade.php ENDPATH**/ ?>