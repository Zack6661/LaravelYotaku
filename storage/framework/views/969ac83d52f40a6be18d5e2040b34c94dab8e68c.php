<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a>
                        <span>Category</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $data['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 p-0 ">
                        <div class="categories__item set-bg" data-setbg="<?php echo e(asset('storage/' . $category->thumbnails)); ?>">
                            <div class="categories__text">
                                <h4 style="background-color:white;"><?php echo e($category->name); ?></h4>
                                <p style="background-color:white;"><?php echo e($category->Products()->count()); ?> item</p>
                                <a href="<?php echo e(route('category.show',$category->slug)); ?>">Jelajahi</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/category/index.blade.php ENDPATH**/ ?>