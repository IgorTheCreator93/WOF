		<?
		if(!empty($_GET['num'])){$num = $_GET['num'];}else{$num = 2;}

		//------------------------------------------------------
		$arr = get_data_table($num);    
    if ($arr <> null)
    {
      	foreach ($arr as $key => $val)
    		{
          $id = $val['id'];
          $table = $val['name_en'];
          $table_ru = $val['name_ru'];
        }
     }
     else
     {
     		$id = "";
        $table = "";
        $table_ru = "";
     }		
		?>

		<div class="ap-block-center-cap border">
			<h4>Таблицa: <? echo $table_ru." (".$table.")"; ?></h4>
		</div>

		<div class="ap-block-center-tab border">	

			<?
			$arr_1 = array();
			$arr_2 = array();
			$arr_3 = array();
			$arr_4 = array();

			$arr_ = columns_table($table);
			
			if ($arr_ <> null)
	    {
	        foreach ($arr_ as $key_ => $val_)
	        {
	          $arr_1[$val_['COLUMN_NAME']] = explode(":", $val_['COLUMN_COMMENT'])[0];
	          if($key_==0){$arr_4[$val_['COLUMN_NAME']] = 0;}else{$arr_4[$val_['COLUMN_NAME']] = "";}
	        }                                   
	    }	    
	    
			$arr_2 = get_db_table_all($table);
      
			if($arr_2 <> null){$arr_3 = array_merge([$arr_1], $arr_2);}else{$arr_3 = $arr_1;}
			$arr = array_merge($arr_3, [$arr_4]);
			
			$count = count($arr);
			if($arr <> null)
			{ 
	   		$n = 1;
	   		$hl_0 = "";
	       foreach ($arr as $key=>$val)
	       {
	         	$form_id = "form_".$table."_".$n;
	          $action="/views/ap.php?num=".$num."&table=".$table."&num_str=".$n."&count=".$count;

	          $width = "w-5";
	          ?>
					<form class="border" id="<? echo $form_id; ?>" action="<? echo $action; ?>" method="post">
						
							<div class="form-block">
								<?
								if($arr_<> null)
								{
									foreach ($arr_ as $key_=>$val_)
		       				{
		       					//print_r($arr_);
		       					$col_name = $val_['COLUMN_NAME'];//Получем название колонки таблицы (англ.)
		       					$col_com_ = $val_['COLUMN_COMMENT'];//Получаем комментарий к колонке таблицы (рус.)
				       			$arr_col_com = explode(":", $col_com_);//Преобразуем комментарий в массив (разделитель - ":") 
				       			$count_col_com = count($arr_col_com);//Определяем количество элементов в массиве
				       			$col_com = $arr_col_com[0];//Получаем первый элемент массива (русское название колонки)
				       			$value = "";

				       			if(!empty($arr_col_com[1])){$wid_col = $arr_col_com[1]; $width = "w-".$wid_col;}//Получаем второй элемент массива (ширина колонки)
				       			if(!empty($arr_col_com[2])){$tab_link = $arr_col_com[2];}//Получаем третий элемент массива (ссылка на таблицу)
				       		
				       			if (isset($val[$col_name])){$col_name_ = $val[$col_name];}else{break;}
				       			
			       				//Запоминаем значение колонки id в переменную $_id
			       				if($col_name=="id"){$_id = $col_name_;}
				       			//Первая строка таблицы содержит заголовки, а остальные строки (кроме 1) содержат значения таблицы
				       			if($n==1){$value = $col_com; $class = "fz hl_1 pe";}else{$value = urldecode(htmlspecialchars(trim($col_name_))); $class = "fz";}
					       		
					       		//Вся колонка "id" не доступна для редактирования
				       			if(($col_name=="id")and($n<>1)){$class = "fz hl_2 pe";}
				       			//Последняя строка //Колонка "id" в последней строке (с номером $count) выглядит, как "Нов. >" (вместо цифр) и без обводки. Все остальные колонки с обводкой.
				       			if($n==$count){if($col_name=="id"){$value = "Нов."; $class = "fz hl_2 pe";}else{$class = "fz hl_0";}}
										?>
										<input name="<? echo $table."_".$col_name."_".$n; ?>" id="<? echo $table."_".$col_name."_".$n; ?>" type="text" class="<? echo $width; ?> <? echo $class; ?>" value="<? echo $value; ?>">
										<?
									}
								}
								
								if($n==1)
			          {
			          	$class = "w-5 fz hl_1 pe";
			          	$type="submit";
			          	$val_pl = "Сохр.";
			          	$val_mn = "Уд.";
			          }
			          else
			          {
			          	$class = "w-5 fz hl_1";
			          	$type="submit";
			          	$val_pl = "+";
			          	$val_mn = "-";
			          }

			          if(!isset($val[$col_name])){echo "Таблица не заполнена!"; break;}
			          ?>
								<input name="<? echo $table."_pl_".$n; ?>" id="<? echo $table."_pl_".$n; ?>" type="submit" class="<? echo $class; ?>" data-id="<? echo $_id; ?>" data-zn="plus" value="<? echo $val_pl; ?>" alt="Сохранить строку">
								<input name="<? echo $table."_mn_".$n; ?>" id="<? echo $table."_mn_".$n; ?>" type="submit" class="<? echo $class; ?>" data-id="<? echo $_id; ?>" data-zn="minus" value="<? echo $val_mn; ?>" alt="Удалить строку">
								
							</div>

					</form>
				 <?
							
				 $n++;
					}
				}
			?>
		</div>