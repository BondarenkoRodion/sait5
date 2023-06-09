

<?php $__env->startSection('content'); ?>
<div class="landing-image">
        <img src="https://images.pexels.com/photos/4144179/pexels-photo-4144179.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Landing Image">
    </div>
<div class="landing-page">
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="landing-content">
                    <h1 class="display-4 fw-bold">Огого які товари!</h1>
                    <p class="lead">Ласкаво просимо на сайт "Огого які товари!" - вашому надійному ресурсу для зберігання товарів.</p>
                    <p>Наш сайт дозволяє зручно зберігати ваші товари у базі даних. Ви можете організовувати свої покупки, зберігати їх і отримувати доступ до них з будь-якого пристрою з Інтернет-підключенням. Відсутність необхідності в списках робить процес збереження товарів простим і безперервним.</p>
                    <p class="mb-5">Долучайтеся до "Огого які товари!" і насолоджуйтесь зручністю зберігання ваших товарів без зайвих складнощів!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="<?php echo e(route('product.index')); ?>" class="btn btn-primary btn-lg px-4">Переглянути товари</a>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Поділитися</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
  .landing-image img {
    width: 100%;
    height: auto;
    max-height: 500px;
    object-fit: cover;
}
  .landing-page {
    background-color: #f8f9fa;
    padding: 100px 0;
}

.landing-content {
    text-align: center;
}

.display-4 {
    color: #333;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Skins\AdobePNG\For use\Art\Shops\WebDev\laravel\blogprogress\resources\views/index.blade.php ENDPATH**/ ?>