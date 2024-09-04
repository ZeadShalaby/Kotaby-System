

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/add-book.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">

    <!--- setting users --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container form-container">
        <h2 class="text-center mb-4" id="title">أنشر كتابك على مكتبة كتبي</h2>
        <form action="<?php echo e(route('books.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="location-option text-left d-block">
                <button type="button" id="useLocation" class="btn-icon">
                    <i class="fas fa-location-arrow"></i>
                </button>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fullName" class="form-label text-right d-block" id="title">*إسمك كاملاً</label>
                    <input type="text" class="form-control" id="fullName" placeholder="إسمك كاملاً" name="author_name"
                        value="<?php echo e(old('author_name')); ?>">
                </div>
                <div class="col-md-6">
                    <label for="bookTitles" class="form-label text-right d-block">*عنوان الكتاب</label>
                    <input type="text" class="form-control" id="bookTitle" placeholder="عنوان الكتاب" name="title"
                        value="<?php echo e(old('title')); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="language" class="form-label text-right d-block" id="title">*اللغة</label>
                    <select class="form-control" id="language" name="language">
                        <option value="" disabled <?php echo e(old('language') ? '' : 'selected'); ?>>اختر لغة الكتاب</option>
                        <option value="ar" <?php echo e(old('language') == 'ar' ? 'selected' : ''); ?>>عربي</option>
                        <option value="en" <?php echo e(old('language') == 'en' ? 'selected' : ''); ?>>إنجليزي</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="bookpage" class="form-label text-right d-block">*عدد الصفح</label>
                    <input type="number" class="form-control" id="bookpage" placeholder="عدد صفح الكتاب" name="num_pages"
                        value="<?php echo e(old('num_pages')); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="dep_id" class="form-label text-right d-block">*قسم الكتاب</label>
                    <select class="form-control" id="dep_id" name="dep_id">
                        <option value="" disabled <?php echo e(old('dep_id') ? '' : 'selected'); ?>>اختر قسم الكتاب</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php echo e(old('dep_id') == $item->id ? 'selected' : ''); ?>>
                                <?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">

                    <label for="locations" class="form-label text-right d-block">*مكان النشر</label>
                    <input type="text" class="form-control" id="locations" placeholder="مكان النشر" name="locations"
                        value="<?php echo e(old('locations')); ?>">
                    <br>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="bookDescription" class="form-label text-right d-block">*وصف عن الكتاب</label>
                    <textarea class="form-control" id="bookDescription" rows="3" placeholder="وصف عن الكتاب" name="description"><?php echo e(old('description')); ?></textarea>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="bookCover" class="form-label text-right d-block">Book Cover</label>
                    <div class="custom-file-upload">
                        <i id="bookCoverIcon" class="fas fa-upload"></i>
                        <span id="bookCoverText">اختر غلاف الكتاب</span>
                        <input type="file" id="bookCover" name="bookCover" accept="image/*" onchange="updateCoverIcon()">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="bookFile" class="form-label text-right d-block">Upload Book</label>
                    <div class="custom-file-upload">
                        <i id="bookFileIcon" class="fas fa-upload"></i>
                        <span id="bookFileText">اختر ملف الكتاب</span>
                        <input type="file" id="bookFile" name="bookFile" accept=".pdf,.ppt,.doc,.docx"
                            onchange="updateCoverIcon()">
                    </div>
                </div>
            </div>


            <div class="form-text mb-4">
                <ul>
                    <li>أن يكون العمل من إنتاج خاص وليس منقول.</li>
                    <li>أن يكون العمل خالياً من استخدام أي ألفاظ أو صور مسيئة.</li>
                    <li>ألا يشمل ما يحرّض على كراهية أي طائفة من طوائف المجتمع.</li>
                    <li>أن يكون العمل خالياً من الأخطاء الإملائية بقدر ما يمكن.</li>
                </ul>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary share">أنشر كتابك</button>
            </div>
        </form>
    </div>
    <script src="<?php echo e(asset('js/add-book.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/add-book.blade.php ENDPATH**/ ?>