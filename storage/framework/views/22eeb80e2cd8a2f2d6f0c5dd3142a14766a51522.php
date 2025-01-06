<!DOCTYPE html>
<html lang="zxx">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<head>
    <?php echo $__env->make('layouts.frontend.data.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <?php echo $__env->make('layouts.frontend.data.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.frontend.data.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" method="get" action="<?php echo e(route('product.search')); ?>">
                <input type="text" id="search-input" name="q" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
    <?php echo $__env->make('layouts.frontend.data.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/layouts/frontend/app.blade.php ENDPATH**/ ?>