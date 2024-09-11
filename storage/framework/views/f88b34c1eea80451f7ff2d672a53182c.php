
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
                            <?php if (isset($component)) { $__componentOriginald6e37cb99ca45f11643ac5eab1706c36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6e37cb99ca45f11643ac5eab1706c36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-form','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald6e37cb99ca45f11643ac5eab1706c36)): ?>
<?php $attributes = $__attributesOriginald6e37cb99ca45f11643ac5eab1706c36; ?>
<?php unset($__attributesOriginald6e37cb99ca45f11643ac5eab1706c36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald6e37cb99ca45f11643ac5eab1706c36)): ?>
<?php $component = $__componentOriginald6e37cb99ca45f11643ac5eab1706c36; ?>
<?php unset($__componentOriginald6e37cb99ca45f11643ac5eab1706c36); ?>
<?php endif; ?>

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