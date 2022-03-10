

<?php $__env->startSection('title', $products->name); ?>


<?php $__env->startSection('content'); ?>

    <div class="py-4 mb-4 shadow-sm border-top">
        <div class="container">
            <h6 class="mb-0">
                <a class="link-dark" href="<?php echo e(url('category')); ?>">
                    Collections
                </a> /
                <a class="link-dark" href="<?php echo e(url('category/'. $products->category->slug )); ?>">
                    <?php echo e($products->category->name); ?>

                </a> /
                <a class="link-dark" href="<?php echo e(url('category/'. $products->category->slug.'/'.$products->slig )); ?>">
                <?php echo e($products->name); ?> 
                </a>
            </h6>
        </div>
    </div>

<div class="container-fluid con2 py-5">
    <div class="container ">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right mb-3">
                        <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" class="w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-8">
                            <?php echo e($products->name); ?>

                        <?php if($products->trending == '1'): ?>
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                        <?php endif; ?>
                        </h2>
                        <hr>
                        <?php if($products->original_price > '0'): ?>
                        <label class="me-3 ">Original Price : <s> <?php echo e($products->original_price); ?> kip</s></label> 
                        <?php endif; ?>

                        <label class="fw-bold">Selling Price :  <?php echo e($products->selling_price); ?> kip</label>
                        <p class="mt-3">
                            <?php echo $products->small_description; ?>

                        </p>
                        <hr>
                        <?php if($products->qty > '0'): ?>
                            <label class="badge bg-success">In stock</label>
                        <?php else: ?>
                            <label class="badge bg-danger">Out of stock</label>
                        <?php endif; ?>
                        <div class="row mt-2">
                            <div class="col-lg-3">
                                <input type="hidden" value="<?php echo e($products->id); ?>" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center ">
                                    <button class=" input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control text-center qty-input " />
                                    <button class=" input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <br/>
                                <?php if($products->qty > '0'): ?>
                                    <button type="button" class="btn btn-success addToCartBtn me-3 float-start">Add to cart <i class="fa-solid fa-cart-shopping"></i></button>
                                <?php endif; ?>
                                <button type="button" class="btn btn-primary me-3 float-start">Add to wishist <i class="fa fa-heart"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <h3>Description</h3>
                <p><?php echo e($products->description); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/frontend/products/show.blade.php ENDPATH**/ ?>