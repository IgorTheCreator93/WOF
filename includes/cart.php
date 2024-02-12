<?
include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";

if (!empty($_POST["id_p"]))
{
    echo $id_p = $_POST["id_p"];
    save_order($id_p, 1);
}

if (!empty($_POST["id_m"]))
{
    $id_m = $_POST["id_m"];
    save_order($id_m, 1);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <header>

        <? include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php"; ?>
    </header>

    <section>
        <div class="cart_parent">

            <?


            $arr = get_orders();
           
            if ($arr <> null)
            {

                foreach ($arr as $key => $val)
                {
                    $id = $val["id"];
                    $name = $val["name"];
                    $price = $val["price"];
                    $quan = $val["quan"];
                    $img = "/public/img/".$val["img"];
            ?>
                    <div class="cart1">
                        <div class="cart_item1">
                            <img class="cart1_photo1" src="<?echo $img?>" alt="">
                            <div class="cart_text">
                                <p><?echo $name ?></p>
                                <p><?echo $price . " ₽"   ?></p>
                            </div>
                            <div class="cart_plus_minus">
                                <a id="minus" data-id="<? echo $id; ?>">-</a>
                                <p><?echo $quan ?></p>
                                <a id="plus" data-id="<? echo $id; ?>">+</a>
                            </div>
                            <a href=""><img class="cart1_photo2" src="/public/img/trash.png" alt=""></a>
                        </div>
                    </div>
        
            <?
                }
            }
            ?>
        </div>
    </section>

    <? include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php"; ?>

</body>
<script src="/public/js/scripts.js"></script>

</html>