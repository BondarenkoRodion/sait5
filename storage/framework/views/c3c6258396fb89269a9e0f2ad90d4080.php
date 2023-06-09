
<?php $__env->startSection('content'); ?>
    <div class = "container">
        <div>
        <h3>ДОДАТИ ТОВАР</h3>
            <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="productName">Введіть назву</label>
                    <input value="<?php echo e(old('productName')); ?>" type="text" name="productName" class="form-control" id="productName" placeholder="НАЗВА ТОВАРУ">
                    <?php $__errorArgs = ['productName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="productDescription">Введіть опис</label>
                    <textarea class="form-control" name="productDescription" id="productDescription" placeholder="ОПИС ТОВАРУ"><?php echo e(old('productDescription')); ?></textarea>
                    <?php $__errorArgs = ['productDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="files">Завантажте зображення</label>
                    <input type="file" name="photos[]" class="form-control" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <label for="productID">Введіть номер</label>
                    <input value="<?php echo e(old('productID')); ?>"type="text" class="form-control" name="productID" id="productID" placeholder="АЙДІ ТОВАРУ">
                    <?php $__errorArgs = ['productID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                </div>
                <div class="form-group">
                    <label for="productID">Введіть кількість продажів</label>
                    <input value="<?php echo e(old('productID')); ?>"type="text" class="form-control" name="productID" id="productID" placeholder="КІЛЬКІСТЬ ПРОДАЖІВ">
                    <?php $__errorArgs = ['productSales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="category_id"> Оберіть вид товару </label>
                    <select class="form-control" id="category_id" name="category_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                        <?php echo e($category->id == old('category_id') ? 'selected' : ''); ?>

                        
                        value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<?php echo e($tag->id); ?>" id="tag" name="tags[]">
                    <label class="form-check-label" for="tag"><?php echo e($tag->title); ?></label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class='d-flex justify-content-between'>
                    <button type="submit" class="btn btn-primary mt-2">ДОДАТИ</button> <a href="/products" class="btn btn-info mt-2">НАЗАД</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/create.blade.php ENDPATH**/ ?>