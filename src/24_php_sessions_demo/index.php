<?php
  session_start();
  // store session data
  // $_SESSION['views']=1;

  session_start();

  if(isset($_SESSION['views']))
    $_SESSION['views']=$_SESSION['views']+1;

  else
    $_SESSION['views']=1;
  echo "Views=". $_SESSION['views'];

?>

<html>
<body>

<?php
  //retrieve session data
  echo "Pageviews=". $_SESSION['views'];
  session_destroy();
?>

</body>
</html>