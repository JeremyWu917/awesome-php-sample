<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "php_learning_v1_mysqli";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// 设置参数并执行
$firstname = "Jeremy";
$lastname = "Wu";
$email = "Jeremy.Wu@foxmail.com";
$stmt->execute();

$firstname = "Susie";
$lastname = "Bai";
$email = "Susie.Bai@foxmail.com";
$stmt->execute();

$firstname = "Katherine";
$lastname = "Yang";
$email = "Katherine.Yang@foxmail.com";
$stmt->execute();

echo "New 3 records created successfully";

$stmt->close();
$conn->close();

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "php_learning_v1_mysql_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 预处理 SQL 并绑定参数
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // 插入行
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // 插入其他行
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    // 插入其他行
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "New 3 records created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;

?>