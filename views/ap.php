<?
 session_start();
//Пользовательские функции----------------------
 include "$_SERVER[DOCUMENT_ROOT]/includes/functions.php";
// ------------------------------------------------ 
 // ------------------------------------------------
 // Обработка форм таблиц административной панели
  if(!empty($_GET['table'])and(!empty($_GET['num_str'])))
  {
    $table = $_GET['table'];
    $num = $_GET['num_str'];
    
    //Изменить строку в таблице
    if(!empty($_POST[$_GET['table']."_pl_".$num]))
    { 
      $arr_ = columns_table($table);

      if ($arr_ <> null)
      {
        foreach ($arr_ as $key_ => $val_)
        {
          $col_name = $val_['COLUMN_NAME'];
          $col_type = $val_['DATA_TYPE'];
          
          ${$col_name} = htmlspecialchars(trim($_POST[$table."_".$col_name."_".$num]));
          ${$col_name} = urldecode(${$col_name});
          
          if($col_type=="int"){$arr[$col_name] = (int)${$col_name};}else{$arr[$col_name] = ${$col_name};}
        }
        
        if($_GET['count']==$_GET['num_str'])        
        {
          save_str_db_table($table, $arr);
        }
        else
        {
          upd_db_table($table, $arr);
        }
      }
    }

    //Удалить строку в таблице 
    if(!empty($_POST[$_GET['table']."_mn_".$num]))
    {
        $_id = substr(htmlspecialchars(trim($_POST[$table."_id_".$num])), 0, 10);

        //del_str_db_books($_id);
        del_str_db_table($table, (int)$_id); 
    }    
  }

// ------------------------------------------------
   
?>
<!DOCTYPE html>
<html lang="ru">

	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	  <title>Административная панель</title>

	  <link rel="stylesheet" href="/public/css/ap.css" type="text/css">
	  <link rel="stylesheet" href="/public/css/styles.css" type="text/css">
	  <link rel="stylesheet" href="/public/css/modal_dialogs.css" type="text/css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	</head>

	<body>

		<div class="ap">
			
			<div class="ap-caption border">
				<img src="/public/img/ap.png" alt="">			
				<h2>Административная панель</h2>
			</div>

			<div class="ap-block border">
				
				<div class="ap-block-left border">
					<ul>
						<li><a href="/">Главная</a></li>
						<hr>
						<?
						$arr_ = get_data_tables();      
				      if ($arr_ <> null)
				      {
				        	foreach ($arr_ as $key_ => $val_)
			        		{
					          $id = $val_['id'];
					          $name_ru = $val_['name_ru'];
					          
					          $href = "/views/ap.php?num=".$id;
								?>
								<li><a href="<? echo $href; ?>"><? echo $name_ru; ?></a></li>
								<?
							}
						}
						?>
					</ul>
				
				</div>

				<div class="ap-block-center border" style="text-align: left;">

					<?
					include "$_SERVER[DOCUMENT_ROOT]/includes/table.php";
					?>					
					
				</div>

				<!-- <div class="ap-block-right border">
					<ul>
										
					</ul>
				
				</div> -->
				
			</div>

		</div>

		<!-- Модальные окна -->
      <? //include "$_SERVER[DOCUMENT_ROOT]/resources/includes/modal__dialogs.php"?>

		<script src="/public/js/scripts.js"></script>
		 
	  <script> if (window.history.replaceState) {window.history.replaceState(null, null, window.location.href);}</script>
		        
    </body>

</html>
