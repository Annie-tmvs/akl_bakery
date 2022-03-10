

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header ">
            <h3 class="fw-bold">Products Page</h3>
        </div>
        <div class="card-body text-start">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody >
                    <thead>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->description); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('assets/uploads/products/'.$item->image)); ?>" class="cate-image" alt="Image here">
                                </td>
                                <td class="w-0">
                                    <a href="<?php echo e(url('edit-prod/'.$item->id)); ?>" class="btn btn-primary me-3"><i class="fa fa-edit me-2"></i> Edit</a>
                                    <a href="<?php echo e(url('delete-category/'.$item->id)); ?>" class="btn btn-danger" onclick="return confirm('are you sure you want to Delete !')"><i class="fa fa-trash me-2"></i> Delete</a>
                                </td>
                            </tr>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </thead>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/admin/products/index.blade.php ENDPATH**/ ?>