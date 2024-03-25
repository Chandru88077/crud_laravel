
<?php $__env->startSection('main'); ?>
<!-- Row Start-->
<div class="row">
    <h5><i class="bi bi-pencil-square"></i> Edit Product</h5>
    <hr/>
    <nav class="my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>
    </nav>
    <div class="col-md-8">
        <form action="/products/<?php echo e($product->id); ?>/update" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control <?php if($errors->has('name')): ?><?php echo e('is-invalid'); ?> <?php endif; ?>" placeholder="Enter Product Name" value="<?php echo e(old('name',$product->name)); ?>">
                    <?php if($errors->has('name')): ?>
                        <div class="invalid-feedback"><?php echo e($errors->first('name')); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="mrp" class="form-label">M.R.P</label>
                    <input type="text" name="mrp" id="mrp" class="form-control <?php if($errors->has('mrp')): ?><?php echo e('is-invalid'); ?> <?php endif; ?>" placeholder="Enter M.R.P" value="<?php echo e(old('mrp',$product->mrp)); ?>">
                    <?php if($errors->has('mrp')): ?>
                        <div class="invalid-feedback"><?php echo e($errors->first('mrp')); ?></div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Selling Price</label>
                    <input type="text" name="price" id="price" class="form-control <?php if($errors->has('price')): ?><?php echo e('is-invalid'); ?> <?php endif; ?>" placeholder="Enter Selling Price" value="<?php echo e(old('price',$product->price)); ?>">
                    <?php if($errors->has('price')): ?>
                        <div class="invalid-feedback"><?php echo e($errors->first('price')); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control <?php if($errors->has('description')): ?><?php echo e('is-invalid'); ?> <?php endif; ?>" style="resize: none; height: 150px;" placeholder="Enter Description"><?php echo e(old('description', $product->description)); ?></textarea>
                    <?php if($errors->has('description')): ?>
                        <div class="invalid-feedback"><?php echo e($errors->first('description')); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control <?php if($errors->has('image')): ?><?php echo e('is-invalid'); ?> <?php endif; ?>">
                    <?php if($errors->has('image')): ?>
                        <div class="invalid-feedback"><?php echo e($errors->first('image')); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Update Product</button>
                <button type="reset" class="btn btn-danger">Clear All</button>
            </div>

        </form>
    </div>
</div>
<!-- Row End-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\new\Project_Test\php\Laraval\001_testing\testings_tutorials\resources\views/products/edit.blade.php ENDPATH**/ ?>