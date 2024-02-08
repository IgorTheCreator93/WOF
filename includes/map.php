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
    <header><?include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php";?></header>

    <section>

        <div class="content_map">
            <div class="about_us">
                <p>Телефон</p>
                <p>8(996)305-27-12</p>
                <p>Адрес</p>
                <p>г. Астрахань ул. Яблочкова 36</p>
                <p>Режим работы</p>
                <p>Ежедневно с 8:30 до 22:00</p>
            </div>

            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A906b1f9aaceecb11493ecc8ddd11fdfc79ee8c5b7b7677288030ebde54056a31&amp;width=828&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>

        </div>


    </section>
    <?include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php";?>

</body>
<script src="/public/js/scripts.js"></script>

</html>