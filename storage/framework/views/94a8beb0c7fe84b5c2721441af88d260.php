

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-3 mt-5"> <!-- Padding reduced from 4 to 3 -->
                        <h3 class="text-center"><?php echo app('translator')->get('kotaby.account_recovery'); ?> </h3>
                        <form class="rounded p-4" action="<?php echo e(route('users.forget.pass')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>


                            <!-- Email Input -->
                            <div class="form-group">
                                <label for="email" class="text-right d-block"><?php echo app('translator')->get('kotaby.emails'); ?> </label>
                                <input type="email" class="form-control w-100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 2px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="email"
                                    placeholder="<?php echo app('translator')->get('kotaby.email_placeholder'); ?>" name="email" value="<?php echo e(old('email')); ?>">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback d-block text-danger"
                                        style="font-weight: bold"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('users.loginindex')); ?>" class="text-primary"><?php echo app('translator')->get('kotaby.return_to_home'); ?></a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login"><?php echo app('translator')->get('kotaby.submits'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/forget-pass.blade.php ENDPATH**/ ?>