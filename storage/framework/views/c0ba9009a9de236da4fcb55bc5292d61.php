
<?php $__env->startSection('content-admin'); ?>
    <!----- content ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/add-dep.css')); ?>">
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="<?php echo e(asset('images/img/img-login.svg')); ?>" alt="" />
            </div>
            <div class="login__forms">
                <form action="<?php echo e(route('admin.dep.update', $department->id)); ?>" method="POST" class="login__registre"
                    id="form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <?php $__env->startComponent('components.add-dep', ['department' => $department]); ?>
                    <?php echo $__env->renderComponent(); ?>

                    <button class="login__button" type="submit" style="width: 100%">Save</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/Departments/edit.blade.php ENDPATH**/ ?>