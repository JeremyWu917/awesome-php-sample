<?php
  // $con = mysqli_connect("127.0.0.1","php_v1","php_v1");
  // if (!$con)
  // {
  //   die('Could not connect: ' . mysqli_error($GLOBALS[$con]));
  // }
  // // some code
  // echo "连接成功!<br>";
  // mysqli_close($con);
  // echo "断开成功!<br>";

  // MySQLi 连接实例
  $servername = "localhost";
  $username = "root";
  $password = "123456";

  // 创建连接
  $conn = mysqli_connect($servername, $username, $password);

  // 检测连接
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully <br>";
  // 关闭连接
  mysqli_close($conn);

  // PDO 连接实例
  $dbname = "root";
  try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    // 关闭连接
    $conn = null;
?>