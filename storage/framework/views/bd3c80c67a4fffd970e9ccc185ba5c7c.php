
<?php $__env->startSection('content'); ?>
    <link rel="icon" href="https://raw.githubusercontent.com/Redwiat/redwiat.github.io/main/favicon-redwiat.png"
        type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/verify-code.css')); ?>">

    <div class="containers">
        <header>
            <i class="bx bxs-check-shield" style="color: rgb(47, 255, 175); font-size: 48px"></i>
        </header>

        <h4><?php echo app('translator')->get('kotaby.enter_code'); ?> </h4>
        <form action="<?php echo e(route('users.verify.code')); ?>" method="POST" id="verifyForm">
            <?php echo e(csrf_field()); ?>


            <div class="input-field">
                <input type="number" maxlength="1" class="code-input" />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
                <input type="number" maxlength="1" class="code-input" disabled />
            </div>
            <input type="hidden" name="code" id="code" value="">
            <a href="<?php echo e(route('users.resend.code')); ?>" class="btn-resend"><?php echo app('translator')->get('kotaby.resend_code'); ?> </a>
            <p id="countdown" class="countdown-timer">40 <?php echo app('translator')->get('kotaby.countdown'); ?> </p>
            <!-- Countdown timer with localization -->
            <button type="submit" class="btn-code"><?php echo app('translator')->get('kotaby.verify_code'); ?> </button>
        </form>
    </div>

    <script src="<?php echo e(asset('js/verify-code.js')); ?>"></script>
    <script>
        var localizedSeconds = "<?php echo app('translator')->get('kotaby.countdown'); ?>";
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/Auth/Users/verfiy-code.blade.php ENDPATH**/ ?>