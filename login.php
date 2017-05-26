<?php

include("bcs/mysql/connect.php");

$e= $_POST["account"];
$cc= $_POST["password"];
$a="SELECT * FROM members";
$b=$db->query($a);
$c=$b->fetchAll();
foreach ($c as  $value) {

  if ($value["MemberAccount"] == $e && $value["MemberPassword"] == $cc )  {
    header('Location: https://www.youtube.com/');
  }else {
    echo "帳號或密碼錯誤";
    echo "2秒後返回登入頁面";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
  }

}







 // foreach ($c as $value) {
 //   if ($value ["MemberPassword"]==$e) {
 //     header('Location: http://mepopedia.com');
 //
 //   } else {
 //
 //   }
 //
 // }

// $w="www";
// $e= $_POST["account"];
// if ($w==$e) {
//   echo "ok";
// }else {
//   echo "string";
// }
// echo $_POST["password"];



 ?>
