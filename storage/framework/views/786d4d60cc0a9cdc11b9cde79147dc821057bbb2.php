<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php $__env->startComponent('components.backend.card.card-table'); ?>
                <?php $__env->slot('header'); ?>
                    <h4 class="card-title"><?php echo e(__('menu.order')); ?></h4>
                  
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('thead'); ?>
                    <tr>
                        <th><?php echo e(__('field.order_invoice')); ?></th>
                        <th><?php echo e(__('field.order_customer')); ?></th>
                        <th><?php echo e(__('field.order_total')); ?></th>
                        <th><?php echo e(__('field.order_status')); ?></th>
                        <th><?php echo e(__('field.created_at')); ?></th>
                        <th><?php echo e(__('field.action')); ?></th>
                    </tr>
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('tbody'); ?>
                    <?php $__currentLoopData = $data['order']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($order->invoice_number); ?></td>
                            <td><?php echo e($order->Customer->name); ?></td>
                            <td><?php echo e($order->total_pay); ?></td>
                            <td><?php echo $order->status_name; ?></td>
                            <td><?php echo e($order->created_at); ?></td>
                            <td>
                                <?php if (isset($component)) { $__componentOriginal1d7d7da350504ec7bfaddf06a2b51e0307422404 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button\DropdownButton::class, ['title' => __('field.action')]); ?>
<?php $component->withName('button.dropdown-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    <a class="dropdown-item has-icon" href="<?php echo e(route('feature.order.show',$order->id)); ?>"><i class="fa fa-eye"></i>
                                        <?php echo e(__('button.detail')); ?></a>
                                    <?php if($order->status == 1): ?>
                                    <a class="dropdown-item has-icon" href="#"><i class="fa fa-truck"></i>
                                        <?php echo e(__('Input Resi')); ?></a>
                                    <?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d7d7da350504ec7bfaddf06a2b51e0307422404)): ?>
<?php $component = $__componentOriginal1d7d7da350504ec7bfaddf06a2b51e0307422404; ?>
<?php unset($__componentOriginal1d7d7da350504ec7bfaddf06a2b51e0307422404); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/feature/order/index.blade.php ENDPATH**/ ?>