<?
include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";

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

        <?
        // $arr = get_orders();
        // if ($arr <> null)
        // {

        //     foreach ($arr as $key => $val)
        //     {
        //         $id = $val["id"];
        ?>
                <div class="cart1">
                    <div class="cart_item1">
                        <img class="cart1_photo1" src="/public/img/image 16.png" alt="">
                        <div class="cart_text">
                            <p>Название букета</p>
                            <p>Цена</p>
                        </div>
                        <div class="cart_plus_minus">
                           <a href="">-</a>
                            <p href="">1</p>
                           <a href="">+</a>
                        </div>
                       <a href=""><img class="cart1_photo2" src="/public/img/trash.png" alt=""></a> 
                    </div>
                </div>
                
             
               
        <?
            // }
        // }
        ?>
    </section>
    <footer>
        <? include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php"; ?>
    </footer>
</body>
<script src="/public/js/scripts.js"></script> 
</html>