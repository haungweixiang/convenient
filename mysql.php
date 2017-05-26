<?php
try {

$username ='root';
$password ='90218140';
$dbname='convenient';
$dsn="mysql:host=localhost;dbname=$dbname";
$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES  utf8',

);

$db= new PDO ($dsn,$username,$password,$options);
} catch (Exception $e) {
echo "連線失敗";
}


// $sql = "DELETE FROM `members` WHERE MemberID=4 ";
// $new ="INSERT INTO `registered `(registered_name,registered_accountnumber,registered_password) VALUES ('1','2','3')";
// $a=$db->query($new);

// if ($new) {
// echo "移除成功";
// }else {
//   echo "失敗";
// }

 ?>
