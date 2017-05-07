<?php
  include 'bc/mysql/connect.php';

  // $D = $Display->fetchAll();
  $Sql_Query_Select = function($db, $table_name, $choose){//$db 資料庫連線;$table_name 資料表名稱;$choose 選擇要全部欄位(不輸入或1)或者特定(2)

    switch ($table_name) {
      case 'members':
          # code...
        break;

      default:
        # code...
        break;
    }


    if ($choose == "" || $choose == '1') {
      $Select_Table = "SELECT * FROM $table_name";
      $query = querys($db, $Select_Columns);
    }elseif ($choose == '2') {
      $Select_Columns = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '".$table_name."'";
      $query = querys($db, $Select_Columns);
    }
    return $query;//執行查詢把結果回傳
  };//$Sql_Query_Select的結束

  function querys($db, $Sql_Select){
    $query = $db->query($Sql_Select);
    return $query;
  }

$Display = $Sql_Query_Select($db, "stores");
  foreach ($Display as $key => $value) {
    echo $value["COLUMN_NAME"];
  }

  $db = null;
 ?>
