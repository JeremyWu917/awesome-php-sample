<?php 
  // Set a cookie
  setcookie("user", "Jeremy Wu", time()+3600);

  // Print a cookie
  echo $_COOKIE["user"] . "<br>";

  // A way to view all cookies
  print_r($_COOKIE);

  if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
  else
    echo "Welcome guest!<br />";

  // Delete cookie
  // set the expiration date to one hour ago
  setcookie("user", "", time()-3600);
?>
