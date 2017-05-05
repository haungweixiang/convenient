<?php
  include 'bc/mysql/connect.php';

  $Display = $Sql_Query_Select($db, "stores");
  // $D = $Display->fetchAll();

  $db = null;
 ?>
