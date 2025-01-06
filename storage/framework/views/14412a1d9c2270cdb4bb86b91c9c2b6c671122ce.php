<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo e(route('admin.dashboard')); ?>">Admin</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?php echo e(route('admin.dashboard')); ?>">A</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Menu Admin</li>
          <li><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> <span> <?php echo e(__('menu.dashboard')); ?></span></a></li>
          <li><a class="nav-link" href="<?php echo e(route('customer.index')); ?>"><i class="fas fa-users"></i> <span> <?php echo e(__('menu.customer')); ?></span></a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i><span>Master</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="<?php echo e(route('master.category.index')); ?>"><?php echo e(__('menu.category')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('master.product.index')); ?>"><?php echo e(__('menu.product')); ?></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span><?php echo e(__('menu.order')); ?></span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="<?php echo e(route('feature.order.index')); ?>"><?php echo e(__('menu.order_all')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('feature.order.index',0)); ?>"><?php echo e(__('menu.order_pending')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('feature.order.index',1)); ?>"><?php echo e(__('menu.order_process')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('feature.order.index',2)); ?>"><?php echo e(__('menu.order_shipped')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('feature.order.index',3)); ?>"><?php echo e(__('menu.order_completed')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('feature.order.index',4)); ?>"><?php echo e(__('menu.order_canceled')); ?></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span><?php echo e(__('menu.setting')); ?></span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="<?php echo e(route('setting.web')); ?>"><?php echo e(__('menu.setting_web')); ?></a></li>
              <li><a class="nav-link" href="<?php echo e(route('setting.shipping')); ?>"><?php echo e(__('menu.setting_address')); ?></a></li>
            </ul>
          </li>
        </ul>
    </aside>
  </div><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/layouts/backend/data/sidebar.blade.php ENDPATH**/ ?>