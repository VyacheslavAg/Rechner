<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/layout_1_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Welcome to Rechner</title>
</head>
<body>
<header>
    <div class="header-top-bg">
        <div class="wrapper">
            <div class="header-top">
                <a href="<?php echo e(route('home.index')); ?>"><div class="logotype">Rechner</div></a>
                <nav class="header-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'A3'])); ?>" class="nav-link">A3</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'A4'])); ?>" class="nav-link">A4</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'A5'])); ?>" class="nav-link">A5</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'A6'])); ?>" class="nav-link">A6</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'A7'])); ?>" class="nav-link">A7</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'Q3'])); ?>" class="nav-link">Q3</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('car.show', ['model' => 'Q5'])); ?>" class="nav-link">Q5</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <h1 class="header-bottom-title">Берегите старое, принимайте новое</h1>
        <div class="header-bottom-sub-title">Особые предложения до конца декабря</div>
        <button class="header-bottom-btn">Узнать больше</button>
    </div>
</header>
<main>
    <section class="specifications-block">
        <div class="specifications-block-title">Преимущества автосалона Rechner</div>
        <div class="specifications-block-bg">
            <div class="specifications-block-bg-filter">
                <div class="specifications-block-wrapper">
                    <div class="specifications-items">
                        <div class="specifications-item">
                            <img src="/public/img/icon-1.png" alt="specifications-image" class="specifications-img">
                            <h3 class="specifications-title">Вы выбираете комплектацию!</h3>
                            <p class="specifications-description">В нашем автосалоне у вас есть возможность самому
                                сконструировать конфигурацию своего автомобиля. В первую очередь от этого зависит цена
                                автомобиля, поэтому на некоторых конфигурациях вы можете сэкономить, что поменяет
                                итоговую
                                стоимомть в вашу сторону!</p>
                        </div>
                        <div class="specifications-item">
                            <img src="/public/img/icon-2.png" alt="specifications-image" class="specifications-img">
                            <h3 class="specifications-title">Онлайн автосалон!</h3>
                            <p class="specifications-description">Вам не нужно приезжать в автосалон, чтобы определиться
                                со
                                стоимостью вашей конфигурации - теперь всё онлайн!</p>
                        </div>
                        <div class="specifications-item">
                            <img src="/public/img/icon-3.png" alt="specifications-image" class="specifications-img">
                            <h3 class="specifications-title">Круглосуточная работа!</h3>
                            <p class="specifications-description">Наши операторы принимают заявки круглосуточно! Если у
                                вас
                                вдруг возникло желание записаться на тест-драйв или вы уже окончательно определились с
                                выбором -
                                звоните нам и мы запишем вас к менеджеру!</p>
                        </div>
                        <div class="specifications-item">
                            <img src="/public/img/icon-4.png" alt="specifications-image" class="specifications-img">
                            <h3 class="specifications-title">Онлайн калькулятор!</h3>
                            <p class="specifications-description">У нашего автосалона есть своё приложение -
                                "Калькулятор
                                стоимости автомобиля"! Наше приложение даёт возможность узнать цену на автомобиль с
                                интересующими вам конфигурациями.</p>
                        </div>
                        <div class="specifications-item">
                            <img src="/public/img/icon-5.png" alt="specifications-image" class="specifications-img">
                            <h3 class="specifications-title">Лёгкое оформление документов!</h3>
                            <p class="specifications-description">Если вы впервые покупаете автомобиль - не переживайте!
                                Мы
                                объясним вам всю процедуру и поможем оформить документы правильно и в соответствии с
                                законом.</p>
                        </div>
                        <div class="specifications-item">
                            <img src="/public/img/icon-6.png" alt="specifications-image" class="specifications-img">
                            <h3 class="specifications-title">Разнообразие цветов!</h3>
                            <p class="specifications-description">Вы можете выбрать цвет автомобиля из существующих
                                вариантов, а
                                также предложить свой цвет!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog-block">
        <div class="catalog-block-title">Каталог</div>
        <div class="catalog-items">
            <div class="catalog-item">
                <div class="catalog-title">Audi A3</div>
                <img src="/public/img/catalog-A3.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'A3'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
            <div class="catalog-item">
                <div class="catalog-title">Audi A4</div>
                <img src="/public/img/catalog-A4.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'A4'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
            <div class="catalog-item">
                <div class="catalog-title">Audi A5</div>
                <img src="/public/img/catalog-A5.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'A5'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
            <div class="catalog-item">
                <div class="catalog-title">Audi A6</div>
                <img src="/public/img/catalog-A6.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'A6'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
            <div class="catalog-item">
                <div class="catalog-title">Audi A7</div>
                <img src="/public/img/catalog-A7.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'A7'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
            <div class="catalog-item">
                <div class="catalog-title">Audi Q3</div>
                <img src="/public/img/catalog-Q3.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'Q3'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
            <div class="catalog-item">
                <div class="catalog-title">Audi Q5</div>
                <img src="/public/img/catalog-Q5.png" alt="catalog-image" class="catalog-img">
                <a href="<?php echo e(route('car.show', ['model' => 'Q5'])); ?>" class="catalog-btn">Подробнее</a>
            </div>
        </div>
    </section>
    <section class="banners-block">
        <div class="banners-block-wrapper">
            <div class="banners-items">
                <div class="banners-item">
                    <img src="/public/img/banner-1.jpg" alt="banners-image" class="banners-img">
                    <div class="banners-item-text">
                        <div class="banners-title">Новые Audi RS 6, RS 7, RS Q8.</div>
                        <div class="banners-description">Старт онлайн-предзаказов!</div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                </div>
                <div class="banners-item">
                    <div class="banners-item-text">
                        <div class="banners-title">Audi quattro Winter Experience</div>
                        <div class="banners-description">Тюмень, Андреевское озеро.
                            Регистрация открыта!
                        </div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                    <img src="/public/img/banner-2.jpg" alt="banners-image" class="banners-img">
                </div>
                <div class="banners-item">
                    <img src="/public/img/banner-3.jpg" alt="banners-image" class="banners-img">
                    <div class="banners-item-text">
                        <div class="banners-title">Обновлённый Audi А4</div>
                        <div class="banners-description">Audi A4 всегда был воплощением спортивности, престижа и ярких
                            эмоций. <br>От 2 420 000 рублей.
                        </div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                </div>
                <div class="banners-item">
                    <div class="banners-item-text">
                        <div class="banners-title">Обновлённый Audi A5 Sportback</div>
                        <div class="banners-description">Спортивный и одновременно практичный семейный пятидверный
                            автомобиль – образец самого современного дизайна марки Audi.
                        </div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                    <img src="/public/img/banner-4.jpg" alt="banners-image" class="banners-img">
                </div>
                <div class="banners-item">
                    <img src="/public/img/banner-5.jpg" alt="banners-image" class="banners-img">
                    <div class="banners-item-text">
                        <div class="banners-title">Сила останавливать взгляды</div>
                        <div class="banners-description">Стремительное и элегантное купе никого не оставит равнодушным -
                            обновлённый Audi A5 Coupé.
                        </div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                </div>
                <div class="banners-item">
                    <div class="banners-item-text">
                        <div class="banners-title">Актуальные предложения</div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                    <img src="/public/img/banner-6.jpg" alt="banners-image" class="banners-img">
                </div>
                <div class="banners-item">
                    <img src="/public/img/banner-7.jpg" alt="banners-image" class="banners-img">
                    <div class="banners-item-text">
                        <div class="banners-title">Мы смотрим на один и тот же мир. Но видим его по-разному.</div>
                        <div class="banners-description">#ОпределяяБудущее</div>
                        <button class="banners-btn">Узнайте больше</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts-block">
        <img src="/public/img/contacts-header.jpg" alt="contacts-header-image" class="contacts-header-img">
        <div class="contacts-data">
            <div class="contacts-data-title">Контакты</div>
            <div class="contacts-data-description">Адрес:<br>454003, Россия, Челябинск, ул. Чичерина, 52<br><br>Информационный центр Rechner:<br>Телефон для Москвы и для звонков из-за границы: +7 (384) 664-77-77.<br>Телефон для звонков из регионов России: 8 (800) 100-12-22.</div>
        </div>
        <div class="social-networks">
            <div class="social-networks-block-title">Социальные сети</div>
            <div class="social-networks-items">
                <a href="https://www.facebook.com/AudiRussia/" class="social-networks-item-link"><img src="/public/img/facebook.svg" alt="social-networks-facebook-image" class="social-networks-item"></a>
                <a href="https://twitter.com/audiofficial" class="social-networks-item-link"><img src="/public/img/twitter.svg" alt="social-networks-twitter-image" class="social-networks-item"></a>
                <a href="https://tttttt.me/audipublic" class="social-networks-item-link"><img src="/public/img/telegram.svg" alt="social-networks-telegram-image" class="social-networks-item"></a>
                <a href="https://vk.com/audi" class="social-networks-item-link"><img src="/public/img/vkontakte.svg" alt="social-networks-vkontakte-image" class="social-networks-item"></a>
                <a href="https://www.instagram.com/audirussia/?hl=ru" class="social-networks-item-link"><img src="/public/img/instagram.svg" alt="social-networks-instagram-image" class="social-networks-item"></a>
            </div>
        </div>
    </section>
    <section class="review-block">
        <div class="review-block-title">Отзывы</div>
        <a href="<?php echo e(route('review.index')); ?>"><button class="review-block-btn">Посмотреть все отзывы</button></a>
        <div class="wrapper-form">
            <form action="<?php echo e(route('review.create')); ?>" method="post" class="review-give-feedback-form" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <h2 class="form-title">Напишите отзыв</h2>
                <div class="form-group">
                    <input type="text" tabindex="1" name="authorName" class="form-input" placeholder=" ">
                    <label class="form-label">Имя:</label>
                </div>
                <div class="form-group">
                    <input type="text" tabindex="2" name="title" class="form-input" placeholder=" ">
                    <label class="form-label">Заголовок:</label>
                </div>
                <div class="form-group">
                    <textarea name="description" tabindex="3" class="form-input review-give-feedback-description" placeholder=" "></textarea>
                    <label class="form-label">Описание:</label>
                </div>
                <input type="submit" class="form-btn" value="Отправить">
            </form>
        </div>
    </section>
