<?php
  $con = mysqli_connect("127.0.0.1","php_v1","php_v1");
  if (!$con)
  {
    die('Could not connect: ' . mysqli_error($GLOBALS[$con]));
  }
  // some code
  echo "连接成功!<br>";
  mysqli_close($con);
  echo "断开成功!<br>";
?>