<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/oformlenie.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
  <header> <?include "$_SERVER[DOCUMENT_ROOT]/includes/header2.php";?></header>
   
    <section>
        <h1>Оформление заказа</h1>
        <form action="">
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

            <input type="button" class="oform_zakaz" value="Оформить заказ" />
        </form>
    </section>

    <?include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php";?>

</body>
<script src="/public/js/scripts.js"></script> 
</html>