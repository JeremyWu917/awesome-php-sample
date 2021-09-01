<?php
  $cars = array(
    array("Audio", 22, 18),
    array("BWM", 20, 12),
    array("Saab", 30, 19),
    array("Land Rover", 100, 2)
  );
  // 测试输出
  echo $cars[0][0] . "-" . $cars[0][1] . "-" . $cars[0][2];
  // 循环遍历
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>". $cars[$row][$col] ."</li>";
    }
    echo "</ul>";
  }
?>