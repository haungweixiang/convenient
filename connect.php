<?php
  try {
    $username = 'root';
    $password = '12345678';
    $dbname="test";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $options = array(
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
       $db = new PDO($dsn, $username, $password, $options);
  } catch (Exception $e) {

  }



?>
