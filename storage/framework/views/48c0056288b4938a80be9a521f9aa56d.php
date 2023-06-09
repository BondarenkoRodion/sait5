
<?php $__env->startSection('content'); ?>
    <div class = "container">
        <div>
        <h3>РЕДАГУВАТИ ТОВАР</h3>
            <form action="<?php echo e(route('product.update', $product->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
                <div class="form-group">
                    <label for="productName">Назва товару</label>
                    <input type="text" name="productName" class="form-control" id="productName" placeholder="НАЗВА ТОВАРУ" value="<?php echo e($product->productName); ?>">
                </div>
                <div class="form-group">
                    <label for="productDescription">Опис товару</label>
                    <textarea class="form-control" name="productDescription" id="productDescription" placeholder="ОПИС ТОВАРУ"><?php echo e($product->productDescription); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="productID">Айді товару</label>
                    <input type="text" class="form-control" name="productID" id="productID" placeholder="АЙДІ ТОВАРУ" value="<?php echo e($product->productID); ?>">
                </div>
                <div class="form-group">
                    <label for="productID">Кількість продажів</label>
                    <input type="text" class="form-control" name="productSales" id="productSales" placeholder="КІЛЬКІСТЬ ПРОДАЖІВ" value="<?php echo e($product->productSales); ?>">
                </div>
                <div class="form-group">
                    <label for="tag"> Оберіть вид товару </label>
                    <select class="form-control" id="tag" name="category_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                        <?php echo e($category->id == $product->category->id ? 'selected' : ''); ?>

                        
                        value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<?php echo e($tag->id); ?>" id="tag" name="tags[]"
                    <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($tag->id == $productTag->id ? 'checked' : ''); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    >


                    <label class="form-check-label" for="tag"><?php echo e($tag->title); ?></label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary mb-3 mt-1">ЗМІНИТИ</button>
                        <a href="/products" class="btn btn-info mb-3 mt-1">НАЗАД</a>
                    </div>
               
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/edit.blade.php ENDPATH**/ ?>