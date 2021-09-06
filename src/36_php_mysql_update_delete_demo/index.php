<?php
 $con=mysqli_connect("localhost","root","123456","php_learning_v1_mysqli");
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 mysqli_query($con,"UPDATE myguests SET lastname = 'Staphen', firstname = 'Guilbert'
 WHERE firstname = 'John' and lastname = 'Doe' ");

mysqli_query($con,"DELETE FROM myguests WHERE firstname = 'Mary' and lastname = 'Moe' ");


 mysqli_close($con);
 ?>