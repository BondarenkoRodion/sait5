
<?php $__env->startSection('content'); ?>
    <div class = "container">
    <section class="container signup-form">
    <h3>ДОДАТИ ТОВАР</h3>
    <form action="<?php echo e(route('form.submit')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="productName" class="mr-1 mb-1" placeholder="НАЗВА ТОВАРУ">
        <input type="text" name="productDescription" class="mr-1 mb-1" placeholder="ОПИС ТОВАРУ">
        <input type="text" name="productID" class="mr-1 mb-1" placeholder="АЙДІ ТОВАРУ">
        <input type="text" name="productSales" class="mr-1 mb-1" placeholder="КІЛЬКІСТЬ ПРОДАЖІВ">
        <button type="submit" name="submit" class="btn btn-success">ДОДАТИ</button>
    </form> </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/add.blade.php ENDPATH**/ ?>