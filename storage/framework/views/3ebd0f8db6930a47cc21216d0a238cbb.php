
<h1 class="login__title">
    <h1 class="login__title">
        <?php echo e(isset($department) ? __('kotaby.edit_department') : __('kotaby.add_departments')); ?>

    </h1>
</h1>
<div class="login__box">
    <i class="bx bx-user login__icon"></i>
    <input type="text" placeholder="<?php echo app('translator')->get('kotaby.name'); ?>" name="name"
        class="login__input <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
        value="<?php echo e(old('name', $department->name ?? '')); ?>" />

</div>
<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="invalid-feedback d-block text-danger"
        style="color: red;font-weight: bold;font-size: 12px"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="login__box">
    <i class="bx bx-user login__icon"></i>
    <input type="text" placeholder="<?php echo app('translator')->get('kotaby.code'); ?> " name="code"
        class="login__input <?php echo e($errors->has('code') ? 'is-invalid' : ''); ?>"
        value="<?php echo e(old('code', $department->code ?? '')); ?>" />
</div>
<?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="invalid-feedback d-block text-danger"
        style="color: red;font-weight: bold;font-size: 12px"><?php echo e($message); ?>

    </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php if(!isset($department)): ?>
    <div class="login__box">
        <a href="#" class="text-blue-400 hover:bg-blue-50 dark:hover:bg-dim-800 rounded-full p-2">
            <label for="file-upload"
                style="cursor: pointer; border: none; background: none;color: rgb(144, 144, 144);font-weight: bold">
                <input id="file-upload" class="form-control-file <?php echo e($errors->has('img') ? 'is-invalid' : ''); ?>"
                    type="file" name="img" accept="image/*" style="width: 10%; display: none"
                    placeholder="<?php echo app('translator')->get('kotaby.upload_image'); ?>" />
                <i class="bx bx-camera login__icon"></i>
                <?php echo app('translator')->get('kotaby.upload_image'); ?>
            </label>
        </a>
    </div>
    <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback d-block text-danger"
            style="color: red;font-weight: bold;font-size: 12px"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php endif; ?>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/add-dep.blade.php ENDPATH**/ ?>