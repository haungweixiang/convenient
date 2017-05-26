<?php
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

//我是誰...?
$login_member_name = "";//登入的使用者姓名
$required = "required";//必填
$readonly = "readonly";//唯讀

$input = function($name, $status){
  echo "
    <input type='text' class='form-control' id='name' name='name' placeholder='(抓取會員名)' value='".$name."' $status>
  ";
};
//我是誰...?


$Today = $TodayMenu($db);

if ($Today == false) {

  $TodayID = "(ID)";//顯示本日店家名ID
  $TodayStoreName = "(店家名)";//顯示本日店家名
  $TodayStorePhone = "(電話)";//顯示本日店家電話
  $description = "(待說明)";
  $pic = "http://placehold.it/750x500";

}else {

  $TodayID = $Today["TodayID"];//顯示本日店家名ID
  $TodayStoreName = $Today["TodayStoreName"];//顯示本日店家名
  $TodayStorePhone = $Today["TodayStorePhone"];//顯示本日店家電話
  $ShowStoreIn = $TodayStoreInformation($db, $TodayStoreName);//把本日店家的所有資訊全部撈出

  if (empty($ShowStoreIn)) {
    $description = "(待說明)";//說明
    $pic = "http://placehold.it/750x500";
  }else {

    $description = $ShowStoreIn["0"]["StroeDescription"];
    $pic = $ShowStoreIn["0"]["StorePic"];
    if (empty($pic)) {
      $pic = "http://placehold.it/750x500";
    }
  }
}
 ?>
