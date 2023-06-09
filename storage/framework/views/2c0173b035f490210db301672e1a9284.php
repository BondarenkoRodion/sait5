

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="mb-4">Зображення товару <span class="text-primary"><?php echo e($product->title); ?></span></h2>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-container">
                            <img src="/product_photos/<?php echo e($photo->image); ?>" class="card-img-top" alt="Product Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Зображення <?php echo e($loop->iteration); ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a href="/products" class="btn btn-primary">На головну</a>
    </div>

    <style>
        .image-container {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .card-title {
            position: relative;
            z-index: 1;
            color: black;
            background-image: linear-gradient(to right, #000000, #000000);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: background-image 0.3s ease;
        }

        .card:hover .card-title {
            background-image: linear-gradient(to right, #ff6b6b, #3a1c71);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/photos.blade.php ENDPATH**/ ?>