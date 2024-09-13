
<?php $__env->startSection('content-admin'); ?>
    <!----- content ----->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin-dep-show.css')); ?>">
    <div id="container">

        <div class="product-details">
            <h1><?php echo e($department->name); ?></h1>
            <span class="hint-star star">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </span>

            <p class="information">
                <?php echo app('translator')->get('kotaby.department_info', ['description' => 'the correct tree which will enhance your Christmas.']); ?>
            </p>

            <div class="control">
                <button class="btn">
                    <span class="price"><i class="fas fa-sitemap" aria-hidden="true"></i></span>
                    <span class="shopping-cart"><i class="fas fa-building" aria-hidden="true"></i></span>
                    <span class="buy"><?php echo app('translator')->get('kotaby.get_now'); ?></span>
                </button>
            </div>
        </div>

        <div class="product-image">
            <img src="<?php echo e(asset($department->media_one->media)); ?>" alt=""
                style="width: 500px; height: 100%; object-fit: cover;">

            <div class="info">
                <h2><?php echo app('translator')->get('kotaby.description'); ?></h2>
                <ul>
                    <li><strong><?php echo app('translator')->get('kotaby.name'); ?>:</strong> <?php echo e($department->name); ?></li>
                    <li><strong><?php echo app('translator')->get('kotaby.code'); ?>:</strong> <?php echo e($department->code); ?></li>
                    <li><strong><?php echo app('translator')->get('kotaby.decoration'); ?>:</strong> balls and bells</li>
                    <li><strong><?php echo app('translator')->get('kotaby.material'); ?>:</strong> Eco-Friendly</li>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/departments/showdep.blade.php ENDPATH**/ ?>