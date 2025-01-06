<div class="form-group">

    <label for="<?php echo e($id); ?>"><?php echo e($label); ?></label>

    <?php if($type != 'textarea'): ?>
        <input type="<?php echo e($type); ?>" class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            name="<?php echo e($name); ?>" id="<?php echo e($id); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>"
            <?php if($value !== null && $value !== ''): ?> value="<?php echo e($value); ?>"
        <?php else: ?>
            value="<?php echo e(old($name)); ?>" <?php endif; ?>
            <?php echo e($attributes->merge(['class' => 'form-group'])); ?> <?php echo e($isRequired ? 'required' : ''); ?>>
    <?php else: ?>
        <textarea rows="3" class="summernote <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="<?php echo e($name); ?>" id="<?php echo e($id); ?>"   <?php echo e($attributes->merge(['class' => 'form-group'])); ?> <?php echo e($isRequired ? 'required' : ''); ?> >
         <?php if($value !== null && $value !== ''): ?>
<?php echo e($value); ?>

<?php else: ?>
<?php echo e(old($name)); ?>

<?php endif; ?>
</textarea>
    <?php endif; ?>


    <?php if($hintText): ?>
        <small class="form-text text-muted"><?php echo e($hintText); ?></small>
    <?php endif; ?>

    
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <?php echo e($message); ?>

        </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>
<?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/components/forms/input.blade.php ENDPATH**/ ?>