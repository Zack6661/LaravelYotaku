        <div class="card">
            <div class="card-body">
                <form action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo e($content); ?>

                </form>
            </div>
        </div>
<?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/components/backend/card/card-form.blade.php ENDPATH**/ ?>