

<?php $__env->startSection('title'); ?>
    <?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="py-4 mb-4 shadow-sm border-top">
    <div class="container">
        <h6 class="mb-0">Collections / <?php echo e($category->name); ?> </h6>
    </div>
</div>
     
<div class="py-5 con2">
    <div class="container">
        <div class="row">
            <h4 class="mb-4"><?php echo e($category->name); ?> :</h4>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mb-5 pb-5">
                    <a class="link-dark" href="<?php echo e(url('category/'.$category->slug.'/'.$prod->slug)); ?>">
                        <div class="card">
                            <img class="img-t" src="<?php echo e(asset('assets/uploads/products/'.$prod->image)); ?>" class="w-100" alt="product image">
                            <div class="card-body">
                                <h5><?php echo e($prod->name); ?></h5>
                                <span class="float-start"> <?php echo e($prod->selling_price); ?> kip</span>
                                <span class="float-end"><s></s></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/frontend/products/index.blade.php ENDPATH**/ ?>