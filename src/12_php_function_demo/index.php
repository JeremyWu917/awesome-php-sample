<?php
  function sayHi() {
    echo "Hello world!<br>";
  }

  sayhi(); // 调用函数

  function familyName($fname) {
    echo "$fname Zhang.<br>";
  }

  familyName("Li");
  familyName("Hong");
  familyName("Tao");
  familyName("Xiao Mei");
  familyName("Jian");

  function familyName2($fname,$year) {
    echo "$fname Zhang. Born in $year <br>";
  }
  
  familyName2("Li","1975");
  familyName2("Hong","1978");
  familyName2("Tao","1983");

  function setHeight($minheight=50) {
    echo "The height is : $minheight <br>";
  }

  setHeight(350);
  setHeight(); // 将使用默认值 50
  setHeight(135);
  setHeight(80);

  function sum($x,$y) {
    $z=$x+$y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5,10) . "<br>";
  echo "7 + 13 = " . sum(7,13) . "<br>";
  echo "2 + 4 = " . sum(2,4);

?>