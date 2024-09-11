<h1 class="login__title">
    <?php echo e(isset($department) ? 'Edit Department' : 'New Department'); ?>

</h1>

<div class="login__box">
    <i class="bx bx-user login__icon"></i>
    <input type="text" placeholder="Name" name="name" class="login__input" value="<?php echo e($department->name ?? ''); ?>" />
</div>
<div class="login__box">
    <i class="bx bx-user login__icon"></i>
    <input type="text" placeholder="Code" name="code" class="login__input"
        value="<?php echo e($department->code ?? ''); ?>" />
</div>
<?php if(!isset($department)): ?>
    <div class="login__box">
        <a href="#" class="text-blue-400 hover:bg-blue-50 dark:hover:bg-dim-800 rounded-full p-2">
            <label for="file-upload" style="cursor: pointer; border: none; background: none;">
                <input id="file-upload" class="form-control-file" type="file" name="img" accept="image/*"
                    name="path" style="width: 10%; display: none" value="<?php echo e(old('img', $department->img ?? '')); ?>" />
                <i class="bx bx-camera login__icon"></i>
            </label>
        </a>

    </div>
<?php endif; ?>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/add-dep.blade.php ENDPATH**/ ?>