
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/user-dashboard.css')); ?>">

    <!-- Hero Section -->
    <div class="hero d-flex flex-column justify-content-center align-items-center text-center p-4">
        <h1 class="display-4">كتبي... سافر بكُتبك إلى عالم آخر.</h1>
        <div class="d-flex">
            <input type="text" class="form-control custom-input me-2" placeholder="ابحث عن كتاب أو مؤلف أو قسم كتاب"
                style="width: 632px;" />
            <button class="btn btn-warning">ابحث</button>
        </div>
    </div>

    <!--- input Edit --->
    <?php $__env->startComponent('components.setting-right'); ?>
    <?php echo $__env->renderComponent(); ?>
    <!--- tape top --->
    <?php $__env->startComponent('components.section-tape'); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container">
        <div class="row">
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
            <!-- Book card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="book-card">
                    <div class="author-container">
                        <i class="save-icon">&#x1F516;</i>
                        <p class="author">أدهم شرقاوي</p>
                    </div>
                    <img src="<?php echo e(asset('images/books/book1.png')); ?>" alt="رسائل من القرآن">
                    <div class="rating-stars">
                        <p class="title">كتاب رسائل من القرآن</p>
                        <a href="<?php echo e(route('users.loginindex')); ?>"><i class="save-icon fas fa-bookmark"></i></a>
                    </div>
                    <div class="rating-stars">
                        <p class="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        <p class="rating">234 تقييم</p>
                    </div>
                </div>
            </div>
            <!-- كرر الكاردات الأخرى هنا -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/home.blade.php ENDPATH**/ ?>