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
        <div class="contact_2">
            <div class="left">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/instagram_black.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/telegramm_black.png" alt=""></a>
            </div>
            <div class="right">
                <a href="https://vk.com/leave_me_aalone" class="up"><img src="/public/img/vk_black.png" alt=""></a>
                <a href="https://vk.com/leave_me_aalone" class="down"><img src="/public/img/whatsapp_black.png" alt=""></a>
            </div>
        </div>
    </footer>
    <style>
       /* футер................................... */
footer {
  justify-content: space-evenly;
  align-items: center;
  display: flex;
  height: max-content;
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
  margin-top: 100px;
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
@media screen and (max-width: 1300px) {
  footer{
    flex-direction: column;
    height: max-content;
    padding-top: 28px;
    background: #BFBFBF;
  }
  footer .description div p{
    color: #000;
  }
  .contact{
    display: none;
  }
  .contact_2{
    display: block;
  }
  footer .description div a{
    color:#4A4A4A;
  }
  footer .description{
    flex-direction: column;
    align-items: center;
    gap: 40px;
    width: auto;
  }
  footer .contact{
    align-items: center;
    flex-direction: row;
    justify-content: center;
    gap: 10px;
  }
  footer .contact .left{
    display: flex;
    flex-direction: row;
    gap: 10px;
  }
  footer .contact .right{
    display: flex;
    flex-direction: row;
    gap: 10px;
  }
  footer .contact_2{
    margin-top: 20px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: center;
    gap: 20px;
  }
  footer .contact_2 .left{
    display: flex;
    flex-direction: row;
    gap: 20px;
  }
  footer .contact_2 .right{
    display: flex;
    flex-direction: row;
    gap: 20px;
  }
  .logo3{
    margin-bottom: 29px;
  }
}
 
    </style>