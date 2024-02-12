
<!-- МОДАЛЬНОЕ ОКНО Форма авторизации --------------------------------->

<div id="open_modal_login" class="modalDialog">
		<div style="border-radius: 5%;  top: 15%">
			<a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

			<div class="modal-caption">

				<a class="" href="#open_modal_login">Авторизация</a>

				<a class="" href="#open_modal_registr">Регистрация</a>

			</div>

			<div class="modal_body">

				<form id="auth-form" action="#open_modal_result" method="post">
					
					<div class="auth-form">
						<label for="log-email">E-mail:</label>
						<input name="log-email" id="log-email" type="text" value="<? echo $_SESSION['log_email']; ?>"required autofocus>
					</div>
						
					<div class="auth-form">
						<label for="log-pass">Пароль:</label>
						<input name="log-pass" id="log-pass" type="password" required>
					</div>

					<div class="auth-form">
						<input name="log-btn" id="log-btn" type="submit" data-n="" class="auth-btn" value="Войти">
					</div>						
						
				</form>

			</div>
	 </div>
</div>

<!-- МОДАЛЬНОЕ ОКНО Форма регистрации --------------------------------->

<div id="open_modal_registr" class="modalDialog">
		<div style="border-radius: 5%; top: 15%">
			<a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

			<div class="modal-caption">

				<a class="" href="#open_modal_login">Авторизация</a>

				<a class="" href="#open_modal_registr">Регистрация</a>

			</div>

			<div class="modal_body">

				<form id="auth-form" action="#open_modal_result" method="post">
					
					<div class="auth-form">
						<label for="reg-name">Имя:</label>
						<input name="reg-name" id="reg-name" type="text" value="<? echo $_SESSION['reg_name']; ?>" required autofocus>
					</div>

					<div class="auth-form">
						<label for="reg-email">E-mail:</label>
						<input name="reg-email" id="reg-email" type="email" value="<? echo $_SESSION['reg_email']; ?>" required>
					</div>
						
					<div class="auth-form">
						<label for="reg-pass">Пароль:</label>
						<input name="reg-pass" id="reg-pass" type="password" required>
					</div>

					<div class="auth-form">
						<label for="reg-pass-rep">Повторить пароль:</label>
						<input name="reg-pass-rep" id="reg-pass-rep" type="password" required>
					</div>

					<div class="auth-form">
						<input name="reg-btn" id="reg-btn" type="submit" class="auth-btn" value="Войти">
					</div>
						
				</form>

			</div>
	 </div>
</div>


<!-- Результат -->
<?
if(!isset($mess)){$mess="";}
if(!isset($link)){$link="";}
?>
<div id="open_modal_result" class="modalDialog">
    <div style="width: 350px; border-radius: 5%;  top: 15%">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body">

        <h4 id="mess"><? echo $mess ?></h4>

        <h4 id="link" style="font-size: 16px; margin-left: auto; margin-right: auto;"><? echo $link; ?></h4>

      </div>
   </div>
</div>

<!-- Нет авторизации -->
<div id="open_modal_result_1" class="modalDialog">
    <div style="width: 350px; border-radius: 5%;  top: 15%">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="display: flex; justify-content: center; flex-wrap: wrap;">

      	<h4 style="padding: 10px 0 10px 0;">Для заказа товара<br>Вам необходимо<br>авторизоваться!</h4>

      	<a style="border: 1px solid #000; margin: 20px 0px; font-weight: bold; font-size: 20px; text-align: center;" href='#open_modal_login'>Авторизация</a>

      	<!-- <a href="#close"><button type="submit" style="margin: 20px 20px; border-radius: 10px; padding: 10px 20px; background-color: #2B363A; color: #fff; font-weight: bold;">Ок</button></a> -->

      </div>
   </div>
</div>

<!-- Вам перезвонят -->
<div id="open_modal_buy" class="modalDialog">
    <div style="width: 350px; border-radius: 5%; top: 15%">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="display: flex; justify-content: center; flex-wrap: wrap;">

      	<h4 style="padding: 10px 0 20px 0;">Спасибо за покупку!<br>Наш менеджер<br>Вам позвонит<br>в течение 2 часов!</h4><br>

      	<a href="#close"><button type="submit" style="margin: 20px 20px; border-radius: 10px; padding: 10px 20px; background-color: #2B363A; color: #fff; font-weight: bold;">Ок</button></a>
				
      </div>
   </div>
</div>

