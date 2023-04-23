<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-control {
            height: 30px;
            width: 150px;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="car-create-block">
    <form action="<?php echo e(route('car.create')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <legend>Создание атомобиля</legend>
        <label for="car-name">Название:</label>
        <input type="text" name="name" class="form-control" id="car-name">
        <label for="car-description">Описание:</label>
        <input type="text" name="description" class="form-control" id="car-description">
        <label for="car-photo">Фото:</label>
        <input type="file" name="photo" class="form-control" id="car-photo">
        <label for="car-price">Цена:</label>
        <input type="text" name="price" class="form-control" id="car-price">
        <input type="submit" value="Создать">
    </form>
</div>
</body>
</html>

<?php /**PATH A:\OSPanel\domains\227-is-19\resources\views/admin/carCreate.blade.php ENDPATH**/ ?>