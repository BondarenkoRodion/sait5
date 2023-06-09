
<?php $__env->startSection('content'); ?>
  <div>
      <div><strong>Назва:</strong>    <?php echo e($product->productName); ?></div>
      <div><strong>Опис:</strong>    <?php echo e($product->productDescription); ?></div>
      <div><strong>Айді:</strong>    <?php echo e($product->productID); ?></div>
      <div><strong>Кількість продажів: </strong> <?php echo e($product->productSales); ?></div>
      <div><strong>Категорія товару: </strong> <?php echo e($category->title); ?></div>
      <h5 class ="mt-5"> Теги товару: </h5>
      <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div><?php echo e($productTag->title); ?></div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class='d-flex mt-5'>
  <a class="btn btn-info" href="<?php echo e(route('product.edit', $product->id)); ?>">Редагувати</a>

  <form action="<?php echo e(route('product.delete', $product->id)); ?>" method="post">
  <?php echo csrf_field(); ?>
  <?php echo method_field('delete'); ?>
  <input type="submit" value="Видалити" class="btn btn-danger mx-2">
  </form>

  <a class="btn btn-info" href="<?php echo e(route('product.index')); ?>">Назад</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/show.blade.php ENDPATH**/ ?>