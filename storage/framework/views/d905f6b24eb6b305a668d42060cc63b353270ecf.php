 <!-- Offcanvas Menu Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="offcanvas-menu-wrapper">
     <div class="offcanvas__close">+</div>
     <ul class="offcanvas__widget">
         <li><span class="icon_search search-switch"></span></li>
         <li><a href="#"><span class="icon_bag_alt"></span>
             <div class="tip">2</div>
         </a></li>
     </ul>
     <div class="offcanvas__logo">
         <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('ashion')); ?>/img/logo.png" alt=""></a>
     </div>
     <div id="mobile-menu-wrap"></div>
 </div>
 <!-- Offcanvas Menu End -->

 <!-- Header Section Begin -->
 <header class="header">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-3 col-lg-2 text-left">
                 <div class="">
                     <h1 class="title-logo">YOTAKUSHOP</h1>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-7 text-right">
                 <nav class="header__menu">
                     <ul>
                         <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                         <li class="<?php echo e(request()->is('product*') ? 'active' : ''); ?>"><a href="<?php echo e(route('product.index')); ?>">Shop</a></li>
                         <li class="<?php echo e(request()->is('category*') ? 'active' : ''); ?>"><a href="<?php echo e(route('category.index')); ?>">Category</a></li>
                         
                         
                         <li class="<?php echo e(request()->is('category*') ? 'active' : ''); ?>"><a href="#"><i class="fa fa-angle-down"></i>Contact</a>
                            <ul class="dropdown">
                                <li><a href="https://shopee.co.id/yotakushop">Shopee</a></li>
                                <li><a href="https://www.tokopedia.com/yotakushop">Tokopedia</a></li>
                                <li><a href="https://www.instagram.com/yotakushop/">Instagram</a></li>
                                <li><a href="https://api.whatsapp.com/send/?phone=62085171665572">Whatsapp</a></li>
                            </ul>
                         </li>
                         <?php if(auth()->guard()->check()): ?>
                         <li class="<?php echo e(request()->is('category*') ? 'active' : ''); ?>"><a href="#"><i class="fa fa-angle-down"></i> <?php echo e(auth()->user()->name); ?></a>
                            <ul class="dropdown">
                                <li><a href="<?php echo e(route('transaction.index')); ?>">Riwayat Belanja</a></li>
                                <li><a href="<?php echo e(route('account.index')); ?>">Pengaturan Akun</a></li>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                        this.closest('form').submit();" > Logout
                                    </a>
                                    </li>
                                </form>
                            </ul>
                         </li>
                             <?php else: ?>
                             <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                         <?php endif; ?>
                     </ul>
                 </nav>
             </div>
             <div class="col-lg-3">
                 <div class="header__right">
                     <ul class="header__right__widget">
                         <li><span class="icon_search search-switch"></span></li>
                         <li><a href="<?php echo e(route('cart.index')); ?>"><span class="icon_bag_alt"></span>
                             <div class="tip">
                                 <?php echo e($totalCart ?? 0); ?>

                             </div>
                         </a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="canvas__open">
             <i class="fa fa-bars"></i>
         </div>
     </div>
 </header>
 <!-- Header Section End --><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/layouts/frontend/data/navbar.blade.php ENDPATH**/ ?>