<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand bg-black">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-light">Laravel CRUD</a>
        </div>
    </nav>
    <!-- Container start-->
    <div class="container mt-5">
        <?php if($message=Session::get('susscess')): ?>
            <div>
                <strong>Success</strong><?php echo e($message); ?>

                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent("main"); ?>
        <!-- Continer end-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH D:\new\Project_Test\php\Laraval\001_testing\testings_tutorials\resources\views/layouts/app.blade.php ENDPATH**/ ?>