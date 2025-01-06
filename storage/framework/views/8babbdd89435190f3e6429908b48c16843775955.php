<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.backend.data.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <?php echo $__env->make('layouts.backend.data.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.backend.data.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="main-content">
                <section class="section">
                    <?php echo $__env->make('layouts.backend.data.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(session()->has('error') || session()->has('success')): ?>
                        <div class="container-fluid">
                            <?php if(session()->has('error')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error ! </strong> <?php echo e(session()->get('error')); ?>

                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Yeay ! </strong> <?php echo e(session()->get('success')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="section-body">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </section>
            </div>
            <?php echo $__env->yieldPushContent('modal'); ?>
            <?php echo $__env->make('layouts.backend.data.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>w
    <?php echo $__env->make('layouts.backend.data.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/layouts/backend/app.blade.php ENDPATH**/ ?>