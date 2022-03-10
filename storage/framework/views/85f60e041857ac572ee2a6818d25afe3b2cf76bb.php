

<?php $__env->startSection('content'); ?>
    <div class="card card-bg-dark " >
        <div class="card-header">
            <h3 class="fw-bold">Edit/Update Product</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('update-product/'.$products->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <?php echo method_field('PUT'); ?>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value=""><?php echo e($products->category->name); ?></option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="<?php echo e($products->name); ?>" class="form-control bg-light text-center" name="name"  >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" value="<?php echo e($products->slug); ?>" class="form-control bg-light text-center " name="slug" bg-light>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control bg-light" ><?php echo e($products->small_description); ?></textarea>
                     </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                       <textarea name="description" rows="3" class="form-control bg-light" ><?php echo e($products->description); ?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" value="<?php echo e($products->original_price); ?>" name="original_price" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" value="<?php echo e($products->selling_price); ?>" name="selling_price" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" value="<?php echo e($products->tax); ?>" name="tax" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" value="<?php echo e($products->qty); ?>" name="qty" class="form-control bg-light text-center ">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" <?php echo e($products->status == "1" ? 'checked' :''); ?> name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" <?php echo e($products->trending == "1" ? 'checked' :''); ?>  name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" value="<?php echo e($products->meta_title); ?>" name="meta_title" rows="3" class="form-control bg-light" ></input>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control bg-light" ><?php echo e($products->meta_keywords); ?></textarea>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_descrip" rows="3" class="form-control bg-light" ><?php echo e($products->meta_descrip); ?></textarea>
                     </div>
                     <?php if($products->image): ?>
                         <img class="w-25" src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" alt="...">
                     <?php endif; ?>
                     <div class="col-md-12 mb-5">
                        <input type="file" name="image" rows="3" id="formFile" class="form-control bg-light" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>