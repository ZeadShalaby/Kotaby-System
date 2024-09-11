    <!--  Warn alert -->
    <?php if(Session::has('warn')): ?>
        <div class="alert-warning">
            <?php echo e(Session::get('warn')); ?>

        </div>
    <?php endif; ?>
    <!-- success alert -->
    <?php if(Session::has('success')): ?>
        <div class="alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <!-- error alert -->
    <?php if(Session::has('error')): ?>
        <div class="alert-error">
            <?php echo e(Session::get('error')); ?>

        </div>
    <?php endif; ?>
    
    
    <!-- delete alert -->
    <?php if(Session::has('delete')): ?>
        <div class="alert-delete">
            <?php echo e(Session::get('delete')); ?>

        </div>
        </div>
    <?php endif; ?>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/layouts/partials/session.blade.php ENDPATH**/ ?>