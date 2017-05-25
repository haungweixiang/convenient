<?php
$Deposit = function($db){
  $SelectDeposit = "
                    SELECT
                          `members`.`MemberName`, `deposit`.`Deposit`, `deposit`.`DDatetime`
                    FROM
                          `deposit`,`members`
                    WHERE
                          `deposit`.`MemberID` = `members`.`MemberID`
                    AND
                          `deposit`.`MemberID`= '1'
                    ";//以會員帳號當條件
  $QuDeposit = $db->query($SelectDeposit);
  $Show = $QuDeposit->fetchAll();
  return $Show;
};//存款金額

$Before_Convenient = function($db){
  $SelectBC = "
                SELECT
                	todaymenu.TodayStoreName, selectmembers.SConvenient, selectmembers.SPrice, selectmembers.SQuantity, selectmembers.STotal, selectmembers.SDatetimes
                FROM
                	`todaymenu`,selectmembers
                WHERE
                	selectmembers.SM = '1' AND STodayStore=TodayID
              ";
  $QuBC = $db->query($SelectBC);
  $Show = $QuBC->fetchAll();
  return $Show;
};//查詢曾經訂購過的便當，有會員登入時，以ID下去查詢

$Balance = function($db){

  $SelectBalance = "SELECT Balance, BDatetime FROM `balance` WHERE MemberID = '1'";
  $QuBalance = $db->query($SelectBalance);
  $Show = $QuBalance->fetchAll();
  return $Show;

};//以會員ID為條件，搜尋會員所剩餘額

if ($_SERVER['REQUEST_URI'] == "/convenient/center/SqlCenterApi.php") {//判斷網址，此API是被引入還是直接連入
  // echo '$_SERVER[PHP_SELF]='.$_SERVER["PHP_SELF"]."<br/>";
  // echo '$_SERVER[REUQEST_URI]='.$_SERVER['REQUEST_URI']."<br/>";
  include '../bcs/mysql/connect.php';
  $SelectDeposit = $Deposit($db);//存款金額
  $SelectBC = $Before_Convenient($db);//查詢曾經訂購過的便當
  $SelectBalance = $Balance($db);//查尋餘額

  echo "存款：<br/>";
  echo $Deposit_Json = json_encode($SelectDeposit);//存款Json，並顯示
  echo "<br/>曾經訂購便當<br/>";
  echo($BC_Json = json_encode($SelectBC));//曾經訂購的便當Json，並顯示
  echo "<br/>餘額<br/>";
  echo($Balance_Json = json_encode($SelectBalance));//餘額的Json，並顯示

}else {
  // echo '$_SERVER[PHP_SELF]='.$_SERVER["PHP_SELF"]."<br/>";
  // echo '$_SERVER[REUQEST_URI]='.$_SERVER['REQUEST_URI']."<br/>";

  include 'bcs/mysql/connect.php';
  $SelectDeposit = $Deposit($db);//存款金額
  $SelectBC = $Before_Convenient($db);//查詢曾經訂購過的便當
  $SelectBalance = $Balance($db);//查尋餘額

  $Deposit_Json = json_encode($SelectDeposit);//存款Json
  $BC_Json = json_encode($SelectBC);//曾經訂購的便當Json
  $Balance_Json = json_encode($SelectBalance);//餘額的Json
}


 ?>
