<?php

  $Show_B_C = json_decode($BC_Json, true);//

  foreach ($Show_B_C as $key => $value) {//列出所有曾經訂購過的便當

    $TodayStoreName = $value["TodayStoreName"];//當天店家名
    $SConvenient = $value["SConvenient"];//當天訂購便當
    $SPrice = $value["SPrice"];//便當價位
    $SQuantity = $value["SQuantity"];//數量
    $STotal = $value["STotal"];//總價
    $SDatetimes = $value["SDatetimes"];//訂購日期
    
    echo "
      <tr>
        <td>(抓取會員名)</td>
        <td>$TodayStoreName</td>
        <td>$SConvenient+$SPrice</td>
        <td>$SQuantity</td>
        <td>$STotal</td>
        <td>$SDatetimes</td>
      </tr>
    ";
  }


 ?>