<!-- редактирование	 -->
<div id="open_modal_edit" class="modalDialog">
    <div style="width: 550px; border-radius: 5%;">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="height: 500px;">      	

        <h4 style="margin: 0; padding: 10px;" id="mess">Редактирование карточки товара:</h4>
        <form id="cart-form" action="/" method="post">

        	<label for="card_id" style="width: 20%; font-size: 13px;">Код товара:</label>      		
      		<input name="card_id" id="card_id" type="text" style="width: 20%; height: 35px; margin: 5px 0;" value="" readonly>
      		<label for="card_id" style="width: 60%; font-size: 13px;"></label>

        	<label for="card_name" style="width: 20%; font-size: 13px;">Наименование:</label>      		
      		<input name="card_name" id="card_name" type="text" style="width: 80%; height: 35px; margin: 5px 0;" value="">
      		<label for="card_name" style="width: 0%; font-size: 13px;"></label>

      		<label for="card_author" style="width: 20%; font-size: 13px;">Автор:</label>      		
      		<input name="card_author" id="card_author" type="text" style="width: 80%; height: 35px; margin: 5px 0;" value="" readonly>
      		<label for="card_author" style="width: 0%; font-size: 13px;"></label>

      		<label for="card_price" style="width: 20%; font-size: 13px;">Цена:</label>      		
      		<input name="card_price" id="card_price" type="number" style="width: 20%; height: 35px; margin: 5px 0;" value="">
      		<label for="card_price" style="width: 60%; font-size: 13px;"></label>

      		<label for="card_foto" style="width: 20%; font-size: 13px;">Картинка:</label>      		
      		<input name="card_foto" id="card_foto" type="text" style="width: 60%; height: 35px; margin: 5px 0;" value="">
        	<!-- <input name="card_foto" id="card_foto" type="file" style="width: 60%; height: 35px; margin: 10px 0; padding: 6px 10px 5px 10px; font-size: 13px" value="">     	 -->
        	<label for="card_foto" style="width: 20%; font-size: 13px;"></label>

        	<label for="card_foto" style="width: 100%; font-size: 13px; margin: 7px 0 7px 0;">Описание:</label>
        	<textarea id="card_desс" name="card_desс" autofocus wrap="soft" style="width: 100%; height: 130px; margin: 5px 0;"></textarea>


        	<button type="submit" style="margin: 5px 20px 10px 20px; padding: 7px;">Сохранить</button>

				 </form>
      </div>
   </div>
</div>

<!-- выбор товара -->
<div id="open_modal_mess" class="modalDialog">
    <div style="width: 350px; top: 15%">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="">

        <h4 id="korz_mess"></h4>
        <form id="orders-form" action="/" method="post">      		
      		<input name="id" id="id" width="10" type="hidden" value="0">
      		<span style="padding: 0 7px;">Количество экземпляров:</span>	
					<input name="quan" id="quan" style="width: 50px;" type="number" value="1" required>
					<span style="padding: 0 7px;"> шт.</span>					
					<button type="submit" style="margin: 10px 20px; padding: 7px;">Добавить >></button>
				 </form>       
      </div>

   </div>
</div>

<!-- выбор товара -->
<div id="open_modal_product" class="modalDialog">
    <div style="width: 350px; top: 15%">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="display: flex; justify-content: center; flex-wrap: wrap;">

        <h4>Товар добавлен в карзину!</h4>
        
        <a href="#close"><button type="submit" style="margin: 20px 20px; border-radius: 10px; padding: 10px 20px; background-color: #2B363A; color: #fff; font-weight: bold;">Ок</button></a>
				       
      </div>

   </div>
</div>

<!-- Отмена авторизации -->
<div id="open_modal_cancel_auth" class="modalDialog">
    <div style="width: 350px; top: 15%">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="">
      	<? $url = $_SERVER['REQUEST_URI'];?>
        <h4 id="korz_mess"></h4>
        <form id="cancel-form" action="<? echo $url; ?>" method="post">
        	<?
        
        if(!empty($_SESSION['log_email']))
        {
        	$log = $_SESSION['log_email'];
        	$log_stat = get_data_user_stat($log);
        	$name = get_us_name($log);
        }
        else
        {
        	$log = "";
        	$name = "";
        	$log_stat = 0;
        }
        
        ?>

      		<h4 style="padding: 20px 0 0px 0;">Логин: <? echo $log; ?></h4>

      		<h4 style="padding: 10px 0 10px 0;">Имя: <? echo $name; ?></h4>
      		<br>
      		<?
      		if($log_stat==1)
	        {
	        	?>
	        	<a href='/views/ap.php' style="padding: 10px 0 10px 0; font-size: 20px; font-weight: bold; text-decoration: underline !important;">Административная панель</a>
	        	<?
	        }
      		?>
      		<input id="cancel" name="cancel" type="hidden" value="1">
					<button id="btn_cancel" type="submit" style="margin: 20px 20px; border-radius: 10px; padding: 10px 20px; background-color: #2B363A; color: #fff; font-weight: bold;">Выход</button>
				 </form>
      </div>

   </div>
</div>

