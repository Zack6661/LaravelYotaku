<div class="product__item">
    <div class="product__item__pic set-bg"
        data-setbg="<?php echo e($image); ?>">
        <div class="label new">New</div>
        <ul class="product__hover">
            <li><a href="<?php echo e($image); ?>"
                    class="image-popup"><span class="arrow_expand"></span></a></li>
            <li><a href="<?php echo e($route); ?>"><span><i class="fa fa-eye"></i></span></a></li>
        </ul>
    </div>
    <div class="product__item__text">
        <h6><a href="<?php echo e($route); ?>"><?php echo e($name); ?></a></h6>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="product__price"><?php echo e($price); ?></div>
    </div>
</div><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/components/frontend/product-card.blade.php ENDPATH**/ ?>