
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- تقليل البادينج هنا من 4 إلى 3 -->
                        <h3 class="text-center">تسجيل الدخول</h3>
                        <form class="rounded p-4" action="<?php echo e(route('users.login')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>


                            <!--- input login --->
                            <?php $__env->startComponent('components.input-form'); ?>
                            <?php echo $__env->renderComponent(); ?>


                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('users.forgetpass')); ?>" class="text-primary">نسيت كلمة المرور ؟</a>
                                <a href="<?php echo e(route('admin.loginindex')); ?>" class="text-primary"> التسجيل ك مسؤول !</a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100" id="login">تسجيل
                                الدخول</button>
                            <div class="text-center mt-3">أو</div>


                            <div class="d-flex justify-content-center align-items-center" id="social">
                                <a href="<?php echo e(route('social-service', 'google')); ?>" class="item">
                                    <img src="<?php echo e(asset('images/img/google.png')); ?>" alt="Google logo"
                                        class="img-fluid me-4">
                                </a>
                                <a href="<?php echo e(route('social-service', 'github')); ?>" class="item">
                                    <img src="<?php echo e(asset('images/img/github.png')); ?>" alt="GitHub logo"
                                        class="img-fluid me-4">
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/login.blade.php ENDPATH**/ ?>