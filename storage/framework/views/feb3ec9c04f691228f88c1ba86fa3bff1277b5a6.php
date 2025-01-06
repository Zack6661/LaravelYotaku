
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">Order Statistics This Month
                    </div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count"><?php echo e($data['total_pending']); ?></div>
                            <div class="card-stats-item-label">Pending</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count"><?php echo e($data['total_shipping']); ?></div>
                            <div class="card-stats-item-label">Shipping</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count"><?php echo e($data['total_completed']); ?></div>
                            <div class="card-stats-item-label">Completed</div>
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Orders</h4>
                    </div>
                    <div class="card-body">
                        <?php echo e($data['total_order']); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><?php echo e(__('menu.product')); ?></h4>
                    </div>
                    <div class="card-body">
                        <?php echo e($data['total_product']); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>User</h4>
                    </div>
                    <div class="card-body">
                        <?php echo e($data['total_user']); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Grafik Penjualan</h4>
                <div class="card-header-action">
                    <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                </div>
              </div>
                <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                        <?php echo $data['chart']->container(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"><?php echo e(__('text.latest_order')); ?></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Products</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $data['last_order']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a
                                        href="<?php echo e(route('feature.order.show',$order->id)); ?>"><?php echo e($order->invoice_number); ?></a>
                                </td>
                                <td class="font-weight-600"><?php echo e($order->one_product); ?></td>
                                <td><?php echo $order->status_name; ?></td>
                                <td><?php echo e($order->created_at); ?></td>
                                <td>
                                    <a href="<?php echo e(route('feature.order.show',$order->id)); ?>"
                                        class="btn btn-danger">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
                <h4>Best Products</h4>
            </div>
            <div class="card-body">
                <div class="owl-carousel owl-theme" id="products-carousel">
                    <?php $__currentLoopData = $data['best_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $best_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="product-item pb-3">
                                <div class="product-image">
                                    <img alt="image" src="<?php echo e($best_product->thumbnails_path); ?>" class="img-fluid">
                                </div>
                                <div class="product-details">
                                    <div class="product-name"><?php echo e($best_product->name); ?></div>
                                    <div class="product-review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="text-muted text-small"><?php echo e($best_product->total_sold); ?>

                                        <?php echo e(__('text.sold')); ?></div>
                                    <div class="product-cta">
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <?php echo $data['chartPie']->container(); ?>

            </div>
          </div>
          <div class="card card-hero">
            <div class="card-header">
                <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                </div>
                <h4>0</h4>
                <div class="card-description">Customers need help</div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
          
        </div>
        <div class="col-md-4">
         
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo e($data['chart']->script()); ?>

    <?php echo e($data['chartPie']->script()); ?>

    <script>
        $("#products-carousel").owlCarousel({
            items: 3,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>