

<?php $__env->startSection('content'); ?>
    <?php 
        $user = Auth::user();
    ?>
    <h3>Список товарів користувача: <strong><?php echo e($user->name); ?></strong></h3>
    <div>
        <?php if(session('success')): ?>
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4>Вітаю!<h4>
                <p class="mb-0">Новий товар було успішно додано!</p>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="product-grid">
                <?php if(auth()->check()): ?>
                    <?php $__currentLoopData = auth()->user()->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-frame">
                            <div class="product-card">
                                <div class="image-container">
                                    <?php if($product->photos->count() > 0): ?>
                                        <img src="/product_photos/<?php echo e($product->photos[0]->image); ?>" alt="Product Image">
                                    <?php else: ?>
                                        Фото недоступне!
                                    <?php endif; ?>
                                </div>
                                <div class="product-details">
                                    <h5 class="card-title"><?php echo e($product->productName); ?></h5>
                                    <p class="card-text"><?php echo e($product->productDescription); ?></p>
                                    <p class="card-text">Айді товару: <?php echo e($product->productID); ?></p>
                                    <p class="card-text">Продажі: <?php echo e($product->productSales); ?></p>
                                    <p class="card-text">Категорія: <?php echo e($product->category->title); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h3>Увійдіть в акаунт!</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <style>
.product-frame {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
}

.product-frame:last-child {
    margin-bottom: 0;
}

.product-card {
    display: flex;
}

.image-container {
    width: 200px;
    height: 200px;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-details {
    flex-grow: 1;
    margin-left: 20px;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/list.blade.php ENDPATH**/ ?>