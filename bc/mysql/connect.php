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
    function select($db, $table_name){//$db 連接資料庫; $table_name 資料表名稱
      switch ($table_name) {
        case 'members':
          
          break;

        default:
          # code...
          break;
      }
      function Sql_Select(){
        $Select_Table = "SELECT * FROM $table_name";
        $query = $db->query($Select_Table);
        return $query;
      }
    }
  }



?>
