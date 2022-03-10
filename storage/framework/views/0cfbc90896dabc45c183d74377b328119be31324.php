<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('admin/css/material-dashboard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/material-dashboard.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/bootstrap5.0.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/custom.css')); ?>" rel="stylesheet">
    
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('admin/css/nucleo-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/nucleo-svg.css')); ?>" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/468819adeb.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

</head>
<body class="g-sidenav-show  bg-gray-200">

    <?php echo $__env->make('layouts.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php echo $__env->make('layouts.inc.adminnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid py-4">
            <?php echo $__env->yieldContent('content'); ?>
            
        </div>
        <?php echo $__env->make('layouts.inc.adminfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>

    
    <!-- Scripts -->
    <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/perfect-scrollbar.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/smooth-scrollbar.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/chartjs.min.js')); ?>" defer></script>

        <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>
      <script>
        swal("<?php echo e(session('status')); ?>");
      </script>
    <?php endif; ?>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/layouts/admin.blade.php ENDPATH**/ ?>