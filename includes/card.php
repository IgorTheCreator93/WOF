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

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}

if (!empty($_POST["id_"]))
{
    $id_ = $_POST["id_"];
    $us = $_POST["us"];
    save_order($id_, 1, 1, $us);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/karta_tovara.css">
    <link rel="stylesheet" href="/public/css/modal_dialogs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<header>

<?include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php";?>
</header>
<body>

    <?
    $arr = get_db_flower_card($id);
    if ($arr <> null) 
    {
        $id = $arr["id"];
        $name = $arr["name"];
        $img = "/public/img/" . $arr["img"];
        $price = $arr["price"];
        $descr = $arr["descr"];
        if(!empty($_SESSION['log_email']))
        {
            $user = get_user_id($_SESSION['log_email']);
        }
        else
        {
            $user = 0;
        }    
                
    ?>
        <div class="block1">
            <img src="<? echo $img; ?>" alt="">
            <div class="text">
                <h1><? echo $name; ?></h1>
                <p><? echo $price . " ₽"; ?></p>
                <?
                if(!empty($_SESSION['log_email']))
                {
                ?>
                    <a href="#open_modal_product"><button id="btn_text" class="btn_text" data-id="<? echo $id; ?>" data-user="<? echo $user; ?>">В корзину</button></a>
                <?
                }
                else
                {
                    //$mess = "Для заказа товара<br>Вам необходимо<br>авторизоваться!";
                    //$link = "<a href='#open_modal_login'>Авторизация >></a>";
                ?>
                    <a href="#open_modal_result_1"><button id="" class="btn_text" data-id="<? echo $id; ?>">В корзину</button></a>
                <?
                }
                ?>
                <p>Время изготовления</p>
                <p>90 мин.</p>
                <p><? echo $descr; ?>
                </p>
            </div>
        </div>
    <?
    }    
    ?>

    <?include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php";?>
    <? include "$_SERVER[DOCUMENT_ROOT]/includes/modal_dialogs.php" ?>
</body>
<script src="/public/js/scripts.js"></script>
</html>
