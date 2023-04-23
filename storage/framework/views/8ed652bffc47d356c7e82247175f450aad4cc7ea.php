<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/layout_2_style.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a href="" class="navbar-brand">CarCalculator</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-expanded="false" aria-controls="navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item" value="A3">
                        <a href="" class="nav-link">Добавить автомобиль</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Добавить конфигурацию</a>
                    </li>
                </ul>
                <a href="<?php echo e(route('user.indexRegistration')); ?>" class="nav-link">
                    <button class="btn btn-outline-danger">Выход
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </button>
                </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer class="pt-4 my-md-5 pt-md-5 border-top bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <h5>© 2020 CarCalculator Все права защищены</h5>
            </div>
            <div class="col-12 col-md">
                <h5>Ссылки</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="" class="link-secondary">Авторизация</a></li>
                    <li><a href="" class="link-secondary">Регистрация</a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <h5>Социальные сети</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="" class="link-secondary">Авторизация</a></li>
                    <li><a href="" class="link-secondary">Регистрация</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="/public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH A:\OSPanel\domains\227-is-19\resources\views/layouts/layout_2.blade.php ENDPATH**/ ?>