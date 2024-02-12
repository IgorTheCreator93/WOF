<?

function get_db_flower($id, $sort)
{
	include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";

  $ob = "popular";
  $nap_ = "DESC";
  if($sort==1){$ob = "popular"; $nap_ = "DESC"; }
  if($sort==2){$ob = "price"; $nap_ = "DESC";}
  if($sort==3){$ob = "price"; $nap_ = "ASC";}
  if($sort==4){$ob = "date"; $nap_ = "ASC";}

	if ($id == 0)
	 {
		$sql =  "SELECT * FROM `flower` ORDER BY $ob $nap_";
		$query = $db->prepare($sql);
		$query->execute([]);
		$arr = $query->fetchAll(PDO::FETCH_ASSOC); //многомерный массив)

		if ($arr)
		{
			return $arr;
		}      
	}
	else
	{
		$sql =  "SELECT * FROM `flower` WHERE `category` = ? ORDER BY $ob $nap_";
		$query = $db->prepare($sql);
		$query->execute([(integer)$id]);
		$arr = $query->fetchAll(PDO::FETCH_ASSOC); //многомерный массив)

		if ($arr)
		{
			return $arr;
		} 
		else
		{
			return null;
		} 
	}
    
}
function get_db_flower_card($id)
{
	include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";

	$sql =  "SELECT * FROM `flower` WHERE `id` = ?";
		$query = $db->prepare($sql);
		$query->execute([(integer)$id]);
		$arr = $query->fetch(PDO::FETCH_ASSOC);

		if ($arr)
		{
			return $arr;
		} 
		else
		{
			return null;
		} 
}
//-----------------------------------------------------------------------
  //-----------------------------------------------------------------------
  function get_db_table_all($table)//
  {
    include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";

    if(!empty($table))
    {
      $sql =  "SELECT * FROM ".$table." ORDER BY `id`";

      $query = $db->prepare($sql);    
      $query->execute([]);
      $arr = $query->fetchAll(PDO::FETCH_ASSOC);//многомерный массив)
      
      if($arr)
      {
        return $arr;
      }
      else
      {
        return null;
      }
    }
    else
    {
      return null;
    }
  }
  //----------------------------------------  
  //----------------------------------------
  function save_str_db_table($table, $arr) //Создадим новую строку таблицы $table и сохраним в неё данные ($arr - массив)
  {
    array_shift($arr);//удаляем первый элемент массива (id) с перестройкой индексов (нумерация элементов от нуля)
    
    if((!empty($table))and(!in_array("", $arr)))
    {
      include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
      
      $in = "INSERT INTO `".$table."` (";//Начальные значения фрагмента строки запроса ($sql)
      $va = " VALUES (";//Начальные значения фрагмента строки запроса ($sql)
      $i = 0;
      foreach ($arr as $key => $val)
      {
        $in = $in."`".$key."`, ";//формируем фрагмент строки запроса ($sql)
        $va = $va."?, ";//формируем фрагмент строки запроса ($sql)
        
        //if (is_numeric($val)or(empty($val))){$ex[$i] = intval($val);}else{$ex[$i] = $val;}//цифровым и пустым значениям присваиваем целочисленный тип (intval) 
        $ex[$i] = $val;
        $i++;//Счётчик
      }
      
      $in = substr($in, 0, -2).")";//удаляем из строки последние 2 символа (запятая и пробел)
      $va = substr($va, 0, -2).")";//удаляем из строки последние 2 символа (запятая и пробел)
      
      //ALTER TABLE `таблица` AUTO_INCREMENT = 0;

      $sql = $in.$va; //Сцепляем между собой фрагменты строки запроса ($sql)
      $query = $db->prepare($sql);
      $query->execute($ex);//Подставляем значения массива (параметры) в запрос 
    }
  }
  //-----------------------------------------------------------------------
  function upd_db_table($table, $arr) //Изменим данные ($arr - массив) таблицы $table по конкретному id
  {
    include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";

    if((!empty($table))and(!in_array("", $arr)))//Если $table - не пустое значение и $arr - не пустой массив, тогда...
    {
      include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";//$_SERVER[DOCUMENT_ROOT] - директория корня сайта
      
      $upd = "UPDATE `".$table."` ";//Начальные значения 1 фрагмента строки запроса ($sql)
      $set = "SET ";//фНачальные значения 2 фрагмента строки запроса ($sql)
      $i = 0;
      $key_0 = "";
      foreach ($arr as $key => $val)
      {
        if($i == 0){$key_0 = $key;}else{$set = $set."`".$key."` = ?, ";} //если 1 элемент массива, то запоминаем его ключ (id), иначе формируем 2 фрагмент строки запроса ($sql) без id, так как id на понадобится в конце (в условии)
        
        //if (is_numeric($val)or(empty($val))){$ex[$i] = intval($val);}else{$ex[$i] = $val;}//цифровым и пустым значениям присваиваем целочисленный тип (intval) 
        $ex[$i] = $val;
        $i++;//Счётчик
      }

      $whe = " WHERE `".$key_0."` = ?";//формируем 3 фрагмент строки запроса ($sql)

      $set = substr($set, 0, -2);//удаляем из строки последние 2 символа (запятая и пробел)
      
      $sql = $upd.$set.$whe; //Сцепляем между собой фрагменты строки запроса ($sql)
      
      $id = $ex[0];//Запоминаем первый элемент массива (id)
      array_shift($ex);//Удаляем первый элемент (id) из массива с перестройкой индексов (нумерация элементов от нуля)
      array_push($ex, $id);//Добавляем сохранённое значение (id) в конец массива $ex
      //var_dump($ex);     
      $query = $db->prepare($sql);
      $query->execute($ex);//Подставляем значения массива (параметры) в запрос      
    }
  }
  //-----------------------------------------------------------------------
  function del_str_db_table($table, $_id) //Удалим строку таблицы $table по конкретному $_id 
  {
    include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";

    $sql = "DELETE FROM `".$table."` WHERE id = ?";
    $query = $db->prepare($sql);
    $query->execute([(integer)$_id]);
  }
  //-----------------------------------------------------------------------
  //-----------------------------------------------------------------------
  function columns_table($table)
  {
    $db = new PDO('mysql:host=localhost;dbname=INFORMATION_SCHEMA', 'root', '') or die('Ошибка соединения с БД');
    
    $sql =  "
    SELECT `COLUMN_NAME`, `COLUMN_COMMENT`, `DATA_TYPE`, `CHARACTER_MAXIMUM_LENGTH`
    FROM `columns`
    WHERE `table_SCHEMA` = ? and `TABLE_NAME` = ?
    ORDER BY `ORDINAL_POSITION`
    ";
    
    $query = $db->prepare($sql);
    $query->execute(["flowers", $table]);
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
    if($arr)
    {
      return $arr;
    }
    else
    {
      return null;
    }
  }

  //-----------------------------------------------------------------------

  function get_data_tables()
  {
    include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
    
    $sql =  "
    SELECT * FROM `tables` ORDER BY `sort`
    ";
    
    $query = $db->prepare($sql);
    $query->execute([]);
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if($arr)
    {
      return $arr;
    }
    else
    {
      return null;
    }
  }

  //-----------------------------------------------------------------------

  function get_data_table($id)
  {
    include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
    
    $sql =  "
    SELECT * FROM `tables` WHERE `id`= ?
    ";
    
    $query = $db->prepare($sql);
    $query->execute([$id]);
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if($arr)
    {
      return $arr;
    }
    else
    {
      return null;
    }
  }
