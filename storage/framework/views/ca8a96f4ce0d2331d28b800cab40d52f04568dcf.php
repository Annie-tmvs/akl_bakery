

<?php $__env->startSection('title'); ?>
    wellcome to AKL-Bakerey 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="con1">
                    <div class="container">

                            <div class="col-md-12">
                                <img class="img float-start rounded-1 m-5" src="<?php echo e(asset('assets/images/cafe.jpg')); ?>" alt="..." >
                                <div class="py-5">
                                    <h1>Welcome</h1>
                                    <h6 class="fw-lighter"> to <strong>AKL BAKERY </strong><label class="fst-italic"> /ˈbeɪk(ə)ri/ </label></h6>
                                    <h5 class="">
                                        New Collections
                                    </h5>
                                
                                <di class="mb-5">
                                    <a href="<?php echo e(url('category')); ?>" class="link-dark"> <u class="fs-5">Order</u> >></a>
                                </di>
                                </div>
                            </div>
        
                    </div>
                </div>         

            <!--page1-->
            <div class="pb-5 mb-5">
                <div class="contaainer-fluid">
                    <div class="container py-5">
                        <hr>
                        <p><strong>GREEN TEA /</strong><label class="fst-italic">matcha latte</label></p>
                        <p>
                            Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.
                        </p>

                    </div>
                </div>
            </div>
                    <!--page2-->
    <div class="py-5 con2 text-center">
        <div class="container ">
            <div class="row text-center">
                <h4 class="mb-5">Featured Products</h4>
                    <p class="px-5">
                        A featured product is a way to mark any product in the WooCommerce website. One can mark multiple products as featured products. These featured products can be displayed anywhere. You can mark the featured product from the product page itself.
                    </p>
                <div class="pt-3 ">
                    <div class="featured-carousel owl-carousel owl-theme">
                        <?php $__currentLoopData = $featured_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item py-5">
                            <div class="me-3">
                                <img class="img-s rounded" src="<?php echo e(asset('assets/uploads/products/'.$prod->image)); ?>" alt="product image">
                                <div class="text-start">
                                    <h6> <?php echo e($prod->name); ?></h6>
                                    <p> <?php echo e($prod->selling_price); ?> kip</p>
                                <!--    <span class="float-end"><s></s></span> -->
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
            <!--page3-->
            <div class="pt-5 con2 ">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center">Trending Category</h4>
                        <p class="px-5 text-center">
                        A trending topic is a subject that experiences a surge.
                        </p>
                        <div class="pt-3">
                        <div class="featured-carousel owl-carousel owl-theme">
                        <?php $__currentLoopData = $trending_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tcate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item py-5">
                            <a class="link-dark" href="<?php echo e(url('view-category/'.$tcate->slug)); ?>">
                            <div class="">
                                <img class="img-s" src="<?php echo e(asset('assets/uploads/category/'.$tcate->image)); ?>" alt="product image">
                                <div class=" ">
                                    <h6><?php echo e($tcate->name); ?></h6>
                                    <p>
                                        <?php echo e($tcate->description); ?>

                                    </p>                        
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:25,
            nav:true,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:5
                },
                1000:{
                    items:5
                }
            }
        })

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/frontend/index.blade.php ENDPATH**/ ?>