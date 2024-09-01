
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">
    <!--- setting users --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">

                <div class="profile-container bg-light text-center card p-4 mt-5">

                    <h3 class="mb-4">تعديل الحساب</h3>
                    <form class="rounded p-4" action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <img src="<?php echo e(asset($user->media_one->media)); ?>" alt="Profile Image" class="profile-image">

                        <!--- input Edit --->
                        <?php $__env->startComponent('components.edit-regist-input', ['user' => $user]); ?>
                        <?php echo $__env->renderComponent(); ?>

                        <button type="submit" class="btn save-btn btn-block">حفظ التغييرات</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--- input Edit --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/edit.blade.php ENDPATH**/ ?>