<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="book-card">
            <div class="author-container">
                <i class="save-icon">&#x1F516;</i>
                <p class="author"><?php echo e($item->user->username); ?></p>
            </div>
            <a href="<?php echo e(route('books.show', $item->id)); ?>">
                <img src="<?php echo e(asset($item->media_one->media)); ?>" alt="<?php echo e($item->title); ?>">
            </a>

            </form>

            <div class="rating-stars">
                <p class="title"><?php echo e($item->title); ?></p>
                <form action="<?php echo e(route('favourite.store', ['book_id' => $item->id])); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <button style="background: none; border: none" id = 'toggleButton'>

                        <a href="<?php echo e(route('users.favourites', $item->id)); ?>"><i class="save-icon fas fa-bookmark"
                                style="color: <?php echo e(Auth::check() && $item->isFavoritedBy(Auth::user()) ? '#ff0000' : '#1B3764'); ?>"></i>
                        </a>
                    </button>
                </form>
            </div>
            <div class="rating-stars">


                <p class="stars" style="color: #fff200; font-size: 24px;">
                    <?php for($i = 1; $i <= $item->stars['fullStars']; $i++): ?>
                        <?php if($i <= 5): ?>
                            &#9733; <!-- Full Star -->
                        <?php else: ?>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if($item->stars['halfStar']): ?>
                        &#9733; <!-- Half Star (can be styled differently if needed) -->
                    <?php endif; ?>

                    <?php for($i = 1; $i <= $item->stars['emptyStars']; $i++): ?>
                        &#9734; <!-- Empty Star -->
                    <?php endfor; ?>
                </p>
                
                <p class="rating"><?php echo e($item->reviews()->count()); ?> <?php echo app('translator')->get('kotaby.review'); ?></p>
            </div>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/card-book.blade.php ENDPATH**/ ?>