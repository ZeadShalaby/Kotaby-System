
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- Reduce padding here from 4 to 3 -->
                        <h3 class="text-center"><?php echo app('translator')->get('kotaby.create_account'); ?></h3>
                        <form class="rounded p-4" action="<?php echo e(route('users.register')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>


                            <!---regist input--->
                            <?php if (isset($component)) { $__componentOriginala29ad7e6d5a3b2c4ce9f226c982ba36f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala29ad7e6d5a3b2c4ce9f226c982ba36f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.edit-regist-input','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('edit-regist-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala29ad7e6d5a3b2c4ce9f226c982ba36f)): ?>
<?php $attributes = $__attributesOriginala29ad7e6d5a3b2c4ce9f226c982ba36f; ?>
<?php unset($__attributesOriginala29ad7e6d5a3b2c4ce9f226c982ba36f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala29ad7e6d5a3b2c4ce9f226c982ba36f)): ?>
<?php $component = $__componentOriginala29ad7e6d5a3b2c4ce9f226c982ba36f; ?>
<?php unset($__componentOriginala29ad7e6d5a3b2c4ce9f226c982ba36f); ?>
<?php endif; ?>

                            <div class="text-right">
                                <a href="<?php echo e(route('users.loginindex')); ?>" class="text-primary"><?php echo app('translator')->get('kotaby.already_have_account'); ?></a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login"><?php echo app('translator')->get('kotaby.create_account_button'); ?></button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/regist.blade.php ENDPATH**/ ?>