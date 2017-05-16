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

} catch (Exception $e) {
  echo $e->getMessage();
  // header("location:./");
}

//顯示本日菜單
  $TodayMenu = function($db){

    $Select_TodayMenu = "SELECT `TodayID`, `TodayStoreName`, `TodayStorePhone` FROM `todaymenu` ORDER BY `TodayID` DESC LIMIT 1";//查詢本日菜單的最後一筆資料
    $Query_TodayMeun = $db->query($Select_TodayMenu);
    $Show = $Query_TodayMeun->fetch();//只截取一筆資料

    return $Show;

};
//顯示本日菜單

//顯示本日店家的資訊
$TodayStoreInformation = function($db, $TodayStoreName){
  $Select_StoreName = "SELECT
                              `StroeDescription`, `StorePic`,
                              `StoreConvenient`, `SCPrice`
                      FROM stores WHERE `StoreName`='".$TodayStoreName."'";//查詢本日菜單的最後一筆資料

  $Query_StoreName = $db->query($Select_StoreName);
  $Show = $Query_StoreName->fetchAll();
  return $Show;
};
//顯示本日店家的資訊

?>
