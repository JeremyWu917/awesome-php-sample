<?php
  $names=array("Jeremy Wu", "Susie Bai", "Katherine Yang");
  echo "Hi there! <br>I'm $names[0], $names[1] and $names[2] is my friends!<br>";

  echo count($names);
  echo "<br>";

  for($i=0;$i<count($names);$i++) {
    echo "$names[$i]<br>";
  }
  echo "<br>";

  $age=array("Bill"=>"63","Steve"=>"56","Elon"=>"47");
  echo "Elon is " . $age['Elon'] . " years old.";

  foreach($age as $x=>$x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  
?>