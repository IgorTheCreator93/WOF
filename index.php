<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Flowers</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Jacques+Francois&family=Joti+One&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>


<body>
    <header>
        <div class="header">

            <div class="nav">

                <img class="logo" src="/public/img/WF.png" alt="">
                <a href="/includes/about_us.php">О нас</a>
                <a href="/includes/catalog.php">Каталог</a>
                <a href="/includes/map.php">Где нас найти?</a>
                <a href="/includes/catalog.php">Вход</a>
                <a href="/views/ap.php">АП</a>
                <img class="cart" src="/public/img/Cart2.png" alt="">

            </div>
            <div class="content_title">
                <h2>WORLD OF FLOWERS</h2>
                <p>Красота в каждом букете</p>
                <p>Заказ, доставка в любое время</p>
                <button id="but3">Выбрать букет</button>
            </div>


        </div>
    </header>

    <section>
        <div class="content_popular">
            <h2>Популярное</h2>
            <p>Весенний рассвет</p>
            <p>3 500 ₽</p>
            <p>Состав товара</p>
            <p>Роза кустовая - 7 шт.
                Эвкалипт Baby Blue - 2 шт.
                Тишью белое - 1 шт.
                Фоамиран(упаковка) - 1 шт.
                Наклейка фирменная - 1 шт.
                Лента с логотипом - 1 шт.
            </p>
            <p>Цветы: Роза кустовая</p>
            <button>Подробнее</button>
            <img src="/public/img/Group 30.png" alt="">

        </div>


    </section>


    <section class="section-4 container">

        <div id="slider">
            <div class="navigation">
<span id="prev" onclick="idMinus()"><svg width="12" height="20" viewBox="0 0 12 20" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M10.5382 18.4615L2.07666 9.99995L10.5382 1.53841" stroke="white" stroke-width="2"
stroke-linecap="square" />
</svg>
</span>
<div>

</div>
<span id="next" onclick="idPlus()"><svg width="12" height="20" viewBox="0 0 12 20" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1.4618 1.53839L9.92334 9.99993L1.4618 18.4615" stroke="white" stroke-width="2"
stroke-linecap="square" />
</svg>
</span>
</div>
            <div class="slider__content">
                <div class="slide">
                    <img src="/public/img/image 5 (1).png" alt="Slide 1" draggable="false">
                    <h2>Цветок</h2>
                    <p>Чемпион мира по шахматам</p>
                    <a href="#">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 23.png " alt="Slide 2" draggable="false">
                    <h2>Цветокр</h2>
                    <p>Красивый</p>
                    <a href="#">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 5 (1).png" alt="Slide 3" draggable="false">
                    <h2>Цветок</h2>
                    <p>Красивый</p>
                    <a href="#">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 5 (1).png" alt="Slide 4" draggable="false">
                    <h2>Цветок</h2>
                    <p>Красивый</p>
                    <a href="#">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 5 (1).png" alt="Slide 5" draggable="false">
                    <h2>Цветок</h2>
                    <p>Красивый</p>
                    <a href="#">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 19.png" alt="Slide 6" draggable="false">
                    <h2>Цветок</h2>
                    <p>Красивый</p>
                    <a href="#">
                        <button>Подробнее</button>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <img class="logo3" src="/public/img/WF2.png" alt="">
        <div class="description">
            <div class="nav_footer">
                <p>Навигация</p>
                <a href="/includes/about_us.php">О нас</a>
                <a href="/includes/catalog.php">Каталог</a>
                <a href="/includes/cart.php">Корзина</a>
                <a href="/includes/map.php">Где нас найти?</a>
            </div>
            <div>
                <p>О компании</p>
                <a href="">Вакансии</a>
                <a href="">Сотрудничество</a>
            </div>
            <div>
                <p>Контакты</p>
                <a href="">г. Астрахань</a>
                <a href="">wof@mail.ru</a>
                <a href="">8(996)305-27-12</a>
            </div>
        </div>
        <div class="contact">
            <div class="left">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/instagram.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/telegram.png" alt=""></a>
            </div>
            <div class="right">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/VK.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/whatsapp.png" alt=""></a>
            </div>
        </div>
    </footer>

</body>
<script src="/public/js/scripts.js"></script>

</html>