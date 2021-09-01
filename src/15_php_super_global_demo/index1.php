<?php 
  $x = 75; 
  $y = 25;
  
  function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
  }
  
  addition(); 
  echo $z; 

  echo $_SERVER['PHP_SELF']; // 相对位置
  echo "<br>";
  echo $_SERVER['SERVER_NAME']; // 服务器名称
  echo "<br>";
  echo $_SERVER['HTTP_HOST']; // 服务器地址
  echo "<br>";
  echo $_SERVER['HTTP_REFERER']; 
  echo "<br>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_NAME'];
  echo "<br>";
  $name = $_REQUEST['fname']; 
  echo $name; 
?>