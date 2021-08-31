<?php 
  $x=17; 
  $y=8;
  echo ($x + $y); // 输出 25
  echo "<br>";
  echo ($x - $y); // 输出 9
  echo "<br>";
  echo ($x * $y); // 输出 136
  echo "<br>";
  echo ($x / $y); // 输出 2.125
  echo "<br>";
  echo ($x % $y); // 输出 1
  echo "<br>";

  $x=17; 
  echo $x; // 输出 17
  echo "<br>";
  $y=17; 
  $y += 8;
  echo $y; // 输出 25
  echo "<br>";
  $z=17;
  $z -= 8;
  echo $z; // 输出 9
  echo "<br>";
  $i=17;
  $i *= 8;
  echo $i; // 输出 136
  echo "<br>";
  $j=17;
  $j /= 8;
  echo $j; // 输出 2.125
  echo "<br>";
  $k=17;
  $k %= 8;
  echo $k; // 输出 1

  echo "<br>";
  $a = "Hello";
  $b = $a . " world!";
  echo $b; // 输出 Hello world!
  echo "<br>";
  $x="Hello";
  $x .= " world!";
  echo $x; // 输出 Hello world!

  echo "<br>";
  $x=17; 
  echo ++$x; // 输出 18
  echo "<br>";
  $y=17; 
  echo $y++; // 输出 17
  echo "<br>";
  $z=17;
  echo --$z; // 输出 16
  echo "<br>";
  $i=17;
  echo $i--; // 输出 17

  $x=17; 
  $y="17";
  echo "<br>";
  var_dump($x == $y);
  echo "<br>";
  var_dump($x === $y);
  echo "<br>";
  var_dump($x != $y);
  echo "<br>";
  var_dump($x !== $y);
  echo "<br>";

  $a=17;
  $b=8;

  var_dump($a > $b);
  echo "<br>";
  var_dump($a < $b);
  echo "<br>";
  $x = array("a" => "apple", "b" => "banana"); 
  $y = array("c" => "orange", "d" => "peach"); 
  $z = $x + $y; // $x 与 $y 的联合
  var_dump($z);
  echo "<br>";
  var_dump($x == $y);
  echo "<br>";
  var_dump($x === $y);
  echo "<br>";
  var_dump($x != $y);
  echo "<br>";
  var_dump($x <> $y);
  echo "<br>";
  var_dump($x !== $y);
  echo "<br>";


?>