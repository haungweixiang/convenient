<?php
$Show = function($db){
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
  $QuDeposit = $db->query($SelectMembers);
  $Show = $QuDeposit->fetchAll();
  return $Show;
};

if ($_SERVER["PHP_SELF"]=="/convenient/center/SqlCenterApi.php") {

  include '../bcs/mysql/connect.php';


  print_r($Json = json_encode($Sho));

}else {

  include 'bcs/mysql/connect.php';
  
  $Json = json_encode($Sho);
}
"
SELECT
	todaymenu.TodayStoreName,selectmembers.SConvenient,selectmembers.SPrice, balance.Balance
FROM
	`todaymenu`,selectmembers,balance
WHERE
	selectmembers.SM='1' AND STodayStore=TodayID AND selectmembers.SM=balance.MemberID
  ";//在曾經訂購過的便當使用


 ?>
