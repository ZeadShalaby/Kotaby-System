

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-3 mt-5">
                        <h3 class="text-center"><?php echo app('translator')->get('kotaby.account_recovery'); ?></h3>
                        <form class="rounded p-4" action="<?php echo e(route('users.edit.pass', $user->id)); ?>" method="POST"
                            onsubmit="return validatePasswords()">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="text-right d-block"><?php echo app('translator')->get('kotaby.password'); ?></label>
                                <input type="password" class="form-control w-100" placeholder="*****" id="password"
                                    name="password" value="<?php echo e(old('password')); ?>">
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation" class="text-right d-block"><?php echo app('translator')->get('kotaby.confirm_password'); ?></label>
                                <input type="password" class="form-control w-100" placeholder="*****"
                                    id="password_confirmation" name="password_confirmation"
                                    value="<?php echo e(old('password_confirmation')); ?>">
                                <small id="passwordError" class="text-danger d-none"><?php echo app('translator')->get('kotaby.password_mismatch'); ?></small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo e(route('users.loginindex')); ?>" class="text-primary"><?php echo app('translator')->get('kotaby.return_home'); ?></a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login"><?php echo app('translator')->get('kotaby.update'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="<?php echo e(asset('js/change-pass.js')); ?>"></script>

    <style>
        .is-invalid {
            border-color: red;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/change-pass.blade.php ENDPATH**/ ?>