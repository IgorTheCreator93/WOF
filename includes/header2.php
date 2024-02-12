<header>

  <div class="header2">

    <div class="nav2">
      <div>
        <a href="/"><img class="logo2" src="/public/img/WF2.png" alt=""></a>
      </div>
      <div class="nav_center">
        <a href="/includes/about_us.php">О нас</a>
        <a href="/includes/catalog.php">Каталог</a>
        <a href="/includes/map.php">Где нас найти?</a>
      </div>


      <div class="nav_end">
        <?
        $email = $_SESSION['log_email'];
        if(!empty($email))
        {
          $name = get_us_name($email);
         ?>
          <a href="#open_modal_cancel_auth" style="font-size: 18px !important;"><? echo $name; ?></a>
         <? 
        }
        else
        {
        ?>
          <a href="#open_modal_login">Вход</a>
        <?
        }  
        ?>

        <img class="cart2" src="/public/img/Vector.png" alt="">
      </div>
    </div>

    <div class="nav3">
      <a href="/"><img class="logo2" src="/public/img/WF2.png" alt=""></a>

      <svg id="hamb" width="33" height="24" viewBox="0 0 33 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="2" x2="33" y2="2" stroke="white" stroke-width="4" />
        <line y1="22" x2="33" y2="22" stroke="white" stroke-width="4" />
        <line y1="12" x2="33" y2="12" stroke="white" stroke-width="4" />
      </svg>
    </div>
    <ul class="menu" id="menu">
      <li>
        <a href="/includes/about_us.php">О нас</a>
      </li>
      <li>
        <a href="/includes/catalog.php">Каталог</a>
      </li>
      <li>
        <a href="/includes/map.php">Где нас найти?</a>
      </li>
    </ul>
  </div>
  </div>
  <div class="popup" id="popup"></div>
</header>



<script>
  const hamb = document.querySelector("#hamb");
  const popup = document.querySelector("#popup");
  const body = document.body;

  // Клонируем меню, чтобы задать свои стили для мобильной версии
  const menu = document.querySelector("#menu").cloneNode(1);

  // При клике на иконку hamb вызываем ф-ию hambHandler
  hamb.addEventListener("click", hambHandler);

  // Выполняем действия при клике ..
  function hambHandler(e) {
    e.preventDefault();
    // Переключаем стили элементов при клике
    popup.classList.toggle("open");
    hamb.classList.toggle("active");
    body.classList.toggle("noscroll");
    menu.classList.toggle('op_1')
    renderPopup();
  }

  // Здесь мы рендерим элементы в наш попап
  function renderPopup() {
    popup.appendChild(menu);
  }

  // Код для закрытия меню при нажатии на ссылку
  const links = Array.from(menu.children);

  // Для каждого элемента меню при клике вызываем ф-ию
  links.forEach((link) => {
    link.addEventListener("click", closeOnClick);
  });

  // Закрытие попапа при клике на меню
  function closeOnClick() {
    popup.classList.remove("open");
    hamb.classList.remove("active");
    body.classList.remove("noscroll");
    menu.classList.remove('op_1')
  }
</script>
<style>
  .navbar__wrap {
    display: flex;
    justify-content: space-between;
    height: 100%;
  }

  .menu {
    opacity: 0;
  }

  .op_1 {
    opacity: 1;
  }

  .hamb {
    display: none;
  }

  .popup {
    display: none;
  }

  .logo {
    text-decoration: none;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
    display: flex;
    align-items: center;
  }

  .menu>li>a {
    text-decoration: none;
  }

  .navbar__wrap .menu {
    display: flex;
  }

  .navbar__wrap .menu>li {
    display: flex;
    align-items: stretch;
  }

  .navbar__wrap .menu>li>a {
    display: flex;
    align-items: center;
    padding: 0 20px;
    color: rgba(255, 255, 255, 0.7);
  }

  .navbar__wrap .menu>li>a:hover {
    color: rgba(255, 255, 255, 1);
  }

  @media (max-width: 1000px) {
    .navbar__wrap .menu {
      display: none;
    }

    .hamb {
      display: flex;
      align-items: center;
    }

    .hamb__field {
      padding: 10px 20px;
      cursor: pointer;
    }

    .bar {
      display: block;
      width: 30px;
      height: 3px;
      margin: 6px auto;
      background-color: #fff;
      transition: 0.2s;
    }

    .popup {
      position: fixed;
      top: 75px;
      left: -100%;
      width: 100%;
      height: 100%;
      background-color: #fff;
      z-index: 100;
      display: flex;
      transition: 0.3s;
    }

    .popup.open {
      left: 0;
    }

    .popup .menu {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: start;
      padding: 50px 0;
      overflow: auto;
    }

    .popup .menu>li {
      width: 100%;
    }

    .popup .menu>li>a {
      width: 100%;
      display: flex;
      justify-content: center;
      padding: 20px 0;
      font-size: 20px;
      font-weight: bold;
      color: #3f3f3f;
    }

    .popup .menu>li>a:hover {
      background-color: rgba(122, 82, 179, 0.1);
    }

    .hamb__field.active .bar:nth-child(2) {
      opacity: 0;
    }

    .hamb__field.active .bar:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }

    .hamb__field.active .bar:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }

    body.noscroll {
      overflow: hidden;
    }
  }

  /* хедер №2 .................................................*/
  .header2 {
    width: 100%;
    height: 136px;
    font-weight: 28px;
    background-color: #2b363a;
    color: #fff;
  }

  .nav2 {
    padding: 50px;
    display: flex;
    justify-content: center;
    gap: 90px;
    justify-content: space-between;
  }

  .nav3 {
    display: none;
  }

  .nav2 .nav_center {
    display: flex;
    flex-direction: row;
    gap: 50px;
  }

  .nav2 .nav_end {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 50px !important;
  }

  .nav2 a {
    font-size: 28px !important;
    margin-top: 5px !important;
    border: none !important;
    cursor: pointer !important;
    color: #fff !important;
  }

  .logo2 {
    width: 90px;
    height: 40px;
    cursor: pointer;
  }

  .cart2 {
    width: 53px;
    height: 48px;
    cursor: pointer;
  }

  .nav2 a:hover {
    color: black;
  }

  @media screen and (max-width: 1060px) {
    .nav2 {
      gap: 30px;
    }
  }

  @media screen and (max-width: 900px) {
    .nav2 {
      display: none;
    }

    .header2 {
      height: 69px;
    }

    .nav3 {
      padding-top: 13px;
      padding-left: 18px;
      padding-right: 18px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
    }
  }

  /* хедер №2 .................................................*/
</style>
