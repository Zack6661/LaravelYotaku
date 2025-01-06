<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a>
                        <a href=""><?php echo e($data['product']->Category->name); ?></a>
                        <span><?php echo e($data['product']->name); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="<?php echo e(asset($data['product']->thumbnails_path)); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3><?php echo e($data['product']->name); ?> <span>Kategori: <?php echo e($data['product']->Category->name); ?></span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                        <div class="product__details__price"><?php echo e($data['product']->price); ?> <span></div>
                        <?php echo csrf_field(); ?>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Jumlah:</span>
                                <div class="pro-qty">
                                    <input type="text" name="cart_qty" value="1">
                                </div>
                                <input type="hidden" name="cart_product_id" value="<?php echo e($data['product']->id); ?>">
                            </div>
                            <button type="submit" class="cart-btn"><span class="icon_bag_alt"></span> Tambah Ke Keranjang</button>
                        </div>
                        <div class="product__details__widget">
                        </form>
                            <ul>
                                <li>
                                    <span>Berat : </span>
                                    <p><?php echo e($data['product']->weight); ?> Gram</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Deskripsi Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Deskripsi Produk</h6>
                                <?php echo $data['product']->description; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Produk Lainnya</h5>
                    </div>
                </div>
               <?php $__currentLoopData = $data['product_related']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-lg-3 col-md-4 col-sm-6">
                <?php $__env->startComponent('components.frontend.product-card'); ?>
                <?php $__env->slot('image', asset('storage/' . $product_related->thumbnails)); ?>
                <?php $__env->slot('route', route('product.show', ['categoriSlug' => $product_related->Category->slug, 'productSlug' =>
                    $product_related->slug])); ?>
                    <?php $__env->slot('name', $product_related->name); ?>
                    <?php $__env->slot('price', $product_related->price); ?>
                <?php echo $__env->renderComponent(); ?>
                </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/product/show.blade.php ENDPATH**/ ?>