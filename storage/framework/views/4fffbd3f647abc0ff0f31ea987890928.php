<link rel="stylesheet" href="<?php echo e(asset('css/author-card.css')); ?>">

<div class="container my-5">
    <div class="row">
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <a href="<?php echo e(route('users.show', $author->id)); ?>" style="text-decoration: none">
                    <div class="profile-card shadow-sm">
                        <img src="<?php echo e(asset($author->media_one->media)); ?>" alt="<?php echo e($author->name); ?>">
                        <h5><?php echo e($author->username); ?></h5>
                        <?php if(!isset($status)): ?>
                            <p class="rating">
                                
                                <?php for($i = 1; $i <= $author->stars['fullStars'] ?? 5; $i++): ?>
                                    <?php if($i <= 5): ?>
                                        <i class="fas fa-star filled"></i>
                                    <?php else: ?>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                
                                <?php if($author->stars['hasHalfStar'] ?? false): ?>
                                    <i class="fas fa-star-half-alt half-filled"></i>
                                <?php endif; ?>

                                
                                <?php for($i = 1; $i <= $author->stars['emptyStars']; $i++): ?>
                                    <img src="<?php echo e(asset('images/img/empty-star.png')); ?>" class="empty-star"
                                        alt="Empty Star">
                                <?php endfor; ?>

                                (<?php echo e(number_format($author->getAverageRating(), 1)); ?> <?php echo app('translator')->get('kotaby.review'); ?>)
                            </p>
                        <?php endif; ?>
                        <?php if(isset($report)): ?>
                            <div class="report-actions"
                                style="display: flex; align-items: center; gap: 20px;margin-right: 12px">
                                <form action="<?php echo e(route('admin.destroy.author', $author->id)); ?>" method="POST"
                                    style="margin-top: 17px">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" style="background: none;border: none">
                                        <a href=""
                                            style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 211);">
                                            <img src="<?php echo e(asset('images/img/trash.png')); ?>" alt="trash"
                                                style="width: 20px; height: 20px;">
                                        </a>
                                    </button>
                                </form>

                                <a href="<?php echo e(route('admin.refused.author.report', $author->id)); ?>"
                                    style="text-decoration: none; font-weight: bold; color: rgb(85, 211, 161);">
                                    Report: <?php echo e($author->report_one->report); ?>

                                    <i class="fas fa-undo"
                                        style="width: 20px; height: 20px; margin-left: 12px;font-size: 20px"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                        <p class="book-count">
                            <i class="fas fa-book"></i> <?php echo e($author->getBookssCount($author->id)); ?> <?php echo app('translator')->get('kotaby.books'); ?>
                        </p>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/card-author.blade.php ENDPATH**/ ?>