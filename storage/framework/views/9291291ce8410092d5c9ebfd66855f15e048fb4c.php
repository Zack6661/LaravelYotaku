<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-md-right">
                                <button class="float-lg-left mb-lg-0 mb-3  btn btn-warning btn-icon icon-left"><i
                                        class="fa fa-print"></i> Print</button>
                                <div class="mb-lg-0 mb-3">
                                    <a href="javascript:;" class="btn btn-success btn-icon icon-left" data-toggle="modal"
                                        data-target="#resiModal" data-id="<?php echo e($data['order']->invoice_number); ?>"><i
                                            class="fa fa-truck"></i>
                                        Input Resi</a>
                                    <a href="<?php echo e(route('feature.order.index')); ?>"
                                        class="btn btn-primary btn-icon icon-left"><i class="fa fa-arrow-left"></i>
                                        Kembali</a>
                                </div>
                            </div>
                            <hr class="mb-2">
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
                                            <th>Item</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                        <?php $__currentLoopData = $data['order']->orderDetail()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><a
                                                        href="<?php echo e(route('product.show', ['categoriSlug' => $detail->Product->category->slug, 'productSlug' => $detail->Product->slug])); ?>"><?php echo e($detail->product->name); ?></a>
                                                </td>
                                                <td class="text-center"><?php echo e(rupiah($detail->product->price)); ?></td>
                                                <td class="text-center"><?php echo e($detail->qty); ?></td>
                                                <td class="text-right"><?php echo e(rupiah($detail->total_price_per_product)); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <strong><?php echo e(__('text.shipping_method')); ?>:</strong>
                                    <p class="section-lead text-uppercase"><?php echo e($data['order']->courier); ?>

                                        <?php echo e($data['order']->shipping_method); ?></p>
                                    <?php if($data['order']->receipt_number != null): ?>
                                    <strong><?php echo e(__('text.receipt_number')); ?>:</strong>
                                        <p class="section-lead text-uppercase"><?php echo e($data['order']->receipt_number); ?> </p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Subtotal</div>
                                        <div class="invoice-detail-value"><?php echo e(rupiah($data['order']->subtotal)); ?></div>
                                    </div>
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name"><?php echo e(__('text.shipping_cost')); ?></div>
                                        <div class="invoice-detail-value"><?php echo e(rupiah($data['order']->shipping_cost)); ?>

                                        </div>
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

            </div>
        </div>
    </div>
  <div class="card">
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('modal'); ?>
    <div class="modal fade" id="resiModal" tabindex="-1" role="dialog" aria-labelledby="resiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?php echo e(route('feature.order.inputresi')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="resiModalLabel">Input Resi Pengiriman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nomor Pesanan</label>
                            <input type="text" class="form-control" name="invoice_number" id="invoice_number"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Resi</label>
                            <input type="text" class="form-control" name="receipt_number" id="receipt_number"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('button.cancel')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('button.save')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $('#resiModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            $('#invoice_number').val(id);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/feature/order/show.blade.php ENDPATH**/ ?>