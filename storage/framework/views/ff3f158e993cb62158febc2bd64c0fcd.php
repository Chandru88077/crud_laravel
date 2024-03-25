
<?php $__env->startSection('main'); ?>
<!-- Row Strar-->
<div class="row">
    <h5><i class="bi bi-pencil-square"></i> Product Details</h5>
    <nav class="my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">View Product</li>
        </ol>
    </nav>

    <div class="card">
        <img src="/products/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title fw-bold"><?php echo e($product->name); ?></h5>
            <p class="card-text"><?php echo e($product->description); ?></p>
            <p class="fw-semibold">M.R.P <small class="text-danger text-decoration-line-through">Rs. <?php echo e($product->mrp); ?></small></p>
            <p class="fw-semibold">Selling Price <small class="text-success">Rs. <?php echo e($product->price); ?></small></p>
        </div>
    </div>

</div>
    <!-- Row end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\new\Project_Test\php\Laraval\001_testing\testings_tutorials\resources\views/products/show.blade.php ENDPATH**/ ?>