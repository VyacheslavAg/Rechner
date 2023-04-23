<?php $__env->startSection('title', 'Авторизация'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="authorization">
        <h5 class="text-center authorizationName">Авторизация</h5>
        <hr>
        <form action="<?php echo e(route('user.login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label for="inputLogin" class="col-sm-2 col-form-label col-lg-1">Логин:</label>
                <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="login" id="inputLogin" type="text">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label col-lg-1">Пароль:</label>
                <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="password" id="inputPassword" type="password">
                </div>
            </div>
            <hr>
            <button class="btn btn-secondary">Отмена</button>
            <button class="btn btn-secondary">Авторизироваться</button>
        </form>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH A:\OSPanel\domains\227-is-19\resources\views/user/authorization.blade.php ENDPATH**/ ?>