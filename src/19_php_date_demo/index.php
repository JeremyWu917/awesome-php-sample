<?php
  echo "<h2>PHP 获取时间</h2>";
  echo "今天是 " . date("Y/m/d") . "<br>";
  echo "今天是 " . date("Y.m.d") . "<br>";
  echo "今天是 " . date("Y-m-d") . "<br>";
  echo "今天是 " . date("l") . "<br>";
  echo "Powered by Jeremy Wu © 2020-" . date("Y") . " ,All Rights Reserved <br>";
  echo "现在时间是 " . date("h:i:sa") . "<br>";
  date_default_timezone_set("Asia/Shanghai");
  echo "当前时间是 " . date("h:i:sa");
  echo "<hr>";

  echo "<h2>PHP 创建时间</h2>";
  $d=mktime(16, 52, 31, 8, 1, 2021);
  echo "创建日期是: " . date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("10:38pm April 15 2021");
  echo "创建日期是: " . date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("tomorrow");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("next Saturday");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("+3 Months");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $startdate = strtotime("Saturday");
  $enddate = strtotime("+16 weeks",$startdate);

  while ($startdate < $enddate) {
    echo date("M d", $startdate),"<br>";
    $startdate = strtotime("+1 week", $startdate);
  }

  $d1=strtotime("December 31");
  $d2=ceil(($d1-time())/60/60/24);
  echo "距离十二月三十一日还有：" . $d2 ." 天。";

?>