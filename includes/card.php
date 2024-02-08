<?
include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}

if (!empty($_GET["id_"])) {
    echo $id_ = $_GET["id_"];
    save_order($id_, 1);
} else {
    echo $id_ = 0;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/karta_tovara.css">
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
    ?>
        <div class="block1">
            <img src="<? echo $img; ?>" alt="">
            <div class="text">
                <h1><? echo $name; ?></h1>
                <p><? echo $price; ?></p>
                <button id="btn_text" class="btn_text" data-id="<? echo $id;  ?>">В корзину </button>
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

</body>
<script src="/public/js/scripts.js"></script>
</html>
