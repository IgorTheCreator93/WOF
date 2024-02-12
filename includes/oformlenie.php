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

if (!empty($_GET["id"]))
{
    $id = $_GET["id"];
} else {
    $id = 0;
}

if (!empty($_GET["id"]))
{
    $id = $_GET["id"];
} else {
    $id = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/oformlenie.css" />
    <link rel="stylesheet" href="/public/css/modal_dialogs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
  <header> <?include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php";?></header>
   
    <section>
        <h1>Оформление заказа</h1>
        <form action="/includes/oformlenie.php#open_modal_buy" method="post">
            <p class="tt1">
                Пожалуйста, заполните контактные данные. Наш менеджер свяжется с вами
                для уточнения деталей заказа.
            </p>
            <input type="text" placeholder="Имя покупателя *" class="inp1" />
            <input type="text" placeholder="Телефон покупателя *" class="inp1" />
            <label for="sposob_dostavki" class="tt1">Способ доставки:</label>
            <div class="radio1">
                <input class="rad1" type="radio" name="sposob_dostavki" id="courier1" value="Доставка курьером" checked />
                <label for="courier1">Доставка курьером - 350 ₽</label>
                <br />
                <input class="rad1" type="radio" name="sposob_dostavki" id="pickup1" value="Самовывоз" />
                <label for="pickup1">Самовывоз - бесплатно</label>
            </div>
            <input type="text" placeholder="Комментарий к заказу:" class="inp1" />
            <label for="sposob_oplaty" class="tt1">Способ оплаты:</label>
            <div class="radio1">
                <input class="rad1" type="radio" name="sposob_oplaty" id="courier2" value="Доставка курьером" checked />
                <label for="courier2">Наличными при получении</label>
                <br />
                <input class="rad1" type="radio" name="sposob_oplaty" id="pickup2" value="Самовывоз" />
                <label for="pickup2">Оплата картой</label>
            </div>

            <input type="submit" class="oform_zakaz" style="text-align: center;" value="Подтвердить!">

            <!-- <div style="display: flex; width: 100%;">
                <a href="/includes/oformlenie.php" style="margin: 20px auto 20px; border-radius: 10px; padding: 10px 40px; background-color: #2B363A; color: #fff; font-weight: bold; font-size: 24px;">Оформить заказ!</a>
            </div> -->
        </form>
    </section>

    <?include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php";?>
    <? include "$_SERVER[DOCUMENT_ROOT]/includes/modal_dialogs.php" ?>
</body>
<script src="/public/js/scripts.js"></script> 
</html>