
<?php $__env->startSection('content'); ?>
<?php 
$user = Auth::user();
?>

    <?php if(session('success')): ?>
    <h3>Список товарів користувача: <strong><?php echo e($user->name); ?></strong></h3>
  <div>
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <h4>Вітаю!<h4>
      <p class="mb-0">Новий товар було успішно додано!</p>
    </div>
    <?php endif; ?>
      <?php if(auth()->check()): ?>
      
    <div class="container">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ім'я товару</th>
              <th scope="col">Опис товару</th>
              <th scope="col">Айді товару</th>
              <th scope="col">Продажі</th>
              <th scope="col">Категорія</th>
              <th scope="col">Фото</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = auth()->user()->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><a href="<?php echo e(route('product.show', $product->id)); ?>"><?php echo e($product->productName); ?></a></td>
                <td><?php echo e($product->productDescription); ?></td>
                <td><?php echo e($product->productID); ?> </td>
                <td><?php echo e($product->productSales); ?> </td>
                <td><?php echo e($product->category->title); ?></td>
                <td><a href= <?php echo e(route('product.photos',$product->id)); ?>> <?php echo e($product->photos->count()); ?> </a></td>


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        
    <div class="d-flex justify-content-between">
      <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary mb-3 mt-1">ДОДАТИ ТОВАР</a>
      <a href="<?php echo e(route('tag.index')); ?>" class="btn btn-info mb-3 mt-1">ПЕРЕГЛЯНУТИ ТЕГИ</a>
    </div>
    </div>
        <?php else: ?>
        <h3>Увійдіть в акаунт!</strong></h3>
        <?php endif; ?>
          
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/product/index.blade.php ENDPATH**/ ?>