<?php
  include 'bc/mysql/connect.php';

  // $D = $Display->fetchAll();
  $Sql_Query_Select = function($db, $table_name, $choose){//$db 資料庫連線;$table_name 資料表名稱;$choose 選擇要全部欄位(不輸入或1)或者特定(2)

    switch ($table_name) {
      case 'members':
        if ($choose == "" || $choose == '1') {
          $Select_Table = "SELECT * FROM $table_name";
          $query = querys($db, $Select_Columns);
        }elseif ($choose == '2') {
          $Select_Columns = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '".$table_name."'";
          $query = querys($db, $Select_Columns);
        }
        break;

      default:
        # code...
        break;
    }
    return $query;//執行查詢把結果回傳
  };//$Sql_Query_Select的結束

  function querys($db, $Sql_Select){
    $query = $db->query($Sql_Select);
    return $query;
  }

  $Display = $Sql_Query_Select($db, "members", '2');//查詢特定欄位

  $Displays = $Display->fetchAll();

    foreach ($Displays as $key => $value) {
     $Show[$key] = $value[0];//把特定欄位用以索引
    }

echo $Show[2];//
  // while($Display = $Sql_Query_Select($db, "members", '2')->fetch(PDO::FETCH_ASSOC)){
  //   echo $Display[0];
  // }

// var_dump($Display);
echo "<br/>";

// var_dump($Displays);

// $arrayName = array("0",'1','2');
// echo "<br/>";
//
// var_dump($arrayName);

  $db = null;
 ?>
