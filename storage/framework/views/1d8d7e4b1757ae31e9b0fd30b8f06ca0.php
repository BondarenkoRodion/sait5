
<?php $__env->startSection('content'); ?>
    <div class="container">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ім'я товару</th>
              <th scope="col">Опис товару</th>
              <th scope="col">Айді товару</th>
              <th scope="col">Продажі</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->productName); ?></td>
                <td><?php echo e($item->productDescription); ?></td>
                <td><?php echo e($item->productID); ?> </td>
                <td><?php echo e($item->productSales); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/indexcopy.blade.php ENDPATH**/ ?>