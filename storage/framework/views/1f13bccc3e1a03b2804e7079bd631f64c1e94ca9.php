<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php $__env->startComponent('components.backend.card.card-table'); ?>
                <?php $__env->slot('header'); ?>
                    <h4 class="card-title"><?php echo e(__('menu.customer')); ?></h4>
                    <div class="card-header-action">
                    </div>
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('thead'); ?>
                    <tr>
                        <th><?php echo e(__('field.name')); ?></th>
                        <th><?php echo e(__('field.email')); ?></th>
                        <th><?php echo e(__('field.join_at')); ?></th>
                    </tr>
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('tbody'); ?>
                    <?php $__currentLoopData = $data['customer']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($customer->name); ?></td>
                            <td><?php echo e($customer->email); ?></td>
                            <td><?php echo e(tanggal($customer->created_at)); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/customer/index.blade.php ENDPATH**/ ?>