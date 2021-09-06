<?php
  $con = mysqli_connect("localhost", "root", "123456", "php_learning_v1_mysqli");
  if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con, "select * from myguests t where t.firstname = 'John' order by t.id desc");

  while($row = mysqli_fetch_array($result)) {
    echo $row['id'] . " " . $row['firstname'] . " " . $row['lastname'] . "<br>";
  }

?>