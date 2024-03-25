
<?php $__env->startSection('main'); ?>

<div class="row">
    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-journal-richtext"></i> Product Details</h5>
        <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
    </div>
    <div class="col-md-12 table-responsive mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S. No</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>M.R.P</th>
                    <th>Selling Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $index = ($products->currentPage() - 1) * $products->perPage()+$loop->iteration;
                ?>
                <tr>
                    <td><?php echo e($index); ?></td>
                    <td><img src="products/<?php echo e($product->image); ?>" style="width: 50px; height: 50px; object-fit: contain;" alt="Product"></td>
                    <td><a href="products/<?php echo e($product->id); ?>/show"><?php echo e($product->name); ?></a></td>
                    <td>Rs.<?php echo e($product->mrp); ?></td>
                    <td>Rs.<?php echo e($product->price); ?></td>
                    <td>
                        <a href="products/<?php echo e($product->id); ?>/edit" onclick="return confirm('Are you sure you want to Edit?')" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="products/<?php echo e($product->id); ?>/delete" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($products->links()); ?>

    </div>
    <!-- Row end-->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\new\Project_Test\php\Laraval\001_testing\testings_tutorials\resources\views/products/index.blade.php ENDPATH**/ ?>