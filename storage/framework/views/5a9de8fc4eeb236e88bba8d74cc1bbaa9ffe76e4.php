

<?php $__env->startSection('title'); ?>
        My Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid con2 py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light con1">
                        <h4>Order view <a href="<?php echo e(url('my-orders')); ?>" class="btn  text-white float-end"><u>Back</u></a></h4>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Datails</h4>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border "> <?php echo e($orders->fname); ?> </div>
                                <label for="">Last Name</label>
                                <div class="border "> <?php echo e($orders->lname); ?> </div>
                                <label for="">Email</label>
                                <div class="border "> <?php echo e($orders->email); ?> </div>
                                <label for="">Contact No.</label>
                                <div class="border "> <?php echo e($orders->phone); ?> </div>
                                <label for="">Shipping Address</label>
                                <div class="border ">
                                    <?php echo e($orders->village); ?>, <br>
                                    <?php echo e($orders->city); ?>, <br>
                                    <?php echo e($orders->province); ?>,
                                </div>
                                <label for="">Zip Code</label>
                                <div class="border "> <?php echo e($orders->pincode); ?> </div>
                            </div>
                            <div class="col md-6 ">
                                <h4>Order Datails</h4>
                                <hr>
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <body>
                                        <?php $__currentLoopData = $orders->orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($item->products->name); ?></td>
                                                <td><?php echo e($item->prod_qty); ?></td>
                                                <td><?php echo e($item->price); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('assets/uploads/products/'.$item->products->image )); ?>" width="50px" alt="...">
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </body>
                                </table> 
                                <h4 class="px-2">Grand Total: <span class="float-end"> <?php echo e($orders->total_price); ?> </span></h4>
                            </div>
                        </div>                       
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/frontend/orders/view.blade.php ENDPATH**/ ?>