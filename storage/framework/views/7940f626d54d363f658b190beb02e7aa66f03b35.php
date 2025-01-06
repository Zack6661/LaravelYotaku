<?php $__env->startSection('content'); ?>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="<?php echo e(asset('me')); ?>/img/goku.png">
                        <div class="categories__text">
                            <p></p>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php $__currentLoopData = $data['new_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                <div class="categories__item set-bg"
                                    data-setbg="<?php echo e(asset('storage/' . $category->thumbnails)); ?>">
                                    <div class="categories__text">
                                        <h4 style="background-color:white;"><?php echo e($category->name); ?></h4>
                                        <p style="background-color:white;"><?php echo e($category->Products()->count()); ?> item</p>
                                        <a href="#">Jelajahi</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <?php $__currentLoopData = $data['new_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-filter=".<?php echo e($new_categories->slug); ?>"><?php echo e($new_categories->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <?php $__currentLoopData = $data['new_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_categories2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $new_categories2->Products()->limit(9)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo e($new_categories2->slug); ?>">
                            <?php $__env->startComponent('components.frontend.product-card'); ?>
                                <?php $__env->slot('image', asset('storage/' . $product->thumbnails)); ?>
                                <?php $__env->slot('route', route('product.show', ['categoriSlug' => $new_categories2->slug, 'productSlug' =>
                                    $product->slug])); ?>
                                    <?php $__env->slot('name', $product->name); ?>
                                    <?php $__env->slot('price', $product->price); ?>
                                <?php echo $__env->renderComponent(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!-- Product Section End -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/home.blade.php ENDPATH**/ ?>