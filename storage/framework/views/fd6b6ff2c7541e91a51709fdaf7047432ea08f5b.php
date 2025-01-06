<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php $__env->startComponent('components.backend.card.card-table'); ?>
                <?php $__env->slot('header'); ?>
                    <h4 class="card-title"><?php echo e(__('menu.product')); ?></h4>
                    <div class="card-header-action">
                        <a href="<?php echo e(route('master.product.create')); ?>" class="btn btn-primary"><?php echo e(__('button.add')); ?>

                            <?php echo e(__('menu.product')); ?></a>
                    </div>
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('thead'); ?>
                    <tr>
                        <th><?php echo e(__('field.product_name')); ?></th>
                        <th><?php echo e(__('field.category_name')); ?></th>
                        <th><?php echo e(__('field.thumbnails')); ?></th>
                        <th><?php echo e(__('field.price')); ?></th>
                        <th><?php echo e(__('text.sold')); ?></th>
                        <th><?php echo e(__('field.created_at')); ?></th>
                        <th><?php echo e(__('field.action')); ?></th>
                    </tr>
                <?php $__env->endSlot(); ?>
                <?php $__env->slot('tbody'); ?>
                    <?php $__currentLoopData = $data['product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->category->name); ?></td>
                            <td><img src="<?php echo e($product->thumbnails_path); ?>" class="img-thumbnail" width="100" alt=""></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->total_sold); ?></td>
                            <td><?php echo e(tanggal($product->created_at)); ?></td>
                            <td>
                                <?php if (isset($component)) { $__componentOriginal1d7d7da350504ec7bfaddf06a2b51e0307422404 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button\DropdownButton::class, ['title' => __('field.action')]); ?>
<?php $component->withName('button.dropdown-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    <a class="dropdown-item has-icon" href="<?php echo e(route('master.product.edit',$product->id)); ?>"><i class="far fa-edit"></i>
                                        <?php echo e(__('button.edit')); ?></a>
                                    <a class="dropdown-item has-icon" href="<?php echo e(route('master.product.show',$product->id)); ?>"><i class="far fa-eye"></i>
                                        <?php echo e(__('button.detail')); ?></a>
                                    <a class="dropdown-item has-icon btn-delete" href="<?php echo e(route('master.product.delete',$product->id)); ?>"><i class="fa fa-trash"></i>
                                        <?php echo e(__('button.delete')); ?></a>
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

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/master/product/index.blade.php ENDPATH**/ ?>