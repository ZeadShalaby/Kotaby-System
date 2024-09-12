<div class="col-lg-3 col-md-6 mb-4">
    <div class="card text-center shadow-sm">
        <a href="<?php echo e(isset($route) ? route($route) : '#'); ?>" style="text-decoration: none">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($titles); ?></h5>
                <p class="card-text"><?php echo e($method); ?> <?php echo e($title); ?> <i
                        class="fas fa-<?php echo e($icon); ?> icon-margin"></i>
                </p>
            </div>
        </a>
    </div>
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/card-profile.blade.php ENDPATH**/ ?>