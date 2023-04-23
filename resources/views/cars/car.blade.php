<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/car.css">
    <title>
        @foreach($cars as $el)
            Audi {{ $el->name }}
        @endforeach
    </title>
</head>
<body>
<header>
    <div class="header-top-bg">
        <div class="wrapper">
            <div class="header-top">
                <a href="{{ route('home.index') }}"><div class="logotype">Rechner</div></a>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <h1 class="header-bottom-title">
            @foreach($cars as $el)
                Audi {{ $el->name }}
            @endforeach
        </h1>
    </div>
</header>
<main>
    <section class="car-block">
        <div class="wrapper">
            <div class="car">
                @foreach($cars as $el)
                <img src="{{ asset('/public/storage/'.$el->photo) }}" class="car-photo" alt="car">
                <div class="car-data">
                    <div class="car-description">{{ $el->description }}</div>
                    <div class="car-price">Цена от {{ $el->price }} рублей</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="wrapper">
        <div class="footer-items">
            <div class="footer-item">
                <div class="footer-item-title">Модели</div>
                <a href="{{ route('car.show', ['model' => 'A3']) }}" class="footer-item-link">A3</a>
                <a href="{{ route('car.show', ['model' => 'A4']) }}" class="footer-item-link">A4</a>
                <a href="{{ route('car.show', ['model' => 'A5']) }}" class="footer-item-link">A5</a>
                <a href="{{ route('car.show', ['model' => 'A6']) }}" class="footer-item-link">A6</a>
                <a href="{{ route('car.show', ['model' => 'A7']) }}" class="footer-item-link">A7</a>
                <a href="{{ route('car.show', ['model' => 'Q3']) }}" class="footer-item-link">Q3</a>
                <a href="{{ route('car.show', ['model' => 'Q5']) }}" class="footer-item-link">Q5</a>
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
