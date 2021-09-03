<?php
/* MySQLi */
// initial information
$servername = "localhost";
$username = "root";
$password = "123456";

// create connect
$conn = mysqli_connect($servername, $username, $password);
// check connect
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()) . "<br>";
} else {
  echo "Connection successfully! <br>";
}
// create database
$sql = "CREATE DATABASE php_learning_v1_mysqli";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully! <br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}
// close connect
mysqli_close($conn);
echo "Database closed successfully! <br>";

/* PDO */
try {
    $conn = new PDO("mysql:host=$servername;dbname=php_learning_v1_mysqli", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE php_learning_v1_mysql_pdo";
    // 使用 exec() ，因为没有结果返回
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
echo "Database closed successfully! <br>";
?>