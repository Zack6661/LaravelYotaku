<?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination__option">
            
            <?php if($paginator->onFirstPage()): ?>
                <a class="" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <i class="fa fa-angle-left"></i>
                </a>
            <?php else: ?>
                <a class="" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                   <i class="fa fa-angle-left"></i>
                </a>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <a class="" aria-disabled="true"><?php echo e($element); ?></a>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <a class="aktif" aria-current="page"><?php echo e($page); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>"><i class="fa fa-angle-right"></i></a>
            <?php else: ?>
                <a aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/vendor/pagination/custom.blade.php ENDPATH**/ ?>