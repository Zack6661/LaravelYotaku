<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a>
                        <span>Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo e(route('cart.update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['carts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="<?php echo e(asset($carts->Product->thumbnails_path)); ?>" alt="" width="90">
                                            <div class="cart__product__item__title">
                                                <h6><?php echo e($carts->Product->name); ?></h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price"><?php echo e($carts->Product->price_rupiah); ?></td>
                                        <input type="hidden" name="cart_id[]" value="<?php echo e($carts->id); ?>">
                                        <td class="cart__quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?php echo e($carts->qty); ?>" name="cart_qty[]">
                                            </div>
                                        </td>
                                        <td class="cart__total"><?php echo e(rupiah($carts->total_price_per_product)); ?></td>
                                        <td class="cart__close"><a href="<?php echo e(route('cart.delete',$carts->id)); ?>"><span class="icon_close"></span></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="<?php echo e(route('product.index')); ?>">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <button type="submit"><span class="icon_loading"></span> Update cart</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total <span><?php echo e(rupiah($data['carts']->sum('total_price_per_product'))); ?></span></li>
                        </ul>
                        <a href="<?php echo e(route('checkout.index')); ?>" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/cart/index.blade.php ENDPATH**/ ?>