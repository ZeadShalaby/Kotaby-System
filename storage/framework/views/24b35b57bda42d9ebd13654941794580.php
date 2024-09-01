
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- تقليل البادينج هنا من 4 إلى 3 -->
                        <h3 class="text-center">انشاء حساب جديد</h3>
                        <form class="rounded p-4" action="<?php echo e(route('users.register')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <!-- إضافة بادينج هنا بقيمة 2 -->
                            
                            <?php $__env->startComponent('components.edit-regist-input'); ?>
                            <?php echo $__env->renderComponent(); ?>
                            <div class="text-right">
                                <a href="<?php echo e(route('users.loginindex')); ?>" class="text-primary">لديك حساب بلفعل؟</a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100" id="login">انشاء
                                حساب</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Library-System\resources\views/Auth/Users/regist.blade.php ENDPATH**/ ?>