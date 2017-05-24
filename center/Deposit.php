<?php
  $ShowDeposit = json_decode($Deposit_Json, true);
  foreach ($ShowDeposit as $key => $value) {

    // $MN = $value['MemberName'];//會員名
    $MD = $value['Deposit'];//存款金額
    $MMD = $value['DDatetime'];//存款日期

    if (isset($MD) && $MD!=0) {
      echo "
      <tr>
      <td>(抓取會員名)</td>
      <td>".$MD."</td>
      <td>".$MMD."</td>
      </tr>
      ";
    }
  }
 ?>
