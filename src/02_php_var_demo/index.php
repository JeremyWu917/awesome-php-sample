<?php
  // $x=5;
  // $y=6;
  // $z=$x+$y;
  // echo $z;

  // $x=5; // 全局作用域
  // $y=10;
  // function myTest() {
  //   global $x;
  //   $y=10; // 局部作用域
  //   echo "<p>测试函数内部的变量：</p>";
  //   echo "变量 x 是：$x";
  //   echo "<br>";
  //   echo "变量 y 是：$y";
  // } 

  // myTest();

  // echo "<p>测试函数之外的变量：</p>";
  // echo "变量 x 是：$x";
  // echo "<br>";
  // echo "变量 y 是：$y <br>";
  // echo $GLOBALS['x'] + $GLOBALS['y'];


  function myTest1() {
    static $x=0;
    echo $x;
    $x++;
  }

  myTest1();
  myTest1();
  myTest1();

?>