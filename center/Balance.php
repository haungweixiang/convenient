<?php
  $ShowBalance = json_decode($Balance_Json, true);
  foreach ($ShowBalance as $key => $value) {
    $Balance = $value["Balance"];//餘額
    $BDatetime = $value["BDatetime"];//餘額日期
    echo "
      <tr>
        <td>(抓取會員名)</td>
        <td>$Balance</td>
        <td>$BDatetime</td>
      </tr>
    ";
  }
?>
