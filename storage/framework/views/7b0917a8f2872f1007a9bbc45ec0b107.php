<!-- Form Group Container for all fields in one div -->
<div class="row mb-3">
    <div class="d-flex flex-wrap w-100">
        <!-- Author Name and Title -->
        <div class="col-md-6 mb-3">
            <label for="author_name" class="form-label text-right d-block">*إسم الكاتب</label>
            <input type="text" class="form-control <?php echo e($errors->has('author_name') ? 'is-invalid' : ''); ?>"
                id="author_name" placeholder="إسمك كاملاً" name="author_name"
                value="<?php echo e(old('author_name', $book->author_name ?? '')); ?>">
            <?php $__errorArgs = ['author_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label for="title" class="form-label text-right d-block">*عنوان الكتاب</label>
            <input type="text" class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" id="title"
                placeholder="عنوان الكتاب" name="title" value="<?php echo e(old('title', $book->title ?? '')); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!-- Language -->
        <div class="col-md-6 mb-3"> <!-- Adjust the column size for half-width -->

            <label for="language" class="form-label text-right d-block">*اللغة</label>
            <select class="form-control <?php echo e($errors->has('language') ? 'is-invalid' : ''); ?>" id="language"
                name="language">
                <option value="" disabled <?php echo e(old('language') ? '' : 'selected'); ?>>اختر لغةالكتاب</option>
                <option value="ar" <?php echo e(old('language', $book->language ?? '') == 'ar' ? 'selected' : ''); ?>>عربي
                </option>
                <option value="en" <?php echo e(old('language', $book->language ?? '') == 'en' ? 'selected' : ''); ?>>إنجليزي
                </option>
            </select>
            <?php $__errorArgs = ['language'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Number of Pages -->
        <div class="col-md-6 mb-3"> <!-- Adjust the column size for half-width -->
            <label for="num_pages" class="form-label text-right d-block">*عدد الصفح</label>
            <input type="number" class="form-control <?php echo e($errors->has('num_pages') ? 'is-invalid' : ''); ?>"
                id="num_pages" placeholder="عدد صفح الكتاب" name="num_pages"
                value="<?php echo e(old('num_pages', $book->num_pages ?? '')); ?>">
            <?php $__errorArgs = ['num_pages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Book Department (Categories) -->
        <div class="col-md-12 mb-3"> <!-- Full width column -->
            <label for="dep_id" class="form-label text-right d-block">*قسم الكتاب</label>
            <select class="form-control <?php echo e($errors->has('dep_id') ? 'is-invalid' : ''); ?>" id="dep_id"
                name="dep_id">
                <option value="" disabled <?php echo e(old('dep_id') ? '' : 'selected'); ?>>اختر قسم الكتاب</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"
                        <?php echo e(old('dep_id', $book->dep_id ?? '') == $item->id ? 'selected' : ''); ?>>
                        <?php echo e($item->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['dep_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Publishing Location -->
        <div class="col-md-12 mb-3" style="display: none"> <!-- Full width column -->
            <label for="locations" class="form-label text-right d-block">*دار النشر</label>
            <input type="text" class="form-control <?php echo e($errors->has('locations') ? 'is-invalid' : ''); ?>"
                id="locations" placeholder="مكان النشر" name="locations"
                value="<?php echo e(old('locations', $book->locations ?? '')); ?>">
            <?php $__errorArgs = ['locations'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Book Description -->
        <div class="col-md-12 mb-3"> <!-- Full width column -->
            <label for="description" class="form-label text-right d-block">*وصف عن الكتاب</label>
            <textarea class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" id="description" rows="3"
                placeholder="وصف عن الكتاب" name="description"><?php echo e(old('description', $book->description ?? '')); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback d-block text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

    </div> <!-- End of Flexbox -->
</div>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/components/add-edit-book.blade.php ENDPATH**/ ?>