<?php $__env->startSection('content'); ?>
     <!-- Breadcrumb Begin -->
     <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a>
                        <a href="<?php echo e(route('category.index')); ?>">Kategori</a>
                        <span><?php echo e($data['category']->name); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $data['product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4">
                            <?php $__env->startComponent('components.frontend.product-card'); ?>
                            <?php $__env->slot('image', asset('storage/' . $product->thumbnails)); ?>
                            <?php $__env->slot('route', route('product.show', ['categoriSlug' => $product->Category->slug, 'productSlug' =>
                                $product->slug])); ?>
                                <?php $__env->slot('name', $product->name); ?>
                                <?php $__env->slot('price', $product->price); ?>
                            <?php echo $__env->renderComponent(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12 text-center">
                          <?php echo e($data['product']->links('vendor.pagination.custom')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/category/show.blade.php ENDPATH**/ ?>