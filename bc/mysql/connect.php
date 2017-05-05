<?php
try {
  $username = 'root';
  $password = '12345678';
  $dbname = "convenient";
  $dsn = "mysql:host=localhost;dbname=$dbname";
  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );
     $db = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
  echo "連接資料庫失敗";
}

  class Sql
  {
    function select($db, $table_name, $number){//$db 連接資料庫; $table_name 資料表名稱; $number 看是要取得全部欄位資料還是,預設的幾筆
      switch ($number) {//number=all 全部欄位 * ; number = 1 特定預設欄位
        case 'all':

          break;

        default:
          # code...
          break;
      }
      switch ($table_name) {
        case 'members':

          $query = $this->Sql_Select($db, $table_name);
          $Show = $query->fetchAll();
          print_r($Show);
          break;

        default:
          # code...
          break;
      }//switch

    }
    function Sql_Select($db, $table_name){//執行查詢把結果回傳
      $Select_Table = "SELECT * FROM $table_name";
      $query = $db->query($Select_Table);
      return $query;
    }

  }



?>
