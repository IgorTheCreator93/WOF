<?
include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}
if (!empty($_GET["sort"])) {
    $sort = $_GET["sort"];
} else {
    $sort = 0;
}
if (!empty($_GET["nap"])) {
    $nap = $_GET["nap"];
} else {
    $nap = 0;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Jacques+Francois&family=Joti+One&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <? include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php"; ?>
    </header>

    <section>
        <div class="catalog">
            <div class="content_sort">

                <a href="/includes/catalog.php?id=1">Сборные букеты</a>
                <a href="/includes/catalog.php?id=2">Моно букеты</a>
                <a href="/includes/catalog.php?id=3">Свадебные букеты</a>
                <a href="/includes/catalog.php?id=4">Композиции в коробках</a>

            </div>


            <img class="line1" src="/public/img/Line 31.png" alt="">
            

            <div class="sort">
                <button id="sort">Сортировка</button>
                <div class="sort_item">
                    <!-- <a class="sort_item1" href="/includes/catalog.php?sort=1">По популярности</a>
                <a class="sort_item1" href="/includes/catalog.php?sort=2">По дате</a>
                <a class="sort_item1" href="/includes/catalog.php?sort=3">По цене</a> -->
                <a href="<? echo "/includes/catalog.php?id=".$id."&sort=1"; ?>">По популярности</a>
                <a href="<? echo "/includes/catalog.php?id=".$id."&sort=2"; ?>">Цена по убыванию</a>
                <a href="<? echo "/includes/catalog.php?id=".$id."&sort=3"; ?>">Цена по возрастанию</a>
                <a href="<? echo "/includes/catalog.php?id=".$id."&sort=4"; ?>">По дате</a>
            </div>

                
            </div>


            <div class="catalog_card">
                <?

                $arr = get_db_flower($id, $sort);

                if ($arr <> null) {

                    foreach ($arr as $key => $val) {
                        $id = $val["id"];
                        $name = $val["name"];
                        $img = "/public/img/" . $val["img"];
                        $price = $val["price"];

                ?>
                        <div class="card">
                            <img class="card_img" src="<? echo $img; ?>" alt="">
                            <P><? echo $name; ?></P>
                            <p><? echo $price . " ₽"; ?></p>
                            <button class="but" data-id="<? echo $id; ?>">Подробнее</button>
                        </div>
                <?

                    }
                } else {
                }
                ?>



            </div>

        </div>

    </section>
    <? include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php"; ?>
</body>
<script src="/public/js/scripts.js"></script>

</html>