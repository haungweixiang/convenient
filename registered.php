<?php session_start(); ?>

<?php
include("mysql.php");

$name = $_POST['Name'];
$account = $_POST['accountnumber'];
$password =$_POST['password'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($name != null && $account != null && $password != null)
{
        //新增資料進資料庫語法
        $sql = "INSERT INTO `members` (MemberName,MemberAccount,MemberPassword) VALUES ('".$name."', '".$account."','$password')";
        if($b=$db->query($sql))

        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}


?>