</main>
<footer>
    <div class="wrapper">
        <div class="footer-items">
            <div class="footer-item">
                <div class="footer-item-title">Модели</div>
                <a href="<?php echo e(route('car.show', ['model' => 'A3'])); ?>" class="footer-item-link">A3</a>
                <a href="<?php echo e(route('car.show', ['model' => 'A4'])); ?>" class="footer-item-link">A4</a>
                <a href="<?php echo e(route('car.show', ['model' => 'A5'])); ?>" class="footer-item-link">A5</a>
                <a href="<?php echo e(route('car.show', ['model' => 'A6'])); ?>" class="footer-item-link">A6</a>
                <a href="<?php echo e(route('car.show', ['model' => 'A7'])); ?>" class="footer-item-link">A7</a>
                <a href="<?php echo e(route('car.show', ['model' => 'Q3'])); ?>" class="footer-item-link">Q3</a>
                <a href="<?php echo e(route('car.show', ['model' => 'Q5'])); ?>" class="footer-item-link">Q5</a>
            </div>
            <div class="footer-item">
                <div class="footer-item-title">Покупателям</div>
                <a href="" class="footer-item-link">Особые предложения до конца декабря</a>
                <a href="" class="footer-item-link">Новые Audi RS 6, RS 7, RS Q8.</a>
                <a href="" class="footer-item-link">Audi quattro Winter Experience</a>
                <a href="" class="footer-item-link">Обновлённый Audi А4</a>
                <a href="" class="footer-item-link">Обновлённый Audi A5 Sportback</a>
                <a href="" class="footer-item-link">Актуальные предложения</a>
            </div>
            <div class="footer-item">
                <div class="footer-item-title">Контакты</div>
                <a href="https://www.facebook.com/AudiRussia/" class="footer-item-link"><img src="/public/img/facebook.svg" alt="social-networks-facebook-image" class="footer-social-networks-img"></a>
                <a href="https://twitter.com/audiofficial" class="footer-item-link"><img src="/public/img/twitter.svg" alt="social-networks-twitter-image" class="footer-social-networks-img"></a>
                <a href="https://tttttt.me/audipublic" class="footer-item-link"><img src="/public/img/telegram.svg" alt="social-networks-telegram-image" class="footer-social-networks-img"></a>
                <a href="https://vk.com/audi" class="footer-item-link"><img src="/public/img/vkontakte.svg" alt="social-networks-vkontakte-image" class="footer-social-networks-img"></a>
                <a href="https://www.instagram.com/audirussia/?hl=ru" class="footer-item-link"><img src="/public/img/instagram.svg" alt="social-networks-instagram-image" class="footer-social-networks-img"></a>
            </div>
        </div>
    </div>
    <hr class="footer-line">
    <div class="footer-copy">© 2021 AUDI AG. Все права защищены.</div>
    <div class="footer-additional-information">Служба помощи на дорогах: +7 (800) 222-02-00<br>Информационный центр: +7 (800) 100-12-22</div>
</footer>
</body>
</html>
<?php /**PATH A:\OSPanel\domains\227-is-19\resources\views/layouts/layout_1.blade.php ENDPATH**/ ?>