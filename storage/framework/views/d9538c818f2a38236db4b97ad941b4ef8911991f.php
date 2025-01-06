<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a>
                        <span>Transaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                          <tbody><tr>
                            <th>Invoice ID</th>
                            <th>Products</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                          <?php $__currentLoopData = $data['orders']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><a href="<?php echo e(route('transaction.show',$order->invoice_number)); ?>"><?php echo e($order->invoice_number); ?></a></td>
                            <td class="font-weight-600"><?php echo e($order->one_product); ?></td>
                            <td><?php echo $order->status_name; ?></td>
                            <td><?php echo e($order->created_at); ?></td>
                            <td>
                              <a href="<?php echo e(route('transaction.show',$order->invoice_number)); ?>" class="btn btn-danger">Detail</a>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody></table>
                      </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/transaction/index.blade.php ENDPATH**/ ?>