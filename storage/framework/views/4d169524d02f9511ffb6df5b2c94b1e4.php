
<?php $__env->startSection('content-admin'); ?>
    <!----- content ----->

    <link rel="stylesheet" href="<?php echo e(asset('css/admin-dep.css')); ?>">

    <div class="container">
        <div class="card-grid">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <a href="<?php echo e(route('admin.dep.show', $item->id)); ?>" style="text-decoration: none;">
                        <div class="book-card">
                            <img src="<?php echo e(asset($item->media_one->media)); ?>" alt="<?php echo e($item->media_one->media); ?>">
                            <div>

                                <h5 class="book-card-title"><?php echo e($item->name); ?></h5>
                                <a href="<?php echo e(route('admin.dep.book.show', $item->id)); ?>" style="text-decoration: none">
                                    <p class="book-card-text">
                                        <?php echo e($item->getBooksCount($item->id)); ?> كتاب
                                        <i class="fas fa-book book-card-icon"></i>
                                    </p>
                                </a>
                                <div class="action-icons" style="margin-top: -25px">
                                    <!-- Delete Form -->
                                    <form action="<?php echo e(route('admin.dep.destroy', $item->id)); ?>" method="POST"
                                        style="display: inline;margin-top: -25px;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" style="background: none; border: none; cursor: pointer;">
                                            <i class="fas fa-trash"
                                                style=" height: 20px; margin-left: 100px; color: rgb(168, 33, 62);font-size: 17px"></i>
                                        </button>
                                    </form>

                                    <!-- Edit Link -->
                                    <a href="<?php echo e(route('admin.dep.edit', $item->id)); ?>" class="action-link"
                                        style="width: 20px; height: 20px; margin-left: 140px; margin-top: -22px;color: rgb(108, 175, 233)">
                                        <i class="fas fa-edit" style="color: rgb(108, 175, 233);"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Departments/index.blade.php ENDPATH**/ ?>