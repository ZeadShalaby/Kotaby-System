
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/book-show.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--- tape section --->
    <?php $__env->startComponent('components.section-tape', ['title' => $title]); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="container mt-5">
        <div class="card mb-4" style="max-width: 1040px; margin: 20px auto;">
            <div class="row g-0">
                <!-- الصورة ناحية اليمين -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="<?php echo e(asset($book->media_one->media)); ?>" class="img-fluid book-image"
                        style="width: 460px; height: 450px; object-fit: cover; margin-top: 30px;" alt="Book Cover">
                </div>
                <!-- النص ناحية اليسار -->
                <div class="col-md-8 d-flex flex-column justify-content-start align-items-start" style="padding-top: 32px;">
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #EBBB3F; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        <?php echo e($book->user->username); ?>

                    </h5>
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #1C2A39; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        <?php echo e($book->title); ?>

                    </h5>
                    <h5 class="card-title text-left"
                        style="font-family: 'Almarai', sans-serif; color: #EBBB3F; font-weight: 700; font-size: 15px; margin-right: 38px;">
                        <?php echo e($book->department->name); ?> </h5>

                    <ul>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong class="text-left">اللغة:</strong>
                            <span style="margin-right: 400px"> <?php echo e($book->language); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">تاريخ الإصدار:</strong>
                            <span><?php echo e($book->creation_date_formatted); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">الصفحات:</strong>
                            <span><?php echo e($book->num_pages); ?></span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">حجم الملف:</strong>
                            <span>148.13 ميجا بايت</span>
                        </li>
                        <li style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">نوع الملف:</strong>
                            <span>PDF</span>
                        </li>
                        <li style="display: flex; justify-content: space-between;">
                            <strong style="flex: 0 0 auto; margin-left: 20px;">التحميلات:</strong>
                            <span><?php echo e($book->download ?? 0); ?></span>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-right align-items-right mb-7" style="margin-right:34px">
                        <p class="stars" style="color: #fff200; font-size: 30px;">
                            <?php for($i = 1; $i <= $book->stars['fullStars']; $i++): ?>
                                <?php if($i <= 5): ?>
                                    &#9733; <!-- Full Star -->
                                <?php else: ?>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($book->stars['halfStar']): ?>
                                &#9733; <!-- Half Star (can be styled differently if needed) -->
                            <?php endif; ?>

                            <?php for($i = 1; $i <= $book->stars['emptyStars']; $i++): ?>
                                &#9734; <!-- Empty Star -->
                            <?php endfor; ?>

                        </p>
                        <span class="mx-3"></span>
                        <span
                            style="color:#EBBB3F;font-weight:bold;font-size: 15px; margin-top: -10px">(<?php echo e($book->view); ?>)
                            مراجعات</span>
                        <span class="mx-3"></span>
                        <span
                            style="color:#EBBB3F;font-weight:bold;font-size: 15px; margin-top: -10px">(<?php echo e($book->reviews()->count()); ?>)
                            تقييم</span>

                    </div>

                    <div class="btn-container d-flex justify-content-center mt-3" style="margin-right: 35px">

                        <form action="<?php echo e(route('favourite.store', ['book_id' => $book->id])); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <button style="background: none; border: none" id = 'toggleButton'>
                                <a href="#" class="btn"
                                    style="border: 2px solid #1B3764; color:
                                    <?php echo e($book->isFavoritedBy(auth()->user()) ? '#ff0000' : '#1B3764'); ?>"><i
                                        class="fas fa-save" style="margin-left:2px;"></i>حفظ</a>
                            </button>

                        </form>

                        <a href="#" type="button" class="btn me-2" style="border: 2px solid #1B3764"
                            data-bs-toggle="modal" data-bs-target="#rateModal"><i class="fas fa-star"
                                style="color: #1B3764;margin-left: 2px"></i>أضف
                            تقييم</a>

                        <a href="<?php echo e(route('download.pdf', $book->id)); ?>" class="btn me-2"
                            style="border: 2px solid #1B3764"><i class="fas fa-download"
                                style="color: #1B3764;margin-left: 2px"></i>تحميل الكتاب</a>
                        <a href="<?php echo e(route('books.pdf', $book->id)); ?>" class="btn" style="border: 2px solid #1B3764"><i
                                class="fas fa-book" style="color: #1B3764; margin-left: 2px"></i> تصفح الكتاب</a>
                        <a href="<?php echo e(route('reportindex', $book->id)); ?>" class="btn" style="border: 2px solid #1B3764"><i
                                class="fas fa-warning" style="color: #1B3764; margin-left: 2px"></i> التبليغ عنه</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php $__env->startComponent('components.star-commit', ['book_id' => $book->id]); ?>
    <?php echo $__env->renderComponent(); ?>





    <div class="container mt-5">
        <div class="summary-section">
            <h5 class="summary-title">نبذة مختصرة عن الكتاب</h5>
            <p class="summary-text">
                <?php echo e($book->description); ?> .. <a href="#">اقرأ المزيد</a>
            </p>
            <div class="share-section">
                <p class="share-text">شارك الكتاب مع الأصدقاء</p>
                <div class="share-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="reviews-section">
            <h5 class="reviews-title">التقييمات</h5>


            <?php $__env->startComponent('components.comment', ['reviews' => $reviews]); ?>
            <?php echo $__env->renderComponent(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Books/show.blade.php ENDPATH**/ ?>