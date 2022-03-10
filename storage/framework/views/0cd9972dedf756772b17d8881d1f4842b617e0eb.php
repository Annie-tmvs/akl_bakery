

<?php $__env->startSection('content'); ?>
    <div class="card card-bg-dark " >
        <div class="card-header">
            <h3 class="fw-bold">Add Product</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('insert-product')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option value="">Select a Category</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control bg-light text-center" name="name"  >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control bg-light text-center " name="slug" bg-light>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control bg-light" ></textarea>
                     </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                       <textarea name="description" rows="3" class="form-control bg-light" ></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number"  name="original_price" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number"  name="selling_price" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number"  name="tax" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number"  name="qty" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox"  name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox"  name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" rows="3" class="form-control bg-light" ></input>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control bg-light" ></textarea>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_descrip" rows="3" class="form-control bg-light" ></textarea>
                     </div>
                     <div class="col-md-12 mb-5">
                        <input type="file" name="image" rows="3" id="formFile" class="form-control bg-light" ></input>
                     </div>
                     <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/admin/product/add.blade.php ENDPATH**/ ?>