//-----------------------------------------------------------------------
function save_order($flower_id, $quan)//
{
  include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
  $date = date('Y.m.d', time() + 3600);
  echo $flower_id ."|". $quan;
  $sql = "
  SELECT `quan`
  FROM `orders`
  WHERE `date` = ? and `flower_id` = ?
  ";        
  $query = $db->prepare($sql);
  $query->execute([$date, (integer)$flower_id]);
  $arr = $query->fetch(PDO::FETCH_ASSOC);//
  if($arr)
  {    
    $quan = $arr['quan'] + $quan;
    $sql = "
    UPDATE `orders`
    SET `quan`= ?
    WHERE `flower_id` = ?
    ";

    $query = $db->prepare($sql);
    $query->execute([(float)$quan, (integer)$flower_id]);
    return $quan;
  }
  else
  { 
    $price = get_price($flower_id);
    $cost = $quan * $price;

    $sql = "
    INSERT INTO `orders`(`date`, `flower_id`, `quan`, `cost`)
    VALUES(?, ?, ?, ?)";
    $query = $db->prepare($sql);
    $query->execute([$date, (integer)$flower_id, (float)$quan, (float)$cost]);

    return 1;
  } 
}
//-------------------------------------------------------------
function get_price($id)//
{
  include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
  
  $sql = "
  SELECT `price`
  FROM `flower`
  WHERE `id` = ?
  ";
  $query = $db->prepare($sql);
  $query->execute([(integer)$id]);
  $arr = $query->fetch(PDO::FETCH_ASSOC);//
  if($arr)
  {
    return $price = $arr['price'];
  }
  else
  {
    return $price = 0;
  }
}
// ----------------------------------------------------------
function get_orders()//
{
  include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
    
  $sql = "
  SELECT `flower`.`name`, `flower`.`price`, `orders`.`id`, `orders`.`quan`, `orders`.`cost`, `flower`.`img`
  FROM `orders`, `flower` 
  WHERE `orders`.`payment` = ? and `flower`.`id` = `orders`.`flower_id`
  ";        
  $query = $db->prepare($sql);
  $query->execute([(integer)0]);
  $arr = $query->fetchAll(PDO::FETCH_ASSOC);//
  if($arr)
  {    
    return $arr;
  }
  else
  {
    return null;
  }
}

// ----------------------------------------------------------
function del_order($id)//
{
  include "$_SERVER[DOCUMENT_ROOT]/includes/db.php";
      
  $sql = "
    DELETE FROM `orders`
    WHERE `id` = ?
    ";
    $query = $db->prepare($sql);
    $query->execute([(integer)$id]);
}  

// ----------------------------------------------------------


?>
