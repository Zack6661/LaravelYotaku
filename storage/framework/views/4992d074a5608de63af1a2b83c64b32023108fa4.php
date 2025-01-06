<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Home</a>
                        <a href="<?php echo e(route('transaction.index')); ?>"> Transaction</a>
                        <span><?php echo e($data['order']->invoice_number); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice" style="border-top: 2px solid #6777ef;">
                        <div class="invoice-print">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-title">
                                        <h2>Invoice</h2>
                                        <div class="invoice-number">Order <?php echo e($data['order']->invoice_number); ?></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <strong><?php echo e(__('text.billed_to')); ?>:</strong><br>
                                                <?php echo e($data['order']->Customer->name); ?><br>
                                                <?php echo e($data['order']->Customer->email); ?><br>
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong><?php echo e(__('text.shipped_to')); ?>:</strong><br>
                                                <?php echo e($data['order']->recipient_name); ?><br>
                                                <?php echo e($data['order']->address_detail); ?><br>
                                                <?php echo e($data['order']->destination); ?>

                                            </address>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <strong><?php echo e(__('text.order_status')); ?>:</strong>
                                                <div class="mt-2">
                                                    <?php echo $data['order']->status_name; ?>

                                                </div>
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong><?php echo e(__('text.order_date')); ?>:</strong><br>
                                                <?php echo e($data['order']->created_at); ?><br><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title font-weight-bold"><?php echo e(__('text.order_summary')); ?></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-md">
                                            <tbody>
                                                <tr>
                                                    <th data-width="40" style="width: 40px;">#</th>
                                                    <th><?php echo e(__('field.product_name')); ?></th>
                                                    <th class="text-center"><?php echo e(__('field.price')); ?></th>
                                                    <th class="text-center"><?php echo e(__('text.quantity')); ?></th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                                <?php $__currentLoopData = $data['order']->orderDetail()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><a
                                                                href="<?php echo e(route('product.show', ['categoriSlug' => $detail->Product->category->slug, 'productSlug' => $detail->Product->slug])); ?>"><?php echo e($detail->product->name); ?></a>
                                                        </td>
                                                        <td class="text-center"><?php echo e(rupiah($detail->product->price)); ?>

                                                        </td>
                                                        <td class="text-center"><?php echo e($detail->qty); ?></td>
                                                        <td class="text-right">
                                                            <?php echo e(rupiah($detail->total_price_per_product)); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-8">
                                            <address>
                                                <strong><?php echo e(__('text.shipping_method')); ?>:</strong>
                                                <div class="mt-2">
                                                    <p class="section-lead text-uppercase"><?php echo e($data['order']->courier); ?>

                                                        <?php echo e($data['order']->shipping_method); ?></p>
                                                </div>
                                            </address>
                                            <?php if($data['order']->receipt_number != null): ?>
                                                <address>
                                                    <strong><?php echo e(__('text.receipt_number')); ?>:</strong>
                                                    <div class="mt-2">
                                                        <p class="section-lead text-uppercase">
                                                            <?php echo e($data['order']->receipt_number); ?></p>
                                                    </div>
                                                </address>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name">Subtotal</div>
                                                <div class="invoice-detail-value"><?php echo e(rupiah($data['order']->subtotal)); ?>

                                                </div>
                                            </div>
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name"><?php echo e(__('text.shipping_cost')); ?></div>
                                                <div class="invoice-detail-value">
                                                    <?php echo e(rupiah($data['order']->shipping_cost)); ?></div>
                                            </div>
                                            <hr class="mt-2 mb-2">
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name">Total</div>
                                                <div class="invoice-detail-value invoice-detail-value-lg">
                                                    <?php echo e(rupiah($data['order']->total_pay)); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-md-right">
                            <div class="float-lg-left mb-lg-0 mb-3">
                                <?php if($data['order']->status == 0): ?>
                                    <button class="btn btn-primary btn-icon icon-left" id="pay-button"><i
                                            class="fa fa-credit-card"></i>
                                        Process Payment</button>
                                    <a href="<?php echo e(route('transaction.canceled', $data['order']->invoice_number)); ?>" class="btn btn-danger btn-icon icon-left"><i class="fa fa-times"></i>
                                        Cancel Order</a>
                                <?php elseif($data['order']->status == 2): ?>
                                    <a href="<?php echo e(route('transaction.received', $data['order']->invoice_number)); ?>"
                                        class="btn btn-primary text-white btn-icon icon-left"><i
                                            class="fa fa-credit-card"></i>
                                        Order Received</a>
                                <?php endif; ?>
                            </div>
                            <button class="btn btn-warning btn-icon icon-left"><i class="fa fa-print"></i> Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Order Track</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="activities">
                                        <?php $__currentLoopData = $data['order']->OrderTrack()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderTrack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="activity">
                                                <div class="activity-icon bg-primary text-white shadow-primary">
                                                    <i class="<?php echo e($orderTrack->icon); ?>"></i>
                                                </div>
                                                <div class="activity-detail bg-primary text-white">
                                                    <div class="mb-2">
                                                        <span class="text-job text-white"><?php echo e($orderTrack->created_at->diffForHumans()); ?></span>
                                                        <span class="bullet"></span>
                                                    </div>
                                                    <p><?php echo e(__($orderTrack->description)); ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo e(config('midtrans.client_key')); ?>">
    </script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            snap.pay('<?php echo e($data['order']->snap_token); ?>', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/frontend/transaction/show.blade.php ENDPATH**/ ?>