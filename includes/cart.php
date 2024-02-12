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

if (!empty($_POST["id_p"]))
{
    $id_p = $_POST["id_p"];
    $us = $_POST["us"];
    save_order($id_p, 1, 1, $us);
}

if (!empty($_POST["id_m"]))
{
    $id_m = $_POST["id_m"];
    $us = $_POST["us"];
    save_order($id_m, 1, 2, $us);
}

if (!empty($_POST["id_t"]))
{
    $id_t = $_POST["id_t"];
    del_order($id_t);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/modal_dialogs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <header>

        <? include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php"; ?>
    </header>

    <section>
        <div class="cart_parent">

            <?

            $cost = 0;
            $cost_ = 0;

            $arr = get_orders();
            
            if ($arr <> null)
            {   
                foreach ($arr as $key => $val)
                {
                    $id_ = $val["id"]; 
                    $cart1 = "cart1_".$id_;
                    $id = $val["flower_id"];
                    $quan_ = "quan_".$id_;
                    $name = $val["name"];
                    $price = $val["price"];
                    $quan = $val["quan"];
                    $cost = $quan * $price;
                    $img = "/public/img/".$val["img"];
                    if(!empty($_SESSION['log_email']))
                    {
                        $user = get_user_id($_SESSION['log_email']);
                    }
                    else
                    {
                        $user = 0;
                    }

            ?>
                    <div id="<?echo $cart1; ?>"class="cart1">
                        <div class="cart_item1">
                            <img class="cart1_photo1" src="<?echo $img?>" alt="">
                            <div class="cart_text">
                                <p><?echo $name ?></p>
                                <p><?echo $price." ₽"; ?></p>
                            </div>
                            <div class="cart_plus_minus">
                                <a class="minus" data-id="<? echo $id_; ?>" data-price="<? echo $price; ?>" data-user="<? echo $user; ?>">-</a>
                                <p id="<?echo $quan_ ?>"><? echo $quan; ?></p>
                                <a class="plus" data-id="<? echo $id_; ?>" data-price="<? echo $price; ?>"  data-user="<? echo $user; ?>">+</a>
                            </div>
                            
                            <a href="#" class="cart1_photo2"><img data-price="<? echo $price; ?>" data-quan="<? echo $quan; ?>" class="delete" src="/public/img/trash.png" data-id="<? echo $id_; ?>" alt="Удалить"></a>

                        </div>
                    </div>
        
            <?
                    $cost_ = $cost_ + $cost;
                }

            }

            if($cost_<>0)
            {    
            ?>
                <div id="tableau" style="display: flex; justify-content: center; width: 100%;">
                    <div style="margin: 10px 10px;   font-weight: bold; font-family: Century Gothic;  font-size: 40px; color: black;">ИТОГО: </div>
                    <div id="cost" style="margin: 10px 10px; font-weight: bold; font-family: Century Gothic; font-size: 40px; color: black;"><? echo $cost_; ?></div>
                    <div style="margin: 10px 10px; font-weight: bold; font-family: Century Gothic; font-size: 40px; color: rblacked;"> ₽</div>
                </div>

                <div id="zakaz" style="display: flex; width: 100%;">
                    <a href="/includes/oformlenie.php" style="margin: 20px auto 20px; border-radius: 10px; padding: 20px 40px; background-color: #2B363A; color: #fff; font-weight: bold; font-size: 24px;">Оформить заказ!</a>
                </div>
            <?
            }
            ?>
        </div>

    </section>

    <? include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php"; ?>
    <? include "$_SERVER[DOCUMENT_ROOT]/includes/modal_dialogs.php" ?>
</body>
<script src="/public/js/scripts.js"></script>

</html>