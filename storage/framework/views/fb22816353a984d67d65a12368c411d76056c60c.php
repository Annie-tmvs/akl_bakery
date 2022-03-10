<nav class="navbar navbar-expand-lg navbar-light nav ">
    <div class="container-fluid navb ms-5">
      <a class="navbar-brand" href="<?php echo e('/'); ?>">
            <img src="<?php echo e(asset('assets/images/akl1.png')); ?>" alt="..." width="30" height="30">
            <strong>AKL Bakery</strong>
      </a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
          <a class="nav-link" href="<?php echo e(url('category')); ?>">category</a>
          <a class="nav-link" href="<?php echo e(url('cart')); ?>">cart</a>
          <a class="nav-link" href="<?php echo e(url('contact')); ?>">contact</a>

    <!--      <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
            <?php echo e(__('Logout')); ?>

            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
          </form> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user me-1"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdownMenuLink" >
            <li>
              <a class="dropdown-item" href="<?php echo e(url('my-orders')); ?>">
                My Orders
              </a>
            </li>          
            <li>
                <a class="dropdown-item"  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  <?php echo e(__('Logout')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>                                
                </form>
            </li>
            </ul>
        </li> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
              <?php if(auth()->guard()->guest()): ?>
                  <?php if(Route::has('login')): ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                      </li>
                  <?php endif; ?>

                  <?php if(Route::has('register')): ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                      </li>
                  <?php endif; ?>
              <?php else: ?>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo e(Auth::user()->name); ?>

                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">
                      My Profile
                  </a></li>
                  <li>
                    <a class="dropdown-item" href="<?php echo e(url('my-orders')); ?>">
                      My Orders
                    </a>
                  </li>
                  <li>
                      <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                      <?php echo e(__('Logout')); ?>

                      </a>
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                          <?php echo csrf_field(); ?>
                      </form>
                  </li>
                  </ul>
              </li>

              <!-- <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <?php echo e(Auth::user()->name); ?>

                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              <?php echo e(__('Logout')); ?>

                          </a>

                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                              <?php echo csrf_field(); ?>
                          </form>
                      </div>
                  </li> -->
              <?php endif; ?>
          </ul>
      </div>
          </div>
      </nav>

        </div>
      </div>
  
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/layouts/inc/frontnav.blade.php ENDPATH**/ ?>