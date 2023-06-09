
<?php $__env->startSection('content'); ?>
<h3> Тег номер <?php echo e($tag->id); ?> </h3>
  <div>
      <div><?php echo e($tag->title); ?></div>
      
    <?php $__currentLoopData = $tag->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
      <a href="<?php echo e(route('product.show', $tagProduct->id)); ?>">
          <?php echo e($tagProduct->id); ?>. <?php echo e($tagProduct->productName); ?>

      </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="d-flex justify-content-between">
  <a href="#">Редагувати</a> <a href="<?php echo e(route('tag.index')); ?>">Назад</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/tag/show.blade.php ENDPATH**/ ?>