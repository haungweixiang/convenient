<?php
include '../bcs/mysql/connect.php';

//新增便當
$insert = function($db, $convenient, $price, $number, $total){

  $Insert_SelectMember = "INSERT INTO `selectmembers`(`SConvenient`, `SPrice`, `SQuantity`, `STotal`, `SM`, `STodayStore`) VALUES ('".$convenient."','".$price."','".$number."','".$total."','a','18')";

  $Query_SelectMember = $db->query($Insert_SelectMember);
  return $Query_SelectMember;
};
//新增便當

if (isset($_POST["submit_IConvenient"]) && empty($_POST["submit_IConvenient"])) {//判斷是否有送出

  $true = isset($_POST["CP"]) && !empty($_POST["CP"]) && //判斷便當有無值與不等於空
          isset($_POST["number"]) && !empty($_POST["number"]) &&//判斷數量有無值與不等於空
          isset($_POST["name"]) && !empty($_POST["name"]);//判斷我是誰有無值與不等於空

  if ($true == true) {

      $convenient = strstr($_POST["CP"],"+", true);//設定true返回找到+之前的字串
      $price = substr(strrchr($_POST["CP"], "+"), 1); // 去除掉'+'這個符號，所以從第一個字元開始擷取到最後
      $number = $_POST["number"];//數量
      $total = $price * $number;//總價

     if(($insert($db, $convenient, $price, $number, $total))){//判斷新增資料有沒有成功
       echo "
        <script>
          alert('訂購成功');
          document.location.href='../';
        </script>
       ";
     }else {
       echo "
        <script>
          alert('訂購失敗');
          document.location.href='../';
        </script>
       ";
     }
  }else {
    echo "其中一個沒輸入";
  }
}

$db = null;
 ?>
