
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

                        <!-- about textarea -->
                        <div class="form-group">
                            <label for="about" class="text-right d-block">نبذة عن الكاتب </label>
                            <textarea
                                class="dark:text-white text-gray-900 placeholder-gray-400 w-full bg-transparent border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none w-100 p-2 opacity-70 transition-opacity duration-300 ease-in-out"
                                name="about" rows="4" placeholder="اكتب نبذة عنك هنا..."><?php echo e($user->about); ?></textarea>
                        </div>


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