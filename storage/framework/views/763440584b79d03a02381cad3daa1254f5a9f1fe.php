<div class="section-header">
    <h1 class="text-capitalize"><?php echo e(request()->segment(3) ?? request()->segment(2)); ?></h1>
    <div class="section-header-breadcrumb">
      <?php $__currentLoopData = request()->segments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="breadcrumb-item text-capitalize"><?php echo $loop->last ? '' : '<a href="#">'; ?> <?php echo e($item); ?></a></div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/layouts/backend/data/breadcrumbs.blade.php ENDPATH**/ ?>