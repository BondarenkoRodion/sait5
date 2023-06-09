
<?php $__env->startSection('content'); ?>
  <div>
    <h3> СПИСОК ТЕГІВ </h3>
    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div>
        <a href="<?php echo e(route('tag.show', $tag->id)); ?>">
          <?php echo e($tag->id); ?>. <?php echo e($tag->title); ?>

        </a>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-between">
      <a href="$" class="btn btn-primary mb-3 mt-2">СТВОРИТИ НОВИЙ ТЕГ</a>
      <a href="/products" class="btn btn-info mb-3 mt-2">НАЗАД</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/tag/index.blade.php ENDPATH**/ ?>