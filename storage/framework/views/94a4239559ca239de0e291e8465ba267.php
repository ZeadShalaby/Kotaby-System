<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>" />
    <!----===== Boxicons CSS ===== -->

    <link rel="stylesheet" href="<?php echo e(asset('css/session.css')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <title>Dashboard Admin</title>
</head>

<body>

    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #000000;
        }

        ::-webkit-scrollbar-thumb {
            background-image: linear-gradient(180deg, #1B3764 0%, #ffc107 99%);
            border-radius: 10px;
            transition: 0.5s;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;

        }
    </style>



    <?php echo $__env->make('layouts.partials.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.dashboard.partials.dashboard-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('content-admin'); ?>

    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>





</body>

</html>
<?php /**PATH D:\my projects\company task\hash-studio\Kotaby-System\resources\views/layouts/dashboard/app-admin.blade.php ENDPATH**/ ?>