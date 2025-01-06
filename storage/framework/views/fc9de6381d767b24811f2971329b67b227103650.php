<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.backend.card.card-form'); ?>
        <?php $__env->slot('action',route('setting.web.update')); ?>
        <?php $__env->slot('content'); ?>
        <?php $__currentLoopData = $data['setting']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item['type'] == 0): ?>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label><?php echo e($item['label']); ?></label>
                    <input name="field[<?php echo e($item['id']); ?>]" id="<?php echo e($item['id']); ?>" class="form-control <?php $__errorArgs = [$item['id']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    type="text" autocomplete="false" value="<?php echo e($item['value']); ?>">
                    <?php $__errorArgs = [$item['id']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <?php elseif($item['type'] == 1): ?>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label><?php echo e($item['label']); ?></label>
                    <textarea name="field[<?php echo e($item['id']); ?>]" class="summernote <?php $__errorArgs = [$item['id']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php endif; ?>" rows="3"><?php echo e($item['value']); ?></textarea>
                   <?php $__errorArgs = [$item['id']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <?php elseif($item['type'] == 2): ?>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <img src="<?php echo e($item['file_path']); ?>" alt="<?php echo e($item['name']); ?>" height="150px" width="150px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label><?php echo e($item['label']); ?></label>
                    <input type="file" name="field[<?php echo e($item['id']); ?>]" class="form-control">
                   <?php $__errorArgs = [$item['id']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="col">
            <div class="text-end">
                <button type="submit" class="btn btn-primary me-0" href="#">Simpan</button>
            </div>
        </div>
    </div>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/setting/web.blade.php ENDPATH**/ ?>