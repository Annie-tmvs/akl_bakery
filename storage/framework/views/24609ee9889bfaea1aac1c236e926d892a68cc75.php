<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="" target="_blank">
      <span class="ms-1 font-weight-bold text-white">AKL Bakery</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white bg-gray <?php echo e(Request::is('dashboard') ? 'active':''); ?>" href="<?php echo e(__('dashboard')); ?>" >
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?php echo e(Request::is('categories') ? 'active':''); ?> " href="<?php echo e(url('categories')); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?php echo e(Request::is('add-categories') ? 'active':''); ?>" href="<?php echo e(url('add-categories')); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Add categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?php echo e(Request::is('products') ? 'active':''); ?> " href="<?php echo e(url('products')); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?php echo e(Request::is('add-products') ? 'active':''); ?>" href="<?php echo e(url('add-products')); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Add Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="../pages/tables.html">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Tables</span>
        </a>
      </li>

    </ul>
  </div>

</aside><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/layouts/inc/sidebar.blade.php ENDPATH**/ ?>