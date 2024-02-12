<?
session_start();
// $_SESSION['log_email'] = "";

if (empty($_SESSION['reg_name'])) {$_SESSION['reg_name'] = "";}
if (empty($_SESSION['reg_email'])) {$_SESSION['reg_email'] = "";}
if (empty($_SESSION['log_email'])) {$_SESSION['log_email'] = "";}
if (empty($_SESSION['log_stat'])) {$_SESSION['log_stat'] = "";}

include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/form_data.php";


if (!empty($_POST["cancel"]))
{
    $_SESSION['log_email'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Flowers</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="/public/css/modal_dialogs.css">
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
                <?
                $email = $_SESSION['log_email'];
                if(!empty($email))
                {
                  $name = get_us_name($email);
                 ?>
                  <a href="#open_modal_cancel_auth" style="font-size: 22px !important; padding-top: 7px;"><? echo $name; ?></a>
                 <? 
                }
                else
                {
                ?>
                  <a href="#open_modal_login">Вход</a>
                <?
                }  
                ?>

                <img class="cart" src="/public/img/Cart2.png" alt="">

            </div>

            <div class="nav_adaptive" id="burger">
                <svg id="hamb" width="33" height="24" viewBox="0 0 33 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="2" x2="33" y2="2" stroke="black" stroke-width="4" />
                    <line y1="22" x2="33" y2="22" stroke="black" stroke-width="4" />
                    <line y1="12" x2="33" y2="12" stroke="black" stroke-width="4" />
                </svg>
            </div>
            <div class="content_title">
                <h2>WORLD OF FLOWERS</h2>
                <p>Красота в каждом букете</p>
                <p>Заказ, доставка в любое время</p>
                <button id="but3">Выбрать букет</button>
            </div>
            <ul class="menu" id="menu">
                <li>
                    <a href="/includes/about_us.php">О нас</a>
                </li>
                <li>
                    <a href="/includes/catalog.php">Каталог</a>
                </li>
                <li>
                    <a href="/includes/map.php">Где нас найти?</a>
                </li>
            </ul>
        </div>
        </div>
        <div class="popup" id="popup"></div>
        </div>

        </div>
    </header>

    <section>
        <div class="content_popular">
            <h2>Популярное</h2>
            <div>                
            <img src="/public/img/Group 30.png" alt="">
                <div class="card_popular">
                    <h3>Весенний рассвет</h3>
                    <p class="price">3 500 ₽</p>
                    <p>Состав товара</p>
                    <div class="sostav_popular">
                        <p>Роза кустовая - 7 шт.</p>
                        <p>Эвкалипт Baby Blue - 2 шт.</p>
                        <p>Тишью белое - 1 шт.</p>
                        <p>Фоамиран(упаковка) - 1 шт.</p>
                        <p>Наклейка фирменная - 1 шт.</p>
                        <p>Лента с логотипом - 1 шт.</p>
                    </p>
                    </div>                    
                    <p>Цветы: Роза кустовая</p>
                    <a href="/includes/card.php?id=8"><button>Подробнее</button></a>
                </div>
            </div>
           

        </div>
        <script>
    const hamb = document.querySelector("#hamb");
    const popup = document.querySelector("#popup");
    const body = document.body;

    // Клонируем меню, чтобы задать свои стили для мобильной версии
    const menu = document.querySelector("#menu").cloneNode(1);

    // При клике на иконку hamb вызываем ф-ию hambHandler
    hamb.addEventListener("click", hambHandler);

    // Выполняем действия при клике ..
    function hambHandler(e) {
        e.preventDefault();
        // Переключаем стили элементов при клике
        popup.classList.toggle("open");
        hamb.classList.toggle("active");
        body.classList.toggle("noscroll");
        menu.classList.toggle('op_1')
        renderPopup();
    }

    // Здесь мы рендерим элементы в наш попап
    function renderPopup() {
        popup.appendChild(menu);
    }

    // Код для закрытия меню при нажатии на ссылку
    const links = Array.from(menu.children);

    // Для каждого элемента меню при клике вызываем ф-ию
    links.forEach((link) => {
        link.addEventListener("click", closeOnClick);
    });

    // Закрытие попапа при клике на меню
    function closeOnClick() {
        popup.classList.remove("open");
        hamb.classList.remove("active");
        body.classList.remove("noscroll");
        menu.classList.remove('op_1')
    }
</script>

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
                    <h2>Нежное послание</h2>
                    <p>1900.00 p</p>
                    <a href="/includes/card.php?id=1">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 20.png" alt="Slide 2" draggable="false">
                    <h2>Нежность чувств</h2>
                    <p>30500.00 p</p>
                    <a href="/includes/card.php?id=2">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 11.png" alt="Slide 3" draggable="false">
                    <h2>Лавандовый чизкейк</h2>
                    <p>3300.00 p</p>
                    <a href="/includes/card.php?id=3">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 45.png" alt="Slide 4" draggable="false">
                    <h2>Весенняя роса</h2>
                    <p>3200.00 p</p>
                    <a href="/includes/card.php?id=4">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 19.png" alt="Slide 5" draggable="false">
                    <h2>Искренние чувства</h2>
                    <p>10500.00 p</p>
                    <a href="/includes/card.php?id=5">
                        <button>Подробнее</button>
                    </a>
                </div>
                <div class="slide">
                    <img src="/public/img/image 24.png" alt="Slide 6" draggable="false">
                    <h2>Новогодняя композиция</h2>
                    <p>2500.00 p</p>
                    <a href="/includes/card.php?id=6">
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
        <div class="contact_2">
            <div class="left">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/instagram_black.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/telegramm_black.png" alt=""></a>
            </div>
            <div class="right">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/vk_black.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/whatsapp_black.png" alt=""></a>
            </div>
        </div>
    </footer>

</body>
<script src="/public/js/scripts.js"></script>
<? include "./includes/modal_dialogs.php" ?>
</html>