<?
session_start();
// $_SESSION['log_email'] = "";

if (empty($_SESSION['reg_name'])) {$_SESSION['reg_name'] = "";}
if (empty($_SESSION['reg_email'])) {$_SESSION['reg_email'] = "";}
if (empty($_SESSION['log_email'])) {$_SESSION['log_email'] = "";}
if (empty($_SESSION['log_stat'])) {$_SESSION['log_stat'] = "";}

if (!empty($_POST["cancel"]))
{
    $_SESSION['log_email'] = "";
}

include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/form_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/O_nas.css">
    <link rel="stylesheet" href="/public/css/modal_dialogs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<header>
    <?include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php";?>
</header>

<body>

    <div class="block1">

        <div class="description1">
            <h1>WORLD OF FLOWERS</h1>
            <br>
            <p>«МЫ ВДОХНОВЛЯЕМ И НАПОЛНЯЕМ ЖИЗНЬ
                ЭМОЦИЯМИ, ПРЕВОСХОДЯ ОЖИДАНИЯ»</p>
                <br>
            <ul>
                <li>Мы создаем такие букеты, о которых мечтаем сами</li>
                <li>Тщательно выбираем каждый цветок</li>
                <li>Большой ассортимент где каждый сможет найти желаемый цветок</li>
                <li>Следуем трендам флористики</li>
                <li>К каждому букету с любовью</li>
                <li>Гарантируем стойкость цветка минимум 7 дней</li>
            </ul>
                <br>
            <p>Работаем с 18 июля 2024 года</p>
        </div>

        <div class="img17">
            <img src="/public/img/image 17.png" alt="">
        </div>

    </div>

    <div class="block2">
        <div class="img18">
            <img src="/public/img/image 18.png" alt="">
        </div>

        <div class="description2">
            Для вашего удобства у нас есть сайт, на котором
            вы можете оформить заказ. Есть возможность
            выбрать букет тот, который есть в наличии в
            магазине или собрать на ваш вкус. Доставка
            может быть как на ближайшее время, так и к
            определённому сроку.
            <br>
            <br>
            У нас есть большой выбор букетов, и большой
            выбор направлений: букеты в подарок, букеты
            на свадьбу, букеты на праздник, с помощью
            наших цветов можно украшать торты и десерты.
            <br>
            <br>
            Для этого вы можете перейти в каталог и
            определиться с выбором.
        </div>

    </div>

    <?include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php";?>
    <? include "$_SERVER[DOCUMENT_ROOT]/includes/modal_dialogs.php" ?>
    
</body>
    <script src="/public/js/scripts.js"></script> 
</html>