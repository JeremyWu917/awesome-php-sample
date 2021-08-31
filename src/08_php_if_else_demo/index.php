<?php
$t = date("H");

if ($t <= "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}


echo "<br>";

$s = 91;

if ($s <= 60) {
  echo "Level D";
} elseif ($s <= 80) {
  echo "Level C";
} elseif ($s <= 90) {
  echo "Level B";
} else {
  echo "Level A";
}


?>