<footer>
        <img class="logo3" src="/public/img/WF2.png" alt="">
        <div class="description">
            <div class="nav_footer">
                <p>Навигация</p>
                <a href="/includes/about_us.php">О нас</a>
                <a href="/includes/catalog.php">Каталог</a>
                <a href="/includes/cart.php">Корзина</a>
                <a href="/includes/map.php">Где нас найти?</a>
            </div>
            <div>
                <p>О компании</p>
                <a href="">Вакансии</a>
                <a href="">Сотрудничество</a>
            </div>
            <div>
                <p>Контакты</p>
                <a href="">г. Астрахань</a>
                <a href="">wof@mail.ru</a>
                <a href="">8(996)305-27-12</a>
            </div>
        </div>
        <div class="contact">
            <div class="left">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/instagram.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/telegram.png" alt=""></a>
            </div>
            <div class="right">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/VK.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/whatsapp.png" alt=""></a>
            </div>
        </div>
    </footer>
    <style>
       /* футер................................... */
footer {
  justify-content: space-evenly;
  align-items: center;
  display: flex;
  height: 485px;
  background: #2B363A;
}

.logo3 {
  width: 140px;
  height: 75px;
  cursor: pointer;
}

.description {
  display: flex;
  width: 800px;
  justify-content: space-between;
}

.description a,
.description p {
  color: white;
  font-size: 28px;
  border: none;
  ;
}

.description a {
  margin-top: 20px;
}

.description div :nth-child(2) {
  margin-top: 45px;
}

.description div {
  display: flex;
  flex-direction: column;
}

.contact {
  display: flex;
  width: 155px;
  height: 155px;
}

.contact img {
  width: 55px;
  height: 55px;
}
 
    </style>