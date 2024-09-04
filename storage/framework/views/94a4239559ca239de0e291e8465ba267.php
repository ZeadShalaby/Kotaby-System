<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>" />
    <!----===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <title>Dashboard Admin</title>
</head>

<body>

    <?php echo $__env->make('layouts.dashboard.partials.dashboard-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('content-admin'); ?>

    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/layouts/dashboard/app-admin.blade.php ENDPATH**/ ?>