<!-- корзина -->
<div id="open_modal_korz" class="modalDialog">
    <div style="width: 550px;">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body">
      	<h4 style="margin: 0;">Корзина покупок</h4>
      	<form id="korz_form" action="/" method="post"> 
      	<?
      	$arr = get_orders();
      	
      	if($arr)
      	{
      		?>
      		<!-- <p>Штучный товар</p> -->
      		
		      <?
		      $n = 0;
		      $itog = 0;
		      $m = count($arr);
		      //print_r($arr);

      		foreach ($arr as $key=>$val)
      		{
      			$id = $val['id'];
    				$num = "num_".$id;
    				$good = "good_".$id;
    				$price = "price_".$id;
    				$quan = "quan_".$id;
    				$cost = "cost_".$id;
    				$del = "del_".$id;

      			if($n == 0)
      			{      				
      			?>
	      			<input id="num_b" name="num_b" type="text" style="width: 8%; margin: 0; padding: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="Код" disabled>
			        <input id="good_b" name="good_b" type="text" style="width: 40%; margin: 0; text-align: left; font-weight: bold; background-color: #d4d4d4;" value="Книга" disabled>
			        <input id="price_b" name="price_b" type="text" style="width: 15%; margin: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="Кол-во" disabled>
			        <input id="quan_b" name="quan_b" type="text" style="width: 15%; margin: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="Цена" disabled>
			        <input id="cost_b" name="cost_b" type="text" style="width: 15%; margin: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="Сумма" disabled>
			        <input id="del_b" name="del_b" type="text" style="width: 7%; margin: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="Del" disabled>
			    	<?
      			}
      			$n++;
      			$cost = (integer)$val['quan']*(integer)$val['price'];
      			$cost_ = number_format($cost, 2, ',', ' ');

      			$itog = $itog + $cost;
      			$itog_ = number_format($itog, 2, ',', ' ');
      			?>      			
	      			<input id="<? echo $num; ?>" name="<? echo $num; ?>" type="text" style="width: 8%; margin: 0; padding: 0; text-align: center;" value="<? echo $id;?>" disabled>
			        <input id="<? echo $good; ?>" name="<? echo $good; ?>" type="text" style="width: 40%; margin: 0; text-align: left;" value="<? echo $val['name'];?>" disabled>
			        <input id="<? echo $price; ?>" name="<? echo $price; ?>" type="text" style="width: 15%; margin: 0; text-align: center; cursor: pointer;" value="<? echo $val['quan'];?>" disabled>
			        <input id="<? echo $quan; ?>" name="<? echo $quan; ?>" type="text" style="width: 15%; margin: 0; text-align: center;" value="<? echo $val['price'];?>" disabled>
			        <input id="<? echo $cost; ?>" name="<? echo $cost; ?>" type="text" style="width: 15%; margin: 0; text-align: center;" value="<? echo $cost_;?>" disabled>
			        <input id="<? echo $del; ?>" name="<? echo $del; ?>" type="text" style="width: 7%; margin: 0; padding: 0;	text-align: center; font-weight: bold; cursor: pointer; border-width: 1px; background-color: #f0f0f0;" onclick="del_(<? echo $id; ?>); $('#<? echo $num; ?>, #<? echo $good; ?>, #<? echo $price; ?>, #<? echo $quan; ?>, #<? echo $cost; ?>, #<? echo $del; ?>').remove();" value="-" readonly>
		  			
		  			<?		      			      
		      	if($n == $m)
      			{
      			?>
	      			<input id="num_a" name="num_a" type="text" style="width: 78%; margin: 0; text-align: left; font-weight: bold; background-color: #d4d4d4;" value="ИТОГО:" disabled>
			        <input id="cost_a" name="cost_a" type="text" style="width: 15%; margin: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="<? echo $itog_;?>" disabled>
			        <input id="del_a" name="del_a" type="text" style="width: 7%; margin: 0; text-align: center; font-weight: bold; background-color: #d4d4d4;" value="" disabled>
			    	<?
      			}
      		}
      		?>
      		<div style="text-align: left; padding: 10px;">
	      		<button id="pay" name="pay" type="submit">Оплатить</button>
	      	</div>
      	<?
      	}
      	else
      	{
      	?>
      	<h2>Ваша корзина пуста!</h2>	
      	<?
      	}	
      	?>
      	
        	
        </form>

      </div>

   </div>
</div>

<!-- МОДАЛЬНОЕ ОКНО Форма редактирования текста статьи -------->
<!-- <div id="open_modal_mess" class="modalDialog">
    <div style="width: 350px;">
      <a href="#close" id="log_close" title="Закрыть" class="close"><span>x</span></a>

      <div class="modal_body" style="">

        <h4 id="korz_mess"></h4>
        <form id="auth-form" action="/" method="post">      		
      		<input name="card_id" id="card_id" width="10" type="hidden" value="0">
      		<span style="padding: 0 7px;">Количество экземпляров:</span>	
					<input name="quan" id="quan" style="width: 50px;" type="number" value="1" required>
					<span style="padding: 0 7px;"> шт.</span>					
					<button type="submit" style="margin: 10px 20px; padding: 7px;">Добавить >></button>
				 </form>       
      </div>

   </div>
</div> -->