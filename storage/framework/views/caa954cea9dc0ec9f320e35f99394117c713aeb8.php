<div class="form-group">

    <label for="<?php echo e($id); ?>"><?php echo e($label); ?></label>

    <select <?php echo e($attributes->merge(['class' => 'form-control'])); ?>

        class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="<?php echo e($name); ?>" id="<?php echo e($id); ?>">
        <?php echo e($slot); ?>

    </select>

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
<?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/components/forms/select.blade.php ENDPATH**/ ?>