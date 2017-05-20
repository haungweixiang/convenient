<?php

  $SelectMembers = "SELECT * FROM members WHERE MemberAccount = 'aa'";//以會員帳號當條件
  $QuMembers = $db->query($SelectMembers);
  $Sho = $QuMembers->fetchAll();

  $Json = json_encode($Sho);

 ?>
