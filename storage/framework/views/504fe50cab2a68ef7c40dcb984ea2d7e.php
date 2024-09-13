
<?php $__env->startSection('content-admin'); ?>
    <!----- content ----->
    <link rel="stylesheet" href="<?php echo e(asset('css/admin-home.css')); ?>">
    <header>
        <nav>
            <ul>
                <li><a href="#home"><?php echo app('translator')->get('kotaby.home'); ?></a></li>
                <li><a href="#features"><?php echo app('translator')->get('kotaby.features'); ?></a></li>
                <li><a href="#contact"><?php echo app('translator')->get('kotaby.contact'); ?></a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1><?php echo app('translator')->get('kotaby.welcome'); ?></h1>
            <p><?php echo app('translator')->get('kotaby.solution'); ?></p>
            <a href="#contact" class="btn"><?php echo app('translator')->get('kotaby.get_started'); ?></a>
        </div>
    </section>

    <section id="features" class="features">
        <h2><?php echo app('translator')->get('kotaby.features'); ?></h2>
        <div class="feature-cards">
            <div class="card">
                <h3><?php echo app('translator')->get('kotaby.feature_1'); ?></h3>
                <p><?php echo app('translator')->get('kotaby.feature_1_details'); ?></p>
            </div>
            <div class="card">
                <h3><?php echo app('translator')->get('kotaby.feature_2'); ?></h3>
                <p><?php echo app('translator')->get('kotaby.feature_2_details'); ?></p>
            </div>
            <div class="card">
                <h3><?php echo app('translator')->get('kotaby.feature_3'); ?></h3>
                <p><?php echo app('translator')->get('kotaby.feature_3_details'); ?></p>
            </div>
            <div class="card">
                <h3><?php echo app('translator')->get('kotaby.feature_4'); ?></h3>
                <p><?php echo app('translator')->get('kotaby.feature_4_details'); ?></p>
            </div>
        </div>
    </section>

    <footer>
        <p><?php echo app('translator')->get('kotaby.footer'); ?></p>
    </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Admin/home.blade.php ENDPATH**/ ?>