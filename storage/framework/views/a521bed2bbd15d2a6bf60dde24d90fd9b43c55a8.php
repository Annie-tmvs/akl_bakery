

<?php $__env->startSection('content'); ?>
    <div class="card card-bg-dark " >
        <div class="card-header">
            <h3 class="fw-bold">Edit/Update Category</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('update-category/'.$category->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <?php echo method_field('PUT'); ?>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="<?php echo e($category->name); ?>" class="form-control bg-light text-center" name="name"  >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" value="<?php echo e($category->slug); ?>" class="form-control bg-light text-center " name="slug" bg-light>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                       <textarea name="description" rows="3" class="form-control bg-light" ><?php echo e($category->description); ?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox"  name="status" <?php echo e($category->status == "1" ? 'checked':''); ?> >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox"  name="popular" <?php echo e($category->popular == "1" ? 'checked':''); ?> >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" rows="3" class="form-control bg-light" value="<?php echo e($category->meta_title); ?>" >
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control bg-light" ><?php echo e($category->meta_keywords); ?></textarea>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control bg-light" ><?php echo e($category->meta_descrip); ?></textarea>
                     </div>
                     <?php if($category->image): ?>
                         <img class="w-25" src="<?php echo e(asset('assets/uploads/category/'.$category->image)); ?>" alt="Category image">
                     <?php endif; ?>
                     <div class="col-md-12 mb-5">
                        <input type="file" name="image" rows="3" id="formFile" class="form-control bg-light"  >
                     </div>
                     <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" >Update</button>
                     </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AKL-Bakery\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>