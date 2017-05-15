<?php
// @session_start();
try {
  $username = 'root';
  $password = '12345678';
  $dbname = "convenient";
  $dsn = "mysql:host=localhost;dbname=$dbname";
  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );
    $db = new PDO($dsn, $username, $password, $options);
    // $_SESSION["link"] = $db;
    // var_dump($db);

} catch (Exception $e) {
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("location:./");
}

// $Sql_Query_Select = function($db, $table_name){
//   $Select_Columns = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '".$table_name."'";
//
//   $Select_Table = "SELECT * FROM $table_name";
//   $query = $db->query($Select_Table);
//   return $query;//執行查詢把結果回傳
// };


?>
