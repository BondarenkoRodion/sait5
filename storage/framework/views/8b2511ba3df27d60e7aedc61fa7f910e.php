
<?php $__env->startSection('content'); ?>
    <div class = "container">
    <section class="container signup-form">
    <h3>ВИДАЛИТИ ТОВАР ЗІ СПИСКУ</h3>
    <form action="<?php echo e(route('delete.submit')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="id" class="mr-1 mb-1" placeholder="НАЗВА ТОВАРУ">
        <button type="submit" name="submit" class="btn btn-success">ВИДАЛИТИ</button>
    </form> </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/delete.blade.php ENDPATH**/ ?>