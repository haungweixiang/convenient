<?php
  $Show = json_decode($Json, true);
  foreach ($Show as $key => $value) {

    $MN = $value['MemberName'];//會員名
    $MD = $value['MemberDeposit'];//存款金額
    $MMD = $value['MDDatetime'];//存款日期

    if (isset($MD) && $MD!=0) {
      echo "
      <tr>
      <td>".$MN."</td>
      <td>".$MD."</td>
      <td>".$MMD."</td>
      </tr>
      ";
    }
  }
 ?>
